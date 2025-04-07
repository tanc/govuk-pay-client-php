# Swagger\Client\DisputesApi

All URIs are relative to *https://publicapi.payments.service.gov.uk*

Method | HTTP request | Description
------------- | ------------- | -------------
[**searchDisputes**](DisputesApi.md#searchdisputes) | **GET** /v1/disputes | Search disputes

# **searchDisputes**
> \Swagger\Client\Model\DisputesSearchResults searchDisputes($from_date, $to_date, $from_settled_date, $to_settled_date, $status, $page, $display_size)

Search disputes

You can use this endpoint to search disputes. A dispute is when [a paying user challenges a completed payment through their bank](https://docs.payments.service.gov.uk/disputes/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DisputesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = "from_date_example"; // string | Returns disputes raised on or after the `from_date`. Date and time must be coordinated Universal Time (UTC) and ISO 8601 format to second-level accuracy - `YYYY-MM-DDThh:mm:ssZ`.
$to_date = "to_date_example"; // string | Returns disputes raised before the `to_date`. Date and time must be coordinated Universal Time (UTC) and ISO 8601 format to second-level accuracy - `YYYY-MM-DDThh:mm:ssZ`.
$from_settled_date = "from_settled_date_example"; // string | Returns disputes settled on or after the `from_settled_date`. Date must be in ISO 8601 format to date-level accuracy - `YYYY-MM-DD`. Disputes are settled when your payment service provider takes the disputed amount from a payout to your bank account.
$to_settled_date = "to_settled_date_example"; // string | Returns disputes settled before the `to_settled_date`. Date must be in ISO 8601 format to date-level accuracy - `YYYY-MM-DD`. Disputes are settled when your payment service provider takes the disputed amount from a payout to your bank account.
$status = "status_example"; // string | Returns disputes with a matching `status`. `status` reflects what stage of the dispute process a dispute is at. You can [read more about the meanings of the different status values](https://docs.payments.service.gov.uk/disputes/#dispute-status)
$page = "page_example"; // string | Returns a specific page of results. Defaults to `1`.
$display_size = "display_size_example"; // string | The number of disputes returned per results page. Defaults to `500`. Maximum value is `500`.

try {
    $result = $apiInstance->searchDisputes($from_date, $to_date, $from_settled_date, $to_settled_date, $status, $page, $display_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DisputesApi->searchDisputes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **string**| Returns disputes raised on or after the &#x60;from_date&#x60;. Date and time must be coordinated Universal Time (UTC) and ISO 8601 format to second-level accuracy - &#x60;YYYY-MM-DDThh:mm:ssZ&#x60;. | [optional]
 **to_date** | **string**| Returns disputes raised before the &#x60;to_date&#x60;. Date and time must be coordinated Universal Time (UTC) and ISO 8601 format to second-level accuracy - &#x60;YYYY-MM-DDThh:mm:ssZ&#x60;. | [optional]
 **from_settled_date** | **string**| Returns disputes settled on or after the &#x60;from_settled_date&#x60;. Date must be in ISO 8601 format to date-level accuracy - &#x60;YYYY-MM-DD&#x60;. Disputes are settled when your payment service provider takes the disputed amount from a payout to your bank account. | [optional]
 **to_settled_date** | **string**| Returns disputes settled before the &#x60;to_settled_date&#x60;. Date must be in ISO 8601 format to date-level accuracy - &#x60;YYYY-MM-DD&#x60;. Disputes are settled when your payment service provider takes the disputed amount from a payout to your bank account. | [optional]
 **status** | **string**| Returns disputes with a matching &#x60;status&#x60;. &#x60;status&#x60; reflects what stage of the dispute process a dispute is at. You can [read more about the meanings of the different status values](https://docs.payments.service.gov.uk/disputes/#dispute-status) | [optional]
 **page** | **string**| Returns a specific page of results. Defaults to &#x60;1&#x60;. | [optional]
 **display_size** | **string**| The number of disputes returned per results page. Defaults to &#x60;500&#x60;. Maximum value is &#x60;500&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\DisputesSearchResults**](../Model/DisputesSearchResults.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

