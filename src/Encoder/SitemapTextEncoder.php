<?php

namespace  Apperclass\SitemapBuilder\Encoder;

use Apperclass\SitemapBuilder\Model\SitemapInterface;
use Apperclass\SitemapBuilder\Model\SitemapUrlInterface;

class SitemapTextEncoder implements SitemapEncoderInterface
{
    protected static $lineBreak = "\n";

    public function encode(SitemapInterface $sitemap)
    {
        return implode(self::$lineBreak, array_map(function (SitemapUrlInterface $sitemapUrl) {
            return $sitemapUrl->getLoc();
        }, $sitemap->getSitemapUrls()));
    }

    public function getFormat()
    {
        return 'txt';
    }
}