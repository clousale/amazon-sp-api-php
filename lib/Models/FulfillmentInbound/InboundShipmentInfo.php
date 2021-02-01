<?php
/**
 * InboundShipmentInfo.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

use ArrayAccess;
use ClouSale\AmazonSellingPartnerAPI\Models\ModelInterface;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * InboundShipmentInfo Class Doc Comment.
 *

 * @description Information about the seller&#x27;s inbound shipments. Returned by the listInboundShipments operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class InboundShipmentInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'InboundShipmentInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipment_id' => 'string',
'shipment_name' => 'string',
'ship_from_address' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Address',
'destination_fulfillment_center_id' => 'string',
'shipment_status' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ShipmentStatus',
'label_prep_type' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\LabelPrepType',
'are_cases_required' => 'bool',
'confirmed_need_by_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType',
'box_contents_source' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\BoxContentsSource',
'estimated_box_contents_fee' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\BoxContentsFeeDetails',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'shipment_id' => null,
'shipment_name' => null,
'ship_from_address' => null,
'destination_fulfillment_center_id' => null,
'shipment_status' => null,
'label_prep_type' => null,
'are_cases_required' => null,
'confirmed_need_by_date' => null,
'box_contents_source' => null,
'estimated_box_contents_fee' => null,    ];

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
        'shipment_id' => 'ShipmentId',
'shipment_name' => 'ShipmentName',
'ship_from_address' => 'ShipFromAddress',
'destination_fulfillment_center_id' => 'DestinationFulfillmentCenterId',
'shipment_status' => 'ShipmentStatus',
'label_prep_type' => 'LabelPrepType',
'are_cases_required' => 'AreCasesRequired',
'confirmed_need_by_date' => 'ConfirmedNeedByDate',
'box_contents_source' => 'BoxContentsSource',
'estimated_box_contents_fee' => 'EstimatedBoxContentsFee',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_id' => 'setShipmentId',
'shipment_name' => 'setShipmentName',
'ship_from_address' => 'setShipFromAddress',
'destination_fulfillment_center_id' => 'setDestinationFulfillmentCenterId',
'shipment_status' => 'setShipmentStatus',
'label_prep_type' => 'setLabelPrepType',
'are_cases_required' => 'setAreCasesRequired',
'confirmed_need_by_date' => 'setConfirmedNeedByDate',
'box_contents_source' => 'setBoxContentsSource',
'estimated_box_contents_fee' => 'setEstimatedBoxContentsFee',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_id' => 'getShipmentId',
'shipment_name' => 'getShipmentName',
'ship_from_address' => 'getShipFromAddress',
'destination_fulfillment_center_id' => 'getDestinationFulfillmentCenterId',
'shipment_status' => 'getShipmentStatus',
'label_prep_type' => 'getLabelPrepType',
'are_cases_required' => 'getAreCasesRequired',
'confirmed_need_by_date' => 'getConfirmedNeedByDate',
'box_contents_source' => 'getBoxContentsSource',
'estimated_box_contents_fee' => 'getEstimatedBoxContentsFee',    ];

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
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['shipment_name'] = isset($data['shipment_name']) ? $data['shipment_name'] : null;
        $this->container['ship_from_address'] = isset($data['ship_from_address']) ? $data['ship_from_address'] : null;
        $this->container['destination_fulfillment_center_id'] = isset($data['destination_fulfillment_center_id']) ? $data['destination_fulfillment_center_id'] : null;
        $this->container['shipment_status'] = isset($data['shipment_status']) ? $data['shipment_status'] : null;
        $this->container['label_prep_type'] = isset($data['label_prep_type']) ? $data['label_prep_type'] : null;
        $this->container['are_cases_required'] = isset($data['are_cases_required']) ? $data['are_cases_required'] : null;
        $this->container['confirmed_need_by_date'] = isset($data['confirmed_need_by_date']) ? $data['confirmed_need_by_date'] : null;
        $this->container['box_contents_source'] = isset($data['box_contents_source']) ? $data['box_contents_source'] : null;
        $this->container['estimated_box_contents_fee'] = isset($data['estimated_box_contents_fee']) ? $data['estimated_box_contents_fee'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['ship_from_address']) {
            $invalidProperties[] = "'ship_from_address' can't be null";
        }
        if (null === $this->container['are_cases_required']) {
            $invalidProperties[] = "'are_cases_required' can't be null";
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
     * Gets shipment_id.
     *
     * @return string
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id.
     *
     * @param string $shipment_id the shipment identifier submitted in the request
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets shipment_name.
     *
     * @return string
     */
    public function getShipmentName()
    {
        return $this->container['shipment_name'];
    }

    /**
     * Sets shipment_name.
     *
     * @param string $shipment_name the name for the inbound shipment
     *
     * @return $this
     */
    public function setShipmentName($shipment_name)
    {
        $this->container['shipment_name'] = $shipment_name;

        return $this;
    }

    /**
     * Gets ship_from_address.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Address
     */
    public function getShipFromAddress()
    {
        return $this->container['ship_from_address'];
    }

    /**
     * Sets ship_from_address.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Address $ship_from_address ship_from_address
     *
     * @return $this
     */
    public function setShipFromAddress($ship_from_address)
    {
        $this->container['ship_from_address'] = $ship_from_address;

        return $this;
    }

    /**
     * Gets destination_fulfillment_center_id.
     *
     * @return string
     */
    public function getDestinationFulfillmentCenterId()
    {
        return $this->container['destination_fulfillment_center_id'];
    }

    /**
     * Sets destination_fulfillment_center_id.
     *
     * @param string $destination_fulfillment_center_id an Amazon fulfillment center identifier created by Amazon
     *
     * @return $this
     */
    public function setDestinationFulfillmentCenterId($destination_fulfillment_center_id)
    {
        $this->container['destination_fulfillment_center_id'] = $destination_fulfillment_center_id;

        return $this;
    }

    /**
     * Gets shipment_status.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ShipmentStatus
     */
    public function getShipmentStatus()
    {
        return $this->container['shipment_status'];
    }

    /**
     * Sets shipment_status.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ShipmentStatus $shipment_status shipment_status
     *
     * @return $this
     */
    public function setShipmentStatus($shipment_status)
    {
        $this->container['shipment_status'] = $shipment_status;

        return $this;
    }

    /**
     * Gets label_prep_type.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\LabelPrepType
     */
    public function getLabelPrepType()
    {
        return $this->container['label_prep_type'];
    }

    /**
     * Sets label_prep_type.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\LabelPrepType $label_prep_type label_prep_type
     *
     * @return $this
     */
    public function setLabelPrepType($label_prep_type)
    {
        $this->container['label_prep_type'] = $label_prep_type;

        return $this;
    }

    /**
     * Gets are_cases_required.
     *
     * @return bool
     */
    public function getAreCasesRequired()
    {
        return $this->container['are_cases_required'];
    }

    /**
     * Sets are_cases_required.
     *
     * @param bool $are_cases_required Indicates whether or not an inbound shipment contains case-packed boxes. When AreCasesRequired = true for an inbound shipment, all items in the inbound shipment must be case packed.
     *
     * @return $this
     */
    public function setAreCasesRequired($are_cases_required)
    {
        $this->container['are_cases_required'] = $are_cases_required;

        return $this;
    }

    /**
     * Gets confirmed_need_by_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType
     */
    public function getConfirmedNeedByDate()
    {
        return $this->container['confirmed_need_by_date'];
    }

    /**
     * Sets confirmed_need_by_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType $confirmed_need_by_date confirmed_need_by_date
     *
     * @return $this
     */
    public function setConfirmedNeedByDate($confirmed_need_by_date)
    {
        $this->container['confirmed_need_by_date'] = $confirmed_need_by_date;

        return $this;
    }

    /**
     * Gets box_contents_source.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\BoxContentsSource
     */
    public function getBoxContentsSource()
    {
        return $this->container['box_contents_source'];
    }

    /**
     * Sets box_contents_source.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\BoxContentsSource $box_contents_source box_contents_source
     *
     * @return $this
     */
    public function setBoxContentsSource($box_contents_source)
    {
        $this->container['box_contents_source'] = $box_contents_source;

        return $this;
    }

    /**
     * Gets estimated_box_contents_fee.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\BoxContentsFeeDetails
     */
    public function getEstimatedBoxContentsFee()
    {
        return $this->container['estimated_box_contents_fee'];
    }

    /**
     * Sets estimated_box_contents_fee.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\BoxContentsFeeDetails $estimated_box_contents_fee estimated_box_contents_fee
     *
     * @return $this
     */
    public function setEstimatedBoxContentsFee($estimated_box_contents_fee)
    {
        $this->container['estimated_box_contents_fee'] = $estimated_box_contents_fee;

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
