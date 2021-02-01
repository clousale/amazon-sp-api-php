<?php
/**
 * PackageDimensions.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * PackageDimensions Class Doc Comment.
 *

 * @description The dimensions of a package contained in a shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PackageDimensions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PackageDimensions';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'length' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PackageDimension',
'width' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PackageDimension',
'height' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PackageDimension',
'unit' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\UnitOfLength',
'predefined_package_dimensions' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PredefinedPackageDimensions',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'length' => null,
'width' => null,
'height' => null,
'unit' => null,
'predefined_package_dimensions' => null,    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'length' => 'Length',
'width' => 'Width',
'height' => 'Height',
'unit' => 'Unit',
'predefined_package_dimensions' => 'PredefinedPackageDimensions',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'length' => 'setLength',
'width' => 'setWidth',
'height' => 'setHeight',
'unit' => 'setUnit',
'predefined_package_dimensions' => 'setPredefinedPackageDimensions',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'length' => 'getLength',
'width' => 'getWidth',
'height' => 'getHeight',
'unit' => 'getUnit',
'predefined_package_dimensions' => 'getPredefinedPackageDimensions',    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['length'] = isset($data['length']) ? $data['length'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['predefined_package_dimensions'] = isset($data['predefined_package_dimensions']) ? $data['predefined_package_dimensions'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets length.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PackageDimension
     */
    public function getLength()
    {
        return $this->container['length'];
    }

    /**
     * Sets length.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PackageDimension $length length
     *
     * @return $this
     */
    public function setLength($length)
    {
        $this->container['length'] = $length;

        return $this;
    }

    /**
     * Gets width.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PackageDimension
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /**
     * Sets width.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PackageDimension $width width
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /**
     * Gets height.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PackageDimension
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /**
     * Sets height.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PackageDimension $height height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /**
     * Gets unit.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\UnitOfLength
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\UnitOfLength $unit unit
     *
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets predefined_package_dimensions.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PredefinedPackageDimensions
     */
    public function getPredefinedPackageDimensions()
    {
        return $this->container['predefined_package_dimensions'];
    }

    /**
     * Sets predefined_package_dimensions.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PredefinedPackageDimensions $predefined_package_dimensions predefined_package_dimensions
     *
     * @return $this
     */
    public function setPredefinedPackageDimensions($predefined_package_dimensions)
    {
        $this->container['predefined_package_dimensions'] = $predefined_package_dimensions;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     *
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
     *
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
