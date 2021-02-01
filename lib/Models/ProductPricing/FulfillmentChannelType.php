<?php
/**
 * FulfillmentChannelType.
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
 * FulfillmentChannelType Class Doc Comment.
 *

 * @description Indicates whether the item is fulfilled by Amazon or by the seller (merchant).
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FulfillmentChannelType
{
    /**
     * Possible values of this enum.
     */
    const AMAZON = 'Amazon';
    const MERCHANT = 'Merchant';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AMAZON,
self::MERCHANT,        ];
    }
}
