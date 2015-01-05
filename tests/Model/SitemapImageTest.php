<?php

namespace Apperclass\SitemapBuilder\Tests\Model;

use Apperclass\SitemapBuilder\Model\SitemapImage;

class SitemapImageTest extends \PHPUnit_Framework_TestCase
{

    public function testLoc()
    {
        $sitemapImage = new SitemapImage();
        $this->assertNull($sitemapImage->getLoc());

        $sitemapImage->setLoc('http://test.com');
        $this->assertEquals('http://test.com', $sitemapImage->getLoc());
    }

    public function testCaption()
    {
        $sitemapImage = new SitemapImage();
        $this->assertNull($sitemapImage->getCaption());

        $sitemapImage->setCaption('Caption');
        $this->assertEquals('Caption', $sitemapImage->getCaption());
    }

    public function testLicense()
    {
        $sitemapImage = new SitemapImage();
        $this->assertNull($sitemapImage->getLicense());

        $sitemapImage->setLicense('License');
        $this->assertEquals('License', $sitemapImage->getLicense());
    }

    public function testTitle()
    {
        $sitemapImage = new SitemapImage();
        $this->assertNull($sitemapImage->getTitle());

        $sitemapImage->setTitle('Title');
        $this->assertEquals('Title', $sitemapImage->getTitle());
    }

    public function testGeoLocation()
    {
        $sitemapImage = new SitemapImage();
        $this->assertNull($sitemapImage->getGeoLocation());

        $sitemapImage->setGeoLocation('Milan');
        $this->assertEquals('Milan', $sitemapImage->getGeoLocation());
    }


}