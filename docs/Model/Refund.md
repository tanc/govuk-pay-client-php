# Refund

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\Swagger\Client\Model\RefundLinksForSearch**](RefundLinksForSearch.md) |  | [optional] 
**amount** | **int** | The amount refunded to the user in pence. | [optional] 
**created_date** | **string** | The date and time you created this refund. This value uses Coordinated Universal Time (UTC) and ISO 8601 format - &#x60;YYYY-MM-DDThh:mm:ss.SSSZ&#x60;. | [optional] 
**payment_id** | **string** | The unique ID GOV.UK Pay automatically associated with this payment when you created it. | [optional] 
**refund_id** | **string** | The unique ID GOV.UK Pay automatically associated with this refund when you created it. | [optional] 
**settlement_summary** | [**\Swagger\Client\Model\RefundSettlementSummary**](RefundSettlementSummary.md) |  | [optional] 
**status** | **string** | The [status of the refund](https://docs.payments.service.gov.uk/refunding_payments/#checking-the-status-of-a-refund-status). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

