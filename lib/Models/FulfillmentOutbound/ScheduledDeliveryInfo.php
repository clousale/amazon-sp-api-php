<?php
/**
 * ScheduledDeliveryInfo.
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
 * ScheduledDeliveryInfo Class Doc Comment.
 *

 * @description Delivery information for a scheduled delivery.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ScheduledDeliveryInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ScheduledDeliveryInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'delivery_time_zone' => 'string',
'delivery_windows' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\DeliveryWindowList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'delivery_time_zone' => null,
'delivery_windows' => null,    ];

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
        'delivery_time_zone' => 'deliveryTimeZone',
'delivery_windows' => 'deliveryWindows',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_time_zone' => 'setDeliveryTimeZone',
'delivery_windows' => 'setDeliveryWindows',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_time_zone' => 'getDeliveryTimeZone',
'delivery_windows' => 'getDeliveryWindows',    ];

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
        $this->container['delivery_time_zone'] = isset($data['delivery_time_zone']) ? $data['delivery_time_zone'] : null;
        $this->container['delivery_windows'] = isset($data['delivery_windows']) ? $data['delivery_windows'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['delivery_time_zone']) {
            $invalidProperties[] = "'delivery_time_zone' can't be null";
        }
        if (null === $this->container['delivery_windows']) {
            $invalidProperties[] = "'delivery_windows' can't be null";
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
     * Gets delivery_time_zone.
     *
     * @return string
     */
    public function getDeliveryTimeZone()
    {
        return $this->container['delivery_time_zone'];
    }

    /**
     * Sets delivery_time_zone.
     *
     * @param string $delivery_time_zone The time zone of the destination address for the fulfillment order preview. Must be an IANA time zone name. Example: Asia/Tokyo.
     *
     * @return $this
     */
    public function setDeliveryTimeZone($delivery_time_zone)
    {
        $this->container['delivery_time_zone'] = $delivery_time_zone;

        return $this;
    }

    /**
     * Gets delivery_windows.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\DeliveryWindowList
     */
    public function getDeliveryWindows()
    {
        return $this->container['delivery_windows'];
    }

    /**
     * Sets delivery_windows.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\DeliveryWindowList $delivery_windows delivery_windows
     *
     * @return $this
     */
    public function setDeliveryWindows($delivery_windows)
    {
        $this->container['delivery_windows'] = $delivery_windows;

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
