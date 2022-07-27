<?php
/**
 * OrderDetails
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Direct Fulfillment Orders
 *
 * The Selling Partner API for Direct Fulfillment Orders provides programmatic access to a direct fulfillment vendor's order data.
 *
 * The version of the OpenAPI document: 2021-12-28
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228;

use \ArrayAccess;
use \SellingPartnerApi\ObjectSerializer;
use \SellingPartnerApi\Model\ModelInterface;

/**
 * OrderDetails Class Doc Comment
 *
 * @category Class
 * @description Details of an order.
 * @package  SellingPartnerApi
 * @group 
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class OrderDetails implements ModelInterface, ArrayAccess, \JsonSerializable, \IteratorAggregate
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'OrderDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'customer_order_number' => 'string',
        'order_date' => 'string',
        'order_status' => 'string',
        'shipment_details' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\ShipmentDetails',
        'tax_total' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\TaxItemDetails',
        'selling_party' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\PartyIdentification',
        'ship_from_party' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\PartyIdentification',
        'ship_to_party' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\Address',
        'bill_to_party' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\PartyIdentification',
        'items' => '\SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\OrderItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'customer_order_number' => null,
        'order_date' => null,
        'order_status' => null,
        'shipment_details' => null,
        'tax_total' => null,
        'selling_party' => null,
        'ship_from_party' => null,
        'ship_to_party' => null,
        'bill_to_party' => null,
        'items' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'customer_order_number' => 'customerOrderNumber',
        'order_date' => 'orderDate',
        'order_status' => 'orderStatus',
        'shipment_details' => 'shipmentDetails',
        'tax_total' => 'taxTotal',
        'selling_party' => 'sellingParty',
        'ship_from_party' => 'shipFromParty',
        'ship_to_party' => 'shipToParty',
        'bill_to_party' => 'billToParty',
        'items' => 'items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
                'customer_order_number' => 'setCustomerOrderNumber',
        'order_date' => 'setOrderDate',
        'order_status' => 'setOrderStatus',
        'shipment_details' => 'setShipmentDetails',
        'tax_total' => 'setTaxTotal',
        'selling_party' => 'setSellingParty',
        'ship_from_party' => 'setShipFromParty',
        'ship_to_party' => 'setShipToParty',
        'bill_to_party' => 'setBillToParty',
        'items' => 'setItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer_order_number' => 'getCustomerOrderNumber',
        'order_date' => 'getOrderDate',
        'order_status' => 'getOrderStatus',
        'shipment_details' => 'getShipmentDetails',
        'tax_total' => 'getTaxTotal',
        'selling_party' => 'getSellingParty',
        'ship_from_party' => 'getShipFromParty',
        'ship_to_party' => 'getShipToParty',
        'bill_to_party' => 'getBillToParty',
        'items' => 'getItems'
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
        return self::$openAPIModelName;
    }

    const ORDER_STATUS__NEW = 'NEW';
    const ORDER_STATUS_SHIPPED = 'SHIPPED';
    const ORDER_STATUS_ACCEPTED = 'ACCEPTED';
    const ORDER_STATUS_CANCELLED = 'CANCELLED';
    
    

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderStatusAllowableValues()
    {
        return [
            self::ORDER_STATUS__NEW,
            self::ORDER_STATUS_SHIPPED,
            self::ORDER_STATUS_ACCEPTED,
            self::ORDER_STATUS_CANCELLED,
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
        $this->container['customer_order_number'] = $data['customer_order_number'] ?? null;
        $this->container['order_date'] = $data['order_date'] ?? null;
        $this->container['order_status'] = $data['order_status'] ?? null;
        $this->container['shipment_details'] = $data['shipment_details'] ?? null;
        $this->container['tax_total'] = $data['tax_total'] ?? null;
        $this->container['selling_party'] = $data['selling_party'] ?? null;
        $this->container['ship_from_party'] = $data['ship_from_party'] ?? null;
        $this->container['ship_to_party'] = $data['ship_to_party'] ?? null;
        $this->container['bill_to_party'] = $data['bill_to_party'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['customer_order_number'] === null) {
            $invalidProperties[] = "'customer_order_number' can't be null";
        }
        if ($this->container['order_date'] === null) {
            $invalidProperties[] = "'order_date' can't be null";
        }
        $allowedValues = $this->getOrderStatusAllowableValues();
        if (!is_null($this->container['order_status']) && !in_array($this->container['order_status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'order_status', must be one of '%s'",
                $this->container['order_status'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['shipment_details'] === null) {
            $invalidProperties[] = "'shipment_details' can't be null";
        }
        if ($this->container['selling_party'] === null) {
            $invalidProperties[] = "'selling_party' can't be null";
        }
        if ($this->container['ship_from_party'] === null) {
            $invalidProperties[] = "'ship_from_party' can't be null";
        }
        if ($this->container['ship_to_party'] === null) {
            $invalidProperties[] = "'ship_to_party' can't be null";
        }
        if ($this->container['bill_to_party'] === null) {
            $invalidProperties[] = "'bill_to_party' can't be null";
        }
        if ($this->container['items'] === null) {
            $invalidProperties[] = "'items' can't be null";
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
     * Gets customer_order_number
     *
     * @return string
     */
    public function getCustomerOrderNumber()
    {
        return $this->container['customer_order_number'];
    }

    /**
     * Sets customer_order_number
     *
     * @param string $customer_order_number The customer order number.
     *
     * @return self
     */
    public function setCustomerOrderNumber($customer_order_number)
    {
        $this->container['customer_order_number'] = $customer_order_number;

        return $this;
    }
    /**
     * Gets order_date
     *
     * @return string
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param string $order_date The date the order was placed. This  field is expected to be in ISO-8601 date/time format, for example:2018-07-16T23:00:00Z/ 2018-07-16T23:00:00-05:00 /2018-07-16T23:00:00-08:00. If no time zone is specified, UTC should be assumed.
     *
     * @return self
     */
    public function setOrderDate($order_date)
    {
        $this->container['order_date'] = $order_date;

        return $this;
    }
    /**
     * Gets order_status
     *
     * @return string|null
     */
    public function getOrderStatus()
    {
        return $this->container['order_status'];
    }

    /**
     * Sets order_status
     *
     * @param string|null $order_status Current status of the order.
     *
     * @return self
     */
    public function setOrderStatus($order_status)
    {
        $allowedValues = $this->getOrderStatusAllowableValues();
        if (!is_null($order_status) && !in_array($order_status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'order_status', must be one of '%s'",
                    $order_status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['order_status'] = $order_status;

        return $this;
    }
    /**
     * Gets shipment_details
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\ShipmentDetails
     */
    public function getShipmentDetails()
    {
        return $this->container['shipment_details'];
    }

    /**
     * Sets shipment_details
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\ShipmentDetails $shipment_details shipment_details
     *
     * @return self
     */
    public function setShipmentDetails($shipment_details)
    {
        $this->container['shipment_details'] = $shipment_details;

        return $this;
    }
    /**
     * Gets tax_total
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\TaxItemDetails|null
     */
    public function getTaxTotal()
    {
        return $this->container['tax_total'];
    }

    /**
     * Sets tax_total
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\TaxItemDetails|null $tax_total tax_total
     *
     * @return self
     */
    public function setTaxTotal($tax_total)
    {
        $this->container['tax_total'] = $tax_total;

        return $this;
    }
    /**
     * Gets selling_party
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\PartyIdentification
     */
    public function getSellingParty()
    {
        return $this->container['selling_party'];
    }

    /**
     * Sets selling_party
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\PartyIdentification $selling_party selling_party
     *
     * @return self
     */
    public function setSellingParty($selling_party)
    {
        $this->container['selling_party'] = $selling_party;

        return $this;
    }
    /**
     * Gets ship_from_party
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\PartyIdentification
     */
    public function getShipFromParty()
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\PartyIdentification $ship_from_party ship_from_party
     *
     * @return self
     */
    public function setShipFromParty($ship_from_party)
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }
    /**
     * Gets ship_to_party
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\Address
     */
    public function getShipToParty()
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\Address $ship_to_party ship_to_party
     *
     * @return self
     */
    public function setShipToParty($ship_to_party)
    {
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }
    /**
     * Gets bill_to_party
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\PartyIdentification
     */
    public function getBillToParty()
    {
        return $this->container['bill_to_party'];
    }

    /**
     * Sets bill_to_party
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\PartyIdentification $bill_to_party bill_to_party
     *
     * @return self
     */
    public function setBillToParty($bill_to_party)
    {
        $this->container['bill_to_party'] = $bill_to_party;

        return $this;
    }
    /**
     * Gets items
     *
     * @return \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\OrderItem[]
     */
    public function getItems()
    {
        return $this->container['items'];
    }

    /**
     * Sets items
     *
     * @param \SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\OrderItem[] $items A list of items in this purchase order.
     *
     * @return self
     */
    public function setItems($items)
    {
        $this->container['items'] = $items;

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
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }

    /**
     * Enable iterating over all of the model's attributes in $key => $value format
     *
     * @return \Traversable
     */
    public function getIterator(): \Traversable
    {
        return (function () {
            foreach ($this->container as $key => $value) {
                yield $key => $value;
            }
        })();
    }

    /**
     * Retrieves the property with the given name by converting the property accession
     * to a getter call.
     *
     * @param string $propertyName
     * @return mixed
     */
    public function __get($propertyName)
    {
        // This doesn't make a syntactical difference since PHP is case-insensitive, but
        // makes error messages clearer (e.g. "Call to undefined method getFoo()" rather
        // than "Call to undefined method getfoo()").
        $ucProp = ucfirst($propertyName);
        $getter = "get$ucProp";
        return $this->$getter();
    }

    /**
     * Sets the property with the given name by converting the property accession
     * to a setter call.
     *
     * @param string $propertyName
     * @param mixed $propertyValue
     * @return SellingPartnerApi\Model\VendorDirectFulfillmentOrdersV20211228\OrderDetails
     */
    public function __set($propertyName, $propertyValue)
    {
        $ucProp = ucfirst($propertyName);
        $setter = "set$ucProp";
        $this->$setter($propertyValue);
        return $this;
    }
}


