# # CreateCompanyRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**legal_name** | **string** | Legal name of the company | [optional]
**trade_name** | **string** | Trade name of the company | [optional]
**other_business_name** | **string** | Other business name used by the company. | [optional]
**business_type** | **string** | Business type of the company. One of &#x60;sole_proprietorship&#x60;, &#x60;partnership&#x60;, &#x60;c_corporation&#x60;, &#x60;s_corporation&#x60;, or &#x60;llc&#x60;. | [optional]
**industry_type** | **string** | Industry type of the company. One of &#x60;auto_or_machine_sales&#x60;, &#x60;auto_or_machine_repair&#x60;, &#x60;arts_or_entertainment_or_recreation&#x60;, &#x60;cleaning_services&#x60;, &#x60;consulting_services&#x60;, &#x60;educational_services&#x60;, &#x60;family_care_services&#x60;, &#x60;financial_services&#x60;, &#x60;food_and_beverage_retail_or_wholesale&#x60;, &#x60;general_construction_or_general_contracting&#x60;, &#x60;health_care&#x60;, &#x60;hospitality_or_accommodation&#x60;, &#x60;hvac_or_plumbing_or_electrical_contracting&#x60;, &#x60;legal_services&#x60;, &#x60;non_food_retail_or_wholesale&#x60;, &#x60;other&#x60;, &#x60;personal_care_services&#x60;, &#x60;real_estate&#x60;, &#x60;restaurant&#x60;, &#x60;scientific_or_technical_services&#x60;, &#x60;security_services&#x60;, &#x60;staffing&#x60;, &#x60;tobacco_or_alcohol_sales&#x60;, or &#x60;transportation&#x60;. | [optional]
**website** | **string** | Website URL of the company. | [optional]
**email** | **string** | Email address of payroll department or administrator | [optional]
**phone** | **string** | Phone number of the company | [optional]
**address** | [**\OpenAPI\Client\Model\CreateCompanyRequestAddress**](CreateCompanyRequestAddress.md) |  | [optional]
**pay_frequency** | **string** | Frequency by which the employees get paid. One of \&quot;weekly\&quot;, \&quot;biweekly\&quot;, \&quot;semimonthly\&quot;, \&quot;monthly\&quot;, \&quot;quarterly\&quot;, or \&quot;annually\&quot; | [optional]
**start_date** | **\DateTime** | This date should match up with their first payday using Check. The validity of this date is important, as it&#39;s used on federal and state filing authorization forms to signify when Check&#39;s authorization to file on behalf of the employer starts. | [optional]
**metadata** | **string** | Additional loosely structured information to associate with the company | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)