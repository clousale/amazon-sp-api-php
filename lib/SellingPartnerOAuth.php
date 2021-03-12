<?php

namespace ClouSale\AmazonSellingPartnerAPI;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;

class SellingPartnerOAuth
{
    /**
     * @param $refreshToken
     * @param $clientId
     * @param $clientSecret
     *
     * @throws GuzzleException
     */
    public static function getAccessTokenFromRefreshToken($refreshToken, $clientId, $clientSecret): ?string
    {
        $client = new Client();
        $params = [
            'grant_type' => 'refresh_token',
            'refresh_token' => $refreshToken,
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
        ];
        $options = array_merge([
            RequestOptions::HEADERS => ['Accept' => 'application/json'],
            RequestOptions::HTTP_ERRORS => false,
            'curl' => [
                CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_2,
            ],
        ], $params ? [RequestOptions::FORM_PARAMS => $params] : []);

        $response = $client->request('POST', 'https://api.amazon.com/auth/o2/token', $options);

        $body = $response->getBody()->getContents();
        $bodyAsJson = json_decode($body, true);
        if(!array_key_exists('access_token',$bodyAsJson)) {
            throw new \Exception('Invalid credentials');
        }
        return $bodyAsJson['access_token'];
    }

    /**
     * @throws GuzzleException
     * @throws SellingPartnerOAuthException
     */
    public static function getRefreshTokenFromLwaAuthorizationCode(
        string $lwaAuthorizationCode,
        string $clientId,
        string $clientSecret,
        string $redirectUri
    ): ?string {
        $client = new Client();
        $params = [
            'grant_type' => 'authorization_code',
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'code' => $lwaAuthorizationCode,
            'redirect_uri' => $redirectUri,
        ];
        $options = array_merge([
            RequestOptions::HEADERS => ['Accept' => 'application/json'],
            RequestOptions::HTTP_ERRORS => false,
            'curl' => [
                CURLOPT_SSLVERSION => CURL_SSLVERSION_TLSv1_2,
            ],
        ], $params ? [RequestOptions::FORM_PARAMS => $params] : []);

        $response = $client->request('POST', 'https://api.amazon.com/auth/o2/token', $options);

        $body = $response->getBody()->getContents();
        $bodyAsJson = json_decode($body, true);
        //throw invalid credentials error if invalid credentials instead of undefined access_token exception
        if(!array_key_exists('access_token',$bodyAsJson)) {
            throw new SellingPartnerOAuthException('Invalid credentials');
        }

        return $bodyAsJson['refresh_token'];
    }
}
