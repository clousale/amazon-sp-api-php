<?php
/**
 * FileType.
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
 * FileType Class Doc Comment.
 *

 * @description The file type for a label.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FileType
{
    /**
     * Possible values of this enum.
     */
    const APPLICATIONPDF = 'application/pdf';
    const APPLICATIONZPL = 'application/zpl';
    const IMAGEPNG = 'image/png';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::APPLICATIONPDF,
self::APPLICATIONZPL,
self::IMAGEPNG,        ];
    }
}
