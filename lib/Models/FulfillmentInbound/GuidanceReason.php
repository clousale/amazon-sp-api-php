<?php
/**
 * GuidanceReason.
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
 * GuidanceReason Class Doc Comment.
 *

 * @description A reason for the current inbound guidance for an item.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class GuidanceReason
{
    /**
     * Possible values of this enum.
     */
    const SLOW_MOVING_ASIN = 'SlowMovingASIN';
    const NO_APPLICABLE_GUIDANCE = 'NoApplicableGuidance';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SLOW_MOVING_ASIN,
self::NO_APPLICABLE_GUIDANCE,        ];
    }
}
