# Ez128\Airtable\UserApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteUserById()**](UserApi.md#deleteUserById) | **DELETE** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users/{userId} | Delete user by id |
| [**deleteUsersByEmail()**](UserApi.md#deleteUsersByEmail) | **DELETE** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users | Delete users by email |
| [**getUserById()**](UserApi.md#getUserById) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users/{userId} | Get user by id |
| [**getUsersByIdOrEmail()**](UserApi.md#getUsersByIdOrEmail) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users | Get users by id or email |
| [**grantAdminAccess()**](UserApi.md#grantAdminAccess) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users/grantAdminAccess | Grant admin access |
| [**logoutUser()**](UserApi.md#logoutUser) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users/{userId}/logout | Logout user |
| [**manageUser()**](UserApi.md#manageUser) | **PATCH** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users/{userId} | Manage user |
| [**manageUserBatched()**](UserApi.md#manageUserBatched) | **PATCH** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users | Manage user batched |
| [**manageUserMembership()**](UserApi.md#manageUserMembership) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users/claim | Manage user membership |
| [**revokeAdminAccess()**](UserApi.md#revokeAdminAccess) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users/revokeAdminAccess | Revoke admin access |


## `deleteUserById()`

```php
deleteUserById($enterprise_account_id, $user_id): mixed
```

Delete user by id

Delete ELA enterprise account [internal](/api/org-management-glossary#internal-users) users and \"claiming\" enterprise account [managed](/api/org-management-glossary#managed-user) users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->deleteUserById($enterprise_account_id, $user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **user_id** | **string**|  | |

### Return type

**mixed**

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteUsersByEmail()`

```php
deleteUsersByEmail($enterprise_account_id, $email): \Ez128\Airtable\Model\DeleteUsersByEmail200Response
```

Delete users by email

Delete multiple users by email.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$email = ["foo@bar.com","bar@bam.com"]; // string[]

try {
    $result = $apiInstance->deleteUsersByEmail($enterprise_account_id, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteUsersByEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **email** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\DeleteUsersByEmail200Response**](../Model/DeleteUsersByEmail200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUserById()`

```php
getUserById($enterprise_account_id, $user_id, $include): \Ez128\Airtable\Model\GetUserById200Response
```

Get user by id

Returns basic information relevant to both [internal](/api/org-management-glossary#internal-user) and [external](/api/org-management-glossary#external-user) user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$user_id = 'user_id_example'; // string
$include = array('include_example'); // string[]

try {
    $result = $apiInstance->getUserById($enterprise_account_id, $user_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **user_id** | **string**|  | |
| **include** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\GetUserById200Response**](../Model/GetUserById200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getUsersByIdOrEmail()`

```php
getUsersByIdOrEmail($enterprise_account_id, $email, $id, $include): \Ez128\Airtable\Model\GetUsersByIdOrEmail200Response
```

Get users by id or email

Returns basic information relevant to both [internal](/api/org-management-glossary#internal-user) and [external](/api/org-management-glossary#external-user) user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$email = ["foo@bar.com"]; // string[]
$id = ["usrsOEchC9xuwRgKk"]; // string[]
$include = ["collaborations"]; // string[]

try {
    $result = $apiInstance->getUsersByIdOrEmail($enterprise_account_id, $email, $id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUsersByIdOrEmail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **email** | [**string[]**](../Model/string.md)|  | [optional] |
| **id** | [**string[]**](../Model/string.md)|  | [optional] |
| **include** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\GetUsersByIdOrEmail200Response**](../Model/GetUsersByIdOrEmail200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `grantAdminAccess()`

```php
grantAdminAccess($enterprise_account_id, $grant_admin_access_request): \Ez128\Airtable\Model\GrantAdminAccess200Response
```

Grant admin access

Grant admin access to users. To use this endpoint, provide either the user's `id` or `email` in the request body. If both are supplied, the `email` will be ignored.  In the example request provided, the first two users are successfully processed while all of the remaining users are not processed and are returned in the `errors` array with the reason why they were not able to be processed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$grant_admin_access_request = {"users":[{"id":"usrL2PNC5o3H4lBEi"},{"email":"foo@bar.com"},{"email":"bam@bam.com"},{"id":"usrsOEchC9xuwRgKk"},{"email":"foo@bam.com"},{"id":"usrGcrteE5fUMqq0R"}]}; // \Ez128\Airtable\Model\GrantAdminAccessRequest

try {
    $result = $apiInstance->grantAdminAccess($enterprise_account_id, $grant_admin_access_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->grantAdminAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **grant_admin_access_request** | [**\Ez128\Airtable\Model\GrantAdminAccessRequest**](../Model/GrantAdminAccessRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\GrantAdminAccess200Response**](../Model/GrantAdminAccess200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `logoutUser()`

```php
logoutUser($enterprise_account_id, $user_id, $body)
```

Logout user

Logout the user.  Only available for ELA and FLA [internal](/api/org-management-glossary#internal-user) enterprise account users and [managed](/api/org-management-glossary#managed-user) \"claiming\" enterprise users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$user_id = 'user_id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $apiInstance->logoutUser($enterprise_account_id, $user_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->logoutUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **user_id** | **string**|  | |
| **body** | **object**|  | [optional] |

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

## `manageUser()`

```php
manageUser($enterprise_account_id, $user_id, $manage_user_request): mixed
```

Manage user

Manage enterprise account [managed](/api/org-management-glossary#managed-user) users.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$user_id = 'user_id_example'; // string
$manage_user_request = {"email":"foo@bar.com","firstName":"Foo","lastName":"Baz","state":"provisioned"}; // \Ez128\Airtable\Model\ManageUserRequest

try {
    $result = $apiInstance->manageUser($enterprise_account_id, $user_id, $manage_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->manageUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **user_id** | **string**|  | |
| **manage_user_request** | [**\Ez128\Airtable\Model\ManageUserRequest**](../Model/ManageUserRequest.md)|  | [optional] |

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

## `manageUserBatched()`

```php
manageUserBatched($enterprise_account_id, $manage_user_batched_request): \Ez128\Airtable\Model\ManageUserBatched200Response
```

Manage user batched

Batch manage enterprise account users. One of `id` or `email` must supplied in the body. If both are supplied, `id` will be used as the identifier in changing user email to the `email` specified in the request.  *WARNING:* We recommend performing actions on up to 10 users at a time to avoid timeouts. Though we currently do not enforce a limit on the number of users you can manage at once, we are monitoring the performance of this endpoint and may enforce a limit in the future.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$manage_user_batched_request = {"users":[{"email":"foo@bar.com","id":"usrL2PNC5o3H4lBEi","state":"provisioned"},{"id":"usrsOEchC9xuwRgKk","state":"deactivated"},{"email":"foo@bam.com","id":"usrL2PNC5o3H4lBEi"},{"email":"bam@bam.com","state":"provisioned"}]}; // \Ez128\Airtable\Model\ManageUserBatchedRequest

try {
    $result = $apiInstance->manageUserBatched($enterprise_account_id, $manage_user_batched_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->manageUserBatched: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **manage_user_batched_request** | [**\Ez128\Airtable\Model\ManageUserBatchedRequest**](../Model/ManageUserBatchedRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\ManageUserBatched200Response**](../Model/ManageUserBatched200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageUserMembership()`

```php
manageUserMembership($enterprise_account_id, $manage_user_membership_request): \Ez128\Airtable\Model\ManageUserMembership200Response
```

Manage user membership

Batch manage organizations enterprise account users. This endpoint allows you to change a user's membership status from being unmanaged to being an organization member, and vice versa. To use this endpoint, provide either the user's `id` or `email` in the request body. If both are supplied, the `email` will be ignored.  This endpoint can only be used if your enterprise is not domain capturing.  In the example request provided, the first two users are successfully processed while all of the remaining users are not processed and are returned in the `errors` array with the reason why they were not able to be processed.  Note that the domain of the user you are trying to claim must be verified in your organization's Admin Panel. If the domain is not verified, the user will not be claimed and will be returned in the `errors` array.  For more information on managing users and the different types of users in organizations, please see [our support article](https://support.airtable.com/docs/using-organizations).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$manage_user_membership_request = {"users":[{"id":"usrL2PNC5o3H4lBEi","state":"managed"},{"email":"foo@bar.com","state":"unmanaged"},{"email":"bam@bam.com","state":"managed"},{"id":"usrsOEchC9xuwRgKk","state":"unmanaged"},{"id":"usrL2PNC5o3H4lBEi","state":"managed"},{"email":"user@unverifiedDomain.com","state":"managed"},{"email":"user@externalDomain.com","state":"managed"},{"id":"usrGcrteE5fUMqq0R","state":"managed"},{"id":"usrqccqnMB2eHylqB","state":"managed"},{"id":"usrogvSbotRtzdtZW","state":"unmanaged"},{"email":"foo@bam.com","state":"unmanaged"},{"id":"usrcQYqV90vkqUDXv","state":"unmanaged"}]}; // \Ez128\Airtable\Model\ManageUserMembershipRequest

try {
    $result = $apiInstance->manageUserMembership($enterprise_account_id, $manage_user_membership_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->manageUserMembership: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **manage_user_membership_request** | [**\Ez128\Airtable\Model\ManageUserMembershipRequest**](../Model/ManageUserMembershipRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\ManageUserMembership200Response**](../Model/ManageUserMembership200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `revokeAdminAccess()`

```php
revokeAdminAccess($enterprise_account_id, $revoke_admin_access_request): \Ez128\Airtable\Model\RevokeAdminAccess200Response
```

Revoke admin access

Revokes admin access from users. To use this endpoint, provide either the user's `id` or `email` in the request body. If both are supplied, the `email` will be ignored.  In the example request provided, the first two users are successfully processed while all of the remaining users are not processed and are returned in the `errors` array with the reason why they were not able to be processed.  Note that you can only revoke directly assigned admin access.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$revoke_admin_access_request = {"users":[{"id":"usrL2PNC5o3H4lBEi"},{"email":"foo@bar.com"},{"email":"bam@bam.com"},{"id":"usrsOEchC9xuwRgKk"},{"email":"foo@bam.com"}]}; // \Ez128\Airtable\Model\RevokeAdminAccessRequest

try {
    $result = $apiInstance->revokeAdminAccess($enterprise_account_id, $revoke_admin_access_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->revokeAdminAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **revoke_admin_access_request** | [**\Ez128\Airtable\Model\RevokeAdminAccessRequest**](../Model/RevokeAdminAccessRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\RevokeAdminAccess200Response**](../Model/RevokeAdminAccess200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
