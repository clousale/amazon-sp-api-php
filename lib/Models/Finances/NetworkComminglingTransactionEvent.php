<?php
/**
 * NetworkComminglingTransactionEvent.
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
 * NetworkComminglingTransactionEvent Class Doc Comment.
 *

 * @description A network commingling transaction event.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class NetworkComminglingTransactionEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'NetworkComminglingTransactionEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'transaction_type' => 'string',
'posted_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\\DateTime',
'net_co_transaction_id' => 'string',
'swap_reason' => 'string',
'asin' => 'string',
'marketplace_id' => 'string',
'tax_exclusive_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'tax_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'transaction_type' => null,
'posted_date' => null,
'net_co_transaction_id' => null,
'swap_reason' => null,
'asin' => null,
'marketplace_id' => null,
'tax_exclusive_amount' => null,
'tax_amount' => null,    ];

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
        'transaction_type' => 'TransactionType',
'posted_date' => 'PostedDate',
'net_co_transaction_id' => 'NetCoTransactionID',
'swap_reason' => 'SwapReason',
'asin' => 'ASIN',
'marketplace_id' => 'MarketplaceId',
'tax_exclusive_amount' => 'TaxExclusiveAmount',
'tax_amount' => 'TaxAmount',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'transaction_type' => 'setTransactionType',
'posted_date' => 'setPostedDate',
'net_co_transaction_id' => 'setNetCoTransactionId',
'swap_reason' => 'setSwapReason',
'asin' => 'setAsin',
'marketplace_id' => 'setMarketplaceId',
'tax_exclusive_amount' => 'setTaxExclusiveAmount',
'tax_amount' => 'setTaxAmount',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'transaction_type' => 'getTransactionType',
'posted_date' => 'getPostedDate',
'net_co_transaction_id' => 'getNetCoTransactionId',
'swap_reason' => 'getSwapReason',
'asin' => 'getAsin',
'marketplace_id' => 'getMarketplaceId',
'tax_exclusive_amount' => 'getTaxExclusiveAmount',
'tax_amount' => 'getTaxAmount',    ];

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
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['posted_date'] = isset($data['posted_date']) ? $data['posted_date'] : null;
        $this->container['net_co_transaction_id'] = isset($data['net_co_transaction_id']) ? $data['net_co_transaction_id'] : null;
        $this->container['swap_reason'] = isset($data['swap_reason']) ? $data['swap_reason'] : null;
        $this->container['asin'] = isset($data['asin']) ? $data['asin'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['tax_exclusive_amount'] = isset($data['tax_exclusive_amount']) ? $data['tax_exclusive_amount'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
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
     * Gets transaction_type.
     *
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type.
     *
     * @param string $transaction_type The type of network item swap.  Possible values:  * NetCo - A Fulfillment by Amazon inventory pooling transaction. Available only in the India marketplace.  * ComminglingVAT - A commingling VAT transaction. Available only in the UK, Spain, France, Germany, and Italy marketplaces.
     *
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
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
     * Gets net_co_transaction_id.
     *
     * @return string
     */
    public function getNetCoTransactionId()
    {
        return $this->container['net_co_transaction_id'];
    }

    /**
     * Sets net_co_transaction_id.
     *
     * @param string $net_co_transaction_id the identifier for the network item swap
     *
     * @return $this
     */
    public function setNetCoTransactionId($net_co_transaction_id)
    {
        $this->container['net_co_transaction_id'] = $net_co_transaction_id;

        return $this;
    }

    /**
     * Gets swap_reason.
     *
     * @return string
     */
    public function getSwapReason()
    {
        return $this->container['swap_reason'];
    }

    /**
     * Sets swap_reason.
     *
     * @param string $swap_reason the reason for the network item swap
     *
     * @return $this
     */
    public function setSwapReason($swap_reason)
    {
        $this->container['swap_reason'] = $swap_reason;

        return $this;
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
     * @param string $asin the Amazon Standard Identification Number (ASIN) of the swapped item
     *
     * @return $this
     */
    public function setAsin($asin)
    {
        $this->container['asin'] = $asin;

        return $this;
    }

    /**
     * Gets marketplace_id.
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id the marketplace in which the event took place
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets tax_exclusive_amount.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getTaxExclusiveAmount()
    {
        return $this->container['tax_exclusive_amount'];
    }

    /**
     * Sets tax_exclusive_amount.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency $tax_exclusive_amount tax_exclusive_amount
     *
     * @return $this
     */
    public function setTaxExclusiveAmount($tax_exclusive_amount)
    {
        $this->container['tax_exclusive_amount'] = $tax_exclusive_amount;

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
