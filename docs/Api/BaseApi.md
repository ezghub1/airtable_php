# Ez128\Airtable\BaseApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBase()**](BaseApi.md#createBase) | **POST** /v0/meta/bases | Create base |
| [**getBaseSchema()**](BaseApi.md#getBaseSchema) | **GET** /v0/meta/bases/{baseId}/tables | Get base schema |
| [**listBases()**](BaseApi.md#listBases) | **GET** /v0/meta/bases | List bases |


## `createBase()`

```php
createBase($create_base_request): \Ez128\Airtable\Model\CreateBase200Response
```

Create base

Creates a new base with the provided tables and returns the schema for the newly created base.  Refer to field types for supported field types, the write format for field options, and other specifics for certain field types. Supported field types have a write format shown.  At least one table and field must be specified. The first field in the fields array will be used as the table's primary field and must be a supported primary field type. Fields must have case-insensitive unique names within the table.  A default grid view will be created with all fields visible for each provided table.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\BaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_base_request = {"name":"Apartment Hunting","tables":[{"description":"A to-do list of places to visit","fields":[{"description":"Name of the apartment","name":"Name","type":"singleLineText"},{"name":"Address","type":"singleLineText"},{"name":"Visited","options":{"color":"greenBright","icon":"check"},"type":"checkbox"}],"name":"Apartments"}],"workspaceId":"wspmhESAta6clCCwF"}; // \Ez128\Airtable\Model\CreateBaseRequest

try {
    $result = $apiInstance->createBase($create_base_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaseApi->createBase: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_base_request** | [**\Ez128\Airtable\Model\CreateBaseRequest**](../Model/CreateBaseRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\CreateBase200Response**](../Model/CreateBase200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBaseSchema()`

```php
getBaseSchema($base_id, $include): \Ez128\Airtable\Model\GetBaseSchema200Response
```

Get base schema

Returns the schema of the tables in the specified base.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\BaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$include = array('include_example'); // string[]

try {
    $result = $apiInstance->getBaseSchema($base_id, $include);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaseApi->getBaseSchema: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **include** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\GetBaseSchema200Response**](../Model/GetBaseSchema200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBases()`

```php
listBases($offset): \Ez128\Airtable\Model\ListBases200Response
```

List bases

Returns the list of bases the token can access, 1000 bases at a time. If there is another page to request, pass the offset as a URL query parameter. (e.g. `?offset=itr23sEjsdfEr3282/appSW9R5uCNmRmfl6`)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\BaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$offset = 'offset_example'; // string

try {
    $result = $apiInstance->listBases($offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BaseApi->listBases: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **offset** | **string**|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\ListBases200Response**](../Model/ListBases200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
