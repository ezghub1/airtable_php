# # WebhooksTableChangedChangedViewsByIdValue

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**changed_records_by_id** | [**array<string,\Ez128\Airtable\Model\WebhooksChangedRecordValue>**](WebhooksChangedRecordValue.md) | One or multiple records being **changed** and reported upon via webhooks. | [optional]
**created_records_by_id** | [**array<string,\Ez128\Airtable\Model\WebhooksCreatedRecordValue>**](WebhooksCreatedRecordValue.md) | One or multiple records being **created** and reported upon via webhooks. | [optional]
**destroyed_record_ids** | **string[]** | Destroyed events are generated when a record is deleted or removed from a view. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
