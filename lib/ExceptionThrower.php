<?php

namespace ClouSale\AmazonSellingPartnerAPI;

class ExceptionThrower
{
    public static function throwIf($exceptionType, $condition, $message)
    {
        if ($condition) {
            throw new $exceptionType($message);
        }
    }
}
