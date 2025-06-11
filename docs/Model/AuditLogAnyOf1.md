# # AuditLogAnyOf1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**created_by_user_id** | **string** | A user ID |
**created_time** | **string** | A date timestamp in the ISO format, eg:\&quot;2018-01-01T00:00:00.000Z\&quot; |
**error_message** | **string** | An error message explaining what went wrong while processing the request. |
**filter** | **string** | Filter specified in the [creation request](/api/create-audit-log-request). | [optional]
**id** | **string** |  |
**state** | **string** | There was an error while attempting to process the audit log request. Refer to the error message and try again. |
**time_period** | **string** | Either YYYY-MM or YYYY-MM-DD, as specified in the [creation request](/api/create-audit-log-request). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
