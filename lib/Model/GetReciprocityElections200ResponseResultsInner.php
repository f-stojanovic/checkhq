<?php
/**
 * GetReciprocityElections200ResponseResultsInner
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
 * GetReciprocityElections200ResponseResultsInner Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetReciprocityElections200ResponseResultsInner implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_reciprocity_elections_200_response_results_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'opt_in' => 'bool',
        'effective_start' => 'string',
        'jurisdiction' => 'string',
        'jurisdiction_name' => 'string',
        'applicable' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'opt_in' => null,
        'effective_start' => null,
        'jurisdiction' => null,
        'jurisdiction_name' => null,
        'applicable' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'opt_in' => false,
        'effective_start' => false,
        'jurisdiction' => false,
        'jurisdiction_name' => false,
        'applicable' => false
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
        'opt_in' => 'opt_in',
        'effective_start' => 'effective_start',
        'jurisdiction' => 'jurisdiction',
        'jurisdiction_name' => 'jurisdiction_name',
        'applicable' => 'applicable'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'opt_in' => 'setOptIn',
        'effective_start' => 'setEffectiveStart',
        'jurisdiction' => 'setJurisdiction',
        'jurisdiction_name' => 'setJurisdictionName',
        'applicable' => 'setApplicable'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'opt_in' => 'getOptIn',
        'effective_start' => 'getEffectiveStart',
        'jurisdiction' => 'getJurisdiction',
        'jurisdiction_name' => 'getJurisdictionName',
        'applicable' => 'getApplicable'
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
        $this->setIfExists('opt_in', $data ?? [], true);
        $this->setIfExists('effective_start', $data ?? [], null);
        $this->setIfExists('jurisdiction', $data ?? [], null);
        $this->setIfExists('jurisdiction_name', $data ?? [], null);
        $this->setIfExists('applicable', $data ?? [], true);
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
     * Gets opt_in
     *
     * @return bool|null
     */
    public function getOptIn()
    {
        return $this->container['opt_in'];
    }

    /**
     * Sets opt_in
     *
     * @param bool|null $opt_in opt_in
     *
     * @return self
     */
    public function setOptIn($opt_in)
    {
        if (is_null($opt_in)) {
            throw new \InvalidArgumentException('non-nullable opt_in cannot be null');
        }
        $this->container['opt_in'] = $opt_in;

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
     * @param string|null $effective_start effective_start
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
     * Gets jurisdiction
     *
     * @return string|null
     */
    public function getJurisdiction()
    {
        return $this->container['jurisdiction'];
    }

    /**
     * Sets jurisdiction
     *
     * @param string|null $jurisdiction jurisdiction
     *
     * @return self
     */
    public function setJurisdiction($jurisdiction)
    {
        if (is_null($jurisdiction)) {
            throw new \InvalidArgumentException('non-nullable jurisdiction cannot be null');
        }
        $this->container['jurisdiction'] = $jurisdiction;

        return $this;
    }

    /**
     * Gets jurisdiction_name
     *
     * @return string|null
     */
    public function getJurisdictionName()
    {
        return $this->container['jurisdiction_name'];
    }

    /**
     * Sets jurisdiction_name
     *
     * @param string|null $jurisdiction_name jurisdiction_name
     *
     * @return self
     */
    public function setJurisdictionName($jurisdiction_name)
    {
        if (is_null($jurisdiction_name)) {
            throw new \InvalidArgumentException('non-nullable jurisdiction_name cannot be null');
        }
        $this->container['jurisdiction_name'] = $jurisdiction_name;

        return $this;
    }

    /**
     * Gets applicable
     *
     * @return bool|null
     */
    public function getApplicable()
    {
        return $this->container['applicable'];
    }

    /**
     * Sets applicable
     *
     * @param bool|null $applicable applicable
     *
     * @return self
     */
    public function setApplicable($applicable)
    {
        if (is_null($applicable)) {
            throw new \InvalidArgumentException('non-nullable applicable cannot be null');
        }
        $this->container['applicable'] = $applicable;

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

