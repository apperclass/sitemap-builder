<?php

namespace Apperclass\SitemapBuilder\Encoder;

use Apperclass\SitemapBuilder\Model\SitemapInterface;

class SitemapEncoderManager implements SitemapEncoderManagerInterface
{

    /**
     * @var SitemapEncoderInterface[]
     */
    protected $encoders = array();

    /**
     * @param SitemapEncoderInterface $encoder
     * @return $this
     * @throws \Exception - if an encoder for a format already exists
     */
    public function addSitemapEncoder(SitemapEncoderInterface $encoder)
    {
        if($this->supportsFormat($encoder->getFormat())) {

            throw new \Exception(
                sprintf(
                    'Format "%s" is already handled by "%s" class',
                    $encoder->getFormat(),
                    get_class($this->findEncoderByFormat($encoder->getFormat()))
                )
            );
        }

        array_push($this->encoders, $encoder);

        return $this;
    }

    /**
     * Encode a sitemap into specified format
     *
     * @param SitemapInterface $sitemap
     * @param string $format
     * @return string
     * @throws \Exception - if format is not supported
     */
    public function encode(SitemapInterface $sitemap, $format)
    {
        if(!$this->supportsFormat($format)) {
            throw new \Exception(
                sprintf(
                    'Format "%s" is not handled, available formats are: "%s"',
                    $format,
                    implode(' or ', $this->getFormats())
                )
            );
        }

        $encoder = $this->findEncoderByFormat($format);

        return $encoder->encode($sitemap);
    }

    /**
     * Get available formats
     *
     * @return string[]
     */
    public function getFormats()
    {
        return array_map(function (SitemapEncoderInterface $encoder) {
            return $encoder->getFormat();
        }, $this->encoders);
    }

    /**
     * Check if we can handle this format
     *
     * @param string $format
     * @return bool
     */
    public function supportsFormat($format)
    {
        return in_array($format, $this->getFormats());
    }

    /**
     * Find an encoder for specified format
     *
     * @param $format
     * @return null|SitemapEncoderInterface
     */
    public function findEncoderByFormat($format)
    {
        foreach($this->encoders as $encoder)
        {
            if($format === $encoder->getFormat()) {
                return $encoder;
            }
        }
    }
} 