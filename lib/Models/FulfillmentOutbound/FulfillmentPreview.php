<?php
/**
 * FulfillmentPreview.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * FulfillmentPreview Class Doc Comment.
 *

 * @description Information about a fulfillment order preview, including delivery and fee information based on shipping method.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FulfillmentPreview implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FulfillmentPreview';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipping_speed_category' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ShippingSpeedCategory',
'scheduled_delivery_info' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ScheduledDeliveryInfo',
'is_fulfillable' => 'bool',
'is_cod_capable' => 'bool',
'estimated_shipping_weight' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Weight',
'estimated_fees' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FeeList',
'fulfillment_preview_shipments' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentPreviewShipmentList',
'unfulfillable_preview_items' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\UnfulfillablePreviewItemList',
'order_unfulfillable_reasons' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\StringList',
'marketplace_id' => 'string',
'feature_constraints' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FeatureSettings[]',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'shipping_speed_category' => null,
'scheduled_delivery_info' => null,
'is_fulfillable' => null,
'is_cod_capable' => null,
'estimated_shipping_weight' => null,
'estimated_fees' => null,
'fulfillment_preview_shipments' => null,
'unfulfillable_preview_items' => null,
'order_unfulfillable_reasons' => null,
'marketplace_id' => null,
'feature_constraints' => null,    ];

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
        'shipping_speed_category' => 'shippingSpeedCategory',
'scheduled_delivery_info' => 'scheduledDeliveryInfo',
'is_fulfillable' => 'isFulfillable',
'is_cod_capable' => 'isCODCapable',
'estimated_shipping_weight' => 'estimatedShippingWeight',
'estimated_fees' => 'estimatedFees',
'fulfillment_preview_shipments' => 'fulfillmentPreviewShipments',
'unfulfillable_preview_items' => 'unfulfillablePreviewItems',
'order_unfulfillable_reasons' => 'orderUnfulfillableReasons',
'marketplace_id' => 'marketplaceId',
'feature_constraints' => 'featureConstraints',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_speed_category' => 'setShippingSpeedCategory',
'scheduled_delivery_info' => 'setScheduledDeliveryInfo',
'is_fulfillable' => 'setIsFulfillable',
'is_cod_capable' => 'setIsCodCapable',
'estimated_shipping_weight' => 'setEstimatedShippingWeight',
'estimated_fees' => 'setEstimatedFees',
'fulfillment_preview_shipments' => 'setFulfillmentPreviewShipments',
'unfulfillable_preview_items' => 'setUnfulfillablePreviewItems',
'order_unfulfillable_reasons' => 'setOrderUnfulfillableReasons',
'marketplace_id' => 'setMarketplaceId',
'feature_constraints' => 'setFeatureConstraints',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_speed_category' => 'getShippingSpeedCategory',
'scheduled_delivery_info' => 'getScheduledDeliveryInfo',
'is_fulfillable' => 'getIsFulfillable',
'is_cod_capable' => 'getIsCodCapable',
'estimated_shipping_weight' => 'getEstimatedShippingWeight',
'estimated_fees' => 'getEstimatedFees',
'fulfillment_preview_shipments' => 'getFulfillmentPreviewShipments',
'unfulfillable_preview_items' => 'getUnfulfillablePreviewItems',
'order_unfulfillable_reasons' => 'getOrderUnfulfillableReasons',
'marketplace_id' => 'getMarketplaceId',
'feature_constraints' => 'getFeatureConstraints',    ];

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
        $this->container['shipping_speed_category'] = isset($data['shipping_speed_category']) ? $data['shipping_speed_category'] : null;
        $this->container['scheduled_delivery_info'] = isset($data['scheduled_delivery_info']) ? $data['scheduled_delivery_info'] : null;
        $this->container['is_fulfillable'] = isset($data['is_fulfillable']) ? $data['is_fulfillable'] : null;
        $this->container['is_cod_capable'] = isset($data['is_cod_capable']) ? $data['is_cod_capable'] : null;
        $this->container['estimated_shipping_weight'] = isset($data['estimated_shipping_weight']) ? $data['estimated_shipping_weight'] : null;
        $this->container['estimated_fees'] = isset($data['estimated_fees']) ? $data['estimated_fees'] : null;
        $this->container['fulfillment_preview_shipments'] = isset($data['fulfillment_preview_shipments']) ? $data['fulfillment_preview_shipments'] : null;
        $this->container['unfulfillable_preview_items'] = isset($data['unfulfillable_preview_items']) ? $data['unfulfillable_preview_items'] : null;
        $this->container['order_unfulfillable_reasons'] = isset($data['order_unfulfillable_reasons']) ? $data['order_unfulfillable_reasons'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['feature_constraints'] = isset($data['feature_constraints']) ? $data['feature_constraints'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['shipping_speed_category']) {
            $invalidProperties[] = "'shipping_speed_category' can't be null";
        }
        if (null === $this->container['is_fulfillable']) {
            $invalidProperties[] = "'is_fulfillable' can't be null";
        }
        if (null === $this->container['is_cod_capable']) {
            $invalidProperties[] = "'is_cod_capable' can't be null";
        }
        if (null === $this->container['marketplace_id']) {
            $invalidProperties[] = "'marketplace_id' can't be null";
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
     * Gets shipping_speed_category.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ShippingSpeedCategory
     */
    public function getShippingSpeedCategory()
    {
        return $this->container['shipping_speed_category'];
    }

    /**
     * Sets shipping_speed_category.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ShippingSpeedCategory $shipping_speed_category shipping_speed_category
     *
     * @return $this
     */
    public function setShippingSpeedCategory($shipping_speed_category)
    {
        $this->container['shipping_speed_category'] = $shipping_speed_category;

        return $this;
    }

    /**
     * Gets scheduled_delivery_info.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ScheduledDeliveryInfo
     */
    public function getScheduledDeliveryInfo()
    {
        return $this->container['scheduled_delivery_info'];
    }

    /**
     * Sets scheduled_delivery_info.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ScheduledDeliveryInfo $scheduled_delivery_info scheduled_delivery_info
     *
     * @return $this
     */
    public function setScheduledDeliveryInfo($scheduled_delivery_info)
    {
        $this->container['scheduled_delivery_info'] = $scheduled_delivery_info;

        return $this;
    }

    /**
     * Gets is_fulfillable.
     *
     * @return bool
     */
    public function getIsFulfillable()
    {
        return $this->container['is_fulfillable'];
    }

    /**
     * Sets is_fulfillable.
     *
     * @param bool $is_fulfillable when true, this fulfillment order preview is fulfillable
     *
     * @return $this
     */
    public function setIsFulfillable($is_fulfillable)
    {
        $this->container['is_fulfillable'] = $is_fulfillable;

        return $this;
    }

    /**
     * Gets is_cod_capable.
     *
     * @return bool
     */
    public function getIsCodCapable()
    {
        return $this->container['is_cod_capable'];
    }

    /**
     * Sets is_cod_capable.
     *
     * @param bool $is_cod_capable when true, this fulfillment order preview is for COD (Cash On Delivery)
     *
     * @return $this
     */
    public function setIsCodCapable($is_cod_capable)
    {
        $this->container['is_cod_capable'] = $is_cod_capable;

        return $this;
    }

    /**
     * Gets estimated_shipping_weight.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Weight
     */
    public function getEstimatedShippingWeight()
    {
        return $this->container['estimated_shipping_weight'];
    }

    /**
     * Sets estimated_shipping_weight.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Weight $estimated_shipping_weight estimated_shipping_weight
     *
     * @return $this
     */
    public function setEstimatedShippingWeight($estimated_shipping_weight)
    {
        $this->container['estimated_shipping_weight'] = $estimated_shipping_weight;

        return $this;
    }

    /**
     * Gets estimated_fees.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FeeList
     */
    public function getEstimatedFees()
    {
        return $this->container['estimated_fees'];
    }

    /**
     * Sets estimated_fees.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FeeList $estimated_fees estimated_fees
     *
     * @return $this
     */
    public function setEstimatedFees($estimated_fees)
    {
        $this->container['estimated_fees'] = $estimated_fees;

        return $this;
    }

    /**
     * Gets fulfillment_preview_shipments.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentPreviewShipmentList
     */
    public function getFulfillmentPreviewShipments()
    {
        return $this->container['fulfillment_preview_shipments'];
    }

    /**
     * Sets fulfillment_preview_shipments.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentPreviewShipmentList $fulfillment_preview_shipments fulfillment_preview_shipments
     *
     * @return $this
     */
    public function setFulfillmentPreviewShipments($fulfillment_preview_shipments)
    {
        $this->container['fulfillment_preview_shipments'] = $fulfillment_preview_shipments;

        return $this;
    }

    /**
     * Gets unfulfillable_preview_items.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\UnfulfillablePreviewItemList
     */
    public function getUnfulfillablePreviewItems()
    {
        return $this->container['unfulfillable_preview_items'];
    }

    /**
     * Sets unfulfillable_preview_items.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\UnfulfillablePreviewItemList $unfulfillable_preview_items unfulfillable_preview_items
     *
     * @return $this
     */
    public function setUnfulfillablePreviewItems($unfulfillable_preview_items)
    {
        $this->container['unfulfillable_preview_items'] = $unfulfillable_preview_items;

        return $this;
    }

    /**
     * Gets order_unfulfillable_reasons.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\StringList
     */
    public function getOrderUnfulfillableReasons()
    {
        return $this->container['order_unfulfillable_reasons'];
    }

    /**
     * Sets order_unfulfillable_reasons.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\StringList $order_unfulfillable_reasons order_unfulfillable_reasons
     *
     * @return $this
     */
    public function setOrderUnfulfillableReasons($order_unfulfillable_reasons)
    {
        $this->container['order_unfulfillable_reasons'] = $order_unfulfillable_reasons;

        return $this;
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
     * @param string $marketplace_id the marketplace the fulfillment order is placed against
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets feature_constraints.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FeatureSettings[]
     */
    public function getFeatureConstraints()
    {
        return $this->container['feature_constraints'];
    }

    /**
     * Sets feature_constraints.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FeatureSettings[] $feature_constraints a list of features and their fulfillment policies to apply to the order
     *
     * @return $this
     */
    public function setFeatureConstraints($feature_constraints)
    {
        $this->container['feature_constraints'] = $feature_constraints;

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
