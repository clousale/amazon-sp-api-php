<?php
/**
 * FeesEstimateRequest.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Product Fees.
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\ProductFees;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * FeesEstimateRequest Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FeesEstimateRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FeesEstimateRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_id' => 'string',
'is_amazon_fulfilled' => 'bool',
'price_to_estimate_fees' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\PriceToEstimateFees',
'identifier' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'marketplace_id' => null,
'is_amazon_fulfilled' => null,
'price_to_estimate_fees' => null,
'identifier' => null,    ];

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
        'marketplace_id' => 'MarketplaceId',
'is_amazon_fulfilled' => 'IsAmazonFulfilled',
'price_to_estimate_fees' => 'PriceToEstimateFees',
'identifier' => 'Identifier',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
'is_amazon_fulfilled' => 'setIsAmazonFulfilled',
'price_to_estimate_fees' => 'setPriceToEstimateFees',
'identifier' => 'setIdentifier',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
'is_amazon_fulfilled' => 'getIsAmazonFulfilled',
'price_to_estimate_fees' => 'getPriceToEstimateFees',
'identifier' => 'getIdentifier',    ];

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
        $this->container['is_amazon_fulfilled'] = isset($data['is_amazon_fulfilled']) ? $data['is_amazon_fulfilled'] : null;
        $this->container['price_to_estimate_fees'] = isset($data['price_to_estimate_fees']) ? $data['price_to_estimate_fees'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
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
        if (null === $this->container['price_to_estimate_fees']) {
            $invalidProperties[] = "'price_to_estimate_fees' can't be null";
        }
        if (null === $this->container['identifier']) {
            $invalidProperties[] = "'identifier' can't be null";
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
     * Gets is_amazon_fulfilled.
     *
     * @return bool
     */
    public function getIsAmazonFulfilled()
    {
        return $this->container['is_amazon_fulfilled'];
    }

    /**
     * Sets is_amazon_fulfilled.
     *
     * @param bool $is_amazon_fulfilled when true, the offer is fulfilled by Amazon
     *
     * @return $this
     */
    public function setIsAmazonFulfilled($is_amazon_fulfilled)
    {
        $this->container['is_amazon_fulfilled'] = $is_amazon_fulfilled;

        return $this;
    }

    /**
     * Gets price_to_estimate_fees.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\PriceToEstimateFees
     */
    public function getPriceToEstimateFees()
    {
        return $this->container['price_to_estimate_fees'];
    }

    /**
     * Sets price_to_estimate_fees.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\PriceToEstimateFees $price_to_estimate_fees price_to_estimate_fees
     *
     * @return $this
     */
    public function setPriceToEstimateFees($price_to_estimate_fees)
    {
        $this->container['price_to_estimate_fees'] = $price_to_estimate_fees;

        return $this;
    }

    /**
     * Gets identifier.
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier.
     *
     * @param string $identifier the product price on which the fee estimate is based
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

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
