# # UpdatePayrollRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**period_start** | **\DateTime** | The start of the date range that the payroll covers. | [optional]
**period_end** | **\DateTime** | The end of the date range that the payroll covers. | [optional]
**payday** | **\DateTime** | The date on which employees will be paid for the payroll. | [optional]
**processing_period** | **string** | The processing period of the payroll. &lt;br&gt;&lt;br&gt;One of &#x60;four_day&#x60;, &#x60;two_day&#x60;, or &#x60;one_day&#x60;.&lt;br&gt;&lt;br&gt;The processing period determines the approval deadline of the payroll. For a payroll with a Friday payday, &#x60;four_day&#x60; will mean the approval deadline is on Monday, whereas &#x60;two_day&#x60; will mean the approval deadline is on Wednesday.&lt;br&gt;&lt;br&gt;The possible values for this field are constrained by the processing periods the company is approved for.&lt;br&gt;&lt;br&gt;Default: &#x60;processing_period&#x60; of the company | [optional]
**type** | **string** | Indicates whether the payroll is a regular, [off-cycle](doc:off-cycle-payroll), or amendment payroll.&lt;br&gt;&lt;br&gt;One of &#x60;regular&#x60;, &#x60;off_cycle&#x60;, or &#x60;amendment&#x60;. | [optional]
**pay_frequency** | **string** | Frequency by which [employees](ref:the-employee-object) get paid.&lt;br&gt;&lt;br&gt;One of &#x60;weekly&#x60;, &#x60;biweekly&#x60;, &#x60;semimonthly&#x60;, &#x60;monthly&#x60;, &#x60;quarterly&#x60;, or &#x60;annually&#x60;. | [optional]
**funding_payment_method** | **string** | Payment method for funding the payroll. &lt;br&gt;&lt;br&gt;One of &#x60;ach&#x60; or &#x60;wire&#x60;. | [optional]
**pay_schedule** | **string** | ID of the [pay schedule](ref:the-pay-schedule-object) that the payroll relates to. | [optional]
**off_cycle_options** | [**\OpenAPI\Client\Model\UpdatePayrollRequestOffCycleOptions**](UpdatePayrollRequestOffCycleOptions.md) |  | [optional]
**items** | [**\OpenAPI\Client\Model\UpdatePayrollRequestItemsInner[]**](UpdatePayrollRequestItemsInner.md) | The set of [payroll items](ref:the-payroll-item-object) associated with the payroll. | [optional]
**contractor_payments** | [**\OpenAPI\Client\Model\UpdatePayrollRequestContractorPaymentsInner[]**](UpdatePayrollRequestContractorPaymentsInner.md) | The set of [contractor payments](ref:the-contractor-payment-object) associated with the payroll. | [optional]
**metadata** | **string** | Additional loosely structured information to associate with the payroll. Values must be string. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
