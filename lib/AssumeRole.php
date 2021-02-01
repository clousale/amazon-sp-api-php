<?php

namespace ClouSale\AmazonSellingPartnerAPI;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Query;

class AssumeRole
{
    /** @var string */
    private $accessKeyId;
    /** @var string */
    private $secretAccessKey;
    /** @var string */
    private $sessionToken;

    /**
     * AssumeRole constructor.
     */
    public function __construct(string $accessKeyId, string $secretAccessKey, string $sessionToken)
    {
        $this->accessKeyId = $accessKeyId;
        $this->secretAccessKey = $secretAccessKey;
        $this->sessionToken = $sessionToken;
    }

    public function getAccessKeyId(): string
    {
        return $this->accessKeyId;
    }

    public function getSecretAccessKey(): string
    {
        return $this->secretAccessKey;
    }

    public function getSessionToken(): string
    {
        return $this->sessionToken;
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     *
     * @author crazyfactory https://github.com/crazyfactory
     *
     * Special thanks go to github user crazyfactory / z3niths who made a better implementation of the signature method
     *
     * Thanks to
     */
    public static function assume(string $region, string $accessKey, string $secretKey, string $roleArn, int $durationSeconds = 3600): AssumeRole
    {
        $requestOptions = [
            'headers' => [
                'accept' => 'application/json',
            ],
            'form_params' => [
                'Action' => 'AssumeRole',
                'DurationSeconds' => $durationSeconds,
                'RoleArn' => $roleArn,
                'RoleSessionName' => 'amazon-sp-api-php',
                'Version' => '2011-06-15',
            ],
        ];

        $host = 'sts.amazonaws.com';
        $uri = '/';
        $signedHeader = [];
//        [
//            'service' => 'sts',
//            'accessKey' => $this->config->getApiKey('access_key'),
//            'secretKey' => $this->config->getApiKey('secret_key'),
//            'region' => 'us-east-1', // Global STS region
//            'host' => $host,
//            'uri' => $uri,
//            'payload' => \GuzzleHttp\Psr7\build_query($requestOptions['form_params']),
//            'method' => 'POST',
//        ]
        try {
            $signedHeader = Signature::calculateSignatureForService(
                $host,
                'POST',
                $uri,
                '',
                Query::build($requestOptions['form_params']),
                'sts',
                $accessKey,
                $secretKey,
                'us-east-1',
                null,
                null,
                'cs-php-sp-api-client/2.1'
            );
        } catch (\Exception $e) {
            echo "Error (Signing process) : {$e->getMessage()}";
            throw $e;
        }

        $client = new Client([
            'base_uri' => 'https://'.$host,
        ]);

        $requestOptions['headers'] = array_merge($requestOptions['headers'], $signedHeader);

        try {
            $response = $client->post($uri, $requestOptions);

            $json = json_decode($response->getBody(), true);
            $credentials = $json['AssumeRoleResponse']['AssumeRoleResult']['Credentials'] ?? null;
//            $tokens = [
//                'access_key' => $credentials['AccessKeyId'],
//                'secret_key' => $credentials['SecretAccessKey'],
//                'session_token' => $credentials['SessionToken']
//            ];

            return new AssumeRole(
                $credentials['AccessKeyId'],
                $credentials['SecretAccessKey'],
                $credentials['SessionToken']
            );

//            return $tokens;
        } catch (\Exception $e) {
            echo "Error (Signing process) : {$e->getMessage()}";
            throw $e;
        }
    }
}
