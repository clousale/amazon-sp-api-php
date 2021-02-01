<?php
/**
 * Poa.
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
 * Poa Class Doc Comment.
 *

 * @description Proof of Appointment (POA) details.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Poa implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Poa';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'appointment_time' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\AppointmentTime',
'technicians' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\Technician[]',
'uploading_technician' => 'string',
'upload_time' => '\DateTime',
'poa_type' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'appointment_time' => null,
'technicians' => null,
'uploading_technician' => null,
'upload_time' => 'date-time',
'poa_type' => null,    ];

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
        'appointment_time' => 'appointmentTime',
'technicians' => 'technicians',
'uploading_technician' => 'uploadingTechnician',
'upload_time' => 'uploadTime',
'poa_type' => 'poaType',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'appointment_time' => 'setAppointmentTime',
'technicians' => 'setTechnicians',
'uploading_technician' => 'setUploadingTechnician',
'upload_time' => 'setUploadTime',
'poa_type' => 'setPoaType',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'appointment_time' => 'getAppointmentTime',
'technicians' => 'getTechnicians',
'uploading_technician' => 'getUploadingTechnician',
'upload_time' => 'getUploadTime',
'poa_type' => 'getPoaType',    ];

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

    const POA_TYPE_NO_SIGNATURE_DUMMY_POS = 'NO_SIGNATURE_DUMMY_POS';
    const POA_TYPE_CUSTOMER_SIGNATURE = 'CUSTOMER_SIGNATURE';
    const POA_TYPE_DUMMY_RECEIPT = 'DUMMY_RECEIPT';
    const POA_TYPE_POA_RECEIPT = 'POA_RECEIPT';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getPoaTypeAllowableValues()
    {
        return [
            self::POA_TYPE_NO_SIGNATURE_DUMMY_POS,
self::POA_TYPE_CUSTOMER_SIGNATURE,
self::POA_TYPE_DUMMY_RECEIPT,
self::POA_TYPE_POA_RECEIPT,        ];
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
        $this->container['appointment_time'] = isset($data['appointment_time']) ? $data['appointment_time'] : null;
        $this->container['technicians'] = isset($data['technicians']) ? $data['technicians'] : null;
        $this->container['uploading_technician'] = isset($data['uploading_technician']) ? $data['uploading_technician'] : null;
        $this->container['upload_time'] = isset($data['upload_time']) ? $data['upload_time'] : null;
        $this->container['poa_type'] = isset($data['poa_type']) ? $data['poa_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPoaTypeAllowableValues();
        if (!is_null($this->container['poa_type']) && !in_array($this->container['poa_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'poa_type', must be one of '%s'",
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
     * Gets appointment_time.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\AppointmentTime
     */
    public function getAppointmentTime()
    {
        return $this->container['appointment_time'];
    }

    /**
     * Sets appointment_time.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\AppointmentTime $appointment_time appointment_time
     *
     * @return $this
     */
    public function setAppointmentTime($appointment_time)
    {
        $this->container['appointment_time'] = $appointment_time;

        return $this;
    }

    /**
     * Gets technicians.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\Technician[]
     */
    public function getTechnicians()
    {
        return $this->container['technicians'];
    }

    /**
     * Sets technicians.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\Technician[] $technicians a list of technicians
     *
     * @return $this
     */
    public function setTechnicians($technicians)
    {
        $this->container['technicians'] = $technicians;

        return $this;
    }

    /**
     * Gets uploading_technician.
     *
     * @return string
     */
    public function getUploadingTechnician()
    {
        return $this->container['uploading_technician'];
    }

    /**
     * Sets uploading_technician.
     *
     * @param string $uploading_technician the identifier of the technician who uploaded the POA
     *
     * @return $this
     */
    public function setUploadingTechnician($uploading_technician)
    {
        $this->container['uploading_technician'] = $uploading_technician;

        return $this;
    }

    /**
     * Gets upload_time.
     *
     * @return \DateTime
     */
    public function getUploadTime()
    {
        return $this->container['upload_time'];
    }

    /**
     * Sets upload_time.
     *
     * @param \DateTime $upload_time the date and time when the POA was uploaded, in ISO 8601 format
     *
     * @return $this
     */
    public function setUploadTime($upload_time)
    {
        $this->container['upload_time'] = $upload_time;

        return $this;
    }

    /**
     * Gets poa_type.
     *
     * @return string
     */
    public function getPoaType()
    {
        return $this->container['poa_type'];
    }

    /**
     * Sets poa_type.
     *
     * @param string $poa_type the type of POA uploaded
     *
     * @return $this
     */
    public function setPoaType($poa_type)
    {
        $allowedValues = $this->getPoaTypeAllowableValues();
        if (!is_null($poa_type) && !in_array($poa_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'poa_type', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['poa_type'] = $poa_type;

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
