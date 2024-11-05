<?php
/**
 * CompanyTaxSetupRequest
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
 * CompanyTaxSetupRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CompanyTaxSetupRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'company_tax_setup_request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'signer_name' => 'string',
        'signer_title' => 'string',
        'email' => 'string',
        'signatory' => 'string',
        'jurisdiction' => 'string',
        'federal_only' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'signer_name' => null,
        'signer_title' => null,
        'email' => null,
        'signatory' => null,
        'jurisdiction' => null,
        'federal_only' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'signer_name' => false,
        'signer_title' => false,
        'email' => false,
        'signatory' => false,
        'jurisdiction' => false,
        'federal_only' => false
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
        'signer_name' => 'signer_name',
        'signer_title' => 'signer_title',
        'email' => 'email',
        'signatory' => 'signatory',
        'jurisdiction' => 'jurisdiction',
        'federal_only' => 'federal_only'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'signer_name' => 'setSignerName',
        'signer_title' => 'setSignerTitle',
        'email' => 'setEmail',
        'signatory' => 'setSignatory',
        'jurisdiction' => 'setJurisdiction',
        'federal_only' => 'setFederalOnly'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'signer_name' => 'getSignerName',
        'signer_title' => 'getSignerTitle',
        'email' => 'getEmail',
        'signatory' => 'getSignatory',
        'jurisdiction' => 'getJurisdiction',
        'federal_only' => 'getFederalOnly'
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
        $this->setIfExists('signer_name', $data ?? [], null);
        $this->setIfExists('signer_title', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('signatory', $data ?? [], null);
        $this->setIfExists('jurisdiction', $data ?? [], 'FED');
        $this->setIfExists('federal_only', $data ?? [], false);
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

        if ($this->container['signer_name'] === null) {
            $invalidProperties[] = "'signer_name' can't be null";
        }
        if ($this->container['signer_title'] === null) {
            $invalidProperties[] = "'signer_title' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
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
     * Gets signer_name
     *
     * @return string
     */
    public function getSignerName()
    {
        return $this->container['signer_name'];
    }

    /**
     * Sets signer_name
     *
     * @param string $signer_name The name of the person who has permission to onboard on behalf of the company.
     *
     * @return self
     */
    public function setSignerName($signer_name)
    {
        if (is_null($signer_name)) {
            throw new \InvalidArgumentException('non-nullable signer_name cannot be null');
        }
        $this->container['signer_name'] = $signer_name;

        return $this;
    }

    /**
     * Gets signer_title
     *
     * @return string
     */
    public function getSignerTitle()
    {
        return $this->container['signer_title'];
    }

    /**
     * Sets signer_title
     *
     * @param string $signer_title The title of the person who has permission to onboard on behalf of the company (e.g. \"Officer\", \"Manager\", etc.).
     *
     * @return self
     */
    public function setSignerTitle($signer_title)
    {
        if (is_null($signer_title)) {
            throw new \InvalidArgumentException('non-nullable signer_title cannot be null');
        }
        $this->container['signer_title'] = $signer_title;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email The email of the person who has permission to onboard on behalf of the company
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
     * Gets signatory
     *
     * @return string|null
     */
    public function getSignatory()
    {
        return $this->container['signatory'];
    }

    /**
     * Sets signatory
     *
     * @param string|null $signatory The ID of the signatory object for this company. You may use either a signatory ID or the three body params above
     *
     * @return self
     */
    public function setSignatory($signatory)
    {
        if (is_null($signatory)) {
            throw new \InvalidArgumentException('non-nullable signatory cannot be null');
        }
        $this->container['signatory'] = $signatory;

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
     * @param string|null $jurisdiction Initially select the provided jurisdiction. Use the value “FED” for federal or the last 2 letters of the ISO 3166-2:US code for the jurisdiction.
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
     * Gets federal_only
     *
     * @return bool|null
     */
    public function getFederalOnly()
    {
        return $this->container['federal_only'];
    }

    /**
     * Sets federal_only
     *
     * @param bool|null $federal_only Only show the Federal tab if True.
     *
     * @return self
     */
    public function setFederalOnly($federal_only)
    {
        if (is_null($federal_only)) {
            throw new \InvalidArgumentException('non-nullable federal_only cannot be null');
        }
        $this->container['federal_only'] = $federal_only;

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


