# # SCIMUserSchema

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Indicates if the user is active or deactivated.  Setting this is possible via the put and patch endpoints. | [optional]
**addresses** | [**\Ez128\Airtable\Model\SCIMUserSchemaAddressesInner[]**](SCIMUserSchemaAddressesInner.md) |  | [optional]
**display_name** | **string** |  | [optional]
**emails** | [**\Ez128\Airtable\Model\SCIMUserSchemaEmailsInner[]**](SCIMUserSchemaEmailsInner.md) |  | [optional]
**entitlements** | **mixed[]** |  | [optional]
**external_id** | **string** | Provisioning client defined identifier. | [optional]
**groups** | [**\Ez128\Airtable\Model\SCIMUserSchemaGroupsInner[]**](SCIMUserSchemaGroupsInner.md) |  | [optional]
**id** | **string** | Airtable&#39;s unique user ID for this user. | [optional]
**ims** | [**\Ez128\Airtable\Model\SCIMUserSchemaEmailsInner[]**](SCIMUserSchemaEmailsInner.md) |  | [optional]
**locale** | **string** |  | [optional]
**meta** | **mixed** |  | [optional]
**name** | [**\Ez128\Airtable\Model\SCIMUserSchemaName**](SCIMUserSchemaName.md) |  | [optional]
**nick_name** | **string** |  | [optional]
**password** | **string** |  | [optional]
**phone_numbers** | [**\Ez128\Airtable\Model\SCIMUserSchemaEmailsInner[]**](SCIMUserSchemaEmailsInner.md) |  | [optional]
**photos** | [**\Ez128\Airtable\Model\SCIMUserSchemaPhotosInner[]**](SCIMUserSchemaPhotosInner.md) |  | [optional]
**preferred_language** | **string** |  | [optional]
**profile_url** | **string** |  | [optional]
**roles** | **mixed[]** |  | [optional]
**schemas** | **string[]** | A list of schemas, including at least SCIM&#39;s core user schema URI.  You can add the [enterprise extension](https://datatracker.ietf.org/doc/html/rfc7643#section-4.3) schema URI if you want to send extra properties for reporting.  See the optional user metadata table for details. |
**timezone** | **string** |  | [optional]
**title** | **string** |  | [optional]
**urn_ietf_params_scim_schemas_extension_enterprise_2_0_user** | [**\Ez128\Airtable\Model\SCIMUserSchemaUrnIetfParamsScimSchemasExtensionEnterprise20User**](SCIMUserSchemaUrnIetfParamsScimSchemasExtensionEnterprise20User.md) |  | [optional]
**user_name** | **string** | Becomes the \&quot;email\&quot; field in Airtable. It must not be in use already, and the email&#39;s domain must match the enterprise account. |
**user_type** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
