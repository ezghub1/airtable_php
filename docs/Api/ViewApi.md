# Ez128\Airtable\ViewApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteView()**](ViewApi.md#deleteView) | **DELETE** /v0/meta/bases/{baseId}/views/{viewId} | Delete view |
| [**getViewMetadata()**](ViewApi.md#getViewMetadata) | **GET** /v0/meta/bases/{baseId}/views/{viewId} | Get view metadata |
| [**listViews()**](ViewApi.md#listViews) | **GET** /v0/meta/bases/{baseId}/views | List views |


## `deleteView()`

```php
deleteView($base_id, $view_id): mixed
```

Delete view

Delete a view.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ViewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$view_id = 'view_id_example'; // string

try {
    $result = $apiInstance->deleteView($base_id, $view_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewApi->deleteView: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **view_id** | **string**|  | |

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

## `getViewMetadata()`

```php
getViewMetadata($base_id, $view_id, $include): \Ez128\Airtable\Model\ListViews200ResponseViewsInner
```

Get view metadata

Get basic information of base view.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ViewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$view_id = 'view_id_example'; // string
$include = array('include_example'); // string[]

try {
    $result = $apiInstance->getViewMetadata($base_id, $view_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewApi->getViewMetadata: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **view_id** | **string**|  | |
| **include** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\ListViews200ResponseViewsInner**](../Model/ListViews200ResponseViewsInner.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listViews()`

```php
listViews($base_id, $include): \Ez128\Airtable\Model\ListViews200Response
```

List views

Lists basic information of base views.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ViewApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$include = array('include_example'); // string[]

try {
    $result = $apiInstance->listViews($base_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ViewApi->listViews: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **include** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\ListViews200Response**](../Model/ListViews200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
