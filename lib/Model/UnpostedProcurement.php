<?php
/**
 * UnpostedProcurement
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
 * UnpostedProcurement Class Doc Comment
 *
 * @category    Class
 */

/**
 * @package     Spinen\ConnectWise\Clients\Finance
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UnpostedProcurement implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'UnpostedProcurement';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id'                          => 'int',
        'description'                 => 'string',
        'location_id'                 => 'int',
        'department_id'               => 'int',
        'procurement_type'            => 'string',
        'purchase_order'              => '\Spinen\ConnectWise\Clients\Finance\Model\PurchaseOrderReference',
        'purchase_date'               => '\DateTime',
        'tracking_number'             => 'string',
        'billing_terms'               => '\Spinen\ConnectWise\Clients\Finance\Model\BillingTermsReference',
        'currency'                    => '\Spinen\ConnectWise\Clients\Finance\Model\CurrencyReference',
        'total'                       => 'double',
        'tax_code'                    => '\Spinen\ConnectWise\Clients\Finance\Model\TaxCodeReference',
        'avalara_tax_flag'            => 'bool',
        'item_taxable_flag'           => 'bool',
        'purchase_order_taxable_flag' => 'bool',
        'state_tax_flag'              => 'bool',
        'state_tax_xref'              => 'string',
        'state_tax_amount'            => 'double',
        'county_tax_flag'             => 'bool',
        'county_tax_xref'             => 'string',
        'county_tax_amount'           => 'double',
        'city_tax_flag'               => 'bool',
        'city_tax_xref'               => 'string',
        'city_tax_amount'             => 'double',
        'country_tax_flag'            => 'bool',
        'country_tax_xref'            => 'string',
        'country_tax_amount'          => 'double',
        'composite_tax_flag'          => 'bool',
        'composite_tax_xref'          => 'string',
        'composite_tax_amount'        => 'double',
        'tax_total'                   => 'double',
        'customer'                    => '\Spinen\ConnectWise\Clients\Finance\Model\CompanyReference',
        'vendor'                      => '\Spinen\ConnectWise\Clients\Finance\Model\CompanyReference',
        'vendor_account_number'       => 'string',
        'vendor_invoice_number'       => 'string',
        'vendor_invoice_date'         => '\DateTime',
        'tax_freight_flag'            => 'bool',
        'freight_tax_total'           => 'double',
        'freight_cost'                => 'double',
        'date_closed'                 => '\DateTime',
        '_info'                       => '\Spinen\ConnectWise\Clients\Finance\Model\Metadata'
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
        'id'                          => 'id',
        'description'                 => 'description',
        'location_id'                 => 'locationId',
        'department_id'               => 'departmentId',
        'procurement_type'            => 'procurementType',
        'purchase_order'              => 'purchaseOrder',
        'purchase_date'               => 'purchaseDate',
        'tracking_number'             => 'trackingNumber',
        'billing_terms'               => 'billingTerms',
        'currency'                    => 'currency',
        'total'                       => 'total',
        'tax_code'                    => 'taxCode',
        'avalara_tax_flag'            => 'avalaraTaxFlag',
        'item_taxable_flag'           => 'itemTaxableFlag',
        'purchase_order_taxable_flag' => 'purchaseOrderTaxableFlag',
        'state_tax_flag'              => 'stateTaxFlag',
        'state_tax_xref'              => 'stateTaxXref',
        'state_tax_amount'            => 'stateTaxAmount',
        'county_tax_flag'             => 'countyTaxFlag',
        'county_tax_xref'             => 'countyTaxXref',
        'county_tax_amount'           => 'countyTaxAmount',
        'city_tax_flag'               => 'cityTaxFlag',
        'city_tax_xref'               => 'cityTaxXref',
        'city_tax_amount'             => 'cityTaxAmount',
        'country_tax_flag'            => 'countryTaxFlag',
        'country_tax_xref'            => 'countryTaxXref',
        'country_tax_amount'          => 'countryTaxAmount',
        'composite_tax_flag'          => 'compositeTaxFlag',
        'composite_tax_xref'          => 'compositeTaxXref',
        'composite_tax_amount'        => 'compositeTaxAmount',
        'tax_total'                   => 'taxTotal',
        'customer'                    => 'customer',
        'vendor'                      => 'vendor',
        'vendor_account_number'       => 'vendorAccountNumber',
        'vendor_invoice_number'       => 'vendorInvoiceNumber',
        'vendor_invoice_date'         => 'vendorInvoiceDate',
        'tax_freight_flag'            => 'taxFreightFlag',
        'freight_tax_total'           => 'freightTaxTotal',
        'freight_cost'                => 'freightCost',
        'date_closed'                 => 'dateClosed',
        '_info'                       => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id'                          => 'setId',
        'description'                 => 'setDescription',
        'location_id'                 => 'setLocationId',
        'department_id'               => 'setDepartmentId',
        'procurement_type'            => 'setProcurementType',
        'purchase_order'              => 'setPurchaseOrder',
        'purchase_date'               => 'setPurchaseDate',
        'tracking_number'             => 'setTrackingNumber',
        'billing_terms'               => 'setBillingTerms',
        'currency'                    => 'setCurrency',
        'total'                       => 'setTotal',
        'tax_code'                    => 'setTaxCode',
        'avalara_tax_flag'            => 'setAvalaraTaxFlag',
        'item_taxable_flag'           => 'setItemTaxableFlag',
        'purchase_order_taxable_flag' => 'setPurchaseOrderTaxableFlag',
        'state_tax_flag'              => 'setStateTaxFlag',
        'state_tax_xref'              => 'setStateTaxXref',
        'state_tax_amount'            => 'setStateTaxAmount',
        'county_tax_flag'             => 'setCountyTaxFlag',
        'county_tax_xref'             => 'setCountyTaxXref',
        'county_tax_amount'           => 'setCountyTaxAmount',
        'city_tax_flag'               => 'setCityTaxFlag',
        'city_tax_xref'               => 'setCityTaxXref',
        'city_tax_amount'             => 'setCityTaxAmount',
        'country_tax_flag'            => 'setCountryTaxFlag',
        'country_tax_xref'            => 'setCountryTaxXref',
        'country_tax_amount'          => 'setCountryTaxAmount',
        'composite_tax_flag'          => 'setCompositeTaxFlag',
        'composite_tax_xref'          => 'setCompositeTaxXref',
        'composite_tax_amount'        => 'setCompositeTaxAmount',
        'tax_total'                   => 'setTaxTotal',
        'customer'                    => 'setCustomer',
        'vendor'                      => 'setVendor',
        'vendor_account_number'       => 'setVendorAccountNumber',
        'vendor_invoice_number'       => 'setVendorInvoiceNumber',
        'vendor_invoice_date'         => 'setVendorInvoiceDate',
        'tax_freight_flag'            => 'setTaxFreightFlag',
        'freight_tax_total'           => 'setFreightTaxTotal',
        'freight_cost'                => 'setFreightCost',
        'date_closed'                 => 'setDateClosed',
        '_info'                       => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id'                          => 'getId',
        'description'                 => 'getDescription',
        'location_id'                 => 'getLocationId',
        'department_id'               => 'getDepartmentId',
        'procurement_type'            => 'getProcurementType',
        'purchase_order'              => 'getPurchaseOrder',
        'purchase_date'               => 'getPurchaseDate',
        'tracking_number'             => 'getTrackingNumber',
        'billing_terms'               => 'getBillingTerms',
        'currency'                    => 'getCurrency',
        'total'                       => 'getTotal',
        'tax_code'                    => 'getTaxCode',
        'avalara_tax_flag'            => 'getAvalaraTaxFlag',
        'item_taxable_flag'           => 'getItemTaxableFlag',
        'purchase_order_taxable_flag' => 'getPurchaseOrderTaxableFlag',
        'state_tax_flag'              => 'getStateTaxFlag',
        'state_tax_xref'              => 'getStateTaxXref',
        'state_tax_amount'            => 'getStateTaxAmount',
        'county_tax_flag'             => 'getCountyTaxFlag',
        'county_tax_xref'             => 'getCountyTaxXref',
        'county_tax_amount'           => 'getCountyTaxAmount',
        'city_tax_flag'               => 'getCityTaxFlag',
        'city_tax_xref'               => 'getCityTaxXref',
        'city_tax_amount'             => 'getCityTaxAmount',
        'country_tax_flag'            => 'getCountryTaxFlag',
        'country_tax_xref'            => 'getCountryTaxXref',
        'country_tax_amount'          => 'getCountryTaxAmount',
        'composite_tax_flag'          => 'getCompositeTaxFlag',
        'composite_tax_xref'          => 'getCompositeTaxXref',
        'composite_tax_amount'        => 'getCompositeTaxAmount',
        'tax_total'                   => 'getTaxTotal',
        'customer'                    => 'getCustomer',
        'vendor'                      => 'getVendor',
        'vendor_account_number'       => 'getVendorAccountNumber',
        'vendor_invoice_number'       => 'getVendorInvoiceNumber',
        'vendor_invoice_date'         => 'getVendorInvoiceDate',
        'tax_freight_flag'            => 'getTaxFreightFlag',
        'freight_tax_total'           => 'getFreightTaxTotal',
        'freight_cost'                => 'getFreightCost',
        'date_closed'                 => 'getDateClosed',
        '_info'                       => 'getInfo'
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

    const PROCUREMENT_TYPE_PURCHASE = 'Purchase';
    const PROCUREMENT_TYPE_ADJUSTMENT = 'Adjustment';
    const PROCUREMENT_TYPE_TRANSFER = 'Transfer';


    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getProcurementTypeAllowableValues()
    {
        return [
            self::PROCUREMENT_TYPE_PURCHASE,
            self::PROCUREMENT_TYPE_ADJUSTMENT,
            self::PROCUREMENT_TYPE_TRANSFER,
        ];
    }


    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param  mixed[]  $data  Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['location_id'] = isset($data['location_id']) ? $data['location_id'] : null;
        $this->container['department_id'] = isset($data['department_id']) ? $data['department_id'] : null;
        $this->container['procurement_type'] = isset($data['procurement_type']) ? $data['procurement_type'] : null;
        $this->container['purchase_order'] = isset($data['purchase_order']) ? $data['purchase_order'] : null;
        $this->container['purchase_date'] = isset($data['purchase_date']) ? $data['purchase_date'] : null;
        $this->container['tracking_number'] = isset($data['tracking_number']) ? $data['tracking_number'] : null;
        $this->container['billing_terms'] = isset($data['billing_terms']) ? $data['billing_terms'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['avalara_tax_flag'] = isset($data['avalara_tax_flag']) ? $data['avalara_tax_flag'] : null;
        $this->container['item_taxable_flag'] = isset($data['item_taxable_flag']) ? $data['item_taxable_flag'] : null;
        $this->container['purchase_order_taxable_flag'] = isset($data['purchase_order_taxable_flag']) ? $data['purchase_order_taxable_flag'] : null;
        $this->container['state_tax_flag'] = isset($data['state_tax_flag']) ? $data['state_tax_flag'] : null;
        $this->container['state_tax_xref'] = isset($data['state_tax_xref']) ? $data['state_tax_xref'] : null;
        $this->container['state_tax_amount'] = isset($data['state_tax_amount']) ? $data['state_tax_amount'] : null;
        $this->container['county_tax_flag'] = isset($data['county_tax_flag']) ? $data['county_tax_flag'] : null;
        $this->container['county_tax_xref'] = isset($data['county_tax_xref']) ? $data['county_tax_xref'] : null;
        $this->container['county_tax_amount'] = isset($data['county_tax_amount']) ? $data['county_tax_amount'] : null;
        $this->container['city_tax_flag'] = isset($data['city_tax_flag']) ? $data['city_tax_flag'] : null;
        $this->container['city_tax_xref'] = isset($data['city_tax_xref']) ? $data['city_tax_xref'] : null;
        $this->container['city_tax_amount'] = isset($data['city_tax_amount']) ? $data['city_tax_amount'] : null;
        $this->container['country_tax_flag'] = isset($data['country_tax_flag']) ? $data['country_tax_flag'] : null;
        $this->container['country_tax_xref'] = isset($data['country_tax_xref']) ? $data['country_tax_xref'] : null;
        $this->container['country_tax_amount'] = isset($data['country_tax_amount']) ? $data['country_tax_amount'] : null;
        $this->container['composite_tax_flag'] = isset($data['composite_tax_flag']) ? $data['composite_tax_flag'] : null;
        $this->container['composite_tax_xref'] = isset($data['composite_tax_xref']) ? $data['composite_tax_xref'] : null;
        $this->container['composite_tax_amount'] = isset($data['composite_tax_amount']) ? $data['composite_tax_amount'] : null;
        $this->container['tax_total'] = isset($data['tax_total']) ? $data['tax_total'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['vendor'] = isset($data['vendor']) ? $data['vendor'] : null;
        $this->container['vendor_account_number'] = isset($data['vendor_account_number']) ? $data['vendor_account_number'] : null;
        $this->container['vendor_invoice_number'] = isset($data['vendor_invoice_number']) ? $data['vendor_invoice_number'] : null;
        $this->container['vendor_invoice_date'] = isset($data['vendor_invoice_date']) ? $data['vendor_invoice_date'] : null;
        $this->container['tax_freight_flag'] = isset($data['tax_freight_flag']) ? $data['tax_freight_flag'] : null;
        $this->container['freight_tax_total'] = isset($data['freight_tax_total']) ? $data['freight_tax_total'] : null;
        $this->container['freight_cost'] = isset($data['freight_cost']) ? $data['freight_cost'] : null;
        $this->container['date_closed'] = isset($data['date_closed']) ? $data['date_closed'] : null;
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
        $allowed_values = ["Purchase", "Adjustment", "Transfer"];
        if (!in_array($this->container['procurement_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'procurement_type', must be one of #{allowed_values}.";
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
        $allowed_values = ["Purchase", "Adjustment", "Transfer"];
        if (!in_array($this->container['procurement_type'], $allowed_values)) {
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
     * @param  int  $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param  string  $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets location_id
     * @return int
     */
    public function getLocationId()
    {
        return $this->container['location_id'];
    }

    /**
     * Sets location_id
     * @param  int  $location_id
     * @return $this
     */
    public function setLocationId($location_id)
    {
        $this->container['location_id'] = $location_id;

        return $this;
    }

    /**
     * Gets department_id
     * @return int
     */
    public function getDepartmentId()
    {
        return $this->container['department_id'];
    }

    /**
     * Sets department_id
     * @param  int  $department_id
     * @return $this
     */
    public function setDepartmentId($department_id)
    {
        $this->container['department_id'] = $department_id;

        return $this;
    }

    /**
     * Gets procurement_type
     * @return string
     */
    public function getProcurementType()
    {
        return $this->container['procurement_type'];
    }

    /**
     * Sets procurement_type
     * @param  string  $procurement_type
     * @return $this
     */
    public function setProcurementType($procurement_type)
    {
        $allowed_values = array('Purchase', 'Adjustment', 'Transfer');
        if (!is_null($procurement_type) && (!in_array($procurement_type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'procurement_type', must be one of 'Purchase', 'Adjustment', 'Transfer'");
        }
        $this->container['procurement_type'] = $procurement_type;

        return $this;
    }

    /**
     * Gets purchase_order
     * @return \Spinen\ConnectWise\Clients\Finance\Model\PurchaseOrderReference
     */
    public function getPurchaseOrder()
    {
        return $this->container['purchase_order'];
    }

    /**
     * Sets purchase_order
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\PurchaseOrderReference  $purchase_order
     * @return $this
     */
    public function setPurchaseOrder($purchase_order)
    {
        $this->container['purchase_order'] = $purchase_order;

        return $this;
    }

    /**
     * Gets purchase_date
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        return $this->container['purchase_date'];
    }

    /**
     * Sets purchase_date
     * @param  \DateTime  $purchase_date
     * @return $this
     */
    public function setPurchaseDate($purchase_date)
    {
        $this->container['purchase_date'] = $purchase_date;

        return $this;
    }

    /**
     * Gets tracking_number
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->container['tracking_number'];
    }

    /**
     * Sets tracking_number
     * @param  string  $tracking_number
     * @return $this
     */
    public function setTrackingNumber($tracking_number)
    {
        $this->container['tracking_number'] = $tracking_number;

        return $this;
    }

    /**
     * Gets billing_terms
     * @return \Spinen\ConnectWise\Clients\Finance\Model\BillingTermsReference
     */
    public function getBillingTerms()
    {
        return $this->container['billing_terms'];
    }

    /**
     * Sets billing_terms
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\BillingTermsReference  $billing_terms
     * @return $this
     */
    public function setBillingTerms($billing_terms)
    {
        $this->container['billing_terms'] = $billing_terms;

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
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\CurrencyReference  $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * @param  double  $total
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\TaxCodeReference  $tax_code
     * @return $this
     */
    public function setTaxCode($tax_code)
    {
        $this->container['tax_code'] = $tax_code;

        return $this;
    }

    /**
     * Gets avalara_tax_flag
     * @return bool
     */
    public function getAvalaraTaxFlag()
    {
        return $this->container['avalara_tax_flag'];
    }

    /**
     * Sets avalara_tax_flag
     * @param  bool  $avalara_tax_flag  Used to determine if Avalara tax is enabled.
     * @return $this
     */
    public function setAvalaraTaxFlag($avalara_tax_flag)
    {
        $this->container['avalara_tax_flag'] = $avalara_tax_flag;

        return $this;
    }

    /**
     * Gets item_taxable_flag
     * @return bool
     */
    public function getItemTaxableFlag()
    {
        return $this->container['item_taxable_flag'];
    }

    /**
     * Sets item_taxable_flag
     * @param  bool  $item_taxable_flag
     * @return $this
     */
    public function setItemTaxableFlag($item_taxable_flag)
    {
        $this->container['item_taxable_flag'] = $item_taxable_flag;

        return $this;
    }

    /**
     * Gets purchase_order_taxable_flag
     * @return bool
     */
    public function getPurchaseOrderTaxableFlag()
    {
        return $this->container['purchase_order_taxable_flag'];
    }

    /**
     * Sets purchase_order_taxable_flag
     * @param  bool  $purchase_order_taxable_flag
     * @return $this
     */
    public function setPurchaseOrderTaxableFlag($purchase_order_taxable_flag)
    {
        $this->container['purchase_order_taxable_flag'] = $purchase_order_taxable_flag;

        return $this;
    }

    /**
     * Gets state_tax_flag
     * @return bool
     */
    public function getStateTaxFlag()
    {
        return $this->container['state_tax_flag'];
    }

    /**
     * Sets state_tax_flag
     * @param  bool  $state_tax_flag  Set to true if transaction is taxable at the state level.
     * @return $this
     */
    public function setStateTaxFlag($state_tax_flag)
    {
        $this->container['state_tax_flag'] = $state_tax_flag;

        return $this;
    }

    /**
     * Gets state_tax_xref
     * @return string
     */
    public function getStateTaxXref()
    {
        return $this->container['state_tax_xref'];
    }

    /**
     * Sets state_tax_xref
     * @param  string  $state_tax_xref
     * @return $this
     */
    public function setStateTaxXref($state_tax_xref)
    {
        $this->container['state_tax_xref'] = $state_tax_xref;

        return $this;
    }

    /**
     * Gets state_tax_amount
     * @return double
     */
    public function getStateTaxAmount()
    {
        return $this->container['state_tax_amount'];
    }

    /**
     * Sets state_tax_amount
     * @param  double  $state_tax_amount
     * @return $this
     */
    public function setStateTaxAmount($state_tax_amount)
    {
        $this->container['state_tax_amount'] = $state_tax_amount;

        return $this;
    }

    /**
     * Gets county_tax_flag
     * @return bool
     */
    public function getCountyTaxFlag()
    {
        return $this->container['county_tax_flag'];
    }

    /**
     * Sets county_tax_flag
     * @param  bool  $county_tax_flag  Set to true if transaction is taxable at the county level.
     * @return $this
     */
    public function setCountyTaxFlag($county_tax_flag)
    {
        $this->container['county_tax_flag'] = $county_tax_flag;

        return $this;
    }

    /**
     * Gets county_tax_xref
     * @return string
     */
    public function getCountyTaxXref()
    {
        return $this->container['county_tax_xref'];
    }

    /**
     * Sets county_tax_xref
     * @param  string  $county_tax_xref
     * @return $this
     */
    public function setCountyTaxXref($county_tax_xref)
    {
        $this->container['county_tax_xref'] = $county_tax_xref;

        return $this;
    }

    /**
     * Gets county_tax_amount
     * @return double
     */
    public function getCountyTaxAmount()
    {
        return $this->container['county_tax_amount'];
    }

    /**
     * Sets county_tax_amount
     * @param  double  $county_tax_amount
     * @return $this
     */
    public function setCountyTaxAmount($county_tax_amount)
    {
        $this->container['county_tax_amount'] = $county_tax_amount;

        return $this;
    }

    /**
     * Gets city_tax_flag
     * @return bool
     */
    public function getCityTaxFlag()
    {
        return $this->container['city_tax_flag'];
    }

    /**
     * Sets city_tax_flag
     * @param  bool  $city_tax_flag  Set to true if transaction is taxable at the city level.
     * @return $this
     */
    public function setCityTaxFlag($city_tax_flag)
    {
        $this->container['city_tax_flag'] = $city_tax_flag;

        return $this;
    }

    /**
     * Gets city_tax_xref
     * @return string
     */
    public function getCityTaxXref()
    {
        return $this->container['city_tax_xref'];
    }

    /**
     * Sets city_tax_xref
     * @param  string  $city_tax_xref
     * @return $this
     */
    public function setCityTaxXref($city_tax_xref)
    {
        $this->container['city_tax_xref'] = $city_tax_xref;

        return $this;
    }

    /**
     * Gets city_tax_amount
     * @return double
     */
    public function getCityTaxAmount()
    {
        return $this->container['city_tax_amount'];
    }

    /**
     * Sets city_tax_amount
     * @param  double  $city_tax_amount
     * @return $this
     */
    public function setCityTaxAmount($city_tax_amount)
    {
        $this->container['city_tax_amount'] = $city_tax_amount;

        return $this;
    }

    /**
     * Gets country_tax_flag
     * @return bool
     */
    public function getCountryTaxFlag()
    {
        return $this->container['country_tax_flag'];
    }

    /**
     * Sets country_tax_flag
     * @param  bool  $country_tax_flag  Set to true if transaction is taxable at the country level.
     * @return $this
     */
    public function setCountryTaxFlag($country_tax_flag)
    {
        $this->container['country_tax_flag'] = $country_tax_flag;

        return $this;
    }

    /**
     * Gets country_tax_xref
     * @return string
     */
    public function getCountryTaxXref()
    {
        return $this->container['country_tax_xref'];
    }

    /**
     * Sets country_tax_xref
     * @param  string  $country_tax_xref
     * @return $this
     */
    public function setCountryTaxXref($country_tax_xref)
    {
        $this->container['country_tax_xref'] = $country_tax_xref;

        return $this;
    }

    /**
     * Gets country_tax_amount
     * @return double
     */
    public function getCountryTaxAmount()
    {
        return $this->container['country_tax_amount'];
    }

    /**
     * Sets country_tax_amount
     * @param  double  $country_tax_amount
     * @return $this
     */
    public function setCountryTaxAmount($country_tax_amount)
    {
        $this->container['country_tax_amount'] = $country_tax_amount;

        return $this;
    }

    /**
     * Gets composite_tax_flag
     * @return bool
     */
    public function getCompositeTaxFlag()
    {
        return $this->container['composite_tax_flag'];
    }

    /**
     * Sets composite_tax_flag
     * @param  bool  $composite_tax_flag  Set to true if transaction is taxable at the composite level.
     * @return $this
     */
    public function setCompositeTaxFlag($composite_tax_flag)
    {
        $this->container['composite_tax_flag'] = $composite_tax_flag;

        return $this;
    }

    /**
     * Gets composite_tax_xref
     * @return string
     */
    public function getCompositeTaxXref()
    {
        return $this->container['composite_tax_xref'];
    }

    /**
     * Sets composite_tax_xref
     * @param  string  $composite_tax_xref
     * @return $this
     */
    public function setCompositeTaxXref($composite_tax_xref)
    {
        $this->container['composite_tax_xref'] = $composite_tax_xref;

        return $this;
    }

    /**
     * Gets composite_tax_amount
     * @return double
     */
    public function getCompositeTaxAmount()
    {
        return $this->container['composite_tax_amount'];
    }

    /**
     * Sets composite_tax_amount
     * @param  double  $composite_tax_amount
     * @return $this
     */
    public function setCompositeTaxAmount($composite_tax_amount)
    {
        $this->container['composite_tax_amount'] = $composite_tax_amount;

        return $this;
    }

    /**
     * Gets tax_total
     * @return double
     */
    public function getTaxTotal()
    {
        return $this->container['tax_total'];
    }

    /**
     * Sets tax_total
     * @param  double  $tax_total
     * @return $this
     */
    public function setTaxTotal($tax_total)
    {
        $this->container['tax_total'] = $tax_total;

        return $this;
    }

    /**
     * Gets customer
     * @return \Spinen\ConnectWise\Clients\Finance\Model\CompanyReference
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\CompanyReference  $customer
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets vendor
     * @return \Spinen\ConnectWise\Clients\Finance\Model\CompanyReference
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\CompanyReference  $vendor
     * @return $this
     */
    public function setVendor($vendor)
    {
        $this->container['vendor'] = $vendor;

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
     * @param  string  $vendor_account_number
     * @return $this
     */
    public function setVendorAccountNumber($vendor_account_number)
    {
        $this->container['vendor_account_number'] = $vendor_account_number;

        return $this;
    }

    /**
     * Gets vendor_invoice_number
     * @return string
     */
    public function getVendorInvoiceNumber()
    {
        return $this->container['vendor_invoice_number'];
    }

    /**
     * Sets vendor_invoice_number
     * @param  string  $vendor_invoice_number
     * @return $this
     */
    public function setVendorInvoiceNumber($vendor_invoice_number)
    {
        $this->container['vendor_invoice_number'] = $vendor_invoice_number;

        return $this;
    }

    /**
     * Gets vendor_invoice_date
     * @return \DateTime
     */
    public function getVendorInvoiceDate()
    {
        return $this->container['vendor_invoice_date'];
    }

    /**
     * Sets vendor_invoice_date
     * @param  \DateTime  $vendor_invoice_date
     * @return $this
     */
    public function setVendorInvoiceDate($vendor_invoice_date)
    {
        $this->container['vendor_invoice_date'] = $vendor_invoice_date;

        return $this;
    }

    /**
     * Gets tax_freight_flag
     * @return bool
     */
    public function getTaxFreightFlag()
    {
        return $this->container['tax_freight_flag'];
    }

    /**
     * Sets tax_freight_flag
     * @param  bool  $tax_freight_flag
     * @return $this
     */
    public function setTaxFreightFlag($tax_freight_flag)
    {
        $this->container['tax_freight_flag'] = $tax_freight_flag;

        return $this;
    }

    /**
     * Gets freight_tax_total
     * @return double
     */
    public function getFreightTaxTotal()
    {
        return $this->container['freight_tax_total'];
    }

    /**
     * Sets freight_tax_total
     * @param  double  $freight_tax_total
     * @return $this
     */
    public function setFreightTaxTotal($freight_tax_total)
    {
        $this->container['freight_tax_total'] = $freight_tax_total;

        return $this;
    }

    /**
     * Gets freight_cost
     * @return double
     */
    public function getFreightCost()
    {
        return $this->container['freight_cost'];
    }

    /**
     * Sets freight_cost
     * @param  double  $freight_cost
     * @return $this
     */
    public function setFreightCost($freight_cost)
    {
        $this->container['freight_cost'] = $freight_cost;

        return $this;
    }

    /**
     * Gets date_closed
     * @return \DateTime
     */
    public function getDateClosed()
    {
        return $this->container['date_closed'];
    }

    /**
     * Sets date_closed
     * @param  \DateTime  $date_closed
     * @return $this
     */
    public function setDateClosed($date_closed)
    {
        $this->container['date_closed'] = $date_closed;

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
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\Metadata  $_info  Metadata of the entity
     * @return $this
     */
    public function setInfo($_info)
    {
        $this->container['_info'] = $_info;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer  $offset  Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer  $offset  Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer  $offset  Offset
     * @param  mixed  $value  Value to be set
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
     * @param  integer  $offset  Offset
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
            return json_encode(\Spinen\ConnectWise\Clients\Finance\ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT);
        }

        return json_encode(\Spinen\ConnectWise\Clients\Finance\ObjectSerializer::sanitizeForSerialization($this));
    }
}


