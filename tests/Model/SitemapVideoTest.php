<?php

namespace Apperclass\SitemapBuilder\Tests\Model;

use Apperclass\SitemapBuilder\Model\SitemapVideo;

class SitemapVideoTest extends \PHPUnit_Framework_TestCase
{

    public function testPlayerLoc()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getPlayerLoc());

        $sitemapVideo->setPlayerLoc('http://test.com');
        $this->assertEquals('http://test.com', $sitemapVideo->getPlayerLoc());
    }

    public function testPlayerLocAllowedEmbed()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getPlayerLocAllowEmbed());

        $sitemapVideo->setPlayerLocAllowEmbed('yes');
        $this->assertEquals('yes', $sitemapVideo->getPlayerLocAllowEmbed());
    }


    public function testPlayerLocAutoplay()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getPlayerLocAutoplay());

        $sitemapVideo->setPlayerLocAutoplay('ap=1');
        $this->assertEquals('ap=1', $sitemapVideo->getPlayerLocAutoplay());
    }

    public function testContentLoc()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getContentLoc());

        $sitemapVideo->setContentLoc('http://test.com');
        $this->assertEquals('http://test.com', $sitemapVideo->getContentLoc());
    }

    public function testThumbnailLoc()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getThumbnailLoc());

        $sitemapVideo->setThumbnailLoc('http://test.com');
        $this->assertEquals('http://test.com', $sitemapVideo->getThumbnailLoc());
    }

    public function testTitle()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getTitle());

        $sitemapVideo->setTitle('title');
        $this->assertEquals('title', $sitemapVideo->getTitle());
    }

    public function testDescription()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getDescription());

        $sitemapVideo->setDescription('desc');
        $this->assertEquals('desc', $sitemapVideo->getDescription());
    }

    public function testDuration()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getDuration());

        $sitemapVideo->setDuration('1000');
        $this->assertEquals('1000', $sitemapVideo->getDuration());
    }

    public function testExpirationDate()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getExpirationDate());

        $sitemapVideo->setExpirationDate('2009-11-05T19:20:30+08:00');
        $this->assertEquals('2009-11-05T19:20:30+08:00', $sitemapVideo->getExpirationDate());
    }

    public function testRating()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getRating());

        $sitemapVideo->setRating('4.2');
        $this->assertEquals('4.2', $sitemapVideo->getRating());
    }

    public function testLive()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getLive());

        $sitemapVideo->setLive('yes');
        $this->assertEquals('yes', $sitemapVideo->getLive());
    }

    public function testViewCount()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getViewCount());

        $sitemapVideo->setViewCount('12345');
        $this->assertEquals('12345', $sitemapVideo->getViewCount());
    }

    public function testPublicationDate()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getPublicationDate());

        $sitemapVideo->setPublicationDate('2007-11-05T19:20:30+08:00');
        $this->assertEquals('2007-11-05T19:20:30+08:00', $sitemapVideo->getPublicationDate());
    }

    public function testFamilyFriend()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getFamilyFriendly());

        $sitemapVideo->setFamilyFriendly('yes');
        $this->assertEquals('yes', $sitemapVideo->getFamilyFriendly());
    }

    public function testTags()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getTags());

        $sitemapVideo->setTags(array("tag1","tag2"));
        $this->assertEquals(array("tag1","tag2"), $sitemapVideo->getTags());
    }


    public function testCategory()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getCategory());

        $sitemapVideo->setCategory("cat");
        $this->assertEquals("cat", $sitemapVideo->getCategory());
    }

    public function testRestriction()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getRestriction());

        $sitemapVideo->setRestriction("IE GB US CA");
        $this->assertEquals("IE GB US CA", $sitemapVideo->getRestriction());
    }

    public function testRestrictionRelationship()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getRestrictionRelationship());

        $sitemapVideo->setRestrictionRelationship("allow");
        $this->assertEquals("allow", $sitemapVideo->getRestrictionRelationship());
    }


    public function testGalleryLoc()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getGalleryLoc());

        $sitemapVideo->setGalleryLoc("http://cooking.example.com");
        $this->assertEquals("http://cooking.example.com", $sitemapVideo->getGalleryLoc());
    }

    public function testGalleryLocTitle()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getGalleryLocTitle());

        $sitemapVideo->setGalleryLocTitle("title");
        $this->assertEquals("title", $sitemapVideo->getGalleryLocTitle());
    }

    public function testPrices()
    {
        $prices =array(
            array("currency"=>"EUR","type"=>"rent","resolution"=>"HD","content"=>"1000"),
            array("currency"=>"EUR","type"=>"own","resolution"=>"SD","content"=>"1000")
        );

        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getPrices());

        $sitemapVideo->setPrices($prices);
        $this->assertEquals($prices, $sitemapVideo->getPrices());
    }


    public function testRequireSubscription()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getRequiresSubscription());

        $sitemapVideo->setRequiresSubscription('yes');
        $this->assertEquals('yes', $sitemapVideo->getRequiresSubscription());
    }

    public function testUploader()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getUploader());

        $sitemapVideo->setUploader('GrillyMcGrillerson');
        $this->assertEquals('GrillyMcGrillerson', $sitemapVideo->getUploader());
    }

    public function testUploaderInfo()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getUploaderInfo());

        $sitemapVideo->setUploaderInfo('http://www.example.com/users/grillymcgrillerson');
        $this->assertEquals('http://www.example.com/users/grillymcgrillerson', $sitemapVideo->getUploaderInfo());
    }

    public function testPlatform()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getPlatform());

        $sitemapVideo->setPlatform('web');
        $this->assertEquals('web', $sitemapVideo->getPlatform());
    }

    public function testPlatformRelationship()
    {
        $sitemapVideo = new SitemapVideo();
        $this->assertNull($sitemapVideo->getPlatformRelationship());

        $sitemapVideo->setPlatformRelationship('allow');
        $this->assertEquals('allow', $sitemapVideo->getPlatformRelationship());
    }
}