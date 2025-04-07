# RefundSearchResults

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\Swagger\Client\Model\SearchNavigationLinks**](SearchNavigationLinks.md) |  | [optional] 
**count** | **int** | Number of refunds on the current page of search results. | [optional] 
**page** | **int** | The [page of results](payments.service.gov.uk/api_reference/#pagination) you’re viewing. To view other pages, make this request again using the &#x60;page&#x60; parameter. | [optional] 
**results** | [**\Swagger\Client\Model\RefundDetailForSearch[]**](RefundDetailForSearch.md) | Contains the refunds matching your search criteria. | [optional] 
**total** | **int** | Number of refunds matching your search criteria. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

