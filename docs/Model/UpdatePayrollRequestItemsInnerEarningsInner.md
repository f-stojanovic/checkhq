# # UpdatePayrollRequestItemsInnerEarningsInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of earning. Can be one of the following earning types in &lt;a href&#x3D;\&quot;https://docs.checkhq.com/reference/types-of-earnings\&quot;&gt;Types of earnings&lt;/a&gt; | [optional]
**workplace** | **string** | ID of the workplace where work for this earning was performed |
**earning_code** | **string** | The earning code id which will be used to aggregate earnings on the paystub | [optional]
**description** | **string** | Readable description of the earning code that will show up on the paystub | [optional]
**earning_rate** | **string** | The earning rate id which will be used to calculate the gross wage. Required if type is “piece” | [optional]
**amount** | **string** | Amount earned for this earning&lt;br&gt;&lt;br&gt;Must be greater than 0 | [optional]
**hours** | **float** | Number of hours worked for this earning | [optional]
**piece_units** | **float** | Number of units of work produced. Required if type is “piece” | [optional]
**metadata** | **string** | Additional loosely structured information to associate with the earning | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
