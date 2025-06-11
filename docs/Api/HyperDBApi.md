# Ez128\Airtable\HyperDBApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**hyperdbDeleteRecordsByPrimaryKeys()**](HyperDBApi.md#hyperdbDeleteRecordsByPrimaryKeys) | **POST** /v0/{enterpriseAccountId}/{dataTableId}/deleteRecords | Delete records from a HyperDB table by primary keys |
| [**hyperdbTableReadRecords()**](HyperDBApi.md#hyperdbTableReadRecords) | **POST** /v0/{enterpriseAccountId}/{dataTableId}/getRecords | Read records from a HyperDB table |
| [**hyperdbUpsertRecordsByPrimaryKeys()**](HyperDBApi.md#hyperdbUpsertRecordsByPrimaryKeys) | **PUT** /v0/{enterpriseAccountId}/{dataTableId}/upsertRecords | Update or insert records from a HyperDB table by primary keys |


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


$apiInstance = new Ez128\Airtable\Api\HyperDBApi(
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
    echo 'Exception when calling HyperDBApi->hyperdbDeleteRecordsByPrimaryKeys: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Ez128\Airtable\Api\HyperDBApi(
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
    echo 'Exception when calling HyperDBApi->hyperdbTableReadRecords: ', $e->getMessage(), PHP_EOL;
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


$apiInstance = new Ez128\Airtable\Api\HyperDBApi(
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
    echo 'Exception when calling HyperDBApi->hyperdbUpsertRecordsByPrimaryKeys: ', $e->getMessage(), PHP_EOL;
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
