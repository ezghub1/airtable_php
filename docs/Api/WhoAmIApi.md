# Ez128\Airtable\WhoAmIApi

All URIs are relative to https://api.airtable.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getUserIdScopes()**](WhoAmIApi.md#getUserIdScopes) | **GET** /v0/meta/whoami | Get user info |


## `getUserIdScopes()`

```php
getUserIdScopes(): \Ez128\Airtable\Model\GetUserIdScopes200Response
```

Get user info

Retrieve the user's ID. For OAuth access tokens, the scopes associated with the token used are also returned. For tokens with the `user.email:read` scope, the user's email is also returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Ez128\Airtable\Api\WhoAmIApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getUserIdScopes();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WhoAmIApi->getUserIdScopes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Ez128\Airtable\Model\GetUserIdScopes200Response**](../Model/GetUserIdScopes200Response.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
