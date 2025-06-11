# # CreateFieldRequestAnyOf7Options

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**formula** | **string** | The formula including fields referenced by their IDs. For example, LEFT(4, {Birthday}) in the Airtable.com formula editor will be returned as LEFT(4, {fldXXX}) via API. |
**is_valid** | **bool** | &#x60;false&#x60; if the formula contains an error. |
**referenced_field_ids** | **string[]** |  |
**result** | [**\Ez128\Airtable\Model\FieldTypeAndOptions**](FieldTypeAndOptions.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
