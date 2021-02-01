<?php
/**
 * TaxCollection.
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
 * TaxCollection Class Doc Comment.
 *

 * @description Information about withheld taxes.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class TaxCollection implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'TaxCollection';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'model' => 'string',
'responsible_party' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'model' => null,
'responsible_party' => null,    ];

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
        'model' => 'Model',
'responsible_party' => 'ResponsibleParty',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'model' => 'setModel',
'responsible_party' => 'setResponsibleParty',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'model' => 'getModel',
'responsible_party' => 'getResponsibleParty',    ];

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

    const MODEL_MARKETPLACE_FACILITATOR = 'MarketplaceFacilitator';
    const RESPONSIBLE_PARTY_AMAZON_SERVICES_INC = 'Amazon Services, Inc.';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getModelAllowableValues()
    {
        return [
            self::MODEL_MARKETPLACE_FACILITATOR,        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getResponsiblePartyAllowableValues()
    {
        return [
            self::RESPONSIBLE_PARTY_AMAZON_SERVICES_INC,        ];
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
        $this->container['model'] = isset($data['model']) ? $data['model'] : null;
        $this->container['responsible_party'] = isset($data['responsible_party']) ? $data['responsible_party'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getModelAllowableValues();
        if (!is_null($this->container['model']) && !in_array($this->container['model'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'model', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getResponsiblePartyAllowableValues();
        if (!is_null($this->container['responsible_party']) && !in_array($this->container['responsible_party'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'responsible_party', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets model.
     *
     * @return string
     */
    public function getModel()
    {
        return $this->container['model'];
    }

    /**
     * Sets model.
     *
     * @param string $model the tax collection model applied to the item
     *
     * @return $this
     */
    public function setModel($model)
    {
        $allowedValues = $this->getModelAllowableValues();
        if (!is_null($model) && !in_array($model, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'model', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['model'] = $model;

        return $this;
    }

    /**
     * Gets responsible_party.
     *
     * @return string
     */
    public function getResponsibleParty()
    {
        return $this->container['responsible_party'];
    }

    /**
     * Sets responsible_party.
     *
     * @param string $responsible_party the party responsible for withholding the taxes and remitting them to the taxing authority
     *
     * @return $this
     */
    public function setResponsibleParty($responsible_party)
    {
        $allowedValues = $this->getResponsiblePartyAllowableValues();
        if (!is_null($responsible_party) && !in_array($responsible_party, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'responsible_party', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['responsible_party'] = $responsible_party;

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
