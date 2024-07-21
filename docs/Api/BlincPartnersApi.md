# BlincPartners\BlincPartnersApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createSession()**](BlincPartnersApi.md#createSession) | **POST** /partners/v1/session | 
[**getPayment()**](BlincPartnersApi.md#getPayment) | **GET** /partners/v1/commitment/{paymentCommitmentId} | 


## `createSession()`

```php
createSession($payment_onboard_session_input_dto): \BlincPartners\Model\PaymentOnboardSessionOutputDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = BlincPartners\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlincPartners\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new BlincPartners\Api\BlincPartnersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$payment_onboard_session_input_dto = new \BlincPartners\Model\PaymentOnboardSessionInputDto(); // \BlincPartners\Model\PaymentOnboardSessionInputDto

try {
    $result = $apiInstance->createSession($payment_onboard_session_input_dto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlincPartnersApi->createSession: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_onboard_session_input_dto** | [**\BlincPartners\Model\PaymentOnboardSessionInputDto**](../Model/PaymentOnboardSessionInputDto.md)|  |

### Return type

[**\BlincPartners\Model\PaymentOnboardSessionOutputDto**](../Model/PaymentOnboardSessionOutputDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPayment()`

```php
getPayment($payment_commitment_id): \BlincPartners\Model\PaymentCommitmentExpandedOutputDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = BlincPartners\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = BlincPartners\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new BlincPartners\Api\BlincPartnersApi(
    // If you want use custom http client, pass your client which implements `Psr\Http\Client\ClientInterface`.
    // This is optional, `Psr18ClientDiscovery` will be used to find http client. For instance `GuzzleHttp\Client` implements that interface
    new GuzzleHttp\Client(),
    $config
);
$payment_commitment_id = 56; // int

try {
    $result = $apiInstance->getPayment($payment_commitment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BlincPartnersApi->getPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_commitment_id** | **int**|  |

### Return type

[**\BlincPartners\Model\PaymentCommitmentExpandedOutputDto**](../Model/PaymentCommitmentExpandedOutputDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
