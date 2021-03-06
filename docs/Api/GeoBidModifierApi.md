# Dcm\GeoBidModifierApi

All URIs are relative to *https://dcmapi.dolead.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**controllersGeoBidModifierBimoList**](GeoBidModifierApi.md#controllersGeoBidModifierBimoList) | **GET** /geo_bid_modifier/{biddable_level}/{biddable_id}/ | Get bid modifier on an object (account, campaign, ad_group)
[**controllersGeoBidModifierUpdateMany**](GeoBidModifierApi.md#controllersGeoBidModifierUpdateMany) | **PUT** /geo_bid_modifier/{biddable_level}/{biddable_id}/ | Update multiple bid modifiers


# **controllersGeoBidModifierBimoList**
> \Dcm\Model\BidModifier controllersGeoBidModifierBimoList($biddable_level, $biddable_id)

Get bid modifier on an object (account, campaign, ad_group)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\GeoBidModifierApi();
$biddable_level = "biddable_level_example"; // string | Type of object
$biddable_id = "biddable_id_example"; // string | ID of object

try {
    $result = $api_instance->controllersGeoBidModifierBimoList($biddable_level, $biddable_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeoBidModifierApi->controllersGeoBidModifierBimoList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **biddable_level** | **string**| Type of object |
 **biddable_id** | **string**| ID of object |

### Return type

[**\Dcm\Model\BidModifier**](../Model/BidModifier.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersGeoBidModifierUpdateMany**
> \Dcm\Model\GeoBidModifierUpdateResponse controllersGeoBidModifierUpdateMany($biddable_level, $biddable_id, $replace, $body)

Update multiple bid modifiers

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\GeoBidModifierApi();
$biddable_level = "biddable_level_example"; // string | Type of the biddable object
$biddable_id = "biddable_id_example"; // string | ID of the biddable object (account, campaign, ad_group)
$replace = "true"; // string | replace=false means all existing bid modifiers are replaced.
$body = array(new GeoBidModifier()); // \Dcm\Model\GeoBidModifier[] | List with the bid modifiers (criterias and values)

try {
    $result = $api_instance->controllersGeoBidModifierUpdateMany($biddable_level, $biddable_id, $replace, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GeoBidModifierApi->controllersGeoBidModifierUpdateMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **biddable_level** | **string**| Type of the biddable object |
 **biddable_id** | **string**| ID of the biddable object (account, campaign, ad_group) |
 **replace** | **string**| replace&#x3D;false means all existing bid modifiers are replaced. | [optional] [default to true]
 **body** | [**\Dcm\Model\GeoBidModifier[]**](../Model/GeoBidModifier.md)| List with the bid modifiers (criterias and values) | [optional]

### Return type

[**\Dcm\Model\GeoBidModifierUpdateResponse**](../Model/GeoBidModifierUpdateResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

