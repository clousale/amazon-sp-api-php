<?php
/**
 * FbaInventoryApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for FBA Inventory.
 *
 * The Selling Partner API for FBA Inventory lets you programmatically retrieve information about inventory in Amazon's fulfillment network.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Api;

use ClouSale\AmazonSellingPartnerAPI\Configuration;
use ClouSale\AmazonSellingPartnerAPI\HeaderSelector;
use ClouSale\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\GetInventorySummariesResponse;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;

/**
 * FbaInventoryApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FbaInventoryApi
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
     * Operation getInventorySummaries.
     *
     * @param string    $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param string    $granularity_id   The granularity ID for the inventory aggregation level. (required)
     * @param string[]  $marketplace_ids  The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param bool      $details          true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param \DateTime $start_date_time  A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param string[]  $seller_skus      A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param string    $next_token       String token returned in the response of your previous request. (optional)
     *
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\GetInventorySummariesResponse
     */
    public function getInventorySummaries($granularity_type, $granularity_id, $marketplace_ids, $details = 'false', $start_date_time = null, $seller_skus = null, $next_token = null)
    {
        list($response) = $this->getInventorySummariesWithHttpInfo($granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token);

        return $response;
    }

    /**
     * Operation getInventorySummariesWithHttpInfo.
     *
     * @param string    $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param string    $granularity_id   The granularity ID for the inventory aggregation level. (required)
     * @param string[]  $marketplace_ids  The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param bool      $details          true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param \DateTime $start_date_time  A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param string[]  $seller_skus      A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param string    $next_token       String token returned in the response of your previous request. (optional)
     *
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\FbaInventory\GetInventorySummariesResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getInventorySummariesWithHttpInfo($granularity_type, $granularity_id, $marketplace_ids, $details = 'false', $start_date_time = null, $seller_skus = null, $next_token = null)
    {
        $request = $this->getInventorySummariesRequest($granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token);

        return $this->sendRequest($request, GetInventorySummariesResponse::class);
    }

    /**
     * Operation getInventorySummariesAsync.
     *
     * @param string    $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param string    $granularity_id   The granularity ID for the inventory aggregation level. (required)
     * @param string[]  $marketplace_ids  The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param bool      $details          true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param \DateTime $start_date_time  A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param string[]  $seller_skus      A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param string    $next_token       String token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventorySummariesAsync($granularity_type, $granularity_id, $marketplace_ids, $details = 'false', $start_date_time = null, $seller_skus = null, $next_token = null)
    {
        return $this->getInventorySummariesAsyncWithHttpInfo($granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getInventorySummariesAsyncWithHttpInfo.
     *
     * @param string    $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param string    $granularity_id   The granularity ID for the inventory aggregation level. (required)
     * @param string[]  $marketplace_ids  The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param bool      $details          true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param \DateTime $start_date_time  A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param string[]  $seller_skus      A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param string    $next_token       String token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getInventorySummariesAsyncWithHttpInfo($granularity_type, $granularity_id, $marketplace_ids, $details = 'false', $start_date_time = null, $seller_skus = null, $next_token = null)
    {
        $request = $this->getInventorySummariesRequest($granularity_type, $granularity_id, $marketplace_ids, $details, $start_date_time, $seller_skus, $next_token);

        return $this->sendRequestAsync($request, GetInventorySummariesResponse::class);
    }

    /**
     * Create request for operation 'getInventorySummaries'.
     *
     * @param string    $granularity_type The granularity type for the inventory aggregation level. (required)
     * @param string    $granularity_id   The granularity ID for the inventory aggregation level. (required)
     * @param string[]  $marketplace_ids  The marketplace ID for the marketplace for which to return inventory summaries. (required)
     * @param bool      $details          true to return inventory summaries with additional summarized inventory details and quantities. Otherwise, returns inventory summaries only (default value). (optional, default to false)
     * @param \DateTime $start_date_time  A start date and time in ISO8601 format. If specified, all inventory summaries that have changed since then are returned. You must specify a date and time that is no earlier than 18 months prior to the date and time when you call the API. Note: Changes in inboundWorkingQuantity, inboundShippedQuantity and inboundReceivingQuantity are not detected. (optional)
     * @param string[]  $seller_skus      A list of seller SKUs for which to return inventory summaries. You may specify up to 50 SKUs. (optional)
     * @param string    $next_token       String token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getInventorySummariesRequest($granularity_type, $granularity_id, $marketplace_ids, $details = 'false', $start_date_time = null, $seller_skus = null, $next_token = null)
    {
        // verify the required parameter 'granularity_type' is set
        if (null === $granularity_type || (is_array($granularity_type) && 0 === count($granularity_type))) {
            throw new \InvalidArgumentException('Missing the required parameter $granularity_type when calling getInventorySummaries');
        }
        // verify the required parameter 'granularity_id' is set
        if (null === $granularity_id || (is_array($granularity_id) && 0 === count($granularity_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $granularity_id when calling getInventorySummaries');
        }
        // verify the required parameter 'marketplace_ids' is set
        if (null === $marketplace_ids || (is_array($marketplace_ids) && 0 === count($marketplace_ids))) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_ids when calling getInventorySummaries');
        }

        $resourcePath = '/fba/inventory/v1/summaries';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $details) {
            $queryParams['details'] = ObjectSerializer::toQueryValue($details);
        }
        // query params
        if (null !== $granularity_type) {
            $queryParams['granularityType'] = ObjectSerializer::toQueryValue($granularity_type);
        }
        // query params
        if (null !== $granularity_id) {
            $queryParams['granularityId'] = ObjectSerializer::toQueryValue($granularity_id);
        }
        // query params
        if (null !== $start_date_time) {
            $queryParams['startDateTime'] = ObjectSerializer::toQueryValue($start_date_time);
        }
        // query params
        if (is_array($seller_skus)) {
            $seller_skus = ObjectSerializer::serializeCollection($seller_skus, 'csv', true);
        }
        if (null !== $seller_skus) {
            $queryParams['sellerSkus'] = ObjectSerializer::toQueryValue($seller_skus);
        }
        // query params
        if (null !== $next_token) {
            $queryParams['nextToken'] = ObjectSerializer::toQueryValue($next_token);
        }
        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'csv', true);
        }
        if (null !== $marketplace_ids) {
            $queryParams['marketplaceIds'] = ObjectSerializer::toQueryValue($marketplace_ids);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }
}
