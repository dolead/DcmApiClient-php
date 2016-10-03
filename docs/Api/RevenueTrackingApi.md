# Dcm\RevenueTrackingApi

All URIs are relative to *https://dcmapi.dolead.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**controllersClickRevenueAdwordsUpsert**](RevenueTrackingApi.md#controllersClickRevenueAdwordsUpsert) | **POST** /adwords_click_revenue/upsert_many | Create or update a list of Adwords conversions / revenues, using gclid
[**controllersClickRevenueBingUpsert**](RevenueTrackingApi.md#controllersClickRevenueBingUpsert) | **POST** /bing_click_revenue/upsert_many | Create or update a list of Bing Ads conversions / revenues, using Bing URL tracking


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

