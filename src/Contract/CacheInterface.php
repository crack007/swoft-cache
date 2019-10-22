<?php


namespace Crack9527\Cache\Contract;


interface CacheInterface
{
    public function get($name, $default = false);

    public function set(string $key, $val, int $expire);

    public function rm(string $key);
}