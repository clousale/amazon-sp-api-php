<?php
/**
 * Address.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Shipping;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * Address Class Doc Comment.
 *

 * @description The address.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Address implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Address';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'name' => 'string',
'address_line1' => 'string',
'address_line2' => 'string',
'address_line3' => 'string',
'state_or_region' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\StateOrRegion',
'city' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\City',
'country_code' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\CountryCode',
'postal_code' => '\ClouSale\AmazonSellingPartnerAPI\Models\Shipping\PostalCode',
'email' => 'string',
'copy_emails' => 'string[]',
'phone_number' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'name' => null,
'address_line1' => null,
'address_line2' => null,
'address_line3' => null,
'state_or_region' => null,
'city' => null,
'country_code' => null,
'postal_code' => null,
'email' => null,
'copy_emails' => null,
'phone_number' => null,    ];

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
        'name' => 'name',
'address_line1' => 'addressLine1',
'address_line2' => 'addressLine2',
'address_line3' => 'addressLine3',
'state_or_region' => 'stateOrRegion',
'city' => 'city',
'country_code' => 'countryCode',
'postal_code' => 'postalCode',
'email' => 'email',
'copy_emails' => 'copyEmails',
'phone_number' => 'phoneNumber',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
'address_line1' => 'setAddressLine1',
'address_line2' => 'setAddressLine2',
'address_line3' => 'setAddressLine3',
'state_or_region' => 'setStateOrRegion',
'city' => 'setCity',
'country_code' => 'setCountryCode',
'postal_code' => 'setPostalCode',
'email' => 'setEmail',
'copy_emails' => 'setCopyEmails',
'phone_number' => 'setPhoneNumber',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
'address_line1' => 'getAddressLine1',
'address_line2' => 'getAddressLine2',
'address_line3' => 'getAddressLine3',
'state_or_region' => 'getStateOrRegion',
'city' => 'getCity',
'country_code' => 'getCountryCode',
'postal_code' => 'getPostalCode',
'email' => 'getEmail',
'copy_emails' => 'getCopyEmails',
'phone_number' => 'getPhoneNumber',    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['address_line1'] = isset($data['address_line1']) ? $data['address_line1'] : null;
        $this->container['address_line2'] = isset($data['address_line2']) ? $data['address_line2'] : null;
        $this->container['address_line3'] = isset($data['address_line3']) ? $data['address_line3'] : null;
        $this->container['state_or_region'] = isset($data['state_or_region']) ? $data['state_or_region'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['copy_emails'] = isset($data['copy_emails']) ? $data['copy_emails'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['name']) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (null === $this->container['address_line1']) {
            $invalidProperties[] = "'address_line1' can't be null";
        }
        if (null === $this->container['state_or_region']) {
            $invalidProperties[] = "'state_or_region' can't be null";
        }
        if (null === $this->container['city']) {
            $invalidProperties[] = "'city' can't be null";
        }
        if (null === $this->container['country_code']) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if (null === $this->container['postal_code']) {
            $invalidProperties[] = "'postal_code' can't be null";
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
     * Gets name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param string $name the name of the person, business or institution at that address
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets address_line1.
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1.
     *
     * @param string $address_line1 first line of that address
     *
     * @return $this
     */
    public function setAddressLine1($address_line1)
    {
        $this->container['address_line1'] = $address_line1;

        return $this;
    }

    /**
     * Gets address_line2.
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2.
     *
     * @param string $address_line2 additional address information, if required
     *
     * @return $this
     */
    public function setAddressLine2($address_line2)
    {
        $this->container['address_line2'] = $address_line2;

        return $this;
    }

    /**
     * Gets address_line3.
     *
     * @return string
     */
    public function getAddressLine3()
    {
        return $this->container['address_line3'];
    }

    /**
     * Sets address_line3.
     *
     * @param string $address_line3 additional address information, if required
     *
     * @return $this
     */
    public function setAddressLine3($address_line3)
    {
        $this->container['address_line3'] = $address_line3;

        return $this;
    }

    /**
     * Gets state_or_region.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\StateOrRegion
     */
    public function getStateOrRegion()
    {
        return $this->container['state_or_region'];
    }

    /**
     * Sets state_or_region.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\StateOrRegion $state_or_region state_or_region
     *
     * @return $this
     */
    public function setStateOrRegion($state_or_region)
    {
        $this->container['state_or_region'] = $state_or_region;

        return $this;
    }

    /**
     * Gets city.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\City
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\City $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets country_code.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\CountryCode
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\CountryCode $country_code country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets postal_code.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\PostalCode
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Shipping\PostalCode $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email.
     *
     * @param string $email the email address of the contact associated with the address
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets copy_emails.
     *
     * @return string[]
     */
    public function getCopyEmails()
    {
        return $this->container['copy_emails'];
    }

    /**
     * Sets copy_emails.
     *
     * @param string[] $copy_emails the email cc addresses of the contact associated with the address
     *
     * @return $this
     */
    public function setCopyEmails($copy_emails)
    {
        $this->container['copy_emails'] = $copy_emails;

        return $this;
    }

    /**
     * Gets phone_number.
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number.
     *
     * @param string $phone_number the phone number of the person, business or institution located at that address
     *
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

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
