<?php
/**
 * GLExportAdjustmentTransactionDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Finance
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Finance API
 *
 * ConnectWise Finance API
 *
 * OpenAPI spec version: 1.0.0
 * Contact: platform@connectwise.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model;

use \ArrayAccess;

/**
 * GLExportAdjustmentTransactionDetail Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Finance
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GLExportAdjustmentTransactionDetail implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GLExportAdjustmentTransactionDetail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'gl_class' => 'string',
        'description' => 'string',
        'memo' => 'string',
        'item' => '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\IvItemReference',
        'quantity' => 'int',
        'total' => 'double',
        'cost' => 'double',
        'cost_account_number' => 'string',
        'inventory_account_number' => 'string',
        'account_number' => 'string',
        'product_account_number' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'gl_class' => 'glClass',
        'description' => 'description',
        'memo' => 'memo',
        'item' => 'item',
        'quantity' => 'quantity',
        'total' => 'total',
        'cost' => 'cost',
        'cost_account_number' => 'costAccountNumber',
        'inventory_account_number' => 'inventoryAccountNumber',
        'account_number' => 'accountNumber',
        'product_account_number' => 'productAccountNumber'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'gl_class' => 'setGlClass',
        'description' => 'setDescription',
        'memo' => 'setMemo',
        'item' => 'setItem',
        'quantity' => 'setQuantity',
        'total' => 'setTotal',
        'cost' => 'setCost',
        'cost_account_number' => 'setCostAccountNumber',
        'inventory_account_number' => 'setInventoryAccountNumber',
        'account_number' => 'setAccountNumber',
        'product_account_number' => 'setProductAccountNumber'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'gl_class' => 'getGlClass',
        'description' => 'getDescription',
        'memo' => 'getMemo',
        'item' => 'getItem',
        'quantity' => 'getQuantity',
        'total' => 'getTotal',
        'cost' => 'getCost',
        'cost_account_number' => 'getCostAccountNumber',
        'inventory_account_number' => 'getInventoryAccountNumber',
        'account_number' => 'getAccountNumber',
        'product_account_number' => 'getProductAccountNumber'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['gl_class'] = isset($data['gl_class']) ? $data['gl_class'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['cost_account_number'] = isset($data['cost_account_number']) ? $data['cost_account_number'] : null;
        $this->container['inventory_account_number'] = isset($data['inventory_account_number']) ? $data['inventory_account_number'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['product_account_number'] = isset($data['product_account_number']) ? $data['product_account_number'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        return true;
    }


    /**
     * Gets gl_class
     * @return string
     */
    public function getGlClass()
    {
        return $this->container['gl_class'];
    }

    /**
     * Sets gl_class
     * @param string $gl_class
     * @return $this
     */
    public function setGlClass($gl_class)
    {
        $this->container['gl_class'] = $gl_class;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets memo
     * @return string
     */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
     * Sets memo
     * @param string $memo
     * @return $this
     */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;

        return $this;
    }

    /**
     * Gets item
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\IvItemReference
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\IvItemReference $item
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets total
     * @return double
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     * @param double $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets cost
     * @return double
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     * @param double $cost
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets cost_account_number
     * @return string
     */
    public function getCostAccountNumber()
    {
        return $this->container['cost_account_number'];
    }

    /**
     * Sets cost_account_number
     * @param string $cost_account_number
     * @return $this
     */
    public function setCostAccountNumber($cost_account_number)
    {
        $this->container['cost_account_number'] = $cost_account_number;

        return $this;
    }

    /**
     * Gets inventory_account_number
     * @return string
     */
    public function getInventoryAccountNumber()
    {
        return $this->container['inventory_account_number'];
    }

    /**
     * Sets inventory_account_number
     * @param string $inventory_account_number
     * @return $this
     */
    public function setInventoryAccountNumber($inventory_account_number)
    {
        $this->container['inventory_account_number'] = $inventory_account_number;

        return $this;
    }

    /**
     * Gets account_number
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->container['account_number'];
    }

    /**
     * Sets account_number
     * @param string $account_number
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

        return $this;
    }

    /**
     * Gets product_account_number
     * @return string
     */
    public function getProductAccountNumber()
    {
        return $this->container['product_account_number'];
    }

    /**
     * Sets product_account_number
     * @param string $product_account_number
     * @return $this
     */
    public function setProductAccountNumber($product_account_number)
    {
        $this->container['product_account_number'] = $product_account_number;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Spinen\ConnectWise\Clients\Finance\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Spinen\ConnectWise\Clients\Finance\ObjectSerializer::sanitizeForSerialization($this));
    }
}


