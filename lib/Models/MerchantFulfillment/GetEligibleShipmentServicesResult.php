<?php
/**
 * GetEligibleShipmentServicesResult.
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
 * GetEligibleShipmentServicesResult Class Doc Comment.
 *

 * @description The payload for the getEligibleShipmentServices operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class GetEligibleShipmentServicesResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'GetEligibleShipmentServicesResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipping_service_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShippingServiceList',
'rejected_shipping_service_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\RejectedShippingServiceList',
'temporarily_unavailable_carrier_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\TemporarilyUnavailableCarrierList',
'terms_and_conditions_not_accepted_carrier_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\TermsAndConditionsNotAcceptedCarrierList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'shipping_service_list' => null,
'rejected_shipping_service_list' => null,
'temporarily_unavailable_carrier_list' => null,
'terms_and_conditions_not_accepted_carrier_list' => null,    ];

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
        'shipping_service_list' => 'ShippingServiceList',
'rejected_shipping_service_list' => 'RejectedShippingServiceList',
'temporarily_unavailable_carrier_list' => 'TemporarilyUnavailableCarrierList',
'terms_and_conditions_not_accepted_carrier_list' => 'TermsAndConditionsNotAcceptedCarrierList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'shipping_service_list' => 'setShippingServiceList',
'rejected_shipping_service_list' => 'setRejectedShippingServiceList',
'temporarily_unavailable_carrier_list' => 'setTemporarilyUnavailableCarrierList',
'terms_and_conditions_not_accepted_carrier_list' => 'setTermsAndConditionsNotAcceptedCarrierList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'shipping_service_list' => 'getShippingServiceList',
'rejected_shipping_service_list' => 'getRejectedShippingServiceList',
'temporarily_unavailable_carrier_list' => 'getTemporarilyUnavailableCarrierList',
'terms_and_conditions_not_accepted_carrier_list' => 'getTermsAndConditionsNotAcceptedCarrierList',    ];

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
        $this->container['shipping_service_list'] = isset($data['shipping_service_list']) ? $data['shipping_service_list'] : null;
        $this->container['rejected_shipping_service_list'] = isset($data['rejected_shipping_service_list']) ? $data['rejected_shipping_service_list'] : null;
        $this->container['temporarily_unavailable_carrier_list'] = isset($data['temporarily_unavailable_carrier_list']) ? $data['temporarily_unavailable_carrier_list'] : null;
        $this->container['terms_and_conditions_not_accepted_carrier_list'] = isset($data['terms_and_conditions_not_accepted_carrier_list']) ? $data['terms_and_conditions_not_accepted_carrier_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['shipping_service_list']) {
            $invalidProperties[] = "'shipping_service_list' can't be null";
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
     * Gets shipping_service_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShippingServiceList
     */
    public function getShippingServiceList()
    {
        return $this->container['shipping_service_list'];
    }

    /**
     * Sets shipping_service_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\ShippingServiceList $shipping_service_list shipping_service_list
     *
     * @return $this
     */
    public function setShippingServiceList($shipping_service_list)
    {
        $this->container['shipping_service_list'] = $shipping_service_list;

        return $this;
    }

    /**
     * Gets rejected_shipping_service_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\RejectedShippingServiceList
     */
    public function getRejectedShippingServiceList()
    {
        return $this->container['rejected_shipping_service_list'];
    }

    /**
     * Sets rejected_shipping_service_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\RejectedShippingServiceList $rejected_shipping_service_list rejected_shipping_service_list
     *
     * @return $this
     */
    public function setRejectedShippingServiceList($rejected_shipping_service_list)
    {
        $this->container['rejected_shipping_service_list'] = $rejected_shipping_service_list;

        return $this;
    }

    /**
     * Gets temporarily_unavailable_carrier_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\TemporarilyUnavailableCarrierList
     */
    public function getTemporarilyUnavailableCarrierList()
    {
        return $this->container['temporarily_unavailable_carrier_list'];
    }

    /**
     * Sets temporarily_unavailable_carrier_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\TemporarilyUnavailableCarrierList $temporarily_unavailable_carrier_list temporarily_unavailable_carrier_list
     *
     * @return $this
     */
    public function setTemporarilyUnavailableCarrierList($temporarily_unavailable_carrier_list)
    {
        $this->container['temporarily_unavailable_carrier_list'] = $temporarily_unavailable_carrier_list;

        return $this;
    }

    /**
     * Gets terms_and_conditions_not_accepted_carrier_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\TermsAndConditionsNotAcceptedCarrierList
     */
    public function getTermsAndConditionsNotAcceptedCarrierList()
    {
        return $this->container['terms_and_conditions_not_accepted_carrier_list'];
    }

    /**
     * Sets terms_and_conditions_not_accepted_carrier_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\TermsAndConditionsNotAcceptedCarrierList $terms_and_conditions_not_accepted_carrier_list terms_and_conditions_not_accepted_carrier_list
     *
     * @return $this
     */
    public function setTermsAndConditionsNotAcceptedCarrierList($terms_and_conditions_not_accepted_carrier_list)
    {
        $this->container['terms_and_conditions_not_accepted_carrier_list'] = $terms_and_conditions_not_accepted_carrier_list;

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
