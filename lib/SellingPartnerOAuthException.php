<?php

namespace ClouSale\AmazonSellingPartnerAPI;

use Exception;
use Throwable;

class SellingPartnerOAuthException extends Exception
{
    public function __construct($message = '', $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
