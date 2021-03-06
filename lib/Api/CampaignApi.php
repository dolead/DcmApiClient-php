<?php
/**
 * CampaignApi
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
 * CampaignApi Class Doc Comment
 *
 * @category Class
 * @package  Dcm
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CampaignApi
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
     * @return CampaignApi
     */
    public function setApiClient(\Dcm\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation controllersCampaignCampaignList
     *
     * List campaigns matching given criteria
     *
     * @param \Dcm\Model\CampaignQuery $body  (optional)
     * @param int $limit Number of campaign returned. Used in pagination (optional, default to 100)
     * @param int $offset Pagination offset (optional, default to 0)
     * @return \Dcm\Model\Campaign[]
     * @throws \Dcm\ApiException on non-2xx response
     */
    public function controllersCampaignCampaignList($body = null, $limit = null, $offset = null)
    {
        list($response) = $this->controllersCampaignCampaignListWithHttpInfo($body, $limit, $offset);
        return $response;
    }

    /**
     * Operation controllersCampaignCampaignListWithHttpInfo
     *
     * List campaigns matching given criteria
     *
     * @param \Dcm\Model\CampaignQuery $body  (optional)
     * @param int $limit Number of campaign returned. Used in pagination (optional, default to 100)
     * @param int $offset Pagination offset (optional, default to 0)
     * @return Array of \Dcm\Model\Campaign[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Dcm\ApiException on non-2xx response
     */
    public function controllersCampaignCampaignListWithHttpInfo($body = null, $limit = null, $offset = null)
    {
        if (!is_null($limit) && ($limit > 100.0)) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling CampaignApi.controllersCampaignCampaignList, must be smaller than or equal to 100.0.');
        }
        if (!is_null($limit) && ($limit < 1.0)) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling CampaignApi.controllersCampaignCampaignList, must be bigger than or equal to 1.0.');
        }

        if (!is_null($offset) && ($offset < 0.0)) {
            throw new \InvalidArgumentException('invalid value for "$offset" when calling CampaignApi.controllersCampaignCampaignList, must be bigger than or equal to 0.0.');
        }

        // parse inputs
        $resourcePath = "/campaign";
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
                '\Dcm\Model\Campaign[]',
                '/campaign'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Dcm\Model\Campaign[]', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Dcm\Model\Campaign[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation controllersCampaignGet
     *
     * Get campaign by its id
     *
     * @param string $campaign_id ID of campaign (required)
     * @return \Dcm\Model\Campaign
     * @throws \Dcm\ApiException on non-2xx response
     */
    public function controllersCampaignGet($campaign_id)
    {
        list($response) = $this->controllersCampaignGetWithHttpInfo($campaign_id);
        return $response;
    }

    /**
     * Operation controllersCampaignGetWithHttpInfo
     *
     * Get campaign by its id
     *
     * @param string $campaign_id ID of campaign (required)
     * @return Array of \Dcm\Model\Campaign, HTTP status code, HTTP response headers (array of strings)
     * @throws \Dcm\ApiException on non-2xx response
     */
    public function controllersCampaignGetWithHttpInfo($campaign_id)
    {
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $campaign_id when calling controllersCampaignGet');
        }
        // parse inputs
        $resourcePath = "/campaign/{campaign_id}";
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
        if ($campaign_id !== null) {
            $resourcePath = str_replace(
                "{" . "campaign_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($campaign_id),
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
                '\Dcm\Model\Campaign',
                '/campaign/{campaign_id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Dcm\Model\Campaign', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Dcm\Model\Campaign', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation controllersCampaignUpdateMany
     *
     * Update campaigns matching given criteria.
     *
     * @param \Dcm\Model\CampaignUpdate $body  (optional)
     * @return string[]
     * @throws \Dcm\ApiException on non-2xx response
     */
    public function controllersCampaignUpdateMany($body = null)
    {
        list($response) = $this->controllersCampaignUpdateManyWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation controllersCampaignUpdateManyWithHttpInfo
     *
     * Update campaigns matching given criteria.
     *
     * @param \Dcm\Model\CampaignUpdate $body  (optional)
     * @return Array of string[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Dcm\ApiException on non-2xx response
     */
    public function controllersCampaignUpdateManyWithHttpInfo($body = null)
    {
        // parse inputs
        $resourcePath = "/campaign";
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
                '/campaign'
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
     * Operation controllersCampaignUpdateOne
     *
     * Update campaign by its id
     *
     * @param string $campaign_id ID of campaign to perform update on (required)
     * @param \Dcm\Model\UpdatableCampaign $body Update operation (required)
     * @return \Dcm\Model\Campaign
     * @throws \Dcm\ApiException on non-2xx response
     */
    public function controllersCampaignUpdateOne($campaign_id, $body)
    {
        list($response) = $this->controllersCampaignUpdateOneWithHttpInfo($campaign_id, $body);
        return $response;
    }

    /**
     * Operation controllersCampaignUpdateOneWithHttpInfo
     *
     * Update campaign by its id
     *
     * @param string $campaign_id ID of campaign to perform update on (required)
     * @param \Dcm\Model\UpdatableCampaign $body Update operation (required)
     * @return Array of \Dcm\Model\Campaign, HTTP status code, HTTP response headers (array of strings)
     * @throws \Dcm\ApiException on non-2xx response
     */
    public function controllersCampaignUpdateOneWithHttpInfo($campaign_id, $body)
    {
        // verify the required parameter 'campaign_id' is set
        if ($campaign_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $campaign_id when calling controllersCampaignUpdateOne');
        }
        // verify the required parameter 'body' is set
        if ($body === null) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling controllersCampaignUpdateOne');
        }
        // parse inputs
        $resourcePath = "/campaign/{campaign_id}";
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
        if ($campaign_id !== null) {
            $resourcePath = str_replace(
                "{" . "campaign_id" . "}",
                $this->apiClient->getSerializer()->toPathValue($campaign_id),
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
                '\Dcm\Model\Campaign',
                '/campaign/{campaign_id}'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\Dcm\Model\Campaign', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Dcm\Model\Campaign', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
