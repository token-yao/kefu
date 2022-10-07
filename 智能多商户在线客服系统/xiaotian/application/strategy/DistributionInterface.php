<?php
/**
 * Created by PhpStorm.
 * User: 6666666
 * Email: 2097984975@qq.com
 * Date: 2020/6/30
 * Time: 9:43 PM
 */
namespace app\strategy;

interface DistributionInterface
{
    public function setDb($db);

    public function doDistribute(array $kefuMap);
}