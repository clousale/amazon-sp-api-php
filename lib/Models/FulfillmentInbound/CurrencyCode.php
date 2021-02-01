<?php
/**
 * CurrencyCode.
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
 * CurrencyCode Class Doc Comment.
 *

 * @description The currency code.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class CurrencyCode
{
    /**
     * Possible values of this enum.
     */
    const USD = 'USD';
    const GBP = 'GBP';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::USD,
self::GBP,        ];
    }
}
