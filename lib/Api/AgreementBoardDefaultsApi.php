<?php
/**
 * AgreementBoardDefaultsApi
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

namespace Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Api;

use \Spinen\ConnectWise\Clients\Finance\ApiClient;
use \Spinen\ConnectWise\Clients\Finance\ApiException;
use \Spinen\ConnectWise\Clients\Finance\Configuration;
use \Spinen\ConnectWise\Clients\Finance\ObjectSerializer;

/**
 * AgreementBoardDefaultsApi Class Doc Comment
 *
 * @category Class
 * @package  Spinen\ConnectWise\Clients\Finance
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AgreementBoardDefaultsApi
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
     * @return AgreementBoardDefaultsApi
     */
    public function setApiClient(\Spinen\ConnectWise\Clients\Finance\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation financeAgreementsIdBoardDefaultsBoardDefaultIdDelete
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $board_default_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return void
     */
    public function financeAgreementsIdBoardDefaultsBoardDefaultIdDelete($id, $board_default_id)
    {
        list($response) = $this->financeAgreementsIdBoardDefaultsBoardDefaultIdDeleteWithHttpInfo($id, $board_default_id);
        return $response;
    }

    /**
     * Operation financeAgreementsIdBoardDefaultsBoardDefaultIdDeleteWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $board_default_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdBoardDefaultsBoardDefaultIdDeleteWithHttpInfo($id, $board_default_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdBoardDefaultsBoardDefaultIdDelete');
        }
        // verify the required parameter 'board_default_id' is set
        if ($board_default_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $board_default_id when calling financeAgreementsIdBoardDefaultsBoardDefaultIdDelete');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/boardDefaults/{boardDefaultId}";
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
        if ($board_default_id !== null) {
            $resourcePath = str_replace(
                "{" . "boardDefaultId" . "}",
                $this->apiClient->getSerializer()->toPathValue($board_default_id),
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
                '/finance/agreements/{id}/boardDefaults/{boardDefaultId}'
            );

            return [null, $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsIdBoardDefaultsBoardDefaultIdGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $board_default_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault
     */
    public function financeAgreementsIdBoardDefaultsBoardDefaultIdGet($id, $board_default_id)
    {
        list($response) = $this->financeAgreementsIdBoardDefaultsBoardDefaultIdGetWithHttpInfo($id, $board_default_id);
        return $response;
    }

    /**
     * Operation financeAgreementsIdBoardDefaultsBoardDefaultIdGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $board_default_id  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault, HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdBoardDefaultsBoardDefaultIdGetWithHttpInfo($id, $board_default_id)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdBoardDefaultsBoardDefaultIdGet');
        }
        // verify the required parameter 'board_default_id' is set
        if ($board_default_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $board_default_id when calling financeAgreementsIdBoardDefaultsBoardDefaultIdGet');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/boardDefaults/{boardDefaultId}";
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
        if ($board_default_id !== null) {
            $resourcePath = str_replace(
                "{" . "boardDefaultId" . "}",
                $this->apiClient->getSerializer()->toPathValue($board_default_id),
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
                '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault',
                '/finance/agreements/{id}/boardDefaults/{boardDefaultId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsIdBoardDefaultsBoardDefaultIdPatch
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $board_default_id  (required)
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault
     */
    public function financeAgreementsIdBoardDefaultsBoardDefaultIdPatch($id, $board_default_id, $operations)
    {
        list($response) = $this->financeAgreementsIdBoardDefaultsBoardDefaultIdPatchWithHttpInfo($id, $board_default_id, $operations);
        return $response;
    }

    /**
     * Operation financeAgreementsIdBoardDefaultsBoardDefaultIdPatchWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $board_default_id  (required)
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\PatchOperation[] $operations  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault, HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdBoardDefaultsBoardDefaultIdPatchWithHttpInfo($id, $board_default_id, $operations)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdBoardDefaultsBoardDefaultIdPatch');
        }
        // verify the required parameter 'board_default_id' is set
        if ($board_default_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $board_default_id when calling financeAgreementsIdBoardDefaultsBoardDefaultIdPatch');
        }
        // verify the required parameter 'operations' is set
        if ($operations === null) {
            throw new \InvalidArgumentException('Missing the required parameter $operations when calling financeAgreementsIdBoardDefaultsBoardDefaultIdPatch');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/boardDefaults/{boardDefaultId}";
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
        if ($board_default_id !== null) {
            $resourcePath = str_replace(
                "{" . "boardDefaultId" . "}",
                $this->apiClient->getSerializer()->toPathValue($board_default_id),
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
                '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault',
                '/finance/agreements/{id}/boardDefaults/{boardDefaultId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsIdBoardDefaultsBoardDefaultIdPut
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $board_default_id  (required)
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault $board_default  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault
     */
    public function financeAgreementsIdBoardDefaultsBoardDefaultIdPut($id, $board_default_id, $board_default)
    {
        list($response) = $this->financeAgreementsIdBoardDefaultsBoardDefaultIdPutWithHttpInfo($id, $board_default_id, $board_default);
        return $response;
    }

    /**
     * Operation financeAgreementsIdBoardDefaultsBoardDefaultIdPutWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param int $board_default_id  (required)
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault $board_default  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault, HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdBoardDefaultsBoardDefaultIdPutWithHttpInfo($id, $board_default_id, $board_default)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdBoardDefaultsBoardDefaultIdPut');
        }
        // verify the required parameter 'board_default_id' is set
        if ($board_default_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $board_default_id when calling financeAgreementsIdBoardDefaultsBoardDefaultIdPut');
        }
        // verify the required parameter 'board_default' is set
        if ($board_default === null) {
            throw new \InvalidArgumentException('Missing the required parameter $board_default when calling financeAgreementsIdBoardDefaultsBoardDefaultIdPut');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/boardDefaults/{boardDefaultId}";
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
        if ($board_default_id !== null) {
            $resourcePath = str_replace(
                "{" . "boardDefaultId" . "}",
                $this->apiClient->getSerializer()->toPathValue($board_default_id),
                $resourcePath
            );
        }
        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // body params
        $_tempBody = null;
        if (isset($board_default)) {
            $_tempBody = $board_default;
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
                '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault',
                '/finance/agreements/{id}/boardDefaults/{boardDefaultId}'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsIdBoardDefaultsCountGet
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\Count
     */
    public function financeAgreementsIdBoardDefaultsCountGet($id, $conditions = null)
    {
        list($response) = $this->financeAgreementsIdBoardDefaultsCountGetWithHttpInfo($id, $conditions);
        return $response;
    }

    /**
     * Operation financeAgreementsIdBoardDefaultsCountGetWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param string $conditions  (optional)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\Count, HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdBoardDefaultsCountGetWithHttpInfo($id, $conditions = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdBoardDefaultsCountGet');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/boardDefaults/count";
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
                '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\Count',
                '/finance/agreements/{id}/boardDefaults/count'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\Count', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\Count', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsIdBoardDefaultsGet
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
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault[]
     */
    public function financeAgreementsIdBoardDefaultsGet($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        list($response) = $this->financeAgreementsIdBoardDefaultsGetWithHttpInfo($id, $conditions, $order_by, $childconditions, $customfieldconditions, $page, $page_size);
        return $response;
    }

    /**
     * Operation financeAgreementsIdBoardDefaultsGetWithHttpInfo
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
     * @return array of \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault[], HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdBoardDefaultsGetWithHttpInfo($id, $conditions = null, $order_by = null, $childconditions = null, $customfieldconditions = null, $page = null, $page_size = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdBoardDefaultsGet');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/boardDefaults";
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
                '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault[]',
                '/finance/agreements/{id}/boardDefaults'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault[]', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault[]', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation financeAgreementsIdBoardDefaultsPost
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault $board_default  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault
     */
    public function financeAgreementsIdBoardDefaultsPost($id, $board_default)
    {
        list($response) = $this->financeAgreementsIdBoardDefaultsPostWithHttpInfo($id, $board_default);
        return $response;
    }

    /**
     * Operation financeAgreementsIdBoardDefaultsPostWithHttpInfo
     *
     * 
     *
     * Spinen&#39;s PHP ConnectWise Client for Finance API generated by Swagger Code Generator.
     *
     * @param int $id  (required)
     * @param \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault $board_default  (required)
     * @throws \Spinen\ConnectWise\Clients\Finance\ApiException on non-2xx response
     * @return array of \Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault, HTTP status code, HTTP response headers (array of strings)
     */
    public function financeAgreementsIdBoardDefaultsPostWithHttpInfo($id, $board_default)
    {
        // verify the required parameter 'id' is set
        if ($id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $id when calling financeAgreementsIdBoardDefaultsPost');
        }
        // verify the required parameter 'board_default' is set
        if ($board_default === null) {
            throw new \InvalidArgumentException('Missing the required parameter $board_default when calling financeAgreementsIdBoardDefaultsPost');
        }
        // parse inputs
        $resourcePath = "/finance/agreements/{id}/boardDefaults";
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
        if (isset($board_default)) {
            $_tempBody = $board_default;
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
                '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault',
                '/finance/agreements/{id}/boardDefaults'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\BoardDefault', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
                case 401:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\Spinen\ConnectWise\Clients\Finance\Spinen\ConnectWise\Clients\Finance\Model\Error', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
