# PartneredLtlDataOutput

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contact** | [**\Swagger\Client\Models\Contact**](Contact.md) |  | 
**box_count** | [**\Swagger\Client\Models\UnsignedIntType**](UnsignedIntType.md) |  | 
**seller_freight_class** | [**\Swagger\Client\Models\SellerFreightClass**](SellerFreightClass.md) |  | [optional] 
**freight_ready_date** | [**\Swagger\Client\Models\DateStringType**](DateStringType.md) |  | 
**pallet_list** | [**\Swagger\Client\Models\PalletList**](PalletList.md) |  | 
**total_weight** | [**\Swagger\Client\Models\Weight**](Weight.md) |  | 
**seller_declared_value** | [**\Swagger\Client\Models\Amount**](Amount.md) |  | [optional] 
**amazon_calculated_value** | [**\Swagger\Client\Models\Amount**](Amount.md) |  | [optional] 
**preview_pickup_date** | [**\Swagger\Client\Models\DateStringType**](DateStringType.md) |  | 
**preview_delivery_date** | [**\Swagger\Client\Models\DateStringType**](DateStringType.md) |  | 
**preview_freight_class** | [**\Swagger\Client\Models\SellerFreightClass**](SellerFreightClass.md) |  | 
**amazon_reference_id** | **string** | A unique identifier created by Amazon that identifies this Amazon-partnered, Less Than Truckload/Full Truckload (LTL/FTL) shipment. | 
**is_bill_of_lading_available** | **bool** | Indicates whether the bill of lading for the shipment is available. | 
**partnered_estimate** | [**\Swagger\Client\Models\PartneredEstimate**](PartneredEstimate.md) |  | [optional] 
**carrier_name** | **string** | The carrier for the inbound shipment. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

