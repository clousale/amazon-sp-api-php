<?php
/**
 * AdjustmentEvent.
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
 * AdjustmentEvent Class Doc Comment.
 *

 * @description An adjustment to the seller&#x27;s account.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class AdjustmentEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'AdjustmentEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'adjustment_type' => 'string',
'posted_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\\DateTime',
'adjustment_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'adjustment_item_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\AdjustmentItemList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'adjustment_type' => null,
'posted_date' => null,
'adjustment_amount' => null,
'adjustment_item_list' => null,    ];

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
        'adjustment_type' => 'AdjustmentType',
'posted_date' => 'PostedDate',
'adjustment_amount' => 'AdjustmentAmount',
'adjustment_item_list' => 'AdjustmentItemList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'adjustment_type' => 'setAdjustmentType',
'posted_date' => 'setPostedDate',
'adjustment_amount' => 'setAdjustmentAmount',
'adjustment_item_list' => 'setAdjustmentItemList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'adjustment_type' => 'getAdjustmentType',
'posted_date' => 'getPostedDate',
'adjustment_amount' => 'getAdjustmentAmount',
'adjustment_item_list' => 'getAdjustmentItemList',    ];

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
        $this->container['adjustment_type'] = isset($data['adjustment_type']) ? $data['adjustment_type'] : null;
        $this->container['posted_date'] = isset($data['posted_date']) ? $data['posted_date'] : null;
        $this->container['adjustment_amount'] = isset($data['adjustment_amount']) ? $data['adjustment_amount'] : null;
        $this->container['adjustment_item_list'] = isset($data['adjustment_item_list']) ? $data['adjustment_item_list'] : null;
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
     * Gets adjustment_type.
     *
     * @return string
     */
    public function getAdjustmentType()
    {
        return $this->container['adjustment_type'];
    }

    /**
     * Sets adjustment_type.
     *
     * @param string $adjustment_type The type of adjustment.  Possible values:  * FBAInventoryReimbursement - An FBA inventory reimbursement to a seller's account. This occurs if a seller's inventory is damaged.  * ReserveEvent - A reserve event that is generated at the time of a settlement period closing. This occurs when some money from a seller's account is held back.  * PostageBilling - The amount paid by a seller for shipping labels.  * PostageRefund - The reimbursement of shipping labels purchased for orders that were canceled or refunded.  * LostOrDamagedReimbursement - An Amazon Easy Ship reimbursement to a seller's account for a package that we lost or damaged.  * CanceledButPickedUpReimbursement - An Amazon Easy Ship reimbursement to a seller's account. This occurs when a package is picked up and the order is subsequently canceled. This value is used only in the India marketplace.  * ReimbursementClawback - An Amazon Easy Ship reimbursement clawback from a seller's account. This occurs when a prior reimbursement is reversed. This value is used only in the India marketplace.  * SellerRewards - An award credited to a seller's account for their participation in an offer in the Seller Rewards program. Applies only to the India marketplace.
     *
     * @return $this
     */
    public function setAdjustmentType($adjustment_type)
    {
        $this->container['adjustment_type'] = $adjustment_type;

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
     * Gets adjustment_amount.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getAdjustmentAmount()
    {
        return $this->container['adjustment_amount'];
    }

    /**
     * Sets adjustment_amount.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency $adjustment_amount adjustment_amount
     *
     * @return $this
     */
    public function setAdjustmentAmount($adjustment_amount)
    {
        $this->container['adjustment_amount'] = $adjustment_amount;

        return $this;
    }

    /**
     * Gets adjustment_item_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\AdjustmentItemList
     */
    public function getAdjustmentItemList()
    {
        return $this->container['adjustment_item_list'];
    }

    /**
     * Sets adjustment_item_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\AdjustmentItemList $adjustment_item_list adjustment_item_list
     *
     * @return $this
     */
    public function setAdjustmentItemList($adjustment_item_list)
    {
        $this->container['adjustment_item_list'] = $adjustment_item_list;

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
