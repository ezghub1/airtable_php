# Ez128\Airtable\WebhooksApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAWebhook()**](WebhooksApi.md#createAWebhook) | **POST** /v0/bases/{baseId}/webhooks | Create a webhook |
| [**deleteAWebhook()**](WebhooksApi.md#deleteAWebhook) | **DELETE** /v0/bases/{baseId}/webhooks/{webhookId} | Delete a webhook |
| [**enableDisableWebhookNotifications()**](WebhooksApi.md#enableDisableWebhookNotifications) | **POST** /v0/bases/{baseId}/webhooks/{webhookId}/enableNotifications | Enable/disable webhook notifications |
| [**listWebhookPayloads()**](WebhooksApi.md#listWebhookPayloads) | **GET** /v0/bases/{baseId}/webhooks/{webhookId}/payloads | List webhook payloads |
| [**listWebhooks()**](WebhooksApi.md#listWebhooks) | **GET** /v0/bases/{baseId}/webhooks | List webhooks |
| [**refreshAWebhook()**](WebhooksApi.md#refreshAWebhook) | **POST** /v0/bases/{baseId}/webhooks/{webhookId}/refresh | Refresh a webhook |


## `createAWebhook()`

```php
createAWebhook($base_id, $create_a_webhook_request): \Ez128\Airtable\Model\CreateAWebhook200Response
```

Create a webhook

Creates a new webhook in the specified base. Payloads may be generated and the notification URL (if given) will get a ping shortly after this completes.  The number of webhooks per base is limited to 10. A single OAuth integration can create up to 2 webhooks per base.  Each webhook created with OAuth or personal access token will expire and be disabled after 7 days. The webhook life can be extended while it is still active by calling [refresh webhook](/api/refresh-a-webhook) or [list webhook payloads](/api/list-webhook-payloads). After a webhook has expired and been disabled, the webhook's metadata and past payloads can be accessed for an additional 7 days.  **Creator level permissions are required in order to register a webhook.**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$create_a_webhook_request = {"notificationUrl":"https://foo.com/receive-ping","specification":{"options":{"filters":{"dataTypes":["tableData"],"recordChangeScope":"tbltp8DGLhqbUmjK1"}}}}; // \Ez128\Airtable\Model\CreateAWebhookRequest

try {
    $result = $apiInstance->createAWebhook($base_id, $create_a_webhook_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createAWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **create_a_webhook_request** | [**\Ez128\Airtable\Model\CreateAWebhookRequest**](../Model/CreateAWebhookRequest.md)|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\CreateAWebhook200Response**](../Model/CreateAWebhook200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAWebhook()`

```php
deleteAWebhook($base_id, $webhook_id): object
```

Delete a webhook

Deletes a webhook.  **Creator level permissions are required in order to delete a webhook.**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$webhook_id = 'webhook_id_example'; // string

try {
    $result = $apiInstance->deleteAWebhook($base_id, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteAWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **webhook_id** | **string**|  | |

### Return type

**object**

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `enableDisableWebhookNotifications()`

```php
enableDisableWebhookNotifications($base_id, $webhook_id, $enable_disable_webhook_notifications_request): object
```

Enable/disable webhook notifications

Enables or disables notification pings for a webhook. See [notification delivery](/api/webhooks-overview#webhook-notification-delivery).  **Creator level permissions are required in order to enable or disable webhook notification pings.**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$webhook_id = 'webhook_id_example'; // string
$enable_disable_webhook_notifications_request = {"enable":true}; // \Ez128\Airtable\Model\EnableDisableWebhookNotificationsRequest

try {
    $result = $apiInstance->enableDisableWebhookNotifications($base_id, $webhook_id, $enable_disable_webhook_notifications_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->enableDisableWebhookNotifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **webhook_id** | **string**|  | |
| **enable_disable_webhook_notifications_request** | [**\Ez128\Airtable\Model\EnableDisableWebhookNotificationsRequest**](../Model/EnableDisableWebhookNotificationsRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhookPayloads()`

```php
listWebhookPayloads($base_id, $webhook_id, $cursor, $limit): \Ez128\Airtable\Model\ListWebhookPayloads200Response
```

List webhook payloads

Enumerate the update messages for a client to consume. Clients should call this after they receive a ping.  The webhook payload format can be found [here](/api/model/webhooks-payload) and uses [V2 cell value format](/api/field-model).  Calling this endpoint will also extend the life of the webhook if it is active with an expiration time. The new expiration time will be 7 days after the list payloads call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ez128\Airtable\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$base_id = 'base_id_example'; // string
$webhook_id = 'webhook_id_example'; // string
$cursor = 3.4; // float
$limit = 3.4; // float

try {
    $result = $apiInstance->listWebhookPayloads($base_id, $webhook_id, $cursor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->listWebhookPayloads: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **webhook_id** | **string**|  | |
| **cursor** | **float**|  | [optional] |
| **limit** | **float**|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\ListWebhookPayloads200Response**](../Model/ListWebhookPayloads200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWebhooks()`

```php
listWebhooks($base_id): \Ez128\Airtable\Model\ListWebhooks200Response
```

List webhooks

Lists all webhooks that are registered for a base, along with their statuses.  **Read level permissions are required in order to list webhooks.**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string

try {
    $result = $apiInstance->listWebhooks($base_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->listWebhooks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |

### Return type

[**\Ez128\Airtable\Model\ListWebhooks200Response**](../Model/ListWebhooks200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshAWebhook()`

```php
refreshAWebhook($base_id, $webhook_id, $body): \Ez128\Airtable\Model\RefreshAWebhook200Response
```

Refresh a webhook

Extend the life of a webhook. The new expiration time will be 7 days after the refresh time.  Note that this endpoint only applies to active webhooks with an expiration time.  **Creator level permissions are required in order to refresh a webhook.**

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure OAuth2 access token for authorization: oauth
$config = Ez128\Airtable\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Ez128\Airtable\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$base_id = 'base_id_example'; // string
$webhook_id = 'webhook_id_example'; // string
$body = array('key' => new \stdClass); // object

try {
    $result = $apiInstance->refreshAWebhook($base_id, $webhook_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->refreshAWebhook: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **base_id** | **string**|  | |
| **webhook_id** | **string**|  | |
| **body** | **object**|  | [optional] |

### Return type

[**\Ez128\Airtable\Model\RefreshAWebhook200Response**](../Model/RefreshAWebhook200Response.md)

### Authorization

[oauth](../../README.md#oauth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
