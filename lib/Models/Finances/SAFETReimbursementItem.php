<?php
/**
 * SAFETReimbursementItem.
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
 * SAFETReimbursementItem Class Doc Comment.
 *

 * @description An item from a SAFE-T claim reimbursement.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class SAFETReimbursementItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'SAFETReimbursementItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'item_charge_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponentList',
'product_description' => 'string',
'quantity' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'item_charge_list' => null,
'product_description' => null,
'quantity' => null,    ];

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
        'item_charge_list' => 'itemChargeList',
'product_description' => 'productDescription',
'quantity' => 'quantity',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'item_charge_list' => 'setItemChargeList',
'product_description' => 'setProductDescription',
'quantity' => 'setQuantity',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'item_charge_list' => 'getItemChargeList',
'product_description' => 'getProductDescription',
'quantity' => 'getQuantity',    ];

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
        $this->container['item_charge_list'] = isset($data['item_charge_list']) ? $data['item_charge_list'] : null;
        $this->container['product_description'] = isset($data['product_description']) ? $data['product_description'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
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
     * Gets item_charge_list.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponentList
     */
    public function getItemChargeList()
    {
        return $this->container['item_charge_list'];
    }

    /**
     * Sets item_charge_list.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponentList $item_charge_list item_charge_list
     *
     * @return $this
     */
    public function setItemChargeList($item_charge_list)
    {
        $this->container['item_charge_list'] = $item_charge_list;

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
     * @param string $product_description the description of the item as shown on the product detail page on the retail website
     *
     * @return $this
     */
    public function setProductDescription($product_description)
    {
        $this->container['product_description'] = $product_description;

        return $this;
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
     * @param string $quantity the number of units of the item being reimbursed
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
