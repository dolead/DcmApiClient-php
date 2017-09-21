<?php
/**
 * Ad
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
 * Ad Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Dcm
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ad implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Ad';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'account' => 'string',
        'ad_group' => 'string',
        'ad_type' => 'string',
        'advertiser' => 'string',
        'campaign' => 'string',
        'description' => 'string',
        'display_url' => 'string',
        'final_app_urls' => 'string[]',
        'final_mobile_urls' => 'string[]',
        'final_urls' => 'string[]',
        'headline1' => 'string',
        'headline2' => 'string',
        'id' => 'string',
        'path1' => 'string',
        'path2' => 'string',
        'publisher_id' => 'string',
        'status' => 'string',
        'title' => 'string'
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
        'ad_group' => 'ad_group',
        'ad_type' => 'ad_type',
        'advertiser' => 'advertiser',
        'campaign' => 'campaign',
        'description' => 'description',
        'display_url' => 'display_url',
        'final_app_urls' => 'final_app_urls',
        'final_mobile_urls' => 'final_mobile_urls',
        'final_urls' => 'final_urls',
        'headline1' => 'headline1',
        'headline2' => 'headline2',
        'id' => 'id',
        'path1' => 'path1',
        'path2' => 'path2',
        'publisher_id' => 'publisher_id',
        'status' => 'status',
        'title' => 'title'
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
        'ad_group' => 'setAdGroup',
        'ad_type' => 'setAdType',
        'advertiser' => 'setAdvertiser',
        'campaign' => 'setCampaign',
        'description' => 'setDescription',
        'display_url' => 'setDisplayUrl',
        'final_app_urls' => 'setFinalAppUrls',
        'final_mobile_urls' => 'setFinalMobileUrls',
        'final_urls' => 'setFinalUrls',
        'headline1' => 'setHeadline1',
        'headline2' => 'setHeadline2',
        'id' => 'setId',
        'path1' => 'setPath1',
        'path2' => 'setPath2',
        'publisher_id' => 'setPublisherId',
        'status' => 'setStatus',
        'title' => 'setTitle'
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
        'ad_group' => 'getAdGroup',
        'ad_type' => 'getAdType',
        'advertiser' => 'getAdvertiser',
        'campaign' => 'getCampaign',
        'description' => 'getDescription',
        'display_url' => 'getDisplayUrl',
        'final_app_urls' => 'getFinalAppUrls',
        'final_mobile_urls' => 'getFinalMobileUrls',
        'final_urls' => 'getFinalUrls',
        'headline1' => 'getHeadline1',
        'headline2' => 'getHeadline2',
        'id' => 'getId',
        'path1' => 'getPath1',
        'path2' => 'getPath2',
        'publisher_id' => 'getPublisherId',
        'status' => 'getStatus',
        'title' => 'getTitle'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const AD_TYPE_TEXT = 'TEXT';
    const AD_TYPE_PRODUCT = 'PRODUCT';
    const AD_TYPE_DYNAMIC_SEARCH = 'DYNAMIC_SEARCH';
    const AD_TYPE_EXPANDED_DYNAMIC_SEARCH = 'EXPANDED_DYNAMIC_SEARCH';
    const AD_TYPE_IMAGE = 'IMAGE';
    const AD_TYPE_RICH = 'RICH';
    const AD_TYPE_CALL_ONLY = 'CALL_ONLY';
    const AD_TYPE_EXPANDED_TEXT = 'EXPANDED_TEXT';
    const AD_TYPE_RESPONSIVE_DISPLAY = 'RESPONSIVE_DISPLAY';
    const AD_TYPE_SHOWCASE = 'SHOWCASE';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_PAUSED = 'PAUSED';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAdTypeAllowableValues()
    {
        return [
            self::AD_TYPE_TEXT,
            self::AD_TYPE_PRODUCT,
            self::AD_TYPE_DYNAMIC_SEARCH,
            self::AD_TYPE_EXPANDED_DYNAMIC_SEARCH,
            self::AD_TYPE_IMAGE,
            self::AD_TYPE_RICH,
            self::AD_TYPE_CALL_ONLY,
            self::AD_TYPE_EXPANDED_TEXT,
            self::AD_TYPE_RESPONSIVE_DISPLAY,
            self::AD_TYPE_SHOWCASE,
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
        $this->container['ad_group'] = isset($data['ad_group']) ? $data['ad_group'] : null;
        $this->container['ad_type'] = isset($data['ad_type']) ? $data['ad_type'] : null;
        $this->container['advertiser'] = isset($data['advertiser']) ? $data['advertiser'] : null;
        $this->container['campaign'] = isset($data['campaign']) ? $data['campaign'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['display_url'] = isset($data['display_url']) ? $data['display_url'] : null;
        $this->container['final_app_urls'] = isset($data['final_app_urls']) ? $data['final_app_urls'] : null;
        $this->container['final_mobile_urls'] = isset($data['final_mobile_urls']) ? $data['final_mobile_urls'] : null;
        $this->container['final_urls'] = isset($data['final_urls']) ? $data['final_urls'] : null;
        $this->container['headline1'] = isset($data['headline1']) ? $data['headline1'] : null;
        $this->container['headline2'] = isset($data['headline2']) ? $data['headline2'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['path1'] = isset($data['path1']) ? $data['path1'] : null;
        $this->container['path2'] = isset($data['path2']) ? $data['path2'] : null;
        $this->container['publisher_id'] = isset($data['publisher_id']) ? $data['publisher_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("TEXT", "PRODUCT", "DYNAMIC_SEARCH", "EXPANDED_DYNAMIC_SEARCH", "IMAGE", "RICH", "CALL_ONLY", "EXPANDED_TEXT", "RESPONSIVE_DISPLAY", "SHOWCASE");
        if (!in_array($this->container['ad_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'ad_type', must be one of #{allowed_values}.";
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
        $allowed_values = array("TEXT", "PRODUCT", "DYNAMIC_SEARCH", "EXPANDED_DYNAMIC_SEARCH", "IMAGE", "RICH", "CALL_ONLY", "EXPANDED_TEXT", "RESPONSIVE_DISPLAY", "SHOWCASE");
        if (!in_array($this->container['ad_type'], $allowed_values)) {
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
     * Gets ad_group
     * @return string
     */
    public function getAdGroup()
    {
        return $this->container['ad_group'];
    }

    /**
     * Sets ad_group
     * @param string $ad_group ID of the adgroup in Dolead system.
     * @return $this
     */
    public function setAdGroup($ad_group)
    {
        $this->container['ad_group'] = $ad_group;

        return $this;
    }

    /**
     * Gets ad_type
     * @return string
     */
    public function getAdType()
    {
        return $this->container['ad_type'];
    }

    /**
     * Sets ad_type
     * @param string $ad_type The type of the ad
     * @return $this
     */
    public function setAdType($ad_type)
    {
        $allowed_values = array('TEXT', 'PRODUCT', 'DYNAMIC_SEARCH', 'EXPANDED_DYNAMIC_SEARCH', 'IMAGE', 'RICH', 'CALL_ONLY', 'EXPANDED_TEXT', 'RESPONSIVE_DISPLAY', 'SHOWCASE');
        if (!in_array($ad_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'ad_type', must be one of 'TEXT', 'PRODUCT', 'DYNAMIC_SEARCH', 'EXPANDED_DYNAMIC_SEARCH', 'IMAGE', 'RICH', 'CALL_ONLY', 'EXPANDED_TEXT', 'RESPONSIVE_DISPLAY', 'SHOWCASE'");
        }
        $this->container['ad_type'] = $ad_type;

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
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description The ad's description (expanded text ads)
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets display_url
     * @return string
     */
    public function getDisplayUrl()
    {
        return $this->container['display_url'];
    }

    /**
     * Sets display_url
     * @param string $display_url The displayed URL
     * @return $this
     */
    public function setDisplayUrl($display_url)
    {
        $this->container['display_url'] = $display_url;

        return $this;
    }

    /**
     * Gets final_app_urls
     * @return string[]
     */
    public function getFinalAppUrls()
    {
        return $this->container['final_app_urls'];
    }

    /**
     * Sets final_app_urls
     * @param string[] $final_app_urls The landing page's URLs (app only)
     * @return $this
     */
    public function setFinalAppUrls($final_app_urls)
    {
        $this->container['final_app_urls'] = $final_app_urls;

        return $this;
    }

    /**
     * Gets final_mobile_urls
     * @return string[]
     */
    public function getFinalMobileUrls()
    {
        return $this->container['final_mobile_urls'];
    }

    /**
     * Sets final_mobile_urls
     * @param string[] $final_mobile_urls The landing page's URLs (mobile only)
     * @return $this
     */
    public function setFinalMobileUrls($final_mobile_urls)
    {
        $this->container['final_mobile_urls'] = $final_mobile_urls;

        return $this;
    }

    /**
     * Gets final_urls
     * @return string[]
     */
    public function getFinalUrls()
    {
        return $this->container['final_urls'];
    }

    /**
     * Sets final_urls
     * @param string[] $final_urls The landing page's URLs
     * @return $this
     */
    public function setFinalUrls($final_urls)
    {
        $this->container['final_urls'] = $final_urls;

        return $this;
    }

    /**
     * Gets headline1
     * @return string
     */
    public function getHeadline1()
    {
        return $this->container['headline1'];
    }

    /**
     * Sets headline1
     * @param string $headline1 The ad's first headline (expanded text ads)
     * @return $this
     */
    public function setHeadline1($headline1)
    {
        $this->container['headline1'] = $headline1;

        return $this;
    }

    /**
     * Gets headline2
     * @return string
     */
    public function getHeadline2()
    {
        return $this->container['headline2'];
    }

    /**
     * Sets headline2
     * @param string $headline2 The ad's second headline (expanded text ads)
     * @return $this
     */
    public function setHeadline2($headline2)
    {
        $this->container['headline2'] = $headline2;

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
     * Gets path1
     * @return string
     */
    public function getPath1()
    {
        return $this->container['path1'];
    }

    /**
     * Sets path1
     * @param string $path1 The ad's first path token (expanded text ads)
     * @return $this
     */
    public function setPath1($path1)
    {
        $this->container['path1'] = $path1;

        return $this;
    }

    /**
     * Gets path2
     * @return string
     */
    public function getPath2()
    {
        return $this->container['path2'];
    }

    /**
     * Sets path2
     * @param string $path2 The ad's second path token (expanded text ads)
     * @return $this
     */
    public function setPath2($path2)
    {
        $this->container['path2'] = $path2;

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
     * @param string $status Status of the ad
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
     * Gets title
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     * @param string $title The ad's title
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

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

