# Ez128\Airtable\RecordApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createRecords()**](RecordApi.md#createRecords) | **POST** /v0/{baseId}/{tableIdOrName} | Create records |
| [**deleteMultipleRecords()**](RecordApi.md#deleteMultipleRecords) | **DELETE** /v0/{baseId}/{tableIdOrName} | Delete multiple records |
| [**deleteRecord()**](RecordApi.md#deleteRecord) | **DELETE** /v0/{baseId}/{tableIdOrName}/{recordId} | Delete record |
| [**getRecord()**](RecordApi.md#getRecord) | **GET** /v0/{baseId}/{tableIdOrName}/{recordId} | Get record |
| [**listRecords()**](RecordApi.md#listRecords) | **GET** /v0/{baseId}/{tableIdOrName} | List records |
| [**postSyncApiEndpoint()**](RecordApi.md#postSyncApiEndpoint) | **POST** /v0/{baseId}/{tableIdOrName}/sync/{apiEndpointSyncId} | Sync CSV data |
| [**updateMultipleRecords()**](RecordApi.md#updateMultipleRecords) | **PATCH** /v0/{baseId}/{tableIdOrName} | Update multiple records |
| [**updateRecord()**](RecordApi.md#updateRecord) | **PATCH** /v0/{baseId}/{tableIdOrName}/{recordId} | Update record |
| [**uploadAttachment()**](RecordApi.md#uploadAttachment) | **POST** /v0/{baseId}/{recordId}/{attachmentFieldIdOrName}/uploadAttachment | Upload attachment |


## `createRecords()`

```php
createRecords($base_id, $table_id_or_name, $create_records_request): \Ez128\Airtable\Model\CreateRecords200Response
```

Create records

Creates multiple records. Note that table names and table ids can be used interchangeably. We recommend using table IDs so you don't need to modify your API request when your table name changes.  Your request body should include an array of up to 10 record objects. Each of these objects should have one key whose value is an inner object containing your record's cell values, keyed by either field name or field id.  Returns a unique array of the newly created record ids if the call succeeds.  You can also include a single record object at the top level.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\RecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id_or_name = 'table_id_or_name_example'; // string
$create_records_request = {"records":[{"fields":{"Address":"333 Post St","Name":"Union Square","Visited":true}},{"fields":{"Address":"1 Ferry Building","Name":"Ferry Building"}}]}; // \Ez128\Airtable\Model\CreateRecordsRequest

try {
    $result = $apiInstance->createRecords($base_id, $table_id_or_name, $create_records_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordApi->createRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **table_id_or_name** | **string**|  | |
| **create_records_request** | [**\Ez128\Airtable\Model\CreateRecordsRequest**](../Model/CreateRecordsRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\CreateRecords200Response**](../Model/CreateRecords200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMultipleRecords()`

```php
deleteMultipleRecords($base_id, $table_id_or_name, $records): \Ez128\Airtable\Model\DeleteMultipleRecords200Response
```

Delete multiple records

Deletes records given an array of record ids

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\RecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id_or_name = 'table_id_or_name_example'; // string
$records = ["rec560UJdUtocSouk","rec3lbPRG4aVqkeOQ"]; // string[]

try {
    $result = $apiInstance->deleteMultipleRecords($base_id, $table_id_or_name, $records);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordApi->deleteMultipleRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **table_id_or_name** | **string**|  | |
| **records** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\DeleteMultipleRecords200Response**](../Model/DeleteMultipleRecords200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteRecord()`

```php
deleteRecord($base_id, $table_id_or_name, $record_id): \Ez128\Airtable\Model\DeleteMultipleRecords200ResponseRecordsInner
```

Delete record

Deletes a single record

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\RecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id_or_name = 'table_id_or_name_example'; // string
$record_id = 'record_id_example'; // string

try {
    $result = $apiInstance->deleteRecord($base_id, $table_id_or_name, $record_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordApi->deleteRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **table_id_or_name** | **string**|  | |
| **record_id** | **string**|  | |

### Return type

[**\Ez128\Airtable\Model\DeleteMultipleRecords200ResponseRecordsInner**](../Model/DeleteMultipleRecords200ResponseRecordsInner.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRecord()`

```php
getRecord($base_id, $table_id_or_name, $record_id, $cell_format, $return_fields_by_field_id): \Ez128\Airtable\Model\UpdateMultipleRecordsPut200ResponseAnyOf1RecordsInner
```

Get record

Retrieve a single record. Any \"empty\" fields (e.g. **\"\"**, **[]**, or **false**) in the record will not be returned.  **Note** If we can't locate the record on a given table, the request will fallback to a base wide search and will still return the record if the Record ID is valid and the record is located within the same base.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\RecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id_or_name = 'table_id_or_name_example'; // string
$record_id = 'record_id_example'; // string
$cell_format = 'cell_format_example'; // string
$return_fields_by_field_id = True; // bool

try {
    $result = $apiInstance->getRecord($base_id, $table_id_or_name, $record_id, $cell_format, $return_fields_by_field_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordApi->getRecord: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **table_id_or_name** | **string**|  | |
| **record_id** | **string**|  | |
| **cell_format** | **string**|  | [optional] |
| **return_fields_by_field_id** | **bool**|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\UpdateMultipleRecordsPut200ResponseAnyOf1RecordsInner**](../Model/UpdateMultipleRecordsPut200ResponseAnyOf1RecordsInner.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRecords()`

```php
listRecords($base_id, $table_id_or_name, $time_zone, $user_locale, $page_size, $max_records, $offset, $view, $sort, $filter_by_formula, $cell_format, $fields, $return_fields_by_field_id, $record_metadata): \Ez128\Airtable\Model\ListRecords200Response
```

List records

List records in a table. Note that table names and table ids can be used interchangeably. We recommend using table IDs so you don't need to modify your API request when your table name changes.  The server returns one page of records at a time. Each page will contain **pageSize** records, which is 100 by default. If there are more records, the response will contain an **offset**. To fetch the next page of records, include **offset** in the next request's parameters. Pagination will stop when you've reached the end of your table. If the **maxRecords** parameter is passed, pagination will stop once you've reached this maximum.  Returned records do not include any fields with \"empty\" values, e.g. **\"\"**, **[]**, or **false**.  You can filter, sort, and format the results with query parameters. Note that these parameters need to be URL encoded. You can use our [API URL encoder tool](https://codepen.io/airtable/pen/MeXqOg) to help with this. If you are using a helper library like [Airtable.js](https://github.com/Airtable/airtable.js), these parameters will be automatically encoded.  **Note** Airtable's API only accepts request with a URL shorter than 16,000 characters. Encoded formulas may cause your requests to exceed this limit. To fix this issue you can instead make a POST request to `/v0/{baseId}/{tableIdOrName}/listRecords` while passing the parameters within the body of the request instead of the query parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\RecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id_or_name = 'table_id_or_name_example'; // string
$time_zone = new \Ez128\Airtable\Model\\Ez128\Airtable\Model\Timezone(); // \Ez128\Airtable\Model\Timezone
$user_locale = 'user_locale_example'; // string
$page_size = 3.4; // float
$max_records = 3.4; // float
$offset = 'offset_example'; // string
$view = new \Ez128\Airtable\Model\\Ez128\Airtable\Model\ListRecordsViewParameter(); // \Ez128\Airtable\Model\ListRecordsViewParameter
$sort = array(new \Ez128\Airtable\Model\\Ez128\Airtable\Model\ListRecordsSortParameterInner()); // \Ez128\Airtable\Model\ListRecordsSortParameterInner[]
$filter_by_formula = 'filter_by_formula_example'; // string
$cell_format = 'cell_format_example'; // string
$fields = array('fields_example'); // string[]
$return_fields_by_field_id = True; // bool
$record_metadata = array('record_metadata_example'); // string[]

try {
    $result = $apiInstance->listRecords($base_id, $table_id_or_name, $time_zone, $user_locale, $page_size, $max_records, $offset, $view, $sort, $filter_by_formula, $cell_format, $fields, $return_fields_by_field_id, $record_metadata);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordApi->listRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **table_id_or_name** | **string**|  | |
| **time_zone** | [**\Ez128\Airtable\Model\Timezone**](../Model/.md)|  | [optional] |
| **user_locale** | **string**|  | [optional] |
| **page_size** | **float**|  | [optional] |
| **max_records** | **float**|  | [optional] |
| **offset** | **string**|  | [optional] |
| **view** | [**\Ez128\Airtable\Model\ListRecordsViewParameter**](../Model/.md)|  | [optional] |
| **sort** | [**\Ez128\Airtable\Model\ListRecordsSortParameterInner[]**](../Model/\Ez128\Airtable\Model\ListRecordsSortParameterInner.md)|  | [optional] |
| **filter_by_formula** | **string**|  | [optional] |
| **cell_format** | **string**|  | [optional] |
| **fields** | [**string[]**](../Model/string.md)|  | [optional] |
| **return_fields_by_field_id** | **bool**|  | [optional] |
| **record_metadata** | [**string[]**](../Model/string.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\ListRecords200Response**](../Model/ListRecords200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSyncApiEndpoint()`

```php
postSyncApiEndpoint($base_id, $table_id_or_name, $api_endpoint_sync_id, $body): \Ez128\Airtable\Model\PostSyncApiEndpoint200Response
```

Sync CSV data

Syncs raw CSV data into a Sync API table. You must first set up a sync from a base (instructions in this [support article](https://support.airtable.com/docs/airtable-sync-integration-api-endpoint)). The **apiEndpointSyncId** in the path parameters can be found in the setup flow when creating a new Sync API table, or from the synced table settings.  The CSV data can contain up to 10k rows, 500 columns, and the HTTP request's size is limited to 2 MB.  Up to 10k rows will be synced per sync run. If you send two requests that each contain a CSV with 10k rows before a sync run occurs, then only 10k rows will be synced.  There is a rate limit of 20 requests, per 5 minutes, per base for this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\RecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id_or_name = 'table_id_or_name_example'; // string
$api_endpoint_sync_id = 'api_endpoint_sync_id_example'; // string
$body = {"rawCsv":"column1,column2\nrow1-column1,row1-column2\nrow2-column1,row2-column2"}; // object

try {
    $result = $apiInstance->postSyncApiEndpoint($base_id, $table_id_or_name, $api_endpoint_sync_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordApi->postSyncApiEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **table_id_or_name** | **string**|  | |
| **api_endpoint_sync_id** | **string**|  | |
| **body** | **object**|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\PostSyncApiEndpoint200Response**](../Model/PostSyncApiEndpoint200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `text/csv`
- **Accept**: `text/csv`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMultipleRecords()`

```php
updateMultipleRecords($base_id, $table_id_or_name, $update_multiple_records_put_request): \Ez128\Airtable\Model\UpdateMultipleRecords200Response
```

Update multiple records

Updates up to 10 records, or upserts them when `performUpsert` is set (see below).  The URL path accepts both table names and table IDs. We recommend using table IDs so you don't need to modify your API request when your table name changes.  A `PATCH` request will only update the fields included in the request. Fields not included in the request will be unchanged. A `PUT` request will perform a destructive update and clear all unincluded cell values.  ### Upserts Set the `performUpsert` property in your request to enable upsert behavior. When upserting is enabled, the `id` property of records becomes optional. Records that do not include `id` will use the fields chosen by [`fieldsToMergeOn`](/api/update-multiple-records#request-performupsert-fieldstomergeon) as an external ID to match with existing records.  * If zero matches are found, a new record will be created. * If one match is found, that record will be updated. * If multiple matches are found, the request will fail.  Records that include `id` will ignore `fieldsToMergeOn` and behave as normal updates. If no record with the given `id` exists, the request will fail and will not create a new record. The API response for upsert requests will additionally include `updatedRecords` and `createdRecords` arrays, indicating which records in the `records` array already existed and were updated, or did not exist and were created, respectively.  Airtable reserves the right to throttle upsert requests differently from the [standard rate limit throttling policy](https://airtable.com/developers/web/api/rate-limits).  ### Typecasting Set the `typecast` parameter to `true` to enable typecasting. When typecasting is enabled, Airtable will try to convert string values in a record's `fields` object to the appropriate cell value. This conversion is only performed on a best-effort basis. Typecasting is disabled by default to ensure your data's integrity, but it may be helpful when integrating with third-party services.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\RecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id_or_name = 'table_id_or_name_example'; // string
$update_multiple_records_put_request = {"records":[{"fields":{"Address":"501 Twin Peaks Blvd","Name":"Twin Peaks","Visited":true},"id":"rec560UJdUtocSouk"},{"fields":{"Visited":true},"id":"rec3lbPRG4aVqkeOQ"}]}; // \Ez128\Airtable\Model\UpdateMultipleRecordsPutRequest

try {
    $result = $apiInstance->updateMultipleRecords($base_id, $table_id_or_name, $update_multiple_records_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordApi->updateMultipleRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **table_id_or_name** | **string**|  | |
| **update_multiple_records_put_request** | [**\Ez128\Airtable\Model\UpdateMultipleRecordsPutRequest**](../Model/UpdateMultipleRecordsPutRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\UpdateMultipleRecords200Response**](../Model/UpdateMultipleRecords200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateRecord()`

```php
updateRecord($base_id, $table_id_or_name, $record_id, $update_record_put_request): \Ez128\Airtable\Model\UpdateRecordPut200Response
```

Update record

Updates a single record. Table names and table ids can be used interchangeably. We recommend using table IDs so you don't need to modify your API request when your table name changes. A **PATCH** request will only update the fields you specify, leaving the rest as they were. A **PUT** request will perform a destructive update and clear all unspecified cell values.  Your request body should include a **fields** property whose value is an object containing your record's cell values, keyed by either field name or field id.  Automatic data conversion for update actions can be enabled via **typecast** parameter. The Airtable API will perform best-effort automatic data conversion from string values if the **typecast** parameter is passed in. Automatic conversion is disabled by default to ensure data integrity, but it may be helpful for integrating with 3rd party data sources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\RecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id_or_name = 'table_id_or_name_example'; // string
$record_id = 'record_id_example'; // string
$update_record_put_request = {"fields":{"Address":"1 Ferry Building","Name":"Ferry Building","Visited":true}}; // \Ez128\Airtable\Model\UpdateRecordPutRequest

try {
    $result = $apiInstance->updateRecord($base_id, $table_id_or_name, $record_id, $update_record_put_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordApi->updateRecord: ', $e->getMessage(), PHP_EOL;
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

## `uploadAttachment()`

```php
uploadAttachment($base_id, $record_id, $attachment_field_id_or_name, $upload_attachment_request): \Ez128\Airtable\Model\UploadAttachment200Response
```

Upload attachment

Upload an attachment up to 5 MB to an attachment cell via the file bytes directly.   To upload attachments above this size that are accessible by a public URL, they can be added using https://airtable.com/developers/web/api/field-model#multipleattachment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ez128\Airtable\Api\RecordApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$base_id = 'base_id_example'; // string
$record_id = 'record_id_example'; // string
$attachment_field_id_or_name = 'attachment_field_id_or_name_example'; // string
$upload_attachment_request = {"contentType":"text/plain","file":"SGVsbG8gd29ybGQ=","filename":"sample.txt"}; // \Ez128\Airtable\Model\UploadAttachmentRequest

try {
    $result = $apiInstance->uploadAttachment($base_id, $record_id, $attachment_field_id_or_name, $upload_attachment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RecordApi->uploadAttachment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **record_id** | **string**|  | |
| **attachment_field_id_or_name** | **string**|  | |
| **upload_attachment_request** | [**\Ez128\Airtable\Model\UploadAttachmentRequest**](../Model/UploadAttachmentRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\UploadAttachment200Response**](../Model/UploadAttachment200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
