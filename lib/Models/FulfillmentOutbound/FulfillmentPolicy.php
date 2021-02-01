<?php
/**
 * FulfillmentPolicy.
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
 * FulfillmentPolicy Class Doc Comment.
 *

 * @description The FulfillmentPolicy value specified when you submitted the createFulfillmentOrder operation.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FulfillmentPolicy
{
    /**
     * Possible values of this enum.
     */
    const FILL_OR_KILL = 'FillOrKill';
    const FILL_ALL = 'FillAll';
    const FILL_ALL_AVAILABLE = 'FillAllAvailable';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::FILL_OR_KILL,
self::FILL_ALL,
self::FILL_ALL_AVAILABLE,        ];
    }
}
