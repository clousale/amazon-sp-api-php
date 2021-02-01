<?php
/**
 * LabelPrepType.
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
 * LabelPrepType Class Doc Comment.
 *

 * @description The type of label preparation that is required for the inbound shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class LabelPrepType
{
    /**
     * Possible values of this enum.
     */
    const NO_LABEL = 'NO_LABEL';
    const SELLER_LABEL = 'SELLER_LABEL';
    const AMAZON_LABEL = 'AMAZON_LABEL';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NO_LABEL,
self::SELLER_LABEL,
self::AMAZON_LABEL,        ];
    }
}
