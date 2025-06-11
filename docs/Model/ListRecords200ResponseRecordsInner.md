# # ListRecords200ResponseRecordsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**comment_count** | **float** | The number of comments (if there are any) on the record.  The &#x60;recordMetadata&#x60; query parameter must include &#x60;\&quot;commentCount\&quot;&#x60; in order to receive this. | [optional]
**created_time** | **string** | A date timestamp in the ISO format, eg:\&quot;2018-01-01T00:00:00.000Z\&quot; |
**fields** | [**array<string,\Ez128\Airtable\Model\CellValue>**](CellValue.md) | Cell values are keyed by either field name or field ID (conditioned on &#x60;returnFieldsByFieldId&#x60;).  See [Cell Values](/api/field-model) for more information on cell value response types. |
**id** | **string** | Record ID |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
