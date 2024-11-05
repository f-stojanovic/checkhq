# # UpdateAnExternalPayrollRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company** | **string** | ID of the company this external payroll is for. | [optional]
**period_start** | **\DateTime** | The start of the date range that the payroll covers. | [optional]
**period_end** | **\DateTime** | The end of the date range that the payroll covers. | [optional]
**payday** | **\DateTime** | The date on which employees were paid for the payroll. | [optional]
**pay_frequency** | **string** | Frequency at which the external payroll was paid | [optional]
**items** | [**\OpenAPI\Client\Model\CreateAnExternalPayrollRequestItemsInner[]**](CreateAnExternalPayrollRequestItemsInner.md) | The set of [external payroll items](ref:external-payroll-item-object) associated with the payroll. | [optional]
**contractor_payments** | [**\OpenAPI\Client\Model\CreateAnExternalPayrollRequestContractorPaymentsInner[]**](CreateAnExternalPayrollRequestContractorPaymentsInner.md) | The set of [contractor payments](ref:the-contractor-payment-object) associated with the payroll. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
