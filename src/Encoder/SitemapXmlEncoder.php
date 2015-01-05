<?php

namespace Apperclass\SitemapBuilder\Encoder;

use Apperclass\SitemapBuilder\Model\SitemapInterface;
use Apperclass\SitemapBuilder\Model\SitemapUrlInterface;
use Apperclass\SitemapBuilder\Model\SitemapVideo;
use Apperclass\SitemapBuilder\Model\SitemapImage;

/**
 * Class SitemapXmlEncoder
 * Transform a Sitemap Object to XML string
 *
 * @package Apperclass\Bundle\SitemapBundle\Sitemap
 */
class SitemapXmlEncoder implements SitemapEncoderInterface
{
    /** @var \XmlWriter  */
    protected $writer;

    /**
     * __construct
     */
    public function __construct()
    {
        $this->writer = new \XmlWriter();
    }


    public function encode(SitemapInterface $sitemap)
    {
        return $this->toXml($sitemap);
    }

    public function getFormat()
    {
        return 'xml';
    }

    /**
     * @param SitemapInterface $sitemap
     *
     * @return string
     */
    protected function toXml(SitemapInterface $sitemap)
    {

        $this->writer->openMemory();
        $this->writer->startDocument('1.0','UTF-8');
        $this->writer->setIndent(true);
        $this->writer->startElement('urlset');
        $this->writer->writeAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $this->writer->writeAttribute('xmlns:image', 'http://www.google.com/schemas/sitemap-image/1.1');
        $this->writer->writeAttribute('xmlns:video', 'http://www.google.com/schemas/sitemap-video/1.1');

        foreach ($sitemap->getSitemapUrls() as $sitemapUrl) {
            $this->sitemapUrlToXml($sitemapUrl);
        }

        $this->writer->endElement();

        $buffer = $this->writer->outputMemory();
        $this->writer->flush();

        return $buffer;
    }

    /**
     * @param SitemapUrlInterface $sitemapUrl
     */
    protected function sitemapUrlToXml(SitemapUrlInterface $sitemapUrl)
    {
        $this->writer->startElement('url');
        $this->writer->writeElement('loc', $sitemapUrl->getLoc());

        if (!(null === $sitemapUrl->getChangefreq())) {
            $this->writer->writeElement('changefreq', $sitemapUrl->getChangefreq());
        }

        if (!(null === $sitemapUrl->getLastmod())) {
            $this->writer->writeElement('lastmod', $sitemapUrl->getLastmod());
        }

        if (!(null === $sitemapUrl->getPriority())) {
            $this->writer->writeElement('priority', $sitemapUrl->getPriority());
        }

        foreach ($sitemapUrl->getImages() as $image) {
            $this->sitemapImageToXml($image);
        }

        foreach ($sitemapUrl->getVideos() as $video) {
            $this->sitemapVideoToXml($video);
        }

        $this->writer->endElement();
    }

    /**
     * @param SitemapImage $image
     */
    protected function sitemapImageToXml(SitemapImage $image)
    {
        $this->writer->startElement('image:image');
        $this->writer->writeElement('image:loc', $image->getLoc());

        if (!(null === $image->getCaption())) {
            $this->writer->writeElement('image:caption', $image->getCaption());
        }

        if (!(null === $image->getGeoLocation())) {
            $this->writer->writeElement('image:geo_location', $image->getGeoLocation());
        }

        if (!(null === $image->getTitle())) {
            $this->writer->writeElement('image:title', $image->getTitle());
        }

        if (!(null === $image->getLicense())) {
            $this->writer->writeElement('image:license', $image->getLicense());
        }

        $this->writer->endElement();
    }

    protected function sitemapVideoToXml(SitemapVideo $video)
    {
        // @TODO
    }

}