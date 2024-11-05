# # CreateAContractorRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**company** | **string** | ID of the company the contractor performs work for |
**type** | **string** | If the contractor is a person set to \&quot;individual\&quot;, otherwise set to \&quot;business\&quot;. | [optional]
**first_name** | **string** | Contractor&#39;s first name. If contractor type is business, a primary contact is needed for 1099 filing so use the first name of the business&#39;s primary contact. | [optional]
**middle_name** | **string** | Contractor&#39;s middle name. If contractor type is business, a primary contact is needed for 1099 filing so use the middle name of the business&#39;s primary contact. | [optional]
**last_name** | **string** | Contractor&#39;s last name. If contractor type is business, a primary contact is needed for 1099 filing so use the last name of the business&#39;s primary contact. |
**business_name** | **string** | Contractor&#39;s business name if they&#39;re not an individual. | [optional]
**dob** | **\DateTime** | Contractor&#39;s date of birth | [optional]
**start_date** | **\DateTime** | Most recent start date of contract | [optional]
**termination_date** | **\DateTime** | Most recent termination date of contract. Will be set to null if a more recent start date is set. | [optional]
**workplaces** | **string[]** | IDs of workplaces where the contractor works | [optional]
**primary_workplace** | **string** | The Workplace ID of the contractor&#39;s primary workplace. | [optional]
**email** | **string** | Contractor&#39;s email address | [optional]
**ssn** | **string** | Contractor&#39;s TIN (usually their Social Security Number). Must be unique across all contractors in a company. Only the last four digits of an SSN will be made available in &#x60;ssn_last_four&#x60; after being set. | [optional]
**ein** | **string** | Contractor&#39;s Employer Identification Number, if applicable | [optional]
**default_net_pay_split** | **string** | ID of contractor&#39;s net pay split | [optional]
**payment_method_preference** | **string** | Either \&quot;direct_deposit\&quot; or \&quot;manual\&quot;, default null | [optional]
**address** | [**\OpenAPI\Client\Model\UpdateAContractorRequestAddress**](UpdateAContractorRequestAddress.md) |  | [optional]
**_1099_nec_electronic_consent_provided** | **bool** | Indicates whether the contractor has opted into electronic delivery of Copy B of 1099-NEC. | [optional] [default to false]
**metadata** | **string** | Additional loosely structured information to associate with the contractor | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
