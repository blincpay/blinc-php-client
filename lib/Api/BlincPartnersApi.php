<?php
/**
 * BlincPartnersApi
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Blinc Partner API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use OpenAPI\Client\ApiException;
use OpenAPI\Client\Configuration;
use OpenAPI\Client\HeaderSelector;
use OpenAPI\Client\ObjectSerializer;

/**
 * BlincPartnersApi Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class BlincPartnersApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'partnersV1CommitmentPaymentCommitmentIdPost' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation partnersV1CommitmentPaymentCommitmentIdPost
     *
     * @param  string $payment_commitment_id payment_commitment_id (required)
     * @param  \OpenAPI\Client\Model\PaymentOnboardSessionInputDto $payment_onboard_session_input_dto payment_onboard_session_input_dto (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['partnersV1CommitmentPaymentCommitmentIdPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return void
     */
    public function partnersV1CommitmentPaymentCommitmentIdPost($payment_commitment_id, $payment_onboard_session_input_dto, string $contentType = self::contentTypes['partnersV1CommitmentPaymentCommitmentIdPost'][0])
    {
        $this->partnersV1CommitmentPaymentCommitmentIdPostWithHttpInfo($payment_commitment_id, $payment_onboard_session_input_dto, $contentType);
    }

    /**
     * Operation partnersV1CommitmentPaymentCommitmentIdPostWithHttpInfo
     *
     * @param  string $payment_commitment_id (required)
     * @param  \OpenAPI\Client\Model\PaymentOnboardSessionInputDto $payment_onboard_session_input_dto (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['partnersV1CommitmentPaymentCommitmentIdPost'] to see the possible values for this operation
     *
     * @throws \OpenAPI\Client\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function partnersV1CommitmentPaymentCommitmentIdPostWithHttpInfo($payment_commitment_id, $payment_onboard_session_input_dto, string $contentType = self::contentTypes['partnersV1CommitmentPaymentCommitmentIdPost'][0])
    {
        $request = $this->partnersV1CommitmentPaymentCommitmentIdPostRequest($payment_commitment_id, $payment_onboard_session_input_dto, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation partnersV1CommitmentPaymentCommitmentIdPostAsync
     *
     * @param  string $payment_commitment_id (required)
     * @param  \OpenAPI\Client\Model\PaymentOnboardSessionInputDto $payment_onboard_session_input_dto (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['partnersV1CommitmentPaymentCommitmentIdPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function partnersV1CommitmentPaymentCommitmentIdPostAsync($payment_commitment_id, $payment_onboard_session_input_dto, string $contentType = self::contentTypes['partnersV1CommitmentPaymentCommitmentIdPost'][0])
    {
        return $this->partnersV1CommitmentPaymentCommitmentIdPostAsyncWithHttpInfo($payment_commitment_id, $payment_onboard_session_input_dto, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation partnersV1CommitmentPaymentCommitmentIdPostAsyncWithHttpInfo
     *
     * @param  string $payment_commitment_id (required)
     * @param  \OpenAPI\Client\Model\PaymentOnboardSessionInputDto $payment_onboard_session_input_dto (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['partnersV1CommitmentPaymentCommitmentIdPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function partnersV1CommitmentPaymentCommitmentIdPostAsyncWithHttpInfo($payment_commitment_id, $payment_onboard_session_input_dto, string $contentType = self::contentTypes['partnersV1CommitmentPaymentCommitmentIdPost'][0])
    {
        $returnType = '';
        $request = $this->partnersV1CommitmentPaymentCommitmentIdPostRequest($payment_commitment_id, $payment_onboard_session_input_dto, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'partnersV1CommitmentPaymentCommitmentIdPost'
     *
     * @param  string $payment_commitment_id (required)
     * @param  \OpenAPI\Client\Model\PaymentOnboardSessionInputDto $payment_onboard_session_input_dto (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['partnersV1CommitmentPaymentCommitmentIdPost'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function partnersV1CommitmentPaymentCommitmentIdPostRequest($payment_commitment_id, $payment_onboard_session_input_dto, string $contentType = self::contentTypes['partnersV1CommitmentPaymentCommitmentIdPost'][0])
    {

        // verify the required parameter 'payment_commitment_id' is set
        if ($payment_commitment_id === null || (is_array($payment_commitment_id) && count($payment_commitment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_commitment_id when calling partnersV1CommitmentPaymentCommitmentIdPost'
            );
        }

        // verify the required parameter 'payment_onboard_session_input_dto' is set
        if ($payment_onboard_session_input_dto === null || (is_array($payment_onboard_session_input_dto) && count($payment_onboard_session_input_dto) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_onboard_session_input_dto when calling partnersV1CommitmentPaymentCommitmentIdPost'
            );
        }


        $resourcePath = '/partners/v1/commitment/{paymentCommitmentId}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($payment_commitment_id !== null) {
            $resourcePath = str_replace(
                '{' . 'paymentCommitmentId' . '}',
                ObjectSerializer::toPathValue($payment_commitment_id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            [],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment_onboard_session_input_dto)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = \GuzzleHttp\Utils::jsonEncode(ObjectSerializer::sanitizeForSerialization($payment_onboard_session_input_dto));
            } else {
                $httpBody = $payment_onboard_session_input_dto;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
