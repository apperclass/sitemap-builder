<?php

namespace Apperclass\SitemapBuilder\Model;

interface SitemapUrlInterface
{
    /**
     * @param string $changefreq
     */
    public function setChangefreq($changefreq);

    /**
     * @return string
     */
    public function getChangefreq();

    /**
     * @param array $images
     */
    public function setImages($images);

    /**
     * @return array
     */
    public function getImages();

    /**
     * @param string $lastmod
     */
    public function setLastmod($lastmod);

    /**
     * @return string
     */
    public function getLastmod();

    /**
     * @param string $loc
     */
    public function setLoc($loc);

    /**
     * @return string
     */
    public function getLoc();
    /**
     * @param string $priority
     */
    public function setPriority($priority);

    /**
     * @return string
     */
    public function getPriority();

    /**
     * @param array $videos
     */
    public function setVideos($videos);

    /**
     * @return array
     */
    public function getVideos();
}