# Dcm\StatisticApi

All URIs are relative to *https://dcmapi.dolead.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**controllersStatisticsGetCampaignStatistics**](StatisticApi.md#controllersStatisticsGetCampaignStatistics) | **GET** /campaign/statistics/{campaign_id}/{period_start}/{period_end} | Get campaign stats for a given period.


# **controllersStatisticsGetCampaignStatistics**
> \Dcm\Model\SingleCampaignStatistic controllersStatisticsGetCampaignStatistics($campaign_id, $period_start, $period_end)

Get campaign stats for a given period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\StatisticApi();
$campaign_id = "campaign_id_example"; // string | ID of campaign
$period_start = new \DateTime(); // \DateTime | ID of campaign
$period_end = new \DateTime(); // \DateTime | ID of campaign

try {
    $result = $api_instance->controllersStatisticsGetCampaignStatistics($campaign_id, $period_start, $period_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StatisticApi->controllersStatisticsGetCampaignStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **campaign_id** | **string**| ID of campaign |
 **period_start** | **\DateTime**| ID of campaign |
 **period_end** | **\DateTime**| ID of campaign |

### Return type

[**\Dcm\Model\SingleCampaignStatistic**](../Model/SingleCampaignStatistic.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

