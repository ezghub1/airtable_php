# Ez128\Airtable\AuditingApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAuditLogRequest()**](AuditingApi.md#createAuditLogRequest) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/auditLogs | Create audit log request |
| [**getAuditLogRequest()**](AuditingApi.md#getAuditLogRequest) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/auditLogs/{enterpriseAuditLogTaskId} | Get audit log request |
| [**listAuditLogRequests()**](AuditingApi.md#listAuditLogRequests) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/auditLogs | List audit log requests |


## `createAuditLogRequest()`

```php
createAuditLogRequest($enterprise_account_id, $create_audit_log_request_request): \Ez128\Airtable\Model\AuditLog
```

Create audit log request

**NOTE:** Use of this API is discouraged for new use cases. Prefer to use the [audit log events API](/api/audit-logs-overview) instead.  Create an audit log request. This starts the processing necessary to retrive the logs.  The response includes an `id`, which is then used to [check the status of and download](/api/get-audit-log-request) your logs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\AuditingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$create_audit_log_request_request = {"filter":"appLkNDICXNqxSDhG","timePeriod":"2021-01"}; // \Ez128\Airtable\Model\CreateAuditLogRequestRequest

try {
    $result = $apiInstance->createAuditLogRequest($enterprise_account_id, $create_audit_log_request_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditingApi->createAuditLogRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **create_audit_log_request_request** | [**\Ez128\Airtable\Model\CreateAuditLogRequestRequest**](../Model/CreateAuditLogRequestRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\AuditLog**](../Model/AuditLog.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAuditLogRequest()`

```php
getAuditLogRequest($enterprise_account_id, $enterprise_audit_log_task_id): \Ez128\Airtable\Model\AuditLog
```

Get audit log request

**NOTE:** Use of this API is discouraged for new use cases. Prefer to use the [audit log events API](/api/audit-logs-overview) instead.  Retrieve a specific audit log request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\AuditingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$enterprise_audit_log_task_id = 'enterprise_audit_log_task_id_example'; // string

try {
    $result = $apiInstance->getAuditLogRequest($enterprise_account_id, $enterprise_audit_log_task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditingApi->getAuditLogRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **enterprise_audit_log_task_id** | **string**|  | |

### Return type

[**\Ez128\Airtable\Model\AuditLog**](../Model/AuditLog.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAuditLogRequests()`

```php
listAuditLogRequests($enterprise_account_id, $page_size, $offset): \Ez128\Airtable\Model\ListAuditLogRequests200Response
```

List audit log requests

**NOTE:** Use of this API is discouraged for new use cases. Prefer to use the [audit log events API](/api/audit-logs-overview) instead.  Retrieve all audit log requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\AuditingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$page_size = 3.4; // float
$offset = 3.4; // float

try {
    $result = $apiInstance->listAuditLogRequests($enterprise_account_id, $page_size, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditingApi->listAuditLogRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **page_size** | **float**|  | [optional] |
| **offset** | **float**|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\ListAuditLogRequests200Response**](../Model/ListAuditLogRequests200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
