# # ListPayments200ResponseResultsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | [optional]
**status** | **string** |  | [optional]
**amount** | **string** |  | [optional]
**type** | **string** |  | [optional]
**parent_type** | **string** |  | [optional]
**parent_id** | **string** |  | [optional]
**payment_attempts** | [**\OpenAPI\Client\Model\ListPayments200ResponseResultsInnerPaymentAttemptsInner[]**](ListPayments200ResponseResultsInnerPaymentAttemptsInner.md) |  | [optional]
**can_retry** | **bool** |  | [optional] [default to true]
**can_refund** | **bool** |  | [optional] [default to true]
**can_cancel** | **bool** |  | [optional] [default to true]
**cancel_deadline** | **string** |  | [optional]
**direction** | **string** |  | [optional]
**company** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
