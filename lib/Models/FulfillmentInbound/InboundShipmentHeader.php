<?php
/**
 * InboundShipmentHeader.
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
 * InboundShipmentHeader Class Doc Comment.
 *

 * @description Inbound shipment information used to create and update inbound shipments.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class InboundShipmentHeader implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'InboundShipmentHeader';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipment_name' => 'string',
'ship_from_address' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Address',
'destination_fulfillment_center_id' => 'string',
'are_cases_required' => 'bool',
'shipment_status' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\ShipmentStatus',
'label_prep_preference' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\LabelPrepPreference',
'intended_box_contents_source' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\IntendedBoxContentsSource',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'shipment_name' => null,
'ship_from_address' => null,
'destination_fulfillment_center_id' => null,
'are_cases_required' => null,
'shipment_status' => null,
'label_prep_preference' => null,
'intended_box_contents_source' => null,    ];

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
        'shipment_name' => 'ShipmentName',
'ship_from_address' => 'ShipFromAddress',
'destination_fulfillment_center_id' => 'DestinationFulfillmentCenterId',
'are_cases_required' => 'AreCasesRequired',
'shipment_status' => 'ShipmentStatus',
'label_prep_preference' => 'LabelPrepPreference',
'intended_box_contents_source' => 'IntendedBoxContentsSource',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_name' => 'setShipmentName',
'ship_from_address' => 'setShipFromAddress',
'destination_fulfillment_center_id' => 'setDestinationFulfillmentCenterId',
'are_cases_required' => 'setAreCasesRequired',
'shipment_status' => 'setShipmentStatus',
'label_prep_preference' => 'setLabelPrepPreference',
'intended_box_contents_source' => 'setIntendedBoxContentsSource',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_name' => 'getShipmentName',
'ship_from_address' => 'getShipFromAddress',
'destination_fulfillment_center_id' => 'getDestinationFulfillmentCenterId',
'are_cases_required' => 'getAreCasesRequired',
'shipment_status' => 'getShipmentStatus',
'label_prep_preference' => 'getLabelPrepPreference',
'intended_box_contents_source' => 'getIntendedBoxContentsSource',    ];

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
        $this->container['shipment_name'] = isset($data['shipment_name']) ? $data['shipment_name'] : null;
        $this->container['ship_from_address'] = isset($data['ship_from_address']) ? $data['ship_from_address'] : null;
        $this->container['destination_fulfillment_center_id'] = isset($data['destination_fulfillment_center_id']) ? $data['destination_fulfillment_center_id'] : null;
        $this->container['are_cases_required'] = isset($data['are_cases_required']) ? $data['are_cases_required'] : null;
        $this->container['shipment_status'] = isset($data['shipment_status']) ? $data['shipment_status'] : null;
        $this->container['label_prep_preference'] = isset($data['label_prep_preference']) ? $data['label_prep_preference'] : null;
        $this->container['intended_box_contents_source'] = isset($data['intended_box_contents_source']) ? $data['intended_box_contents_source'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['shipment_name']) {
            $invalidProperties[] = "'shipment_name' can't be null";
        }
        if (null === $this->container['ship_from_address']) {
            $invalidProperties[] = "'ship_from_address' can't be null";
        }
        if (null === $this->container['destination_fulfillment_center_id']) {
            $invalidProperties[] = "'destination_fulfillment_center_id' can't be null";
        }
        if (null === $this->container['shipment_status']) {
            $invalidProperties[] = "'shipment_status' can't be null";
        }
        if (null === $this->container['label_prep_preference']) {
            $invalidProperties[] = "'label_prep_preference' can't be null";
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
     * @param string $shipment_name The name for the shipment. Use a naming convention that helps distinguish between shipments over time, such as the date the shipment was created.
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
     * @param string $destination_fulfillment_center_id The identifier for the fulfillment center to which the shipment will be shipped. Get this value from the InboundShipmentPlan object in the response returned by the createInboundShipmentPlan operation.
     *
     * @return $this
     */
    public function setDestinationFulfillmentCenterId($destination_fulfillment_center_id)
    {
        $this->container['destination_fulfillment_center_id'] = $destination_fulfillment_center_id;

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
     * @param bool $are_cases_required Indicates whether or not an inbound shipment contains case-packed boxes. Note: A shipment must contain either all case-packed boxes or all individually packed boxes.  Possible values:  true - All boxes in the shipment must be case packed.  false - All boxes in the shipment must be individually packed.  Note: If AreCasesRequired = true for an inbound shipment, then the value of QuantityInCase must be greater than zero for every item in the shipment. Otherwise the service returns an error.
     *
     * @return $this
     */
    public function setAreCasesRequired($are_cases_required)
    {
        $this->container['are_cases_required'] = $are_cases_required;

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
     * Gets label_prep_preference.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\LabelPrepPreference
     */
    public function getLabelPrepPreference()
    {
        return $this->container['label_prep_preference'];
    }

    /**
     * Sets label_prep_preference.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\LabelPrepPreference $label_prep_preference label_prep_preference
     *
     * @return $this
     */
    public function setLabelPrepPreference($label_prep_preference)
    {
        $this->container['label_prep_preference'] = $label_prep_preference;

        return $this;
    }

    /**
     * Gets intended_box_contents_source.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\IntendedBoxContentsSource
     */
    public function getIntendedBoxContentsSource()
    {
        return $this->container['intended_box_contents_source'];
    }

    /**
     * Sets intended_box_contents_source.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\IntendedBoxContentsSource $intended_box_contents_source intended_box_contents_source
     *
     * @return $this
     */
    public function setIntendedBoxContentsSource($intended_box_contents_source)
    {
        $this->container['intended_box_contents_source'] = $intended_box_contents_source;

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
