<?php
/**
 * GLExportPurchaseTransactionDetailTax
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
 * GLExportPurchaseTransactionDetailTax Class Doc Comment
 *
 * @category    Class */
/**
 * @package     Spinen\ConnectWise\Clients\Finance
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GLExportPurchaseTransactionDetailTax implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GLExportPurchaseTransactionDetailTax';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'document_date' => '\DateTime',
        'account_number' => 'string',
        'gl_class' => 'string',
        'cost' => 'double',
        'sales_code' => 'string',
        'gl_type_id' => 'string',
        'gl_item_id' => 'string',
        'memo' => 'string',
        'vendor_number' => 'string',
        'vendor_account_number' => 'string',
        'cost_account_number' => 'string',
        'inventory_account_number' => 'string',
        'item_type_xref' => 'string',
        'inventory_xref' => 'string',
        'cogs_xref' => 'string',
        'uom_schedule_xref' => 'string',
        'price_level_xref' => 'string',
        'location_xref' => 'string',
        'item' => '\Spinen\ConnectWise\Clients\Finance\Model\IvItemReference',
        'taxable_flag' => 'bool',
        'sales_description' => 'string',
        'item_description' => 'string',
        'item_price' => 'double',
        'item_cost' => 'double',
        'unit_of_measure' => '\Spinen\ConnectWise\Clients\Finance\Model\UnitOfMeasureReference',
        'quantity' => 'double',
        'total' => 'double',
        'currency' => '\Spinen\ConnectWise\Clients\Finance\Model\CurrencyReference',
        'serialized_flag' => 'bool',
        'serial_numbers' => 'string',
        'drop_shipped_flag' => 'bool',
        'line_number' => 'int',
        'warehouse_site' => '\Spinen\ConnectWise\Clients\Finance\Model\SiteReference',
        'warehouse_bin' => '\Spinen\ConnectWise\Clients\Finance\Model\WarehouseBinReference',
        'shipment_method' => '\Spinen\ConnectWise\Clients\Finance\Model\ShipmentMethodReference',
        'sub_category' => '\Spinen\ConnectWise\Clients\Finance\Model\ProductSubCategoryReference',
        'tax_code' => '\Spinen\ConnectWise\Clients\Finance\Model\TaxCodeReference',
        'tax_rate' => 'double',
        'tax_rate_percent' => 'double',
        'tax_agency_xref' => 'string',
        'tax_note' => 'string',
        'purchase_header_tax_group' => 'string'
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
        'document_date' => 'documentDate',
        'account_number' => 'accountNumber',
        'gl_class' => 'glClass',
        'cost' => 'cost',
        'sales_code' => 'salesCode',
        'gl_type_id' => 'glTypeId',
        'gl_item_id' => 'glItemId',
        'memo' => 'memo',
        'vendor_number' => 'vendorNumber',
        'vendor_account_number' => 'vendorAccountNumber',
        'cost_account_number' => 'costAccountNumber',
        'inventory_account_number' => 'inventoryAccountNumber',
        'item_type_xref' => 'itemTypeXref',
        'inventory_xref' => 'inventoryXref',
        'cogs_xref' => 'cogsXref',
        'uom_schedule_xref' => 'uomScheduleXref',
        'price_level_xref' => 'priceLevelXref',
        'location_xref' => 'locationXref',
        'item' => 'item',
        'taxable_flag' => 'taxableFlag',
        'sales_description' => 'salesDescription',
        'item_description' => 'itemDescription',
        'item_price' => 'itemPrice',
        'item_cost' => 'itemCost',
        'unit_of_measure' => 'unitOfMeasure',
        'quantity' => 'quantity',
        'total' => 'total',
        'currency' => 'currency',
        'serialized_flag' => 'serializedFlag',
        'serial_numbers' => 'serialNumbers',
        'drop_shipped_flag' => 'dropShippedFlag',
        'line_number' => 'lineNumber',
        'warehouse_site' => 'warehouseSite',
        'warehouse_bin' => 'warehouseBin',
        'shipment_method' => 'shipmentMethod',
        'sub_category' => 'subCategory',
        'tax_code' => 'taxCode',
        'tax_rate' => 'taxRate',
        'tax_rate_percent' => 'taxRatePercent',
        'tax_agency_xref' => 'taxAgencyXref',
        'tax_note' => 'taxNote',
        'purchase_header_tax_group' => 'purchaseHeaderTaxGroup'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'document_date' => 'setDocumentDate',
        'account_number' => 'setAccountNumber',
        'gl_class' => 'setGlClass',
        'cost' => 'setCost',
        'sales_code' => 'setSalesCode',
        'gl_type_id' => 'setGlTypeId',
        'gl_item_id' => 'setGlItemId',
        'memo' => 'setMemo',
        'vendor_number' => 'setVendorNumber',
        'vendor_account_number' => 'setVendorAccountNumber',
        'cost_account_number' => 'setCostAccountNumber',
        'inventory_account_number' => 'setInventoryAccountNumber',
        'item_type_xref' => 'setItemTypeXref',
        'inventory_xref' => 'setInventoryXref',
        'cogs_xref' => 'setCogsXref',
        'uom_schedule_xref' => 'setUomScheduleXref',
        'price_level_xref' => 'setPriceLevelXref',
        'location_xref' => 'setLocationXref',
        'item' => 'setItem',
        'taxable_flag' => 'setTaxableFlag',
        'sales_description' => 'setSalesDescription',
        'item_description' => 'setItemDescription',
        'item_price' => 'setItemPrice',
        'item_cost' => 'setItemCost',
        'unit_of_measure' => 'setUnitOfMeasure',
        'quantity' => 'setQuantity',
        'total' => 'setTotal',
        'currency' => 'setCurrency',
        'serialized_flag' => 'setSerializedFlag',
        'serial_numbers' => 'setSerialNumbers',
        'drop_shipped_flag' => 'setDropShippedFlag',
        'line_number' => 'setLineNumber',
        'warehouse_site' => 'setWarehouseSite',
        'warehouse_bin' => 'setWarehouseBin',
        'shipment_method' => 'setShipmentMethod',
        'sub_category' => 'setSubCategory',
        'tax_code' => 'setTaxCode',
        'tax_rate' => 'setTaxRate',
        'tax_rate_percent' => 'setTaxRatePercent',
        'tax_agency_xref' => 'setTaxAgencyXref',
        'tax_note' => 'setTaxNote',
        'purchase_header_tax_group' => 'setPurchaseHeaderTaxGroup'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'document_date' => 'getDocumentDate',
        'account_number' => 'getAccountNumber',
        'gl_class' => 'getGlClass',
        'cost' => 'getCost',
        'sales_code' => 'getSalesCode',
        'gl_type_id' => 'getGlTypeId',
        'gl_item_id' => 'getGlItemId',
        'memo' => 'getMemo',
        'vendor_number' => 'getVendorNumber',
        'vendor_account_number' => 'getVendorAccountNumber',
        'cost_account_number' => 'getCostAccountNumber',
        'inventory_account_number' => 'getInventoryAccountNumber',
        'item_type_xref' => 'getItemTypeXref',
        'inventory_xref' => 'getInventoryXref',
        'cogs_xref' => 'getCogsXref',
        'uom_schedule_xref' => 'getUomScheduleXref',
        'price_level_xref' => 'getPriceLevelXref',
        'location_xref' => 'getLocationXref',
        'item' => 'getItem',
        'taxable_flag' => 'getTaxableFlag',
        'sales_description' => 'getSalesDescription',
        'item_description' => 'getItemDescription',
        'item_price' => 'getItemPrice',
        'item_cost' => 'getItemCost',
        'unit_of_measure' => 'getUnitOfMeasure',
        'quantity' => 'getQuantity',
        'total' => 'getTotal',
        'currency' => 'getCurrency',
        'serialized_flag' => 'getSerializedFlag',
        'serial_numbers' => 'getSerialNumbers',
        'drop_shipped_flag' => 'getDropShippedFlag',
        'line_number' => 'getLineNumber',
        'warehouse_site' => 'getWarehouseSite',
        'warehouse_bin' => 'getWarehouseBin',
        'shipment_method' => 'getShipmentMethod',
        'sub_category' => 'getSubCategory',
        'tax_code' => 'getTaxCode',
        'tax_rate' => 'getTaxRate',
        'tax_rate_percent' => 'getTaxRatePercent',
        'tax_agency_xref' => 'getTaxAgencyXref',
        'tax_note' => 'getTaxNote',
        'purchase_header_tax_group' => 'getPurchaseHeaderTaxGroup'
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
        $this->container['document_date'] = isset($data['document_date']) ? $data['document_date'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['gl_class'] = isset($data['gl_class']) ? $data['gl_class'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['sales_code'] = isset($data['sales_code']) ? $data['sales_code'] : null;
        $this->container['gl_type_id'] = isset($data['gl_type_id']) ? $data['gl_type_id'] : null;
        $this->container['gl_item_id'] = isset($data['gl_item_id']) ? $data['gl_item_id'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
        $this->container['vendor_number'] = isset($data['vendor_number']) ? $data['vendor_number'] : null;
        $this->container['vendor_account_number'] = isset($data['vendor_account_number']) ? $data['vendor_account_number'] : null;
        $this->container['cost_account_number'] = isset($data['cost_account_number']) ? $data['cost_account_number'] : null;
        $this->container['inventory_account_number'] = isset($data['inventory_account_number']) ? $data['inventory_account_number'] : null;
        $this->container['item_type_xref'] = isset($data['item_type_xref']) ? $data['item_type_xref'] : null;
        $this->container['inventory_xref'] = isset($data['inventory_xref']) ? $data['inventory_xref'] : null;
        $this->container['cogs_xref'] = isset($data['cogs_xref']) ? $data['cogs_xref'] : null;
        $this->container['uom_schedule_xref'] = isset($data['uom_schedule_xref']) ? $data['uom_schedule_xref'] : null;
        $this->container['price_level_xref'] = isset($data['price_level_xref']) ? $data['price_level_xref'] : null;
        $this->container['location_xref'] = isset($data['location_xref']) ? $data['location_xref'] : null;
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['taxable_flag'] = isset($data['taxable_flag']) ? $data['taxable_flag'] : null;
        $this->container['sales_description'] = isset($data['sales_description']) ? $data['sales_description'] : null;
        $this->container['item_description'] = isset($data['item_description']) ? $data['item_description'] : null;
        $this->container['item_price'] = isset($data['item_price']) ? $data['item_price'] : null;
        $this->container['item_cost'] = isset($data['item_cost']) ? $data['item_cost'] : null;
        $this->container['unit_of_measure'] = isset($data['unit_of_measure']) ? $data['unit_of_measure'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['serialized_flag'] = isset($data['serialized_flag']) ? $data['serialized_flag'] : null;
        $this->container['serial_numbers'] = isset($data['serial_numbers']) ? $data['serial_numbers'] : null;
        $this->container['drop_shipped_flag'] = isset($data['drop_shipped_flag']) ? $data['drop_shipped_flag'] : null;
        $this->container['line_number'] = isset($data['line_number']) ? $data['line_number'] : null;
        $this->container['warehouse_site'] = isset($data['warehouse_site']) ? $data['warehouse_site'] : null;
        $this->container['warehouse_bin'] = isset($data['warehouse_bin']) ? $data['warehouse_bin'] : null;
        $this->container['shipment_method'] = isset($data['shipment_method']) ? $data['shipment_method'] : null;
        $this->container['sub_category'] = isset($data['sub_category']) ? $data['sub_category'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['tax_rate_percent'] = isset($data['tax_rate_percent']) ? $data['tax_rate_percent'] : null;
        $this->container['tax_agency_xref'] = isset($data['tax_agency_xref']) ? $data['tax_agency_xref'] : null;
        $this->container['tax_note'] = isset($data['tax_note']) ? $data['tax_note'] : null;
        $this->container['purchase_header_tax_group'] = isset($data['purchase_header_tax_group']) ? $data['purchase_header_tax_group'] : null;
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
     * Gets document_date
     * @return \DateTime
     */
    public function getDocumentDate()
    {
        return $this->container['document_date'];
    }

    /**
     * Sets document_date
     * @param \DateTime $document_date
     * @return $this
     */
    public function setDocumentDate($document_date)
    {
        $this->container['document_date'] = $document_date;

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
     * Gets sales_code
     * @return string
     */
    public function getSalesCode()
    {
        return $this->container['sales_code'];
    }

    /**
     * Sets sales_code
     * @param string $sales_code
     * @return $this
     */
    public function setSalesCode($sales_code)
    {
        $this->container['sales_code'] = $sales_code;

        return $this;
    }

    /**
     * Gets gl_type_id
     * @return string
     */
    public function getGlTypeId()
    {
        return $this->container['gl_type_id'];
    }

    /**
     * Sets gl_type_id
     * @param string $gl_type_id
     * @return $this
     */
    public function setGlTypeId($gl_type_id)
    {
        $this->container['gl_type_id'] = $gl_type_id;

        return $this;
    }

    /**
     * Gets gl_item_id
     * @return string
     */
    public function getGlItemId()
    {
        return $this->container['gl_item_id'];
    }

    /**
     * Sets gl_item_id
     * @param string $gl_item_id
     * @return $this
     */
    public function setGlItemId($gl_item_id)
    {
        $this->container['gl_item_id'] = $gl_item_id;

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
     * Gets vendor_number
     * @return string
     */
    public function getVendorNumber()
    {
        return $this->container['vendor_number'];
    }

    /**
     * Sets vendor_number
     * @param string $vendor_number
     * @return $this
     */
    public function setVendorNumber($vendor_number)
    {
        $this->container['vendor_number'] = $vendor_number;

        return $this;
    }

    /**
     * Gets vendor_account_number
     * @return string
     */
    public function getVendorAccountNumber()
    {
        return $this->container['vendor_account_number'];
    }

    /**
     * Sets vendor_account_number
     * @param string $vendor_account_number
     * @return $this
     */
    public function setVendorAccountNumber($vendor_account_number)
    {
        $this->container['vendor_account_number'] = $vendor_account_number;

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
     * Gets item_type_xref
     * @return string
     */
    public function getItemTypeXref()
    {
        return $this->container['item_type_xref'];
    }

    /**
     * Sets item_type_xref
     * @param string $item_type_xref
     * @return $this
     */
    public function setItemTypeXref($item_type_xref)
    {
        $this->container['item_type_xref'] = $item_type_xref;

        return $this;
    }

    /**
     * Gets inventory_xref
     * @return string
     */
    public function getInventoryXref()
    {
        return $this->container['inventory_xref'];
    }

    /**
     * Sets inventory_xref
     * @param string $inventory_xref
     * @return $this
     */
    public function setInventoryXref($inventory_xref)
    {
        $this->container['inventory_xref'] = $inventory_xref;

        return $this;
    }

    /**
     * Gets cogs_xref
     * @return string
     */
    public function getCogsXref()
    {
        return $this->container['cogs_xref'];
    }

    /**
     * Sets cogs_xref
     * @param string $cogs_xref
     * @return $this
     */
    public function setCogsXref($cogs_xref)
    {
        $this->container['cogs_xref'] = $cogs_xref;

        return $this;
    }

    /**
     * Gets uom_schedule_xref
     * @return string
     */
    public function getUomScheduleXref()
    {
        return $this->container['uom_schedule_xref'];
    }

    /**
     * Sets uom_schedule_xref
     * @param string $uom_schedule_xref
     * @return $this
     */
    public function setUomScheduleXref($uom_schedule_xref)
    {
        $this->container['uom_schedule_xref'] = $uom_schedule_xref;

        return $this;
    }

    /**
     * Gets price_level_xref
     * @return string
     */
    public function getPriceLevelXref()
    {
        return $this->container['price_level_xref'];
    }

    /**
     * Sets price_level_xref
     * @param string $price_level_xref
     * @return $this
     */
    public function setPriceLevelXref($price_level_xref)
    {
        $this->container['price_level_xref'] = $price_level_xref;

        return $this;
    }

    /**
     * Gets location_xref
     * @return string
     */
    public function getLocationXref()
    {
        return $this->container['location_xref'];
    }

    /**
     * Sets location_xref
     * @param string $location_xref
     * @return $this
     */
    public function setLocationXref($location_xref)
    {
        $this->container['location_xref'] = $location_xref;

        return $this;
    }

    /**
     * Gets item
     * @return \Spinen\ConnectWise\Clients\Finance\Model\IvItemReference
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     * @param \Spinen\ConnectWise\Clients\Finance\Model\IvItemReference $item
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets taxable_flag
     * @return bool
     */
    public function getTaxableFlag()
    {
        return $this->container['taxable_flag'];
    }

    /**
     * Sets taxable_flag
     * @param bool $taxable_flag
     * @return $this
     */
    public function setTaxableFlag($taxable_flag)
    {
        $this->container['taxable_flag'] = $taxable_flag;

        return $this;
    }

    /**
     * Gets sales_description
     * @return string
     */
    public function getSalesDescription()
    {
        return $this->container['sales_description'];
    }

    /**
     * Sets sales_description
     * @param string $sales_description
     * @return $this
     */
    public function setSalesDescription($sales_description)
    {
        $this->container['sales_description'] = $sales_description;

        return $this;
    }

    /**
     * Gets item_description
     * @return string
     */
    public function getItemDescription()
    {
        return $this->container['item_description'];
    }

    /**
     * Sets item_description
     * @param string $item_description
     * @return $this
     */
    public function setItemDescription($item_description)
    {
        $this->container['item_description'] = $item_description;

        return $this;
    }

    /**
     * Gets item_price
     * @return double
     */
    public function getItemPrice()
    {
        return $this->container['item_price'];
    }

    /**
     * Sets item_price
     * @param double $item_price
     * @return $this
     */
    public function setItemPrice($item_price)
    {
        $this->container['item_price'] = $item_price;

        return $this;
    }

    /**
     * Gets item_cost
     * @return double
     */
    public function getItemCost()
    {
        return $this->container['item_cost'];
    }

    /**
     * Sets item_cost
     * @param double $item_cost
     * @return $this
     */
    public function setItemCost($item_cost)
    {
        $this->container['item_cost'] = $item_cost;

        return $this;
    }

    /**
     * Gets unit_of_measure
     * @return \Spinen\ConnectWise\Clients\Finance\Model\UnitOfMeasureReference
     */
    public function getUnitOfMeasure()
    {
        return $this->container['unit_of_measure'];
    }

    /**
     * Sets unit_of_measure
     * @param \Spinen\ConnectWise\Clients\Finance\Model\UnitOfMeasureReference $unit_of_measure
     * @return $this
     */
    public function setUnitOfMeasure($unit_of_measure)
    {
        $this->container['unit_of_measure'] = $unit_of_measure;

        return $this;
    }

    /**
     * Gets quantity
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param double $quantity
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
     * Gets currency
     * @return \Spinen\ConnectWise\Clients\Finance\Model\CurrencyReference
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param \Spinen\ConnectWise\Clients\Finance\Model\CurrencyReference $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets serialized_flag
     * @return bool
     */
    public function getSerializedFlag()
    {
        return $this->container['serialized_flag'];
    }

    /**
     * Sets serialized_flag
     * @param bool $serialized_flag
     * @return $this
     */
    public function setSerializedFlag($serialized_flag)
    {
        $this->container['serialized_flag'] = $serialized_flag;

        return $this;
    }

    /**
     * Gets serial_numbers
     * @return string
     */
    public function getSerialNumbers()
    {
        return $this->container['serial_numbers'];
    }

    /**
     * Sets serial_numbers
     * @param string $serial_numbers
     * @return $this
     */
    public function setSerialNumbers($serial_numbers)
    {
        $this->container['serial_numbers'] = $serial_numbers;

        return $this;
    }

    /**
     * Gets drop_shipped_flag
     * @return bool
     */
    public function getDropShippedFlag()
    {
        return $this->container['drop_shipped_flag'];
    }

    /**
     * Sets drop_shipped_flag
     * @param bool $drop_shipped_flag
     * @return $this
     */
    public function setDropShippedFlag($drop_shipped_flag)
    {
        $this->container['drop_shipped_flag'] = $drop_shipped_flag;

        return $this;
    }

    /**
     * Gets line_number
     * @return int
     */
    public function getLineNumber()
    {
        return $this->container['line_number'];
    }

    /**
     * Sets line_number
     * @param int $line_number
     * @return $this
     */
    public function setLineNumber($line_number)
    {
        $this->container['line_number'] = $line_number;

        return $this;
    }

    /**
     * Gets warehouse_site
     * @return \Spinen\ConnectWise\Clients\Finance\Model\SiteReference
     */
    public function getWarehouseSite()
    {
        return $this->container['warehouse_site'];
    }

    /**
     * Sets warehouse_site
     * @param \Spinen\ConnectWise\Clients\Finance\Model\SiteReference $warehouse_site
     * @return $this
     */
    public function setWarehouseSite($warehouse_site)
    {
        $this->container['warehouse_site'] = $warehouse_site;

        return $this;
    }

    /**
     * Gets warehouse_bin
     * @return \Spinen\ConnectWise\Clients\Finance\Model\WarehouseBinReference
     */
    public function getWarehouseBin()
    {
        return $this->container['warehouse_bin'];
    }

    /**
     * Sets warehouse_bin
     * @param \Spinen\ConnectWise\Clients\Finance\Model\WarehouseBinReference $warehouse_bin
     * @return $this
     */
    public function setWarehouseBin($warehouse_bin)
    {
        $this->container['warehouse_bin'] = $warehouse_bin;

        return $this;
    }

    /**
     * Gets shipment_method
     * @return \Spinen\ConnectWise\Clients\Finance\Model\ShipmentMethodReference
     */
    public function getShipmentMethod()
    {
        return $this->container['shipment_method'];
    }

    /**
     * Sets shipment_method
     * @param \Spinen\ConnectWise\Clients\Finance\Model\ShipmentMethodReference $shipment_method
     * @return $this
     */
    public function setShipmentMethod($shipment_method)
    {
        $this->container['shipment_method'] = $shipment_method;

        return $this;
    }

    /**
     * Gets sub_category
     * @return \Spinen\ConnectWise\Clients\Finance\Model\ProductSubCategoryReference
     */
    public function getSubCategory()
    {
        return $this->container['sub_category'];
    }

    /**
     * Sets sub_category
     * @param \Spinen\ConnectWise\Clients\Finance\Model\ProductSubCategoryReference $sub_category
     * @return $this
     */
    public function setSubCategory($sub_category)
    {
        $this->container['sub_category'] = $sub_category;

        return $this;
    }

    /**
     * Gets tax_code
     * @return \Spinen\ConnectWise\Clients\Finance\Model\TaxCodeReference
     */
    public function getTaxCode()
    {
        return $this->container['tax_code'];
    }

    /**
     * Sets tax_code
     * @param \Spinen\ConnectWise\Clients\Finance\Model\TaxCodeReference $tax_code
     * @return $this
     */
    public function setTaxCode($tax_code)
    {
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets tax_rate
     * @return double
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     * @param double $tax_rate
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets tax_rate_percent
     * @return double
     */
    public function getTaxRatePercent()
    {
        return $this->container['tax_rate_percent'];
    }

    /**
     * Sets tax_rate_percent
     * @param double $tax_rate_percent
     * @return $this
     */
    public function setTaxRatePercent($tax_rate_percent)
    {
        $this->container['tax_rate_percent'] = $tax_rate_percent;

        return $this;
    }

    /**
     * Gets tax_agency_xref
     * @return string
     */
    public function getTaxAgencyXref()
    {
        return $this->container['tax_agency_xref'];
    }

    /**
     * Sets tax_agency_xref
     * @param string $tax_agency_xref
     * @return $this
     */
    public function setTaxAgencyXref($tax_agency_xref)
    {
        $this->container['tax_agency_xref'] = $tax_agency_xref;

        return $this;
    }

    /**
     * Gets tax_note
     * @return string
     */
    public function getTaxNote()
    {
        return $this->container['tax_note'];
    }

    /**
     * Sets tax_note
     * @param string $tax_note
     * @return $this
     */
    public function setTaxNote($tax_note)
    {
        $this->container['tax_note'] = $tax_note;

        return $this;
    }

    /**
     * Gets purchase_header_tax_group
     * @return string
     */
    public function getPurchaseHeaderTaxGroup()
    {
        return $this->container['purchase_header_tax_group'];
    }

    /**
     * Sets purchase_header_tax_group
     * @param string $purchase_header_tax_group
     * @return $this
     */
    public function setPurchaseHeaderTaxGroup($purchase_header_tax_group)
    {
        $this->container['purchase_header_tax_group'] = $purchase_header_tax_group;

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


