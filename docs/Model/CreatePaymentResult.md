# CreatePaymentResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\Swagger\Client\Model\PaymentLinks**](PaymentLinks.md) |  | [optional] 
**amount** | **int** | The amount, in pence, the user has paid or will pay. &#x60;amount&#x60; will match the value you sent in the request body. | [optional] 
**card_details** | [**\Swagger\Client\Model\CardDetailsFromResponse**](CardDetailsFromResponse.md) |  | [optional] 
**created_date** | **string** | The date you created the payment. | [optional] 
**delayed_capture** | **bool** | &#x60;delayed_capture&#x60; is &#x60;true&#x60; if you’re controlling [when GOV.UK Pay takes (‘captures’) the payment from the paying user’s bank account](https://docs.payments.service.gov.uk/delayed_capture). | [optional] 
**description** | **string** | The description you sent in the request body when creating this payment. | [optional] 
**email** | **string** | The paying user’s email address. The paying user’s email field will be prefilled with this value when they make their payment. &#x60;email&#x60; does not appear if you did not include it in the request body. | [optional] 
**language** | **string** | The language of the user’s payment page. | [optional] 
**metadata** | [**\Swagger\Client\Model\ExternalMetadata**](ExternalMetadata.md) |  | [optional] 
**moto** | **bool** | Indicates if this payment is a [Mail Order / Telephone Order (MOTO) payment](https://docs.payments.service.gov.uk/moto_payments). | [optional] 
**payment_id** | **string** | The unique ID GOV.UK Pay automatically associated with this payment when you created it. | [optional] 
**payment_provider** | **string** |  | [optional] 
**provider_id** | **string** | The reference number your payment service provider associated with the payment. | [optional] 
**reference** | **string** | The reference number you associated with this payment. | [optional] 
**refund_summary** | [**\Swagger\Client\Model\RefundSummary**](RefundSummary.md) |  | [optional] 
**return_url** | **string** | The URL you direct the paying user to after their payment journey on GOV.UK Pay ends. | [optional] 
**settlement_summary** | [**\Swagger\Client\Model\PaymentSettlementSummary**](PaymentSettlementSummary.md) |  | [optional] 
**state** | [**\Swagger\Client\Model\PaymentState**](PaymentState.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

