<?php
/**
 * InboundGuidance.
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
 * InboundGuidance Class Doc Comment.
 *

 * @description Specific inbound guidance for an item.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class InboundGuidance
{
    /**
     * Possible values of this enum.
     */
    const INBOUND_NOT_RECOMMENDED = 'InboundNotRecommended';
    const INBOUND_OK = 'InboundOK';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INBOUND_NOT_RECOMMENDED,
self::INBOUND_OK,        ];
    }
}
