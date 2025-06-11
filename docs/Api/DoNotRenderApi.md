# Ez128\Airtable\DoNotRenderApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**updateMultipleRecordsPut()**](DoNotRenderApi.md#updateMultipleRecordsPut) | **PUT** /v0/{baseId}/{tableIdOrName} | Update multiple records (put) |
| [**updateRecordPut()**](DoNotRenderApi.md#updateRecordPut) | **PUT** /v0/{baseId}/{tableIdOrName}/{recordId} | Update record (put) |


## `updateMultipleRecordsPut()`

```php
updateMultipleRecordsPut($base_id, $table_id_or_name, $update_multiple_records_put_request): \Ez128\Airtable\Model\UpdateMultipleRecordsPut200Response
```

Update multiple records (put)

Update multiple records. This will perform a **destructive** update and clear all unspecified cell values. Table names and table ids can be used interchangeably. We recommend using table IDs so you don't need to modify your API request when your table name changes.  Your request body should include an array of up to 10 record objects. Each of these objects should have an **id** property representing the record ID and a **fields** property which contains all of your record's cell values by field name or field id for all of your record's cell values by field name.  To issue an upsert request, where records would be created if no matching records to update are found, your request body should include a **performUpsert** parameter with **fieldsToMergeOn**. **fieldsToMergeOn** is an array with at least one and at most three field names or ids, where combined together, represent a unique record. Fields to merge on cannot be computed and must be of the following field types: number, text, long text, single select, multiple select, and date. In this case, the id property within record objects is optional. In addition to **records**, **updatedRecords** and **createdRecords** will be included as part of the response, containing record ids to specify which records were created or updated. Airtable reserves the right to throttle upsert requests differently from the standard rate limit throttling policy.  Automatic data conversion for update actions can be enabled via **typecast** parameter. The Airtable API will perform best-effort automatic data conversion from string values if the **typecast** parameter is passed in. Automatic conversion is disabled by default to ensure data integrity, but it may be helpful for integrating with 3rd party data sources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\DoNotRenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id_or_name = 'table_id_or_name_example'; // string
$update_multiple_records_put_request = {"records":[{"fields":{"Address":"501 Twin Peaks Blvd","Name":"Twin Peaks","Visited":true},"id":"rec560UJdUtocSouk"},{"fields":{"Address":"1 Ferry Building","Name":"Ferry Building","Visited":true},"id":"rec3lbPRG4aVqkeOQ"}]}; // \Ez128\Airtable\Model\UpdateMultipleRecordsPutRequest

try {
    $result = $apiInstance->updateMultipleRecordsPut($base_id, $table_id_or_name, $update_multiple_records_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DoNotRenderApi->updateMultipleRecordsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **table_id_or_name** | **string**|  | |
| **update_multiple_records_put_request** | [**\Ez128\Airtable\Model\UpdateMultipleRecordsPutRequest**](../Model/UpdateMultipleRecordsPutRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\UpdateMultipleRecordsPut200Response**](../Model/UpdateMultipleRecordsPut200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRecordPut()`

```php
updateRecordPut($base_id, $table_id_or_name, $record_id, $update_record_put_request): \Ez128\Airtable\Model\UpdateRecordPut200Response
```

Update record (put)

Updates a single record. Any unspecified fields are **not updated**. Table names and table ids can be used interchangeably. We recommend using table IDs so you don't need to modify your API request when your table name changes.  Your request body should include a **fields** property whose value is an object containing your record's cell values, keyed by either field name or field id.  Automatic data conversion for update actions can be enabled via **typecast** parameter. The Airtable API will perform best-effort automatic data conversion from string values if the **typecast** parameter is passed in. Automatic conversion is disabled by default to ensure data integrity, but it may be helpful for integrating with 3rd party data sources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\DoNotRenderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id_or_name = 'table_id_or_name_example'; // string
$record_id = 'record_id_example'; // string
$update_record_put_request = {"fields":{"Visited":true}}; // \Ez128\Airtable\Model\UpdateRecordPutRequest

try {
    $result = $apiInstance->updateRecordPut($base_id, $table_id_or_name, $record_id, $update_record_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DoNotRenderApi->updateRecordPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **table_id_or_name** | **string**|  | |
| **record_id** | **string**|  | |
| **update_record_put_request** | [**\Ez128\Airtable\Model\UpdateRecordPutRequest**](../Model/UpdateRecordPutRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\UpdateRecordPut200Response**](../Model/UpdateRecordPut200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
