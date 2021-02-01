<?php
/**
 * Address.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * Address Class Doc Comment.
 *

 * @description The postal address information.
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
        'name' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AddressName',
'address_line1' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AddressLine1',
'address_line2' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AddressLine2',
'address_line3' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AddressLine3',
'district_or_county' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\DistrictOrCounty',
'email' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\EmailAddress',
'city' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\City',
'state_or_province_code' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\StateOrProvinceCode',
'postal_code' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PostalCode',
'country_code' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CountryCode',
'phone' => '\ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PhoneNumber',    ];

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
'district_or_county' => null,
'email' => null,
'city' => null,
'state_or_province_code' => null,
'postal_code' => null,
'country_code' => null,
'phone' => null,    ];

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
        'name' => 'Name',
'address_line1' => 'AddressLine1',
'address_line2' => 'AddressLine2',
'address_line3' => 'AddressLine3',
'district_or_county' => 'DistrictOrCounty',
'email' => 'Email',
'city' => 'City',
'state_or_province_code' => 'StateOrProvinceCode',
'postal_code' => 'PostalCode',
'country_code' => 'CountryCode',
'phone' => 'Phone',    ];

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
'district_or_county' => 'setDistrictOrCounty',
'email' => 'setEmail',
'city' => 'setCity',
'state_or_province_code' => 'setStateOrProvinceCode',
'postal_code' => 'setPostalCode',
'country_code' => 'setCountryCode',
'phone' => 'setPhone',    ];

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
'district_or_county' => 'getDistrictOrCounty',
'email' => 'getEmail',
'city' => 'getCity',
'state_or_province_code' => 'getStateOrProvinceCode',
'postal_code' => 'getPostalCode',
'country_code' => 'getCountryCode',
'phone' => 'getPhone',    ];

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
        $this->container['district_or_county'] = isset($data['district_or_county']) ? $data['district_or_county'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state_or_province_code'] = isset($data['state_or_province_code']) ? $data['state_or_province_code'] : null;
        $this->container['postal_code'] = isset($data['postal_code']) ? $data['postal_code'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
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
        if (null === $this->container['email']) {
            $invalidProperties[] = "'email' can't be null";
        }
        if (null === $this->container['city']) {
            $invalidProperties[] = "'city' can't be null";
        }
        if (null === $this->container['postal_code']) {
            $invalidProperties[] = "'postal_code' can't be null";
        }
        if (null === $this->container['country_code']) {
            $invalidProperties[] = "'country_code' can't be null";
        }
        if (null === $this->container['phone']) {
            $invalidProperties[] = "'phone' can't be null";
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
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AddressName
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AddressName $name name
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
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AddressLine1
     */
    public function getAddressLine1()
    {
        return $this->container['address_line1'];
    }

    /**
     * Sets address_line1.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AddressLine1 $address_line1 address_line1
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
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AddressLine2
     */
    public function getAddressLine2()
    {
        return $this->container['address_line2'];
    }

    /**
     * Sets address_line2.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AddressLine2 $address_line2 address_line2
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
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AddressLine3
     */
    public function getAddressLine3()
    {
        return $this->container['address_line3'];
    }

    /**
     * Sets address_line3.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\AddressLine3 $address_line3 address_line3
     *
     * @return $this
     */
    public function setAddressLine3($address_line3)
    {
        $this->container['address_line3'] = $address_line3;

        return $this;
    }

    /**
     * Gets district_or_county.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\DistrictOrCounty
     */
    public function getDistrictOrCounty()
    {
        return $this->container['district_or_county'];
    }

    /**
     * Sets district_or_county.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\DistrictOrCounty $district_or_county district_or_county
     *
     * @return $this
     */
    public function setDistrictOrCounty($district_or_county)
    {
        $this->container['district_or_county'] = $district_or_county;

        return $this;
    }

    /**
     * Gets email.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\EmailAddress
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\EmailAddress $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets city.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\City
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\City $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state_or_province_code.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\StateOrProvinceCode
     */
    public function getStateOrProvinceCode()
    {
        return $this->container['state_or_province_code'];
    }

    /**
     * Sets state_or_province_code.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\StateOrProvinceCode $state_or_province_code state_or_province_code
     *
     * @return $this
     */
    public function setStateOrProvinceCode($state_or_province_code)
    {
        $this->container['state_or_province_code'] = $state_or_province_code;

        return $this;
    }

    /**
     * Gets postal_code.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PostalCode
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PostalCode $postal_code postal_code
     *
     * @return $this
     */
    public function setPostalCode($postal_code)
    {
        $this->container['postal_code'] = $postal_code;

        return $this;
    }

    /**
     * Gets country_code.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CountryCode
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\CountryCode $country_code country_code
     *
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets phone.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PhoneNumber
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment\PhoneNumber $phone phone
     *
     * @return $this
     */
    public function setPhone($phone)
    {
        $this->container['phone'] = $phone;

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
