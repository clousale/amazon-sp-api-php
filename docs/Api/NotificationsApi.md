# Swagger\Client\NotificationsApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createDestination**](NotificationsApi.md#createdestination) | **POST** /notifications/v1/destinations | 
[**createSubscription**](NotificationsApi.md#createsubscription) | **POST** /notifications/v1/subscriptions/{notificationType} | 
[**deleteDestination**](NotificationsApi.md#deletedestination) | **DELETE** /notifications/v1/destinations/{destinationId} | 
[**deleteSubscriptionById**](NotificationsApi.md#deletesubscriptionbyid) | **DELETE** /notifications/v1/subscriptions/{notificationType}/{subscriptionId} | 
[**getDestination**](NotificationsApi.md#getdestination) | **GET** /notifications/v1/destinations/{destinationId} | 
[**getDestinations**](NotificationsApi.md#getdestinations) | **GET** /notifications/v1/destinations | 
[**getSubscription**](NotificationsApi.md#getsubscription) | **GET** /notifications/v1/subscriptions/{notificationType} | 
[**getSubscriptionById**](NotificationsApi.md#getsubscriptionbyid) | **GET** /notifications/v1/subscriptions/{notificationType}/{subscriptionId} | 

# **createDestination**
> \Swagger\Client\Models\CreateDestinationResponse createDestination($body)



Creates a destination resource to receive notifications. The createDestination API is grantless. For more information, see \"Grantless operations\" in the Selling Partner API Developer Guide.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Models\CreateDestinationRequest(); // \Swagger\Client\Models\CreateDestinationRequest | 

try {
    $result = $apiInstance->createDestination($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->createDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Models\CreateDestinationRequest**](../Model/CreateDestinationRequest.md)|  |

### Return type

[**\Swagger\Client\Models\CreateDestinationResponse**](../Model/CreateDestinationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, Successful Response

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createSubscription**
> \Swagger\Client\Models\CreateSubscriptionResponse createSubscription($body, $notification_type)



Creates a subscription for the specified notification type to be delivered to the specified destination. Before you can subscribe, you must first create the destination by calling the createDestination operation.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Models\CreateSubscriptionRequest(); // \Swagger\Client\Models\CreateSubscriptionRequest | 
$notification_type = "notification_type_example"; // string | The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide.

try {
    $result = $apiInstance->createSubscription($body, $notification_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Models\CreateSubscriptionRequest**](../Model/CreateSubscriptionRequest.md)|  |
 **notification_type** | **string**| The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. |

### Return type

[**\Swagger\Client\Models\CreateSubscriptionResponse**](../Model/CreateSubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json, Successful Response

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteDestination**
> \Swagger\Client\Models\DeleteDestinationResponse deleteDestination($destination_id)



Deletes the destination that you specify. The deleteDestination API is grantless. For more information, see \"Grantless operations\" in the Selling Partner API Developer Guide.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destination_id = "destination_id_example"; // string | The identifier for the destination that you want to delete.

try {
    $result = $apiInstance->deleteDestination($destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->deleteDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destination_id** | **string**| The identifier for the destination that you want to delete. |

### Return type

[**\Swagger\Client\Models\DeleteDestinationResponse**](../Model/DeleteDestinationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, Successful Response

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSubscriptionById**
> \Swagger\Client\Models\DeleteSubscriptionByIdResponse deleteSubscriptionById($subscription_id, $notification_type)



Deletes the subscription indicated by the subscription identifier and notification type that you specify. The subscription identifier can be for any subscription associated with your application. After you successfully call this operation, notifications will stop being sent for the associated subscription. The deleteSubscriptionById API is grantless. For more information, see \"Grantless operations\" in the Selling Partner API Developer Guide.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = "subscription_id_example"; // string | The identifier for the subscription that you want to delete.
$notification_type = "notification_type_example"; // string | The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide.

try {
    $result = $apiInstance->deleteSubscriptionById($subscription_id, $notification_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->deleteSubscriptionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The identifier for the subscription that you want to delete. |
 **notification_type** | **string**| The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. |

### Return type

[**\Swagger\Client\Models\DeleteSubscriptionByIdResponse**](../Model/DeleteSubscriptionByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, Successful Operation Response

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestination**
> \Swagger\Client\Models\GetDestinationResponse getDestination($destination_id)



Returns information about the destination that you specify. The getDestination API is grantless. For more information, see \"Grantless operations\" in the Selling Partner API Developer Guide.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$destination_id = "destination_id_example"; // string | The identifier generated when you created the destination.

try {
    $result = $apiInstance->getDestination($destination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getDestination: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **destination_id** | **string**| The identifier generated when you created the destination. |

### Return type

[**\Swagger\Client\Models\GetDestinationResponse**](../Model/GetDestinationResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, Successful Response

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDestinations**
> \Swagger\Client\Models\GetDestinationsResponse getDestinations()



Returns information about all destinations. The getDestinations API is grantless. For more information, see \"Grantless operations\" in the Selling Partner API Developer Guide.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getDestinations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getDestinations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Models\GetDestinationsResponse**](../Model/GetDestinationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, Successful Response

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscription**
> \Swagger\Client\Models\GetSubscriptionResponse getSubscription($notification_type)



Returns information about subscriptions of the specified notification type. You can use this API to get subscription information when you do not have a subscription identifier.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$notification_type = "notification_type_example"; // string | The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide.

try {
    $result = $apiInstance->getSubscription($notification_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **notification_type** | **string**| The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. |

### Return type

[**\Swagger\Client\Models\GetSubscriptionResponse**](../Model/GetSubscriptionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, Successful Response

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSubscriptionById**
> \Swagger\Client\Models\GetSubscriptionByIdResponse getSubscriptionById($subscription_id, $notification_type)



Returns information about a subscription for the specified notification type. The getSubscriptionById API is grantless. For more information, see \"Grantless operations\" in the Selling Partner API Developer Guide.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 1 | 5 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\NotificationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_id = "subscription_id_example"; // string | The identifier for the subscription that you want to get.
$notification_type = "notification_type_example"; // string | The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide.

try {
    $result = $apiInstance->getSubscriptionById($subscription_id, $notification_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationsApi->getSubscriptionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscription_id** | **string**| The identifier for the subscription that you want to get. |
 **notification_type** | **string**| The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. |

### Return type

[**\Swagger\Client\Models\GetSubscriptionByIdResponse**](../Model/GetSubscriptionByIdResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, Successful Response

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

