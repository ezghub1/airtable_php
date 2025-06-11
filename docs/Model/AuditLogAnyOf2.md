# # AuditLogAnyOf2

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_by_user_id** | **string** | A user ID |
**created_time** | **string** | A date timestamp in the ISO format, eg:\&quot;2018-01-01T00:00:00.000Z\&quot; |
**data** | [**\Ez128\Airtable\Model\AuditLogAnyOf2Data**](AuditLogAnyOf2Data.md) |  |
**filter** | **string** | Filter specified in the [creation request](/api/create-audit-log-request). | [optional]
**id** | **string** |  |
**state** | **string** | The audit log request is done processing. Download the files in **data.logFileUrls**. The gzipped files contain newline-delimited JSON log entries.  &#x60;data&#x60; is uniquely provided with the &#x60;done&#x60; state |
**time_period** | **string** | Either YYYY-MM or YYYY-MM-DD, as specified in the [creation request](/api/create-audit-log-request). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
