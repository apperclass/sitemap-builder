<?php

namespace Apperclass\SitemapBuilder\Tests\Encoder;

use Apperclass\SitemapBuilder\Encoder\SitemapXmlEncoder;
use Apperclass\SitemapBuilder\Tests\DataProvider\SitemapFactory;

class SitemapXmlEncoderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var SitemapXmlEncoder
     */
    protected $encoder;

    public function setUp()
    {
        $this->encoder = new SitemapXmlEncoder();
    }

    /**
     * @dataProvider sitemapProvider
     */
    public function testEncode($sitemap)
    {
        $xml = $this->encoder->encode($sitemap);
        $result = simplexml_load_string($xml);

        $this->assertTrue($result instanceof \SimpleXMLElement, sprintf('This is not a valid xml %s', $xml));
    }

    public function testGetFormat()
    {
        $this->assertInternalType('string', $this->encoder->getFormat());
    }

    public function sitemapProvider()
    {
        $data = array();
        $provider = new SitemapFactory();
        for ($i = 0; $i < 3; $i++) {
            $data[$i] = array($provider->getRandomSitemap());
        }

        return $data;
    }

}