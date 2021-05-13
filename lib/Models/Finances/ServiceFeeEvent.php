<?php
/**
 * ServiceFeeEvent.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Finances;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * ServiceFeeEvent Class Doc Comment.
 *

 * @description A service fee on the seller&#x27;s account.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ServiceFeeEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ServiceFeeEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'amazon_order_id' => 'string',
'fee_reason' => 'string',
'fee_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList',
'seller_sku' => 'string',
'fn_sku' => 'string',
'fee_description' => 'string',
'asin' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'amazon_order_id' => null,
'fee_reason' => null,
'fee_list' => null,
'seller_sku' => null,
'fn_sku' => null,
'fee_description' => null,
'asin' => null,    ];

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
        'amazon_order_id' => 'AmazonOrderId',
'fee_reason' => 'FeeReason',
'fee_list' => 'FeeList',
'seller_sku' => 'SellerSKU',
'fn_sku' => 'FnSKU',
'fee_description' => 'FeeDescription',
'asin' => 'ASIN',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
'fee_reason' => 'setFeeReason',
'fee_list' => 'setFeeList',
'seller_sku' => 'setSellerSku',
'fn_sku' => 'setFnSku',
'fee_description' => 'setFeeDescription',
'asin' => 'setAsin',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
'fee_reason' => 'getFeeReason',
'fee_list' => 'getFeeList',
'seller_sku' => 'getSellerSku',
'fn_sku' => 'getFnSku',
'fee_description' => 'getFeeDescription',
'asin' => 'getAsin',    ];

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
        $this->container['amazon_order_id'] = isset($data['amazon_order_id']) ? $data['amazon_order_id'] : null;
        $this->container['fee_reason'] = isset($data['fee_reason']) ? $data['fee_reason'] : null;
        $this->container['fee_list'] = isset($data['fee_list']) ? $data['fee_list'] : null;
        $this->container['seller_sku'] = isset($data['seller_sku']) ? $data['seller_sku'] : null;
        $this->container['fn_sku'] = isset($data['fn_sku']) ? $data['fn_sku'] : null;
        $this->container['fee_description'] = isset($data['fee_description']) ? $data['fee_description'] : null;
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
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
     * Gets amazon_order_id.
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id.
     *
     * @param string $amazon_order_id an Amazon-defined identifier for an order
     *
     * @return $this
     */
    public function setAmazonOrderId($amazon_order_id)
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
    }

    /**
     * Gets fee_reason.
     *
     * @return string
     */
    public function getFeeReason()
    {
        return $this->container['fee_reason'];
    }

    /**
     * Sets fee_reason.
     *
     * @param string $fee_reason a short description of the service fee reason
     *
     * @return $this
     */
    public function setFeeReason($fee_reason)
    {
        $this->container['fee_reason'] = $fee_reason;

        return $this;
    }

    /**
     * Gets fee_list.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList
     */
    public function getFeeList()
    {
        return $this->container['fee_list'];
    }

    /**
     * Sets fee_list.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList $fee_list fee_list
     *
     * @return $this
     */
    public function setFeeList($fee_list)
    {
        $this->container['fee_list'] = $fee_list;

        return $this;
    }

    /**
     * Gets seller_sku.
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku.
     *
     * @param string $seller_sku The seller SKU of the item. The seller SKU is qualified by the seller's seller ID, which is included with every call to the Selling Partner API.
     *
     * @return $this
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets fn_sku.
     *
     * @return string
     */
    public function getFnSku()
    {
        return $this->container['fn_sku'];
    }

    /**
     * Sets fn_sku.
     *
     * @param string $fn_sku a unique identifier assigned by Amazon to products stored in and fulfilled from an Amazon fulfillment center
     *
     * @return $this
     */
    public function setFnSku($fn_sku)
    {
        $this->container['fn_sku'] = $fn_sku;

        return $this;
    }

    /**
     * Gets fee_description.
     *
     * @return string
     */
    public function getFeeDescription()
    {
        return $this->container['fee_description'];
    }

    /**
     * Sets fee_description.
     *
     * @param string $fee_description a short description of the service fee event
     *
     * @return $this
     */
    public function setFeeDescription($fee_description)
    {
        $this->container['fee_description'] = $fee_description;

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
