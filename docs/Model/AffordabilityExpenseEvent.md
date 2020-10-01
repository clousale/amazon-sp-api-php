# AffordabilityExpenseEvent

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amazon_order_id** | **string** | An Amazon-defined identifier for an order. | [optional] 
**posted_date** | [**\Swagger\Client\Models\\DateTime**](\DateTime.md) |  | [optional] 
**marketplace_id** | **string** | An encrypted, Amazon-defined marketplace identifier. | [optional] 
**transaction_type** | **string** | Indicates the type of transaction.   Possible values:  * Charge - For an affordability promotion expense.  * Refund - For an affordability promotion expense reversal. | [optional] 
**base_expense** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 
**tax_type_cgst** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | 
**tax_type_sgst** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | 
**tax_type_igst** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | 
**total_expense** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

