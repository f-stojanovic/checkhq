# # CreateAContractorPaymentRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**contractor** | **string** | ID of the contractor to pay |
**payroll** | **string** | ID of the payroll this contractor payment will be paid out on |
**payment_method** | **string** | The way the contractor will be paid, either “direct_deposit” or \&quot;manual\&quot; | [optional] [default to 'direct_deposit']
**amount** | **string** | The amount the contractor will be paid | [default to '0.00']
**reimbursement_amount** | **string** | The amount to reimburse the contractor | [optional] [default to '0.00']
**workplace** | **string** | The Workplace ID associated with this payment. | [optional]
**metadata** | **string** | Additional loosely structured information to associate with this contractor payment | [optional]
**paper_check_number** | **string** | For accounting. The check number associated with any printed checks. Can be updated even after the associated payroll has been approved. See [Get a paper check](ref:get-a-paper-check-2) for more details. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
