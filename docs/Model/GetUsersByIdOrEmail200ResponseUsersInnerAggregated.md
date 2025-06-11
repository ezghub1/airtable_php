# # GetUsersByIdOrEmail200ResponseUsersInnerAggregated

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collaborations** | [**\Ez128\Airtable\Model\Collaborations**](Collaborations.md) | The user&#39;s direct collaborations on workspaces, bases and interfaces associated with this enterprise account and its descendants. Excludes collaborations from groups. | [optional]
**groups** | [**\Ez128\Airtable\Model\AddBaseCollaboratorRequestCollaboratorsInnerAnyOf1Group[]**](AddBaseCollaboratorRequestCollaboratorsInnerAnyOf1Group.md) | This field specifies the groups associated with this enterprise account and its descendants that the user belongs to. | [optional]
**is_admin** | **bool** | Whether the user has directly assigned admin rights over this enterprise account or its descendants. | [optional]
**last_activity_time** | **string** | A date timestamp in the ISO format, eg:\&quot;2018-01-01T00:00:00.000Z\&quot; |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
