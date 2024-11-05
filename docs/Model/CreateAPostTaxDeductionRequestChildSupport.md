# # CreateAPostTaxDeductionRequestChildSupport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | The unique identifier of the garnishment order, listed as the case number on the order |
**agency** | **string** | The state abbreviation of the agency that issued the order |
**fips_code** | **string** | An optional 5 or 7 digit number used to identify the correct agency within the state. This should be provided if present in the order. Auto-populated if required but not set. | [optional]
**issue_date** | **\DateTime** | The date the collections agency issued the order |
**amount** | **string** | Per pay period amount to deduct |
**max_percent** | **float** | The maximum percent of disposable income that can be deducted |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
