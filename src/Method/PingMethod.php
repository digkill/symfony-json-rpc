<?php

namespace App\Method;

use Yoanm\JsonRpcServer\Domain\JsonRpcMethodInterface;

class PingMethod implements JsonRpcMethodInterface
{
    public function apply(array $paramList = null)
    {
        return 'pong';
    }
}