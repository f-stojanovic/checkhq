# # UpdateACompanyBenefitRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company** | **string** | ID of the company associated with the benefit. | [optional]
**benefit** | **string** | Type of supported benefit. See [types of benefits](https://docs.checkhq.com/reference#types-of-benefits). | [optional]
**period** | **string** | The period over which a period amount is distributed. Can be \&quot;monthly\&quot; or null. | [optional]
**description** | **string** | Description to distinguish the benefit from other company benefits of the same type. Maximum length of 255 characters. | [optional]
**company_contribution_amount** | **string** | Default amount for company to contribute per payroll. | [optional]
**company_contribution_percent** | **string** | Default decimal percentage of gross pay for company to contribute per payroll from 0 to 100. | [optional]
**company_period_amount** | **string** | Default amount for company to contribute over a period. | [optional]
**employee_contribution_amount** | **string** | Default amount for employee to contribute per payroll. | [optional]
**employee_contribution_percent** | **string** | Default decimal percentage of gross pay for company to contribute per payroll from 0 to 100. | [optional]
**employee_period_amount** | **string** | Default amount for employee to contribute over a period. | [optional]
**effective_start** | **string** | Start date for the benefit. | [optional]
**effective_end** | **string** | End date for the benefit. | [optional]
**metadata** | **string** | Additional loosely structured information to associate with this company benefit. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
