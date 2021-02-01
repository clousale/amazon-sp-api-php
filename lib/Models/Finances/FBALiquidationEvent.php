<?php
/**
 * FBALiquidationEvent.
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
 * FBALiquidationEvent Class Doc Comment.
 *

 * @description A payment event for Fulfillment by Amazon (FBA) inventory liquidation. This event is used only in the US marketplace.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FBALiquidationEvent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FBALiquidationEvent';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'posted_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\\DateTime',
'original_removal_order_id' => 'string',
'liquidation_proceeds_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',
'liquidation_fee_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'posted_date' => null,
'original_removal_order_id' => null,
'liquidation_proceeds_amount' => null,
'liquidation_fee_amount' => null,    ];

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
'original_removal_order_id' => 'OriginalRemovalOrderId',
'liquidation_proceeds_amount' => 'LiquidationProceedsAmount',
'liquidation_fee_amount' => 'LiquidationFeeAmount',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'posted_date' => 'setPostedDate',
'original_removal_order_id' => 'setOriginalRemovalOrderId',
'liquidation_proceeds_amount' => 'setLiquidationProceedsAmount',
'liquidation_fee_amount' => 'setLiquidationFeeAmount',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'posted_date' => 'getPostedDate',
'original_removal_order_id' => 'getOriginalRemovalOrderId',
'liquidation_proceeds_amount' => 'getLiquidationProceedsAmount',
'liquidation_fee_amount' => 'getLiquidationFeeAmount',    ];

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
        $this->container['original_removal_order_id'] = isset($data['original_removal_order_id']) ? $data['original_removal_order_id'] : null;
        $this->container['liquidation_proceeds_amount'] = isset($data['liquidation_proceeds_amount']) ? $data['liquidation_proceeds_amount'] : null;
        $this->container['liquidation_fee_amount'] = isset($data['liquidation_fee_amount']) ? $data['liquidation_fee_amount'] : null;
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
     * Gets original_removal_order_id.
     *
     * @return string
     */
    public function getOriginalRemovalOrderId()
    {
        return $this->container['original_removal_order_id'];
    }

    /**
     * Sets original_removal_order_id.
     *
     * @param string $original_removal_order_id the identifier for the original removal order
     *
     * @return $this
     */
    public function setOriginalRemovalOrderId($original_removal_order_id)
    {
        $this->container['original_removal_order_id'] = $original_removal_order_id;

        return $this;
    }

    /**
     * Gets liquidation_proceeds_amount.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getLiquidationProceedsAmount()
    {
        return $this->container['liquidation_proceeds_amount'];
    }

    /**
     * Sets liquidation_proceeds_amount.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency $liquidation_proceeds_amount liquidation_proceeds_amount
     *
     * @return $this
     */
    public function setLiquidationProceedsAmount($liquidation_proceeds_amount)
    {
        $this->container['liquidation_proceeds_amount'] = $liquidation_proceeds_amount;

        return $this;
    }

    /**
     * Gets liquidation_fee_amount.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getLiquidationFeeAmount()
    {
        return $this->container['liquidation_fee_amount'];
    }

    /**
     * Sets liquidation_fee_amount.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency $liquidation_fee_amount liquidation_fee_amount
     *
     * @return $this
     */
    public function setLiquidationFeeAmount($liquidation_fee_amount)
    {
        $this->container['liquidation_fee_amount'] = $liquidation_fee_amount;

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
