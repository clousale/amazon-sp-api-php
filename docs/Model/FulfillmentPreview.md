# FulfillmentPreview

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipping_speed_category** | [**\Swagger\Client\Models\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  | 
**scheduled_delivery_info** | [**\Swagger\Client\Models\ScheduledDeliveryInfo**](ScheduledDeliveryInfo.md) |  | [optional] 
**is_fulfillable** | **bool** | When true, this fulfillment order preview is fulfillable. | 
**is_cod_capable** | **bool** | When true, this fulfillment order preview is for COD (Cash On Delivery). | 
**estimated_shipping_weight** | [**\Swagger\Client\Models\Weight**](Weight.md) |  | [optional] 
**estimated_fees** | [**\Swagger\Client\Models\FeeList**](FeeList.md) |  | [optional] 
**fulfillment_preview_shipments** | [**\Swagger\Client\Models\FulfillmentPreviewShipmentList**](FulfillmentPreviewShipmentList.md) |  | [optional] 
**unfulfillable_preview_items** | [**\Swagger\Client\Models\UnfulfillablePreviewItemList**](UnfulfillablePreviewItemList.md) |  | [optional] 
**order_unfulfillable_reasons** | [**\Swagger\Client\Models\StringList**](StringList.md) |  | [optional] 
**marketplace_id** | **string** | The marketplace the fulfillment order is placed against. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

