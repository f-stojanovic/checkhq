# # CreateAnEmployeeRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**first_name** | **string** | Employee&#39;s first name | [optional]
**middle_name** | **string** | Employee&#39;s middle name, if available | [optional]
**last_name** | **string** | Employee&#39;s last name |
**email** | **string** | Employee&#39;s email address | [optional]
**dob** | **\DateTime** | Employee&#39;s date of birth. Until dob is added, it will show up as a blocking employee onboard step. | [optional]
**residence** | [**\OpenAPI\Client\Model\CreateAnEmployeeRequestResidence**](CreateAnEmployeeRequestResidence.md) |  | [optional]
**company** | **string** | ID of employee&#39;s company |
**start_date** | **\DateTime** | Most recent start date of employment. Until start date is added, it will show up as a blocking employee onboard step. | [optional]
**termination_date** | **\DateTime** | Most recent date of employment termination. Will be set to null if a more recent start date is set. | [optional]
**default_net_pay_split** | **string** | ID of employee&#39;s net pay split | [optional]
**workplaces** | **string[]** | IDs of workplaces where the employee works. Optionally, an empty list can be passed in and workplaces can be added after employee creation. Until the workplaces are added, this will show up as a blocking step in the onboarding status. |
**primary_workplace** | **string** | The Workplace ID of the employee&#39;s primary workplace. | [optional]
**ssn** | **string** | Employee&#39;s TIN (usually their Social Security Number). Must be unique across all employees in a company. Only the last four digits of an SSN will be made available in &#x60;ssn_last_four&#x60; after being set. | [optional]
**payment_method_preference** | **string** | Either \&quot;direct_deposit\&quot; or \&quot;manual\&quot;, default null | [optional]
**active** | **bool** | Indicates whether the employee is currently employed. Used only for filtering. | [optional] [default to true]
**w2_electronic_consent_provided** | **bool** | Indicates whether the employee has opted into electronic delivery of W2 PDF. | [optional] [default to false]
**metadata** | **string** | Additional loosely structured information to associate with the employee | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
