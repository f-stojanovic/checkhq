<?php
/**
 * UpdateTheEnrollmentProfileRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Check API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 2023-04-04
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * UpdateTheEnrollmentProfileRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateTheEnrollmentProfileRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'update_the_enrollment_profile_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'employee_count' => 'int',
        'contractor_count' => 'int',
        'pay_period_amount' => 'int',
        'previous_payroll_provider' => 'string',
        'first_payroll' => 'bool',
        'first_payroll_of_year' => 'bool',
        'user_since' => '\DateTime',
        'expected_first_payday' => '\DateTime',
        'approved_for_payment_processing' => 'bool',
        'existing_payroll_customer_processing_period' => 'string',
        'average_monthly_revenue' => 'float',
        'earliest_known_revenue' => '\DateTime',
        'months_on_previous_payroll_provider' => 'int',
        'social_media' => 'string[]',
        'products_actively_used' => 'string[]',
        'account_contacts' => 'string[]',
        'fraud_score' => 'float',
        'predicted_fraud' => 'bool',
        'paying_user' => 'bool',
        'missed_payments_count' => 'int',
        'payroll_history_access_method' => 'string',
        'implementation_services_submission_comment' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'employee_count' => 'int32',
        'contractor_count' => 'int32',
        'pay_period_amount' => 'int32',
        'previous_payroll_provider' => null,
        'first_payroll' => null,
        'first_payroll_of_year' => null,
        'user_since' => 'date',
        'expected_first_payday' => 'date',
        'approved_for_payment_processing' => null,
        'existing_payroll_customer_processing_period' => null,
        'average_monthly_revenue' => 'float',
        'earliest_known_revenue' => 'date',
        'months_on_previous_payroll_provider' => 'int32',
        'social_media' => null,
        'products_actively_used' => null,
        'account_contacts' => null,
        'fraud_score' => 'float',
        'predicted_fraud' => null,
        'paying_user' => null,
        'missed_payments_count' => 'int32',
        'payroll_history_access_method' => null,
        'implementation_services_submission_comment' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'employee_count' => false,
        'contractor_count' => false,
        'pay_period_amount' => false,
        'previous_payroll_provider' => false,
        'first_payroll' => false,
        'first_payroll_of_year' => false,
        'user_since' => false,
        'expected_first_payday' => false,
        'approved_for_payment_processing' => false,
        'existing_payroll_customer_processing_period' => false,
        'average_monthly_revenue' => false,
        'earliest_known_revenue' => false,
        'months_on_previous_payroll_provider' => false,
        'social_media' => false,
        'products_actively_used' => false,
        'account_contacts' => false,
        'fraud_score' => false,
        'predicted_fraud' => false,
        'paying_user' => false,
        'missed_payments_count' => false,
        'payroll_history_access_method' => false,
        'implementation_services_submission_comment' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'employee_count' => 'employee_count',
        'contractor_count' => 'contractor_count',
        'pay_period_amount' => 'pay_period_amount',
        'previous_payroll_provider' => 'previous_payroll_provider',
        'first_payroll' => 'first_payroll',
        'first_payroll_of_year' => 'first_payroll_of_year',
        'user_since' => 'user_since',
        'expected_first_payday' => 'expected_first_payday',
        'approved_for_payment_processing' => 'approved_for_payment_processing',
        'existing_payroll_customer_processing_period' => 'existing_payroll_customer_processing_period',
        'average_monthly_revenue' => 'average_monthly_revenue',
        'earliest_known_revenue' => 'earliest_known_revenue',
        'months_on_previous_payroll_provider' => 'months_on_previous_payroll_provider',
        'social_media' => 'social_media',
        'products_actively_used' => 'products_actively_used',
        'account_contacts' => 'account_contacts',
        'fraud_score' => 'fraud_score',
        'predicted_fraud' => 'predicted_fraud',
        'paying_user' => 'paying_user',
        'missed_payments_count' => 'missed_payments_count',
        'payroll_history_access_method' => 'payroll_history_access_method',
        'implementation_services_submission_comment' => 'implementation_services_submission_comment'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'employee_count' => 'setEmployeeCount',
        'contractor_count' => 'setContractorCount',
        'pay_period_amount' => 'setPayPeriodAmount',
        'previous_payroll_provider' => 'setPreviousPayrollProvider',
        'first_payroll' => 'setFirstPayroll',
        'first_payroll_of_year' => 'setFirstPayrollOfYear',
        'user_since' => 'setUserSince',
        'expected_first_payday' => 'setExpectedFirstPayday',
        'approved_for_payment_processing' => 'setApprovedForPaymentProcessing',
        'existing_payroll_customer_processing_period' => 'setExistingPayrollCustomerProcessingPeriod',
        'average_monthly_revenue' => 'setAverageMonthlyRevenue',
        'earliest_known_revenue' => 'setEarliestKnownRevenue',
        'months_on_previous_payroll_provider' => 'setMonthsOnPreviousPayrollProvider',
        'social_media' => 'setSocialMedia',
        'products_actively_used' => 'setProductsActivelyUsed',
        'account_contacts' => 'setAccountContacts',
        'fraud_score' => 'setFraudScore',
        'predicted_fraud' => 'setPredictedFraud',
        'paying_user' => 'setPayingUser',
        'missed_payments_count' => 'setMissedPaymentsCount',
        'payroll_history_access_method' => 'setPayrollHistoryAccessMethod',
        'implementation_services_submission_comment' => 'setImplementationServicesSubmissionComment'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'employee_count' => 'getEmployeeCount',
        'contractor_count' => 'getContractorCount',
        'pay_period_amount' => 'getPayPeriodAmount',
        'previous_payroll_provider' => 'getPreviousPayrollProvider',
        'first_payroll' => 'getFirstPayroll',
        'first_payroll_of_year' => 'getFirstPayrollOfYear',
        'user_since' => 'getUserSince',
        'expected_first_payday' => 'getExpectedFirstPayday',
        'approved_for_payment_processing' => 'getApprovedForPaymentProcessing',
        'existing_payroll_customer_processing_period' => 'getExistingPayrollCustomerProcessingPeriod',
        'average_monthly_revenue' => 'getAverageMonthlyRevenue',
        'earliest_known_revenue' => 'getEarliestKnownRevenue',
        'months_on_previous_payroll_provider' => 'getMonthsOnPreviousPayrollProvider',
        'social_media' => 'getSocialMedia',
        'products_actively_used' => 'getProductsActivelyUsed',
        'account_contacts' => 'getAccountContacts',
        'fraud_score' => 'getFraudScore',
        'predicted_fraud' => 'getPredictedFraud',
        'paying_user' => 'getPayingUser',
        'missed_payments_count' => 'getMissedPaymentsCount',
        'payroll_history_access_method' => 'getPayrollHistoryAccessMethod',
        'implementation_services_submission_comment' => 'getImplementationServicesSubmissionComment'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const PAYROLL_HISTORY_ACCESS_METHOD_AUTHORIZED_ACCESS_TO_PREVIOUS_PROVIDER = '\"authorized_access_to_previous_provider\"';
    public const PAYROLL_HISTORY_ACCESS_METHOD_PROVIDED_CREDENTIALS = '\"provided_credentials\"';
    public const PAYROLL_HISTORY_ACCESS_METHOD_PROVIDED_REPORTS = '\"provided_reports\"';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPayrollHistoryAccessMethodAllowableValues()
    {
        return [
            self::PAYROLL_HISTORY_ACCESS_METHOD_AUTHORIZED_ACCESS_TO_PREVIOUS_PROVIDER,
            self::PAYROLL_HISTORY_ACCESS_METHOD_PROVIDED_CREDENTIALS,
            self::PAYROLL_HISTORY_ACCESS_METHOD_PROVIDED_REPORTS,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('employee_count', $data ?? [], null);
        $this->setIfExists('contractor_count', $data ?? [], null);
        $this->setIfExists('pay_period_amount', $data ?? [], null);
        $this->setIfExists('previous_payroll_provider', $data ?? [], 'null');
        $this->setIfExists('first_payroll', $data ?? [], false);
        $this->setIfExists('first_payroll_of_year', $data ?? [], false);
        $this->setIfExists('user_since', $data ?? [], null);
        $this->setIfExists('expected_first_payday', $data ?? [], null);
        $this->setIfExists('approved_for_payment_processing', $data ?? [], false);
        $this->setIfExists('existing_payroll_customer_processing_period', $data ?? [], 'null');
        $this->setIfExists('average_monthly_revenue', $data ?? [], null);
        $this->setIfExists('earliest_known_revenue', $data ?? [], null);
        $this->setIfExists('months_on_previous_payroll_provider', $data ?? [], null);
        $this->setIfExists('social_media', $data ?? [], null);
        $this->setIfExists('products_actively_used', $data ?? [], null);
        $this->setIfExists('account_contacts', $data ?? [], null);
        $this->setIfExists('fraud_score', $data ?? [], null);
        $this->setIfExists('predicted_fraud', $data ?? [], false);
        $this->setIfExists('paying_user', $data ?? [], false);
        $this->setIfExists('missed_payments_count', $data ?? [], null);
        $this->setIfExists('payroll_history_access_method', $data ?? [], null);
        $this->setIfExists('implementation_services_submission_comment', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPayrollHistoryAccessMethodAllowableValues();
        if (!is_null($this->container['payroll_history_access_method']) && !in_array($this->container['payroll_history_access_method'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payroll_history_access_method', must be one of '%s'",
                $this->container['payroll_history_access_method'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets employee_count
     *
     * @return int|null
     */
    public function getEmployeeCount()
    {
        return $this->container['employee_count'];
    }

    /**
     * Sets employee_count
     *
     * @param int|null $employee_count Number of payees who are W2 employees
     *
     * @return self
     */
    public function setEmployeeCount($employee_count)
    {
        if (is_null($employee_count)) {
            throw new \InvalidArgumentException('non-nullable employee_count cannot be null');
        }
        $this->container['employee_count'] = $employee_count;

        return $this;
    }

    /**
     * Gets contractor_count
     *
     * @return int|null
     */
    public function getContractorCount()
    {
        return $this->container['contractor_count'];
    }

    /**
     * Sets contractor_count
     *
     * @param int|null $contractor_count Number of payees who are 1099 contractors
     *
     * @return self
     */
    public function setContractorCount($contractor_count)
    {
        if (is_null($contractor_count)) {
            throw new \InvalidArgumentException('non-nullable contractor_count cannot be null');
        }
        $this->container['contractor_count'] = $contractor_count;

        return $this;
    }

    /**
     * Gets pay_period_amount
     *
     * @return int|null
     */
    public function getPayPeriodAmount()
    {
        return $this->container['pay_period_amount'];
    }

    /**
     * Sets pay_period_amount
     *
     * @param int|null $pay_period_amount Estimated total amount of money paid to employees and contractors per pay period
     *
     * @return self
     */
    public function setPayPeriodAmount($pay_period_amount)
    {
        if (is_null($pay_period_amount)) {
            throw new \InvalidArgumentException('non-nullable pay_period_amount cannot be null');
        }
        $this->container['pay_period_amount'] = $pay_period_amount;

        return $this;
    }

    /**
     * Gets previous_payroll_provider
     *
     * @return string|null
     */
    public function getPreviousPayrollProvider()
    {
        return $this->container['previous_payroll_provider'];
    }

    /**
     * Sets previous_payroll_provider
     *
     * @param string|null $previous_payroll_provider The payroll provider previously used by the company
     *
     * @return self
     */
    public function setPreviousPayrollProvider($previous_payroll_provider)
    {
        if (is_null($previous_payroll_provider)) {
            throw new \InvalidArgumentException('non-nullable previous_payroll_provider cannot be null');
        }
        $this->container['previous_payroll_provider'] = $previous_payroll_provider;

        return $this;
    }

    /**
     * Gets first_payroll
     *
     * @return bool|null
     */
    public function getFirstPayroll()
    {
        return $this->container['first_payroll'];
    }

    /**
     * Sets first_payroll
     *
     * @param bool|null $first_payroll Whether or not the company has ever paid people before.
     *
     * @return self
     */
    public function setFirstPayroll($first_payroll)
    {
        if (is_null($first_payroll)) {
            throw new \InvalidArgumentException('non-nullable first_payroll cannot be null');
        }
        $this->container['first_payroll'] = $first_payroll;

        return $this;
    }

    /**
     * Gets first_payroll_of_year
     *
     * @return bool|null
     */
    public function getFirstPayrollOfYear()
    {
        return $this->container['first_payroll_of_year'];
    }

    /**
     * Sets first_payroll_of_year
     *
     * @param bool|null $first_payroll_of_year Whether or not this is the first payroll of the current calendar year for the company
     *
     * @return self
     */
    public function setFirstPayrollOfYear($first_payroll_of_year)
    {
        if (is_null($first_payroll_of_year)) {
            throw new \InvalidArgumentException('non-nullable first_payroll_of_year cannot be null');
        }
        $this->container['first_payroll_of_year'] = $first_payroll_of_year;

        return $this;
    }

    /**
     * Gets user_since
     *
     * @return \DateTime|null
     */
    public function getUserSince()
    {
        return $this->container['user_since'];
    }

    /**
     * Sets user_since
     *
     * @param \DateTime|null $user_since The date at which the company joined the partner's platform
     *
     * @return self
     */
    public function setUserSince($user_since)
    {
        if (is_null($user_since)) {
            throw new \InvalidArgumentException('non-nullable user_since cannot be null');
        }
        $this->container['user_since'] = $user_since;

        return $this;
    }

    /**
     * Gets expected_first_payday
     *
     * @return \DateTime|null
     */
    public function getExpectedFirstPayday()
    {
        return $this->container['expected_first_payday'];
    }

    /**
     * Sets expected_first_payday
     *
     * @param \DateTime|null $expected_first_payday The company's expected first payday on Check
     *
     * @return self
     */
    public function setExpectedFirstPayday($expected_first_payday)
    {
        if (is_null($expected_first_payday)) {
            throw new \InvalidArgumentException('non-nullable expected_first_payday cannot be null');
        }
        $this->container['expected_first_payday'] = $expected_first_payday;

        return $this;
    }

    /**
     * Gets approved_for_payment_processing
     *
     * @return bool|null
     */
    public function getApprovedForPaymentProcessing()
    {
        return $this->container['approved_for_payment_processing'];
    }

    /**
     * Sets approved_for_payment_processing
     *
     * @param bool|null $approved_for_payment_processing Whether or not the company has been approved for payment processing on the partner's platform
     *
     * @return self
     */
    public function setApprovedForPaymentProcessing($approved_for_payment_processing)
    {
        if (is_null($approved_for_payment_processing)) {
            throw new \InvalidArgumentException('non-nullable approved_for_payment_processing cannot be null');
        }
        $this->container['approved_for_payment_processing'] = $approved_for_payment_processing;

        return $this;
    }

    /**
     * Gets existing_payroll_customer_processing_period
     *
     * @return string|null
     */
    public function getExistingPayrollCustomerProcessingPeriod()
    {
        return $this->container['existing_payroll_customer_processing_period'];
    }

    /**
     * Sets existing_payroll_customer_processing_period
     *
     * @param string|null $existing_payroll_customer_processing_period If business is already running payroll with you, the processing period they are currently using. One of `null`, `four_day`, `two_day`, or `one_day`.
     *
     * @return self
     */
    public function setExistingPayrollCustomerProcessingPeriod($existing_payroll_customer_processing_period)
    {
        if (is_null($existing_payroll_customer_processing_period)) {
            throw new \InvalidArgumentException('non-nullable existing_payroll_customer_processing_period cannot be null');
        }
        $this->container['existing_payroll_customer_processing_period'] = $existing_payroll_customer_processing_period;

        return $this;
    }

    /**
     * Gets average_monthly_revenue
     *
     * @return float|null
     */
    public function getAverageMonthlyRevenue()
    {
        return $this->container['average_monthly_revenue'];
    }

    /**
     * Sets average_monthly_revenue
     *
     * @param float|null $average_monthly_revenue The average monthly revenue of the company
     *
     * @return self
     */
    public function setAverageMonthlyRevenue($average_monthly_revenue)
    {
        if (is_null($average_monthly_revenue)) {
            throw new \InvalidArgumentException('non-nullable average_monthly_revenue cannot be null');
        }
        $this->container['average_monthly_revenue'] = $average_monthly_revenue;

        return $this;
    }

    /**
     * Gets earliest_known_revenue
     *
     * @return \DateTime|null
     */
    public function getEarliestKnownRevenue()
    {
        return $this->container['earliest_known_revenue'];
    }

    /**
     * Sets earliest_known_revenue
     *
     * @param \DateTime|null $earliest_known_revenue The earliest known date that the company generated revenue
     *
     * @return self
     */
    public function setEarliestKnownRevenue($earliest_known_revenue)
    {
        if (is_null($earliest_known_revenue)) {
            throw new \InvalidArgumentException('non-nullable earliest_known_revenue cannot be null');
        }
        $this->container['earliest_known_revenue'] = $earliest_known_revenue;

        return $this;
    }

    /**
     * Gets months_on_previous_payroll_provider
     *
     * @return int|null
     */
    public function getMonthsOnPreviousPayrollProvider()
    {
        return $this->container['months_on_previous_payroll_provider'];
    }

    /**
     * Sets months_on_previous_payroll_provider
     *
     * @param int|null $months_on_previous_payroll_provider The number of months that the company used their previous payroll provider
     *
     * @return self
     */
    public function setMonthsOnPreviousPayrollProvider($months_on_previous_payroll_provider)
    {
        if (is_null($months_on_previous_payroll_provider)) {
            throw new \InvalidArgumentException('non-nullable months_on_previous_payroll_provider cannot be null');
        }
        $this->container['months_on_previous_payroll_provider'] = $months_on_previous_payroll_provider;

        return $this;
    }

    /**
     * Gets social_media
     *
     * @return string[]|null
     */
    public function getSocialMedia()
    {
        return $this->container['social_media'];
    }

    /**
     * Sets social_media
     *
     * @param string[]|null $social_media Any social media account URLs associated with the company
     *
     * @return self
     */
    public function setSocialMedia($social_media)
    {
        if (is_null($social_media)) {
            throw new \InvalidArgumentException('non-nullable social_media cannot be null');
        }
        $this->container['social_media'] = $social_media;

        return $this;
    }

    /**
     * Gets products_actively_used
     *
     * @return string[]|null
     */
    public function getProductsActivelyUsed()
    {
        return $this->container['products_actively_used'];
    }

    /**
     * Sets products_actively_used
     *
     * @param string[]|null $products_actively_used A list of the products offered by the partner's platform used by the associated company. Values must be one of `timetracking`, `payments`, or `scheduling`.
     *
     * @return self
     */
    public function setProductsActivelyUsed($products_actively_used)
    {
        if (is_null($products_actively_used)) {
            throw new \InvalidArgumentException('non-nullable products_actively_used cannot be null');
        }
        $this->container['products_actively_used'] = $products_actively_used;

        return $this;
    }

    /**
     * Gets account_contacts
     *
     * @return string[]|null
     */
    public function getAccountContacts()
    {
        return $this->container['account_contacts'];
    }

    /**
     * Sets account_contacts
     *
     * @param string[]|null $account_contacts A list of partner employee emails associated with the company
     *
     * @return self
     */
    public function setAccountContacts($account_contacts)
    {
        if (is_null($account_contacts)) {
            throw new \InvalidArgumentException('non-nullable account_contacts cannot be null');
        }
        $this->container['account_contacts'] = $account_contacts;

        return $this;
    }

    /**
     * Gets fraud_score
     *
     * @return float|null
     */
    public function getFraudScore()
    {
        return $this->container['fraud_score'];
    }

    /**
     * Sets fraud_score
     *
     * @param float|null $fraud_score A value between 0 and 100 representing the fraud risk presented by the company
     *
     * @return self
     */
    public function setFraudScore($fraud_score)
    {
        if (is_null($fraud_score)) {
            throw new \InvalidArgumentException('non-nullable fraud_score cannot be null');
        }
        $this->container['fraud_score'] = $fraud_score;

        return $this;
    }

    /**
     * Gets predicted_fraud
     *
     * @return bool|null
     */
    public function getPredictedFraud()
    {
        return $this->container['predicted_fraud'];
    }

    /**
     * Sets predicted_fraud
     *
     * @param bool|null $predicted_fraud Whether the fraud score was over the expected threshold for fraud (the company is predicted to be fraudulent)
     *
     * @return self
     */
    public function setPredictedFraud($predicted_fraud)
    {
        if (is_null($predicted_fraud)) {
            throw new \InvalidArgumentException('non-nullable predicted_fraud cannot be null');
        }
        $this->container['predicted_fraud'] = $predicted_fraud;

        return $this;
    }

    /**
     * Gets paying_user
     *
     * @return bool|null
     */
    public function getPayingUser()
    {
        return $this->container['paying_user'];
    }

    /**
     * Sets paying_user
     *
     * @param bool|null $paying_user Whether the company pays the partner for services
     *
     * @return self
     */
    public function setPayingUser($paying_user)
    {
        if (is_null($paying_user)) {
            throw new \InvalidArgumentException('non-nullable paying_user cannot be null');
        }
        $this->container['paying_user'] = $paying_user;

        return $this;
    }

    /**
     * Gets missed_payments_count
     *
     * @return int|null
     */
    public function getMissedPaymentsCount()
    {
        return $this->container['missed_payments_count'];
    }

    /**
     * Sets missed_payments_count
     *
     * @param int|null $missed_payments_count The number of times that the company has failed to pay the partner
     *
     * @return self
     */
    public function setMissedPaymentsCount($missed_payments_count)
    {
        if (is_null($missed_payments_count)) {
            throw new \InvalidArgumentException('non-nullable missed_payments_count cannot be null');
        }
        $this->container['missed_payments_count'] = $missed_payments_count;

        return $this;
    }

    /**
     * Gets payroll_history_access_method
     *
     * @return string|null
     */
    public function getPayrollHistoryAccessMethod()
    {
        return $this->container['payroll_history_access_method'];
    }

    /**
     * Sets payroll_history_access_method
     *
     * @param string|null $payroll_history_access_method The mechanism by which Check Implementation Services will be able to access and migrate payroll history
     *
     * @return self
     */
    public function setPayrollHistoryAccessMethod($payroll_history_access_method)
    {
        if (is_null($payroll_history_access_method)) {
            throw new \InvalidArgumentException('non-nullable payroll_history_access_method cannot be null');
        }
        $allowedValues = $this->getPayrollHistoryAccessMethodAllowableValues();
        if (!in_array($payroll_history_access_method, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payroll_history_access_method', must be one of '%s'",
                    $payroll_history_access_method,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payroll_history_access_method'] = $payroll_history_access_method;

        return $this;
    }

    /**
     * Gets implementation_services_submission_comment
     *
     * @return string|null
     */
    public function getImplementationServicesSubmissionComment()
    {
        return $this->container['implementation_services_submission_comment'];
    }

    /**
     * Sets implementation_services_submission_comment
     *
     * @param string|null $implementation_services_submission_comment Optional comment for including additional context when submitting a company for Implementation Services
     *
     * @return self
     */
    public function setImplementationServicesSubmissionComment($implementation_services_submission_comment)
    {
        if (is_null($implementation_services_submission_comment)) {
            throw new \InvalidArgumentException('non-nullable implementation_services_submission_comment cannot be null');
        }
        $this->container['implementation_services_submission_comment'] = $implementation_services_submission_comment;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

