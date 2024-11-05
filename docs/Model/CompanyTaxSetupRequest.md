# # CompanyTaxSetupRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**signer_name** | **string** | The name of the person who has permission to onboard on behalf of the company. |
**signer_title** | **string** | The title of the person who has permission to onboard on behalf of the company (e.g. \&quot;Officer\&quot;, \&quot;Manager\&quot;, etc.). |
**email** | **string** | The email of the person who has permission to onboard on behalf of the company |
**signatory** | **string** | The ID of the signatory object for this company. You may use either a signatory ID or the three body params above | [optional]
**jurisdiction** | **string** | Initially select the provided jurisdiction. Use the value “FED” for federal or the last 2 letters of the ISO 3166-2:US code for the jurisdiction. | [optional] [default to 'FED']
**federal_only** | **bool** | Only show the Federal tab if True. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
