<?php
/**
 * ReturnItemDisposition.
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
 * ReturnItemDisposition Class Doc Comment.
 *

 * @description The condition of the return item when received by an Amazon fulfillment center.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ReturnItemDisposition
{
    /**
     * Possible values of this enum.
     */
    const SELLABLE = 'Sellable';
    const DEFECTIVE = 'Defective';
    const CUSTOMER_DAMAGED = 'CustomerDamaged';
    const CARRIER_DAMAGED = 'CarrierDamaged';
    const FULFILLER_DAMAGED = 'FulfillerDamaged';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SELLABLE,
self::DEFECTIVE,
self::CUSTOMER_DAMAGED,
self::CARRIER_DAMAGED,
self::FULFILLER_DAMAGED,        ];
    }
}
