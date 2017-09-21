<?php
/**
 * AdGroup
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
 * AdGroup Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Dcm
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AdGroup implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AdGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'account' => 'string',
        'adg_type' => 'string',
        'advertiser' => 'string',
        'campaign' => 'string',
        'id' => 'string',
        'name' => 'string',
        'publisher_id' => 'string',
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
        'account' => 'account',
        'adg_type' => 'adg_type',
        'advertiser' => 'advertiser',
        'campaign' => 'campaign',
        'id' => 'id',
        'name' => 'name',
        'publisher_id' => 'publisher_id',
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
        'account' => 'setAccount',
        'adg_type' => 'setAdgType',
        'advertiser' => 'setAdvertiser',
        'campaign' => 'setCampaign',
        'id' => 'setId',
        'name' => 'setName',
        'publisher_id' => 'setPublisherId',
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
        'account' => 'getAccount',
        'adg_type' => 'getAdgType',
        'advertiser' => 'getAdvertiser',
        'campaign' => 'getCampaign',
        'id' => 'getId',
        'name' => 'getName',
        'publisher_id' => 'getPublisherId',
        'status' => 'getStatus'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const ADG_TYPE_UNKNOWN = 'UNKNOWN';
    const ADG_TYPE_SEARCH_STANDARD = 'SEARCH_STANDARD';
    const ADG_TYPE_SEARCH_DYNAMIC_ADS = 'SEARCH_DYNAMIC_ADS';
    const ADG_TYPE_DISPLAY_STANDARD = 'DISPLAY_STANDARD';
    const ADG_TYPE_SHOPPING_PRODUCT_ADS = 'SHOPPING_PRODUCT_ADS';
    const ADG_TYPE_SHOPPING_SHOWCASE_ADS = 'SHOPPING_SHOWCASE_ADS';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_PAUSED = 'PAUSED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAdgTypeAllowableValues()
    {
        return [
            self::ADG_TYPE_UNKNOWN,
            self::ADG_TYPE_SEARCH_STANDARD,
            self::ADG_TYPE_SEARCH_DYNAMIC_ADS,
            self::ADG_TYPE_DISPLAY_STANDARD,
            self::ADG_TYPE_SHOPPING_PRODUCT_ADS,
            self::ADG_TYPE_SHOPPING_SHOWCASE_ADS,
        ];
    }
    
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
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['adg_type'] = isset($data['adg_type']) ? $data['adg_type'] : null;
        $this->container['advertiser'] = isset($data['advertiser']) ? $data['advertiser'] : null;
        $this->container['campaign'] = isset($data['campaign']) ? $data['campaign'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['publisher_id'] = isset($data['publisher_id']) ? $data['publisher_id'] : null;
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
        $allowed_values = array("UNKNOWN", "SEARCH_STANDARD", "SEARCH_DYNAMIC_ADS", "DISPLAY_STANDARD", "SHOPPING_PRODUCT_ADS", "SHOPPING_SHOWCASE_ADS");
        if (!in_array($this->container['adg_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'adg_type', must be one of #{allowed_values}.";
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
        $allowed_values = array("UNKNOWN", "SEARCH_STANDARD", "SEARCH_DYNAMIC_ADS", "DISPLAY_STANDARD", "SHOPPING_PRODUCT_ADS", "SHOPPING_SHOWCASE_ADS");
        if (!in_array($this->container['adg_type'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("ACTIVE", "PAUSED");
        if (!in_array($this->container['status'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets account
     * @return string
     */
    public function getAccount()
    {
        return $this->container['account'];
    }

    /**
     * Sets account
     * @param string $account ID of the account in Dolead system.
     * @return $this
     */
    public function setAccount($account)
    {
        $this->container['account'] = $account;

        return $this;
    }

    /**
     * Gets adg_type
     * @return string
     */
    public function getAdgType()
    {
        return $this->container['adg_type'];
    }

    /**
     * Sets adg_type
     * @param string $adg_type The type of adgroup
     * @return $this
     */
    public function setAdgType($adg_type)
    {
        $allowed_values = array('UNKNOWN', 'SEARCH_STANDARD', 'SEARCH_DYNAMIC_ADS', 'DISPLAY_STANDARD', 'SHOPPING_PRODUCT_ADS', 'SHOPPING_SHOWCASE_ADS');
        if (!in_array($adg_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'adg_type', must be one of 'UNKNOWN', 'SEARCH_STANDARD', 'SEARCH_DYNAMIC_ADS', 'DISPLAY_STANDARD', 'SHOPPING_PRODUCT_ADS', 'SHOPPING_SHOWCASE_ADS'");
        }
        $this->container['adg_type'] = $adg_type;

        return $this;
    }

    /**
     * Gets advertiser
     * @return string
     */
    public function getAdvertiser()
    {
        return $this->container['advertiser'];
    }

    /**
     * Sets advertiser
     * @param string $advertiser ID of the advertiser in Dolead system.
     * @return $this
     */
    public function setAdvertiser($advertiser)
    {
        $this->container['advertiser'] = $advertiser;

        return $this;
    }

    /**
     * Gets campaign
     * @return string
     */
    public function getCampaign()
    {
        return $this->container['campaign'];
    }

    /**
     * Sets campaign
     * @param string $campaign ID of the campaign in Dolead system.
     * @return $this
     */
    public function setCampaign($campaign)
    {
        $this->container['campaign'] = $campaign;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id ID of the adgroup in Dolead system.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $name The adgroup name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets publisher_id
     * @return string
     */
    public function getPublisherId()
    {
        return $this->container['publisher_id'];
    }

    /**
     * Sets publisher_id
     * @param string $publisher_id Publisher's (Bing, Adwords, Yahoo) ID
     * @return $this
     */
    public function setPublisherId($publisher_id)
    {
        $this->container['publisher_id'] = $publisher_id;

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
            return json_encode(\Dcm\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Dcm\ObjectSerializer::sanitizeForSerialization($this));
    }
}


