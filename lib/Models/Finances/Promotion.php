<?php
/**
 * Promotion.
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
 * Promotion Class Doc Comment.
 *

 * @description A promotion applied to an item.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Promotion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Promotion';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'promotion_type' => 'string',
'promotion_id' => 'string',
'promotion_amount' => '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'promotion_type' => null,
'promotion_id' => null,
'promotion_amount' => null,    ];

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
        'promotion_type' => 'PromotionType',
'promotion_id' => 'PromotionId',
'promotion_amount' => 'PromotionAmount',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'promotion_type' => 'setPromotionType',
'promotion_id' => 'setPromotionId',
'promotion_amount' => 'setPromotionAmount',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'promotion_type' => 'getPromotionType',
'promotion_id' => 'getPromotionId',
'promotion_amount' => 'getPromotionAmount',    ];

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
        $this->container['promotion_type'] = isset($data['promotion_type']) ? $data['promotion_type'] : null;
        $this->container['promotion_id'] = isset($data['promotion_id']) ? $data['promotion_id'] : null;
        $this->container['promotion_amount'] = isset($data['promotion_amount']) ? $data['promotion_amount'] : null;
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
     * Gets promotion_type.
     *
     * @return string
     */
    public function getPromotionType()
    {
        return $this->container['promotion_type'];
    }

    /**
     * Sets promotion_type.
     *
     * @param string $promotion_type the type of promotion
     *
     * @return $this
     */
    public function setPromotionType($promotion_type)
    {
        $this->container['promotion_type'] = $promotion_type;

        return $this;
    }

    /**
     * Gets promotion_id.
     *
     * @return string
     */
    public function getPromotionId()
    {
        return $this->container['promotion_id'];
    }

    /**
     * Sets promotion_id.
     *
     * @param string $promotion_id the seller-specified identifier for the promotion
     *
     * @return $this
     */
    public function setPromotionId($promotion_id)
    {
        $this->container['promotion_id'] = $promotion_id;

        return $this;
    }

    /**
     * Gets promotion_amount.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency
     */
    public function getPromotionAmount()
    {
        return $this->container['promotion_amount'];
    }

    /**
     * Sets promotion_amount.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Finances\Currency $promotion_amount promotion_amount
     *
     * @return $this
     */
    public function setPromotionAmount($promotion_amount)
    {
        $this->container['promotion_amount'] = $promotion_amount;

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
