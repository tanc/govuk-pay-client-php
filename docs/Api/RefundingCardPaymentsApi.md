# Swagger\Client\RefundingCardPaymentsApi

All URIs are relative to *https://publicapi.payments.service.gov.uk*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAPaymentRefund**](RefundingCardPaymentsApi.md#getapaymentrefund) | **GET** /v1/payments/{paymentId}/refunds/{refundId} | Check the status of a refund
[**getAllRefundsForAPayment**](RefundingCardPaymentsApi.md#getallrefundsforapayment) | **GET** /v1/payments/{paymentId}/refunds | Get information about a payment’s refunds
[**searchRefunds**](RefundingCardPaymentsApi.md#searchrefunds) | **GET** /v1/refunds | Search refunds
[**submitARefundForAPayment**](RefundingCardPaymentsApi.md#submitarefundforapayment) | **POST** /v1/payments/{paymentId}/refunds | Refund a payment

# **getAPaymentRefund**
> \Swagger\Client\Model\Refund getAPaymentRefund($payment_id, $refund_id)

Check the status of a refund

You can use this endpoint to [get details about an individual refund](https://docs.payments.service.gov.uk/refunding_payments/#checking-the-status-of-a-refund).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\RefundingCardPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = "payment_id_example"; // string | The unique `payment_id` of the payment you want to view a refund of.
$refund_id = "refund_id_example"; // string | The unique `refund_id` of the refund you want to view. If one payment has multiple refunds, each refund has a different `refund_id`.

try {
    $result = $apiInstance->getAPaymentRefund($payment_id, $refund_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundingCardPaymentsApi->getAPaymentRefund: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**| The unique &#x60;payment_id&#x60; of the payment you want to view a refund of. |
 **refund_id** | **string**| The unique &#x60;refund_id&#x60; of the refund you want to view. If one payment has multiple refunds, each refund has a different &#x60;refund_id&#x60;. |

### Return type

[**\Swagger\Client\Model\Refund**](../Model/Refund.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllRefundsForAPayment**
> \Swagger\Client\Model\RefundForSearchResult getAllRefundsForAPayment($payment_id)

Get information about a payment’s refunds

You can use this endpoint to [get a list of refunds for a payment](https://docs.payments.service.gov.uk/refunding_payments/#get-all-refunds-for-a-single-payment).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\RefundingCardPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = "payment_id_example"; // string | The unique `payment_id` of the payment you want a list of refunds for.

try {
    $result = $apiInstance->getAllRefundsForAPayment($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundingCardPaymentsApi->getAllRefundsForAPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**| The unique &#x60;payment_id&#x60; of the payment you want a list of refunds for. |

### Return type

[**\Swagger\Client\Model\RefundForSearchResult**](../Model/RefundForSearchResult.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchRefunds**
> \Swagger\Client\Model\RefundSearchResults searchRefunds($from_date, $to_date, $from_settled_date, $to_settled_date, $page, $display_size)

Search refunds

You can use this endpoint to [search refunds you’ve previously created](https://docs.payments.service.gov.uk/refunding_payments/#searching-refunds). The refunds are sorted by date, with the most recently created refunds appearing first.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\RefundingCardPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from_date = "from_date_example"; // string | Returns refunds created on or after the `from_date`. Date and time must use Coordinated Universal Time (UTC) and ISO 8601 format to second-level accuracy - `YYYY-MM-DDThh:mm:ssZ`.
$to_date = "to_date_example"; // string | Returns refunds created before the `to_date`. Date and time must use Coordinated Universal Time (UTC) and ISO 8601 format to second-level accuracy - `YYYY-MM-DDThh:mm:ssZ`.
$from_settled_date = "from_settled_date_example"; // string | Returns refunds settled on or after the `from_settled_date` value. You can only use `from_settled_date` if your payment service provider is Stripe. Date must use ISO 8601 format to date-level accuracy - `YYYY-MM-DD`. Refunds are settled when Stripe takes the refund from your account balance.
$to_settled_date = "to_settled_date_example"; // string | Returns refunds settled before the `to_settled_date` value. You can only use `to_settled_date` if your payment service provider is Stripe. Date must use ISO 8601 format to date-level accuracy - `YYYY-MM-DD`. Refunds are settled when Stripe takes the refund from your account balance.
$page = "page_example"; // string | Returns a [specific page of results](https://docs.payments.service.gov.uk/api_reference/#pagination). Defaults to `1`.
$display_size = "display_size_example"; // string | The number of refunds returned [per results page](https://docs.payments.service.gov.uk/api_reference/#pagination). Defaults to `500`. Maximum value is `500`.

try {
    $result = $apiInstance->searchRefunds($from_date, $to_date, $from_settled_date, $to_settled_date, $page, $display_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundingCardPaymentsApi->searchRefunds: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from_date** | **string**| Returns refunds created on or after the &#x60;from_date&#x60;. Date and time must use Coordinated Universal Time (UTC) and ISO 8601 format to second-level accuracy - &#x60;YYYY-MM-DDThh:mm:ssZ&#x60;. | [optional]
 **to_date** | **string**| Returns refunds created before the &#x60;to_date&#x60;. Date and time must use Coordinated Universal Time (UTC) and ISO 8601 format to second-level accuracy - &#x60;YYYY-MM-DDThh:mm:ssZ&#x60;. | [optional]
 **from_settled_date** | **string**| Returns refunds settled on or after the &#x60;from_settled_date&#x60; value. You can only use &#x60;from_settled_date&#x60; if your payment service provider is Stripe. Date must use ISO 8601 format to date-level accuracy - &#x60;YYYY-MM-DD&#x60;. Refunds are settled when Stripe takes the refund from your account balance. | [optional]
 **to_settled_date** | **string**| Returns refunds settled before the &#x60;to_settled_date&#x60; value. You can only use &#x60;to_settled_date&#x60; if your payment service provider is Stripe. Date must use ISO 8601 format to date-level accuracy - &#x60;YYYY-MM-DD&#x60;. Refunds are settled when Stripe takes the refund from your account balance. | [optional]
 **page** | **string**| Returns a [specific page of results](https://docs.payments.service.gov.uk/api_reference/#pagination). Defaults to &#x60;1&#x60;. | [optional]
 **display_size** | **string**| The number of refunds returned [per results page](https://docs.payments.service.gov.uk/api_reference/#pagination). Defaults to &#x60;500&#x60;. Maximum value is &#x60;500&#x60;. | [optional]

### Return type

[**\Swagger\Client\Model\RefundSearchResults**](../Model/RefundSearchResults.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **submitARefundForAPayment**
> \Swagger\Client\Model\Refund submitARefundForAPayment($body, $payment_id)

Refund a payment

You can use this endpoint to [fully or partially refund a payment](https://docs.payments.service.gov.uk/refunding_payments).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\RefundingCardPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\PaymentRefundRequest(); // \Swagger\Client\Model\PaymentRefundRequest | requestPayload
$payment_id = "payment_id_example"; // string | The unique `payment_id` of the payment you want to refund.

try {
    $result = $apiInstance->submitARefundForAPayment($body, $payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundingCardPaymentsApi->submitARefundForAPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\PaymentRefundRequest**](../Model/PaymentRefundRequest.md)| requestPayload |
 **payment_id** | **string**| The unique &#x60;payment_id&#x60; of the payment you want to refund. |

### Return type

[**\Swagger\Client\Model\Refund**](../Model/Refund.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

