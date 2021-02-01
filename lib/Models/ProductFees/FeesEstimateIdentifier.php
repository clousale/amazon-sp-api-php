<?php
/**
 * FeesEstimateIdentifier.
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
 * FeesEstimateIdentifier Class Doc Comment.
 *

 * @description An item identifier, marketplace, time of request, and other details that identify an estimate.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FeesEstimateIdentifier implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FeesEstimateIdentifier';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_id' => 'string',
'seller_id' => 'string',
'id_type' => 'string',
'id_value' => 'string',
'is_amazon_fulfilled' => 'bool',
'price_to_estimate_fees' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\PriceToEstimateFees',
'seller_input_identifier' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'marketplace_id' => null,
'seller_id' => null,
'id_type' => null,
'id_value' => null,
'is_amazon_fulfilled' => null,
'price_to_estimate_fees' => null,
'seller_input_identifier' => null,    ];

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
'seller_id' => 'SellerId',
'id_type' => 'IdType',
'id_value' => 'IdValue',
'is_amazon_fulfilled' => 'IsAmazonFulfilled',
'price_to_estimate_fees' => 'PriceToEstimateFees',
'seller_input_identifier' => 'SellerInputIdentifier',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
'seller_id' => 'setSellerId',
'id_type' => 'setIdType',
'id_value' => 'setIdValue',
'is_amazon_fulfilled' => 'setIsAmazonFulfilled',
'price_to_estimate_fees' => 'setPriceToEstimateFees',
'seller_input_identifier' => 'setSellerInputIdentifier',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
'seller_id' => 'getSellerId',
'id_type' => 'getIdType',
'id_value' => 'getIdValue',
'is_amazon_fulfilled' => 'getIsAmazonFulfilled',
'price_to_estimate_fees' => 'getPriceToEstimateFees',
'seller_input_identifier' => 'getSellerInputIdentifier',    ];

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
        $this->container['seller_id'] = isset($data['seller_id']) ? $data['seller_id'] : null;
        $this->container['id_type'] = isset($data['id_type']) ? $data['id_type'] : null;
        $this->container['id_value'] = isset($data['id_value']) ? $data['id_value'] : null;
        $this->container['is_amazon_fulfilled'] = isset($data['is_amazon_fulfilled']) ? $data['is_amazon_fulfilled'] : null;
        $this->container['price_to_estimate_fees'] = isset($data['price_to_estimate_fees']) ? $data['price_to_estimate_fees'] : null;
        $this->container['seller_input_identifier'] = isset($data['seller_input_identifier']) ? $data['seller_input_identifier'] : null;
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
     * Gets seller_id.
     *
     * @return string
     */
    public function getSellerId()
    {
        return $this->container['seller_id'];
    }

    /**
     * Sets seller_id.
     *
     * @param string $seller_id the seller identifier
     *
     * @return $this
     */
    public function setSellerId($seller_id)
    {
        $this->container['seller_id'] = $seller_id;

        return $this;
    }

    /**
     * Gets id_type.
     *
     * @return string
     */
    public function getIdType()
    {
        return $this->container['id_type'];
    }

    /**
     * Sets id_type.
     *
     * @param string $id_type the type of item identifier specified
     *
     * @return $this
     */
    public function setIdType($id_type)
    {
        $this->container['id_type'] = $id_type;

        return $this;
    }

    /**
     * Gets id_value.
     *
     * @return string
     */
    public function getIdValue()
    {
        return $this->container['id_value'];
    }

    /**
     * Sets id_value.
     *
     * @param string $id_value the item identifier
     *
     * @return $this
     */
    public function setIdValue($id_value)
    {
        $this->container['id_value'] = $id_value;

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
     * Gets seller_input_identifier.
     *
     * @return string
     */
    public function getSellerInputIdentifier()
    {
        return $this->container['seller_input_identifier'];
    }

    /**
     * Sets seller_input_identifier.
     *
     * @param string $seller_input_identifier a unique identifier provided by the caller to track this request
     *
     * @return $this
     */
    public function setSellerInputIdentifier($seller_input_identifier)
    {
        $this->container['seller_input_identifier'] = $seller_input_identifier;

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
