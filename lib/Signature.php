<?php

namespace ClouSale\AmazonSellingPartnerAPI;

class Signature
{
    /**
     * ## Signature Version 4 signing process.
     *
     * Signature Version 4 is the process to add authentication information to AWS requests sent by HTTP.
     * For security, most requests to AWS must be signed with an access key,
     * which consists of an access key ID and secret access key.
     * These two keys are commonly referred to as your security credentials.
     * For details on how to obtain credentials for your account
     *
     * REF : https://docs.aws.amazon.com/general/latest/gr/signature-version-4.html
     *
     * PS : Guzzle Request instance doesn't allow us to update headers after instantiation
     * So, we need to sign the header separately and return Authentication header back as a result.
     *
     * Special thanks go to github user crazyfactory / z3niths who made a better implementation of the signature method
     *
     * @param $host
     * @param $method
     * @param string $uri
     * @param string $queryString
     * @param array  $data
     *
     * @throws \Exception
     *
     * @author crazyfactory https://github.com/crazyfactory
     */
    public static function calculateSignature(
        Configuration $config,
        string $host,
        string $method,
        $uri = '',
        $queryString = '',
        $data = []
    ): array {
        return self::calculateSignatureForService(
            $host,
            $method,
            $uri,
            $queryString,
            $data,
            'execute-api',
            $config->getAccessKey(),
            $config->getSecretKey(),
            $config->getRegion(),
            $config->getAccessToken(),
            $config->getSecurityToken(),
            $config->getUserAgent()
        );
    }

    public static function calculateSignatureForService(
        string $host,
        string $method,
        $uri,
        $queryString,
        $data,
        string $service,
        string $accessKey,
        string $secretKey,
        string $region,
        $accessToken,
        $securityToken,
        $userAgent
    ): array {
        $terminationString = 'aws4_request';
        $algorithm = 'AWS4-HMAC-SHA256';
        $amzdate = gmdate('Ymd\THis\Z');
        $date = substr($amzdate, 0, 8);

        // Prepare payload
        if (is_array($data)) {
            $param = json_encode($data);
            if ('[]' == $param) {
                $requestPayload = '';
            } else {
                $requestPayload = $param;
            }
        } else {
            $requestPayload = $data;
        }

        // Hashed payload
        $hashedPayload = hash('sha256', $requestPayload);

        //Compute Canonical Headers
        $canonicalHeaders = [
            'host' => $host,
            'user-agent' => $userAgent,
        ];

        // Check and attach access token to request header.
        if (!is_null($accessToken)) {
            $canonicalHeaders['x-amz-access-token'] = $accessToken;
        }
        $canonicalHeaders['x-amz-date'] = $amzdate;
        // Check and attach STS token to request header.
        if (!is_null($securityToken)) {
            $canonicalHeaders['x-amz-security-token'] = $securityToken;
        }

        $canonicalHeadersStr = '';
        foreach ($canonicalHeaders as $h => $v) {
            $canonicalHeadersStr .= $h.':'.$v."\n";
        }
        $signedHeadersStr = join(';', array_keys($canonicalHeaders));

        //Prepare credentials scope
        $credentialScope = $date.'/'.$region.'/'.$service.'/'.$terminationString;

        //prepare canonical request
        $canonicalRequest = $method."\n".$uri."\n".$queryString."\n".$canonicalHeadersStr."\n".$signedHeadersStr."\n".$hashedPayload;

        //Prepare the string to sign
        $stringToSign = $algorithm."\n".$amzdate."\n".$credentialScope."\n".hash('sha256', $canonicalRequest);

        //Start signing locker process
        //Reference : https://docs.aws.amazon.com/general/latest/gr/signature-version-4.html
        $kSecret = 'AWS4'.$secretKey;
        $kDate = hash_hmac('sha256', $date, $kSecret, true);
        $kRegion = hash_hmac('sha256', $region, $kDate, true);
        $kService = hash_hmac('sha256', $service, $kRegion, true);
        $kSigning = hash_hmac('sha256', $terminationString, $kService, true);

        //Compute the signature
        $signature = trim(hash_hmac('sha256', $stringToSign, $kSigning));

        //Finalize the authorization structure
        $authorizationHeader = $algorithm." Credential={$accessKey}/{$credentialScope}, SignedHeaders={$signedHeadersStr}, Signature={$signature}";

        return array_merge($canonicalHeaders, [
            'Authorization' => $authorizationHeader,
        ]);
    }
}
