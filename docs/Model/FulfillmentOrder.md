# FulfillmentOrder

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seller_fulfillment_order_id** | **string** | The fulfillment order identifier submitted with the createFulfillmentOrder operation. | 
**marketplace_id** | **string** | The identifier for the marketplace the fulfillment order is placed against. | 
**displayable_order_id** | **string** | A fulfillment order identifier submitted with the createFulfillmentOrder operation. Displays as the order identifier in recipient-facing materials such as the packing slip. | 
**displayable_order_date_time** | [**\Swagger\Client\Models\Timestamp**](Timestamp.md) |  | 
**displayable_order_comment** | **string** | A text block submitted with the createFulfillmentOrder operation. Displays in recipient-facing materials such as the packing slip. | 
**shipping_speed_category** | [**\Swagger\Client\Models\ShippingSpeedCategory**](ShippingSpeedCategory.md) |  | 
**delivery_window** | [**\Swagger\Client\Models\DeliveryWindow**](DeliveryWindow.md) |  | [optional] 
**destination_address** | [**\Swagger\Client\Models\Address**](Address.md) |  | 
**fulfillment_action** | [**\Swagger\Client\Models\FulfillmentAction**](FulfillmentAction.md) |  | [optional] 
**fulfillment_policy** | [**\Swagger\Client\Models\FulfillmentPolicy**](FulfillmentPolicy.md) |  | [optional] 
**fulfillment_method** | **string** | Indicates the intended recipient channel for the order. | [optional] 
**cod_settings** | [**\Swagger\Client\Models\CODSettings**](CODSettings.md) |  | [optional] 
**received_date_time** | [**\Swagger\Client\Models\Timestamp**](Timestamp.md) |  | 
**fulfillment_order_status** | [**\Swagger\Client\Models\FulfillmentOrderStatus**](FulfillmentOrderStatus.md) |  | 
**status_updated_date_time** | [**\Swagger\Client\Models\Timestamp**](Timestamp.md) |  | 
**notification_email_list** | [**\Swagger\Client\Models\NotificationEmailList**](NotificationEmailList.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

