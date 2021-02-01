<?php
/**
 * Item.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Catalog Items.
 *
 * The Selling Partner API for Catalog Items helps you programmatically retrieve item details for items in the catalog.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Catalog;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * Item Class Doc Comment.
 *

 * @description An item in the Amazon catalog.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Item extends Categories implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Item';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'identifiers' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\IdentifierType',
'attribute_sets' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\AttributeSetList',
'relationships' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\RelationshipList',
'sales_rankings' => '\ClouSale\AmazonSellingPartnerAPI\Models\Catalog\SalesRankList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'identifiers' => null,
'attribute_sets' => null,
'relationships' => null,
'sales_rankings' => null,    ];

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
        'identifiers' => 'Identifiers',
'attribute_sets' => 'AttributeSets',
'relationships' => 'Relationships',
'sales_rankings' => 'SalesRankings',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'identifiers' => 'setIdentifiers',
'attribute_sets' => 'setAttributeSets',
'relationships' => 'setRelationships',
'sales_rankings' => 'setSalesRankings',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'identifiers' => 'getIdentifiers',
'attribute_sets' => 'getAttributeSets',
'relationships' => 'getRelationships',
'sales_rankings' => 'getSalesRankings',    ];

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
        $this->container['identifiers'] = isset($data['identifiers']) ? $data['identifiers'] : null;
        $this->container['attribute_sets'] = isset($data['attribute_sets']) ? $data['attribute_sets'] : null;
        $this->container['relationships'] = isset($data['relationships']) ? $data['relationships'] : null;
        $this->container['sales_rankings'] = isset($data['sales_rankings']) ? $data['sales_rankings'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['identifiers']) {
            $invalidProperties[] = "'identifiers' can't be null";
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
     * Gets identifiers.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\IdentifierType
     */
    public function getIdentifiers()
    {
        return $this->container['identifiers'];
    }

    /**
     * Sets identifiers.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\IdentifierType $identifiers identifiers
     *
     * @return $this
     */
    public function setIdentifiers($identifiers)
    {
        $this->container['identifiers'] = $identifiers;

        return $this;
    }

    /**
     * Gets attribute_sets.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\AttributeSetList
     */
    public function getAttributeSets()
    {
        return $this->container['attribute_sets'];
    }

    /**
     * Sets attribute_sets.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\AttributeSetList $attribute_sets attribute_sets
     *
     * @return $this
     */
    public function setAttributeSets($attribute_sets)
    {
        $this->container['attribute_sets'] = $attribute_sets;

        return $this;
    }

    /**
     * Gets relationships.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\RelationshipList
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\RelationshipList $relationships relationships
     *
     * @return $this
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

        return $this;
    }

    /**
     * Gets sales_rankings.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\SalesRankList
     */
    public function getSalesRankings()
    {
        return $this->container['sales_rankings'];
    }

    /**
     * Sets sales_rankings.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Catalog\SalesRankList $sales_rankings sales_rankings
     *
     * @return $this
     */
    public function setSalesRankings($sales_rankings)
    {
        $this->container['sales_rankings'] = $sales_rankings;

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
