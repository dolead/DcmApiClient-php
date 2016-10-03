# DcmApiClient\CampaignBidModifierApi

All URIs are relative to *https://dcmapi.dolead.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**controllersCampaignBidModifierGet**](CampaignBidModifierApi.md#controllersCampaignBidModifierGet) | **GET** /campaign/{campaign_id}/bid_modifier/{bm_type}/{bid_modifier_id} | Get bid modifier by its id
[**controllersCampaignBidModifierList**](CampaignBidModifierApi.md#controllersCampaignBidModifierList) | **GET** /campaign/{campaign_id}/bid_modifier/{bm_type} | List campaign bid modifiers matching given criteria
[**controllersCampaignBidModifierUpdateMany**](CampaignBidModifierApi.md#controllersCampaignBidModifierUpdateMany) | **PUT** /campaign/{campaign_id}/bid_modifier/{bm_type} | Update bid modifiers matching given criteria.
[**controllersCampaignBidModifierUpdateOne**](CampaignBidModifierApi.md#controllersCampaignBidModifierUpdateOne) | **PUT** /campaign/{campaign_id}/bid_modifier/{bm_type}/{bid_modifier_id} | Update bid_modifier by its id


# **controllersCampaignBidModifierGet**
> \DcmModel\BidModifier controllersCampaignBidModifierGet($campaign_id, $bm_type, $bid_modifier_id)

Get bid modifier by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DcmApiClient\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DcmApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new DcmApiClient\Api\CampaignBidModifierApi();
$campaign_id = "campaign_id_example"; // string | ID of campaign
$bm_type = "bm_type_example"; // string | Filter over the bid modifier type
$bid_modifier_id = "bid_modifier_id_example"; // string | ID of bid modifier

try {
    $result = $api_instance->controllersCampaignBidModifierGet($campaign_id, $bm_type, $bid_modifier_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignBidModifierApi->controllersCampaignBidModifierGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| ID of campaign |
 **bm_type** | **string**| Filter over the bid modifier type |
 **bid_modifier_id** | **string**| ID of bid modifier |

### Return type

[**\DcmModel\BidModifier**](../Model/BidModifier.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersCampaignBidModifierList**
> \DcmModel\BidModifier[] controllersCampaignBidModifierList($campaign_id, $bm_type, $body, $limit, $offset)

List campaign bid modifiers matching given criteria

Each criterion may be an Enum or a TextParameter <br /> - An Enum parameter is a simple string but which cannot take random values <br /> - A TextParameter describe a query over a text field. Query is defined as an object of **operator** -> **value**. Multiple operators may be specified in the query, but only one of each kind _(For example, a contains operator can be combined with a not_contains operator)_

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DcmApiClient\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DcmApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new DcmApiClient\Api\CampaignBidModifierApi();
$campaign_id = "campaign_id_example"; // string | ID of campaign
$bm_type = "bm_type_example"; // string | Filter over the bid modifier type
$body = new \DcmModel\BidModifierQuery(); // \DcmModel\BidModifierQuery | 
$limit = 100; // int | Number of campaign returned. Used in pagination
$offset = 0; // int | Pagination offset

try {
    $result = $api_instance->controllersCampaignBidModifierList($campaign_id, $bm_type, $body, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignBidModifierApi->controllersCampaignBidModifierList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| ID of campaign |
 **bm_type** | **string**| Filter over the bid modifier type |
 **body** | [**\DcmModel\BidModifierQuery**](../Model/\DcmModel\BidModifierQuery.md)|  | [optional]
 **limit** | **int**| Number of campaign returned. Used in pagination | [optional] [default to 100]
 **offset** | **int**| Pagination offset | [optional] [default to 0]

### Return type

[**\DcmModel\BidModifier[]**](../Model/BidModifier.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersCampaignBidModifierUpdateMany**
> string[] controllersCampaignBidModifierUpdateMany($campaign_id, $bm_type, $body)

Update bid modifiers matching given criteria.

Each criteria may be an Enum or a TextParameter <br /> - An Enum parameter is a simple string but who cannot take random values <br /> - A TextParameter describe a query over a text field. Query is defined as an object of **operator** -> **value**. Multiple operators may be specified in the query, but only one of each kind _(For example, a contains operator can be combined with a not_contains operator)_

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DcmApiClient\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DcmApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new DcmApiClient\Api\CampaignBidModifierApi();
$campaign_id = "campaign_id_example"; // string | ID of campaign
$bm_type = "bm_type_example"; // string | Filter over the bid modifier type
$body = new \DcmModel\BidModifierUpdate(); // \DcmModel\BidModifierUpdate | 

try {
    $result = $api_instance->controllersCampaignBidModifierUpdateMany($campaign_id, $bm_type, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignBidModifierApi->controllersCampaignBidModifierUpdateMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| ID of campaign |
 **bm_type** | **string**| Filter over the bid modifier type |
 **body** | [**\DcmModel\BidModifierUpdate**](../Model/\DcmModel\BidModifierUpdate.md)|  | [optional]

### Return type

**string[]**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersCampaignBidModifierUpdateOne**
> \DcmModel\BidModifier controllersCampaignBidModifierUpdateOne($campaign_id, $bm_type, $bid_modifier_id, $body)

Update bid_modifier by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
DcmApiClient\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// DcmApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new DcmApiClient\Api\CampaignBidModifierApi();
$campaign_id = "campaign_id_example"; // string | ID of campaign
$bm_type = "bm_type_example"; // string | Filter over the bid modifier type
$bid_modifier_id = "bid_modifier_id_example"; // string | ID of bid_modifier to perform update on
$body = new \DcmModel\UpdatableBidModifier(); // \DcmModel\UpdatableBidModifier | Update operation

try {
    $result = $api_instance->controllersCampaignBidModifierUpdateOne($campaign_id, $bm_type, $bid_modifier_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CampaignBidModifierApi->controllersCampaignBidModifierUpdateOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| ID of campaign |
 **bm_type** | **string**| Filter over the bid modifier type |
 **bid_modifier_id** | **string**| ID of bid_modifier to perform update on |
 **body** | [**\DcmModel\UpdatableBidModifier**](../Model/\DcmModel\UpdatableBidModifier.md)| Update operation |

### Return type

[**\DcmModel\BidModifier**](../Model/BidModifier.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

