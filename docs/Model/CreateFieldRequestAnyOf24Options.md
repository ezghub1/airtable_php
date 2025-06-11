# # CreateFieldRequestAnyOf24Options

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**prompt** | [**\Ez128\Airtable\Model\CreateFieldRequestAnyOf24OptionsPromptInner[]**](CreateFieldRequestAnyOf24OptionsPromptInner.md) | The prompt that is used to generate the results in the AI field, additional object types may be added in the future. Currently, this is an array of strings or objects that identify any fields interpolated into the prompt.  The prompt will not currently be provided if this field config is within another fields configuration (like a lookup field) | [optional]
**referenced_field_ids** | **string[]** | The other fields in the record that are used in the ai field  The referencedFieldIds will not currently be provided if this field config is within another fields configuration (like a lookup field) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
