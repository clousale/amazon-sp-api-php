<?php
/**
 * TransportContent.
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
 * TransportContent Class Doc Comment.
 *

 * @description Inbound shipment information, including carrier details, shipment status, and the workflow status for a request for shipment with an Amazon-partnered carrier.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class TransportContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'TransportContent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'transport_header' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportHeader',
'transport_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportDetailOutput',
'transport_result' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportResult',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'transport_header' => null,
'transport_details' => null,
'transport_result' => null,    ];

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
        'transport_header' => 'TransportHeader',
'transport_details' => 'TransportDetails',
'transport_result' => 'TransportResult',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'transport_header' => 'setTransportHeader',
'transport_details' => 'setTransportDetails',
'transport_result' => 'setTransportResult',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'transport_header' => 'getTransportHeader',
'transport_details' => 'getTransportDetails',
'transport_result' => 'getTransportResult',    ];

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
        $this->container['transport_header'] = isset($data['transport_header']) ? $data['transport_header'] : null;
        $this->container['transport_details'] = isset($data['transport_details']) ? $data['transport_details'] : null;
        $this->container['transport_result'] = isset($data['transport_result']) ? $data['transport_result'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['transport_header']) {
            $invalidProperties[] = "'transport_header' can't be null";
        }
        if (null === $this->container['transport_details']) {
            $invalidProperties[] = "'transport_details' can't be null";
        }
        if (null === $this->container['transport_result']) {
            $invalidProperties[] = "'transport_result' can't be null";
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
     * Gets transport_header.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportHeader
     */
    public function getTransportHeader()
    {
        return $this->container['transport_header'];
    }

    /**
     * Sets transport_header.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportHeader $transport_header transport_header
     *
     * @return $this
     */
    public function setTransportHeader($transport_header)
    {
        $this->container['transport_header'] = $transport_header;

        return $this;
    }

    /**
     * Gets transport_details.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportDetailOutput
     */
    public function getTransportDetails()
    {
        return $this->container['transport_details'];
    }

    /**
     * Sets transport_details.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportDetailOutput $transport_details transport_details
     *
     * @return $this
     */
    public function setTransportDetails($transport_details)
    {
        $this->container['transport_details'] = $transport_details;

        return $this;
    }

    /**
     * Gets transport_result.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportResult
     */
    public function getTransportResult()
    {
        return $this->container['transport_result'];
    }

    /**
     * Sets transport_result.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\TransportResult $transport_result transport_result
     *
     * @return $this
     */
    public function setTransportResult($transport_result)
    {
        $this->container['transport_result'] = $transport_result;

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
