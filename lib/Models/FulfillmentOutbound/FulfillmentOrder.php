<?php
/**
 * FulfillmentOrder.
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
 * FulfillmentOrder Class Doc Comment.
 *

 * @description General information about a fulfillment order, including its status.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FulfillmentOrder implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FulfillmentOrder';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'seller_fulfillment_order_id' => 'string',
'marketplace_id' => 'string',
'displayable_order_id' => 'string',
'displayable_order_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp',
'displayable_order_comment' => 'string',
'shipping_speed_category' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ShippingSpeedCategory',
'delivery_window' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\DeliveryWindow',
'destination_address' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Address',
'fulfillment_action' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentAction',
'fulfillment_policy' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentPolicy',
'cod_settings' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CODSettings',
'received_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp',
'fulfillment_order_status' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentOrderStatus',
'status_updated_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp',
'notification_emails' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\NotificationEmailList',
'feature_constraints' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FeatureSettings[]',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'seller_fulfillment_order_id' => null,
'marketplace_id' => null,
'displayable_order_id' => null,
'displayable_order_date' => null,
'displayable_order_comment' => null,
'shipping_speed_category' => null,
'delivery_window' => null,
'destination_address' => null,
'fulfillment_action' => null,
'fulfillment_policy' => null,
'cod_settings' => null,
'received_date' => null,
'fulfillment_order_status' => null,
'status_updated_date' => null,
'notification_emails' => null,
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
        'seller_fulfillment_order_id' => 'sellerFulfillmentOrderId',
'marketplace_id' => 'marketplaceId',
'displayable_order_id' => 'displayableOrderId',
'displayable_order_date' => 'displayableOrderDate',
'displayable_order_comment' => 'displayableOrderComment',
'shipping_speed_category' => 'shippingSpeedCategory',
'delivery_window' => 'deliveryWindow',
'destination_address' => 'destinationAddress',
'fulfillment_action' => 'fulfillmentAction',
'fulfillment_policy' => 'fulfillmentPolicy',
'cod_settings' => 'codSettings',
'received_date' => 'receivedDate',
'fulfillment_order_status' => 'fulfillmentOrderStatus',
'status_updated_date' => 'statusUpdatedDate',
'notification_emails' => 'notificationEmails',
'feature_constraints' => 'featureConstraints',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_fulfillment_order_id' => 'setSellerFulfillmentOrderId',
'marketplace_id' => 'setMarketplaceId',
'displayable_order_id' => 'setDisplayableOrderId',
'displayable_order_date' => 'setDisplayableOrderDate',
'displayable_order_comment' => 'setDisplayableOrderComment',
'shipping_speed_category' => 'setShippingSpeedCategory',
'delivery_window' => 'setDeliveryWindow',
'destination_address' => 'setDestinationAddress',
'fulfillment_action' => 'setFulfillmentAction',
'fulfillment_policy' => 'setFulfillmentPolicy',
'cod_settings' => 'setCodSettings',
'received_date' => 'setReceivedDate',
'fulfillment_order_status' => 'setFulfillmentOrderStatus',
'status_updated_date' => 'setStatusUpdatedDate',
'notification_emails' => 'setNotificationEmails',
'feature_constraints' => 'setFeatureConstraints',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_fulfillment_order_id' => 'getSellerFulfillmentOrderId',
'marketplace_id' => 'getMarketplaceId',
'displayable_order_id' => 'getDisplayableOrderId',
'displayable_order_date' => 'getDisplayableOrderDate',
'displayable_order_comment' => 'getDisplayableOrderComment',
'shipping_speed_category' => 'getShippingSpeedCategory',
'delivery_window' => 'getDeliveryWindow',
'destination_address' => 'getDestinationAddress',
'fulfillment_action' => 'getFulfillmentAction',
'fulfillment_policy' => 'getFulfillmentPolicy',
'cod_settings' => 'getCodSettings',
'received_date' => 'getReceivedDate',
'fulfillment_order_status' => 'getFulfillmentOrderStatus',
'status_updated_date' => 'getStatusUpdatedDate',
'notification_emails' => 'getNotificationEmails',
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
        $this->container['seller_fulfillment_order_id'] = isset($data['seller_fulfillment_order_id']) ? $data['seller_fulfillment_order_id'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['displayable_order_id'] = isset($data['displayable_order_id']) ? $data['displayable_order_id'] : null;
        $this->container['displayable_order_date'] = isset($data['displayable_order_date']) ? $data['displayable_order_date'] : null;
        $this->container['displayable_order_comment'] = isset($data['displayable_order_comment']) ? $data['displayable_order_comment'] : null;
        $this->container['shipping_speed_category'] = isset($data['shipping_speed_category']) ? $data['shipping_speed_category'] : null;
        $this->container['delivery_window'] = isset($data['delivery_window']) ? $data['delivery_window'] : null;
        $this->container['destination_address'] = isset($data['destination_address']) ? $data['destination_address'] : null;
        $this->container['fulfillment_action'] = isset($data['fulfillment_action']) ? $data['fulfillment_action'] : null;
        $this->container['fulfillment_policy'] = isset($data['fulfillment_policy']) ? $data['fulfillment_policy'] : null;
        $this->container['cod_settings'] = isset($data['cod_settings']) ? $data['cod_settings'] : null;
        $this->container['received_date'] = isset($data['received_date']) ? $data['received_date'] : null;
        $this->container['fulfillment_order_status'] = isset($data['fulfillment_order_status']) ? $data['fulfillment_order_status'] : null;
        $this->container['status_updated_date'] = isset($data['status_updated_date']) ? $data['status_updated_date'] : null;
        $this->container['notification_emails'] = isset($data['notification_emails']) ? $data['notification_emails'] : null;
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

        if (null === $this->container['seller_fulfillment_order_id']) {
            $invalidProperties[] = "'seller_fulfillment_order_id' can't be null";
        }
        if (null === $this->container['marketplace_id']) {
            $invalidProperties[] = "'marketplace_id' can't be null";
        }
        if (null === $this->container['displayable_order_id']) {
            $invalidProperties[] = "'displayable_order_id' can't be null";
        }
        if (null === $this->container['displayable_order_date']) {
            $invalidProperties[] = "'displayable_order_date' can't be null";
        }
        if (null === $this->container['displayable_order_comment']) {
            $invalidProperties[] = "'displayable_order_comment' can't be null";
        }
        if (null === $this->container['shipping_speed_category']) {
            $invalidProperties[] = "'shipping_speed_category' can't be null";
        }
        if (null === $this->container['destination_address']) {
            $invalidProperties[] = "'destination_address' can't be null";
        }
        if (null === $this->container['received_date']) {
            $invalidProperties[] = "'received_date' can't be null";
        }
        if (null === $this->container['fulfillment_order_status']) {
            $invalidProperties[] = "'fulfillment_order_status' can't be null";
        }
        if (null === $this->container['status_updated_date']) {
            $invalidProperties[] = "'status_updated_date' can't be null";
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
     * Gets seller_fulfillment_order_id.
     *
     * @return string
     */
    public function getSellerFulfillmentOrderId()
    {
        return $this->container['seller_fulfillment_order_id'];
    }

    /**
     * Sets seller_fulfillment_order_id.
     *
     * @param string $seller_fulfillment_order_id the fulfillment order identifier submitted with the createFulfillmentOrder operation
     *
     * @return $this
     */
    public function setSellerFulfillmentOrderId($seller_fulfillment_order_id)
    {
        $this->container['seller_fulfillment_order_id'] = $seller_fulfillment_order_id;

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
     * @param string $marketplace_id the identifier for the marketplace the fulfillment order is placed against
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
     * @param string $displayable_order_id A fulfillment order identifier submitted with the createFulfillmentOrder operation. Displays as the order identifier in recipient-facing materials such as the packing slip.
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
     * @param string $displayable_order_comment A text block submitted with the createFulfillmentOrder operation. Displays in recipient-facing materials such as the packing slip.
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
     * Gets delivery_window.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\DeliveryWindow
     */
    public function getDeliveryWindow()
    {
        return $this->container['delivery_window'];
    }

    /**
     * Sets delivery_window.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\DeliveryWindow $delivery_window delivery_window
     *
     * @return $this
     */
    public function setDeliveryWindow($delivery_window)
    {
        $this->container['delivery_window'] = $delivery_window;

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
     * Gets cod_settings.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CODSettings
     */
    public function getCodSettings()
    {
        return $this->container['cod_settings'];
    }

    /**
     * Sets cod_settings.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CODSettings $cod_settings cod_settings
     *
     * @return $this
     */
    public function setCodSettings($cod_settings)
    {
        $this->container['cod_settings'] = $cod_settings;

        return $this;
    }

    /**
     * Gets received_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp
     */
    public function getReceivedDate()
    {
        return $this->container['received_date'];
    }

    /**
     * Sets received_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp $received_date received_date
     *
     * @return $this
     */
    public function setReceivedDate($received_date)
    {
        $this->container['received_date'] = $received_date;

        return $this;
    }

    /**
     * Gets fulfillment_order_status.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentOrderStatus
     */
    public function getFulfillmentOrderStatus()
    {
        return $this->container['fulfillment_order_status'];
    }

    /**
     * Sets fulfillment_order_status.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\FulfillmentOrderStatus $fulfillment_order_status fulfillment_order_status
     *
     * @return $this
     */
    public function setFulfillmentOrderStatus($fulfillment_order_status)
    {
        $this->container['fulfillment_order_status'] = $fulfillment_order_status;

        return $this;
    }

    /**
     * Gets status_updated_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp
     */
    public function getStatusUpdatedDate()
    {
        return $this->container['status_updated_date'];
    }

    /**
     * Sets status_updated_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp $status_updated_date status_updated_date
     *
     * @return $this
     */
    public function setStatusUpdatedDate($status_updated_date)
    {
        $this->container['status_updated_date'] = $status_updated_date;

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
