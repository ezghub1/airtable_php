# # CreateRecords200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**details** | [**\Ez128\Airtable\Model\UpdateMultipleRecordsPut200ResponseAnyOfDetails**](UpdateMultipleRecordsPut200ResponseAnyOfDetails.md) |  | [optional]
**records** | [**\Ez128\Airtable\Model\UpdateMultipleRecordsPut200ResponseAnyOf1RecordsInner[]**](UpdateMultipleRecordsPut200ResponseAnyOf1RecordsInner.md) |  |
**created_time** | **string** | A date timestamp in the ISO format, eg:\&quot;2018-01-01T00:00:00.000Z\&quot; |
**fields** | [**array<string,\Ez128\Airtable\Model\CellValue>**](CellValue.md) | Cell values are keyed by either field name or field ID (conditioned on &#x60;returnFieldsByFieldId&#x60;).  See [Cell Values](/api/field-model) for more information on cell value response types. |
**id** | **string** | Record ID |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
