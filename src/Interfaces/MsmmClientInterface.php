<?php
namespace OctoberMoon\CloudInterfaces\Interfaces;

interface MsmmClientInterface
{
    /**
     * getRobotInfo
     * @param $request
     * @return array|false
     */
    public function getRobotInfo($request);

    /**
     * @param $request
     * @return array|false
     */
    public function getSearchGoods($request);
    
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