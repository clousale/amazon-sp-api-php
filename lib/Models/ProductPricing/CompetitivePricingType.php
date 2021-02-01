<?php
/**
 * CompetitivePricingType.
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
 * CompetitivePricingType Class Doc Comment.
 *

 * @description Competitive pricing information for the item.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class CompetitivePricingType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'CompetitivePricingType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'competitive_prices' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\CompetitivePriceList',
'number_of_offer_listings' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\NumberOfOfferListingsList',
'trade_in_value' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'competitive_prices' => null,
'number_of_offer_listings' => null,
'trade_in_value' => null,    ];

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
        'competitive_prices' => 'CompetitivePrices',
'number_of_offer_listings' => 'NumberOfOfferListings',
'trade_in_value' => 'TradeInValue',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'competitive_prices' => 'setCompetitivePrices',
'number_of_offer_listings' => 'setNumberOfOfferListings',
'trade_in_value' => 'setTradeInValue',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'competitive_prices' => 'getCompetitivePrices',
'number_of_offer_listings' => 'getNumberOfOfferListings',
'trade_in_value' => 'getTradeInValue',    ];

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
        $this->container['competitive_prices'] = isset($data['competitive_prices']) ? $data['competitive_prices'] : null;
        $this->container['number_of_offer_listings'] = isset($data['number_of_offer_listings']) ? $data['number_of_offer_listings'] : null;
        $this->container['trade_in_value'] = isset($data['trade_in_value']) ? $data['trade_in_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['competitive_prices']) {
            $invalidProperties[] = "'competitive_prices' can't be null";
        }
        if (null === $this->container['number_of_offer_listings']) {
            $invalidProperties[] = "'number_of_offer_listings' can't be null";
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
     * Gets competitive_prices.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\CompetitivePriceList
     */
    public function getCompetitivePrices()
    {
        return $this->container['competitive_prices'];
    }

    /**
     * Sets competitive_prices.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\CompetitivePriceList $competitive_prices competitive_prices
     *
     * @return $this
     */
    public function setCompetitivePrices($competitive_prices)
    {
        $this->container['competitive_prices'] = $competitive_prices;

        return $this;
    }

    /**
     * Gets number_of_offer_listings.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\NumberOfOfferListingsList
     */
    public function getNumberOfOfferListings()
    {
        return $this->container['number_of_offer_listings'];
    }

    /**
     * Sets number_of_offer_listings.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\NumberOfOfferListingsList $number_of_offer_listings number_of_offer_listings
     *
     * @return $this
     */
    public function setNumberOfOfferListings($number_of_offer_listings)
    {
        $this->container['number_of_offer_listings'] = $number_of_offer_listings;

        return $this;
    }

    /**
     * Gets trade_in_value.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType
     */
    public function getTradeInValue()
    {
        return $this->container['trade_in_value'];
    }

    /**
     * Sets trade_in_value.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\MoneyType $trade_in_value trade_in_value
     *
     * @return $this
     */
    public function setTradeInValue($trade_in_value)
    {
        $this->container['trade_in_value'] = $trade_in_value;

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
