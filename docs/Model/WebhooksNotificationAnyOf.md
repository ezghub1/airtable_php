# # WebhooksNotificationAnyOf

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**completion_timestamp** | **string** | The time of the most recent notification. |
**duration_ms** | **float** | The roundtrip duration of the network call. |
**error** | [**\Ez128\Airtable\Model\WebhooksNotificationAnyOfError**](WebhooksNotificationAnyOfError.md) |  |
**retry_number** | **float** | The number of times the notification was retried. (0 &#x3D; first try) |
**success** | **bool** |  |
**will_be_retried** | **bool** | Whether or not Airtable will attempt to deliver a notification again. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
