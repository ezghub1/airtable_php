# # MoveBaseRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**base_id** | **string** | ID of the base to be moved |
**target_index** | **float** | The desired index for the base in the target workspace&#39;s base order (optional). If provided, targetIndex must be a number between 0 (beginning of the list) and the number of bases in the target workspace (end of the list). If targetIndex is not provided, the base will be moved to the end of the list of bases in the target workspace. | [optional]
**target_workspace_id** | **string** | ID of the target workspace of the move. I.e. the workspace that the base will belong to once the move is complete. The target workspace must be in the same enterprise account as the source workspace. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
