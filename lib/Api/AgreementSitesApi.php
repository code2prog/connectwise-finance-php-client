<?php
/**
 * AgreementSitesApi
 * PHP version 5
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Finance
 * @author   Swagger Codegen team
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

namespace Spinen\ConnectWise\Clients\Finance\Api;

use \Spinen\ConnectWise\Clients\Finance\ApiClient;
use \Spinen\ConnectWise\Clients\Finance\ApiException;
use \Spinen\ConnectWise\Clients\Finance\Configuration;
use \Spinen\ConnectWise\Clients\Finance\ObjectSerializer;

/**
 * AgreementSitesApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Finance
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgreementSitesApi
{
    /**
     * API Client
     *
     * @var \Spinen\ConnectWise\Clients\Finance\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \Spinen\ConnectWise\Clients\Finance\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\Spinen\ConnectWise\Clients\Finance\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \Spinen\ConnectWise\Clients\Finance\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \Spinen\ConnectWise\Clients\Finance\ApiClient $apiClient set the API client
     *
     * @return AgreementSitesApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Finance\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation financeAgreementsIdSitesCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Finance\Model\Count
     */
    public function financeAgreementsIdSitesCountGet($id, $conditions = null)
    {
        list($response) = $this->financeAgreementsIdSitesCountGetWithHttpInfo($id, $conditions);
        return $response;
    }

    /**
     * Operation financeAgreementsIdSitesCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Finance\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdSitesCountGetWithHttpInfo($id, $conditions = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdSitesCountGet');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/sites/count";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Finance\Model\Count',
                '/finance/agreements/{id}/sites/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Finance\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsIdSitesGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite[]
     */
    public function financeAgreementsIdSitesGet($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->financeAgreementsIdSitesGetWithHttpInfo($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation financeAgreementsIdSitesGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @param string $order_by  (optional)
     * @param string $childconditions  (optional)
     * @param string $customfieldconditions  (optional)
     * @param int $page  (optional)
     * @param int $page_size  (optional)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite[], HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdSitesGetWithHttpInfo($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdSitesGet');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/sites";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // query params
        if ($conditions !== null) {
            $queryParams['conditions'] = $this->apiClient->getSerializer()->toQueryValue($conditions);
        }
        // query params
        if ($order_by !== null) {
            $queryParams['orderBy'] = $this->apiClient->getSerializer()->toQueryValue($order_by);
        }
        // query params
        if ($childconditions !== null) {
            $queryParams['childconditions'] = $this->apiClient->getSerializer()->toQueryValue($childconditions);
        }
        // query params
        if ($customfieldconditions !== null) {
            $queryParams['customfieldconditions'] = $this->apiClient->getSerializer()->toQueryValue($customfieldconditions);
        }
        // query params
        if ($page !== null) {
            $queryParams['page'] = $this->apiClient->getSerializer()->toQueryValue($page);
        }
        // query params
        if ($page_size !== null) {
            $queryParams['pageSize'] = $this->apiClient->getSerializer()->toQueryValue($page_size);
        }
        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite[]',
                '/finance/agreements/{id}/sites'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsIdSitesPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite $site  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite
     */
    public function financeAgreementsIdSitesPost($id, $site)
    {
        list($response) = $this->financeAgreementsIdSitesPostWithHttpInfo($id, $site);
        return $response;
    }

    /**
     * Operation financeAgreementsIdSitesPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite $site  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite, HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdSitesPostWithHttpInfo($id, $site)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdSitesPost');
        }
        // verify the required parameter 'site' is set
        if ($site === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site when calling financeAgreementsIdSitesPost');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/sites";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($site)) {
            $_tempBody = $site;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite',
                '/finance/agreements/{id}/sites'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsIdSitesSiteIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $site_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return void
     */
    public function financeAgreementsIdSitesSiteIdDelete($id, $site_id)
    {
        list($response) = $this->financeAgreementsIdSitesSiteIdDeleteWithHttpInfo($id, $site_id);
        return $response;
    }

    /**
     * Operation financeAgreementsIdSitesSiteIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $site_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdSitesSiteIdDeleteWithHttpInfo($id, $site_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdSitesSiteIdDelete');
        }
        // verify the required parameter 'site_id' is set
        if ($site_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_id when calling financeAgreementsIdSitesSiteIdDelete');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/sites/{siteId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept([]);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($site_id !== null) {
            $resourcePath = str_replace(
                "{" . "siteId" . "}",
                $this->apiClient->getSerializer()->toPathValue($site_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'DELETE',
                $queryParams,
                $httpBody,
                $headerParams,
                null,
                '/finance/agreements/{id}/sites/{siteId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsIdSitesSiteIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $site_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite
     */
    public function financeAgreementsIdSitesSiteIdGet($id, $site_id)
    {
        list($response) = $this->financeAgreementsIdSitesSiteIdGetWithHttpInfo($id, $site_id);
        return $response;
    }

    /**
     * Operation financeAgreementsIdSitesSiteIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $site_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite, HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdSitesSiteIdGetWithHttpInfo($id, $site_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdSitesSiteIdGet');
        }
        // verify the required parameter 'site_id' is set
        if ($site_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_id when calling financeAgreementsIdSitesSiteIdGet');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/sites/{siteId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType([]);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($site_id !== null) {
            $resourcePath = str_replace(
                "{" . "siteId" . "}",
                $this->apiClient->getSerializer()->toPathValue($site_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite',
                '/finance/agreements/{id}/sites/{siteId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsIdSitesSiteIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $site_id  (required)
     * @param \Spinen\ConnectWise\Clients\Finance\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite
     */
    public function financeAgreementsIdSitesSiteIdPatch($id, $site_id, $operations)
    {
        list($response) = $this->financeAgreementsIdSitesSiteIdPatchWithHttpInfo($id, $site_id, $operations);
        return $response;
    }

    /**
     * Operation financeAgreementsIdSitesSiteIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $site_id  (required)
     * @param \Spinen\ConnectWise\Clients\Finance\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite, HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdSitesSiteIdPatchWithHttpInfo($id, $site_id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdSitesSiteIdPatch');
        }
        // verify the required parameter 'site_id' is set
        if ($site_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_id when calling financeAgreementsIdSitesSiteIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling financeAgreementsIdSitesSiteIdPatch');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/sites/{siteId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($site_id !== null) {
            $resourcePath = str_replace(
                "{" . "siteId" . "}",
                $this->apiClient->getSerializer()->toPathValue($site_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($operations)) {
            $_tempBody = $operations;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite',
                '/finance/agreements/{id}/sites/{siteId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsIdSitesSiteIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $site_id  (required)
     * @param \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite $site  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite
     */
    public function financeAgreementsIdSitesSiteIdPut($id, $site_id, $site)
    {
        list($response) = $this->financeAgreementsIdSitesSiteIdPutWithHttpInfo($id, $site_id, $site);
        return $response;
    }

    /**
     * Operation financeAgreementsIdSitesSiteIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $site_id  (required)
     * @param \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite $site  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Finance\Model\AgreementSite, HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdSitesSiteIdPutWithHttpInfo($id, $site_id, $site)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdSitesSiteIdPut');
        }
        // verify the required parameter 'site_id' is set
        if ($site_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site_id when calling financeAgreementsIdSitesSiteIdPut');
        }
        // verify the required parameter 'site' is set
        if ($site === null) {
            throw new \InvalidArgumentException('Missing the required parameter $site when calling financeAgreementsIdSitesSiteIdPut');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/sites/{siteId}";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                "{" . "id" . "}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // path params
        if ($site_id !== null) {
            $resourcePath = str_replace(
                "{" . "siteId" . "}",
                $this->apiClient->getSerializer()->toPathValue($site_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($site)) {
            $_tempBody = $site;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite',
                '/finance/agreements/{id}/sites/{siteId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Model\AgreementSite', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
