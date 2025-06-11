# # ListWebhooks200ResponseWebhooksInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**are_notifications_enabled** | **bool** | Whether or not notifications are enabled for the webhook. |
**cursor_for_next_payload** | **float** | The cursor associated with the next payload that will be generated. This cursor will increase every time a new payload is generated for this webhook. |
**expiration_time** | **string** | The time when the webhook expires and is disabled in the ISO format. The webhook will not expire if this is null (in the case User API keys are used) | [optional]
**id** | **string** | An identifier for the webhook (WebhookId). |
**is_hook_enabled** | **bool** | Whether or not the webhook is enabled. Webhooks may be turned off automatically such as when the specification becomes invalid. [See error codes](/api/model/webhooks-payload). |
**last_notification_result** | [**\Ez128\Airtable\Model\WebhooksNotification**](WebhooksNotification.md) |  |
**last_successful_notification_time** | **string** | An identifier for the created webhook. |
**notification_url** | **string** | The url registered with the webhook. May be null if none was given. |
**specification** | [**\Ez128\Airtable\Model\ListWebhooks200ResponseWebhooksInnerSpecification**](ListWebhooks200ResponseWebhooksInnerSpecification.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
