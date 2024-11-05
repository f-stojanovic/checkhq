# # CreateAPostTaxDeductionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The type of post-tax deduction. May be miscellaneous or child_support. |
**employee** | **string** | ID of the employee to be associated with the post-tax deduction. |
**description** | **string** | A description of this deduction. Maximum length of 255 characters. |
**effective_start** | **\DateTime** | Start date for the deduction |
**effective_end** | **\DateTime** | End date for the deduction | [optional]
**miscellaneous** | [**\OpenAPI\Client\Model\CreateAPostTaxDeductionRequestMiscellaneous**](CreateAPostTaxDeductionRequestMiscellaneous.md) |  | [optional]
**child_support** | [**\OpenAPI\Client\Model\CreateAPostTaxDeductionRequestChildSupport**](CreateAPostTaxDeductionRequestChildSupport.md) |  | [optional]
**metadata** | **string** | Additional loosely structured information to associate with the post-tax deduction | [optional]
**managed** | **bool** | Denotes whether or not the post-tax deduction should be remitted by Check. Applicable to child support payments only, more info can be found [here](https://docs.checkhq.com/docs/post-tax-deductions#remitting-child-support-garnishments). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
