# Agreement

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**agreement_id** | **string** | The unique ID GOV.UK Pay automatically associated with this agreement when you created it. | [optional] 
**cancelled_date** | **string** | The date and time this agreement was cancelled. This value uses Coordinated Universal Time (UTC) and ISO 8601 format – &#x60;YYYY-MM-DDThh:mm:ss.sssZ&#x60;. | [optional] 
**created_date** | **string** | The date and time you created this agreement. This value uses Coordinated Universal Time (UTC) and ISO 8601 format – &#x60;YYYY-MM-DDThh:mm:ss.sssZ&#x60;. | [optional] 
**description** | **string** | The description you sent when creating this agreement. | [optional] 
**payment_instrument** | [**\Swagger\Client\Model\PaymentInstrument**](PaymentInstrument.md) |  | [optional] 
**reference** | **string** | The reference you sent when creating this agreement. | [optional] 
**status** | **string** | The status of this agreement. You can [read more about the meanings of each agreement status.](https://docs.payments.service.gov.uk/recurring_payments/#understanding-agreement-status) | [optional] 
**user_identifier** | **string** | The identifier you sent when creating this agreement. &#x60;user_identifier&#x60; helps you identify users in your records. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

