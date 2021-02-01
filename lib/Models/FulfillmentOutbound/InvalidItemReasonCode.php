<?php
/**
 * InvalidItemReasonCode.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 */

namespace ClouSale\AmazonSellingPartnerAPI\Models\FulfillmentOutbound;

/**
 * InvalidItemReasonCode Class Doc Comment.
 *

 * @description A code for why the item is invalid for return.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class InvalidItemReasonCode
{
    /**
     * Possible values of this enum.
     */
    const INVALID_VALUES = 'InvalidValues';
    const DUPLICATE_REQUEST = 'DuplicateRequest';
    const NO_COMPLETED_SHIP_ITEMS = 'NoCompletedShipItems';
    const NO_RETURNABLE_QUANTITY = 'NoReturnableQuantity';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INVALID_VALUES,
self::DUPLICATE_REQUEST,
self::NO_COMPLETED_SHIP_ITEMS,
self::NO_RETURNABLE_QUANTITY,        ];
    }
}
