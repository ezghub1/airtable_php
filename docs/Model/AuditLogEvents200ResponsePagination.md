# # AuditLogEvents200ResponsePagination

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next** | **string** | Pagination token to retrieve the next-newest page of available items. If an endTime was provided in the query, this value will be non-null if there exist any newer items to retrieve. If an endTime was not provided in the query, this value will always be present to provide a starting point from which to continue consuming future audit log events. To retrieve the next-newest page of available items, repeat the request that generated _this_ page of items, but supply this value as the **next** query parameter. |
**previous** | **string** | Pagination token used to retrieve the next-oldest page of available items. This value will be non-null in the response only if there exist any older items to retrieve. To retrieve the next-oldest page of available items, repeat the request that generated _this_ page of items, but supply this value as the **previous** query parameter. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
