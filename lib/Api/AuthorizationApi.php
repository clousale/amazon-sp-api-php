<?php
/**
 * AuthorizationApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Authorization.
 *
 * The Selling Partner API for Authorization helps developers manage authorizations and check the specific permissions associated with a given authorization.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Api;

use ClouSale\AmazonSellingPartnerAPI\ApiException;
use ClouSale\AmazonSellingPartnerAPI\Configuration;
use ClouSale\AmazonSellingPartnerAPI\HeaderSelector;
use ClouSale\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use ClouSale\AmazonSellingPartnerAPI\Models\Authorization\GetAuthorizationCodeResponse;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use InvalidArgumentException;

/**
 * AuthorizationApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class AuthorizationApi
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
     * Operation getAuthorizationCode.
     *
     * Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.
     *
     * @param string $selling_partner_id The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param string $developer_id       Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param string $mws_auth_token     The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws InvalidArgumentException
     * @throws ApiException             on non-2xx response
     *
     * @return GetAuthorizationCodeResponse
     */
    public function getAuthorizationCode($selling_partner_id, $developer_id, $mws_auth_token)
    {
        list($response) = $this->getAuthorizationCodeWithHttpInfo($selling_partner_id, $developer_id, $mws_auth_token);

        return $response;
    }

    /**
     * Operation getAuthorizationCodeWithHttpInfo.
     *
     * Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.
     *
     * @param string $selling_partner_id The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param string $developer_id       Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param string $mws_auth_token     The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws InvalidArgumentException
     * @throws ApiException             on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Authorization\GetAuthorizationCodeResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getAuthorizationCodeWithHttpInfo($selling_partner_id, $developer_id, $mws_auth_token)
    {
        $returnType = '\ClouSale\AmazonSellingPartnerAPI\Models\Authorization\GetAuthorizationCodeResponse';
        $request = $this->getAuthorizationCodeRequest($selling_partner_id, $developer_id, $mws_auth_token);

        return $this->sendRequest($request, GetAuthorizationCodeResponse::class);
    }

    /**
     * Operation getAuthorizationCodeAsync.
     *
     * Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.
     *
     * @param string $selling_partner_id The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param string $developer_id       Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param string $mws_auth_token     The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuthorizationCodeAsync($selling_partner_id, $developer_id, $mws_auth_token)
    {
        return $this->getAuthorizationCodeAsyncWithHttpInfo($selling_partner_id, $developer_id, $mws_auth_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getAuthorizationCodeAsyncWithHttpInfo.
     *
     * Returns the Login with Amazon (LWA) authorization code for an existing Amazon MWS authorization.
     *
     * @param string $selling_partner_id The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param string $developer_id       Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param string $mws_auth_token     The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getAuthorizationCodeAsyncWithHttpInfo($selling_partner_id, $developer_id, $mws_auth_token)
    {
        $request = $this->getAuthorizationCodeRequest($selling_partner_id, $developer_id, $mws_auth_token);

        return $this->sendRequestAsync($request, GetAuthorizationCodeResponse::class);
    }

    /**
     * Create request for operation 'getAuthorizationCode'.
     *
     * @param string $selling_partner_id The seller ID of the seller for whom you are requesting Selling Partner API authorization. This must be the seller ID of the seller who authorized your application on the Marketplace Appstore. (required)
     * @param string $developer_id       Your developer ID. This must be one of the developer ID values that you provided when you registered your application in Developer Central. (required)
     * @param string $mws_auth_token     The MWS Auth Token that was generated when the seller authorized your application on the Marketplace Appstore. (required)
     *
     * @throws InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getAuthorizationCodeRequest($selling_partner_id, $developer_id, $mws_auth_token)
    {
        // verify the required parameter 'selling_partner_id' is set
        if (null === $selling_partner_id || (is_array($selling_partner_id) && 0 === count($selling_partner_id))) {
            throw new InvalidArgumentException('Missing the required parameter $selling_partner_id when calling getAuthorizationCode');
        }
        // verify the required parameter 'developer_id' is set
        if (null === $developer_id || (is_array($developer_id) && 0 === count($developer_id))) {
            throw new InvalidArgumentException('Missing the required parameter $developer_id when calling getAuthorizationCode');
        }
        // verify the required parameter 'mws_auth_token' is set
        if (null === $mws_auth_token || (is_array($mws_auth_token) && 0 === count($mws_auth_token))) {
            throw new InvalidArgumentException('Missing the required parameter $mws_auth_token when calling getAuthorizationCode');
        }

        $resourcePath = '/authorization/v1/authorizationCode';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $selling_partner_id) {
            $queryParams['sellingPartnerId'] = ObjectSerializer::toQueryValue($selling_partner_id);
        }
        // query params
        if (null !== $developer_id) {
            $queryParams['developerId'] = ObjectSerializer::toQueryValue($developer_id);
        }
        // query params
        if (null !== $mws_auth_token) {
            $queryParams['mwsAuthToken'] = ObjectSerializer::toQueryValue($mws_auth_token);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }
}
