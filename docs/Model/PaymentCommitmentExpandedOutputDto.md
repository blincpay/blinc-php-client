# # PaymentCommitmentExpandedOutputDto

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  |
**effective_date** | **\DateTime** |  |
**transaction_amount_cents** | **int** |  |
**merchant** | [**\BlincPartners\Model\PaymentCommitmentMerchantOutputDto**](PaymentCommitmentMerchantOutputDto.md) |  |
**product** | [**\BlincPartners\Model\PaymentCommitmentProductDto**](PaymentCommitmentProductDto.md) |  |
**metadata** | **mixed** |  | [optional]
**payments** | [**\BlincPartners\Model\PaymentCommitmentPaymentOutputDto[]**](PaymentCommitmentPaymentOutputDto.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
