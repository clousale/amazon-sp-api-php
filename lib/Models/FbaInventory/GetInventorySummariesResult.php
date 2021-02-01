<?php
/**
 * GetInventorySummariesResult.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for FBA Inventory.
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * GetInventorySummariesResult Class Doc Comment.
 *

 * @description The payload schema for the getInventorySummaries operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class GetInventorySummariesResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'GetInventorySummariesResult';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'granularity' => '\ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\Granularity',
'inventory_summaries' => '\ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\InventorySummaries',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'granularity' => null,
'inventory_summaries' => null,    ];

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
        'granularity' => 'granularity',
'inventory_summaries' => 'inventorySummaries',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'granularity' => 'setGranularity',
'inventory_summaries' => 'setInventorySummaries',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'granularity' => 'getGranularity',
'inventory_summaries' => 'getInventorySummaries',    ];

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
        $this->container['granularity'] = isset($data['granularity']) ? $data['granularity'] : null;
        $this->container['inventory_summaries'] = isset($data['inventory_summaries']) ? $data['inventory_summaries'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['granularity']) {
            $invalidProperties[] = "'granularity' can't be null";
        }
        if (null === $this->container['inventory_summaries']) {
            $invalidProperties[] = "'inventory_summaries' can't be null";
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
     * Gets granularity.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\Granularity
     */
    public function getGranularity()
    {
        return $this->container['granularity'];
    }

    /**
     * Sets granularity.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\Granularity $granularity granularity
     *
     * @return $this
     */
    public function setGranularity($granularity)
    {
        $this->container['granularity'] = $granularity;

        return $this;
    }

    /**
     * Gets inventory_summaries.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\InventorySummaries
     */
    public function getInventorySummaries()
    {
        return $this->container['inventory_summaries'];
    }

    /**
     * Sets inventory_summaries.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\InventorySummaries $inventory_summaries inventory_summaries
     *
     * @return $this
     */
    public function setInventorySummaries($inventory_summaries)
    {
        $this->container['inventory_summaries'] = $inventory_summaries;

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
