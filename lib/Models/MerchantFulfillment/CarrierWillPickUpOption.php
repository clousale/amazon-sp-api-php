<?php
/**
 * CarrierWillPickUpOption.
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
 * CarrierWillPickUpOption Class Doc Comment.
 *

 * @description Carrier will pick up option.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class CarrierWillPickUpOption
{
    /**
     * Possible values of this enum.
     */
    const CARRIER_WILL_PICK_UP = 'CarrierWillPickUp';
    const SHIPPER_WILL_DROP_OFF = 'ShipperWillDropOff';
    const NO_PREFERENCE = 'NoPreference';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CARRIER_WILL_PICK_UP,
self::SHIPPER_WILL_DROP_OFF,
self::NO_PREFERENCE,        ];
    }
}
