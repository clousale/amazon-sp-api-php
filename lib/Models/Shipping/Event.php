<?php
/**
 * Event.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Shipping;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * Event Class Doc Comment.
 *

 * @description An event of a shipment
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Event implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Event';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'event_code' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\EventCode',
'event_time' => '\DateTime',
'location' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Location',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'event_code' => null,
'event_time' => 'date-time',
'location' => null,    ];

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
        'event_code' => 'eventCode',
'event_time' => 'eventTime',
'location' => 'location',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'event_code' => 'setEventCode',
'event_time' => 'setEventTime',
'location' => 'setLocation',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'event_code' => 'getEventCode',
'event_time' => 'getEventTime',
'location' => 'getLocation',    ];

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
        $this->container['event_code'] = isset($data['event_code']) ? $data['event_code'] : null;
        $this->container['event_time'] = isset($data['event_time']) ? $data['event_time'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['event_code']) {
            $invalidProperties[] = "'event_code' can't be null";
        }
        if (null === $this->container['event_time']) {
            $invalidProperties[] = "'event_time' can't be null";
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
     * Gets event_code.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\EventCode
     */
    public function getEventCode()
    {
        return $this->container['event_code'];
    }

    /**
     * Sets event_code.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\EventCode $event_code event_code
     *
     * @return $this
     */
    public function setEventCode($event_code)
    {
        $this->container['event_code'] = $event_code;

        return $this;
    }

    /**
     * Gets event_time.
     *
     * @return \DateTime
     */
    public function getEventTime()
    {
        return $this->container['event_time'];
    }

    /**
     * Sets event_time.
     *
     * @param \DateTime $event_time the date and time of an event for a shipment
     *
     * @return $this
     */
    public function setEventTime($event_time)
    {
        $this->container['event_time'] = $event_time;

        return $this;
    }

    /**
     * Gets location.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Location
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Location $location location
     *
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

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
