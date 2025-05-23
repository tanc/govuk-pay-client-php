<?php
/**
 * Agreement
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
 * Agreement Class Doc Comment
 *
 * @category Class
 * @description Contains information about a user&#x27;s agreement for recurring payments. An agreement represents an understanding between you and your paying user that you&#x27;ll use their card to make ongoing payments for a service.
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Agreement implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Agreement';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'agreement_id' => 'string',
        'cancelled_date' => 'string',
        'created_date' => 'string',
        'description' => 'string',
        'payment_instrument' => '\Swagger\Client\Model\PaymentInstrument',
        'reference' => 'string',
        'status' => 'string',
        'user_identifier' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'agreement_id' => null,
        'cancelled_date' => null,
        'created_date' => null,
        'description' => null,
        'payment_instrument' => null,
        'reference' => null,
        'status' => null,
        'user_identifier' => null
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
        'cancelled_date' => 'cancelled_date',
        'created_date' => 'created_date',
        'description' => 'description',
        'payment_instrument' => 'payment_instrument',
        'reference' => 'reference',
        'status' => 'status',
        'user_identifier' => 'user_identifier'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'agreement_id' => 'setAgreementId',
        'cancelled_date' => 'setCancelledDate',
        'created_date' => 'setCreatedDate',
        'description' => 'setDescription',
        'payment_instrument' => 'setPaymentInstrument',
        'reference' => 'setReference',
        'status' => 'setStatus',
        'user_identifier' => 'setUserIdentifier'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'agreement_id' => 'getAgreementId',
        'cancelled_date' => 'getCancelledDate',
        'created_date' => 'getCreatedDate',
        'description' => 'getDescription',
        'payment_instrument' => 'getPaymentInstrument',
        'reference' => 'getReference',
        'status' => 'getStatus',
        'user_identifier' => 'getUserIdentifier'
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

    const STATUS_CREATED = 'created';
    const STATUS_ACTIVE = 'active';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_INACTIVE = 'inactive';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATED,
            self::STATUS_ACTIVE,
            self::STATUS_CANCELLED,
            self::STATUS_INACTIVE,
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
        $this->container['cancelled_date'] = isset($data['cancelled_date']) ? $data['cancelled_date'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['payment_instrument'] = isset($data['payment_instrument']) ? $data['payment_instrument'] : null;
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['user_identifier'] = isset($data['user_identifier']) ? $data['user_identifier'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * @param string $agreement_id The unique ID GOV.UK Pay automatically associated with this agreement when you created it.
     *
     * @return $this
     */
    public function setAgreementId($agreement_id)
    {
        $this->container['agreement_id'] = $agreement_id;

        return $this;
    }

    /**
     * Gets cancelled_date
     *
     * @return string
     */
    public function getCancelledDate()
    {
        return $this->container['cancelled_date'];
    }

    /**
     * Sets cancelled_date
     *
     * @param string $cancelled_date The date and time this agreement was cancelled. This value uses Coordinated Universal Time (UTC) and ISO 8601 format – `YYYY-MM-DDThh:mm:ss.sssZ`.
     *
     * @return $this
     */
    public function setCancelledDate($cancelled_date)
    {
        $this->container['cancelled_date'] = $cancelled_date;

        return $this;
    }

    /**
     * Gets created_date
     *
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     *
     * @param string $created_date The date and time you created this agreement. This value uses Coordinated Universal Time (UTC) and ISO 8601 format – `YYYY-MM-DDThh:mm:ss.sssZ`.
     *
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

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
     * @param string $description The description you sent when creating this agreement.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets payment_instrument
     *
     * @return \Swagger\Client\Model\PaymentInstrument
     */
    public function getPaymentInstrument()
    {
        return $this->container['payment_instrument'];
    }

    /**
     * Sets payment_instrument
     *
     * @param \Swagger\Client\Model\PaymentInstrument $payment_instrument payment_instrument
     *
     * @return $this
     */
    public function setPaymentInstrument($payment_instrument)
    {
        $this->container['payment_instrument'] = $payment_instrument;

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
     * @param string $reference The reference you sent when creating this agreement.
     *
     * @return $this
     */
    public function setReference($reference)
    {
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status The status of this agreement. You can [read more about the meanings of each agreement status.](https://docs.payments.service.gov.uk/recurring_payments/#understanding-agreement-status)
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets user_identifier
     *
     * @return string
     */
    public function getUserIdentifier()
    {
        return $this->container['user_identifier'];
    }

    /**
     * Sets user_identifier
     *
     * @param string $user_identifier The identifier you sent when creating this agreement. `user_identifier` helps you identify users in your records.
     *
     * @return $this
     */
    public function setUserIdentifier($user_identifier)
    {
        $this->container['user_identifier'] = $user_identifier;

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
