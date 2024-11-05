<?php
/**
 * CreateACompanyBenefitRequest
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
 * CreateACompanyBenefitRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateACompanyBenefitRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'create_a_company_benefit_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company' => 'string',
        'benefit' => 'string',
        'period' => 'string',
        'description' => 'string',
        'company_contribution_amount' => 'string',
        'company_contribution_percent' => 'string',
        'company_period_amount' => 'string',
        'employee_contribution_amount' => 'string',
        'employee_contribution_percent' => 'string',
        'employee_period_amount' => 'string',
        'effective_start' => 'string',
        'effective_end' => 'string',
        'metadata' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'company' => null,
        'benefit' => null,
        'period' => null,
        'description' => null,
        'company_contribution_amount' => null,
        'company_contribution_percent' => null,
        'company_period_amount' => null,
        'employee_contribution_amount' => null,
        'employee_contribution_percent' => null,
        'employee_period_amount' => null,
        'effective_start' => null,
        'effective_end' => null,
        'metadata' => 'json'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'company' => false,
        'benefit' => false,
        'period' => false,
        'description' => false,
        'company_contribution_amount' => false,
        'company_contribution_percent' => false,
        'company_period_amount' => false,
        'employee_contribution_amount' => false,
        'employee_contribution_percent' => false,
        'employee_period_amount' => false,
        'effective_start' => false,
        'effective_end' => false,
        'metadata' => false
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
        'company' => 'company',
        'benefit' => 'benefit',
        'period' => 'period',
        'description' => 'description',
        'company_contribution_amount' => 'company_contribution_amount',
        'company_contribution_percent' => 'company_contribution_percent',
        'company_period_amount' => 'company_period_amount',
        'employee_contribution_amount' => 'employee_contribution_amount',
        'employee_contribution_percent' => 'employee_contribution_percent',
        'employee_period_amount' => 'employee_period_amount',
        'effective_start' => 'effective_start',
        'effective_end' => 'effective_end',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company' => 'setCompany',
        'benefit' => 'setBenefit',
        'period' => 'setPeriod',
        'description' => 'setDescription',
        'company_contribution_amount' => 'setCompanyContributionAmount',
        'company_contribution_percent' => 'setCompanyContributionPercent',
        'company_period_amount' => 'setCompanyPeriodAmount',
        'employee_contribution_amount' => 'setEmployeeContributionAmount',
        'employee_contribution_percent' => 'setEmployeeContributionPercent',
        'employee_period_amount' => 'setEmployeePeriodAmount',
        'effective_start' => 'setEffectiveStart',
        'effective_end' => 'setEffectiveEnd',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company' => 'getCompany',
        'benefit' => 'getBenefit',
        'period' => 'getPeriod',
        'description' => 'getDescription',
        'company_contribution_amount' => 'getCompanyContributionAmount',
        'company_contribution_percent' => 'getCompanyContributionPercent',
        'company_period_amount' => 'getCompanyPeriodAmount',
        'employee_contribution_amount' => 'getEmployeeContributionAmount',
        'employee_contribution_percent' => 'getEmployeeContributionPercent',
        'employee_period_amount' => 'getEmployeePeriodAmount',
        'effective_start' => 'getEffectiveStart',
        'effective_end' => 'getEffectiveEnd',
        'metadata' => 'getMetadata'
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
        $this->setIfExists('company', $data ?? [], null);
        $this->setIfExists('benefit', $data ?? [], null);
        $this->setIfExists('period', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('company_contribution_amount', $data ?? [], null);
        $this->setIfExists('company_contribution_percent', $data ?? [], null);
        $this->setIfExists('company_period_amount', $data ?? [], null);
        $this->setIfExists('employee_contribution_amount', $data ?? [], null);
        $this->setIfExists('employee_contribution_percent', $data ?? [], null);
        $this->setIfExists('employee_period_amount', $data ?? [], null);
        $this->setIfExists('effective_start', $data ?? [], null);
        $this->setIfExists('effective_end', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
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

        if ($this->container['company'] === null) {
            $invalidProperties[] = "'company' can't be null";
        }
        if ($this->container['benefit'] === null) {
            $invalidProperties[] = "'benefit' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
     * Gets company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string $company ID of the company associated with the benefit.
     *
     * @return self
     */
    public function setCompany($company)
    {
        if (is_null($company)) {
            throw new \InvalidArgumentException('non-nullable company cannot be null');
        }
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets benefit
     *
     * @return string
     */
    public function getBenefit()
    {
        return $this->container['benefit'];
    }

    /**
     * Sets benefit
     *
     * @param string $benefit Type of supported benefit. See [types of benefits](https://docs.checkhq.com/reference/types-of-benefits).
     *
     * @return self
     */
    public function setBenefit($benefit)
    {
        if (is_null($benefit)) {
            throw new \InvalidArgumentException('non-nullable benefit cannot be null');
        }
        $this->container['benefit'] = $benefit;

        return $this;
    }

    /**
     * Gets period
     *
     * @return string|null
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     *
     * @param string|null $period The period over which a period amount is distributed. Can be \"monthly\" or null.
     *
     * @return self
     */
    public function setPeriod($period)
    {
        if (is_null($period)) {
            throw new \InvalidArgumentException('non-nullable period cannot be null');
        }
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description to distinguish the benefit from other company benefits of the same type. Maximum length of 255 characters.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets company_contribution_amount
     *
     * @return string|null
     */
    public function getCompanyContributionAmount()
    {
        return $this->container['company_contribution_amount'];
    }

    /**
     * Sets company_contribution_amount
     *
     * @param string|null $company_contribution_amount Default amount for company to contribute per payroll.
     *
     * @return self
     */
    public function setCompanyContributionAmount($company_contribution_amount)
    {
        if (is_null($company_contribution_amount)) {
            throw new \InvalidArgumentException('non-nullable company_contribution_amount cannot be null');
        }
        $this->container['company_contribution_amount'] = $company_contribution_amount;

        return $this;
    }

    /**
     * Gets company_contribution_percent
     *
     * @return string|null
     */
    public function getCompanyContributionPercent()
    {
        return $this->container['company_contribution_percent'];
    }

    /**
     * Sets company_contribution_percent
     *
     * @param string|null $company_contribution_percent Default decimal percentage of gross pay for company to contribute per payroll from 0 to 100.
     *
     * @return self
     */
    public function setCompanyContributionPercent($company_contribution_percent)
    {
        if (is_null($company_contribution_percent)) {
            throw new \InvalidArgumentException('non-nullable company_contribution_percent cannot be null');
        }
        $this->container['company_contribution_percent'] = $company_contribution_percent;

        return $this;
    }

    /**
     * Gets company_period_amount
     *
     * @return string|null
     */
    public function getCompanyPeriodAmount()
    {
        return $this->container['company_period_amount'];
    }

    /**
     * Sets company_period_amount
     *
     * @param string|null $company_period_amount Default amount for company to contribute over a period.
     *
     * @return self
     */
    public function setCompanyPeriodAmount($company_period_amount)
    {
        if (is_null($company_period_amount)) {
            throw new \InvalidArgumentException('non-nullable company_period_amount cannot be null');
        }
        $this->container['company_period_amount'] = $company_period_amount;

        return $this;
    }

    /**
     * Gets employee_contribution_amount
     *
     * @return string|null
     */
    public function getEmployeeContributionAmount()
    {
        return $this->container['employee_contribution_amount'];
    }

    /**
     * Sets employee_contribution_amount
     *
     * @param string|null $employee_contribution_amount Default amount for employee to contribute per payroll.
     *
     * @return self
     */
    public function setEmployeeContributionAmount($employee_contribution_amount)
    {
        if (is_null($employee_contribution_amount)) {
            throw new \InvalidArgumentException('non-nullable employee_contribution_amount cannot be null');
        }
        $this->container['employee_contribution_amount'] = $employee_contribution_amount;

        return $this;
    }

    /**
     * Gets employee_contribution_percent
     *
     * @return string|null
     */
    public function getEmployeeContributionPercent()
    {
        return $this->container['employee_contribution_percent'];
    }

    /**
     * Sets employee_contribution_percent
     *
     * @param string|null $employee_contribution_percent Default decimal percentage of gross pay for company to contribute per payroll from 0 to 100.
     *
     * @return self
     */
    public function setEmployeeContributionPercent($employee_contribution_percent)
    {
        if (is_null($employee_contribution_percent)) {
            throw new \InvalidArgumentException('non-nullable employee_contribution_percent cannot be null');
        }
        $this->container['employee_contribution_percent'] = $employee_contribution_percent;

        return $this;
    }

    /**
     * Gets employee_period_amount
     *
     * @return string|null
     */
    public function getEmployeePeriodAmount()
    {
        return $this->container['employee_period_amount'];
    }

    /**
     * Sets employee_period_amount
     *
     * @param string|null $employee_period_amount Default amount for employee to contribute over a period.
     *
     * @return self
     */
    public function setEmployeePeriodAmount($employee_period_amount)
    {
        if (is_null($employee_period_amount)) {
            throw new \InvalidArgumentException('non-nullable employee_period_amount cannot be null');
        }
        $this->container['employee_period_amount'] = $employee_period_amount;

        return $this;
    }

    /**
     * Gets effective_start
     *
     * @return string|null
     */
    public function getEffectiveStart()
    {
        return $this->container['effective_start'];
    }

    /**
     * Sets effective_start
     *
     * @param string|null $effective_start Start date for the benefit.
     *
     * @return self
     */
    public function setEffectiveStart($effective_start)
    {
        if (is_null($effective_start)) {
            throw new \InvalidArgumentException('non-nullable effective_start cannot be null');
        }
        $this->container['effective_start'] = $effective_start;

        return $this;
    }

    /**
     * Gets effective_end
     *
     * @return string|null
     */
    public function getEffectiveEnd()
    {
        return $this->container['effective_end'];
    }

    /**
     * Sets effective_end
     *
     * @param string|null $effective_end End date for the benefit.
     *
     * @return self
     */
    public function setEffectiveEnd($effective_end)
    {
        if (is_null($effective_end)) {
            throw new \InvalidArgumentException('non-nullable effective_end cannot be null');
        }
        $this->container['effective_end'] = $effective_end;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return string|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param string|null $metadata Additional loosely structured information to associate with this company benefit.
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }
        $this->container['metadata'] = $metadata;

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


