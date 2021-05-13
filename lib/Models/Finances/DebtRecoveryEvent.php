<?php
/**
 * DebtRecoveryEvent.
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
 * DebtRecoveryEvent Class Doc Comment.
 *

 * @description A debt payment or debt adjustment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class DebtRecoveryEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'DebtRecoveryEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'debt_recovery_type' => 'string',
'recovery_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'over_payment_credit' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'debt_recovery_item_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\DebtRecoveryItemList',
'charge_instrument_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\ChargeInstrumentList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'debt_recovery_type' => null,
'recovery_amount' => null,
'over_payment_credit' => null,
'debt_recovery_item_list' => null,
'charge_instrument_list' => null,    ];

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
        'debt_recovery_type' => 'DebtRecoveryType',
'recovery_amount' => 'RecoveryAmount',
'over_payment_credit' => 'OverPaymentCredit',
'debt_recovery_item_list' => 'DebtRecoveryItemList',
'charge_instrument_list' => 'ChargeInstrumentList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'debt_recovery_type' => 'setDebtRecoveryType',
'recovery_amount' => 'setRecoveryAmount',
'over_payment_credit' => 'setOverPaymentCredit',
'debt_recovery_item_list' => 'setDebtRecoveryItemList',
'charge_instrument_list' => 'setChargeInstrumentList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'debt_recovery_type' => 'getDebtRecoveryType',
'recovery_amount' => 'getRecoveryAmount',
'over_payment_credit' => 'getOverPaymentCredit',
'debt_recovery_item_list' => 'getDebtRecoveryItemList',
'charge_instrument_list' => 'getChargeInstrumentList',    ];

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
        $this->container['debt_recovery_type'] = isset($data['debt_recovery_type']) ? $data['debt_recovery_type'] : null;
        $this->container['recovery_amount'] = isset($data['recovery_amount']) ? $data['recovery_amount'] : null;
        $this->container['over_payment_credit'] = isset($data['over_payment_credit']) ? $data['over_payment_credit'] : null;
        $this->container['debt_recovery_item_list'] = isset($data['debt_recovery_item_list']) ? $data['debt_recovery_item_list'] : null;
        $this->container['charge_instrument_list'] = isset($data['charge_instrument_list']) ? $data['charge_instrument_list'] : null;
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
     * Gets debt_recovery_type.
     *
     * @return string
     */
    public function getDebtRecoveryType()
    {
        return $this->container['debt_recovery_type'];
    }

    /**
     * Sets debt_recovery_type.
     *
     * @param string $debt_recovery_type The debt recovery type.  Possible values:  * DebtPayment  * DebtPaymentFailure  *DebtAdjustment
     *
     * @return $this
     */
    public function setDebtRecoveryType($debt_recovery_type)
    {
        $this->container['debt_recovery_type'] = $debt_recovery_type;

        return $this;
    }

    /**
     * Gets recovery_amount.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getRecoveryAmount()
    {
        return $this->container['recovery_amount'];
    }

    /**
     * Sets recovery_amount.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency $recovery_amount recovery_amount
     *
     * @return $this
     */
    public function setRecoveryAmount($recovery_amount)
    {
        $this->container['recovery_amount'] = $recovery_amount;

        return $this;
    }

    /**
     * Gets over_payment_credit.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getOverPaymentCredit()
    {
        return $this->container['over_payment_credit'];
    }

    /**
     * Sets over_payment_credit.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\Currency $over_payment_credit over_payment_credit
     *
     * @return $this
     */
    public function setOverPaymentCredit($over_payment_credit)
    {
        $this->container['over_payment_credit'] = $over_payment_credit;

        return $this;
    }

    /**
     * Gets debt_recovery_item_list.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\DebtRecoveryItemList
     */
    public function getDebtRecoveryItemList()
    {
        return $this->container['debt_recovery_item_list'];
    }

    /**
     * Sets debt_recovery_item_list.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\DebtRecoveryItemList $debt_recovery_item_list debt_recovery_item_list
     *
     * @return $this
     */
    public function setDebtRecoveryItemList($debt_recovery_item_list)
    {
        $this->container['debt_recovery_item_list'] = $debt_recovery_item_list;

        return $this;
    }

    /**
     * Gets charge_instrument_list.
     *
     * @return \Clousale\AmazonSellingPartnerAPI\Models\Finances\ChargeInstrumentList
     */
    public function getChargeInstrumentList()
    {
        return $this->container['charge_instrument_list'];
    }

    /**
     * Sets charge_instrument_list.
     *
     * @param \Clousale\AmazonSellingPartnerAPI\Models\Finances\ChargeInstrumentList $charge_instrument_list charge_instrument_list
     *
     * @return $this
     */
    public function setChargeInstrumentList($charge_instrument_list)
    {
        $this->container['charge_instrument_list'] = $charge_instrument_list;

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
