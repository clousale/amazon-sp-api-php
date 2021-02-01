<?php
/**
 * FeesEstimateResult.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Product Fees.
 *
 * The Selling Partner API for Product Fees lets you programmatically retrieve estimated fees for a product. You can then account for those fees in your pricing.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\ProductFees;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * FeesEstimateResult Class Doc Comment.
 *

 * @description An item identifier and the estimated fees for the item.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FeesEstimateResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FeesEstimateResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'status' => 'string',
'fees_estimate_identifier' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateIdentifier',
'fees_estimate' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimate',
'error' => '\ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateError',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'status' => null,
'fees_estimate_identifier' => null,
'fees_estimate' => null,
'error' => null,    ];

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
        'status' => 'Status',
'fees_estimate_identifier' => 'FeesEstimateIdentifier',
'fees_estimate' => 'FeesEstimate',
'error' => 'Error',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
'fees_estimate_identifier' => 'setFeesEstimateIdentifier',
'fees_estimate' => 'setFeesEstimate',
'error' => 'setError',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
'fees_estimate_identifier' => 'getFeesEstimateIdentifier',
'fees_estimate' => 'getFeesEstimate',
'error' => 'getError',    ];

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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['fees_estimate_identifier'] = isset($data['fees_estimate_identifier']) ? $data['fees_estimate_identifier'] : null;
        $this->container['fees_estimate'] = isset($data['fees_estimate']) ? $data['fees_estimate'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
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
     * Gets status.
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status.
     *
     * @param string $status The status of the fee request. Possible values: Success, ClientError, ServiceError.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets fees_estimate_identifier.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateIdentifier
     */
    public function getFeesEstimateIdentifier()
    {
        return $this->container['fees_estimate_identifier'];
    }

    /**
     * Sets fees_estimate_identifier.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateIdentifier $fees_estimate_identifier fees_estimate_identifier
     *
     * @return $this
     */
    public function setFeesEstimateIdentifier($fees_estimate_identifier)
    {
        $this->container['fees_estimate_identifier'] = $fees_estimate_identifier;

        return $this;
    }

    /**
     * Gets fees_estimate.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimate
     */
    public function getFeesEstimate()
    {
        return $this->container['fees_estimate'];
    }

    /**
     * Sets fees_estimate.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimate $fees_estimate fees_estimate
     *
     * @return $this
     */
    public function setFeesEstimate($fees_estimate)
    {
        $this->container['fees_estimate'] = $fees_estimate;

        return $this;
    }

    /**
     * Gets error.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateError
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\ProductFees\FeesEstimateError $error error
     *
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

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
