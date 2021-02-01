<?php
/**
 * ShippingServiceOptions.
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
 * ShippingServiceOptions Class Doc Comment.
 *

 * @description Extra services provided by a carrier.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ShippingServiceOptions implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ShippingServiceOptions';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'delivery_experience' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\DeliveryExperienceType',
'declared_value' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CurrencyAmount',
'carrier_will_pick_up' => 'bool',
'carrier_will_pick_up_option' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CarrierWillPickUpOption',
'label_format' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\LabelFormat',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'delivery_experience' => null,
'declared_value' => null,
'carrier_will_pick_up' => null,
'carrier_will_pick_up_option' => null,
'label_format' => null,    ];

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
        'delivery_experience' => 'DeliveryExperience',
'declared_value' => 'DeclaredValue',
'carrier_will_pick_up' => 'CarrierWillPickUp',
'carrier_will_pick_up_option' => 'CarrierWillPickUpOption',
'label_format' => 'LabelFormat',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_experience' => 'setDeliveryExperience',
'declared_value' => 'setDeclaredValue',
'carrier_will_pick_up' => 'setCarrierWillPickUp',
'carrier_will_pick_up_option' => 'setCarrierWillPickUpOption',
'label_format' => 'setLabelFormat',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_experience' => 'getDeliveryExperience',
'declared_value' => 'getDeclaredValue',
'carrier_will_pick_up' => 'getCarrierWillPickUp',
'carrier_will_pick_up_option' => 'getCarrierWillPickUpOption',
'label_format' => 'getLabelFormat',    ];

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
        $this->container['delivery_experience'] = isset($data['delivery_experience']) ? $data['delivery_experience'] : null;
        $this->container['declared_value'] = isset($data['declared_value']) ? $data['declared_value'] : null;
        $this->container['carrier_will_pick_up'] = isset($data['carrier_will_pick_up']) ? $data['carrier_will_pick_up'] : null;
        $this->container['carrier_will_pick_up_option'] = isset($data['carrier_will_pick_up_option']) ? $data['carrier_will_pick_up_option'] : null;
        $this->container['label_format'] = isset($data['label_format']) ? $data['label_format'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['delivery_experience']) {
            $invalidProperties[] = "'delivery_experience' can't be null";
        }
        if (null === $this->container['carrier_will_pick_up']) {
            $invalidProperties[] = "'carrier_will_pick_up' can't be null";
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
     * Gets delivery_experience.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\DeliveryExperienceType
     */
    public function getDeliveryExperience()
    {
        return $this->container['delivery_experience'];
    }

    /**
     * Sets delivery_experience.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\DeliveryExperienceType $delivery_experience delivery_experience
     *
     * @return $this
     */
    public function setDeliveryExperience($delivery_experience)
    {
        $this->container['delivery_experience'] = $delivery_experience;

        return $this;
    }

    /**
     * Gets declared_value.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CurrencyAmount
     */
    public function getDeclaredValue()
    {
        return $this->container['declared_value'];
    }

    /**
     * Sets declared_value.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CurrencyAmount $declared_value declared_value
     *
     * @return $this
     */
    public function setDeclaredValue($declared_value)
    {
        $this->container['declared_value'] = $declared_value;

        return $this;
    }

    /**
     * Gets carrier_will_pick_up.
     *
     * @return bool
     */
    public function getCarrierWillPickUp()
    {
        return $this->container['carrier_will_pick_up'];
    }

    /**
     * Sets carrier_will_pick_up.
     *
     * @param bool $carrier_will_pick_up When true, the carrier will pick up the package.  Note: Scheduled carrier pickup is available only using Dynamex (US), DPD (UK), and Royal Mail (UK).
     *
     * @return $this
     */
    public function setCarrierWillPickUp($carrier_will_pick_up)
    {
        $this->container['carrier_will_pick_up'] = $carrier_will_pick_up;

        return $this;
    }

    /**
     * Gets carrier_will_pick_up_option.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CarrierWillPickUpOption
     */
    public function getCarrierWillPickUpOption()
    {
        return $this->container['carrier_will_pick_up_option'];
    }

    /**
     * Sets carrier_will_pick_up_option.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CarrierWillPickUpOption $carrier_will_pick_up_option carrier_will_pick_up_option
     *
     * @return $this
     */
    public function setCarrierWillPickUpOption($carrier_will_pick_up_option)
    {
        $this->container['carrier_will_pick_up_option'] = $carrier_will_pick_up_option;

        return $this;
    }

    /**
     * Gets label_format.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\LabelFormat
     */
    public function getLabelFormat()
    {
        return $this->container['label_format'];
    }

    /**
     * Sets label_format.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\LabelFormat $label_format label_format
     *
     * @return $this
     */
    public function setLabelFormat($label_format)
    {
        $this->container['label_format'] = $label_format;

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
