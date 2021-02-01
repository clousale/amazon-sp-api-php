# Amazon Selling Partner API PHP 

This is an API Binding in PHP for the new Amazon Selling Partner API.

This library is based on the output of `swagger-codegen` with the [OpenAPI files provided by Amazon](https://github.com/amzn/selling-partner-api-models/tree/main/models) and has been modified by the contributors.

The purpose of this package is to have an easy way of getting started with the Amazon Selling Partner API through a simple composer package.

# Requirements

- PHP >= 7.3
- cURL Extension
- JSON Extension
- MBString Extension

# Installation

Just require this package via composer:

```
composer require clousale/amazon-sp-api-php
```

# Detailed Documentation

You can find detailed documentation for this PHP Library in the [`docs/Api` directory](https://github.com/clousale/amazon-sp-api-php/tree/master/docs/Api) (Please note: Namespaces and other classes could have been changed)

You can find general information about the Amazon Selling Partner API on [the official Amazon Developer Website](https://developer.amazonservices.com).

# Examples

These are simple examples, just to show you how to get started calling the API.

## IAM Role

For when you entered the IAM Role ARN in your developer profile:

```php
<?php

require_once './vendor/autoload.php';

$options = [
    'refresh_token' => '', // Aztr|...
    'client_id' => '', // App ID from Seller Central, amzn1.sellerapps.app.cfbfac4a-......
    'client_secret' => '', // The corresponding Client Secret
    'region' => \ClouSale\AmazonSellingPartnerAPI\SellingPartnerRegion::$EUROPE, // or NORTH_AMERICA / FAR_EAST
    'access_key' => '', // Access Key of AWS IAM User, for example AKIAABCDJKEHFJDS
    'secret_key' => '', // Secret Key of AWS IAM User
    'endpoint' => \ClouSale\AmazonSellingPartnerAPI\SellingPartnerEndpoint::$EUROPE, // or NORTH_AMERICA / FAR_EAST
    'role_arn' => '', // AWS IAM Role ARN for example: arn:aws:iam::123456789:role/Your-Role-Name
];
$accessToken = \ClouSale\AmazonSellingPartnerAPI\SellingPartnerOAuth::getAccessTokenFromRefreshToken(
    $options['refresh_token'],
    $options['client_id'],
    $options['client_secret']
);
$assumedRole = \ClouSale\AmazonSellingPartnerAPI\AssumeRole::assume(
    $options['region'],
    $options['access_key'],
    $options['secret_key'],
    $options['role_arn'],
);
$config = \ClouSale\AmazonSellingPartnerAPI\Configuration::getDefaultConfiguration();
$config->setHost($options['endpoint']);
$config->setAccessToken($accessToken);
$config->setAccessKey($assumedRole->getAccessKeyId());
$config->setSecretKey($assumedRole->getSecretAccessKey());
$config->setRegion($options['region']);
$config->setSecurityToken($assumedRole->getSessionToken());
$apiInstance = new \ClouSale\AmazonSellingPartnerAPI\Api\CatalogApi($config);
$marketplace_id = 'A1PA6795UKMFR9';
$asin = 'B0002ZFTJA';

$result = $apiInstance->getCatalogItem($marketplace_id, $asin);
echo $result->getPayload()->getAttributeSets()[0]->getTitle(); // Never Gonna Give You Up [Vinyl Single]
```

## IAM User

When you entered the User ARN instead of the Role ARN, please use this example:

```php
<?php

require_once './vendor/autoload.php';

$options = [
    'refresh_token' => '', // Aztr|...
    'client_id' => '', // App ID from Seller Central, amzn1.sellerapps.app.cfbfac4a-......
    'client_secret' => '', // The corresponding Client Secret
    'region' => \ClouSale\AmazonSellingPartnerAPI\SellingPartnerRegion::$EUROPE, // or NORTH_AMERICA / FAR_EAST
    'access_key' => '', // Access Key of AWS IAM User, for example AKIAABCDJKEHFJDS
    'secret_key' => '', // Secret Key of AWS IAM User
    'endpoint' => \ClouSale\AmazonSellingPartnerAPI\SellingPartnerEndpoint::$EUROPE, // or NORTH_AMERICA / FAR_EAST
];
$accessToken = \ClouSale\AmazonSellingPartnerAPI\SellingPartnerOAuth::getAccessTokenFromRefreshToken(
    $options['refresh_token'],
    $options['client_id'],
    $options['client_secret']
);
$config = \ClouSale\AmazonSellingPartnerAPI\Configuration::getDefaultConfiguration();
$config->setHost($options['endpoint']);
$config->setAccessToken($accessToken);
$config->setAccessKey($options['access_key']);
$config->setSecretKey($options['secret_key']);
$config->setRegion($options['region']);
$apiInstance = new \ClouSale\AmazonSellingPartnerAPI\Api\CatalogApi($config);
$marketplace_id = 'A1PA6795UKMFR9';
$asin = 'B0002ZFTJA';

$result = $apiInstance->getCatalogItem($marketplace_id, $asin);
echo $result->getPayload()->getAttributeSets()[0]->getTitle(); // Never Gonna Give You Up [Vinyl Single]
```

# ToDo

- Implement Tests
- Improve documentation

Feature Requests & Pull Requests are very welcome!

# Notes

If you are looking for a complete Repricing & FBA-Reimbursement solution, you might want to consider giving [ClouSale.com](https://www.clousale.com) a shot.

# Thanks

Thanks go out to everybody who added PRs and worked on this package.