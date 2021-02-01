<?php
/**
 * PurchaseShipmentRequest.
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
 * PurchaseShipmentRequest Class Doc Comment.
 *

 * @description The payload schema for the purchaseShipment operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PurchaseShipmentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PurchaseShipmentRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'client_reference_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ClientReferenceId',
'ship_to' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Address',
'ship_from' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Address',
'ship_date' => '\DateTime',
'service_type' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ServiceType',
'containers' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ContainerList',
'label_specification' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\LabelSpecification',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'client_reference_id' => null,
'ship_to' => null,
'ship_from' => null,
'ship_date' => 'date-time',
'service_type' => null,
'containers' => null,
'label_specification' => null,    ];

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
        'client_reference_id' => 'clientReferenceId',
'ship_to' => 'shipTo',
'ship_from' => 'shipFrom',
'ship_date' => 'shipDate',
'service_type' => 'serviceType',
'containers' => 'containers',
'label_specification' => 'labelSpecification',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'client_reference_id' => 'setClientReferenceId',
'ship_to' => 'setShipTo',
'ship_from' => 'setShipFrom',
'ship_date' => 'setShipDate',
'service_type' => 'setServiceType',
'containers' => 'setContainers',
'label_specification' => 'setLabelSpecification',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'client_reference_id' => 'getClientReferenceId',
'ship_to' => 'getShipTo',
'ship_from' => 'getShipFrom',
'ship_date' => 'getShipDate',
'service_type' => 'getServiceType',
'containers' => 'getContainers',
'label_specification' => 'getLabelSpecification',    ];

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
        $this->container['client_reference_id'] = isset($data['client_reference_id']) ? $data['client_reference_id'] : null;
        $this->container['ship_to'] = isset($data['ship_to']) ? $data['ship_to'] : null;
        $this->container['ship_from'] = isset($data['ship_from']) ? $data['ship_from'] : null;
        $this->container['ship_date'] = isset($data['ship_date']) ? $data['ship_date'] : null;
        $this->container['service_type'] = isset($data['service_type']) ? $data['service_type'] : null;
        $this->container['containers'] = isset($data['containers']) ? $data['containers'] : null;
        $this->container['label_specification'] = isset($data['label_specification']) ? $data['label_specification'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['client_reference_id']) {
            $invalidProperties[] = "'client_reference_id' can't be null";
        }
        if (null === $this->container['ship_to']) {
            $invalidProperties[] = "'ship_to' can't be null";
        }
        if (null === $this->container['ship_from']) {
            $invalidProperties[] = "'ship_from' can't be null";
        }
        if (null === $this->container['service_type']) {
            $invalidProperties[] = "'service_type' can't be null";
        }
        if (null === $this->container['containers']) {
            $invalidProperties[] = "'containers' can't be null";
        }
        if (null === $this->container['label_specification']) {
            $invalidProperties[] = "'label_specification' can't be null";
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
     * Gets client_reference_id.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ClientReferenceId
     */
    public function getClientReferenceId()
    {
        return $this->container['client_reference_id'];
    }

    /**
     * Sets client_reference_id.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ClientReferenceId $client_reference_id client_reference_id
     *
     * @return $this
     */
    public function setClientReferenceId($client_reference_id)
    {
        $this->container['client_reference_id'] = $client_reference_id;

        return $this;
    }

    /**
     * Gets ship_to.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Address
     */
    public function getShipTo()
    {
        return $this->container['ship_to'];
    }

    /**
     * Sets ship_to.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Address $ship_to ship_to
     *
     * @return $this
     */
    public function setShipTo($ship_to)
    {
        $this->container['ship_to'] = $ship_to;

        return $this;
    }

    /**
     * Gets ship_from.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Address
     */
    public function getShipFrom()
    {
        return $this->container['ship_from'];
    }

    /**
     * Sets ship_from.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\Address $ship_from ship_from
     *
     * @return $this
     */
    public function setShipFrom($ship_from)
    {
        $this->container['ship_from'] = $ship_from;

        return $this;
    }

    /**
     * Gets ship_date.
     *
     * @return \DateTime
     */
    public function getShipDate()
    {
        return $this->container['ship_date'];
    }

    /**
     * Sets ship_date.
     *
     * @param \DateTime $ship_date The start date and time. This defaults to the current date and time.
     *
     * @return $this
     */
    public function setShipDate($ship_date)
    {
        $this->container['ship_date'] = $ship_date;

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
     * Gets containers.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ContainerList
     */
    public function getContainers()
    {
        return $this->container['containers'];
    }

    /**
     * Sets containers.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\ContainerList $containers containers
     *
     * @return $this
     */
    public function setContainers($containers)
    {
        $this->container['containers'] = $containers;

        return $this;
    }

    /**
     * Gets label_specification.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\LabelSpecification
     */
    public function getLabelSpecification()
    {
        return $this->container['label_specification'];
    }

    /**
     * Sets label_specification.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\LabelSpecification $label_specification label_specification
     *
     * @return $this
     */
    public function setLabelSpecification($label_specification)
    {
        $this->container['label_specification'] = $label_specification;

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
