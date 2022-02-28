<?php

namespace OctoberMoon\CloudInterfaces\Interfaces;

interface TurnChainClientInterface
{
    /**
     * turnChainByQB
     * @param $request
     * @return array|null
     */
    public function turnChain($request): ?array;
}