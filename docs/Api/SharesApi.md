# Ez128\Airtable\SharesApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteShare()**](SharesApi.md#deleteShare) | **DELETE** /v0/meta/bases/{baseId}/shares/{shareId} | Delete share |
| [**listShares()**](SharesApi.md#listShares) | **GET** /v0/meta/bases/{baseId}/shares | List shares |
| [**manageShare()**](SharesApi.md#manageShare) | **PATCH** /v0/meta/bases/{baseId}/shares/{shareId} | Manage share |


## `deleteShare()`

```php
deleteShare($base_id, $share_id)
```

Delete share

**WARNING:** Hard deleted share is NOT recoverable!!!

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$share_id = 'share_id_example'; // string

try {
    $apiInstance->deleteShare($base_id, $share_id);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->deleteShare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **share_id** | **string**|  | |

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

## `listShares()`

```php
listShares($base_id): \Ez128\Airtable\Model\ListShares200Response
```

List shares

Lists basic information of base shares.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string

try {
    $result = $apiInstance->listShares($base_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->listShares: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |

### Return type

[**\Ez128\Airtable\Model\ListShares200Response**](../Model/ListShares200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageShare()`

```php
manageShare($base_id, $share_id, $manage_share_request)
```

Manage share

Manages share state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\SharesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$share_id = 'share_id_example'; // string
$manage_share_request = {state=disabled}; // \Ez128\Airtable\Model\ManageShareRequest

try {
    $apiInstance->manageShare($base_id, $share_id, $manage_share_request);
} catch (Exception $e) {
    echo 'Exception when calling SharesApi->manageShare: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **share_id** | **string**|  | |
| **manage_share_request** | [**\Ez128\Airtable\Model\ManageShareRequest**](../Model/ManageShareRequest.md)|  | [optional] |

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
