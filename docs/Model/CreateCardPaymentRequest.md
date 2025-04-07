# CreateCardPaymentRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agreement_id** | **string** | The unique ID GOV.UK Pay automatically associated with a recurring payments agreement. Including &#x60;agreement_id&#x60; in your request tells the API to take this payment using the card details that are associated with this agreement. &#x60;agreement_id&#x60; must match an active agreement ID. You must set &#x60;authorisation_mode&#x60; to &#x60;agreement&#x60; for the API to accept &#x60;agreement_id&#x60;. | [optional] 
**amount** | **int** | Sets the amount the user will pay, in pence. | 
**authorisation_mode** | **string** | Sets how you intend to authorise the payment. Defaults to &#x60;web&#x60;. Payments created with &#x60;web&#x60; mode follow the [standard GOV.UK Pay payment journey](https://docs.payments.service.gov.uk/payment_flow/). Paying users visit the &#x60;next_url&#x60; in the response to complete their payment. Payments created with &#x60;agreement&#x60; mode are authorised with an agreement for recurring payments. If you create an &#x60;agreement&#x60; payment, you must also send an active &#x60;agreement_id&#x60;. You must not send &#x60;return_url&#x60;, &#x60;email&#x60;, or &#x60;prefilled_cardholder_details&#x60; or your request will fail. Payments created with &#x60;moto_api&#x60; mode return an &#x60;auth_url_post&#x60; object and a &#x60;one_time_token&#x60;. You can use &#x60;auth_url_post&#x60; and &#x60;one_time_token&#x60; to send the paying user’s card details through the API and complete the payment. If you create a &#x60;moto_api&#x60; payment, do not send a &#x60;return_url&#x60; in your request. | [optional] 
**delayed_capture** | **bool** | You can use this parameter to [delay taking a payment from the paying user’s bank account](https://docs.payments.service.gov.uk/delayed_capture/#delay-taking-a-payment). For example, you might want to do your own anti-fraud checks on payments, or check that users are eligible for your service. Defaults to &#x60;false&#x60;. | [optional] 
**description** | **string** | A human-readable description of the payment you’re creating. Paying users see this description on the payment pages. Service staff see the description in the GOV.UK Pay admin tool | 
**email** | **string** | email | [optional] 
**language** | **string** | [Sets the language of the user’s payment page](https://docs.payments.service.gov.uk/optional_features/welsh_language) with an ISO-6391 Alpha-2 code of a supported language. | [optional] 
**metadata** | [**\Swagger\Client\Model\ExternalMetadata**](ExternalMetadata.md) |  | [optional] 
**moto** | **bool** | You can use this parameter to [designate a payment as a Mail Order / Telephone Order (MOTO) payment](https://docs.payments.service.gov.uk/moto_payments). | [optional] 
**prefilled_cardholder_details** | [**\Swagger\Client\Model\PrefilledCardholderDetails**](PrefilledCardholderDetails.md) |  | [optional] 
**reference** | **string** | Associate a reference with this payment. &#x60;reference&#x60; is not unique - multiple payments can have identical &#x60;reference&#x60; values. | 
**return_url** | **string** | The URL [the paying user is directed to after their payment journey on GOV.UK Pay ends](https://docs.payments.service.gov.uk/making_payments/#choose-the-return-url-and-match-your-users-to-payments). | 
**set_up_agreement** | **string** | Use this parameter to set up an existing agreement for recurring payments. The &#x60;set_up_agreement&#x60; value you send must be a valid &#x60;agreement_id&#x60;. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

