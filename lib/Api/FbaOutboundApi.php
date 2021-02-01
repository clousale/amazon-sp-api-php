<?php
/**
 * FbaOutboundApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 */

namespace ClouSale\AmazonSellingPartnerAPI\Api;

use ClouSale\AmazonSellingPartnerAPI\ApiException;
use ClouSale\AmazonSellingPartnerAPI\Configuration;
use ClouSale\AmazonSellingPartnerAPI\HeaderSelector;
use ClouSale\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CancelFulfillmentOrderResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CreateFulfillmentOrderResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CreateFulfillmentReturnResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFeatureInventoryResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFeatureSkuResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFeaturesResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFulfillmentOrderResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFulfillmentPreviewResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetPackageTrackingDetailsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ListAllFulfillmentOrdersResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ListReturnReasonCodesResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\UpdateFulfillmentOrderRequest;
use ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\UpdateFulfillmentOrderResponse;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * FbaOutboundApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FbaOutboundApi
{
    use SellingPartnerApiRequest;

    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    public function __construct(Configuration $config)
    {
        $this->client = new Client();
        $this->config = $config;
        $this->headerSelector = new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation cancelFulfillmentOrder.
     *
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CancelFulfillmentOrderResponse
     */
    public function cancelFulfillmentOrder($seller_fulfillment_order_id)
    {
        list($response) = $this->cancelFulfillmentOrderWithHttpInfo($seller_fulfillment_order_id);

        return $response;
    }

    /**
     * Operation cancelFulfillmentOrderWithHttpInfo.
     *
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CancelFulfillmentOrderResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function cancelFulfillmentOrderWithHttpInfo($seller_fulfillment_order_id)
    {
        $request = $this->cancelFulfillmentOrderRequest($seller_fulfillment_order_id);

        return $this->sendRequest($request, CancelFulfillmentOrderResponse::class);
    }

    /**
     * Operation cancelFulfillmentOrderAsync.
     *
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelFulfillmentOrderAsync($seller_fulfillment_order_id)
    {
        return $this->cancelFulfillmentOrderAsyncWithHttpInfo($seller_fulfillment_order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation cancelFulfillmentOrderAsyncWithHttpInfo.
     *
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function cancelFulfillmentOrderAsyncWithHttpInfo($seller_fulfillment_order_id)
    {
        $request = $this->cancelFulfillmentOrderRequest($seller_fulfillment_order_id);

        return $this->sendRequestAsync($request, CancelFulfillmentOrderResponse::class);
    }

    /**
     * Create request for operation 'cancelFulfillmentOrder'.
     *
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function cancelFulfillmentOrderRequest($seller_fulfillment_order_id)
    {
        // verify the required parameter 'seller_fulfillment_order_id' is set
        if (null === $seller_fulfillment_order_id || (is_array($seller_fulfillment_order_id) && 0 === count($seller_fulfillment_order_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $seller_fulfillment_order_id when calling cancelFulfillmentOrder');
        }

        $resourcePath = '/fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}/cancel';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $seller_fulfillment_order_id) {
            $resourcePath = str_replace(
                '{'.'sellerFulfillmentOrderId'.'}',
                ObjectSerializer::toPathValue($seller_fulfillment_order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }

    /**
     * Operation createFulfillmentOrder.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CreateFulfillmentOrderRequest $body body (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CreateFulfillmentOrderResponse
     */
    public function createFulfillmentOrder($body)
    {
        list($response) = $this->createFulfillmentOrderWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation createFulfillmentOrderWithHttpInfo.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CreateFulfillmentOrderRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CreateFulfillmentOrderResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createFulfillmentOrderWithHttpInfo($body)
    {
        $request = $this->createFulfillmentOrderRequest($body);

        return $this->sendRequest($request, CreateFulfillmentOrderResponse::class);
    }

    /**
     * Operation createFulfillmentOrderAsync.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CreateFulfillmentOrderRequest $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFulfillmentOrderAsync($body)
    {
        return $this->createFulfillmentOrderAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createFulfillmentOrderAsyncWithHttpInfo.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CreateFulfillmentOrderRequest $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFulfillmentOrderAsyncWithHttpInfo($body)
    {
        $request = $this->createFulfillmentOrderRequest($body);

        return $this->sendRequestAsync($request, CreateFulfillmentOrderResponse::class);
    }

    /**
     * Create request for operation 'createFulfillmentOrder'.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CreateFulfillmentOrderRequest $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createFulfillmentOrderRequest($body)
    {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createFulfillmentOrder');
        }

        $resourcePath = '/fba/outbound/2020-07-01/fulfillmentOrders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation createFulfillmentReturn.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CreateFulfillmentReturnRequest $body                        body (required)
     * @param string                                                                                      $seller_fulfillment_order_id An identifier assigned by the seller to the fulfillment order at the time it was created. The seller uses their own records to find the correct SellerFulfillmentOrderId value based on the buyer&#x27;s request to return items. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CreateFulfillmentReturnResponse
     */
    public function createFulfillmentReturn($body, $seller_fulfillment_order_id)
    {
        list($response) = $this->createFulfillmentReturnWithHttpInfo($body, $seller_fulfillment_order_id);

        return $response;
    }

    /**
     * Operation createFulfillmentReturnWithHttpInfo.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CreateFulfillmentReturnRequest $body                        (required)
     * @param string                                                                                      $seller_fulfillment_order_id An identifier assigned by the seller to the fulfillment order at the time it was created. The seller uses their own records to find the correct SellerFulfillmentOrderId value based on the buyer&#x27;s request to return items. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CreateFulfillmentReturnResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createFulfillmentReturnWithHttpInfo($body, $seller_fulfillment_order_id)
    {
        $request = $this->createFulfillmentReturnRequest($body, $seller_fulfillment_order_id);

        return $this->sendRequest($request, CreateFulfillmentReturnResponse::class);
    }

    /**
     * Operation createFulfillmentReturnAsync.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CreateFulfillmentReturnRequest $body                        (required)
     * @param string                                                                                      $seller_fulfillment_order_id An identifier assigned by the seller to the fulfillment order at the time it was created. The seller uses their own records to find the correct SellerFulfillmentOrderId value based on the buyer&#x27;s request to return items. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFulfillmentReturnAsync($body, $seller_fulfillment_order_id)
    {
        return $this->createFulfillmentReturnAsyncWithHttpInfo($body, $seller_fulfillment_order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createFulfillmentReturnAsyncWithHttpInfo.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CreateFulfillmentReturnRequest $body                        (required)
     * @param string                                                                                      $seller_fulfillment_order_id An identifier assigned by the seller to the fulfillment order at the time it was created. The seller uses their own records to find the correct SellerFulfillmentOrderId value based on the buyer&#x27;s request to return items. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createFulfillmentReturnAsyncWithHttpInfo($body, $seller_fulfillment_order_id)
    {
        $request = $this->createFulfillmentReturnRequest($body, $seller_fulfillment_order_id);

        return $this->sendRequestAsync($request, CreateFulfillmentReturnResponse::class);
    }

    /**
     * Create request for operation 'createFulfillmentReturn'.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\CreateFulfillmentReturnRequest $body                        (required)
     * @param string                                                                                      $seller_fulfillment_order_id An identifier assigned by the seller to the fulfillment order at the time it was created. The seller uses their own records to find the correct SellerFulfillmentOrderId value based on the buyer&#x27;s request to return items. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createFulfillmentReturnRequest($body, $seller_fulfillment_order_id)
    {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createFulfillmentReturn');
        }
        // verify the required parameter 'seller_fulfillment_order_id' is set
        if (null === $seller_fulfillment_order_id || (is_array($seller_fulfillment_order_id) && 0 === count($seller_fulfillment_order_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $seller_fulfillment_order_id when calling createFulfillmentReturn');
        }

        $resourcePath = '/fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}/return';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        // path params
        if (null !== $seller_fulfillment_order_id) {
            $resourcePath = str_replace(
                '{'.'sellerFulfillmentOrderId'.'}',
                ObjectSerializer::toPathValue($seller_fulfillment_order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }

    /**
     * Operation getFeatureInventory.
     *
     * @param string $marketplace_id The marketplace for which to return a list of the inventory that is eligible for the specified feature. (required)
     * @param string $feature_name   The name of the feature for which to return a list of eligible inventory. (required)
     * @param string $next_token     A string token returned in the response to your previous request that is used to return the next response page. A value of null will return the first page. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFeatureInventoryResponse
     */
    public function getFeatureInventory($marketplace_id, $feature_name, $next_token = null)
    {
        list($response) = $this->getFeatureInventoryWithHttpInfo($marketplace_id, $feature_name, $next_token);

        return $response;
    }

    /**
     * Operation getFeatureInventoryWithHttpInfo.
     *
     * @param string $marketplace_id The marketplace for which to return a list of the inventory that is eligible for the specified feature. (required)
     * @param string $feature_name   The name of the feature for which to return a list of eligible inventory. (required)
     * @param string $next_token     A string token returned in the response to your previous request that is used to return the next response page. A value of null will return the first page. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFeatureInventoryResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFeatureInventoryWithHttpInfo($marketplace_id, $feature_name, $next_token = null)
    {
        $request = $this->getFeatureInventoryRequest($marketplace_id, $feature_name, $next_token);

        return $this->sendRequest($request, GetFeatureInventoryResponse::class);
    }

    /**
     * Operation getFeatureInventoryAsync.
     *
     * @param string $marketplace_id The marketplace for which to return a list of the inventory that is eligible for the specified feature. (required)
     * @param string $feature_name   The name of the feature for which to return a list of eligible inventory. (required)
     * @param string $next_token     A string token returned in the response to your previous request that is used to return the next response page. A value of null will return the first page. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeatureInventoryAsync($marketplace_id, $feature_name, $next_token = null)
    {
        return $this->getFeatureInventoryAsyncWithHttpInfo($marketplace_id, $feature_name, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFeatureInventoryAsyncWithHttpInfo.
     *
     * @param string $marketplace_id The marketplace for which to return a list of the inventory that is eligible for the specified feature. (required)
     * @param string $feature_name   The name of the feature for which to return a list of eligible inventory. (required)
     * @param string $next_token     A string token returned in the response to your previous request that is used to return the next response page. A value of null will return the first page. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeatureInventoryAsyncWithHttpInfo($marketplace_id, $feature_name, $next_token = null)
    {
        $request = $this->getFeatureInventoryRequest($marketplace_id, $feature_name, $next_token);

        return $this->sendRequestAsync($request, GetFeatureInventoryResponse::class);
    }

    /**
     * Create request for operation 'getFeatureInventory'.
     *
     * @param string $marketplace_id The marketplace for which to return a list of the inventory that is eligible for the specified feature. (required)
     * @param string $feature_name   The name of the feature for which to return a list of eligible inventory. (required)
     * @param string $next_token     A string token returned in the response to your previous request that is used to return the next response page. A value of null will return the first page. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFeatureInventoryRequest($marketplace_id, $feature_name, $next_token = null)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplace_id || (is_array($marketplace_id) && 0 === count($marketplace_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_id when calling getFeatureInventory');
        }
        // verify the required parameter 'feature_name' is set
        if (null === $feature_name || (is_array($feature_name) && 0 === count($feature_name))) {
            throw new \InvalidArgumentException('Missing the required parameter $feature_name when calling getFeatureInventory');
        }

        $resourcePath = '/fba/outbound/2020-07-01/features/inventory/{featureName}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplace_id) {
            $queryParams['marketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id);
        }
        // query params
        if (null !== $next_token) {
            $queryParams['nextToken'] = ObjectSerializer::toQueryValue($next_token);
        }

        // path params
        if (null !== $feature_name) {
            $resourcePath = str_replace(
                '{'.'featureName'.'}',
                ObjectSerializer::toPathValue($feature_name),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getFeatureSKU.
     *
     * @param string $marketplace_id The marketplace for which to return the count. (required)
     * @param string $feature_name   The name of the feature. (required)
     * @param string $seller_sku     Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFeatureSkuResponse
     */
    public function getFeatureSKU($marketplace_id, $feature_name, $seller_sku)
    {
        list($response) = $this->getFeatureSKUWithHttpInfo($marketplace_id, $feature_name, $seller_sku);

        return $response;
    }

    /**
     * Operation getFeatureSKUWithHttpInfo.
     *
     * @param string $marketplace_id The marketplace for which to return the count. (required)
     * @param string $feature_name   The name of the feature. (required)
     * @param string $seller_sku     Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFeatureSkuResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFeatureSKUWithHttpInfo($marketplace_id, $feature_name, $seller_sku)
    {
        $request = $this->getFeatureSKURequest($marketplace_id, $feature_name, $seller_sku);

        return $this->sendRequest($request, GetFeatureSkuResponse::class);
    }

    /**
     * Operation getFeatureSKUAsync.
     *
     * @param string $marketplace_id The marketplace for which to return the count. (required)
     * @param string $feature_name   The name of the feature. (required)
     * @param string $seller_sku     Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeatureSKUAsync($marketplace_id, $feature_name, $seller_sku)
    {
        return $this->getFeatureSKUAsyncWithHttpInfo($marketplace_id, $feature_name, $seller_sku)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFeatureSKUAsyncWithHttpInfo.
     *
     * @param string $marketplace_id The marketplace for which to return the count. (required)
     * @param string $feature_name   The name of the feature. (required)
     * @param string $seller_sku     Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeatureSKUAsyncWithHttpInfo($marketplace_id, $feature_name, $seller_sku)
    {
        $request = $this->getFeatureSKURequest($marketplace_id, $feature_name, $seller_sku);

        return $this->sendRequestAsync($request, GetFeatureSkuResponse::class);
    }

    /**
     * Create request for operation 'getFeatureSKU'.
     *
     * @param string $marketplace_id The marketplace for which to return the count. (required)
     * @param string $feature_name   The name of the feature. (required)
     * @param string $seller_sku     Used to identify an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFeatureSKURequest($marketplace_id, $feature_name, $seller_sku)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplace_id || (is_array($marketplace_id) && 0 === count($marketplace_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_id when calling getFeatureSKU');
        }
        // verify the required parameter 'feature_name' is set
        if (null === $feature_name || (is_array($feature_name) && 0 === count($feature_name))) {
            throw new \InvalidArgumentException('Missing the required parameter $feature_name when calling getFeatureSKU');
        }
        // verify the required parameter 'seller_sku' is set
        if (null === $seller_sku || (is_array($seller_sku) && 0 === count($seller_sku))) {
            throw new \InvalidArgumentException('Missing the required parameter $seller_sku when calling getFeatureSKU');
        }

        $resourcePath = '/fba/outbound/2020-07-01/features/inventory/{featureName}/{sellerSku}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplace_id) {
            $queryParams['marketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id);
        }

        // path params
        if (null !== $feature_name) {
            $resourcePath = str_replace(
                '{'.'featureName'.'}',
                ObjectSerializer::toPathValue($feature_name),
                $resourcePath
            );
        }
        // path params
        if (null !== $seller_sku) {
            $resourcePath = str_replace(
                '{'.'sellerSku'.'}',
                ObjectSerializer::toPathValue($seller_sku),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getFeatures.
     *
     * @param string $marketplace_id The marketplace for which to return the list of features. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFeaturesResponse
     */
    public function getFeatures($marketplace_id)
    {
        list($response) = $this->getFeaturesWithHttpInfo($marketplace_id);

        return $response;
    }

    /**
     * Operation getFeaturesWithHttpInfo.
     *
     * @param string $marketplace_id The marketplace for which to return the list of features. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFeaturesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFeaturesWithHttpInfo($marketplace_id)
    {
        $request = $this->getFeaturesRequest($marketplace_id);

        return $this->sendRequest($request, GetFeaturesResponse::class);
    }

    /**
     * Operation getFeaturesAsync.
     *
     * @param string $marketplace_id The marketplace for which to return the list of features. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeaturesAsync($marketplace_id)
    {
        return $this->getFeaturesAsyncWithHttpInfo($marketplace_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFeaturesAsyncWithHttpInfo.
     *
     * @param string $marketplace_id The marketplace for which to return the list of features. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFeaturesAsyncWithHttpInfo($marketplace_id)
    {
        $request = $this->getFeaturesRequest($marketplace_id);

        return $this->sendRequestAsync($request, GetFeaturesResponse::class);
    }

    /**
     * Create request for operation 'getFeatures'.
     *
     * @param string $marketplace_id The marketplace for which to return the list of features. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFeaturesRequest($marketplace_id)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplace_id || (is_array($marketplace_id) && 0 === count($marketplace_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_id when calling getFeatures');
        }

        $resourcePath = '/fba/outbound/2020-07-01/features';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplace_id) {
            $queryParams['marketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getFulfillmentOrder.
     *
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFulfillmentOrderResponse
     */
    public function getFulfillmentOrder($seller_fulfillment_order_id)
    {
        list($response) = $this->getFulfillmentOrderWithHttpInfo($seller_fulfillment_order_id);

        return $response;
    }

    /**
     * Operation getFulfillmentOrderWithHttpInfo.
     *
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFulfillmentOrderResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFulfillmentOrderWithHttpInfo($seller_fulfillment_order_id)
    {
        $request = $this->getFulfillmentOrderRequest($seller_fulfillment_order_id);

        return $this->sendRequest($request, GetFulfillmentOrderResponse::class);
    }

    /**
     * Operation getFulfillmentOrderAsync.
     *
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFulfillmentOrderAsync($seller_fulfillment_order_id)
    {
        return $this->getFulfillmentOrderAsyncWithHttpInfo($seller_fulfillment_order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFulfillmentOrderAsyncWithHttpInfo.
     *
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFulfillmentOrderAsyncWithHttpInfo($seller_fulfillment_order_id)
    {
        $request = $this->getFulfillmentOrderRequest($seller_fulfillment_order_id);

        return $this->sendRequestAsync($request, GetFulfillmentOrderResponse::class);
    }

    /**
     * Create request for operation 'getFulfillmentOrder'.
     *
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFulfillmentOrderRequest($seller_fulfillment_order_id)
    {
        // verify the required parameter 'seller_fulfillment_order_id' is set
        if (null === $seller_fulfillment_order_id || (is_array($seller_fulfillment_order_id) && 0 === count($seller_fulfillment_order_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $seller_fulfillment_order_id when calling getFulfillmentOrder');
        }

        $resourcePath = '/fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $seller_fulfillment_order_id) {
            $resourcePath = str_replace(
                '{'.'sellerFulfillmentOrderId'.'}',
                ObjectSerializer::toPathValue($seller_fulfillment_order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getFulfillmentPreview.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFulfillmentPreviewRequest $body body (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFulfillmentPreviewResponse
     */
    public function getFulfillmentPreview($body)
    {
        list($response) = $this->getFulfillmentPreviewWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation getFulfillmentPreviewWithHttpInfo.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFulfillmentPreviewRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFulfillmentPreviewResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getFulfillmentPreviewWithHttpInfo($body)
    {
        $request = $this->getFulfillmentPreviewRequest($body);

        return $this->sendRequest($request, GetFulfillmentPreviewResponse::class);
    }

    /**
     * Operation getFulfillmentPreviewAsync.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFulfillmentPreviewRequest $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFulfillmentPreviewAsync($body)
    {
        return $this->getFulfillmentPreviewAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getFulfillmentPreviewAsyncWithHttpInfo.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFulfillmentPreviewRequest $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getFulfillmentPreviewAsyncWithHttpInfo($body)
    {
        $request = $this->getFulfillmentPreviewRequest($body);

        return $this->sendRequestAsync($request, GetFulfillmentPreviewResponse::class);
    }

    /**
     * Create request for operation 'getFulfillmentPreview'.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetFulfillmentPreviewRequest $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getFulfillmentPreviewRequest($body)
    {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling getFulfillmentPreview');
        }

        $resourcePath = '/fba/outbound/2020-07-01/fulfillmentOrders/preview';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation getPackageTrackingDetails.
     *
     * @param int $package_number The unencrypted package identifier returned by the getFulfillmentOrder operation. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetPackageTrackingDetailsResponse
     */
    public function getPackageTrackingDetails($package_number)
    {
        list($response) = $this->getPackageTrackingDetailsWithHttpInfo($package_number);

        return $response;
    }

    /**
     * Operation getPackageTrackingDetailsWithHttpInfo.
     *
     * @param int $package_number The unencrypted package identifier returned by the getFulfillmentOrder operation. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\GetPackageTrackingDetailsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPackageTrackingDetailsWithHttpInfo($package_number)
    {
        $request = $this->getPackageTrackingDetailsRequest($package_number);

        return $this->sendRequest($request, GetPackageTrackingDetailsResponse::class);
    }

    /**
     * Operation getPackageTrackingDetailsAsync.
     *
     * @param int $package_number The unencrypted package identifier returned by the getFulfillmentOrder operation. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPackageTrackingDetailsAsync($package_number)
    {
        return $this->getPackageTrackingDetailsAsyncWithHttpInfo($package_number)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPackageTrackingDetailsAsyncWithHttpInfo.
     *
     * @param int $package_number The unencrypted package identifier returned by the getFulfillmentOrder operation. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPackageTrackingDetailsAsyncWithHttpInfo($package_number)
    {
        $request = $this->getPackageTrackingDetailsRequest($package_number);

        return $this->sendRequestAsync($request, GetPackageTrackingDetailsResponse::class);
    }

    /**
     * Create request for operation 'getPackageTrackingDetails'.
     *
     * @param int $package_number The unencrypted package identifier returned by the getFulfillmentOrder operation. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPackageTrackingDetailsRequest($package_number)
    {
        // verify the required parameter 'package_number' is set
        if (null === $package_number || (is_array($package_number) && 0 === count($package_number))) {
            throw new \InvalidArgumentException('Missing the required parameter $package_number when calling getPackageTrackingDetails');
        }

        $resourcePath = '/fba/outbound/2020-07-01/tracking';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $package_number) {
            $queryParams['packageNumber'] = ObjectSerializer::toQueryValue($package_number);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation listAllFulfillmentOrders.
     *
     * @param \DateTime $query_start_date A date used to select fulfillment orders that were last updated after (or at) a specified time. An update is defined as any change in fulfillment order status, including the creation of a new fulfillment order. (optional)
     * @param string    $next_token       A string token returned in the response to your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ListAllFulfillmentOrdersResponse
     */
    public function listAllFulfillmentOrders($query_start_date = null, $next_token = null)
    {
        list($response) = $this->listAllFulfillmentOrdersWithHttpInfo($query_start_date, $next_token);

        return $response;
    }

    /**
     * Operation listAllFulfillmentOrdersWithHttpInfo.
     *
     * @param \DateTime $query_start_date A date used to select fulfillment orders that were last updated after (or at) a specified time. An update is defined as any change in fulfillment order status, including the creation of a new fulfillment order. (optional)
     * @param string    $next_token       A string token returned in the response to your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ListAllFulfillmentOrdersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listAllFulfillmentOrdersWithHttpInfo($query_start_date = null, $next_token = null)
    {
        $request = $this->listAllFulfillmentOrdersRequest($query_start_date, $next_token);

        return $this->sendRequest($request, ListAllFulfillmentOrdersResponse::class);
    }

    /**
     * Operation listAllFulfillmentOrdersAsync.
     *
     * @param \DateTime $query_start_date A date used to select fulfillment orders that were last updated after (or at) a specified time. An update is defined as any change in fulfillment order status, including the creation of a new fulfillment order. (optional)
     * @param string    $next_token       A string token returned in the response to your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAllFulfillmentOrdersAsync($query_start_date = null, $next_token = null)
    {
        return $this->listAllFulfillmentOrdersAsyncWithHttpInfo($query_start_date, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listAllFulfillmentOrdersAsyncWithHttpInfo.
     *
     * @param \DateTime $query_start_date A date used to select fulfillment orders that were last updated after (or at) a specified time. An update is defined as any change in fulfillment order status, including the creation of a new fulfillment order. (optional)
     * @param string    $next_token       A string token returned in the response to your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listAllFulfillmentOrdersAsyncWithHttpInfo($query_start_date = null, $next_token = null)
    {
        $returnType = '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ListAllFulfillmentOrdersResponse';
        $request = $this->listAllFulfillmentOrdersRequest($query_start_date, $next_token);

        return $this->sendRequestAsync($request, ListAllFulfillmentOrdersResponse::class);
    }

    /**
     * Create request for operation 'listAllFulfillmentOrders'.
     *
     * @param \DateTime $query_start_date A date used to select fulfillment orders that were last updated after (or at) a specified time. An update is defined as any change in fulfillment order status, including the creation of a new fulfillment order. (optional)
     * @param string    $next_token       A string token returned in the response to your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listAllFulfillmentOrdersRequest($query_start_date = null, $next_token = null)
    {
        $resourcePath = '/fba/outbound/2020-07-01/fulfillmentOrders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $query_start_date) {
            $queryParams['queryStartDate'] = ObjectSerializer::toQueryValue($query_start_date);
        }
        // query params
        if (null !== $next_token) {
            $queryParams['nextToken'] = ObjectSerializer::toQueryValue($next_token);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation listReturnReasonCodes.
     *
     * @param string $seller_sku                  The seller SKU for which return reason codes are required. (required)
     * @param string $language                    The language that the TranslatedDescription property of the ReasonCodeDetails response object should be translated into. (required)
     * @param string $marketplace_id              The marketplace for which the seller wants return reason codes. (optional)
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. The service uses this value to determine the marketplace for which the seller wants return reason codes. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ListReturnReasonCodesResponse
     */
    public function listReturnReasonCodes($seller_sku, $language, $marketplace_id = null, $seller_fulfillment_order_id = null)
    {
        list($response) = $this->listReturnReasonCodesWithHttpInfo($seller_sku, $language, $marketplace_id, $seller_fulfillment_order_id);

        return $response;
    }

    /**
     * Operation listReturnReasonCodesWithHttpInfo.
     *
     * @param string $seller_sku                  The seller SKU for which return reason codes are required. (required)
     * @param string $language                    The language that the TranslatedDescription property of the ReasonCodeDetails response object should be translated into. (required)
     * @param string $marketplace_id              The marketplace for which the seller wants return reason codes. (optional)
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. The service uses this value to determine the marketplace for which the seller wants return reason codes. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ListReturnReasonCodesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listReturnReasonCodesWithHttpInfo($seller_sku, $language, $marketplace_id = null, $seller_fulfillment_order_id = null)
    {
        $request = $this->listReturnReasonCodesRequest($seller_sku, $language, $marketplace_id, $seller_fulfillment_order_id);

        return $this->sendRequest($request, ListReturnReasonCodesResponse::class);
    }

    /**
     * Operation listReturnReasonCodesAsync.
     *
     * @param string $seller_sku                  The seller SKU for which return reason codes are required. (required)
     * @param string $language                    The language that the TranslatedDescription property of the ReasonCodeDetails response object should be translated into. (required)
     * @param string $marketplace_id              The marketplace for which the seller wants return reason codes. (optional)
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. The service uses this value to determine the marketplace for which the seller wants return reason codes. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listReturnReasonCodesAsync($seller_sku, $language, $marketplace_id = null, $seller_fulfillment_order_id = null)
    {
        return $this->listReturnReasonCodesAsyncWithHttpInfo($seller_sku, $language, $marketplace_id, $seller_fulfillment_order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listReturnReasonCodesAsyncWithHttpInfo.
     *
     * @param string $seller_sku                  The seller SKU for which return reason codes are required. (required)
     * @param string $language                    The language that the TranslatedDescription property of the ReasonCodeDetails response object should be translated into. (required)
     * @param string $marketplace_id              The marketplace for which the seller wants return reason codes. (optional)
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. The service uses this value to determine the marketplace for which the seller wants return reason codes. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listReturnReasonCodesAsyncWithHttpInfo($seller_sku, $language, $marketplace_id = null, $seller_fulfillment_order_id = null)
    {
        $returnType = '\ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\ListReturnReasonCodesResponse';
        $request = $this->listReturnReasonCodesRequest($seller_sku, $language, $marketplace_id, $seller_fulfillment_order_id);

        return $this->sendRequestAsync($request, ListReturnReasonCodesResponse::class);
    }

    /**
     * Create request for operation 'listReturnReasonCodes'.
     *
     * @param string $seller_sku                  The seller SKU for which return reason codes are required. (required)
     * @param string $language                    The language that the TranslatedDescription property of the ReasonCodeDetails response object should be translated into. (required)
     * @param string $marketplace_id              The marketplace for which the seller wants return reason codes. (optional)
     * @param string $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. The service uses this value to determine the marketplace for which the seller wants return reason codes. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listReturnReasonCodesRequest($seller_sku, $language, $marketplace_id = null, $seller_fulfillment_order_id = null)
    {
        // verify the required parameter 'seller_sku' is set
        if (null === $seller_sku || (is_array($seller_sku) && 0 === count($seller_sku))) {
            throw new \InvalidArgumentException('Missing the required parameter $seller_sku when calling listReturnReasonCodes');
        }
        // verify the required parameter 'language' is set
        if (null === $language || (is_array($language) && 0 === count($language))) {
            throw new \InvalidArgumentException('Missing the required parameter $language when calling listReturnReasonCodes');
        }

        $resourcePath = '/fba/outbound/2020-07-01/returnReasonCodes';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $seller_sku) {
            $queryParams['sellerSku'] = ObjectSerializer::toQueryValue($seller_sku);
        }
        // query params
        if (null !== $marketplace_id) {
            $queryParams['marketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id);
        }
        // query params
        if (null !== $seller_fulfillment_order_id) {
            $queryParams['sellerFulfillmentOrderId'] = ObjectSerializer::toQueryValue($seller_fulfillment_order_id);
        }
        // query params
        if (null !== $language) {
            $queryParams['language'] = ObjectSerializer::toQueryValue($language);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation updateFulfillmentOrder.
     *
     * @param UpdateFulfillmentOrderRequest $body                        body (required)
     * @param string                        $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return UpdateFulfillmentOrderResponse
     */
    public function updateFulfillmentOrder($body, $seller_fulfillment_order_id)
    {
        list($response) = $this->updateFulfillmentOrderWithHttpInfo($body, $seller_fulfillment_order_id);

        return $response;
    }

    /**
     * Operation updateFulfillmentOrderWithHttpInfo.
     *
     * @param UpdateFulfillmentOrderRequest $body                        (required)
     * @param string                        $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws \InvalidArgumentException
     * @throws ApiException              on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound\UpdateFulfillmentOrderResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateFulfillmentOrderWithHttpInfo($body, $seller_fulfillment_order_id)
    {
        $request = $this->updateFulfillmentOrderRequest($body, $seller_fulfillment_order_id);

        return $this->sendRequest($request, UpdateFulfillmentOrderResponse::class);
    }

    /**
     * Operation updateFulfillmentOrderAsync.
     *
     * @param UpdateFulfillmentOrderRequest $body                        (required)
     * @param string                        $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateFulfillmentOrderAsync($body, $seller_fulfillment_order_id)
    {
        return $this->updateFulfillmentOrderAsyncWithHttpInfo($body, $seller_fulfillment_order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateFulfillmentOrderAsyncWithHttpInfo.
     *
     * @param UpdateFulfillmentOrderRequest $body                        (required)
     * @param string                        $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateFulfillmentOrderAsyncWithHttpInfo($body, $seller_fulfillment_order_id)
    {
        $request = $this->updateFulfillmentOrderRequest($body, $seller_fulfillment_order_id);

        return $this->sendRequestAsync($request, UpdateFulfillmentOrderResponse::class);
    }

    /**
     * Create request for operation 'updateFulfillmentOrder'.
     *
     * @param UpdateFulfillmentOrderRequest $body                        (required)
     * @param string                        $seller_fulfillment_order_id The identifier assigned to the item by the seller when the fulfillment order was created. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function updateFulfillmentOrderRequest($body, $seller_fulfillment_order_id)
    {
        // verify the required parameter 'body' is set
        if (null === $body || (is_array($body) && 0 === count($body))) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling updateFulfillmentOrder');
        }
        // verify the required parameter 'seller_fulfillment_order_id' is set
        if (null === $seller_fulfillment_order_id || (is_array($seller_fulfillment_order_id) && 0 === count($seller_fulfillment_order_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $seller_fulfillment_order_id when calling updateFulfillmentOrder');
        }

        $resourcePath = '/fba/outbound/2020-07-01/fulfillmentOrders/{sellerFulfillmentOrderId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        // path params
        if (null !== $seller_fulfillment_order_id) {
            $resourcePath = str_replace(
                '{'.'sellerFulfillmentOrderId'.'}',
                ObjectSerializer::toPathValue($seller_fulfillment_order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'PUT', $httpBody);
    }
}
