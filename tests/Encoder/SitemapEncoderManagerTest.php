<?php


namespace Apperclass\SitemapBuilder\Tests\Tests\Encoder;


use Apperclass\SitemapBuilder\Encoder\SitemapEncoderManager;
use Apperclass\SitemapBuilder\Tests\DataProvider\SitemapFactory;

class SitemapEncoderManagerTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SitemapEncoderManager
     */
    protected $encoderManager;

    public function setUp()
    {
        $this->encoderManager = new SitemapEncoderManager();
    }

    public function testAddSitemapEncoder()
    {
        $this->encoderManager->addSitemapEncoder($this->getSitemapEncoderMock());

        $this->assertTrue($this->encoderManager->supportsFormat('xml'));
    }

    public function testAddSitemapEncoderThrowsExceptionIfEncoderForAFormatIsAlreadyInTheStack()
    {

        $this->encoderManager->addSitemapEncoder($this->getSitemapEncoderMock());

        try{
            $this->encoderManager->addSitemapEncoder($this->getSitemapEncoderMock());
        }catch(\Exception $e) {
            $this->assertNotNull($e);
        }
    }

    public function testFindEncoderByFormatNotFound()
    {
        $this->assertNull($this->encoderManager->findEncoderByFormat('xml'));
    }

    public function testFindEncoderByFormatFound()
    {
        $this->encoderManager->addSitemapEncoder($this->getSitemapEncoderMock());
        $this->assertInstanceOf('Apperclass\SitemapBuilder\Encoder\SitemapEncoderInterface', $this->encoderManager->findEncoderByFormat('xml'));
    }

    public function testEncode()
    {
        $this->encoderManager->addSitemapEncoder($this->getSitemapEncoderMock());
        $string = $this->encoderManager->encode(SitemapFactory::createSitemap(), 'xml');

        $this->assertEquals('foo', $string);
    }

    public function testEncodeThrowsExceptionIfFormatIsNotSupported()
    {
        $this->encoderManager->addSitemapEncoder($this->getSitemapEncoderMock());

        try{
            $this->encoderManager->encode(SitemapFactory::createSitemap(), 'foo');
        }catch(\Exception $e) {
            $this->assertNotNull($e);
        }
    }

    protected function getSitemapEncoderMock()
    {
        $encoder = $this->getMockBuilder('Apperclass\SitemapBuilder\Encoder\SitemapEncoderInterface')
            ->disableOriginalConstructor()
            ->getMock();

        $encoder->method('getFormat')->willReturn('xml');
        $encoder->method('encode')->willReturn('foo');

        return $encoder;
    }
} 