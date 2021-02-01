<?php
/**
 * AdditionalLocationInfo.
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
 * AdditionalLocationInfo Class Doc Comment.
 *

 * @description Additional location information.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class AdditionalLocationInfo
{
    /**
     * Possible values of this enum.
     */
    const AS_INSTRUCTED = 'AS_INSTRUCTED';
    const CARPORT = 'CARPORT';
    const CUSTOMER_PICKUP = 'CUSTOMER_PICKUP';
    const DECK = 'DECK';
    const DOOR_PERSON = 'DOOR_PERSON';
    const FRONT_DESK = 'FRONT_DESK';
    const FRONT_DOOR = 'FRONT_DOOR';
    const GARAGE = 'GARAGE';
    const GUARD = 'GUARD';
    const MAIL_ROOM = 'MAIL_ROOM';
    const MAIL_SLOT = 'MAIL_SLOT';
    const MAILBOX = 'MAILBOX';
    const MC_BOY = 'MC_BOY';
    const MC_GIRL = 'MC_GIRL';
    const MC_MAN = 'MC_MAN';
    const MC_WOMAN = 'MC_WOMAN';
    const NEIGHBOR = 'NEIGHBOR';
    const OFFICE = 'OFFICE';
    const OUTBUILDING = 'OUTBUILDING';
    const PATIO = 'PATIO';
    const PORCH = 'PORCH';
    const REAR_DOOR = 'REAR_DOOR';
    const RECEPTIONIST = 'RECEPTIONIST';
    const RECEIVER = 'RECEIVER';
    const SECURE_LOCATION = 'SECURE_LOCATION';
    const SIDE_DOOR = 'SIDE_DOOR';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::AS_INSTRUCTED,
self::CARPORT,
self::CUSTOMER_PICKUP,
self::DECK,
self::DOOR_PERSON,
self::FRONT_DESK,
self::FRONT_DOOR,
self::GARAGE,
self::GUARD,
self::MAIL_ROOM,
self::MAIL_SLOT,
self::MAILBOX,
self::MC_BOY,
self::MC_GIRL,
self::MC_MAN,
self::MC_WOMAN,
self::NEIGHBOR,
self::OFFICE,
self::OUTBUILDING,
self::PATIO,
self::PORCH,
self::REAR_DOOR,
self::RECEPTIONIST,
self::RECEIVER,
self::SECURE_LOCATION,
self::SIDE_DOOR,        ];
    }
}
