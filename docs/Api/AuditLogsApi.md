# Ez128\Airtable\AuditLogsApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**auditLogEvents()**](AuditLogsApi.md#auditLogEvents) | **GET** /v0/meta/enterpriseAccounts/{enterpriseAccountId}/auditLogEvents | Audit log events |


## `auditLogEvents()`

```php
auditLogEvents($enterprise_account_id, $start_time, $end_time, $originating_user_id, $event_type, $model_id, $page_size, $sort_order, $previous, $next, $category): \Ez128\Airtable\Model\AuditLogEvents200Response
```

Audit log events

Retrieve audit log events for an enterprise. By default, this will walk all the data we're currently storing and continue walking data into the future.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\AuditLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$enterprise_account_id = 'enterprise_account_id_example'; // string
$start_time = 'start_time_example'; // string
$end_time = 'end_time_example'; // string
$originating_user_id = new \Ez128\Airtable\Model\\Ez128\Airtable\Model\AuditLogEventsOriginatingUserIdParameter(); // \Ez128\Airtable\Model\AuditLogEventsOriginatingUserIdParameter
$event_type = new \Ez128\Airtable\Model\\Ez128\Airtable\Model\AuditLogEventsEventTypeParameter(); // \Ez128\Airtable\Model\AuditLogEventsEventTypeParameter
$model_id = new \Ez128\Airtable\Model\\Ez128\Airtable\Model\AuditLogEventsModelIdParameter(); // \Ez128\Airtable\Model\AuditLogEventsModelIdParameter
$page_size = 3.4; // float
$sort_order = 'sort_order_example'; // string
$previous = 'previous_example'; // string
$next = 'next_example'; // string
$category = new \Ez128\Airtable\Model\\Ez128\Airtable\Model\AuditLogEventsCategoryParameter(); // \Ez128\Airtable\Model\AuditLogEventsCategoryParameter

try {
    $result = $apiInstance->auditLogEvents($enterprise_account_id, $start_time, $end_time, $originating_user_id, $event_type, $model_id, $page_size, $sort_order, $previous, $next, $category);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditLogsApi->auditLogEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **enterprise_account_id** | **string**|  | |
| **start_time** | **string**|  | [optional] |
| **end_time** | **string**|  | [optional] |
| **originating_user_id** | [**\Ez128\Airtable\Model\AuditLogEventsOriginatingUserIdParameter**](../Model/.md)|  | [optional] |
| **event_type** | [**\Ez128\Airtable\Model\AuditLogEventsEventTypeParameter**](../Model/.md)|  | [optional] |
| **model_id** | [**\Ez128\Airtable\Model\AuditLogEventsModelIdParameter**](../Model/.md)|  | [optional] |
| **page_size** | **float**|  | [optional] |
| **sort_order** | **string**|  | [optional] |
| **previous** | **string**|  | [optional] |
| **next** | **string**|  | [optional] |
| **category** | [**\Ez128\Airtable\Model\AuditLogEventsCategoryParameter**](../Model/.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\AuditLogEvents200Response**](../Model/AuditLogEvents200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
