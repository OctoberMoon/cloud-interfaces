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

    /**
     * dyByMsmm
     * @param $request=[
     *                 "inviteCode"  => string, // inviteCode
     *                 "content" => string, // 转链内容
     *                 "type" => int, // 平台类型
     *                 ]
     * @return string|string[]
     */
    public function turnChainByMsmmDy($request);
}