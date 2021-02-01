<?php
/**
 * ShipmentStatus.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Merchant Fulfillment.
 *
 * The Selling Partner API for Merchant Fulfillment helps you build applications that let sellers purchase shipping for non-Prime and Prime orders using Amazon’s Buy Shipping Services.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\MerchantFulfillment;

/**
 * ShipmentStatus Class Doc Comment.
 *

 * @description The shipment status.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ShipmentStatus
{
    /**
     * Possible values of this enum.
     */
    const PURCHASED = 'Purchased';
    const REFUND_PENDING = 'RefundPending';
    const REFUND_REJECTED = 'RefundRejected';
    const REFUND_APPLIED = 'RefundApplied';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PURCHASED,
self::REFUND_PENDING,
self::REFUND_REJECTED,
self::REFUND_APPLIED,        ];
    }
}
