<?php
/**
 * PrepGuidance.
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
 * PrepGuidance Class Doc Comment.
 *

 * @description Item preparation instructions.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class PrepGuidance
{
    /**
     * Possible values of this enum.
     */
    const CONSULT_HELP_DOCUMENTS = 'ConsultHelpDocuments';
    const NO_ADDITIONAL_PREP_REQUIRED = 'NoAdditionalPrepRequired';
    const SEE_PREP_INSTRUCTIONS_LIST = 'SeePrepInstructionsList';

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CONSULT_HELP_DOCUMENTS,
self::NO_ADDITIONAL_PREP_REQUIRED,
self::SEE_PREP_INSTRUCTIONS_LIST,        ];
    }
}
