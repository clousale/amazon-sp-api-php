<?php
/**
 * PurchaseShipmentResult.
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
 * PurchaseShipmentResult Class Doc Comment.
 *

 * @description The payload schema for the purchaseShipment operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PurchaseShipmentResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PurchaseShipmentResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipment_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ShipmentId',
'service_rate' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ServiceRate',
'label_results' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\LabelResultList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'shipment_id' => null,
'service_rate' => null,
'label_results' => null,    ];

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
        'shipment_id' => 'shipmentId',
'service_rate' => 'serviceRate',
'label_results' => 'labelResults',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_id' => 'setShipmentId',
'service_rate' => 'setServiceRate',
'label_results' => 'setLabelResults',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_id' => 'getShipmentId',
'service_rate' => 'getServiceRate',
'label_results' => 'getLabelResults',    ];

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
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['service_rate'] = isset($data['service_rate']) ? $data['service_rate'] : null;
        $this->container['label_results'] = isset($data['label_results']) ? $data['label_results'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['shipment_id']) {
            $invalidProperties[] = "'shipment_id' can't be null";
        }
        if (null === $this->container['service_rate']) {
            $invalidProperties[] = "'service_rate' can't be null";
        }
        if (null === $this->container['label_results']) {
            $invalidProperties[] = "'label_results' can't be null";
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
     * Gets shipment_id.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ShipmentId
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ShipmentId $shipment_id shipment_id
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets service_rate.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ServiceRate
     */
    public function getServiceRate()
    {
        return $this->container['service_rate'];
    }

    /**
     * Sets service_rate.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ServiceRate $service_rate service_rate
     *
     * @return $this
     */
    public function setServiceRate($service_rate)
    {
        $this->container['service_rate'] = $service_rate;

        return $this;
    }

    /**
     * Gets label_results.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\LabelResultList
     */
    public function getLabelResults()
    {
        return $this->container['label_results'];
    }

    /**
     * Sets label_results.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\LabelResultList $label_results label_results
     *
     * @return $this
     */
    public function setLabelResults($label_results)
    {
        $this->container['label_results'] = $label_results;

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
