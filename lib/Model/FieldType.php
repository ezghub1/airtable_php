<?php
/**
 * FieldType
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  Ez128\Airtable
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Airtable API
 *
 * The Airtable REST API. Please see https://airtable.com/developers/ for more details.
 *
 * The version of the OpenAPI document: 0
 * Contact: help@airtable.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ez128\Airtable\Model;
use \Ez128\Airtable\ObjectSerializer;

/**
 * FieldType Class Doc Comment
 *
 * @category Class
 * @description These are all of the valid field types, see [here](/api/field-model) for more information.
 * @package  Ez128\Airtable
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class FieldType
{
    /**
     * Possible values of this enum
     */
    public const SINGLE_LINE_TEXT = 'singleLineText';

    public const EMAIL = 'email';

    public const URL = 'url';

    public const MULTILINE_TEXT = 'multilineText';

    public const NUMBER = 'number';

    public const PERCENT = 'percent';

    public const CURRENCY = 'currency';

    public const SINGLE_SELECT = 'singleSelect';

    public const MULTIPLE_SELECTS = 'multipleSelects';

    public const SINGLE_COLLABORATOR = 'singleCollaborator';

    public const MULTIPLE_COLLABORATORS = 'multipleCollaborators';

    public const MULTIPLE_RECORD_LINKS = 'multipleRecordLinks';

    public const DATE = 'date';

    public const DATE_TIME = 'dateTime';

    public const PHONE_NUMBER = 'phoneNumber';

    public const MULTIPLE_ATTACHMENTS = 'multipleAttachments';

    public const CHECKBOX = 'checkbox';

    public const FORMULA = 'formula';

    public const CREATED_TIME = 'createdTime';

    public const ROLLUP = 'rollup';

    public const COUNT = 'count';

    public const LOOKUP = 'lookup';

    public const MULTIPLE_LOOKUP_VALUES = 'multipleLookupValues';

    public const AUTO_NUMBER = 'autoNumber';

    public const BARCODE = 'barcode';

    public const RATING = 'rating';

    public const RICH_TEXT = 'richText';

    public const DURATION = 'duration';

    public const LAST_MODIFIED_TIME = 'lastModifiedTime';

    public const BUTTON = 'button';

    public const CREATED_BY = 'createdBy';

    public const LAST_MODIFIED_BY = 'lastModifiedBy';

    public const EXTERNAL_SYNC_SOURCE = 'externalSyncSource';

    public const AI_TEXT = 'aiText';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SINGLE_LINE_TEXT,
            self::EMAIL,
            self::URL,
            self::MULTILINE_TEXT,
            self::NUMBER,
            self::PERCENT,
            self::CURRENCY,
            self::SINGLE_SELECT,
            self::MULTIPLE_SELECTS,
            self::SINGLE_COLLABORATOR,
            self::MULTIPLE_COLLABORATORS,
            self::MULTIPLE_RECORD_LINKS,
            self::DATE,
            self::DATE_TIME,
            self::PHONE_NUMBER,
            self::MULTIPLE_ATTACHMENTS,
            self::CHECKBOX,
            self::FORMULA,
            self::CREATED_TIME,
            self::ROLLUP,
            self::COUNT,
            self::LOOKUP,
            self::MULTIPLE_LOOKUP_VALUES,
            self::AUTO_NUMBER,
            self::BARCODE,
            self::RATING,
            self::RICH_TEXT,
            self::DURATION,
            self::LAST_MODIFIED_TIME,
            self::BUTTON,
            self::CREATED_BY,
            self::LAST_MODIFIED_BY,
            self::EXTERNAL_SYNC_SOURCE,
            self::AI_TEXT
        ];
    }
}


