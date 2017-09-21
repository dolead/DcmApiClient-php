# Dcm\AdApi

All URIs are relative to *https://dcmapi.dolead.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**controllersAdAdList**](AdApi.md#controllersAdAdList) | **GET** /ad | List ads matching given criteria


# **controllersAdAdList**
> \Dcm\Model\Ad[] controllersAdAdList($body, $limit, $offset)

List ads matching given criteria

Each criterion may be an Enum or a TextParameter <br /> - An Enum parameter is a simple string but which cannot take random values <br /> - A TextParameter describe a query over a text field. Query is defined as an object of **operator** -> **value**. Multiple operators may be specified in the query, but only one of each kind _(For example, a contains operator can be combined with a not_contains operator)_

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\AdApi();
$body = new \Dcm\Model\AdQuery(); // \Dcm\Model\AdQuery | 
$limit = 100; // int | Number of ads returned. Used in pagination
$offset = 0; // int | Pagination offset

try {
    $result = $api_instance->controllersAdAdList($body, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdApi->controllersAdAdList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Dcm\Model\AdQuery**](../Model/\Dcm\Model\AdQuery.md)|  | [optional]
 **limit** | **int**| Number of ads returned. Used in pagination | [optional] [default to 100]
 **offset** | **int**| Pagination offset | [optional] [default to 0]

### Return type

[**\Dcm\Model\Ad[]**](../Model/Ad.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

