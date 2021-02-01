<?php
/**
 * NotificationsApi.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Notifications.
 *
 * The Selling Partner API for Notifications lets you subscribe to notifications that are relevant to a selling partner's business. Using this API you can create a destination to receive notifications, subscribe to notifications, delete notification subscriptions, and more.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Api;

use ClouSale\AmazonSellingPartnerAPI\Configuration;
use ClouSale\AmazonSellingPartnerAPI\ExceptionThrower;
use ClouSale\AmazonSellingPartnerAPI\HeaderSelector;
use ClouSale\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateDestinationResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateSubscriptionResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\Notifications\DeleteDestinationResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\Notifications\DeleteSubscriptionByIdResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\Notifications\GetDestinationResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\Notifications\GetDestinationsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\Notifications\GetSubscriptionByIdResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\Notifications\GetSubscriptionResponse;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;

/**
 * NotificationsApi Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class NotificationsApi
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
     * Operation createDestination.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateDestinationRequest $body body (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateDestinationResponse
     */
    public function createDestination($body)
    {
        list($response) = $this->createDestinationWithHttpInfo($body);

        return $response;
    }

    /**
     * Operation createDestinationWithHttpInfo.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateDestinationRequest $body (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateDestinationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createDestinationWithHttpInfo($body)
    {
        $request = $this->createDestinationRequest($body);

        return $this->sendRequest($request, CreateDestinationResponse::class);
    }

    /**
     * Operation createDestinationAsync.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateDestinationRequest $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDestinationAsync($body)
    {
        return $this->createDestinationAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createDestinationAsyncWithHttpInfo.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateDestinationRequest $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createDestinationAsyncWithHttpInfo($body)
    {
        $request = $this->createDestinationRequest($body);

        return $this->sendRequestAsync($request, CreateDestinationResponse::class);
    }

    /**
     * Create request for operation 'createDestination'.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateDestinationRequest $body (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createDestinationRequest($body)
    {
        // verify the required parameter 'body' is set
        ExceptionThrower::throwIf(\InvalidArgumentException::class, null === $body || (is_array($body) && 0 === count($body)), 'Missing the required parameter $body when calling createDestination');

        $resourcePath = '/notifications/v1/destinations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation createSubscription.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateSubscriptionRequest $body              body (required)
     * @param string                                                                           $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateSubscriptionResponse
     */
    public function createSubscription($body, $notification_type)
    {
        list($response) = $this->createSubscriptionWithHttpInfo($body, $notification_type);

        return $response;
    }

    /**
     * Operation createSubscriptionWithHttpInfo.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateSubscriptionRequest $body              (required)
     * @param string                                                                           $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateSubscriptionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createSubscriptionWithHttpInfo($body, $notification_type)
    {
        $request = $this->createSubscriptionRequest($body, $notification_type);

        return $this->sendRequest($request, CreateSubscriptionResponse::class);
    }

    /**
     * Operation createSubscriptionAsync.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateSubscriptionRequest $body              (required)
     * @param string                                                                           $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createSubscriptionAsync($body, $notification_type)
    {
        return $this->createSubscriptionAsyncWithHttpInfo($body, $notification_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createSubscriptionAsyncWithHttpInfo.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateSubscriptionRequest $body              (required)
     * @param string                                                                           $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createSubscriptionAsyncWithHttpInfo($body, $notification_type)
    {
        $request = $this->createSubscriptionRequest($body, $notification_type);

        return $this->sendRequestAsync($request, CreateSubscriptionResponse::class);
    }

    /**
     * Create request for operation 'createSubscription'.
     *
     * @param \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\CreateSubscriptionRequest $body              (required)
     * @param string                                                                           $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function createSubscriptionRequest($body, $notification_type)
    {
        ExceptionThrower::throwIf(\InvalidArgumentException::class, null === $body || (is_array($body) && 0 === count($body)), 'Missing the required parameter $body when calling createSubscription');
        ExceptionThrower::throwIf(\InvalidArgumentException::class, null === $notification_type || (is_array($notification_type) && 0 === count($notification_type)), 'Missing the required parameter $notification_type when calling createSubscription');

        $resourcePath = '/notifications/v1/subscriptions/{notificationType}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = $body;
        $multipart = false;

        // path params
        if (null !== $notification_type) {
            $resourcePath = str_replace(
                '{'.'notificationType'.'}',
                ObjectSerializer::toPathValue($notification_type),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'POST', $httpBody);
    }

    /**
     * Operation deleteDestination.
     *
     * @param string $destination_id The identifier for the destination that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\DeleteDestinationResponse
     */
    public function deleteDestination($destination_id)
    {
        list($response) = $this->deleteDestinationWithHttpInfo($destination_id);

        return $response;
    }

    /**
     * Operation deleteDestinationWithHttpInfo.
     *
     * @param string $destination_id The identifier for the destination that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\DeleteDestinationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteDestinationWithHttpInfo($destination_id)
    {
        $request = $this->deleteDestinationRequest($destination_id);

        return $this->sendRequest($request, DeleteDestinationResponse::class);
    }

    /**
     * Operation deleteDestinationAsync.
     *
     * @param string $destination_id The identifier for the destination that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDestinationAsync($destination_id)
    {
        return $this->deleteDestinationAsyncWithHttpInfo($destination_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteDestinationAsyncWithHttpInfo.
     *
     * @param string $destination_id The identifier for the destination that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteDestinationAsyncWithHttpInfo($destination_id)
    {
        $request = $this->deleteDestinationRequest($destination_id);

        return $this->sendRequestAsync($request, DeleteDestinationResponse::class);
    }

    /**
     * Create request for operation 'deleteDestination'.
     *
     * @param string $destination_id The identifier for the destination that you want to delete. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteDestinationRequest($destination_id)
    {
        // verify the required parameter 'destination_id' is set
        if (null === $destination_id || (is_array($destination_id) && 0 === count($destination_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $destination_id when calling deleteDestination');
        }

        $resourcePath = '/notifications/v1/destinations/{destinationId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $destination_id) {
            $resourcePath = str_replace(
                '{'.'destinationId'.'}',
                ObjectSerializer::toPathValue($destination_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'DELETE', $httpBody);
    }

    /**
     * Operation deleteSubscriptionById.
     *
     * @param string $subscription_id   The identifier for the subscription that you want to delete. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\DeleteSubscriptionByIdResponse
     */
    public function deleteSubscriptionById($subscription_id, $notification_type)
    {
        list($response) = $this->deleteSubscriptionByIdWithHttpInfo($subscription_id, $notification_type);

        return $response;
    }

    /**
     * Operation deleteSubscriptionByIdWithHttpInfo.
     *
     * @param string $subscription_id   The identifier for the subscription that you want to delete. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\DeleteSubscriptionByIdResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function deleteSubscriptionByIdWithHttpInfo($subscription_id, $notification_type)
    {
        $request = $this->deleteSubscriptionByIdRequest($subscription_id, $notification_type);

        return $this->sendRequest($request, DeleteSubscriptionByIdResponse::class);
    }

    /**
     * Operation deleteSubscriptionByIdAsync.
     *
     * @param string $subscription_id   The identifier for the subscription that you want to delete. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteSubscriptionByIdAsync($subscription_id, $notification_type)
    {
        return $this->deleteSubscriptionByIdAsyncWithHttpInfo($subscription_id, $notification_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation deleteSubscriptionByIdAsyncWithHttpInfo.
     *
     * @param string $subscription_id   The identifier for the subscription that you want to delete. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function deleteSubscriptionByIdAsyncWithHttpInfo($subscription_id, $notification_type)
    {
        $request = $this->deleteSubscriptionByIdRequest($subscription_id, $notification_type);

        return $this->sendRequestAsync($request, DeleteSubscriptionByIdResponse::class);
    }

    /**
     * Create request for operation 'deleteSubscriptionById'.
     *
     * @param string $subscription_id   The identifier for the subscription that you want to delete. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function deleteSubscriptionByIdRequest($subscription_id, $notification_type)
    {
        // verify the required parameter 'subscription_id' is set
        if (null === $subscription_id || (is_array($subscription_id) && 0 === count($subscription_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling deleteSubscriptionById');
        }
        // verify the required parameter 'notification_type' is set
        if (null === $notification_type || (is_array($notification_type) && 0 === count($notification_type))) {
            throw new \InvalidArgumentException('Missing the required parameter $notification_type when calling deleteSubscriptionById');
        }

        $resourcePath = '/notifications/v1/subscriptions/{notificationType}/{subscriptionId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $subscription_id) {
            $resourcePath = str_replace(
                '{'.'subscriptionId'.'}',
                ObjectSerializer::toPathValue($subscription_id),
                $resourcePath
            );
        }
        // path params
        if (null !== $notification_type) {
            $resourcePath = str_replace(
                '{'.'notificationType'.'}',
                ObjectSerializer::toPathValue($notification_type),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'DELETE', $httpBody);
    }

    /**
     * Operation getDestination.
     *
     * @param string $destination_id The identifier generated when you created the destination. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\GetDestinationResponse
     */
    public function getDestination($destination_id)
    {
        list($response) = $this->getDestinationWithHttpInfo($destination_id);

        return $response;
    }

    /**
     * Operation getDestinationWithHttpInfo.
     *
     * @param string $destination_id The identifier generated when you created the destination. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\GetDestinationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDestinationWithHttpInfo($destination_id)
    {
        $request = $this->getDestinationRequest($destination_id);

        return $this->sendRequest($request, GetDestinationResponse::class);
    }

    /**
     * Operation getDestinationAsync.
     *
     * @param string $destination_id The identifier generated when you created the destination. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDestinationAsync($destination_id)
    {
        return $this->getDestinationAsyncWithHttpInfo($destination_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDestinationAsyncWithHttpInfo.
     *
     * @param string $destination_id The identifier generated when you created the destination. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDestinationAsyncWithHttpInfo($destination_id)
    {
        $request = $this->getDestinationRequest($destination_id);

        return $this->sendRequestAsync($request, GetDestinationResponse::class);
    }

    /**
     * Create request for operation 'getDestination'.
     *
     * @param string $destination_id The identifier generated when you created the destination. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getDestinationRequest($destination_id)
    {
        // verify the required parameter 'destination_id' is set
        if (null === $destination_id || (is_array($destination_id) && 0 === count($destination_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $destination_id when calling getDestination');
        }

        $resourcePath = '/notifications/v1/destinations/{destinationId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $destination_id) {
            $resourcePath = str_replace(
                '{'.'destinationId'.'}',
                ObjectSerializer::toPathValue($destination_id),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getDestinations.
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\GetDestinationsResponse
     */
    public function getDestinations()
    {
        list($response) = $this->getDestinationsWithHttpInfo();

        return $response;
    }

    /**
     * Operation getDestinationsWithHttpInfo.
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\GetDestinationsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getDestinationsWithHttpInfo()
    {
        $request = $this->getDestinationsRequest();

        return $this->sendRequest($request, GetDestinationsResponse::class);
    }

    /**
     * Operation getDestinationsAsync.
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDestinationsAsync()
    {
        return $this->getDestinationsAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getDestinationsAsyncWithHttpInfo.
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getDestinationsAsyncWithHttpInfo()
    {
        $request = $this->getDestinationsRequest();

        return $this->sendRequestAsync($request, GetDestinationsResponse::class);
    }

    /**
     * Create request for operation 'getDestinations'.
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getDestinationsRequest()
    {
        $resourcePath = '/notifications/v1/destinations';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getSubscription.
     *
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\GetSubscriptionResponse
     */
    public function getSubscription($notification_type)
    {
        list($response) = $this->getSubscriptionWithHttpInfo($notification_type);

        return $response;
    }

    /**
     * Operation getSubscriptionWithHttpInfo.
     *
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\GetSubscriptionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubscriptionWithHttpInfo($notification_type)
    {
        $request = $this->getSubscriptionRequest($notification_type);

        return $this->sendRequest($request, GetSubscriptionResponse::class);
    }

    /**
     * Operation getSubscriptionAsync.
     *
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSubscriptionAsync($notification_type)
    {
        return $this->getSubscriptionAsyncWithHttpInfo($notification_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSubscriptionAsyncWithHttpInfo.
     *
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSubscriptionAsyncWithHttpInfo($notification_type)
    {
        $request = $this->getSubscriptionRequest($notification_type);

        return $this->sendRequestAsync($request, GetSubscriptionResponse::class);
    }

    /**
     * Create request for operation 'getSubscription'.
     *
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSubscriptionRequest($notification_type)
    {
        // verify the required parameter 'notification_type' is set
        if (null === $notification_type || (is_array($notification_type) && 0 === count($notification_type))) {
            throw new \InvalidArgumentException('Missing the required parameter $notification_type when calling getSubscription');
        }

        $resourcePath = '/notifications/v1/subscriptions/{notificationType}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $notification_type) {
            $resourcePath = str_replace(
                '{'.'notificationType'.'}',
                ObjectSerializer::toPathValue($notification_type),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }

    /**
     * Operation getSubscriptionById.
     *
     * @param string $subscription_id   The identifier for the subscription that you want to get. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\GetSubscriptionByIdResponse
     */
    public function getSubscriptionById($subscription_id, $notification_type)
    {
        list($response) = $this->getSubscriptionByIdWithHttpInfo($subscription_id, $notification_type);

        return $response;
    }

    /**
     * Operation getSubscriptionByIdWithHttpInfo.
     *
     * @param string $subscription_id   The identifier for the subscription that you want to get. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Notifications\GetSubscriptionByIdResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getSubscriptionByIdWithHttpInfo($subscription_id, $notification_type)
    {
        $request = $this->getSubscriptionByIdRequest($subscription_id, $notification_type);

        return $this->sendRequest($request, GetSubscriptionByIdResponse::class);
    }

    /**
     * Operation getSubscriptionByIdAsync.
     *
     * @param string $subscription_id   The identifier for the subscription that you want to get. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSubscriptionByIdAsync($subscription_id, $notification_type)
    {
        return $this->getSubscriptionByIdAsyncWithHttpInfo($subscription_id, $notification_type)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getSubscriptionByIdAsyncWithHttpInfo.
     *
     * @param string $subscription_id   The identifier for the subscription that you want to get. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getSubscriptionByIdAsyncWithHttpInfo($subscription_id, $notification_type)
    {
        $request = $this->getSubscriptionByIdRequest($subscription_id, $notification_type);

        return $this->sendRequestAsync($request, GetSubscriptionByIdResponse::class);
    }

    /**
     * Create request for operation 'getSubscriptionById'.
     *
     * @param string $subscription_id   The identifier for the subscription that you want to get. (required)
     * @param string $notification_type The type of notification to which you want to subscribe.   For more information about notification types, see the Notifications API Use Case Guide. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getSubscriptionByIdRequest($subscription_id, $notification_type)
    {
        // verify the required parameter 'subscription_id' is set
        if (null === $subscription_id || (is_array($subscription_id) && 0 === count($subscription_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $subscription_id when calling getSubscriptionById');
        }
        // verify the required parameter 'notification_type' is set
        if (null === $notification_type || (is_array($notification_type) && 0 === count($notification_type))) {
            throw new \InvalidArgumentException('Missing the required parameter $notification_type when calling getSubscriptionById');
        }

        $resourcePath = '/notifications/v1/subscriptions/{notificationType}/{subscriptionId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // path params
        if (null !== $subscription_id) {
            $resourcePath = str_replace(
                '{'.'subscriptionId'.'}',
                ObjectSerializer::toPathValue($subscription_id),
                $resourcePath
            );
        }
        // path params
        if (null !== $notification_type) {
            $resourcePath = str_replace(
                '{'.'notificationType'.'}',
                ObjectSerializer::toPathValue($notification_type),
                $resourcePath
            );
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }
}
