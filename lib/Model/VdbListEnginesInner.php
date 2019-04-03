<?php
/**
 * VdbListEnginesInner
 *
 * PHP version 5
 *
 * @category Class
 * @package  Tuningfiles
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * TuningFiles API
 *
 * Welcome to the TuningFiles API documentation.  ## Language  All API methods accept language parameter, which can be set via `X-LANG` custom header. Content of the header should be the code of the language you are requesting.  Available languages:    * English (`en`)   * Chinese traditional (`zh-hant`)   * Chinese simplified (`zh-hans`)   * Russian (`ru`)   * Norwegian Bokmål (`nb`)   * Latvian (`lv`)   * Lithuanian (`lt`)   * Croatian (`hr`)   * Spanish (`es`)  Set language to English: ``` curl -X GET \"https://api.tuningfiles.com/method\" -H \"x-lang: en\" ```  ## Errors If there is an error, API will return appropriate error code and message like so:  ```json {   \"error\": {     \"code\": 404,     \"message\": \"Resource doesn't exist\"   } } ```  HTTP status code will be the same as the error code. In the case above, returned http status code will be 404.  ### General errors   Failed API authentication: ```json {   \"error\": {     \"code\": 403,     \"message\": \"Invalid API key\"   } } ```  API Key doesn't have enough permissions to access requested resource (some API methods require a paid subscription): ```json {   \"error\": {     \"code\": 401,     \"message\": \"This API key does not have enough permissions\"   } } ```  Not found: ```json {   \"error\": {     \"code\": 404,     \"message\": \"Resource doesn't exist\"   } } ```  Bad request: ```json {   \"error\": {     \"code\": 400,     \"message\": \"Bad request / Wrong parameters\"   } } ```  Server error: ```json {   \"error\": {     \"code\": 500,     \"message\": \"Internal server error\"   } } ``` ## Rate limits Currently, no rate-limits are enabled. However this may change in the future.  Please, do not abuse this service. Every request is logged and analysed automatically by machine learning. If abuse is detected, you may be automatically blocked or rate-limited.
 *
 * OpenAPI spec version: 1.0.0-oas3
 * Contact: support@tuningfiles.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.7
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Tuningfiles\Model;

use \ArrayAccess;
use \Tuningfiles\ObjectSerializer;

/**
 * VdbListEnginesInner Class Doc Comment
 *
 * @category Class
 * @package  Tuningfiles
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VdbListEnginesInner implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'vdb_list_engines_inner';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'name' => 'string',
'slug' => 'string',
'type' => 'string',
'capacity' => 'int',
'power' => 'int',
'torque' => 'int',
'year' => 'int',
'ecu' => 'string',
'hp_values' => 'string',
'nm_values' => 'string',
'rpm_values' => 'string',
'engine_code' => 'string',
'fuel_name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'slug' => null,
'type' => null,
'capacity' => null,
'power' => null,
'torque' => null,
'year' => null,
'ecu' => null,
'hp_values' => null,
'nm_values' => null,
'rpm_values' => null,
'engine_code' => null,
'fuel_name' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'name' => 'name',
'slug' => 'slug',
'type' => 'type',
'capacity' => 'capacity',
'power' => 'power',
'torque' => 'torque',
'year' => 'year',
'ecu' => 'ecu',
'hp_values' => 'hp_values',
'nm_values' => 'nm_values',
'rpm_values' => 'rpm_values',
'engine_code' => 'engine_code',
'fuel_name' => 'fuel_name'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'slug' => 'setSlug',
'type' => 'setType',
'capacity' => 'setCapacity',
'power' => 'setPower',
'torque' => 'setTorque',
'year' => 'setYear',
'ecu' => 'setEcu',
'hp_values' => 'setHpValues',
'nm_values' => 'setNmValues',
'rpm_values' => 'setRpmValues',
'engine_code' => 'setEngineCode',
'fuel_name' => 'setFuelName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'slug' => 'getSlug',
'type' => 'getType',
'capacity' => 'getCapacity',
'power' => 'getPower',
'torque' => 'getTorque',
'year' => 'getYear',
'ecu' => 'getEcu',
'hp_values' => 'getHpValues',
'nm_values' => 'getNmValues',
'rpm_values' => 'getRpmValues',
'engine_code' => 'getEngineCode',
'fuel_name' => 'getFuelName'    ];

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
        return self::$swaggerModelName;
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['capacity'] = isset($data['capacity']) ? $data['capacity'] : null;
        $this->container['power'] = isset($data['power']) ? $data['power'] : null;
        $this->container['torque'] = isset($data['torque']) ? $data['torque'] : null;
        $this->container['year'] = isset($data['year']) ? $data['year'] : null;
        $this->container['ecu'] = isset($data['ecu']) ? $data['ecu'] : null;
        $this->container['hp_values'] = isset($data['hp_values']) ? $data['hp_values'] : null;
        $this->container['nm_values'] = isset($data['nm_values']) ? $data['nm_values'] : null;
        $this->container['rpm_values'] = isset($data['rpm_values']) ? $data['rpm_values'] : null;
        $this->container['engine_code'] = isset($data['engine_code']) ? $data['engine_code'] : null;
        $this->container['fuel_name'] = isset($data['fuel_name']) ? $data['fuel_name'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     *
     * @param string $slug slug
     *
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

        return $this;
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
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets capacity
     *
     * @return int
     */
    public function getCapacity()
    {
        return $this->container['capacity'];
    }

    /**
     * Sets capacity
     *
     * @param int $capacity capacity
     *
     * @return $this
     */
    public function setCapacity($capacity)
    {
        $this->container['capacity'] = $capacity;

        return $this;
    }

    /**
     * Gets power
     *
     * @return int
     */
    public function getPower()
    {
        return $this->container['power'];
    }

    /**
     * Sets power
     *
     * @param int $power power
     *
     * @return $this
     */
    public function setPower($power)
    {
        $this->container['power'] = $power;

        return $this;
    }

    /**
     * Gets torque
     *
     * @return int
     */
    public function getTorque()
    {
        return $this->container['torque'];
    }

    /**
     * Sets torque
     *
     * @param int $torque torque
     *
     * @return $this
     */
    public function setTorque($torque)
    {
        $this->container['torque'] = $torque;

        return $this;
    }

    /**
     * Gets year
     *
     * @return int
     */
    public function getYear()
    {
        return $this->container['year'];
    }

    /**
     * Sets year
     *
     * @param int $year year
     *
     * @return $this
     */
    public function setYear($year)
    {
        $this->container['year'] = $year;

        return $this;
    }

    /**
     * Gets ecu
     *
     * @return string
     */
    public function getEcu()
    {
        return $this->container['ecu'];
    }

    /**
     * Sets ecu
     *
     * @param string $ecu ecu
     *
     * @return $this
     */
    public function setEcu($ecu)
    {
        $this->container['ecu'] = $ecu;

        return $this;
    }

    /**
     * Gets hp_values
     *
     * @return string
     */
    public function getHpValues()
    {
        return $this->container['hp_values'];
    }

    /**
     * Sets hp_values
     *
     * @param string $hp_values hp_values
     *
     * @return $this
     */
    public function setHpValues($hp_values)
    {
        $this->container['hp_values'] = $hp_values;

        return $this;
    }

    /**
     * Gets nm_values
     *
     * @return string
     */
    public function getNmValues()
    {
        return $this->container['nm_values'];
    }

    /**
     * Sets nm_values
     *
     * @param string $nm_values nm_values
     *
     * @return $this
     */
    public function setNmValues($nm_values)
    {
        $this->container['nm_values'] = $nm_values;

        return $this;
    }

    /**
     * Gets rpm_values
     *
     * @return string
     */
    public function getRpmValues()
    {
        return $this->container['rpm_values'];
    }

    /**
     * Sets rpm_values
     *
     * @param string $rpm_values rpm_values
     *
     * @return $this
     */
    public function setRpmValues($rpm_values)
    {
        $this->container['rpm_values'] = $rpm_values;

        return $this;
    }

    /**
     * Gets engine_code
     *
     * @return string
     */
    public function getEngineCode()
    {
        return $this->container['engine_code'];
    }

    /**
     * Sets engine_code
     *
     * @param string $engine_code engine_code
     *
     * @return $this
     */
    public function setEngineCode($engine_code)
    {
        $this->container['engine_code'] = $engine_code;

        return $this;
    }

    /**
     * Gets fuel_name
     *
     * @return string
     */
    public function getFuelName()
    {
        return $this->container['fuel_name'];
    }

    /**
     * Sets fuel_name
     *
     * @param string $fuel_name fuel_name
     *
     * @return $this
     */
    public function setFuelName($fuel_name)
    {
        $this->container['fuel_name'] = $fuel_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
