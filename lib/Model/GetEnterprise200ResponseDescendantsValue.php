<?php
/**
 * GetEnterprise200ResponseDescendantsValue
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
 * GetEnterprise200ResponseDescendantsValue Class Doc Comment
 *
 * @category Class
 * @package  Ez128\Airtable
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class GetEnterprise200ResponseDescendantsValue implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'get_enterprise_200_response_descendants_value';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'group_ids' => 'string[]',
        'user_ids' => 'string[]',
        'workspace_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'group_ids' => null,
        'user_ids' => null,
        'workspace_ids' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'group_ids' => false,
        'user_ids' => false,
        'workspace_ids' => false
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
        'group_ids' => 'groupIds',
        'user_ids' => 'userIds',
        'workspace_ids' => 'workspaceIds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'group_ids' => 'setGroupIds',
        'user_ids' => 'setUserIds',
        'workspace_ids' => 'setWorkspaceIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'group_ids' => 'getGroupIds',
        'user_ids' => 'getUserIds',
        'workspace_ids' => 'getWorkspaceIds'
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
        $this->setIfExists('group_ids', $data ?? [], null);
        $this->setIfExists('user_ids', $data ?? [], null);
        $this->setIfExists('workspace_ids', $data ?? [], null);
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

        if ($this->container['group_ids'] === null) {
            $invalidProperties[] = "'group_ids' can't be null";
        }
        if ($this->container['user_ids'] === null) {
            $invalidProperties[] = "'user_ids' can't be null";
        }
        if ($this->container['workspace_ids'] === null) {
            $invalidProperties[] = "'workspace_ids' can't be null";
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
     * Gets group_ids
     *
     * @return string[]
     */
    public function getGroupIds()
    {
        return $this->container['group_ids'];
    }

    /**
     * Sets group_ids
     *
     * @param string[] $group_ids group_ids
     *
     * @return self
     */
    public function setGroupIds($group_ids)
    {
        if (is_null($group_ids)) {
            throw new \InvalidArgumentException('non-nullable group_ids cannot be null');
        }
        $this->container['group_ids'] = $group_ids;

        return $this;
    }

    /**
     * Gets user_ids
     *
     * @return string[]
     */
    public function getUserIds()
    {
        return $this->container['user_ids'];
    }

    /**
     * Sets user_ids
     *
     * @param string[] $user_ids user_ids
     *
     * @return self
     */
    public function setUserIds($user_ids)
    {
        if (is_null($user_ids)) {
            throw new \InvalidArgumentException('non-nullable user_ids cannot be null');
        }
        $this->container['user_ids'] = $user_ids;

        return $this;
    }

    /**
     * Gets workspace_ids
     *
     * @return string[]
     */
    public function getWorkspaceIds()
    {
        return $this->container['workspace_ids'];
    }

    /**
     * Sets workspace_ids
     *
     * @param string[] $workspace_ids workspace_ids
     *
     * @return self
     */
    public function setWorkspaceIds($workspace_ids)
    {
        if (is_null($workspace_ids)) {
            throw new \InvalidArgumentException('non-nullable workspace_ids cannot be null');
        }
        $this->container['workspace_ids'] = $workspace_ids;

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


