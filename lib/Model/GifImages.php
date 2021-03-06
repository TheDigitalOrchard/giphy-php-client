<?php
/**
 * GifImages
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
 * GifImages Class Doc Comment
 *
 * @category    Class
 * @description An object containing data for various available formats and sizes of this GIF.
 * @package     GPH
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GifImages implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Gif_images';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'fixed_height' => '\GPH\Model\GifImagesFixedHeight',
        'fixed_height_still' => '\GPH\Model\GifImagesFixedHeightStill',
        'fixed_height_downsampled' => '\GPH\Model\GifImagesFixedHeightDownsampled',
        'fixed_width' => '\GPH\Model\GifImagesFixedWidth',
        'fixed_width_still' => '\GPH\Model\GifImagesFixedWidthStill',
        'fixed_width_downsampled' => '\GPH\Model\GifImagesFixedWidthDownsampled',
        'fixed_height_small' => '\GPH\Model\GifImagesFixedHeightSmall',
        'fixed_height_small_still' => '\GPH\Model\GifImagesFixedHeightSmallStill',
        'fixed_width_small' => '\GPH\Model\GifImagesFixedWidthSmall',
        'fixed_width_small_still' => '\GPH\Model\GifImagesFixedWidthSmallStill',
        'downsized' => '\GPH\Model\GifImagesDownsized',
        'downsized_still' => '\GPH\Model\GifImagesDownsizedStill',
        'downsized_large' => '\GPH\Model\GifImagesDownsizedLarge',
        'downsized_medium' => '\GPH\Model\GifImagesDownsizedMedium',
        'downsized_small' => '\GPH\Model\GifImagesDownsizedSmall',
        'original' => '\GPH\Model\GifImagesOriginal',
        'original_still' => '\GPH\Model\GifImagesOriginalStill',
        'looping' => '\GPH\Model\GifImagesLooping',
        'preview' => '\GPH\Model\GifImagesPreview',
        'preview_gif' => '\GPH\Model\GifImagesPreviewGif'
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
        'fixed_height' => 'fixed_height',
        'fixed_height_still' => 'fixed_height_still',
        'fixed_height_downsampled' => 'fixed_height_downsampled',
        'fixed_width' => 'fixed_width',
        'fixed_width_still' => 'fixed_width_still',
        'fixed_width_downsampled' => 'fixed_width_downsampled',
        'fixed_height_small' => 'fixed_height_small',
        'fixed_height_small_still' => 'fixed_height_small_still',
        'fixed_width_small' => 'fixed_width_small',
        'fixed_width_small_still' => 'fixed_width_small_still',
        'downsized' => 'downsized',
        'downsized_still' => 'downsized_still',
        'downsized_large' => 'downsized_large',
        'downsized_medium' => 'downsized_medium',
        'downsized_small' => 'downsized_small',
        'original' => 'original',
        'original_still' => 'original_still',
        'looping' => 'looping',
        'preview' => 'preview',
        'preview_gif' => 'preview_gif'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'fixed_height' => 'setFixedHeight',
        'fixed_height_still' => 'setFixedHeightStill',
        'fixed_height_downsampled' => 'setFixedHeightDownsampled',
        'fixed_width' => 'setFixedWidth',
        'fixed_width_still' => 'setFixedWidthStill',
        'fixed_width_downsampled' => 'setFixedWidthDownsampled',
        'fixed_height_small' => 'setFixedHeightSmall',
        'fixed_height_small_still' => 'setFixedHeightSmallStill',
        'fixed_width_small' => 'setFixedWidthSmall',
        'fixed_width_small_still' => 'setFixedWidthSmallStill',
        'downsized' => 'setDownsized',
        'downsized_still' => 'setDownsizedStill',
        'downsized_large' => 'setDownsizedLarge',
        'downsized_medium' => 'setDownsizedMedium',
        'downsized_small' => 'setDownsizedSmall',
        'original' => 'setOriginal',
        'original_still' => 'setOriginalStill',
        'looping' => 'setLooping',
        'preview' => 'setPreview',
        'preview_gif' => 'setPreviewGif'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'fixed_height' => 'getFixedHeight',
        'fixed_height_still' => 'getFixedHeightStill',
        'fixed_height_downsampled' => 'getFixedHeightDownsampled',
        'fixed_width' => 'getFixedWidth',
        'fixed_width_still' => 'getFixedWidthStill',
        'fixed_width_downsampled' => 'getFixedWidthDownsampled',
        'fixed_height_small' => 'getFixedHeightSmall',
        'fixed_height_small_still' => 'getFixedHeightSmallStill',
        'fixed_width_small' => 'getFixedWidthSmall',
        'fixed_width_small_still' => 'getFixedWidthSmallStill',
        'downsized' => 'getDownsized',
        'downsized_still' => 'getDownsizedStill',
        'downsized_large' => 'getDownsizedLarge',
        'downsized_medium' => 'getDownsizedMedium',
        'downsized_small' => 'getDownsizedSmall',
        'original' => 'getOriginal',
        'original_still' => 'getOriginalStill',
        'looping' => 'getLooping',
        'preview' => 'getPreview',
        'preview_gif' => 'getPreviewGif'
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
        $this->container['fixed_height'] = isset($data['fixed_height']) ? $data['fixed_height'] : null;
        $this->container['fixed_height_still'] = isset($data['fixed_height_still']) ? $data['fixed_height_still'] : null;
        $this->container['fixed_height_downsampled'] = isset($data['fixed_height_downsampled']) ? $data['fixed_height_downsampled'] : null;
        $this->container['fixed_width'] = isset($data['fixed_width']) ? $data['fixed_width'] : null;
        $this->container['fixed_width_still'] = isset($data['fixed_width_still']) ? $data['fixed_width_still'] : null;
        $this->container['fixed_width_downsampled'] = isset($data['fixed_width_downsampled']) ? $data['fixed_width_downsampled'] : null;
        $this->container['fixed_height_small'] = isset($data['fixed_height_small']) ? $data['fixed_height_small'] : null;
        $this->container['fixed_height_small_still'] = isset($data['fixed_height_small_still']) ? $data['fixed_height_small_still'] : null;
        $this->container['fixed_width_small'] = isset($data['fixed_width_small']) ? $data['fixed_width_small'] : null;
        $this->container['fixed_width_small_still'] = isset($data['fixed_width_small_still']) ? $data['fixed_width_small_still'] : null;
        $this->container['downsized'] = isset($data['downsized']) ? $data['downsized'] : null;
        $this->container['downsized_still'] = isset($data['downsized_still']) ? $data['downsized_still'] : null;
        $this->container['downsized_large'] = isset($data['downsized_large']) ? $data['downsized_large'] : null;
        $this->container['downsized_medium'] = isset($data['downsized_medium']) ? $data['downsized_medium'] : null;
        $this->container['downsized_small'] = isset($data['downsized_small']) ? $data['downsized_small'] : null;
        $this->container['original'] = isset($data['original']) ? $data['original'] : null;
        $this->container['original_still'] = isset($data['original_still']) ? $data['original_still'] : null;
        $this->container['looping'] = isset($data['looping']) ? $data['looping'] : null;
        $this->container['preview'] = isset($data['preview']) ? $data['preview'] : null;
        $this->container['preview_gif'] = isset($data['preview_gif']) ? $data['preview_gif'] : null;
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
     * Gets fixed_height
     * @return \GPH\Model\GifImagesFixedHeight
     */
    public function getFixedHeight()
    {
        return $this->container['fixed_height'];
    }

    /**
     * Sets fixed_height
     * @param \GPH\Model\GifImagesFixedHeight $fixed_height
     * @return $this
     */
    public function setFixedHeight($fixed_height)
    {
        $this->container['fixed_height'] = $fixed_height;

        return $this;
    }

    /**
     * Gets fixed_height_still
     * @return \GPH\Model\GifImagesFixedHeightStill
     */
    public function getFixedHeightStill()
    {
        return $this->container['fixed_height_still'];
    }

    /**
     * Sets fixed_height_still
     * @param \GPH\Model\GifImagesFixedHeightStill $fixed_height_still
     * @return $this
     */
    public function setFixedHeightStill($fixed_height_still)
    {
        $this->container['fixed_height_still'] = $fixed_height_still;

        return $this;
    }

    /**
     * Gets fixed_height_downsampled
     * @return \GPH\Model\GifImagesFixedHeightDownsampled
     */
    public function getFixedHeightDownsampled()
    {
        return $this->container['fixed_height_downsampled'];
    }

    /**
     * Sets fixed_height_downsampled
     * @param \GPH\Model\GifImagesFixedHeightDownsampled $fixed_height_downsampled
     * @return $this
     */
    public function setFixedHeightDownsampled($fixed_height_downsampled)
    {
        $this->container['fixed_height_downsampled'] = $fixed_height_downsampled;

        return $this;
    }

    /**
     * Gets fixed_width
     * @return \GPH\Model\GifImagesFixedWidth
     */
    public function getFixedWidth()
    {
        return $this->container['fixed_width'];
    }

    /**
     * Sets fixed_width
     * @param \GPH\Model\GifImagesFixedWidth $fixed_width
     * @return $this
     */
    public function setFixedWidth($fixed_width)
    {
        $this->container['fixed_width'] = $fixed_width;

        return $this;
    }

    /**
     * Gets fixed_width_still
     * @return \GPH\Model\GifImagesFixedWidthStill
     */
    public function getFixedWidthStill()
    {
        return $this->container['fixed_width_still'];
    }

    /**
     * Sets fixed_width_still
     * @param \GPH\Model\GifImagesFixedWidthStill $fixed_width_still
     * @return $this
     */
    public function setFixedWidthStill($fixed_width_still)
    {
        $this->container['fixed_width_still'] = $fixed_width_still;

        return $this;
    }

    /**
     * Gets fixed_width_downsampled
     * @return \GPH\Model\GifImagesFixedWidthDownsampled
     */
    public function getFixedWidthDownsampled()
    {
        return $this->container['fixed_width_downsampled'];
    }

    /**
     * Sets fixed_width_downsampled
     * @param \GPH\Model\GifImagesFixedWidthDownsampled $fixed_width_downsampled
     * @return $this
     */
    public function setFixedWidthDownsampled($fixed_width_downsampled)
    {
        $this->container['fixed_width_downsampled'] = $fixed_width_downsampled;

        return $this;
    }

    /**
     * Gets fixed_height_small
     * @return \GPH\Model\GifImagesFixedHeightSmall
     */
    public function getFixedHeightSmall()
    {
        return $this->container['fixed_height_small'];
    }

    /**
     * Sets fixed_height_small
     * @param \GPH\Model\GifImagesFixedHeightSmall $fixed_height_small
     * @return $this
     */
    public function setFixedHeightSmall($fixed_height_small)
    {
        $this->container['fixed_height_small'] = $fixed_height_small;

        return $this;
    }

    /**
     * Gets fixed_height_small_still
     * @return \GPH\Model\GifImagesFixedHeightSmallStill
     */
    public function getFixedHeightSmallStill()
    {
        return $this->container['fixed_height_small_still'];
    }

    /**
     * Sets fixed_height_small_still
     * @param \GPH\Model\GifImagesFixedHeightSmallStill $fixed_height_small_still
     * @return $this
     */
    public function setFixedHeightSmallStill($fixed_height_small_still)
    {
        $this->container['fixed_height_small_still'] = $fixed_height_small_still;

        return $this;
    }

    /**
     * Gets fixed_width_small
     * @return \GPH\Model\GifImagesFixedWidthSmall
     */
    public function getFixedWidthSmall()
    {
        return $this->container['fixed_width_small'];
    }

    /**
     * Sets fixed_width_small
     * @param \GPH\Model\GifImagesFixedWidthSmall $fixed_width_small
     * @return $this
     */
    public function setFixedWidthSmall($fixed_width_small)
    {
        $this->container['fixed_width_small'] = $fixed_width_small;

        return $this;
    }

    /**
     * Gets fixed_width_small_still
     * @return \GPH\Model\GifImagesFixedWidthSmallStill
     */
    public function getFixedWidthSmallStill()
    {
        return $this->container['fixed_width_small_still'];
    }

    /**
     * Sets fixed_width_small_still
     * @param \GPH\Model\GifImagesFixedWidthSmallStill $fixed_width_small_still
     * @return $this
     */
    public function setFixedWidthSmallStill($fixed_width_small_still)
    {
        $this->container['fixed_width_small_still'] = $fixed_width_small_still;

        return $this;
    }

    /**
     * Gets downsized
     * @return \GPH\Model\GifImagesDownsized
     */
    public function getDownsized()
    {
        return $this->container['downsized'];
    }

    /**
     * Sets downsized
     * @param \GPH\Model\GifImagesDownsized $downsized
     * @return $this
     */
    public function setDownsized($downsized)
    {
        $this->container['downsized'] = $downsized;

        return $this;
    }

    /**
     * Gets downsized_still
     * @return \GPH\Model\GifImagesDownsizedStill
     */
    public function getDownsizedStill()
    {
        return $this->container['downsized_still'];
    }

    /**
     * Sets downsized_still
     * @param \GPH\Model\GifImagesDownsizedStill $downsized_still
     * @return $this
     */
    public function setDownsizedStill($downsized_still)
    {
        $this->container['downsized_still'] = $downsized_still;

        return $this;
    }

    /**
     * Gets downsized_large
     * @return \GPH\Model\GifImagesDownsizedLarge
     */
    public function getDownsizedLarge()
    {
        return $this->container['downsized_large'];
    }

    /**
     * Sets downsized_large
     * @param \GPH\Model\GifImagesDownsizedLarge $downsized_large
     * @return $this
     */
    public function setDownsizedLarge($downsized_large)
    {
        $this->container['downsized_large'] = $downsized_large;

        return $this;
    }

    /**
     * Gets downsized_medium
     * @return \GPH\Model\GifImagesDownsizedMedium
     */
    public function getDownsizedMedium()
    {
        return $this->container['downsized_medium'];
    }

    /**
     * Sets downsized_medium
     * @param \GPH\Model\GifImagesDownsizedMedium $downsized_medium
     * @return $this
     */
    public function setDownsizedMedium($downsized_medium)
    {
        $this->container['downsized_medium'] = $downsized_medium;

        return $this;
    }

    /**
     * Gets downsized_small
     * @return \GPH\Model\GifImagesDownsizedSmall
     */
    public function getDownsizedSmall()
    {
        return $this->container['downsized_small'];
    }

    /**
     * Sets downsized_small
     * @param \GPH\Model\GifImagesDownsizedSmall $downsized_small
     * @return $this
     */
    public function setDownsizedSmall($downsized_small)
    {
        $this->container['downsized_small'] = $downsized_small;

        return $this;
    }

    /**
     * Gets original
     * @return \GPH\Model\GifImagesOriginal
     */
    public function getOriginal()
    {
        return $this->container['original'];
    }

    /**
     * Sets original
     * @param \GPH\Model\GifImagesOriginal $original
     * @return $this
     */
    public function setOriginal($original)
    {
        $this->container['original'] = $original;

        return $this;
    }

    /**
     * Gets original_still
     * @return \GPH\Model\GifImagesOriginalStill
     */
    public function getOriginalStill()
    {
        return $this->container['original_still'];
    }

    /**
     * Sets original_still
     * @param \GPH\Model\GifImagesOriginalStill $original_still
     * @return $this
     */
    public function setOriginalStill($original_still)
    {
        $this->container['original_still'] = $original_still;

        return $this;
    }

    /**
     * Gets looping
     * @return \GPH\Model\GifImagesLooping
     */
    public function getLooping()
    {
        return $this->container['looping'];
    }

    /**
     * Sets looping
     * @param \GPH\Model\GifImagesLooping $looping
     * @return $this
     */
    public function setLooping($looping)
    {
        $this->container['looping'] = $looping;

        return $this;
    }

    /**
     * Gets preview
     * @return \GPH\Model\GifImagesPreview
     */
    public function getPreview()
    {
        return $this->container['preview'];
    }

    /**
     * Sets preview
     * @param \GPH\Model\GifImagesPreview $preview
     * @return $this
     */
    public function setPreview($preview)
    {
        $this->container['preview'] = $preview;

        return $this;
    }

    /**
     * Gets preview_gif
     * @return \GPH\Model\GifImagesPreviewGif
     */
    public function getPreviewGif()
    {
        return $this->container['preview_gif'];
    }

    /**
     * Sets preview_gif
     * @param \GPH\Model\GifImagesPreviewGif $preview_gif
     * @return $this
     */
    public function setPreviewGif($preview_gif)
    {
        $this->container['preview_gif'] = $preview_gif;

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


