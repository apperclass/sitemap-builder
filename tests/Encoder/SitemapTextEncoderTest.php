<?php

namespace Apperclass\SitemapBuilder\Tests;

use Apperclass\SitemapBuilder\Encoder\SitemapTextEncoder;
use Apperclass\SitemapBuilder\Tests\DataProvider\SitemapFactory;

class SitemapTextEncoderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SitemapTextEncoder
     */
    protected $encoder;

    public function setUp()
    {
        $this->encoder = new SitemapTextEncoder();
    }

    public function testEncode()
    {
        $sitemap    = SitemapFactory::createSitemap();
        $google     = SitemapFactory::createSitemapUrl();
        $apperclass = SitemapFactory::createSitemapUrl();

        $google->setLoc('http://www.google.it');
        $apperclass->setLoc('http://www.apperclass.com');

        $sitemap->addSitemapUrl($google);
        $sitemap->addSitemapUrl($apperclass);

        $string = $this->encoder->encode($sitemap);

        $expected = "http://www.google.it\nhttp://www.apperclass.com";
        $this->assertEquals($expected, $string);
    }

    public function testGetFormat()
    {
        $this->assertInternalType('string', $this->encoder->getFormat());
    }
}