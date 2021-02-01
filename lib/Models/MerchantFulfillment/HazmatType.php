<?php
/**
 * HazmatType.
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
 * HazmatType Class Doc Comment.
 *

 * @description Hazardous materials options for a package. Consult the terms and conditions for each carrier for more information on hazardous materials.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class HazmatType
{
    /**
     * Possible values of this enum.
     */
    const NONE = 'None';
    const LQ_HAZMAT = 'LQHazmat';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
self::LQ_HAZMAT,        ];
    }
}
