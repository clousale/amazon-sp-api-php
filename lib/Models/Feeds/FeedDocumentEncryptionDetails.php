<?php
/**
 * FeedDocumentEncryptionDetails.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Feeds.
 *
 * The Selling Partner API for Feeds lets you upload data to Amazon on behalf of a selling partner.
 *
 * OpenAPI spec version: 2020-09-04
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Feeds;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * FeedDocumentEncryptionDetails Class Doc Comment.
 *

 * @description Encryption details for required client-side encryption and decryption of document contents.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FeedDocumentEncryptionDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FeedDocumentEncryptionDetails';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'standard' => 'string',
'initialization_vector' => 'string',
'key' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'standard' => null,
'initialization_vector' => null,
'key' => null,    ];

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
        'standard' => 'standard',
'initialization_vector' => 'initializationVector',
'key' => 'key',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'standard' => 'setStandard',
'initialization_vector' => 'setInitializationVector',
'key' => 'setKey',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'standard' => 'getStandard',
'initialization_vector' => 'getInitializationVector',
'key' => 'getKey',    ];

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

    const STANDARD_AES = 'AES';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getStandardAllowableValues()
    {
        return [
            self::STANDARD_AES,        ];
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
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['initialization_vector'] = isset($data['initialization_vector']) ? $data['initialization_vector'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['standard']) {
            $invalidProperties[] = "'standard' can't be null";
        }
        $allowedValues = $this->getStandardAllowableValues();
        if (!is_null($this->container['standard']) && !in_array($this->container['standard'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'standard', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if (null === $this->container['initialization_vector']) {
            $invalidProperties[] = "'initialization_vector' can't be null";
        }
        if (null === $this->container['key']) {
            $invalidProperties[] = "'key' can't be null";
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
     * Gets standard.
     *
     * @return string
     */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
     * Sets standard.
     *
     * @param string $standard the encryption standard required to encrypt or decrypt the document contents
     *
     * @return $this
     */
    public function setStandard($standard)
    {
        $allowedValues = $this->getStandardAllowableValues();
        if (!in_array($standard, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'standard', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['standard'] = $standard;

        return $this;
    }

    /**
     * Gets initialization_vector.
     *
     * @return string
     */
    public function getInitializationVector()
    {
        return $this->container['initialization_vector'];
    }

    /**
     * Sets initialization_vector.
     *
     * @param string $initialization_vector the vector to encrypt or decrypt the document contents using Cipher Block Chaining (CBC)
     *
     * @return $this
     */
    public function setInitializationVector($initialization_vector)
    {
        $this->container['initialization_vector'] = $initialization_vector;

        return $this;
    }

    /**
     * Gets key.
     *
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key.
     *
     * @param string $key the encryption key used to encrypt or decrypt the document contents
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

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
