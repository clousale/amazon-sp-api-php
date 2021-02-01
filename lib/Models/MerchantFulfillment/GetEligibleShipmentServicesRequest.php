<?php
/**
 * GetEligibleShipmentServicesRequest.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * GetEligibleShipmentServicesRequest Class Doc Comment.
 *

 * @description Request schema.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class GetEligibleShipmentServicesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'GetEligibleShipmentServicesRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipment_request_details' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShipmentRequestDetails',
'shipping_offering_filter' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShippingOfferingFilter',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'shipment_request_details' => null,
'shipping_offering_filter' => null,    ];

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
        'shipment_request_details' => 'ShipmentRequestDetails',
'shipping_offering_filter' => 'ShippingOfferingFilter',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_request_details' => 'setShipmentRequestDetails',
'shipping_offering_filter' => 'setShippingOfferingFilter',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_request_details' => 'getShipmentRequestDetails',
'shipping_offering_filter' => 'getShippingOfferingFilter',    ];

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
        $this->container['shipment_request_details'] = isset($data['shipment_request_details']) ? $data['shipment_request_details'] : null;
        $this->container['shipping_offering_filter'] = isset($data['shipping_offering_filter']) ? $data['shipping_offering_filter'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['shipment_request_details']) {
            $invalidProperties[] = "'shipment_request_details' can't be null";
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
     * Gets shipment_request_details.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShipmentRequestDetails
     */
    public function getShipmentRequestDetails()
    {
        return $this->container['shipment_request_details'];
    }

    /**
     * Sets shipment_request_details.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShipmentRequestDetails $shipment_request_details shipment_request_details
     *
     * @return $this
     */
    public function setShipmentRequestDetails($shipment_request_details)
    {
        $this->container['shipment_request_details'] = $shipment_request_details;

        return $this;
    }

    /**
     * Gets shipping_offering_filter.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShippingOfferingFilter
     */
    public function getShippingOfferingFilter()
    {
        return $this->container['shipping_offering_filter'];
    }

    /**
     * Sets shipping_offering_filter.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShippingOfferingFilter $shipping_offering_filter shipping_offering_filter
     *
     * @return $this
     */
    public function setShippingOfferingFilter($shipping_offering_filter)
    {
        $this->container['shipping_offering_filter'] = $shipping_offering_filter;

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
