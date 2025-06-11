# # MoveWorkspacesRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**replacement_owner_id** | **string** | If the target enterprise account has the invites settings restricted to org unit members, all non-member collaborators will be removed when the workspace are moved. If any workspace only has non-member owners, you must specify a replacementOwnerId to be added as the new owner of such workspaces. If no workspace has only non-member owners, replaceOwnerId is optional and will be ignored if provided. | [optional]
**target_enterprise_account_id** | **string** | ID of the target enterprise account of the move. The target enterprise account must be in the same Hub-enabled organization as the source enterprise account, and you must have admin rights over the target enterprise account. |
**workspace_ids** | **string[]** | ID of the workspaces to be moved. Up to 100 workspaceIds can be provided. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
