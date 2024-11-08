<?php
/**
 * CreateAPostTaxDeductionRequest
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
 * CreateAPostTaxDeductionRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateAPostTaxDeductionRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'create_a_post_tax_deduction_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'employee' => 'string',
        'description' => 'string',
        'effective_start' => '\DateTime',
        'effective_end' => '\DateTime',
        'miscellaneous' => '\OpenAPI\Client\Model\CreateAPostTaxDeductionRequestMiscellaneous',
        'child_support' => '\OpenAPI\Client\Model\CreateAPostTaxDeductionRequestChildSupport',
        'metadata' => 'string',
        'managed' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'employee' => null,
        'description' => null,
        'effective_start' => 'date',
        'effective_end' => 'date',
        'miscellaneous' => null,
        'child_support' => null,
        'metadata' => 'json',
        'managed' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'employee' => false,
        'description' => false,
        'effective_start' => false,
        'effective_end' => false,
        'miscellaneous' => false,
        'child_support' => false,
        'metadata' => false,
        'managed' => false
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
        'type' => 'type',
        'employee' => 'employee',
        'description' => 'description',
        'effective_start' => 'effective_start',
        'effective_end' => 'effective_end',
        'miscellaneous' => 'miscellaneous',
        'child_support' => 'child_support',
        'metadata' => 'metadata',
        'managed' => 'managed'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'employee' => 'setEmployee',
        'description' => 'setDescription',
        'effective_start' => 'setEffectiveStart',
        'effective_end' => 'setEffectiveEnd',
        'miscellaneous' => 'setMiscellaneous',
        'child_support' => 'setChildSupport',
        'metadata' => 'setMetadata',
        'managed' => 'setManaged'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'employee' => 'getEmployee',
        'description' => 'getDescription',
        'effective_start' => 'getEffectiveStart',
        'effective_end' => 'getEffectiveEnd',
        'miscellaneous' => 'getMiscellaneous',
        'child_support' => 'getChildSupport',
        'metadata' => 'getMetadata',
        'managed' => 'getManaged'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('employee', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('effective_start', $data ?? [], null);
        $this->setIfExists('effective_end', $data ?? [], null);
        $this->setIfExists('miscellaneous', $data ?? [], null);
        $this->setIfExists('child_support', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('managed', $data ?? [], null);
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['employee'] === null) {
            $invalidProperties[] = "'employee' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['effective_start'] === null) {
            $invalidProperties[] = "'effective_start' can't be null";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of post-tax deduction. May be miscellaneous or child_support.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets employee
     *
     * @return string
     */
    public function getEmployee()
    {
        return $this->container['employee'];
    }

    /**
     * Sets employee
     *
     * @param string $employee ID of the employee to be associated with the post-tax deduction.
     *
     * @return self
     */
    public function setEmployee($employee)
    {
        if (is_null($employee)) {
            throw new \InvalidArgumentException('non-nullable employee cannot be null');
        }
        $this->container['employee'] = $employee;

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
     * @param string $description A description of this deduction. Maximum length of 255 characters.
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
     * Gets effective_start
     *
     * @return \DateTime
     */
    public function getEffectiveStart()
    {
        return $this->container['effective_start'];
    }

    /**
     * Sets effective_start
     *
     * @param \DateTime $effective_start Start date for the deduction
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
     * @return \DateTime|null
     */
    public function getEffectiveEnd()
    {
        return $this->container['effective_end'];
    }

    /**
     * Sets effective_end
     *
     * @param \DateTime|null $effective_end End date for the deduction
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
     * Gets miscellaneous
     *
     * @return \OpenAPI\Client\Model\CreateAPostTaxDeductionRequestMiscellaneous|null
     */
    public function getMiscellaneous()
    {
        return $this->container['miscellaneous'];
    }

    /**
     * Sets miscellaneous
     *
     * @param \OpenAPI\Client\Model\CreateAPostTaxDeductionRequestMiscellaneous|null $miscellaneous miscellaneous
     *
     * @return self
     */
    public function setMiscellaneous($miscellaneous)
    {
        if (is_null($miscellaneous)) {
            throw new \InvalidArgumentException('non-nullable miscellaneous cannot be null');
        }
        $this->container['miscellaneous'] = $miscellaneous;

        return $this;
    }

    /**
     * Gets child_support
     *
     * @return \OpenAPI\Client\Model\CreateAPostTaxDeductionRequestChildSupport|null
     */
    public function getChildSupport()
    {
        return $this->container['child_support'];
    }

    /**
     * Sets child_support
     *
     * @param \OpenAPI\Client\Model\CreateAPostTaxDeductionRequestChildSupport|null $child_support child_support
     *
     * @return self
     */
    public function setChildSupport($child_support)
    {
        if (is_null($child_support)) {
            throw new \InvalidArgumentException('non-nullable child_support cannot be null');
        }
        $this->container['child_support'] = $child_support;

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
     * @param string|null $metadata Additional loosely structured information to associate with the post-tax deduction
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
     * Gets managed
     *
     * @return bool|null
     */
    public function getManaged()
    {
        return $this->container['managed'];
    }

    /**
     * Sets managed
     *
     * @param bool|null $managed Denotes whether or not the post-tax deduction should be remitted by Check. Applicable to child support payments only, more info can be found [here](https://docs.checkhq.com/docs/post-tax-deductions#remitting-child-support-garnishments).
     *
     * @return self
     */
    public function setManaged($managed)
    {
        if (is_null($managed)) {
            throw new \InvalidArgumentException('non-nullable managed cannot be null');
        }
        $this->container['managed'] = $managed;

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


