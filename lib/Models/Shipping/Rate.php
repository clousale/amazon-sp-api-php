<?php
/**
 * Rate.
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
 * Rate Class Doc Comment.
 *

 * @description The available rate that can be used to send the shipment
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Rate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Rate';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'rate_id' => 'string',
'total_charge' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Currency',
'billed_weight' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Weight',
'expiration_time' => '\DateTime',
'service_type' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ServiceType',
'promise' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ShippingPromiseSet',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'rate_id' => null,
'total_charge' => null,
'billed_weight' => null,
'expiration_time' => 'date-time',
'service_type' => null,
'promise' => null,    ];

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
        'rate_id' => 'rateId',
'total_charge' => 'totalCharge',
'billed_weight' => 'billedWeight',
'expiration_time' => 'expirationTime',
'service_type' => 'serviceType',
'promise' => 'promise',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'rate_id' => 'setRateId',
'total_charge' => 'setTotalCharge',
'billed_weight' => 'setBilledWeight',
'expiration_time' => 'setExpirationTime',
'service_type' => 'setServiceType',
'promise' => 'setPromise',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'rate_id' => 'getRateId',
'total_charge' => 'getTotalCharge',
'billed_weight' => 'getBilledWeight',
'expiration_time' => 'getExpirationTime',
'service_type' => 'getServiceType',
'promise' => 'getPromise',    ];

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
        $this->container['rate_id'] = isset($data['rate_id']) ? $data['rate_id'] : null;
        $this->container['total_charge'] = isset($data['total_charge']) ? $data['total_charge'] : null;
        $this->container['billed_weight'] = isset($data['billed_weight']) ? $data['billed_weight'] : null;
        $this->container['expiration_time'] = isset($data['expiration_time']) ? $data['expiration_time'] : null;
        $this->container['service_type'] = isset($data['service_type']) ? $data['service_type'] : null;
        $this->container['promise'] = isset($data['promise']) ? $data['promise'] : null;
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
     * Gets rate_id.
     *
     * @return string
     */
    public function getRateId()
    {
        return $this->container['rate_id'];
    }

    /**
     * Sets rate_id.
     *
     * @param string $rate_id an identifier for the rate
     *
     * @return $this
     */
    public function setRateId($rate_id)
    {
        $this->container['rate_id'] = $rate_id;

        return $this;
    }

    /**
     * Gets total_charge.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Currency
     */
    public function getTotalCharge()
    {
        return $this->container['total_charge'];
    }

    /**
     * Sets total_charge.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Currency $total_charge total_charge
     *
     * @return $this
     */
    public function setTotalCharge($total_charge)
    {
        $this->container['total_charge'] = $total_charge;

        return $this;
    }

    /**
     * Gets billed_weight.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Weight
     */
    public function getBilledWeight()
    {
        return $this->container['billed_weight'];
    }

    /**
     * Sets billed_weight.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Weight $billed_weight billed_weight
     *
     * @return $this
     */
    public function setBilledWeight($billed_weight)
    {
        $this->container['billed_weight'] = $billed_weight;

        return $this;
    }

    /**
     * Gets expiration_time.
     *
     * @return \DateTime
     */
    public function getExpirationTime()
    {
        return $this->container['expiration_time'];
    }

    /**
     * Sets expiration_time.
     *
     * @param \DateTime $expiration_time the time after which the offering will expire
     *
     * @return $this
     */
    public function setExpirationTime($expiration_time)
    {
        $this->container['expiration_time'] = $expiration_time;

        return $this;
    }

    /**
     * Gets service_type.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ServiceType
     */
    public function getServiceType()
    {
        return $this->container['service_type'];
    }

    /**
     * Sets service_type.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ServiceType $service_type service_type
     *
     * @return $this
     */
    public function setServiceType($service_type)
    {
        $this->container['service_type'] = $service_type;

        return $this;
    }

    /**
     * Gets promise.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ShippingPromiseSet
     */
    public function getPromise()
    {
        return $this->container['promise'];
    }

    /**
     * Sets promise.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ShippingPromiseSet $promise promise
     *
     * @return $this
     */
    public function setPromise($promise)
    {
        $this->container['promise'] = $promise;

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
