# # UpdateTheEnrollmentProfileRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**employee_count** | **int** | Number of payees who are W2 employees | [optional]
**contractor_count** | **int** | Number of payees who are 1099 contractors | [optional]
**pay_period_amount** | **int** | Estimated total amount of money paid to employees and contractors per pay period | [optional] [default to null]
**previous_payroll_provider** | **string** | The payroll provider previously used by the company | [optional] [default to 'null']
**first_payroll** | **bool** | Whether or not the company has ever paid people before. | [optional] [default to false]
**first_payroll_of_year** | **bool** | Whether or not this is the first payroll of the current calendar year for the company | [optional] [default to false]
**user_since** | **\DateTime** | The date at which the company joined the partner&#39;s platform | [optional]
**expected_first_payday** | **\DateTime** | The company&#39;s expected first payday on Check | [optional]
**approved_for_payment_processing** | **bool** | Whether or not the company has been approved for payment processing on the partner&#39;s platform | [optional] [default to false]
**existing_payroll_customer_processing_period** | **string** | If business is already running payroll with you, the processing period they are currently using. One of &#x60;null&#x60;, &#x60;four_day&#x60;, &#x60;two_day&#x60;, or &#x60;one_day&#x60;. | [optional] [default to 'null']
**average_monthly_revenue** | **float** | The average monthly revenue of the company | [optional]
**earliest_known_revenue** | **\DateTime** | The earliest known date that the company generated revenue | [optional]
**months_on_previous_payroll_provider** | **int** | The number of months that the company used their previous payroll provider | [optional]
**social_media** | **string[]** | Any social media account URLs associated with the company | [optional]
**products_actively_used** | **string[]** | A list of the products offered by the partner&#39;s platform used by the associated company. Values must be one of &#x60;timetracking&#x60;, &#x60;payments&#x60;, or &#x60;scheduling&#x60;. | [optional]
**account_contacts** | **string[]** | A list of partner employee emails associated with the company | [optional]
**fraud_score** | **float** | A value between 0 and 100 representing the fraud risk presented by the company | [optional]
**predicted_fraud** | **bool** | Whether the fraud score was over the expected threshold for fraud (the company is predicted to be fraudulent) | [optional] [default to false]
**paying_user** | **bool** | Whether the company pays the partner for services | [optional] [default to false]
**missed_payments_count** | **int** | The number of times that the company has failed to pay the partner | [optional]
**payroll_history_access_method** | **string** | The mechanism by which Check Implementation Services will be able to access and migrate payroll history | [optional]
**implementation_services_submission_comment** | **string** | Optional comment for including additional context when submitting a company for Implementation Services | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
