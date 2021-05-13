<?php
/**
 * PayWithAmazonEvent.
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
 * PayWithAmazonEvent Class Doc Comment.
 *

 * @description An event related to the seller&#x27;s Pay with Amazon account.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PayWithAmazonEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PayWithAmazonEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'seller_order_id' => 'string',
'transaction_posted_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\\DateTime',
'business_object_type' => 'string',
'sales_channel' => 'string',
'charge' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponent',
'fee_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList',
'payment_amount_type' => 'string',
'amount_description' => 'string',
'fulfillment_channel' => 'string',
'store_name' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'seller_order_id' => null,
'transaction_posted_date' => null,
'business_object_type' => null,
'sales_channel' => null,
'charge' => null,
'fee_list' => null,
'payment_amount_type' => null,
'amount_description' => null,
'fulfillment_channel' => null,
'store_name' => null,    ];

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
        'seller_order_id' => 'SellerOrderId',
'transaction_posted_date' => 'TransactionPostedDate',
'business_object_type' => 'BusinessObjectType',
'sales_channel' => 'SalesChannel',
'charge' => 'Charge',
'fee_list' => 'FeeList',
'payment_amount_type' => 'PaymentAmountType',
'amount_description' => 'AmountDescription',
'fulfillment_channel' => 'FulfillmentChannel',
'store_name' => 'StoreName',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_order_id' => 'setSellerOrderId',
'transaction_posted_date' => 'setTransactionPostedDate',
'business_object_type' => 'setBusinessObjectType',
'sales_channel' => 'setSalesChannel',
'charge' => 'setCharge',
'fee_list' => 'setFeeList',
'payment_amount_type' => 'setPaymentAmountType',
'amount_description' => 'setAmountDescription',
'fulfillment_channel' => 'setFulfillmentChannel',
'store_name' => 'setStoreName',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_order_id' => 'getSellerOrderId',
'transaction_posted_date' => 'getTransactionPostedDate',
'business_object_type' => 'getBusinessObjectType',
'sales_channel' => 'getSalesChannel',
'charge' => 'getCharge',
'fee_list' => 'getFeeList',
'payment_amount_type' => 'getPaymentAmountType',
'amount_description' => 'getAmountDescription',
'fulfillment_channel' => 'getFulfillmentChannel',
'store_name' => 'getStoreName',    ];

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
        $this->container['seller_order_id'] = isset($data['seller_order_id']) ? $data['seller_order_id'] : null;
        $this->container['transaction_posted_date'] = isset($data['transaction_posted_date']) ? $data['transaction_posted_date'] : null;
        $this->container['business_object_type'] = isset($data['business_object_type']) ? $data['business_object_type'] : null;
        $this->container['sales_channel'] = isset($data['sales_channel']) ? $data['sales_channel'] : null;
        $this->container['charge'] = isset($data['charge']) ? $data['charge'] : null;
        $this->container['fee_list'] = isset($data['fee_list']) ? $data['fee_list'] : null;
        $this->container['payment_amount_type'] = isset($data['payment_amount_type']) ? $data['payment_amount_type'] : null;
        $this->container['amount_description'] = isset($data['amount_description']) ? $data['amount_description'] : null;
        $this->container['fulfillment_channel'] = isset($data['fulfillment_channel']) ? $data['fulfillment_channel'] : null;
        $this->container['store_name'] = isset($data['store_name']) ? $data['store_name'] : null;
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
     * Gets seller_order_id.
     *
     * @return string
     */
    public function getSellerOrderId()
    {
        return $this->container['seller_order_id'];
    }

    /**
     * Sets seller_order_id.
     *
     * @param string $seller_order_id an order identifier that is specified by the seller
     *
     * @return $this
     */
    public function setSellerOrderId($seller_order_id)
    {
        $this->container['seller_order_id'] = $seller_order_id;

        return $this;
    }

    /**
     * Gets transaction_posted_date.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\DateTime
     */
    public function getTransactionPostedDate()
    {
        return $this->container['transaction_posted_date'];
    }

    /**
     * Sets transaction_posted_date.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\DateTime $transaction_posted_date transaction_posted_date
     *
     * @return $this
     */
    public function setTransactionPostedDate($transaction_posted_date)
    {
        $this->container['transaction_posted_date'] = $transaction_posted_date;

        return $this;
    }

    /**
     * Gets business_object_type.
     *
     * @return string
     */
    public function getBusinessObjectType()
    {
        return $this->container['business_object_type'];
    }

    /**
     * Sets business_object_type.
     *
     * @param string $business_object_type the type of business object
     *
     * @return $this
     */
    public function setBusinessObjectType($business_object_type)
    {
        $this->container['business_object_type'] = $business_object_type;

        return $this;
    }

    /**
     * Gets sales_channel.
     *
     * @return string
     */
    public function getSalesChannel()
    {
        return $this->container['sales_channel'];
    }

    /**
     * Sets sales_channel.
     *
     * @param string $sales_channel the sales channel for the transaction
     *
     * @return $this
     */
    public function setSalesChannel($sales_channel)
    {
        $this->container['sales_channel'] = $sales_channel;

        return $this;
    }

    /**
     * Gets charge.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponent
     */
    public function getCharge()
    {
        return $this->container['charge'];
    }

    /**
     * Sets charge.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\ChargeComponent $charge charge
     *
     * @return $this
     */
    public function setCharge($charge)
    {
        $this->container['charge'] = $charge;

        return $this;
    }

    /**
     * Gets fee_list.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList
     */
    public function getFeeList()
    {
        return $this->container['fee_list'];
    }

    /**
     * Sets fee_list.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\FeeComponentList $fee_list fee_list
     *
     * @return $this
     */
    public function setFeeList($fee_list)
    {
        $this->container['fee_list'] = $fee_list;

        return $this;
    }

    /**
     * Gets payment_amount_type.
     *
     * @return string
     */
    public function getPaymentAmountType()
    {
        return $this->container['payment_amount_type'];
    }

    /**
     * Sets payment_amount_type.
     *
     * @param string $payment_amount_type The type of payment.  Possible values:  * Sales
     *
     * @return $this
     */
    public function setPaymentAmountType($payment_amount_type)
    {
        $this->container['payment_amount_type'] = $payment_amount_type;

        return $this;
    }

    /**
     * Gets amount_description.
     *
     * @return string
     */
    public function getAmountDescription()
    {
        return $this->container['amount_description'];
    }

    /**
     * Sets amount_description.
     *
     * @param string $amount_description a short description of this payment event
     *
     * @return $this
     */
    public function setAmountDescription($amount_description)
    {
        $this->container['amount_description'] = $amount_description;

        return $this;
    }

    /**
     * Gets fulfillment_channel.
     *
     * @return string
     */
    public function getFulfillmentChannel()
    {
        return $this->container['fulfillment_channel'];
    }

    /**
     * Sets fulfillment_channel.
     *
     * @param string $fulfillment_channel The fulfillment channel.  Possible values:  * AFN - Amazon Fulfillment Network (Fulfillment by Amazon)  * MFN - Merchant Fulfillment Network (self-fulfilled)
     *
     * @return $this
     */
    public function setFulfillmentChannel($fulfillment_channel)
    {
        $this->container['fulfillment_channel'] = $fulfillment_channel;

        return $this;
    }

    /**
     * Gets store_name.
     *
     * @return string
     */
    public function getStoreName()
    {
        return $this->container['store_name'];
    }

    /**
     * Sets store_name.
     *
     * @param string $store_name the store name where the event occurred
     *
     * @return $this
     */
    public function setStoreName($store_name)
    {
        $this->container['store_name'] = $store_name;

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
