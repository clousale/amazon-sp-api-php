<?php
/**
 * ErrorReason.
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
 * ErrorReason Class Doc Comment.
 *

 * @description The reason that the ASIN is invalid.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ErrorReason
{
    /**
     * Possible values of this enum.
     */
    const DOES_NOT_EXIST = 'DoesNotExist';
    const INVALID_ASIN = 'InvalidASIN';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DOES_NOT_EXIST,
self::INVALID_ASIN,        ];
    }
}
