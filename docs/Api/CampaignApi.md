# Dcm\CampaignApi

All URIs are relative to *https://dcmapi.dolead.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**controllersCampaignCampaignList**](CampaignApi.md#controllersCampaignCampaignList) | **GET** /campaign | List campaigns matching given criteria
[**controllersCampaignGet**](CampaignApi.md#controllersCampaignGet) | **GET** /campaign/{campaign_id} | Get campaign by its id
[**controllersCampaignUpdateMany**](CampaignApi.md#controllersCampaignUpdateMany) | **PUT** /campaign | Update campaigns matching given criteria.
[**controllersCampaignUpdateOne**](CampaignApi.md#controllersCampaignUpdateOne) | **PUT** /campaign/{campaign_id} | Update campaign by its id


# **controllersCampaignCampaignList**
> \Dcm\Model\Campaign[] controllersCampaignCampaignList($body, $limit, $offset)

List campaigns matching given criteria

Each criterion may be an Enum or a TextParameter <br /> - An Enum parameter is a simple string but which cannot take random values <br /> - A TextParameter describe a query over a text field. Query is defined as an object of **operator** -> **value**. Multiple operators may be specified in the query, but only one of each kind _(For example, a contains operator can be combined with a not_contains operator)_

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\CampaignApi();
$body = new \Dcm\Model\CampaignQuery(); // \Dcm\Model\CampaignQuery | 
$limit = 100; // int | Number of campaign returned. Used in pagination
$offset = 0; // int | Pagination offset

try {
    $result = $api_instance->controllersCampaignCampaignList($body, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->controllersCampaignCampaignList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Dcm\Model\CampaignQuery**](../Model/\Dcm\Model\CampaignQuery.md)|  | [optional]
 **limit** | **int**| Number of campaign returned. Used in pagination | [optional] [default to 100]
 **offset** | **int**| Pagination offset | [optional] [default to 0]

### Return type

[**\Dcm\Model\Campaign[]**](../Model/Campaign.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersCampaignGet**
> \Dcm\Model\Campaign controllersCampaignGet($campaign_id)

Get campaign by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\CampaignApi();
$campaign_id = "campaign_id_example"; // string | ID of campaign

try {
    $result = $api_instance->controllersCampaignGet($campaign_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->controllersCampaignGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| ID of campaign |

### Return type

[**\Dcm\Model\Campaign**](../Model/Campaign.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersCampaignUpdateMany**
> string[] controllersCampaignUpdateMany($body)

Update campaigns matching given criteria.

Each criteria may be an Enum or a TextParameter <br /> - An Enum parameter is a simple string but who cannot take random values <br /> - A TextParameter describe a query over a text field. Query is defined as an object of **operator** -> **value**. Multiple operators may be specified in the query, but only one of each kind _(For example, a contains operator can be combined with a not_contains operator)_

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\CampaignApi();
$body = new \Dcm\Model\CampaignUpdate(); // \Dcm\Model\CampaignUpdate | 

try {
    $result = $api_instance->controllersCampaignUpdateMany($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->controllersCampaignUpdateMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Dcm\Model\CampaignUpdate**](../Model/\Dcm\Model\CampaignUpdate.md)|  | [optional]

### Return type

**string[]**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersCampaignUpdateOne**
> \Dcm\Model\Campaign controllersCampaignUpdateOne($campaign_id, $body)

Update campaign by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\CampaignApi();
$campaign_id = "campaign_id_example"; // string | ID of campaign to perform update on
$body = new \Dcm\Model\UpdatableCampaign(); // \Dcm\Model\UpdatableCampaign | Update operation

try {
    $result = $api_instance->controllersCampaignUpdateOne($campaign_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->controllersCampaignUpdateOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| ID of campaign to perform update on |
 **body** | [**\Dcm\Model\UpdatableCampaign**](../Model/\Dcm\Model\UpdatableCampaign.md)| Update operation |

### Return type

[**\Dcm\Model\Campaign**](../Model/Campaign.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

