<?php
/**
 * FeePreview.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for FBA Small And Light.
 *
 * The Selling Partner API for FBA Small and Light lets you help sellers manage their listings in the Small and Light program. The program reduces the cost of fulfilling orders for small and lightweight FBA inventory. You can enroll or remove items from the program and check item eligibility and enrollment status. You can also preview the estimated program fees charged to a seller for items sold while enrolled in the program.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FbaSmallAndLight;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * FeePreview Class Doc Comment.
 *

 * @description The fee estimate for a specific item.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FeePreview implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FeePreview';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'asin' => 'string',
'price' => '\ClouSale\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\MoneyType',
'fee_breakdown' => '\ClouSale\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\FeeLineItem[]',
'total_fees' => '\ClouSale\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\MoneyType',
'errors' => '\ClouSale\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\ErrorList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'asin' => null,
'price' => null,
'fee_breakdown' => null,
'total_fees' => null,
'errors' => null,    ];

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
        'asin' => 'asin',
'price' => 'price',
'fee_breakdown' => 'feeBreakdown',
'total_fees' => 'totalFees',
'errors' => 'errors',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'asin' => 'setAsin',
'price' => 'setPrice',
'fee_breakdown' => 'setFeeBreakdown',
'total_fees' => 'setTotalFees',
'errors' => 'setErrors',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'asin' => 'getAsin',
'price' => 'getPrice',
'fee_breakdown' => 'getFeeBreakdown',
'total_fees' => 'getTotalFees',
'errors' => 'getErrors',    ];

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
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['fee_breakdown'] = isset($data['fee_breakdown']) ? $data['fee_breakdown'] : null;
        $this->container['total_fees'] = isset($data['total_fees']) ? $data['total_fees'] : null;
        $this->container['errors'] = isset($data['errors']) ? $data['errors'] : null;
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
     * Gets asin.
     *
     * @return string
     */
    public function getAsin()
    {
        return $this->container['asin'];
    }

    /**
     * Sets asin.
     *
     * @param string $asin the Amazon Standard Identification Number (ASIN) value used to identify the item
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets price.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\MoneyType
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\MoneyType $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets fee_breakdown.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\FeeLineItem[]
     */
    public function getFeeBreakdown()
    {
        return $this->container['fee_breakdown'];
    }

    /**
     * Sets fee_breakdown.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\FeeLineItem[] $fee_breakdown a list of the Small and Light fees for the item
     *
     * @return $this
     */
    public function setFeeBreakdown($fee_breakdown)
    {
        $this->container['fee_breakdown'] = $fee_breakdown;

        return $this;
    }

    /**
     * Gets total_fees.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\MoneyType
     */
    public function getTotalFees()
    {
        return $this->container['total_fees'];
    }

    /**
     * Sets total_fees.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\MoneyType $total_fees total_fees
     *
     * @return $this
     */
    public function setTotalFees($total_fees)
    {
        $this->container['total_fees'] = $total_fees;

        return $this;
    }

    /**
     * Gets errors.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\ErrorList
     */
    public function getErrors()
    {
        return $this->container['errors'];
    }

    /**
     * Sets errors.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FbaSmallAndLight\ErrorList $errors errors
     *
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->container['errors'] = $errors;

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
