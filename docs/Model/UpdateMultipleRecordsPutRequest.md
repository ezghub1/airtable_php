# # UpdateMultipleRecordsPutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**perform_upsert** | [**\Ez128\Airtable\Model\UpdateMultipleRecordsPutRequestPerformUpsert**](UpdateMultipleRecordsPutRequestPerformUpsert.md) |  | [optional]
**records** | [**\Ez128\Airtable\Model\UpdateMultipleRecordsPutRequestRecordsInner[]**](UpdateMultipleRecordsPutRequestRecordsInner.md) |  |
**return_fields_by_field_id** | **bool** | If set to &#x60;true&#x60;, records in the API response will key the **fields** object by field ID.  Defaults to &#x60;false&#x60; when unset, which returns **fields** objects keyed by field name. | [optional]
**typecast** | **bool** | If set to &#x60;true&#x60;, Airtable will try to convert string values into the appropriate cell value. This conversion is only performed on a best-effort basis. To ensure your data&#39;s integrity, this should only be used when necessary.  Defaults to &#x60;false&#x60; when unset. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
