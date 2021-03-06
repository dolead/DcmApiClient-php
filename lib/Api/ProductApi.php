<?php
/**
 * ProductApi
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

namespace Dcm\Api;

use \Dcm\Configuration;
use \Dcm\ApiClient;
use \Dcm\ApiException;
use \Dcm\ObjectSerializer;

/**
 * ProductApi Class Doc Comment
 *
 * @category Class
 * @package  Dcm
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductApi
{

    /**
     * API Client
     *
     * @var \Dcm\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Dcm\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Dcm\ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();

        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Dcm\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Dcm\ApiClient $apiClient set the API client
     *
     * @return ProductApi
     */
    public function setApiClient(\Dcm\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation controllersProductGet
     *
     * Get product by its Dolead id
     *
     * @param string $product_id ID of product (required)
     * @return \Dcm\Model\Product
     * @throws \Dcm\ApiException on non-2xx response
     */
    public function controllersProductGet($product_id)
    {
        list($response) = $this->controllersProductGetWithHttpInfo($product_id);
        return $response;
    }

    /**
     * Operation controllersProductGetWithHttpInfo
     *
     * Get product by its Dolead id
     *
     * @param string $product_id ID of product (required)
     * @return Array of \Dcm\Model\Product, HTTP status code, HTTP response headers (array of strings)
     * @throws \Dcm\ApiException on non-2xx response
     */
    public function controllersProductGetWithHttpInfo($product_id)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_id when calling controllersProductGet');
        }
        // parse inputs
        $resourcePath = "/product/{product_id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                "{" . "product_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($product_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('DCM-API-KEY');
        if (strlen($apiKey) !== 0) {
            $headerParams['DCM-API-KEY'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Dcm\Model\Product',
                '/product/{product_id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Dcm\Model\Product', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Dcm\Model\Product', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation controllersProductProductList
     *
     * List product matching given criteria
     *
     * @param \Dcm\Model\ProductQuery $body  (optional)
     * @param int $limit Number of product returned. Used in pagination (optional, default to 100)
     * @param int $offset Pagination offset (optional, default to 0)
     * @return \Dcm\Model\Product[]
     * @throws \Dcm\ApiException on non-2xx response
     */
    public function controllersProductProductList($body = null, $limit = null, $offset = null)
    {
        list($response) = $this->controllersProductProductListWithHttpInfo($body, $limit, $offset);
        return $response;
    }

    /**
     * Operation controllersProductProductListWithHttpInfo
     *
     * List product matching given criteria
     *
     * @param \Dcm\Model\ProductQuery $body  (optional)
     * @param int $limit Number of product returned. Used in pagination (optional, default to 100)
     * @param int $offset Pagination offset (optional, default to 0)
     * @return Array of \Dcm\Model\Product[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Dcm\ApiException on non-2xx response
     */
    public function controllersProductProductListWithHttpInfo($body = null, $limit = null, $offset = null)
    {
        if (!is_null($limit) && ($limit > 100.0)) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ProductApi.controllersProductProductList, must be smaller than or equal to 100.0.');
        }
        if (!is_null($limit) && ($limit < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling ProductApi.controllersProductProductList, must be bigger than or equal to 1.0.');
        }

        if (!is_null($offset) && ($offset < 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling ProductApi.controllersProductProductList, must be bigger than or equal to 0.0.');
        }

        // parse inputs
        $resourcePath = "/product";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('DCM-API-KEY');
        if (strlen($apiKey) !== 0) {
            $headerParams['DCM-API-KEY'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Dcm\Model\Product[]',
                '/product'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Dcm\Model\Product[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Dcm\Model\Product[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation controllersProductUpdateMany
     *
     * Update campaigns matching given criteria.
     *
     * @param \Dcm\Model\ProductUpdate $body  (optional)
     * @return string[]
     * @throws \Dcm\ApiException on non-2xx response
     */
    public function controllersProductUpdateMany($body = null)
    {
        list($response) = $this->controllersProductUpdateManyWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation controllersProductUpdateManyWithHttpInfo
     *
     * Update campaigns matching given criteria.
     *
     * @param \Dcm\Model\ProductUpdate $body  (optional)
     * @return Array of string[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Dcm\ApiException on non-2xx response
     */
    public function controllersProductUpdateManyWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/product";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('DCM-API-KEY');
        if (strlen($apiKey) !== 0) {
            $headerParams['DCM-API-KEY'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                'string[]',
                '/product'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'string[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'string[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation controllersProductUpdateOne
     *
     * Update product by its id
     *
     * @param string $product_id Dolead ID of product to perform update on (required)
     * @param \Dcm\Model\UpdatableProduct $body Update operation (required)
     * @return \Dcm\Model\Product
     * @throws \Dcm\ApiException on non-2xx response
     */
    public function controllersProductUpdateOne($product_id, $body)
    {
        list($response) = $this->controllersProductUpdateOneWithHttpInfo($product_id, $body);
        return $response;
    }

    /**
     * Operation controllersProductUpdateOneWithHttpInfo
     *
     * Update product by its id
     *
     * @param string $product_id Dolead ID of product to perform update on (required)
     * @param \Dcm\Model\UpdatableProduct $body Update operation (required)
     * @return Array of \Dcm\Model\Product, HTTP status code, HTTP response headers (array of strings)
     * @throws \Dcm\ApiException on non-2xx response
     */
    public function controllersProductUpdateOneWithHttpInfo($product_id, $body)
    {
        // verify the required parameter 'product_id' is set
        if ($product_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $product_id when calling controllersProductUpdateOne');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling controllersProductUpdateOne');
        }
        // parse inputs
        $resourcePath = "/product/{product_id}";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/json'));

        // path params
        if ($product_id !== null) {
            $resourcePath = str_replace(
                "{" . "product_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($product_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('DCM-API-KEY');
        if (strlen($apiKey) !== 0) {
            $headerParams['DCM-API-KEY'] = $apiKey;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Dcm\Model\Product',
                '/product/{product_id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Dcm\Model\Product', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Dcm\Model\Product', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
