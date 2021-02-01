<?php
/**
 * FulfillmentShipmentPackage.
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
 * FulfillmentShipmentPackage Class Doc Comment.
 *

 * @description Package information for a shipment in a fulfillment order.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FulfillmentShipmentPackage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FulfillmentShipmentPackage';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'package_number' => 'int',
'carrier_code' => 'string',
'tracking_number' => 'string',
'estimated_arrival_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'package_number' => 'int32',
'carrier_code' => null,
'tracking_number' => null,
'estimated_arrival_date' => null,    ];

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
        'package_number' => 'packageNumber',
'carrier_code' => 'carrierCode',
'tracking_number' => 'trackingNumber',
'estimated_arrival_date' => 'estimatedArrivalDate',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'package_number' => 'setPackageNumber',
'carrier_code' => 'setCarrierCode',
'tracking_number' => 'setTrackingNumber',
'estimated_arrival_date' => 'setEstimatedArrivalDate',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'package_number' => 'getPackageNumber',
'carrier_code' => 'getCarrierCode',
'tracking_number' => 'getTrackingNumber',
'estimated_arrival_date' => 'getEstimatedArrivalDate',    ];

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
        $this->container['package_number'] = isset($data['package_number']) ? $data['package_number'] : null;
        $this->container['carrier_code'] = isset($data['carrier_code']) ? $data['carrier_code'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['estimated_arrival_date'] = isset($data['estimated_arrival_date']) ? $data['estimated_arrival_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['package_number']) {
            $invalidProperties[] = "'package_number' can't be null";
        }
        if (null === $this->container['carrier_code']) {
            $invalidProperties[] = "'carrier_code' can't be null";
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
     * Gets package_number.
     *
     * @return int
     */
    public function getPackageNumber()
    {
        return $this->container['package_number'];
    }

    /**
     * Sets package_number.
     *
     * @param int $package_number identifies a package in a shipment
     *
     * @return $this
     */
    public function setPackageNumber($package_number)
    {
        $this->container['package_number'] = $package_number;

        return $this;
    }

    /**
     * Gets carrier_code.
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code.
     *
     * @param string $carrier_code identifies the carrier who will deliver the shipment to the recipient
     *
     * @return $this
     */
    public function setCarrierCode($carrier_code)
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets tracking_number.
     *
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number.
     *
     * @param string $tracking_number the tracking number, if provided, can be used to obtain tracking and delivery information
     *
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets estimated_arrival_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp
     */
    public function getEstimatedArrivalDate()
    {
        return $this->container['estimated_arrival_date'];
    }

    /**
     * Sets estimated_arrival_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\Timestamp $estimated_arrival_date estimated_arrival_date
     *
     * @return $this
     */
    public function setEstimatedArrivalDate($estimated_arrival_date)
    {
        $this->container['estimated_arrival_date'] = $estimated_arrival_date;

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
