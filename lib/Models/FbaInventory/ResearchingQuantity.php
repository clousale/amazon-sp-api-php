<?php
/**
 * ResearchingQuantity.
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
 * ResearchingQuantity Class Doc Comment.
 *

 * @description The number of misplaced or warehouse damaged units that are actively being confirmed at our fulfillment centers.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ResearchingQuantity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ResearchingQuantity';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'total_researching_quantity' => 'int',
'researching_quantity_breakdown' => '\ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\ResearchingQuantityEntry[]',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'total_researching_quantity' => null,
'researching_quantity_breakdown' => null,    ];

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
        'total_researching_quantity' => 'totalResearchingQuantity',
'researching_quantity_breakdown' => 'researchingQuantityBreakdown',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'total_researching_quantity' => 'setTotalResearchingQuantity',
'researching_quantity_breakdown' => 'setResearchingQuantityBreakdown',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'total_researching_quantity' => 'getTotalResearchingQuantity',
'researching_quantity_breakdown' => 'getResearchingQuantityBreakdown',    ];

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
        $this->container['total_researching_quantity'] = isset($data['total_researching_quantity']) ? $data['total_researching_quantity'] : null;
        $this->container['researching_quantity_breakdown'] = isset($data['researching_quantity_breakdown']) ? $data['researching_quantity_breakdown'] : null;
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
     * Gets total_researching_quantity.
     *
     * @return int
     */
    public function getTotalResearchingQuantity()
    {
        return $this->container['total_researching_quantity'];
    }

    /**
     * Sets total_researching_quantity.
     *
     * @param int $total_researching_quantity the total number of units currently being researched in Amazon's fulfillment network
     *
     * @return $this
     */
    public function setTotalResearchingQuantity($total_researching_quantity)
    {
        $this->container['total_researching_quantity'] = $total_researching_quantity;

        return $this;
    }

    /**
     * Gets researching_quantity_breakdown.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\ResearchingQuantityEntry[]
     */
    public function getResearchingQuantityBreakdown()
    {
        return $this->container['researching_quantity_breakdown'];
    }

    /**
     * Sets researching_quantity_breakdown.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\ResearchingQuantityEntry[] $researching_quantity_breakdown a list of quantity details for items currently being researched
     *
     * @return $this
     */
    public function setResearchingQuantityBreakdown($researching_quantity_breakdown)
    {
        $this->container['researching_quantity_breakdown'] = $researching_quantity_breakdown;

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
