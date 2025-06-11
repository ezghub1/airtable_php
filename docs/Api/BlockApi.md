# Ez128\Airtable\BlockApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteBlockInstallation()**](BlockApi.md#deleteBlockInstallation) | **DELETE** /v0/meta/bases/{baseId}/blockInstallations/{blockInstallationId} | Delete block installation |
| [**listBlockInstallations()**](BlockApi.md#listBlockInstallations) | **GET** /v0/meta/bases/{baseId}/blockInstallations | List block installations |
| [**manageBlockInstallation()**](BlockApi.md#manageBlockInstallation) | **PATCH** /v0/meta/bases/{baseId}/blockInstallations/{blockInstallationId} | Manage block installation |


## `deleteBlockInstallation()`

```php
deleteBlockInstallation($base_id, $block_installation_id): mixed
```

Delete block installation

A deleted block installation is recoverable.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\BlockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$block_installation_id = 'block_installation_id_example'; // string

try {
    $result = $apiInstance->deleteBlockInstallation($base_id, $block_installation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockApi->deleteBlockInstallation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **block_installation_id** | **string**|  | |

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

## `listBlockInstallations()`

```php
listBlockInstallations($base_id): \Ez128\Airtable\Model\ListBlockInstallations200ResponseInner[]
```

List block installations

Lists basic information of base block installations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\BlockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string

try {
    $result = $apiInstance->listBlockInstallations($base_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlockApi->listBlockInstallations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |

### Return type

[**\Ez128\Airtable\Model\ListBlockInstallations200ResponseInner[]**](../Model/ListBlockInstallations200ResponseInner.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `manageBlockInstallation()`

```php
manageBlockInstallation($base_id, $block_installation_id, $manage_block_installation_request)
```

Manage block installation

Manages block installation state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\BlockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$block_installation_id = 'block_installation_id_example'; // string
$manage_block_installation_request = {"state":"disabled"}; // \Ez128\Airtable\Model\ManageBlockInstallationRequest

try {
    $apiInstance->manageBlockInstallation($base_id, $block_installation_id, $manage_block_installation_request);
} catch (Exception $e) {
    echo 'Exception when calling BlockApi->manageBlockInstallation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **block_installation_id** | **string**|  | |
| **manage_block_installation_request** | [**\Ez128\Airtable\Model\ManageBlockInstallationRequest**](../Model/ManageBlockInstallationRequest.md)|  | [optional] |

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
