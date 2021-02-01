<?php
/**
 * ItemDelivery.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Services.
 *
 * With the Services API, you can build applications that help service providers get and modify their service orders.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Services;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * ItemDelivery Class Doc Comment.
 *

 * @description Delivery information for the item.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ItemDelivery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ItemDelivery';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'estimated_delivery_date' => '\DateTime',
'item_delivery_promise' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\ItemDeliveryPromise',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'estimated_delivery_date' => 'date-time',
'item_delivery_promise' => null,    ];

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
        'estimated_delivery_date' => 'estimatedDeliveryDate',
'item_delivery_promise' => 'itemDeliveryPromise',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'estimated_delivery_date' => 'setEstimatedDeliveryDate',
'item_delivery_promise' => 'setItemDeliveryPromise',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'estimated_delivery_date' => 'getEstimatedDeliveryDate',
'item_delivery_promise' => 'getItemDeliveryPromise',    ];

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
        $this->container['estimated_delivery_date'] = isset($data['estimated_delivery_date']) ? $data['estimated_delivery_date'] : null;
        $this->container['item_delivery_promise'] = isset($data['item_delivery_promise']) ? $data['item_delivery_promise'] : null;
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
     * Gets estimated_delivery_date.
     *
     * @return \DateTime
     */
    public function getEstimatedDeliveryDate()
    {
        return $this->container['estimated_delivery_date'];
    }

    /**
     * Sets estimated_delivery_date.
     *
     * @param \DateTime $estimated_delivery_date The date and time of the latest Estimated Delivery Date (EDD) of all the items with an EDD. In ISO 8601 format.
     *
     * @return $this
     */
    public function setEstimatedDeliveryDate($estimated_delivery_date)
    {
        $this->container['estimated_delivery_date'] = $estimated_delivery_date;

        return $this;
    }

    /**
     * Gets item_delivery_promise.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\ItemDeliveryPromise
     */
    public function getItemDeliveryPromise()
    {
        return $this->container['item_delivery_promise'];
    }

    /**
     * Sets item_delivery_promise.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\ItemDeliveryPromise $item_delivery_promise item_delivery_promise
     *
     * @return $this
     */
    public function setItemDeliveryPromise($item_delivery_promise)
    {
        $this->container['item_delivery_promise'] = $item_delivery_promise;

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
