# # UpdateAnEmployeeBenefitRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**employee** | **string** | Update the benefit for this employee | [optional]
**benefit** | **string** | Type of supported benefit. See [types of benefits](https://docs.checkhq.com/reference#types-of-benefits). | [optional]
**company_benefit** | **string** | The company benefit to associate this employee benefit with. | [optional]
**period** | **string** | The period over which a period amount is distributed. Can be \&quot;monthly\&quot; or null. | [optional]
**description** | **string** | Optional description to distinguish the benefit within the plan. Maximum length of 255 characters. | [optional]
**company_contribution_amount** | **string** | Amount for company to contribute per payroll | [optional]
**company_contribution_percent** | **float** | Decimal percentage of gross pay for company to contribute per payroll from 0 to 100. | [optional]
**company_period_amount** | **string** | Amount for company to contribute over period. | [optional]
**employee_contribution_amount** | **string** | Amount for employee to contribute per payroll | [optional]
**employee_contribution_percent** | **float** | Decimal percentage of gross pay for company to contribute per payroll from 0 to 100. | [optional]
**employee_period_amount** | **string** | Amount for employee to contribute over period. | [optional]
**effective_start** | **\DateTime** | Start date for the benefit | [optional]
**effective_end** | **\DateTime** | End date for the benefit | [optional]
**hsa_contribution_limit** | **string** | Contribution limit of a HSA benefit | [optional]
**metadata** | **string** | Additional loosely structured information to associate with this employee benefit | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
