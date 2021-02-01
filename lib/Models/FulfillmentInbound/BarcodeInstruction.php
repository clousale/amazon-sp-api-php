<?php
/**
 * BarcodeInstruction.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Fulfillment Inbound.
 *
 * The Selling Partner API for Fulfillment Inbound lets you create applications that create and update inbound shipments of inventory to Amazon's fulfillment network.
 *
 * OpenAPI spec version: v0
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentInbound;

/**
 * BarcodeInstruction Class Doc Comment.
 *

 * @description Labeling requirements for the item. For more information about FBA labeling requirements, see the Seller Central Help for your marketplace.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class BarcodeInstruction
{
    /**
     * Possible values of this enum.
     */
    const REQUIRES_FNSKU_LABEL = 'RequiresFNSKULabel';
    const CAN_USE_ORIGINAL_BARCODE = 'CanUseOriginalBarcode';
    const MUST_PROVIDE_SELLER_SKU = 'MustProvideSellerSKU';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::REQUIRES_FNSKU_LABEL,
self::CAN_USE_ORIGINAL_BARCODE,
self::MUST_PROVIDE_SELLER_SKU,        ];
    }
}
