<?php
/**
 * SellerInputDefinition.
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
 * SellerInputDefinition Class Doc Comment.
 *

 * @description Specifies characteristics that apply to a seller input.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class SellerInputDefinition implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'SellerInputDefinition';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'is_required' => 'bool',
'data_type' => 'string',
'constraints' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Constraints',
'input_display_text' => 'string',
'input_target' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\InputTargetType',
'stored_value' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AdditionalSellerInput',
'restricted_set_values' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\RestrictedSetValues',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'is_required' => null,
'data_type' => null,
'constraints' => null,
'input_display_text' => null,
'input_target' => null,
'stored_value' => null,
'restricted_set_values' => null,    ];

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
        'is_required' => 'IsRequired',
'data_type' => 'DataType',
'constraints' => 'Constraints',
'input_display_text' => 'InputDisplayText',
'input_target' => 'InputTarget',
'stored_value' => 'StoredValue',
'restricted_set_values' => 'RestrictedSetValues',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'is_required' => 'setIsRequired',
'data_type' => 'setDataType',
'constraints' => 'setConstraints',
'input_display_text' => 'setInputDisplayText',
'input_target' => 'setInputTarget',
'stored_value' => 'setStoredValue',
'restricted_set_values' => 'setRestrictedSetValues',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'is_required' => 'getIsRequired',
'data_type' => 'getDataType',
'constraints' => 'getConstraints',
'input_display_text' => 'getInputDisplayText',
'input_target' => 'getInputTarget',
'stored_value' => 'getStoredValue',
'restricted_set_values' => 'getRestrictedSetValues',    ];

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
        $this->container['is_required'] = isset($data['is_required']) ? $data['is_required'] : null;
        $this->container['data_type'] = isset($data['data_type']) ? $data['data_type'] : null;
        $this->container['constraints'] = isset($data['constraints']) ? $data['constraints'] : null;
        $this->container['input_display_text'] = isset($data['input_display_text']) ? $data['input_display_text'] : null;
        $this->container['input_target'] = isset($data['input_target']) ? $data['input_target'] : null;
        $this->container['stored_value'] = isset($data['stored_value']) ? $data['stored_value'] : null;
        $this->container['restricted_set_values'] = isset($data['restricted_set_values']) ? $data['restricted_set_values'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['is_required']) {
            $invalidProperties[] = "'is_required' can't be null";
        }
        if (null === $this->container['data_type']) {
            $invalidProperties[] = "'data_type' can't be null";
        }
        if (null === $this->container['constraints']) {
            $invalidProperties[] = "'constraints' can't be null";
        }
        if (null === $this->container['input_display_text']) {
            $invalidProperties[] = "'input_display_text' can't be null";
        }
        if (null === $this->container['stored_value']) {
            $invalidProperties[] = "'stored_value' can't be null";
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
     * Gets is_required.
     *
     * @return bool
     */
    public function getIsRequired()
    {
        return $this->container['is_required'];
    }

    /**
     * Sets is_required.
     *
     * @param bool $is_required when true, the additional input field is required
     *
     * @return $this
     */
    public function setIsRequired($is_required)
    {
        $this->container['is_required'] = $is_required;

        return $this;
    }

    /**
     * Gets data_type.
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->container['data_type'];
    }

    /**
     * Sets data_type.
     *
     * @param string $data_type the data type of the additional input field
     *
     * @return $this
     */
    public function setDataType($data_type)
    {
        $this->container['data_type'] = $data_type;

        return $this;
    }

    /**
     * Gets constraints.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Constraints
     */
    public function getConstraints()
    {
        return $this->container['constraints'];
    }

    /**
     * Sets constraints.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\Constraints $constraints constraints
     *
     * @return $this
     */
    public function setConstraints($constraints)
    {
        $this->container['constraints'] = $constraints;

        return $this;
    }

    /**
     * Gets input_display_text.
     *
     * @return string
     */
    public function getInputDisplayText()
    {
        return $this->container['input_display_text'];
    }

    /**
     * Sets input_display_text.
     *
     * @param string $input_display_text the display text for the additional input field
     *
     * @return $this
     */
    public function setInputDisplayText($input_display_text)
    {
        $this->container['input_display_text'] = $input_display_text;

        return $this;
    }

    /**
     * Gets input_target.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\InputTargetType
     */
    public function getInputTarget()
    {
        return $this->container['input_target'];
    }

    /**
     * Sets input_target.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\InputTargetType $input_target input_target
     *
     * @return $this
     */
    public function setInputTarget($input_target)
    {
        $this->container['input_target'] = $input_target;

        return $this;
    }

    /**
     * Gets stored_value.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AdditionalSellerInput
     */
    public function getStoredValue()
    {
        return $this->container['stored_value'];
    }

    /**
     * Sets stored_value.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AdditionalSellerInput $stored_value stored_value
     *
     * @return $this
     */
    public function setStoredValue($stored_value)
    {
        $this->container['stored_value'] = $stored_value;

        return $this;
    }

    /**
     * Gets restricted_set_values.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\RestrictedSetValues
     */
    public function getRestrictedSetValues()
    {
        return $this->container['restricted_set_values'];
    }

    /**
     * Sets restricted_set_values.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\RestrictedSetValues $restricted_set_values restricted_set_values
     *
     * @return $this
     */
    public function setRestrictedSetValues($restricted_set_values)
    {
        $this->container['restricted_set_values'] = $restricted_set_values;

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
