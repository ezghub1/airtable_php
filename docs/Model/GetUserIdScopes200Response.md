# # GetUserIdScopes200Response

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | The email address of the token&#39;s owner. Only returned if the token has the &#x60;user.email:read&#x60; scope. | [optional]
**id** | **string** | A user ID |
**scopes** | [**\Ez128\Airtable\Model\Scope[]**](Scope.md) | The scopes the token has. Only returned if accessing via an OAuth access token. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
