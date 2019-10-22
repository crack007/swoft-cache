<?php


namespace Crack9527\Cache\Contract;


interface CacheInterface
{
    /**
     * 判断缓存是否存在
     * @access public
     * @param  string $name 缓存变量名
     * @return bool
     */
    public function has($name);

    /**
     * 读取缓存
     * @access public
     * @param  string $name 缓存变量名
     * @param  mixed $default 默认值
     * @return mixed
     */
    public function get($name, $default = false);

    /**
     * 写入缓存
     * @access public
     * @param  string $name 缓存变量名
     * @param  mixed $value 存储数据
     * @param  int $expire 有效时间 0为永久
     * @return boolean
     */
    public function set($name, $value, $expire = null);

    /**
     * 自增缓存（针对数值缓存）
     * @access public
     * @param  string $name 缓存变量名
     * @param  int $step 步长
     * @return false|int
     */
    public function inc($name, $step = 1);

    /**
     * 自减缓存（针对数值缓存）
     * @access public
     * @param  string $name 缓存变量名
     * @param  int $step 步长
     * @return false|int
     */
    public function dec($name, $step = 1);

    /**
     * 删除缓存
     * @access public
     * @param  string $name 缓存变量名
     * @return boolean
     */
    public function rm($name);

    /**
     * 清除缓存
     * @access public
     * @param  string $tag 标签名
     * @return boolean
     */
    public function clear($tag = null);
}