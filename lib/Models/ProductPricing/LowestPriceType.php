<?php
/**
 * LowestPriceType.
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
 * LowestPriceType Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class LowestPriceType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'LowestPriceType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'condition' => 'string',
'fulfillment_channel' => 'string',
'landed_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
'listing_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
'shipping' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',
'points' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Points',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'condition' => null,
'fulfillment_channel' => null,
'landed_price' => null,
'listing_price' => null,
'shipping' => null,
'points' => null,    ];

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
'landed_price' => 'LandedPrice',
'listing_price' => 'ListingPrice',
'shipping' => 'Shipping',
'points' => 'Points',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'condition' => 'setCondition',
'fulfillment_channel' => 'setFulfillmentChannel',
'landed_price' => 'setLandedPrice',
'listing_price' => 'setListingPrice',
'shipping' => 'setShipping',
'points' => 'setPoints',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'condition' => 'getCondition',
'fulfillment_channel' => 'getFulfillmentChannel',
'landed_price' => 'getLandedPrice',
'listing_price' => 'getListingPrice',
'shipping' => 'getShipping',
'points' => 'getPoints',    ];

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
        $this->container['landed_price'] = isset($data['landed_price']) ? $data['landed_price'] : null;
        $this->container['listing_price'] = isset($data['listing_price']) ? $data['listing_price'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['points'] = isset($data['points']) ? $data['points'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['condition']) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if (null === $this->container['fulfillment_channel']) {
            $invalidProperties[] = "'fulfillment_channel' can't be null";
        }
        if (null === $this->container['landed_price']) {
            $invalidProperties[] = "'landed_price' can't be null";
        }
        if (null === $this->container['listing_price']) {
            $invalidProperties[] = "'listing_price' can't be null";
        }
        if (null === $this->container['shipping']) {
            $invalidProperties[] = "'shipping' can't be null";
        }

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
     * @return string
     */
    public function getFulfillmentChannel()
    {
        return $this->container['fulfillment_channel'];
    }

    /**
     * Sets fulfillment_channel.
     *
     * @param string $fulfillment_channel indicates whether the item is fulfilled by Amazon or by the seller
     *
     * @return $this
     */
    public function setFulfillmentChannel($fulfillment_channel)
    {
        $this->container['fulfillment_channel'] = $fulfillment_channel;

        return $this;
    }

    /**
     * Gets landed_price.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType
     */
    public function getLandedPrice()
    {
        return $this->container['landed_price'];
    }

    /**
     * Sets landed_price.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType $landed_price landed_price
     *
     * @return $this
     */
    public function setLandedPrice($landed_price)
    {
        $this->container['landed_price'] = $landed_price;

        return $this;
    }

    /**
     * Gets listing_price.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType
     */
    public function getListingPrice()
    {
        return $this->container['listing_price'];
    }

    /**
     * Sets listing_price.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType $listing_price listing_price
     *
     * @return $this
     */
    public function setListingPrice($listing_price)
    {
        $this->container['listing_price'] = $listing_price;

        return $this;
    }

    /**
     * Gets shipping.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets points.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Points
     */
    public function getPoints()
    {
        return $this->container['points'];
    }

    /**
     * Sets points.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Points $points points
     *
     * @return $this
     */
    public function setPoints($points)
    {
        $this->container['points'] = $points;

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
