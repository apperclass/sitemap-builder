<?php

namespace Apperclass\SitemapBuilder;

use Apperclass\SitemapBuilder\Model\Sitemap;

class SitemapBuilder implements SitemapBuilderInterface
{
    /** @var SitemapPopulatorInterface[] */
    protected $sitemapPopulators = array();


    /**
     * @param SitemapPopulatorInterface $sitemapPopulator
     */
    public function addSitemapPopulator(SitemapPopulatorInterface $sitemapPopulator)
    {
        $this->sitemapPopulators[] = $sitemapPopulator;
    }

    /**
     * @return Sitemap
     */
    public function build()
    {
        $sitemap = new Sitemap();

        foreach ($this->sitemapPopulators as $populator) {
            $populator->populate($sitemap);
        }

        return $sitemap;
    }
}