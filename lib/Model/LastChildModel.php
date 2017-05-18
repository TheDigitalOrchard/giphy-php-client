<?php
/**
 * LastChildModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  GPH
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * giphy-api
 *
 * Giphy's public api.
 *
 * OpenAPI spec version: 0.9.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace GPH\Model;

use \ArrayAccess;

/**
 * LastChildModel Class Doc Comment
 *
 * @category    Class
 * @package     GPH
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class LastChildModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'LastChildModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'id' => 'int',
        'parent' => 'string',
        'create_datetime' => 'string',
        'breadcrumbs' => '\GPH\Model\Breadcrumb[]',
        'username' => 'string',
        'slug' => 'string',
        'title' => 'string',
        'short_title' => 'string',
        'description' => 'string',
        'featured_gif' => '\GPH\Model\Gif',
        'banner_image' => 'string',
        'avatar_image' => 'string',
        'screensaver_gif' => '\GPH\Model\Gif',
        'is_private' => 'bool',
        'is_live' => 'bool',
        'event_start_datetime' => 'string',
        'event_end_datetime' => 'string',
        'has_children' => 'bool',
        'url' => 'string',
        'website_url' => 'string',
        'instagram_url' => 'string',
        'twitter_url' => 'string',
        'facebook_url' => 'string',
        'pinterest_url' => 'string',
        'tumblr_url' => 'string',
        'user' => '\GPH\Model\User',
        'trending_tags' => '\GPH\Model\TrendingTag[]',
        'gifs' => '\GPH\Model\BaseChannelModelGifs',
        'children' => '\GPH\Model\LastChildModelChildren'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'id' => 'id',
        'parent' => 'parent',
        'create_datetime' => 'create_datetime',
        'breadcrumbs' => 'breadcrumbs',
        'username' => 'username',
        'slug' => 'slug',
        'title' => 'title',
        'short_title' => 'short_title',
        'description' => 'description',
        'featured_gif' => 'featured_gif',
        'banner_image' => 'banner_image',
        'avatar_image' => 'avatar_image',
        'screensaver_gif' => 'screensaver_gif',
        'is_private' => 'is_private',
        'is_live' => 'is_live',
        'event_start_datetime' => 'event_start_datetime',
        'event_end_datetime' => 'event_end_datetime',
        'has_children' => 'has_children',
        'url' => 'url',
        'website_url' => 'website_url',
        'instagram_url' => 'instagram_url',
        'twitter_url' => 'twitter_url',
        'facebook_url' => 'facebook_url',
        'pinterest_url' => 'pinterest_url',
        'tumblr_url' => 'tumblr_url',
        'user' => 'user',
        'trending_tags' => 'trending_tags',
        'gifs' => 'gifs',
        'children' => 'children'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'id' => 'setId',
        'parent' => 'setParent',
        'create_datetime' => 'setCreateDatetime',
        'breadcrumbs' => 'setBreadcrumbs',
        'username' => 'setUsername',
        'slug' => 'setSlug',
        'title' => 'setTitle',
        'short_title' => 'setShortTitle',
        'description' => 'setDescription',
        'featured_gif' => 'setFeaturedGif',
        'banner_image' => 'setBannerImage',
        'avatar_image' => 'setAvatarImage',
        'screensaver_gif' => 'setScreensaverGif',
        'is_private' => 'setIsPrivate',
        'is_live' => 'setIsLive',
        'event_start_datetime' => 'setEventStartDatetime',
        'event_end_datetime' => 'setEventEndDatetime',
        'has_children' => 'setHasChildren',
        'url' => 'setUrl',
        'website_url' => 'setWebsiteUrl',
        'instagram_url' => 'setInstagramUrl',
        'twitter_url' => 'setTwitterUrl',
        'facebook_url' => 'setFacebookUrl',
        'pinterest_url' => 'setPinterestUrl',
        'tumblr_url' => 'setTumblrUrl',
        'user' => 'setUser',
        'trending_tags' => 'setTrendingTags',
        'gifs' => 'setGifs',
        'children' => 'setChildren'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'id' => 'getId',
        'parent' => 'getParent',
        'create_datetime' => 'getCreateDatetime',
        'breadcrumbs' => 'getBreadcrumbs',
        'username' => 'getUsername',
        'slug' => 'getSlug',
        'title' => 'getTitle',
        'short_title' => 'getShortTitle',
        'description' => 'getDescription',
        'featured_gif' => 'getFeaturedGif',
        'banner_image' => 'getBannerImage',
        'avatar_image' => 'getAvatarImage',
        'screensaver_gif' => 'getScreensaverGif',
        'is_private' => 'getIsPrivate',
        'is_live' => 'getIsLive',
        'event_start_datetime' => 'getEventStartDatetime',
        'event_end_datetime' => 'getEventEndDatetime',
        'has_children' => 'getHasChildren',
        'url' => 'getUrl',
        'website_url' => 'getWebsiteUrl',
        'instagram_url' => 'getInstagramUrl',
        'twitter_url' => 'getTwitterUrl',
        'facebook_url' => 'getFacebookUrl',
        'pinterest_url' => 'getPinterestUrl',
        'tumblr_url' => 'getTumblrUrl',
        'user' => 'getUser',
        'trending_tags' => 'getTrendingTags',
        'gifs' => 'getGifs',
        'children' => 'getChildren'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['type'] = isset($data['type']) ? $data['type'] : 'channel';
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['parent'] = isset($data['parent']) ? $data['parent'] : null;
        $this->container['create_datetime'] = isset($data['create_datetime']) ? $data['create_datetime'] : null;
        $this->container['breadcrumbs'] = isset($data['breadcrumbs']) ? $data['breadcrumbs'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['short_title'] = isset($data['short_title']) ? $data['short_title'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['featured_gif'] = isset($data['featured_gif']) ? $data['featured_gif'] : null;
        $this->container['banner_image'] = isset($data['banner_image']) ? $data['banner_image'] : null;
        $this->container['avatar_image'] = isset($data['avatar_image']) ? $data['avatar_image'] : null;
        $this->container['screensaver_gif'] = isset($data['screensaver_gif']) ? $data['screensaver_gif'] : null;
        $this->container['is_private'] = isset($data['is_private']) ? $data['is_private'] : null;
        $this->container['is_live'] = isset($data['is_live']) ? $data['is_live'] : null;
        $this->container['event_start_datetime'] = isset($data['event_start_datetime']) ? $data['event_start_datetime'] : null;
        $this->container['event_end_datetime'] = isset($data['event_end_datetime']) ? $data['event_end_datetime'] : null;
        $this->container['has_children'] = isset($data['has_children']) ? $data['has_children'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['website_url'] = isset($data['website_url']) ? $data['website_url'] : null;
        $this->container['instagram_url'] = isset($data['instagram_url']) ? $data['instagram_url'] : null;
        $this->container['twitter_url'] = isset($data['twitter_url']) ? $data['twitter_url'] : null;
        $this->container['facebook_url'] = isset($data['facebook_url']) ? $data['facebook_url'] : null;
        $this->container['pinterest_url'] = isset($data['pinterest_url']) ? $data['pinterest_url'] : null;
        $this->container['tumblr_url'] = isset($data['tumblr_url']) ? $data['tumblr_url'] : null;
        $this->container['user'] = isset($data['user']) ? $data['user'] : null;
        $this->container['trending_tags'] = isset($data['trending_tags']) ? $data['trending_tags'] : null;
        $this->container['gifs'] = isset($data['gifs']) ? $data['gifs'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Always \"channel\"
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id 123
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parent
     * @return string
     */
    public function getParent()
    {
        return $this->container['parent'];
    }

    /**
     * Sets parent
     * @param string $parent parent's slug
     * @return $this
     */
    public function setParent($parent)
    {
        $this->container['parent'] = $parent;

        return $this;
    }

    /**
     * Gets create_datetime
     * @return string
     */
    public function getCreateDatetime()
    {
        return $this->container['create_datetime'];
    }

    /**
     * Sets create_datetime
     * @param string $create_datetime xyz
     * @return $this
     */
    public function setCreateDatetime($create_datetime)
    {
        $this->container['create_datetime'] = $create_datetime;

        return $this;
    }

    /**
     * Gets breadcrumbs
     * @return \GPH\Model\Breadcrumb[]
     */
    public function getBreadcrumbs()
    {
        return $this->container['breadcrumbs'];
    }

    /**
     * Sets breadcrumbs
     * @param \GPH\Model\Breadcrumb[] $breadcrumbs
     * @return $this
     */
    public function setBreadcrumbs($breadcrumbs)
    {
        $this->container['breadcrumbs'] = $breadcrumbs;

        return $this;
    }

    /**
     * Gets username
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param string $username xyz
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets slug
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     * @param string $slug
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
    }

    /**
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title xyz
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets short_title
     * @return string
     */
    public function getShortTitle()
    {
        return $this->container['short_title'];
    }

    /**
     * Sets short_title
     * @param string $short_title xyz
     * @return $this
     */
    public function setShortTitle($short_title)
    {
        $this->container['short_title'] = $short_title;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description xyz
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets featured_gif
     * @return \GPH\Model\Gif
     */
    public function getFeaturedGif()
    {
        return $this->container['featured_gif'];
    }

    /**
     * Sets featured_gif
     * @param \GPH\Model\Gif $featured_gif
     * @return $this
     */
    public function setFeaturedGif($featured_gif)
    {
        $this->container['featured_gif'] = $featured_gif;

        return $this;
    }

    /**
     * Gets banner_image
     * @return string
     */
    public function getBannerImage()
    {
        return $this->container['banner_image'];
    }

    /**
     * Sets banner_image
     * @param string $banner_image xyz
     * @return $this
     */
    public function setBannerImage($banner_image)
    {
        $this->container['banner_image'] = $banner_image;

        return $this;
    }

    /**
     * Gets avatar_image
     * @return string
     */
    public function getAvatarImage()
    {
        return $this->container['avatar_image'];
    }

    /**
     * Sets avatar_image
     * @param string $avatar_image xyz
     * @return $this
     */
    public function setAvatarImage($avatar_image)
    {
        $this->container['avatar_image'] = $avatar_image;

        return $this;
    }

    /**
     * Gets screensaver_gif
     * @return \GPH\Model\Gif
     */
    public function getScreensaverGif()
    {
        return $this->container['screensaver_gif'];
    }

    /**
     * Sets screensaver_gif
     * @param \GPH\Model\Gif $screensaver_gif
     * @return $this
     */
    public function setScreensaverGif($screensaver_gif)
    {
        $this->container['screensaver_gif'] = $screensaver_gif;

        return $this;
    }

    /**
     * Gets is_private
     * @return bool
     */
    public function getIsPrivate()
    {
        return $this->container['is_private'];
    }

    /**
     * Sets is_private
     * @param bool $is_private
     * @return $this
     */
    public function setIsPrivate($is_private)
    {
        $this->container['is_private'] = $is_private;

        return $this;
    }

    /**
     * Gets is_live
     * @return bool
     */
    public function getIsLive()
    {
        return $this->container['is_live'];
    }

    /**
     * Sets is_live
     * @param bool $is_live
     * @return $this
     */
    public function setIsLive($is_live)
    {
        $this->container['is_live'] = $is_live;

        return $this;
    }

    /**
     * Gets event_start_datetime
     * @return string
     */
    public function getEventStartDatetime()
    {
        return $this->container['event_start_datetime'];
    }

    /**
     * Sets event_start_datetime
     * @param string $event_start_datetime xyz
     * @return $this
     */
    public function setEventStartDatetime($event_start_datetime)
    {
        $this->container['event_start_datetime'] = $event_start_datetime;

        return $this;
    }

    /**
     * Gets event_end_datetime
     * @return string
     */
    public function getEventEndDatetime()
    {
        return $this->container['event_end_datetime'];
    }

    /**
     * Sets event_end_datetime
     * @param string $event_end_datetime xyz
     * @return $this
     */
    public function setEventEndDatetime($event_end_datetime)
    {
        $this->container['event_end_datetime'] = $event_end_datetime;

        return $this;
    }

    /**
     * Gets has_children
     * @return bool
     */
    public function getHasChildren()
    {
        return $this->container['has_children'];
    }

    /**
     * Sets has_children
     * @param bool $has_children
     * @return $this
     */
    public function setHasChildren($has_children)
    {
        $this->container['has_children'] = $has_children;

        return $this;
    }

    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     * @param string $url xyz
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets website_url
     * @return string
     */
    public function getWebsiteUrl()
    {
        return $this->container['website_url'];
    }

    /**
     * Sets website_url
     * @param string $website_url xyz
     * @return $this
     */
    public function setWebsiteUrl($website_url)
    {
        $this->container['website_url'] = $website_url;

        return $this;
    }

    /**
     * Gets instagram_url
     * @return string
     */
    public function getInstagramUrl()
    {
        return $this->container['instagram_url'];
    }

    /**
     * Sets instagram_url
     * @param string $instagram_url xyz
     * @return $this
     */
    public function setInstagramUrl($instagram_url)
    {
        $this->container['instagram_url'] = $instagram_url;

        return $this;
    }

    /**
     * Gets twitter_url
     * @return string
     */
    public function getTwitterUrl()
    {
        return $this->container['twitter_url'];
    }

    /**
     * Sets twitter_url
     * @param string $twitter_url xyz
     * @return $this
     */
    public function setTwitterUrl($twitter_url)
    {
        $this->container['twitter_url'] = $twitter_url;

        return $this;
    }

    /**
     * Gets facebook_url
     * @return string
     */
    public function getFacebookUrl()
    {
        return $this->container['facebook_url'];
    }

    /**
     * Sets facebook_url
     * @param string $facebook_url xyz
     * @return $this
     */
    public function setFacebookUrl($facebook_url)
    {
        $this->container['facebook_url'] = $facebook_url;

        return $this;
    }

    /**
     * Gets pinterest_url
     * @return string
     */
    public function getPinterestUrl()
    {
        return $this->container['pinterest_url'];
    }

    /**
     * Sets pinterest_url
     * @param string $pinterest_url xyz
     * @return $this
     */
    public function setPinterestUrl($pinterest_url)
    {
        $this->container['pinterest_url'] = $pinterest_url;

        return $this;
    }

    /**
     * Gets tumblr_url
     * @return string
     */
    public function getTumblrUrl()
    {
        return $this->container['tumblr_url'];
    }

    /**
     * Sets tumblr_url
     * @param string $tumblr_url xyz
     * @return $this
     */
    public function setTumblrUrl($tumblr_url)
    {
        $this->container['tumblr_url'] = $tumblr_url;

        return $this;
    }

    /**
     * Gets user
     * @return \GPH\Model\User
     */
    public function getUser()
    {
        return $this->container['user'];
    }

    /**
     * Sets user
     * @param \GPH\Model\User $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->container['user'] = $user;

        return $this;
    }

    /**
     * Gets trending_tags
     * @return \GPH\Model\TrendingTag[]
     */
    public function getTrendingTags()
    {
        return $this->container['trending_tags'];
    }

    /**
     * Sets trending_tags
     * @param \GPH\Model\TrendingTag[] $trending_tags
     * @return $this
     */
    public function setTrendingTags($trending_tags)
    {
        $this->container['trending_tags'] = $trending_tags;

        return $this;
    }

    /**
     * Gets gifs
     * @return \GPH\Model\BaseChannelModelGifs
     */
    public function getGifs()
    {
        return $this->container['gifs'];
    }

    /**
     * Sets gifs
     * @param \GPH\Model\BaseChannelModelGifs $gifs
     * @return $this
     */
    public function setGifs($gifs)
    {
        $this->container['gifs'] = $gifs;

        return $this;
    }

    /**
     * Gets children
     * @return \GPH\Model\LastChildModelChildren
     */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
     * Sets children
     * @param \GPH\Model\LastChildModelChildren $children
     * @return $this
     */
    public function setChildren($children)
    {
        $this->container['children'] = $children;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\GPH\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\GPH\ObjectSerializer::sanitizeForSerialization($this));
    }
}


