# Ez128\Airtable\ScimApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createScimGroup()**](ScimApi.md#createScimGroup) | **POST** /scim/v2/Groups | Create group |
| [**createScimUser()**](ScimApi.md#createScimUser) | **POST** /scim/v2/Users | Create user |
| [**deleteScimGroup()**](ScimApi.md#deleteScimGroup) | **DELETE** /scim/v2/Groups/{groupId} | Delete group |
| [**deleteScimUser()**](ScimApi.md#deleteScimUser) | **DELETE** /scim/v2/Users/{userId} | Delete user |
| [**getScimGroup()**](ScimApi.md#getScimGroup) | **GET** /scim/v2/Groups/{groupId} | Get group |
| [**getScimUser()**](ScimApi.md#getScimUser) | **GET** /scim/v2/Users/{userId} | Get user |
| [**listScimGroups()**](ScimApi.md#listScimGroups) | **GET** /scim/v2/Groups | List groups |
| [**listScimUsers()**](ScimApi.md#listScimUsers) | **GET** /scim/v2/Users | List users |
| [**patchScimGroup()**](ScimApi.md#patchScimGroup) | **PATCH** /scim/v2/Groups/{groupId} | Patch group |
| [**patchScimUser()**](ScimApi.md#patchScimUser) | **PATCH** /scim/v2/Users/{userId} | Patch user |
| [**putScimGroup()**](ScimApi.md#putScimGroup) | **PUT** /scim/v2/Groups/{groupId} | Put group |
| [**putScimUser()**](ScimApi.md#putScimUser) | **PUT** /scim/v2/Users/{userId} | Put user |


## `createScimGroup()`

```php
createScimGroup($create_scim_group_request): \Ez128\Airtable\Model\ListScimGroups200ResponseResourcesInner
```

Create group

Create a new group from a [SCIM Group](https://datatracker.ietf.org/doc/html/rfc7643#section-4.2) object.  This endpoint creates a group with no members. Use the [patch group](/api/patch-scim-group) or [put group](/api/put-scim-group) endpoints to populate the new group with members.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ScimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_scim_group_request = {"displayName":"ExampleGroup","schemas":["urn:ietf:params:scim:schemas:core:2.0:Group"]}; // \Ez128\Airtable\Model\CreateScimGroupRequest

try {
    $result = $apiInstance->createScimGroup($create_scim_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimApi->createScimGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_scim_group_request** | [**\Ez128\Airtable\Model\CreateScimGroupRequest**](../Model/CreateScimGroupRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\ListScimGroups200ResponseResourcesInner**](../Model/ListScimGroups200ResponseResourcesInner.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createScimUser()`

```php
createScimUser($scim_user_schema): \Ez128\Airtable\Model\SCIMUserSchema
```

Create user

Create a new user from a [SCIM User](https://datatracker.ietf.org/doc/html/rfc7643#section-4.1) object.  The response is the SCIM user object representing the newly created user. On creation, the user will always be marked active, and the emails array will include a single entry that matches the username. See the [SCIM User schema](https://datatracker.ietf.org/doc/html/rfc7643#section-4.1) for details.  *WARNING*: As the user is provisioned without a password, the use of this endpoint is only intended on environments with SSO Active.  *WARNING*: If your enterprise is not capturing the user's email domain, it is possible this will fail with a conflict against an already created user that is not a member of your enterprise (and this not visible when [listing users](/api/list-scim-users)).  If this occurs, it is recommended you add the user to your enterprise (e.g. add them to a workspace and then claim them).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ScimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$scim_user_schema = {"name":{"familyName":"Jane","givenName":"Doe"},"schemas":["urn:ietf:params:scim:schemas:core:2.0:User","urn:ietf:params:scim:schemas:extension:enterprise:2.0:User"],"title":"Manager","urn:ietf:params:scim:schemas:extension:enterprise:2.0:User":{"costCenter":"Example cost center","department":"Example department","division":"Example division","manager":{"displayName":"John Doe","value":"foo@bam.com"},"organization":"Example organization"},"userName":"foo@bar.com"}; // \Ez128\Airtable\Model\SCIMUserSchema

try {
    $result = $apiInstance->createScimUser($scim_user_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimApi->createScimUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **scim_user_schema** | [**\Ez128\Airtable\Model\SCIMUserSchema**](../Model/SCIMUserSchema.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\SCIMUserSchema**](../Model/SCIMUserSchema.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteScimGroup()`

```php
deleteScimGroup($group_id): object
```

Delete group

Delete a single [SCIM Group](https://datatracker.ietf.org/doc/html/rfc7643#section-4.2).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ScimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->deleteScimGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimApi->deleteScimGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |

### Return type

**object**

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteScimUser()`

```php
deleteScimUser($user_id): object
```

Delete user

Delete a single SCIM user.      The endpoint cannot be used to delete the admin that owns the authentication token used to make the request.      The endpoint cannot be used to delete the sole owner of a workspace that has multiple collaborators.  See [SCIM specification](https://datatracker.ietf.org/doc/html/rfc7644#section-3.6) for more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ScimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->deleteScimUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimApi->deleteScimUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |

### Return type

**object**

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScimGroup()`

```php
getScimGroup($group_id): \Ez128\Airtable\Model\GetScimGroup200Response
```

Get group

Get a single group as a [SCIM Group](https://datatracker.ietf.org/doc/html/rfc7643#section-4.2) object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ScimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string

try {
    $result = $apiInstance->getScimGroup($group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimApi->getScimGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |

### Return type

[**\Ez128\Airtable\Model\GetScimGroup200Response**](../Model/GetScimGroup200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getScimUser()`

```php
getScimUser($user_id): \Ez128\Airtable\Model\SCIMUserSchema
```

Get user

Get a single user as a [SCIM User](https://datatracker.ietf.org/doc/html/rfc7643#section-4.1) object.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ScimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string

try {
    $result = $apiInstance->getScimUser($user_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimApi->getScimUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |

### Return type

[**\Ez128\Airtable\Model\SCIMUserSchema**](../Model/SCIMUserSchema.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listScimGroups()`

```php
listScimGroups($count, $filter): \Ez128\Airtable\Model\ListScimGroups200Response
```

List groups

List groups as [SCIM Groups](https://datatracker.ietf.org/doc/html/rfc7643#section-4.2) objects. [SCIM specification for list responses.](https://datatracker.ietf.org/doc/html/rfc7644#section-3.4.2)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ScimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$count = 3.4; // float
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->listScimGroups($count, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimApi->listScimGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **count** | **float**|  | [optional] |
| **filter** | **string**|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\ListScimGroups200Response**](../Model/ListScimGroups200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listScimUsers()`

```php
listScimUsers($start_index, $count, $filter): \Ez128\Airtable\Model\ListScimUsers200Response
```

List users

List users as [SCIM User](https://datatracker.ietf.org/doc/html/rfc7643#section-4.1) objects.  See the SCIM specification for [list responses](https://datatracker.ietf.org/doc/html/rfc7644#section-3.4.2) for more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ScimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$start_index = 3.4; // float
$count = 3.4; // float
$filter = 'filter_example'; // string

try {
    $result = $apiInstance->listScimUsers($start_index, $count, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimApi->listScimUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **start_index** | **float**|  | [optional] |
| **count** | **float**|  | [optional] |
| **filter** | **string**|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\ListScimUsers200Response**](../Model/ListScimUsers200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchScimGroup()`

```php
patchScimGroup($group_id, $patch_scim_group_request): \Ez128\Airtable\Model\GetScimGroup200Response
```

Patch group

SCIM patch an array of operations to a Group and applies them sequentially.  See [SCIM specification](https://datatracker.ietf.org/doc/html/rfc7644#section-3.5.2) for more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ScimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$patch_scim_group_request = {"Operations":[{"op":"add","path":"members","value":{"value":"usrI7HMkO7sAefUHk"}},{"op":"remove","path":"members[value eq\"usrI7HMkO7sAefUHk\"]"},{"op":"replace","path":"members","value":[{"value":"usrI7HMkO7sAefUHk"}]},{"op":"replace","path":"displayName","value":"Updated Example Group"}],"schemas":["urn:ietf:params:scim:api:messages:2.0:PatchOp"]}; // \Ez128\Airtable\Model\PatchScimGroupRequest

try {
    $result = $apiInstance->patchScimGroup($group_id, $patch_scim_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimApi->patchScimGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
| **patch_scim_group_request** | [**\Ez128\Airtable\Model\PatchScimGroupRequest**](../Model/PatchScimGroupRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\GetScimGroup200Response**](../Model/GetScimGroup200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchScimUser()`

```php
patchScimUser($user_id, $patch_scim_user_request): \Ez128\Airtable\Model\SCIMUserSchema
```

Patch user

Perform a list of SCIM patch operations in sequence on an existing user.  See [SCIM specification](https://datatracker.ietf.org/doc/html/rfc7644#section-3.5.2) for more.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ScimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string
$patch_scim_user_request = {"Operations":[{"op":"replace","path":"title","value":"Manager"}],"schemas":["urn:ietf:params:scim:api:messages:2.0:PatchOp"]}; // \Ez128\Airtable\Model\PatchScimUserRequest

try {
    $result = $apiInstance->patchScimUser($user_id, $patch_scim_user_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimApi->patchScimUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **patch_scim_user_request** | [**\Ez128\Airtable\Model\PatchScimUserRequest**](../Model/PatchScimUserRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\SCIMUserSchema**](../Model/SCIMUserSchema.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putScimGroup()`

```php
putScimGroup($group_id, $put_scim_group_request): \Ez128\Airtable\Model\GetScimGroup200Response
```

Put group

Replace a Groups's attributes with all new values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ScimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$group_id = 'group_id_example'; // string
$put_scim_group_request = {"displayName":"Updated Example Group","members":[{"value":"usrI7HMkO7sAefUHk"}],"schemas":["urn:ietf:params:scim:schemas:core:2.0:Group"]}; // \Ez128\Airtable\Model\PutScimGroupRequest

try {
    $result = $apiInstance->putScimGroup($group_id, $put_scim_group_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimApi->putScimGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **group_id** | **string**|  | |
| **put_scim_group_request** | [**\Ez128\Airtable\Model\PutScimGroupRequest**](../Model/PutScimGroupRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\GetScimGroup200Response**](../Model/GetScimGroup200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putScimUser()`

```php
putScimUser($user_id, $scim_user_schema): \Ez128\Airtable\Model\SCIMUserSchema
```

Put user

Replace a user's attributes with all new values.  The body parameters are the same as those for [creating a user](/api/create-scim-user), except that you can set `active` to true or false.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ScimApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = 'user_id_example'; // string
$scim_user_schema = {"active":true,"name":{"familyName":"Jane","givenName":"Doe"},"schemas":["urn:ietf:params:scim:schemas:core:2.0:User","urn:ietf:params:scim:schemas:extension:enterprise:2.0:User"],"title":"Manager","urn:ietf:params:scim:schemas:extension:enterprise:2.0:User":{"costCenter":"Example cost center","department":"Example department","division":"Example division","manager":{"displayName":"John Doe","value":"foo@bam.com"},"organization":"Example organization"},"userName":"foo@bar.com"}; // \Ez128\Airtable\Model\SCIMUserSchema

try {
    $result = $apiInstance->putScimUser($user_id, $scim_user_schema);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ScimApi->putScimUser: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **user_id** | **string**|  | |
| **scim_user_schema** | [**\Ez128\Airtable\Model\SCIMUserSchema**](../Model/SCIMUserSchema.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\SCIMUserSchema**](../Model/SCIMUserSchema.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
