# Ez128\Airtable\TableApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTable()**](TableApi.md#createTable) | **POST** /v0/meta/bases/{baseId}/tables | Create table |
| [**updateTable()**](TableApi.md#updateTable) | **PATCH** /v0/meta/bases/{baseId}/tables/{tableIdOrName} | Update table |


## `createTable()`

```php
createTable($base_id, $create_table_request): \Ez128\Airtable\Model\TableModel
```

Create table

Creates a new table and returns the schema for the newly created table.  Refer to [field types](/api/model/field-type) for supported field types, the write format for field options, and other specifics for certain field types. Supported field types have a write format shown.  At least one field must be specified. The first field in the fields array will be used as the table's primary field and must be a supported primary field type. Fields must have case-insensitive unique names within the table.  A default grid view will be created with all fields visible.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\TableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$create_table_request = {"description":"A to-do list of places to visit","fields":[{"description":"Name of the apartment","name":"Name","type":"singleLineText"},{"name":"Address","type":"singleLineText"},{"name":"Visited","options":{"color":"greenBright","icon":"check"},"type":"checkbox"}],"name":"Apartments"}; // \Ez128\Airtable\Model\CreateTableRequest

try {
    $result = $apiInstance->createTable($base_id, $create_table_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableApi->createTable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **create_table_request** | [**\Ez128\Airtable\Model\CreateTableRequest**](../Model/CreateTableRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\TableModel**](../Model/TableModel.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTable()`

```php
updateTable($base_id, $table_id_or_name, $update_table_request): \Ez128\Airtable\Model\UpdateTable200Response
```

Update table

Updates the name, description, and/or date dependency settings of a table. At least one of name, description, or dateDependencySettings must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\TableApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id_or_name = 'table_id_or_name_example'; // string
$update_table_request = {"description":"I was changed!","name":"Apartments (revised)"}; // \Ez128\Airtable\Model\UpdateTableRequest

try {
    $result = $apiInstance->updateTable($base_id, $table_id_or_name, $update_table_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TableApi->updateTable: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **table_id_or_name** | **string**|  | |
| **update_table_request** | [**\Ez128\Airtable\Model\UpdateTableRequest**](../Model/UpdateTableRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\UpdateTable200Response**](../Model/UpdateTable200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
