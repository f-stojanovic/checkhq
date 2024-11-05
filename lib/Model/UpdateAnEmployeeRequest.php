<?php
/**
 * UpdateAnEmployeeRequest
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
 * UpdateAnEmployeeRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class UpdateAnEmployeeRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'update_an_employee_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'middle_name' => 'string',
        'last_name' => 'string',
        'email' => 'string',
        'dob' => '\DateTime',
        'residence' => '\OpenAPI\Client\Model\UpdateAnEmployeeRequestResidence',
        'start_date' => '\DateTime',
        'termination_date' => '\DateTime',
        'default_net_pay_split' => 'string',
        'workplaces' => 'string[]',
        'primary_workplace' => 'string',
        'ssn' => 'string',
        'payment_method_preference' => 'string',
        'active' => 'bool',
        'w2_electronic_consent_provided' => 'bool',
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
        'first_name' => null,
        'middle_name' => null,
        'last_name' => null,
        'email' => null,
        'dob' => 'date',
        'residence' => null,
        'start_date' => 'date',
        'termination_date' => 'date',
        'default_net_pay_split' => null,
        'workplaces' => null,
        'primary_workplace' => null,
        'ssn' => null,
        'payment_method_preference' => null,
        'active' => null,
        'w2_electronic_consent_provided' => null,
        'metadata' => 'json'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'first_name' => false,
        'middle_name' => false,
        'last_name' => false,
        'email' => false,
        'dob' => false,
        'residence' => false,
        'start_date' => false,
        'termination_date' => false,
        'default_net_pay_split' => false,
        'workplaces' => false,
        'primary_workplace' => false,
        'ssn' => false,
        'payment_method_preference' => false,
        'active' => false,
        'w2_electronic_consent_provided' => false,
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
        'first_name' => 'first_name',
        'middle_name' => 'middle_name',
        'last_name' => 'last_name',
        'email' => 'email',
        'dob' => 'dob',
        'residence' => 'residence',
        'start_date' => 'start_date',
        'termination_date' => 'termination_date',
        'default_net_pay_split' => 'default_net_pay_split',
        'workplaces' => 'workplaces',
        'primary_workplace' => 'primary_workplace',
        'ssn' => 'ssn',
        'payment_method_preference' => 'payment_method_preference',
        'active' => 'active',
        'w2_electronic_consent_provided' => 'w2_electronic_consent_provided',
        'metadata' => 'metadata'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'middle_name' => 'setMiddleName',
        'last_name' => 'setLastName',
        'email' => 'setEmail',
        'dob' => 'setDob',
        'residence' => 'setResidence',
        'start_date' => 'setStartDate',
        'termination_date' => 'setTerminationDate',
        'default_net_pay_split' => 'setDefaultNetPaySplit',
        'workplaces' => 'setWorkplaces',
        'primary_workplace' => 'setPrimaryWorkplace',
        'ssn' => 'setSsn',
        'payment_method_preference' => 'setPaymentMethodPreference',
        'active' => 'setActive',
        'w2_electronic_consent_provided' => 'setW2ElectronicConsentProvided',
        'metadata' => 'setMetadata'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'middle_name' => 'getMiddleName',
        'last_name' => 'getLastName',
        'email' => 'getEmail',
        'dob' => 'getDob',
        'residence' => 'getResidence',
        'start_date' => 'getStartDate',
        'termination_date' => 'getTerminationDate',
        'default_net_pay_split' => 'getDefaultNetPaySplit',
        'workplaces' => 'getWorkplaces',
        'primary_workplace' => 'getPrimaryWorkplace',
        'ssn' => 'getSsn',
        'payment_method_preference' => 'getPaymentMethodPreference',
        'active' => 'getActive',
        'w2_electronic_consent_provided' => 'getW2ElectronicConsentProvided',
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
        $this->setIfExists('first_name', $data ?? [], null);
        $this->setIfExists('middle_name', $data ?? [], null);
        $this->setIfExists('last_name', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('dob', $data ?? [], null);
        $this->setIfExists('residence', $data ?? [], null);
        $this->setIfExists('start_date', $data ?? [], null);
        $this->setIfExists('termination_date', $data ?? [], null);
        $this->setIfExists('default_net_pay_split', $data ?? [], null);
        $this->setIfExists('workplaces', $data ?? [], null);
        $this->setIfExists('primary_workplace', $data ?? [], null);
        $this->setIfExists('ssn', $data ?? [], null);
        $this->setIfExists('payment_method_preference', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('w2_electronic_consent_provided', $data ?? [], false);
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
     * Gets first_name
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string|null $first_name Employee’s first name
     *
     * @return self
     */
    public function setFirstName($first_name)
    {
        if (is_null($first_name)) {
            throw new \InvalidArgumentException('non-nullable first_name cannot be null');
        }
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets middle_name
     *
     * @return string|null
     */
    public function getMiddleName()
    {
        return $this->container['middle_name'];
    }

    /**
     * Sets middle_name
     *
     * @param string|null $middle_name Employee’s middle name
     *
     * @return self
     */
    public function setMiddleName($middle_name)
    {
        if (is_null($middle_name)) {
            throw new \InvalidArgumentException('non-nullable middle_name cannot be null');
        }
        $this->container['middle_name'] = $middle_name;

        return $this;
    }

    /**
     * Gets last_name
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string|null $last_name Employee’s last name
     *
     * @return self
     */
    public function setLastName($last_name)
    {
        if (is_null($last_name)) {
            throw new \InvalidArgumentException('non-nullable last_name cannot be null');
        }
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Employee’s email address
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets dob
     *
     * @return \DateTime|null
     */
    public function getDob()
    {
        return $this->container['dob'];
    }

    /**
     * Sets dob
     *
     * @param \DateTime|null $dob Employee’s date of birth
     *
     * @return self
     */
    public function setDob($dob)
    {
        if (is_null($dob)) {
            throw new \InvalidArgumentException('non-nullable dob cannot be null');
        }
        $this->container['dob'] = $dob;

        return $this;
    }

    /**
     * Gets residence
     *
     * @return \OpenAPI\Client\Model\UpdateAnEmployeeRequestResidence|null
     */
    public function getResidence()
    {
        return $this->container['residence'];
    }

    /**
     * Sets residence
     *
     * @param \OpenAPI\Client\Model\UpdateAnEmployeeRequestResidence|null $residence residence
     *
     * @return self
     */
    public function setResidence($residence)
    {
        if (is_null($residence)) {
            throw new \InvalidArgumentException('non-nullable residence cannot be null');
        }
        $this->container['residence'] = $residence;

        return $this;
    }

    /**
     * Gets start_date
     *
     * @return \DateTime|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     *
     * @param \DateTime|null $start_date Most recent start date of employment
     *
     * @return self
     */
    public function setStartDate($start_date)
    {
        if (is_null($start_date)) {
            throw new \InvalidArgumentException('non-nullable start_date cannot be null');
        }
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets termination_date
     *
     * @return \DateTime|null
     */
    public function getTerminationDate()
    {
        return $this->container['termination_date'];
    }

    /**
     * Sets termination_date
     *
     * @param \DateTime|null $termination_date Most recent date of employment termination. Will be set to null if a more recent start date is set.
     *
     * @return self
     */
    public function setTerminationDate($termination_date)
    {
        if (is_null($termination_date)) {
            throw new \InvalidArgumentException('non-nullable termination_date cannot be null');
        }
        $this->container['termination_date'] = $termination_date;

        return $this;
    }

    /**
     * Gets default_net_pay_split
     *
     * @return string|null
     */
    public function getDefaultNetPaySplit()
    {
        return $this->container['default_net_pay_split'];
    }

    /**
     * Sets default_net_pay_split
     *
     * @param string|null $default_net_pay_split ID of the employee's net pay split
     *
     * @return self
     */
    public function setDefaultNetPaySplit($default_net_pay_split)
    {
        if (is_null($default_net_pay_split)) {
            throw new \InvalidArgumentException('non-nullable default_net_pay_split cannot be null');
        }
        $this->container['default_net_pay_split'] = $default_net_pay_split;

        return $this;
    }

    /**
     * Gets workplaces
     *
     * @return string[]|null
     */
    public function getWorkplaces()
    {
        return $this->container['workplaces'];
    }

    /**
     * Sets workplaces
     *
     * @param string[]|null $workplaces IDs of workplaces where the employee works
     *
     * @return self
     */
    public function setWorkplaces($workplaces)
    {
        if (is_null($workplaces)) {
            throw new \InvalidArgumentException('non-nullable workplaces cannot be null');
        }
        $this->container['workplaces'] = $workplaces;

        return $this;
    }

    /**
     * Gets primary_workplace
     *
     * @return string|null
     */
    public function getPrimaryWorkplace()
    {
        return $this->container['primary_workplace'];
    }

    /**
     * Sets primary_workplace
     *
     * @param string|null $primary_workplace The Workplace ID of the employee's primary workplace.
     *
     * @return self
     */
    public function setPrimaryWorkplace($primary_workplace)
    {
        if (is_null($primary_workplace)) {
            throw new \InvalidArgumentException('non-nullable primary_workplace cannot be null');
        }
        $this->container['primary_workplace'] = $primary_workplace;

        return $this;
    }

    /**
     * Gets ssn
     *
     * @return string|null
     */
    public function getSsn()
    {
        return $this->container['ssn'];
    }

    /**
     * Sets ssn
     *
     * @param string|null $ssn Employee's TIN (usually their Social Security Number). Must be unique across all employees in a company. Only the last four digits of an SSN will be made available in `ssn_last_four` after being set.
     *
     * @return self
     */
    public function setSsn($ssn)
    {
        if (is_null($ssn)) {
            throw new \InvalidArgumentException('non-nullable ssn cannot be null');
        }
        $this->container['ssn'] = $ssn;

        return $this;
    }

    /**
     * Gets payment_method_preference
     *
     * @return string|null
     */
    public function getPaymentMethodPreference()
    {
        return $this->container['payment_method_preference'];
    }

    /**
     * Sets payment_method_preference
     *
     * @param string|null $payment_method_preference Either \"direct_deposit\" or \"manual\"
     *
     * @return self
     */
    public function setPaymentMethodPreference($payment_method_preference)
    {
        if (is_null($payment_method_preference)) {
            throw new \InvalidArgumentException('non-nullable payment_method_preference cannot be null');
        }
        $this->container['payment_method_preference'] = $payment_method_preference;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Indicates whether the employee is currently employed. Used only for filtering.
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets w2_electronic_consent_provided
     *
     * @return bool|null
     */
    public function getW2ElectronicConsentProvided()
    {
        return $this->container['w2_electronic_consent_provided'];
    }

    /**
     * Sets w2_electronic_consent_provided
     *
     * @param bool|null $w2_electronic_consent_provided Indicates whether the employee has opted into electronic delivery of W2 PDF.
     *
     * @return self
     */
    public function setW2ElectronicConsentProvided($w2_electronic_consent_provided)
    {
        if (is_null($w2_electronic_consent_provided)) {
            throw new \InvalidArgumentException('non-nullable w2_electronic_consent_provided cannot be null');
        }
        $this->container['w2_electronic_consent_provided'] = $w2_electronic_consent_provided;

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
     * @param string|null $metadata Additional loosely structured information to associate with the employee
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

