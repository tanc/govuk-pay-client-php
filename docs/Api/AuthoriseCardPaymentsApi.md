# Swagger\Client\AuthoriseCardPaymentsApi

All URIs are relative to *https://publicapi.payments.service.gov.uk*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authoriseAMOTOPayment**](AuthoriseCardPaymentsApi.md#authoriseamotopayment) | **POST** /v1/auth | Send card details to authorise a MOTO payment

# **authoriseAMOTOPayment**
> authoriseAMOTOPayment($body)

Send card details to authorise a MOTO payment

You can use this endpoint to [authorise payments](https://docs.payments.service.gov.uk/moto_payments/moto_send_card_details_api/) you have created with `authorisation_mode` set to `moto_api`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthoriseCardPaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\AuthorisationRequest(); // \Swagger\Client\Model\AuthorisationRequest | 

try {
    $apiInstance->authoriseAMOTOPayment($body);
} catch (Exception $e) {
    echo 'Exception when calling AuthoriseCardPaymentsApi->authoriseAMOTOPayment: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\AuthorisationRequest**](../Model/AuthorisationRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

