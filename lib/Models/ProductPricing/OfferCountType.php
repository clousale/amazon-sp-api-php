<?php
/**
 * OfferCountType.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * OfferCountType Class Doc Comment.
 *

 * @description The total number of offers for the specified condition and fulfillment channel.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class OfferCountType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'OfferCountType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'condition' => 'string',
'fulfillment_channel' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\FulfillmentChannelType',
'offer_count' => 'int',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'condition' => null,
'fulfillment_channel' => null,
'offer_count' => 'int32',    ];

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
        'condition' => 'condition',
'fulfillment_channel' => 'fulfillmentChannel',
'offer_count' => 'OfferCount',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'condition' => 'setCondition',
'fulfillment_channel' => 'setFulfillmentChannel',
'offer_count' => 'setOfferCount',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'condition' => 'getCondition',
'fulfillment_channel' => 'getFulfillmentChannel',
'offer_count' => 'getOfferCount',    ];

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
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['fulfillment_channel'] = isset($data['fulfillment_channel']) ? $data['fulfillment_channel'] : null;
        $this->container['offer_count'] = isset($data['offer_count']) ? $data['offer_count'] : null;
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
     * Gets condition.
     *
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition.
     *
     * @param string $condition Indicates the condition of the item. For example: New, Used, Collectible, Refurbished, or Club.
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets fulfillment_channel.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\FulfillmentChannelType
     */
    public function getFulfillmentChannel()
    {
        return $this->container['fulfillment_channel'];
    }

    /**
     * Sets fulfillment_channel.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\FulfillmentChannelType $fulfillment_channel fulfillment_channel
     *
     * @return $this
     */
    public function setFulfillmentChannel($fulfillment_channel)
    {
        $this->container['fulfillment_channel'] = $fulfillment_channel;

        return $this;
    }

    /**
     * Gets offer_count.
     *
     * @return int
     */
    public function getOfferCount()
    {
        return $this->container['offer_count'];
    }

    /**
     * Sets offer_count.
     *
     * @param int $offer_count the number of offers in a fulfillment channel that meet a specific condition
     *
     * @return $this
     */
    public function setOfferCount($offer_count)
    {
        $this->container['offer_count'] = $offer_count;

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
