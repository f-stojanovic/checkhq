# OpenAPI\Client\DefaultApi

All URIs are relative to https://sandbox.checkhq.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**approveAnExternalPayroll()**](DefaultApi.md#approveAnExternalPayroll) | **POST** /external_payrolls/{payroll}/approve | Approve an external payroll |
| [**approvePayroll()**](DefaultApi.md#approvePayroll) | **POST** /payrolls/{payroll}/approve | Approve a payroll |
| [**bulkGetEmployeeTaxParameterSettings()**](DefaultApi.md#bulkGetEmployeeTaxParameterSettings) | **GET** /employee_tax_params/settings | Bulk get employee tax parameter settings |
| [**bulkGetEmployeeTaxParams()**](DefaultApi.md#bulkGetEmployeeTaxParams) | **GET** /employee_tax_params | Bulk get employee tax parameters |
| [**bulkUpdateEmployeeTaxParameters()**](DefaultApi.md#bulkUpdateEmployeeTaxParameters) | **PATCH** /employee_tax_params/settings | Bulk update employee tax parameters |
| [**cancelAPayment()**](DefaultApi.md#cancelAPayment) | **POST** /payments/{payment}/cancel | Cancel a payment |
| [**cancelImplementation1()**](DefaultApi.md#cancelImplementation1) | **POST** /companies/{company}/cancel_implementation | Cancel implementation |
| [**companyAccountingIntegration()**](DefaultApi.md#companyAccountingIntegration) | **POST** /companies/{company}/components/accounting_integration | Company Accounting Integration |
| [**companyAuthorizationDocuments()**](DefaultApi.md#companyAuthorizationDocuments) | **POST** /companies/{company}/components/authorization_documents | Company Authorization Documents |
| [**companyBusinessDetails()**](DefaultApi.md#companyBusinessDetails) | **POST** /companies/{company}/components/business_details | Company Business Details Component |
| [**companyConnectBankAccount()**](DefaultApi.md#companyConnectBankAccount) | **POST** /companies/{company}/components/connect_bank_account | Company Connect Bank Account |
| [**companyDetails()**](DefaultApi.md#companyDetails) | **POST** /companies/{company}/components/details | Company Details |
| [**companyEmployeeSetup()**](DefaultApi.md#companyEmployeeSetup) | **POST** /companies/{company}/components/employee_setup | Company-Defined Employee Setup |
| [**companyFilingAuthorization()**](DefaultApi.md#companyFilingAuthorization) | **POST** /companies/{company}/components/filing_authorization | Company Filing Authorization |
| [**companyPayHistory()**](DefaultApi.md#companyPayHistory) | **POST** /companies/{company}/components/pay_history | Company Pay History |
| [**companyPaymentSetup()**](DefaultApi.md#companyPaymentSetup) | **POST** /companies/{company}/components/payment_setup | Company Payment Setup |
| [**companyProgressTracker()**](DefaultApi.md#companyProgressTracker) | **POST** /companies/{company}/components/progress_tracker | Company Progress Tracker Component |
| [**companyReports()**](DefaultApi.md#companyReports) | **POST** /companies/{company}/components/company_reports | Company Reports |
| [**companySignatoryAgreements()**](DefaultApi.md#companySignatoryAgreements) | **POST** /companies/{company}/components/signatory_agreements | Company Signatory Agreements |
| [**companyTaxDocuments()**](DefaultApi.md#companyTaxDocuments) | **POST** /companies/{company}/components/tax_documents | Company Tax Documents |
| [**companyTaxSetup()**](DefaultApi.md#companyTaxSetup) | **POST** /companies/{company}/components/tax_setup | Company Tax Setup |
| [**companyTeamSetup()**](DefaultApi.md#companyTeamSetup) | **POST** /companies/{company}/components/team_setup | Company Team Setup |
| [**companyTermsOfService()**](DefaultApi.md#companyTermsOfService) | **POST** /companies/{company}/components/terms_of_service | Company Terms of Service |
| [**companyVerificationDocuments()**](DefaultApi.md#companyVerificationDocuments) | **POST** /companies/{company}/components/verification_documents | Company Verification Documents |
| [**contractorTaxDocuments()**](DefaultApi.md#contractorTaxDocuments) | **POST** /contractors/{contractor}/components/tax_documents | Contractor Tax Documents |
| [**createABankAccount()**](DefaultApi.md#createABankAccount) | **POST** /bank_accounts | Create a bank account |
| [**createACompanyBenefit()**](DefaultApi.md#createACompanyBenefit) | **POST** /company_benefits | Create a company benefit |
| [**createACompanyProvidedDocument()**](DefaultApi.md#createACompanyProvidedDocument) | **POST** /company_provided_documents | Create a company provided document |
| [**createAContractor()**](DefaultApi.md#createAContractor) | **POST** /contractors | Create a contractor |
| [**createAContractorPayment()**](DefaultApi.md#createAContractorPayment) | **POST** /contractor_payments | Create a contractor payment |
| [**createAPaySchedule()**](DefaultApi.md#createAPaySchedule) | **POST** /pay_schedules | Create a pay schedule |
| [**createAPayrollItem()**](DefaultApi.md#createAPayrollItem) | **POST** /payroll_items | Create a payroll item |
| [**createAPostTaxDeduction()**](DefaultApi.md#createAPostTaxDeduction) | **POST** /post_tax_deductions | Create a post-tax deduction |
| [**createASignatory()**](DefaultApi.md#createASignatory) | **POST** /companies/{company}/signatories | Create a signatory |
| [**createAWebhookConfig()**](DefaultApi.md#createAWebhookConfig) | **POST** /webhook_configs | Create a webhook config |
| [**createAWorkplace()**](DefaultApi.md#createAWorkplace) | **POST** /workplaces | Create a workplace |
| [**createAnEarningCode()**](DefaultApi.md#createAnEarningCode) | **POST** /earning_codes | Create an earning code |
| [**createAnEarningRate()**](DefaultApi.md#createAnEarningRate) | **POST** /earning_rates | Create an earning rate |
| [**createAnEmployee()**](DefaultApi.md#createAnEmployee) | **POST** /employees | Create an employee |
| [**createAnEmployeeBenefit()**](DefaultApi.md#createAnEmployeeBenefit) | **POST** /benefits | Create a benefit |
| [**createAnExternalPayroll()**](DefaultApi.md#createAnExternalPayroll) | **POST** /external_payrolls | Create an external payroll |
| [**createCompany()**](DefaultApi.md#createCompany) | **POST** /companies | Create a company |
| [**createCompanyTaxElections()**](DefaultApi.md#createCompanyTaxElections) | **POST** /company_tax_elections/settings | Create company tax elections |
| [**createNetPaySplit()**](DefaultApi.md#createNetPaySplit) | **POST** /net_pay_splits | Create a net pay split |
| [**createPayroll()**](DefaultApi.md#createPayroll) | **POST** /payrolls | Create a payroll |
| [**createTheEnrollmentProfile()**](DefaultApi.md#createTheEnrollmentProfile) | **PUT** /companies/{company}/enrollment_profile | Create the enrollment profile |
| [**deleteABankAccount()**](DefaultApi.md#deleteABankAccount) | **DELETE** /bank_accounts/{bank_account} | Delete a bank account |
| [**deleteACompanyBenefit()**](DefaultApi.md#deleteACompanyBenefit) | **DELETE** /company_benefits/{company_benefit} | Delete a company benefit |
| [**deleteAContractorPayment()**](DefaultApi.md#deleteAContractorPayment) | **DELETE** /contractor_payments/{contractor_payment} | Delete a contractor payment |
| [**deleteAPayroll()**](DefaultApi.md#deleteAPayroll) | **DELETE** /payrolls/{payroll} | Delete a payroll |
| [**deleteAPayrollCopy1()**](DefaultApi.md#deleteAPayrollCopy1) | **DELETE** /external_payrolls/{payroll} | Delete an external payroll |
| [**deleteAPayrollItem()**](DefaultApi.md#deleteAPayrollItem) | **DELETE** /payroll_items/{payroll_item} | Delete a payroll item |
| [**deleteAPostTaxDeduction()**](DefaultApi.md#deleteAPostTaxDeduction) | **DELETE** /post_tax_deductions/{post_tax_deduction} | Delete a post-tax deduction |
| [**deleteAWebhookConfig()**](DefaultApi.md#deleteAWebhookConfig) | **DELETE** /webhook_configs/{webhook_config} | Delete a webhook config |
| [**deleteAnEmployeeBenefit()**](DefaultApi.md#deleteAnEmployeeBenefit) | **DELETE** /benefits/{benefit} | Delete a benefit |
| [**downloadACompanyAuthorizationDocument()**](DefaultApi.md#downloadACompanyAuthorizationDocument) | **GET** /documents/company_authorization_documents/{document}/download | Download a company authorization document |
| [**downloadACompanyTaxDocument()**](DefaultApi.md#downloadACompanyTaxDocument) | **GET** /documents/company_tax_documents/{document}/download | Download a company tax document |
| [**downloadAContractorTaxDocument()**](DefaultApi.md#downloadAContractorTaxDocument) | **GET** /documents/contractor_tax_documents/{document}/download | Download a contractor tax document |
| [**downloadASetupDocument()**](DefaultApi.md#downloadASetupDocument) | **GET** /documents/setup_documents/{document}/download | Download a setup document |
| [**downloadAnEmployeeTaxDocument()**](DefaultApi.md#downloadAnEmployeeTaxDocument) | **GET** /documents/employee_tax_documents/{document}/download | Download an employee tax document |
| [**earlyEnrollment()**](DefaultApi.md#earlyEnrollment) | **POST** /companies/{company}/components/early_enrollment | Company Early Enrollment |
| [**employeeBenefits()**](DefaultApi.md#employeeBenefits) | **POST** /employees/{employee}/components/benefits | Employee Benefits |
| [**employeePaymentSetup()**](DefaultApi.md#employeePaymentSetup) | **POST** /employees/{employee}/components/payment_setup | Employee Payment Setup |
| [**employeePaystub()**](DefaultApi.md#employeePaystub) | **POST** /employees/{employee}/components/paystubs | Employee Paystubs |
| [**employeePostTaxDeductions()**](DefaultApi.md#employeePostTaxDeductions) | **POST** /employees/{employee}/components/post_tax_deductions | Employee Post-Tax Deductions |
| [**employeeProfile()**](DefaultApi.md#employeeProfile) | **POST** /employees/{employee}/components/profile | Employee Profile |
| [**employeeSsnSetup()**](DefaultApi.md#employeeSsnSetup) | **POST** /employees/{employee}/components/ssn_setup | Employee SSN Setup |
| [**employeeTaxDocuments()**](DefaultApi.md#employeeTaxDocuments) | **POST** /employees/{employee}/components/tax_documents | Employee Tax Documents |
| [**employeeWithholdingsSetup()**](DefaultApi.md#employeeWithholdingsSetup) | **POST** /employees/{employee}/components/withholdings_setup | Employee Withholdings Setup |
| [**fullServiceSetupSubmission()**](DefaultApi.md#fullServiceSetupSubmission) | **POST** /companies/{company}/components/full_service_setup_submission | Company Full Service Setup Submission Component |
| [**generateContractorOnboardLink()**](DefaultApi.md#generateContractorOnboardLink) | **POST** /contractors/{contractor}/onboard | Contractor Onboard |
| [**generateOnboardLink()**](DefaultApi.md#generateOnboardLink) | **POST** /companies/{company}/onboard | Company Onboard |
| [**generateOnboardLink1()**](DefaultApi.md#generateOnboardLink1) | **POST** /employees/{employee}/onboard | Employee Onboard |
| [**getABankAccount()**](DefaultApi.md#getABankAccount) | **GET** /bank_accounts/{bank_account} | Get a bank account |
| [**getACompany()**](DefaultApi.md#getACompany) | **GET** /companies/{company} | Get a company |
| [**getACompanyAuthorizationDocument()**](DefaultApi.md#getACompanyAuthorizationDocument) | **GET** /documents/company_authorization_documents/{document} | Get a company authorization document |
| [**getACompanyBenefit()**](DefaultApi.md#getACompanyBenefit) | **GET** /company_benefits/{company_benefit} | Get a company benefit |
| [**getACompanyProvidedDocument()**](DefaultApi.md#getACompanyProvidedDocument) | **GET** /company_provided_documents/{document} | Get a company provided document |
| [**getACompanyTaxDocument()**](DefaultApi.md#getACompanyTaxDocument) | **GET** /documents/company_tax_documents/{document} | Get a company tax document |
| [**getACompanysRequirements()**](DefaultApi.md#getACompanysRequirements) | **GET** /requirements/{requirement} | Get a requirement |
| [**getAContractor()**](DefaultApi.md#getAContractor) | **GET** /contractors/{contractor} | Get a contractor |
| [**getAContractorPayment()**](DefaultApi.md#getAContractorPayment) | **GET** /contractor_payments/{contractor_payment} | Get a contractor pay statement |
| [**getAContractorTaxDocument()**](DefaultApi.md#getAContractorTaxDocument) | **GET** /documents/contractor_tax_documents/{document} | Get a contractor tax document |
| [**getAFederalEinVerification()**](DefaultApi.md#getAFederalEinVerification) | **GET** /companies/{company}/federal_ein_verifications/{federal_ein_verification} | Get a Federal EIN Verification |
| [**getAForm()**](DefaultApi.md#getAForm) | **GET** /forms/{form} | Get a form |
| [**getANetPaySplit()**](DefaultApi.md#getANetPaySplit) | **GET** /net_pay_splits/{net_pay_split} | Get a net pay split |
| [**getAPaperCheck()**](DefaultApi.md#getAPaperCheck) | **GET** /payroll_items/{payroll_item}/paper_check | Get a paper check |
| [**getAPaperCheck2()**](DefaultApi.md#getAPaperCheck2) | **GET** /contractor_payments/{contractor_payment}/paper_check | Get a paper check |
| [**getAPaySchedule()**](DefaultApi.md#getAPaySchedule) | **GET** /pay_schedules/{pay_schedule} | Get a pay schedule |
| [**getAPayment()**](DefaultApi.md#getAPayment) | **GET** /tax_filings/{tax_filing_id} | Get a tax filing |
| [**getAPaymentAttempt()**](DefaultApi.md#getAPaymentAttempt) | **GET** /payment_attempts | Get a payment attempt |
| [**getAPaymentAttemptCopy1()**](DefaultApi.md#getAPaymentAttemptCopy1) | **GET** /payments/{payment} | Get a payment |
| [**getAPayrollItem()**](DefaultApi.md#getAPayrollItem) | **GET** /payroll_items/{payroll_item} | Get a payroll item |
| [**getAPaystub()**](DefaultApi.md#getAPaystub) | **GET** /employees/{employee}/paystubs/{payroll} | Get a paystub |
| [**getAPaystub1()**](DefaultApi.md#getAPaystub1) | **GET** /contractors/{contractor}/payments/{payroll} | Get a contractor payment |
| [**getAPostTaxDeduction()**](DefaultApi.md#getAPostTaxDeduction) | **GET** /post_tax_deductions/{post_tax_deduction} | Get a post-tax deduction |
| [**getASetupDocument()**](DefaultApi.md#getASetupDocument) | **GET** /documents/setup_documents/{document} | Get a Setup Document |
| [**getATaxFilingEventCopy()**](DefaultApi.md#getATaxFilingEventCopy) | **GET** /tax_filing_events/{tax_filing_event_id} | Get a tax filing event |
| [**getAWebhookConfig()**](DefaultApi.md#getAWebhookConfig) | **GET** /webhook_configs/{webhook_config} | Get a webhook config |
| [**getAWorkplace()**](DefaultApi.md#getAWorkplace) | **GET** /workplaces/{workplace} | Get a workplace |
| [**getAWorkplace1()**](DefaultApi.md#getAWorkplace1) | **GET** /earning_codes/{earning_code} | Get an earning code |
| [**getAnEarningRate()**](DefaultApi.md#getAnEarningRate) | **GET** /earning_rates/{earning_rate} | Get an earning rate |
| [**getAnEmployee()**](DefaultApi.md#getAnEmployee) | **GET** /employees/{employee} | Get an employee |
| [**getAnEmployeeBenefit()**](DefaultApi.md#getAnEmployeeBenefit) | **GET** /benefits/{benefit} | Get a benefit |
| [**getAnEmployeeForm()**](DefaultApi.md#getAnEmployeeForm) | **GET** /employees/{employee}/forms/{form} | Get an employee form |
| [**getAnEmployeeTaxDocument()**](DefaultApi.md#getAnEmployeeTaxDocument) | **GET** /documents/employee_tax_documents/{document} | Get an employee tax document |
| [**getAnEmployeesPaystubs()**](DefaultApi.md#getAnEmployeesPaystubs) | **GET** /employees/{employee}/paystubs | List employee paystubs |
| [**getAppliedForTaxIdsReport()**](DefaultApi.md#getAppliedForTaxIdsReport) | **GET** /companies/{company}/reports/applied_for_ids | Get a company&#39;s applied-for tax parameters report |
| [**getCashRequirementReport()**](DefaultApi.md#getCashRequirementReport) | **GET** /payrolls/{payroll}/reports/cash_requirement | Get Cash Requirement Report |
| [**getCompanyDefinedAttributes()**](DefaultApi.md#getCompanyDefinedAttributes) | **GET** /employees/{employee}/company_defined_attributes | Get company-defined attributes |
| [**getCompanyPaydays()**](DefaultApi.md#getCompanyPaydays) | **GET** /companies/{company}/paydays | Get company paydays |
| [**getCompanyTaxParameterSetting()**](DefaultApi.md#getCompanyTaxParameterSetting) | **GET** /company_tax_params/{company_id}/settings/{tax_param_id} | Get a specific company&#39;s tax parameter setting |
| [**getContractorPaymentsReport()**](DefaultApi.md#getContractorPaymentsReport) | **GET** /companies/{company}/reports/contractor_payments | Get contractor payments report |
| [**getEmployeeTaxParameterSetting()**](DefaultApi.md#getEmployeeTaxParameterSetting) | **GET** /employee_tax_params/{employee_id}/settings/{tax_param_id} | Get a specific employee&#39;s tax parameter setting |
| [**getPaperChecks()**](DefaultApi.md#getPaperChecks) | **GET** /payrolls/{payroll}/paper_checks | Get paper checks |
| [**getPaperChecksReport()**](DefaultApi.md#getPaperChecksReport) | **GET** /payrolls/{payroll}/reports/paper_checks | Get Paper Checks Report |
| [**getPaydays()**](DefaultApi.md#getPaydays) | **GET** /pay_schedules/{pay_schedule}/paydays | Get paydays |
| [**getPayroll()**](DefaultApi.md#getPayroll) | **GET** /payrolls/{payroll} | Get a payroll |
| [**getPayrollJournal()**](DefaultApi.md#getPayrollJournal) | **GET** /companies/{company}/reports/payroll_journal | Get payroll journal |
| [**getPayrollSummary()**](DefaultApi.md#getPayrollSummary) | **GET** /companies/{company}/reports/payroll_summary | Get payroll summary |
| [**getReciprocityElections()**](DefaultApi.md#getReciprocityElections) | **GET** /employees/{employee}/reciprocity_elections | Get reciprocity elections |
| [**getSignatories()**](DefaultApi.md#getSignatories) | **GET** /companies/{company}/signatories | Get signatories |
| [**getTaxLiabilityReport()**](DefaultApi.md#getTaxLiabilityReport) | **GET** /companies/{company}/reports/tax_liabilities | Get tax liability report |
| [**getTheEnrollmentProfile()**](DefaultApi.md#getTheEnrollmentProfile) | **GET** /companies/{company}/enrollment_profile | Get the enrollment profile |
| [**getW2PreviewReport()**](DefaultApi.md#getW2PreviewReport) | **GET** /companies/{company}/reports/w2_preview | Get W-2 Preview Report |
| [**getW4ExemptStatusReport()**](DefaultApi.md#getW4ExemptStatusReport) | **GET** /companies/{company}/reports/w4_exemption_status | Get W-4 Exempt Status Report |
| [**listAWebhookConfig()**](DefaultApi.md#listAWebhookConfig) | **GET** /webhook_configs | List webhook configs |
| [**listBankAccounts()**](DefaultApi.md#listBankAccounts) | **GET** /bank_accounts | List bank accounts |
| [**listBenefits()**](DefaultApi.md#listBenefits) | **GET** /benefits | List benefits |
| [**listCompanies()**](DefaultApi.md#listCompanies) | **GET** /companies | List companies |
| [**listCompanyAuthorizationDocuments()**](DefaultApi.md#listCompanyAuthorizationDocuments) | **GET** /documents/company_authorization_documents | List company authorization documents |
| [**listCompanyBenefits()**](DefaultApi.md#listCompanyBenefits) | **GET** /company_benefits | List company benefits |
| [**listCompanyJurisdictions()**](DefaultApi.md#listCompanyJurisdictions) | **GET** /company_tax_params/{company_id}/jurisdictions | List a company&#39;s jurisdictions |
| [**listCompanyProvidedDocuments()**](DefaultApi.md#listCompanyProvidedDocuments) | **GET** /company_provided_documents | List company provided documents |
| [**listCompanyTaxDocuments()**](DefaultApi.md#listCompanyTaxDocuments) | **GET** /documents/company_tax_documents | List company tax documents |
| [**listCompanyTaxElections()**](DefaultApi.md#listCompanyTaxElections) | **GET** /company_tax_elections | List company tax elections |
| [**listCompanyTaxParameterSettings()**](DefaultApi.md#listCompanyTaxParameterSettings) | **GET** /company_tax_params/{company_id}/settings | List a company&#39;s tax parameter settings |
| [**listCompanyTaxParameters()**](DefaultApi.md#listCompanyTaxParameters) | **GET** /company_tax_params/{company_id} | List a company&#39;s tax parameters |
| [**listContractorPayments()**](DefaultApi.md#listContractorPayments) | **GET** /contractors/{contractor}/payments | List contractor payments |
| [**listContractorPayments1()**](DefaultApi.md#listContractorPayments1) | **GET** /contractor_payments | List contractor payments |
| [**listContractorTaxDocuments()**](DefaultApi.md#listContractorTaxDocuments) | **GET** /documents/contractor_tax_documents | List contractor tax documents |
| [**listContractors()**](DefaultApi.md#listContractors) | **GET** /contractors | List contractors |
| [**listEarningCodes()**](DefaultApi.md#listEarningCodes) | **GET** /earning_codes | List earning codes |
| [**listEarningRates()**](DefaultApi.md#listEarningRates) | **GET** /earning_rates | List earning rates |
| [**listEmployeeForms()**](DefaultApi.md#listEmployeeForms) | **GET** /employees/{employee}/forms | List employee forms |
| [**listEmployeeJurisdictions()**](DefaultApi.md#listEmployeeJurisdictions) | **GET** /employee_tax_params/{employee_id}/jurisdictions | List an employee&#39;s jurisdictions |
| [**listEmployeeTaxDocuments()**](DefaultApi.md#listEmployeeTaxDocuments) | **GET** /documents/employee_tax_documents | List employee tax documents |
| [**listEmployeeTaxElections()**](DefaultApi.md#listEmployeeTaxElections) | **GET** /employee_tax_elections | List employee tax elections |
| [**listEmployeeTaxParameterSettings()**](DefaultApi.md#listEmployeeTaxParameterSettings) | **GET** /employee_tax_params/{employee_id}/settings | List an employee&#39;s tax parameter settings |
| [**listEmployees()**](DefaultApi.md#listEmployees) | **GET** /employees | List employees |
| [**listEmployeesTaxParameters()**](DefaultApi.md#listEmployeesTaxParameters) | **GET** /employee_tax_params/{employee_id} | List an employee&#39;s tax parameters |
| [**listFederalEinVerifications()**](DefaultApi.md#listFederalEinVerifications) | **GET** /companies/{company}/federal_ein_verifications | List Federal EIN Verifications |
| [**listForms()**](DefaultApi.md#listForms) | **GET** /forms | List forms |
| [**listNetPaySplits()**](DefaultApi.md#listNetPaySplits) | **GET** /net_pay_splits | List net pay splits |
| [**listPaySchedules()**](DefaultApi.md#listPaySchedules) | **GET** /pay_schedules | List pay schedules |
| [**listPayments()**](DefaultApi.md#listPayments) | **GET** /payments | List payments |
| [**listPaymentsCopy()**](DefaultApi.md#listPaymentsCopy) | **GET** /tax_filings | List tax filings |
| [**listPayrollItems()**](DefaultApi.md#listPayrollItems) | **GET** /payroll_items | List payroll items |
| [**listPayrolls()**](DefaultApi.md#listPayrolls) | **GET** /payrolls | List payrolls |
| [**listPostTaxDeductions()**](DefaultApi.md#listPostTaxDeductions) | **GET** /post_tax_deductions | List post-tax deductions |
| [**listRequirements()**](DefaultApi.md#listRequirements) | **GET** /requirements | List requirements |
| [**listSetupDocuments()**](DefaultApi.md#listSetupDocuments) | **GET** /documents/setup_documents | List setup documents |
| [**listTaxDeposits()**](DefaultApi.md#listTaxDeposits) | **GET** /companies/{company}/tax_deposits | List tax deposits |
| [**listUsageRecords()**](DefaultApi.md#listUsageRecords) | **GET** /usage/records | List usage records |
| [**listUsageSummaries()**](DefaultApi.md#listUsageSummaries) | **GET** /usage/summaries | List usage summaries |
| [**listWorkplaces()**](DefaultApi.md#listWorkplaces) | **GET** /workplaces | List workplaces |
| [**pingAWebhookConfig()**](DefaultApi.md#pingAWebhookConfig) | **POST** /webhook_configs/{webhook_config}/ping | Ping a webhook config |
| [**previewPayroll()**](DefaultApi.md#previewPayroll) | **GET** /payrolls/{payroll}/preview | Preview a payroll |
| [**previousPayrollProviderAccess()**](DefaultApi.md#previousPayrollProviderAccess) | **POST** /companies/{company}/components/previous_provider_access | Company Previous Payroll Provider Access |
| [**refundAPayment()**](DefaultApi.md#refundAPayment) | **POST** /payments/{payment}/refund | Refund a payment |
| [**renderAForm()**](DefaultApi.md#renderAForm) | **POST** /forms/{form}/render | Render a form |
| [**reopenAPendingPayroll()**](DefaultApi.md#reopenAPendingPayroll) | **POST** /external_payrolls/{payroll}/reopen | Reopen an external payroll |
| [**reopenPayroll()**](DefaultApi.md#reopenPayroll) | **POST** /payrolls/{payroll}/reopen | Reopen a pending payroll |
| [**requestEmbeddedSetup()**](DefaultApi.md#requestEmbeddedSetup) | **POST** /companies/{company_id}/request_embedded_setup | Request Embedded Setup |
| [**retryAPayment()**](DefaultApi.md#retryAPayment) | **POST** /payments/{payment}/retry | Retry a payment |
| [**retryWebhookEventsInSandbox()**](DefaultApi.md#retryWebhookEventsInSandbox) | **POST** /webhook_events/{webhook_id}/retry | Retry webhook event in sandbox |
| [**runPayroll()**](DefaultApi.md#runPayroll) | **POST** /companies/{company}/components/run_payroll | Run Payroll |
| [**startImplementation()**](DefaultApi.md#startImplementation) | **POST** /companies/{company}/start_implementation | Start implementation |
| [**submitAnEmployeeForm()**](DefaultApi.md#submitAnEmployeeForm) | **POST** /employees/{employee}/forms/{form}/submit | Submit an employee form |
| [**updateABankAccount()**](DefaultApi.md#updateABankAccount) | **PATCH** /bank_accounts/{bank_account} | Update a bank account |
| [**updateACompany()**](DefaultApi.md#updateACompany) | **PATCH** /companies/{company} | Update a company |
| [**updateACompanyBenefit()**](DefaultApi.md#updateACompanyBenefit) | **PATCH** /company_benefits/{company_benefit} | Update a company benefit |
| [**updateAContractor()**](DefaultApi.md#updateAContractor) | **PATCH** /contractors/{contractor} | Update a contractor |
| [**updateAContractorPayment()**](DefaultApi.md#updateAContractorPayment) | **PATCH** /contractor_payments/{contractor_payment} | Update a contractor payment |
| [**updateAPaySchedule()**](DefaultApi.md#updateAPaySchedule) | **PATCH** /pay_schedules/{pay_schedule} | Update a pay schedule |
| [**updateAPayrollItem()**](DefaultApi.md#updateAPayrollItem) | **PATCH** /payroll_items/{payroll_item} | Update a payroll item |
| [**updateAPostTaxDeduction()**](DefaultApi.md#updateAPostTaxDeduction) | **PATCH** /post_tax_deductions/{post_tax_deduction} | Update a post-tax deduction |
| [**updateAWebhookConfig()**](DefaultApi.md#updateAWebhookConfig) | **PATCH** /webhook_configs/{webhook_config} | Update a webhook config |
| [**updateAWorkplace()**](DefaultApi.md#updateAWorkplace) | **PATCH** /workplaces/{workplace} | Update a workplace |
| [**updateAnEarningCode()**](DefaultApi.md#updateAnEarningCode) | **PATCH** /earning_codes/{earning_code} | Update an earning code |
| [**updateAnEarningRate()**](DefaultApi.md#updateAnEarningRate) | **PATCH** /earning_rates/{earning_rate} | Update an earning rate |
| [**updateAnEmployee()**](DefaultApi.md#updateAnEmployee) | **PATCH** /employees/{employee} | Update an employee |
| [**updateAnEmployeeBenefit()**](DefaultApi.md#updateAnEmployeeBenefit) | **PATCH** /benefits/{benefit} | Update a benefit |
| [**updateAnExternalPayroll()**](DefaultApi.md#updateAnExternalPayroll) | **PATCH** /external_payrolls/{payroll} | Update an external payroll |
| [**updateCompanyDefinedAttributes()**](DefaultApi.md#updateCompanyDefinedAttributes) | **PATCH** /employees/{employee}/company_defined_attributes | Update company-defined attributes |
| [**updateCompanyTaxElections()**](DefaultApi.md#updateCompanyTaxElections) | **PATCH** /company_tax_elections | Update company tax elections |
| [**updateCompanyTaxParameters()**](DefaultApi.md#updateCompanyTaxParameters) | **PATCH** /company_tax_params/{company_id} | Update a company&#39;s tax parameters |
| [**updateEmployeeTaxElections()**](DefaultApi.md#updateEmployeeTaxElections) | **PATCH** /employee_tax_elections | Update employee tax elections |
| [**updateEmployeeTaxParameters()**](DefaultApi.md#updateEmployeeTaxParameters) | **PATCH** /employee_tax_params/{employee_id} | Update an employee&#39;s tax parameter |
| [**updatePayroll()**](DefaultApi.md#updatePayroll) | **PATCH** /payrolls/{payroll} | Update a payroll |
| [**updateReciprocityElections()**](DefaultApi.md#updateReciprocityElections) | **PATCH** /employees/{employee}/reciprocity_elections | Update reciprocity elections |
| [**updateTheEnrollmentProfile()**](DefaultApi.md#updateTheEnrollmentProfile) | **PATCH** /companies/{company}/enrollment_profile | Update the enrollment profile |
| [**uploadAFileForACompanyProvidedDocument()**](DefaultApi.md#uploadAFileForACompanyProvidedDocument) | **PUT** /company_provided_documents/{document}/upload | Upload a file for a company provided document. |
| [**validateAddress()**](DefaultApi.md#validateAddress) | **POST** /addresses/validate | Validate address |


## `approveAnExternalPayroll()`

```php
approveAnExternalPayroll($payroll)
```

Approve an external payroll

Approves an external payroll.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll = 'payroll_example'; // string

try {
    $apiInstance->approveAnExternalPayroll($payroll);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->approveAnExternalPayroll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `approvePayroll()`

```php
approvePayroll($payroll)
```

Approve a payroll

Approves a payroll.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll = 'payroll_example'; // string

try {
    $apiInstance->approvePayroll($payroll);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->approvePayroll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkGetEmployeeTaxParameterSettings()`

```php
bulkGetEmployeeTaxParameterSettings($company, $as_of, $jurisdiction): object
```

Bulk get employee tax parameter settings



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Unique ID of the company.
$as_of = 'as_of_example'; // string | Used to list tax parameters applicable as of the supplied date.
$jurisdiction = 'jurisdiction_example'; // string | Used to further filter down the list of the employee’s tax parameters to specific jurisdictions.

try {
    $result = $apiInstance->bulkGetEmployeeTaxParameterSettings($company, $as_of, $jurisdiction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->bulkGetEmployeeTaxParameterSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Unique ID of the company. | |
| **as_of** | **string**| Used to list tax parameters applicable as of the supplied date. | [optional] |
| **jurisdiction** | **string**| Used to further filter down the list of the employee’s tax parameters to specific jurisdictions. | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkGetEmployeeTaxParams()`

```php
bulkGetEmployeeTaxParams($company, $as_of, $jurisdiction): object
```

Bulk get employee tax parameters



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Unique ID of the company.
$as_of = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Used to list tax parameters applicable as of the supplied date.
$jurisdiction = 'jurisdiction_example'; // string | Used to further filter down the list of the employee’s tax parameters to specific jurisdictions.

try {
    $result = $apiInstance->bulkGetEmployeeTaxParams($company, $as_of, $jurisdiction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->bulkGetEmployeeTaxParams: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Unique ID of the company. | |
| **as_of** | **\DateTime**| Used to list tax parameters applicable as of the supplied date. | [optional] |
| **jurisdiction** | **string**| Used to further filter down the list of the employee’s tax parameters to specific jurisdictions. | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `bulkUpdateEmployeeTaxParameters()`

```php
bulkUpdateEmployeeTaxParameters($bulk_update_employee_tax_parameters_request): object
```

Bulk update employee tax parameters



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulk_update_employee_tax_parameters_request = new \OpenAPI\Client\Model\BulkUpdateEmployeeTaxParametersRequest(); // \OpenAPI\Client\Model\BulkUpdateEmployeeTaxParametersRequest

try {
    $result = $apiInstance->bulkUpdateEmployeeTaxParameters($bulk_update_employee_tax_parameters_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->bulkUpdateEmployeeTaxParameters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulk_update_employee_tax_parameters_request** | [**\OpenAPI\Client\Model\BulkUpdateEmployeeTaxParametersRequest**](../Model/BulkUpdateEmployeeTaxParametersRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelAPayment()`

```php
cancelAPayment($payment): \OpenAPI\Client\Model\CancelAPayment200Response
```

Cancel a payment



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment = 'ID of payment desired for cancellation'; // string

try {
    $result = $apiInstance->cancelAPayment($payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cancelAPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment** | **string**|  | [default to &#39;ID of payment desired for cancellation&#39;] |

### Return type

[**\OpenAPI\Client\Model\CancelAPayment200Response**](../Model/CancelAPayment200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `cancelImplementation1()`

```php
cancelImplementation1($company)
```

Cancel implementation

Cancel submission of a company for implementation. This will move the implementation status of a company from `in_review` to `needs_attention`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company to cancel implementation

try {
    $apiInstance->cancelImplementation1($company);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->cancelImplementation1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company to cancel implementation | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyAccountingIntegration()`

```php
companyAccountingIntegration($company): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Company Accounting Integration

This Component allows employers to sync accounting data with Check. Currently, we only support integrations with Quickbooks Online.  The Accounting Integration Component is disabled by default for all companies. Please reach out to us to enable it for specific companies or for all of your companies. <img style=\"margin-top: 30px; margin-bottom: 20px;\" src=\"https://public-component-assets.s3.amazonaws.com/er_accounting_integration.svg\" /> Learn how to embed Components in our <a target=\"_blank\" href=\"https://docs.checkhq.com/docs/embedding-a-component\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated

try {
    $result = $apiInstance->companyAccountingIntegration($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyAccountingIntegration: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyAuthorizationDocuments()`

```php
companyAuthorizationDocuments($company): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Company Authorization Documents

This Component allows employers to view and download authorization forms that have previously been filed. Learn how to embed Components in our <a target=\"_blank\" href=\"https://docs.checkhq.com/docs/embedding-a-component\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated

try {
    $result = $apiInstance->companyAuthorizationDocuments($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyAuthorizationDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyBusinessDetails()`

```php
companyBusinessDetails($company, $company_signatory_agreements_request): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Company Business Details Component

This Component allows an employer to provide Check with all of their various business details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated
$company_signatory_agreements_request = new \OpenAPI\Client\Model\CompanySignatoryAgreementsRequest(); // \OpenAPI\Client\Model\CompanySignatoryAgreementsRequest

try {
    $result = $apiInstance->companyBusinessDetails($company, $company_signatory_agreements_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyBusinessDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |
| **company_signatory_agreements_request** | [**\OpenAPI\Client\Model\CompanySignatoryAgreementsRequest**](../Model/CompanySignatoryAgreementsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyConnectBankAccount()`

```php
companyConnectBankAccount($company, $company_verification_documents_request): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Company Connect Bank Account

This Component allows an employer's signatory to connect their bank account to fund payroll

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated
$company_verification_documents_request = new \OpenAPI\Client\Model\CompanyVerificationDocumentsRequest(); // \OpenAPI\Client\Model\CompanyVerificationDocumentsRequest

try {
    $result = $apiInstance->companyConnectBankAccount($company, $company_verification_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyConnectBankAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |
| **company_verification_documents_request** | [**\OpenAPI\Client\Model\CompanyVerificationDocumentsRequest**](../Model/CompanyVerificationDocumentsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyDetails()`

```php
companyDetails($company, $generate_onboard_link_request): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Company Details

This Component allows employers to enter information about their business for due diligence review to determine payroll product and feature eligibility <img style=\"margin-top: 30px; margin-bottom: 20px;\" src=\"https://public-component-assets.s3.amazonaws.com/er_details.svg\" /> Learn how to embed Components in our <a target=\"_blank\" href=\"https://docs.checkhq.com/docs/embedding-a-component\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated
$generate_onboard_link_request = new \OpenAPI\Client\Model\GenerateOnboardLinkRequest(); // \OpenAPI\Client\Model\GenerateOnboardLinkRequest

try {
    $result = $apiInstance->companyDetails($company, $generate_onboard_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyDetails: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |
| **generate_onboard_link_request** | [**\OpenAPI\Client\Model\GenerateOnboardLinkRequest**](../Model/GenerateOnboardLinkRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyEmployeeSetup()`

```php
companyEmployeeSetup($company): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Company-Defined Employee Setup

This component allows employers to define company-defined employee attributes for federal and state tax jurisdictions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated

try {
    $result = $apiInstance->companyEmployeeSetup($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyEmployeeSetup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyFilingAuthorization()`

```php
companyFilingAuthorization($company, $company_filing_authorization_request): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Company Filing Authorization

This Component allows employers to view, sign, and submit forms relevant to their onboarding.   These forms include: <li>IRS Form 8655</li> <li>Any state form required for Check to file and pay taxes on the employer's behalf</li>  <img style=\"margin-top: 30px; margin-bottom: 20px;\" src=\"https://public-component-assets.s3.amazonaws.com/er_filing_authorization.svg\" /> Learn how to embed Components in our <a target=\"_blank\" href=\"https://docs.checkhq.com/docs/embedding-a-component\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated
$company_filing_authorization_request = new \OpenAPI\Client\Model\CompanyFilingAuthorizationRequest(); // \OpenAPI\Client\Model\CompanyFilingAuthorizationRequest

try {
    $result = $apiInstance->companyFilingAuthorization($company, $company_filing_authorization_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyFilingAuthorization: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |
| **company_filing_authorization_request** | [**\OpenAPI\Client\Model\CompanyFilingAuthorizationRequest**](../Model/CompanyFilingAuthorizationRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyPayHistory()`

```php
companyPayHistory($company, $company_verification_documents_request): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Company Pay History

This Component allows an employer to input their pay history

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated
$company_verification_documents_request = new \OpenAPI\Client\Model\CompanyVerificationDocumentsRequest(); // \OpenAPI\Client\Model\CompanyVerificationDocumentsRequest

try {
    $result = $apiInstance->companyPayHistory($company, $company_verification_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyPayHistory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |
| **company_verification_documents_request** | [**\OpenAPI\Client\Model\CompanyVerificationDocumentsRequest**](../Model/CompanyVerificationDocumentsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyPaymentSetup()`

```php
companyPaymentSetup($company, $generate_onboard_link_request): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Company Payment Setup

Approve debit authorization and link a company bank account to Check via Plaid. <img style=\"margin-top: 30px; margin-bottom: 0px; width: 500px;   display: block;   margin-left: auto;   margin-right: auto;\" src=\"https://public-component-assets.s3.amazonaws.com/er_payment_setup.svg\" /> Learn how to embed Components in our <a target=\"_blank\" href=\"https://docs.checkhq.com/docs/embedding-a-component\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated
$generate_onboard_link_request = new \OpenAPI\Client\Model\GenerateOnboardLinkRequest(); // \OpenAPI\Client\Model\GenerateOnboardLinkRequest

try {
    $result = $apiInstance->companyPaymentSetup($company, $generate_onboard_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyPaymentSetup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |
| **generate_onboard_link_request** | [**\OpenAPI\Client\Model\GenerateOnboardLinkRequest**](../Model/GenerateOnboardLinkRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyProgressTracker()`

```php
companyProgressTracker($company, $company_verification_documents_request): \OpenAPI\Client\Model\GenerateOnboardLink1200Response
```

Company Progress Tracker Component

Generates a Full Service Setup Progress Tracker component used to monitor Check's progress in setting up a Full Service Setup Company and allows users to resolve potential blocking issues raised by Check operators during the setup process.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which an onboard link will be generated
$company_verification_documents_request = new \OpenAPI\Client\Model\CompanyVerificationDocumentsRequest(); // \OpenAPI\Client\Model\CompanyVerificationDocumentsRequest

try {
    $result = $apiInstance->companyProgressTracker($company, $company_verification_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyProgressTracker: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which an onboard link will be generated | |
| **company_verification_documents_request** | [**\OpenAPI\Client\Model\CompanyVerificationDocumentsRequest**](../Model/CompanyVerificationDocumentsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateOnboardLink1200Response**](../Model/GenerateOnboardLink1200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyReports()`

```php
companyReports($company): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Company Reports

This Component allows companies to see various payroll reports, including the Payroll Summary and Payroll Journal, for specified date ranges.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated

try {
    $result = $apiInstance->companyReports($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companySignatoryAgreements()`

```php
companySignatoryAgreements($company, $company_signatory_agreements_request): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Company Signatory Agreements

This Component allows an employer's signatory to sign Check's Terms of Service and Debit Authorization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated
$company_signatory_agreements_request = new \OpenAPI\Client\Model\CompanySignatoryAgreementsRequest(); // \OpenAPI\Client\Model\CompanySignatoryAgreementsRequest

try {
    $result = $apiInstance->companySignatoryAgreements($company, $company_signatory_agreements_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companySignatoryAgreements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |
| **company_signatory_agreements_request** | [**\OpenAPI\Client\Model\CompanySignatoryAgreementsRequest**](../Model/CompanySignatoryAgreementsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyTaxDocuments()`

```php
companyTaxDocuments($company): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Company Tax Documents

This Component allows employers to view and download tax documents that have previously been filed. Learn how to embed Components in our <a target=\"_blank\" href=\"https://docs.checkhq.com/docs/embedding-a-component\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated

try {
    $result = $apiInstance->companyTaxDocuments($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyTaxDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyTaxSetup()`

```php
companyTaxSetup($company, $company_tax_setup_request): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Company Tax Setup

This Component allows employers to configure their federal and state tax setup based on the company’s location.<img style=\"margin-top: 30px; margin-bottom: 20px;\" src=\"https://public-onboard-assets.s3.amazonaws.com/tax-setup-component.png\" />Learn how to embed Components in our <a target=\"_blank\" href=\"https://docs.checkhq.com/docs/embedding-a-component\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated
$company_tax_setup_request = new \OpenAPI\Client\Model\CompanyTaxSetupRequest(); // \OpenAPI\Client\Model\CompanyTaxSetupRequest

try {
    $result = $apiInstance->companyTaxSetup($company, $company_tax_setup_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyTaxSetup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |
| **company_tax_setup_request** | [**\OpenAPI\Client\Model\CompanyTaxSetupRequest**](../Model/CompanyTaxSetupRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyTeamSetup()`

```php
companyTeamSetup($company, $company_verification_documents_request): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Company Team Setup

This Component allows an employer to set up and manage their workplaces, employees, and contractors

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated
$company_verification_documents_request = new \OpenAPI\Client\Model\CompanyVerificationDocumentsRequest(); // \OpenAPI\Client\Model\CompanyVerificationDocumentsRequest

try {
    $result = $apiInstance->companyTeamSetup($company, $company_verification_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyTeamSetup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |
| **company_verification_documents_request** | [**\OpenAPI\Client\Model\CompanyVerificationDocumentsRequest**](../Model/CompanyVerificationDocumentsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyTermsOfService()`

```php
companyTermsOfService($company, $generate_onboard_link_request): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Company Terms of Service

This Component allows employers to sign Check's Terms of Service agreement  <img style=\"margin-top: 20px; border-radius: 10px;  border: 1px solid #E2E8F0;\" src=\"https://public-component-assets.s3.amazonaws.com/er_terms_of_service.svg\" />  This Component emits two events: - When the TOS is accepted: `check-component-company-terms-of-service-complete`:  - If the TOS has already been accepted: `check-component-company-terms-of-service-already-complete`  <div>Learn how to embed Components in our <a target=\"_blank\" href=\"https://docs.checkhq.com/docs/embedding-a-component\">guide</a>.</div>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated
$generate_onboard_link_request = new \OpenAPI\Client\Model\GenerateOnboardLinkRequest(); // \OpenAPI\Client\Model\GenerateOnboardLinkRequest

try {
    $result = $apiInstance->companyTermsOfService($company, $generate_onboard_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyTermsOfService: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |
| **generate_onboard_link_request** | [**\OpenAPI\Client\Model\GenerateOnboardLinkRequest**](../Model/GenerateOnboardLinkRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `companyVerificationDocuments()`

```php
companyVerificationDocuments($company, $company_verification_documents_request): \OpenAPI\Client\Model\GenerateOnboardLink1200Response
```

Company Verification Documents

Generates a Verification Documents component used to request more information from the company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which an onboard link will be generated
$company_verification_documents_request = new \OpenAPI\Client\Model\CompanyVerificationDocumentsRequest(); // \OpenAPI\Client\Model\CompanyVerificationDocumentsRequest

try {
    $result = $apiInstance->companyVerificationDocuments($company, $company_verification_documents_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->companyVerificationDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which an onboard link will be generated | |
| **company_verification_documents_request** | [**\OpenAPI\Client\Model\CompanyVerificationDocumentsRequest**](../Model/CompanyVerificationDocumentsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateOnboardLink1200Response**](../Model/GenerateOnboardLink1200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `contractorTaxDocuments()`

```php
contractorTaxDocuments($contractor): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Contractor Tax Documents

Component for contractors to see all tax documents that have previously been filed. Learn how to embed Components in our <a target=\"_blank\" href=\"https://docs.checkhq.com/docs/embedding-a-component\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractor = 'contractor_example'; // string | ID of the contractor for which a component link will be generated

try {
    $result = $apiInstance->contractorTaxDocuments($contractor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->contractorTaxDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contractor** | **string**| ID of the contractor for which a component link will be generated | |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createABankAccount()`

```php
createABankAccount($create_a_bank_account_request)
```

Create a bank account

Defines a bank account, and associates it with an existing company, contractor, or employee.  One of `employee`, `company`, or `contractor` is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_a_bank_account_request = new \OpenAPI\Client\Model\CreateABankAccountRequest(); // \OpenAPI\Client\Model\CreateABankAccountRequest

try {
    $apiInstance->createABankAccount($create_a_bank_account_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createABankAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_a_bank_account_request** | [**\OpenAPI\Client\Model\CreateABankAccountRequest**](../Model/CreateABankAccountRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createACompanyBenefit()`

```php
createACompanyBenefit($create_a_company_benefit_request)
```

Create a company benefit

Create a company benefit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_a_company_benefit_request = new \OpenAPI\Client\Model\CreateACompanyBenefitRequest(); // \OpenAPI\Client\Model\CreateACompanyBenefitRequest

try {
    $apiInstance->createACompanyBenefit($create_a_company_benefit_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createACompanyBenefit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_a_company_benefit_request** | [**\OpenAPI\Client\Model\CreateACompanyBenefitRequest**](../Model/CreateACompanyBenefitRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createACompanyProvidedDocument()`

```php
createACompanyProvidedDocument($create_a_company_provided_document_request): \OpenAPI\Client\Model\ListCompanyProvidedDocuments200ResponseResultsInner
```

Create a company provided document

Creates a company provided document in a `pending` state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_a_company_provided_document_request = new \OpenAPI\Client\Model\CreateACompanyProvidedDocumentRequest(); // \OpenAPI\Client\Model\CreateACompanyProvidedDocumentRequest

try {
    $result = $apiInstance->createACompanyProvidedDocument($create_a_company_provided_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createACompanyProvidedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_a_company_provided_document_request** | [**\OpenAPI\Client\Model\CreateACompanyProvidedDocumentRequest**](../Model/CreateACompanyProvidedDocumentRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListCompanyProvidedDocuments200ResponseResultsInner**](../Model/ListCompanyProvidedDocuments200ResponseResultsInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAContractor()`

```php
createAContractor($create_a_contractor_request): object
```

Create a contractor

Creates a contractor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_a_contractor_request = new \OpenAPI\Client\Model\CreateAContractorRequest(); // \OpenAPI\Client\Model\CreateAContractorRequest

try {
    $result = $apiInstance->createAContractor($create_a_contractor_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAContractor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_a_contractor_request** | [**\OpenAPI\Client\Model\CreateAContractorRequest**](../Model/CreateAContractorRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAContractorPayment()`

```php
createAContractorPayment($create_a_contractor_payment_request): object
```

Create a contractor payment

Creates a contractor payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_a_contractor_payment_request = new \OpenAPI\Client\Model\CreateAContractorPaymentRequest(); // \OpenAPI\Client\Model\CreateAContractorPaymentRequest

try {
    $result = $apiInstance->createAContractorPayment($create_a_contractor_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAContractorPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_a_contractor_payment_request** | [**\OpenAPI\Client\Model\CreateAContractorPaymentRequest**](../Model/CreateAContractorPaymentRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAPaySchedule()`

```php
createAPaySchedule($create_a_pay_schedule_request): \OpenAPI\Client\Model\GetAPaySchedule200Response
```

Create a pay schedule

Creates a new pay schedule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_a_pay_schedule_request = new \OpenAPI\Client\Model\CreateAPayScheduleRequest(); // \OpenAPI\Client\Model\CreateAPayScheduleRequest

try {
    $result = $apiInstance->createAPaySchedule($create_a_pay_schedule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAPaySchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_a_pay_schedule_request** | [**\OpenAPI\Client\Model\CreateAPayScheduleRequest**](../Model/CreateAPayScheduleRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetAPaySchedule200Response**](../Model/GetAPaySchedule200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAPayrollItem()`

```php
createAPayrollItem($create_a_payroll_item_request)
```

Create a payroll item

Creates a payroll item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_a_payroll_item_request = new \OpenAPI\Client\Model\CreateAPayrollItemRequest(); // \OpenAPI\Client\Model\CreateAPayrollItemRequest

try {
    $apiInstance->createAPayrollItem($create_a_payroll_item_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAPayrollItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_a_payroll_item_request** | [**\OpenAPI\Client\Model\CreateAPayrollItemRequest**](../Model/CreateAPayrollItemRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAPostTaxDeduction()`

```php
createAPostTaxDeduction($create_a_post_tax_deduction_request)
```

Create a post-tax deduction

Creates a post-tax deduction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_a_post_tax_deduction_request = new \OpenAPI\Client\Model\CreateAPostTaxDeductionRequest(); // \OpenAPI\Client\Model\CreateAPostTaxDeductionRequest

try {
    $apiInstance->createAPostTaxDeduction($create_a_post_tax_deduction_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAPostTaxDeduction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_a_post_tax_deduction_request** | [**\OpenAPI\Client\Model\CreateAPostTaxDeductionRequest**](../Model/CreateAPostTaxDeductionRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createASignatory()`

```php
createASignatory($company, $create_a_signatory_request): \OpenAPI\Client\Model\CreateASignatory200Response
```

Create a signatory

Create a signatory for the company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | The unique identifier of the company
$create_a_signatory_request = new \OpenAPI\Client\Model\CreateASignatoryRequest(); // \OpenAPI\Client\Model\CreateASignatoryRequest

try {
    $result = $apiInstance->createASignatory($company, $create_a_signatory_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createASignatory: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| The unique identifier of the company | |
| **create_a_signatory_request** | [**\OpenAPI\Client\Model\CreateASignatoryRequest**](../Model/CreateASignatoryRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\CreateASignatory200Response**](../Model/CreateASignatory200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAWebhookConfig()`

```php
createAWebhookConfig($update_a_webhook_config_request)
```

Create a webhook config

Creates a webhook config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_a_webhook_config_request = new \OpenAPI\Client\Model\UpdateAWebhookConfigRequest(); // \OpenAPI\Client\Model\UpdateAWebhookConfigRequest

try {
    $apiInstance->createAWebhookConfig($update_a_webhook_config_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAWebhookConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_a_webhook_config_request** | [**\OpenAPI\Client\Model\UpdateAWebhookConfigRequest**](../Model/UpdateAWebhookConfigRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAWorkplace()`

```php
createAWorkplace($create_a_workplace_request): \OpenAPI\Client\Model\ListWorkplaces200ResponseInner
```

Create a workplace

Creates a new workplace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_a_workplace_request = new \OpenAPI\Client\Model\CreateAWorkplaceRequest(); // \OpenAPI\Client\Model\CreateAWorkplaceRequest

try {
    $result = $apiInstance->createAWorkplace($create_a_workplace_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAWorkplace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_a_workplace_request** | [**\OpenAPI\Client\Model\CreateAWorkplaceRequest**](../Model/CreateAWorkplaceRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListWorkplaces200ResponseInner**](../Model/ListWorkplaces200ResponseInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAnEarningCode()`

```php
createAnEarningCode($create_an_earning_code_request): object
```

Create an earning code



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_an_earning_code_request = new \OpenAPI\Client\Model\CreateAnEarningCodeRequest(); // \OpenAPI\Client\Model\CreateAnEarningCodeRequest

try {
    $result = $apiInstance->createAnEarningCode($create_an_earning_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAnEarningCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_an_earning_code_request** | [**\OpenAPI\Client\Model\CreateAnEarningCodeRequest**](../Model/CreateAnEarningCodeRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAnEarningRate()`

```php
createAnEarningRate($create_an_earning_rate_request): object
```

Create an earning rate



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_an_earning_rate_request = new \OpenAPI\Client\Model\CreateAnEarningRateRequest(); // \OpenAPI\Client\Model\CreateAnEarningRateRequest

try {
    $result = $apiInstance->createAnEarningRate($create_an_earning_rate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAnEarningRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_an_earning_rate_request** | [**\OpenAPI\Client\Model\CreateAnEarningRateRequest**](../Model/CreateAnEarningRateRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAnEmployee()`

```php
createAnEmployee($create_an_employee_request)
```

Create an employee

Creates an employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_an_employee_request = new \OpenAPI\Client\Model\CreateAnEmployeeRequest(); // \OpenAPI\Client\Model\CreateAnEmployeeRequest

try {
    $apiInstance->createAnEmployee($create_an_employee_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAnEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_an_employee_request** | [**\OpenAPI\Client\Model\CreateAnEmployeeRequest**](../Model/CreateAnEmployeeRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAnEmployeeBenefit()`

```php
createAnEmployeeBenefit($create_an_employee_benefit_request)
```

Create a benefit

Creates a benefit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_an_employee_benefit_request = new \OpenAPI\Client\Model\CreateAnEmployeeBenefitRequest(); // \OpenAPI\Client\Model\CreateAnEmployeeBenefitRequest

try {
    $apiInstance->createAnEmployeeBenefit($create_an_employee_benefit_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAnEmployeeBenefit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_an_employee_benefit_request** | [**\OpenAPI\Client\Model\CreateAnEmployeeBenefitRequest**](../Model/CreateAnEmployeeBenefitRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAnExternalPayroll()`

```php
createAnExternalPayroll($create_an_external_payroll_request)
```

Create an external payroll

Creates an external payroll.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_an_external_payroll_request = new \OpenAPI\Client\Model\CreateAnExternalPayrollRequest(); // \OpenAPI\Client\Model\CreateAnExternalPayrollRequest

try {
    $apiInstance->createAnExternalPayroll($create_an_external_payroll_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createAnExternalPayroll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_an_external_payroll_request** | [**\OpenAPI\Client\Model\CreateAnExternalPayrollRequest**](../Model/CreateAnExternalPayrollRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCompany()`

```php
createCompany($create_company_request)
```

Create a company

Creates a company to run payroll for.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_company_request = new \OpenAPI\Client\Model\CreateCompanyRequest(); // \OpenAPI\Client\Model\CreateCompanyRequest

try {
    $apiInstance->createCompany($create_company_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_company_request** | [**\OpenAPI\Client\Model\CreateCompanyRequest**](../Model/CreateCompanyRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCompanyTaxElections()`

```php
createCompanyTaxElections($create_company_tax_elections_request)
```

Create company tax elections



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_company_tax_elections_request = new \OpenAPI\Client\Model\CreateCompanyTaxElectionsRequest(); // \OpenAPI\Client\Model\CreateCompanyTaxElectionsRequest

try {
    $apiInstance->createCompanyTaxElections($create_company_tax_elections_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createCompanyTaxElections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_company_tax_elections_request** | [**\OpenAPI\Client\Model\CreateCompanyTaxElectionsRequest**](../Model/CreateCompanyTaxElectionsRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createNetPaySplit()`

```php
createNetPaySplit($create_net_pay_split_request): \OpenAPI\Client\Model\ListNetPaySplits200ResponseInner
```

Create a net pay split

Creates a net pay split.  One of `employee` or `contractor` is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_net_pay_split_request = new \OpenAPI\Client\Model\CreateNetPaySplitRequest(); // \OpenAPI\Client\Model\CreateNetPaySplitRequest

try {
    $result = $apiInstance->createNetPaySplit($create_net_pay_split_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createNetPaySplit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_net_pay_split_request** | [**\OpenAPI\Client\Model\CreateNetPaySplitRequest**](../Model/CreateNetPaySplitRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListNetPaySplits200ResponseInner**](../Model/ListNetPaySplits200ResponseInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createPayroll()`

```php
createPayroll($create_payroll_request): \OpenAPI\Client\Model\GetPayroll200Response
```

Create a payroll

Creates a payroll.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_payroll_request = new \OpenAPI\Client\Model\CreatePayrollRequest(); // \OpenAPI\Client\Model\CreatePayrollRequest

try {
    $result = $apiInstance->createPayroll($create_payroll_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createPayroll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_payroll_request** | [**\OpenAPI\Client\Model\CreatePayrollRequest**](../Model/CreatePayrollRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPayroll200Response**](../Model/GetPayroll200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createTheEnrollmentProfile()`

```php
createTheEnrollmentProfile($create_the_enrollment_profile_request)
```

Create the enrollment profile

Create the enrollment profile for the company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_the_enrollment_profile_request = new \OpenAPI\Client\Model\CreateTheEnrollmentProfileRequest(); // \OpenAPI\Client\Model\CreateTheEnrollmentProfileRequest

try {
    $apiInstance->createTheEnrollmentProfile($create_the_enrollment_profile_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createTheEnrollmentProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_the_enrollment_profile_request** | [**\OpenAPI\Client\Model\CreateTheEnrollmentProfileRequest**](../Model/CreateTheEnrollmentProfileRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteABankAccount()`

```php
deleteABankAccount($bank_account)
```

Delete a bank account

Deletes the specified bank account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_account = 'bank_account_example'; // string | ID of the bank account to delete

try {
    $apiInstance->deleteABankAccount($bank_account);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteABankAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bank_account** | **string**| ID of the bank account to delete | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteACompanyBenefit()`

```php
deleteACompanyBenefit($company_benefit): object
```

Delete a company benefit

Deletes the specified company benefit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_benefit = 'company_benefit_example'; // string | ID of the company benefit to delete.

try {
    $result = $apiInstance->deleteACompanyBenefit($company_benefit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteACompanyBenefit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_benefit** | **string**| ID of the company benefit to delete. | |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAContractorPayment()`

```php
deleteAContractorPayment($contractor_payment): object
```

Delete a contractor payment



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractor_payment = 'contractor_payment_example'; // string

try {
    $result = $apiInstance->deleteAContractorPayment($contractor_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAContractorPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contractor_payment** | **string**|  | |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAPayroll()`

```php
deleteAPayroll($payroll)
```

Delete a payroll

Deletes a payroll.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll = 'payroll_example'; // string

try {
    $apiInstance->deleteAPayroll($payroll);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAPayroll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAPayrollCopy1()`

```php
deleteAPayrollCopy1($payroll)
```

Delete an external payroll

Deletes an external payroll.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll = 'payroll_example'; // string

try {
    $apiInstance->deleteAPayrollCopy1($payroll);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAPayrollCopy1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAPayrollItem()`

```php
deleteAPayrollItem($payroll_item)
```

Delete a payroll item



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll_item = 'payroll_item_example'; // string

try {
    $apiInstance->deleteAPayrollItem($payroll_item);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAPayrollItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll_item** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAPostTaxDeduction()`

```php
deleteAPostTaxDeduction($post_tax_deduction): object
```

Delete a post-tax deduction

Deletes the specified post-tax deduction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_tax_deduction = 'post_tax_deduction_example'; // string

try {
    $result = $apiInstance->deleteAPostTaxDeduction($post_tax_deduction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAPostTaxDeduction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_tax_deduction** | **string**|  | |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAWebhookConfig()`

```php
deleteAWebhookConfig($webhook_config)
```

Delete a webhook config

Deletes the specified webhook config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_config = 'webhook_config_example'; // string

try {
    $apiInstance->deleteAWebhookConfig($webhook_config);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAWebhookConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_config** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAnEmployeeBenefit()`

```php
deleteAnEmployeeBenefit($benefit): object
```

Delete a benefit

Deletes the specified benefit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$benefit = 'benefit_example'; // string | ID of the benefit to delete

try {
    $result = $apiInstance->deleteAnEmployeeBenefit($benefit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAnEmployeeBenefit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **benefit** | **string**| ID of the benefit to delete | |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadACompanyAuthorizationDocument()`

```php
downloadACompanyAuthorizationDocument($document, $accept): object
```

Download a company authorization document

Returns the binary data for a PDF of the specified company authorization document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = 'document_example'; // string | ID of the document to download
$accept = 'accept_example'; // string | application/pdf

try {
    $result = $apiInstance->downloadACompanyAuthorizationDocument($document, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->downloadACompanyAuthorizationDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document** | **string**| ID of the document to download | |
| **accept** | **string**| application/pdf | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadACompanyTaxDocument()`

```php
downloadACompanyTaxDocument($document, $accept): object
```

Download a company tax document

Returns the binary data for a PDF of the specified company document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = 'document_example'; // string | ID of the document to download
$accept = 'accept_example'; // string | application/pdf

try {
    $result = $apiInstance->downloadACompanyTaxDocument($document, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->downloadACompanyTaxDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document** | **string**| ID of the document to download | |
| **accept** | **string**| application/pdf | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadAContractorTaxDocument()`

```php
downloadAContractorTaxDocument($document, $accept): object
```

Download a contractor tax document

Returns the binary data for a PDF of the specified contractor tax document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = 'document_example'; // string | ID of the document to download
$accept = 'accept_example'; // string | application/pdf

try {
    $result = $apiInstance->downloadAContractorTaxDocument($document, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->downloadAContractorTaxDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document** | **string**| ID of the document to download | |
| **accept** | **string**| application/pdf | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadASetupDocument()`

```php
downloadASetupDocument($document): object
```

Download a setup document

Downloads the binary document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = 'document_example'; // string | Document ID

try {
    $result = $apiInstance->downloadASetupDocument($document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->downloadASetupDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document** | **string**| Document ID | |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadAnEmployeeTaxDocument()`

```php
downloadAnEmployeeTaxDocument($document, $accept): object
```

Download an employee tax document

Returns the binary data for a PDF of the specified employee tax document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = 'document_example'; // string | ID of the document to download
$accept = 'accept_example'; // string | application/pdf

try {
    $result = $apiInstance->downloadAnEmployeeTaxDocument($document, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->downloadAnEmployeeTaxDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document** | **string**| ID of the document to download | |
| **accept** | **string**| application/pdf | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `earlyEnrollment()`

```php
earlyEnrollment($company, $generate_onboard_link_request): object
```

Company Early Enrollment

This Component allows employers to enter all of the necessary information about their business to kick off due diligence review used to determine payroll product and feature eligibility  <img style=\"margin-top: 30px; margin-bottom: 20px; border-radius: 8px; border: 1px solid lightgrey\" src=\"https://public-component-assets.s3.amazonaws.com/er-early-enrollment.png\" /> Learn how to embed Components in our <a target=\"_blank\" href=\"https://docs.checkhq.com/docs/embedding-a-component\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated
$generate_onboard_link_request = new \OpenAPI\Client\Model\GenerateOnboardLinkRequest(); // \OpenAPI\Client\Model\GenerateOnboardLinkRequest

try {
    $result = $apiInstance->earlyEnrollment($company, $generate_onboard_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->earlyEnrollment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |
| **generate_onboard_link_request** | [**\OpenAPI\Client\Model\GenerateOnboardLinkRequest**](../Model/GenerateOnboardLinkRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeBenefits()`

```php
employeeBenefits($employee): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Employee Benefits

This component allows an employer to view, create, edit, and delete benefits for the specified employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | ID of the employee for which a component link will be generated

try {
    $result = $apiInstance->employeeBenefits($employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeeBenefits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| ID of the employee for which a component link will be generated | |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeePaymentSetup()`

```php
employeePaymentSetup($employee): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Employee Payment Setup

This Component allows employees to approve debit authorization and link a bank account to Check via Plaid. <img style=\"margin-top: 20px; width: 500px;   display: block;   margin-left: auto;   margin-right: auto;\" src=\"https://public-component-assets.s3.amazonaws.com/ee_payment_setup.svg\" /> Learn how to embed Components in our <a target=\"_blank\" href=\"https://docs.checkhq.com/docs/embedding-a-component\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | ID of the employee for which a component link will be generated

try {
    $result = $apiInstance->employeePaymentSetup($employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeePaymentSetup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| ID of the employee for which a component link will be generated | |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeePaystub()`

```php
employeePaystub($employee): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Employee Paystubs

Lists all of the paystubs available to download in PDF format for a single employee. <img style=\"margin-top: 20px; border-radius: 10px;  border: 1px solid #E2E8F0;\" src=\"https://public-component-assets.s3.amazonaws.com/ee_paystubs.svg\" /> Learn how to embed Components in our <a target=\"_blank\" href=\"https://docs.checkhq.com/docs/embedding-a-component\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | ID of the employee for which a component link will be generated

try {
    $result = $apiInstance->employeePaystub($employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeePaystub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| ID of the employee for which a component link will be generated | |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeePostTaxDeductions()`

```php
employeePostTaxDeductions($employee): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Employee Post-Tax Deductions

This component allows an employer to view, create, edit, and delete post-tax deductions for the specified employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | ID of the employee for which a component link will be generated

try {
    $result = $apiInstance->employeePostTaxDeductions($employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeePostTaxDeductions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| ID of the employee for which a component link will be generated | |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeProfile()`

```php
employeeProfile($employee): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Employee Profile

This component allows employee to view their profile relevant to payroll, including general demographics and details, payment methods and linked accounts, and workplaces they have been assigned to

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | ID of the employee for which a component link will be generated

try {
    $result = $apiInstance->employeeProfile($employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeeProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| ID of the employee for which a component link will be generated | |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeSsnSetup()`

```php
employeeSsnSetup($employee): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Employee SSN Setup

This Component allows employees to enter their SSN (with validation) and also consent to W-2 paper statements.  <img style=\"margin-top: 30px; margin-bottom: 0px; width: 500px;   display: block;   margin-left: auto;   margin-right: auto;\" src=\"https://public-component-assets.s3.amazonaws.com/ee_ssn_setup_2.svg\" /> Learn how to embed Components in our <a target=\"_blank\" href=\"https://docs.checkhq.com/docs/embedding-a-component\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | ID of the employee for which a component link will be generated

try {
    $result = $apiInstance->employeeSsnSetup($employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeeSsnSetup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| ID of the employee for which a component link will be generated | |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeTaxDocuments()`

```php
employeeTaxDocuments($employee): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Employee Tax Documents

Component for employees to see all tax documents that have previously been filed. Learn how to embed Components in our <a target=\"_blank\" href=\"https://docs.checkhq.com/docs/embedding-a-component\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | ID of the employee for which a component link will be generated

try {
    $result = $apiInstance->employeeTaxDocuments($employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeeTaxDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| ID of the employee for which a component link will be generated | |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `employeeWithholdingsSetup()`

```php
employeeWithholdingsSetup($employee): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Employee Withholdings Setup

This Component allows an employee to complete and sign state and federal withholding forms (i.e. W-4). <img style=\"width: 500px;   display: block;   margin-left: auto;   margin-right: auto;\" src=\"https://public-component-assets.s3.amazonaws.com/ee_tax_withholding.svg\" /> Learn how to embed Components in our <a target=\"_blank\" href=\"https://docs.checkhq.com/docs/embedding-a-component\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | ID of the employee for which a component link will be generated

try {
    $result = $apiInstance->employeeWithholdingsSetup($employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->employeeWithholdingsSetup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| ID of the employee for which a component link will be generated | |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `fullServiceSetupSubmission()`

```php
fullServiceSetupSubmission($company, $company_signatory_agreements_request): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Company Full Service Setup Submission Component

This Component allows an employer to prepare for and request Check to perform a full-service setup for the company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated
$company_signatory_agreements_request = new \OpenAPI\Client\Model\CompanySignatoryAgreementsRequest(); // \OpenAPI\Client\Model\CompanySignatoryAgreementsRequest

try {
    $result = $apiInstance->fullServiceSetupSubmission($company, $company_signatory_agreements_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->fullServiceSetupSubmission: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |
| **company_signatory_agreements_request** | [**\OpenAPI\Client\Model\CompanySignatoryAgreementsRequest**](../Model/CompanySignatoryAgreementsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateContractorOnboardLink()`

```php
generateContractorOnboardLink($contractor): \OpenAPI\Client\Model\GenerateOnboardLink1200Response
```

Contractor Onboard

Generates an Onboard link for the specified contractor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractor = 'contractor_example'; // string | Generate an onboard link for this contractor ID

try {
    $result = $apiInstance->generateContractorOnboardLink($contractor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->generateContractorOnboardLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contractor** | **string**| Generate an onboard link for this contractor ID | |

### Return type

[**\OpenAPI\Client\Model\GenerateOnboardLink1200Response**](../Model/GenerateOnboardLink1200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateOnboardLink()`

```php
generateOnboardLink($company, $generate_onboard_link_request): \OpenAPI\Client\Model\GenerateOnboardLink1200Response
```

Company Onboard

Generates a link to Onboard a Company.  Onboard links can also be embedded like Components. Check out our <a href=\"https://docs.checkhq.com/docs/adding-check-onboard-to-your-application\" target=\"_blank\">guide</a> on how to embed them into your app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which an onboard link will be generated
$generate_onboard_link_request = new \OpenAPI\Client\Model\GenerateOnboardLinkRequest(); // \OpenAPI\Client\Model\GenerateOnboardLinkRequest

try {
    $result = $apiInstance->generateOnboardLink($company, $generate_onboard_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->generateOnboardLink: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which an onboard link will be generated | |
| **generate_onboard_link_request** | [**\OpenAPI\Client\Model\GenerateOnboardLinkRequest**](../Model/GenerateOnboardLinkRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateOnboardLink1200Response**](../Model/GenerateOnboardLink1200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateOnboardLink1()`

```php
generateOnboardLink1($employee): \OpenAPI\Client\Model\GenerateOnboardLink1200Response
```

Employee Onboard

Generates an Onboard link for the specified employee. Onboard links can also be embedded like Components. Check out our <a href=\"https://docs.checkhq.com/docs/adding-check-onboard-to-your-application\" target=\"_blank\">guide</a> on how to embed them into your app.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | Generate an onboard link for this employee ID

try {
    $result = $apiInstance->generateOnboardLink1($employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->generateOnboardLink1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| Generate an onboard link for this employee ID | |

### Return type

[**\OpenAPI\Client\Model\GenerateOnboardLink1200Response**](../Model/GenerateOnboardLink1200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getABankAccount()`

```php
getABankAccount($bank_account): \OpenAPI\Client\Model\ListBankAccounts200ResponseInner
```

Get a bank account

Returns the specified bank account.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_account = 'bank_account_example'; // string | ID for the bank account to return

try {
    $result = $apiInstance->getABankAccount($bank_account);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getABankAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bank_account** | **string**| ID for the bank account to return | |

### Return type

[**\OpenAPI\Client\Model\ListBankAccounts200ResponseInner**](../Model/ListBankAccounts200ResponseInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getACompany()`

```php
getACompany($company): object
```

Get a company

Returns the specified company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company to return

try {
    $result = $apiInstance->getACompany($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getACompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company to return | |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getACompanyAuthorizationDocument()`

```php
getACompanyAuthorizationDocument(): object
```

Get a company authorization document

Returns a company authorization document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getACompanyAuthorizationDocument();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getACompanyAuthorizationDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getACompanyBenefit()`

```php
getACompanyBenefit($company_benefit): \OpenAPI\Client\Model\ListCompanyBenefits200ResponseInner
```

Get a company benefit

Get a company benefit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_benefit = 'company_benefit_example'; // string | ID of the company benefit to return.

try {
    $result = $apiInstance->getACompanyBenefit($company_benefit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getACompanyBenefit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_benefit** | **string**| ID of the company benefit to return. | |

### Return type

[**\OpenAPI\Client\Model\ListCompanyBenefits200ResponseInner**](../Model/ListCompanyBenefits200ResponseInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getACompanyProvidedDocument()`

```php
getACompanyProvidedDocument($document): \OpenAPI\Client\Model\ListCompanyProvidedDocuments200ResponseResultsInner
```

Get a company provided document

Returns a company provided document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = 'document_example'; // string | ID of the company provided document to return.

try {
    $result = $apiInstance->getACompanyProvidedDocument($document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getACompanyProvidedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document** | **string**| ID of the company provided document to return. | |

### Return type

[**\OpenAPI\Client\Model\ListCompanyProvidedDocuments200ResponseResultsInner**](../Model/ListCompanyProvidedDocuments200ResponseResultsInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getACompanyTaxDocument()`

```php
getACompanyTaxDocument(): object
```

Get a company tax document

Returns a company tax document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getACompanyTaxDocument();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getACompanyTaxDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getACompanysRequirements()`

```php
getACompanysRequirements($requirement): \OpenAPI\Client\Model\GetACompanysRequirements200Response
```

Get a requirement

Get a single requirement through its id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requirement = 'requirement_example'; // string | ID of the requirement

try {
    $result = $apiInstance->getACompanysRequirements($requirement);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getACompanysRequirements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requirement** | **string**| ID of the requirement | |

### Return type

[**\OpenAPI\Client\Model\GetACompanysRequirements200Response**](../Model/GetACompanysRequirements200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAContractor()`

```php
getAContractor($contractor)
```

Get a contractor

Returns the specified contractor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractor = 'contractor_example'; // string | ID of the contractor to return

try {
    $apiInstance->getAContractor($contractor);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAContractor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contractor** | **string**| ID of the contractor to return | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAContractorPayment()`

```php
getAContractorPayment($contractor_payment): object
```

Get a contractor pay statement

Returns the specified contractor payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractor_payment = 'contractor_payment_example'; // string | ID of the contractor payment to return

try {
    $result = $apiInstance->getAContractorPayment($contractor_payment);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAContractorPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contractor_payment** | **string**| ID of the contractor payment to return | |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAContractorTaxDocument()`

```php
getAContractorTaxDocument(): object
```

Get a contractor tax document

Returns a contractor tax document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAContractorTaxDocument();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAContractorTaxDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAFederalEinVerification()`

```php
getAFederalEinVerification($company, $federal_ein_verification): \OpenAPI\Client\Model\ListFederalEinVerifications200ResponseResultsInner
```

Get a Federal EIN Verification

Returns the specified Federal EIN Verification

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company
$federal_ein_verification = 'federal_ein_verification_example'; // string | ID of the federal EIN verification

try {
    $result = $apiInstance->getAFederalEinVerification($company, $federal_ein_verification);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAFederalEinVerification: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company | |
| **federal_ein_verification** | **string**| ID of the federal EIN verification | |

### Return type

[**\OpenAPI\Client\Model\ListFederalEinVerifications200ResponseResultsInner**](../Model/ListFederalEinVerifications200ResponseResultsInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAForm()`

```php
getAForm($form, $type)
```

Get a form



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form = 'form_example'; // string
$type = 'type_example'; // string | By adding type=contractor_setup as a query parameter, we will surface all of of the contractor specific forms.

try {
    $apiInstance->getAForm($form, $type);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form** | **string**|  | |
| **type** | **string**| By adding type&#x3D;contractor_setup as a query parameter, we will surface all of of the contractor specific forms. | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getANetPaySplit()`

```php
getANetPaySplit($net_pay_split): \OpenAPI\Client\Model\ListNetPaySplits200ResponseInner
```

Get a net pay split

Returns a specified net pay split.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$net_pay_split = 'net_pay_split_example'; // string | ID of the net pay split to be returned

try {
    $result = $apiInstance->getANetPaySplit($net_pay_split);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getANetPaySplit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **net_pay_split** | **string**| ID of the net pay split to be returned | |

### Return type

[**\OpenAPI\Client\Model\ListNetPaySplits200ResponseInner**](../Model/ListNetPaySplits200ResponseInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAPaperCheck()`

```php
getAPaperCheck($payroll_item, $accept): \OpenAPI\Client\Model\GetAPaperCheck202Response
```

Get a paper check

Returns a paper check for the specified payroll item.   Use an `Accept: application/pdf` request header to download the paper check as a PDF document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll_item = 'payroll_item_example'; // string | ID of the payroll item to return
$accept = 'accept_example'; // string | application/pdf

try {
    $result = $apiInstance->getAPaperCheck($payroll_item, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAPaperCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll_item** | **string**| ID of the payroll item to return | |
| **accept** | **string**| application/pdf | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetAPaperCheck202Response**](../Model/GetAPaperCheck202Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAPaperCheck2()`

```php
getAPaperCheck2($contractor_payment, $accept): \OpenAPI\Client\Model\GetAPaperCheck202Response
```

Get a paper check

Returns a paper check for the specified contractor payment.  Use an `Accept: application/pdf` request header to download the paper check as a PDF document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractor_payment = 'contractor_payment_example'; // string | ID of the contractor payment to return
$accept = 'accept_example'; // string | application/pdf

try {
    $result = $apiInstance->getAPaperCheck2($contractor_payment, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAPaperCheck2: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contractor_payment** | **string**| ID of the contractor payment to return | |
| **accept** | **string**| application/pdf | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetAPaperCheck202Response**](../Model/GetAPaperCheck202Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAPaySchedule()`

```php
getAPaySchedule($pay_schedule): \OpenAPI\Client\Model\GetAPaySchedule200Response
```

Get a pay schedule

Returns the specified pay schedule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_schedule = 'pay_schedule_example'; // string

try {
    $result = $apiInstance->getAPaySchedule($pay_schedule);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAPaySchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pay_schedule** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetAPaySchedule200Response**](../Model/GetAPaySchedule200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAPayment()`

```php
getAPayment($tax_filing_id): \OpenAPI\Client\Model\GetAPayment200Response
```

Get a tax filing



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_filing_id = 'tax_filing_id_example'; // string | ID corresponding to the tax filing

try {
    $result = $apiInstance->getAPayment($tax_filing_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax_filing_id** | **string**| ID corresponding to the tax filing | |

### Return type

[**\OpenAPI\Client\Model\GetAPayment200Response**](../Model/GetAPayment200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAPaymentAttempt()`

```php
getAPaymentAttempt($payment_attempt)
```

Get a payment attempt



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_attempt = 'payment_attempt_example'; // string | ID corresponding to payment attempt object

try {
    $apiInstance->getAPaymentAttempt($payment_attempt);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAPaymentAttempt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_attempt** | **string**| ID corresponding to payment attempt object | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAPaymentAttemptCopy1()`

```php
getAPaymentAttemptCopy1($payment)
```

Get a payment



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment = 'payment_example'; // string | ID corresponding to payment object

try {
    $apiInstance->getAPaymentAttemptCopy1($payment);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAPaymentAttemptCopy1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment** | **string**| ID corresponding to payment object | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAPayrollItem()`

```php
getAPayrollItem($payroll_item)
```

Get a payroll item

Returns the specified payroll item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll_item = 'payroll_item_example'; // string | ID of the payroll item to return

try {
    $apiInstance->getAPayrollItem($payroll_item);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAPayrollItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll_item** | **string**| ID of the payroll item to return | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAPaystub()`

```php
getAPaystub($employee, $payroll, $accept): \OpenAPI\Client\Model\GetAPaystub200Response
```

Get a paystub

Returns the specified paystub for the given employee and payroll.  By default get the response as JSON. Use an `Accept: application/pdf` request header to download the paystub as a PDF document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | Return paystub for this employee ID
$payroll = 'payroll_example'; // string | Return the paystub for this payroll ID
$accept = 'accept_example'; // string | Either `application/pdf` or `application/json`

try {
    $result = $apiInstance->getAPaystub($employee, $payroll, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAPaystub: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| Return paystub for this employee ID | |
| **payroll** | **string**| Return the paystub for this payroll ID | |
| **accept** | **string**| Either &#x60;application/pdf&#x60; or &#x60;application/json&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetAPaystub200Response**](../Model/GetAPaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAPaystub1()`

```php
getAPaystub1($contractor, $payroll, $accept): \OpenAPI\Client\Model\GetAPaystub1200Response
```

Get a contractor payment

Returns the specified pay statement for the given contractor and payroll.  By default get the response as JSON. Use an `Accept: application/pdf` request header to download the paystub as a PDF document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractor = 'contractor_example'; // string | Return paystub for this contractor ID
$payroll = 'payroll_example'; // string | Return the paystub for this payroll ID
$accept = 'accept_example'; // string | Either `application/pdf` or `application/json`

try {
    $result = $apiInstance->getAPaystub1($contractor, $payroll, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAPaystub1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contractor** | **string**| Return paystub for this contractor ID | |
| **payroll** | **string**| Return the paystub for this payroll ID | |
| **accept** | **string**| Either &#x60;application/pdf&#x60; or &#x60;application/json&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetAPaystub1200Response**](../Model/GetAPaystub1200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAPostTaxDeduction()`

```php
getAPostTaxDeduction($post_tax_deduction): object
```

Get a post-tax deduction

Returns a post-tax deduction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_tax_deduction = 'post_tax_deduction_example'; // string | ID of the post-tax deduction to return.

try {
    $result = $apiInstance->getAPostTaxDeduction($post_tax_deduction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAPostTaxDeduction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_tax_deduction** | **string**| ID of the post-tax deduction to return. | |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getASetupDocument()`

```php
getASetupDocument($document): object
```

Get a Setup Document

Returns a setup document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = 'document_example'; // string | Document ID

try {
    $result = $apiInstance->getASetupDocument($document);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getASetupDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document** | **string**| Document ID | |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getATaxFilingEventCopy()`

```php
getATaxFilingEventCopy($tax_filing_event_id)
```

Get a tax filing event



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_filing_event_id = 'tax_filing_event_id_example'; // string | ID corresponding to tax filing event object

try {
    $apiInstance->getATaxFilingEventCopy($tax_filing_event_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getATaxFilingEventCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax_filing_event_id** | **string**| ID corresponding to tax filing event object | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAWebhookConfig()`

```php
getAWebhookConfig($webhook_config): \OpenAPI\Client\Model\GetAWebhookConfig200Response
```

Get a webhook config

Returns the specified webhook config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_config = 'webhook_config_example'; // string

try {
    $result = $apiInstance->getAWebhookConfig($webhook_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAWebhookConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_config** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetAWebhookConfig200Response**](../Model/GetAWebhookConfig200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAWorkplace()`

```php
getAWorkplace($workplace): \OpenAPI\Client\Model\ListWorkplaces200ResponseInner
```

Get a workplace

Returns the specified workplace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workplace = 'workplace_example'; // string

try {
    $result = $apiInstance->getAWorkplace($workplace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAWorkplace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workplace** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\ListWorkplaces200ResponseInner**](../Model/ListWorkplaces200ResponseInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAWorkplace1()`

```php
getAWorkplace1($earning_code): \OpenAPI\Client\Model\GetAWorkplace1200Response
```

Get an earning code



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$earning_code = 'earning_code_example'; // string

try {
    $result = $apiInstance->getAWorkplace1($earning_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAWorkplace1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **earning_code** | **string**|  | |

### Return type

[**\OpenAPI\Client\Model\GetAWorkplace1200Response**](../Model/GetAWorkplace1200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnEarningRate()`

```php
getAnEarningRate($earning_rate): object
```

Get an earning rate



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$earning_rate = 'earning_rate_example'; // string | ID for the earning rate object

try {
    $result = $apiInstance->getAnEarningRate($earning_rate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAnEarningRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **earning_rate** | **string**| ID for the earning rate object | |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnEmployee()`

```php
getAnEmployee($employee)
```

Get an employee

Returns the specified employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | ID of the employee to return

try {
    $apiInstance->getAnEmployee($employee);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAnEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| ID of the employee to return | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnEmployeeBenefit()`

```php
getAnEmployeeBenefit($benefit): \OpenAPI\Client\Model\ListBenefits200ResponseInner
```

Get a benefit

Returns the specified benefit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$benefit = 'benefit_example'; // string | ID of the benefit to return.

try {
    $result = $apiInstance->getAnEmployeeBenefit($benefit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAnEmployeeBenefit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **benefit** | **string**| ID of the benefit to return. | |

### Return type

[**\OpenAPI\Client\Model\ListBenefits200ResponseInner**](../Model/ListBenefits200ResponseInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnEmployeeForm()`

```php
getAnEmployeeForm($employee, $form)
```

Get an employee form

Returns the specified employee form.  **Note: **Employee withholdings are normally configured when employees go through [Check Onboard](https://docs.checkhq.com/docs/check-onboard). Use the Employee Forms API only if you're building a custom integration for employee onboarding.  Consult the [Custom Employee Onboarding Guide](https://docs.checkhq.com/docs/employee-onboarding-api#3-employee-withholdings-api) for more information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | Return forms associated with this employee ID
$form = 'form_example'; // string | The ID of the form to return.

try {
    $apiInstance->getAnEmployeeForm($employee, $form);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAnEmployeeForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| Return forms associated with this employee ID | |
| **form** | **string**| The ID of the form to return. | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnEmployeeTaxDocument()`

```php
getAnEmployeeTaxDocument(): object
```

Get an employee tax document

Returns an employee tax document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getAnEmployeeTaxDocument();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAnEmployeeTaxDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnEmployeesPaystubs()`

```php
getAnEmployeesPaystubs($employee, $payroll, $limit, $status, $start, $end): \OpenAPI\Client\Model\GetAnEmployeesPaystubs200Response
```

List employee paystubs

Returns a list of paystubs for the specified employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | Return paystubs for this employee ID
$payroll = 'payroll_example'; // string | Return the paystub for this payroll ID.
$limit = 56; // int | Number of paystubs returned per page
$status = 'status_example'; // string | Filters to only show paystubs for payrolls with the specified status.  If multiple `status` params are provided, paystubs with any of the statuses will be returned.  Accepted values are `pending`, `processing`, `failed`, or `paid`.
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return paystubs from payrolls with a payday on or after this date (YYYY-MM-DD)
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return paystubs from payrolls with a payday on or before this date (YYYY-MM-DD)

try {
    $result = $apiInstance->getAnEmployeesPaystubs($employee, $payroll, $limit, $status, $start, $end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAnEmployeesPaystubs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| Return paystubs for this employee ID | |
| **payroll** | **string**| Return the paystub for this payroll ID. | [optional] |
| **limit** | **int**| Number of paystubs returned per page | [optional] |
| **status** | **string**| Filters to only show paystubs for payrolls with the specified status.  If multiple &#x60;status&#x60; params are provided, paystubs with any of the statuses will be returned.  Accepted values are &#x60;pending&#x60;, &#x60;processing&#x60;, &#x60;failed&#x60;, or &#x60;paid&#x60;. | [optional] |
| **start** | **\DateTime**| Return paystubs from payrolls with a payday on or after this date (YYYY-MM-DD) | [optional] |
| **end** | **\DateTime**| Return paystubs from payrolls with a payday on or before this date (YYYY-MM-DD) | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetAnEmployeesPaystubs200Response**](../Model/GetAnEmployeesPaystubs200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAppliedForTaxIdsReport()`

```php
getAppliedForTaxIdsReport($company, $accept): \OpenAPI\Client\Model\GetAppliedForTaxIdsReport200Response
```

Get a company's applied-for tax parameters report

Returns a CSV or paginated list indicating the jurisdictions for which the specified company has a Tax ID currently designated as Applied-For.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company with the Applied-For report to return
$accept = 'accept_example'; // string | Either `application/json` or `text/csv`

try {
    $result = $apiInstance->getAppliedForTaxIdsReport($company, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAppliedForTaxIdsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company with the Applied-For report to return | |
| **accept** | **string**| Either &#x60;application/json&#x60; or &#x60;text/csv&#x60; | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetAppliedForTaxIdsReport200Response**](../Model/GetAppliedForTaxIdsReport200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCashRequirementReport()`

```php
getCashRequirementReport($payroll, $accept): object
```

Get Cash Requirement Report

Returns a breakdown of the payroll’s cash requirement by employee and contractor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll = 'payroll_example'; // string | Returns cash requirement breakdown for this payroll ID
$accept = 'accept_example'; // string | Either `application/json` or `text/csv`

try {
    $result = $apiInstance->getCashRequirementReport($payroll, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCashRequirementReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll** | **string**| Returns cash requirement breakdown for this payroll ID | |
| **accept** | **string**| Either &#x60;application/json&#x60; or &#x60;text/csv&#x60; | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyDefinedAttributes()`

```php
getCompanyDefinedAttributes($employee): \OpenAPI\Client\Model\GetCompanyDefinedAttributes200Response
```

Get company-defined attributes

Returns an employee's company-defined attributes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | ID of the employee to return

try {
    $result = $apiInstance->getCompanyDefinedAttributes($employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCompanyDefinedAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| ID of the employee to return | |

### Return type

[**\OpenAPI\Client\Model\GetCompanyDefinedAttributes200Response**](../Model/GetCompanyDefinedAttributes200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyPaydays()`

```php
getCompanyPaydays($company, $start, $processing_period)
```

Get company paydays

Returns a list of paydays and their corresponding `approval_deadline` specific to the processing period of the specified company. Results span one year of dates. If the `approval_deadline` was impacted by a bank holiday, then `impacted_by_holiday` will be true, otherwise false.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Return paydays for this company ID
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return paydays on or after this date. If not a valid payday, the first date in the returned range will be the first valid payday after this date. If omitted, this endpoint will return items starting from today.
$processing_period = 'processing_period_example'; // string | Return paydays for payrolls with the given processing period.

try {
    $apiInstance->getCompanyPaydays($company, $start, $processing_period);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCompanyPaydays: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Return paydays for this company ID | |
| **start** | **\DateTime**| Return paydays on or after this date. If not a valid payday, the first date in the returned range will be the first valid payday after this date. If omitted, this endpoint will return items starting from today. | [optional] |
| **processing_period** | **string**| Return paydays for payrolls with the given processing period. | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCompanyTaxParameterSetting()`

```php
getCompanyTaxParameterSetting($company_id, $tax_param_id, $as_of)
```

Get a specific company's tax parameter setting

Get a company’s tax parameter detail which includes a list of effective dated values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | ID of the company used to get the applicable tax parameter details.
$tax_param_id = 'tax_param_id_example'; // string | ID of the tax parameter used to detail the values.
$as_of = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Used to show the tax parameter effective dated details.

try {
    $apiInstance->getCompanyTaxParameterSetting($company_id, $tax_param_id, $as_of);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCompanyTaxParameterSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| ID of the company used to get the applicable tax parameter details. | |
| **tax_param_id** | **string**| ID of the tax parameter used to detail the values. | |
| **as_of** | **\DateTime**| Used to show the tax parameter effective dated details. | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContractorPaymentsReport()`

```php
getContractorPaymentsReport($company, $start, $end, $payroll, $accept, $preview)
```

Get contractor payments report

Returns the specified contractor payments report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company with the contractor report to return
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on payrolls with a payday on or after this date.
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on payrolls with a payday before or on this date.
$payroll = 'payroll_example'; // string | Filter on payroll(s) with this ID. To specify multiple payrolls, repeat this query parameter. (For example: \"&payroll=pay_123&payroll=pay_456&...\")
$accept = 'accept_example'; // string | Either `application/json` or `text/csv`
$preview = True; // bool | Include to show the report for contractor payments on draft payrolls

try {
    $apiInstance->getContractorPaymentsReport($company, $start, $end, $payroll, $accept, $preview);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getContractorPaymentsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company with the contractor report to return | |
| **start** | **\DateTime**| Filter on payrolls with a payday on or after this date. | [optional] |
| **end** | **\DateTime**| Filter on payrolls with a payday before or on this date. | [optional] |
| **payroll** | **string**| Filter on payroll(s) with this ID. To specify multiple payrolls, repeat this query parameter. (For example: \&quot;&amp;payroll&#x3D;pay_123&amp;payroll&#x3D;pay_456&amp;...\&quot;) | [optional] |
| **accept** | **string**| Either &#x60;application/json&#x60; or &#x60;text/csv&#x60; | [optional] |
| **preview** | **bool**| Include to show the report for contractor payments on draft payrolls | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `text/plain`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEmployeeTaxParameterSetting()`

```php
getEmployeeTaxParameterSetting($employee_id, $tax_param_id, $as_of): \OpenAPI\Client\Model\GetEmployeeTaxParameterSetting200Response
```

Get a specific employee's tax parameter setting

Get an employee’s tax parameter detail which includes a list of effective dated values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_id = 'employee_id_example'; // string | ID of the employee used to get the applicable tax parameter details.
$tax_param_id = 'tax_param_id_example'; // string | ID of the tax parameter used to detail the values.
$as_of = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Used to show the tax parameter’s effective dated details.

try {
    $result = $apiInstance->getEmployeeTaxParameterSetting($employee_id, $tax_param_id, $as_of);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getEmployeeTaxParameterSetting: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee_id** | **string**| ID of the employee used to get the applicable tax parameter details. | |
| **tax_param_id** | **string**| ID of the tax parameter used to detail the values. | |
| **as_of** | **\DateTime**| Used to show the tax parameter’s effective dated details. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetEmployeeTaxParameterSetting200Response**](../Model/GetEmployeeTaxParameterSetting200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaperChecks()`

```php
getPaperChecks($payroll): \OpenAPI\Client\Model\GetAPaperCheck202Response
```

Get paper checks

Generate paper checks for the specified payroll.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll = 'ID of the payroll'; // string

try {
    $result = $apiInstance->getPaperChecks($payroll);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPaperChecks: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll** | **string**|  | [default to &#39;ID of the payroll&#39;] |

### Return type

[**\OpenAPI\Client\Model\GetAPaperCheck202Response**](../Model/GetAPaperCheck202Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaperChecksReport()`

```php
getPaperChecksReport($payroll, $accept, $representation, $address_type, $body): \OpenAPI\Client\Model\GetPaperChecksReport200Response
```

Get Paper Checks Report



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll = 'payroll_example'; // string | Returns paper checks report for this payroll ID
$accept = 'accept_example'; // string | Either application/json or text/csv
$representation = 'default'; // string | `default` or `checkeeper`. If `checkeeper` is selected, report entries will be formatted to be compatible with Checkeeper's paper checks import flow.
$address_type = 'payee'; // string | `payee` or `company`. If `payee` is selected, the address for each entry is set to the individual payee's mailing address, as recorded in Check. If set to `company`, all entries will have the mailing address set to the company's address.
$body = {"payee":"Tony Stark","address_line1":"630 Bedford Road","address_line2":"APT 1201","address_city":"Tarrytown","address_state":"NY","address_postalcode":"10591","amount":"831.66","date":"2022-10-31","memo":"","payroll_item":"itm_NlBENQZ0eNWQqx46oQbZ","contractor_payment":null}; // mixed

try {
    $result = $apiInstance->getPaperChecksReport($payroll, $accept, $representation, $address_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPaperChecksReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll** | **string**| Returns paper checks report for this payroll ID | |
| **accept** | **string**| Either application/json or text/csv | [optional] |
| **representation** | **string**| &#x60;default&#x60; or &#x60;checkeeper&#x60;. If &#x60;checkeeper&#x60; is selected, report entries will be formatted to be compatible with Checkeeper&#39;s paper checks import flow. | [optional] [default to &#39;default&#39;] |
| **address_type** | **string**| &#x60;payee&#x60; or &#x60;company&#x60;. If &#x60;payee&#x60; is selected, the address for each entry is set to the individual payee&#39;s mailing address, as recorded in Check. If set to &#x60;company&#x60;, all entries will have the mailing address set to the company&#39;s address. | [optional] [default to &#39;payee&#39;] |
| **body** | **mixed**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaperChecksReport200Response**](../Model/GetPaperChecksReport200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPaydays()`

```php
getPaydays($pay_schedule, $start): \OpenAPI\Client\Model\GetPaydays200ResponseInner[]
```

Get paydays

Returns a list of paydays and their corresponding period_start, period_end, and approval_deadline dates for the specified pay schedule. Results span one year of dates. If the payday or approval_deadline was impacted by a weekend or a bank holiday, then impacted_by_weekend_or_holiday will be true, otherwise false.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_schedule = 'pay_schedule_example'; // string
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return paydays on or after this date.

try {
    $result = $apiInstance->getPaydays($pay_schedule, $start);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPaydays: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pay_schedule** | **string**|  | |
| **start** | **\DateTime**| Return paydays on or after this date. | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPaydays200ResponseInner[]**](../Model/GetPaydays200ResponseInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayroll()`

```php
getPayroll($payroll): \OpenAPI\Client\Model\GetPayroll200Response
```

Get a payroll

Returns the specified payroll.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll = 'payroll_example'; // string | ID of the payroll to return.

try {
    $result = $apiInstance->getPayroll($payroll);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPayroll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll** | **string**| ID of the payroll to return. | |

### Return type

[**\OpenAPI\Client\Model\GetPayroll200Response**](../Model/GetPayroll200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayrollJournal()`

```php
getPayrollJournal($company, $start, $end, $accept, $payroll, $include_taxable_wages, $include_employee_id, $include_contractors, $group_by): object
```

Get payroll journal

Returns the specified payroll journal.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company with the payroll journal to return
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return payrolls with a payday on or after this date.
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return payrolls with a payday before or on this date.
$accept = 'accept_example'; // string | Either `application/json` or `text/csv`
$payroll = 'payroll_example'; // string | Return the payroll with this ID. To specify multiple payrolls, repeat this query parameter. (For example: \"&payroll=pay_123&payroll=pay_456&...\")
$include_taxable_wages = false; // bool | Return payrolls with taxable wages.
$include_employee_id = false; // bool | Return employees with their ID.
$include_contractors = false; // bool | Return payments made to contractors on payrolls
$group_by = 'group_by_example'; // string | Determines how to breakdown pay. If `workplace` is provided, employees will have one line item per payroll and workplace combination.

try {
    $result = $apiInstance->getPayrollJournal($company, $start, $end, $accept, $payroll, $include_taxable_wages, $include_employee_id, $include_contractors, $group_by);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPayrollJournal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company with the payroll journal to return | |
| **start** | **\DateTime**| Return payrolls with a payday on or after this date. | [optional] |
| **end** | **\DateTime**| Return payrolls with a payday before or on this date. | [optional] |
| **accept** | **string**| Either &#x60;application/json&#x60; or &#x60;text/csv&#x60; | [optional] |
| **payroll** | **string**| Return the payroll with this ID. To specify multiple payrolls, repeat this query parameter. (For example: \&quot;&amp;payroll&#x3D;pay_123&amp;payroll&#x3D;pay_456&amp;...\&quot;) | [optional] |
| **include_taxable_wages** | **bool**| Return payrolls with taxable wages. | [optional] [default to false] |
| **include_employee_id** | **bool**| Return employees with their ID. | [optional] [default to false] |
| **include_contractors** | **bool**| Return payments made to contractors on payrolls | [optional] [default to false] |
| **group_by** | **string**| Determines how to breakdown pay. If &#x60;workplace&#x60; is provided, employees will have one line item per payroll and workplace combination. | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayrollSummary()`

```php
getPayrollSummary($company, $start, $end, $accept, $include_employee_id, $include_contractors): object
```

Get payroll summary

Returns the specified payroll summary.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Return payroll summaries for this company ID
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return payrolls with a payday on or after this date.
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return payrolls with a payday before or on this date.
$accept = 'accept_example'; // string | Either `application/json` or `text/csv`
$include_employee_id = false; // bool | Return employees with their ID.
$include_contractors = false; // bool | Return payments made to contractors on payrolls

try {
    $result = $apiInstance->getPayrollSummary($company, $start, $end, $accept, $include_employee_id, $include_contractors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getPayrollSummary: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Return payroll summaries for this company ID | |
| **start** | **\DateTime**| Return payrolls with a payday on or after this date. | [optional] |
| **end** | **\DateTime**| Return payrolls with a payday before or on this date. | [optional] |
| **accept** | **string**| Either &#x60;application/json&#x60; or &#x60;text/csv&#x60; | [optional] |
| **include_employee_id** | **bool**| Return employees with their ID. | [optional] [default to false] |
| **include_contractors** | **bool**| Return payments made to contractors on payrolls | [optional] [default to false] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReciprocityElections()`

```php
getReciprocityElections($employee): \OpenAPI\Client\Model\GetReciprocityElections200Response
```

Get reciprocity elections

Returns the jurisdictions an employee may opt into reciprocity for, along with their current values.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | ID of the employee to return

try {
    $result = $apiInstance->getReciprocityElections($employee);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getReciprocityElections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| ID of the employee to return | |

### Return type

[**\OpenAPI\Client\Model\GetReciprocityElections200Response**](../Model/GetReciprocityElections200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSignatories()`

```php
getSignatories($company)
```

Get signatories

Returns a list of the signatories for the given company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the associated company

try {
    $apiInstance->getSignatories($company);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSignatories: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the associated company | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTaxLiabilityReport()`

```php
getTaxLiabilityReport($company, $start, $end, $accept): object
```

Get tax liability report

Returns the specified tax liability report.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Return tax liabilities for this company ID
$start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return tax liabilities from payrolls with a payday on or after this date.
$end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return tax liabilities from payrolls with a payday before or on this date.
$accept = 'accept_example'; // string | Either `application/json` or `text/csv`

try {
    $result = $apiInstance->getTaxLiabilityReport($company, $start, $end, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTaxLiabilityReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Return tax liabilities for this company ID | |
| **start** | **\DateTime**| Return tax liabilities from payrolls with a payday on or after this date. | [optional] |
| **end** | **\DateTime**| Return tax liabilities from payrolls with a payday before or on this date. | [optional] |
| **accept** | **string**| Either &#x60;application/json&#x60; or &#x60;text/csv&#x60; | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTheEnrollmentProfile()`

```php
getTheEnrollmentProfile($company)
```

Get the enrollment profile

View the enrollment profile for the given company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | The ID of the associated company

try {
    $apiInstance->getTheEnrollmentProfile($company);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getTheEnrollmentProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| The ID of the associated company | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getW2PreviewReport()`

```php
getW2PreviewReport($company, $year, $include_ids, $accept): object
```

Get W-2 Preview Report

Returns a preview of W-2 data for all employees as of the current date for a specified year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Returns employee W-2 data for this company ID
$year = '2021'; // string | Returns employee W-2 data related to this year (defaults to current year).
$include_ids = false; // bool | Returns employee W-2 data with the associated company and employee ids.
$accept = 'accept_example'; // string | Either `application/json` or `text/csv`

try {
    $result = $apiInstance->getW2PreviewReport($company, $year, $include_ids, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getW2PreviewReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Returns employee W-2 data for this company ID | |
| **year** | **string**| Returns employee W-2 data related to this year (defaults to current year). | [optional] [default to &#39;2021&#39;] |
| **include_ids** | **bool**| Returns employee W-2 data with the associated company and employee ids. | [optional] [default to false] |
| **accept** | **string**| Either &#x60;application/json&#x60; or &#x60;text/csv&#x60; | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getW4ExemptStatusReport()`

```php
getW4ExemptStatusReport($company, $year, $accept): object
```

Get W-4 Exempt Status Report

Returns the federal and state withholding exemption status for all employees as of the current date for a specified year.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Returns employee federal and state withholding exception data for this company ID
$year = 'Current year'; // string | Returns employee federal and state withholding excemption data related to this year.
$accept = 'accept_example'; // string | Either `application/json` or `text/csv`

try {
    $result = $apiInstance->getW4ExemptStatusReport($company, $year, $accept);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getW4ExemptStatusReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Returns employee federal and state withholding exception data for this company ID | |
| **year** | **string**| Returns employee federal and state withholding excemption data related to this year. | [optional] [default to &#39;Current year&#39;] |
| **accept** | **string**| Either &#x60;application/json&#x60; or &#x60;text/csv&#x60; | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listAWebhookConfig()`

```php
listAWebhookConfig($limit): \OpenAPI\Client\Model\GetAWebhookConfig200Response[]
```

List webhook configs

Returns a list of webhook configs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Number of webhook configs returned per page

try {
    $result = $apiInstance->listAWebhookConfig($limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listAWebhookConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Number of webhook configs returned per page | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetAWebhookConfig200Response[]**](../Model/GetAWebhookConfig200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBankAccounts()`

```php
listBankAccounts($company, $employee, $contractor, $limit): \OpenAPI\Client\Model\ListBankAccounts200ResponseInner[]
```

List bank accounts

Lists all bank accounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Return bank accounts for this [company](ref:company) ID.
$employee = 'employee_example'; // string | Return bank accounts for this [employee](ref:the-employee-object) ID.
$contractor = 'contractor_example'; // string | Return bank accounts for this [contractor](ref:the-contractor-object) ID.
$limit = 56; // int | Number of bank accounts returned per page

try {
    $result = $apiInstance->listBankAccounts($company, $employee, $contractor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listBankAccounts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Return bank accounts for this [company](ref:company) ID. | [optional] |
| **employee** | **string**| Return bank accounts for this [employee](ref:the-employee-object) ID. | [optional] |
| **contractor** | **string**| Return bank accounts for this [contractor](ref:the-contractor-object) ID. | [optional] |
| **limit** | **int**| Number of bank accounts returned per page | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListBankAccounts200ResponseInner[]**](../Model/ListBankAccounts200ResponseInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBenefits()`

```php
listBenefits($employee, $company, $limit, $include_external): \OpenAPI\Client\Model\ListBenefits200ResponseInner[]
```

List benefits

Returns a list of benefits.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | Return benefits for this employee ID.
$company = 'company_example'; // string | Return benefits for all employees of this company ID.
$limit = 56; // int | Number of benefits returned per page
$include_external = True; // bool | Flag to indicate if to additionally expose external benefits in the list response. Defaults to false if not included.

try {
    $result = $apiInstance->listBenefits($employee, $company, $limit, $include_external);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listBenefits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| Return benefits for this employee ID. | [optional] |
| **company** | **string**| Return benefits for all employees of this company ID. | [optional] |
| **limit** | **int**| Number of benefits returned per page | [optional] |
| **include_external** | **bool**| Flag to indicate if to additionally expose external benefits in the list response. Defaults to false if not included. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListBenefits200ResponseInner[]**](../Model/ListBenefits200ResponseInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanies()`

```php
listCompanies($active, $limit, $id): object
```

List companies

Returns a list of all companies.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$active = true; // bool | Filter companies by whether they are active or not active.
$limit = 56; // int | Number of companies returned per page
$id = array('id_example'); // string[] | Filter the list to the specified IDs. For more details, check out the [Bulk Get Requests guide](https://docs.checkhq.com/docs/bulk-resource-get-requests).

try {
    $result = $apiInstance->listCompanies($active, $limit, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCompanies: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **active** | **bool**| Filter companies by whether they are active or not active. | [optional] [default to true] |
| **limit** | **int**| Number of companies returned per page | [optional] |
| **id** | [**string[]**](../Model/string.md)| Filter the list to the specified IDs. For more details, check out the [Bulk Get Requests guide](https://docs.checkhq.com/docs/bulk-resource-get-requests). | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyAuthorizationDocuments()`

```php
listCompanyAuthorizationDocuments($company, $year, $limit): object
```

List company authorization documents

Returns a list of company authorization documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Return authorization documents for this company ID
$year = 56; // int | Return documents for this year (must be greater than or equal to `2019`)
$limit = 56; // int | Number of authorization documents returned per page

try {
    $result = $apiInstance->listCompanyAuthorizationDocuments($company, $year, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCompanyAuthorizationDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Return authorization documents for this company ID | [optional] |
| **year** | **int**| Return documents for this year (must be greater than or equal to &#x60;2019&#x60;) | [optional] |
| **limit** | **int**| Number of authorization documents returned per page | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyBenefits()`

```php
listCompanyBenefits($company, $limit): \OpenAPI\Client\Model\ListCompanyBenefits200ResponseInner[]
```

List company benefits

List company benefits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Return all company benefits associated with this company ID.
$limit = 56; // int | Number of company benefits returned per page

try {
    $result = $apiInstance->listCompanyBenefits($company, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCompanyBenefits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Return all company benefits associated with this company ID. | [optional] |
| **limit** | **int**| Number of company benefits returned per page | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListCompanyBenefits200ResponseInner[]**](../Model/ListCompanyBenefits200ResponseInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyJurisdictions()`

```php
listCompanyJurisdictions($company_id)
```

List a company's jurisdictions

Get a list of all of the available tax parameter jurisdictions of a company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | ID of the company used to get the applicable tax parameter details.

try {
    $apiInstance->listCompanyJurisdictions($company_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCompanyJurisdictions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| ID of the company used to get the applicable tax parameter details. | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyProvidedDocuments()`

```php
listCompanyProvidedDocuments($company): \OpenAPI\Client\Model\ListCompanyProvidedDocuments200Response
```

List company provided documents



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company that this document is associated with.

try {
    $result = $apiInstance->listCompanyProvidedDocuments($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCompanyProvidedDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company that this document is associated with. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListCompanyProvidedDocuments200Response**](../Model/ListCompanyProvidedDocuments200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyTaxDocuments()`

```php
listCompanyTaxDocuments($company, $year, $quarter, $limit): \OpenAPI\Client\Model\ListCompanyTaxDocuments200Response
```

List company tax documents

Returns a list of company tax documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Return tax documents for this company ID
$year = 56; // int | Return tax documents for this year (must be greater than or equal to `2019`)
$quarter = 'quarter_example'; // string | Return tax documents for this quarter (accepted values are `q1`, `q2`, `q3`, or `q4`)
$limit = 56; // int | Number of tax documents returned per page

try {
    $result = $apiInstance->listCompanyTaxDocuments($company, $year, $quarter, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCompanyTaxDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Return tax documents for this company ID | [optional] |
| **year** | **int**| Return tax documents for this year (must be greater than or equal to &#x60;2019&#x60;) | [optional] |
| **quarter** | **string**| Return tax documents for this quarter (accepted values are &#x60;q1&#x60;, &#x60;q2&#x60;, &#x60;q3&#x60;, or &#x60;q4&#x60;) | [optional] |
| **limit** | **int**| Number of tax documents returned per page | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListCompanyTaxDocuments200Response**](../Model/ListCompanyTaxDocuments200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyTaxElections()`

```php
listCompanyTaxElections($company, $tax, $as_of, $exemptible, $jurisdiction): \OpenAPI\Client\Model\ListCompanyTaxElections200Response
```

List company tax elections



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Unique ID for the company.
$tax = 'tax_example'; // string | Unique ID for the tax.
$as_of = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Used to list tax elections applicable as of the supplied date. Defaults to today.
$exemptible = True; // bool | Used to filter tax elections to exemptible taxes.
$jurisdiction = 'jurisdiction_example'; // string | Used to filter tax elections by tax jurisdiction.

try {
    $result = $apiInstance->listCompanyTaxElections($company, $tax, $as_of, $exemptible, $jurisdiction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCompanyTaxElections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Unique ID for the company. | [optional] |
| **tax** | **string**| Unique ID for the tax. | [optional] |
| **as_of** | **\DateTime**| Used to list tax elections applicable as of the supplied date. Defaults to today. | [optional] |
| **exemptible** | **bool**| Used to filter tax elections to exemptible taxes. | [optional] |
| **jurisdiction** | **string**| Used to filter tax elections by tax jurisdiction. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListCompanyTaxElections200Response**](../Model/ListCompanyTaxElections200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyTaxParameterSettings()`

```php
listCompanyTaxParameterSettings($company_id, $as_of, $jurisdiction)
```

List a company's tax parameter settings

Get a paginated list of a company’s tax parameters details which include a list of effective dated values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | ID of the company used to list the applicable tax parameter details.
$as_of = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Used to show the list of tax parameters with the list of effective dated details.
$jurisdiction = 'jurisdiction_example'; // string | Used to further filter down the list of the company’s tax

try {
    $apiInstance->listCompanyTaxParameterSettings($company_id, $as_of, $jurisdiction);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCompanyTaxParameterSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| ID of the company used to list the applicable tax parameter details. | |
| **as_of** | **\DateTime**| Used to show the list of tax parameters with the list of effective dated details. | [optional] |
| **jurisdiction** | **string**| Used to further filter down the list of the company’s tax | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listCompanyTaxParameters()`

```php
listCompanyTaxParameters($company_id, $as_of, $jurisdiction)
```

List a company's tax parameters

Get a paginated list of a company’s tax parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | ID of the company used to list the applicable tax parameters.
$as_of = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Used to list tax parameters applicable as of the supplied date.
$jurisdiction = 'jurisdiction_example'; // string | Used to further filter down the list of the company’s tax parameters to specific jurisdictions.

try {
    $apiInstance->listCompanyTaxParameters($company_id, $as_of, $jurisdiction);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listCompanyTaxParameters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| ID of the company used to list the applicable tax parameters. | |
| **as_of** | **\DateTime**| Used to list tax parameters applicable as of the supplied date. | [optional] |
| **jurisdiction** | **string**| Used to further filter down the list of the company’s tax parameters to specific jurisdictions. | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContractorPayments()`

```php
listContractorPayments($contractor, $payroll, $limit, $status)
```

List contractor payments

Returns a list of all payments for the specified contractor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractor = 'contractor_example'; // string | ID of the contractor to return payments for
$payroll = 'payroll_example'; // string | Return payments for the payroll specified by this payroll ID.
$limit = 56; // int | Number of payments returned per page
$status = 'status_example'; // string | Filters to only show payments for payrolls with the specified status. If multiple `status` params are provided, payments with any of the statuses will be returned. Accepted values are `pending`, `processing`, `failed`, or `paid`.

try {
    $apiInstance->listContractorPayments($contractor, $payroll, $limit, $status);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listContractorPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contractor** | **string**| ID of the contractor to return payments for | |
| **payroll** | **string**| Return payments for the payroll specified by this payroll ID. | [optional] |
| **limit** | **int**| Number of payments returned per page | [optional] |
| **status** | **string**| Filters to only show payments for payrolls with the specified status. If multiple &#x60;status&#x60; params are provided, payments with any of the statuses will be returned. Accepted values are &#x60;pending&#x60;, &#x60;processing&#x60;, &#x60;failed&#x60;, or &#x60;paid&#x60;. | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContractorPayments1()`

```php
listContractorPayments1($payroll, $contractor): object
```

List contractor payments



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll = 'payroll_example'; // string | Return payroll_items for this [payroll](ref:payroll) ID.
$contractor = 'contractor_example'; // string | List contractor_payments for this contractor ID.

try {
    $result = $apiInstance->listContractorPayments1($payroll, $contractor);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listContractorPayments1: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll** | **string**| Return payroll_items for this [payroll](ref:payroll) ID. | [optional] |
| **contractor** | **string**| List contractor_payments for this contractor ID. | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContractorTaxDocuments()`

```php
listContractorTaxDocuments($contractor, $company, $year, $limit): object
```

List contractor tax documents

Returns contractor tax documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractor = 'contractor_example'; // string | Return documents for this contractor ID.
$company = 'company_example'; // string | Return documents for this company ID. Results will include tax documents for all contractors who perform work for this company.
$year = 56; // int | Return documents for this year (must be greater than or equal to `2019`)
$limit = 56; // int | Number of tax documents returned per page

try {
    $result = $apiInstance->listContractorTaxDocuments($contractor, $company, $year, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listContractorTaxDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contractor** | **string**| Return documents for this contractor ID. | [optional] |
| **company** | **string**| Return documents for this company ID. Results will include tax documents for all contractors who perform work for this company. | [optional] |
| **year** | **int**| Return documents for this year (must be greater than or equal to &#x60;2019&#x60;) | [optional] |
| **limit** | **int**| Number of tax documents returned per page | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listContractors()`

```php
listContractors($company, $limit): object
```

List contractors

Returns a list of all contractors.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Return contractors for the company specified by this company ID.
$limit = 56; // int | Number of contractors returned per page

try {
    $result = $apiInstance->listContractors($company, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listContractors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Return contractors for the company specified by this company ID. | [optional] |
| **limit** | **int**| Number of contractors returned per page | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEarningCodes()`

```php
listEarningCodes($company, $limit): object
```

List earning codes

Returns a list of earning codes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string
$limit = 56; // int | Number of earning codes returned per page

try {
    $result = $apiInstance->listEarningCodes($company, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEarningCodes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**|  | [optional] |
| **limit** | **int**| Number of earning codes returned per page | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEarningRates()`

```php
listEarningRates($active, $employee, $limit): object
```

List earning rates

Returns a list of earning rates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$active = True; // bool
$employee = 'employee_example'; // string
$limit = 56; // int | Number of earning rates returned per page

try {
    $result = $apiInstance->listEarningRates($active, $employee, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEarningRates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **active** | **bool**|  | [optional] |
| **employee** | **string**|  | [optional] |
| **limit** | **int**| Number of earning rates returned per page | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmployeeForms()`

```php
listEmployeeForms($employee)
```

List employee forms

Returns a list of employee forms for the specified employee.  **Note: **Employee withholdings are normally configured when employees go through [Check Onboard](https://docs.checkhq.com/docs/check-onboard). You should only use the Employee Forms API if you're building a custom integration for employee onboarding.  Consult the [Custom Employee Onboarding Guide](https://docs.checkhq.com/docs/employee-onboarding-api#3-employee-withholdings-api) for more information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | Return forms associated with this employee ID

try {
    $apiInstance->listEmployeeForms($employee);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEmployeeForms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| Return forms associated with this employee ID | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmployeeJurisdictions()`

```php
listEmployeeJurisdictions($employee_id)
```

List an employee's jurisdictions

Get a list of all of the available tax parameter jurisdictions of an employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_id = 'employee_id_example'; // string | ID of the employee used to get the applicable tax param object details.

try {
    $apiInstance->listEmployeeJurisdictions($employee_id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEmployeeJurisdictions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee_id** | **string**| ID of the employee used to get the applicable tax param object details. | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmployeeTaxDocuments()`

```php
listEmployeeTaxDocuments($employee, $company, $year, $limit)
```

List employee tax documents

Returns a list of employee tax documents.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | Return tax documents for this employee ID
$company = 'company_example'; // string | Return tax documents for this company ID
$year = 56; // int | List documents for this year (must be greater than or equal to `2019`)
$limit = 56; // int | Number of tax documents returned per page

try {
    $apiInstance->listEmployeeTaxDocuments($employee, $company, $year, $limit);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEmployeeTaxDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| Return tax documents for this employee ID | [optional] |
| **company** | **string**| Return tax documents for this company ID | [optional] |
| **year** | **int**| List documents for this year (must be greater than or equal to &#x60;2019&#x60;) | [optional] |
| **limit** | **int**| Number of tax documents returned per page | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmployeeTaxElections()`

```php
listEmployeeTaxElections($company, $employee, $tax, $as_of, $exemptible, $jurisdiction): \OpenAPI\Client\Model\ListEmployeeTaxElections200Response
```

List employee tax elections



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Unique ID for the company.
$employee = 'employee_example'; // string | Unique ID for the employee.
$tax = 'tax_example'; // string | Unique ID for the tax.
$as_of = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Used to list tax elections applicable as of the supplied date. Defaults to today.
$exemptible = True; // bool | Used to filter tax elections to exemptible taxes.
$jurisdiction = 'jurisdiction_example'; // string | Used to filter tax elections by tax jurisdiction.

try {
    $result = $apiInstance->listEmployeeTaxElections($company, $employee, $tax, $as_of, $exemptible, $jurisdiction);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEmployeeTaxElections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Unique ID for the company. | [optional] |
| **employee** | **string**| Unique ID for the employee. | [optional] |
| **tax** | **string**| Unique ID for the tax. | [optional] |
| **as_of** | **\DateTime**| Used to list tax elections applicable as of the supplied date. Defaults to today. | [optional] |
| **exemptible** | **bool**| Used to filter tax elections to exemptible taxes. | [optional] |
| **jurisdiction** | **string**| Used to filter tax elections by tax jurisdiction. | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListEmployeeTaxElections200Response**](../Model/ListEmployeeTaxElections200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmployeeTaxParameterSettings()`

```php
listEmployeeTaxParameterSettings($employee_id, $as_of, $jurisdiction)
```

List an employee's tax parameter settings

Get a paginated list of an employee’s tax parameter details which include a list of effective dated values

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_id = 'employee_id_example'; // string | ID of the employee used to list the applicable tax parameter details.
$as_of = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Used to show the list of tax parameter with the list of effective dated details.
$jurisdiction = 'jurisdiction_example'; // string | Used to further filter down the list of the employee’s tax parameter details to specific jurisdictions.

try {
    $apiInstance->listEmployeeTaxParameterSettings($employee_id, $as_of, $jurisdiction);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEmployeeTaxParameterSettings: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee_id** | **string**| ID of the employee used to list the applicable tax parameter details. | |
| **as_of** | **\DateTime**| Used to show the list of tax parameter with the list of effective dated details. | [optional] |
| **jurisdiction** | **string**| Used to further filter down the list of the employee’s tax parameter details to specific jurisdictions. | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmployees()`

```php
listEmployees($company, $limit, $workplace)
```

List employees

Returns a list of all employees. Employees will be returned from the list endpoint in alphabetical order, sorted by last name, first name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Return employees for this company ID.
$limit = 56; // int | Number of employees returned per page
$workplace = 'workplace_example'; // string | Return employees who work at these workplaces (can be comma-separated list of workplace IDs)

try {
    $apiInstance->listEmployees($company, $limit, $workplace);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEmployees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Return employees for this company ID. | [optional] |
| **limit** | **int**| Number of employees returned per page | [optional] |
| **workplace** | **string**| Return employees who work at these workplaces (can be comma-separated list of workplace IDs) | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listEmployeesTaxParameters()`

```php
listEmployeesTaxParameters($employee_id, $as_of, $jurisdiction)
```

List an employee's tax parameters

Get a paginated list of an employee’s tax parameters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_id = 'employee_id_example'; // string | ID of the employee used to list the applicable tax parameter.
$as_of = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Used to list tax parameters applicable as of the supplied date.
$jurisdiction = 'jurisdiction_example'; // string | Used to further filter down the list of the employee’s tax parameters to specific jurisdictions.

try {
    $apiInstance->listEmployeesTaxParameters($employee_id, $as_of, $jurisdiction);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listEmployeesTaxParameters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee_id** | **string**| ID of the employee used to list the applicable tax parameter. | |
| **as_of** | **\DateTime**| Used to list tax parameters applicable as of the supplied date. | [optional] |
| **jurisdiction** | **string**| Used to further filter down the list of the employee’s tax parameters to specific jurisdictions. | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listFederalEinVerifications()`

```php
listFederalEinVerifications($company): \OpenAPI\Client\Model\ListFederalEinVerifications200Response
```

List Federal EIN Verifications

Returns a list of Federal EIN Verifications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company

try {
    $result = $apiInstance->listFederalEinVerifications($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listFederalEinVerifications: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company | |

### Return type

[**\OpenAPI\Client\Model\ListFederalEinVerifications200Response**](../Model/ListFederalEinVerifications200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listForms()`

```php
listForms($state, $lang)
```

List forms



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$state = 'state_example'; // string | Filter for forms that apply to the provided state. Must be a two-digit state abbreviation.
$lang = 'lang_example'; // string | Prefer returning forms in the provided ISO 639-1 language code. Fall back to English forms if preferred language form does not exist.

try {
    $apiInstance->listForms($state, $lang);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listForms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **state** | **string**| Filter for forms that apply to the provided state. Must be a two-digit state abbreviation. | [optional] |
| **lang** | **string**| Prefer returning forms in the provided ISO 639-1 language code. Fall back to English forms if preferred language form does not exist. | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listNetPaySplits()`

```php
listNetPaySplits($employee, $contractor, $limit): \OpenAPI\Client\Model\ListNetPaySplits200ResponseInner[]
```

List net pay splits

Returns a list of net pay splits.  One of `employee` or `contractor` is required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | ID of the employee whose net pay splits should be listed
$contractor = 'contractor_example'; // string | ID of the contractor whose net pay split should be listed
$limit = 56; // int | Number of net pay splits returned per page

try {
    $result = $apiInstance->listNetPaySplits($employee, $contractor, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listNetPaySplits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| ID of the employee whose net pay splits should be listed | [optional] |
| **contractor** | **string**| ID of the contractor whose net pay split should be listed | [optional] |
| **limit** | **int**| Number of net pay splits returned per page | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListNetPaySplits200ResponseInner[]**](../Model/ListNetPaySplits200ResponseInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaySchedules()`

```php
listPaySchedules($company, $limit): \OpenAPI\Client\Model\GetAPaySchedule200Response[]
```

List pay schedules

Returns a list of pay schedules.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string
$limit = 56; // int | Number of pay schedules returned per page

try {
    $result = $apiInstance->listPaySchedules($company, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listPaySchedules: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**|  | [optional] |
| **limit** | **int**| Number of pay schedules returned per page | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetAPaySchedule200Response[]**](../Model/GetAPaySchedule200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPayments()`

```php
listPayments($payroll, $payroll_item, $contractor_payment, $company, $direction, $amount_min, $amount_max, $type, $completion_date_after, $completion_date_before, $limit): \OpenAPI\Client\Model\ListPayments200Response
```

List payments



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll = 'payroll_example'; // string | Return all payments, including debits and credits, related to a particular payroll ID
$payroll_item = 'payroll_item_example'; // string | Return payments related to a particular parent payroll_item ID
$contractor_payment = 'contractor_payment_example'; // string | Return payments related to a particular parent contractor payment ID
$company = 'company_example'; // string | Return payments related to a particular company ID
$direction = 'direction_example'; // string | Return payments with direction
$amount_min = 'amount_min_example'; // string | Return payments where amount ≥ an amount
$amount_max = 'amount_max_example'; // string | Return payments where amount ≤ an amount
$type = 'type_example'; // string | Return payments with type
$completion_date_after = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return payments whose expected completion date is on or after the specified date
$completion_date_before = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Return payments whose expected completion date is on or before the specified date
$limit = 56; // int | Number of payments returned per page

try {
    $result = $apiInstance->listPayments($payroll, $payroll_item, $contractor_payment, $company, $direction, $amount_min, $amount_max, $type, $completion_date_after, $completion_date_before, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll** | **string**| Return all payments, including debits and credits, related to a particular payroll ID | [optional] |
| **payroll_item** | **string**| Return payments related to a particular parent payroll_item ID | [optional] |
| **contractor_payment** | **string**| Return payments related to a particular parent contractor payment ID | [optional] |
| **company** | **string**| Return payments related to a particular company ID | [optional] |
| **direction** | **string**| Return payments with direction | [optional] |
| **amount_min** | **string**| Return payments where amount ≥ an amount | [optional] |
| **amount_max** | **string**| Return payments where amount ≤ an amount | [optional] |
| **type** | **string**| Return payments with type | [optional] |
| **completion_date_after** | **\DateTime**| Return payments whose expected completion date is on or after the specified date | [optional] |
| **completion_date_before** | **\DateTime**| Return payments whose expected completion date is on or before the specified date | [optional] |
| **limit** | **int**| Number of payments returned per page | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListPayments200Response**](../Model/ListPayments200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPaymentsCopy()`

```php
listPaymentsCopy($company, $year, $period, $limit): \OpenAPI\Client\Model\ListPaymentsCopy200Response
```

List tax filings

Get a list of tax filings. Please note that in its current iteration, only `rejected` filings are returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Filter tax filings related to a particular company ID.
$year = 56; // int | Filter tax filings within a given year
$period = 'period_example'; // string | Filter tax filings within a particular period. One of:  `annual`, `q1`, `q2`,`q3`, `q4`, `january`, `february`, `march`, `april`, `may`, `june`, `july`, `august` , `september`, `october` , or `december`.
$limit = 56; // int | Number of tax filings returned per page

try {
    $result = $apiInstance->listPaymentsCopy($company, $year, $period, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listPaymentsCopy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Filter tax filings related to a particular company ID. | [optional] |
| **year** | **int**| Filter tax filings within a given year | [optional] |
| **period** | **string**| Filter tax filings within a particular period. One of:  &#x60;annual&#x60;, &#x60;q1&#x60;, &#x60;q2&#x60;,&#x60;q3&#x60;, &#x60;q4&#x60;, &#x60;january&#x60;, &#x60;february&#x60;, &#x60;march&#x60;, &#x60;april&#x60;, &#x60;may&#x60;, &#x60;june&#x60;, &#x60;july&#x60;, &#x60;august&#x60; , &#x60;september&#x60;, &#x60;october&#x60; , or &#x60;december&#x60;. | [optional] |
| **limit** | **int**| Number of tax filings returned per page | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListPaymentsCopy200Response**](../Model/ListPaymentsCopy200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPayrollItems()`

```php
listPayrollItems($payroll, $employee)
```

List payroll items

Return a list of payroll items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll = 'payroll_example'; // string | Return payroll_items for this [payroll](ref:payroll) ID.
$employee = 'employee_example'; // string | Return payroll_items for this employee ID

try {
    $apiInstance->listPayrollItems($payroll, $employee);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listPayrollItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll** | **string**| Return payroll_items for this [payroll](ref:payroll) ID. | [optional] |
| **employee** | **string**| Return payroll_items for this employee ID | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPayrolls()`

```php
listPayrolls($company, $type, $managed, $limit, $payday_after, $payday_before, $status): \OpenAPI\Client\Model\ListPayrolls200ResponseInner[]
```

List payrolls

Returns a list of payrolls.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Return payrolls for this [company](ref:company) ID.
$type = 'type_example'; // string | Return payrolls of this type.<br><br>One of `regular` or `off_cycle`.
$managed = True; // bool | Return payrolls of this `managed` status.
$limit = 56; // int | Number of payrolls returned per page
$payday_after = 'payday_after_example'; // string | Return payrolls whose payday is on or after the provided date (format: YYYY-MM-DD)
$payday_before = 'payday_before_example'; // string | Return payrolls whose payday is on or before the provided date (format: YYYY-MM-DD)
$status = 'status_example'; // string | Return payrolls in a given status

try {
    $result = $apiInstance->listPayrolls($company, $type, $managed, $limit, $payday_after, $payday_before, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listPayrolls: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Return payrolls for this [company](ref:company) ID. | [optional] |
| **type** | **string**| Return payrolls of this type.&lt;br&gt;&lt;br&gt;One of &#x60;regular&#x60; or &#x60;off_cycle&#x60;. | [optional] |
| **managed** | **bool**| Return payrolls of this &#x60;managed&#x60; status. | [optional] |
| **limit** | **int**| Number of payrolls returned per page | [optional] |
| **payday_after** | **string**| Return payrolls whose payday is on or after the provided date (format: YYYY-MM-DD) | [optional] |
| **payday_before** | **string**| Return payrolls whose payday is on or before the provided date (format: YYYY-MM-DD) | [optional] |
| **status** | **string**| Return payrolls in a given status | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListPayrolls200ResponseInner[]**](../Model/ListPayrolls200ResponseInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listPostTaxDeductions()`

```php
listPostTaxDeductions($employee, $company, $limit, $include_external): object
```

List post-tax deductions

Lists post-tax deductions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | Return post-tax deductions for this employee ID.
$company = 'company_example'; // string | Return post-tax deductions for all employees of this company ID.
$limit = 56; // int | Number of post-tax deductions returned per page. Note: this does not override standard pagination.
$include_external = True; // bool | Flag to indicate if to additionally expose external deductions in the list response. Defaults to false if not included

try {
    $result = $apiInstance->listPostTaxDeductions($employee, $company, $limit, $include_external);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listPostTaxDeductions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| Return post-tax deductions for this employee ID. | [optional] |
| **company** | **string**| Return post-tax deductions for all employees of this company ID. | [optional] |
| **limit** | **int**| Number of post-tax deductions returned per page. Note: this does not override standard pagination. | [optional] |
| **include_external** | **bool**| Flag to indicate if to additionally expose external deductions in the list response. Defaults to false if not included | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listRequirements()`

```php
listRequirements($category, $requirement, $status, $company): \OpenAPI\Client\Model\ListRequirements200Response
```

List requirements

Get a paginated list of all requirements for a company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$category = 'company_provided_documents'; // string | Filter by requirement categories
$requirement = 'federal_ein_verification'; // string | Filter by requirement names
$status = 'not_provided'; // string | Filter by requirement statuses
$company = 'Company ID'; // string | Filter by companies

try {
    $result = $apiInstance->listRequirements($category, $requirement, $status, $company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listRequirements: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **category** | **string**| Filter by requirement categories | [optional] [default to &#39;company_provided_documents&#39;] |
| **requirement** | **string**| Filter by requirement names | [optional] [default to &#39;federal_ein_verification&#39;] |
| **status** | **string**| Filter by requirement statuses | [optional] [default to &#39;not_provided&#39;] |
| **company** | **string**| Filter by companies | [optional] [default to &#39;Company ID&#39;] |

### Return type

[**\OpenAPI\Client\Model\ListRequirements200Response**](../Model/ListRequirements200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listSetupDocuments()`

```php
listSetupDocuments($company): object
```

List setup documents

List all setup documents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Company ID

try {
    $result = $apiInstance->listSetupDocuments($company);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listSetupDocuments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Company ID | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listTaxDeposits()`

```php
listTaxDeposits($company, $payroll_payday_start, $payroll_payday_end, $accept)
```

List tax deposits

Returns a list of tax deposits for a company. See the [Tax Deposits guide](https://docs.checkhq.com/docs/tax-deposits) for more information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company
$payroll_payday_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter for tax deposits with payroll paydays on or after this day.
$payroll_payday_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter for tax deposits with payroll paydays before or on this day.
$accept = 'application/json'; // string | Provide `text/csv` for a CSV response.

try {
    $apiInstance->listTaxDeposits($company, $payroll_payday_start, $payroll_payday_end, $accept);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listTaxDeposits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company | |
| **payroll_payday_start** | **\DateTime**| Filter for tax deposits with payroll paydays on or after this day. | [optional] |
| **payroll_payday_end** | **\DateTime**| Filter for tax deposits with payroll paydays before or on this day. | [optional] |
| **accept** | **string**| Provide &#x60;text/csv&#x60; for a CSV response. | [optional] [default to &#39;application/json&#39;] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUsageRecords()`

```php
listUsageRecords($company, $category, $resource_type, $period_start, $period_end): \OpenAPI\Client\Model\ListUsageRecords200Response
```

List usage records



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string
$category = 'category_example'; // string
$resource_type = 'resource_type_example'; // string
$period_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$period_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->listUsageRecords($company, $category, $resource_type, $period_start, $period_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listUsageRecords: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**|  | [optional] |
| **category** | **string**|  | [optional] |
| **resource_type** | **string**|  | [optional] |
| **period_start** | **\DateTime**|  | [optional] |
| **period_end** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListUsageRecords200Response**](../Model/ListUsageRecords200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listUsageSummaries()`

```php
listUsageSummaries($company, $category, $period_start, $period_end): \OpenAPI\Client\Model\ListUsageSummaries200Response
```

List usage summaries



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string
$category = 'category_example'; // string
$period_start = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$period_end = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime

try {
    $result = $apiInstance->listUsageSummaries($company, $category, $period_start, $period_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listUsageSummaries: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**|  | [optional] |
| **category** | **string**|  | [optional] |
| **period_start** | **\DateTime**|  | [optional] |
| **period_end** | **\DateTime**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListUsageSummaries200Response**](../Model/ListUsageSummaries200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listWorkplaces()`

```php
listWorkplaces($company, $limit): \OpenAPI\Client\Model\ListWorkplaces200ResponseInner[]
```

List workplaces

Returns a list of workplaces.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | Return workplaces for this company ID.
$limit = 56; // int | Number of workplaces returned per page

try {
    $result = $apiInstance->listWorkplaces($company, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->listWorkplaces: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| Return workplaces for this company ID. | [optional] |
| **limit** | **int**| Number of workplaces returned per page | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListWorkplaces200ResponseInner[]**](../Model/ListWorkplaces200ResponseInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `pingAWebhookConfig()`

```php
pingAWebhookConfig($webhook_config): object
```

Ping a webhook config

Sends a test webhook event to a webhook config. Be sure your receiving webhook config URL responds with a status of 200 for ping events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_config = 'webhook_config_example'; // string

try {
    $result = $apiInstance->pingAWebhookConfig($webhook_config);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->pingAWebhookConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_config** | **string**|  | |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previewPayroll()`

```php
previewPayroll($payroll, $accept, $item, $include_contractors): \OpenAPI\Client\Model\GetPayroll200Response
```

Preview a payroll

Returns a preview of an approved version of the input payroll

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll = 'payroll_example'; // string | ID of the payroll to preview.
$accept = 'accept_example'; // string | Either `application/json` or `text/csv`
$item = 'item_example'; // string | ID of a payroll item to preview instead of the whole payroll. Multiple of this param may be passed to preview multiple items. *Please note that concurrent requests to this endpoint for the same payroll will complete sequentially.*
$include_contractors = 'include_contractors_example'; // string

try {
    $result = $apiInstance->previewPayroll($payroll, $accept, $item, $include_contractors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->previewPayroll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll** | **string**| ID of the payroll to preview. | |
| **accept** | **string**| Either &#x60;application/json&#x60; or &#x60;text/csv&#x60; | [optional] |
| **item** | **string**| ID of a payroll item to preview instead of the whole payroll. Multiple of this param may be passed to preview multiple items. *Please note that concurrent requests to this endpoint for the same payroll will complete sequentially.* | [optional] |
| **include_contractors** | **string**|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetPayroll200Response**](../Model/GetPayroll200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `previousPayrollProviderAccess()`

```php
previousPayrollProviderAccess($company, $generate_onboard_link_request): \OpenAPI\Client\Model\GenerateOnboardLink1200Response
```

Company Previous Payroll Provider Access

Generates a Previous Payroll Provider Access component used to gain access to a company's previous provider for migration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which an onboard link will be generated
$generate_onboard_link_request = new \OpenAPI\Client\Model\GenerateOnboardLinkRequest(); // \OpenAPI\Client\Model\GenerateOnboardLinkRequest

try {
    $result = $apiInstance->previousPayrollProviderAccess($company, $generate_onboard_link_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->previousPayrollProviderAccess: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which an onboard link will be generated | |
| **generate_onboard_link_request** | [**\OpenAPI\Client\Model\GenerateOnboardLinkRequest**](../Model/GenerateOnboardLinkRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GenerateOnboardLink1200Response**](../Model/GenerateOnboardLink1200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundAPayment()`

```php
refundAPayment($payment)
```

Refund a payment



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment = 'payment_example'; // string | ID of payment desired for refund

try {
    $apiInstance->refundAPayment($payment);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->refundAPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment** | **string**| ID of payment desired for refund | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `renderAForm()`

```php
renderAForm($form, $accept, $render_a_form_request): object
```

Render a form



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$form = 'form_example'; // string
$accept = 'accept_example'; // string | Either `application/pdf` or `application/json`
$render_a_form_request = new \OpenAPI\Client\Model\RenderAFormRequest(); // \OpenAPI\Client\Model\RenderAFormRequest

try {
    $result = $apiInstance->renderAForm($form, $accept, $render_a_form_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->renderAForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **form** | **string**|  | |
| **accept** | **string**| Either &#x60;application/pdf&#x60; or &#x60;application/json&#x60; | [optional] |
| **render_a_form_request** | [**\OpenAPI\Client\Model\RenderAFormRequest**](../Model/RenderAFormRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reopenAPendingPayroll()`

```php
reopenAPendingPayroll($payroll)
```

Reopen an external payroll

Moves an approved external payroll's status to draft, allowing you to make further edits to the payroll or its items.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll = 'payroll_example'; // string | ID of the payroll to reopen

try {
    $apiInstance->reopenAPendingPayroll($payroll);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reopenAPendingPayroll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll** | **string**| ID of the payroll to reopen | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reopenPayroll()`

```php
reopenPayroll($payroll)
```

Reopen a pending payroll

Moves a pending payroll's status to draft, allowing you to make further edits to the payroll or its items.   **Note: **To pay someone by direct deposit on the payroll's payday, the payroll, whether new or reopened, must be approved by 5 PM PT of the approval deadline. Late payrolls or requests for adjustment after this deadline will require manual escalation with Check.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll = 'payroll_example'; // string | ID of the payroll to reopen

try {
    $apiInstance->reopenPayroll($payroll);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->reopenPayroll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll** | **string**| ID of the payroll to reopen | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `requestEmbeddedSetup()`

```php
requestEmbeddedSetup(): object
```

Request Embedded Setup

Request that Check manage setting up all of a Company's data necessary to begin running payroll.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->requestEmbeddedSetup();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->requestEmbeddedSetup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryAPayment()`

```php
retryAPayment($payment, $retry_a_payment_request): \OpenAPI\Client\Model\RetryAPayment200Response
```

Retry a payment



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment = 'payment_example'; // string | ID of the payment desired for retry.
$retry_a_payment_request = new \OpenAPI\Client\Model\RetryAPaymentRequest(); // \OpenAPI\Client\Model\RetryAPaymentRequest

try {
    $result = $apiInstance->retryAPayment($payment, $retry_a_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->retryAPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment** | **string**| ID of the payment desired for retry. | |
| **retry_a_payment_request** | [**\OpenAPI\Client\Model\RetryAPaymentRequest**](../Model/RetryAPaymentRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\RetryAPayment200Response**](../Model/RetryAPayment200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryWebhookEventsInSandbox()`

```php
retryWebhookEventsInSandbox()
```

Retry webhook event in sandbox

In our sandbox environment, you can retry singular webhooks to aid in development.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->retryWebhookEventsInSandbox();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->retryWebhookEventsInSandbox: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `runPayroll()`

```php
runPayroll($company, $payroll): \OpenAPI\Client\Model\EmployeePaystub200Response
```

Run Payroll

Run payroll using our white-labeled Run Payroll Component. Set up worker pay, add earnings, and preview payrolls all within one Component. In order to run payroll with the Component, the company must have:<li>At least one employee or contractor associated with it</li><li>At least one pay schedule associated with it (<a href=\"https://docs.checkhq.com/reference/create-a-pay-schedule\">Pay Schedule API</a>)</li><li>Company Onboarding status in \"completed\" state</li><img style=\"margin-top: 20px; border-radius: 10px;  border: 1px solid #E2E8F0;\"  src=\"https://public-component-assets.s3.amazonaws.com/run_payroll_v2.svg\" />Learn how to embed Components in our <a target=\"_blank\" href=\"https://docs.checkhq.com/docs/embedding-a-component\">guide</a>.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company for which a component link will be generated
$payroll = 'payroll_example'; // string | ID of the payroll. This launches the component directly in edit view. In order to do this, the payroll needs to be formatted in a way the Run Payroll Component expects with a single earning rate tied to hourly or salaried earnings in the payroll item.

try {
    $result = $apiInstance->runPayroll($company, $payroll);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->runPayroll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company for which a component link will be generated | |
| **payroll** | **string**| ID of the payroll. This launches the component directly in edit view. In order to do this, the payroll needs to be formatted in a way the Run Payroll Component expects with a single earning rate tied to hourly or salaried earnings in the payroll item. | [optional] |

### Return type

[**\OpenAPI\Client\Model\EmployeePaystub200Response**](../Model/EmployeePaystub200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `startImplementation()`

```php
startImplementation($company)
```

Start implementation

Submit a company for implementation. This will move the implementation status of a company from `needs_attention` to `in_review` or `complete`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company to start implementation

try {
    $apiInstance->startImplementation($company);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->startImplementation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company to start implementation | |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `submitAnEmployeeForm()`

```php
submitAnEmployeeForm($employee, $form, $submit_an_employee_form_request)
```

Submit an employee form

Submits an employee form.  **Note: **Employee withholdings are normally configured when employees go through [Check Onboard](https://docs.checkhq.com/docs/check-onboard). Use the Employee Forms API only if you're building a custom integration for employee onboarding.  Consult the [Custom Employee Onboarding Guide](https://docs.checkhq.com/docs/employee-onboarding-api#3-employee-withholdings-api) for more information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | Submit a form to this employee ID
$form = 'form_example'; // string | ID of the form to submit
$submit_an_employee_form_request = new \OpenAPI\Client\Model\SubmitAnEmployeeFormRequest(); // \OpenAPI\Client\Model\SubmitAnEmployeeFormRequest

try {
    $apiInstance->submitAnEmployeeForm($employee, $form, $submit_an_employee_form_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->submitAnEmployeeForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| Submit a form to this employee ID | |
| **form** | **string**| ID of the form to submit | |
| **submit_an_employee_form_request** | [**\OpenAPI\Client\Model\SubmitAnEmployeeFormRequest**](../Model/SubmitAnEmployeeFormRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateABankAccount()`

```php
updateABankAccount($bank_account, $update_a_bank_account_request)
```

Update a bank account

Updates a bank account.  **Note: **Only “raw” bank accounts may be updated with this call. Plaid processor token-based bank accounts may not be updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bank_account = 'bank_account_example'; // string | ID of the bank account
$update_a_bank_account_request = new \OpenAPI\Client\Model\UpdateABankAccountRequest(); // \OpenAPI\Client\Model\UpdateABankAccountRequest

try {
    $apiInstance->updateABankAccount($bank_account, $update_a_bank_account_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateABankAccount: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bank_account** | **string**| ID of the bank account | |
| **update_a_bank_account_request** | [**\OpenAPI\Client\Model\UpdateABankAccountRequest**](../Model/UpdateABankAccountRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateACompany()`

```php
updateACompany($company, $update_a_company_request): object
```

Update a company

Updates the specified company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company = 'company_example'; // string | ID of the company to update
$update_a_company_request = new \OpenAPI\Client\Model\UpdateACompanyRequest(); // \OpenAPI\Client\Model\UpdateACompanyRequest

try {
    $result = $apiInstance->updateACompany($company, $update_a_company_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateACompany: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company** | **string**| ID of the company to update | |
| **update_a_company_request** | [**\OpenAPI\Client\Model\UpdateACompanyRequest**](../Model/UpdateACompanyRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateACompanyBenefit()`

```php
updateACompanyBenefit($company_benefit, $update_a_company_benefit_request): object
```

Update a company benefit

Updates the specified company benefit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_benefit = 'company_benefit_example'; // string | ID of the company benefit to update
$update_a_company_benefit_request = new \OpenAPI\Client\Model\UpdateACompanyBenefitRequest(); // \OpenAPI\Client\Model\UpdateACompanyBenefitRequest

try {
    $result = $apiInstance->updateACompanyBenefit($company_benefit, $update_a_company_benefit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateACompanyBenefit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_benefit** | **string**| ID of the company benefit to update | |
| **update_a_company_benefit_request** | [**\OpenAPI\Client\Model\UpdateACompanyBenefitRequest**](../Model/UpdateACompanyBenefitRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAContractor()`

```php
updateAContractor($contractor, $update_a_contractor_request): object
```

Update a contractor

Updates the specified contractor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractor = 'contractor_example'; // string | ID of the contractor to update
$update_a_contractor_request = new \OpenAPI\Client\Model\UpdateAContractorRequest(); // \OpenAPI\Client\Model\UpdateAContractorRequest

try {
    $result = $apiInstance->updateAContractor($contractor, $update_a_contractor_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAContractor: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contractor** | **string**| ID of the contractor to update | |
| **update_a_contractor_request** | [**\OpenAPI\Client\Model\UpdateAContractorRequest**](../Model/UpdateAContractorRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAContractorPayment()`

```php
updateAContractorPayment($contractor_payment, $update_a_contractor_payment_request): object
```

Update a contractor payment

Updates the specified contractor payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contractor_payment = 'contractor_payment_example'; // string | ID of the contractor payment to update
$update_a_contractor_payment_request = new \OpenAPI\Client\Model\UpdateAContractorPaymentRequest(); // \OpenAPI\Client\Model\UpdateAContractorPaymentRequest

try {
    $result = $apiInstance->updateAContractorPayment($contractor_payment, $update_a_contractor_payment_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAContractorPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contractor_payment** | **string**| ID of the contractor payment to update | |
| **update_a_contractor_payment_request** | [**\OpenAPI\Client\Model\UpdateAContractorPaymentRequest**](../Model/UpdateAContractorPaymentRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAPaySchedule()`

```php
updateAPaySchedule($pay_schedule, $update_a_pay_schedule_request): object
```

Update a pay schedule

Updates the specified pay schedule.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pay_schedule = 'pay_schedule_example'; // string
$update_a_pay_schedule_request = new \OpenAPI\Client\Model\UpdateAPayScheduleRequest(); // \OpenAPI\Client\Model\UpdateAPayScheduleRequest

try {
    $result = $apiInstance->updateAPaySchedule($pay_schedule, $update_a_pay_schedule_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAPaySchedule: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pay_schedule** | **string**|  | |
| **update_a_pay_schedule_request** | [**\OpenAPI\Client\Model\UpdateAPayScheduleRequest**](../Model/UpdateAPayScheduleRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAPayrollItem()`

```php
updateAPayrollItem($payroll_item, $update_a_payroll_item_request)
```

Update a payroll item

Updates the specified payroll item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll_item = 'payroll_item_example'; // string
$update_a_payroll_item_request = new \OpenAPI\Client\Model\UpdateAPayrollItemRequest(); // \OpenAPI\Client\Model\UpdateAPayrollItemRequest

try {
    $apiInstance->updateAPayrollItem($payroll_item, $update_a_payroll_item_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAPayrollItem: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll_item** | **string**|  | |
| **update_a_payroll_item_request** | [**\OpenAPI\Client\Model\UpdateAPayrollItemRequest**](../Model/UpdateAPayrollItemRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAPostTaxDeduction()`

```php
updateAPostTaxDeduction($post_tax_deduction, $update_a_post_tax_deduction_request)
```

Update a post-tax deduction

Updates the specified post-tax deduction.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$post_tax_deduction = 'post_tax_deduction_example'; // string | ID of the post tax deduction to update
$update_a_post_tax_deduction_request = new \OpenAPI\Client\Model\UpdateAPostTaxDeductionRequest(); // \OpenAPI\Client\Model\UpdateAPostTaxDeductionRequest

try {
    $apiInstance->updateAPostTaxDeduction($post_tax_deduction, $update_a_post_tax_deduction_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAPostTaxDeduction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **post_tax_deduction** | **string**| ID of the post tax deduction to update | |
| **update_a_post_tax_deduction_request** | [**\OpenAPI\Client\Model\UpdateAPostTaxDeductionRequest**](../Model/UpdateAPostTaxDeductionRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAWebhookConfig()`

```php
updateAWebhookConfig($webhook_config, $update_a_webhook_config_request)
```

Update a webhook config

Updates the specified webhook config.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_config = 'webhook_config_example'; // string
$update_a_webhook_config_request = new \OpenAPI\Client\Model\UpdateAWebhookConfigRequest(); // \OpenAPI\Client\Model\UpdateAWebhookConfigRequest

try {
    $apiInstance->updateAWebhookConfig($webhook_config, $update_a_webhook_config_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAWebhookConfig: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_config** | **string**|  | |
| **update_a_webhook_config_request** | [**\OpenAPI\Client\Model\UpdateAWebhookConfigRequest**](../Model/UpdateAWebhookConfigRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAWorkplace()`

```php
updateAWorkplace($workplace, $update_a_workplace_request): \OpenAPI\Client\Model\ListWorkplaces200ResponseInner
```

Update a workplace

Updates the specified workplace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workplace = 'workplace_example'; // string
$update_a_workplace_request = new \OpenAPI\Client\Model\UpdateAWorkplaceRequest(); // \OpenAPI\Client\Model\UpdateAWorkplaceRequest

try {
    $result = $apiInstance->updateAWorkplace($workplace, $update_a_workplace_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAWorkplace: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workplace** | **string**|  | |
| **update_a_workplace_request** | [**\OpenAPI\Client\Model\UpdateAWorkplaceRequest**](../Model/UpdateAWorkplaceRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\ListWorkplaces200ResponseInner**](../Model/ListWorkplaces200ResponseInner.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAnEarningCode()`

```php
updateAnEarningCode($earning_code, $update_an_earning_code_request): object
```

Update an earning code



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$earning_code = 'earning_code_example'; // string
$update_an_earning_code_request = new \OpenAPI\Client\Model\UpdateAnEarningCodeRequest(); // \OpenAPI\Client\Model\UpdateAnEarningCodeRequest

try {
    $result = $apiInstance->updateAnEarningCode($earning_code, $update_an_earning_code_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAnEarningCode: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **earning_code** | **string**|  | |
| **update_an_earning_code_request** | [**\OpenAPI\Client\Model\UpdateAnEarningCodeRequest**](../Model/UpdateAnEarningCodeRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAnEarningRate()`

```php
updateAnEarningRate($earning_rate, $update_an_earning_rate_request): object
```

Update an earning rate



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$earning_rate = 'earning_rate_example'; // string
$update_an_earning_rate_request = new \OpenAPI\Client\Model\UpdateAnEarningRateRequest(); // \OpenAPI\Client\Model\UpdateAnEarningRateRequest

try {
    $result = $apiInstance->updateAnEarningRate($earning_rate, $update_an_earning_rate_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAnEarningRate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **earning_rate** | **string**|  | |
| **update_an_earning_rate_request** | [**\OpenAPI\Client\Model\UpdateAnEarningRateRequest**](../Model/UpdateAnEarningRateRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAnEmployee()`

```php
updateAnEmployee($employee, $update_an_employee_request)
```

Update an employee

Updates the specified employee.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | ID of the employee to update
$update_an_employee_request = new \OpenAPI\Client\Model\UpdateAnEmployeeRequest(); // \OpenAPI\Client\Model\UpdateAnEmployeeRequest

try {
    $apiInstance->updateAnEmployee($employee, $update_an_employee_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAnEmployee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| ID of the employee to update | |
| **update_an_employee_request** | [**\OpenAPI\Client\Model\UpdateAnEmployeeRequest**](../Model/UpdateAnEmployeeRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAnEmployeeBenefit()`

```php
updateAnEmployeeBenefit($benefit, $update_an_employee_benefit_request): object
```

Update a benefit

Updates the specified benefit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$benefit = 'benefit_example'; // string | ID of the benefit to update
$update_an_employee_benefit_request = new \OpenAPI\Client\Model\UpdateAnEmployeeBenefitRequest(); // \OpenAPI\Client\Model\UpdateAnEmployeeBenefitRequest

try {
    $result = $apiInstance->updateAnEmployeeBenefit($benefit, $update_an_employee_benefit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAnEmployeeBenefit: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **benefit** | **string**| ID of the benefit to update | |
| **update_an_employee_benefit_request** | [**\OpenAPI\Client\Model\UpdateAnEmployeeBenefitRequest**](../Model/UpdateAnEmployeeBenefitRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAnExternalPayroll()`

```php
updateAnExternalPayroll($payroll, $update_an_external_payroll_request)
```

Update an external payroll

Updates an external payroll.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll = 'payroll_example'; // string
$update_an_external_payroll_request = new \OpenAPI\Client\Model\UpdateAnExternalPayrollRequest(); // \OpenAPI\Client\Model\UpdateAnExternalPayrollRequest

try {
    $apiInstance->updateAnExternalPayroll($payroll, $update_an_external_payroll_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAnExternalPayroll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll** | **string**|  | |
| **update_an_external_payroll_request** | [**\OpenAPI\Client\Model\UpdateAnExternalPayrollRequest**](../Model/UpdateAnExternalPayrollRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCompanyDefinedAttributes()`

```php
updateCompanyDefinedAttributes($employee, $update_company_defined_attributes_request): \OpenAPI\Client\Model\UpdateCompanyDefinedAttributes200Response
```

Update company-defined attributes

Returns an employee's company-defined attributes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | ID of the employee to return
$update_company_defined_attributes_request = {"company_defined_attributes":[{"name":"corporate_officer","value":"true","effective_start":"2022-07-14"}]}; // \OpenAPI\Client\Model\UpdateCompanyDefinedAttributesRequest

try {
    $result = $apiInstance->updateCompanyDefinedAttributes($employee, $update_company_defined_attributes_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCompanyDefinedAttributes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| ID of the employee to return | |
| **update_company_defined_attributes_request** | [**\OpenAPI\Client\Model\UpdateCompanyDefinedAttributesRequest**](../Model/UpdateCompanyDefinedAttributesRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UpdateCompanyDefinedAttributes200Response**](../Model/UpdateCompanyDefinedAttributes200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCompanyTaxElections()`

```php
updateCompanyTaxElections($update_company_tax_elections_request)
```

Update company tax elections



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_company_tax_elections_request = new \OpenAPI\Client\Model\UpdateCompanyTaxElectionsRequest(); // \OpenAPI\Client\Model\UpdateCompanyTaxElectionsRequest

try {
    $apiInstance->updateCompanyTaxElections($update_company_tax_elections_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCompanyTaxElections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_company_tax_elections_request** | [**\OpenAPI\Client\Model\UpdateCompanyTaxElectionsRequest**](../Model/UpdateCompanyTaxElectionsRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCompanyTaxParameters()`

```php
updateCompanyTaxParameters($company_id, $update_company_tax_parameters_request)
```

Update a company's tax parameters

Update a list of one or more tax parameters belonging to the company.  Note: a company's FEIN (federal employer identification number) if Check has already begun reviewing the company, i.e.. its implementation.kyb.status is anything but `not_initiated`. In these cases, should the FEIN need updating, please reach out to support@checkhq.com, or create a new company.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$company_id = 'company_id_example'; // string | ID of the company used to update the applicable tax parameters.
$update_company_tax_parameters_request = [{"id":"spa_123456789","value":"1.25","effective_start":"2021-01-01"}]; // \OpenAPI\Client\Model\UpdateCompanyTaxParametersRequest

try {
    $apiInstance->updateCompanyTaxParameters($company_id, $update_company_tax_parameters_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCompanyTaxParameters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **company_id** | **string**| ID of the company used to update the applicable tax parameters. | |
| **update_company_tax_parameters_request** | [**\OpenAPI\Client\Model\UpdateCompanyTaxParametersRequest**](../Model/UpdateCompanyTaxParametersRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmployeeTaxElections()`

```php
updateEmployeeTaxElections($update_employee_tax_elections_request)
```

Update employee tax elections



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_employee_tax_elections_request = new \OpenAPI\Client\Model\UpdateEmployeeTaxElectionsRequest(); // \OpenAPI\Client\Model\UpdateEmployeeTaxElectionsRequest

try {
    $apiInstance->updateEmployeeTaxElections($update_employee_tax_elections_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateEmployeeTaxElections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_employee_tax_elections_request** | [**\OpenAPI\Client\Model\UpdateEmployeeTaxElectionsRequest**](../Model/UpdateEmployeeTaxElectionsRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateEmployeeTaxParameters()`

```php
updateEmployeeTaxParameters($employee_id, $update_company_tax_parameters_request)
```

Update an employee's tax parameter

Update a list of one or more tax parameters belonging to the employee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee_id = 'employee_id_example'; // string | ID of the employee used to update the applicable tax parameter.
$update_company_tax_parameters_request = [{id=spa_123456789, value=1.25, effective_start=2021-01-01}]; // \OpenAPI\Client\Model\UpdateCompanyTaxParametersRequest

try {
    $apiInstance->updateEmployeeTaxParameters($employee_id, $update_company_tax_parameters_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateEmployeeTaxParameters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee_id** | **string**| ID of the employee used to update the applicable tax parameter. | |
| **update_company_tax_parameters_request** | [**\OpenAPI\Client\Model\UpdateCompanyTaxParametersRequest**](../Model/UpdateCompanyTaxParametersRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePayroll()`

```php
updatePayroll($payroll, $update_payroll_request): object
```

Update a payroll

Updates the specified payroll.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payroll = 'payroll_example'; // string | ID of the payroll to update.
$update_payroll_request = new \OpenAPI\Client\Model\UpdatePayrollRequest(); // \OpenAPI\Client\Model\UpdatePayrollRequest

try {
    $result = $apiInstance->updatePayroll($payroll, $update_payroll_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updatePayroll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payroll** | **string**| ID of the payroll to update. | |
| **update_payroll_request** | [**\OpenAPI\Client\Model\UpdatePayrollRequest**](../Model/UpdatePayrollRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateReciprocityElections()`

```php
updateReciprocityElections($employee, $update_reciprocity_elections_request): \OpenAPI\Client\Model\GetReciprocityElections200Response
```

Update reciprocity elections

Returns an employee's reciprocity elections

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$employee = 'employee_example'; // string | ID of the employee to return
$update_reciprocity_elections_request = new \OpenAPI\Client\Model\UpdateReciprocityElectionsRequest(); // \OpenAPI\Client\Model\UpdateReciprocityElectionsRequest

try {
    $result = $apiInstance->updateReciprocityElections($employee, $update_reciprocity_elections_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateReciprocityElections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **employee** | **string**| ID of the employee to return | |
| **update_reciprocity_elections_request** | [**\OpenAPI\Client\Model\UpdateReciprocityElectionsRequest**](../Model/UpdateReciprocityElectionsRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\GetReciprocityElections200Response**](../Model/GetReciprocityElections200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTheEnrollmentProfile()`

```php
updateTheEnrollmentProfile($update_the_enrollment_profile_request)
```

Update the enrollment profile

Update the existing enrollment profile for the company

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_the_enrollment_profile_request = new \OpenAPI\Client\Model\UpdateTheEnrollmentProfileRequest(); // \OpenAPI\Client\Model\UpdateTheEnrollmentProfileRequest

try {
    $apiInstance->updateTheEnrollmentProfile($update_the_enrollment_profile_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateTheEnrollmentProfile: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **update_the_enrollment_profile_request** | [**\OpenAPI\Client\Model\UpdateTheEnrollmentProfileRequest**](../Model/UpdateTheEnrollmentProfileRequest.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadAFileForACompanyProvidedDocument()`

```php
uploadAFileForACompanyProvidedDocument($document, $content_type, $upload_a_file_for_a_company_provided_document_request): \OpenAPI\Client\Model\UploadAFileForACompanyProvidedDocument200Response
```

Upload a file for a company provided document.

Upload a file to the `upload_url` of the associated company provided document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$document = 'document_example'; // string | ID of the company provided document to associate the uploaded file with.
$content_type = 'application/pdf'; // string
$upload_a_file_for_a_company_provided_document_request = new \OpenAPI\Client\Model\UploadAFileForACompanyProvidedDocumentRequest(); // \OpenAPI\Client\Model\UploadAFileForACompanyProvidedDocumentRequest

try {
    $result = $apiInstance->uploadAFileForACompanyProvidedDocument($document, $content_type, $upload_a_file_for_a_company_provided_document_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->uploadAFileForACompanyProvidedDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **document** | **string**| ID of the company provided document to associate the uploaded file with. | |
| **content_type** | **string**|  | [optional] [default to &#39;application/pdf&#39;] |
| **upload_a_file_for_a_company_provided_document_request** | [**\OpenAPI\Client\Model\UploadAFileForACompanyProvidedDocumentRequest**](../Model/UploadAFileForACompanyProvidedDocumentRequest.md)|  | [optional] |

### Return type

[**\OpenAPI\Client\Model\UploadAFileForACompanyProvidedDocument200Response**](../Model/UploadAFileForACompanyProvidedDocument200Response.md)

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `validateAddress()`

```php
validateAddress($validate_address_request): object
```

Validate address

Validate an address using Check's address validation engine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: sec0
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$validate_address_request = new \OpenAPI\Client\Model\ValidateAddressRequest(); // \OpenAPI\Client\Model\ValidateAddressRequest

try {
    $result = $apiInstance->validateAddress($validate_address_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->validateAddress: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **validate_address_request** | [**\OpenAPI\Client\Model\ValidateAddressRequest**](../Model/ValidateAddressRequest.md)|  | [optional] |

### Return type

**object**

### Authorization

[sec0](../../README.md#sec0)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
