<?php
/**
 * PackageStatus.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

/**
 * PackageStatus Class Doc Comment.
 *

 * @description The shipment status of the package.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PackageStatus
{
    /**
     * Possible values of this enum.
     */
    const SHIPPED = 'SHIPPED';
    const IN_TRANSIT = 'IN_TRANSIT';
    const DELIVERED = 'DELIVERED';
    const CHECKED_IN = 'CHECKED_IN';
    const RECEIVING = 'RECEIVING';
    const CLOSED = 'CLOSED';
    const DELETED = 'DELETED';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHIPPED,
self::IN_TRANSIT,
self::DELIVERED,
self::CHECKED_IN,
self::RECEIVING,
self::CLOSED,
self::DELETED,        ];
    }
}
