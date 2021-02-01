<?php
/**
 * OrderItemBuyerInfo.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Orders;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * OrderItemBuyerInfo Class Doc Comment.
 *

 * @description A single order item&#x27;s buyer information.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class OrderItemBuyerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'OrderItemBuyerInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'order_item_id' => 'string',
'buyer_customized_info' => '\ClouSale\AmazonSellingPartnerAPI\Models\Orders\BuyerCustomizedInfoDetail',
'gift_wrap_price' => '\ClouSale\AmazonSellingPartnerAPI\Models\Orders\Money',
'gift_wrap_tax' => '\ClouSale\AmazonSellingPartnerAPI\Models\Orders\Money',
'gift_message_text' => 'string',
'gift_wrap_level' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'order_item_id' => null,
'buyer_customized_info' => null,
'gift_wrap_price' => null,
'gift_wrap_tax' => null,
'gift_message_text' => null,
'gift_wrap_level' => null,    ];

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
        'order_item_id' => 'OrderItemId',
'buyer_customized_info' => 'BuyerCustomizedInfo',
'gift_wrap_price' => 'GiftWrapPrice',
'gift_wrap_tax' => 'GiftWrapTax',
'gift_message_text' => 'GiftMessageText',
'gift_wrap_level' => 'GiftWrapLevel',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'order_item_id' => 'setOrderItemId',
'buyer_customized_info' => 'setBuyerCustomizedInfo',
'gift_wrap_price' => 'setGiftWrapPrice',
'gift_wrap_tax' => 'setGiftWrapTax',
'gift_message_text' => 'setGiftMessageText',
'gift_wrap_level' => 'setGiftWrapLevel',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'order_item_id' => 'getOrderItemId',
'buyer_customized_info' => 'getBuyerCustomizedInfo',
'gift_wrap_price' => 'getGiftWrapPrice',
'gift_wrap_tax' => 'getGiftWrapTax',
'gift_message_text' => 'getGiftMessageText',
'gift_wrap_level' => 'getGiftWrapLevel',    ];

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
        $this->container['order_item_id'] = isset($data['order_item_id']) ? $data['order_item_id'] : null;
        $this->container['buyer_customized_info'] = isset($data['buyer_customized_info']) ? $data['buyer_customized_info'] : null;
        $this->container['gift_wrap_price'] = isset($data['gift_wrap_price']) ? $data['gift_wrap_price'] : null;
        $this->container['gift_wrap_tax'] = isset($data['gift_wrap_tax']) ? $data['gift_wrap_tax'] : null;
        $this->container['gift_message_text'] = isset($data['gift_message_text']) ? $data['gift_message_text'] : null;
        $this->container['gift_wrap_level'] = isset($data['gift_wrap_level']) ? $data['gift_wrap_level'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['order_item_id']) {
            $invalidProperties[] = "'order_item_id' can't be null";
        }

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
     * Gets order_item_id.
     *
     * @return string
     */
    public function getOrderItemId()
    {
        return $this->container['order_item_id'];
    }

    /**
     * Sets order_item_id.
     *
     * @param string $order_item_id an Amazon-defined order item identifier
     *
     * @return $this
     */
    public function setOrderItemId($order_item_id)
    {
        $this->container['order_item_id'] = $order_item_id;

        return $this;
    }

    /**
     * Gets buyer_customized_info.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Orders\BuyerCustomizedInfoDetail
     */
    public function getBuyerCustomizedInfo()
    {
        return $this->container['buyer_customized_info'];
    }

    /**
     * Sets buyer_customized_info.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Orders\BuyerCustomizedInfoDetail $buyer_customized_info buyer_customized_info
     *
     * @return $this
     */
    public function setBuyerCustomizedInfo($buyer_customized_info)
    {
        $this->container['buyer_customized_info'] = $buyer_customized_info;

        return $this;
    }

    /**
     * Gets gift_wrap_price.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Orders\Money
     */
    public function getGiftWrapPrice()
    {
        return $this->container['gift_wrap_price'];
    }

    /**
     * Sets gift_wrap_price.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Orders\Money $gift_wrap_price gift_wrap_price
     *
     * @return $this
     */
    public function setGiftWrapPrice($gift_wrap_price)
    {
        $this->container['gift_wrap_price'] = $gift_wrap_price;

        return $this;
    }

    /**
     * Gets gift_wrap_tax.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Orders\Money
     */
    public function getGiftWrapTax()
    {
        return $this->container['gift_wrap_tax'];
    }

    /**
     * Sets gift_wrap_tax.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Orders\Money $gift_wrap_tax gift_wrap_tax
     *
     * @return $this
     */
    public function setGiftWrapTax($gift_wrap_tax)
    {
        $this->container['gift_wrap_tax'] = $gift_wrap_tax;

        return $this;
    }

    /**
     * Gets gift_message_text.
     *
     * @return string
     */
    public function getGiftMessageText()
    {
        return $this->container['gift_message_text'];
    }

    /**
     * Sets gift_message_text.
     *
     * @param string $gift_message_text a gift message provided by the buyer
     *
     * @return $this
     */
    public function setGiftMessageText($gift_message_text)
    {
        $this->container['gift_message_text'] = $gift_message_text;

        return $this;
    }

    /**
     * Gets gift_wrap_level.
     *
     * @return string
     */
    public function getGiftWrapLevel()
    {
        return $this->container['gift_wrap_level'];
    }

    /**
     * Sets gift_wrap_level.
     *
     * @param string $gift_wrap_level the gift wrap level specified by the buyer
     *
     * @return $this
     */
    public function setGiftWrapLevel($gift_wrap_level)
    {
        $this->container['gift_wrap_level'] = $gift_wrap_level;

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
