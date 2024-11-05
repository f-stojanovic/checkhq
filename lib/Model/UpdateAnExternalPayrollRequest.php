<?php
/**
 * UpdateAnExternalPayrollRequest
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
 * UpdateAnExternalPayrollRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateAnExternalPayrollRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'update_an_external_payroll_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company' => 'string',
        'period_start' => '\DateTime',
        'period_end' => '\DateTime',
        'payday' => '\DateTime',
        'pay_frequency' => 'string',
        'items' => '\OpenAPI\Client\Model\CreateAnExternalPayrollRequestItemsInner[]',
        'contractor_payments' => '\OpenAPI\Client\Model\CreateAnExternalPayrollRequestContractorPaymentsInner[]'
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
        'period_start' => 'date',
        'period_end' => 'date',
        'payday' => 'date',
        'pay_frequency' => null,
        'items' => null,
        'contractor_payments' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'company' => false,
        'period_start' => false,
        'period_end' => false,
        'payday' => false,
        'pay_frequency' => false,
        'items' => false,
        'contractor_payments' => false
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
        'period_start' => 'period_start',
        'period_end' => 'period_end',
        'payday' => 'payday',
        'pay_frequency' => 'pay_frequency',
        'items' => 'items',
        'contractor_payments' => 'contractor_payments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company' => 'setCompany',
        'period_start' => 'setPeriodStart',
        'period_end' => 'setPeriodEnd',
        'payday' => 'setPayday',
        'pay_frequency' => 'setPayFrequency',
        'items' => 'setItems',
        'contractor_payments' => 'setContractorPayments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company' => 'getCompany',
        'period_start' => 'getPeriodStart',
        'period_end' => 'getPeriodEnd',
        'payday' => 'getPayday',
        'pay_frequency' => 'getPayFrequency',
        'items' => 'getItems',
        'contractor_payments' => 'getContractorPayments'
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
        $this->setIfExists('period_start', $data ?? [], null);
        $this->setIfExists('period_end', $data ?? [], null);
        $this->setIfExists('payday', $data ?? [], null);
        $this->setIfExists('pay_frequency', $data ?? [], null);
        $this->setIfExists('items', $data ?? [], null);
        $this->setIfExists('contractor_payments', $data ?? [], null);
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
     * Gets company
     *
     * @return string|null
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     *
     * @param string|null $company ID of the company this external payroll is for.
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
     * Gets period_start
     *
     * @return \DateTime|null
     */
    public function getPeriodStart()
    {
        return $this->container['period_start'];
    }

    /**
     * Sets period_start
     *
     * @param \DateTime|null $period_start The start of the date range that the payroll covers.
     *
     * @return self
     */
    public function setPeriodStart($period_start)
    {
        if (is_null($period_start)) {
            throw new \InvalidArgumentException('non-nullable period_start cannot be null');
        }
        $this->container['period_start'] = $period_start;

        return $this;
    }

    /**
     * Gets period_end
     *
     * @return \DateTime|null
     */
    public function getPeriodEnd()
    {
        return $this->container['period_end'];
    }

    /**
     * Sets period_end
     *
     * @param \DateTime|null $period_end The end of the date range that the payroll covers.
     *
     * @return self
     */
    public function setPeriodEnd($period_end)
    {
        if (is_null($period_end)) {
            throw new \InvalidArgumentException('non-nullable period_end cannot be null');
        }
        $this->container['period_end'] = $period_end;

        return $this;
    }

    /**
     * Gets payday
     *
     * @return \DateTime|null
     */
    public function getPayday()
    {
        return $this->container['payday'];
    }

    /**
     * Sets payday
     *
     * @param \DateTime|null $payday The date on which employees were paid for the payroll.
     *
     * @return self
     */
    public function setPayday($payday)
    {
        if (is_null($payday)) {
            throw new \InvalidArgumentException('non-nullable payday cannot be null');
        }
        $this->container['payday'] = $payday;

        return $this;
    }

    /**
     * Gets pay_frequency
     *
     * @return string|null
     */
    public function getPayFrequency()
    {
        return $this->container['pay_frequency'];
    }

    /**
     * Sets pay_frequency
     *
     * @param string|null $pay_frequency Frequency at which the external payroll was paid
     *
     * @return self
     */
    public function setPayFrequency($pay_frequency)
    {
        if (is_null($pay_frequency)) {
            throw new \InvalidArgumentException('non-nullable pay_frequency cannot be null');
        }
        $this->container['pay_frequency'] = $pay_frequency;

        return $this;
    }

    /**
     * Gets items
     *
     * @return \OpenAPI\Client\Model\CreateAnExternalPayrollRequestItemsInner[]|null
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \OpenAPI\Client\Model\CreateAnExternalPayrollRequestItemsInner[]|null $items The set of [external payroll items](ref:external-payroll-item-object) associated with the payroll.
     *
     * @return self
     */
    public function setItems($items)
    {
        if (is_null($items)) {
            throw new \InvalidArgumentException('non-nullable items cannot be null');
        }
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Gets contractor_payments
     *
     * @return \OpenAPI\Client\Model\CreateAnExternalPayrollRequestContractorPaymentsInner[]|null
     */
    public function getContractorPayments()
    {
        return $this->container['contractor_payments'];
    }

    /**
     * Sets contractor_payments
     *
     * @param \OpenAPI\Client\Model\CreateAnExternalPayrollRequestContractorPaymentsInner[]|null $contractor_payments The set of [contractor payments](ref:the-contractor-payment-object) associated with the payroll.
     *
     * @return self
     */
    public function setContractorPayments($contractor_payments)
    {
        if (is_null($contractor_payments)) {
            throw new \InvalidArgumentException('non-nullable contractor_payments cannot be null');
        }
        $this->container['contractor_payments'] = $contractor_payments;

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

