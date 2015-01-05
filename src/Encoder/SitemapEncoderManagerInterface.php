<?php

namespace Apperclass\SitemapBuilder\Encoder;

use Apperclass\SitemapBuilder\Model\SitemapInterface;

interface SitemapEncoderManagerInterface
{

    /**
     * @param SitemapEncoderInterface $encoder
     * @return $this
     */
    public function addSitemapEncoder(SitemapEncoderInterface $encoder);

    /**
     * @param SitemapInterface $sitemap
     * @param string $format
     * @return string
     */
    public function encode(SitemapInterface $sitemap, $format);

    /**
     * @return string[]
     */
    public function getFormats();

    /**
     * @param string $format
     * @return bool
     */
    public function supportsFormat($format);
} 