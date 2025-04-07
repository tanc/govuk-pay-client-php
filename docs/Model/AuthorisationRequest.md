# AuthorisationRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**card_number** | **string** | The full card number from the paying user&#x27;s card. | 
**cardholder_name** | **string** | The name on the paying user&#x27;s card. | 
**cvc** | **string** | The card verification code (CVC) or card verification value (CVV) on the paying user&#x27;s card. | 
**expiry_date** | **string** | The expiry date of the paying user&#x27;s card. This value must be in &#x60;MM/YY&#x60; format. | 
**one_time_token** | **string** | This single use token authorises your request and matches it to a payment. GOV.UK Pay generated the &#x60;one_time_token&#x60; when the payment was created. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

