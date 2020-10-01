# ServiceJob

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**create_time** | [**\DateTime**](\DateTime.md) | The date and time of the creation of the job, in ISO 8601 format. | [optional] 
**service_job_id** | [**\Swagger\Client\Models\ServiceJobId**](ServiceJobId.md) |  | [optional] 
**service_job_status** | **string** | The status of the service job. | [optional] 
**scope_of_work** | [**\Swagger\Client\Models\ScopeOfWork**](ScopeOfWork.md) |  | [optional] 
**seller** | [**\Swagger\Client\Models\Seller**](Seller.md) |  | [optional] 
**service_job_provider** | [**\Swagger\Client\Models\ServiceJobProvider**](ServiceJobProvider.md) |  | [optional] 
**preferred_appointment_times** | [**\Swagger\Client\Models\AppointmentTime[]**](AppointmentTime.md) | A list of appointment windows preferred by the buyer. Included only if the buyer selected appointment windows when creating the order. | [optional] 
**appointments** | [**\Swagger\Client\Models\Appointment[]**](Appointment.md) | A list of appointments. | [optional] 
**service_order_id** | [**\Swagger\Client\Models\OrderId**](OrderId.md) |  | [optional] 
**marketplace_id** | **string** | The marketplace identifier. | [optional] 
**buyer** | [**\Swagger\Client\Models\Buyer**](Buyer.md) |  | [optional] 
**associated_items** | [**\Swagger\Client\Models\AssociatedItem[]**](AssociatedItem.md) | A list of items associated with the service job. | [optional] 
**service_location** | [**\Swagger\Client\Models\ServiceLocation**](ServiceLocation.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

