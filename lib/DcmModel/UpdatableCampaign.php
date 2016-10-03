<?php
/**
 * UpdatableCampaign
 *
 * PHP version 5
 *
 * @category Class
 * @package  DcmApiClient
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

namespace DcmModel;

use \ArrayAccess;

/**
 * UpdatableCampaign Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     DcmApiClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UpdatableCampaign implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UpdatableCampaign';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'daily_budget' => 'int',
        'name' => 'string',
        'negative_geo_criterions' => 'string[]',
        'positive_geo_criterions' => 'string[]',
        'status' => 'string'
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
        'daily_budget' => 'daily_budget',
        'name' => 'name',
        'negative_geo_criterions' => 'negative_geo_criterions',
        'positive_geo_criterions' => 'positive_geo_criterions',
        'status' => 'status'
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
        'daily_budget' => 'setDailyBudget',
        'name' => 'setName',
        'negative_geo_criterions' => 'setNegativeGeoCriterions',
        'positive_geo_criterions' => 'setPositiveGeoCriterions',
        'status' => 'setStatus'
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
        'daily_budget' => 'getDailyBudget',
        'name' => 'getName',
        'negative_geo_criterions' => 'getNegativeGeoCriterions',
        'positive_geo_criterions' => 'getPositiveGeoCriterions',
        'status' => 'getStatus'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_PAUSED = 'PAUSED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_ACTIVE,
            self::STATUS_PAUSED,
        ];
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
        $this->container['daily_budget'] = isset($data['daily_budget']) ? $data['daily_budget'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['negative_geo_criterions'] = isset($data['negative_geo_criterions']) ? $data['negative_geo_criterions'] : null;
        $this->container['positive_geo_criterions'] = isset($data['positive_geo_criterions']) ? $data['positive_geo_criterions'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if (!is_null($this->container['name']) && (strlen($this->container['name']) < 2)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
        }

        $allowed_values = array("ACTIVE", "PAUSED");
        if (!in_array($this->container['status'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'status', must be one of #{allowed_values}.";
        }

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
        if (strlen($this->container['name']) < 2) {
            return false;
        }
        $allowed_values = array("ACTIVE", "PAUSED");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets daily_budget
     * @return int
     */
    public function getDailyBudget()
    {
        return $this->container['daily_budget'];
    }

    /**
     * Sets daily_budget
     * @param int $daily_budget Daily budget allowed for the campaign
     * @return $this
     */
    public function setDailyBudget($daily_budget)
    {
        $this->container['daily_budget'] = $daily_budget;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The campaign name
     * @return $this
     */
    public function setName($name)
    {

        if (strlen($name) < 2) {
            throw new \InvalidArgumentException('invalid length for $name when calling UpdatableCampaign., must be bigger than or equal to 2.');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets negative_geo_criterions
     * @return string[]
     */
    public function getNegativeGeoCriterions()
    {
        return $this->container['negative_geo_criterions'];
    }

    /**
     * Sets negative_geo_criterions
     * @param string[] $negative_geo_criterions Negative geolocations of the campaign (deactivate campaign for these locations)
     * @return $this
     */
    public function setNegativeGeoCriterions($negative_geo_criterions)
    {
        $this->container['negative_geo_criterions'] = $negative_geo_criterions;

        return $this;
    }

    /**
     * Gets positive_geo_criterions
     * @return string[]
     */
    public function getPositiveGeoCriterions()
    {
        return $this->container['positive_geo_criterions'];
    }

    /**
     * Sets positive_geo_criterions
     * @param string[] $positive_geo_criterions Positive geolocations of the campaign
     * @return $this
     */
    public function setPositiveGeoCriterions($positive_geo_criterions)
    {
        $this->container['positive_geo_criterions'] = $positive_geo_criterions;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status Status of the campaign
     * @return $this
     */
    public function setStatus($status)
    {
        $allowed_values = array('ACTIVE', 'PAUSED');
        if (!in_array($status, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'status', must be one of 'ACTIVE', 'PAUSED'");
        }
        $this->container['status'] = $status;

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
            return json_encode(\DcmApiClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\DcmApiClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


