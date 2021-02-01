<?php
/**
 * Appointment.
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
 * Appointment Class Doc Comment.
 *

 * @description The details of an appointment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Appointment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'Appointment';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'appointment_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\AppointmentId',
'appointment_status' => 'string',
'appointment_time' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\AppointmentTime',
'assigned_technicians' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\Technician[]',
'rescheduled_appointment_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\AppointmentId',
'poa' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\Poa',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'appointment_id' => null,
'appointment_status' => null,
'appointment_time' => null,
'assigned_technicians' => null,
'rescheduled_appointment_id' => null,
'poa' => null,    ];

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
        'appointment_id' => 'appointmentId',
'appointment_status' => 'appointmentStatus',
'appointment_time' => 'appointmentTime',
'assigned_technicians' => 'assignedTechnicians',
'rescheduled_appointment_id' => 'rescheduledAppointmentId',
'poa' => 'poa',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'appointment_id' => 'setAppointmentId',
'appointment_status' => 'setAppointmentStatus',
'appointment_time' => 'setAppointmentTime',
'assigned_technicians' => 'setAssignedTechnicians',
'rescheduled_appointment_id' => 'setRescheduledAppointmentId',
'poa' => 'setPoa',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'appointment_id' => 'getAppointmentId',
'appointment_status' => 'getAppointmentStatus',
'appointment_time' => 'getAppointmentTime',
'assigned_technicians' => 'getAssignedTechnicians',
'rescheduled_appointment_id' => 'getRescheduledAppointmentId',
'poa' => 'getPoa',    ];

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

    const APPOINTMENT_STATUS_ACTIVE = 'ACTIVE';
    const APPOINTMENT_STATUS_CANCELLED = 'CANCELLED';
    const APPOINTMENT_STATUS_COMPLETED = 'COMPLETED';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getAppointmentStatusAllowableValues()
    {
        return [
            self::APPOINTMENT_STATUS_ACTIVE,
self::APPOINTMENT_STATUS_CANCELLED,
self::APPOINTMENT_STATUS_COMPLETED,        ];
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
        $this->container['appointment_id'] = isset($data['appointment_id']) ? $data['appointment_id'] : null;
        $this->container['appointment_status'] = isset($data['appointment_status']) ? $data['appointment_status'] : null;
        $this->container['appointment_time'] = isset($data['appointment_time']) ? $data['appointment_time'] : null;
        $this->container['assigned_technicians'] = isset($data['assigned_technicians']) ? $data['assigned_technicians'] : null;
        $this->container['rescheduled_appointment_id'] = isset($data['rescheduled_appointment_id']) ? $data['rescheduled_appointment_id'] : null;
        $this->container['poa'] = isset($data['poa']) ? $data['poa'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getAppointmentStatusAllowableValues();
        if (!is_null($this->container['appointment_status']) && !in_array($this->container['appointment_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'appointment_status', must be one of '%s'",
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
     * Gets appointment_id.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\AppointmentId
     */
    public function getAppointmentId()
    {
        return $this->container['appointment_id'];
    }

    /**
     * Sets appointment_id.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\AppointmentId $appointment_id appointment_id
     *
     * @return $this
     */
    public function setAppointmentId($appointment_id)
    {
        $this->container['appointment_id'] = $appointment_id;

        return $this;
    }

    /**
     * Gets appointment_status.
     *
     * @return string
     */
    public function getAppointmentStatus()
    {
        return $this->container['appointment_status'];
    }

    /**
     * Sets appointment_status.
     *
     * @param string $appointment_status the status of the appointment
     *
     * @return $this
     */
    public function setAppointmentStatus($appointment_status)
    {
        $allowedValues = $this->getAppointmentStatusAllowableValues();
        if (!is_null($appointment_status) && !in_array($appointment_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'appointment_status', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['appointment_status'] = $appointment_status;

        return $this;
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
     * Gets assigned_technicians.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\Technician[]
     */
    public function getAssignedTechnicians()
    {
        return $this->container['assigned_technicians'];
    }

    /**
     * Sets assigned_technicians.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\Technician[] $assigned_technicians a list of technicians assigned to the service job
     *
     * @return $this
     */
    public function setAssignedTechnicians($assigned_technicians)
    {
        $this->container['assigned_technicians'] = $assigned_technicians;

        return $this;
    }

    /**
     * Gets rescheduled_appointment_id.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\AppointmentId
     */
    public function getRescheduledAppointmentId()
    {
        return $this->container['rescheduled_appointment_id'];
    }

    /**
     * Sets rescheduled_appointment_id.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\AppointmentId $rescheduled_appointment_id rescheduled_appointment_id
     *
     * @return $this
     */
    public function setRescheduledAppointmentId($rescheduled_appointment_id)
    {
        $this->container['rescheduled_appointment_id'] = $rescheduled_appointment_id;

        return $this;
    }

    /**
     * Gets poa.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\Poa
     */
    public function getPoa()
    {
        return $this->container['poa'];
    }

    /**
     * Sets poa.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\Poa $poa poa
     *
     * @return $this
     */
    public function setPoa($poa)
    {
        $this->container['poa'] = $poa;

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
