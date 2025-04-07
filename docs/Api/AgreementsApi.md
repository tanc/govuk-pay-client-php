# Swagger\Client\AgreementsApi

All URIs are relative to *https://publicapi.payments.service.gov.uk*

Method | HTTP request | Description
------------- | ------------- | -------------
[**cancelAnAgreement**](AgreementsApi.md#cancelanagreement) | **POST** /v1/agreements/{agreementId}/cancel | Cancel an agreement for recurring payments
[**createAnAgreement**](AgreementsApi.md#createanagreement) | **POST** /v1/agreements | Create an agreement for recurring payments
[**getAnAgreement**](AgreementsApi.md#getanagreement) | **GET** /v1/agreements/{agreementId} | Get information about a single agreement for recurring payments
[**searchAgreements**](AgreementsApi.md#searchagreements) | **GET** /v1/agreements | Search agreements for recurring payments

# **cancelAnAgreement**
> cancelAnAgreement($agreement_id)

Cancel an agreement for recurring payments

You can use this endpoint to cancel a recurring payments agreement in the `active` status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agreement_id = "agreement_id_example"; // string | The `agreement_id` of the agreement you are cancelling

try {
    $apiInstance->cancelAnAgreement($agreement_id);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->cancelAnAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agreement_id** | **string**| The &#x60;agreement_id&#x60; of the agreement you are cancelling |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createAnAgreement**
> \Swagger\Client\Model\Agreement createAnAgreement($body)

Create an agreement for recurring payments

You can use this endpoint to create a new agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateAgreementRequest(); // \Swagger\Client\Model\CreateAgreementRequest | requestPayload

try {
    $result = $apiInstance->createAnAgreement($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->createAnAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateAgreementRequest**](../Model/CreateAgreementRequest.md)| requestPayload |

### Return type

[**\Swagger\Client\Model\Agreement**](../Model/Agreement.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnAgreement**
> \Swagger\Client\Model\Agreement getAnAgreement($agreement_id)

Get information about a single agreement for recurring payments

You can use this endpoint to get information about a single recurring payments agreement.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$agreement_id = "agreement_id_example"; // string | Returns the agreement with the matching `agreement_id`. GOV.UK Pay generated an `agreement_id` when you created the agreement.

try {
    $result = $apiInstance->getAnAgreement($agreement_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->getAnAgreement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agreement_id** | **string**| Returns the agreement with the matching &#x60;agreement_id&#x60;. GOV.UK Pay generated an &#x60;agreement_id&#x60; when you created the agreement. |

### Return type

[**\Swagger\Client\Model\Agreement**](../Model/Agreement.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **searchAgreements**
> \Swagger\Client\Model\AgreementSearchResults searchAgreements($reference, $status, $page, $display_size)

Search agreements for recurring payments

You can use this endpoint to search for recurring payments agreements. The agreements are sorted by date, with the most recently-created agreements appearing first.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AgreementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reference = "reference_example"; // string | Returns agreements with a `reference` that exactly matches the value you sent. This parameter is not case sensitive. A `reference` was associated with the agreement when that agreement was created.
$status = "status_example"; // string | Returns agreements in a matching `status`. `status` reflects where an agreement is in its lifecycle. You can [read more about the meanings of the different agreement status values](https://docs.payments.service.gov.uk/recurring_payments/#understanding-agreement-status).
$page = "page_example"; // string | Returns a specific page of results. Defaults to `1`. You can [read about search pagination](https://docs.payments.service.gov.uk/api_reference/#pagination)
$display_size = "display_size_example"; // string | The number of agreements returned per results page. Defaults to `500`. Maximum value is `500`. You can [read about search pagination](https://docs.payments.service.gov.uk/api_reference/#pagination)

try {
    $result = $apiInstance->searchAgreements($reference, $status, $page, $display_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AgreementsApi->searchAgreements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reference** | **string**| Returns agreements with a &#x60;reference&#x60; that exactly matches the value you sent. This parameter is not case sensitive. A &#x60;reference&#x60; was associated with the agreement when that agreement was created. | [optional]
 **status** | **string**| Returns agreements in a matching &#x60;status&#x60;. &#x60;status&#x60; reflects where an agreement is in its lifecycle. You can [read more about the meanings of the different agreement status values](https://docs.payments.service.gov.uk/recurring_payments/#understanding-agreement-status). | [optional]
 **page** | **string**| Returns a specific page of results. Defaults to &#x60;1&#x60;. You can [read about search pagination](https://docs.payments.service.gov.uk/api_reference/#pagination) | [optional]
 **display_size** | **string**| The number of agreements returned per results page. Defaults to &#x60;500&#x60;. Maximum value is &#x60;500&#x60;. You can [read about search pagination](https://docs.payments.service.gov.uk/api_reference/#pagination) | [optional]

### Return type

[**\Swagger\Client\Model\AgreementSearchResults**](../Model/AgreementSearchResults.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

