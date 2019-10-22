<?php


namespace Crack9527\Cache\Component;


use Crack9527\Cache\Contract\CacheInterface;

class FileCache implements CacheInterface
{
    private $path;

    /**
     * @return mixed
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param mixed $path
     */
    public function setPath($path): void
    {
        $this->path = $path;
    }

    public function get(string $key)
    {
        // TODO: Implement get() method.
    }

    public function set(string $key, $val, int $expire)
    {
        // TODO: Implement set() method.
    }

    public function rm(string $key)
    {
        // TODO: Implement rm() method.
    }
}