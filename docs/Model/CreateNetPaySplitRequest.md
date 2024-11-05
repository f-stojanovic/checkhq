# # CreateNetPaySplitRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**employee** | **string** | ID of the employee that the net pay split relates to. | [optional]
**contractor** | **string** | ID of the contractor that the net pay split relates to. | [optional]
**splits** | [**\OpenAPI\Client\Model\CreateNetPaySplitRequestSplitsInner[]**](CreateNetPaySplitRequestSplitsInner.md) | Prioritized list of bank accounts and the maximum amounts to be paid to each account.  The amount / percentage can be omitted for the lowest priority account. |
**is_default** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
