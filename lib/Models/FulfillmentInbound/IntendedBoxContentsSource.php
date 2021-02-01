<?php
/**
 * IntendedBoxContentsSource.
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
 * IntendedBoxContentsSource Class Doc Comment.
 *

 * @description How the seller intends to provide box contents information for a shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class IntendedBoxContentsSource
{
    /**
     * Possible values of this enum.
     */
    const NONE = 'NONE';
    const FEED = 'FEED';
    const _2_D_BARCODE = '2D_BARCODE';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
self::FEED,
self::_2_D_BARCODE,        ];
    }
}
