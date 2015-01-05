<?php

namespace Apperclass\SitemapBuilder\Tests\Model;

use Apperclass\SitemapBuilder\Model\SitemapImage;
use Apperclass\SitemapBuilder\Model\SitemapUrl;
use Apperclass\SitemapBuilder\Model\SitemapVideo;

class SitemapUrlTest extends \PHPUnit_Framework_TestCase
{

    public function testLoc()
    {
        $sitemapImage = new SitemapUrl();
        $this->assertNull($sitemapImage->getLoc());

        $sitemapImage->setLoc('http://test.com');
        $this->assertEquals('http://test.com', $sitemapImage->getLoc());
    }

    public function testChangeFreq()
    {
        $sitemapImage = new SitemapUrl();
        $this->assertNull($sitemapImage->getChangefreq());

        $sitemapImage->setChangefreq('monthly');
        $this->assertEquals('monthly', $sitemapImage->getChangefreq());
    }

    public function testLastMod()
    {
        $sitemapImage = new SitemapUrl();
        $this->assertNull($sitemapImage->getLastmod());

        $sitemapImage->setLastmod('2015-01-01');
        $this->assertEquals('2015-01-01', $sitemapImage->getLastmod());
    }

    public function testPriority()
    {
        $sitemapImage = new SitemapUrl();
        $this->assertNull($sitemapImage->getPriority());

        $sitemapImage->setPriority('1');
        $this->assertEquals('1', $sitemapImage->getPriority());
    }

    public function testImages()
    {
        $sitemapImage = new SitemapUrl();
        $this->assertEmpty($sitemapImage->getImages());

        $sitemapImage->setImages(array(new SitemapImage()));
        $this->assertEquals(1, count($sitemapImage->getImages()));
    }

    public function testVideos()
    {
        $sitemapImage = new SitemapUrl();
        $this->assertEmpty($sitemapImage->getVideos());

        $sitemapImage->setVideos(array(new SitemapVideo()));
        $this->assertEquals(1, count($sitemapImage->getVideos()));
    }

}