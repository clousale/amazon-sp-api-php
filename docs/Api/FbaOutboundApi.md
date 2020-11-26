# Swagger\Client\FbaOutboundApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelFulfillmentOrder**](FbaOutboundApi.md#cancelfulfillmentorder) | **PUT** /fba/outbound/v0/fulfillmentOrders/{sellerFulfillmentOrderId}/cancel | 
[**createFulfillmentOrder**](FbaOutboundApi.md#createfulfillmentorder) | **POST** /fba/outbound/v0/fulfillmentOrders | 
[**createFulfillmentReturn**](FbaOutboundApi.md#createfulfillmentreturn) | **PUT** /fba/outbound/v0/fulfillmentOrders/{sellerFulfillmentOrderId}/return | 
[**getFulfillmentOrder**](FbaOutboundApi.md#getfulfillmentorder) | **GET** /fba/outbound/v0/fulfillmentOrders/{sellerFulfillmentOrderId} | 
[**getFulfillmentPreview**](FbaOutboundApi.md#getfulfillmentpreview) | **POST** /fba/outbound/v0/fulfillmentOrders/preview | 
[**getPackageTrackingDetails**](FbaOutboundApi.md#getpackagetrackingdetails) | **GET** /fba/outbound/v0/tracking | 
[**listAllFulfillmentOrders**](FbaOutboundApi.md#listallfulfillmentorders) | **GET** /fba/outbound/v0/fulfillmentOrders | 
[**listReturnReasonCodes**](FbaOutboundApi.md#listreturnreasoncodes) | **GET** /fba/outbound/v0/returnReasonCodes | 
[**updateFulfillmentOrder**](FbaOutboundApi.md#updatefulfillmentorder) | **PUT** /fba/outbound/v0/fulfillmentOrders/{sellerFulfillmentOrderId} | 

# **cancelFulfillmentOrder**
> \Swagger\Client\Models\CancelFulfillmentOrderResponse cancelFulfillmentOrder($seller_fulfillment_order_id)



Requests that Amazon stop attempting to fulfill the fulfillment order indicated by the specified order identifier.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country


$apiInstance = new Swagger\Client\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_fulfillment_order_id = "seller_fulfillment_order_id_example"; // string | The identifier assigned to the item by the seller when the fulfillment order was created.

try {
    $result = $apiInstance->cancelFulfillmentOrder($seller_fulfillment_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->cancelFulfillmentOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_fulfillment_order_id** | **string**| The identifier assigned to the item by the seller when the fulfillment order was created. |

### Return type

[**\Swagger\Client\Models\CancelFulfillmentOrderResponse**](../Model/CancelFulfillmentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFulfillmentOrder**
> \Swagger\Client\Models\CreateFulfillmentOrderResponse createFulfillmentOrder($body)



Requests that Amazon ship items from the seller's inventory in Amazon's fulfillment network to a destination address.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country


$apiInstance = new Swagger\Client\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Models\CreateFulfillmentOrderRequest(); // \Swagger\Client\Models\CreateFulfillmentOrderRequest | 

try {
    $result = $apiInstance->createFulfillmentOrder($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->createFulfillmentOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Models\CreateFulfillmentOrderRequest**](../Model/CreateFulfillmentOrderRequest.md)|  |

### Return type

[**\Swagger\Client\Models\CreateFulfillmentOrderResponse**](../Model/CreateFulfillmentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createFulfillmentReturn**
> \Swagger\Client\Models\CreateFulfillmentReturnResponse createFulfillmentReturn($body, $seller_fulfillment_order_id)



Creates a fulfillment return.   

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country


$apiInstance = new Swagger\Client\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Models\CreateFulfillmentReturnRequest(); // \Swagger\Client\Models\CreateFulfillmentReturnRequest | 
$seller_fulfillment_order_id = "seller_fulfillment_order_id_example"; // string | An identifier assigned by the seller to the fulfillment order at the time it was created. The seller uses their own records to find the correct SellerFulfillmentOrderId value based on the buyer's request to return items.

try {
    $result = $apiInstance->createFulfillmentReturn($body, $seller_fulfillment_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->createFulfillmentReturn: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Models\CreateFulfillmentReturnRequest**](../Model/CreateFulfillmentReturnRequest.md)|  |
 **seller_fulfillment_order_id** | **string**| An identifier assigned by the seller to the fulfillment order at the time it was created. The seller uses their own records to find the correct SellerFulfillmentOrderId value based on the buyer&#x27;s request to return items. |

### Return type

[**\Swagger\Client\Models\CreateFulfillmentReturnResponse**](../Model/CreateFulfillmentReturnResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentOrder**
> \Swagger\Client\Models\GetFulfillmentOrderResponse getFulfillmentOrder($seller_fulfillment_order_id)



Returns the fulfillment order indicated by the specified order identifier.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country


$apiInstance = new Swagger\Client\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_fulfillment_order_id = "seller_fulfillment_order_id_example"; // string | The identifier assigned to the item by the seller when the fulfillment order was created.

try {
    $result = $apiInstance->getFulfillmentOrder($seller_fulfillment_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->getFulfillmentOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_fulfillment_order_id** | **string**| The identifier assigned to the item by the seller when the fulfillment order was created. |

### Return type

[**\Swagger\Client\Models\GetFulfillmentOrderResponse**](../Model/GetFulfillmentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFulfillmentPreview**
> \Swagger\Client\Models\GetFulfillmentPreviewResponse getFulfillmentPreview($body)



Returns a list of fulfillment order previews based on shipping criteria that you specify.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country


$apiInstance = new Swagger\Client\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Models\GetFulfillmentPreviewRequest(); // \Swagger\Client\Models\GetFulfillmentPreviewRequest | 

try {
    $result = $apiInstance->getFulfillmentPreview($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->getFulfillmentPreview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Models\GetFulfillmentPreviewRequest**](../Model/GetFulfillmentPreviewRequest.md)|  |

### Return type

[**\Swagger\Client\Models\GetFulfillmentPreviewResponse**](../Model/GetFulfillmentPreviewResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPackageTrackingDetails**
> \Swagger\Client\Models\GetPackageTrackingDetailsResponse getPackageTrackingDetails($package_number)



Returns delivery tracking information for a package in an outbound shipment for a Multi-Channel Fulfillment order.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country


$apiInstance = new Swagger\Client\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$package_number = 56; // int | The unencrypted package identifier returned by the getFulfillmentOrder operation.

try {
    $result = $apiInstance->getPackageTrackingDetails($package_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->getPackageTrackingDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **package_number** | **int**| The unencrypted package identifier returned by the getFulfillmentOrder operation. |

### Return type

[**\Swagger\Client\Models\GetPackageTrackingDetailsResponse**](../Model/GetPackageTrackingDetailsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllFulfillmentOrders**
> \Swagger\Client\Models\ListAllFulfillmentOrdersResponse listAllFulfillmentOrders($query_start_date_time, $fulfillment_method, $next_token)



Returns a list of fulfillment orders fulfilled after (or at) a specified date-time, or indicated by the next token parameter.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country


$apiInstance = new Swagger\Client\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$query_start_date_time = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | A date and time used to select fulfillment orders that were last updated after (or at) a specified time. An update is defined as any change in fulfillment order status, including the creation of a new fulfillment order.
$fulfillment_method = array("fulfillment_method_example"); // string[] | Indicates the intended recipient channel for the order.
$next_token = "next_token_example"; // string | A string token returned in the response to your previous request.

try {
    $result = $apiInstance->listAllFulfillmentOrders($query_start_date_time, $fulfillment_method, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->listAllFulfillmentOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **query_start_date_time** | **\DateTime**| A date and time used to select fulfillment orders that were last updated after (or at) a specified time. An update is defined as any change in fulfillment order status, including the creation of a new fulfillment order. | [optional]
 **fulfillment_method** | [**string[]**](../Model/string.md)| Indicates the intended recipient channel for the order. | [optional]
 **next_token** | **string**| A string token returned in the response to your previous request. | [optional]

### Return type

[**\Swagger\Client\Models\ListAllFulfillmentOrdersResponse**](../Model/ListAllFulfillmentOrdersResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listReturnReasonCodes**
> \Swagger\Client\Models\ListReturnReasonCodesResponse listReturnReasonCodes($seller_sku, $language, $marketplace_id, $seller_fulfillment_order_id)



Returns a list of return reason codes for a seller SKU in a given marketplace.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country


$apiInstance = new Swagger\Client\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$seller_sku = "seller_sku_example"; // string | The seller SKU for which return reason codes are required.
$language = "language_example"; // string | The language that the TranslatedDescription property of the ReasonCodeDetails response object should be translated into.
$marketplace_id = "marketplace_id_example"; // string | The marketplace for which the seller wants return reason codes.
$seller_fulfillment_order_id = "seller_fulfillment_order_id_example"; // string | The identifier assigned to the item by the seller when the fulfillment order was created. The service uses this value to determine the marketplace for which the seller wants return reason codes.

try {
    $result = $apiInstance->listReturnReasonCodes($seller_sku, $language, $marketplace_id, $seller_fulfillment_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->listReturnReasonCodes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **seller_sku** | **string**| The seller SKU for which return reason codes are required. |
 **language** | **string**| The language that the TranslatedDescription property of the ReasonCodeDetails response object should be translated into. |
 **marketplace_id** | **string**| The marketplace for which the seller wants return reason codes. | [optional]
 **seller_fulfillment_order_id** | **string**| The identifier assigned to the item by the seller when the fulfillment order was created. The service uses this value to determine the marketplace for which the seller wants return reason codes. | [optional]

### Return type

[**\Swagger\Client\Models\ListReturnReasonCodesResponse**](../Model/ListReturnReasonCodesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateFulfillmentOrder**
> \Swagger\Client\Models\UpdateFulfillmentOrderResponse updateFulfillmentOrder($body, $seller_fulfillment_order_id)



Updates and/or requests shipment for a fulfillment order with an order hold on it.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2 | 30 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country


$apiInstance = new Swagger\Client\Api\FbaOutboundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Models\UpdateFulfillmentOrderRequest(); // \Swagger\Client\Models\UpdateFulfillmentOrderRequest | 
$seller_fulfillment_order_id = "seller_fulfillment_order_id_example"; // string | The identifier assigned to the item by the seller when the fulfillment order was created.

try {
    $result = $apiInstance->updateFulfillmentOrder($body, $seller_fulfillment_order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FbaOutboundApi->updateFulfillmentOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Models\UpdateFulfillmentOrderRequest**](../Model/UpdateFulfillmentOrderRequest.md)|  |
 **seller_fulfillment_order_id** | **string**| The identifier assigned to the item by the seller when the fulfillment order was created. |

### Return type

[**\Swagger\Client\Models\UpdateFulfillmentOrderResponse**](../Model/UpdateFulfillmentOrderResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

