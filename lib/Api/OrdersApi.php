<?php
/**
 * OrdersV0Api.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Api;

use ClouSale\AmazonSellingPartnerAPI\Configuration;
use ClouSale\AmazonSellingPartnerAPI\HeaderSelector;
use ClouSale\AmazonSellingPartnerAPI\Helpers\SellingPartnerApiRequest;
use ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderAddressResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderBuyerInfoResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderItemsBuyerInfoResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderItemsResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderResponse;
use ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrdersResponse;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

/**
 * OrdersV0Api Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class OrdersApi
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
     * Operation getOrder.
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderResponse
     */
    public function getOrder($order_id)
    {
        list($response) = $this->getOrderWithHttpInfo($order_id);

        return $response;
    }

    /**
     * Operation getOrderWithHttpInfo.
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderWithHttpInfo($order_id)
    {
        $request = $this->getOrderRequest($order_id);

        return $this->sendRequest($request, GetOrderResponse::class);
    }

    /**
     * Operation getOrderAsync.
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderAsync($order_id)
    {
        return $this->getOrderAsyncWithHttpInfo($order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderAsyncWithHttpInfo.
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderAsyncWithHttpInfo($order_id)
    {
        $returnType = '\ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderResponse';
        $request = $this->getOrderRequest($order_id);

        return $this->sendRequestAsync($request, GetOrderResponse::class);
    }

    /**
     * Create request for operation 'getOrder'.
     *
     * @param string $order_id An Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrderRequest($order_id)
    {
        // verify the required parameter 'order_id' is set
        if (null === $order_id || (is_array($order_id) && 0 === count($order_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling getOrder');
        }

        $resourcePath = '/orders/v0/orders/{orderId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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

    /**
     * Operation getOrderAddress.
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderAddressResponse
     */
    public function getOrderAddress($order_id)
    {
        list($response) = $this->getOrderAddressWithHttpInfo($order_id);

        return $response;
    }

    /**
     * Operation getOrderAddressWithHttpInfo.
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderAddressResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderAddressWithHttpInfo($order_id)
    {
        $returnType = '\ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderAddressResponse';
        $request = $this->getOrderAddressRequest($order_id);

        return $this->sendRequest($request, GetOrderAddressResponse::class);
    }

    /**
     * Operation getOrderAddressAsync.
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderAddressAsync($order_id)
    {
        return $this->getOrderAddressAsyncWithHttpInfo($order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderAddressAsyncWithHttpInfo.
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderAddressAsyncWithHttpInfo($order_id)
    {
        $request = $this->getOrderAddressRequest($order_id);

        return $this->sendRequestAsync($request, GetOrderAddressResponse::class);
    }

    /**
     * Create request for operation 'getOrderAddress'.
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrderAddressRequest($order_id)
    {
        // verify the required parameter 'order_id' is set
        if (null === $order_id || (is_array($order_id) && 0 === count($order_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling getOrderAddress');
        }

        $resourcePath = '/orders/v0/orders/{orderId}/address';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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

    /**
     * Operation getOrderBuyerInfo.
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderBuyerInfoResponse
     */
    public function getOrderBuyerInfo($order_id)
    {
        list($response) = $this->getOrderBuyerInfoWithHttpInfo($order_id);

        return $response;
    }

    /**
     * Operation getOrderBuyerInfoWithHttpInfo.
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderBuyerInfoResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderBuyerInfoWithHttpInfo($order_id)
    {
        $request = $this->getOrderBuyerInfoRequest($order_id);

        return $this->sendRequest($request, GetOrderBuyerInfoResponse::class);
    }

    /**
     * Operation getOrderBuyerInfoAsync.
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderBuyerInfoAsync($order_id)
    {
        return $this->getOrderBuyerInfoAsyncWithHttpInfo($order_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderBuyerInfoAsyncWithHttpInfo.
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderBuyerInfoAsyncWithHttpInfo($order_id)
    {
        $request = $this->getOrderBuyerInfoRequest($order_id);

        return $this->sendRequestAsync($request, GetOrderBuyerInfoResponse::class);
    }

    /**
     * Create request for operation 'getOrderBuyerInfo'.
     *
     * @param string $order_id An orderId is an Amazon-defined order identifier, in 3-7-7 format. (required)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrderBuyerInfoRequest($order_id)
    {
        // verify the required parameter 'order_id' is set
        if (null === $order_id || (is_array($order_id) && 0 === count($order_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling getOrderBuyerInfo');
        }

        $resourcePath = '/orders/v0/orders/{orderId}/buyerInfo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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

    /**
     * Operation getOrderItems.
     *
     * @param string $order_id   An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderItemsResponse
     */
    public function getOrderItems($order_id, $next_token = null)
    {
        list($response) = $this->getOrderItemsWithHttpInfo($order_id, $next_token);

        return $response;
    }

    /**
     * Operation getOrderItemsWithHttpInfo.
     *
     * @param string $order_id   An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderItemsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderItemsWithHttpInfo($order_id, $next_token = null)
    {
        $request = $this->getOrderItemsRequest($order_id, $next_token);

        return $this->sendRequest($request, GetOrderItemsResponse::class);
    }

    /**
     * Operation getOrderItemsAsync.
     *
     * @param string $order_id   An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderItemsAsync($order_id, $next_token = null)
    {
        return $this->getOrderItemsAsyncWithHttpInfo($order_id, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderItemsAsyncWithHttpInfo.
     *
     * @param string $order_id   An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderItemsAsyncWithHttpInfo($order_id, $next_token = null)
    {
        $returnType = '\ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderItemsResponse';
        $request = $this->getOrderItemsRequest($order_id, $next_token);

        return $this->sendRequestAsync($request, GetOrderItemsResponse::class);
    }

    /**
     * Create request for operation 'getOrderItems'.
     *
     * @param string $order_id   An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrderItemsRequest($order_id, $next_token = null)
    {
        // verify the required parameter 'order_id' is set
        if (null === $order_id || (is_array($order_id) && 0 === count($order_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling getOrderItems');
        }

        $resourcePath = '/orders/v0/orders/{orderId}/orderItems';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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

    /**
     * Operation getOrderItemsBuyerInfo.
     *
     * @param string $order_id   An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderItemsBuyerInfoResponse
     */
    public function getOrderItemsBuyerInfo($order_id, $next_token = null)
    {
        list($response) = $this->getOrderItemsBuyerInfoWithHttpInfo($order_id, $next_token);

        return $response;
    }

    /**
     * Operation getOrderItemsBuyerInfoWithHttpInfo.
     *
     * @param string $order_id   An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderItemsBuyerInfoResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrderItemsBuyerInfoWithHttpInfo($order_id, $next_token = null)
    {
        $request = $this->getOrderItemsBuyerInfoRequest($order_id, $next_token);

        return $this->sendRequest($request, GetOrderItemsBuyerInfoResponse::class);
    }

    /**
     * Operation getOrderItemsBuyerInfoAsync.
     *
     * @param string $order_id   An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderItemsBuyerInfoAsync($order_id, $next_token = null)
    {
        return $this->getOrderItemsBuyerInfoAsyncWithHttpInfo($order_id, $next_token)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrderItemsBuyerInfoAsyncWithHttpInfo.
     *
     * @param string $order_id   An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrderItemsBuyerInfoAsyncWithHttpInfo($order_id, $next_token = null)
    {
        $returnType = '\ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrderItemsBuyerInfoResponse';
        $request = $this->getOrderItemsBuyerInfoRequest($order_id, $next_token);

        return $this->sendRequestAsync($request, GetOrderItemsBuyerInfoResponse::class);
    }

    /**
     * Create request for operation 'getOrderItemsBuyerInfo'.
     *
     * @param string $order_id   An Amazon-defined order identifier, in 3-7-7 format. (required)
     * @param string $next_token A string token returned in the response of your previous request. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrderItemsBuyerInfoRequest($order_id, $next_token = null)
    {
        // verify the required parameter 'order_id' is set
        if (null === $order_id || (is_array($order_id) && 0 === count($order_id))) {
            throw new \InvalidArgumentException('Missing the required parameter $order_id when calling getOrderItemsBuyerInfo');
        }

        $resourcePath = '/orders/v0/orders/{orderId}/orderItems/buyerInfo';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

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

    /**
     * Operation getOrders.
     *
     * @param string[] $marketplace_ids             A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces. (required)
     * @param string   $created_after               A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format. (optional)
     * @param string   $created_before              A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format. (optional)
     * @param string   $last_updated_after          A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string   $last_updated_before         A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string[] $order_statuses              A list of OrderStatus values used to filter the results. Possible values: PendingAvailability (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.); Pending (The order has been placed but payment has not been authorized); Unshipped (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped); PartiallyShipped (One or more, but not all, items in the order have been shipped); Shipped (All items in the order have been shipped); InvoiceUnconfirmed (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.); Canceled (The order has been canceled); and Unfulfillable (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.). (optional)
     * @param string[] $fulfillment_channels        A list that indicates how an order was fulfilled. Filters the results by fulfillment channel. Possible values: FBA (Fulfillment by Amazon); SellerFulfilled (Fulfilled by the seller). (optional)
     * @param string[] $payment_methods             A list of payment method values. Used to select orders paid using the specified payment methods. Possible values: COD (Cash on delivery); CVS (Convenience store payment); Other (Any payment method other than COD or CVS). (optional)
     * @param string   $buyer_email                 The email address of a buyer. Used to select orders that contain the specified email address. (optional)
     * @param string   $seller_order_id             An order identifier that is specified by the seller. Used to select only the orders that match the order identifier. If SellerOrderId is specified, then FulfillmentChannels, OrderStatuses, PaymentMethod, LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified. (optional)
     * @param int      $max_results_per_page        A number that indicates the maximum number of orders that can be returned per page. Value must be 1 - 100. Default 100. (optional)
     * @param string[] $easy_ship_shipment_statuses A list of EasyShipShipmentStatus values. Used to select Easy Ship orders with statuses that match the specified  values. If EasyShipShipmentStatus is specified, only Amazon Easy Ship orders are returned.Possible values: PendingPickUp (Amazon has not yet picked up the package from the seller). LabelCanceled (The seller canceled the pickup). PickedUp (Amazon has picked up the package from the seller). AtOriginFC (The packaged is at the origin fulfillment center). AtDestinationFC (The package is at the destination fulfillment center). OutForDelivery (The package is out for delivery). Damaged (The package was damaged by the carrier). Delivered (The package has been delivered to the buyer). RejectedByBuyer (The package has been rejected by the buyer). Undeliverable (The package cannot be delivered). ReturnedToSeller (The package was not delivered to the buyer and was returned to the seller). ReturningToSeller (The package was not delivered to the buyer and is being returned to the seller). (optional)
     * @param string   $next_token                  A string token returned in the response of your previous request. (optional)
     * @param string[] $amazon_order_ids            A list of AmazonOrderId values. An AmazonOrderId is an Amazon-defined order identifier, in 3-7-7 format. (optional)
     *
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return \ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrdersResponse
     */
    public function getOrders($marketplace_ids, $created_after = null, $created_before = null, $last_updated_after = null, $last_updated_before = null, $order_statuses = null, $fulfillment_channels = null, $payment_methods = null, $buyer_email = null, $seller_order_id = null, $max_results_per_page = null, $easy_ship_shipment_statuses = null, $next_token = null, $amazon_order_ids = null)
    {
        list($response) = $this->getOrdersWithHttpInfo($marketplace_ids, $created_after, $created_before, $last_updated_after, $last_updated_before, $order_statuses, $fulfillment_channels, $payment_methods, $buyer_email, $seller_order_id, $max_results_per_page, $easy_ship_shipment_statuses, $next_token, $amazon_order_ids);

        return $response;
    }

    /**
     * Operation getOrdersWithHttpInfo.
     *
     * @param string[] $marketplace_ids             A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces. (required)
     * @param string   $created_after               A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format. (optional)
     * @param string   $created_before              A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format. (optional)
     * @param string   $last_updated_after          A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string   $last_updated_before         A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string[] $order_statuses              A list of OrderStatus values used to filter the results. Possible values: PendingAvailability (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.); Pending (The order has been placed but payment has not been authorized); Unshipped (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped); PartiallyShipped (One or more, but not all, items in the order have been shipped); Shipped (All items in the order have been shipped); InvoiceUnconfirmed (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.); Canceled (The order has been canceled); and Unfulfillable (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.). (optional)
     * @param string[] $fulfillment_channels        A list that indicates how an order was fulfilled. Filters the results by fulfillment channel. Possible values: FBA (Fulfillment by Amazon); SellerFulfilled (Fulfilled by the seller). (optional)
     * @param string[] $payment_methods             A list of payment method values. Used to select orders paid using the specified payment methods. Possible values: COD (Cash on delivery); CVS (Convenience store payment); Other (Any payment method other than COD or CVS). (optional)
     * @param string   $buyer_email                 The email address of a buyer. Used to select orders that contain the specified email address. (optional)
     * @param string   $seller_order_id             An order identifier that is specified by the seller. Used to select only the orders that match the order identifier. If SellerOrderId is specified, then FulfillmentChannels, OrderStatuses, PaymentMethod, LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified. (optional)
     * @param int      $max_results_per_page        A number that indicates the maximum number of orders that can be returned per page. Value must be 1 - 100. Default 100. (optional)
     * @param string[] $easy_ship_shipment_statuses A list of EasyShipShipmentStatus values. Used to select Easy Ship orders with statuses that match the specified  values. If EasyShipShipmentStatus is specified, only Amazon Easy Ship orders are returned.Possible values: PendingPickUp (Amazon has not yet picked up the package from the seller). LabelCanceled (The seller canceled the pickup). PickedUp (Amazon has picked up the package from the seller). AtOriginFC (The packaged is at the origin fulfillment center). AtDestinationFC (The package is at the destination fulfillment center). OutForDelivery (The package is out for delivery). Damaged (The package was damaged by the carrier). Delivered (The package has been delivered to the buyer). RejectedByBuyer (The package has been rejected by the buyer). Undeliverable (The package cannot be delivered). ReturnedToSeller (The package was not delivered to the buyer and was returned to the seller). ReturningToSeller (The package was not delivered to the buyer and is being returned to the seller). (optional)
     * @param string   $next_token                  A string token returned in the response of your previous request. (optional)
     * @param string[] $amazon_order_ids            A list of AmazonOrderId values. An AmazonOrderId is an Amazon-defined order identifier, in 3-7-7 format. (optional)
     *
     * @throws \ClouSale\AmazonSellingPartnerAPI\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     *
     * @return array of \ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrdersResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function getOrdersWithHttpInfo($marketplace_ids, $created_after = null, $created_before = null, $last_updated_after = null, $last_updated_before = null, $order_statuses = null, $fulfillment_channels = null, $payment_methods = null, $buyer_email = null, $seller_order_id = null, $max_results_per_page = null, $easy_ship_shipment_statuses = null, $next_token = null, $amazon_order_ids = null)
    {
        $returnType = '\ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrdersResponse';
        $request = $this->getOrdersRequest($marketplace_ids, $created_after, $created_before, $last_updated_after, $last_updated_before, $order_statuses, $fulfillment_channels, $payment_methods, $buyer_email, $seller_order_id, $max_results_per_page, $easy_ship_shipment_statuses, $next_token, $amazon_order_ids);

        return $this->sendRequest($request, GetOrdersResponse::class);
    }

    /**
     * Operation getOrdersAsync.
     *
     * @param string[] $marketplace_ids             A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces. (required)
     * @param string   $created_after               A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format. (optional)
     * @param string   $created_before              A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format. (optional)
     * @param string   $last_updated_after          A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string   $last_updated_before         A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string[] $order_statuses              A list of OrderStatus values used to filter the results. Possible values: PendingAvailability (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.); Pending (The order has been placed but payment has not been authorized); Unshipped (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped); PartiallyShipped (One or more, but not all, items in the order have been shipped); Shipped (All items in the order have been shipped); InvoiceUnconfirmed (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.); Canceled (The order has been canceled); and Unfulfillable (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.). (optional)
     * @param string[] $fulfillment_channels        A list that indicates how an order was fulfilled. Filters the results by fulfillment channel. Possible values: FBA (Fulfillment by Amazon); SellerFulfilled (Fulfilled by the seller). (optional)
     * @param string[] $payment_methods             A list of payment method values. Used to select orders paid using the specified payment methods. Possible values: COD (Cash on delivery); CVS (Convenience store payment); Other (Any payment method other than COD or CVS). (optional)
     * @param string   $buyer_email                 The email address of a buyer. Used to select orders that contain the specified email address. (optional)
     * @param string   $seller_order_id             An order identifier that is specified by the seller. Used to select only the orders that match the order identifier. If SellerOrderId is specified, then FulfillmentChannels, OrderStatuses, PaymentMethod, LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified. (optional)
     * @param int      $max_results_per_page        A number that indicates the maximum number of orders that can be returned per page. Value must be 1 - 100. Default 100. (optional)
     * @param string[] $easy_ship_shipment_statuses A list of EasyShipShipmentStatus values. Used to select Easy Ship orders with statuses that match the specified  values. If EasyShipShipmentStatus is specified, only Amazon Easy Ship orders are returned.Possible values: PendingPickUp (Amazon has not yet picked up the package from the seller). LabelCanceled (The seller canceled the pickup). PickedUp (Amazon has picked up the package from the seller). AtOriginFC (The packaged is at the origin fulfillment center). AtDestinationFC (The package is at the destination fulfillment center). OutForDelivery (The package is out for delivery). Damaged (The package was damaged by the carrier). Delivered (The package has been delivered to the buyer). RejectedByBuyer (The package has been rejected by the buyer). Undeliverable (The package cannot be delivered). ReturnedToSeller (The package was not delivered to the buyer and was returned to the seller). ReturningToSeller (The package was not delivered to the buyer and is being returned to the seller). (optional)
     * @param string   $next_token                  A string token returned in the response of your previous request. (optional)
     * @param string[] $amazon_order_ids            A list of AmazonOrderId values. An AmazonOrderId is an Amazon-defined order identifier, in 3-7-7 format. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrdersAsync($marketplace_ids, $created_after = null, $created_before = null, $last_updated_after = null, $last_updated_before = null, $order_statuses = null, $fulfillment_channels = null, $payment_methods = null, $buyer_email = null, $seller_order_id = null, $max_results_per_page = null, $easy_ship_shipment_statuses = null, $next_token = null, $amazon_order_ids = null)
    {
        return $this->getOrdersAsyncWithHttpInfo($marketplace_ids, $created_after, $created_before, $last_updated_after, $last_updated_before, $order_statuses, $fulfillment_channels, $payment_methods, $buyer_email, $seller_order_id, $max_results_per_page, $easy_ship_shipment_statuses, $next_token, $amazon_order_ids)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getOrdersAsyncWithHttpInfo.
     *
     * @param string[] $marketplace_ids             A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces. (required)
     * @param string   $created_after               A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format. (optional)
     * @param string   $created_before              A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format. (optional)
     * @param string   $last_updated_after          A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string   $last_updated_before         A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string[] $order_statuses              A list of OrderStatus values used to filter the results. Possible values: PendingAvailability (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.); Pending (The order has been placed but payment has not been authorized); Unshipped (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped); PartiallyShipped (One or more, but not all, items in the order have been shipped); Shipped (All items in the order have been shipped); InvoiceUnconfirmed (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.); Canceled (The order has been canceled); and Unfulfillable (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.). (optional)
     * @param string[] $fulfillment_channels        A list that indicates how an order was fulfilled. Filters the results by fulfillment channel. Possible values: FBA (Fulfillment by Amazon); SellerFulfilled (Fulfilled by the seller). (optional)
     * @param string[] $payment_methods             A list of payment method values. Used to select orders paid using the specified payment methods. Possible values: COD (Cash on delivery); CVS (Convenience store payment); Other (Any payment method other than COD or CVS). (optional)
     * @param string   $buyer_email                 The email address of a buyer. Used to select orders that contain the specified email address. (optional)
     * @param string   $seller_order_id             An order identifier that is specified by the seller. Used to select only the orders that match the order identifier. If SellerOrderId is specified, then FulfillmentChannels, OrderStatuses, PaymentMethod, LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified. (optional)
     * @param int      $max_results_per_page        A number that indicates the maximum number of orders that can be returned per page. Value must be 1 - 100. Default 100. (optional)
     * @param string[] $easy_ship_shipment_statuses A list of EasyShipShipmentStatus values. Used to select Easy Ship orders with statuses that match the specified  values. If EasyShipShipmentStatus is specified, only Amazon Easy Ship orders are returned.Possible values: PendingPickUp (Amazon has not yet picked up the package from the seller). LabelCanceled (The seller canceled the pickup). PickedUp (Amazon has picked up the package from the seller). AtOriginFC (The packaged is at the origin fulfillment center). AtDestinationFC (The package is at the destination fulfillment center). OutForDelivery (The package is out for delivery). Damaged (The package was damaged by the carrier). Delivered (The package has been delivered to the buyer). RejectedByBuyer (The package has been rejected by the buyer). Undeliverable (The package cannot be delivered). ReturnedToSeller (The package was not delivered to the buyer and was returned to the seller). ReturningToSeller (The package was not delivered to the buyer and is being returned to the seller). (optional)
     * @param string   $next_token                  A string token returned in the response of your previous request. (optional)
     * @param string[] $amazon_order_ids            A list of AmazonOrderId values. An AmazonOrderId is an Amazon-defined order identifier, in 3-7-7 format. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getOrdersAsyncWithHttpInfo($marketplace_ids, $created_after = null, $created_before = null, $last_updated_after = null, $last_updated_before = null, $order_statuses = null, $fulfillment_channels = null, $payment_methods = null, $buyer_email = null, $seller_order_id = null, $max_results_per_page = null, $easy_ship_shipment_statuses = null, $next_token = null, $amazon_order_ids = null)
    {
        $returnType = '\ClouSale\AmazonSellingPartnerAPI\Models\Orders\GetOrdersResponse';
        $request = $this->getOrdersRequest($marketplace_ids, $created_after, $created_before, $last_updated_after, $last_updated_before, $order_statuses, $fulfillment_channels, $payment_methods, $buyer_email, $seller_order_id, $max_results_per_page, $easy_ship_shipment_statuses, $next_token, $amazon_order_ids);

        return $this->sendRequestAsync($request, GetOrdersResponse::class);
    }

    /**
     * Create request for operation 'getOrders'.
     *
     * @param string[] $marketplace_ids             A list of MarketplaceId values. Used to select orders that were placed in the specified marketplaces. (required)
     * @param string   $created_after               A date used for selecting orders created after (or at) a specified time. Only orders placed after the specified time are returned. Either the CreatedAfter parameter or the LastUpdatedAfter parameter is required. Both cannot be empty. The date must be in ISO 8601 format. (optional)
     * @param string   $created_before              A date used for selecting orders created before (or at) a specified time. Only orders placed before the specified time are returned. The date must be in ISO 8601 format. (optional)
     * @param string   $last_updated_after          A date used for selecting orders that were last updated after (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string   $last_updated_before         A date used for selecting orders that were last updated before (or at) a specified time. An update is defined as any change in order status, including the creation of a new order. Includes updates made by Amazon and by the seller. The date must be in ISO 8601 format. (optional)
     * @param string[] $order_statuses              A list of OrderStatus values used to filter the results. Possible values: PendingAvailability (This status is available for pre-orders only. The order has been placed, payment has not been authorized, and the release date of the item is in the future.); Pending (The order has been placed but payment has not been authorized); Unshipped (Payment has been authorized and the order is ready for shipment, but no items in the order have been shipped); PartiallyShipped (One or more, but not all, items in the order have been shipped); Shipped (All items in the order have been shipped); InvoiceUnconfirmed (All items in the order have been shipped. The seller has not yet given confirmation to Amazon that the invoice has been shipped to the buyer.); Canceled (The order has been canceled); and Unfulfillable (The order cannot be fulfilled. This state applies only to Multi-Channel Fulfillment orders.). (optional)
     * @param string[] $fulfillment_channels        A list that indicates how an order was fulfilled. Filters the results by fulfillment channel. Possible values: FBA (Fulfillment by Amazon); SellerFulfilled (Fulfilled by the seller). (optional)
     * @param string[] $payment_methods             A list of payment method values. Used to select orders paid using the specified payment methods. Possible values: COD (Cash on delivery); CVS (Convenience store payment); Other (Any payment method other than COD or CVS). (optional)
     * @param string   $buyer_email                 The email address of a buyer. Used to select orders that contain the specified email address. (optional)
     * @param string   $seller_order_id             An order identifier that is specified by the seller. Used to select only the orders that match the order identifier. If SellerOrderId is specified, then FulfillmentChannels, OrderStatuses, PaymentMethod, LastUpdatedAfter, LastUpdatedBefore, and BuyerEmail cannot be specified. (optional)
     * @param int      $max_results_per_page        A number that indicates the maximum number of orders that can be returned per page. Value must be 1 - 100. Default 100. (optional)
     * @param string[] $easy_ship_shipment_statuses A list of EasyShipShipmentStatus values. Used to select Easy Ship orders with statuses that match the specified  values. If EasyShipShipmentStatus is specified, only Amazon Easy Ship orders are returned.Possible values: PendingPickUp (Amazon has not yet picked up the package from the seller). LabelCanceled (The seller canceled the pickup). PickedUp (Amazon has picked up the package from the seller). AtOriginFC (The packaged is at the origin fulfillment center). AtDestinationFC (The package is at the destination fulfillment center). OutForDelivery (The package is out for delivery). Damaged (The package was damaged by the carrier). Delivered (The package has been delivered to the buyer). RejectedByBuyer (The package has been rejected by the buyer). Undeliverable (The package cannot be delivered). ReturnedToSeller (The package was not delivered to the buyer and was returned to the seller). ReturningToSeller (The package was not delivered to the buyer and is being returned to the seller). (optional)
     * @param string   $next_token                  A string token returned in the response of your previous request. (optional)
     * @param string[] $amazon_order_ids            A list of AmazonOrderId values. An AmazonOrderId is an Amazon-defined order identifier, in 3-7-7 format. (optional)
     *
     * @throws \InvalidArgumentException
     *
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function getOrdersRequest($marketplace_ids, $created_after = null, $created_before = null, $last_updated_after = null, $last_updated_before = null, $order_statuses = null, $fulfillment_channels = null, $payment_methods = null, $buyer_email = null, $seller_order_id = null, $max_results_per_page = null, $easy_ship_shipment_statuses = null, $next_token = null, $amazon_order_ids = null)
    {
        // verify the required parameter 'marketplace_ids' is set
        if (null === $marketplace_ids || (is_array($marketplace_ids) && 0 === count($marketplace_ids))) {
            throw new \InvalidArgumentException('Missing the required parameter $marketplace_ids when calling getOrders');
        }

        $resourcePath = '/orders/v0/orders';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (null !== $created_after) {
            $queryParams['CreatedAfter'] = ObjectSerializer::toQueryValue($created_after);
        }
        // query params
        if (null !== $created_before) {
            $queryParams['CreatedBefore'] = ObjectSerializer::toQueryValue($created_before);
        }
        // query params
        if (null !== $last_updated_after) {
            $queryParams['LastUpdatedAfter'] = ObjectSerializer::toQueryValue($last_updated_after);
        }
        // query params
        if (null !== $last_updated_before) {
            $queryParams['LastUpdatedBefore'] = ObjectSerializer::toQueryValue($last_updated_before);
        }
        // query params
        if (is_array($order_statuses)) {
            $order_statuses = ObjectSerializer::serializeCollection($order_statuses, 'csv', true);
        }
        if (null !== $order_statuses) {
            $queryParams['OrderStatuses'] = ObjectSerializer::toQueryValue($order_statuses);
        }
        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'csv', true);
        }
        if (null !== $marketplace_ids) {
            $queryParams['MarketplaceIds'] = ObjectSerializer::toQueryValue($marketplace_ids);
        }
        // query params
        if (is_array($fulfillment_channels)) {
            $fulfillment_channels = ObjectSerializer::serializeCollection($fulfillment_channels, 'csv', true);
        }
        if (null !== $fulfillment_channels) {
            $queryParams['FulfillmentChannels'] = ObjectSerializer::toQueryValue($fulfillment_channels);
        }
        // query params
        if (is_array($payment_methods)) {
            $payment_methods = ObjectSerializer::serializeCollection($payment_methods, 'csv', true);
        }
        if (null !== $payment_methods) {
            $queryParams['PaymentMethods'] = ObjectSerializer::toQueryValue($payment_methods);
        }
        // query params
        if (null !== $buyer_email) {
            $queryParams['BuyerEmail'] = ObjectSerializer::toQueryValue($buyer_email);
        }
        // query params
        if (null !== $seller_order_id) {
            $queryParams['SellerOrderId'] = ObjectSerializer::toQueryValue($seller_order_id);
        }
        // query params
        if (null !== $max_results_per_page) {
            $queryParams['MaxResultsPerPage'] = ObjectSerializer::toQueryValue($max_results_per_page);
        }
        // query params
        if (is_array($easy_ship_shipment_statuses)) {
            $easy_ship_shipment_statuses = ObjectSerializer::serializeCollection($easy_ship_shipment_statuses, 'csv', true);
        }
        if (null !== $easy_ship_shipment_statuses) {
            $queryParams['EasyShipShipmentStatuses'] = ObjectSerializer::toQueryValue($easy_ship_shipment_statuses);
        }
        // query params
        if (null !== $next_token) {
            $queryParams['NextToken'] = ObjectSerializer::toQueryValue($next_token);
        }
        // query params
        if (is_array($amazon_order_ids)) {
            $amazon_order_ids = ObjectSerializer::serializeCollection($amazon_order_ids, 'csv', true);
        }
        if (null !== $amazon_order_ids) {
            $queryParams['AmazonOrderIds'] = ObjectSerializer::toQueryValue($amazon_order_ids);
        }

        return $this->generateRequest($multipart, $formParams, $queryParams, $resourcePath, $headerParams, 'GET', $httpBody);
    }
}
