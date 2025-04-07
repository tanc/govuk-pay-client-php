<?php
/**
 * PaymentSettlementSummary
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
 * PaymentSettlementSummary Class Doc Comment
 *
 * @category Class
 * @description A structure representing information about a settlement
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentSettlementSummary implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentSettlementSummary';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'capture_submit_time' => 'string',
        'captured_date' => 'string',
        'settled_date' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'capture_submit_time' => null,
        'captured_date' => null,
        'settled_date' => null
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
        'capture_submit_time' => 'capture_submit_time',
        'captured_date' => 'captured_date',
        'settled_date' => 'settled_date'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'capture_submit_time' => 'setCaptureSubmitTime',
        'captured_date' => 'setCapturedDate',
        'settled_date' => 'setSettledDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'capture_submit_time' => 'getCaptureSubmitTime',
        'captured_date' => 'getCapturedDate',
        'settled_date' => 'getSettledDate'
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
        $this->container['capture_submit_time'] = isset($data['capture_submit_time']) ? $data['capture_submit_time'] : null;
        $this->container['captured_date'] = isset($data['captured_date']) ? $data['captured_date'] : null;
        $this->container['settled_date'] = isset($data['settled_date']) ? $data['settled_date'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets capture_submit_time
     *
     * @return string
     */
    public function getCaptureSubmitTime()
    {
        return $this->container['capture_submit_time'];
    }

    /**
     * Sets capture_submit_time
     *
     * @param string $capture_submit_time The date and time GOV.UK Pay asked your payment service provider to take the payment from your user’s account. This value uses Coordinated Universal Time (UTC) and ISO 8601 format - `YYYY-MM-DDThh:mm:ss.SSSZ`
     *
     * @return $this
     */
    public function setCaptureSubmitTime($capture_submit_time)
    {
        $this->container['capture_submit_time'] = $capture_submit_time;

        return $this;
    }

    /**
     * Gets captured_date
     *
     * @return string
     */
    public function getCapturedDate()
    {
        return $this->container['captured_date'];
    }

    /**
     * Sets captured_date
     *
     * @param string $captured_date The date your payment service provider took the payment from your user. This value uses ISO 8601 format - `YYYY-MM-DD`
     *
     * @return $this
     */
    public function setCapturedDate($captured_date)
    {
        $this->container['captured_date'] = $captured_date;

        return $this;
    }

    /**
     * Gets settled_date
     *
     * @return string
     */
    public function getSettledDate()
    {
        return $this->container['settled_date'];
    }

    /**
     * Sets settled_date
     *
     * @param string $settled_date The date that the transaction was paid into the service's account.
     *
     * @return $this
     */
    public function setSettledDate($settled_date)
    {
        $this->container['settled_date'] = $settled_date;

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
