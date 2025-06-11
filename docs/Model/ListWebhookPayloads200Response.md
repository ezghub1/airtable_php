# # ListWebhookPayloads200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cursor** | **float** | The cursor field in the response indicates the transaction number of the payload that would immediately follow the last payload returned in this request. Payloads are returned in transaction order, so the last payload&#39;s transaction number is (cursor-1), the second-to-last payload&#39;s transaction number is (cursor-2), and so on. Each payload is associated with an incrementing cursor number. If there are no returned payloads, then the cursor in the response will be the same as the cursor specified in the request. The number of the next payload to be generated can be retrieved from cursorForNextPayload in [list webhooks](/api/list-webhooks). Payloads are deleted from Airtable&#39;s servers after 1 week whether or not the client has seen them. The cursor value for the next payload is never reset, even if payloads are deleted. |
**might_have_more** | **bool** | Indicates whether or not there are additional payloads. If mightHaveMore is true, the client should send another request immediately and pass in the cursor from this response, as there could be more payloads. If mightHaveMore is false, there are definitely no more payloads. |
**payloads** | [**\Ez128\Airtable\Model\WebhooksPayload[]**](WebhooksPayload.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
