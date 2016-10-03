# Dcm\ProductApi

All URIs are relative to *https://dcmapi.dolead.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**controllersProductGet**](ProductApi.md#controllersProductGet) | **GET** /product/{product_id} | Get product by its Dolead id
[**controllersProductList**](ProductApi.md#controllersProductList) | **GET** /product | List product matching given criteria
[**controllersProductUpdateMany**](ProductApi.md#controllersProductUpdateMany) | **PUT** /product | Update campaigns matching given criteria.
[**controllersProductUpdateOne**](ProductApi.md#controllersProductUpdateOne) | **PUT** /product/{product_id} | Update product by its id


# **controllersProductGet**
> \Dcm\Model\Product controllersProductGet($product_id)

Get product by its Dolead id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\ProductApi();
$product_id = "product_id_example"; // string | ID of product

try {
    $result = $api_instance->controllersProductGet($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->controllersProductGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**| ID of product |

### Return type

[**\Dcm\Model\Product**](../Model/Product.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersProductList**
> \Dcm\Model\Product[] controllersProductList($body, $limit, $offset)

List product matching given criteria

Each criterion may be an Enum or a TextParameter <br /> - An Enum parameter is a simple string but who cannot take random values <br /> - A TextParameter describe a query over a text field. Query is defined as an object of **operator** -> **value**. Multiple operators may be specified in the query, but only one of each kind _(For example, a contains operator can be combined with a not_contains operator)_

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\ProductApi();
$body = new \Dcm\Model\ProductQuery(); // \Dcm\Model\ProductQuery | 
$limit = 100; // int | Number of product returned. Used in pagination
$offset = 0; // int | Pagination offset

try {
    $result = $api_instance->controllersProductList($body, $limit, $offset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->controllersProductList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Dcm\Model\ProductQuery**](../Model/\Dcm\Model\ProductQuery.md)|  | [optional]
 **limit** | **int**| Number of product returned. Used in pagination | [optional] [default to 100]
 **offset** | **int**| Pagination offset | [optional] [default to 0]

### Return type

[**\Dcm\Model\Product[]**](../Model/Product.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersProductUpdateMany**
> string[] controllersProductUpdateMany($body)

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

$api_instance = new Dcm\Api\ProductApi();
$body = new \Dcm\Model\ProductUpdate(); // \Dcm\Model\ProductUpdate | 

try {
    $result = $api_instance->controllersProductUpdateMany($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->controllersProductUpdateMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Dcm\Model\ProductUpdate**](../Model/\Dcm\Model\ProductUpdate.md)|  | [optional]

### Return type

**string[]**

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **controllersProductUpdateOne**
> \Dcm\Model\Product controllersProductUpdateOne($product_id, $body)

Update product by its id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
Dcm\Configuration::getDefaultConfiguration()->setApiKey('DCM-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// Dcm\Configuration::getDefaultConfiguration()->setApiKeyPrefix('DCM-API-KEY', 'Bearer');

$api_instance = new Dcm\Api\ProductApi();
$product_id = "product_id_example"; // string | Dolead ID of product to perform update on
$body = new \Dcm\Model\UpdatableProduct(); // \Dcm\Model\UpdatableProduct | Update operation

try {
    $result = $api_instance->controllersProductUpdateOne($product_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->controllersProductUpdateOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **string**| Dolead ID of product to perform update on |
 **body** | [**\Dcm\Model\UpdatableProduct**](../Model/\Dcm\Model\UpdatableProduct.md)| Update operation |

### Return type

[**\Dcm\Model\Product**](../Model/Product.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

