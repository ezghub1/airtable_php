# # ListShares200ResponseSharesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**block_installation_id** | **string** |  | [optional]
**can_be_synced** | **bool** | Denotes if the shared view can be synced. View and enterprise specific sync restrictions may also apply. | [optional]
**created_by_user_id** | **string** | A user ID |
**created_time** | **string** | A date timestamp in the ISO format, eg:\&quot;2018-01-01T00:00:00.000Z\&quot; |
**effective_email_domain_allow_list** | **string[]** | The effective email domain allow list factoring all restrictions, including the share&#39;s email domain restrictions and all restrictions above the share (e.g. enterprise sharing restrictions). If this field is omitted, there are no email domain restrictions on the share. Otherwise, a viewer must have an account associated with an email domain included in the allow list. If this list is empty, no viewer can see the share (e.g. no member of restrictedToEmailDomains is allowed by enterprise-wise sharing restrictions). | [optional]
**is_password_protected** | **bool** |  |
**restricted_to_email_domains** | **string[]** | If non-empty, the email domain restrictions assigned to the share. If empty, no domain restrictions are assigned to the share, but higher level ones may still affect it. We recommend using effectiveEmailDomainAllowList to understand share accessibility. |
**restricted_to_enterprise_members** | **bool** | If true, this share is only accessible by members of the enterprise account. This works in conjunction with &#x60;effectiveEmailDomainAllowList&#x60;. |
**share_id** | **string** | The full ShareId (unique identifier for the share). |
**share_token_prefix** | **string** | Only the first 8 characters of the shareId.  Please use &#x60;shareId&#x60; instead. |
**state** | **string** |  |
**type** | **string** |  |
**view_id** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
