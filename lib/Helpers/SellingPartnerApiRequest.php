<?php

namespace ClouSale\AmazonSellingPartnerAPI\Helpers;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Query;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use ClouSale\AmazonSellingPartnerAPI\ApiException;
use ClouSale\AmazonSellingPartnerAPI\ObjectSerializer;

/**
 * Trait SellingPartnerApiRequest.
 *
 * @author Stefan Neuhaus / ClouSale
 */
trait SellingPartnerApiRequest
{
    private function generateRequest(
        bool $multipart,
        array $formParams,
        array $queryParams,
        string $resourcePath,
        array $headerParams,
        string $method,
        $httpBody
    ): Request {
        // body params
        $_tempBody = null;
        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }
        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && 'application/json' === $headers['Content-Type']) {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue,
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);
            } elseif ('application/json' === $headers['Content-Type']) {
                $httpBody = \GuzzleHttp\json_encode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = Query::build($formParams);
            }
        }
        $query = Query::build($queryParams);
        $headersX = $this->calculateSignature(
            str_replace('https://', '', $this->config->getHost()),
            $method,
            $resourcePath,
            $query
        );
        $headers = array_merge(
            $headerParams,
            $headers,
            $headersX
        );

        return new Request(
            $method,
            $this->config->getHost().$resourcePath.($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * @param $host
     * @param $method
     * @param string $uri
     * @param string $queryString
     * @param array  $data
     */
    private function calculateSignature(
        $host,
        $method,
        $uri = '',
        $queryString = '',
        $data = []
    ): array {
        $service = 'execute-api';
        $terminationString = 'aws4_request';
        $algorithm = 'AWS4-HMAC-SHA256';
        $amzdate = gmdate('Ymd\THis\Z');
        $date = substr($amzdate, 0, 8);

        $param = json_encode($data);
        if ('[]' == $param) {
            $requestPayload = '';
        } else {
            $requestPayload = strtolower($param);
        }
        $hashedPayload = hash('sha256', $requestPayload);
        $canonicalHeadersArray = [
            'host:'.$host,
            'user-agent:'.$this->config->getUserAgent(),
            'x-amz-access-token:'.$this->config->getAccessToken(),
            'x-amz-date:'.$amzdate,
        ];
        $signedHeadersArray = [
            'host',
            'user-agent',
            'x-amz-access-token',
            'x-amz-date',
        ];
        if (null != $this->config->getSecurityToken()) {
            $canonicalHeadersArray[] = 'x-amz-security-token:'.$this->config->getSecurityToken();
            $signedHeadersArray[] = 'x-amz-security-token';
        }
        $canonicalHeaders = implode("\n", $canonicalHeadersArray)."\n";
        $credentialScope = $date.'/'.$this->config->getRegion().'/'.$service.'/'.$terminationString;
        $signedHeaders = implode(';', $signedHeadersArray);

        $canonicalRequestArray = [
            $method,
            $uri,
            $queryString,
            $canonicalHeaders,
            $signedHeaders,
            $hashedPayload,
        ];
        $canonicalRequest = implode("\n", $canonicalRequestArray);
        $signArray = [
            $algorithm,
            $amzdate,
            $credentialScope,
            hash('sha256', $canonicalRequest),
        ];
        $stringToSign = implode("\n", $signArray);

        $kSecret = 'AWS4'.$this->config->getSecretKey();
        $kDate = hash_hmac('sha256', $date, $kSecret, true);
        $kRegion = hash_hmac('sha256', $this->config->getRegion(), $kDate, true);
        $kService = hash_hmac('sha256', $service, $kRegion, true);
        $kSigning = hash_hmac('sha256', $terminationString, $kService, true);

        $signature = trim(hash_hmac('sha256', $stringToSign, $kSigning));

        $authorizationHeader = $algorithm." Credential={$this->config->getAccessKey()}/{$credentialScope}, SignedHeaders={$signedHeaders}, Signature={$signature}";
        $headers = [
            'host' => $host,
            'Authorization' => $authorizationHeader,
            'user-agent' => $this->config->getUserAgent(),
            'x-amz-access-token' => $this->config->getAccessToken(),
            'x-amz-date' => $amzdate,
        ];
        if (null != $this->config->getSecurityToken()) {
            $headers['x-amz-security-token'] = $this->config->getSecurityToken();
        }

        return $headers;
    }

    /**
     * @throws ApiException
     */
    private function sendRequest(Request $request, string $returnType): array
    {
        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException("[{$e->getCode()}] {$e->getMessage()}", $e->getCode(), $e->getResponse() ? $e->getResponse()->getHeaders() : null, $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null);
            }
            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $request->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
            }

            $responseBody = $response->getBody();
            if ('\SplFileObject' === $returnType) {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string', 'integer', 'bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            var_dump($e);
            switch ($e->getCode()) {
                case 503:
                case 500:
                case 429:
                case 404:
                case 403:
                case 401:
                case 400:
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        $returnType,
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Create http client option.
     *
     * @throws \RuntimeException on file opening failure
     *
     * @return array of http client options
     */
    protected function createHttpClientOption(): array
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: '.$this->config->getDebugFile());
            }
        }

        return $options;
    }

    /**
     * @throws ApiException
     *
     * @return mixed
     */
    private function sendRequestAsync(Request $request, string $returnType)
    {
        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ('\SplFileObject' === $returnType) {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ('string' !== $returnType) {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(sprintf('[%d] Error connecting to the API (%s)', $statusCode, $exception->getRequest()->getUri()), $statusCode, $response->getHeaders(), $response->getBody());
                }
            );
    }
}
