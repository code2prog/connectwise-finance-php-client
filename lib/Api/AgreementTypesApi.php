<?php
/**
 * AgreementTypesApi
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
 * AgreementTypesApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Finance
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgreementTypesApi
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
     * @param  \Spinen\ConnectWise\Clients\Finance\ApiClient|null  $apiClient  The api client to use
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
     * @param  \Spinen\ConnectWise\Clients\Finance\ApiClient  $apiClient  set the API client
     *
     * @return AgreementTypesApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Finance\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation financeAgreementsTypesCountGet
     *
     *
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param  string  $conditions  (optional)
     * @return \Spinen\ConnectWise\Clients\Finance\Model\Count
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     */
    public function financeAgreementsTypesCountGet($conditions = null)
    {
        list($response) = $this->financeAgreementsTypesCountGetWithHttpInfo($conditions);
        return $response;
    }

    /**
     * Operation financeAgreementsTypesCountGetWithHttpInfo
     *
     *
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param  string  $conditions  (optional)
     * @return array of \Spinen\ConnectWise\Clients\Finance\Model\Count, HTTP status code, HTTP response headers (array of strings)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     */
    public function financeAgreementsTypesCountGetWithHttpInfo($conditions = null)
    {
        // parse inputs
        $resourcePath = "/finance/agreements/types/count";
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
            $headerParams['Authorization'] = 'Basic '.base64_encode($this->apiClient->getConfig()->getUsername().":".$this->apiClient->getConfig()->getPassword());
            $headerParams['clientId'] = $this->apiClient->getConfig()->getUserId();
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
                '/finance/agreements/types/count'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response,
                    '\Spinen\ConnectWise\Clients\Finance\Model\Count', $httpHeader), $statusCode, $httpHeader
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Spinen\ConnectWise\Clients\Finance\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsTypesGet
     *
     *
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param  string  $conditions  (optional)
     * @param  string  $order_by  (optional)
     * @param  string  $childconditions  (optional)
     * @param  string  $customfieldconditions  (optional)
     * @param  int  $page  (optional)
     * @param  int  $page_size  (optional)
     * @return \Spinen\ConnectWise\Clients\Finance\Model\AgreementType[]
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     */
    public function financeAgreementsTypesGet(
        $conditions = null,
        $order_by = null,
        $childconditions = null,
        $customfieldconditions = null,
        $page = null,
        $page_size = null
    ) {
        list($response) = $this->financeAgreementsTypesGetWithHttpInfo($conditions, $order_by, $childconditions,
            $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation financeAgreementsTypesGetWithHttpInfo
     *
     *
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param  string  $conditions  (optional)
     * @param  string  $order_by  (optional)
     * @param  string  $childconditions  (optional)
     * @param  string  $customfieldconditions  (optional)
     * @param  int  $page  (optional)
     * @param  int  $page_size  (optional)
     * @return array of \Spinen\ConnectWise\Clients\Finance\Model\AgreementType[], HTTP status code, HTTP response headers (array of strings)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     */
    public function financeAgreementsTypesGetWithHttpInfo(
        $conditions = null,
        $order_by = null,
        $childconditions = null,
        $customfieldconditions = null,
        $page = null,
        $page_size = null
    ) {
        // parse inputs
        $resourcePath = "/finance/agreements/types";
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
            $headerParams['Authorization'] = 'Basic '.base64_encode($this->apiClient->getConfig()->getUsername().":".$this->apiClient->getConfig()->getPassword());
            $headerParams['clientId'] = $this->apiClient->getConfig()->getUserId();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Finance\Model\AgreementType[]',
                '/finance/agreements/types'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response,
                    '\Spinen\ConnectWise\Clients\Finance\Model\AgreementType[]', $httpHeader), $statusCode, $httpHeader
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Spinen\ConnectWise\Clients\Finance\Model\AgreementType[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsTypesIdDelete
     *
     *
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param  int  $id  (required)
     * @return void
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     */
    public function financeAgreementsTypesIdDelete($id)
    {
        list($response) = $this->financeAgreementsTypesIdDeleteWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation financeAgreementsTypesIdDeleteWithHttpInfo
     *
     *
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param  int  $id  (required)
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     */
    public function financeAgreementsTypesIdDeleteWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsTypesIdDelete');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/types/{id}";
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
                "{"."id"."}",
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
            $headerParams['Authorization'] = 'Basic '.base64_encode($this->apiClient->getConfig()->getUsername().":".$this->apiClient->getConfig()->getPassword());
            $headerParams['clientId'] = $this->apiClient->getConfig()->getUserId();
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
                '/finance/agreements/types/{id}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsTypesIdGet
     *
     *
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param  int  $id  (required)
     * @return \Spinen\ConnectWise\Clients\Finance\Model\AgreementType
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     */
    public function financeAgreementsTypesIdGet($id)
    {
        list($response) = $this->financeAgreementsTypesIdGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation financeAgreementsTypesIdGetWithHttpInfo
     *
     *
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param  int  $id  (required)
     * @return array of \Spinen\ConnectWise\Clients\Finance\Model\AgreementType, HTTP status code, HTTP response headers (array of strings)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     */
    public function financeAgreementsTypesIdGetWithHttpInfo($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsTypesIdGet');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/types/{id}";
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
                "{"."id"."}",
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
            $headerParams['Authorization'] = 'Basic '.base64_encode($this->apiClient->getConfig()->getUsername().":".$this->apiClient->getConfig()->getPassword());
            $headerParams['clientId'] = $this->apiClient->getConfig()->getUserId();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Finance\Model\AgreementType',
                '/finance/agreements/types/{id}'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response,
                    '\Spinen\ConnectWise\Clients\Finance\Model\AgreementType', $httpHeader), $statusCode, $httpHeader
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Spinen\ConnectWise\Clients\Finance\Model\AgreementType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsTypesIdPatch
     *
     *
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param  int  $id  (required)
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\PatchOperation[]  $operations  (required)
     * @return \Spinen\ConnectWise\Clients\Finance\Model\AgreementType
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     */
    public function financeAgreementsTypesIdPatch($id, $operations)
    {
        list($response) = $this->financeAgreementsTypesIdPatchWithHttpInfo($id, $operations);
        return $response;
    }

    /**
     * Operation financeAgreementsTypesIdPatchWithHttpInfo
     *
     *
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param  int  $id  (required)
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\PatchOperation[]  $operations  (required)
     * @return array of \Spinen\ConnectWise\Clients\Finance\Model\AgreementType, HTTP status code, HTTP response headers (array of strings)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     */
    public function financeAgreementsTypesIdPatchWithHttpInfo($id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsTypesIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling financeAgreementsTypesIdPatch');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/types/{id}";
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
                "{"."id"."}",
                $this->apiClient->getSerializer()->toPathValue($id),
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
            $headerParams['Authorization'] = 'Basic '.base64_encode($this->apiClient->getConfig()->getUsername().":".$this->apiClient->getConfig()->getPassword());
            $headerParams['clientId'] = $this->apiClient->getConfig()->getUserId();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PATCH',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Finance\Model\AgreementType',
                '/finance/agreements/types/{id}'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response,
                    '\Spinen\ConnectWise\Clients\Finance\Model\AgreementType', $httpHeader), $statusCode, $httpHeader
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Spinen\ConnectWise\Clients\Finance\Model\AgreementType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsTypesIdPut
     *
     *
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param  int  $id  (required)
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\AgreementType  $agreement_type  (required)
     * @return \Spinen\ConnectWise\Clients\Finance\Model\AgreementType
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     */
    public function financeAgreementsTypesIdPut($id, $agreement_type)
    {
        list($response) = $this->financeAgreementsTypesIdPutWithHttpInfo($id, $agreement_type);
        return $response;
    }

    /**
     * Operation financeAgreementsTypesIdPutWithHttpInfo
     *
     *
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param  int  $id  (required)
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\AgreementType  $agreement_type  (required)
     * @return array of \Spinen\ConnectWise\Clients\Finance\Model\AgreementType, HTTP status code, HTTP response headers (array of strings)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     */
    public function financeAgreementsTypesIdPutWithHttpInfo($id, $agreement_type)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsTypesIdPut');
        }
        // verify the required parameter 'agreement_type' is set
        if ($agreement_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $agreement_type when calling financeAgreementsTypesIdPut');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/types/{id}";
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
                "{"."id"."}",
                $this->apiClient->getSerializer()->toPathValue($id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($agreement_type)) {
            $_tempBody = $agreement_type;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic '.base64_encode($this->apiClient->getConfig()->getUsername().":".$this->apiClient->getConfig()->getPassword());
            $headerParams['clientId'] = $this->apiClient->getConfig()->getUserId();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'PUT',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Finance\Model\AgreementType',
                '/finance/agreements/types/{id}'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response,
                    '\Spinen\ConnectWise\Clients\Finance\Model\AgreementType', $httpHeader), $statusCode, $httpHeader
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Spinen\ConnectWise\Clients\Finance\Model\AgreementType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsTypesPost
     *
     *
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\AgreementType  $agreement_type  (required)
     * @return \Spinen\ConnectWise\Clients\Finance\Model\AgreementType
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     */
    public function financeAgreementsTypesPost($agreement_type)
    {
        list($response) = $this->financeAgreementsTypesPostWithHttpInfo($agreement_type);
        return $response;
    }

    /**
     * Operation financeAgreementsTypesPostWithHttpInfo
     *
     *
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param  \Spinen\ConnectWise\Clients\Finance\Model\AgreementType  $agreement_type  (required)
     * @return array of \Spinen\ConnectWise\Clients\Finance\Model\AgreementType, HTTP status code, HTTP response headers (array of strings)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     */
    public function financeAgreementsTypesPostWithHttpInfo($agreement_type)
    {
        // verify the required parameter 'agreement_type' is set
        if ($agreement_type === null) {
            throw new \InvalidArgumentException('Missing the required parameter $agreement_type when calling financeAgreementsTypesPost');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/types";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($agreement_type)) {
            $_tempBody = $agreement_type;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic '.base64_encode($this->apiClient->getConfig()->getUsername().":".$this->apiClient->getConfig()->getPassword());
            $headerParams['clientId'] = $this->apiClient->getConfig()->getUserId();
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\Spinen\ConnectWise\Clients\Finance\Model\AgreementType',
                '/finance/agreements/types'
            );

            return [
                $this->apiClient->getSerializer()->deserialize($response,
                    '\Spinen\ConnectWise\Clients\Finance\Model\AgreementType', $httpHeader), $statusCode, $httpHeader
            ];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Spinen\ConnectWise\Clients\Finance\Model\AgreementType', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(),
                        '\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
