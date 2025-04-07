# CreateAgreementRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**description** | **string** | A human-readable description of the purpose of the agreement for recurring payments. We’ll show the description to your user when they make their first payment to activate this agreement. Limited to 255 characters. | [optional] 
**reference** | **string** | Associate a reference with this agreement to help you identify it. Limited to 255 characters. | [optional] 
**user_identifier** | **string** | Associate an identifier with the user who will enter into this agreement with your service.user_identifier is not unique – multiple agreements can have identical user_identifier values.You should not include personal data in user_identifier. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

