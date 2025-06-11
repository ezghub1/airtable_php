# # GetEnterprise200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aggregated** | [**\Ez128\Airtable\Model\GetEnterprise200ResponseAggregated**](GetEnterprise200ResponseAggregated.md) |  | [optional]
**created_time** | **string** | A date timestamp in the ISO format, eg:\&quot;2018-01-01T00:00:00.000Z\&quot; |
**descendant_enterprise_account_ids** | **string[]** | A list of descendant org unit&#39;s belonging to the enterprise account. |
**descendants** | [**array<string,\Ez128\Airtable\Model\GetEnterprise200ResponseDescendantsValue>**](GetEnterprise200ResponseDescendantsValue.md) | The enterprise account values per descendant enterprise account. Only returned when the enterprise account has the Enterprise Hub feature enabled. | [optional]
**email_domains** | [**\Ez128\Airtable\Model\GetEnterprise200ResponseEmailDomainsInner[]**](GetEnterprise200ResponseEmailDomainsInner.md) | A list of email domains associated to the enterprise account. |
**group_ids** | **string[]** | A list of groups that belong to the enterprise account. |
**id** | **string** |  |
**root_enterprise_account_id** | **string** | The ID of this account&#39;s root enterprise account. For accounts that are not part of an Enterprise Hub, this is the same as the account&#39;s own ID. |
**user_ids** | **string[]** | A list of users including all the collaborators of all of the enterprise account&#39;s workspaces, bases, and interfaces. |
**workspace_ids** | **string[]** | A list of workspaces that are managed by the enterprise account. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
