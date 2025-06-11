# Ez128\Airtable\WorkspaceApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteBase()**](WorkspaceApi.md#deleteBase) | **DELETE** /v0/meta/bases/{baseId} | Delete base |
| [**deleteWorkspace()**](WorkspaceApi.md#deleteWorkspace) | **DELETE** /v0/meta/workspaces/{workspaceId} | Delete workspace |
| [**moveBase()**](WorkspaceApi.md#moveBase) | **POST** /v0/meta/workspaces/{workspaceId}/moveBase | Move base |
| [**moveWorkspaces()**](WorkspaceApi.md#moveWorkspaces) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/moveWorkspaces | Move workspaces |
| [**updateWorkspaceRestrictions()**](WorkspaceApi.md#updateWorkspaceRestrictions) | **POST** /v0/meta/workspaces/{workspaceId}/updateRestrictions | Update workspace restrictions |


## `deleteBase()`

```php
deleteBase($base_id): \Ez128\Airtable\Model\DeleteBase200Response
```

Delete base

Deletes the specified base. Deleted bases can be restored by workspace owners from the Trash UI, up to the workspace's billing plan retention period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string

try {
    $result = $apiInstance->deleteBase($base_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->deleteBase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |

### Return type

[**\Ez128\Airtable\Model\DeleteBase200Response**](../Model/DeleteBase200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorkspace()`

```php
deleteWorkspace($workspace_id): \Ez128\Airtable\Model\DeleteWorkspace200Response
```

Delete workspace

Deletes the specified workspace.  Deleted workspaces can be restored by workspace owners from the Trash UI, up to the workspace's billing plan retention period.  **WARNING:** If the API user is not currently a workspace owner (one example where this can happen is if the API user is an enterprise admin), the workspace will not show up in the user's Trash.  **WARNING:** Any bases in the deleted workspace will no longer be accessible, be sure to double check whether there are any actively used bases before proceeding with workspace deletion. If you want to retain access to these bases, you should transfer the bases to another workspace before deleting the workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string

try {
    $result = $apiInstance->deleteWorkspace($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->deleteWorkspace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |

### Return type

[**\Ez128\Airtable\Model\DeleteWorkspace200Response**](../Model/DeleteWorkspace200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveBase()`

```php
moveBase($workspace_id, $move_base_request): mixed
```

Move base

Move a base between two workspaces owned by the enterprise.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$move_base_request = {"baseId":"appLkNDICXNqxSDhG","targetIndex":0,"targetWorkspaceId":"wspmhESAta6clCCwF"}; // \Ez128\Airtable\Model\MoveBaseRequest

try {
    $result = $apiInstance->moveBase($workspace_id, $move_base_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->moveBase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **move_base_request** | [**\Ez128\Airtable\Model\MoveBaseRequest**](../Model/MoveBaseRequest.md)|  | [optional] |

### Return type

**mixed**

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveWorkspaces()`

```php
moveWorkspaces($enterprise_account_id, $move_workspaces_request): \Ez128\Airtable\Model\MoveWorkspaces200Response
```

Move workspaces

Batch move workspaces between two enterprise accounts belonging to the same organization.  This endpoint can only be used if your enterprise account has the Enterprise Hub feature enabled.  If the target enterprise account has the invite settings restricted to org unit members, all non-org unit member collaborators will be removed when the workspaces are moved.  For more information about invites settings, please see [our support article](https://support.airtable.com/docs/settings-airtable-admin-panel#sharing-and-data-in-the-admin-panel).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$move_workspaces_request = {"targetEnterpriseAccountId":"entUBq2RGdihxl3vU","workspaceIds":["wspmhESAta6clCCwF","wspHvvm4dAktsStZH","wspHvvm4dAktsStZH","wspgAeR3b03M3tSSy","wsp4mAKZgXB0vBqU2"]}; // \Ez128\Airtable\Model\MoveWorkspacesRequest

try {
    $result = $apiInstance->moveWorkspaces($enterprise_account_id, $move_workspaces_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->moveWorkspaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **move_workspaces_request** | [**\Ez128\Airtable\Model\MoveWorkspacesRequest**](../Model/MoveWorkspacesRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\MoveWorkspaces200Response**](../Model/MoveWorkspaces200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWorkspaceRestrictions()`

```php
updateWorkspaceRestrictions($workspace_id, $update_workspace_restrictions_request)
```

Update workspace restrictions

Update [sharing restrictions settings](https://support.airtable.com/docs/workspace-sharing-restrictions) for the workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$update_workspace_restrictions_request = {"inviteCreationRestriction":"onlyOwners"}; // \Ez128\Airtable\Model\UpdateWorkspaceRestrictionsRequest

try {
    $apiInstance->updateWorkspaceRestrictions($workspace_id, $update_workspace_restrictions_request);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->updateWorkspaceRestrictions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **update_workspace_restrictions_request** | [**\Ez128\Airtable\Model\UpdateWorkspaceRestrictionsRequest**](../Model/UpdateWorkspaceRestrictionsRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
