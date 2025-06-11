# # WebhooksPayload

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**action_metadata** | [**\Ez128\Airtable\Model\WebhooksAction**](WebhooksAction.md) | The action responsible for the change. We may add additional sources or source metadata in the future and this will not be considered a breaking change. API consumers are expected to handle unknown sources gracefully. |
**base_transaction_number** | **float** | A number which can be used to determine all changes within a transaction. |
**changed_tables_by_id** | [**array<string,\Ez128\Airtable\Model\WebhooksTableChanged>**](WebhooksTableChanged.md) |  | [optional]
**created_tables_by_id** | [**array<string,\Ez128\Airtable\Model\WebhooksTableCreated>**](WebhooksTableCreated.md) |  | [optional]
**destroyed_table_ids** | **string[]** |  | [optional]
**payload_format** | **string** | The payload format&#39;s version number. This is currently just v0, but it may be increased in the future for breaking payload changes. |
**timestamp** | **string** | The time the action occurred. |
**code** | **string** | Additional error codes may be introduced, and will not be considered a breaking change.  In addition &#x60;INTERNAL_ERROR&#x60; can be returned if an internal error is encountered |
**error** | **bool** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
