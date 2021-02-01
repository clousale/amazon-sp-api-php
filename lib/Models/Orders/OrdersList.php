<?php
/**
 * OrdersList.
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
 * OrdersList Class Doc Comment.
 *

 * @description A list of orders along with additional information to make subsequent API calls.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class OrdersList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'OrdersList';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'orders' => '\ClouSale\AmazonSellingPartnerAPI\Models\Orders\OrderList',
'next_token' => 'string',
'last_updated_before' => 'string',
'created_before' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'orders' => null,
'next_token' => null,
'last_updated_before' => null,
'created_before' => null,    ];

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
        'orders' => 'Orders',
'next_token' => 'NextToken',
'last_updated_before' => 'LastUpdatedBefore',
'created_before' => 'CreatedBefore',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'orders' => 'setOrders',
'next_token' => 'setNextToken',
'last_updated_before' => 'setLastUpdatedBefore',
'created_before' => 'setCreatedBefore',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'orders' => 'getOrders',
'next_token' => 'getNextToken',
'last_updated_before' => 'getLastUpdatedBefore',
'created_before' => 'getCreatedBefore',    ];

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
        $this->container['orders'] = isset($data['orders']) ? $data['orders'] : null;
        $this->container['next_token'] = isset($data['next_token']) ? $data['next_token'] : null;
        $this->container['last_updated_before'] = isset($data['last_updated_before']) ? $data['last_updated_before'] : null;
        $this->container['created_before'] = isset($data['created_before']) ? $data['created_before'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['orders']) {
            $invalidProperties[] = "'orders' can't be null";
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
     * Gets orders.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Orders\OrderList
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Orders\OrderList $orders orders
     *
     * @return $this
     */
    public function setOrders($orders)
    {
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets next_token.
     *
     * @return string
     */
    public function getNextToken()
    {
        return $this->container['next_token'];
    }

    /**
     * Sets next_token.
     *
     * @param string $next_token when present and not empty, pass this string token in the next request to return the next response page
     *
     * @return $this
     */
    public function setNextToken($next_token)
    {
        $this->container['next_token'] = $next_token;

        return $this;
    }

    /**
     * Gets last_updated_before.
     *
     * @return string
     */
    public function getLastUpdatedBefore()
    {
        return $this->container['last_updated_before'];
    }

    /**
     * Sets last_updated_before.
     *
     * @param string $last_updated_before A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. All dates must be in ISO 8601 format.
     *
     * @return $this
     */
    public function setLastUpdatedBefore($last_updated_before)
    {
        $this->container['last_updated_before'] = $last_updated_before;

        return $this;
    }

    /**
     * Gets created_before.
     *
     * @return string
     */
    public function getCreatedBefore()
    {
        return $this->container['created_before'];
    }

    /**
     * Sets created_before.
     *
     * @param string $created_before A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format.
     *
     * @return $this
     */
    public function setCreatedBefore($created_before)
    {
        $this->container['created_before'] = $created_before;

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
