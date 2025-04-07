# PaymentState

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**can_retry** | **bool** | If &#x60;can_retry&#x60; is &#x60;true&#x60;, you can use this agreement to try to take another recurring payment. If &#x60;can_retry&#x60; is &#x60;false&#x60;, you cannot take another recurring payment with this agreement. &#x60;can_retry&#x60; only appears on failed payments that were attempted using an agreement for recurring payments. | [optional] 
**code** | **string** | An [API error code](https://docs.payments.service.gov.uk/api_reference/#gov-uk-pay-api-error-codes)that explains why the payment failed. &#x60;code&#x60; only appears if the payment failed. | [optional] 
**finished** | **bool** | Indicates whether a payment journey is finished. | [optional] 
**message** | **string** | A description of what went wrong with this payment. &#x60;message&#x60; only appears if the payment failed. | [optional] 
**status** | **string** | Where the payment is in [the payment status lifecycle](https://docs.payments.service.gov.uk/api_reference/#payment-status-meanings). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

