# # UpdateAPostTaxDeductionRequestChildSupport

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | The unique identifier of the order | [optional]
**agency** | **string** | The state abbreviation of the agency that issued the order | [optional]
**fips_code** | **string** | An optional 5 or 7 digit number used to identify the correct agency within the state. This should be provided if present in the order. | [optional]
**issue_date** | **\DateTime** | The date the collections agency issued the order | [optional]
**amount** | **string** | Per pay period amount to deduct | [optional]
**max_percent** | **float** | The maximum percent of disposable income that can be deducted | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
