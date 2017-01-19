<?php
/**
 * AgreementWorkTypeExclusionsApi
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
 * AgreementWorkTypeExclusionsApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Finance
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgreementWorkTypeExclusionsApi
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
     * @return AgreementWorkTypeExclusionsApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Finance\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation financeAgreementsIdWorkTypeExclusionsCountGet
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
    public function financeAgreementsIdWorkTypeExclusionsCountGet($id, $conditions = null)
    {
        list($response) = $this->financeAgreementsIdWorkTypeExclusionsCountGetWithHttpInfo($id, $conditions);
        return $response;
    }

    /**
     * Operation financeAgreementsIdWorkTypeExclusionsCountGetWithHttpInfo
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
    public function financeAgreementsIdWorkTypeExclusionsCountGetWithHttpInfo($id, $conditions = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdWorkTypeExclusionsCountGet');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/workTypeExclusions/count";
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
                '/finance/agreements/{id}/workTypeExclusions/count'
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
     * Operation financeAgreementsIdWorkTypeExclusionsGet
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
     * @return \Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkTypeExclusion[]
     */
    public function financeAgreementsIdWorkTypeExclusionsGet($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->financeAgreementsIdWorkTypeExclusionsGetWithHttpInfo($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation financeAgreementsIdWorkTypeExclusionsGetWithHttpInfo
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
     * @return array of \Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkTypeExclusion[], HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdWorkTypeExclusionsGetWithHttpInfo($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdWorkTypeExclusionsGet');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/workTypeExclusions";
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
                '\Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkTypeExclusion[]',
                '/finance/agreements/{id}/workTypeExclusions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkTypeExclusion[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkTypeExclusion[]', $e->getResponseHeaders());
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
     * Operation financeAgreementsIdWorkTypeExclusionsPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkTypeExclusion $work_type_exclusion  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkTypeExclusion
     */
    public function financeAgreementsIdWorkTypeExclusionsPost($id, $work_type_exclusion)
    {
        list($response) = $this->financeAgreementsIdWorkTypeExclusionsPostWithHttpInfo($id, $work_type_exclusion);
        return $response;
    }

    /**
     * Operation financeAgreementsIdWorkTypeExclusionsPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkTypeExclusion $work_type_exclusion  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkTypeExclusion, HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdWorkTypeExclusionsPostWithHttpInfo($id, $work_type_exclusion)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdWorkTypeExclusionsPost');
        }
        // verify the required parameter 'work_type_exclusion' is set
        if ($work_type_exclusion === null) {
            throw new \InvalidArgumentException('Missing the required parameter $work_type_exclusion when calling financeAgreementsIdWorkTypeExclusionsPost');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/workTypeExclusions";
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
        if (isset($work_type_exclusion)) {
            $_tempBody = $work_type_exclusion;
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
                '\Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkTypeExclusion',
                '/finance/agreements/{id}/workTypeExclusions'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkTypeExclusion', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Model\AgreementWorkTypeExclusion', $e->getResponseHeaders());
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
     * Operation financeAgreementsIdWorkTypeExclusionsWorkTypeExclusionIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $work_type_exclusion_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return void
     */
    public function financeAgreementsIdWorkTypeExclusionsWorkTypeExclusionIdDelete($id, $work_type_exclusion_id)
    {
        list($response) = $this->financeAgreementsIdWorkTypeExclusionsWorkTypeExclusionIdDeleteWithHttpInfo($id, $work_type_exclusion_id);
        return $response;
    }

    /**
     * Operation financeAgreementsIdWorkTypeExclusionsWorkTypeExclusionIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $work_type_exclusion_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdWorkTypeExclusionsWorkTypeExclusionIdDeleteWithHttpInfo($id, $work_type_exclusion_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdWorkTypeExclusionsWorkTypeExclusionIdDelete');
        }
        // verify the required parameter 'work_type_exclusion_id' is set
        if ($work_type_exclusion_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $work_type_exclusion_id when calling financeAgreementsIdWorkTypeExclusionsWorkTypeExclusionIdDelete');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/workTypeExclusions/{workTypeExclusionId}";
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
        if ($work_type_exclusion_id !== null) {
            $resourcePath = str_replace(
                "{" . "workTypeExclusionId" . "}",
                $this->apiClient->getSerializer()->toPathValue($work_type_exclusion_id),
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
                '/finance/agreements/{id}/workTypeExclusions/{workTypeExclusionId}'
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
}
