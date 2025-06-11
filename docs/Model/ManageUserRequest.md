# # ManageUserRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**email** | **string** | Enterprise account must own both the original and destination email domains.  *WARNING:* If SSO is required for your enterprise account, you must follow these steps precisely to avoid locking the end user out of their account or creating duplicate accounts.   - Use this API to update the user&#39;s email to a new value (this effectively logs the user out)  - Use your SSO provider&#39;s (e.g. Okta&#39;s) admin panel to update the user&#39;s email to the new value  - Tell the user to log into Airtable with the new email | [optional]
**first_name** | **string** |  | [optional]
**last_name** | **string** |  | [optional]
**state** | **string** | [provisioned](/api/org-management-glossary#provisioned-user) | [deactivated](/api/org-management-glossary#deactivated-user) Can only change the state of [managed](/api/org-management-glossary#managed-user) users. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
