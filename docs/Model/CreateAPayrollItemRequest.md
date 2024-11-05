# # CreateAPayrollItemRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**payroll** | **string** | The payroll ID associated with the payroll item. |
**employee** | **string** | The employee ID associated with the payroll item. |
**payment_method** | **string** | May be &#x60;manual&#x60; or &#x60;direct_deposit&#x60; if the employee has a linked bank account | [optional]
**earnings** | [**\OpenAPI\Client\Model\UpdatePayrollRequestItemsInnerEarningsInner[]**](UpdatePayrollRequestItemsInnerEarningsInner.md) | The set of earnings objects associated with the payroll item. | [optional]
**reimbursements** | [**\OpenAPI\Client\Model\UpdatePayrollRequestItemsInnerReimbursementsInner[]**](UpdatePayrollRequestItemsInnerReimbursementsInner.md) | The set of non-taxable reimbursements objects associated with the payroll item. | [optional]
**benefit_overrides** | [**\OpenAPI\Client\Model\UpdatePayrollRequestItemsInnerBenefitOverridesInner[]**](UpdatePayrollRequestItemsInnerBenefitOverridesInner.md) | The set of benefit override objects associated with this payroll item. | [optional]
**post_tax_deduction_overrides** | [**\OpenAPI\Client\Model\UpdatePayrollRequestItemsInnerPostTaxDeductionOverridesInner[]**](UpdatePayrollRequestItemsInnerPostTaxDeductionOverridesInner.md) | The set of post-tax deduction override objects associated with this payroll item. | [optional]
**pto_balance_hours** | **float** | The employee&#39;s remaining PTO hour balance, for display on the paystub | [optional]
**sick_balance_hours** | **float** | The employee&#39;s remaining sick hour balance, for display on the paystub | [optional]
**state_covid_sick_balance_hours** | **float** | The employee&#39;s remaining sick hour balance from state COVID relief bills, for display on the paystub. This field is currently only applicable to California employers as per [SB-95](https://leginfo.legislature.ca.gov/faces/billTextClient.xhtml?bill_id&#x3D;202120220SB95). When the requirement expires, this field will be removed in a future API version | [optional]
**supplemental_tax_calc_method** | **string** | Controls the method used by Check to calculate tax on supplemental earnings. May be &#x60;flat&#x60; or &#x60;aggregate&#x60; | [optional]
**paper_check_number** | **string** | For accounting. The check number associated with any printed checks. Can be updated even after the associated payroll has been approved. See [Get a paper check](ref:get-a-paper-check) for more details. | [optional]
**metadata** | **string** | Additional loosely structured information to associate with the payroll item. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
