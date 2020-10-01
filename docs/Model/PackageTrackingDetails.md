# PackageTrackingDetails

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**package_number** | **int** | The package identifier. | 
**tracking_number** | **string** | The tracking number for the package. | [optional] 
**carrier_code** | **string** | The name of the carrier. | [optional] 
**carrier_phone_number** | **string** | The phone number of the carrier. | [optional] 
**carrier_url** | **string** | The URL of the carrier’s website. | [optional] 
**ship_date** | [**\Swagger\Client\Models\Timestamp**](Timestamp.md) |  | [optional] 
**estimated_arrival_date** | [**\Swagger\Client\Models\Timestamp**](Timestamp.md) |  | [optional] 
**ship_to_address** | [**\Swagger\Client\Models\TrackingAddress**](TrackingAddress.md) |  | [optional] 
**current_status** | [**\Swagger\Client\Models\CurrentStatus**](CurrentStatus.md) |  | [optional] 
**signed_for_by** | **string** | The name of the person who signed for the package. | [optional] 
**additional_location_info** | [**\Swagger\Client\Models\AdditionalLocationInfo**](AdditionalLocationInfo.md) |  | [optional] 
**tracking_events** | [**\Swagger\Client\Models\TrackingEventList**](TrackingEventList.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

