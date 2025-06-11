# Ez128\Airtable\CommentApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createComment()**](CommentApi.md#createComment) | **POST** /v0/{baseId}/{tableIdOrName}/{recordId}/comments | Create comment |
| [**deleteComment()**](CommentApi.md#deleteComment) | **DELETE** /v0/{baseId}/{tableIdOrName}/{recordId}/comments/{rowCommentId} | Delete comment |
| [**listComments()**](CommentApi.md#listComments) | **GET** /v0/{baseId}/{tableIdOrName}/{recordId}/comments | List comments |
| [**updateComment()**](CommentApi.md#updateComment) | **PATCH** /v0/{baseId}/{tableIdOrName}/{recordId}/comments/{rowCommentId} | Update comment |


## `createComment()`

```php
createComment($base_id, $table_id_or_name, $record_id, $create_comment_request): \Ez128\Airtable\Model\CreateComment200Response
```

Create comment

Creates a comment on a record. [User mentioned](/api/model/user-mentioned) is supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id_or_name = 'table_id_or_name_example'; // string
$record_id = 'record_id_example'; // string
$create_comment_request = {"text":"Hello, world!"}; // \Ez128\Airtable\Model\CreateCommentRequest

try {
    $result = $apiInstance->createComment($base_id, $table_id_or_name, $record_id, $create_comment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->createComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **table_id_or_name** | **string**|  | |
| **record_id** | **string**|  | |
| **create_comment_request** | [**\Ez128\Airtable\Model\CreateCommentRequest**](../Model/CreateCommentRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\CreateComment200Response**](../Model/CreateComment200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteComment()`

```php
deleteComment($base_id, $table_id_or_name, $record_id, $row_comment_id): \Ez128\Airtable\Model\DeleteComment200Response
```

Delete comment

Deletes a comment from a record. Non-admin API users can only delete comments they have created. Enterprise Admins can delete any comment from a record.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id_or_name = 'table_id_or_name_example'; // string
$record_id = 'record_id_example'; // string
$row_comment_id = 'row_comment_id_example'; // string

try {
    $result = $apiInstance->deleteComment($base_id, $table_id_or_name, $record_id, $row_comment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->deleteComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **table_id_or_name** | **string**|  | |
| **record_id** | **string**|  | |
| **row_comment_id** | **string**|  | |

### Return type

[**\Ez128\Airtable\Model\DeleteComment200Response**](../Model/DeleteComment200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listComments()`

```php
listComments($base_id, $table_id_or_name, $record_id, $page_size, $offset): \Ez128\Airtable\Model\ListComments200Response
```

List comments

Returns a list of comments for the record from newest to oldest.  Note: Comments in reply to another comment (where `parentCommentId` is set) may not have their parent comment in the same page of results and vice versa.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id_or_name = 'table_id_or_name_example'; // string
$record_id = 'record_id_example'; // string
$page_size = 3.4; // float
$offset = 'offset_example'; // string

try {
    $result = $apiInstance->listComments($base_id, $table_id_or_name, $record_id, $page_size, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->listComments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **table_id_or_name** | **string**|  | |
| **record_id** | **string**|  | |
| **page_size** | **float**|  | [optional] |
| **offset** | **string**|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\ListComments200Response**](../Model/ListComments200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateComment()`

```php
updateComment($base_id, $table_id_or_name, $record_id, $row_comment_id, $update_comment_request): \Ez128\Airtable\Model\CreateComment200Response
```

Update comment

Updates a comment on a record. API users can only update comments they have created. [User mentioned](/api/model/user-mentioned) is supported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\CommentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$table_id_or_name = 'table_id_or_name_example'; // string
$record_id = 'record_id_example'; // string
$row_comment_id = 'row_comment_id_example'; // string
$update_comment_request = {"text":"Update, world!"}; // \Ez128\Airtable\Model\UpdateCommentRequest

try {
    $result = $apiInstance->updateComment($base_id, $table_id_or_name, $record_id, $row_comment_id, $update_comment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CommentApi->updateComment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **table_id_or_name** | **string**|  | |
| **record_id** | **string**|  | |
| **row_comment_id** | **string**|  | |
| **update_comment_request** | [**\Ez128\Airtable\Model\UpdateCommentRequest**](../Model/UpdateCommentRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\CreateComment200Response**](../Model/CreateComment200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
