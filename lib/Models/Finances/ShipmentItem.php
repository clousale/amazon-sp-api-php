<?php
/**
 * ShipmentItem.
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
 * ShipmentItem Class Doc Comment.
 *

 * @description An item of a shipment, refund, guarantee claim, or chargeback.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ShipmentItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ShipmentItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'seller_sku' => 'string',
'order_item_id' => 'string',
'order_adjustment_item_id' => 'string',
'quantity_shipped' => 'int',
'item_charge_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponentList',
'item_charge_adjustment_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponentList',
'item_fee_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList',
'item_fee_adjustment_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList',
'item_tax_withheld_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\TaxWithheldComponentList',
'promotion_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\PromotionList',
'promotion_adjustment_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\PromotionList',
'cost_of_points_granted' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'cost_of_points_returned' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'seller_sku' => null,
'order_item_id' => null,
'order_adjustment_item_id' => null,
'quantity_shipped' => 'int32',
'item_charge_list' => null,
'item_charge_adjustment_list' => null,
'item_fee_list' => null,
'item_fee_adjustment_list' => null,
'item_tax_withheld_list' => null,
'promotion_list' => null,
'promotion_adjustment_list' => null,
'cost_of_points_granted' => null,
'cost_of_points_returned' => null,    ];

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
'order_item_id' => 'OrderItemId',
'order_adjustment_item_id' => 'OrderAdjustmentItemId',
'quantity_shipped' => 'QuantityShipped',
'item_charge_list' => 'ItemChargeList',
'item_charge_adjustment_list' => 'ItemChargeAdjustmentList',
'item_fee_list' => 'ItemFeeList',
'item_fee_adjustment_list' => 'ItemFeeAdjustmentList',
'item_tax_withheld_list' => 'ItemTaxWithheldList',
'promotion_list' => 'PromotionList',
'promotion_adjustment_list' => 'PromotionAdjustmentList',
'cost_of_points_granted' => 'CostOfPointsGranted',
'cost_of_points_returned' => 'CostOfPointsReturned',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_sku' => 'setSellerSku',
'order_item_id' => 'setOrderItemId',
'order_adjustment_item_id' => 'setOrderAdjustmentItemId',
'quantity_shipped' => 'setQuantityShipped',
'item_charge_list' => 'setItemChargeList',
'item_charge_adjustment_list' => 'setItemChargeAdjustmentList',
'item_fee_list' => 'setItemFeeList',
'item_fee_adjustment_list' => 'setItemFeeAdjustmentList',
'item_tax_withheld_list' => 'setItemTaxWithheldList',
'promotion_list' => 'setPromotionList',
'promotion_adjustment_list' => 'setPromotionAdjustmentList',
'cost_of_points_granted' => 'setCostOfPointsGranted',
'cost_of_points_returned' => 'setCostOfPointsReturned',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_sku' => 'getSellerSku',
'order_item_id' => 'getOrderItemId',
'order_adjustment_item_id' => 'getOrderAdjustmentItemId',
'quantity_shipped' => 'getQuantityShipped',
'item_charge_list' => 'getItemChargeList',
'item_charge_adjustment_list' => 'getItemChargeAdjustmentList',
'item_fee_list' => 'getItemFeeList',
'item_fee_adjustment_list' => 'getItemFeeAdjustmentList',
'item_tax_withheld_list' => 'getItemTaxWithheldList',
'promotion_list' => 'getPromotionList',
'promotion_adjustment_list' => 'getPromotionAdjustmentList',
'cost_of_points_granted' => 'getCostOfPointsGranted',
'cost_of_points_returned' => 'getCostOfPointsReturned',    ];

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
        $this->container['order_item_id'] = isset($data['order_item_id']) ? $data['order_item_id'] : null;
        $this->container['order_adjustment_item_id'] = isset($data['order_adjustment_item_id']) ? $data['order_adjustment_item_id'] : null;
        $this->container['quantity_shipped'] = isset($data['quantity_shipped']) ? $data['quantity_shipped'] : null;
        $this->container['item_charge_list'] = isset($data['item_charge_list']) ? $data['item_charge_list'] : null;
        $this->container['item_charge_adjustment_list'] = isset($data['item_charge_adjustment_list']) ? $data['item_charge_adjustment_list'] : null;
        $this->container['item_fee_list'] = isset($data['item_fee_list']) ? $data['item_fee_list'] : null;
        $this->container['item_fee_adjustment_list'] = isset($data['item_fee_adjustment_list']) ? $data['item_fee_adjustment_list'] : null;
        $this->container['item_tax_withheld_list'] = isset($data['item_tax_withheld_list']) ? $data['item_tax_withheld_list'] : null;
        $this->container['promotion_list'] = isset($data['promotion_list']) ? $data['promotion_list'] : null;
        $this->container['promotion_adjustment_list'] = isset($data['promotion_adjustment_list']) ? $data['promotion_adjustment_list'] : null;
        $this->container['cost_of_points_granted'] = isset($data['cost_of_points_granted']) ? $data['cost_of_points_granted'] : null;
        $this->container['cost_of_points_returned'] = isset($data['cost_of_points_returned']) ? $data['cost_of_points_returned'] : null;
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
     * Gets order_item_id.
     *
     * @return string
     */
    public function getOrderItemId()
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id.
     *
     * @param string $order_item_id an Amazon-defined order item identifier
     *
     * @return $this
     */
    public function setOrderItemId($order_item_id)
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }

    /**
     * Gets order_adjustment_item_id.
     *
     * @return string
     */
    public function getOrderAdjustmentItemId()
    {
        return $this->container['order_adjustment_item_id'];
    }

    /**
     * Sets order_adjustment_item_id.
     *
     * @param string $order_adjustment_item_id an Amazon-defined order adjustment identifier defined for refunds, guarantee claims, and chargeback events
     *
     * @return $this
     */
    public function setOrderAdjustmentItemId($order_adjustment_item_id)
    {
        $this->container['order_adjustment_item_id'] = $order_adjustment_item_id;

        return $this;
    }

    /**
     * Gets quantity_shipped.
     *
     * @return int
     */
    public function getQuantityShipped()
    {
        return $this->container['quantity_shipped'];
    }

    /**
     * Sets quantity_shipped.
     *
     * @param int $quantity_shipped the number of items shipped
     *
     * @return $this
     */
    public function setQuantityShipped($quantity_shipped)
    {
        $this->container['quantity_shipped'] = $quantity_shipped;

        return $this;
    }

    /**
     * Gets item_charge_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponentList
     */
    public function getItemChargeList()
    {
        return $this->container['item_charge_list'];
    }

    /**
     * Sets item_charge_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponentList $item_charge_list item_charge_list
     *
     * @return $this
     */
    public function setItemChargeList($item_charge_list)
    {
        $this->container['item_charge_list'] = $item_charge_list;

        return $this;
    }

    /**
     * Gets item_charge_adjustment_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponentList
     */
    public function getItemChargeAdjustmentList()
    {
        return $this->container['item_charge_adjustment_list'];
    }

    /**
     * Sets item_charge_adjustment_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponentList $item_charge_adjustment_list item_charge_adjustment_list
     *
     * @return $this
     */
    public function setItemChargeAdjustmentList($item_charge_adjustment_list)
    {
        $this->container['item_charge_adjustment_list'] = $item_charge_adjustment_list;

        return $this;
    }

    /**
     * Gets item_fee_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList
     */
    public function getItemFeeList()
    {
        return $this->container['item_fee_list'];
    }

    /**
     * Sets item_fee_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList $item_fee_list item_fee_list
     *
     * @return $this
     */
    public function setItemFeeList($item_fee_list)
    {
        $this->container['item_fee_list'] = $item_fee_list;

        return $this;
    }

    /**
     * Gets item_fee_adjustment_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList
     */
    public function getItemFeeAdjustmentList()
    {
        return $this->container['item_fee_adjustment_list'];
    }

    /**
     * Sets item_fee_adjustment_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList $item_fee_adjustment_list item_fee_adjustment_list
     *
     * @return $this
     */
    public function setItemFeeAdjustmentList($item_fee_adjustment_list)
    {
        $this->container['item_fee_adjustment_list'] = $item_fee_adjustment_list;

        return $this;
    }

    /**
     * Gets item_tax_withheld_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\TaxWithheldComponentList
     */
    public function getItemTaxWithheldList()
    {
        return $this->container['item_tax_withheld_list'];
    }

    /**
     * Sets item_tax_withheld_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\TaxWithheldComponentList $item_tax_withheld_list item_tax_withheld_list
     *
     * @return $this
     */
    public function setItemTaxWithheldList($item_tax_withheld_list)
    {
        $this->container['item_tax_withheld_list'] = $item_tax_withheld_list;

        return $this;
    }

    /**
     * Gets promotion_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\PromotionList
     */
    public function getPromotionList()
    {
        return $this->container['promotion_list'];
    }

    /**
     * Sets promotion_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\PromotionList $promotion_list promotion_list
     *
     * @return $this
     */
    public function setPromotionList($promotion_list)
    {
        $this->container['promotion_list'] = $promotion_list;

        return $this;
    }

    /**
     * Gets promotion_adjustment_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\PromotionList
     */
    public function getPromotionAdjustmentList()
    {
        return $this->container['promotion_adjustment_list'];
    }

    /**
     * Sets promotion_adjustment_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\PromotionList $promotion_adjustment_list promotion_adjustment_list
     *
     * @return $this
     */
    public function setPromotionAdjustmentList($promotion_adjustment_list)
    {
        $this->container['promotion_adjustment_list'] = $promotion_adjustment_list;

        return $this;
    }

    /**
     * Gets cost_of_points_granted.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getCostOfPointsGranted()
    {
        return $this->container['cost_of_points_granted'];
    }

    /**
     * Sets cost_of_points_granted.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency $cost_of_points_granted cost_of_points_granted
     *
     * @return $this
     */
    public function setCostOfPointsGranted($cost_of_points_granted)
    {
        $this->container['cost_of_points_granted'] = $cost_of_points_granted;

        return $this;
    }

    /**
     * Gets cost_of_points_returned.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getCostOfPointsReturned()
    {
        return $this->container['cost_of_points_returned'];
    }

    /**
     * Sets cost_of_points_returned.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency $cost_of_points_returned cost_of_points_returned
     *
     * @return $this
     */
    public function setCostOfPointsReturned($cost_of_points_returned)
    {
        $this->container['cost_of_points_returned'] = $cost_of_points_returned;

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
