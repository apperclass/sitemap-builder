<?php

namespace Apperclass\SitemapBuilder;

use Apperclass\SitemapBuilder\Model\SitemapInterface;

interface SitemapBuilderInterface
{
    /**
     * @return SitemapInterface
     */
    public function build();

    /**
     * @param SitemapPopulatorInterface $sitemapPopulator
     * @return void
     */
    public function addSitemapPopulator(SitemapPopulatorInterface $sitemapPopulator);

}