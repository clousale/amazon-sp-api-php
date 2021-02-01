<?php
/**
 * LabelFormat.
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
 * LabelFormat Class Doc Comment.
 *

 * @description The label format.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class LabelFormat
{
    /**
     * Possible values of this enum.
     */
    const PDF = 'PDF';
    const PNG = 'PNG';
    const ZPL203 = 'ZPL203';
    const ZPL300 = 'ZPL300';
    const SHIPPING_SERVICE_DEFAULT = 'ShippingServiceDefault';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PDF,
self::PNG,
self::ZPL203,
self::ZPL300,
self::SHIPPING_SERVICE_DEFAULT,        ];
    }
}
