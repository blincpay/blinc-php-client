<?php
/**
 * BlincPartnersApi
 * PHP version 7.4
 *
 * @category Class
 * @package  BlincPartners
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
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace BlincPartners\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use BlincPartners\ApiException;
use BlincPartners\Configuration;
use BlincPartners\HeaderSelector;
use BlincPartners\ObjectSerializer;

/**
 * BlincPartnersApi Class Doc Comment
 *
 * @category Class
 * @package  BlincPartners
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
        'createSession' => [
            'application/json',
        ],
        'getPayment' => [
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
     * Operation createSession
     *
     * @param  \BlincPartners\Model\PaymentOnboardSessionInputDto $payment_onboard_session_input_dto payment_onboard_session_input_dto (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createSession'] to see the possible values for this operation
     *
     * @throws \BlincPartners\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \BlincPartners\Model\PaymentOnboardSessionOutputDto
     */
    public function createSession($payment_onboard_session_input_dto, string $contentType = self::contentTypes['createSession'][0])
    {
        list($response) = $this->createSessionWithHttpInfo($payment_onboard_session_input_dto, $contentType);
        return $response;
    }

    /**
     * Operation createSessionWithHttpInfo
     *
     * @param  \BlincPartners\Model\PaymentOnboardSessionInputDto $payment_onboard_session_input_dto (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createSession'] to see the possible values for this operation
     *
     * @throws \BlincPartners\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \BlincPartners\Model\PaymentOnboardSessionOutputDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function createSessionWithHttpInfo($payment_onboard_session_input_dto, string $contentType = self::contentTypes['createSession'][0])
    {
        $request = $this->createSessionRequest($payment_onboard_session_input_dto, $contentType);

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

            switch($statusCode) {
                case 200:
                    if ('\BlincPartners\Model\PaymentOnboardSessionOutputDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\BlincPartners\Model\PaymentOnboardSessionOutputDto' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\BlincPartners\Model\PaymentOnboardSessionOutputDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\BlincPartners\Model\PaymentOnboardSessionOutputDto';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlincPartners\Model\PaymentOnboardSessionOutputDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation createSessionAsync
     *
     * @param  \BlincPartners\Model\PaymentOnboardSessionInputDto $payment_onboard_session_input_dto (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createSession'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createSessionAsync($payment_onboard_session_input_dto, string $contentType = self::contentTypes['createSession'][0])
    {
        return $this->createSessionAsyncWithHttpInfo($payment_onboard_session_input_dto, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation createSessionAsyncWithHttpInfo
     *
     * @param  \BlincPartners\Model\PaymentOnboardSessionInputDto $payment_onboard_session_input_dto (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createSession'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createSessionAsyncWithHttpInfo($payment_onboard_session_input_dto, string $contentType = self::contentTypes['createSession'][0])
    {
        $returnType = '\BlincPartners\Model\PaymentOnboardSessionOutputDto';
        $request = $this->createSessionRequest($payment_onboard_session_input_dto, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'createSession'
     *
     * @param  \BlincPartners\Model\PaymentOnboardSessionInputDto $payment_onboard_session_input_dto (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['createSession'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createSessionRequest($payment_onboard_session_input_dto, string $contentType = self::contentTypes['createSession'][0])
    {

        // verify the required parameter 'payment_onboard_session_input_dto' is set
        if ($payment_onboard_session_input_dto === null || (is_array($payment_onboard_session_input_dto) && count($payment_onboard_session_input_dto) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_onboard_session_input_dto when calling createSession'
            );
        }


        $resourcePath = '/partners/v1/session';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (isset($payment_onboard_session_input_dto)) {
            if (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the body
                $httpBody = json_encode(ObjectSerializer::sanitizeForSerialization($payment_onboard_session_input_dto));
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
     * Operation getPayment
     *
     * @param  int $payment_commitment_id payment_commitment_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayment'] to see the possible values for this operation
     *
     * @throws \BlincPartners\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \BlincPartners\Model\PaymentCommitmentExpandedOutputDto
     */
    public function getPayment($payment_commitment_id, string $contentType = self::contentTypes['getPayment'][0])
    {
        list($response) = $this->getPaymentWithHttpInfo($payment_commitment_id, $contentType);
        return $response;
    }

    /**
     * Operation getPaymentWithHttpInfo
     *
     * @param  int $payment_commitment_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayment'] to see the possible values for this operation
     *
     * @throws \BlincPartners\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \BlincPartners\Model\PaymentCommitmentExpandedOutputDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function getPaymentWithHttpInfo($payment_commitment_id, string $contentType = self::contentTypes['getPayment'][0])
    {
        $request = $this->getPaymentRequest($payment_commitment_id, $contentType);

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

            switch($statusCode) {
                case 200:
                    if ('\BlincPartners\Model\PaymentCommitmentExpandedOutputDto' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\BlincPartners\Model\PaymentCommitmentExpandedOutputDto' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\BlincPartners\Model\PaymentCommitmentExpandedOutputDto', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\BlincPartners\Model\PaymentCommitmentExpandedOutputDto';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\BlincPartners\Model\PaymentCommitmentExpandedOutputDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getPaymentAsync
     *
     * @param  int $payment_commitment_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayment'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentAsync($payment_commitment_id, string $contentType = self::contentTypes['getPayment'][0])
    {
        return $this->getPaymentAsyncWithHttpInfo($payment_commitment_id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getPaymentAsyncWithHttpInfo
     *
     * @param  int $payment_commitment_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayment'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getPaymentAsyncWithHttpInfo($payment_commitment_id, string $contentType = self::contentTypes['getPayment'][0])
    {
        $returnType = '\BlincPartners\Model\PaymentCommitmentExpandedOutputDto';
        $request = $this->getPaymentRequest($payment_commitment_id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
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
     * Create request for operation 'getPayment'
     *
     * @param  int $payment_commitment_id (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['getPayment'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getPaymentRequest($payment_commitment_id, string $contentType = self::contentTypes['getPayment'][0])
    {

        // verify the required parameter 'payment_commitment_id' is set
        if ($payment_commitment_id === null || (is_array($payment_commitment_id) && count($payment_commitment_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $payment_commitment_id when calling getPayment'
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
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
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
            'GET',
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
