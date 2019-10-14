<?php

namespace App\Method;

use Yoanm\JsonRpcServer\Domain\JsonRpcMethodInterface;

class ParamsMethod implements JsonRpcMethodInterface
{
    public function apply(array $paramList = null)
    {
        return $paramList;
    }
}