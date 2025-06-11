# Ez128\Airtable\CollaboratorsApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**addBaseCollaborator()**](CollaboratorsApi.md#addBaseCollaborator) | **POST** /v0/meta/bases/{baseId}/collaborators | Add base collaborator |
| [**addInterfaceCollaborator()**](CollaboratorsApi.md#addInterfaceCollaborator) | **POST** /v0/meta/bases/{baseId}/interfaces/{pageBundleId}/collaborators | Add interface collaborator |
| [**addWorkspaceCollaborator()**](CollaboratorsApi.md#addWorkspaceCollaborator) | **POST** /v0/meta/workspaces/{workspaceId}/collaborators | Add workspace collaborator |
| [**deleteBaseCollaborator()**](CollaboratorsApi.md#deleteBaseCollaborator) | **DELETE** /v0/meta/bases/{baseId}/collaborators/{userOrGroupId} | Delete base collaborator |
| [**deleteInterfaceCollaborator()**](CollaboratorsApi.md#deleteInterfaceCollaborator) | **DELETE** /v0/meta/bases/{baseId}/interfaces/{pageBundleId}/collaborators/{userOrGroupId} | Delete interface collaborator |
| [**deleteWorkspaceCollaborator()**](CollaboratorsApi.md#deleteWorkspaceCollaborator) | **DELETE** /v0/meta/workspaces/{workspaceId}/collaborators/{userOrGroupId} | Delete workspace collaborator |
| [**getBaseCollaborators()**](CollaboratorsApi.md#getBaseCollaborators) | **GET** /v0/meta/bases/{baseId} | Get base collaborators |
| [**getInterface()**](CollaboratorsApi.md#getInterface) | **GET** /v0/meta/bases/{baseId}/interfaces/{pageBundleId} | Get interface |
| [**getWorkspaceCollaborators()**](CollaboratorsApi.md#getWorkspaceCollaborators) | **GET** /v0/meta/workspaces/{workspaceId} | Get workspace collaborators |
| [**updateCollaboratorBasePermission()**](CollaboratorsApi.md#updateCollaboratorBasePermission) | **PATCH** /v0/meta/bases/{baseId}/collaborators/{userOrGroupId} | Update collaborator base permission |
| [**updateInterfaceCollaborator()**](CollaboratorsApi.md#updateInterfaceCollaborator) | **PATCH** /v0/meta/bases/{baseId}/interfaces/{pageBundleId}/collaborators/{userOrGroupId} | Update interface collaborator |
| [**updateWorkspaceCollaborator()**](CollaboratorsApi.md#updateWorkspaceCollaborator) | **PATCH** /v0/meta/workspaces/{workspaceId}/collaborators/{userOrGroupId} | Update workspace collaborator |


## `addBaseCollaborator()`

```php
addBaseCollaborator($base_id, $add_base_collaborator_request)
```

Add base collaborator

Add a new base collaborator. Despite the name, this route currently only supports adding one collaborator at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$add_base_collaborator_request = {"collaborators":[{"permissionLevel":"edit","user":{"id":"usr00000000000000"}}]}; // \Ez128\Airtable\Model\AddBaseCollaboratorRequest

try {
    $apiInstance->addBaseCollaborator($base_id, $add_base_collaborator_request);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->addBaseCollaborator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **add_base_collaborator_request** | [**\Ez128\Airtable\Model\AddBaseCollaboratorRequest**](../Model/AddBaseCollaboratorRequest.md)|  | [optional] |

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

## `addInterfaceCollaborator()`

```php
addInterfaceCollaborator($base_id, $page_bundle_id, $add_interface_collaborator_request)
```

Add interface collaborator

Use this to add a collaborator to an interface.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$page_bundle_id = 'page_bundle_id_example'; // string
$add_interface_collaborator_request = new \Ez128\Airtable\Model\AddInterfaceCollaboratorRequest(); // \Ez128\Airtable\Model\AddInterfaceCollaboratorRequest

try {
    $apiInstance->addInterfaceCollaborator($base_id, $page_bundle_id, $add_interface_collaborator_request);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->addInterfaceCollaborator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **page_bundle_id** | **string**|  | |
| **add_interface_collaborator_request** | [**\Ez128\Airtable\Model\AddInterfaceCollaboratorRequest**](../Model/AddInterfaceCollaboratorRequest.md)|  | [optional] |

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

## `addWorkspaceCollaborator()`

```php
addWorkspaceCollaborator($workspace_id, $add_workspace_collaborator_request)
```

Add workspace collaborator

Add a new workspace collaborator. Despite the name, this route currently only supports adding one collaborator at a time.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$add_workspace_collaborator_request = {"collaborators":[{"permissionLevel":"edit","user":{"id":"usr00000000000000"}}]}; // \Ez128\Airtable\Model\AddWorkspaceCollaboratorRequest

try {
    $apiInstance->addWorkspaceCollaborator($workspace_id, $add_workspace_collaborator_request);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->addWorkspaceCollaborator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **add_workspace_collaborator_request** | [**\Ez128\Airtable\Model\AddWorkspaceCollaboratorRequest**](../Model/AddWorkspaceCollaboratorRequest.md)|  | [optional] |

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

## `deleteBaseCollaborator()`

```php
deleteBaseCollaborator($base_id, $user_or_group_id)
```

Delete base collaborator

Delete a base collaborator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$user_or_group_id = 'user_or_group_id_example'; // string

try {
    $apiInstance->deleteBaseCollaborator($base_id, $user_or_group_id);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->deleteBaseCollaborator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **user_or_group_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteInterfaceCollaborator()`

```php
deleteInterfaceCollaborator($base_id, $page_bundle_id, $user_or_group_id)
```

Delete interface collaborator

Delete an interface collaborator. Requires base collaborator access to remove others, but can be used to remove yourself even with interface-only collaborator access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$page_bundle_id = 'page_bundle_id_example'; // string
$user_or_group_id = 'user_or_group_id_example'; // string

try {
    $apiInstance->deleteInterfaceCollaborator($base_id, $page_bundle_id, $user_or_group_id);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->deleteInterfaceCollaborator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **page_bundle_id** | **string**|  | |
| **user_or_group_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteWorkspaceCollaborator()`

```php
deleteWorkspaceCollaborator($workspace_id, $user_or_group_id)
```

Delete workspace collaborator

Delete a workspace collaborator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$user_or_group_id = 'user_or_group_id_example'; // string

try {
    $apiInstance->deleteWorkspaceCollaborator($workspace_id, $user_or_group_id);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->deleteWorkspaceCollaborator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **user_or_group_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBaseCollaborators()`

```php
getBaseCollaborators($base_id, $include): \Ez128\Airtable\Model\GetBaseCollaborators200Response
```

Get base collaborators

Returns basic information on the base. Does not include deleted collaborators and only include [outstanding](/api/org-management-glossary#outstanding-invite) invites.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$include = ["collaborators"]; // string[]

try {
    $result = $apiInstance->getBaseCollaborators($base_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->getBaseCollaborators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **include** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\GetBaseCollaborators200Response**](../Model/GetBaseCollaborators200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getInterface()`

```php
getInterface($base_id, $page_bundle_id, $include): \Ez128\Airtable\Model\GetInterface200Response
```

Get interface

Returns general information about the interface. Does not include deleted collaborators and only includes [outstanding](/api/org-management-glossary#outstanding-invite) invites.  `pageBundleId` is the ID of the interface and can be found in the [`interfaces`](/api/get-base-collaborators#response-interfaces) object returned by the [get base collaborators](/api/get-base-collaborators) endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$page_bundle_id = 'page_bundle_id_example'; // string
$include = array('include_example'); // string[]

try {
    $result = $apiInstance->getInterface($base_id, $page_bundle_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->getInterface: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **page_bundle_id** | **string**|  | |
| **include** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\GetInterface200Response**](../Model/GetInterface200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getWorkspaceCollaborators()`

```php
getWorkspaceCollaborators($workspace_id, $include): \Ez128\Airtable\Model\GetWorkspaceCollaborators200Response
```

Get workspace collaborators

Returns basic information on the workspace. Does not include deleted collaborators and only include [outstanding](/api/org-management-glossary#outstanding-invite) invites.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$include = array('include_example'); // string[]

try {
    $result = $apiInstance->getWorkspaceCollaborators($workspace_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->getWorkspaceCollaborators: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **include** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\GetWorkspaceCollaborators200Response**](../Model/GetWorkspaceCollaborators200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCollaboratorBasePermission()`

```php
updateCollaboratorBasePermission($base_id, $user_or_group_id, $update_collaborator_base_permission_request)
```

Update collaborator base permission

Updates the permission level of a collaborator on a base.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$user_or_group_id = 'user_or_group_id_example'; // string
$update_collaborator_base_permission_request = {"permissionLevel":"read"}; // \Ez128\Airtable\Model\UpdateCollaboratorBasePermissionRequest

try {
    $apiInstance->updateCollaboratorBasePermission($base_id, $user_or_group_id, $update_collaborator_base_permission_request);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->updateCollaboratorBasePermission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **user_or_group_id** | **string**|  | |
| **update_collaborator_base_permission_request** | [**\Ez128\Airtable\Model\UpdateCollaboratorBasePermissionRequest**](../Model/UpdateCollaboratorBasePermissionRequest.md)|  | [optional] |

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

## `updateInterfaceCollaborator()`

```php
updateInterfaceCollaborator($base_id, $page_bundle_id, $user_or_group_id, $update_interface_collaborator_request)
```

Update interface collaborator

Use this to update permissions for an interface-only collaborator.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$page_bundle_id = 'page_bundle_id_example'; // string
$user_or_group_id = 'user_or_group_id_example'; // string
$update_interface_collaborator_request = new \Ez128\Airtable\Model\UpdateInterfaceCollaboratorRequest(); // \Ez128\Airtable\Model\UpdateInterfaceCollaboratorRequest

try {
    $apiInstance->updateInterfaceCollaborator($base_id, $page_bundle_id, $user_or_group_id, $update_interface_collaborator_request);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->updateInterfaceCollaborator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **page_bundle_id** | **string**|  | |
| **user_or_group_id** | **string**|  | |
| **update_interface_collaborator_request** | [**\Ez128\Airtable\Model\UpdateInterfaceCollaboratorRequest**](../Model/UpdateInterfaceCollaboratorRequest.md)|  | [optional] |

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

## `updateWorkspaceCollaborator()`

```php
updateWorkspaceCollaborator($workspace_id, $user_or_group_id, $update_workspace_collaborator_request)
```

Update workspace collaborator

Updates the permission level of a collaborator on a workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\CollaboratorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$user_or_group_id = 'user_or_group_id_example'; // string
$update_workspace_collaborator_request = {"permissionLevel":"read"}; // \Ez128\Airtable\Model\UpdateWorkspaceCollaboratorRequest

try {
    $apiInstance->updateWorkspaceCollaborator($workspace_id, $user_or_group_id, $update_workspace_collaborator_request);
} catch (Exception $e) {
    echo 'Exception when calling CollaboratorsApi->updateWorkspaceCollaborator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **user_or_group_id** | **string**|  | |
| **update_workspace_collaborator_request** | [**\Ez128\Airtable\Model\UpdateWorkspaceCollaboratorRequest**](../Model/UpdateWorkspaceCollaboratorRequest.md)|  | [optional] |

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
