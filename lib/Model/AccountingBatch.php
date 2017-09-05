<?php
/**
 * AccountingBatch
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

namespace Spinen\ConnectWise\Clients\Finance\Model;

use \ArrayAccess;

/**
 * AccountingBatch Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Finance
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AccountingBatch implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AccountingBatch';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'batch_identifier' => 'string',
        'export_invoices_flag' => 'bool',
        'export_expenses_flag' => 'bool',
        'export_products_flag' => 'bool',
        'closed_flag' => 'bool',
        '_info' => '\Spinen\ConnectWise\Clients\Finance\Model\Metadata'
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
        'id' => 'id',
        'batch_identifier' => 'batchIdentifier',
        'export_invoices_flag' => 'exportInvoicesFlag',
        'export_expenses_flag' => 'exportExpensesFlag',
        'export_products_flag' => 'exportProductsFlag',
        'closed_flag' => 'closedFlag',
        '_info' => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'batch_identifier' => 'setBatchIdentifier',
        'export_invoices_flag' => 'setExportInvoicesFlag',
        'export_expenses_flag' => 'setExportExpensesFlag',
        'export_products_flag' => 'setExportProductsFlag',
        'closed_flag' => 'setClosedFlag',
        '_info' => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'batch_identifier' => 'getBatchIdentifier',
        'export_invoices_flag' => 'getExportInvoicesFlag',
        'export_expenses_flag' => 'getExportExpensesFlag',
        'export_products_flag' => 'getExportProductsFlag',
        'closed_flag' => 'getClosedFlag',
        '_info' => 'getInfo'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['batch_identifier'] = isset($data['batch_identifier']) ? $data['batch_identifier'] : null;
        $this->container['export_invoices_flag'] = isset($data['export_invoices_flag']) ? $data['export_invoices_flag'] : null;
        $this->container['export_expenses_flag'] = isset($data['export_expenses_flag']) ? $data['export_expenses_flag'] : null;
        $this->container['export_products_flag'] = isset($data['export_products_flag']) ? $data['export_products_flag'] : null;
        $this->container['closed_flag'] = isset($data['closed_flag']) ? $data['closed_flag'] : null;
        $this->container['_info'] = isset($data['_info']) ? $data['_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];
        if ($this->container['batch_identifier'] === null) {
            $invalid_properties[] = "'batch_identifier' can't be null";
        }
        if ((strlen($this->container['batch_identifier']) > 50)) {
            $invalid_properties[] = "invalid value for 'batch_identifier', the character length must be smaller than or equal to 50.";
        }

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
        if ($this->container['batch_identifier'] === null) {
            return false;
        }
        if (strlen($this->container['batch_identifier']) > 50) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets batch_identifier
     * @return string
     */
    public function getBatchIdentifier()
    {
        return $this->container['batch_identifier'];
    }

    /**
     * Sets batch_identifier
     * @param string $batch_identifier
     * @return $this
     */
    public function setBatchIdentifier($batch_identifier)
    {
        if ((strlen($batch_identifier) > 50)) {
            throw new \InvalidArgumentException('invalid length for $batch_identifier when calling AccountingBatch., must be smaller than or equal to 50.');
        }

        $this->container['batch_identifier'] = $batch_identifier;

        return $this;
    }

    /**
     * Gets export_invoices_flag
     * @return bool
     */
    public function getExportInvoicesFlag()
    {
        return $this->container['export_invoices_flag'];
    }

    /**
     * Sets export_invoices_flag
     * @param bool $export_invoices_flag
     * @return $this
     */
    public function setExportInvoicesFlag($export_invoices_flag)
    {
        $this->container['export_invoices_flag'] = $export_invoices_flag;

        return $this;
    }

    /**
     * Gets export_expenses_flag
     * @return bool
     */
    public function getExportExpensesFlag()
    {
        return $this->container['export_expenses_flag'];
    }

    /**
     * Sets export_expenses_flag
     * @param bool $export_expenses_flag
     * @return $this
     */
    public function setExportExpensesFlag($export_expenses_flag)
    {
        $this->container['export_expenses_flag'] = $export_expenses_flag;

        return $this;
    }

    /**
     * Gets export_products_flag
     * @return bool
     */
    public function getExportProductsFlag()
    {
        return $this->container['export_products_flag'];
    }

    /**
     * Sets export_products_flag
     * @param bool $export_products_flag
     * @return $this
     */
    public function setExportProductsFlag($export_products_flag)
    {
        $this->container['export_products_flag'] = $export_products_flag;

        return $this;
    }

    /**
     * Gets closed_flag
     * @return bool
     */
    public function getClosedFlag()
    {
        return $this->container['closed_flag'];
    }

    /**
     * Sets closed_flag
     * @param bool $closed_flag
     * @return $this
     */
    public function setClosedFlag($closed_flag)
    {
        $this->container['closed_flag'] = $closed_flag;

        return $this;
    }

    /**
     * Gets _info
     * @return \Spinen\ConnectWise\Clients\Finance\Model\Metadata
     */
    public function getInfo()
    {
        return $this->container['_info'];
    }

    /**
     * Sets _info
     * @param \Spinen\ConnectWise\Clients\Finance\Model\Metadata $_info Metadata of the entity
     * @return $this
     */
    public function setInfo($_info)
    {
        $this->container['_info'] = $_info;

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


