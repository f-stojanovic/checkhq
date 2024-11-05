# # ListPayrolls200ResponseInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**company** | **string** |  | [optional]
**period_start** | **string** |  | [optional]
**period_end** | **string** |  | [optional]
**approval_deadline** | **string** |  | [optional]
**approved_at** | **string** |  | [optional]
**payday** | **string** |  | [optional]
**status** | **string** |  | [optional]
**type** | **string** |  | [optional]
**pay_frequency** | **string** |  | [optional]
**processing_period** | **string** |  | [optional]
**off_cycle_options** | **mixed** |  | [optional]
**managed** | **bool** |  | [optional] [default to true]
**totals** | [**\OpenAPI\Client\Model\GetPayroll200ResponseTotals**](GetPayroll200ResponseTotals.md) |  | [optional]
**items** | [**\OpenAPI\Client\Model\GetPayroll200ResponseItemsInner[]**](GetPayroll200ResponseItemsInner.md) |  | [optional]
**contractor_payments** | [**\OpenAPI\Client\Model\GetPayroll200ResponseContractorPaymentsInner[]**](GetPayroll200ResponseContractorPaymentsInner.md) |  | [optional]
**is_void** | **bool** |  | [optional] [default to true]
**metadata** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
