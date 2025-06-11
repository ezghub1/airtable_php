# Ez128\Airtable\ChangeEventsApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**changeEvents()**](ChangeEventsApi.md#changeEvents) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/changeEvents | Change events |
| [**createEdiscoveryExport()**](ChangeEventsApi.md#createEdiscoveryExport) | **POST** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/exports | Create eDiscovery export |
| [**getEdiscoveryExport()**](ChangeEventsApi.md#getEdiscoveryExport) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/exports/{enterpriseTaskId} | Get eDiscovery export |
| [**listEdiscoveryExport()**](ChangeEventsApi.md#listEdiscoveryExport) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/exports | List eDiscovery exports |


## `changeEvents()`

```php
changeEvents($enterprise_account_id, $start_time, $end_time, $page_size, $offset): \Ez128\Airtable\Model\ChangeEvents200Response
```

Change events

Retrieve change events for enterprise bases. These change events are available for 14 days from the date of the event.  This endpoint requires change events to be enabled for your enterprise account and toggled on in your enterprise admin panel. Please contact your account team or support to start this process. Events are generated only after you turn change events on in your admin panel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ChangeEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$start_time = 'start_time_example'; // string
$end_time = 'end_time_example'; // string
$page_size = 3.4; // float
$offset = 'offset_example'; // string

try {
    $result = $apiInstance->changeEvents($enterprise_account_id, $start_time, $end_time, $page_size, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeEventsApi->changeEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **start_time** | **string**|  | [optional] |
| **end_time** | **string**|  | [optional] |
| **page_size** | **float**|  | [optional] |
| **offset** | **string**|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\ChangeEvents200Response**](../Model/ChangeEvents200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEdiscoveryExport()`

```php
createEdiscoveryExport($enterprise_account_id, $create_ediscovery_export_request): \Ez128\Airtable\Model\CreateEdiscoveryExport200Response
```

Create eDiscovery export

Create an eDiscovery export request. The response includes an `id`, which is then used to [check the status of and download](/api/get-ediscovery-export) your export.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ChangeEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$create_ediscovery_export_request = {"baseId":"appLkNDICXNqxSDhG"}; // \Ez128\Airtable\Model\CreateEdiscoveryExportRequest

try {
    $result = $apiInstance->createEdiscoveryExport($enterprise_account_id, $create_ediscovery_export_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeEventsApi->createEdiscoveryExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **create_ediscovery_export_request** | [**\Ez128\Airtable\Model\CreateEdiscoveryExportRequest**](../Model/CreateEdiscoveryExportRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\CreateEdiscoveryExport200Response**](../Model/CreateEdiscoveryExport200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEdiscoveryExport()`

```php
getEdiscoveryExport($enterprise_account_id, $enterprise_task_id): \Ez128\Airtable\Model\CreateEdiscoveryExport200Response
```

Get eDiscovery export

Get the status and result of an eDiscovery export.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ChangeEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$enterprise_task_id = 'enterprise_task_id_example'; // string

try {
    $result = $apiInstance->getEdiscoveryExport($enterprise_account_id, $enterprise_task_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeEventsApi->getEdiscoveryExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **enterprise_task_id** | **string**|  | |

### Return type

[**\Ez128\Airtable\Model\CreateEdiscoveryExport200Response**](../Model/CreateEdiscoveryExport200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEdiscoveryExport()`

```php
listEdiscoveryExport($enterprise_account_id, $state, $page_size, $offset): \Ez128\Airtable\Model\ListEdiscoveryExport200Response
```

List eDiscovery exports

Get the status and result of all eDiscovery exports.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ChangeEventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$state = done; // string
$page_size = 3.4; // float
$offset = 3.4; // float

try {
    $result = $apiInstance->listEdiscoveryExport($enterprise_account_id, $state, $page_size, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChangeEventsApi->listEdiscoveryExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **state** | **string**|  | [optional] |
| **page_size** | **float**|  | [optional] |
| **offset** | **float**|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\ListEdiscoveryExport200Response**](../Model/ListEdiscoveryExport200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
