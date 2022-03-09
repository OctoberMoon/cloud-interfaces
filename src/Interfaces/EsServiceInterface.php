<?php

namespace OctoberMoon\CloudInterfaces\Interfaces;


interface EsServiceInterface
{
    /**
     * addToEs
     * @param $request = [
     *                 'type'=>
     *                 'uuid'=>
     *                 'request'=>
     *                 'result'=>
     *                 ]
     * @return array|false
     */
    public function addToEs($request);
}