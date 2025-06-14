<?php
/**
 * CellValue
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
 * CellValue Class Doc Comment
 *
 * @category Class
 * @package  Ez128\Airtable
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CellValue implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Cell-value';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'is_stale' => 'bool',
        'state' => 'string',
        'value' => 'string',
        'error_type' => 'string',
        'text' => 'string',
        'type' => 'string',
        'label' => 'string',
        'url' => 'string',
        'email' => 'string',
        'id' => 'string',
        'name' => 'string',
        'permission_level' => 'string',
        'profile_pic_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'is_stale' => null,
        'state' => null,
        'value' => null,
        'error_type' => null,
        'text' => null,
        'type' => null,
        'label' => null,
        'url' => null,
        'email' => null,
        'id' => null,
        'name' => null,
        'permission_level' => null,
        'profile_pic_url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'is_stale' => false,
        'state' => false,
        'value' => false,
        'error_type' => false,
        'text' => false,
        'type' => false,
        'label' => false,
        'url' => false,
        'email' => false,
        'id' => false,
        'name' => false,
        'permission_level' => false,
        'profile_pic_url' => false
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
        'is_stale' => 'isStale',
        'state' => 'state',
        'value' => 'value',
        'error_type' => 'errorType',
        'text' => 'text',
        'type' => 'type',
        'label' => 'label',
        'url' => 'url',
        'email' => 'email',
        'id' => 'id',
        'name' => 'name',
        'permission_level' => 'permissionLevel',
        'profile_pic_url' => 'profilePicUrl'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'is_stale' => 'setIsStale',
        'state' => 'setState',
        'value' => 'setValue',
        'error_type' => 'setErrorType',
        'text' => 'setText',
        'type' => 'setType',
        'label' => 'setLabel',
        'url' => 'setUrl',
        'email' => 'setEmail',
        'id' => 'setId',
        'name' => 'setName',
        'permission_level' => 'setPermissionLevel',
        'profile_pic_url' => 'setProfilePicUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'is_stale' => 'getIsStale',
        'state' => 'getState',
        'value' => 'getValue',
        'error_type' => 'getErrorType',
        'text' => 'getText',
        'type' => 'getType',
        'label' => 'getLabel',
        'url' => 'getUrl',
        'email' => 'getEmail',
        'id' => 'getId',
        'name' => 'getName',
        'permission_level' => 'getPermissionLevel',
        'profile_pic_url' => 'getProfilePicUrl'
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

    public const STATE_ERROR = 'error';
    public const PERMISSION_LEVEL_NONE = 'none';
    public const PERMISSION_LEVEL_READ = 'read';
    public const PERMISSION_LEVEL_COMMENT = 'comment';
    public const PERMISSION_LEVEL_EDIT = 'edit';
    public const PERMISSION_LEVEL_CREATE = 'create';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_ERROR,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPermissionLevelAllowableValues()
    {
        return [
            self::PERMISSION_LEVEL_NONE,
            self::PERMISSION_LEVEL_READ,
            self::PERMISSION_LEVEL_COMMENT,
            self::PERMISSION_LEVEL_EDIT,
            self::PERMISSION_LEVEL_CREATE,
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
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('is_stale', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('error_type', $data ?? [], null);
        $this->setIfExists('text', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('permission_level', $data ?? [], null);
        $this->setIfExists('profile_pic_url', $data ?? [], null);
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

        if ($this->container['is_stale'] === null) {
            $invalidProperties[] = "'is_stale' can't be null";
        }
        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['value'] === null) {
            $invalidProperties[] = "'value' can't be null";
        }
        if ($this->container['error_type'] === null) {
            $invalidProperties[] = "'error_type' can't be null";
        }
        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        $allowedValues = $this->getPermissionLevelAllowableValues();
        if (!is_null($this->container['permission_level']) && !in_array($this->container['permission_level'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'permission_level', must be one of '%s'",
                $this->container['permission_level'],
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
     * Gets is_stale
     *
     * @return bool
     */
    public function getIsStale()
    {
        return $this->container['is_stale'];
    }

    /**
     * Sets is_stale
     *
     * @param bool $is_stale If the cell should be recomputed due to a dependency change. This can either be a dependent field or the field configuration.
     *
     * @return self
     */
    public function setIsStale($is_stale)
    {
        if (is_null($is_stale)) {
            throw new \InvalidArgumentException('non-nullable is_stale cannot be null');
        }
        $this->container['is_stale'] = $is_stale;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state Whether the cell is currently in an error state.
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string $value The value that is shown to the user inside of the cell
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            throw new \InvalidArgumentException('non-nullable value cannot be null');
        }
        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets error_type
     *
     * @return string
     */
    public function getErrorType()
    {
        return $this->container['error_type'];
    }

    /**
     * Sets error_type
     *
     * @param string $error_type A short string that describes the error.
     *
     * @return self
     */
    public function setErrorType($error_type)
    {
        if (is_null($error_type)) {
            throw new \InvalidArgumentException('non-nullable error_type cannot be null');
        }
        $this->container['error_type'] = $error_type;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text Barcode data
     *
     * @return self
     */
    public function setText($text)
    {
        if (is_null($text)) {
            throw new \InvalidArgumentException('non-nullable text cannot be null');
        }
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type Barcode symbology, e.g. \"upce\" or \"code39\"
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
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label Button label
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url For \"Open URL\" actions, the computed url value
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

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
     * @param string|null $email User's email address
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id User id or group id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name User's display name (may be omitted if the user hasn't created an account)
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets permission_level
     *
     * @return string|null
     */
    public function getPermissionLevel()
    {
        return $this->container['permission_level'];
    }

    /**
     * Sets permission_level
     *
     * @param string|null $permission_level User's collaborator permission Level  This is only included if you're observing a webhooks response.
     *
     * @return self
     */
    public function setPermissionLevel($permission_level)
    {
        if (is_null($permission_level)) {
            throw new \InvalidArgumentException('non-nullable permission_level cannot be null');
        }
        $allowedValues = $this->getPermissionLevelAllowableValues();
        if (!in_array($permission_level, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'permission_level', must be one of '%s'",
                    $permission_level,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['permission_level'] = $permission_level;

        return $this;
    }

    /**
     * Gets profile_pic_url
     *
     * @return string|null
     */
    public function getProfilePicUrl()
    {
        return $this->container['profile_pic_url'];
    }

    /**
     * Sets profile_pic_url
     *
     * @param string|null $profile_pic_url User's profile picture  This is only included if it exists for the user **and** you're observing a webhooks response.
     *
     * @return self
     */
    public function setProfilePicUrl($profile_pic_url)
    {
        if (is_null($profile_pic_url)) {
            throw new \InvalidArgumentException('non-nullable profile_pic_url cannot be null');
        }
        $this->container['profile_pic_url'] = $profile_pic_url;

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


