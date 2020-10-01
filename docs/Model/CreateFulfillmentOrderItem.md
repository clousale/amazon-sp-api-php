# CreateFulfillmentOrderItem

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_sku** | **string** | The seller SKU of the item. | 
**seller_fulfillment_order_item_id** | **string** | A fulfillment order item identifier that the seller creates to track fulfillment order items. Used to disambiguate multiple fulfillment items that have the same seller SKU. For example, the seller might assign different SellerFulfillmentOrderItemId values to two items in a fulfillment order that share the same seller SKU but have different GiftMessage values. | 
**quantity** | [**\Swagger\Client\Models\Quantity**](Quantity.md) |  | 
**gift_message** | **string** | A message to the gift recipient, if applicable. | [optional] 
**displayable_comment** | **string** | Item-specific text that displays in recipient-facing materials such as the outbound shipment packing slip. | [optional] 
**fulfillment_network_sku** | **string** | Amazon&#x27;s fulfillment network SKU of the item. | [optional] 
**per_unit_declared_value** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 
**per_unit_price** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 
**per_unit_tax** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

