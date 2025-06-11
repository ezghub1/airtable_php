# # ListComments200ResponseCommentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**author** | [**\Ez128\Airtable\Model\ListComments200ResponseCommentsInnerAuthor**](ListComments200ResponseCommentsInnerAuthor.md) |  |
**created_time** | **string** | A date timestamp in the ISO format, eg:\&quot;2018-01-01T00:00:00.000Z\&quot; |
**id** | **string** | A comment ID |
**last_updated_time** | **string** | A date timestamp in the ISO format, eg:\&quot;2018-01-01T00:00:00.000Z\&quot; |
**mentioned** | [**array<string,\Ez128\Airtable\Model\UserMentioned>**](UserMentioned.md) |  | [optional]
**parent_comment_id** | **string** | The comment ID of the parent comment, if this comment is a threaded reply. | [optional]
**reactions** | [**\Ez128\Airtable\Model\ListComments200ResponseCommentsInnerReactionsInner[]**](ListComments200ResponseCommentsInnerReactionsInner.md) | A list of reactions on this comment. Each entry contains information about the emoji itself, along with metadata about the user who reacted. | [optional]
**text** | **string** | The comment text itself. Note that this can contain the user mentioned in the text. See [user mentioned](/api/model/user-mentioned) for more. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
