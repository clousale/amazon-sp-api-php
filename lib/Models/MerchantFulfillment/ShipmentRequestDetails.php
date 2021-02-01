<?php
/**
 * ShipmentRequestDetails.
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
 * ShipmentRequestDetails Class Doc Comment.
 *

 * @description Shipment information required for requesting shipping service offers or for creating a shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ShipmentRequestDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ShipmentRequestDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'amazon_order_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AmazonOrderId',
'seller_order_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\SellerOrderId',
'item_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ItemList',
'ship_from_address' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Address',
'package_dimensions' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PackageDimensions',
'weight' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Weight',
'must_arrive_by_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Timestamp',
'ship_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Timestamp',
'shipping_service_options' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShippingServiceOptions',
'label_customization' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\LabelCustomization',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'amazon_order_id' => null,
'seller_order_id' => null,
'item_list' => null,
'ship_from_address' => null,
'package_dimensions' => null,
'weight' => null,
'must_arrive_by_date' => null,
'ship_date' => null,
'shipping_service_options' => null,
'label_customization' => null,    ];

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
'item_list' => 'ItemList',
'ship_from_address' => 'ShipFromAddress',
'package_dimensions' => 'PackageDimensions',
'weight' => 'Weight',
'must_arrive_by_date' => 'MustArriveByDate',
'ship_date' => 'ShipDate',
'shipping_service_options' => 'ShippingServiceOptions',
'label_customization' => 'LabelCustomization',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'amazon_order_id' => 'setAmazonOrderId',
'seller_order_id' => 'setSellerOrderId',
'item_list' => 'setItemList',
'ship_from_address' => 'setShipFromAddress',
'package_dimensions' => 'setPackageDimensions',
'weight' => 'setWeight',
'must_arrive_by_date' => 'setMustArriveByDate',
'ship_date' => 'setShipDate',
'shipping_service_options' => 'setShippingServiceOptions',
'label_customization' => 'setLabelCustomization',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'amazon_order_id' => 'getAmazonOrderId',
'seller_order_id' => 'getSellerOrderId',
'item_list' => 'getItemList',
'ship_from_address' => 'getShipFromAddress',
'package_dimensions' => 'getPackageDimensions',
'weight' => 'getWeight',
'must_arrive_by_date' => 'getMustArriveByDate',
'ship_date' => 'getShipDate',
'shipping_service_options' => 'getShippingServiceOptions',
'label_customization' => 'getLabelCustomization',    ];

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
        $this->container['item_list'] = isset($data['item_list']) ? $data['item_list'] : null;
        $this->container['ship_from_address'] = isset($data['ship_from_address']) ? $data['ship_from_address'] : null;
        $this->container['package_dimensions'] = isset($data['package_dimensions']) ? $data['package_dimensions'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['must_arrive_by_date'] = isset($data['must_arrive_by_date']) ? $data['must_arrive_by_date'] : null;
        $this->container['ship_date'] = isset($data['ship_date']) ? $data['ship_date'] : null;
        $this->container['shipping_service_options'] = isset($data['shipping_service_options']) ? $data['shipping_service_options'] : null;
        $this->container['label_customization'] = isset($data['label_customization']) ? $data['label_customization'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['amazon_order_id']) {
            $invalidProperties[] = "'amazon_order_id' can't be null";
        }
        if (null === $this->container['item_list']) {
            $invalidProperties[] = "'item_list' can't be null";
        }
        if (null === $this->container['ship_from_address']) {
            $invalidProperties[] = "'ship_from_address' can't be null";
        }
        if (null === $this->container['package_dimensions']) {
            $invalidProperties[] = "'package_dimensions' can't be null";
        }
        if (null === $this->container['weight']) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if (null === $this->container['shipping_service_options']) {
            $invalidProperties[] = "'shipping_service_options' can't be null";
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
     * Gets must_arrive_by_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Timestamp
     */
    public function getMustArriveByDate()
    {
        return $this->container['must_arrive_by_date'];
    }

    /**
     * Sets must_arrive_by_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Timestamp $must_arrive_by_date must_arrive_by_date
     *
     * @return $this
     */
    public function setMustArriveByDate($must_arrive_by_date)
    {
        $this->container['must_arrive_by_date'] = $must_arrive_by_date;

        return $this;
    }

    /**
     * Gets ship_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Timestamp
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Timestamp $ship_date ship_date
     *
     * @return $this
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

        return $this;
    }

    /**
     * Gets shipping_service_options.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShippingServiceOptions
     */
    public function getShippingServiceOptions()
    {
        return $this->container['shipping_service_options'];
    }

    /**
     * Sets shipping_service_options.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShippingServiceOptions $shipping_service_options shipping_service_options
     *
     * @return $this
     */
    public function setShippingServiceOptions($shipping_service_options)
    {
        $this->container['shipping_service_options'] = $shipping_service_options;

        return $this;
    }

    /**
     * Gets label_customization.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\LabelCustomization
     */
    public function getLabelCustomization()
    {
        return $this->container['label_customization'];
    }

    /**
     * Sets label_customization.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\LabelCustomization $label_customization label_customization
     *
     * @return $this
     */
    public function setLabelCustomization($label_customization)
    {
        $this->container['label_customization'] = $label_customization;

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
