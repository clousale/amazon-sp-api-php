<?php
/**
 * ProductPricingApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Api;

use ClouSale\AmazonSellingPartnerAPI\Configuration;
use ClouSale\AmazonSellingPartnerAPI\HeaderSelector;
use ClouSale\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetOffersResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetPricingResponse;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;

/**
 * ProductPricingApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ProductPricingApi
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
     * Operation getCompetitivePricing.
     *
     * @param string   $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string   $item_type      Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. (required)
     * @param string[] $asins          A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus           A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     *
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetPricingResponse
     */
    public function getCompetitivePricing($marketplace_id, $item_type, $asins = null, $skus = null)
    {
        list($response) = $this->getCompetitivePricingWithHttpInfo($marketplace_id, $item_type, $asins, $skus);

        return $response;
    }

    /**
     * Operation getCompetitivePricingWithHttpInfo.
     *
     * @param string   $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string   $item_type      Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. (required)
     * @param string[] $asins          A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus           A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     *
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetPricingResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getCompetitivePricingWithHttpInfo($marketplace_id, $item_type, $asins = null, $skus = null)
    {
        $returnType = '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetPricingResponse';
        $request = $this->getCompetitivePricingRequest($marketplace_id, $item_type, $asins, $skus);

        return $this->sendRequest($request, GetPricingResponse::class);
    }

    /**
     * Operation getCompetitivePricingAsync.
     *
     * @param string   $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string   $item_type      Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. (required)
     * @param string[] $asins          A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus           A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompetitivePricingAsync($marketplace_id, $item_type, $asins = null, $skus = null)
    {
        return $this->getCompetitivePricingAsyncWithHttpInfo($marketplace_id, $item_type, $asins, $skus)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getCompetitivePricingAsyncWithHttpInfo.
     *
     * @param string   $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string   $item_type      Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. (required)
     * @param string[] $asins          A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus           A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getCompetitivePricingAsyncWithHttpInfo($marketplace_id, $item_type, $asins = null, $skus = null)
    {
        $returnType = '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetPricingResponse';
        $request = $this->getCompetitivePricingRequest($marketplace_id, $item_type, $asins, $skus);

        return $this->sendRequestAsync($request, GetPricingResponse::class);
    }

    /**
     * Create request for operation 'getCompetitivePricing'.
     *
     * @param string   $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string   $item_type      Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. Possible values: Asin, Sku. (required)
     * @param string[] $asins          A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus           A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getCompetitivePricingRequest($marketplace_id, $item_type, $asins = null, $skus = null)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplace_id || (is_array($marketplace_id) && 0 === count($marketplace_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_id when calling getCompetitivePricing');
        }
        // verify the required parameter 'item_type' is set
        if (null === $item_type || (is_array($item_type) && 0 === count($item_type))) {
            throw new \InvalidArgumentException('Missing the required parameter $item_type when calling getCompetitivePricing');
        }

        $resourcePath = '/products/pricing/v0/competitivePrice';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplace_id) {
            $queryParams['MarketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id);
        }
        // query params
        if (is_array($asins)) {
            $asins = ObjectSerializer::serializeCollection($asins, 'csv', true);
        }
        if (null !== $asins) {
            $queryParams['Asins'] = ObjectSerializer::toQueryValue($asins);
        }
        // query params
        if (is_array($skus)) {
            $skus = ObjectSerializer::serializeCollection($skus, 'csv', true);
        }
        if (null !== $skus) {
            $queryParams['Skus'] = ObjectSerializer::toQueryValue($skus);
        }
        // query params
        if (null !== $item_type) {
            $queryParams['ItemType'] = ObjectSerializer::toQueryValue($item_type);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getItemOffers.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $asin           The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetOffersResponse
     */
    public function getItemOffers($marketplace_id, $item_condition, $asin)
    {
        list($response) = $this->getItemOffersWithHttpInfo($marketplace_id, $item_condition, $asin);

        return $response;
    }

    /**
     * Operation getItemOffersWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $asin           The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetOffersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getItemOffersWithHttpInfo($marketplace_id, $item_condition, $asin)
    {
        $returnType = '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetOffersResponse';
        $request = $this->getItemOffersRequest($marketplace_id, $item_condition, $asin);

        return $this->sendRequest($request, GetOffersResponse::class);
    }

    /**
     * Operation getItemOffersAsync.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $asin           The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemOffersAsync($marketplace_id, $item_condition, $asin)
    {
        return $this->getItemOffersAsyncWithHttpInfo($marketplace_id, $item_condition, $asin)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getItemOffersAsyncWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $asin           The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getItemOffersAsyncWithHttpInfo($marketplace_id, $item_condition, $asin)
    {
        $returnType = '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetOffersResponse';
        $request = $this->getItemOffersRequest($marketplace_id, $item_condition, $asin);

        return $this->sendRequestAsync($request, GetOffersResponse::class);
    }

    /**
     * Create request for operation 'getItemOffers'.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings to be considered based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $asin           The Amazon Standard Identification Number (ASIN) of the item. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getItemOffersRequest($marketplace_id, $item_condition, $asin)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplace_id || (is_array($marketplace_id) && 0 === count($marketplace_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_id when calling getItemOffers');
        }
        // verify the required parameter 'item_condition' is set
        if (null === $item_condition || (is_array($item_condition) && 0 === count($item_condition))) {
            throw new \InvalidArgumentException('Missing the required parameter $item_condition when calling getItemOffers');
        }
        // verify the required parameter 'asin' is set
        if (null === $asin || (is_array($asin) && 0 === count($asin))) {
            throw new \InvalidArgumentException('Missing the required parameter $asin when calling getItemOffers');
        }

        $resourcePath = '/products/pricing/v0/items/{Asin}/offers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplace_id) {
            $queryParams['MarketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id);
        }
        // query params
        if (null !== $item_condition) {
            $queryParams['ItemCondition'] = ObjectSerializer::toQueryValue($item_condition);
        }

        // path params
        if (null !== $asin) {
            $resourcePath = str_replace(
                '{'.'Asin'.'}',
                ObjectSerializer::toPathValue($asin),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getListingOffers.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $seller_sku     Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     *
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetOffersResponse
     */
    public function getListingOffers($marketplace_id, $item_condition, $seller_sku)
    {
        list($response) = $this->getListingOffersWithHttpInfo($marketplace_id, $item_condition, $seller_sku);

        return $response;
    }

    /**
     * Operation getListingOffersWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $seller_sku     Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     *
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetOffersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getListingOffersWithHttpInfo($marketplace_id, $item_condition, $seller_sku)
    {
        $returnType = '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetOffersResponse';
        $request = $this->getListingOffersRequest($marketplace_id, $item_condition, $seller_sku);

        return $this->sendRequest($request, GetOffersResponse::class);
    }

    /**
     * Operation getListingOffersAsync.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $seller_sku     Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingOffersAsync($marketplace_id, $item_condition, $seller_sku)
    {
        return $this->getListingOffersAsyncWithHttpInfo($marketplace_id, $item_condition, $seller_sku)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getListingOffersAsyncWithHttpInfo.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $seller_sku     Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingOffersAsyncWithHttpInfo($marketplace_id, $item_condition, $seller_sku)
    {
        $request = $this->getListingOffersRequest($marketplace_id, $item_condition, $seller_sku);

        return $this->sendRequestAsync($request, GetOffersResponse::class);
    }

    /**
     * Create request for operation 'getListingOffers'.
     *
     * @param string $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (required)
     * @param string $seller_sku     Identifies an item in the given marketplace. SellerSKU is qualified by the seller&#x27;s SellerId, which is included with every operation that you submit. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getListingOffersRequest($marketplace_id, $item_condition, $seller_sku)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplace_id || (is_array($marketplace_id) && 0 === count($marketplace_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_id when calling getListingOffers');
        }
        // verify the required parameter 'item_condition' is set
        if (null === $item_condition || (is_array($item_condition) && 0 === count($item_condition))) {
            throw new \InvalidArgumentException('Missing the required parameter $item_condition when calling getListingOffers');
        }
        // verify the required parameter 'seller_sku' is set
        if (null === $seller_sku || (is_array($seller_sku) && 0 === count($seller_sku))) {
            throw new \InvalidArgumentException('Missing the required parameter $seller_sku when calling getListingOffers');
        }

        $resourcePath = '/products/pricing/v0/listings/{SellerSKU}/offers';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplace_id) {
            $queryParams['MarketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id);
        }
        // query params
        if (null !== $item_condition) {
            $queryParams['ItemCondition'] = ObjectSerializer::toQueryValue($item_condition);
        }

        // path params
        if (null !== $seller_sku) {
            $resourcePath = str_replace(
                '{'.'SellerSKU'.'}',
                ObjectSerializer::toPathValue($seller_sku),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getPricing.
     *
     * @param string   $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string   $item_type      Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. (required)
     * @param string[] $asins          A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus           A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param string   $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (optional)
     *
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetPricingResponse
     */
    public function getPricing($marketplace_id, $item_type, $asins = null, $skus = null, $item_condition = null)
    {
        list($response) = $this->getPricingWithHttpInfo($marketplace_id, $item_type, $asins, $skus, $item_condition);

        return $response;
    }

    /**
     * Operation getPricingWithHttpInfo.
     *
     * @param string   $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string   $item_type      Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. (required)
     * @param string[] $asins          A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus           A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param string   $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (optional)
     *
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetPricingResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPricingWithHttpInfo($marketplace_id, $item_type, $asins = null, $skus = null, $item_condition = null)
    {
        $request = $this->getPricingRequest($marketplace_id, $item_type, $asins, $skus, $item_condition);

        return $this->sendRequest($request, GetPricingResponse::class);
    }

    /**
     * Operation getPricingAsync.
     *
     * @param string   $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string   $item_type      Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. (required)
     * @param string[] $asins          A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus           A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param string   $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPricingAsync($marketplace_id, $item_type, $asins = null, $skus = null, $item_condition = null)
    {
        return $this->getPricingAsyncWithHttpInfo($marketplace_id, $item_type, $asins, $skus, $item_condition)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPricingAsyncWithHttpInfo.
     *
     * @param string   $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string   $item_type      Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. (required)
     * @param string[] $asins          A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus           A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param string   $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPricingAsyncWithHttpInfo($marketplace_id, $item_type, $asins = null, $skus = null, $item_condition = null)
    {
        $returnType = '\ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing\GetPricingResponse';
        $request = $this->getPricingRequest($marketplace_id, $item_type, $asins, $skus, $item_condition);

        return $this->sendRequestAsync($request, GetPricingResponse::class);
    }

    /**
     * Create request for operation 'getPricing'.
     *
     * @param string   $marketplace_id A marketplace identifier. Specifies the marketplace for which prices are returned. (required)
     * @param string   $item_type      Indicates whether ASIN values or seller SKU values are used to identify items. If you specify Asin, the information in the response will be dependent on the list of Asins you provide in the Asins parameter. If you specify Sku, the information in the response will be dependent on the list of Skus you provide in the Skus parameter. (required)
     * @param string[] $asins          A list of up to twenty Amazon Standard Identification Number (ASIN) values used to identify items in the given marketplace. (optional)
     * @param string[] $skus           A list of up to twenty seller SKU values used to identify items in the given marketplace. (optional)
     * @param string   $item_condition Filters the offer listings based on item condition. Possible values: New, Used, Collectible, Refurbished, Club. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getPricingRequest($marketplace_id, $item_type, $asins = null, $skus = null, $item_condition = null)
    {
        // verify the required parameter 'marketplace_id' is set
        if (null === $marketplace_id || (is_array($marketplace_id) && 0 === count($marketplace_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_id when calling getPricing');
        }
        // verify the required parameter 'item_type' is set
        if (null === $item_type || (is_array($item_type) && 0 === count($item_type))) {
            throw new \InvalidArgumentException('Missing the required parameter $item_type when calling getPricing');
        }

        $resourcePath = '/products/pricing/v0/price';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $marketplace_id) {
            $queryParams['MarketplaceId'] = ObjectSerializer::toQueryValue($marketplace_id);
        }
        // query params
        if (is_array($asins)) {
            $asins = ObjectSerializer::serializeCollection($asins, 'csv', true);
        }
        if (null !== $asins) {
            $queryParams['Asins'] = ObjectSerializer::toQueryValue($asins);
        }
        // query params
        if (is_array($skus)) {
            $skus = ObjectSerializer::serializeCollection($skus, 'csv', true);
        }
        if (null !== $skus) {
            $queryParams['Skus'] = ObjectSerializer::toQueryValue($skus);
        }
        // query params
        if (null !== $item_type) {
            $queryParams['ItemType'] = ObjectSerializer::toQueryValue($item_type);
        }
        // query params
        if (null !== $item_condition) {
            $queryParams['ItemCondition'] = ObjectSerializer::toQueryValue($item_condition);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }
}
