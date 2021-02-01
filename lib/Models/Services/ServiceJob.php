<?php
/**
 * ServiceJob.
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
 * ServiceJob Class Doc Comment.
 *

 * @description The job details of a service.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ServiceJob implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'ServiceJob';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'create_time' => '\DateTime',
'service_job_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\ServiceJobId',
'service_job_status' => 'string',
'scope_of_work' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\ScopeOfWork',
'seller' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\Seller',
'service_job_provider' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\ServiceJobProvider',
'preferred_appointment_times' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\AppointmentTime[]',
'appointments' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\Appointment[]',
'service_order_id' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\OrderId',
'marketplace_id' => 'string',
'buyer' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\Buyer',
'associated_items' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\AssociatedItem[]',
'service_location' => '\ClouSale\AmazonSellingPartnerAPI\Models\Services\ServiceLocation',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'create_time' => 'date-time',
'service_job_id' => null,
'service_job_status' => null,
'scope_of_work' => null,
'seller' => null,
'service_job_provider' => null,
'preferred_appointment_times' => null,
'appointments' => null,
'service_order_id' => null,
'marketplace_id' => null,
'buyer' => null,
'associated_items' => null,
'service_location' => null,    ];

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
        'create_time' => 'createTime',
'service_job_id' => 'serviceJobId',
'service_job_status' => 'serviceJobStatus',
'scope_of_work' => 'scopeOfWork',
'seller' => 'seller',
'service_job_provider' => 'serviceJobProvider',
'preferred_appointment_times' => 'preferredAppointmentTimes',
'appointments' => 'appointments',
'service_order_id' => 'serviceOrderId',
'marketplace_id' => 'marketplaceId',
'buyer' => 'buyer',
'associated_items' => 'associatedItems',
'service_location' => 'serviceLocation',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'create_time' => 'setCreateTime',
'service_job_id' => 'setServiceJobId',
'service_job_status' => 'setServiceJobStatus',
'scope_of_work' => 'setScopeOfWork',
'seller' => 'setSeller',
'service_job_provider' => 'setServiceJobProvider',
'preferred_appointment_times' => 'setPreferredAppointmentTimes',
'appointments' => 'setAppointments',
'service_order_id' => 'setServiceOrderId',
'marketplace_id' => 'setMarketplaceId',
'buyer' => 'setBuyer',
'associated_items' => 'setAssociatedItems',
'service_location' => 'setServiceLocation',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'create_time' => 'getCreateTime',
'service_job_id' => 'getServiceJobId',
'service_job_status' => 'getServiceJobStatus',
'scope_of_work' => 'getScopeOfWork',
'seller' => 'getSeller',
'service_job_provider' => 'getServiceJobProvider',
'preferred_appointment_times' => 'getPreferredAppointmentTimes',
'appointments' => 'getAppointments',
'service_order_id' => 'getServiceOrderId',
'marketplace_id' => 'getMarketplaceId',
'buyer' => 'getBuyer',
'associated_items' => 'getAssociatedItems',
'service_location' => 'getServiceLocation',    ];

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

    const SERVICE_JOB_STATUS_NOT_SERVICED = 'NOT_SERVICED';
    const SERVICE_JOB_STATUS_CANCELLED = 'CANCELLED';
    const SERVICE_JOB_STATUS_COMPLETED = 'COMPLETED';
    const SERVICE_JOB_STATUS_PENDING_SCHEDULE = 'PENDING_SCHEDULE';
    const SERVICE_JOB_STATUS_NOT_FULFILLABLE = 'NOT_FULFILLABLE';
    const SERVICE_JOB_STATUS_HOLD = 'HOLD';
    const SERVICE_JOB_STATUS_PAYMENT_DECLINED = 'PAYMENT_DECLINED';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getServiceJobStatusAllowableValues()
    {
        return [
            self::SERVICE_JOB_STATUS_NOT_SERVICED,
self::SERVICE_JOB_STATUS_CANCELLED,
self::SERVICE_JOB_STATUS_COMPLETED,
self::SERVICE_JOB_STATUS_PENDING_SCHEDULE,
self::SERVICE_JOB_STATUS_NOT_FULFILLABLE,
self::SERVICE_JOB_STATUS_HOLD,
self::SERVICE_JOB_STATUS_PAYMENT_DECLINED,        ];
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
        $this->container['create_time'] = isset($data['create_time']) ? $data['create_time'] : null;
        $this->container['service_job_id'] = isset($data['service_job_id']) ? $data['service_job_id'] : null;
        $this->container['service_job_status'] = isset($data['service_job_status']) ? $data['service_job_status'] : null;
        $this->container['scope_of_work'] = isset($data['scope_of_work']) ? $data['scope_of_work'] : null;
        $this->container['seller'] = isset($data['seller']) ? $data['seller'] : null;
        $this->container['service_job_provider'] = isset($data['service_job_provider']) ? $data['service_job_provider'] : null;
        $this->container['preferred_appointment_times'] = isset($data['preferred_appointment_times']) ? $data['preferred_appointment_times'] : null;
        $this->container['appointments'] = isset($data['appointments']) ? $data['appointments'] : null;
        $this->container['service_order_id'] = isset($data['service_order_id']) ? $data['service_order_id'] : null;
        $this->container['marketplace_id'] = isset($data['marketplace_id']) ? $data['marketplace_id'] : null;
        $this->container['buyer'] = isset($data['buyer']) ? $data['buyer'] : null;
        $this->container['associated_items'] = isset($data['associated_items']) ? $data['associated_items'] : null;
        $this->container['service_location'] = isset($data['service_location']) ? $data['service_location'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getServiceJobStatusAllowableValues();
        if (!is_null($this->container['service_job_status']) && !in_array($this->container['service_job_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'service_job_status', must be one of '%s'",
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
     * Gets create_time.
     *
     * @return \DateTime
     */
    public function getCreateTime()
    {
        return $this->container['create_time'];
    }

    /**
     * Sets create_time.
     *
     * @param \DateTime $create_time the date and time of the creation of the job, in ISO 8601 format
     *
     * @return $this
     */
    public function setCreateTime($create_time)
    {
        $this->container['create_time'] = $create_time;

        return $this;
    }

    /**
     * Gets service_job_id.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\ServiceJobId
     */
    public function getServiceJobId()
    {
        return $this->container['service_job_id'];
    }

    /**
     * Sets service_job_id.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\ServiceJobId $service_job_id service_job_id
     *
     * @return $this
     */
    public function setServiceJobId($service_job_id)
    {
        $this->container['service_job_id'] = $service_job_id;

        return $this;
    }

    /**
     * Gets service_job_status.
     *
     * @return string
     */
    public function getServiceJobStatus()
    {
        return $this->container['service_job_status'];
    }

    /**
     * Sets service_job_status.
     *
     * @param string $service_job_status the status of the service job
     *
     * @return $this
     */
    public function setServiceJobStatus($service_job_status)
    {
        $allowedValues = $this->getServiceJobStatusAllowableValues();
        if (!is_null($service_job_status) && !in_array($service_job_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'service_job_status', must be one of '%s'", implode("', '", $allowedValues)));
        }
        $this->container['service_job_status'] = $service_job_status;

        return $this;
    }

    /**
     * Gets scope_of_work.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\ScopeOfWork
     */
    public function getScopeOfWork()
    {
        return $this->container['scope_of_work'];
    }

    /**
     * Sets scope_of_work.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\ScopeOfWork $scope_of_work scope_of_work
     *
     * @return $this
     */
    public function setScopeOfWork($scope_of_work)
    {
        $this->container['scope_of_work'] = $scope_of_work;

        return $this;
    }

    /**
     * Gets seller.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\Seller
     */
    public function getSeller()
    {
        return $this->container['seller'];
    }

    /**
     * Sets seller.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\Seller $seller seller
     *
     * @return $this
     */
    public function setSeller($seller)
    {
        $this->container['seller'] = $seller;

        return $this;
    }

    /**
     * Gets service_job_provider.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\ServiceJobProvider
     */
    public function getServiceJobProvider()
    {
        return $this->container['service_job_provider'];
    }

    /**
     * Sets service_job_provider.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\ServiceJobProvider $service_job_provider service_job_provider
     *
     * @return $this
     */
    public function setServiceJobProvider($service_job_provider)
    {
        $this->container['service_job_provider'] = $service_job_provider;

        return $this;
    }

    /**
     * Gets preferred_appointment_times.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\AppointmentTime[]
     */
    public function getPreferredAppointmentTimes()
    {
        return $this->container['preferred_appointment_times'];
    }

    /**
     * Sets preferred_appointment_times.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\AppointmentTime[] $preferred_appointment_times A list of appointment windows preferred by the buyer. Included only if the buyer selected appointment windows when creating the order.
     *
     * @return $this
     */
    public function setPreferredAppointmentTimes($preferred_appointment_times)
    {
        $this->container['preferred_appointment_times'] = $preferred_appointment_times;

        return $this;
    }

    /**
     * Gets appointments.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\Appointment[]
     */
    public function getAppointments()
    {
        return $this->container['appointments'];
    }

    /**
     * Sets appointments.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\Appointment[] $appointments a list of appointments
     *
     * @return $this
     */
    public function setAppointments($appointments)
    {
        $this->container['appointments'] = $appointments;

        return $this;
    }

    /**
     * Gets service_order_id.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\OrderId
     */
    public function getServiceOrderId()
    {
        return $this->container['service_order_id'];
    }

    /**
     * Sets service_order_id.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\OrderId $service_order_id service_order_id
     *
     * @return $this
     */
    public function setServiceOrderId($service_order_id)
    {
        $this->container['service_order_id'] = $service_order_id;

        return $this;
    }

    /**
     * Gets marketplace_id.
     *
     * @return string
     */
    public function getMarketplaceId()
    {
        return $this->container['marketplace_id'];
    }

    /**
     * Sets marketplace_id.
     *
     * @param string $marketplace_id the marketplace identifier
     *
     * @return $this
     */
    public function setMarketplaceId($marketplace_id)
    {
        $this->container['marketplace_id'] = $marketplace_id;

        return $this;
    }

    /**
     * Gets buyer.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\Buyer
     */
    public function getBuyer()
    {
        return $this->container['buyer'];
    }

    /**
     * Sets buyer.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\Buyer $buyer buyer
     *
     * @return $this
     */
    public function setBuyer($buyer)
    {
        $this->container['buyer'] = $buyer;

        return $this;
    }

    /**
     * Gets associated_items.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\AssociatedItem[]
     */
    public function getAssociatedItems()
    {
        return $this->container['associated_items'];
    }

    /**
     * Sets associated_items.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\AssociatedItem[] $associated_items a list of items associated with the service job
     *
     * @return $this
     */
    public function setAssociatedItems($associated_items)
    {
        $this->container['associated_items'] = $associated_items;

        return $this;
    }

    /**
     * Gets service_location.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Services\ServiceLocation
     */
    public function getServiceLocation()
    {
        return $this->container['service_location'];
    }

    /**
     * Sets service_location.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Services\ServiceLocation $service_location service_location
     *
     * @return $this
     */
    public function setServiceLocation($service_location)
    {
        $this->container['service_location'] = $service_location;

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
