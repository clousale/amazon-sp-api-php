<?php
/**
 * FulfillmentAction.
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
 * FulfillmentAction Class Doc Comment.
 *

 * @description Specifies whether the fulfillment order should ship now or have an order hold put on it.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FulfillmentAction
{
    /**
     * Possible values of this enum.
     */
    const SHIP = 'Ship';
    const HOLD = 'Hold';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHIP,
self::HOLD,        ];
    }
}
