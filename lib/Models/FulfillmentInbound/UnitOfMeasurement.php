<?php
/**
 * UnitOfMeasurement.
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
 * UnitOfMeasurement Class Doc Comment.
 *

 * @description Indicates the unit of measurement.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class UnitOfMeasurement
{
    /**
     * Possible values of this enum.
     */
    const INCHES = 'inches';
    const CENTIMETERS = 'centimeters';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::INCHES,
self::CENTIMETERS,        ];
    }
}
