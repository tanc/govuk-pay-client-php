# Swagger\Client\CardPaymentsApi

All URIs are relative to *https://publicapi.payments.service.gov.uk*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelAPayment**](CardPaymentsApi.md#cancelapayment) | **POST** /v1/payments/{paymentId}/cancel | Cancel payment
[**captureAPayment**](CardPaymentsApi.md#captureapayment) | **POST** /v1/payments/{paymentId}/capture | Take a delayed payment
[**createAPayment**](CardPaymentsApi.md#createapayment) | **POST** /v1/payments | Create a payment
[**getAPayment**](CardPaymentsApi.md#getapayment) | **GET** /v1/payments/{paymentId} | Get information about a single payment
[**getEventsForAPayment**](CardPaymentsApi.md#geteventsforapayment) | **GET** /v1/payments/{paymentId}/events | Get a payment&#x27;s events
[**searchPayments**](CardPaymentsApi.md#searchpayments) | **GET** /v1/payments | Search payments

# **cancelAPayment**
> cancelAPayment($payment_id)

Cancel payment

You can use this endpoint [to cancel an unfinished payment](https://docs.payments.service.gov.uk/making_payments/#cancel-a-payment-that-s-in-progress).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CardPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = "payment_id_example"; // string | The `payment_id` of the payment you’re cancelling.

try {
    $apiInstance->cancelAPayment($payment_id);
} catch (Exception $e) {
    echo 'Exception when calling CardPaymentsApi->cancelAPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**| The &#x60;payment_id&#x60; of the payment you’re cancelling. |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **captureAPayment**
> captureAPayment($payment_id)

Take a delayed payment

You can use this endpoint to [take (‘capture’) a delayed payment from the paying user’s bank account](https://docs.payments.service.gov.uk/delayed_capture/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CardPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = "payment_id_example"; // string | The `payment_id` of the payment you’re capturing.

try {
    $apiInstance->captureAPayment($payment_id);
} catch (Exception $e) {
    echo 'Exception when calling CardPaymentsApi->captureAPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**| The &#x60;payment_id&#x60; of the payment you’re capturing. |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAPayment**
> \Swagger\Client\Model\CreatePaymentResult createAPayment($body, $idempotency_key)

Create a payment

You can use this endpoint to [create a new payment](https://docs.payments.service.gov.uk/making_payments/).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CardPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateCardPaymentRequest(); // \Swagger\Client\Model\CreateCardPaymentRequest | requestPayload
$idempotency_key = "idempotency_key_example"; // string | 

try {
    $result = $apiInstance->createAPayment($body, $idempotency_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardPaymentsApi->createAPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateCardPaymentRequest**](../Model/CreateCardPaymentRequest.md)| requestPayload |
 **idempotency_key** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\CreatePaymentResult**](../Model/CreatePaymentResult.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAPayment**
> \Swagger\Client\Model\PaymentWithAllLinks getAPayment($payment_id)

Get information about a single payment

You can use this endpoint to [get details about a single payment you’ve previously created](https://docs.payments.service.gov.uk/reporting/#get-information-about-a-single-payment).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CardPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = "payment_id_example"; // string | Returns the payment with the matching `payment_id`.

try {
    $result = $apiInstance->getAPayment($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardPaymentsApi->getAPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**| Returns the payment with the matching &#x60;payment_id&#x60;. |

### Return type

[**\Swagger\Client\Model\PaymentWithAllLinks**](../Model/PaymentWithAllLinks.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getEventsForAPayment**
> \Swagger\Client\Model\PaymentEvents getEventsForAPayment($payment_id)

Get a payment's events

You can use this endpoint to [get a list of a payment’s events](https://docs.payments.service.gov.uk/reporting/#get-a-payment-s-events). A payment event is when a payment’s `state` changes, such as when the payment is created, or when the paying user submits their details.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CardPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_id = "payment_id_example"; // string | Payment identifier

try {
    $result = $apiInstance->getEventsForAPayment($payment_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardPaymentsApi->getEventsForAPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **payment_id** | **string**| Payment identifier |

### Return type

[**\Swagger\Client\Model\PaymentEvents**](../Model/PaymentEvents.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchPayments**
> \Swagger\Client\Model\PaymentSearchResults searchPayments($reference, $email, $state, $card_brand, $from_date, $to_date, $page, $display_size, $cardholder_name, $first_digits_card_number, $last_digits_card_number, $from_settled_date, $to_settled_date, $agreement_id)

Search payments

You can use this endpoint to [search for payments you’ve previously created](https://docs.payments.service.gov.uk/reporting/#search-payments/). Payments are sorted by date, with the most recently-created payment appearing first.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CardPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = "reference_example"; // string | Returns payments with `reference` values exactly matching your specified value.
$email = "email_example"; // string | Returns payments with matching `email` values. You can send full or partial email addresses. `email` is the paying user’s email address.
$state = "state_example"; // string | Returns payments in a matching `state`. `state` reflects where a payment is in the [payment status lifecycle](https://docs.payments.service.gov.uk/api_reference/#payment-status-lifecycle).
$card_brand = "card_brand_example"; // string | Returns payments paid with a particular card brand.
$from_date = "from_date_example"; // string | Returns payments created on or after the `from_date`. Date and time must be coordinated Universal Time (UTC) and ISO 8601 format to second-level accuracy - `YYYY-MM-DDThh:mm:ssZ`.
$to_date = "to_date_example"; // string | Returns payments created before the `to_date`. Date and time must be coordinated Universal Time (UTC) and ISO 8601 format to second-level accuracy - `YYYY-MM-DDThh:mm:ssZ`.
$page = "page_example"; // string | Returns a [specific page of results](https://docs.payments.service.gov.uk/api_reference/#pagination). Defaults to `1`.
$display_size = "display_size_example"; // string | The number of payments returned [per results page](https://docs.payments.service.gov.uk/api_reference/#pagination). Defaults to `500`. Maximum value is `500`.
$cardholder_name = "cardholder_name_example"; // string | Returns payments paid with cards under this cardholder name.
$first_digits_card_number = "first_digits_card_number_example"; // string | Returns payments paid by cards beginning with the `first_digits_card_number` value. `first_digits_card_number` value must be 6 digits.
$last_digits_card_number = "last_digits_card_number_example"; // string | Returns payments paid by cards ending with the `last_digits_card_number` value. `last_digits_card_number` value must be 4 digits.
$from_settled_date = "from_settled_date_example"; // string | Returns payments settled on or after the `from_settled_date` value. You can only search by settled date if your payment service provider is Stripe. Date must be in ISO 8601 format to date-level accuracy - `YYYY-MM-DD`. Payments are settled when your payment service provider sends funds to your bank account.
$to_settled_date = "to_settled_date_example"; // string | Returns payments settled before the `to_settled_date` value. You can only search by settled date if your payment service provider is Stripe. Date must be in ISO 8601 format to date-level accuracy - `YYYY-MM-DD`. Payments are settled when your payment service provider sends funds to your bank account.
$agreement_id = "agreement_id_example"; // string | Returns payments that were authorised using the agreement with this `agreement_id`. Must be an exact match.

try {
    $result = $apiInstance->searchPayments($reference, $email, $state, $card_brand, $from_date, $to_date, $page, $display_size, $cardholder_name, $first_digits_card_number, $last_digits_card_number, $from_settled_date, $to_settled_date, $agreement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CardPaymentsApi->searchPayments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| Returns payments with &#x60;reference&#x60; values exactly matching your specified value. | [optional]
 **email** | **string**| Returns payments with matching &#x60;email&#x60; values. You can send full or partial email addresses. &#x60;email&#x60; is the paying user’s email address. | [optional]
 **state** | **string**| Returns payments in a matching &#x60;state&#x60;. &#x60;state&#x60; reflects where a payment is in the [payment status lifecycle](https://docs.payments.service.gov.uk/api_reference/#payment-status-lifecycle). | [optional]
 **card_brand** | **string**| Returns payments paid with a particular card brand. | [optional]
 **from_date** | **string**| Returns payments created on or after the &#x60;from_date&#x60;. Date and time must be coordinated Universal Time (UTC) and ISO 8601 format to second-level accuracy - &#x60;YYYY-MM-DDThh:mm:ssZ&#x60;. | [optional]
 **to_date** | **string**| Returns payments created before the &#x60;to_date&#x60;. Date and time must be coordinated Universal Time (UTC) and ISO 8601 format to second-level accuracy - &#x60;YYYY-MM-DDThh:mm:ssZ&#x60;. | [optional]
 **page** | **string**| Returns a [specific page of results](https://docs.payments.service.gov.uk/api_reference/#pagination). Defaults to &#x60;1&#x60;. | [optional]
 **display_size** | **string**| The number of payments returned [per results page](https://docs.payments.service.gov.uk/api_reference/#pagination). Defaults to &#x60;500&#x60;. Maximum value is &#x60;500&#x60;. | [optional]
 **cardholder_name** | **string**| Returns payments paid with cards under this cardholder name. | [optional]
 **first_digits_card_number** | **string**| Returns payments paid by cards beginning with the &#x60;first_digits_card_number&#x60; value. &#x60;first_digits_card_number&#x60; value must be 6 digits. | [optional]
 **last_digits_card_number** | **string**| Returns payments paid by cards ending with the &#x60;last_digits_card_number&#x60; value. &#x60;last_digits_card_number&#x60; value must be 4 digits. | [optional]
 **from_settled_date** | **string**| Returns payments settled on or after the &#x60;from_settled_date&#x60; value. You can only search by settled date if your payment service provider is Stripe. Date must be in ISO 8601 format to date-level accuracy - &#x60;YYYY-MM-DD&#x60;. Payments are settled when your payment service provider sends funds to your bank account. | [optional]
 **to_settled_date** | **string**| Returns payments settled before the &#x60;to_settled_date&#x60; value. You can only search by settled date if your payment service provider is Stripe. Date must be in ISO 8601 format to date-level accuracy - &#x60;YYYY-MM-DD&#x60;. Payments are settled when your payment service provider sends funds to your bank account. | [optional]
 **agreement_id** | **string**| Returns payments that were authorised using the agreement with this &#x60;agreement_id&#x60;. Must be an exact match. | [optional]

### Return type

[**\Swagger\Client\Model\PaymentSearchResults**](../Model/PaymentSearchResults.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

