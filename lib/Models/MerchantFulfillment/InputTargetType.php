<?php
/**
 * InputTargetType.
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
 * InputTargetType Class Doc Comment.
 *

 * @description Indicates whether the additional seller input is at the item or shipment level.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class InputTargetType
{
    /**
     * Possible values of this enum.
     */
    const SHIPMENT_LEVEL = 'SHIPMENT_LEVEL';
    const ITEM_LEVEL = 'ITEM_LEVEL';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHIPMENT_LEVEL,
self::ITEM_LEVEL,        ];
    }
}
