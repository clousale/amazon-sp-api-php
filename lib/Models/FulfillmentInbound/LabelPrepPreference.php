<?php
/**
 * LabelPrepPreference.
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
 * LabelPrepPreference Class Doc Comment.
 *

 * @description The preference for label preparation for an inbound shipment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class LabelPrepPreference
{
    /**
     * Possible values of this enum.
     */
    const SELLER_LABEL = 'SELLER_LABEL';
    const AMAZON_LABEL_ONLY = 'AMAZON_LABEL_ONLY';
    const AMAZON_LABEL_PREFERRED = 'AMAZON_LABEL_PREFERRED';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SELLER_LABEL,
self::AMAZON_LABEL_ONLY,
self::AMAZON_LABEL_PREFERRED,        ];
    }
}
