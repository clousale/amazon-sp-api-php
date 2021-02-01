<?php
/**
 * GetOffersResult.
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
 * GetOffersResult Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class GetOffersResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'GetOffersResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_id' => 'string',
'asin' => 'string',
'sku' => 'string',
'item_condition' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ConditionType',
'status' => 'string',
'identifier' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ItemIdentifier',
'summary' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Summary',
'offers' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferDetailList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'marketplace_id' => null,
'asin' => null,
'sku' => null,
'item_condition' => null,
'status' => null,
'identifier' => null,
'summary' => null,
'offers' => null,    ];

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
        'marketplace_id' => 'MarketplaceID',
'asin' => 'ASIN',
'sku' => 'SKU',
'item_condition' => 'ItemCondition',
'status' => 'status',
'identifier' => 'Identifier',
'summary' => 'Summary',
'offers' => 'Offers',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
'asin' => 'setAsin',
'sku' => 'setSku',
'item_condition' => 'setItemCondition',
'status' => 'setStatus',
'identifier' => 'setIdentifier',
'summary' => 'setSummary',
'offers' => 'setOffers',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
'asin' => 'getAsin',
'sku' => 'getSku',
'item_condition' => 'getItemCondition',
'status' => 'getStatus',
'identifier' => 'getIdentifier',
'summary' => 'getSummary',
'offers' => 'getOffers',    ];

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
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['item_condition'] = isset($data['item_condition']) ? $data['item_condition'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['offers'] = isset($data['offers']) ? $data['offers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['marketplace_id']) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if (null === $this->container['item_condition']) {
            $invalidProperties[] = "'item_condition' can't be null";
        }
        if (null === $this->container['status']) {
            $invalidProperties[] = "'status' can't be null";
        }
        if (null === $this->container['identifier']) {
            $invalidProperties[] = "'identifier' can't be null";
        }
        if (null === $this->container['summary']) {
            $invalidProperties[] = "'summary' can't be null";
        }
        if (null === $this->container['offers']) {
            $invalidProperties[] = "'offers' can't be null";
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
     * Gets marketplace_id.
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id a marketplace identifier
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets asin.
     *
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param string $asin the Amazon Standard Identification Number (ASIN) of the item
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets sku.
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku.
     *
     * @param string $sku the stock keeping unit (SKU) of the item
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets item_condition.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ConditionType
     */
    public function getItemCondition()
    {
        return $this->container['item_condition'];
    }

    /**
     * Sets item_condition.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ConditionType $item_condition item_condition
     *
     * @return $this
     */
    public function setItemCondition($item_condition)
    {
        $this->container['item_condition'] = $item_condition;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string $status the status of the operation
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets identifier.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ItemIdentifier
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ItemIdentifier $identifier identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets summary.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Summary
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\Summary $summary summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets offers.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferDetailList
     */
    public function getOffers()
    {
        return $this->container['offers'];
    }

    /**
     * Sets offers.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\OfferDetailList $offers offers
     *
     * @return $this
     */
    public function setOffers($offers)
    {
        $this->container['offers'] = $offers;

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
