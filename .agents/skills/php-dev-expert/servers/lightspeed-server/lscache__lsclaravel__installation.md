# Installation | LiteSpeed Cache for Laravel | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lscache/lsclaravel/installation/

---

# Installation[¶](#installation "Permanent link")

Before installing and activating the LSCache plugin, deactivate all other full-page cache plugins.

Tip

You can still use other types of cache (like object cache, or browser cache), but only one full-page cache should be used at a time.

## Package Installation[¶](#package-installation "Permanent link")

Note

Please see the [Overview](lscache__lsclaravel.md#server-level-prerequisites) for the server-level requirements before attempting to install this package.

Require this package using composer.

```
composer require litespeed/lscache-laravel
```

Laravel uses Auto-Discovery, so you won't have to make any changes to your application, the two middlewares and facade will be available right from the beginning.

### Steps for Laravel >=5.1 and <=5.4[¶](#steps-for-laravel-51-and-54 "Permanent link")

The package can be used for Laravel 5.1 to 5.4 as well, however due to lack of Auto-Discovery, a few additional steps have to be performed.

In `config/app.php` you have to add the following code in your `aliases`:

```
'aliases' => [
    ...
    'LSCache'   => Litespeed\LSCache\LSCache::class,
],
```

In `app/Http/Kernel.php` you have to add the two middlewares under `middleware` and `routeMiddleware`:

```
protected $middleware = [
    ...
    \Litespeed\LSCache\LSCacheMiddleware::class,
    \Litespeed\LSCache\LSTagsMiddleware::class,
];

protected $routeMiddleware = [
    ...
    'lscache' => \Litespeed\LSCache\LSCacheMiddleware::class,
    'lstags' => \Litespeed\LSCache\LSTagsMiddleware::class,
];
```

Copy `lscache.php` to `config/`:

Copy the package `config/lscache.php` file to your `config/` directory.

Important

Do not add the ServiceProvider under `providers` in `config/app.php`.

### Steps for Laravel 5.5 and above[¶](#steps-for-laravel-55-and-above "Permanent link")

You should publish the package configuration, which allows you to set the defaults for the `X-LiteSpeed-Cache-Control` header:

```
php artisan vendor:publish --provider="Litespeed\LSCache\LSCacheServiceProvider"
```

### Enable CacheLookup for LiteSpeed Cache[¶](#enable-cachelookup-for-litespeed-cache "Permanent link")

To enable CacheLookup for LiteSpeed Cache, you have to include the following code, either on server, vhost or .htaccess level:

```
<IfModule LiteSpeed>
   CacheLookup on
</IfModule>
```

### Usage[¶](#usage "Permanent link")

The default TTL is set to `0`, so the `X-LiteSpeed-Cache-Control` response header won't be returned. You will need to [set up the middleware options for your routes](lscache__lsclaravel__settings.md) before you can proceed.
