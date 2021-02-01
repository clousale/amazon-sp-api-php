<?php
/**
 * CurrentStatus.
 *
 * PHP version 5
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

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound;

/**
 * CurrentStatus Class Doc Comment.
 *

 * @description The current delivery status of the package.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class CurrentStatus
{
    /**
     * Possible values of this enum.
     */
    const IN_TRANSIT = 'IN_TRANSIT';
    const DELIVERED = 'DELIVERED';
    const RETURNING = 'RETURNING';
    const RETURNED = 'RETURNED';
    const UNDELIVERABLE = 'UNDELIVERABLE';
    const DELAYED = 'DELAYED';
    const AVAILABLE_FOR_PICKUP = 'AVAILABLE_FOR_PICKUP';
    const CUSTOMER_ACTION = 'CUSTOMER_ACTION';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::IN_TRANSIT,
self::DELIVERED,
self::RETURNING,
self::RETURNED,
self::UNDELIVERABLE,
self::DELAYED,
self::AVAILABLE_FOR_PICKUP,
self::CUSTOMER_ACTION,        ];
    }
}
