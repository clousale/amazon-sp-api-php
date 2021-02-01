<?php
/**
 * PartneredLtlDataOutput.
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
 * PartneredLtlDataOutput Class Doc Comment.
 *

 * @description Information returned by Amazon about a Less Than Truckload/Full Truckload (LTL/FTL) shipment by an Amazon-partnered carrier.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PartneredLtlDataOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'PartneredLtlDataOutput';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'contact' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Contact',
'box_count' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\UnsignedIntType',
'seller_freight_class' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\SellerFreightClass',
'freight_ready_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType',
'pallet_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PalletList',
'total_weight' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Weight',
'seller_declared_value' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount',
'amazon_calculated_value' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount',
'preview_pickup_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType',
'preview_delivery_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType',
'preview_freight_class' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\SellerFreightClass',
'amazon_reference_id' => 'string',
'is_bill_of_lading_available' => 'bool',
'partnered_estimate' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredEstimate',
'carrier_name' => 'string',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'contact' => null,
'box_count' => null,
'seller_freight_class' => null,
'freight_ready_date' => null,
'pallet_list' => null,
'total_weight' => null,
'seller_declared_value' => null,
'amazon_calculated_value' => null,
'preview_pickup_date' => null,
'preview_delivery_date' => null,
'preview_freight_class' => null,
'amazon_reference_id' => null,
'is_bill_of_lading_available' => null,
'partnered_estimate' => null,
'carrier_name' => null,    ];

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
        'contact' => 'Contact',
'box_count' => 'BoxCount',
'seller_freight_class' => 'SellerFreightClass',
'freight_ready_date' => 'FreightReadyDate',
'pallet_list' => 'PalletList',
'total_weight' => 'TotalWeight',
'seller_declared_value' => 'SellerDeclaredValue',
'amazon_calculated_value' => 'AmazonCalculatedValue',
'preview_pickup_date' => 'PreviewPickupDate',
'preview_delivery_date' => 'PreviewDeliveryDate',
'preview_freight_class' => 'PreviewFreightClass',
'amazon_reference_id' => 'AmazonReferenceId',
'is_bill_of_lading_available' => 'IsBillOfLadingAvailable',
'partnered_estimate' => 'PartneredEstimate',
'carrier_name' => 'CarrierName',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'contact' => 'setContact',
'box_count' => 'setBoxCount',
'seller_freight_class' => 'setSellerFreightClass',
'freight_ready_date' => 'setFreightReadyDate',
'pallet_list' => 'setPalletList',
'total_weight' => 'setTotalWeight',
'seller_declared_value' => 'setSellerDeclaredValue',
'amazon_calculated_value' => 'setAmazonCalculatedValue',
'preview_pickup_date' => 'setPreviewPickupDate',
'preview_delivery_date' => 'setPreviewDeliveryDate',
'preview_freight_class' => 'setPreviewFreightClass',
'amazon_reference_id' => 'setAmazonReferenceId',
'is_bill_of_lading_available' => 'setIsBillOfLadingAvailable',
'partnered_estimate' => 'setPartneredEstimate',
'carrier_name' => 'setCarrierName',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'contact' => 'getContact',
'box_count' => 'getBoxCount',
'seller_freight_class' => 'getSellerFreightClass',
'freight_ready_date' => 'getFreightReadyDate',
'pallet_list' => 'getPalletList',
'total_weight' => 'getTotalWeight',
'seller_declared_value' => 'getSellerDeclaredValue',
'amazon_calculated_value' => 'getAmazonCalculatedValue',
'preview_pickup_date' => 'getPreviewPickupDate',
'preview_delivery_date' => 'getPreviewDeliveryDate',
'preview_freight_class' => 'getPreviewFreightClass',
'amazon_reference_id' => 'getAmazonReferenceId',
'is_bill_of_lading_available' => 'getIsBillOfLadingAvailable',
'partnered_estimate' => 'getPartneredEstimate',
'carrier_name' => 'getCarrierName',    ];

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
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['box_count'] = isset($data['box_count']) ? $data['box_count'] : null;
        $this->container['seller_freight_class'] = isset($data['seller_freight_class']) ? $data['seller_freight_class'] : null;
        $this->container['freight_ready_date'] = isset($data['freight_ready_date']) ? $data['freight_ready_date'] : null;
        $this->container['pallet_list'] = isset($data['pallet_list']) ? $data['pallet_list'] : null;
        $this->container['total_weight'] = isset($data['total_weight']) ? $data['total_weight'] : null;
        $this->container['seller_declared_value'] = isset($data['seller_declared_value']) ? $data['seller_declared_value'] : null;
        $this->container['amazon_calculated_value'] = isset($data['amazon_calculated_value']) ? $data['amazon_calculated_value'] : null;
        $this->container['preview_pickup_date'] = isset($data['preview_pickup_date']) ? $data['preview_pickup_date'] : null;
        $this->container['preview_delivery_date'] = isset($data['preview_delivery_date']) ? $data['preview_delivery_date'] : null;
        $this->container['preview_freight_class'] = isset($data['preview_freight_class']) ? $data['preview_freight_class'] : null;
        $this->container['amazon_reference_id'] = isset($data['amazon_reference_id']) ? $data['amazon_reference_id'] : null;
        $this->container['is_bill_of_lading_available'] = isset($data['is_bill_of_lading_available']) ? $data['is_bill_of_lading_available'] : null;
        $this->container['partnered_estimate'] = isset($data['partnered_estimate']) ? $data['partnered_estimate'] : null;
        $this->container['carrier_name'] = isset($data['carrier_name']) ? $data['carrier_name'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['contact']) {
            $invalidProperties[] = "'contact' can't be null";
        }
        if (null === $this->container['box_count']) {
            $invalidProperties[] = "'box_count' can't be null";
        }
        if (null === $this->container['freight_ready_date']) {
            $invalidProperties[] = "'freight_ready_date' can't be null";
        }
        if (null === $this->container['pallet_list']) {
            $invalidProperties[] = "'pallet_list' can't be null";
        }
        if (null === $this->container['total_weight']) {
            $invalidProperties[] = "'total_weight' can't be null";
        }
        if (null === $this->container['preview_pickup_date']) {
            $invalidProperties[] = "'preview_pickup_date' can't be null";
        }
        if (null === $this->container['preview_delivery_date']) {
            $invalidProperties[] = "'preview_delivery_date' can't be null";
        }
        if (null === $this->container['preview_freight_class']) {
            $invalidProperties[] = "'preview_freight_class' can't be null";
        }
        if (null === $this->container['amazon_reference_id']) {
            $invalidProperties[] = "'amazon_reference_id' can't be null";
        }
        if (null === $this->container['is_bill_of_lading_available']) {
            $invalidProperties[] = "'is_bill_of_lading_available' can't be null";
        }
        if (null === $this->container['carrier_name']) {
            $invalidProperties[] = "'carrier_name' can't be null";
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
     * Gets contact.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Contact
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Contact $contact contact
     *
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets box_count.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\UnsignedIntType
     */
    public function getBoxCount()
    {
        return $this->container['box_count'];
    }

    /**
     * Sets box_count.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\UnsignedIntType $box_count box_count
     *
     * @return $this
     */
    public function setBoxCount($box_count)
    {
        $this->container['box_count'] = $box_count;

        return $this;
    }

    /**
     * Gets seller_freight_class.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\SellerFreightClass
     */
    public function getSellerFreightClass()
    {
        return $this->container['seller_freight_class'];
    }

    /**
     * Sets seller_freight_class.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\SellerFreightClass $seller_freight_class seller_freight_class
     *
     * @return $this
     */
    public function setSellerFreightClass($seller_freight_class)
    {
        $this->container['seller_freight_class'] = $seller_freight_class;

        return $this;
    }

    /**
     * Gets freight_ready_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType
     */
    public function getFreightReadyDate()
    {
        return $this->container['freight_ready_date'];
    }

    /**
     * Sets freight_ready_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType $freight_ready_date freight_ready_date
     *
     * @return $this
     */
    public function setFreightReadyDate($freight_ready_date)
    {
        $this->container['freight_ready_date'] = $freight_ready_date;

        return $this;
    }

    /**
     * Gets pallet_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PalletList
     */
    public function getPalletList()
    {
        return $this->container['pallet_list'];
    }

    /**
     * Sets pallet_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PalletList $pallet_list pallet_list
     *
     * @return $this
     */
    public function setPalletList($pallet_list)
    {
        $this->container['pallet_list'] = $pallet_list;

        return $this;
    }

    /**
     * Gets total_weight.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Weight
     */
    public function getTotalWeight()
    {
        return $this->container['total_weight'];
    }

    /**
     * Sets total_weight.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Weight $total_weight total_weight
     *
     * @return $this
     */
    public function setTotalWeight($total_weight)
    {
        $this->container['total_weight'] = $total_weight;

        return $this;
    }

    /**
     * Gets seller_declared_value.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount
     */
    public function getSellerDeclaredValue()
    {
        return $this->container['seller_declared_value'];
    }

    /**
     * Sets seller_declared_value.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount $seller_declared_value seller_declared_value
     *
     * @return $this
     */
    public function setSellerDeclaredValue($seller_declared_value)
    {
        $this->container['seller_declared_value'] = $seller_declared_value;

        return $this;
    }

    /**
     * Gets amazon_calculated_value.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount
     */
    public function getAmazonCalculatedValue()
    {
        return $this->container['amazon_calculated_value'];
    }

    /**
     * Sets amazon_calculated_value.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Amount $amazon_calculated_value amazon_calculated_value
     *
     * @return $this
     */
    public function setAmazonCalculatedValue($amazon_calculated_value)
    {
        $this->container['amazon_calculated_value'] = $amazon_calculated_value;

        return $this;
    }

    /**
     * Gets preview_pickup_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType
     */
    public function getPreviewPickupDate()
    {
        return $this->container['preview_pickup_date'];
    }

    /**
     * Sets preview_pickup_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType $preview_pickup_date preview_pickup_date
     *
     * @return $this
     */
    public function setPreviewPickupDate($preview_pickup_date)
    {
        $this->container['preview_pickup_date'] = $preview_pickup_date;

        return $this;
    }

    /**
     * Gets preview_delivery_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType
     */
    public function getPreviewDeliveryDate()
    {
        return $this->container['preview_delivery_date'];
    }

    /**
     * Sets preview_delivery_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType $preview_delivery_date preview_delivery_date
     *
     * @return $this
     */
    public function setPreviewDeliveryDate($preview_delivery_date)
    {
        $this->container['preview_delivery_date'] = $preview_delivery_date;

        return $this;
    }

    /**
     * Gets preview_freight_class.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\SellerFreightClass
     */
    public function getPreviewFreightClass()
    {
        return $this->container['preview_freight_class'];
    }

    /**
     * Sets preview_freight_class.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\SellerFreightClass $preview_freight_class preview_freight_class
     *
     * @return $this
     */
    public function setPreviewFreightClass($preview_freight_class)
    {
        $this->container['preview_freight_class'] = $preview_freight_class;

        return $this;
    }

    /**
     * Gets amazon_reference_id.
     *
     * @return string
     */
    public function getAmazonReferenceId()
    {
        return $this->container['amazon_reference_id'];
    }

    /**
     * Sets amazon_reference_id.
     *
     * @param string $amazon_reference_id a unique identifier created by Amazon that identifies this Amazon-partnered, Less Than Truckload/Full Truckload (LTL/FTL) shipment
     *
     * @return $this
     */
    public function setAmazonReferenceId($amazon_reference_id)
    {
        $this->container['amazon_reference_id'] = $amazon_reference_id;

        return $this;
    }

    /**
     * Gets is_bill_of_lading_available.
     *
     * @return bool
     */
    public function getIsBillOfLadingAvailable()
    {
        return $this->container['is_bill_of_lading_available'];
    }

    /**
     * Sets is_bill_of_lading_available.
     *
     * @param bool $is_bill_of_lading_available indicates whether the bill of lading for the shipment is available
     *
     * @return $this
     */
    public function setIsBillOfLadingAvailable($is_bill_of_lading_available)
    {
        $this->container['is_bill_of_lading_available'] = $is_bill_of_lading_available;

        return $this;
    }

    /**
     * Gets partnered_estimate.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredEstimate
     */
    public function getPartneredEstimate()
    {
        return $this->container['partnered_estimate'];
    }

    /**
     * Sets partnered_estimate.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PartneredEstimate $partnered_estimate partnered_estimate
     *
     * @return $this
     */
    public function setPartneredEstimate($partnered_estimate)
    {
        $this->container['partnered_estimate'] = $partnered_estimate;

        return $this;
    }

    /**
     * Gets carrier_name.
     *
     * @return string
     */
    public function getCarrierName()
    {
        return $this->container['carrier_name'];
    }

    /**
     * Sets carrier_name.
     *
     * @param string $carrier_name the carrier for the inbound shipment
     *
     * @return $this
     */
    public function setCarrierName($carrier_name)
    {
        $this->container['carrier_name'] = $carrier_name;

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
