<?php
/**
 * ShipmentEvent.
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
 * ShipmentEvent Class Doc Comment.
 *

 * @description A shipment, refund, guarantee claim, or chargeback.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ShipmentEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ShipmentEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'amazon_order_id' => 'string',
'seller_order_id' => 'string',
'marketplace_name' => 'string',
'order_charge_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponentList',
'order_charge_adjustment_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponentList',
'shipment_fee_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList',
'shipment_fee_adjustment_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList',
'order_fee_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList',
'order_fee_adjustment_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList',
'direct_payment_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\DirectPaymentList',
'posted_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\\DateTime',
'shipment_item_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\ShipmentItemList',
'shipment_item_adjustment_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\ShipmentItemList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'amazon_order_id' => null,
'seller_order_id' => null,
'marketplace_name' => null,
'order_charge_list' => null,
'order_charge_adjustment_list' => null,
'shipment_fee_list' => null,
'shipment_fee_adjustment_list' => null,
'order_fee_list' => null,
'order_fee_adjustment_list' => null,
'direct_payment_list' => null,
'posted_date' => null,
'shipment_item_list' => null,
'shipment_item_adjustment_list' => null,    ];

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
'seller_order_id' => 'SellerOrderId',
'marketplace_name' => 'MarketplaceName',
'order_charge_list' => 'OrderChargeList',
'order_charge_adjustment_list' => 'OrderChargeAdjustmentList',
'shipment_fee_list' => 'ShipmentFeeList',
'shipment_fee_adjustment_list' => 'ShipmentFeeAdjustmentList',
'order_fee_list' => 'OrderFeeList',
'order_fee_adjustment_list' => 'OrderFeeAdjustmentList',
'direct_payment_list' => 'DirectPaymentList',
'posted_date' => 'PostedDate',
'shipment_item_list' => 'ShipmentItemList',
'shipment_item_adjustment_list' => 'ShipmentItemAdjustmentList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
'seller_order_id' => 'setSellerOrderId',
'marketplace_name' => 'setMarketplaceName',
'order_charge_list' => 'setOrderChargeList',
'order_charge_adjustment_list' => 'setOrderChargeAdjustmentList',
'shipment_fee_list' => 'setShipmentFeeList',
'shipment_fee_adjustment_list' => 'setShipmentFeeAdjustmentList',
'order_fee_list' => 'setOrderFeeList',
'order_fee_adjustment_list' => 'setOrderFeeAdjustmentList',
'direct_payment_list' => 'setDirectPaymentList',
'posted_date' => 'setPostedDate',
'shipment_item_list' => 'setShipmentItemList',
'shipment_item_adjustment_list' => 'setShipmentItemAdjustmentList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
'seller_order_id' => 'getSellerOrderId',
'marketplace_name' => 'getMarketplaceName',
'order_charge_list' => 'getOrderChargeList',
'order_charge_adjustment_list' => 'getOrderChargeAdjustmentList',
'shipment_fee_list' => 'getShipmentFeeList',
'shipment_fee_adjustment_list' => 'getShipmentFeeAdjustmentList',
'order_fee_list' => 'getOrderFeeList',
'order_fee_adjustment_list' => 'getOrderFeeAdjustmentList',
'direct_payment_list' => 'getDirectPaymentList',
'posted_date' => 'getPostedDate',
'shipment_item_list' => 'getShipmentItemList',
'shipment_item_adjustment_list' => 'getShipmentItemAdjustmentList',    ];

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
        $this->container['seller_order_id'] = isset($data['seller_order_id']) ? $data['seller_order_id'] : null;
        $this->container['marketplace_name'] = isset($data['marketplace_name']) ? $data['marketplace_name'] : null;
        $this->container['order_charge_list'] = isset($data['order_charge_list']) ? $data['order_charge_list'] : null;
        $this->container['order_charge_adjustment_list'] = isset($data['order_charge_adjustment_list']) ? $data['order_charge_adjustment_list'] : null;
        $this->container['shipment_fee_list'] = isset($data['shipment_fee_list']) ? $data['shipment_fee_list'] : null;
        $this->container['shipment_fee_adjustment_list'] = isset($data['shipment_fee_adjustment_list']) ? $data['shipment_fee_adjustment_list'] : null;
        $this->container['order_fee_list'] = isset($data['order_fee_list']) ? $data['order_fee_list'] : null;
        $this->container['order_fee_adjustment_list'] = isset($data['order_fee_adjustment_list']) ? $data['order_fee_adjustment_list'] : null;
        $this->container['direct_payment_list'] = isset($data['direct_payment_list']) ? $data['direct_payment_list'] : null;
        $this->container['posted_date'] = isset($data['posted_date']) ? $data['posted_date'] : null;
        $this->container['shipment_item_list'] = isset($data['shipment_item_list']) ? $data['shipment_item_list'] : null;
        $this->container['shipment_item_adjustment_list'] = isset($data['shipment_item_adjustment_list']) ? $data['shipment_item_adjustment_list'] : null;
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
     * Gets seller_order_id.
     *
     * @return string
     */
    public function getSellerOrderId()
    {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id.
     *
     * @param string $seller_order_id a seller-defined identifier for an order
     *
     * @return $this
     */
    public function setSellerOrderId($seller_order_id)
    {
        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }

    /**
     * Gets marketplace_name.
     *
     * @return string
     */
    public function getMarketplaceName()
    {
        return $this->container['marketplace_name'];
    }

    /**
     * Sets marketplace_name.
     *
     * @param string $marketplace_name the name of the marketplace where the event occurred
     *
     * @return $this
     */
    public function setMarketplaceName($marketplace_name)
    {
        $this->container['marketplace_name'] = $marketplace_name;

        return $this;
    }

    /**
     * Gets order_charge_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponentList
     */
    public function getOrderChargeList()
    {
        return $this->container['order_charge_list'];
    }

    /**
     * Sets order_charge_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponentList $order_charge_list order_charge_list
     *
     * @return $this
     */
    public function setOrderChargeList($order_charge_list)
    {
        $this->container['order_charge_list'] = $order_charge_list;

        return $this;
    }

    /**
     * Gets order_charge_adjustment_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponentList
     */
    public function getOrderChargeAdjustmentList()
    {
        return $this->container['order_charge_adjustment_list'];
    }

    /**
     * Sets order_charge_adjustment_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponentList $order_charge_adjustment_list order_charge_adjustment_list
     *
     * @return $this
     */
    public function setOrderChargeAdjustmentList($order_charge_adjustment_list)
    {
        $this->container['order_charge_adjustment_list'] = $order_charge_adjustment_list;

        return $this;
    }

    /**
     * Gets shipment_fee_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList
     */
    public function getShipmentFeeList()
    {
        return $this->container['shipment_fee_list'];
    }

    /**
     * Sets shipment_fee_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList $shipment_fee_list shipment_fee_list
     *
     * @return $this
     */
    public function setShipmentFeeList($shipment_fee_list)
    {
        $this->container['shipment_fee_list'] = $shipment_fee_list;

        return $this;
    }

    /**
     * Gets shipment_fee_adjustment_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList
     */
    public function getShipmentFeeAdjustmentList()
    {
        return $this->container['shipment_fee_adjustment_list'];
    }

    /**
     * Sets shipment_fee_adjustment_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList $shipment_fee_adjustment_list shipment_fee_adjustment_list
     *
     * @return $this
     */
    public function setShipmentFeeAdjustmentList($shipment_fee_adjustment_list)
    {
        $this->container['shipment_fee_adjustment_list'] = $shipment_fee_adjustment_list;

        return $this;
    }

    /**
     * Gets order_fee_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList
     */
    public function getOrderFeeList()
    {
        return $this->container['order_fee_list'];
    }

    /**
     * Sets order_fee_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList $order_fee_list order_fee_list
     *
     * @return $this
     */
    public function setOrderFeeList($order_fee_list)
    {
        $this->container['order_fee_list'] = $order_fee_list;

        return $this;
    }

    /**
     * Gets order_fee_adjustment_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList
     */
    public function getOrderFeeAdjustmentList()
    {
        return $this->container['order_fee_adjustment_list'];
    }

    /**
     * Sets order_fee_adjustment_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList $order_fee_adjustment_list order_fee_adjustment_list
     *
     * @return $this
     */
    public function setOrderFeeAdjustmentList($order_fee_adjustment_list)
    {
        $this->container['order_fee_adjustment_list'] = $order_fee_adjustment_list;

        return $this;
    }

    /**
     * Gets direct_payment_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\DirectPaymentList
     */
    public function getDirectPaymentList()
    {
        return $this->container['direct_payment_list'];
    }

    /**
     * Sets direct_payment_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\DirectPaymentList $direct_payment_list direct_payment_list
     *
     * @return $this
     */
    public function setDirectPaymentList($direct_payment_list)
    {
        $this->container['direct_payment_list'] = $direct_payment_list;

        return $this;
    }

    /**
     * Gets posted_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\DateTime
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\DateTime $posted_date posted_date
     *
     * @return $this
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets shipment_item_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ShipmentItemList
     */
    public function getShipmentItemList()
    {
        return $this->container['shipment_item_list'];
    }

    /**
     * Sets shipment_item_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ShipmentItemList $shipment_item_list shipment_item_list
     *
     * @return $this
     */
    public function setShipmentItemList($shipment_item_list)
    {
        $this->container['shipment_item_list'] = $shipment_item_list;

        return $this;
    }

    /**
     * Gets shipment_item_adjustment_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ShipmentItemList
     */
    public function getShipmentItemAdjustmentList()
    {
        return $this->container['shipment_item_adjustment_list'];
    }

    /**
     * Sets shipment_item_adjustment_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ShipmentItemList $shipment_item_adjustment_list shipment_item_adjustment_list
     *
     * @return $this
     */
    public function setShipmentItemAdjustmentList($shipment_item_adjustment_list)
    {
        $this->container['shipment_item_adjustment_list'] = $shipment_item_adjustment_list;

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
