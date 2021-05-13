<?php
/**
 * SellerReviewEnrollmentPaymentEvent.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Finances;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * SellerReviewEnrollmentPaymentEvent Class Doc Comment.
 *

 * @description A fee payment event for the Early Reviewer Program.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class SellerReviewEnrollmentPaymentEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'SellerReviewEnrollmentPaymentEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'posted_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\\DateTime',
'enrollment_id' => 'string',
'parent_asin' => 'string',
'fee_component' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponent',
'charge_component' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponent',
'total_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'posted_date' => null,
'enrollment_id' => null,
'parent_asin' => null,
'fee_component' => null,
'charge_component' => null,
'total_amount' => null,    ];

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
        'posted_date' => 'PostedDate',
'enrollment_id' => 'EnrollmentId',
'parent_asin' => 'ParentASIN',
'fee_component' => 'FeeComponent',
'charge_component' => 'ChargeComponent',
'total_amount' => 'TotalAmount',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'posted_date' => 'setPostedDate',
'enrollment_id' => 'setEnrollmentId',
'parent_asin' => 'setParentAsin',
'fee_component' => 'setFeeComponent',
'charge_component' => 'setChargeComponent',
'total_amount' => 'setTotalAmount',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'posted_date' => 'getPostedDate',
'enrollment_id' => 'getEnrollmentId',
'parent_asin' => 'getParentAsin',
'fee_component' => 'getFeeComponent',
'charge_component' => 'getChargeComponent',
'total_amount' => 'getTotalAmount',    ];

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
        $this->container['posted_date'] = isset($data['posted_date']) ? $data['posted_date'] : null;
        $this->container['enrollment_id'] = isset($data['enrollment_id']) ? $data['enrollment_id'] : null;
        $this->container['parent_asin'] = isset($data['parent_asin']) ? $data['parent_asin'] : null;
        $this->container['fee_component'] = isset($data['fee_component']) ? $data['fee_component'] : null;
        $this->container['charge_component'] = isset($data['charge_component']) ? $data['charge_component'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
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
     * Gets posted_date.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\DateTime
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\DateTime $posted_date posted_date
     *
     * @return $this
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets enrollment_id.
     *
     * @return string
     */
    public function getEnrollmentId()
    {
        return $this->container['enrollment_id'];
    }

    /**
     * Sets enrollment_id.
     *
     * @param string $enrollment_id an enrollment identifier
     *
     * @return $this
     */
    public function setEnrollmentId($enrollment_id)
    {
        $this->container['enrollment_id'] = $enrollment_id;

        return $this;
    }

    /**
     * Gets parent_asin.
     *
     * @return string
     */
    public function getParentAsin()
    {
        return $this->container['parent_asin'];
    }

    /**
     * Sets parent_asin.
     *
     * @param string $parent_asin the Amazon Standard Identification Number (ASIN) of the item that was enrolled in the Early Reviewer Program
     *
     * @return $this
     */
    public function setParentAsin($parent_asin)
    {
        $this->container['parent_asin'] = $parent_asin;

        return $this;
    }

    /**
     * Gets fee_component.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\FeeComponent
     */
    public function getFeeComponent()
    {
        return $this->container['fee_component'];
    }

    /**
     * Sets fee_component.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\FeeComponent $fee_component fee_component
     *
     * @return $this
     */
    public function setFeeComponent($fee_component)
    {
        $this->container['fee_component'] = $fee_component;

        return $this;
    }

    /**
     * Gets charge_component.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponent
     */
    public function getChargeComponent()
    {
        return $this->container['charge_component'];
    }

    /**
     * Sets charge_component.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponent $charge_component charge_component
     *
     * @return $this
     */
    public function setChargeComponent($charge_component)
    {
        $this->container['charge_component'] = $charge_component;

        return $this;
    }

    /**
     * Gets total_amount.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency $total_amount total_amount
     *
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

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
