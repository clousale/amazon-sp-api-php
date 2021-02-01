<?php
/**
 * SAFETReimbursementEvent.
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
 * SAFETReimbursementEvent Class Doc Comment.
 *

 * @description A SAFE-T claim reimbursement on the seller&#x27;s account.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class SAFETReimbursementEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'SAFETReimbursementEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'posted_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\\DateTime',
'safet_claim_id' => 'string',
'reimbursed_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'reason_code' => 'string',
'safet_reimbursement_item_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\SAFETReimbursementItemList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'posted_date' => null,
'safet_claim_id' => null,
'reimbursed_amount' => null,
'reason_code' => null,
'safet_reimbursement_item_list' => null,    ];

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
'safet_claim_id' => 'SAFETClaimId',
'reimbursed_amount' => 'ReimbursedAmount',
'reason_code' => 'ReasonCode',
'safet_reimbursement_item_list' => 'SAFETReimbursementItemList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'posted_date' => 'setPostedDate',
'safet_claim_id' => 'setSafetClaimId',
'reimbursed_amount' => 'setReimbursedAmount',
'reason_code' => 'setReasonCode',
'safet_reimbursement_item_list' => 'setSafetReimbursementItemList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'posted_date' => 'getPostedDate',
'safet_claim_id' => 'getSafetClaimId',
'reimbursed_amount' => 'getReimbursedAmount',
'reason_code' => 'getReasonCode',
'safet_reimbursement_item_list' => 'getSafetReimbursementItemList',    ];

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
        $this->container['safet_claim_id'] = isset($data['safet_claim_id']) ? $data['safet_claim_id'] : null;
        $this->container['reimbursed_amount'] = isset($data['reimbursed_amount']) ? $data['reimbursed_amount'] : null;
        $this->container['reason_code'] = isset($data['reason_code']) ? $data['reason_code'] : null;
        $this->container['safet_reimbursement_item_list'] = isset($data['safet_reimbursement_item_list']) ? $data['safet_reimbursement_item_list'] : null;
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
     * Gets safet_claim_id.
     *
     * @return string
     */
    public function getSafetClaimId()
    {
        return $this->container['safet_claim_id'];
    }

    /**
     * Sets safet_claim_id.
     *
     * @param string $safet_claim_id a SAFE-T claim identifier
     *
     * @return $this
     */
    public function setSafetClaimId($safet_claim_id)
    {
        $this->container['safet_claim_id'] = $safet_claim_id;

        return $this;
    }

    /**
     * Gets reimbursed_amount.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getReimbursedAmount()
    {
        return $this->container['reimbursed_amount'];
    }

    /**
     * Sets reimbursed_amount.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency $reimbursed_amount reimbursed_amount
     *
     * @return $this
     */
    public function setReimbursedAmount($reimbursed_amount)
    {
        $this->container['reimbursed_amount'] = $reimbursed_amount;

        return $this;
    }

    /**
     * Gets reason_code.
     *
     * @return string
     */
    public function getReasonCode()
    {
        return $this->container['reason_code'];
    }

    /**
     * Sets reason_code.
     *
     * @param string $reason_code indicates why the seller was reimbursed
     *
     * @return $this
     */
    public function setReasonCode($reason_code)
    {
        $this->container['reason_code'] = $reason_code;

        return $this;
    }

    /**
     * Gets safet_reimbursement_item_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\SAFETReimbursementItemList
     */
    public function getSafetReimbursementItemList()
    {
        return $this->container['safet_reimbursement_item_list'];
    }

    /**
     * Sets safet_reimbursement_item_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\SAFETReimbursementItemList $safet_reimbursement_item_list safet_reimbursement_item_list
     *
     * @return $this
     */
    public function setSafetReimbursementItemList($safet_reimbursement_item_list)
    {
        $this->container['safet_reimbursement_item_list'] = $safet_reimbursement_item_list;

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
