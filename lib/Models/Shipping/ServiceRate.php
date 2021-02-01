<?php
/**
 * ServiceRate.
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
 * ServiceRate Class Doc Comment.
 *

 * @description The specific rate for a shipping service, or null if no service available.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ServiceRate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ServiceRate';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'total_charge' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Currency',
'billable_weight' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Weight',
'service_type' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ServiceType',
'promise' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ShippingPromiseSet',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'total_charge' => null,
'billable_weight' => null,
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
        'total_charge' => 'totalCharge',
'billable_weight' => 'billableWeight',
'service_type' => 'serviceType',
'promise' => 'promise',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'total_charge' => 'setTotalCharge',
'billable_weight' => 'setBillableWeight',
'service_type' => 'setServiceType',
'promise' => 'setPromise',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'total_charge' => 'getTotalCharge',
'billable_weight' => 'getBillableWeight',
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
        $this->container['total_charge'] = isset($data['total_charge']) ? $data['total_charge'] : null;
        $this->container['billable_weight'] = isset($data['billable_weight']) ? $data['billable_weight'] : null;
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

        if (null === $this->container['total_charge']) {
            $invalidProperties[] = "'total_charge' can't be null";
        }
        if (null === $this->container['billable_weight']) {
            $invalidProperties[] = "'billable_weight' can't be null";
        }
        if (null === $this->container['service_type']) {
            $invalidProperties[] = "'service_type' can't be null";
        }
        if (null === $this->container['promise']) {
            $invalidProperties[] = "'promise' can't be null";
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
     * Gets billable_weight.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Weight
     */
    public function getBillableWeight()
    {
        return $this->container['billable_weight'];
    }

    /**
     * Sets billable_weight.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Weight $billable_weight billable_weight
     *
     * @return $this
     */
    public function setBillableWeight($billable_weight)
    {
        $this->container['billable_weight'] = $billable_weight;

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
