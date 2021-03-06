<?php
/**
 * Tracking
 *
 * PHP version 5
 *
 * @category Class
 * @package  Dcm
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Dolead Campaign Manager API v1.0
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Dcm\Model;

use \ArrayAccess;

/**
 * Tracking Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Dcm
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Tracking implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Tracking';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'comparator_context' => '\Dcm\Model\ComparatorContext',
        'date' => '\DateTime',
        'display_context' => '\Dcm\Model\DisplayContext',
        'network' => 'string',
        'request_args' => 'object',
        'sea_context' => '\Dcm\Model\ClickContext',
        'user_context' => '\Dcm\Model\UserContext'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'comparator_context' => 'comparator_context',
        'date' => 'date',
        'display_context' => 'display_context',
        'network' => 'network',
        'request_args' => 'request_args',
        'sea_context' => 'sea_context',
        'user_context' => 'user_context'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'comparator_context' => 'setComparatorContext',
        'date' => 'setDate',
        'display_context' => 'setDisplayContext',
        'network' => 'setNetwork',
        'request_args' => 'setRequestArgs',
        'sea_context' => 'setSeaContext',
        'user_context' => 'setUserContext'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'comparator_context' => 'getComparatorContext',
        'date' => 'getDate',
        'display_context' => 'getDisplayContext',
        'network' => 'getNetwork',
        'request_args' => 'getRequestArgs',
        'sea_context' => 'getSeaContext',
        'user_context' => 'getUserContext'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['comparator_context'] = isset($data['comparator_context']) ? $data['comparator_context'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['display_context'] = isset($data['display_context']) ? $data['display_context'] : null;
        $this->container['network'] = isset($data['network']) ? $data['network'] : null;
        $this->container['request_args'] = isset($data['request_args']) ? $data['request_args'] : null;
        $this->container['sea_context'] = isset($data['sea_context']) ? $data['sea_context'] : null;
        $this->container['user_context'] = isset($data['user_context']) ? $data['user_context'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets comparator_context
     * @return \Dcm\Model\ComparatorContext
     */
    public function getComparatorContext()
    {
        return $this->container['comparator_context'];
    }

    /**
     * Sets comparator_context
     * @param \Dcm\Model\ComparatorContext $comparator_context
     * @return $this
     */
    public function setComparatorContext($comparator_context)
    {
        $this->container['comparator_context'] = $comparator_context;

        return $this;
    }

    /**
     * Gets date
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     * @param \DateTime $date Date of the click.
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets display_context
     * @return \Dcm\Model\DisplayContext
     */
    public function getDisplayContext()
    {
        return $this->container['display_context'];
    }

    /**
     * Sets display_context
     * @param \Dcm\Model\DisplayContext $display_context
     * @return $this
     */
    public function setDisplayContext($display_context)
    {
        $this->container['display_context'] = $display_context;

        return $this;
    }

    /**
     * Gets network
     * @return string
     */
    public function getNetwork()
    {
        return $this->container['network'];
    }

    /**
     * Sets network
     * @param string $network
     * @return $this
     */
    public function setNetwork($network)
    {
        $this->container['network'] = $network;

        return $this;
    }

    /**
     * Gets request_args
     * @return object
     */
    public function getRequestArgs()
    {
        return $this->container['request_args'];
    }

    /**
     * Sets request_args
     * @param object $request_args
     * @return $this
     */
    public function setRequestArgs($request_args)
    {
        $this->container['request_args'] = $request_args;

        return $this;
    }

    /**
     * Gets sea_context
     * @return \Dcm\Model\ClickContext
     */
    public function getSeaContext()
    {
        return $this->container['sea_context'];
    }

    /**
     * Sets sea_context
     * @param \Dcm\Model\ClickContext $sea_context
     * @return $this
     */
    public function setSeaContext($sea_context)
    {
        $this->container['sea_context'] = $sea_context;

        return $this;
    }

    /**
     * Gets user_context
     * @return \Dcm\Model\UserContext
     */
    public function getUserContext()
    {
        return $this->container['user_context'];
    }

    /**
     * Sets user_context
     * @param \Dcm\Model\UserContext $user_context
     * @return $this
     */
    public function setUserContext($user_context)
    {
        $this->container['user_context'] = $user_context;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Dcm\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Dcm\ObjectSerializer::sanitizeForSerialization($this));
    }
}


