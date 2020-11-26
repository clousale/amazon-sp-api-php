# Swagger\Client\SellersApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getMarketplaceParticipations**](SellersApi.md#getmarketplaceparticipations) | **GET** /sellers/v1/marketplaceParticipations | 

# **getMarketplaceParticipations**
> \Swagger\Client\Models\GetMarketplaceParticipationsResponse getMarketplaceParticipations()



Returns a list of marketplaces that the seller submitting the request can sell in and information about the seller's participation in those marketplaces.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| .016 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\SellersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getMarketplaceParticipations();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SellersApi->getMarketplaceParticipations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Models\GetMarketplaceParticipationsResponse**](../Model/GetMarketplaceParticipationsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, payload

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

