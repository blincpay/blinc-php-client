# OpenAPI\Client\BlincPartnersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getPayment()**](BlincPartnersApi.md#getPayment) | **GET** /partners/v1/commitment/{paymentCommitmentId} |  |


## `getPayment()`

```php
getPayment($payment_commitment_id): \OpenAPI\Client\Model\PaymentCommitmentExpandedOutputDto
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\BlincPartnersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
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

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_commitment_id** | **int**|  | |

### Return type

[**\OpenAPI\Client\Model\PaymentCommitmentExpandedOutputDto**](../Model/PaymentCommitmentExpandedOutputDto.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
