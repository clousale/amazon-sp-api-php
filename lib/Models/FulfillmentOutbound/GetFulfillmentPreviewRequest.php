<?php
/**
 * GetFulfillmentPreviewRequest.
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
 * GetFulfillmentPreviewRequest Class Doc Comment.
 *

 * @description The request body schema for the getFulfillmentPreview operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class GetFulfillmentPreviewRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'GetFulfillmentPreviewRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_id' => 'string',
'address' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Address',
'items' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFulfillmentPreviewItemList',
'shipping_speed_categories' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ShippingSpeedCategoryList',
'include_cod_fulfillment_preview' => 'bool',
'include_delivery_windows' => 'bool',
'feature_constraints' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FeatureSettings[]',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'marketplace_id' => null,
'address' => null,
'items' => null,
'shipping_speed_categories' => null,
'include_cod_fulfillment_preview' => null,
'include_delivery_windows' => null,
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
        'marketplace_id' => 'marketplaceId',
'address' => 'address',
'items' => 'items',
'shipping_speed_categories' => 'shippingSpeedCategories',
'include_cod_fulfillment_preview' => 'includeCODFulfillmentPreview',
'include_delivery_windows' => 'includeDeliveryWindows',
'feature_constraints' => 'featureConstraints',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
'address' => 'setAddress',
'items' => 'setItems',
'shipping_speed_categories' => 'setShippingSpeedCategories',
'include_cod_fulfillment_preview' => 'setIncludeCodFulfillmentPreview',
'include_delivery_windows' => 'setIncludeDeliveryWindows',
'feature_constraints' => 'setFeatureConstraints',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
'address' => 'getAddress',
'items' => 'getItems',
'shipping_speed_categories' => 'getShippingSpeedCategories',
'include_cod_fulfillment_preview' => 'getIncludeCodFulfillmentPreview',
'include_delivery_windows' => 'getIncludeDeliveryWindows',
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
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['shipping_speed_categories'] = isset($data['shipping_speed_categories']) ? $data['shipping_speed_categories'] : null;
        $this->container['include_cod_fulfillment_preview'] = isset($data['include_cod_fulfillment_preview']) ? $data['include_cod_fulfillment_preview'] : null;
        $this->container['include_delivery_windows'] = isset($data['include_delivery_windows']) ? $data['include_delivery_windows'] : null;
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

        if (null === $this->container['address']) {
            $invalidProperties[] = "'address' can't be null";
        }
        if (null === $this->container['items']) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets address.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFulfillmentPreviewItemList
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFulfillmentPreviewItemList $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets shipping_speed_categories.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ShippingSpeedCategoryList
     */
    public function getShippingSpeedCategories()
    {
        return $this->container['shipping_speed_categories'];
    }

    /**
     * Sets shipping_speed_categories.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ShippingSpeedCategoryList $shipping_speed_categories shipping_speed_categories
     *
     * @return $this
     */
    public function setShippingSpeedCategories($shipping_speed_categories)
    {
        $this->container['shipping_speed_categories'] = $shipping_speed_categories;

        return $this;
    }

    /**
     * Gets include_cod_fulfillment_preview.
     *
     * @return bool
     */
    public function getIncludeCodFulfillmentPreview()
    {
        return $this->container['include_cod_fulfillment_preview'];
    }

    /**
     * Sets include_cod_fulfillment_preview.
     *
     * @param bool $include_cod_fulfillment_preview Specifies whether to return fulfillment order previews that are for COD (Cash On Delivery).  Possible values:  * true - Returns all fulfillment order previews (both for COD and not for COD). * false - Returns only fulfillment order previews that are not for COD.
     *
     * @return $this
     */
    public function setIncludeCodFulfillmentPreview($include_cod_fulfillment_preview)
    {
        $this->container['include_cod_fulfillment_preview'] = $include_cod_fulfillment_preview;

        return $this;
    }

    /**
     * Gets include_delivery_windows.
     *
     * @return bool
     */
    public function getIncludeDeliveryWindows()
    {
        return $this->container['include_delivery_windows'];
    }

    /**
     * Sets include_delivery_windows.
     *
     * @param bool $include_delivery_windows Specifies whether to return the ScheduledDeliveryInfo response object, which contains the available delivery windows for a Scheduled Delivery. The ScheduledDeliveryInfo response object can only be returned for fulfillment order previews with ShippingSpeedCategories = ScheduledDelivery.
     *
     * @return $this
     */
    public function setIncludeDeliveryWindows($include_delivery_windows)
    {
        $this->container['include_delivery_windows'] = $include_delivery_windows;

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
