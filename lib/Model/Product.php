<?php
/**
 * Product
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
 * Product Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Dcm
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Product implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'account' => 'string',
        'account_name' => 'string',
        'account_publisher_id' => 'string',
        'brand' => 'string',
        'category_l1' => 'string',
        'category_l2' => 'string',
        'category_l3' => 'string',
        'category_l4' => 'string',
        'category_l5' => 'string',
        'condition' => 'string',
        'custom_attribute_0' => 'string',
        'custom_attribute_1' => 'string',
        'custom_attribute_2' => 'string',
        'custom_attribute_3' => 'string',
        'custom_attribute_4' => 'string',
        'device' => 'string',
        'product_type_l1' => 'string',
        'product_type_l2' => 'string',
        'product_type_l3' => 'string',
        'product_type_l4' => 'string',
        'product_type_l5' => 'string',
        'publisher' => 'string',
        'publisher_id' => 'string',
        'target_margin' => 'double',
        'target_roi' => 'double',
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
        'account_name' => 'account_name',
        'account_publisher_id' => 'account_publisher_id',
        'brand' => 'brand',
        'category_l1' => 'category_l1',
        'category_l2' => 'category_l2',
        'category_l3' => 'category_l3',
        'category_l4' => 'category_l4',
        'category_l5' => 'category_l5',
        'condition' => 'condition',
        'custom_attribute_0' => 'custom_attribute_0',
        'custom_attribute_1' => 'custom_attribute_1',
        'custom_attribute_2' => 'custom_attribute_2',
        'custom_attribute_3' => 'custom_attribute_3',
        'custom_attribute_4' => 'custom_attribute_4',
        'device' => 'device',
        'product_type_l1' => 'product_type_l1',
        'product_type_l2' => 'product_type_l2',
        'product_type_l3' => 'product_type_l3',
        'product_type_l4' => 'product_type_l4',
        'product_type_l5' => 'product_type_l5',
        'publisher' => 'publisher',
        'publisher_id' => 'publisher_id',
        'target_margin' => 'target_margin',
        'target_roi' => 'target_roi',
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
        'account_name' => 'setAccountName',
        'account_publisher_id' => 'setAccountPublisherId',
        'brand' => 'setBrand',
        'category_l1' => 'setCategoryL1',
        'category_l2' => 'setCategoryL2',
        'category_l3' => 'setCategoryL3',
        'category_l4' => 'setCategoryL4',
        'category_l5' => 'setCategoryL5',
        'condition' => 'setCondition',
        'custom_attribute_0' => 'setCustomAttribute0',
        'custom_attribute_1' => 'setCustomAttribute1',
        'custom_attribute_2' => 'setCustomAttribute2',
        'custom_attribute_3' => 'setCustomAttribute3',
        'custom_attribute_4' => 'setCustomAttribute4',
        'device' => 'setDevice',
        'product_type_l1' => 'setProductTypeL1',
        'product_type_l2' => 'setProductTypeL2',
        'product_type_l3' => 'setProductTypeL3',
        'product_type_l4' => 'setProductTypeL4',
        'product_type_l5' => 'setProductTypeL5',
        'publisher' => 'setPublisher',
        'publisher_id' => 'setPublisherId',
        'target_margin' => 'setTargetMargin',
        'target_roi' => 'setTargetRoi',
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
        'account_name' => 'getAccountName',
        'account_publisher_id' => 'getAccountPublisherId',
        'brand' => 'getBrand',
        'category_l1' => 'getCategoryL1',
        'category_l2' => 'getCategoryL2',
        'category_l3' => 'getCategoryL3',
        'category_l4' => 'getCategoryL4',
        'category_l5' => 'getCategoryL5',
        'condition' => 'getCondition',
        'custom_attribute_0' => 'getCustomAttribute0',
        'custom_attribute_1' => 'getCustomAttribute1',
        'custom_attribute_2' => 'getCustomAttribute2',
        'custom_attribute_3' => 'getCustomAttribute3',
        'custom_attribute_4' => 'getCustomAttribute4',
        'device' => 'getDevice',
        'product_type_l1' => 'getProductTypeL1',
        'product_type_l2' => 'getProductTypeL2',
        'product_type_l3' => 'getProductTypeL3',
        'product_type_l4' => 'getProductTypeL4',
        'product_type_l5' => 'getProductTypeL5',
        'publisher' => 'getPublisher',
        'publisher_id' => 'getPublisherId',
        'target_margin' => 'getTargetMargin',
        'target_roi' => 'getTargetRoi',
        'title' => 'getTitle'
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
        $this->container['account'] = isset($data['account']) ? $data['account'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['account_publisher_id'] = isset($data['account_publisher_id']) ? $data['account_publisher_id'] : null;
        $this->container['brand'] = isset($data['brand']) ? $data['brand'] : null;
        $this->container['category_l1'] = isset($data['category_l1']) ? $data['category_l1'] : null;
        $this->container['category_l2'] = isset($data['category_l2']) ? $data['category_l2'] : null;
        $this->container['category_l3'] = isset($data['category_l3']) ? $data['category_l3'] : null;
        $this->container['category_l4'] = isset($data['category_l4']) ? $data['category_l4'] : null;
        $this->container['category_l5'] = isset($data['category_l5']) ? $data['category_l5'] : null;
        $this->container['condition'] = isset($data['condition']) ? $data['condition'] : null;
        $this->container['custom_attribute_0'] = isset($data['custom_attribute_0']) ? $data['custom_attribute_0'] : null;
        $this->container['custom_attribute_1'] = isset($data['custom_attribute_1']) ? $data['custom_attribute_1'] : null;
        $this->container['custom_attribute_2'] = isset($data['custom_attribute_2']) ? $data['custom_attribute_2'] : null;
        $this->container['custom_attribute_3'] = isset($data['custom_attribute_3']) ? $data['custom_attribute_3'] : null;
        $this->container['custom_attribute_4'] = isset($data['custom_attribute_4']) ? $data['custom_attribute_4'] : null;
        $this->container['device'] = isset($data['device']) ? $data['device'] : null;
        $this->container['product_type_l1'] = isset($data['product_type_l1']) ? $data['product_type_l1'] : null;
        $this->container['product_type_l2'] = isset($data['product_type_l2']) ? $data['product_type_l2'] : null;
        $this->container['product_type_l3'] = isset($data['product_type_l3']) ? $data['product_type_l3'] : null;
        $this->container['product_type_l4'] = isset($data['product_type_l4']) ? $data['product_type_l4'] : null;
        $this->container['product_type_l5'] = isset($data['product_type_l5']) ? $data['product_type_l5'] : null;
        $this->container['publisher'] = isset($data['publisher']) ? $data['publisher'] : null;
        $this->container['publisher_id'] = isset($data['publisher_id']) ? $data['publisher_id'] : null;
        $this->container['target_margin'] = isset($data['target_margin']) ? $data['target_margin'] : null;
        $this->container['target_roi'] = isset($data['target_roi']) ? $data['target_roi'] : null;
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
     * Gets account_name
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     * @param string $account_name Name of the account on which the product is linked.
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets account_publisher_id
     * @return string
     */
    public function getAccountPublisherId()
    {
        return $this->container['account_publisher_id'];
    }

    /**
     * Sets account_publisher_id
     * @param string $account_publisher_id ID of the account for the publisher's network.
     * @return $this
     */
    public function setAccountPublisherId($account_publisher_id)
    {
        $this->container['account_publisher_id'] = $account_publisher_id;

        return $this;
    }

    /**
     * Gets brand
     * @return string
     */
    public function getBrand()
    {
        return $this->container['brand'];
    }

    /**
     * Sets brand
     * @param string $brand Brand of the product (from the Product Feed).
     * @return $this
     */
    public function setBrand($brand)
    {
        $this->container['brand'] = $brand;

        return $this;
    }

    /**
     * Gets category_l1
     * @return string
     */
    public function getCategoryL1()
    {
        return $this->container['category_l1'];
    }

    /**
     * Sets category_l1
     * @param string $category_l1 Publisher categorization of the product, level 1.
     * @return $this
     */
    public function setCategoryL1($category_l1)
    {
        $this->container['category_l1'] = $category_l1;

        return $this;
    }

    /**
     * Gets category_l2
     * @return string
     */
    public function getCategoryL2()
    {
        return $this->container['category_l2'];
    }

    /**
     * Sets category_l2
     * @param string $category_l2 Publisher categorization of the product, level 2.
     * @return $this
     */
    public function setCategoryL2($category_l2)
    {
        $this->container['category_l2'] = $category_l2;

        return $this;
    }

    /**
     * Gets category_l3
     * @return string
     */
    public function getCategoryL3()
    {
        return $this->container['category_l3'];
    }

    /**
     * Sets category_l3
     * @param string $category_l3 Publisher categorization of the product, level 3.
     * @return $this
     */
    public function setCategoryL3($category_l3)
    {
        $this->container['category_l3'] = $category_l3;

        return $this;
    }

    /**
     * Gets category_l4
     * @return string
     */
    public function getCategoryL4()
    {
        return $this->container['category_l4'];
    }

    /**
     * Sets category_l4
     * @param string $category_l4 Publisher categorization of the product, level 4.
     * @return $this
     */
    public function setCategoryL4($category_l4)
    {
        $this->container['category_l4'] = $category_l4;

        return $this;
    }

    /**
     * Gets category_l5
     * @return string
     */
    public function getCategoryL5()
    {
        return $this->container['category_l5'];
    }

    /**
     * Sets category_l5
     * @param string $category_l5 Publisher categorization of the product, level 5.
     * @return $this
     */
    public function setCategoryL5($category_l5)
    {
        $this->container['category_l5'] = $category_l5;

        return $this;
    }

    /**
     * Gets condition
     * @return string
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     * @param string $condition Product condiction (from the Product Feed).
     * @return $this
     */
    public function setCondition($condition)
    {
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets custom_attribute_0
     * @return string
     */
    public function getCustomAttribute0()
    {
        return $this->container['custom_attribute_0'];
    }

    /**
     * Sets custom_attribute_0
     * @param string $custom_attribute_0 Custom attribute iof the product. Defined by the cuestomer in its product feed.
     * @return $this
     */
    public function setCustomAttribute0($custom_attribute_0)
    {
        $this->container['custom_attribute_0'] = $custom_attribute_0;

        return $this;
    }

    /**
     * Gets custom_attribute_1
     * @return string
     */
    public function getCustomAttribute1()
    {
        return $this->container['custom_attribute_1'];
    }

    /**
     * Sets custom_attribute_1
     * @param string $custom_attribute_1 Custom attribute if the product. Defined by the cuestomer in its product feed.
     * @return $this
     */
    public function setCustomAttribute1($custom_attribute_1)
    {
        $this->container['custom_attribute_1'] = $custom_attribute_1;

        return $this;
    }

    /**
     * Gets custom_attribute_2
     * @return string
     */
    public function getCustomAttribute2()
    {
        return $this->container['custom_attribute_2'];
    }

    /**
     * Sets custom_attribute_2
     * @param string $custom_attribute_2 Custom attribute if the product. Defined by the cuestomer in its product feed.
     * @return $this
     */
    public function setCustomAttribute2($custom_attribute_2)
    {
        $this->container['custom_attribute_2'] = $custom_attribute_2;

        return $this;
    }

    /**
     * Gets custom_attribute_3
     * @return string
     */
    public function getCustomAttribute3()
    {
        return $this->container['custom_attribute_3'];
    }

    /**
     * Sets custom_attribute_3
     * @param string $custom_attribute_3 Custom attribute if the product. Defined by the cuestomer in its product feed.
     * @return $this
     */
    public function setCustomAttribute3($custom_attribute_3)
    {
        $this->container['custom_attribute_3'] = $custom_attribute_3;

        return $this;
    }

    /**
     * Gets custom_attribute_4
     * @return string
     */
    public function getCustomAttribute4()
    {
        return $this->container['custom_attribute_4'];
    }

    /**
     * Sets custom_attribute_4
     * @param string $custom_attribute_4 Custom attribute if the product. Defined by the cuestomer in its product feed.
     * @return $this
     */
    public function setCustomAttribute4($custom_attribute_4)
    {
        $this->container['custom_attribute_4'] = $custom_attribute_4;

        return $this;
    }

    /**
     * Gets device
     * @return string
     */
    public function getDevice()
    {
        return $this->container['device'];
    }

    /**
     * Sets device
     * @param string $device Device on which ads of the products can be displayed.
     * @return $this
     */
    public function setDevice($device)
    {
        $this->container['device'] = $device;

        return $this;
    }

    /**
     * Gets product_type_l1
     * @return string
     */
    public function getProductTypeL1()
    {
        return $this->container['product_type_l1'];
    }

    /**
     * Sets product_type_l1
     * @param string $product_type_l1 Customer categorization of the product, level 1.
     * @return $this
     */
    public function setProductTypeL1($product_type_l1)
    {
        $this->container['product_type_l1'] = $product_type_l1;

        return $this;
    }

    /**
     * Gets product_type_l2
     * @return string
     */
    public function getProductTypeL2()
    {
        return $this->container['product_type_l2'];
    }

    /**
     * Sets product_type_l2
     * @param string $product_type_l2 Customer categorization of the product, level 2.
     * @return $this
     */
    public function setProductTypeL2($product_type_l2)
    {
        $this->container['product_type_l2'] = $product_type_l2;

        return $this;
    }

    /**
     * Gets product_type_l3
     * @return string
     */
    public function getProductTypeL3()
    {
        return $this->container['product_type_l3'];
    }

    /**
     * Sets product_type_l3
     * @param string $product_type_l3 Customer categorization of the product, level 3.
     * @return $this
     */
    public function setProductTypeL3($product_type_l3)
    {
        $this->container['product_type_l3'] = $product_type_l3;

        return $this;
    }

    /**
     * Gets product_type_l4
     * @return string
     */
    public function getProductTypeL4()
    {
        return $this->container['product_type_l4'];
    }

    /**
     * Sets product_type_l4
     * @param string $product_type_l4 Customer categorization of the product, level 4.
     * @return $this
     */
    public function setProductTypeL4($product_type_l4)
    {
        $this->container['product_type_l4'] = $product_type_l4;

        return $this;
    }

    /**
     * Gets product_type_l5
     * @return string
     */
    public function getProductTypeL5()
    {
        return $this->container['product_type_l5'];
    }

    /**
     * Sets product_type_l5
     * @param string $product_type_l5 Customer categorization of the product, level 5.
     * @return $this
     */
    public function setProductTypeL5($product_type_l5)
    {
        $this->container['product_type_l5'] = $product_type_l5;

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
     * @param string $publisher Publisher netword name
     * @return $this
     */
    public function setPublisher($publisher)
    {
        $this->container['publisher'] = $publisher;

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
     * @param string $publisher_id Publisher's (GMC/BMC) ID
     * @return $this
     */
    public function setPublisherId($publisher_id)
    {
        $this->container['publisher_id'] = $publisher_id;

        return $this;
    }

    /**
     * Gets target_margin
     * @return double
     */
    public function getTargetMargin()
    {
        return $this->container['target_margin'];
    }

    /**
     * Sets target_margin
     * @param double $target_margin Custom target margin for the product. Will be used in bidding process instead of the campaign global target ROI.
     * @return $this
     */
    public function setTargetMargin($target_margin)
    {
        $this->container['target_margin'] = $target_margin;

        return $this;
    }

    /**
     * Gets target_roi
     * @return double
     */
    public function getTargetRoi()
    {
        return $this->container['target_roi'];
    }

    /**
     * Sets target_roi
     * @param double $target_roi Custom target ROI for the product. Will be used in bidding process instead of the campaign global target ROI, if no custom target_margin is set.
     * @return $this
     */
    public function setTargetRoi($target_roi)
    {
        $this->container['target_roi'] = $target_roi;

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
     * @param string $title The product title
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

