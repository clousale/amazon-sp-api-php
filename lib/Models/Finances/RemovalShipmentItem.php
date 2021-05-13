<?php
/**
 * RemovalShipmentItem.
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
 * RemovalShipmentItem Class Doc Comment.
 *

 * @description Item-level information for a removal shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class RemovalShipmentItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'RemovalShipmentItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'removal_shipment_item_id' => 'string',
'tax_collection_model' => 'string',
'fulfillment_network_sku' => 'string',
'quantity' => 'int',
'revenue' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'fee_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'tax_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'tax_withheld' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'removal_shipment_item_id' => null,
'tax_collection_model' => null,
'fulfillment_network_sku' => null,
'quantity' => 'int32',
'revenue' => null,
'fee_amount' => null,
'tax_amount' => null,
'tax_withheld' => null,    ];

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
        'removal_shipment_item_id' => 'RemovalShipmentItemId',
'tax_collection_model' => 'TaxCollectionModel',
'fulfillment_network_sku' => 'FulfillmentNetworkSKU',
'quantity' => 'Quantity',
'revenue' => 'Revenue',
'fee_amount' => 'FeeAmount',
'tax_amount' => 'TaxAmount',
'tax_withheld' => 'TaxWithheld',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'removal_shipment_item_id' => 'setRemovalShipmentItemId',
'tax_collection_model' => 'setTaxCollectionModel',
'fulfillment_network_sku' => 'setFulfillmentNetworkSku',
'quantity' => 'setQuantity',
'revenue' => 'setRevenue',
'fee_amount' => 'setFeeAmount',
'tax_amount' => 'setTaxAmount',
'tax_withheld' => 'setTaxWithheld',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'removal_shipment_item_id' => 'getRemovalShipmentItemId',
'tax_collection_model' => 'getTaxCollectionModel',
'fulfillment_network_sku' => 'getFulfillmentNetworkSku',
'quantity' => 'getQuantity',
'revenue' => 'getRevenue',
'fee_amount' => 'getFeeAmount',
'tax_amount' => 'getTaxAmount',
'tax_withheld' => 'getTaxWithheld',    ];

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
        $this->container['removal_shipment_item_id'] = isset($data['removal_shipment_item_id']) ? $data['removal_shipment_item_id'] : null;
        $this->container['tax_collection_model'] = isset($data['tax_collection_model']) ? $data['tax_collection_model'] : null;
        $this->container['fulfillment_network_sku'] = isset($data['fulfillment_network_sku']) ? $data['fulfillment_network_sku'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['revenue'] = isset($data['revenue']) ? $data['revenue'] : null;
        $this->container['fee_amount'] = isset($data['fee_amount']) ? $data['fee_amount'] : null;
        $this->container['tax_amount'] = isset($data['tax_amount']) ? $data['tax_amount'] : null;
        $this->container['tax_withheld'] = isset($data['tax_withheld']) ? $data['tax_withheld'] : null;
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
     * Gets removal_shipment_item_id.
     *
     * @return string
     */
    public function getRemovalShipmentItemId()
    {
        return $this->container['removal_shipment_item_id'];
    }

    /**
     * Sets removal_shipment_item_id.
     *
     * @param string $removal_shipment_item_id an identifier for an item in a removal shipment
     *
     * @return $this
     */
    public function setRemovalShipmentItemId($removal_shipment_item_id)
    {
        $this->container['removal_shipment_item_id'] = $removal_shipment_item_id;

        return $this;
    }

    /**
     * Gets tax_collection_model.
     *
     * @return string
     */
    public function getTaxCollectionModel()
    {
        return $this->container['tax_collection_model'];
    }

    /**
     * Sets tax_collection_model.
     *
     * @param string $tax_collection_model The tax collection model applied to the item.  Possible values:  * MarketplaceFacilitator - Tax is withheld and remitted to the taxing authority by Amazon on behalf of the seller.  * Standard - Tax is paid to the seller and not remitted to the taxing authority by Amazon.
     *
     * @return $this
     */
    public function setTaxCollectionModel($tax_collection_model)
    {
        $this->container['tax_collection_model'] = $tax_collection_model;

        return $this;
    }

    /**
     * Gets fulfillment_network_sku.
     *
     * @return string
     */
    public function getFulfillmentNetworkSku()
    {
        return $this->container['fulfillment_network_sku'];
    }

    /**
     * Sets fulfillment_network_sku.
     *
     * @param string $fulfillment_network_sku the Amazon fulfillment network SKU for the item
     *
     * @return $this
     */
    public function setFulfillmentNetworkSku($fulfillment_network_sku)
    {
        $this->container['fulfillment_network_sku'] = $fulfillment_network_sku;

        return $this;
    }

    /**
     * Gets quantity.
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param int $quantity the quantity of the item
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets revenue.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getRevenue()
    {
        return $this->container['revenue'];
    }

    /**
     * Sets revenue.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency $revenue revenue
     *
     * @return $this
     */
    public function setRevenue($revenue)
    {
        $this->container['revenue'] = $revenue;

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
     * Gets tax_withheld.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getTaxWithheld()
    {
        return $this->container['tax_withheld'];
    }

    /**
     * Sets tax_withheld.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency $tax_withheld tax_withheld
     *
     * @return $this
     */
    public function setTaxWithheld($tax_withheld)
    {
        $this->container['tax_withheld'] = $tax_withheld;

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
