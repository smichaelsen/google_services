<?php

/**
 * Sitemap Image
 */

namespace FRUIT\GoogleServices\Domain\Model\Node;

use FRUIT\GoogleServices\Domain\Model\AbstractModel;

/**
 * Sitemap Image
 */
class ImageNode extends AbstractModel
{

    /**
     * Location
     *
     * @var string
     */
    protected $loc;

    /**
     * Caption
     *
     * @var string
     */
    protected $caption;

    /**
     * Title
     *
     * @var string
     */
    protected $title;

    /**
     * License
     *
     * @var string
     */
    protected $license;

    /**
     * Get location
     *
     * @return string
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * Get caption
     *
     * @return string
     */
    public function getCaption()
    {
        return $this->caption;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Get license
     *
     * @return string
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Set location
     *
     * @param string $loc
     *
     * @throws \Exception
     */
    public function setLoc($loc)
    {
        if (!filter_var($loc, FILTER_VALIDATE_URL)) {
            throw new \Exception('The location of a google sitemap has have to be a valid URL');
        }
        $this->loc = $loc;
    }

    /**
     * Set caption
     *
     * @param string $caption
     */
    public function setCaption($caption)
    {
        $this->caption = $caption;
    }

    /**
     * Set title
     *
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Set license
     *
     * @param string $license
     */
    public function setLicense($license)
    {
        $this->license = $license;
    }
}
