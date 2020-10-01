# CreateInboundShipmentPlanRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ship_from_address** | [**\Swagger\Client\Models\Address**](Address.md) |  | 
**label_prep_preference** | [**\Swagger\Client\Models\LabelPrepPreference**](LabelPrepPreference.md) |  | 
**ship_to_country_code** | **string** | The two-character country code for the country where the inbound shipment is to be sent.  Note: Not required. Specifying both ShipToCountryCode and ShipToCountrySubdivisionCode returns an error.   Values:   ShipToCountryCode values for North America:  * CA – Canada  * MX - Mexico  * US - United States  ShipToCountryCode values for MCI sellers in Europe:  * DE – Germany  * ES – Spain  * FR – France  * GB – United Kingdom  * IT – Italy  Default: The country code for the seller&#x27;s home marketplace. | [optional] 
**ship_to_country_subdivision_code** | **string** | The two-character country code, followed by a dash and then up to three characters that represent the subdivision of the country where the inbound shipment is to be sent. For example, \&quot;IN-MH\&quot;. In full ISO 3166-2 format.  Note: Not required. Specifying both ShipToCountryCode and ShipToCountrySubdivisionCode returns an error. | [optional] 
**inbound_shipment_plan_request_items** | [**\Swagger\Client\Models\InboundShipmentPlanRequestItemList**](InboundShipmentPlanRequestItemList.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

