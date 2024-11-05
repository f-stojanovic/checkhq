# # UpdateAPayrollItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payroll** | **string** | The payroll ID associated with the payroll item. | [optional]
**payment_method** | **string** | May be &#x60;manual&#x60;, or &#x60;direct_deposit&#x60; if the employee has a linked bank account. &#x60;direct_deposit&#x60; if the employee has a linked Plaid account. | [optional]
**earnings** | [**\OpenAPI\Client\Model\UpdatePayrollRequestItemsInnerEarningsInner[]**](UpdatePayrollRequestItemsInnerEarningsInner.md) | The set of earnings objects associated with the payroll item. | [optional]
**reimbursements** | [**\OpenAPI\Client\Model\UpdatePayrollRequestItemsInnerReimbursementsInner[]**](UpdatePayrollRequestItemsInnerReimbursementsInner.md) | The set of non-taxable reimbursements objects associated with the payroll item. | [optional]
**benefit_overrides** | [**\OpenAPI\Client\Model\UpdatePayrollRequestItemsInnerBenefitOverridesInner[]**](UpdatePayrollRequestItemsInnerBenefitOverridesInner.md) | The set of benefit override objects associated with this payroll item. | [optional]
**post_tax_deduction_overrides** | [**\OpenAPI\Client\Model\UpdatePayrollRequestItemsInnerPostTaxDeductionOverridesInner[]**](UpdatePayrollRequestItemsInnerPostTaxDeductionOverridesInner.md) | The set of benefit override objects associated with this payroll item. | [optional]
**pto_balance_hours** | **float** | The employee&#39;s remaining PTO hour balance, for display on the paystub. Can be updated even after the associated payroll has been approved. | [optional] [default to null]
**sick_balance_hours** | **float** | The employee&#39;s remaining sick hour balance, for display on the paystub. Can be updated even after the associated payroll has been approved. | [optional] [default to null]
**state_covid_sick_balance_hours** | **float** | The employee&#39;s remaining sick hour balance from state COVID relief bills, for display on the paystub | [optional] [default to null]
**supplemental_tax_calc_method** | **string** | Controls the method used by Check to calculate tax on supplemental earnings. May be &#x60;flat&#x60; or &#x60;aggregate&#x60; | [optional]
**paper_check_number** | **string** | For accounting. The check number associated with any printed checks. Can be updated even after the associated payroll has been approved. See [Get a paper check](ref:get-a-paper-check) for more details. | [optional]
**metadata** | **string** | Additional loosely structured information to associate with the payroll item | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
