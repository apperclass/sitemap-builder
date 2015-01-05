<?php

namespace Apperclass\SitemapBuilder\Model;

class Sitemap implements SitemapInterface
{
    /** @var SitemapUrlInterface[] */
    protected $sitemapUrls;

    /**
     * __construct
     */
    public function __construct()
    {
        $this->sitemapUrls = array();
    }

    /**
     * @param SitemapUrlInterface $sitemapUrl
     */
    public function addSitemapUrl(SitemapUrlInterface $sitemapUrl)
    {
        $this->sitemapUrls[] = $sitemapUrl;
    }

    /**
     * @return SitemapUrlInterface[]
     */
    public function getSitemapUrls()
    {
        return $this->sitemapUrls;
    }
}