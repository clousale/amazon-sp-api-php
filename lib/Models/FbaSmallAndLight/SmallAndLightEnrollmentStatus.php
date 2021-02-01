<?php
/**
 * SmallAndLightEnrollmentStatus.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for FBA Small And Light.
 *
 * The Selling Partner API for FBA Small and Light lets you help sellers manage their listings in the Small and Light program. The program reduces the cost of fulfilling orders for small and lightweight FBA inventory. You can enroll or remove items from the program and check item eligibility and enrollment status. You can also preview the estimated program fees charged to a seller for items sold while enrolled in the program.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FbaSmallAndLight;

/**
 * SmallAndLightEnrollmentStatus Class Doc Comment.
 *

 * @description The Small and Light enrollment status of the item.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class SmallAndLightEnrollmentStatus
{
    /**
     * Possible values of this enum.
     */
    const ENROLLED = 'ENROLLED';
    const NOT_ENROLLED = 'NOT_ENROLLED';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ENROLLED,
self::NOT_ENROLLED,        ];
    }
}
