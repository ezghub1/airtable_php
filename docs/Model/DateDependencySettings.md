# # DateDependencySettings

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**duration_field_id** | **string** | Must be an editable number field with unit in days. |
**end_date_field_id** | **string** | Must be an editable Date field. |
**holidays** | **string[]** | Set of holidays dates to skip when recalculating. Each date should be ISO-formatted. Has no effect if shouldSkipWeekendsAndHolidays is false. |
**is_enabled** | **bool** | Whether the date dependency settings are enabled. |
**predecessor_field_id** | **string** |  |
**rescheduling_mode** | **string** | Determines how tasks are rescheduled relative to their predecessors. [See support article](https://support.airtable.com/docs/date-dependencies-in-airtable#supported-date-dependency-behavior-in-airtable) for more. |
**should_skip_weekends_and_holidays** | **bool** | Whether to skip weekends and holidays when recalculating. |
**start_date_field_id** | **string** | Must be an editable Date field. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
