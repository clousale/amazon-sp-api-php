<?php
/**
 * AdjustmentItem.
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
 * AdjustmentItem Class Doc Comment.
 *

 * @description An item in an adjustment to the seller&#x27;s account.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class AdjustmentItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'AdjustmentItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'quantity' => 'string',
'per_unit_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'total_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'seller_sku' => 'string',
'fn_sku' => 'string',
'product_description' => 'string',
'asin' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'quantity' => null,
'per_unit_amount' => null,
'total_amount' => null,
'seller_sku' => null,
'fn_sku' => null,
'product_description' => null,
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
        'quantity' => 'Quantity',
'per_unit_amount' => 'PerUnitAmount',
'total_amount' => 'TotalAmount',
'seller_sku' => 'SellerSKU',
'fn_sku' => 'FnSKU',
'product_description' => 'ProductDescription',
'asin' => 'ASIN',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'quantity' => 'setQuantity',
'per_unit_amount' => 'setPerUnitAmount',
'total_amount' => 'setTotalAmount',
'seller_sku' => 'setSellerSku',
'fn_sku' => 'setFnSku',
'product_description' => 'setProductDescription',
'asin' => 'setAsin',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'quantity' => 'getQuantity',
'per_unit_amount' => 'getPerUnitAmount',
'total_amount' => 'getTotalAmount',
'seller_sku' => 'getSellerSku',
'fn_sku' => 'getFnSku',
'product_description' => 'getProductDescription',
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
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['per_unit_amount'] = isset($data['per_unit_amount']) ? $data['per_unit_amount'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['seller_sku'] = isset($data['seller_sku']) ? $data['seller_sku'] : null;
        $this->container['fn_sku'] = isset($data['fn_sku']) ? $data['fn_sku'] : null;
        $this->container['product_description'] = isset($data['product_description']) ? $data['product_description'] : null;
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
     * Gets quantity.
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param string $quantity represents the number of units in the seller's inventory when the AdustmentType is FBAInventoryReimbursement
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets per_unit_amount.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getPerUnitAmount()
    {
        return $this->container['per_unit_amount'];
    }

    /**
     * Sets per_unit_amount.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency $per_unit_amount per_unit_amount
     *
     * @return $this
     */
    public function setPerUnitAmount($per_unit_amount)
    {
        $this->container['per_unit_amount'] = $per_unit_amount;

        return $this;
    }

    /**
     * Gets total_amount.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency $total_amount total_amount
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

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
     * @param string $fn_sku a unique identifier assigned to products stored in and fulfilled from a fulfillment center
     *
     * @return $this
     */
    public function setFnSku($fn_sku)
    {
        $this->container['fn_sku'] = $fn_sku;

        return $this;
    }

    /**
     * Gets product_description.
     *
     * @return string
     */
    public function getProductDescription()
    {
        return $this->container['product_description'];
    }

    /**
     * Sets product_description.
     *
     * @param string $product_description a short description of the item
     *
     * @return $this
     */
    public function setProductDescription($product_description)
    {
        $this->container['product_description'] = $product_description;

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
