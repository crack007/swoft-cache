<?php

use Crack9527\Cache\Contract\CacheInterface;

if (!function_exists('cache')) {

    /**
     * @return \Crack9527\Cache\Contract\CacheInterface
     */
    function cache(): CacheInterface
    {
        return Swoft::getSingleton('cache');
    }
}
