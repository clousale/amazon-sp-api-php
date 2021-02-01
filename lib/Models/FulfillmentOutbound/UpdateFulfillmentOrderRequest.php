<?php
/**
 * UpdateFulfillmentOrderRequest.
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
 * UpdateFulfillmentOrderRequest Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class UpdateFulfillmentOrderRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'UpdateFulfillmentOrderRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'marketplace_id' => 'string',
'displayable_order_id' => 'string',
'displayable_order_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp',
'displayable_order_comment' => 'string',
'shipping_speed_category' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ShippingSpeedCategory',
'destination_address' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Address',
'fulfillment_action' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentAction',
'fulfillment_policy' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentPolicy',
'ship_from_country_code' => 'string',
'notification_emails' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\NotificationEmailList',
'feature_constraints' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FeatureSettings[]',
'items' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\UpdateFulfillmentOrderItemList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'marketplace_id' => null,
'displayable_order_id' => null,
'displayable_order_date' => null,
'displayable_order_comment' => null,
'shipping_speed_category' => null,
'destination_address' => null,
'fulfillment_action' => null,
'fulfillment_policy' => null,
'ship_from_country_code' => null,
'notification_emails' => null,
'feature_constraints' => null,
'items' => null,    ];

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
'displayable_order_id' => 'displayableOrderId',
'displayable_order_date' => 'displayableOrderDate',
'displayable_order_comment' => 'displayableOrderComment',
'shipping_speed_category' => 'shippingSpeedCategory',
'destination_address' => 'destinationAddress',
'fulfillment_action' => 'fulfillmentAction',
'fulfillment_policy' => 'fulfillmentPolicy',
'ship_from_country_code' => 'shipFromCountryCode',
'notification_emails' => 'notificationEmails',
'feature_constraints' => 'featureConstraints',
'items' => 'items',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'marketplace_id' => 'setMarketplaceId',
'displayable_order_id' => 'setDisplayableOrderId',
'displayable_order_date' => 'setDisplayableOrderDate',
'displayable_order_comment' => 'setDisplayableOrderComment',
'shipping_speed_category' => 'setShippingSpeedCategory',
'destination_address' => 'setDestinationAddress',
'fulfillment_action' => 'setFulfillmentAction',
'fulfillment_policy' => 'setFulfillmentPolicy',
'ship_from_country_code' => 'setShipFromCountryCode',
'notification_emails' => 'setNotificationEmails',
'feature_constraints' => 'setFeatureConstraints',
'items' => 'setItems',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'marketplace_id' => 'getMarketplaceId',
'displayable_order_id' => 'getDisplayableOrderId',
'displayable_order_date' => 'getDisplayableOrderDate',
'displayable_order_comment' => 'getDisplayableOrderComment',
'shipping_speed_category' => 'getShippingSpeedCategory',
'destination_address' => 'getDestinationAddress',
'fulfillment_action' => 'getFulfillmentAction',
'fulfillment_policy' => 'getFulfillmentPolicy',
'ship_from_country_code' => 'getShipFromCountryCode',
'notification_emails' => 'getNotificationEmails',
'feature_constraints' => 'getFeatureConstraints',
'items' => 'getItems',    ];

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
        $this->container['displayable_order_id'] = isset($data['displayable_order_id']) ? $data['displayable_order_id'] : null;
        $this->container['displayable_order_date'] = isset($data['displayable_order_date']) ? $data['displayable_order_date'] : null;
        $this->container['displayable_order_comment'] = isset($data['displayable_order_comment']) ? $data['displayable_order_comment'] : null;
        $this->container['shipping_speed_category'] = isset($data['shipping_speed_category']) ? $data['shipping_speed_category'] : null;
        $this->container['destination_address'] = isset($data['destination_address']) ? $data['destination_address'] : null;
        $this->container['fulfillment_action'] = isset($data['fulfillment_action']) ? $data['fulfillment_action'] : null;
        $this->container['fulfillment_policy'] = isset($data['fulfillment_policy']) ? $data['fulfillment_policy'] : null;
        $this->container['ship_from_country_code'] = isset($data['ship_from_country_code']) ? $data['ship_from_country_code'] : null;
        $this->container['notification_emails'] = isset($data['notification_emails']) ? $data['notification_emails'] : null;
        $this->container['feature_constraints'] = isset($data['feature_constraints']) ? $data['feature_constraints'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
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
     * Gets displayable_order_id.
     *
     * @return string
     */
    public function getDisplayableOrderId()
    {
        return $this->container['displayable_order_id'];
    }

    /**
     * Sets displayable_order_id.
     *
     * @param string $displayable_order_id A fulfillment order identifier that the seller creates. This value displays as the order identifier in recipient-facing materials such as the outbound shipment packing slip. The value of DisplayableOrderId should match the order identifier that the seller provides to the recipient. The seller can use the SellerFulfillmentOrderId for this value or they can specify an alternate value if they want the recipient to reference an alternate order identifier.
     *
     * @return $this
     */
    public function setDisplayableOrderId($displayable_order_id)
    {
        $this->container['displayable_order_id'] = $displayable_order_id;

        return $this;
    }

    /**
     * Gets displayable_order_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp
     */
    public function getDisplayableOrderDate()
    {
        return $this->container['displayable_order_date'];
    }

    /**
     * Sets displayable_order_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp $displayable_order_date displayable_order_date
     *
     * @return $this
     */
    public function setDisplayableOrderDate($displayable_order_date)
    {
        $this->container['displayable_order_date'] = $displayable_order_date;

        return $this;
    }

    /**
     * Gets displayable_order_comment.
     *
     * @return string
     */
    public function getDisplayableOrderComment()
    {
        return $this->container['displayable_order_comment'];
    }

    /**
     * Sets displayable_order_comment.
     *
     * @param string $displayable_order_comment order-specific text that appears in recipient-facing materials such as the outbound shipment packing slip
     *
     * @return $this
     */
    public function setDisplayableOrderComment($displayable_order_comment)
    {
        $this->container['displayable_order_comment'] = $displayable_order_comment;

        return $this;
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
     * Gets destination_address.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Address
     */
    public function getDestinationAddress()
    {
        return $this->container['destination_address'];
    }

    /**
     * Sets destination_address.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Address $destination_address destination_address
     *
     * @return $this
     */
    public function setDestinationAddress($destination_address)
    {
        $this->container['destination_address'] = $destination_address;

        return $this;
    }

    /**
     * Gets fulfillment_action.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentAction
     */
    public function getFulfillmentAction()
    {
        return $this->container['fulfillment_action'];
    }

    /**
     * Sets fulfillment_action.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentAction $fulfillment_action fulfillment_action
     *
     * @return $this
     */
    public function setFulfillmentAction($fulfillment_action)
    {
        $this->container['fulfillment_action'] = $fulfillment_action;

        return $this;
    }

    /**
     * Gets fulfillment_policy.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentPolicy
     */
    public function getFulfillmentPolicy()
    {
        return $this->container['fulfillment_policy'];
    }

    /**
     * Sets fulfillment_policy.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentPolicy $fulfillment_policy fulfillment_policy
     *
     * @return $this
     */
    public function setFulfillmentPolicy($fulfillment_policy)
    {
        $this->container['fulfillment_policy'] = $fulfillment_policy;

        return $this;
    }

    /**
     * Gets ship_from_country_code.
     *
     * @return string
     */
    public function getShipFromCountryCode()
    {
        return $this->container['ship_from_country_code'];
    }

    /**
     * Sets ship_from_country_code.
     *
     * @param string $ship_from_country_code The two-character country code for the country from which the fulfillment order ships. Must be in ISO 3166-1 alpha-2 format.
     *
     * @return $this
     */
    public function setShipFromCountryCode($ship_from_country_code)
    {
        $this->container['ship_from_country_code'] = $ship_from_country_code;

        return $this;
    }

    /**
     * Gets notification_emails.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\NotificationEmailList
     */
    public function getNotificationEmails()
    {
        return $this->container['notification_emails'];
    }

    /**
     * Sets notification_emails.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\NotificationEmailList $notification_emails notification_emails
     *
     * @return $this
     */
    public function setNotificationEmails($notification_emails)
    {
        $this->container['notification_emails'] = $notification_emails;

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
     * Gets items.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\UpdateFulfillmentOrderItemList
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\UpdateFulfillmentOrderItemList $items items
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
