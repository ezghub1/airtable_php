# Ez128\Airtable\ColumnApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createField()**](ColumnApi.md#createField) | **POST** /v0/meta/bases/{baseId}/tables/{tableId}/fields | Create field |
| [**updateField()**](ColumnApi.md#updateField) | **PATCH** /v0/meta/bases/{baseId}/tables/{tableId}/fields/{columnId} | Update field |


## `createField()`

```php
createField($base_id, $table_id, $create_field_request): \Ez128\Airtable\Model\UpdateTable200ResponseFieldsInner
```

Create field

Creates a new column and returns the schema for the newly created column.  Refer to field types for supported [field types](/api/model/field-type), the write format for field options, and other specifics for certain field types. Supported field types have a write format shown.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ColumnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id = 'table_id_example'; // string
$create_field_request = {"description":"Whether I have visited this apartment yet.","name":"Visited","options":{"color":"greenBright","icon":"check"},"type":"checkbox"}; // \Ez128\Airtable\Model\CreateFieldRequest

try {
    $result = $apiInstance->createField($base_id, $table_id, $create_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ColumnApi->createField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **table_id** | **string**|  | |
| **create_field_request** | [**\Ez128\Airtable\Model\CreateFieldRequest**](../Model/CreateFieldRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\UpdateTable200ResponseFieldsInner**](../Model/UpdateTable200ResponseFieldsInner.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateField()`

```php
updateField($base_id, $table_id, $column_id, $update_field_request): \Ez128\Airtable\Model\UpdateTable200ResponseFieldsInner
```

Update field

Updates the name and/or description of a field. At least one of name or description must be specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\ColumnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id = 'table_id_example'; // string
$column_id = 'column_id_example'; // string
$update_field_request = {"description":"I was changed!","name":"Apartments (revised)"}; // \Ez128\Airtable\Model\UpdateFieldRequest

try {
    $result = $apiInstance->updateField($base_id, $table_id, $column_id, $update_field_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ColumnApi->updateField: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **table_id** | **string**|  | |
| **column_id** | **string**|  | |
| **update_field_request** | [**\Ez128\Airtable\Model\UpdateFieldRequest**](../Model/UpdateFieldRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\UpdateTable200ResponseFieldsInner**](../Model/UpdateTable200ResponseFieldsInner.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
