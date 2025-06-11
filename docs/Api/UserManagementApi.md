# Ez128\Airtable\UserManagementApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserGroup()**](UserManagementApi.md#getUserGroup) | **GET** /v0/meta/groups/{groupId} | Get user group |
| [**moveUserGroups()**](UserManagementApi.md#moveUserGroups) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/moveGroups | Move user groups |


## `getUserGroup()`

```php
getUserGroup($group_id, $include): \Ez128\Airtable\Model\GetUserGroup200Response
```

Get user group

Returns basic information relevant to the user group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$include = array('include_example'); // string[]

try {
    $result = $apiInstance->getUserGroup($group_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->getUserGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
| **include** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\GetUserGroup200Response**](../Model/GetUserGroup200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `moveUserGroups()`

```php
moveUserGroups($enterprise_account_id, $move_user_groups_request): \Ez128\Airtable\Model\MoveUserGroups200Response
```

Move user groups

Batch move user groups between two enterprise accounts belonging to the same organization.  This endpoint can only be used if your enterprise account has the Enterprise Hub feature enabled.  If the target enterprise account has the invites settings restricted to org unit members, group members who are non-org unit members will be removed when the user groups are moved.  For more information about invites settings, please see [our support article](https://support.airtable.com/docs/settings-airtable-admin-panel#sharing-and-data-in-the-admin-panel).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\UserManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$move_user_groups_request = {"groupIds":["ugp1mKGb3KXUyQfOZ","ugp1mKGb3KXUyQfOZ","ugpR8ZT9KtIgp8Bh3","ugp1UdbspZKMrIOjk"],"targetEnterpriseAccountId":"entUBq2RGdihxl3vU"}; // \Ez128\Airtable\Model\MoveUserGroupsRequest

try {
    $result = $apiInstance->moveUserGroups($enterprise_account_id, $move_user_groups_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserManagementApi->moveUserGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **move_user_groups_request** | [**\Ez128\Airtable\Model\MoveUserGroupsRequest**](../Model/MoveUserGroupsRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\MoveUserGroups200Response**](../Model/MoveUserGroups200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
