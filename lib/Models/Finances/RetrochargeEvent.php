<?php
/**
 * RetrochargeEvent.
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
 * RetrochargeEvent Class Doc Comment.
 *

 * @description A retrocharge or retrocharge reversal.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class RetrochargeEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'RetrochargeEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'retrocharge_event_type' => 'string',
'amazon_order_id' => 'string',
'posted_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\\DateTime',
'base_tax' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'shipping_tax' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'marketplace_name' => 'string',
'retrocharge_tax_withheld_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\TaxWithheldComponentList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'retrocharge_event_type' => null,
'amazon_order_id' => null,
'posted_date' => null,
'base_tax' => null,
'shipping_tax' => null,
'marketplace_name' => null,
'retrocharge_tax_withheld_list' => null,    ];

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
        'retrocharge_event_type' => 'RetrochargeEventType',
'amazon_order_id' => 'AmazonOrderId',
'posted_date' => 'PostedDate',
'base_tax' => 'BaseTax',
'shipping_tax' => 'ShippingTax',
'marketplace_name' => 'MarketplaceName',
'retrocharge_tax_withheld_list' => 'RetrochargeTaxWithheldList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'retrocharge_event_type' => 'setRetrochargeEventType',
'amazon_order_id' => 'setAmazonOrderId',
'posted_date' => 'setPostedDate',
'base_tax' => 'setBaseTax',
'shipping_tax' => 'setShippingTax',
'marketplace_name' => 'setMarketplaceName',
'retrocharge_tax_withheld_list' => 'setRetrochargeTaxWithheldList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'retrocharge_event_type' => 'getRetrochargeEventType',
'amazon_order_id' => 'getAmazonOrderId',
'posted_date' => 'getPostedDate',
'base_tax' => 'getBaseTax',
'shipping_tax' => 'getShippingTax',
'marketplace_name' => 'getMarketplaceName',
'retrocharge_tax_withheld_list' => 'getRetrochargeTaxWithheldList',    ];

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
        $this->container['retrocharge_event_type'] = isset($data['retrocharge_event_type']) ? $data['retrocharge_event_type'] : null;
        $this->container['amazon_order_id'] = isset($data['amazon_order_id']) ? $data['amazon_order_id'] : null;
        $this->container['posted_date'] = isset($data['posted_date']) ? $data['posted_date'] : null;
        $this->container['base_tax'] = isset($data['base_tax']) ? $data['base_tax'] : null;
        $this->container['shipping_tax'] = isset($data['shipping_tax']) ? $data['shipping_tax'] : null;
        $this->container['marketplace_name'] = isset($data['marketplace_name']) ? $data['marketplace_name'] : null;
        $this->container['retrocharge_tax_withheld_list'] = isset($data['retrocharge_tax_withheld_list']) ? $data['retrocharge_tax_withheld_list'] : null;
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
     * Gets retrocharge_event_type.
     *
     * @return string
     */
    public function getRetrochargeEventType()
    {
        return $this->container['retrocharge_event_type'];
    }

    /**
     * Sets retrocharge_event_type.
     *
     * @param string $retrocharge_event_type The type of event.  Possible values:  * Retrocharge  * RetrochargeReversal
     *
     * @return $this
     */
    public function setRetrochargeEventType($retrocharge_event_type)
    {
        $this->container['retrocharge_event_type'] = $retrocharge_event_type;

        return $this;
    }

    /**
     * Gets amazon_order_id.
     *
     * @return string
     */
    public function getAmazonOrderId()
    {
        return $this->container['amazon_order_id'];
    }

    /**
     * Sets amazon_order_id.
     *
     * @param string $amazon_order_id an Amazon-defined identifier for an order
     *
     * @return $this
     */
    public function setAmazonOrderId($amazon_order_id)
    {
        $this->container['amazon_order_id'] = $amazon_order_id;

        return $this;
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
     * Gets base_tax.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getBaseTax()
    {
        return $this->container['base_tax'];
    }

    /**
     * Sets base_tax.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency $base_tax base_tax
     *
     * @return $this
     */
    public function setBaseTax($base_tax)
    {
        $this->container['base_tax'] = $base_tax;

        return $this;
    }

    /**
     * Gets shipping_tax.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getShippingTax()
    {
        return $this->container['shipping_tax'];
    }

    /**
     * Sets shipping_tax.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency $shipping_tax shipping_tax
     *
     * @return $this
     */
    public function setShippingTax($shipping_tax)
    {
        $this->container['shipping_tax'] = $shipping_tax;

        return $this;
    }

    /**
     * Gets marketplace_name.
     *
     * @return string
     */
    public function getMarketplaceName()
    {
        return $this->container['marketplace_name'];
    }

    /**
     * Sets marketplace_name.
     *
     * @param string $marketplace_name the name of the marketplace where the retrocharge event occurred
     *
     * @return $this
     */
    public function setMarketplaceName($marketplace_name)
    {
        $this->container['marketplace_name'] = $marketplace_name;

        return $this;
    }

    /**
     * Gets retrocharge_tax_withheld_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\TaxWithheldComponentList
     */
    public function getRetrochargeTaxWithheldList()
    {
        return $this->container['retrocharge_tax_withheld_list'];
    }

    /**
     * Sets retrocharge_tax_withheld_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\TaxWithheldComponentList $retrocharge_tax_withheld_list retrocharge_tax_withheld_list
     *
     * @return $this
     */
    public function setRetrochargeTaxWithheldList($retrocharge_tax_withheld_list)
    {
        $this->container['retrocharge_tax_withheld_list'] = $retrocharge_tax_withheld_list;

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
