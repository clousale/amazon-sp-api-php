<?php
/**
 * InboundShipmentItem.
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
 * InboundShipmentItem Class Doc Comment.
 *

 * @description Item information for an inbound shipment. Submitted with a call to the createInboundShipment or updateInboundShipment operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class InboundShipmentItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'InboundShipmentItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'shipment_id' => 'string',
'seller_sku' => 'string',
'fulfillment_network_sku' => 'string',
'quantity_shipped' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity',
'quantity_received' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity',
'quantity_in_case' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity',
'release_date' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType',
'prep_details_list' => '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepDetailsList',    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'shipment_id' => null,
'seller_sku' => null,
'fulfillment_network_sku' => null,
'quantity_shipped' => null,
'quantity_received' => null,
'quantity_in_case' => null,
'release_date' => null,
'prep_details_list' => null,    ];

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
'seller_sku' => 'SellerSKU',
'fulfillment_network_sku' => 'FulfillmentNetworkSKU',
'quantity_shipped' => 'QuantityShipped',
'quantity_received' => 'QuantityReceived',
'quantity_in_case' => 'QuantityInCase',
'release_date' => 'ReleaseDate',
'prep_details_list' => 'PrepDetailsList',    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'shipment_id' => 'setShipmentId',
'seller_sku' => 'setSellerSku',
'fulfillment_network_sku' => 'setFulfillmentNetworkSku',
'quantity_shipped' => 'setQuantityShipped',
'quantity_received' => 'setQuantityReceived',
'quantity_in_case' => 'setQuantityInCase',
'release_date' => 'setReleaseDate',
'prep_details_list' => 'setPrepDetailsList',    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'shipment_id' => 'getShipmentId',
'seller_sku' => 'getSellerSku',
'fulfillment_network_sku' => 'getFulfillmentNetworkSku',
'quantity_shipped' => 'getQuantityShipped',
'quantity_received' => 'getQuantityReceived',
'quantity_in_case' => 'getQuantityInCase',
'release_date' => 'getReleaseDate',
'prep_details_list' => 'getPrepDetailsList',    ];

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
        $this->container['seller_sku'] = isset($data['seller_sku']) ? $data['seller_sku'] : null;
        $this->container['fulfillment_network_sku'] = isset($data['fulfillment_network_sku']) ? $data['fulfillment_network_sku'] : null;
        $this->container['quantity_shipped'] = isset($data['quantity_shipped']) ? $data['quantity_shipped'] : null;
        $this->container['quantity_received'] = isset($data['quantity_received']) ? $data['quantity_received'] : null;
        $this->container['quantity_in_case'] = isset($data['quantity_in_case']) ? $data['quantity_in_case'] : null;
        $this->container['release_date'] = isset($data['release_date']) ? $data['release_date'] : null;
        $this->container['prep_details_list'] = isset($data['prep_details_list']) ? $data['prep_details_list'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['seller_sku']) {
            $invalidProperties[] = "'seller_sku' can't be null";
        }
        if (null === $this->container['quantity_shipped']) {
            $invalidProperties[] = "'quantity_shipped' can't be null";
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
     * @param string $shipment_id a shipment identifier originally returned by the createInboundShipmentPlan operation
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

        return $this;
    }

    /**
     * Gets seller_sku.
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku.
     *
     * @param string $seller_sku the seller SKU of the item
     *
     * @return $this
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets fulfillment_network_sku.
     *
     * @return string
     */
    public function getFulfillmentNetworkSku()
    {
        return $this->container['fulfillment_network_sku'];
    }

    /**
     * Sets fulfillment_network_sku.
     *
     * @param string $fulfillment_network_sku amazon's fulfillment network SKU of the item
     *
     * @return $this
     */
    public function setFulfillmentNetworkSku($fulfillment_network_sku)
    {
        $this->container['fulfillment_network_sku'] = $fulfillment_network_sku;

        return $this;
    }

    /**
     * Gets quantity_shipped.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity
     */
    public function getQuantityShipped()
    {
        return $this->container['quantity_shipped'];
    }

    /**
     * Sets quantity_shipped.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity $quantity_shipped quantity_shipped
     *
     * @return $this
     */
    public function setQuantityShipped($quantity_shipped)
    {
        $this->container['quantity_shipped'] = $quantity_shipped;

        return $this;
    }

    /**
     * Gets quantity_received.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity
     */
    public function getQuantityReceived()
    {
        return $this->container['quantity_received'];
    }

    /**
     * Sets quantity_received.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity $quantity_received quantity_received
     *
     * @return $this
     */
    public function setQuantityReceived($quantity_received)
    {
        $this->container['quantity_received'] = $quantity_received;

        return $this;
    }

    /**
     * Gets quantity_in_case.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity
     */
    public function getQuantityInCase()
    {
        return $this->container['quantity_in_case'];
    }

    /**
     * Sets quantity_in_case.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\Quantity $quantity_in_case quantity_in_case
     *
     * @return $this
     */
    public function setQuantityInCase($quantity_in_case)
    {
        $this->container['quantity_in_case'] = $quantity_in_case;

        return $this;
    }

    /**
     * Gets release_date.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType
     */
    public function getReleaseDate()
    {
        return $this->container['release_date'];
    }

    /**
     * Sets release_date.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\DateStringType $release_date release_date
     *
     * @return $this
     */
    public function setReleaseDate($release_date)
    {
        $this->container['release_date'] = $release_date;

        return $this;
    }

    /**
     * Gets prep_details_list.
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepDetailsList
     */
    public function getPrepDetailsList()
    {
        return $this->container['prep_details_list'];
    }

    /**
     * Sets prep_details_list.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound\PrepDetailsList $prep_details_list prep_details_list
     *
     * @return $this
     */
    public function setPrepDetailsList($prep_details_list)
    {
        $this->container['prep_details_list'] = $prep_details_list;

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
