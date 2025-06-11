# # CellValue

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**is_stale** | **bool** | If the cell should be recomputed due to a dependency change. This can either be a dependent field or the field configuration. |
**state** | **string** | Whether the cell is currently in an error state. |
**value** | **string** | The value that is shown to the user inside of the cell |
**error_type** | **string** | A short string that describes the error. |
**text** | **string** | Barcode data |
**type** | **string** | Barcode symbology, e.g. \&quot;upce\&quot; or \&quot;code39\&quot; | [optional]
**label** | **string** | Button label |
**url** | **string** | For \&quot;Open URL\&quot; actions, the computed url value |
**email** | **string** | User&#39;s email address | [optional]
**id** | **string** | User id or group id |
**name** | **string** | User&#39;s display name (may be omitted if the user hasn&#39;t created an account) | [optional]
**permission_level** | **string** | User&#39;s collaborator permission Level  This is only included if you&#39;re observing a webhooks response. | [optional]
**profile_pic_url** | **string** | User&#39;s profile picture  This is only included if it exists for the user **and** you&#39;re observing a webhooks response. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
