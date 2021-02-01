<?php
/**
 * Address.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * Address Class Doc Comment.
 *

 * @description A physical address.
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
'city' => 'string',
'district_or_county' => 'string',
'state_or_region' => 'string',
'postal_code' => 'string',
'country_code' => 'string',
'phone' => 'string',    ];

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
'city' => null,
'district_or_county' => null,
'state_or_region' => null,
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
        'name' => 'name',
'address_line1' => 'addressLine1',
'address_line2' => 'addressLine2',
'address_line3' => 'addressLine3',
'city' => 'city',
'district_or_county' => 'districtOrCounty',
'state_or_region' => 'stateOrRegion',
'postal_code' => 'postalCode',
'country_code' => 'countryCode',
'phone' => 'phone',    ];

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
'city' => 'setCity',
'district_or_county' => 'setDistrictOrCounty',
'state_or_region' => 'setStateOrRegion',
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
'city' => 'getCity',
'district_or_county' => 'getDistrictOrCounty',
'state_or_region' => 'getStateOrRegion',
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
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['district_or_county'] = isset($data['district_or_county']) ? $data['district_or_county'] : null;
        $this->container['state_or_region'] = isset($data['state_or_region']) ? $data['state_or_region'] : null;
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
        if (null === $this->container['district_or_county']) {
            $invalidProperties[] = "'district_or_county' can't be null";
        }
        if (null === $this->container['country_code']) {
            $invalidProperties[] = "'country_code' can't be null";
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
     * @param string $name the name of the person, business or institution at the address
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
     * @param string $address_line1 the first line of the address
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
     * Gets city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city.
     *
     * @param string $city the city where the person, business, or institution is located
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets district_or_county.
     *
     * @return string
     */
    public function getDistrictOrCounty()
    {
        return $this->container['district_or_county'];
    }

    /**
     * Sets district_or_county.
     *
     * @param string $district_or_county the district or county where the person, business, or institution is located
     *
     * @return $this
     */
    public function setDistrictOrCounty($district_or_county)
    {
        $this->container['district_or_county'] = $district_or_county;

        return $this;
    }

    /**
     * Gets state_or_region.
     *
     * @return string
     */
    public function getStateOrRegion()
    {
        return $this->container['state_or_region'];
    }

    /**
     * Sets state_or_region.
     *
     * @param string $state_or_region the state or region where the person, business or institution is located
     *
     * @return $this
     */
    public function setStateOrRegion($state_or_region)
    {
        $this->container['state_or_region'] = $state_or_region;

        return $this;
    }

    /**
     * Gets postal_code.
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postal_code'];
    }

    /**
     * Sets postal_code.
     *
     * @param string $postal_code the postal code of the address
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
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code.
     *
     * @param string $country_code The two digit country code. In ISO 3166-1 alpha-2 format.
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
     * @return string
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone.
     *
     * @param string $phone the phone number of the person, business, or institution located at the address
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
