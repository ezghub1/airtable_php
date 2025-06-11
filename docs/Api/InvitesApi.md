# Ez128\Airtable\InvitesApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteBaseInvite()**](InvitesApi.md#deleteBaseInvite) | **DELETE** /v0/meta/bases/{baseId}/invites/{inviteId} | Delete base invite |
| [**deleteInterfaceInvite()**](InvitesApi.md#deleteInterfaceInvite) | **DELETE** /v0/meta/bases/{baseId}/interfaces/{pageBundleId}/invites/{inviteId} | Delete interface invite |
| [**deleteWorkspaceInvite()**](InvitesApi.md#deleteWorkspaceInvite) | **DELETE** /v0/meta/workspaces/{workspaceId}/invites/{inviteId} | Delete workspace invite |


## `deleteBaseInvite()`

```php
deleteBaseInvite($base_id, $invite_id)
```

Delete base invite

Delete a base invite.  The invite must be [outstanding](/api/org-management-glossary#outstanding-invite).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\InvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$invite_id = 'invite_id_example'; // string

try {
    $apiInstance->deleteBaseInvite($base_id, $invite_id);
} catch (Exception $e) {
    echo 'Exception when calling InvitesApi->deleteBaseInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **invite_id** | **string**|  | |

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

## `deleteInterfaceInvite()`

```php
deleteInterfaceInvite($base_id, $page_bundle_id, $invite_id)
```

Delete interface invite

Delete an interface invite.  The invite must be [outstanding](/api/org-management-glossary#outstanding-invite).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\InvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$page_bundle_id = 'page_bundle_id_example'; // string
$invite_id = 'invite_id_example'; // string

try {
    $apiInstance->deleteInterfaceInvite($base_id, $page_bundle_id, $invite_id);
} catch (Exception $e) {
    echo 'Exception when calling InvitesApi->deleteInterfaceInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **page_bundle_id** | **string**|  | |
| **invite_id** | **string**|  | |

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

## `deleteWorkspaceInvite()`

```php
deleteWorkspaceInvite($workspace_id, $invite_id)
```

Delete workspace invite

Delete a workspace invite.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\InvitesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string
$invite_id = 'invite_id_example'; // string

try {
    $apiInstance->deleteWorkspaceInvite($workspace_id, $invite_id);
} catch (Exception $e) {
    echo 'Exception when calling InvitesApi->deleteWorkspaceInvite: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**|  | |
| **invite_id** | **string**|  | |

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
