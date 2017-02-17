# Dcm\RevenueTrackingApi

All URIs are relative to *https://dcmapi.dolead.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**controllersClickRevenueAdwordsContext**](RevenueTrackingApi.md#controllersClickRevenueAdwordsContext) | **GET** /adwords_click_revenue/context | Get the Dolead context of the click (Account, Campaign, Keyword, AdGroup, Ad)
[**controllersClickRevenueAdwordsUpsert**](RevenueTrackingApi.md#controllersClickRevenueAdwordsUpsert) | **POST** /adwords_click_revenue/upsert_many | Create or update a list of Adwords conversions / revenues, using gclid
[**controllersClickRevenueBingContext**](RevenueTrackingApi.md#controllersClickRevenueBingContext) | **GET** /bing_click_revenue/context | Get the Dolead context from a Bing click context.
[**controllersClickRevenueBingUpsert**](RevenueTrackingApi.md#controllersClickRevenueBingUpsert) | **POST** /bing_click_revenue/upsert_many | Create or update a list of Bing Ads conversions / revenues, using Bing URL tracking


# **controllersClickRevenueAdwordsContext**
> \Dcm\Model\ClickContext controllersClickRevenueAdwordsContext($gclid)

Get the Dolead context of the click (Account, Campaign, Keyword, AdGroup, Ad)

This service needs autotagging works for your site (https://support.google.com/analytics/answer/2938246)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\RevenueTrackingApi();
$gclid = "gclid_example"; // string | 

try {
    $result = $api_instance->controllersClickRevenueAdwordsContext($gclid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueTrackingApi->controllersClickRevenueAdwordsContext: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gclid** | **string**|  |

### Return type

[**\Dcm\Model\ClickContext**](../Model/ClickContext.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersClickRevenueAdwordsUpsert**
> controllersClickRevenueAdwordsUpsert($body)

Create or update a list of Adwords conversions / revenues, using gclid

This service needs autotagging works for your site (https://support.google.com/analytics/answer/2938246)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\RevenueTrackingApi();
$body = array(new AdwordsClickRevenue()); // \Dcm\Model\AdwordsClickRevenue[] | 

try {
    $api_instance->controllersClickRevenueAdwordsUpsert($body);
} catch (Exception $e) {
    echo 'Exception when calling RevenueTrackingApi->controllersClickRevenueAdwordsUpsert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Dcm\Model\AdwordsClickRevenue[]**](../Model/AdwordsClickRevenue.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersClickRevenueBingContext**
> \Dcm\Model\ClickContext controllersClickRevenueBingContext($campaign_id, $ad_group_id, $ad_id, $order_item_id)

Get the Dolead context from a Bing click context.

You can also use the endpoint /campaign/ with {\"publisher_id\": bing_campaign_id}.This service use data given by the Bing URL Tracking service (http://help.bingads.microsoft.com/apex/index/3/en/51091)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\RevenueTrackingApi();
$campaign_id = "campaign_id_example"; // string | Bing CampaignId (see Bing URL tracking, Available parameters)
$ad_group_id = "ad_group_id_example"; // string | Bing AdGroupId (see Bing URL tracking, Available parameters)
$ad_id = "ad_id_example"; // string | Bing AdId (see Bing URL tracking, Available parameters)
$order_item_id = "order_item_id_example"; // string | Bing OrderItemId, aka keyword ID (see Bing URL tracking, Available parameters)

try {
    $result = $api_instance->controllersClickRevenueBingContext($campaign_id, $ad_group_id, $ad_id, $order_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RevenueTrackingApi->controllersClickRevenueBingContext: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| Bing CampaignId (see Bing URL tracking, Available parameters) |
 **ad_group_id** | **string**| Bing AdGroupId (see Bing URL tracking, Available parameters) | [optional]
 **ad_id** | **string**| Bing AdId (see Bing URL tracking, Available parameters) | [optional]
 **order_item_id** | **string**| Bing OrderItemId, aka keyword ID (see Bing URL tracking, Available parameters) | [optional]

### Return type

[**\Dcm\Model\ClickContext**](../Model/ClickContext.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersClickRevenueBingUpsert**
> controllersClickRevenueBingUpsert($body)

Create or update a list of Bing Ads conversions / revenues, using Bing URL tracking

This service use data given by the Bing URL Tracking service (http://help.bingads.microsoft.com/apex/index/3/en/51091)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\RevenueTrackingApi();
$body = array(new BingClickRevenue()); // \Dcm\Model\BingClickRevenue[] | 

try {
    $api_instance->controllersClickRevenueBingUpsert($body);
} catch (Exception $e) {
    echo 'Exception when calling RevenueTrackingApi->controllersClickRevenueBingUpsert: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Dcm\Model\BingClickRevenue[]**](../Model/BingClickRevenue.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

