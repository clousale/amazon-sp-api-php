<?php

namespace ClouSale\AmazonSellingPartnerAPI;

use Aws\Credentials\Credentials;

class AssumeRole
{
    private $accessKeyId;
    private $secretAccessKey;
    private $sessionToken;

    /**
     * AssumeRole constructor.
     *
     * @param $accessKeyId
     * @param $secretAccessKey
     * @param $sessionToken
     */
    public function __construct($accessKeyId, $secretAccessKey, $sessionToken)
    {
        $this->accessKeyId = $accessKeyId;
        $this->secretAccessKey = $secretAccessKey;
        $this->sessionToken = $sessionToken;
    }

    /**
     * @return mixed
     */
    public function getAccessKeyId()
    {
        return $this->accessKeyId;
    }

    /**
     * @return mixed
     */
    public function getSecretAccessKey()
    {
        return $this->secretAccessKey;
    }

    /**
     * @return mixed
     */
    public function getSessionToken()
    {
        return $this->sessionToken;
    }

    /**
     * @param $region
     * @param $accessKey
     * @param $secretKey
     * @param $roleArn
     */
    public static function assume($region, $accessKey, $secretKey, $roleArn): AssumeRole
    {
        $stsClient = new \Aws\Sts\StsClient([
            'region' => $region,
            'version' => '2011-06-15',
            'credentials' => new Credentials($accessKey, $secretKey),
        ]);
        $stsResult = $stsClient->assumeRole([
            'RoleArn' => $roleArn,
            'RoleSessionName' => 'amazon-sp-api-php',
            'region' => $region,
        ]);
        $credentialsRes = $stsResult->get('Credentials');

        return new AssumeRole(
            $credentialsRes['AccessKeyId'],
            $credentialsRes['SecretAccessKey'],
            $credentialsRes['SessionToken']
        );
    }
}
