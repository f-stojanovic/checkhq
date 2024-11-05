# # UpdateAnEmployeeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | Employee’s first name | [optional]
**middle_name** | **string** | Employee’s middle name | [optional]
**last_name** | **string** | Employee’s last name | [optional]
**email** | **string** | Employee’s email address | [optional]
**dob** | **\DateTime** | Employee’s date of birth | [optional]
**residence** | [**\OpenAPI\Client\Model\UpdateAnEmployeeRequestResidence**](UpdateAnEmployeeRequestResidence.md) |  | [optional]
**start_date** | **\DateTime** | Most recent start date of employment | [optional]
**termination_date** | **\DateTime** | Most recent date of employment termination. Will be set to null if a more recent start date is set. | [optional]
**default_net_pay_split** | **string** | ID of the employee&#39;s net pay split | [optional]
**workplaces** | **string[]** | IDs of workplaces where the employee works | [optional]
**primary_workplace** | **string** | The Workplace ID of the employee&#39;s primary workplace. | [optional]
**ssn** | **string** | Employee&#39;s TIN (usually their Social Security Number). Must be unique across all employees in a company. Only the last four digits of an SSN will be made available in &#x60;ssn_last_four&#x60; after being set. | [optional]
**payment_method_preference** | **string** | Either \&quot;direct_deposit\&quot; or \&quot;manual\&quot; | [optional]
**active** | **bool** | Indicates whether the employee is currently employed. Used only for filtering. | [optional]
**w2_electronic_consent_provided** | **bool** | Indicates whether the employee has opted into electronic delivery of W2 PDF. | [optional] [default to false]
**metadata** | **string** | Additional loosely structured information to associate with the employee | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
