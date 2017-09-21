# Dcm\CallCampaignManagementApi

All URIs are relative to *https://dcmapi.dolead.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**controllersCallsRegisterCallsStats**](CallCampaignManagementApi.md#controllersCallsRegisterCallsStats) | **POST** /calls/statistics | Provide custom call metrics to Dolead system.


# **controllersCallsRegisterCallsStats**
> controllersCallsRegisterCallsStats($body)

Provide custom call metrics to Dolead system.

This endpoint allow customers having call campaigns to register custom metrics

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\CallCampaignManagementApi();
$body = new \Dcm\Model\CallsStatistic(); // \Dcm\Model\CallsStatistic | 

try {
    $api_instance->controllersCallsRegisterCallsStats($body);
} catch (Exception $e) {
    echo 'Exception when calling CallCampaignManagementApi->controllersCallsRegisterCallsStats: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Dcm\Model\CallsStatistic**](../Model/\Dcm\Model\CallsStatistic.md)|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

