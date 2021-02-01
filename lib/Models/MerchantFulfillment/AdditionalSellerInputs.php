<?php
/**
 * AdditionalSellerInputs.
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
 * AdditionalSellerInputs Class Doc Comment.
 *

 * @description An additional set of seller inputs required to purchase shipping.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class AdditionalSellerInputs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'AdditionalSellerInputs';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'additional_input_field_name' => 'string',
'additional_seller_input' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AdditionalSellerInput',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'additional_input_field_name' => null,
'additional_seller_input' => null,    ];

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
        'additional_input_field_name' => 'AdditionalInputFieldName',
'additional_seller_input' => 'AdditionalSellerInput',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'additional_input_field_name' => 'setAdditionalInputFieldName',
'additional_seller_input' => 'setAdditionalSellerInput',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'additional_input_field_name' => 'getAdditionalInputFieldName',
'additional_seller_input' => 'getAdditionalSellerInput',    ];

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
        $this->container['additional_input_field_name'] = isset($data['additional_input_field_name']) ? $data['additional_input_field_name'] : null;
        $this->container['additional_seller_input'] = isset($data['additional_seller_input']) ? $data['additional_seller_input'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['additional_input_field_name']) {
            $invalidProperties[] = "'additional_input_field_name' can't be null";
        }
        if (null === $this->container['additional_seller_input']) {
            $invalidProperties[] = "'additional_seller_input' can't be null";
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
     * Gets additional_input_field_name.
     *
     * @return string
     */
    public function getAdditionalInputFieldName()
    {
        return $this->container['additional_input_field_name'];
    }

    /**
     * Sets additional_input_field_name.
     *
     * @param string $additional_input_field_name the name of the additional input field
     *
     * @return $this
     */
    public function setAdditionalInputFieldName($additional_input_field_name)
    {
        $this->container['additional_input_field_name'] = $additional_input_field_name;

        return $this;
    }

    /**
     * Gets additional_seller_input.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AdditionalSellerInput
     */
    public function getAdditionalSellerInput()
    {
        return $this->container['additional_seller_input'];
    }

    /**
     * Sets additional_seller_input.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AdditionalSellerInput $additional_seller_input additional_seller_input
     *
     * @return $this
     */
    public function setAdditionalSellerInput($additional_seller_input)
    {
        $this->container['additional_seller_input'] = $additional_seller_input;

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
