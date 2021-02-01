<?php
/**
 * Configuration.
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner API for Solicitations.
 *
 * With the Solicitations API you can build applications that send non-critical solicitations to buyers. You can get a list of solicitation types that are available for an order that you specify, then call an operation that sends a solicitation to the buyer for that order. Buyers cannot respond to solicitations sent by this API, and these solicitations do not appear in the Messaging section of Seller Central or in the recipient's Message Center. The Solicitations API returns responses that are formed according to the <a href=https://tools.ietf.org/html/draft-kelly-json-hal-08>JSON Hypertext Application Language</a> (HAL) standard.
 *
 * OpenAPI spec version: v1
 */

namespace ClouSale\AmazonSellingPartnerAPI;

/**
 * Configuration Class Doc Comment.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class Configuration
{
    private static $defaultConfiguration;

    /**
     * Associate array to store API key(s).
     *
     * @var string[]
     *
     * @deprecated
     */
    protected $apiKeys = [];

    /**
     * Associate array to store API prefix (e.g. Bearer).
     *
     * @var string[]
     *
     * @deprecated
     */
    protected $apiKeyPrefixes = [];

    /**
     * Access token for OAuth.
     *
     * @var string
     */
    protected $accessToken = '';

    /**
     * The host.
     *
     * @var string
     */
    protected $host = 'https://sellingpartnerapi-na.amazon.com';

    /**
     * User agent of the HTTP request, set to "PHP-Swagger" by default.
     *
     * @var string
     */
    protected $userAgent = 'cs-php-sp-api-client/2.1';

    /**
     * Debug switch (default set to false).
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Debug file location (log to STDOUT by default).
     *
     * @var string
     */
    protected $debugFile = 'php://output';

    /**
     * Debug file location (log to STDOUT by default).
     *
     * @var string
     */
    protected $tempFolderPath;
    /** @var string|null */
    protected $securityToken;
    /** @var string|null */
    protected $accessKey;
    /** @var string|null */
    protected $secretKey;
    /** @var string|null */
    protected $region;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->tempFolderPath = sys_get_temp_dir();
    }

    /**
     * Sets API key.
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $key              API key or token
     *
     * @return $this
     *
     * @deprecated use setSecurityToken(), setAccessKey(), setSecretKey() instead
     */
    public function setApiKey(string $apiKeyIdentifier, string $key): self
    {
        $this->apiKeys[$apiKeyIdentifier] = $key;
        if ('accessKey' == $apiKeyIdentifier) {
            $this->setAccessKey($key);
        }
        if ('secretKey' == $apiKeyIdentifier) {
            $this->setSecretKey($key);
        }
        if ('region' == $apiKeyIdentifier) {
            $this->setRegion($key);
        }
        if ('sessionToken' == $apiKeyIdentifier || 'securityToken' == $apiKeyIdentifier) {
            $this->setSecurityToken($key);
        }

        return $this;
    }

    /**
     * Gets API key.
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string|null API key or token
     *
     * @deprecated
     */
    public function getApiKey($apiKeyIdentifier): ?string
    {
        return isset($this->apiKeys[$apiKeyIdentifier]) ? $this->apiKeys[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the prefix for API key (e.g. Bearer).
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     * @param string $prefix           API key prefix, e.g. Bearer
     *
     * @return $this
     */
    public function setApiKeyPrefix($apiKeyIdentifier, $prefix)
    {
        $this->apiKeyPrefixes[$apiKeyIdentifier] = $prefix;

        return $this;
    }

    /**
     * Gets API key prefix.
     *
     * @param string $apiKeyIdentifier API key identifier (authentication scheme)
     *
     * @return string
     *
     * @deprecated
     */
    public function getApiKeyPrefix($apiKeyIdentifier)
    {
        return isset($this->apiKeyPrefixes[$apiKeyIdentifier]) ? $this->apiKeyPrefixes[$apiKeyIdentifier] : null;
    }

    /**
     * Sets the access token for OAuth.
     *
     * @param string $accessToken Token for OAuth
     *
     * @return $this
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;

        return $this;
    }

    /**
     * Gets the access token for OAuth.
     *
     * @return string Access token for OAuth
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * Sets the host.
     *
     * @param string $host Host
     *
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * Gets the host.
     *
     * @return string Host
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Sets the user agent of the api client.
     *
     * @param string $userAgent the user agent of the api client
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function setUserAgent($userAgent)
    {
        if (!is_string($userAgent)) {
            throw new \InvalidArgumentException('User-agent must be a string.');
        }

        $this->userAgent = $userAgent;

        return $this;
    }

    /**
     * Gets the user agent of the api client.
     *
     * @return string user agent
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Sets debug flag.
     *
     * @param bool $debug Debug flag
     *
     * @return $this
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;

        return $this;
    }

    /**
     * Gets the debug flag.
     *
     * @return bool
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the debug file.
     *
     * @param string $debugFile Debug file
     *
     * @return $this
     */
    public function setDebugFile($debugFile)
    {
        $this->debugFile = $debugFile;

        return $this;
    }

    /**
     * Gets the debug file.
     *
     * @return string
     */
    public function getDebugFile()
    {
        return $this->debugFile;
    }

    /**
     * Sets the temp folder path.
     *
     * @param string $tempFolderPath Temp folder path
     *
     * @return $this
     */
    public function setTempFolderPath($tempFolderPath)
    {
        $this->tempFolderPath = $tempFolderPath;

        return $this;
    }

    /**
     * Gets the temp folder path.
     *
     * @return string Temp folder path
     */
    public function getTempFolderPath()
    {
        return $this->tempFolderPath;
    }

    /**
     * Gets the default configuration instance.
     *
     * @return Configuration
     */
    public static function getDefaultConfiguration()
    {
        if (null === self::$defaultConfiguration) {
            self::$defaultConfiguration = new Configuration();
        }

        return self::$defaultConfiguration;
    }

    /**
     * Sets the detault configuration instance.
     *
     * @param Configuration $config An instance of the Configuration Object
     *
     * @return void
     */
    public static function setDefaultConfiguration(Configuration $config)
    {
        self::$defaultConfiguration = $config;
    }

    /**
     * Gets the essential information for debugging.
     *
     * @return string The report for debugging
     */
    public static function toDebugReport()
    {
        $report = 'PHP SDK (ClouSale\AmazonSellingPartnerAPI) Debug Report:'.PHP_EOL;
        $report .= '    OS: '.php_uname().PHP_EOL;
        $report .= '    PHP Version: '.PHP_VERSION.PHP_EOL;
        $report .= '    OpenAPI Spec Version: v1'.PHP_EOL;
        $report .= '    Temp Folder Path: '.self::getDefaultConfiguration()->getTempFolderPath().PHP_EOL;

        return $report;
    }

    /**
     * Get API key (with prefix if set).
     *
     * @param string $apiKeyIdentifier name of apikey
     *
     * @return string API key with the prefix
     */
    public function getApiKeyWithPrefix($apiKeyIdentifier)
    {
        $prefix = $this->getApiKeyPrefix($apiKeyIdentifier);
        $apiKey = $this->getApiKey($apiKeyIdentifier);

        if (null === $apiKey) {
            return null;
        }

        if (null === $prefix) {
            $keyWithPrefix = $apiKey;
        } else {
            $keyWithPrefix = $prefix.' '.$apiKey;
        }

        return $keyWithPrefix;
    }

    public function getSecurityToken(): ?string
    {
        return $this->securityToken;
    }

    public function setSecurityToken(?string $securityToken): void
    {
        $this->securityToken = $securityToken;
    }

    public function getAccessKey(): ?string
    {
        return $this->accessKey;
    }

    public function setAccessKey(?string $accessKey): void
    {
        $this->accessKey = $accessKey;
    }

    public function getSecretKey(): ?string
    {
        return $this->secretKey;
    }

    public function setSecretKey(?string $secretKey): void
    {
        $this->secretKey = $secretKey;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): void
    {
        $this->region = $region;
    }
}
