<?php
/**
 * CouponPaymentEvent.
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
 * CouponPaymentEvent Class Doc Comment.
 *

 * @description An event related to coupon payments.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class CouponPaymentEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'CouponPaymentEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'posted_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\\DateTime',
'coupon_id' => 'string',
'seller_coupon_description' => 'string',
'clip_or_redemption_count' => 'int',
'payment_event_id' => 'string',
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
'coupon_id' => null,
'seller_coupon_description' => null,
'clip_or_redemption_count' => 'int64',
'payment_event_id' => null,
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
'coupon_id' => 'CouponId',
'seller_coupon_description' => 'SellerCouponDescription',
'clip_or_redemption_count' => 'ClipOrRedemptionCount',
'payment_event_id' => 'PaymentEventId',
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
'coupon_id' => 'setCouponId',
'seller_coupon_description' => 'setSellerCouponDescription',
'clip_or_redemption_count' => 'setClipOrRedemptionCount',
'payment_event_id' => 'setPaymentEventId',
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
'coupon_id' => 'getCouponId',
'seller_coupon_description' => 'getSellerCouponDescription',
'clip_or_redemption_count' => 'getClipOrRedemptionCount',
'payment_event_id' => 'getPaymentEventId',
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
        $this->container['coupon_id'] = isset($data['coupon_id']) ? $data['coupon_id'] : null;
        $this->container['seller_coupon_description'] = isset($data['seller_coupon_description']) ? $data['seller_coupon_description'] : null;
        $this->container['clip_or_redemption_count'] = isset($data['clip_or_redemption_count']) ? $data['clip_or_redemption_count'] : null;
        $this->container['payment_event_id'] = isset($data['payment_event_id']) ? $data['payment_event_id'] : null;
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
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\DateTime
     */
    public function getPostedDate()
    {
        return $this->container['posted_date'];
    }

    /**
     * Sets posted_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\DateTime $posted_date posted_date
     *
     * @return $this
     */
    public function setPostedDate($posted_date)
    {
        $this->container['posted_date'] = $posted_date;

        return $this;
    }

    /**
     * Gets coupon_id.
     *
     * @return string
     */
    public function getCouponId()
    {
        return $this->container['coupon_id'];
    }

    /**
     * Sets coupon_id.
     *
     * @param string $coupon_id a coupon identifier
     *
     * @return $this
     */
    public function setCouponId($coupon_id)
    {
        $this->container['coupon_id'] = $coupon_id;

        return $this;
    }

    /**
     * Gets seller_coupon_description.
     *
     * @return string
     */
    public function getSellerCouponDescription()
    {
        return $this->container['seller_coupon_description'];
    }

    /**
     * Sets seller_coupon_description.
     *
     * @param string $seller_coupon_description the description provided by the seller when they created the coupon
     *
     * @return $this
     */
    public function setSellerCouponDescription($seller_coupon_description)
    {
        $this->container['seller_coupon_description'] = $seller_coupon_description;

        return $this;
    }

    /**
     * Gets clip_or_redemption_count.
     *
     * @return int
     */
    public function getClipOrRedemptionCount()
    {
        return $this->container['clip_or_redemption_count'];
    }

    /**
     * Sets clip_or_redemption_count.
     *
     * @param int $clip_or_redemption_count the number of coupon clips or redemptions
     *
     * @return $this
     */
    public function setClipOrRedemptionCount($clip_or_redemption_count)
    {
        $this->container['clip_or_redemption_count'] = $clip_or_redemption_count;

        return $this;
    }

    /**
     * Gets payment_event_id.
     *
     * @return string
     */
    public function getPaymentEventId()
    {
        return $this->container['payment_event_id'];
    }

    /**
     * Sets payment_event_id.
     *
     * @param string $payment_event_id a payment event identifier
     *
     * @return $this
     */
    public function setPaymentEventId($payment_event_id)
    {
        $this->container['payment_event_id'] = $payment_event_id;

        return $this;
    }

    /**
     * Gets fee_component.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponent
     */
    public function getFeeComponent()
    {
        return $this->container['fee_component'];
    }

    /**
     * Sets fee_component.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponent $fee_component fee_component
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
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponent
     */
    public function getChargeComponent()
    {
        return $this->container['charge_component'];
    }

    /**
     * Sets charge_component.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponent $charge_component charge_component
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
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency $total_amount total_amount
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
