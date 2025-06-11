# # GetBaseCollaborators200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**collaborators** | [**\Ez128\Airtable\Model\GetBaseCollaborators200ResponseCollaborators**](GetBaseCollaborators200ResponseCollaborators.md) |  | [optional]
**created_time** | **string** | A date timestamp in the ISO format, eg:\&quot;2018-01-01T00:00:00.000Z\&quot; |
**group_collaborators** | [**\Ez128\Airtable\Model\GetBaseCollaborators200ResponseGroupCollaborators**](GetBaseCollaborators200ResponseGroupCollaborators.md) |  | [optional]
**id** | **string** | Base ID, a unique identifier for a base. |
**individual_collaborators** | [**\Ez128\Airtable\Model\GetBaseCollaborators200ResponseIndividualCollaborators**](GetBaseCollaborators200ResponseIndividualCollaborators.md) |  | [optional]
**interfaces** | [**array<string,\Ez128\Airtable\Model\GetBaseCollaborators200ResponseInterfacesValue>**](GetBaseCollaborators200ResponseInterfacesValue.md) |  | [optional]
**invite_links** | [**\Ez128\Airtable\Model\GetBaseCollaborators200ResponseInviteLinks**](GetBaseCollaborators200ResponseInviteLinks.md) |  | [optional]
**name** | **string** |  |
**permission_level** | **string** | Collaborator permission level of the endpoint authenticator in the base. \&quot;none\&quot; for enterprise admin who is not a collaborator in the base but has permission to this endpoint. |
**workspace_id** | **string** | ID of the workspace that contains this base. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
