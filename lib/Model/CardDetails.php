<?php
/**
 * CardDetails
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
 * CardDetails Class Doc Comment
 *
 * @category Class
 * @description A structure representing the payment card
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CardDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CardDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'billing_address' => '\Swagger\Client\Model\Address',
        'card_brand' => 'string',
        'card_type' => 'string',
        'cardholder_name' => 'string',
        'expiry_date' => 'string',
        'first_digits_card_number' => 'string',
        'last_digits_card_number' => 'string',
        'wallet_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'billing_address' => null,
        'card_brand' => null,
        'card_type' => null,
        'cardholder_name' => null,
        'expiry_date' => null,
        'first_digits_card_number' => null,
        'last_digits_card_number' => null,
        'wallet_type' => null
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
        'billing_address' => 'billing_address',
        'card_brand' => 'card_brand',
        'card_type' => 'card_type',
        'cardholder_name' => 'cardholder_name',
        'expiry_date' => 'expiry_date',
        'first_digits_card_number' => 'first_digits_card_number',
        'last_digits_card_number' => 'last_digits_card_number',
        'wallet_type' => 'wallet_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'billing_address' => 'setBillingAddress',
        'card_brand' => 'setCardBrand',
        'card_type' => 'setCardType',
        'cardholder_name' => 'setCardholderName',
        'expiry_date' => 'setExpiryDate',
        'first_digits_card_number' => 'setFirstDigitsCardNumber',
        'last_digits_card_number' => 'setLastDigitsCardNumber',
        'wallet_type' => 'setWalletType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'billing_address' => 'getBillingAddress',
        'card_brand' => 'getCardBrand',
        'card_type' => 'getCardType',
        'cardholder_name' => 'getCardholderName',
        'expiry_date' => 'getExpiryDate',
        'first_digits_card_number' => 'getFirstDigitsCardNumber',
        'last_digits_card_number' => 'getLastDigitsCardNumber',
        'wallet_type' => 'getWalletType'
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

    const CARD_TYPE_DEBIT = 'debit';
    const CARD_TYPE_CREDIT = 'credit';
    const CARD_TYPE_NULL = 'null';
    const WALLET_TYPE_APPLE_PAY = 'Apple Pay';
    const WALLET_TYPE_GOOGLE_PAY = 'Google Pay';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCardTypeAllowableValues()
    {
        return [
            self::CARD_TYPE_DEBIT,
            self::CARD_TYPE_CREDIT,
            self::CARD_TYPE_NULL,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getWalletTypeAllowableValues()
    {
        return [
            self::WALLET_TYPE_APPLE_PAY,
            self::WALLET_TYPE_GOOGLE_PAY,
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
        $this->container['billing_address'] = isset($data['billing_address']) ? $data['billing_address'] : null;
        $this->container['card_brand'] = isset($data['card_brand']) ? $data['card_brand'] : null;
        $this->container['card_type'] = isset($data['card_type']) ? $data['card_type'] : null;
        $this->container['cardholder_name'] = isset($data['cardholder_name']) ? $data['cardholder_name'] : null;
        $this->container['expiry_date'] = isset($data['expiry_date']) ? $data['expiry_date'] : null;
        $this->container['first_digits_card_number'] = isset($data['first_digits_card_number']) ? $data['first_digits_card_number'] : null;
        $this->container['last_digits_card_number'] = isset($data['last_digits_card_number']) ? $data['last_digits_card_number'] : null;
        $this->container['wallet_type'] = isset($data['wallet_type']) ? $data['wallet_type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCardTypeAllowableValues();
        if (!is_null($this->container['card_type']) && !in_array($this->container['card_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'card_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getWalletTypeAllowableValues();
        if (!is_null($this->container['wallet_type']) && !in_array($this->container['wallet_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'wallet_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets billing_address
     *
     * @return \Swagger\Client\Model\Address
     */
    public function getBillingAddress()
    {
        return $this->container['billing_address'];
    }

    /**
     * Sets billing_address
     *
     * @param \Swagger\Client\Model\Address $billing_address billing_address
     *
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->container['billing_address'] = $billing_address;

        return $this;
    }

    /**
     * Gets card_brand
     *
     * @return string
     */
    public function getCardBrand()
    {
        return $this->container['card_brand'];
    }

    /**
     * Sets card_brand
     *
     * @param string $card_brand The brand of card the user paid with.
     *
     * @return $this
     */
    public function setCardBrand($card_brand)
    {
        $this->container['card_brand'] = $card_brand;

        return $this;
    }

    /**
     * Gets card_type
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->container['card_type'];
    }

    /**
     * Sets card_type
     *
     * @param string $card_type The type of card the user paid with.`null` means your user paid with Google Pay or we did not recognise which type of card they paid with.
     *
     * @return $this
     */
    public function setCardType($card_type)
    {
        $allowedValues = $this->getCardTypeAllowableValues();
        if (!is_null($card_type) && !in_array($card_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'card_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['card_type'] = $card_type;

        return $this;
    }

    /**
     * Gets cardholder_name
     *
     * @return string
     */
    public function getCardholderName()
    {
        return $this->container['cardholder_name'];
    }

    /**
     * Sets cardholder_name
     *
     * @param string $cardholder_name cardholder_name
     *
     * @return $this
     */
    public function setCardholderName($cardholder_name)
    {
        $this->container['cardholder_name'] = $cardholder_name;

        return $this;
    }

    /**
     * Gets expiry_date
     *
     * @return string
     */
    public function getExpiryDate()
    {
        return $this->container['expiry_date'];
    }

    /**
     * Sets expiry_date
     *
     * @param string $expiry_date The expiry date of the card the user paid with in `MM/YY` format.
     *
     * @return $this
     */
    public function setExpiryDate($expiry_date)
    {
        $this->container['expiry_date'] = $expiry_date;

        return $this;
    }

    /**
     * Gets first_digits_card_number
     *
     * @return string
     */
    public function getFirstDigitsCardNumber()
    {
        return $this->container['first_digits_card_number'];
    }

    /**
     * Sets first_digits_card_number
     *
     * @param string $first_digits_card_number first_digits_card_number
     *
     * @return $this
     */
    public function setFirstDigitsCardNumber($first_digits_card_number)
    {
        $this->container['first_digits_card_number'] = $first_digits_card_number;

        return $this;
    }

    /**
     * Gets last_digits_card_number
     *
     * @return string
     */
    public function getLastDigitsCardNumber()
    {
        return $this->container['last_digits_card_number'];
    }

    /**
     * Sets last_digits_card_number
     *
     * @param string $last_digits_card_number last_digits_card_number
     *
     * @return $this
     */
    public function setLastDigitsCardNumber($last_digits_card_number)
    {
        $this->container['last_digits_card_number'] = $last_digits_card_number;

        return $this;
    }

    /**
     * Gets wallet_type
     *
     * @return string
     */
    public function getWalletType()
    {
        return $this->container['wallet_type'];
    }

    /**
     * Sets wallet_type
     *
     * @param string $wallet_type The digital wallet type that the user paid with
     *
     * @return $this
     */
    public function setWalletType($wallet_type)
    {
        $allowedValues = $this->getWalletTypeAllowableValues();
        if (!is_null($wallet_type) && !in_array($wallet_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'wallet_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['wallet_type'] = $wallet_type;

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
