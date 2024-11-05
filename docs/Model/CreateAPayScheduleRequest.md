# # CreateAPayScheduleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company** | **string** | ID of the company that this pay schedule relates to. |
**name** | **string** | Human-readable name of the pay schedule. | [optional]
**pay_frequency** | **string** | Frequency by which [employees](ref:the-employee-object) get paid.&lt;br&gt;&lt;br&gt;One of &#x60;weekly&#x60;, &#x60;biweekly&#x60;, &#x60;semimonthly&#x60;, &#x60;monthly&#x60;, &#x60;quarterly&#x60;, or &#x60;annually&#x60;. |
**first_payday** | **\DateTime** | The payday date of the first payroll the company will run on Check on this pay schedule. |
**second_payday** | **string** | The payday date of the the second payroll the company will run on Check on this pay schedule. This field should only be used with the &#x60;semimonthly&#x60; frequency to specify custom paydays besides the 15th and last day of the month. &#x60;second_payday&#x60; must be between one day and one month after &#x60;first_payday&#x60;. | [optional]
**first_period_end** | **\DateTime** | The period end date of the first payroll the company will run on Check on this pay schedule. |
**metadata** | **string** | Additional loosely structured information to associate with the pay schedule | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
