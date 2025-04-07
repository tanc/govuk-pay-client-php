# DisputeDetailForSearch

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\Swagger\Client\Model\DisputeLinksForSearch**](DisputeLinksForSearch.md) |  | [optional] 
**amount** | **int** | The disputed amount in pence. | [optional] 
**created_date** | **string** | The date and time the user&#x27;s bank told GOV.UK Pay about this dispute. | [optional] 
**dispute_id** | **string** | The unique ID GOV.UK Pay automatically associated with this dispute when the paying user disputed the payment. | [optional] 
**evidence_due_date** | **string** | The deadline for submitting your supporting evidence. This value uses Coordinated Universal Time (UTC) and ISO 8601 format | [optional] 
**fee** | **int** | The payment service provider’s dispute fee, in pence. | [optional] 
**net_amount** | **int** | The amount, in pence, your payment service provider will take for a lost dispute. &#x27;net_amount&#x27; is deducted from your payout after you lose the dispute. For example, a &#x27;net_amount&#x27; of &#x27;-1500&#x27; means your PSP will take £15.00 from your next payout into your bank account. &#x27;net_amount&#x27; is always a negative value. &#x27;net_amount&#x27; only appears if you lose the dispute. | [optional] 
**payment_id** | **string** | The unique ID GOV.UK Pay automatically associated with this payment when you created it. | [optional] 
**reason** | **string** | The reason the paying user gave for disputing this payment. Possible values are: &#x27;credit_not_processed&#x27;, &#x27;duplicate&#x27;, &#x27;fraudulent&#x27;, &#x27;general&#x27;, &#x27;product_not_received&#x27;, &#x27;product_unacceptable&#x27;, &#x27;unrecognised&#x27;, &#x27;subscription_cancelled&#x27;, &gt;&#x27;other&#x27; | [optional] 
**settlement_summary** | [**\Swagger\Client\Model\SettlementSummary**](SettlementSummary.md) |  | [optional] 
**status** | **string** | The current status of the dispute. Possible values are: &#x27;needs_response&#x27;, &#x27;won&#x27;, &#x27;lost&#x27;, &#x27;under_review&#x27; | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

