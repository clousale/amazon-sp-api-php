# ProductAdsPaymentEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**posted_date** | [**\Swagger\Client\Models\\DateTime**](\DateTime.md) |  | [optional] 
**transaction_type** | **string** | Indicates if the transaction is for a charge or a refund.  Possible values:  * charge - Charge  * refund - Refund | [optional] 
**invoice_id** | **string** | Identifier for the invoice that the transaction appears in. | [optional] 
**base_value** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 
**tax_value** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 
**transaction_value** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

