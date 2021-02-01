<?php
/**
 * DefaultApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Finances.
 *
 * The Selling Partner API for Finances helps you obtain financial information relevant to a seller's business. You can obtain financial events for a given order, financial event group, or date range without having to wait until a statement period closes. You can also obtain financial event groups for a given date range.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Api;

use ClouSale\AmazonSellingPartnerAPI\Configuration;
use ClouSale\AmazonSellingPartnerAPI\HeaderSelector;
use ClouSale\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use ClouSale\AmazonSellingPartnerAPI\Models\Finances\ListFinancialEventGroupsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\Finances\ListFinancialEventsResponse;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * DefaultApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FinancesApi
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
     * Operation listFinancialEventGroups.
     *
     * @param int       $max_results_per_page                 The maximum number of results to return per page. (optional, default to 100)
     * @param \DateTime $financial_event_group_started_before A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. (optional)
     * @param \DateTime $financial_event_group_started_after  A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted. (optional)
     * @param string    $next_token                           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ListFinancialEventGroupsResponse
     */
    public function listFinancialEventGroups($max_results_per_page = '100', $financial_event_group_started_before = null, $financial_event_group_started_after = null, $next_token = null)
    {
        list($response) = $this->listFinancialEventGroupsWithHttpInfo($max_results_per_page, $financial_event_group_started_before, $financial_event_group_started_after, $next_token);

        return $response;
    }

    /**
     * Operation listFinancialEventGroupsWithHttpInfo.
     *
     * @param int       $max_results_per_page                 The maximum number of results to return per page. (optional, default to 100)
     * @param \DateTime $financial_event_group_started_before A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. (optional)
     * @param \DateTime $financial_event_group_started_after  A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted. (optional)
     * @param string    $next_token                           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ListFinancialEventGroupsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listFinancialEventGroupsWithHttpInfo($max_results_per_page = '100', $financial_event_group_started_before = null, $financial_event_group_started_after = null, $next_token = null)
    {
        $request = $this->listFinancialEventGroupsRequest($max_results_per_page, $financial_event_group_started_before, $financial_event_group_started_after, $next_token);

        return $this->sendRequest($request, ListFinancialEventGroupsResponse::class);
    }

    /**
     * Operation listFinancialEventGroupsAsync.
     *
     * @param int       $max_results_per_page                 The maximum number of results to return per page. (optional, default to 100)
     * @param \DateTime $financial_event_group_started_before A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. (optional)
     * @param \DateTime $financial_event_group_started_after  A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted. (optional)
     * @param string    $next_token                           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFinancialEventGroupsAsync($max_results_per_page = '100', $financial_event_group_started_before = null, $financial_event_group_started_after = null, $next_token = null)
    {
        return $this->listFinancialEventGroupsAsyncWithHttpInfo($max_results_per_page, $financial_event_group_started_before, $financial_event_group_started_after, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listFinancialEventGroupsAsyncWithHttpInfo.
     *
     * @param int       $max_results_per_page                 The maximum number of results to return per page. (optional, default to 100)
     * @param \DateTime $financial_event_group_started_before A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. (optional)
     * @param \DateTime $financial_event_group_started_after  A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted. (optional)
     * @param string    $next_token                           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFinancialEventGroupsAsyncWithHttpInfo($max_results_per_page = '100', $financial_event_group_started_before = null, $financial_event_group_started_after = null, $next_token = null)
    {
        $returnType = '\ClouSale\AmazonSellingPartnerAPI\Models\Finances\ListFinancialEventGroupsResponse';
        $request = $this->listFinancialEventGroupsRequest($max_results_per_page, $financial_event_group_started_before, $financial_event_group_started_after, $next_token);

        return $this->sendRequestAsync($request, ListFinancialEventGroupsResponse::class);
    }

    /**
     * Create request for operation 'listFinancialEventGroups'.
     *
     * @param int       $max_results_per_page                 The maximum number of results to return per page. (optional, default to 100)
     * @param \DateTime $financial_event_group_started_before A date used for selecting financial event groups that opened before (but not at) a specified date and time, in ISO 8601 format. The date-time  must be later than FinancialEventGroupStartedAfter and no later than two minutes before the request was submitted. If FinancialEventGroupStartedAfter and FinancialEventGroupStartedBefore are more than 180 days apart, no financial event groups are returned. (optional)
     * @param \DateTime $financial_event_group_started_after  A date used for selecting financial event groups that opened after (or at) a specified date and time, in ISO 8601 format. The date-time must be no later than two minutes before the request was submitted. (optional)
     * @param string    $next_token                           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listFinancialEventGroupsRequest($max_results_per_page = '100', $financial_event_group_started_before = null, $financial_event_group_started_after = null, $next_token = null)
    {
        $resourcePath = '/finances/v0/financialEventGroups';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $max_results_per_page) {
            $queryParams['MaxResultsPerPage'] = ObjectSerializer::toQueryValue($max_results_per_page);
        }
        // query params
        if (null !== $financial_event_group_started_before) {
            $queryParams['FinancialEventGroupStartedBefore'] = ObjectSerializer::toQueryValue($financial_event_group_started_before);
        }
        // query params
        if (null !== $financial_event_group_started_after) {
            $queryParams['FinancialEventGroupStartedAfter'] = ObjectSerializer::toQueryValue($financial_event_group_started_after);
        }
        // query params
        if (null !== $next_token) {
            $queryParams['NextToken'] = ObjectSerializer::toQueryValue($next_token);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation listFinancialEvents.
     *
     * @param int       $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param \DateTime $posted_after         A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format. (optional)
     * @param \DateTime $posted_before        A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. (optional)
     * @param string    $next_token           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ListFinancialEventsResponse
     */
    public function listFinancialEvents($max_results_per_page = '100', $posted_after = null, $posted_before = null, $next_token = null)
    {
        list($response) = $this->listFinancialEventsWithHttpInfo($max_results_per_page, $posted_after, $posted_before, $next_token);

        return $response;
    }

    /**
     * Operation listFinancialEventsWithHttpInfo.
     *
     * @param int       $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param \DateTime $posted_after         A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format. (optional)
     * @param \DateTime $posted_before        A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. (optional)
     * @param string    $next_token           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ListFinancialEventsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listFinancialEventsWithHttpInfo($max_results_per_page = '100', $posted_after = null, $posted_before = null, $next_token = null)
    {
        $request = $this->listFinancialEventsRequest($max_results_per_page, $posted_after, $posted_before, $next_token);

        return $this->sendRequest($request, ListFinancialEventsResponse::class);
    }

    /**
     * Operation listFinancialEventsAsync.
     *
     * @param int       $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param \DateTime $posted_after         A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format. (optional)
     * @param \DateTime $posted_before        A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. (optional)
     * @param string    $next_token           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFinancialEventsAsync($max_results_per_page = '100', $posted_after = null, $posted_before = null, $next_token = null)
    {
        return $this->listFinancialEventsAsyncWithHttpInfo($max_results_per_page, $posted_after, $posted_before, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listFinancialEventsAsyncWithHttpInfo.
     *
     * @param int       $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param \DateTime $posted_after         A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format. (optional)
     * @param \DateTime $posted_before        A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. (optional)
     * @param string    $next_token           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFinancialEventsAsyncWithHttpInfo($max_results_per_page = '100', $posted_after = null, $posted_before = null, $next_token = null)
    {
        $request = $this->listFinancialEventsRequest($max_results_per_page, $posted_after, $posted_before, $next_token);

        return $this->sendRequestAsync($request, ListFinancialEventsResponse::class);
    }

    /**
     * Create request for operation 'listFinancialEvents'.
     *
     * @param int       $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param \DateTime $posted_after         A date used for selecting financial events posted after (or at) a specified time. The date-time must be no later than two minutes before the request was submitted, in ISO 8601 date time format. (optional)
     * @param \DateTime $posted_before        A date used for selecting financial events posted before (but not at) a specified time. The date-time must be later than PostedAfter and no later than two minutes before the request was submitted, in ISO 8601 date time format. If PostedAfter and PostedBefore are more than 180 days apart, no financial events are returned. You must specify the PostedAfter parameter if you specify the PostedBefore parameter. Default: Now minus two minutes. (optional)
     * @param string    $next_token           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listFinancialEventsRequest($max_results_per_page = '100', $posted_after = null, $posted_before = null, $next_token = null)
    {
        $resourcePath = '/finances/v0/financialEvents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $max_results_per_page) {
            $queryParams['MaxResultsPerPage'] = ObjectSerializer::toQueryValue($max_results_per_page);
        }
        // query params
        if (null !== $posted_after) {
            $queryParams['PostedAfter'] = ObjectSerializer::toQueryValue($posted_after);
        }
        // query params
        if (null !== $posted_before) {
            $queryParams['PostedBefore'] = ObjectSerializer::toQueryValue($posted_before);
        }
        // query params
        if (null !== $next_token) {
            $queryParams['NextToken'] = ObjectSerializer::toQueryValue($next_token);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation listFinancialEventsByGroupId.
     *
     * @param string $event_group_id       The identifier of the financial event group to which the events belong. (required)
     * @param int    $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param string $next_token           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ListFinancialEventsResponse
     */
    public function listFinancialEventsByGroupId($event_group_id, $max_results_per_page = '100', $next_token = null)
    {
        list($response) = $this->listFinancialEventsByGroupIdWithHttpInfo($event_group_id, $max_results_per_page, $next_token);

        return $response;
    }

    /**
     * Operation listFinancialEventsByGroupIdWithHttpInfo.
     *
     * @param string $event_group_id       The identifier of the financial event group to which the events belong. (required)
     * @param int    $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param string $next_token           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ListFinancialEventsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listFinancialEventsByGroupIdWithHttpInfo($event_group_id, $max_results_per_page = '100', $next_token = null)
    {
        $request = $this->listFinancialEventsByGroupIdRequest($event_group_id, $max_results_per_page, $next_token);

        return $this->sendRequest($request, ListFinancialEventsResponse::class);
    }

    /**
     * Operation listFinancialEventsByGroupIdAsync.
     *
     * @param string $event_group_id       The identifier of the financial event group to which the events belong. (required)
     * @param int    $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param string $next_token           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFinancialEventsByGroupIdAsync($event_group_id, $max_results_per_page = '100', $next_token = null)
    {
        return $this->listFinancialEventsByGroupIdAsyncWithHttpInfo($event_group_id, $max_results_per_page, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listFinancialEventsByGroupIdAsyncWithHttpInfo.
     *
     * @param string $event_group_id       The identifier of the financial event group to which the events belong. (required)
     * @param int    $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param string $next_token           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFinancialEventsByGroupIdAsyncWithHttpInfo($event_group_id, $max_results_per_page = '100', $next_token = null)
    {
        $request = $this->listFinancialEventsByGroupIdRequest($event_group_id, $max_results_per_page, $next_token);

        return $this->sendRequestAsync($request, ListFinancialEventsResponse::class);
    }

    /**
     * Create request for operation 'listFinancialEventsByGroupId'.
     *
     * @param string $event_group_id       The identifier of the financial event group to which the events belong. (required)
     * @param int    $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param string $next_token           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listFinancialEventsByGroupIdRequest($event_group_id, $max_results_per_page = '100', $next_token = null)
    {
        // verify the required parameter 'event_group_id' is set
        if (null === $event_group_id || (is_array($event_group_id) && 0 === count($event_group_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $event_group_id when calling listFinancialEventsByGroupId');
        }

        $resourcePath = '/finances/v0/financialEventGroups/{eventGroupId}/financialEvents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $max_results_per_page) {
            $queryParams['MaxResultsPerPage'] = ObjectSerializer::toQueryValue($max_results_per_page);
        }
        // query params
        if (null !== $next_token) {
            $queryParams['NextToken'] = ObjectSerializer::toQueryValue($next_token);
        }

        // path params
        if (null !== $event_group_id) {
            $resourcePath = str_replace(
                '{'.'eventGroupId'.'}',
                ObjectSerializer::toPathValue($event_group_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation listFinancialEventsByOrderId.
     *
     * @param string $order_id             An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param int    $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param string $next_token           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ListFinancialEventsResponse
     */
    public function listFinancialEventsByOrderId($order_id, $max_results_per_page = '100', $next_token = null)
    {
        list($response) = $this->listFinancialEventsByOrderIdWithHttpInfo($order_id, $max_results_per_page, $next_token);

        return $response;
    }

    /**
     * Operation listFinancialEventsByOrderIdWithHttpInfo.
     *
     * @param string $order_id             An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param int    $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param string $next_token           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Finances\ListFinancialEventsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function listFinancialEventsByOrderIdWithHttpInfo($order_id, $max_results_per_page = '100', $next_token = null)
    {
        $request = $this->listFinancialEventsByOrderIdRequest($order_id, $max_results_per_page, $next_token);

        return $this->sendRequest($request, ListFinancialEventsResponse::class);
    }

    /**
     * Operation listFinancialEventsByOrderIdAsync.
     *
     * @param string $order_id             An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param int    $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param string $next_token           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFinancialEventsByOrderIdAsync($order_id, $max_results_per_page = '100', $next_token = null)
    {
        return $this->listFinancialEventsByOrderIdAsyncWithHttpInfo($order_id, $max_results_per_page, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation listFinancialEventsByOrderIdAsyncWithHttpInfo.
     *
     * @param string $order_id             An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param int    $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param string $next_token           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function listFinancialEventsByOrderIdAsyncWithHttpInfo($order_id, $max_results_per_page = '100', $next_token = null)
    {
        $request = $this->listFinancialEventsByOrderIdRequest($order_id, $max_results_per_page, $next_token);

        return $this->sendRequestAsync($request, ListFinancialEventsResponse::class);
    }

    /**
     * Create request for operation 'listFinancialEventsByOrderId'.
     *
     * @param string $order_id             An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param int    $max_results_per_page The maximum number of results to return per page. (optional, default to 100)
     * @param string $next_token           A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function listFinancialEventsByOrderIdRequest($order_id, $max_results_per_page = '100', $next_token = null)
    {
        // verify the required parameter 'order_id' is set
        if (null === $order_id || (is_array($order_id) && 0 === count($order_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling listFinancialEventsByOrderId');
        }

        $resourcePath = '/finances/v0/orders/{orderId}/financialEvents';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $max_results_per_page) {
            $queryParams['MaxResultsPerPage'] = ObjectSerializer::toQueryValue($max_results_per_page);
        }
        // query params
        if (null !== $next_token) {
            $queryParams['NextToken'] = ObjectSerializer::toQueryValue($next_token);
        }

        // path params
        if (null !== $order_id) {
            $resourcePath = str_replace(
                '{'.'orderId'.'}',
                ObjectSerializer::toPathValue($order_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }
}
