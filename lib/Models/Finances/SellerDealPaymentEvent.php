<?php
/**
 * SellerDealPaymentEvent.
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
 * SellerDealPaymentEvent Class Doc Comment.
 *

 * @description An event linked to the payment of a fee related to the specified deal.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class SellerDealPaymentEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'SellerDealPaymentEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'posted_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\\DateTime',
'deal_id' => 'string',
'deal_description' => 'string',
'event_type' => 'string',
'fee_type' => 'string',
'fee_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'tax_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'total_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'posted_date' => null,
'deal_id' => null,
'deal_description' => null,
'event_type' => null,
'fee_type' => null,
'fee_amount' => null,
'tax_amount' => null,
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
        'posted_date' => 'postedDate',
'deal_id' => 'dealId',
'deal_description' => 'dealDescription',
'event_type' => 'eventType',
'fee_type' => 'feeType',
'fee_amount' => 'feeAmount',
'tax_amount' => 'taxAmount',
'total_amount' => 'totalAmount',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'posted_date' => 'setPostedDate',
'deal_id' => 'setDealId',
'deal_description' => 'setDealDescription',
'event_type' => 'setEventType',
'fee_type' => 'setFeeType',
'fee_amount' => 'setFeeAmount',
'tax_amount' => 'setTaxAmount',
'total_amount' => 'setTotalAmount',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'posted_date' => 'getPostedDate',
'deal_id' => 'getDealId',
'deal_description' => 'getDealDescription',
'event_type' => 'getEventType',
'fee_type' => 'getFeeType',
'fee_amount' => 'getFeeAmount',
'tax_amount' => 'getTaxAmount',
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
        $this->container['deal_id'] = isset($data['deal_id']) ? $data['deal_id'] : null;
        $this->container['deal_description'] = isset($data['deal_description']) ? $data['deal_description'] : null;
        $this->container['event_type'] = isset($data['event_type']) ? $data['event_type'] : null;
        $this->container['fee_type'] = isset($data['fee_type']) ? $data['fee_type'] : null;
        $this->container['fee_amount'] = isset($data['fee_amount']) ? $data['fee_amount'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
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
     * Gets deal_id.
     *
     * @return string
     */
    public function getDealId()
    {
        return $this->container['deal_id'];
    }

    /**
     * Sets deal_id.
     *
     * @param string $deal_id the unique identifier of the deal
     *
     * @return $this
     */
    public function setDealId($deal_id)
    {
        $this->container['deal_id'] = $deal_id;

        return $this;
    }

    /**
     * Gets deal_description.
     *
     * @return string
     */
    public function getDealDescription()
    {
        return $this->container['deal_description'];
    }

    /**
     * Sets deal_description.
     *
     * @param string $deal_description the internal description of the deal
     *
     * @return $this
     */
    public function setDealDescription($deal_description)
    {
        $this->container['deal_description'] = $deal_description;

        return $this;
    }

    /**
     * Gets event_type.
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type.
     *
     * @param string $event_type the type of event: SellerDealComplete
     *
     * @return $this
     */
    public function setEventType($event_type)
    {
        $this->container['event_type'] = $event_type;

        return $this;
    }

    /**
     * Gets fee_type.
     *
     * @return string
     */
    public function getFeeType()
    {
        return $this->container['fee_type'];
    }

    /**
     * Sets fee_type.
     *
     * @param string $fee_type the type of fee: RunLightningDealFee
     *
     * @return $this
     */
    public function setFeeType($fee_type)
    {
        $this->container['fee_type'] = $fee_type;

        return $this;
    }

    /**
     * Gets fee_amount.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getFeeAmount()
    {
        return $this->container['fee_amount'];
    }

    /**
     * Sets fee_amount.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency $fee_amount fee_amount
     *
     * @return $this
     */
    public function setFeeAmount($fee_amount)
    {
        $this->container['fee_amount'] = $fee_amount;

        return $this;
    }

    /**
     * Gets tax_amount.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getTaxAmount()
    {
        return $this->container['tax_amount'];
    }

    /**
     * Sets tax_amount.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency $tax_amount tax_amount
     *
     * @return $this
     */
    public function setTaxAmount($tax_amount)
    {
        $this->container['tax_amount'] = $tax_amount;

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
