<?php
/**
 * InboundShipmentPlanRequestItem.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * InboundShipmentPlanRequestItem Class Doc Comment.
 *

 * @description Item information for creating an inbound shipment plan. Submitted with a call to the createInboundShipmentPlan operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class InboundShipmentPlanRequestItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'InboundShipmentPlanRequestItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'seller_sku' => 'string',
'asin' => 'string',
'condition' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Condition',
'quantity' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity',
'quantity_in_case' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity',
'prep_details_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepDetailsList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'seller_sku' => null,
'asin' => null,
'condition' => null,
'quantity' => null,
'quantity_in_case' => null,
'prep_details_list' => null,    ];

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
        'seller_sku' => 'SellerSKU',
'asin' => 'ASIN',
'condition' => 'Condition',
'quantity' => 'Quantity',
'quantity_in_case' => 'QuantityInCase',
'prep_details_list' => 'PrepDetailsList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_sku' => 'setSellerSku',
'asin' => 'setAsin',
'condition' => 'setCondition',
'quantity' => 'setQuantity',
'quantity_in_case' => 'setQuantityInCase',
'prep_details_list' => 'setPrepDetailsList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_sku' => 'getSellerSku',
'asin' => 'getAsin',
'condition' => 'getCondition',
'quantity' => 'getQuantity',
'quantity_in_case' => 'getQuantityInCase',
'prep_details_list' => 'getPrepDetailsList',    ];

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
        $this->container['seller_sku'] = isset($data['seller_sku']) ? $data['seller_sku'] : null;
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['quantity_in_case'] = isset($data['quantity_in_case']) ? $data['quantity_in_case'] : null;
        $this->container['prep_details_list'] = isset($data['prep_details_list']) ? $data['prep_details_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['seller_sku']) {
            $invalidProperties[] = "'seller_sku' can't be null";
        }
        if (null === $this->container['asin']) {
            $invalidProperties[] = "'asin' can't be null";
        }
        if (null === $this->container['condition']) {
            $invalidProperties[] = "'condition' can't be null";
        }
        if (null === $this->container['quantity']) {
            $invalidProperties[] = "'quantity' can't be null";
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
     * @param string $seller_sku the seller SKU of the item
     *
     * @return $this
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

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
     * Gets condition.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Condition
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Condition $condition condition
     *
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets quantity.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantity_in_case.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity
     */
    public function getQuantityInCase()
    {
        return $this->container['quantity_in_case'];
    }

    /**
     * Sets quantity_in_case.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity $quantity_in_case quantity_in_case
     *
     * @return $this
     */
    public function setQuantityInCase($quantity_in_case)
    {
        $this->container['quantity_in_case'] = $quantity_in_case;

        return $this;
    }

    /**
     * Gets prep_details_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepDetailsList
     */
    public function getPrepDetailsList()
    {
        return $this->container['prep_details_list'];
    }

    /**
     * Sets prep_details_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepDetailsList $prep_details_list prep_details_list
     *
     * @return $this
     */
    public function setPrepDetailsList($prep_details_list)
    {
        $this->container['prep_details_list'] = $prep_details_list;

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
