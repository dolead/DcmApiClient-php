# DcmApiClient\CampaignApi

All URIs are relative to *https://dcmapi.dolead.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**controllersCampaignGet**](CampaignApi.md#controllersCampaignGet) | **GET** /campaign/{campaign_id} | Get campaign by its id
[**controllersCampaignList**](CampaignApi.md#controllersCampaignList) | **GET** /campaign | List campaigns matching given criteria
[**controllersCampaignUpdateMany**](CampaignApi.md#controllersCampaignUpdateMany) | **PUT** /campaign | Update campaigns matching given criteria.
[**controllersCampaignUpdateOne**](CampaignApi.md#controllersCampaignUpdateOne) | **PUT** /campaign/{campaign_id} | Update campaign by its id


# **controllersCampaignGet**
> \DcmModel\Campaign controllersCampaignGet($campaign_id)

Get campaign by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DcmApiClient\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DcmApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new DcmApiClient\Api\CampaignApi();
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

[**\DcmModel\Campaign**](../Model/Campaign.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersCampaignList**
> \DcmModel\Campaign[] controllersCampaignList($body, $limit, $offset)

List campaigns matching given criteria

Each criterion may be an Enum or a TextParameter <br /> - An Enum parameter is a simple string but which cannot take random values <br /> - A TextParameter describe a query over a text field. Query is defined as an object of **operator** -> **value**. Multiple operators may be specified in the query, but only one of each kind _(For example, a contains operator can be combined with a not_contains operator)_

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DcmApiClient\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DcmApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new DcmApiClient\Api\CampaignApi();
$body = new \DcmModel\CampaignQuery(); // \DcmModel\CampaignQuery | 
$limit = 100; // int | Number of campaign returned. Used in pagination
$offset = 0; // int | Pagination offset

try {
    $result = $api_instance->controllersCampaignList($body, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignApi->controllersCampaignList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\DcmModel\CampaignQuery**](../Model/\DcmModel\CampaignQuery.md)|  | [optional]
 **limit** | **int**| Number of campaign returned. Used in pagination | [optional] [default to 100]
 **offset** | **int**| Pagination offset | [optional] [default to 0]

### Return type

[**\DcmModel\Campaign[]**](../Model/Campaign.md)

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
DcmApiClient\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DcmApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new DcmApiClient\Api\CampaignApi();
$body = new \DcmModel\CampaignUpdate(); // \DcmModel\CampaignUpdate | 

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
 **body** | [**\DcmModel\CampaignUpdate**](../Model/\DcmModel\CampaignUpdate.md)|  | [optional]

### Return type

**string[]**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersCampaignUpdateOne**
> \DcmModel\Campaign controllersCampaignUpdateOne($campaign_id, $body)

Update campaign by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DcmApiClient\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DcmApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new DcmApiClient\Api\CampaignApi();
$campaign_id = "campaign_id_example"; // string | ID of campaign to perform update on
$body = new \DcmModel\UpdatableCampaign(); // \DcmModel\UpdatableCampaign | Update operation

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
 **body** | [**\DcmModel\UpdatableCampaign**](../Model/\DcmModel\UpdatableCampaign.md)| Update operation |

### Return type

[**\DcmModel\Campaign**](../Model/Campaign.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

