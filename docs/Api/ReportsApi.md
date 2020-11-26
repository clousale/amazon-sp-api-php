# Swagger\Client\ReportsApi

All URIs are relative to *https://sellingpartnerapi-na.amazon.com/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelReport**](ReportsApi.md#cancelreport) | **DELETE** /reports/2020-09-04/reports/{reportId} | 
[**cancelReportSchedule**](ReportsApi.md#cancelreportschedule) | **DELETE** /reports/2020-09-04/schedules/{reportScheduleId} | 
[**createReport**](ReportsApi.md#createreport) | **POST** /reports/2020-09-04/reports | 
[**createReportSchedule**](ReportsApi.md#createreportschedule) | **POST** /reports/2020-09-04/schedules | 
[**getReport**](ReportsApi.md#getreport) | **GET** /reports/2020-09-04/reports/{reportId} | 
[**getReportDocument**](ReportsApi.md#getreportdocument) | **GET** /reports/2020-09-04/documents/{reportDocumentId} | 
[**getReportSchedule**](ReportsApi.md#getreportschedule) | **GET** /reports/2020-09-04/schedules/{reportScheduleId} | 
[**getReportSchedules**](ReportsApi.md#getreportschedules) | **GET** /reports/2020-09-04/schedules | 
[**getReports**](ReportsApi.md#getreports) | **GET** /reports/2020-09-04/reports | 

# **cancelReport**
> \Swagger\Client\Models\CancelReportResponse cancelReport($report_id)



Cancels the report that you specify. Only reports with processingStatus=IN_QUEUE can be cancelled. Cancelled reports are returned in subsequent calls to the getReport and getReports operations.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0222 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = "report_id_example"; // string | The identifier for the report. This identifier is unique only in combination with a seller ID.

try {
    $result = $apiInstance->cancelReport($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->cancelReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| The identifier for the report. This identifier is unique only in combination with a seller ID. |

### Return type

[**\Swagger\Client\Models\CancelReportResponse**](../Model/CancelReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelReportSchedule**
> \Swagger\Client\Models\CancelReportScheduleResponse cancelReportSchedule($report_schedule_id)



Cancels the report schedule that you specify.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0222 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_schedule_id = "report_schedule_id_example"; // string | The identifier for the report schedule. This identifier is unique only in combination with a seller ID.

try {
    $result = $apiInstance->cancelReportSchedule($report_schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->cancelReportSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_schedule_id** | **string**| The identifier for the report schedule. This identifier is unique only in combination with a seller ID. |

### Return type

[**\Swagger\Client\Models\CancelReportScheduleResponse**](../Model/CancelReportScheduleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createReport**
> \Swagger\Client\Models\CreateReportResponse createReport($body)



Creates a report.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0167 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Models\CreateReportSpecification(); // \Swagger\Client\Models\CreateReportSpecification | 

try {
    $result = $apiInstance->createReport($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->createReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Models\CreateReportSpecification**](../Model/CreateReportSpecification.md)|  |

### Return type

[**\Swagger\Client\Models\CreateReportResponse**](../Model/CreateReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createReportSchedule**
> \Swagger\Client\Models\CreateReportScheduleResponse createReportSchedule($body)



Creates a report schedule. If a report schedule with the same report type and marketplace IDs already exists, it will be cancelled and replaced with this one.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0222 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Models\CreateReportScheduleSpecification(); // \Swagger\Client\Models\CreateReportScheduleSpecification | 

try {
    $result = $apiInstance->createReportSchedule($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->createReportSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Models\CreateReportScheduleSpecification**](../Model/CreateReportScheduleSpecification.md)|  |

### Return type

[**\Swagger\Client\Models\CreateReportScheduleResponse**](../Model/CreateReportScheduleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReport**
> \Swagger\Client\Models\GetReportResponse getReport($report_id)



Returns report details (including the reportDocumentId, if available) for the report that you specify.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 2.0 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_id = "report_id_example"; // string | The identifier for the report. This identifier is unique only in combination with a seller ID.

try {
    $result = $apiInstance->getReport($report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_id** | **string**| The identifier for the report. This identifier is unique only in combination with a seller ID. |

### Return type

[**\Swagger\Client\Models\GetReportResponse**](../Model/GetReportResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportDocument**
> \Swagger\Client\Models\GetReportDocumentResponse getReportDocument($report_document_id)



Returns the information required for retrieving a report document's contents. This includes a presigned URL for the report document as well as the information required to decrypt the document's contents.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0167 | 15 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_document_id = "report_document_id_example"; // string | The identifier for the report document.

try {
    $result = $apiInstance->getReportDocument($report_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_document_id** | **string**| The identifier for the report document. |

### Return type

[**\Swagger\Client\Models\GetReportDocumentResponse**](../Model/GetReportDocumentResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportSchedule**
> \Swagger\Client\Models\GetReportScheduleResponse getReportSchedule($report_schedule_id)



Returns report schedule details for the report schedule that you specify.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0222 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_schedule_id = "report_schedule_id_example"; // string | The identifier for the report schedule. This identifier is unique only in combination with a seller ID.

try {
    $result = $apiInstance->getReportSchedule($report_schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_schedule_id** | **string**| The identifier for the report schedule. This identifier is unique only in combination with a seller ID. |

### Return type

[**\Swagger\Client\Models\GetReportScheduleResponse**](../Model/GetReportScheduleResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReportSchedules**
> \Swagger\Client\Models\GetReportSchedulesResponse getReportSchedules($report_types)



Returns report schedule details that match the filters that you specify.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0222 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_types = array("report_types_example"); // string[] | A list of report types used to filter report schedules.

try {
    $result = $apiInstance->getReportSchedules($report_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReportSchedules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_types** | [**string[]**](../Model/string.md)| A list of report types used to filter report schedules. |

### Return type

[**\Swagger\Client\Models\GetReportSchedulesResponse**](../Model/GetReportSchedulesResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getReports**
> \Swagger\Client\Models\GetReportsResponse getReports($report_types, $processing_statuses, $marketplace_ids, $page_size, $created_since, $created_until, $next_token)



Returns report details for the reports that match the filters that you specify.  

**Usage Plan:**

| Rate (requests per second) | Burst |
| ---- | ---- |
| 0.0222 | 10 |  For more information, see \"Usage Plans and Rate Limits\" in the Selling Partner API documentation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$config = Swagger\Client\Configuration::getDefaultConfiguration();
$config->setAccessToken('Atza|IwEBxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'); //access token of Selling Partner
$config->setApiKey("accessKey", 'AKIA2xxxxxxxxxxxxx'); // Access Key of IAM
$config->setApiKey("secretKey", '94U4Gi81Tpxxxxxxxxxxxxxxx'); // Secret Key of IAM
$config->setApiKey("region", 'us-east-1'); //region of MarketPlace country

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$report_types = array("report_types_example"); // string[] | A list of report types used to filter reports. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required.
$processing_statuses = array("processing_statuses_example"); // string[] | A list of processing statuses used to filter reports.
$marketplace_ids = array("marketplace_ids_example"); // string[] | A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify.
$page_size = 10; // int | The maximum number of reports to return in a single call.
$created_since = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days.
$created_until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now.
$next_token = "next_token_example"; // string | A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail.

try {
    $result = $apiInstance->getReports($report_types, $processing_statuses, $marketplace_ids, $page_size, $created_since, $created_until, $next_token);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->getReports: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **report_types** | [**string[]**](../Model/string.md)| A list of report types used to filter reports. When reportTypes is provided, the other filter parameters (processingStatuses, marketplaceIds, createdSince, createdUntil) and pageSize may also be provided. Either reportTypes or nextToken is required. | [optional]
 **processing_statuses** | [**string[]**](../Model/string.md)| A list of processing statuses used to filter reports. | [optional]
 **marketplace_ids** | [**string[]**](../Model/string.md)| A list of marketplace identifiers used to filter reports. The reports returned will match at least one of the marketplaces that you specify. | [optional]
 **page_size** | **int**| The maximum number of reports to return in a single call. | [optional] [default to 10]
 **created_since** | **\DateTime**| The earliest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is 90 days ago. Reports are retained for a maximum of 90 days. | [optional]
 **created_until** | **\DateTime**| The latest report creation date and time for reports to include in the response, in ISO 8601 date time format. The default is now. | [optional]
 **next_token** | **string**| A string token returned in the response to your previous request. nextToken is returned when the number of results exceeds the specified pageSize value. To get the next page of results, call the getReports operation and include this token as the only parameter. Specifying nextToken with any other parameters will cause the request to fail. | [optional]

### Return type

[**\Swagger\Client\Models\GetReportsResponse**](../Model/GetReportsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

