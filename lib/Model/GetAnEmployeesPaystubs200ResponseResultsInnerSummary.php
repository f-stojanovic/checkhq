<?php
/**
 * GetAnEmployeesPaystubs200ResponseResultsInnerSummary
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
 * GetAnEmployeesPaystubs200ResponseResultsInnerSummary Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetAnEmployeesPaystubs200ResponseResultsInnerSummary implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_an_employees_paystubs_200_response_results_inner_summary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'earnings' => 'string',
        'earnings_ytd' => 'string',
        'reimbursements' => 'string',
        'reimbursements_ytd' => 'string',
        'employee_taxes' => 'string',
        'employee_taxes_ytd' => 'string',
        'company_taxes' => 'string',
        'company_taxes_ytd' => 'string',
        'employee_benefit_contributions' => 'string',
        'employee_benefit_contributions_ytd' => 'string',
        'company_benefit_contributions' => 'string',
        'company_benefit_contributions_ytd' => 'string',
        'post_tax_deductions' => 'string',
        'post_tax_deductions_ytd' => 'string',
        'net_pay' => 'string',
        'net_pay_ytd' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'earnings' => null,
        'earnings_ytd' => null,
        'reimbursements' => null,
        'reimbursements_ytd' => null,
        'employee_taxes' => null,
        'employee_taxes_ytd' => null,
        'company_taxes' => null,
        'company_taxes_ytd' => null,
        'employee_benefit_contributions' => null,
        'employee_benefit_contributions_ytd' => null,
        'company_benefit_contributions' => null,
        'company_benefit_contributions_ytd' => null,
        'post_tax_deductions' => null,
        'post_tax_deductions_ytd' => null,
        'net_pay' => null,
        'net_pay_ytd' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'earnings' => false,
        'earnings_ytd' => false,
        'reimbursements' => false,
        'reimbursements_ytd' => false,
        'employee_taxes' => false,
        'employee_taxes_ytd' => false,
        'company_taxes' => false,
        'company_taxes_ytd' => false,
        'employee_benefit_contributions' => false,
        'employee_benefit_contributions_ytd' => false,
        'company_benefit_contributions' => false,
        'company_benefit_contributions_ytd' => false,
        'post_tax_deductions' => false,
        'post_tax_deductions_ytd' => false,
        'net_pay' => false,
        'net_pay_ytd' => false
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
        'earnings' => 'earnings',
        'earnings_ytd' => 'earnings_ytd',
        'reimbursements' => 'reimbursements',
        'reimbursements_ytd' => 'reimbursements_ytd',
        'employee_taxes' => 'employee_taxes',
        'employee_taxes_ytd' => 'employee_taxes_ytd',
        'company_taxes' => 'company_taxes',
        'company_taxes_ytd' => 'company_taxes_ytd',
        'employee_benefit_contributions' => 'employee_benefit_contributions',
        'employee_benefit_contributions_ytd' => 'employee_benefit_contributions_ytd',
        'company_benefit_contributions' => 'company_benefit_contributions',
        'company_benefit_contributions_ytd' => 'company_benefit_contributions_ytd',
        'post_tax_deductions' => 'post_tax_deductions',
        'post_tax_deductions_ytd' => 'post_tax_deductions_ytd',
        'net_pay' => 'net_pay',
        'net_pay_ytd' => 'net_pay_ytd'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'earnings' => 'setEarnings',
        'earnings_ytd' => 'setEarningsYtd',
        'reimbursements' => 'setReimbursements',
        'reimbursements_ytd' => 'setReimbursementsYtd',
        'employee_taxes' => 'setEmployeeTaxes',
        'employee_taxes_ytd' => 'setEmployeeTaxesYtd',
        'company_taxes' => 'setCompanyTaxes',
        'company_taxes_ytd' => 'setCompanyTaxesYtd',
        'employee_benefit_contributions' => 'setEmployeeBenefitContributions',
        'employee_benefit_contributions_ytd' => 'setEmployeeBenefitContributionsYtd',
        'company_benefit_contributions' => 'setCompanyBenefitContributions',
        'company_benefit_contributions_ytd' => 'setCompanyBenefitContributionsYtd',
        'post_tax_deductions' => 'setPostTaxDeductions',
        'post_tax_deductions_ytd' => 'setPostTaxDeductionsYtd',
        'net_pay' => 'setNetPay',
        'net_pay_ytd' => 'setNetPayYtd'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'earnings' => 'getEarnings',
        'earnings_ytd' => 'getEarningsYtd',
        'reimbursements' => 'getReimbursements',
        'reimbursements_ytd' => 'getReimbursementsYtd',
        'employee_taxes' => 'getEmployeeTaxes',
        'employee_taxes_ytd' => 'getEmployeeTaxesYtd',
        'company_taxes' => 'getCompanyTaxes',
        'company_taxes_ytd' => 'getCompanyTaxesYtd',
        'employee_benefit_contributions' => 'getEmployeeBenefitContributions',
        'employee_benefit_contributions_ytd' => 'getEmployeeBenefitContributionsYtd',
        'company_benefit_contributions' => 'getCompanyBenefitContributions',
        'company_benefit_contributions_ytd' => 'getCompanyBenefitContributionsYtd',
        'post_tax_deductions' => 'getPostTaxDeductions',
        'post_tax_deductions_ytd' => 'getPostTaxDeductionsYtd',
        'net_pay' => 'getNetPay',
        'net_pay_ytd' => 'getNetPayYtd'
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
        $this->setIfExists('earnings', $data ?? [], null);
        $this->setIfExists('earnings_ytd', $data ?? [], null);
        $this->setIfExists('reimbursements', $data ?? [], null);
        $this->setIfExists('reimbursements_ytd', $data ?? [], null);
        $this->setIfExists('employee_taxes', $data ?? [], null);
        $this->setIfExists('employee_taxes_ytd', $data ?? [], null);
        $this->setIfExists('company_taxes', $data ?? [], null);
        $this->setIfExists('company_taxes_ytd', $data ?? [], null);
        $this->setIfExists('employee_benefit_contributions', $data ?? [], null);
        $this->setIfExists('employee_benefit_contributions_ytd', $data ?? [], null);
        $this->setIfExists('company_benefit_contributions', $data ?? [], null);
        $this->setIfExists('company_benefit_contributions_ytd', $data ?? [], null);
        $this->setIfExists('post_tax_deductions', $data ?? [], null);
        $this->setIfExists('post_tax_deductions_ytd', $data ?? [], null);
        $this->setIfExists('net_pay', $data ?? [], null);
        $this->setIfExists('net_pay_ytd', $data ?? [], null);
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
     * Gets earnings
     *
     * @return string|null
     */
    public function getEarnings()
    {
        return $this->container['earnings'];
    }

    /**
     * Sets earnings
     *
     * @param string|null $earnings earnings
     *
     * @return self
     */
    public function setEarnings($earnings)
    {
        if (is_null($earnings)) {
            throw new \InvalidArgumentException('non-nullable earnings cannot be null');
        }
        $this->container['earnings'] = $earnings;

        return $this;
    }

    /**
     * Gets earnings_ytd
     *
     * @return string|null
     */
    public function getEarningsYtd()
    {
        return $this->container['earnings_ytd'];
    }

    /**
     * Sets earnings_ytd
     *
     * @param string|null $earnings_ytd earnings_ytd
     *
     * @return self
     */
    public function setEarningsYtd($earnings_ytd)
    {
        if (is_null($earnings_ytd)) {
            throw new \InvalidArgumentException('non-nullable earnings_ytd cannot be null');
        }
        $this->container['earnings_ytd'] = $earnings_ytd;

        return $this;
    }

    /**
     * Gets reimbursements
     *
     * @return string|null
     */
    public function getReimbursements()
    {
        return $this->container['reimbursements'];
    }

    /**
     * Sets reimbursements
     *
     * @param string|null $reimbursements reimbursements
     *
     * @return self
     */
    public function setReimbursements($reimbursements)
    {
        if (is_null($reimbursements)) {
            throw new \InvalidArgumentException('non-nullable reimbursements cannot be null');
        }
        $this->container['reimbursements'] = $reimbursements;

        return $this;
    }

    /**
     * Gets reimbursements_ytd
     *
     * @return string|null
     */
    public function getReimbursementsYtd()
    {
        return $this->container['reimbursements_ytd'];
    }

    /**
     * Sets reimbursements_ytd
     *
     * @param string|null $reimbursements_ytd reimbursements_ytd
     *
     * @return self
     */
    public function setReimbursementsYtd($reimbursements_ytd)
    {
        if (is_null($reimbursements_ytd)) {
            throw new \InvalidArgumentException('non-nullable reimbursements_ytd cannot be null');
        }
        $this->container['reimbursements_ytd'] = $reimbursements_ytd;

        return $this;
    }

    /**
     * Gets employee_taxes
     *
     * @return string|null
     */
    public function getEmployeeTaxes()
    {
        return $this->container['employee_taxes'];
    }

    /**
     * Sets employee_taxes
     *
     * @param string|null $employee_taxes employee_taxes
     *
     * @return self
     */
    public function setEmployeeTaxes($employee_taxes)
    {
        if (is_null($employee_taxes)) {
            throw new \InvalidArgumentException('non-nullable employee_taxes cannot be null');
        }
        $this->container['employee_taxes'] = $employee_taxes;

        return $this;
    }

    /**
     * Gets employee_taxes_ytd
     *
     * @return string|null
     */
    public function getEmployeeTaxesYtd()
    {
        return $this->container['employee_taxes_ytd'];
    }

    /**
     * Sets employee_taxes_ytd
     *
     * @param string|null $employee_taxes_ytd employee_taxes_ytd
     *
     * @return self
     */
    public function setEmployeeTaxesYtd($employee_taxes_ytd)
    {
        if (is_null($employee_taxes_ytd)) {
            throw new \InvalidArgumentException('non-nullable employee_taxes_ytd cannot be null');
        }
        $this->container['employee_taxes_ytd'] = $employee_taxes_ytd;

        return $this;
    }

    /**
     * Gets company_taxes
     *
     * @return string|null
     */
    public function getCompanyTaxes()
    {
        return $this->container['company_taxes'];
    }

    /**
     * Sets company_taxes
     *
     * @param string|null $company_taxes company_taxes
     *
     * @return self
     */
    public function setCompanyTaxes($company_taxes)
    {
        if (is_null($company_taxes)) {
            throw new \InvalidArgumentException('non-nullable company_taxes cannot be null');
        }
        $this->container['company_taxes'] = $company_taxes;

        return $this;
    }

    /**
     * Gets company_taxes_ytd
     *
     * @return string|null
     */
    public function getCompanyTaxesYtd()
    {
        return $this->container['company_taxes_ytd'];
    }

    /**
     * Sets company_taxes_ytd
     *
     * @param string|null $company_taxes_ytd company_taxes_ytd
     *
     * @return self
     */
    public function setCompanyTaxesYtd($company_taxes_ytd)
    {
        if (is_null($company_taxes_ytd)) {
            throw new \InvalidArgumentException('non-nullable company_taxes_ytd cannot be null');
        }
        $this->container['company_taxes_ytd'] = $company_taxes_ytd;

        return $this;
    }

    /**
     * Gets employee_benefit_contributions
     *
     * @return string|null
     */
    public function getEmployeeBenefitContributions()
    {
        return $this->container['employee_benefit_contributions'];
    }

    /**
     * Sets employee_benefit_contributions
     *
     * @param string|null $employee_benefit_contributions employee_benefit_contributions
     *
     * @return self
     */
    public function setEmployeeBenefitContributions($employee_benefit_contributions)
    {
        if (is_null($employee_benefit_contributions)) {
            throw new \InvalidArgumentException('non-nullable employee_benefit_contributions cannot be null');
        }
        $this->container['employee_benefit_contributions'] = $employee_benefit_contributions;

        return $this;
    }

    /**
     * Gets employee_benefit_contributions_ytd
     *
     * @return string|null
     */
    public function getEmployeeBenefitContributionsYtd()
    {
        return $this->container['employee_benefit_contributions_ytd'];
    }

    /**
     * Sets employee_benefit_contributions_ytd
     *
     * @param string|null $employee_benefit_contributions_ytd employee_benefit_contributions_ytd
     *
     * @return self
     */
    public function setEmployeeBenefitContributionsYtd($employee_benefit_contributions_ytd)
    {
        if (is_null($employee_benefit_contributions_ytd)) {
            throw new \InvalidArgumentException('non-nullable employee_benefit_contributions_ytd cannot be null');
        }
        $this->container['employee_benefit_contributions_ytd'] = $employee_benefit_contributions_ytd;

        return $this;
    }

    /**
     * Gets company_benefit_contributions
     *
     * @return string|null
     */
    public function getCompanyBenefitContributions()
    {
        return $this->container['company_benefit_contributions'];
    }

    /**
     * Sets company_benefit_contributions
     *
     * @param string|null $company_benefit_contributions company_benefit_contributions
     *
     * @return self
     */
    public function setCompanyBenefitContributions($company_benefit_contributions)
    {
        if (is_null($company_benefit_contributions)) {
            throw new \InvalidArgumentException('non-nullable company_benefit_contributions cannot be null');
        }
        $this->container['company_benefit_contributions'] = $company_benefit_contributions;

        return $this;
    }

    /**
     * Gets company_benefit_contributions_ytd
     *
     * @return string|null
     */
    public function getCompanyBenefitContributionsYtd()
    {
        return $this->container['company_benefit_contributions_ytd'];
    }

    /**
     * Sets company_benefit_contributions_ytd
     *
     * @param string|null $company_benefit_contributions_ytd company_benefit_contributions_ytd
     *
     * @return self
     */
    public function setCompanyBenefitContributionsYtd($company_benefit_contributions_ytd)
    {
        if (is_null($company_benefit_contributions_ytd)) {
            throw new \InvalidArgumentException('non-nullable company_benefit_contributions_ytd cannot be null');
        }
        $this->container['company_benefit_contributions_ytd'] = $company_benefit_contributions_ytd;

        return $this;
    }

    /**
     * Gets post_tax_deductions
     *
     * @return string|null
     */
    public function getPostTaxDeductions()
    {
        return $this->container['post_tax_deductions'];
    }

    /**
     * Sets post_tax_deductions
     *
     * @param string|null $post_tax_deductions post_tax_deductions
     *
     * @return self
     */
    public function setPostTaxDeductions($post_tax_deductions)
    {
        if (is_null($post_tax_deductions)) {
            throw new \InvalidArgumentException('non-nullable post_tax_deductions cannot be null');
        }
        $this->container['post_tax_deductions'] = $post_tax_deductions;

        return $this;
    }

    /**
     * Gets post_tax_deductions_ytd
     *
     * @return string|null
     */
    public function getPostTaxDeductionsYtd()
    {
        return $this->container['post_tax_deductions_ytd'];
    }

    /**
     * Sets post_tax_deductions_ytd
     *
     * @param string|null $post_tax_deductions_ytd post_tax_deductions_ytd
     *
     * @return self
     */
    public function setPostTaxDeductionsYtd($post_tax_deductions_ytd)
    {
        if (is_null($post_tax_deductions_ytd)) {
            throw new \InvalidArgumentException('non-nullable post_tax_deductions_ytd cannot be null');
        }
        $this->container['post_tax_deductions_ytd'] = $post_tax_deductions_ytd;

        return $this;
    }

    /**
     * Gets net_pay
     *
     * @return string|null
     */
    public function getNetPay()
    {
        return $this->container['net_pay'];
    }

    /**
     * Sets net_pay
     *
     * @param string|null $net_pay net_pay
     *
     * @return self
     */
    public function setNetPay($net_pay)
    {
        if (is_null($net_pay)) {
            throw new \InvalidArgumentException('non-nullable net_pay cannot be null');
        }
        $this->container['net_pay'] = $net_pay;

        return $this;
    }

    /**
     * Gets net_pay_ytd
     *
     * @return string|null
     */
    public function getNetPayYtd()
    {
        return $this->container['net_pay_ytd'];
    }

    /**
     * Sets net_pay_ytd
     *
     * @param string|null $net_pay_ytd net_pay_ytd
     *
     * @return self
     */
    public function setNetPayYtd($net_pay_ytd)
    {
        if (is_null($net_pay_ytd)) {
            throw new \InvalidArgumentException('non-nullable net_pay_ytd cannot be null');
        }
        $this->container['net_pay_ytd'] = $net_pay_ytd;

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

