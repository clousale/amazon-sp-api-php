<?php
/**
 * IdentifierType.
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
 * IdentifierType Class Doc Comment.
 *

 * @description Specifies the identifiers used to uniquely identify an item.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class IdentifierType implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'IdentifierType';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_asin' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ASINIdentifier',
'sku_identifier' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerSKUIdentifier',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'marketplace_asin' => null,
'sku_identifier' => null,    ];

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
        'marketplace_asin' => 'MarketplaceASIN',
'sku_identifier' => 'SKUIdentifier',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_asin' => 'setMarketplaceAsin',
'sku_identifier' => 'setSkuIdentifier',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_asin' => 'getMarketplaceAsin',
'sku_identifier' => 'getSkuIdentifier',    ];

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
        $this->container['marketplace_asin'] = isset($data['marketplace_asin']) ? $data['marketplace_asin'] : null;
        $this->container['sku_identifier'] = isset($data['sku_identifier']) ? $data['sku_identifier'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['marketplace_asin']) {
            $invalidProperties[] = "'marketplace_asin' can't be null";
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
     * Gets marketplace_asin.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ASINIdentifier
     */
    public function getMarketplaceAsin()
    {
        return $this->container['marketplace_asin'];
    }

    /**
     * Sets marketplace_asin.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\ASINIdentifier $marketplace_asin marketplace_asin
     *
     * @return $this
     */
    public function setMarketplaceAsin($marketplace_asin)
    {
        $this->container['marketplace_asin'] = $marketplace_asin;

        return $this;
    }

    /**
     * Gets sku_identifier.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerSKUIdentifier
     */
    public function getSkuIdentifier()
    {
        return $this->container['sku_identifier'];
    }

    /**
     * Sets sku_identifier.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\SellerSKUIdentifier $sku_identifier sku_identifier
     *
     * @return $this
     */
    public function setSkuIdentifier($sku_identifier)
    {
        $this->container['sku_identifier'] = $sku_identifier;

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
