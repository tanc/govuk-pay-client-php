# PaymentSearchResults

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**_links** | [**\Swagger\Client\Model\SearchNavigationLinks**](SearchNavigationLinks.md) |  | [optional] 
**count** | **int** | Number of payments on the current page of search results. | [optional] 
**page** | **int** | The [page of results you’re viewing](https://docs.payments.service.gov.uk/api_reference/#pagination). To view other pages, make this request again using the &#x60;page&#x60; parameter. | [optional] 
**results** | [**\Swagger\Client\Model\PaymentDetailForSearch[]**](PaymentDetailForSearch.md) | Contains payments matching your search criteria. | [optional] 
**total** | **int** | Total number of payments matching your search criteria. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

