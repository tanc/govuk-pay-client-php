<?php
/**
 * CreateCardPaymentRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * GOV.UK Pay API
 *
 * The GOV.UK Pay REST API. Read [our documentation](https://docs.payments.service.gov.uk/) for more details.
 *
 * OpenAPI spec version: 1.0.3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.68
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CreateCardPaymentRequest Class Doc Comment
 *
 * @category Class
 * @description The create payment request body
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateCardPaymentRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateCardPaymentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agreement_id' => 'string',
        'amount' => 'int',
        'authorisation_mode' => 'string',
        'delayed_capture' => 'bool',
        'description' => 'string',
        'email' => 'string',
        'language' => 'string',
        'metadata' => '\Swagger\Client\Model\ExternalMetadata',
        'moto' => 'bool',
        'prefilled_cardholder_details' => '\Swagger\Client\Model\PrefilledCardholderDetails',
        'reference' => 'string',
        'return_url' => 'string',
        'set_up_agreement' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agreement_id' => null,
        'amount' => 'int32',
        'authorisation_mode' => null,
        'delayed_capture' => null,
        'description' => null,
        'email' => null,
        'language' => null,
        'metadata' => null,
        'moto' => null,
        'prefilled_cardholder_details' => null,
        'reference' => null,
        'return_url' => null,
        'set_up_agreement' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'agreement_id' => 'agreement_id',
        'amount' => 'amount',
        'authorisation_mode' => 'authorisation_mode',
        'delayed_capture' => 'delayed_capture',
        'description' => 'description',
        'email' => 'email',
        'language' => 'language',
        'metadata' => 'metadata',
        'moto' => 'moto',
        'prefilled_cardholder_details' => 'prefilled_cardholder_details',
        'reference' => 'reference',
        'return_url' => 'return_url',
        'set_up_agreement' => 'set_up_agreement'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreement_id' => 'setAgreementId',
        'amount' => 'setAmount',
        'authorisation_mode' => 'setAuthorisationMode',
        'delayed_capture' => 'setDelayedCapture',
        'description' => 'setDescription',
        'email' => 'setEmail',
        'language' => 'setLanguage',
        'metadata' => 'setMetadata',
        'moto' => 'setMoto',
        'prefilled_cardholder_details' => 'setPrefilledCardholderDetails',
        'reference' => 'setReference',
        'return_url' => 'setReturnUrl',
        'set_up_agreement' => 'setSetUpAgreement'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreement_id' => 'getAgreementId',
        'amount' => 'getAmount',
        'authorisation_mode' => 'getAuthorisationMode',
        'delayed_capture' => 'getDelayedCapture',
        'description' => 'getDescription',
        'email' => 'getEmail',
        'language' => 'getLanguage',
        'metadata' => 'getMetadata',
        'moto' => 'getMoto',
        'prefilled_cardholder_details' => 'getPrefilledCardholderDetails',
        'reference' => 'getReference',
        'return_url' => 'getReturnUrl',
        'set_up_agreement' => 'getSetUpAgreement'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const AUTHORISATION_MODE_WEB = 'web';
    const AUTHORISATION_MODE_AGREEMENT = 'agreement';
    const AUTHORISATION_MODE_MOTO_API = 'moto_api';
    const LANGUAGE_EN = 'en';
    const LANGUAGE_CY = 'cy';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getAuthorisationModeAllowableValues()
    {
        return [
            self::AUTHORISATION_MODE_WEB,
            self::AUTHORISATION_MODE_AGREEMENT,
            self::AUTHORISATION_MODE_MOTO_API,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLanguageAllowableValues()
    {
        return [
            self::LANGUAGE_EN,
            self::LANGUAGE_CY,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['agreement_id'] = isset($data['agreement_id']) ? $data['agreement_id'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['authorisation_mode'] = isset($data['authorisation_mode']) ? $data['authorisation_mode'] : null;
        $this->container['delayed_capture'] = isset($data['delayed_capture']) ? $data['delayed_capture'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['moto'] = isset($data['moto']) ? $data['moto'] : null;
        $this->container['prefilled_cardholder_details'] = isset($data['prefilled_cardholder_details']) ? $data['prefilled_cardholder_details'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['return_url'] = isset($data['return_url']) ? $data['return_url'] : null;
        $this->container['set_up_agreement'] = isset($data['set_up_agreement']) ? $data['set_up_agreement'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        $allowedValues = $this->getAuthorisationModeAllowableValues();
        if (!is_null($this->container['authorisation_mode']) && !in_array($this->container['authorisation_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'authorisation_mode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($this->container['language']) && !in_array($this->container['language'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'language', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['reference'] === null) {
            $invalidProperties[] = "'reference' can't be null";
        }
        if ($this->container['return_url'] === null) {
            $invalidProperties[] = "'return_url' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets agreement_id
     *
     * @return string
     */
    public function getAgreementId()
    {
        return $this->container['agreement_id'];
    }

    /**
     * Sets agreement_id
     *
     * @param string $agreement_id The unique ID GOV.UK Pay automatically associated with a recurring payments agreement. Including `agreement_id` in your request tells the API to take this payment using the card details that are associated with this agreement. `agreement_id` must match an active agreement ID. You must set `authorisation_mode` to `agreement` for the API to accept `agreement_id`.
     *
     * @return $this
     */
    public function setAgreementId($agreement_id)
    {
        $this->container['agreement_id'] = $agreement_id;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount Sets the amount the user will pay, in pence.
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets authorisation_mode
     *
     * @return string
     */
    public function getAuthorisationMode()
    {
        return $this->container['authorisation_mode'];
    }

    /**
     * Sets authorisation_mode
     *
     * @param string $authorisation_mode Sets how you intend to authorise the payment. Defaults to `web`. Payments created with `web` mode follow the [standard GOV.UK Pay payment journey](https://docs.payments.service.gov.uk/payment_flow/). Paying users visit the `next_url` in the response to complete their payment. Payments created with `agreement` mode are authorised with an agreement for recurring payments. If you create an `agreement` payment, you must also send an active `agreement_id`. You must not send `return_url`, `email`, or `prefilled_cardholder_details` or your request will fail. Payments created with `moto_api` mode return an `auth_url_post` object and a `one_time_token`. You can use `auth_url_post` and `one_time_token` to send the paying user’s card details through the API and complete the payment. If you create a `moto_api` payment, do not send a `return_url` in your request.
     *
     * @return $this
     */
    public function setAuthorisationMode($authorisation_mode)
    {
        $allowedValues = $this->getAuthorisationModeAllowableValues();
        if (!is_null($authorisation_mode) && !in_array($authorisation_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'authorisation_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['authorisation_mode'] = $authorisation_mode;

        return $this;
    }

    /**
     * Gets delayed_capture
     *
     * @return bool
     */
    public function getDelayedCapture()
    {
        return $this->container['delayed_capture'];
    }

    /**
     * Sets delayed_capture
     *
     * @param bool $delayed_capture You can use this parameter to [delay taking a payment from the paying user’s bank account](https://docs.payments.service.gov.uk/delayed_capture/#delay-taking-a-payment). For example, you might want to do your own anti-fraud checks on payments, or check that users are eligible for your service. Defaults to `false`.
     *
     * @return $this
     */
    public function setDelayedCapture($delayed_capture)
    {
        $this->container['delayed_capture'] = $delayed_capture;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description A human-readable description of the payment you’re creating. Paying users see this description on the payment pages. Service staff see the description in the GOV.UK Pay admin tool
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language [Sets the language of the user’s payment page](https://docs.payments.service.gov.uk/optional_features/welsh_language) with an ISO-6391 Alpha-2 code of a supported language.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $allowedValues = $this->getLanguageAllowableValues();
        if (!is_null($language) && !in_array($language, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'language', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return \Swagger\Client\Model\ExternalMetadata
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param \Swagger\Client\Model\ExternalMetadata $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets moto
     *
     * @return bool
     */
    public function getMoto()
    {
        return $this->container['moto'];
    }

    /**
     * Sets moto
     *
     * @param bool $moto You can use this parameter to [designate a payment as a Mail Order / Telephone Order (MOTO) payment](https://docs.payments.service.gov.uk/moto_payments).
     *
     * @return $this
     */
    public function setMoto($moto)
    {
        $this->container['moto'] = $moto;

        return $this;
    }

    /**
     * Gets prefilled_cardholder_details
     *
     * @return \Swagger\Client\Model\PrefilledCardholderDetails
     */
    public function getPrefilledCardholderDetails()
    {
        return $this->container['prefilled_cardholder_details'];
    }

    /**
     * Sets prefilled_cardholder_details
     *
     * @param \Swagger\Client\Model\PrefilledCardholderDetails $prefilled_cardholder_details prefilled_cardholder_details
     *
     * @return $this
     */
    public function setPrefilledCardholderDetails($prefilled_cardholder_details)
    {
        $this->container['prefilled_cardholder_details'] = $prefilled_cardholder_details;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference Associate a reference with this payment. `reference` is not unique - multiple payments can have identical `reference` values.
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets return_url
     *
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->container['return_url'];
    }

    /**
     * Sets return_url
     *
     * @param string $return_url The URL [the paying user is directed to after their payment journey on GOV.UK Pay ends](https://docs.payments.service.gov.uk/making_payments/#choose-the-return-url-and-match-your-users-to-payments).
     *
     * @return $this
     */
    public function setReturnUrl($return_url)
    {
        $this->container['return_url'] = $return_url;

        return $this;
    }

    /**
     * Gets set_up_agreement
     *
     * @return string
     */
    public function getSetUpAgreement()
    {
        return $this->container['set_up_agreement'];
    }

    /**
     * Sets set_up_agreement
     *
     * @param string $set_up_agreement Use this parameter to set up an existing agreement for recurring payments. The `set_up_agreement` value you send must be a valid `agreement_id`.
     *
     * @return $this
     */
    public function setSetUpAgreement($set_up_agreement)
    {
        $this->container['set_up_agreement'] = $set_up_agreement;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
