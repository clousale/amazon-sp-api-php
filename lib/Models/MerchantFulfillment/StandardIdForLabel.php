<?php
/**
 * StandardIdForLabel.
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
 * StandardIdForLabel Class Doc Comment.
 *

 * @description The type of standard identifier to print on the label.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class StandardIdForLabel
{
    /**
     * Possible values of this enum.
     */
    const AMAZON_ORDER_ID = 'AmazonOrderId';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AMAZON_ORDER_ID,        ];
    }
}
