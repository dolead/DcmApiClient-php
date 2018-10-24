# Dcm\TrackingApi

All URIs are relative to *https://dcmapi.dolead.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**controllersTrackingGet**](TrackingApi.md#controllersTrackingGet) | **GET** /tracking/{dldclck_id} | Get tracking by its id


# **controllersTrackingGet**
> \Dcm\Model\Tracking controllersTrackingGet($dldclck_id)

Get tracking by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\TrackingApi();
$dldclck_id = "dldclck_id_example"; // string | ID of Dolead click

try {
    $result = $api_instance->controllersTrackingGet($dldclck_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TrackingApi->controllersTrackingGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **dldclck_id** | **string**| ID of Dolead click |

### Return type

[**\Dcm\Model\Tracking**](../Model/Tracking.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

