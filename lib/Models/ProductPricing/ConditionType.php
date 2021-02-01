<?php
/**
 * ConditionType.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Pricing.
 *
 * The Selling Partner API for Pricing helps you programmatically retrieve product pricing and offer information for Amazon Marketplace products.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\ProductPricing;

/**
 * ConditionType Class Doc Comment.
 *

 * @description Indicates the condition of the item. Possible values: New, Used, Collectible, Refurbished, Club.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class ConditionType
{
    /**
     * Possible values of this enum.
     */
    const _NEW = 'New';
    const USED = 'Used';
    const COLLECTIBLE = 'Collectible';
    const REFURBISHED = 'Refurbished';
    const CLUB = 'Club';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_NEW,
self::USED,
self::COLLECTIBLE,
self::REFURBISHED,
self::CLUB,        ];
    }
}
