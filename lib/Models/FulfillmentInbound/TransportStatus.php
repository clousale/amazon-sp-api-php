<?php
/**
 * TransportStatus.
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
 * TransportStatus Class Doc Comment.
 *

 * @description Indicates the status of the Amazon-partnered carrier shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class TransportStatus
{
    /**
     * Possible values of this enum.
     */
    const WORKING = 'WORKING';
    const ESTIMATING = 'ESTIMATING';
    const ESTIMATED = 'ESTIMATED';
    const ERROR_ON_ESTIMATING = 'ERROR_ON_ESTIMATING';
    const CONFIRMING = 'CONFIRMING';
    const CONFIRMED = 'CONFIRMED';
    const ERROR_ON_CONFIRMING = 'ERROR_ON_CONFIRMING';
    const VOIDING = 'VOIDING';
    const VOIDED = 'VOIDED';
    const ERROR_IN_VOIDING = 'ERROR_IN_VOIDING';
    const ERROR = 'ERROR';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::WORKING,
self::ESTIMATING,
self::ESTIMATED,
self::ERROR_ON_ESTIMATING,
self::CONFIRMING,
self::CONFIRMED,
self::ERROR_ON_CONFIRMING,
self::VOIDING,
self::VOIDED,
self::ERROR_IN_VOIDING,
self::ERROR,        ];
    }
}
