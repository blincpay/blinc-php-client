# OpenAPI\Client\BlincPartnersApi

All URIs are relative to http://localhost, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**partnersV1CommitmentPaymentCommitmentIdPost()**](BlincPartnersApi.md#partnersV1CommitmentPaymentCommitmentIdPost) | **POST** /partners/v1/commitment/{paymentCommitmentId} |  |


## `partnersV1CommitmentPaymentCommitmentIdPost()`

```php
partnersV1CommitmentPaymentCommitmentIdPost($payment_commitment_id, $payment_onboard_session_input_dto)
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
$payment_commitment_id = 'payment_commitment_id_example'; // string
$payment_onboard_session_input_dto = new \OpenAPI\Client\Model\PaymentOnboardSessionInputDto(); // \OpenAPI\Client\Model\PaymentOnboardSessionInputDto

try {
    $apiInstance->partnersV1CommitmentPaymentCommitmentIdPost($payment_commitment_id, $payment_onboard_session_input_dto);
} catch (Exception $e) {
    echo 'Exception when calling BlincPartnersApi->partnersV1CommitmentPaymentCommitmentIdPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_commitment_id** | **string**|  | |
| **payment_onboard_session_input_dto** | [**\OpenAPI\Client\Model\PaymentOnboardSessionInputDto**](../Model/PaymentOnboardSessionInputDto.md)|  | |

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
