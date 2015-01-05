<?php

namespace Apperclass\SitemapBuilder\Encoder;

use Apperclass\SitemapBuilder\Model\SitemapInterface;

interface SitemapEncoderInterface
{
    /**
     * @param SitemapInterface $sitemap
     * @return string
     */
    public function encode(SitemapInterface $sitemap);

    /**
     * @return string
     */
    public function getFormat();
} 