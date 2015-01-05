<?php

namespace Apperclass\SitemapBuilder\Model;

class SitemapVideo
{
    /** @var string */
    protected $playerLoc;
    /** @var string */
    protected $playerLocAllowEmbed;
    /** @var string */
    protected $playerLocAutoplay;
    /** @var string */
    protected $contentLoc;
    /** @var string */
    protected $thumbnailLoc;
    /** @var string */
    protected $title;
    /** @var string */
    protected $description;
    /** @var string */
    protected $duration;
    /** @var string */
    protected $expirationDate;
    /** @var string */
    protected $rating;
    /** @var string */
    protected $viewCount;
    /** @var string */
    protected $publicationDate;
    /** @var string */
    protected $familyFriendly;
    /** @var array */
    protected $tags;
    /** @var string */
    protected $category;
    /** @var string */
    protected $restriction;
    /** @var string */
    protected $restrictionRelationship;
    /** @var string */
    protected $galleryLoc;
    /** @var string */
    protected $galleryLocTitle;
    /** @var string */
    protected $prices;
    /** @var string */
    protected $requiresSubscription;
    /** @var string */
    protected $uploader;
    /** @var string */
    protected $uploaderInfo;
    /** @var string */
    protected $platform;
    /** @var string */
    protected $platformRelationship;
    /** @var string */
    protected $live;

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $contentLoc
     */
    public function setContentLoc($contentLoc)
    {
        $this->contentLoc = $contentLoc;
    }

    /**
     * @return string
     */
    public function getContentLoc()
    {
        return $this->contentLoc;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param string $expirationDate
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param string $familyFriendly
     */
    public function setFamilyFriendly($familyFriendly)
    {
        $this->familyFriendly = $familyFriendly;
    }

    /**
     * @return string
     */
    public function getFamilyFriendly()
    {
        return $this->familyFriendly;
    }

    /**
     * @param string $galleryLoc
     */
    public function setGalleryLoc($galleryLoc)
    {
        $this->galleryLoc = $galleryLoc;
    }

    /**
     * @return string
     */
    public function getGalleryLoc()
    {
        return $this->galleryLoc;
    }

    /**
     * @param string $live
     */
    public function setLive($live)
    {
        $this->live = $live;
    }

    /**
     * @return string
     */
    public function getLive()
    {
        return $this->live;
    }

    /**
     * @param string $platform
     */
    public function setPlatform($platform)
    {
        $this->platform = $platform;
    }

    /**
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * @param string $platformRelationship
     */
    public function setPlatformRelationship($platformRelationship)
    {
        $this->platformRelationship = $platformRelationship;
    }

    /**
     * @return string
     */
    public function getPlatformRelationship()
    {
        return $this->platformRelationship;
    }

    /**
     * @param string $playerLoc
     */
    public function setPlayerLoc($playerLoc)
    {
        $this->playerLoc = $playerLoc;
    }

    /**
     * @return string
     */
    public function getPlayerLoc()
    {
        return $this->playerLoc;
    }

    /**
     * @param string $playerLocAllowEmbed
     */
    public function setPlayerLocAllowEmbed($playerLocAllowEmbed)
    {
        $this->playerLocAllowEmbed = $playerLocAllowEmbed;
    }

    /**
     * @return string
     */
    public function getPlayerLocAllowEmbed()
    {
        return $this->playerLocAllowEmbed;
    }

    /**
     * @param string $playerLocAutoplay
     */
    public function setPlayerLocAutoplay($playerLocAutoplay)
    {
        $this->playerLocAutoplay = $playerLocAutoplay;
    }

    /**
     * @return string
     */
    public function getPlayerLocAutoplay()
    {
        return $this->playerLocAutoplay;
    }

    /**
     * @param string $prices
     */
    public function setPrices($prices)
    {
        $this->prices = $prices;
    }

    /**
     * @return string
     */
    public function getPrices()
    {
        return $this->prices;
    }

    /**
     * @param string $publicationDate
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
    }

    /**
     * @return string
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * @param string $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param string $requiresSubscription
     */
    public function setRequiresSubscription($requiresSubscription)
    {
        $this->requiresSubscription = $requiresSubscription;
    }

    /**
     * @return string
     */
    public function getRequiresSubscription()
    {
        return $this->requiresSubscription;
    }

    /**
     * @param string $restriction
     */
    public function setRestriction($restriction)
    {
        $this->restriction = $restriction;
    }

    /**
     * @return string
     */
    public function getRestriction()
    {
        return $this->restriction;
    }

    /**
     * @param string $restrictionRelationship
     */
    public function setRestrictionRelationship($restrictionRelationship)
    {
        $this->restrictionRelationship = $restrictionRelationship;
    }

    /**
     * @return string
     */
    public function getRestrictionRelationship()
    {
        return $this->restrictionRelationship;
    }

    /**
     * @param array $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string $thumbnailLoc
     */
    public function setThumbnailLoc($thumbnailLoc)
    {
        $this->thumbnailLoc = $thumbnailLoc;
    }

    /**
     * @return string
     */
    public function getThumbnailLoc()
    {
        return $this->thumbnailLoc;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $uploader
     */
    public function setUploader($uploader)
    {
        $this->uploader = $uploader;
    }

    /**
     * @return string
     */
    public function getUploader()
    {
        return $this->uploader;
    }

    /**
     * @param string $uploaderInfo
     */
    public function setUploaderInfo($uploaderInfo)
    {
        $this->uploaderInfo = $uploaderInfo;
    }

    /**
     * @return string
     */
    public function getUploaderInfo()
    {
        return $this->uploaderInfo;
    }

    /**
     * @param string $viewCount
     */
    public function setViewCount($viewCount)
    {
        $this->viewCount = $viewCount;
    }

    /**
     * @return string
     */
    public function getViewCount()
    {
        return $this->viewCount;
    }

    /**
     * @param string $galleryLocTitle
     */
    public function setGalleryLocTitle($galleryLocTitle)
    {
        $this->galleryLocTitle = $galleryLocTitle;
    }

    /**
     * @return string
     */
    public function getGalleryLocTitle()
    {
        return $this->galleryLocTitle;
    }

}