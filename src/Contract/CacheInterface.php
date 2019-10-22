<?php


namespace Crack9527\Cache\Contract;


interface CacheInterface
{
    public function get(string $key);

    public function set(string $key, $val, int $expire);

    public function rm(string $key);
}