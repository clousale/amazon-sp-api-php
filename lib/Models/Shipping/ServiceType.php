<?php
/**
 * ServiceType.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Shipping.
 *
 * Provides programmatic access to Amazon Shipping APIs.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\Shipping;

/**
 * ServiceType Class Doc Comment.
 *

 * @description The type of shipping service that will be used for the service offering.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ServiceType
{
    /**
     * Possible values of this enum.
     */
    const GROUND = 'Amazon Shipping Ground';
    const STANDARD = 'Amazon Shipping Standard';
    const PREMIUM = 'Amazon Shipping Premium';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::GROUND,
self::STANDARD,
self::PREMIUM,        ];
    }
}
