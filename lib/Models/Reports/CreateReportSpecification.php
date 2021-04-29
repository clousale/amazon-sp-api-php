<?php
/**
 * CreateReportSpecification.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Reports.
 *
 * The Selling Partner API for Reports lets you retrieve and manage a variety of reports that can help selling partners manage their businesses.
 *
 * OpenAPI spec version: 2020-09-04
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Reports;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * CreateReportSpecification Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class CreateReportSpecification implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'CreateReportSpecification';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'reportOptions' => '\ClouSale\AmazonSellingPartnerAPI\Models\Reports\ReportOptions',
'reportType' => 'string',
'dataStartTime' => '\DateTime',
'dataEndTime' => '\DateTime',
'marketplaceIds' => 'string[]',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'reportOptions' => null,
'reportType' => null,
'dataStartTime' => 'date-time',
'dataEndTime' => 'date-time',
'marketplaceIds' => null,    ];

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
        'reportOptions' => 'reportOptions',
'reportType' => 'reportType',
'dataStartTime' => 'dataStartTime',
'dataEndTime' => 'dataEndTime',
'marketplaceIds' => 'marketplaceIds',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'reportOptions' => 'setReportOptions',
'reportType' => 'setReportType',
'dataStartTime' => 'setDataStartTime',
'dataEndTime' => 'setDataEndTime',
'marketplaceIds' => 'setMarketplaceIds',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'reportOptions' => 'getReportOptions',
'reportType' => 'getReportType',
'dataStartTime' => 'getDataStartTime',
'dataEndTime' => 'getDataEndTime',
'marketplaceIds' => 'getMarketplaceIds',    ];

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
        $this->container['reportOptions'] = isset($data['reportOptions']) ? $data['reportOptions'] : null;
        $this->container['reportType'] = isset($data['reportType']) ? $data['reportType'] : null;
        $this->container['dataStartTime'] = isset($data['dataStartTime']) ? $data['dataStartTime'] : null;
        $this->container['dataEndTime'] = isset($data['dataEndTime']) ? $data['dataEndTime'] : null;
        $this->container['marketplaceIds'] = isset($data['marketplaceIds']) ? $data['marketplaceIds'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['reportType']) {
            $invalidProperties[] = "'reportType' can't be null";
        }
        if (null === $this->container['marketplaceIds']) {
            $invalidProperties[] = "'marketplaceIds' can't be null";
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
     * Gets reportOptions.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Reports\ReportOptions
     */
    public function getReportOptions()
    {
        return $this->container['reportOptions'];
    }

    /**
     * Sets reportOptions.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Reports\ReportOptions $report_options report_options
     *
     * @return $this
     */
    public function setReportOptions($report_options)
    {
        $this->container['reportOptions'] = $report_options;

        return $this;
    }

    /**
     * Gets reportType.
     *
     * @return string
     */
    public function getReportType()
    {
        return $this->container['reportType'];
    }

    /**
     * Sets reportType.
     *
     * @param string $report_type the report type
     *
     * @return $this
     */
    public function setReportType($report_type)
    {
        $this->container['reportType'] = $report_type;

        return $this;
    }

    /**
     * Gets dataStartTime.
     *
     * @return \DateTime
     */
    public function getDataStartTime()
    {
        return $this->container['dataStartTime'];
    }

    /**
     * Sets dataStartTime.
     *
     * @param \DateTime $data_start_time The start of a date and time range, in ISO 8601 date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this.
     *
     * @return $this
     */
    public function setDataStartTime($data_start_time)
    {
        $this->container['dataStartTime'] = $data_start_time;

        return $this;
    }

    /**
     * Gets dataEndTime.
     *
     * @return \DateTime
     */
    public function getDataEndTime()
    {
        return $this->container['dataEndTime'];
    }

    /**
     * Sets dataEndTime.
     *
     * @param \DateTime $data_end_time The end of a date and time range, in ISO 8601 date time format, used for selecting the data to report. The default is now. The value must be prior to or equal to the current date and time. Not all report types make use of this.
     *
     * @return $this
     */
    public function setDataEndTime($data_end_time)
    {
        $this->container['dataEndTime'] = $data_end_time;

        return $this;
    }

    /**
     * Gets marketplaceIds.
     *
     * @return string[]
     */
    public function getMarketplaceIds()
    {
        return $this->container['marketplaceIds'];
    }

    /**
     * Sets marketplaceIds.
     *
     * @param string[] $marketplace_ids A list of marketplace identifiers. The report document's contents will contain data for all of the specified marketplaces, unless the report type indicates otherwise.
     *
     * @return $this
     */
    public function setMarketplaceIds($marketplace_ids)
    {
        $this->container['marketplaceIds'] = $marketplace_ids;

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
