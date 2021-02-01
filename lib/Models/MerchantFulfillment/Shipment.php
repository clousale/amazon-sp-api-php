<?php
/**
 * Shipment.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * Shipment Class Doc Comment.
 *

 * @description The details of a shipment, including the shipment status.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Shipment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Shipment';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipment_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShipmentId',
'amazon_order_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AmazonOrderId',
'seller_order_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\SellerOrderId',
'item_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ItemList',
'ship_from_address' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Address',
'ship_to_address' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Address',
'package_dimensions' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PackageDimensions',
'weight' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Weight',
'insurance' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CurrencyAmount',
'shipping_service' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShippingService',
'label' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Label',
'status' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShipmentStatus',
'tracking_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\TrackingId',
'created_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Timestamp',
'last_updated_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Timestamp',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'shipment_id' => null,
'amazon_order_id' => null,
'seller_order_id' => null,
'item_list' => null,
'ship_from_address' => null,
'ship_to_address' => null,
'package_dimensions' => null,
'weight' => null,
'insurance' => null,
'shipping_service' => null,
'label' => null,
'status' => null,
'tracking_id' => null,
'created_date' => null,
'last_updated_date' => null,    ];

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
        'shipment_id' => 'ShipmentId',
'amazon_order_id' => 'AmazonOrderId',
'seller_order_id' => 'SellerOrderId',
'item_list' => 'ItemList',
'ship_from_address' => 'ShipFromAddress',
'ship_to_address' => 'ShipToAddress',
'package_dimensions' => 'PackageDimensions',
'weight' => 'Weight',
'insurance' => 'Insurance',
'shipping_service' => 'ShippingService',
'label' => 'Label',
'status' => 'Status',
'tracking_id' => 'TrackingId',
'created_date' => 'CreatedDate',
'last_updated_date' => 'LastUpdatedDate',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_id' => 'setShipmentId',
'amazon_order_id' => 'setAmazonOrderId',
'seller_order_id' => 'setSellerOrderId',
'item_list' => 'setItemList',
'ship_from_address' => 'setShipFromAddress',
'ship_to_address' => 'setShipToAddress',
'package_dimensions' => 'setPackageDimensions',
'weight' => 'setWeight',
'insurance' => 'setInsurance',
'shipping_service' => 'setShippingService',
'label' => 'setLabel',
'status' => 'setStatus',
'tracking_id' => 'setTrackingId',
'created_date' => 'setCreatedDate',
'last_updated_date' => 'setLastUpdatedDate',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_id' => 'getShipmentId',
'amazon_order_id' => 'getAmazonOrderId',
'seller_order_id' => 'getSellerOrderId',
'item_list' => 'getItemList',
'ship_from_address' => 'getShipFromAddress',
'ship_to_address' => 'getShipToAddress',
'package_dimensions' => 'getPackageDimensions',
'weight' => 'getWeight',
'insurance' => 'getInsurance',
'shipping_service' => 'getShippingService',
'label' => 'getLabel',
'status' => 'getStatus',
'tracking_id' => 'getTrackingId',
'created_date' => 'getCreatedDate',
'last_updated_date' => 'getLastUpdatedDate',    ];

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
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['amazon_order_id'] = isset($data['amazon_order_id']) ? $data['amazon_order_id'] : null;
        $this->container['seller_order_id'] = isset($data['seller_order_id']) ? $data['seller_order_id'] : null;
        $this->container['item_list'] = isset($data['item_list']) ? $data['item_list'] : null;
        $this->container['ship_from_address'] = isset($data['ship_from_address']) ? $data['ship_from_address'] : null;
        $this->container['ship_to_address'] = isset($data['ship_to_address']) ? $data['ship_to_address'] : null;
        $this->container['package_dimensions'] = isset($data['package_dimensions']) ? $data['package_dimensions'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['insurance'] = isset($data['insurance']) ? $data['insurance'] : null;
        $this->container['shipping_service'] = isset($data['shipping_service']) ? $data['shipping_service'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['tracking_id'] = isset($data['tracking_id']) ? $data['tracking_id'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['last_updated_date'] = isset($data['last_updated_date']) ? $data['last_updated_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['shipment_id']) {
            $invalidProperties[] = "'shipment_id' can't be null";
        }
        if (null === $this->container['amazon_order_id']) {
            $invalidProperties[] = "'amazon_order_id' can't be null";
        }
        if (null === $this->container['item_list']) {
            $invalidProperties[] = "'item_list' can't be null";
        }
        if (null === $this->container['ship_from_address']) {
            $invalidProperties[] = "'ship_from_address' can't be null";
        }
        if (null === $this->container['ship_to_address']) {
            $invalidProperties[] = "'ship_to_address' can't be null";
        }
        if (null === $this->container['package_dimensions']) {
            $invalidProperties[] = "'package_dimensions' can't be null";
        }
        if (null === $this->container['weight']) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if (null === $this->container['insurance']) {
            $invalidProperties[] = "'insurance' can't be null";
        }
        if (null === $this->container['shipping_service']) {
            $invalidProperties[] = "'shipping_service' can't be null";
        }
        if (null === $this->container['label']) {
            $invalidProperties[] = "'label' can't be null";
        }
        if (null === $this->container['status']) {
            $invalidProperties[] = "'status' can't be null";
        }
        if (null === $this->container['created_date']) {
            $invalidProperties[] = "'created_date' can't be null";
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
     * Gets shipment_id.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShipmentId
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShipmentId $shipment_id shipment_id
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets amazon_order_id.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AmazonOrderId
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AmazonOrderId $amazon_order_id amazon_order_id
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
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\SellerOrderId
     */
    public function getSellerOrderId()
    {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\SellerOrderId $seller_order_id seller_order_id
     *
     * @return $this
     */
    public function setSellerOrderId($seller_order_id)
    {
        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }

    /**
     * Gets item_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ItemList
     */
    public function getItemList()
    {
        return $this->container['item_list'];
    }

    /**
     * Sets item_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ItemList $item_list item_list
     *
     * @return $this
     */
    public function setItemList($item_list)
    {
        $this->container['item_list'] = $item_list;

        return $this;
    }

    /**
     * Gets ship_from_address.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Address
     */
    public function getShipFromAddress()
    {
        return $this->container['ship_from_address'];
    }

    /**
     * Sets ship_from_address.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Address $ship_from_address ship_from_address
     *
     * @return $this
     */
    public function setShipFromAddress($ship_from_address)
    {
        $this->container['ship_from_address'] = $ship_from_address;

        return $this;
    }

    /**
     * Gets ship_to_address.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Address
     */
    public function getShipToAddress()
    {
        return $this->container['ship_to_address'];
    }

    /**
     * Sets ship_to_address.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Address $ship_to_address ship_to_address
     *
     * @return $this
     */
    public function setShipToAddress($ship_to_address)
    {
        $this->container['ship_to_address'] = $ship_to_address;

        return $this;
    }

    /**
     * Gets package_dimensions.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PackageDimensions
     */
    public function getPackageDimensions()
    {
        return $this->container['package_dimensions'];
    }

    /**
     * Sets package_dimensions.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PackageDimensions $package_dimensions package_dimensions
     *
     * @return $this
     */
    public function setPackageDimensions($package_dimensions)
    {
        $this->container['package_dimensions'] = $package_dimensions;

        return $this;
    }

    /**
     * Gets weight.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Weight $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets insurance.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CurrencyAmount
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CurrencyAmount $insurance insurance
     *
     * @return $this
     */
    public function setInsurance($insurance)
    {
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets shipping_service.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShippingService
     */
    public function getShippingService()
    {
        return $this->container['shipping_service'];
    }

    /**
     * Sets shipping_service.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShippingService $shipping_service shipping_service
     *
     * @return $this
     */
    public function setShippingService($shipping_service)
    {
        $this->container['shipping_service'] = $shipping_service;

        return $this;
    }

    /**
     * Gets label.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Label
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Label $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShipmentStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShipmentStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets tracking_id.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\TrackingId
     */
    public function getTrackingId()
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\TrackingId $tracking_id tracking_id
     *
     * @return $this
     */
    public function setTrackingId($tracking_id)
    {
        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }

    /**
     * Gets created_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Timestamp
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Timestamp $created_date created_date
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets last_updated_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Timestamp
     */
    public function getLastUpdatedDate()
    {
        return $this->container['last_updated_date'];
    }

    /**
     * Sets last_updated_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Timestamp $last_updated_date last_updated_date
     *
     * @return $this
     */
    public function setLastUpdatedDate($last_updated_date)
    {
        $this->container['last_updated_date'] = $last_updated_date;

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
