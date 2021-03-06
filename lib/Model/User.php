<?php
/**
 * User
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
 * User Class Doc Comment
 *
 * @category    Class
 * @description An object containing data about the user associated with this GIF, if applicable.
 * @package     GPH
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class User implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'avatar_url' => 'string',
        'banner_url' => 'string',
        'profile_url' => 'string',
        'username' => 'string',
        'display_name' => 'string',
        'twitter' => 'string'
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
        'avatar_url' => 'avatar_url',
        'banner_url' => 'banner_url',
        'profile_url' => 'profile_url',
        'username' => 'username',
        'display_name' => 'display_name',
        'twitter' => 'twitter'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'avatar_url' => 'setAvatarUrl',
        'banner_url' => 'setBannerUrl',
        'profile_url' => 'setProfileUrl',
        'username' => 'setUsername',
        'display_name' => 'setDisplayName',
        'twitter' => 'setTwitter'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'avatar_url' => 'getAvatarUrl',
        'banner_url' => 'getBannerUrl',
        'profile_url' => 'getProfileUrl',
        'username' => 'getUsername',
        'display_name' => 'getDisplayName',
        'twitter' => 'getTwitter'
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
        $this->container['avatar_url'] = isset($data['avatar_url']) ? $data['avatar_url'] : null;
        $this->container['banner_url'] = isset($data['banner_url']) ? $data['banner_url'] : null;
        $this->container['profile_url'] = isset($data['profile_url']) ? $data['profile_url'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['display_name'] = isset($data['display_name']) ? $data['display_name'] : null;
        $this->container['twitter'] = isset($data['twitter']) ? $data['twitter'] : null;
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
     * Gets avatar_url
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->container['avatar_url'];
    }

    /**
     * Sets avatar_url
     * @param string $avatar_url The URL for this user's avatar image.
     * @return $this
     */
    public function setAvatarUrl($avatar_url)
    {
        $this->container['avatar_url'] = $avatar_url;

        return $this;
    }

    /**
     * Gets banner_url
     * @return string
     */
    public function getBannerUrl()
    {
        return $this->container['banner_url'];
    }

    /**
     * Sets banner_url
     * @param string $banner_url The URL for the banner image that appears atop this user's profile page.
     * @return $this
     */
    public function setBannerUrl($banner_url)
    {
        $this->container['banner_url'] = $banner_url;

        return $this;
    }

    /**
     * Gets profile_url
     * @return string
     */
    public function getProfileUrl()
    {
        return $this->container['profile_url'];
    }

    /**
     * Sets profile_url
     * @param string $profile_url The URL for this user's profile.
     * @return $this
     */
    public function setProfileUrl($profile_url)
    {
        $this->container['profile_url'] = $profile_url;

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
     * @param string $username The username associated with this user.
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets display_name
     * @return string
     */
    public function getDisplayName()
    {
        return $this->container['display_name'];
    }

    /**
     * Sets display_name
     * @param string $display_name The display name associated with this user (contains formatting the base username might not).
     * @return $this
     */
    public function setDisplayName($display_name)
    {
        $this->container['display_name'] = $display_name;

        return $this;
    }

    /**
     * Gets twitter
     * @return string
     */
    public function getTwitter()
    {
        return $this->container['twitter'];
    }

    /**
     * Sets twitter
     * @param string $twitter The Twitter username associated with this user, if applicable.
     * @return $this
     */
    public function setTwitter($twitter)
    {
        $this->container['twitter'] = $twitter;

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


