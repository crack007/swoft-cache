<?php

namespace Crack9527\Cache;

use Swoft\SwoftComponent;

class AutoLoader extends SwoftComponent
{

    public function getPrefixDirs(): array
    {
        return [
            __NAMESPACE__ => __DIR__,
        ];
    }

    public function metadata(): array
    {
        return [];
    }

    public function beans(): array
    {
        return [
            'cache' => '',
        ];
    }
}