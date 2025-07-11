<?php
/**
 * WebhooksPayloadTest
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
 * Please update the test case below to test the model.
 */

namespace Ez128\Airtable\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * WebhooksPayloadTest Class Doc Comment
 *
 * @category    Class
 * @description The contents of a webhook payload depend on the webhook&#39;s specification and the action performed on the base. Each action can generate one or more payload  depending on the tables, fields and records affected.  For example, consider a webhook subscribed to all dataTypes and changeTypes. If a user renames a table, that will generate a single payload. If another user later adds a field, that will generate a second payload. If the new field affects multiple records, such as a Formula field, then the second payload will contain both the field change and the records affected.  Since many records may be affected, this action may be split across multiple payloads. The split payloads will have the same &#x60;timestamp&#x60;, &#x60;baseTransactionNumber&#x60;, and &#x60;actionMetadata&#x60;. Processing formula fields and updates from the API or sync are examples of a few other sources that can result in multiple payloads.    &#x60;&#x60;&#x60; {   \&quot;payloads\&quot;: [     {       \&quot;timestamp\&quot;: \&quot;2022-02-01T21:25:05.663Z\&quot;,       \&quot;baseTransactionNumber\&quot;: 4,       \&quot;actionMetadata\&quot;: {         \&quot;source\&quot;: \&quot;client\&quot;,         \&quot;sourceMetadata\&quot;: {           \&quot;user\&quot;: {             \&quot;id\&quot;: \&quot;usr00000000000000\&quot;,             \&quot;email\&quot;: \&quot;foo@bar.com\&quot;,             \&quot;permissionLevel\&quot;: \&quot;create\&quot;           }         }       },       \&quot;payloadFormat\&quot;: \&quot;v0\&quot;     }   ],   \&quot;cursor\&quot;: 5,   \&quot;mightHaveMore\&quot;: false } &#x60;&#x60;&#x60;  Clients must not assume that at least one of the following optional fields are present, since we may add new fields to the payload in the future and we will not consider it a breaking change. The shape of objects may change without notice, but existing keys won&#39;t be changed or removed without notice.
 * @package     Ez128\Airtable
 * @author      OpenAPI Generator team
 * @link        https://openapi-generator.tech
 */
class WebhooksPayloadTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "WebhooksPayload"
     */
    public function testWebhooksPayload()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "action_metadata"
     */
    public function testPropertyActionMetadata()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "base_transaction_number"
     */
    public function testPropertyBaseTransactionNumber()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "changed_tables_by_id"
     */
    public function testPropertyChangedTablesById()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "created_tables_by_id"
     */
    public function testPropertyCreatedTablesById()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "destroyed_table_ids"
     */
    public function testPropertyDestroyedTableIds()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "payload_format"
     */
    public function testPropertyPayloadFormat()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "timestamp"
     */
    public function testPropertyTimestamp()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "code"
     */
    public function testPropertyCode()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "error"
     */
    public function testPropertyError()
    {
        // TODO: implement
        self::markTestIncomplete('Not implemented');
    }
}
