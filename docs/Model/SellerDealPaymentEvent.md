# SellerDealPaymentEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posted_date** | [**\Swagger\Client\Models\\DateTime**](\DateTime.md) |  | [optional] 
**deal_id** | **string** | The unique identifier of the deal. | [optional] 
**deal_description** | **string** | The internal description of the deal. | [optional] 
**event_type** | **string** | The type of event: SellerDealComplete. | [optional] 
**fee_type** | **string** | The type of fee: RunLightningDealFee. | [optional] 
**fee_amount** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 
**tax_amount** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 
**total_amount** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

