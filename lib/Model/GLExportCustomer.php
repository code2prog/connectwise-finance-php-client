<?php
/**
 * GLExportCustomer
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
 * GLExportCustomer Class Doc Comment
 *
 * @category    Class
 */

/**
 * @package     Spinen\ConnectWise\Clients\Finance
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GLExportCustomer implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'GLExportCustomer';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'company'                   => '\Spinen\ConnectWise\Clients\Finance\Model\CompanyReference',
        'company_type'              => '\Spinen\ConnectWise\Clients\Finance\Model\CompanyTypeReference',
        'contact'                   => '\Spinen\ConnectWise\Clients\Finance\Model\ContactReference',
        'site'                      => '\Spinen\ConnectWise\Clients\Finance\Model\SiteReference',
        'account_number'            => 'string',
        'billing_terms'             => '\Spinen\ConnectWise\Clients\Finance\Model\BillingTermsReference',
        'billing_terms_xref'        => 'string',
        'due_days'                  => 'int',
        'taxable'                   => 'bool',
        'tax_code'                  => '\Spinen\ConnectWise\Clients\Finance\Model\TaxCodeReference',
        'currency'                  => '\Spinen\ConnectWise\Clients\Finance\Model\CurrencyReference',
        'state_tax_xref'            => 'string',
        'county_tax_xref'           => 'string',
        'city_tax_xref'             => 'string',
        'country_tax_xref'          => 'string',
        'composite_tax_xref'        => 'string',
        'state_tax_rate'            => 'double',
        'county_tax_rate'           => 'double',
        'city_tax_rate'             => 'double',
        'country_tax_rate'          => 'double',
        'composite_tax_rate'        => 'double',
        'tax_group_rate'            => 'double',
        'tax_agency_xref'           => 'string',
        'state_tax_agency_xref'     => 'string',
        'county_tax_agency_xref'    => 'string',
        'city_tax_agency_xref'      => 'string',
        'country_tax_agency_xref'   => 'string',
        'composite_tax_agency_xref' => 'string'
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
        'company'                   => 'company',
        'company_type'              => 'companyType',
        'contact'                   => 'contact',
        'site'                      => 'site',
        'account_number'            => 'accountNumber',
        'billing_terms'             => 'billingTerms',
        'billing_terms_xref'        => 'billingTermsXref',
        'due_days'                  => 'dueDays',
        'taxable'                   => 'taxable',
        'tax_code'                  => 'taxCode',
        'currency'                  => 'currency',
        'state_tax_xref'            => 'stateTaxXref',
        'county_tax_xref'           => 'countyTaxXref',
        'city_tax_xref'             => 'cityTaxXref',
        'country_tax_xref'          => 'countryTaxXref',
        'composite_tax_xref'        => 'compositeTaxXref',
        'state_tax_rate'            => 'stateTaxRate',
        'county_tax_rate'           => 'countyTaxRate',
        'city_tax_rate'             => 'cityTaxRate',
        'country_tax_rate'          => 'countryTaxRate',
        'composite_tax_rate'        => 'compositeTaxRate',
        'tax_group_rate'            => 'taxGroupRate',
        'tax_agency_xref'           => 'taxAgencyXref',
        'state_tax_agency_xref'     => 'stateTaxAgencyXref',
        'county_tax_agency_xref'    => 'countyTaxAgencyXref',
        'city_tax_agency_xref'      => 'cityTaxAgencyXref',
        'country_tax_agency_xref'   => 'countryTaxAgencyXref',
        'composite_tax_agency_xref' => 'compositeTaxAgencyXref'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'company'                   => 'setCompany',
        'company_type'              => 'setCompanyType',
        'contact'                   => 'setContact',
        'site'                      => 'setSite',
        'account_number'            => 'setAccountNumber',
        'billing_terms'             => 'setBillingTerms',
        'billing_terms_xref'        => 'setBillingTermsXref',
        'due_days'                  => 'setDueDays',
        'taxable'                   => 'setTaxable',
        'tax_code'                  => 'setTaxCode',
        'currency'                  => 'setCurrency',
        'state_tax_xref'            => 'setStateTaxXref',
        'county_tax_xref'           => 'setCountyTaxXref',
        'city_tax_xref'             => 'setCityTaxXref',
        'country_tax_xref'          => 'setCountryTaxXref',
        'composite_tax_xref'        => 'setCompositeTaxXref',
        'state_tax_rate'            => 'setStateTaxRate',
        'county_tax_rate'           => 'setCountyTaxRate',
        'city_tax_rate'             => 'setCityTaxRate',
        'country_tax_rate'          => 'setCountryTaxRate',
        'composite_tax_rate'        => 'setCompositeTaxRate',
        'tax_group_rate'            => 'setTaxGroupRate',
        'tax_agency_xref'           => 'setTaxAgencyXref',
        'state_tax_agency_xref'     => 'setStateTaxAgencyXref',
        'county_tax_agency_xref'    => 'setCountyTaxAgencyXref',
        'city_tax_agency_xref'      => 'setCityTaxAgencyXref',
        'country_tax_agency_xref'   => 'setCountryTaxAgencyXref',
        'composite_tax_agency_xref' => 'setCompositeTaxAgencyXref'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'company'                   => 'getCompany',
        'company_type'              => 'getCompanyType',
        'contact'                   => 'getContact',
        'site'                      => 'getSite',
        'account_number'            => 'getAccountNumber',
        'billing_terms'             => 'getBillingTerms',
        'billing_terms_xref'        => 'getBillingTermsXref',
        'due_days'                  => 'getDueDays',
        'taxable'                   => 'getTaxable',
        'tax_code'                  => 'getTaxCode',
        'currency'                  => 'getCurrency',
        'state_tax_xref'            => 'getStateTaxXref',
        'county_tax_xref'           => 'getCountyTaxXref',
        'city_tax_xref'             => 'getCityTaxXref',
        'country_tax_xref'          => 'getCountryTaxXref',
        'composite_tax_xref'        => 'getCompositeTaxXref',
        'state_tax_rate'            => 'getStateTaxRate',
        'county_tax_rate'           => 'getCountyTaxRate',
        'city_tax_rate'             => 'getCityTaxRate',
        'country_tax_rate'          => 'getCountryTaxRate',
        'composite_tax_rate'        => 'getCompositeTaxRate',
        'tax_group_rate'            => 'getTaxGroupRate',
        'tax_agency_xref'           => 'getTaxAgencyXref',
        'state_tax_agency_xref'     => 'getStateTaxAgencyXref',
        'county_tax_agency_xref'    => 'getCountyTaxAgencyXref',
        'city_tax_agency_xref'      => 'getCityTaxAgencyXref',
        'country_tax_agency_xref'   => 'getCountryTaxAgencyXref',
        'composite_tax_agency_xref' => 'getCompositeTaxAgencyXref'
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
     * @param  mixed[]  $data  Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['company_type'] = isset($data['company_type']) ? $data['company_type'] : null;
        $this->container['contact'] = isset($data['contact']) ? $data['contact'] : null;
        $this->container['site'] = isset($data['site']) ? $data['site'] : null;
        $this->container['account_number'] = isset($data['account_number']) ? $data['account_number'] : null;
        $this->container['billing_terms'] = isset($data['billing_terms']) ? $data['billing_terms'] : null;
        $this->container['billing_terms_xref'] = isset($data['billing_terms_xref']) ? $data['billing_terms_xref'] : null;
        $this->container['due_days'] = isset($data['due_days']) ? $data['due_days'] : null;
        $this->container['taxable'] = isset($data['taxable']) ? $data['taxable'] : null;
        $this->container['tax_code'] = isset($data['tax_code']) ? $data['tax_code'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['state_tax_xref'] = isset($data['state_tax_xref']) ? $data['state_tax_xref'] : null;
        $this->container['county_tax_xref'] = isset($data['county_tax_xref']) ? $data['county_tax_xref'] : null;
        $this->container['city_tax_xref'] = isset($data['city_tax_xref']) ? $data['city_tax_xref'] : null;
        $this->container['country_tax_xref'] = isset($data['country_tax_xref']) ? $data['country_tax_xref'] : null;
        $this->container['composite_tax_xref'] = isset($data['composite_tax_xref']) ? $data['composite_tax_xref'] : null;
        $this->container['state_tax_rate'] = isset($data['state_tax_rate']) ? $data['state_tax_rate'] : null;
        $this->container['county_tax_rate'] = isset($data['county_tax_rate']) ? $data['county_tax_rate'] : null;
        $this->container['city_tax_rate'] = isset($data['city_tax_rate']) ? $data['city_tax_rate'] : null;
        $this->container['country_tax_rate'] = isset($data['country_tax_rate']) ? $data['country_tax_rate'] : null;
        $this->container['composite_tax_rate'] = isset($data['composite_tax_rate']) ? $data['composite_tax_rate'] : null;
        $this->container['tax_group_rate'] = isset($data['tax_group_rate']) ? $data['tax_group_rate'] : null;
        $this->container['tax_agency_xref'] = isset($data['tax_agency_xref']) ? $data['tax_agency_xref'] : null;
        $this->container['state_tax_agency_xref'] = isset($data['state_tax_agency_xref']) ? $data['state_tax_agency_xref'] : null;
        $this->container['county_tax_agency_xref'] = isset($data['county_tax_agency_xref']) ? $data['county_tax_agency_xref'] : null;
        $this->container['city_tax_agency_xref'] = isset($data['city_tax_agency_xref']) ? $data['city_tax_agency_xref'] : null;
        $this->container['country_tax_agency_xref'] = isset($data['country_tax_agency_xref']) ? $data['country_tax_agency_xref'] : null;
        $this->container['composite_tax_agency_xref'] = isset($data['composite_tax_agency_xref']) ? $data['composite_tax_agency_xref'] : null;
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
     * Gets company
     * @return \Spinen\ConnectWise\Clients\Finance\Model\CompanyReference
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\CompanyReference  $company
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets company_type
     * @return \Spinen\ConnectWise\Clients\Finance\Model\CompanyTypeReference
     */
    public function getCompanyType()
    {
        return $this->container['company_type'];
    }

    /**
     * Sets company_type
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\CompanyTypeReference  $company_type
     * @return $this
     */
    public function setCompanyType($company_type)
    {
        $this->container['company_type'] = $company_type;

        return $this;
    }

    /**
     * Gets contact
     * @return \Spinen\ConnectWise\Clients\Finance\Model\ContactReference
     */
    public function getContact()
    {
        return $this->container['contact'];
    }

    /**
     * Sets contact
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\ContactReference  $contact
     * @return $this
     */
    public function setContact($contact)
    {
        $this->container['contact'] = $contact;

        return $this;
    }

    /**
     * Gets site
     * @return \Spinen\ConnectWise\Clients\Finance\Model\SiteReference
     */
    public function getSite()
    {
        return $this->container['site'];
    }

    /**
     * Sets site
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\SiteReference  $site
     * @return $this
     */
    public function setSite($site)
    {
        $this->container['site'] = $site;

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
     * @param  string  $account_number
     * @return $this
     */
    public function setAccountNumber($account_number)
    {
        $this->container['account_number'] = $account_number;

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
     * Gets billing_terms_xref
     * @return string
     */
    public function getBillingTermsXref()
    {
        return $this->container['billing_terms_xref'];
    }

    /**
     * Sets billing_terms_xref
     * @param  string  $billing_terms_xref
     * @return $this
     */
    public function setBillingTermsXref($billing_terms_xref)
    {
        $this->container['billing_terms_xref'] = $billing_terms_xref;

        return $this;
    }

    /**
     * Gets due_days
     * @return int
     */
    public function getDueDays()
    {
        return $this->container['due_days'];
    }

    /**
     * Sets due_days
     * @param  int  $due_days
     * @return $this
     */
    public function setDueDays($due_days)
    {
        $this->container['due_days'] = $due_days;

        return $this;
    }

    /**
     * Gets taxable
     * @return bool
     */
    public function getTaxable()
    {
        return $this->container['taxable'];
    }

    /**
     * Sets taxable
     * @param  bool  $taxable
     * @return $this
     */
    public function setTaxable($taxable)
    {
        $this->container['taxable'] = $taxable;

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
     * Gets state_tax_rate
     * @return double
     */
    public function getStateTaxRate()
    {
        return $this->container['state_tax_rate'];
    }

    /**
     * Sets state_tax_rate
     * @param  double  $state_tax_rate
     * @return $this
     */
    public function setStateTaxRate($state_tax_rate)
    {
        $this->container['state_tax_rate'] = $state_tax_rate;

        return $this;
    }

    /**
     * Gets county_tax_rate
     * @return double
     */
    public function getCountyTaxRate()
    {
        return $this->container['county_tax_rate'];
    }

    /**
     * Sets county_tax_rate
     * @param  double  $county_tax_rate
     * @return $this
     */
    public function setCountyTaxRate($county_tax_rate)
    {
        $this->container['county_tax_rate'] = $county_tax_rate;

        return $this;
    }

    /**
     * Gets city_tax_rate
     * @return double
     */
    public function getCityTaxRate()
    {
        return $this->container['city_tax_rate'];
    }

    /**
     * Sets city_tax_rate
     * @param  double  $city_tax_rate
     * @return $this
     */
    public function setCityTaxRate($city_tax_rate)
    {
        $this->container['city_tax_rate'] = $city_tax_rate;

        return $this;
    }

    /**
     * Gets country_tax_rate
     * @return double
     */
    public function getCountryTaxRate()
    {
        return $this->container['country_tax_rate'];
    }

    /**
     * Sets country_tax_rate
     * @param  double  $country_tax_rate
     * @return $this
     */
    public function setCountryTaxRate($country_tax_rate)
    {
        $this->container['country_tax_rate'] = $country_tax_rate;

        return $this;
    }

    /**
     * Gets composite_tax_rate
     * @return double
     */
    public function getCompositeTaxRate()
    {
        return $this->container['composite_tax_rate'];
    }

    /**
     * Sets composite_tax_rate
     * @param  double  $composite_tax_rate
     * @return $this
     */
    public function setCompositeTaxRate($composite_tax_rate)
    {
        $this->container['composite_tax_rate'] = $composite_tax_rate;

        return $this;
    }

    /**
     * Gets tax_group_rate
     * @return double
     */
    public function getTaxGroupRate()
    {
        return $this->container['tax_group_rate'];
    }

    /**
     * Sets tax_group_rate
     * @param  double  $tax_group_rate
     * @return $this
     */
    public function setTaxGroupRate($tax_group_rate)
    {
        $this->container['tax_group_rate'] = $tax_group_rate;

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
     * @param  string  $tax_agency_xref
     * @return $this
     */
    public function setTaxAgencyXref($tax_agency_xref)
    {
        $this->container['tax_agency_xref'] = $tax_agency_xref;

        return $this;
    }

    /**
     * Gets state_tax_agency_xref
     * @return string
     */
    public function getStateTaxAgencyXref()
    {
        return $this->container['state_tax_agency_xref'];
    }

    /**
     * Sets state_tax_agency_xref
     * @param  string  $state_tax_agency_xref
     * @return $this
     */
    public function setStateTaxAgencyXref($state_tax_agency_xref)
    {
        $this->container['state_tax_agency_xref'] = $state_tax_agency_xref;

        return $this;
    }

    /**
     * Gets county_tax_agency_xref
     * @return string
     */
    public function getCountyTaxAgencyXref()
    {
        return $this->container['county_tax_agency_xref'];
    }

    /**
     * Sets county_tax_agency_xref
     * @param  string  $county_tax_agency_xref
     * @return $this
     */
    public function setCountyTaxAgencyXref($county_tax_agency_xref)
    {
        $this->container['county_tax_agency_xref'] = $county_tax_agency_xref;

        return $this;
    }

    /**
     * Gets city_tax_agency_xref
     * @return string
     */
    public function getCityTaxAgencyXref()
    {
        return $this->container['city_tax_agency_xref'];
    }

    /**
     * Sets city_tax_agency_xref
     * @param  string  $city_tax_agency_xref
     * @return $this
     */
    public function setCityTaxAgencyXref($city_tax_agency_xref)
    {
        $this->container['city_tax_agency_xref'] = $city_tax_agency_xref;

        return $this;
    }

    /**
     * Gets country_tax_agency_xref
     * @return string
     */
    public function getCountryTaxAgencyXref()
    {
        return $this->container['country_tax_agency_xref'];
    }

    /**
     * Sets country_tax_agency_xref
     * @param  string  $country_tax_agency_xref
     * @return $this
     */
    public function setCountryTaxAgencyXref($country_tax_agency_xref)
    {
        $this->container['country_tax_agency_xref'] = $country_tax_agency_xref;

        return $this;
    }

    /**
     * Gets composite_tax_agency_xref
     * @return string
     */
    public function getCompositeTaxAgencyXref()
    {
        return $this->container['composite_tax_agency_xref'];
    }

    /**
     * Sets composite_tax_agency_xref
     * @param  string  $composite_tax_agency_xref
     * @return $this
     */
    public function setCompositeTaxAgencyXref($composite_tax_agency_xref)
    {
        $this->container['composite_tax_agency_xref'] = $composite_tax_agency_xref;

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


