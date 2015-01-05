<?php

namespace Apperclass\SitemapBuilder\Model;

interface SitemapInterface
{
    /**
     * @param SitemapUrlInterface $sitemapUrl
     */
    public function addSitemapUrl(SitemapUrlInterface $sitemapUrl);

    /**
     * @return SitemapUrlInterface[]
     */
    public function getSitemapUrls();
} 