# Ez128\Airtable\EnterpriseApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDescendantEnterprise()**](EnterpriseApi.md#createDescendantEnterprise) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/descendants | Create descendant enterprise |
| [**getEnterprise()**](EnterpriseApi.md#getEnterprise) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId} | Get enterprise |
| [**hyperdbDeleteRecordsByPrimaryKeys()**](EnterpriseApi.md#hyperdbDeleteRecordsByPrimaryKeys) | **POST** /v0/{enterpriseAccountId}/{dataTableId}/deleteRecords | Delete records from a HyperDB table by primary keys |
| [**hyperdbTableReadRecords()**](EnterpriseApi.md#hyperdbTableReadRecords) | **POST** /v0/{enterpriseAccountId}/{dataTableId}/getRecords | Read records from a HyperDB table |
| [**hyperdbUpsertRecordsByPrimaryKeys()**](EnterpriseApi.md#hyperdbUpsertRecordsByPrimaryKeys) | **PUT** /v0/{enterpriseAccountId}/{dataTableId}/upsertRecords | Update or insert records from a HyperDB table by primary keys |
| [**removeUserFromEnterprise()**](EnterpriseApi.md#removeUserFromEnterprise) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/users/{userId}/remove | Remove user from enterprise |


## `createDescendantEnterprise()`

```php
createDescendantEnterprise($enterprise_account_id, $create_descendant_enterprise_request): \Ez128\Airtable\Model\CreateDescendantEnterprise200Response
```

Create descendant enterprise

Creates a descendant enterprise account of the enterprise account. Descendant enterprise accounts can only be created for root enterprise accounts with the Enterprise Hub feature enabled.  Note that descendant enterprise accounts are also called organizational units (org units).  For more information on org units in organizations with Enterprise Hub, please see [our support article](https://support.airtable.com/docs/enterprise-hub-in-airtable#understanding-and-using-organizational-units).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$create_descendant_enterprise_request = {"name":"Example name"}; // \Ez128\Airtable\Model\CreateDescendantEnterpriseRequest

try {
    $result = $apiInstance->createDescendantEnterprise($enterprise_account_id, $create_descendant_enterprise_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->createDescendantEnterprise: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **create_descendant_enterprise_request** | [**\Ez128\Airtable\Model\CreateDescendantEnterpriseRequest**](../Model/CreateDescendantEnterpriseRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\CreateDescendantEnterprise200Response**](../Model/CreateDescendantEnterprise200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEnterprise()`

```php
getEnterprise($enterprise_account_id, $include): \Ez128\Airtable\Model\GetEnterprise200Response
```

Get enterprise

Returns basic information relevant to the enterprise account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$include = array('include_example'); // string[]

try {
    $result = $apiInstance->getEnterprise($enterprise_account_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->getEnterprise: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **include** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\GetEnterprise200Response**](../Model/GetEnterprise200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hyperdbDeleteRecordsByPrimaryKeys()`

```php
hyperdbDeleteRecordsByPrimaryKeys($enterprise_account_id, $data_table_id, $hyperdb_delete_records_by_primary_keys_request)
```

Delete records from a HyperDB table by primary keys

Delete records from a HyperDB table with primary keys matching specified primary keys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$data_table_id = 'data_table_id_example'; // string
$hyperdb_delete_records_by_primary_keys_request = {"primaryKeysForDelete":["484"]}; // \Ez128\Airtable\Model\HyperdbDeleteRecordsByPrimaryKeysRequest

try {
    $apiInstance->hyperdbDeleteRecordsByPrimaryKeys($enterprise_account_id, $data_table_id, $hyperdb_delete_records_by_primary_keys_request);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->hyperdbDeleteRecordsByPrimaryKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **data_table_id** | **string**|  | |
| **hyperdb_delete_records_by_primary_keys_request** | [**\Ez128\Airtable\Model\HyperdbDeleteRecordsByPrimaryKeysRequest**](../Model/HyperdbDeleteRecordsByPrimaryKeysRequest.md)|  | [optional] |

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

## `hyperdbTableReadRecords()`

```php
hyperdbTableReadRecords($enterprise_account_id, $data_table_id, $hyperdb_table_read_records_request): \Ez128\Airtable\Model\HyperdbTableReadRecords200Response
```

Read records from a HyperDB table

Read records from a HyperDB table

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$data_table_id = 'data_table_id_example'; // string
$hyperdb_table_read_records_request = {"primaryKeys":["483","484","99294934924299"]}; // \Ez128\Airtable\Model\HyperdbTableReadRecordsRequest

try {
    $result = $apiInstance->hyperdbTableReadRecords($enterprise_account_id, $data_table_id, $hyperdb_table_read_records_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->hyperdbTableReadRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **data_table_id** | **string**|  | |
| **hyperdb_table_read_records_request** | [**\Ez128\Airtable\Model\HyperdbTableReadRecordsRequest**](../Model/HyperdbTableReadRecordsRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\HyperdbTableReadRecords200Response**](../Model/HyperdbTableReadRecords200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `hyperdbUpsertRecordsByPrimaryKeys()`

```php
hyperdbUpsertRecordsByPrimaryKeys($enterprise_account_id, $data_table_id, $hyperdb_upsert_records_by_primary_keys_request): \Ez128\Airtable\Model\HyperdbUpsertRecordsByPrimaryKeys200Response
```

Update or insert records from a HyperDB table by primary keys

Update or insert records from a HyperDB table with primary keys matching specified primary keys

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$data_table_id = 'data_table_id_example'; // string
$hyperdb_upsert_records_by_primary_keys_request = {"records":[{"fields":{"id":"483","name":"Frank"},"primaryKey":"483"},{"fields":{"id":"484","name":"Alice"},"primaryKey":"484"}]}; // \Ez128\Airtable\Model\HyperdbUpsertRecordsByPrimaryKeysRequest

try {
    $result = $apiInstance->hyperdbUpsertRecordsByPrimaryKeys($enterprise_account_id, $data_table_id, $hyperdb_upsert_records_by_primary_keys_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->hyperdbUpsertRecordsByPrimaryKeys: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **data_table_id** | **string**|  | |
| **hyperdb_upsert_records_by_primary_keys_request** | [**\Ez128\Airtable\Model\HyperdbUpsertRecordsByPrimaryKeysRequest**](../Model/HyperdbUpsertRecordsByPrimaryKeysRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\HyperdbUpsertRecordsByPrimaryKeys200Response**](../Model/HyperdbUpsertRecordsByPrimaryKeys200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `removeUserFromEnterprise()`

```php
removeUserFromEnterprise($enterprise_account_id, $user_id, $remove_user_from_enterprise_request): \Ez128\Airtable\Model\RemoveUserFromEnterprise200Response
```

Remove user from enterprise

Unshare a user from all enterprise workspaces, bases, interfaces, and user groups. If applicable, the user will also have their admin access revoked.  Returns lists of unsharing and sharing actions performed as part of the user removal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\EnterpriseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$user_id = 'user_id_example'; // string
$remove_user_from_enterprise_request = {"replacementOwnerId":"usrL2PNC5o3H4lBEi"}; // \Ez128\Airtable\Model\RemoveUserFromEnterpriseRequest

try {
    $result = $apiInstance->removeUserFromEnterprise($enterprise_account_id, $user_id, $remove_user_from_enterprise_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EnterpriseApi->removeUserFromEnterprise: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **user_id** | **string**|  | |
| **remove_user_from_enterprise_request** | [**\Ez128\Airtable\Model\RemoveUserFromEnterpriseRequest**](../Model/RemoveUserFromEnterpriseRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\RemoveUserFromEnterprise200Response**](../Model/RemoveUserFromEnterprise200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
