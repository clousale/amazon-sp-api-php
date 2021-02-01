<?php
/**
 * NonPartneredSmallParcelPackageOutput.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * NonPartneredSmallParcelPackageOutput Class Doc Comment.
 *

 * @description Carrier, tracking number, and status information for the package.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class NonPartneredSmallParcelPackageOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'NonPartneredSmallParcelPackageOutput';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'carrier_name' => 'string',
'tracking_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TrackingId',
'package_status' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PackageStatus',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'carrier_name' => null,
'tracking_id' => null,
'package_status' => null,    ];

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
        'carrier_name' => 'CarrierName',
'tracking_id' => 'TrackingId',
'package_status' => 'PackageStatus',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'carrier_name' => 'setCarrierName',
'tracking_id' => 'setTrackingId',
'package_status' => 'setPackageStatus',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'carrier_name' => 'getCarrierName',
'tracking_id' => 'getTrackingId',
'package_status' => 'getPackageStatus',    ];

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
        $this->container['carrier_name'] = isset($data['carrier_name']) ? $data['carrier_name'] : null;
        $this->container['tracking_id'] = isset($data['tracking_id']) ? $data['tracking_id'] : null;
        $this->container['package_status'] = isset($data['package_status']) ? $data['package_status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['carrier_name']) {
            $invalidProperties[] = "'carrier_name' can't be null";
        }
        if (null === $this->container['tracking_id']) {
            $invalidProperties[] = "'tracking_id' can't be null";
        }
        if (null === $this->container['package_status']) {
            $invalidProperties[] = "'package_status' can't be null";
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
     * Gets carrier_name.
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name.
     *
     * @param string $carrier_name the carrier that you are using for the inbound shipment
     *
     * @return $this
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

        return $this;
    }

    /**
     * Gets tracking_id.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TrackingId
     */
    public function getTrackingId()
    {
        return $this->container['tracking_id'];
    }

    /**
     * Sets tracking_id.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TrackingId $tracking_id tracking_id
     *
     * @return $this
     */
    public function setTrackingId($tracking_id)
    {
        $this->container['tracking_id'] = $tracking_id;

        return $this;
    }

    /**
     * Gets package_status.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PackageStatus
     */
    public function getPackageStatus()
    {
        return $this->container['package_status'];
    }

    /**
     * Sets package_status.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PackageStatus $package_status package_status
     *
     * @return $this
     */
    public function setPackageStatus($package_status)
    {
        $this->container['package_status'] = $package_status;

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
