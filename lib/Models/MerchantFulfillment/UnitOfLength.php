<?php
/**
 * UnitOfLength.
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
 * UnitOfLength Class Doc Comment.
 *

 * @description The unit of length.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class UnitOfLength
{
    /**
     * Possible values of this enum.
     */
    const INCHES = 'inches';
    const CENTIMETERS = 'centimeters';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INCHES,
self::CENTIMETERS,        ];
    }
}
