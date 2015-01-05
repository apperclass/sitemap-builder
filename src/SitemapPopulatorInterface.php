<?php

namespace Apperclass\SitemapBuilder;

use Apperclass\SitemapBuilder\Model\SitemapInterface;

interface SitemapPopulatorInterface
{
    /**
     * @param SitemapInterface $sitemap
     * @return void
     */
    public function populate(SitemapInterface $sitemap);

}