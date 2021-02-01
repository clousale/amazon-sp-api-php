<?php
/**
 * Container.
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
 * Container Class Doc Comment.
 *

 * @description Container in the shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Container implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Container';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'container_type' => 'string',
'container_reference_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ContainerReferenceId',
'value' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Currency',
'dimensions' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Dimensions',
'items' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ContainerItem[]',
'weight' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Weight',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'container_type' => null,
'container_reference_id' => null,
'value' => null,
'dimensions' => null,
'items' => null,
'weight' => null,    ];

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
        'container_type' => 'containerType',
'container_reference_id' => 'containerReferenceId',
'value' => 'value',
'dimensions' => 'dimensions',
'items' => 'items',
'weight' => 'weight',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'container_type' => 'setContainerType',
'container_reference_id' => 'setContainerReferenceId',
'value' => 'setValue',
'dimensions' => 'setDimensions',
'items' => 'setItems',
'weight' => 'setWeight',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'container_type' => 'getContainerType',
'container_reference_id' => 'getContainerReferenceId',
'value' => 'getValue',
'dimensions' => 'getDimensions',
'items' => 'getItems',
'weight' => 'getWeight',    ];

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

    const CONTAINER_TYPE_PACKAGE = 'PACKAGE';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getContainerTypeAllowableValues()
    {
        return [
            self::CONTAINER_TYPE_PACKAGE,        ];
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
        $this->container['container_type'] = isset($data['container_type']) ? $data['container_type'] : null;
        $this->container['container_reference_id'] = isset($data['container_reference_id']) ? $data['container_reference_id'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['dimensions'] = isset($data['dimensions']) ? $data['dimensions'] : null;
        $this->container['items'] = isset($data['items']) ? $data['items'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getContainerTypeAllowableValues();
        if (!is_null($this->container['container_type']) && !in_array($this->container['container_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'container_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (null === $this->container['container_reference_id']) {
            $invalidProperties[] = "'container_reference_id' can't be null";
        }
        if (null === $this->container['value']) {
            $invalidProperties[] = "'value' can't be null";
        }
        if (null === $this->container['dimensions']) {
            $invalidProperties[] = "'dimensions' can't be null";
        }
        if (null === $this->container['items']) {
            $invalidProperties[] = "'items' can't be null";
        }
        if (null === $this->container['weight']) {
            $invalidProperties[] = "'weight' can't be null";
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
     * Gets container_type.
     *
     * @return string
     */
    public function getContainerType()
    {
        return $this->container['container_type'];
    }

    /**
     * Sets container_type.
     *
     * @param string $container_type The type of physical container being used. (always 'PACKAGE')
     *
     * @return $this
     */
    public function setContainerType($container_type)
    {
        $allowedValues = $this->getContainerTypeAllowableValues();
        if (!is_null($container_type) && !in_array($container_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'container_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['container_type'] = $container_type;

        return $this;
    }

    /**
     * Gets container_reference_id.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ContainerReferenceId
     */
    public function getContainerReferenceId()
    {
        return $this->container['container_reference_id'];
    }

    /**
     * Sets container_reference_id.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ContainerReferenceId $container_reference_id container_reference_id
     *
     * @return $this
     */
    public function setContainerReferenceId($container_reference_id)
    {
        $this->container['container_reference_id'] = $container_reference_id;

        return $this;
    }

    /**
     * Gets value.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Currency
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Currency $value value
     *
     * @return $this
     */
    public function setValue($value)
    {
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets dimensions.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Dimensions
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Dimensions $dimensions dimensions
     *
     * @return $this
     */
    public function setDimensions($dimensions)
    {
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ContainerItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ContainerItem[] $items a list of the items in the container
     *
     * @return $this
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets weight.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Weight
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Weight $weight weight
     *
     * @return $this
     */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;

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
