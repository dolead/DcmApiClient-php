# Dcm\AdGroupApi

All URIs are relative to *https://dcmapi.dolead.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**controllersAdGroupAdGroupList**](AdGroupApi.md#controllersAdGroupAdGroupList) | **GET** /ad_group | List adgroups matching given criteria
[**controllersAdGroupGet**](AdGroupApi.md#controllersAdGroupGet) | **GET** /ad_group/{ad_group_id} | Get campaign by its id
[**controllersAdGroupUpdateMany**](AdGroupApi.md#controllersAdGroupUpdateMany) | **PUT** /ad_group | Update campaigns matching given criteria.
[**controllersAdGroupUpdateOne**](AdGroupApi.md#controllersAdGroupUpdateOne) | **PUT** /ad_group/{ad_group_id} | Update campaign by its id


# **controllersAdGroupAdGroupList**
> \Dcm\Model\AdGroup[] controllersAdGroupAdGroupList($body, $limit, $offset)

List adgroups matching given criteria

Each criterion may be an Enum or a TextParameter <br /> - An Enum parameter is a simple string but which cannot take random values <br /> - A TextParameter describe a query over a text field. Query is defined as an object of **operator** -> **value**. Multiple operators may be specified in the query, but only one of each kind _(For example, a contains operator can be combined with a not_contains operator)_

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\AdGroupApi();
$body = new \Dcm\Model\AdGroupQuery(); // \Dcm\Model\AdGroupQuery | 
$limit = 100; // int | Number of adgroups returned. Used in pagination
$offset = 0; // int | Pagination offset

try {
    $result = $api_instance->controllersAdGroupAdGroupList($body, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupApi->controllersAdGroupAdGroupList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Dcm\Model\AdGroupQuery**](../Model/\Dcm\Model\AdGroupQuery.md)|  | [optional]
 **limit** | **int**| Number of adgroups returned. Used in pagination | [optional] [default to 100]
 **offset** | **int**| Pagination offset | [optional] [default to 0]

### Return type

[**\Dcm\Model\AdGroup[]**](../Model/AdGroup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersAdGroupGet**
> \Dcm\Model\AdGroup controllersAdGroupGet($ad_group_id)

Get campaign by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\AdGroupApi();
$ad_group_id = "ad_group_id_example"; // string | ID of ad group

try {
    $result = $api_instance->controllersAdGroupGet($ad_group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupApi->controllersAdGroupGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_id** | **string**| ID of ad group |

### Return type

[**\Dcm\Model\AdGroup**](../Model/AdGroup.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersAdGroupUpdateMany**
> string[] controllersAdGroupUpdateMany($body)

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

$api_instance = new Dcm\Api\AdGroupApi();
$body = new \Dcm\Model\AdGroupUpdate(); // \Dcm\Model\AdGroupUpdate | 

try {
    $result = $api_instance->controllersAdGroupUpdateMany($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupApi->controllersAdGroupUpdateMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Dcm\Model\AdGroupUpdate**](../Model/\Dcm\Model\AdGroupUpdate.md)|  | [optional]

### Return type

**string[]**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersAdGroupUpdateOne**
> \Dcm\Model\Campaign controllersAdGroupUpdateOne($ad_group_id, $body)

Update campaign by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\AdGroupApi();
$ad_group_id = "ad_group_id_example"; // string | ID of ad group to perform update on
$body = new \Dcm\Model\UpdatableAdGroup(); // \Dcm\Model\UpdatableAdGroup | Update operation

try {
    $result = $api_instance->controllersAdGroupUpdateOne($ad_group_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdGroupApi->controllersAdGroupUpdateOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ad_group_id** | **string**| ID of ad group to perform update on |
 **body** | [**\Dcm\Model\UpdatableAdGroup**](../Model/\Dcm\Model\UpdatableAdGroup.md)| Update operation |

### Return type

[**\Dcm\Model\Campaign**](../Model/Campaign.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

