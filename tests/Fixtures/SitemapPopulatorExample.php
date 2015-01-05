<?php

namespace Apperclass\SitemapBuilder\Tests\Fixtures;

use Apperclass\SitemapBuilder\Model\SitemapInterface;
use Apperclass\SitemapBuilder\Model\SitemapUrl;
use Apperclass\SitemapBuilder\SitemapPopulatorInterface;

class SitemapPopulatorExample implements SitemapPopulatorInterface
{
    public function populate(SitemapInterface $sitemap)
    {
        $url = new SitemapUrl();
        $url->setLoc('http://www.google.it');

        $url2 = new SitemapUrl();
        $url2->setLoc('http://www.apperclass.com');

        $sitemap->addSitemapUrl($url);
        $sitemap->addSitemapUrl($url2);
    }
}