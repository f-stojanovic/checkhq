# # UpdateAPostTaxDeductionRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | A description of this deduction. Maximum length of 255 characters. | [optional]
**effective_start** | **\DateTime** | Start date of the post-tax deduction. | [optional]
**effective_end** | **\DateTime** | End date of the post-tax deduction. | [optional]
**miscellaneous** | [**\OpenAPI\Client\Model\UpdateAPostTaxDeductionRequestMiscellaneous**](UpdateAPostTaxDeductionRequestMiscellaneous.md) |  | [optional]
**child_support** | [**\OpenAPI\Client\Model\UpdateAPostTaxDeductionRequestChildSupport**](UpdateAPostTaxDeductionRequestChildSupport.md) |  | [optional]
**metadata** | **string** | Additional loosely structured information to associate with the post-tax deduction | [optional]
**managed** | **bool** | Denotes whether or not the post-tax deduction should be remitted by Check. Applicable to child support payments only, more info can be found [here](https://docs.checkhq.com/docs/post-tax-deductions#remitting-child-support-garnishments). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
