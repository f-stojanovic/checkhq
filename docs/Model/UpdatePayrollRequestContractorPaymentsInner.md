# # UpdatePayrollRequestContractorPaymentsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contractor** | **string** | The id of the contractor being paid |
**payment_method** | **string** | The way the contractor will be paid, either “direct_deposit” or \&quot;manual\&quot; | [optional] [default to '"direct_deposit"']
**amount** | **string** | The amount the contractor should be paid | [optional] [default to '"0.00"']
**reimbursement_amount** | **string** | The amount to reimburse the contractor | [optional] [default to '"0.00"']
**paper_check_number** | **string** | For accounting. The check number associated with any printed checks. Can be updated even after the associated payroll has been approved. See Get a paper check for more details. | [optional]
**workplace** | **string** | The Workplace ID associated with this payment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
