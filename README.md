# Swoft Cache

[![Latest Stable Version](http://img.shields.io/packagist/v/swoft/config.svg)](https://packagist.org/packages/swoft/config)
[![Php Version](https://img.shields.io/badge/php-%3E=7.1-brightgreen.svg?maxAge=2592000)](https://secure.php.net/)
[![Swoft Doc](https://img.shields.io/badge/docs-passing-green.svg?maxAge=2592000)](https://www.swoft.org/docs)
[![Swoft License](https://img.shields.io/hexpm/l/plug.svg?maxAge=2592000)](https://github.com/swoft-cloud/swoft/blob/master/LICENSE)

Swoft缓存组件

## composer安装

- composer command

```bash
composer require crack9527/swoft-cache
```
## 支持组件 

- redis
- file
- memcached

## 使用方法

- 在配置文件 `app/bean.php` 里增加组件配置,如使用redis缓存
```
'cache' => [
    'class' => \Crack9527\Cache\Component\RedisCache::class,
]

```
- 在需要使用缓存的地方,使用全局方法 `cache()`，如下

```
cache()->get($key);
```
或者通过注解注入对象属性里

``` php
<?php declare(strict_types=1);

namespace App\Http\Controller;

use Crack9527\Cache\Contract\CacheInterface;
use Swoft;
use Swoft\Bean\Annotation\Mapping\Inject;
use Swoft\Http\Message\ContentType;
use Swoft\Http\Message\Response;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\View\Renderer;
use Throwable;
use Swoft\Redis\Redis;

/**
 * Class HomeController
 * @Controller()
 */
class HomeController
{
    /**
     * @Inject("cache")
     * @var CacheInterface
     */
    private $cache;

    public function test()
    {
        $rand = uniqid();
        $key = "test";
        $this->cache->set($key, $rand, 3600 * 30);
        assert($rand === $this->cache->get($key));

    }
}

    
```

# 缓存方法如下

##设置缓存

```
cache()->set('name', $value, 3600);
```
如果设置成功返回true，否则返回false。

## 缓存自增

针对数值类型的缓存数据，可以使用自增操作，例如：
```
// name自增（步进值为1）
cache()->inc('name');
// name自增（步进值为3）
cache()->inc('name',3);
```
## 缓存自减

针对数值类型的缓存数据，可以使用自减操作，例如：
```
// name自减（步进值为1）
cache()->dec('name');
// name自减（步进值为3）
cache()->dec('name',3);
```

## 获取缓存

获取缓存数据可以使用：
`cache()->get('name');` 


如果name值不存在，则默认返回 false。

支持指定默认值，例如：
`cache()->get('name','');` 


表示如果name值不存在，则返回空字符串。

## 删除缓存
`cache()->rm('name');` 

## 清空缓存
`cache()->clear();` 



## LICENSE

The Component is open-sourced software licensed under the [Apache license](LICENSE).
