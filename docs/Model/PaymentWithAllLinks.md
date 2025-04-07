# PaymentWithAllLinks

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\Swagger\Client\Model\PaymentLinks**](PaymentLinks.md) |  | [optional] 
**amount** | **int** | The description assigned to the payment when it was created. | [optional] 
**authorisation_mode** | **string** | How the payment will be authorised. Payments created in &#x60;web&#x60; mode require the paying user to visit the &#x60;next_url&#x60; to complete the payment. | [optional] 
**authorisation_summary** | [**\Swagger\Client\Model\AuthorisationSummary**](AuthorisationSummary.md) |  | [optional] 
**card_brand** | **string** | This attribute is deprecated. Please use &#x60;card_details.card_brand&#x60; instead. | [optional] 
**card_details** | [**\Swagger\Client\Model\CardDetails**](CardDetails.md) |  | [optional] 
**corporate_card_surcharge** | **int** | The [corporate card surcharge](https://docs.payments.service.gov.uk/corporate_card_surcharges/#add-corporate-card-fees) amount in pence. | [optional] 
**created_date** | **string** |  | [optional] 
**delayed_capture** | **bool** | &#x60;delayed_capture&#x60; is &#x60;true&#x60; if you’re [controlling how long it takes GOV.UK Pay to take (‘capture’) a payment](https://docs.payments.service.gov.uk/delayed_capture). | [optional] 
**description** | **string** | The description assigned to the payment when it was created. | [optional] 
**email** | **string** |  | [optional] 
**exemption** | [**\Swagger\Client\Model\Exemption**](Exemption.md) |  | [optional] 
**fee** | **int** | The [payment service provider’s (PSP) transaction fee](https://docs.payments.service.gov.uk/reporting/#psp-fees), in pence. &#x60;fee&#x60; only appears when we have taken (‘captured’) the payment from the user or if their payment fails after they submitted their card details. &#x60;fee&#x60; will not appear if your PSP is Worldpay or you are using an API key from a test service. | [optional] 
**language** | **string** | The ISO-6391 Alpha-2 code of the [language of the user&#x27;s payment page](https://docs.payments.service.gov.uk/optional_features/welsh_language). | [optional] 
**metadata** | [**\Swagger\Client\Model\ExternalMetadata**](ExternalMetadata.md) |  | [optional] 
**moto** | **bool** | Indicates if this payment is a [Mail Order / Telephone Order (MOTO) payment](https://docs.payments.service.gov.uk/moto_payments). | [optional] 
**net_amount** | **int** | The amount, in pence, that will be paid into your bank account after your payment service provider takes the &#x60;fee&#x60;. | [optional] 
**payment_id** | **string** | The unique ID GOV.UK Pay automatically associated with this payment when you created it. | [optional] 
**payment_provider** | **string** | The payment service provider that processed this payment. | [optional] 
**provider_id** | **string** | The unique ID your payment service provider generated for this payment. This is not the same as the &#x60;payment_id&#x60;. | [optional] 
**reference** | **string** | The reference associated with the payment when it was created. &#x60;reference&#x60; is not unique - multiple payments can have the same &#x60;reference&#x60; value. | [optional] 
**refund_summary** | [**\Swagger\Client\Model\RefundSummary**](RefundSummary.md) |  | [optional] 
**return_url** | **string** | The URL you direct the paying user to after their payment journey on GOV.UK Pay ends. | [optional] 
**settlement_summary** | [**\Swagger\Client\Model\PaymentSettlementSummary**](PaymentSettlementSummary.md) |  | [optional] 
**state** | [**\Swagger\Client\Model\PaymentState**](PaymentState.md) |  | [optional] 
**total_amount** | **int** | Amount your user paid in pence, including corporate card fees. &#x60;total_amount&#x60; only appears if you [added a corporate card surcharge to the payment](https://docs.payments.service.gov.uk/corporate_card_surcharges/#add-corporate-card-fees). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

