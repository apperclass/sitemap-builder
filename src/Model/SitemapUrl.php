<?php

namespace Apperclass\SitemapBuilder\Model;

class SitemapUrl implements SitemapUrlInterface
{
    /** @var string */
    protected $loc;
    /** @var string */
    protected $lastmod;
    /** @var string */
    protected $changefreq;
    /** @var string */
    protected $priority;
    /** @var array */
    protected $images;
    /** @var array */
    protected $videos;


    public function __construct()
    {
        $this->images = array();
        $this->videos = array();
    }

    /**
     * @param string $changefreq
     */
    public function setChangefreq($changefreq)
    {
        $this->changefreq = $changefreq;
    }

    /**
     * @return string
     */
    public function getChangefreq()
    {
        return $this->changefreq;
    }

    /**
     * @param array $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }

    /**
     * @return array
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param string $lastmod
     */
    public function setLastmod($lastmod)
    {
        $this->lastmod = $lastmod;
    }

    /**
     * @return string
     */
    public function getLastmod()
    {
        return $this->lastmod;
    }

    /**
     * @param string $loc
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;
    }

    /**
     * @return string
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * @param string $priority
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;
    }

    /**
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param array $videos
     */
    public function setVideos($videos)
    {
        $this->videos = $videos;
    }

    /**
     * @return array
     */
    public function getVideos()
    {
        return $this->videos;
    }
}