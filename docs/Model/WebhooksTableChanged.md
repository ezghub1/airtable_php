# # WebhooksTableChanged

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**changed_fields_by_id** | [**array<string,\Ez128\Airtable\Model\WebhooksTableChangedChangedFieldsByIdValue>**](WebhooksTableChangedChangedFieldsByIdValue.md) |  | [optional]
**changed_metadata** | [**\Ez128\Airtable\Model\WebhooksTableChangedChangedMetadata**](WebhooksTableChangedChangedMetadata.md) |  | [optional]
**changed_records_by_id** | [**array<string,\Ez128\Airtable\Model\WebhooksChangedRecordValue>**](WebhooksChangedRecordValue.md) | One or multiple records being **changed** and reported upon via webhooks. | [optional]
**changed_views_by_id** | [**array<string,\Ez128\Airtable\Model\WebhooksTableChangedChangedViewsByIdValue>**](WebhooksTableChangedChangedViewsByIdValue.md) | This is only included when &#x60;recordChangeScope&#x60; is a view id. | [optional]
**created_fields_by_id** | [**array<string,\Ez128\Airtable\Model\WebhooksTableChangedCreatedFieldsByIdValue>**](WebhooksTableChangedCreatedFieldsByIdValue.md) |  | [optional]
**created_records_by_id** | [**array<string,\Ez128\Airtable\Model\WebhooksCreatedRecordValue>**](WebhooksCreatedRecordValue.md) | One or multiple records being **created** and reported upon via webhooks. | [optional]
**destroyed_field_ids** | **string[]** |  | [optional]
**destroyed_record_ids** | **string[]** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
