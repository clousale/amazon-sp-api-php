<?php
/**
 * DeliveryExperienceOption.
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
 * DeliveryExperienceOption Class Doc Comment.
 *

 * @description The delivery confirmation level.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class DeliveryExperienceOption
{
    /**
     * Possible values of this enum.
     */
    const DELIVERY_CONFIRMATION_WITH_ADULT_SIGNATURE = 'DeliveryConfirmationWithAdultSignature';
    const DELIVERY_CONFIRMATION_WITH_SIGNATURE = 'DeliveryConfirmationWithSignature';
    const DELIVERY_CONFIRMATION_WITHOUT_SIGNATURE = 'DeliveryConfirmationWithoutSignature';
    const NO_TRACKING = 'NoTracking';
    const NO_PREFERENCE = 'NoPreference';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DELIVERY_CONFIRMATION_WITH_ADULT_SIGNATURE,
self::DELIVERY_CONFIRMATION_WITH_SIGNATURE,
self::DELIVERY_CONFIRMATION_WITHOUT_SIGNATURE,
self::NO_TRACKING,
self::NO_PREFERENCE,        ];
    }
}
