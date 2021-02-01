<?php
/**
 * ProductAdsPaymentEvent.
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
 * ProductAdsPaymentEvent Class Doc Comment.
 *

 * @description A Sponsored Products payment event.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ProductAdsPaymentEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ProductAdsPaymentEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'posted_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\\DateTime',
'transaction_type' => 'string',
'invoice_id' => 'string',
'base_value' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'tax_value' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'transaction_value' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'posted_date' => null,
'transaction_type' => null,
'invoice_id' => null,
'base_value' => null,
'tax_value' => null,
'transaction_value' => null,    ];

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
'transaction_type' => 'transactionType',
'invoice_id' => 'invoiceId',
'base_value' => 'baseValue',
'tax_value' => 'taxValue',
'transaction_value' => 'transactionValue',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'posted_date' => 'setPostedDate',
'transaction_type' => 'setTransactionType',
'invoice_id' => 'setInvoiceId',
'base_value' => 'setBaseValue',
'tax_value' => 'setTaxValue',
'transaction_value' => 'setTransactionValue',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'posted_date' => 'getPostedDate',
'transaction_type' => 'getTransactionType',
'invoice_id' => 'getInvoiceId',
'base_value' => 'getBaseValue',
'tax_value' => 'getTaxValue',
'transaction_value' => 'getTransactionValue',    ];

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
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['invoice_id'] = isset($data['invoice_id']) ? $data['invoice_id'] : null;
        $this->container['base_value'] = isset($data['base_value']) ? $data['base_value'] : null;
        $this->container['tax_value'] = isset($data['tax_value']) ? $data['tax_value'] : null;
        $this->container['transaction_value'] = isset($data['transaction_value']) ? $data['transaction_value'] : null;
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
     * @param string $transaction_type Indicates if the transaction is for a charge or a refund.  Possible values:  * charge - Charge  * refund - Refund
     *
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets invoice_id.
     *
     * @return string
     */
    public function getInvoiceId()
    {
        return $this->container['invoice_id'];
    }

    /**
     * Sets invoice_id.
     *
     * @param string $invoice_id identifier for the invoice that the transaction appears in
     *
     * @return $this
     */
    public function setInvoiceId($invoice_id)
    {
        $this->container['invoice_id'] = $invoice_id;

        return $this;
    }

    /**
     * Gets base_value.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getBaseValue()
    {
        return $this->container['base_value'];
    }

    /**
     * Sets base_value.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency $base_value base_value
     *
     * @return $this
     */
    public function setBaseValue($base_value)
    {
        $this->container['base_value'] = $base_value;

        return $this;
    }

    /**
     * Gets tax_value.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getTaxValue()
    {
        return $this->container['tax_value'];
    }

    /**
     * Sets tax_value.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency $tax_value tax_value
     *
     * @return $this
     */
    public function setTaxValue($tax_value)
    {
        $this->container['tax_value'] = $tax_value;

        return $this;
    }

    /**
     * Gets transaction_value.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getTransactionValue()
    {
        return $this->container['transaction_value'];
    }

    /**
     * Sets transaction_value.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency $transaction_value transaction_value
     *
     * @return $this
     */
    public function setTransactionValue($transaction_value)
    {
        $this->container['transaction_value'] = $transaction_value;

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
