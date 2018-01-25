<?php
/**
 * AccountQuery
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
 * AccountQuery Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Dcm
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountQuery implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AccountQuery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'advertiser' => 'string',
        'adwords_auto_tagging' => 'bool',
        'conversion_service' => 'string',
        'id' => '\Dcm\Model\TextParameter',
        'lead_provider_id' => '\Dcm\Model\TextParameter',
        'name' => '\Dcm\Model\TextParameter',
        'publisher' => 'string',
        'publisher_id' => '\Dcm\Model\TextParameter',
        'rl_sea_account' => 'string'
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
        'advertiser' => 'advertiser',
        'adwords_auto_tagging' => 'adwords_auto_tagging',
        'conversion_service' => 'conversion_service',
        'id' => 'id',
        'lead_provider_id' => 'lead_provider_id',
        'name' => 'name',
        'publisher' => 'publisher',
        'publisher_id' => 'publisher_id',
        'rl_sea_account' => 'rl_sea_account'
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
        'advertiser' => 'setAdvertiser',
        'adwords_auto_tagging' => 'setAdwordsAutoTagging',
        'conversion_service' => 'setConversionService',
        'id' => 'setId',
        'lead_provider_id' => 'setLeadProviderId',
        'name' => 'setName',
        'publisher' => 'setPublisher',
        'publisher_id' => 'setPublisherId',
        'rl_sea_account' => 'setRlSeaAccount'
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
        'advertiser' => 'getAdvertiser',
        'adwords_auto_tagging' => 'getAdwordsAutoTagging',
        'conversion_service' => 'getConversionService',
        'id' => 'getId',
        'lead_provider_id' => 'getLeadProviderId',
        'name' => 'getName',
        'publisher' => 'getPublisher',
        'publisher_id' => 'getPublisherId',
        'rl_sea_account' => 'getRlSeaAccount'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const CONVERSION_SERVICE_AUTO = 'AUTO';
    const CONVERSION_SERVICE_CUSTOM_CONVERSION = 'CUSTOM_CONVERSION';
    const CONVERSION_SERVICE_CUSTOM_REVENUE = 'CUSTOM_REVENUE';
    const PUBLISHER_FB_ADS = 'FB_ADS';
    const PUBLISHER_GOOGLE = 'GOOGLE';
    const PUBLISHER_GMC = 'GMC';
    const PUBLISHER_BMC = 'BMC';
    const PUBLISHER_BING = 'BING';
    const PUBLISHER_YAHOO = 'YAHOO';
    const PUBLISHER_DOLEAD_PERF = 'DOLEAD_PERF';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getConversionServiceAllowableValues()
    {
        return [
            self::CONVERSION_SERVICE_AUTO,
            self::CONVERSION_SERVICE_CUSTOM_CONVERSION,
            self::CONVERSION_SERVICE_CUSTOM_REVENUE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPublisherAllowableValues()
    {
        return [
            self::PUBLISHER_FB_ADS,
            self::PUBLISHER_GOOGLE,
            self::PUBLISHER_GMC,
            self::PUBLISHER_BMC,
            self::PUBLISHER_BING,
            self::PUBLISHER_YAHOO,
            self::PUBLISHER_DOLEAD_PERF,
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
        $this->container['advertiser'] = isset($data['advertiser']) ? $data['advertiser'] : null;
        $this->container['adwords_auto_tagging'] = isset($data['adwords_auto_tagging']) ? $data['adwords_auto_tagging'] : null;
        $this->container['conversion_service'] = isset($data['conversion_service']) ? $data['conversion_service'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lead_provider_id'] = isset($data['lead_provider_id']) ? $data['lead_provider_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['publisher'] = isset($data['publisher']) ? $data['publisher'] : null;
        $this->container['publisher_id'] = isset($data['publisher_id']) ? $data['publisher_id'] : null;
        $this->container['rl_sea_account'] = isset($data['rl_sea_account']) ? $data['rl_sea_account'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("AUTO", "CUSTOM_CONVERSION", "CUSTOM_REVENUE");
        if (!in_array($this->container['conversion_service'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'conversion_service', must be one of #{allowed_values}.";
        }

        $allowed_values = array("FB_ADS", "GOOGLE", "GMC", "BMC", "BING", "YAHOO", "DOLEAD_PERF", "TABOOLA");
        if (!in_array($this->container['publisher'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'publisher', must be one of #{allowed_values}.";
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
        $allowed_values = array("AUTO", "CUSTOM_CONVERSION", "CUSTOM_REVENUE");
        if (!in_array($this->container['conversion_service'], $allowed_values)) {
            return false;
        }
        $allowed_values = array("FB_ADS", "GOOGLE", "GMC", "BMC", "BING", "YAHOO", "DOLEAD_PERF", "TABOOLA");
        if (!in_array($this->container['publisher'], $allowed_values)) {
            return false;
        }
        return true;
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
     * @param string $advertiser Filter by the ID of the advertiser in Dolead system.
     * @return $this
     */
    public function setAdvertiser($advertiser)
    {
        $this->container['advertiser'] = $advertiser;

        return $this;
    }

    /**
     * Gets adwords_auto_tagging
     * @return bool
     */
    public function getAdwordsAutoTagging()
    {
        return $this->container['adwords_auto_tagging'];
    }

    /**
     * Sets adwords_auto_tagging
     * @param bool $adwords_auto_tagging Filter by the status of the autotagging
     * @return $this
     */
    public function setAdwordsAutoTagging($adwords_auto_tagging)
    {
        $this->container['adwords_auto_tagging'] = $adwords_auto_tagging;

        return $this;
    }

    /**
     * Gets conversion_service
     * @return string
     */
    public function getConversionService()
    {
        return $this->container['conversion_service'];
    }

    /**
     * Sets conversion_service
     * @param string $conversion_service Filter by the type of DCM conversion service
     * @return $this
     */
    public function setConversionService($conversion_service)
    {
        $allowed_values = array('AUTO', 'CUSTOM_CONVERSION', 'CUSTOM_REVENUE');
        if (!in_array($conversion_service, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'conversion_service', must be one of 'AUTO', 'CUSTOM_CONVERSION', 'CUSTOM_REVENUE'");
        }
        $this->container['conversion_service'] = $conversion_service;

        return $this;
    }

    /**
     * Gets id
     * @return \Dcm\Model\TextParameter
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param \Dcm\Model\TextParameter $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets lead_provider_id
     * @return \Dcm\Model\TextParameter
     */
    public function getLeadProviderId()
    {
        return $this->container['lead_provider_id'];
    }

    /**
     * Sets lead_provider_id
     * @param \Dcm\Model\TextParameter $lead_provider_id Filter by the ID of the provider in Dolead Perf system.
     * @return $this
     */
    public function setLeadProviderId($lead_provider_id)
    {
        $this->container['lead_provider_id'] = $lead_provider_id;

        return $this;
    }

    /**
     * Gets name
     * @return \Dcm\Model\TextParameter
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param \Dcm\Model\TextParameter $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets publisher
     * @return string
     */
    public function getPublisher()
    {
        return $this->container['publisher'];
    }

    /**
     * Sets publisher
     * @param string $publisher Filter by the type of network
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $allowed_values = array('FB_ADS', 'GOOGLE', 'GMC', 'BMC', 'BING', 'YAHOO', 'DOLEAD_PERF', 'TABOOLA');
        if (!in_array($publisher, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'publisher', must be one of 'FB_ADS', 'GOOGLE', 'GMC', 'BMC', 'BING', 'YAHOO', 'DOLEAD_PERF'");
        }
        $this->container['publisher'] = $publisher;

        return $this;
    }

    /**
     * Gets publisher_id
     * @return \Dcm\Model\TextParameter
     */
    public function getPublisherId()
    {
        return $this->container['publisher_id'];
    }

    /**
     * Sets publisher_id
     * @param \Dcm\Model\TextParameter $publisher_id
     * @return $this
     */
    public function setPublisherId($publisher_id)
    {
        $this->container['publisher_id'] = $publisher_id;

        return $this;
    }

    /**
     * Gets rl_sea_account
     * @return string
     */
    public function getRlSeaAccount()
    {
        return $this->container['rl_sea_account'];
    }

    /**
     * Sets rl_sea_account
     * @param string $rl_sea_account Filter by the ID of the RegieLocale DCM account.
     * @return $this
     */
    public function setRlSeaAccount($rl_sea_account)
    {
        $this->container['rl_sea_account'] = $rl_sea_account;

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


