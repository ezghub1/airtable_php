# # CreateAWebhook200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expiration_time** | **string** | The time when the webhook expires and is disabled in the ISO format. The webhook will not expire if this is null (in the case User API keys are used) | [optional]
**id** | **string** | An identifier for the webhook (WebhookId). |
**mac_secret_base64** | **string** | A MAC secret. The client should store this value to authenticate webhook pings. There is no way to retrieve this value after the initial creation of the webhook. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
