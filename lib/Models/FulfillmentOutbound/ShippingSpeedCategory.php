<?php
/**
 * ShippingSpeedCategory.
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
 * ShippingSpeedCategory Class Doc Comment.
 *

 * @description The shipping method used for the fulfillment order.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ShippingSpeedCategory
{
    /**
     * Possible values of this enum.
     */
    const STANDARD = 'Standard';
    const EXPEDITED = 'Expedited';
    const PRIORITY = 'Priority';
    const SCHEDULED_DELIVERY = 'ScheduledDelivery';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::STANDARD,
self::EXPEDITED,
self::PRIORITY,
self::SCHEDULED_DELIVERY,        ];
    }
}
