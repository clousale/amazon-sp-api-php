# FinancialEventGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**financial_event_group_id** | **string** | A unique identifier for the financial event group. | [optional] 
**processing_status** | **string** | The processing status of the financial event group indicates whether the balance of the financial event group is settled.  Possible values:  * Open  * Closed | [optional] 
**fund_transfer_status** | **string** | The status of the fund transfer. | [optional] 
**original_total** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 
**converted_total** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 
**fund_transfer_date** | [**\Swagger\Client\Models\\DateTime**](\DateTime.md) |  | [optional] 
**trace_id** | **string** | The trace identifier used by sellers to look up transactions externally. | [optional] 
**account_tail** | **string** | The account tail of the payment instrument. | [optional] 
**beginning_balance** | [**\Swagger\Client\Models\Currency**](Currency.md) |  | [optional] 
**financial_event_group_start** | [**\Swagger\Client\Models\\DateTime**](\DateTime.md) |  | [optional] 
**financial_event_group_end** | [**\Swagger\Client\Models\\DateTime**](\DateTime.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

