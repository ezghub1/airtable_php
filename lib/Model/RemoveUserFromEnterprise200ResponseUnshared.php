<?php
/**
 * RemoveUserFromEnterprise200ResponseUnshared
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  Ez128\Airtable
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Airtable API
 *
 * The Airtable REST API. Please see https://airtable.com/developers/ for more details.
 *
 * The version of the OpenAPI document: 0
 * Contact: help@airtable.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.14.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Ez128\Airtable\Model;

use \ArrayAccess;
use \Ez128\Airtable\ObjectSerializer;

/**
 * RemoveUserFromEnterprise200ResponseUnshared Class Doc Comment
 *
 * @category Class
 * @description A list of JSON objects representing workspaces, bases, and interfaces the user was unshared from.
 * @package  Ez128\Airtable
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class RemoveUserFromEnterprise200ResponseUnshared implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'remove_user_from_enterprise_200_response_unshared';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'bases' => '\Ez128\Airtable\Model\RemoveUserFromEnterprise200ResponseUnsharedBasesInner[]',
        'interfaces' => '\Ez128\Airtable\Model\RemoveUserFromEnterprise200ResponseUnsharedInterfacesInner[]',
        'workspaces' => '\Ez128\Airtable\Model\RemoveUserFromEnterprise200ResponseUnsharedWorkspacesInner[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'bases' => null,
        'interfaces' => null,
        'workspaces' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'bases' => false,
        'interfaces' => false,
        'workspaces' => false
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
        'bases' => 'bases',
        'interfaces' => 'interfaces',
        'workspaces' => 'workspaces'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bases' => 'setBases',
        'interfaces' => 'setInterfaces',
        'workspaces' => 'setWorkspaces'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bases' => 'getBases',
        'interfaces' => 'getInterfaces',
        'workspaces' => 'getWorkspaces'
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('bases', $data ?? [], null);
        $this->setIfExists('interfaces', $data ?? [], null);
        $this->setIfExists('workspaces', $data ?? [], null);
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

        if ($this->container['bases'] === null) {
            $invalidProperties[] = "'bases' can't be null";
        }
        if ($this->container['interfaces'] === null) {
            $invalidProperties[] = "'interfaces' can't be null";
        }
        if ($this->container['workspaces'] === null) {
            $invalidProperties[] = "'workspaces' can't be null";
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
     * Gets bases
     *
     * @return \Ez128\Airtable\Model\RemoveUserFromEnterprise200ResponseUnsharedBasesInner[]
     */
    public function getBases()
    {
        return $this->container['bases'];
    }

    /**
     * Sets bases
     *
     * @param \Ez128\Airtable\Model\RemoveUserFromEnterprise200ResponseUnsharedBasesInner[] $bases bases
     *
     * @return self
     */
    public function setBases($bases)
    {
        if (is_null($bases)) {
            throw new \InvalidArgumentException('non-nullable bases cannot be null');
        }
        $this->container['bases'] = $bases;

        return $this;
    }

    /**
     * Gets interfaces
     *
     * @return \Ez128\Airtable\Model\RemoveUserFromEnterprise200ResponseUnsharedInterfacesInner[]
     */
    public function getInterfaces()
    {
        return $this->container['interfaces'];
    }

    /**
     * Sets interfaces
     *
     * @param \Ez128\Airtable\Model\RemoveUserFromEnterprise200ResponseUnsharedInterfacesInner[] $interfaces interfaces
     *
     * @return self
     */
    public function setInterfaces($interfaces)
    {
        if (is_null($interfaces)) {
            throw new \InvalidArgumentException('non-nullable interfaces cannot be null');
        }
        $this->container['interfaces'] = $interfaces;

        return $this;
    }

    /**
     * Gets workspaces
     *
     * @return \Ez128\Airtable\Model\RemoveUserFromEnterprise200ResponseUnsharedWorkspacesInner[]
     */
    public function getWorkspaces()
    {
        return $this->container['workspaces'];
    }

    /**
     * Sets workspaces
     *
     * @param \Ez128\Airtable\Model\RemoveUserFromEnterprise200ResponseUnsharedWorkspacesInner[] $workspaces workspaces
     *
     * @return self
     */
    public function setWorkspaces($workspaces)
    {
        if (is_null($workspaces)) {
            throw new \InvalidArgumentException('non-nullable workspaces cannot be null');
        }
        $this->container['workspaces'] = $workspaces;

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


