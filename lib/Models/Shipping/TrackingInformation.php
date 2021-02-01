<?php
/**
 * TrackingInformation.
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
 * TrackingInformation Class Doc Comment.
 *

 * @description The payload schema for the getTrackingInformation operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class TrackingInformation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'TrackingInformation';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'tracking_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\TrackingId',
'summary' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\TrackingSummary',
'promised_delivery_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\PromisedDeliveryDate',
'event_history' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\EventList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'tracking_id' => null,
'summary' => null,
'promised_delivery_date' => null,
'event_history' => null,    ];

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
        'tracking_id' => 'trackingId',
'summary' => 'summary',
'promised_delivery_date' => 'promisedDeliveryDate',
'event_history' => 'eventHistory',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'tracking_id' => 'setTrackingId',
'summary' => 'setSummary',
'promised_delivery_date' => 'setPromisedDeliveryDate',
'event_history' => 'setEventHistory',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'tracking_id' => 'getTrackingId',
'summary' => 'getSummary',
'promised_delivery_date' => 'getPromisedDeliveryDate',
'event_history' => 'getEventHistory',    ];

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
        $this->container['tracking_id'] = isset($data['tracking_id']) ? $data['tracking_id'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['promised_delivery_date'] = isset($data['promised_delivery_date']) ? $data['promised_delivery_date'] : null;
        $this->container['event_history'] = isset($data['event_history']) ? $data['event_history'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['tracking_id']) {
            $invalidProperties[] = "'tracking_id' can't be null";
        }
        if (null === $this->container['summary']) {
            $invalidProperties[] = "'summary' can't be null";
        }
        if (null === $this->container['promised_delivery_date']) {
            $invalidProperties[] = "'promised_delivery_date' can't be null";
        }
        if (null === $this->container['event_history']) {
            $invalidProperties[] = "'event_history' can't be null";
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
     * Gets tracking_id.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\TrackingId
     */
    public function getTrackingId()
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\TrackingId $tracking_id tracking_id
     *
     * @return $this
     */
    public function setTrackingId($tracking_id)
    {
        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }

    /**
     * Gets summary.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\TrackingSummary
     */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
     * Sets summary.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\TrackingSummary $summary summary
     *
     * @return $this
     */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;

        return $this;
    }

    /**
     * Gets promised_delivery_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\PromisedDeliveryDate
     */
    public function getPromisedDeliveryDate()
    {
        return $this->container['promised_delivery_date'];
    }

    /**
     * Sets promised_delivery_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\PromisedDeliveryDate $promised_delivery_date promised_delivery_date
     *
     * @return $this
     */
    public function setPromisedDeliveryDate($promised_delivery_date)
    {
        $this->container['promised_delivery_date'] = $promised_delivery_date;

        return $this;
    }

    /**
     * Gets event_history.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\EventList
     */
    public function getEventHistory()
    {
        return $this->container['event_history'];
    }

    /**
     * Sets event_history.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\EventList $event_history event_history
     *
     * @return $this
     */
    public function setEventHistory($event_history)
    {
        $this->container['event_history'] = $event_history;

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
