<?php
/**
 * FulfillmentOrderStatus.
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
 * FulfillmentOrderStatus Class Doc Comment.
 *

 * @description The current status of the fulfillment order.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FulfillmentOrderStatus
{
    /**
     * Possible values of this enum.
     */
    const _NEW = 'New';
    const RECEIVED = 'Received';
    const PLANNING = 'Planning';
    const PROCESSING = 'Processing';
    const CANCELLED = 'Cancelled';
    const COMPLETE = 'Complete';
    const COMPLETE_PARTIALLED = 'CompletePartialled';
    const UNFULFILLABLE = 'Unfulfillable';
    const INVALID = 'Invalid';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
self::RECEIVED,
self::PLANNING,
self::PROCESSING,
self::CANCELLED,
self::COMPLETE,
self::COMPLETE_PARTIALLED,
self::UNFULFILLABLE,
self::INVALID,        ];
    }
}
