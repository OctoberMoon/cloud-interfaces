<?php
declare(strict_types=1);

namespace OctoberMoon\CloudInterfaces\Constants;

class EsLoginConstant
{
    public const LOGIN_TYPE_ECO                         = 1;

    public static array $ecoTurnChainLimitMap = [
        self::LOGIN_TYPE_ECO     => 10,
    ];
    
}