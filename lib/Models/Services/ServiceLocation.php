<?php
/**
 * ServiceLocation.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Services;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * ServiceLocation Class Doc Comment.
 *

 * @description Information about the location of the service job.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ServiceLocation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ServiceLocation';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'service_location_type' => 'string',
'address' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\Address',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'service_location_type' => null,
'address' => null,    ];

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
        'service_location_type' => 'serviceLocationType',
'address' => 'address',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'service_location_type' => 'setServiceLocationType',
'address' => 'setAddress',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'service_location_type' => 'getServiceLocationType',
'address' => 'getAddress',    ];

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

    const SERVICE_LOCATION_TYPE_IN_HOME = 'IN_HOME';
    const SERVICE_LOCATION_TYPE_IN_STORE = 'IN_STORE';
    const SERVICE_LOCATION_TYPE_ONLINE = 'ONLINE';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getServiceLocationTypeAllowableValues()
    {
        return [
            self::SERVICE_LOCATION_TYPE_IN_HOME,
self::SERVICE_LOCATION_TYPE_IN_STORE,
self::SERVICE_LOCATION_TYPE_ONLINE,        ];
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
        $this->container['service_location_type'] = isset($data['service_location_type']) ? $data['service_location_type'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getServiceLocationTypeAllowableValues();
        if (!is_null($this->container['service_location_type']) && !in_array($this->container['service_location_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'service_location_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets service_location_type.
     *
     * @return string
     */
    public function getServiceLocationType()
    {
        return $this->container['service_location_type'];
    }

    /**
     * Sets service_location_type.
     *
     * @param string $service_location_type the location of the service job
     *
     * @return $this
     */
    public function setServiceLocationType($service_location_type)
    {
        $allowedValues = $this->getServiceLocationTypeAllowableValues();
        if (!is_null($service_location_type) && !in_array($service_location_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'service_location_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['service_location_type'] = $service_location_type;

        return $this;
    }

    /**
     * Gets address.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\Address
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\Address $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

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
