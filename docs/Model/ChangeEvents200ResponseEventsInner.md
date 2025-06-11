# # ChangeEvents200ResponseEventsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**actor** | [**\Ez128\Airtable\Model\ChangeEventsActor**](ChangeEventsActor.md) | The actor that caused the change event. Note that this could be a user or an internal system. |
**context** | [**\Ez128\Airtable\Model\ChangeEvents200ResponseEventsInnerContext**](ChangeEvents200ResponseEventsInnerContext.md) |  |
**event_timestamp** | **string** | A date timestamp in the ISO format, eg:\&quot;2018-01-01T00:00:00.000Z\&quot; |
**id** | **string** |  |
**object_id** | **string** | ID of the affected object. |
**object_type** | **string** | Type of the affected object. Currently only &#39;base&#39;. |
**origin** | [**\Ez128\Airtable\Model\ChangeEvents200ResponseEventsInnerOrigin**](ChangeEvents200ResponseEventsInnerOrigin.md) |  |
**payload** | [**\Ez128\Airtable\Model\ChangeEvents200ResponseEventsInnerPayload**](ChangeEvents200ResponseEventsInnerPayload.md) |  |
**timestamp** | **string** | A date timestamp in the ISO format, eg:\&quot;2018-01-01T00:00:00.000Z\&quot; |
**type** | **string** | The type of event. **base_modified** is currently the only value. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
