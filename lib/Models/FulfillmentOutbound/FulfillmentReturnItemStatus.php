<?php
/**
 * FulfillmentReturnItemStatus.
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
 * FulfillmentReturnItemStatus Class Doc Comment.
 *

 * @description Indicates if the return item has been processed by a fulfillment center.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FulfillmentReturnItemStatus
{
    /**
     * Possible values of this enum.
     */
    const _NEW = 'New';
    const PROCESSED = 'Processed';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
self::PROCESSED,        ];
    }
}
