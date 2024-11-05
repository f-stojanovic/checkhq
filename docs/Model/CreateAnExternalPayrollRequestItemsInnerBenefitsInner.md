# # CreateAnExternalPayrollRequestItemsInnerBenefitsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | ID of the benefit object that represents this deduction. One of &#x60;ID&#x60; or &#x60;benefit&#x60; must be provided. | [optional]
**benefit** | **string** | The [benefit type](https://docs.checkhq.com/reference/types-of-benefits) of this deduction. Either &#x60;id&#x60; or &#x60;benefit&#x60; must be provided. | [optional]
**description** | **string** | Description of the benefit provided. If ID is provided, this field will not take effect and instead be superseded by the benefit object&#39;s description. | [optional]
**employee_contribution_amount** | **string** | Amount the employee contributed to the benefit for this payroll | [optional]
**company_contribution_amount** | **string** | Amount the company contributed to this benefit for this payroll | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
