# # UpdateRecordPutRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**fields** | **array<string,mixed>** |  |
**return_fields_by_field_id** | **bool** | An optional boolean value that lets you return field objects keyed by the field id.  This defaults to &#x60;false&#x60;, which returns field objects where the key is the field name. | [optional]
**typecast** | **bool** | The Airtable API will perform best-effort automatic data conversion from string values if the typecast parameter is passed in. Automatic conversion is disabled by default to ensure data integrity, but it may be helpful for integrating with 3rd party data sources. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
