<?php
/**
 * AgreementSite
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
 * AgreementSite Class Doc Comment
 *
 * @category    Class
 */

/**
 * @package     Spinen\ConnectWise\Clients\Finance
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class AgreementSite implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'AgreementSite';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'id'           => 'int',
        'company'      => '\Spinen\ConnectWise\Clients\Finance\Model\CompanyReference',
        'site'         => '\Spinen\ConnectWise\Clients\Finance\Model\SiteReference',
        'agreement_id' => 'int',
        '_info'        => '\Spinen\ConnectWise\Clients\Finance\Model\Metadata'
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
        'id'           => 'id',
        'company'      => 'company',
        'site'         => 'site',
        'agreement_id' => 'agreementId',
        '_info'        => '_info'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id'           => 'setId',
        'company'      => 'setCompany',
        'site'         => 'setSite',
        'agreement_id' => 'setAgreementId',
        '_info'        => 'setInfo'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id'           => 'getId',
        'company'      => 'getCompany',
        'site'         => 'getSite',
        'agreement_id' => 'getAgreementId',
        '_info'        => 'getInfo'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['site'] = isset($data['site']) ? $data['site'] : null;
        $this->container['agreement_id'] = isset($data['agreement_id']) ? $data['agreement_id'] : null;
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
        if ($this->container['company'] === null) {
            $invalid_properties[] = "'company' can't be null";
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
        if ($this->container['company'] === null) {
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
     * Gets agreement_id
     * @return int
     */
    public function getAgreementId()
    {
        return $this->container['agreement_id'];
    }

    /**
     * Sets agreement_id
     * @param  int  $agreement_id
     * @return $this
     */
    public function setAgreementId($agreement_id)
    {
        $this->container['agreement_id'] = $agreement_id;

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


