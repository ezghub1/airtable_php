# # GetUsersByIdOrEmail200ResponseUsersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**aggregated** | [**\Ez128\Airtable\Model\GetUsersByIdOrEmail200ResponseUsersInnerAggregated**](GetUsersByIdOrEmail200ResponseUsersInnerAggregated.md) |  | [optional]
**collaborations** | [**\Ez128\Airtable\Model\Collaborations**](Collaborations.md) | The user&#39;s direct collaborations on workspaces, bases and interfaces associated with this enterprise account. Excludes collaborations from groups. | [optional]
**created_time** | **string** | When user was created.  This field is only returned when user is internal. | [optional]
**descendants** | [**array<string,\Ez128\Airtable\Model\GetUsersByIdOrEmail200ResponseUsersInnerDescendantsValue>**](GetUsersByIdOrEmail200ResponseUsersInnerDescendantsValue.md) | The user&#39;s values per descendant enterprise account. Only returned when the user is on a claimed domain and the enterprise account has the Enterprise Hub feature enabled. | [optional]
**email** | **string** |  |
**enterprise_user_type** | **string** | The type of user. Only returned if the enterprise has group mappings active and only if user is internal. | [optional]
**groups** | [**\Ez128\Airtable\Model\AddBaseCollaboratorRequestCollaboratorsInnerAnyOf1Group[]**](AddBaseCollaboratorRequestCollaboratorsInnerAnyOf1Group.md) | This field specifies the groups associated with this enterprise account that the user belongs to. This field is only returned when the user is internal. | [optional]
**id** | **string** | A user ID |
**invited_to_airtable_by_user_id** | **string** | A user ID | [optional]
**is_admin** | **bool** | Whether the user has directly assigned admin rights over this enterprise account. Only returned when the user is on a claimed domain. Note: if a user is a super admin but is not directly assigned admin rights over this enterprise account, this field is &#x60;false&#x60;. | [optional]
**is_managed** | **bool** | Whether the user is managed by this enterprise account. Only returned when the user is on a claimed domain. | [optional]
**is_service_account** | **bool** | Whether the user is a [service account](https://support.airtable.com/docs/en/service-accounts-overview). |
**is_sso_required** | **bool** | Whether the user is required to authenticate through their administrating enterprise&#39;s identity provider to login. False if user is not on an enterprise. |
**is_super_admin** | **bool** | Whether the user has super admin rights over this enterprise account. Only returned when the user is on a claimed domain and the enterprise account has the Enterprise Hub feature enabled. | [optional]
**is_two_factor_auth_enabled** | **bool** | Whether the user configured a second authentication method when logging in to Airtable through username/password auth. |
**last_activity_time** | **string** | A date timestamp in the ISO format, eg:\&quot;2018-01-01T00:00:00.000Z\&quot; |
**name** | **string** |  |
**state** | **string** | [provisioned](/api/org-management-glossary#provisioned-user) | [deactivated](/api/org-management-glossary#deactivated-user) |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
