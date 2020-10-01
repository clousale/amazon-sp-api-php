# InboundShipmentItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**shipment_id** | **string** | A shipment identifier originally returned by the createInboundShipmentPlan operation. | [optional] 
**seller_sku** | **string** | The seller SKU of the item. | 
**fulfillment_network_sku** | **string** | Amazon&#x27;s fulfillment network SKU of the item. | [optional] 
**quantity_shipped** | [**\Swagger\Client\Models\Quantity**](Quantity.md) |  | 
**quantity_received** | [**\Swagger\Client\Models\Quantity**](Quantity.md) |  | [optional] 
**quantity_in_case** | [**\Swagger\Client\Models\Quantity**](Quantity.md) |  | [optional] 
**release_date** | [**\Swagger\Client\Models\DateStringType**](DateStringType.md) |  | [optional] 
**prep_details_list** | [**\Swagger\Client\Models\PrepDetailsList**](PrepDetailsList.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

