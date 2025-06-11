# # CreateEdiscoveryExportRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**base_id** | **string** | Base ID to create eDiscovery export for. |
**include_csv_format** | **bool** | If set, also export the base as CSVs (in a zipped file). Once the export is ready for download, the URL to the zip file will be available in the &#x60;csvZipDownloadUrl&#x60; attribute. | [optional]
**should_send_email_on_completion** | **bool** | If set, an email will be sent to the user who initiated the export once the export is ready for download. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
