# Caching Driver — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/libraries/caching.html

---

# Caching Driver[](#caching-driver "Link to this heading")

CodeIgniter features wrappers around some of the most popular forms of
fast and dynamic caching. All but file-based caching require specific
server requirements, and a Fatal Exception will be thrown if server
requirements are not met.

## [Example Usage](#id1)[](#example-usage "Link to this heading")

The following example shows a common usage pattern within your controllers.

```
<?php

if (! $foo = cache('foo')) {
    echo 'Saving to the cache!<br>';
    $foo = 'foobarbaz!';

    // Save into the cache for 5 minutes
    cache()->save('foo', $foo, 300);
}

echo $foo;
```

You can grab an instance of the cache engine directly through the global function `service()`:

```
<?php

$cache = service('cache');

$foo = $cache->get('foo');
```

## [Configuring the Cache](#id2)[](#configuring-the-cache "Link to this heading")

All configuration for the cache engine is done in **app/Config/Cache.php**. In that file,
the following items are available.

### [$handler](#id3)[](#handler "Link to this heading")

The is the name of the handler that should be used as the primary handler when starting up the engine.
Available names are: apcu, dummy, file, memcached, redis, predis, wincache.

### [$backupHandler](#id4)[](#backuphandler "Link to this heading")

In the case that the first choice `$handler` is not available, this is the next cache handler to load.
This is commonly the `File` handler since the file system is always available, but may not fit
more complex, multi-server setups.

### [$prefix](#id5)[](#prefix "Link to this heading")

If you have more than one application using the same cache storage, you can add a custom prefix
string here that is prepended to all key names.

### [$ttl](#id6)[](#ttl "Link to this heading")

The default number of seconds to save items when none is specified.

WARNING: This is not used by framework handlers where 60 seconds is hard-coded, but may be useful
to projects and modules. This will replace the hard-coded value in a future release.

### [$file](#id7)[](#file "Link to this heading")

This is an array of settings specific to the **File** handler to determine how it should save the cache files.

### [$memcached](#id8)[](#memcached "Link to this heading")

This is an array of servers that will be used when using the **Memcached** handler.

### [$redis](#id9)[](#redis "Link to this heading")

The settings for the Redis server that you wish to use when using the **Redis** and **Predis** handler.

## [Command-Line Tools](#id10)[](#command-line-tools "Link to this heading")

CodeIgniter ships with several [commands](cli__spark_commands.md) that are available
from the command line to help you work with Cache.
These tools are not required to use Cache driver but might help you.

### [cache:clear](#id11)[](#cache-clear "Link to this heading")

Clears the current system caches:

```
php spark cache:clear
```

### [cache:info](#id12)[](#cache-info "Link to this heading")

Shows file cache information in the current system:

```
php spark cache:info
```

Note

This command only supports the File cache handler.

## [Class Reference](#id13)[](#class-reference "Link to this heading")

*class* CodeIgniter\Cache\CacheInterface[](#CodeIgniter\Cache\CacheInterface "Link to this definition")
:   isSupported()[](#CodeIgniter\Cache\CacheInterface::isSupported "Link to this definition")
    :   Returns:
        :   `true` if supported, `false` if not

        Return type:
        :   `bool`

    get(*$key*) → mixed[](#CodeIgniter\Cache\CacheInterface::get "Link to this definition")
    :   Parameters:
        :   - **$key** (`string`) – Cache item name

        Returns:
        :   Item value or `null` if not found

        Return type:
        :   `mixed`

        This method will attempt to fetch an item from the cache store. If the
        item does not exist, the method will return null.

        Example:

        ```
        <?php

        $foo = $cache->get('my_cached_item');
        ```

    remember(*string $key*, *int $ttl*, *Closure $callback*)[](#CodeIgniter\Cache\CacheInterface::remember "Link to this definition")
    :   Parameters:
        :   - **$key** (`string`) – Cache item name
            - **$ttl** (`int`) – Time to live in seconds
            - **$callback** (`Closure`) – Callback to invoke when the cache item returns null

        Returns:
        :   The value of the cache item

        Return type:
        :   `mixed`

        Gets an item from the cache. If `null` was returned, this will invoke the callback
        and save the result. Either way, this will return the value.

    save(*string $key*, *$data*[, *int $ttl = 60*])[](#CodeIgniter\Cache\CacheInterface::save "Link to this definition")
    :   Parameters:
        :   - **$key** (`string`) – Cache item name
            - **$data** (`mixed`) – the data to save
            - **$ttl** (`int`) – Time To Live, in seconds (default 60)

        Returns:
        :   `true` on success, `false` on failure

        Return type:
        :   `bool`

        This method will save an item to the cache store. If saving fails, the
        method will return `false`.

        Example:

        ```
        <?php

        $cache->save('cache_item_id', 'data_to_cache');
        ```

    delete(*$key*) → bool[](#CodeIgniter\Cache\CacheInterface::delete "Link to this definition")
    :   Parameters:
        :   - **$key** (`string`) – name of cached item

        Returns:
        :   `true` on success, `false` on failure

        Return type:
        :   `bool`

        This method will delete a specific item from the cache store. If item
        deletion fails, the method will return false.

        Example:

        ```
        <?php

        $cache->delete('cache_item_id');
        ```

    deleteMatching(*$pattern*) → integer[](#CodeIgniter\Cache\CacheInterface::deleteMatching "Link to this definition")
    :   Parameters:
        :   - **$pattern** (`string`) – glob-style pattern to match cached items keys

        Returns:
        :   number of deleted items

        Return type:
        :   `integer`

        This method will delete multiple items from the cache store at once by
        matching their keys against a glob-style pattern. It will return the total number of deleted items.

        Important

        This method is only implemented for File, Redis and Predis handlers.
        Due to limitations, it couldn’t be implemented for Memcached and Wincache handlers.

        Example:

        ```
        <?php

        $cache->deleteMatching('prefix_*'); // deletes all items of which keys start with "prefix_"
        $cache->deleteMatching('*_suffix'); // deletes all items of which keys end with "_suffix"
        ```

        For more information on glob-style syntax, please see
        [Glob (programming)](https://en.wikipedia.org/wiki/Glob_(programming)#Syntax).

    increment(*$key*[, *$offset = 1*]) → mixed[](#CodeIgniter\Cache\CacheInterface::increment "Link to this definition")
    :   Parameters:
        :   - **$key** (`string`) – Cache ID
            - **$offset** (`int`) – Step/value to add

        Returns:
        :   New value on success, `false` on failure

        Return type:
        :   `mixed`

        Performs atomic incrementation of a raw stored value.

        Example:

        ```
        <?php

        // 'iterator' has a value of 2
        $cache->increment('iterator'); // 'iterator' is now 3
        $cache->increment('iterator', 3); // 'iterator' is now 6
        ```

    decrement(*$key*[, *$offset = 1*]) → mixed[](#CodeIgniter\Cache\CacheInterface::decrement "Link to this definition")
    :   Parameters:
        :   - **$key** (`string`) – Cache ID
            - **$offset** (`int`) – Step/value to reduce by

        Returns:
        :   New value on success, `false` on failure

        Return type:
        :   `mixed`

        Performs atomic decrementation of a raw stored value.

        Example:

        ```
        <?php

        // 'iterator' has a value of 6
        $cache->decrement('iterator'); // 'iterator' is now 5
        $cache->decrement('iterator', 2); // 'iterator' is now 3
        ```

        Important

        Memcached counters are unsigned and saturate at `0` instead of
        going negative. Decrementing a key that does not yet exist initializes it
        to `0` (rather than `-$offset`, as the File, Redis, and Predis handlers
        do), and decrementing an existing counter below `0` clamps it at `0`.

    clean()[](#CodeIgniter\Cache\CacheInterface::clean "Link to this definition")
    :   Returns:
        :   `true` on success, `false` on failure

        Return type:
        :   `bool`

        This method will ‘clean’ the entire cache. If the deletion of the
        cache files fails, the method will return false.

        Example:

        ```
        <?php

        $cache->clean();
        ```

    getCacheInfo()[](#CodeIgniter\Cache\CacheInterface::getCacheInfo "Link to this definition")
    :   Returns:
        :   Information on the entire cache database

        Return type:
        :   `mixed`

        This method will return information on the entire cache.

        Example:

        ```
        <?php

        var_dump($cache->getCacheInfo());
        ```

        Note

        The information returned and the structure of the data is dependent
        on which adapter is being used.

    getMetadata(*string $key*)[](#CodeIgniter\Cache\CacheInterface::getMetadata "Link to this definition")
    :   Parameters:
        :   - **$key** (`string`) – Cache item name

        Returns:
        :   Metadata for the cached item. `null` for missing items, or an array with at least the “expire” key for absolute epoch expiry (`null` for never expires).

        Return type:
        :   `array|null`

        This method will return detailed information on a specific item in the
        cache.

        Example:

        ```
        <?php

        var_dump($cache->getMetadata('my_cached_item'));
        ```

        Note

        The information returned and the structure of the data is dependent
        on which adapter is being used. Some adapters (File, Memcached, Wincache)
        still return `false` for missing items.

    *static* validateKey(*string $key*, *string $prefix*)[](#CodeIgniter\Cache\CacheInterface::validateKey "Link to this definition")
    :   Parameters:
        :   - **$key** (`string`) – Potential cache key
            - **$prefix** (`string`) – Optional prefix

        Returns:
        :   The verified and prefixed key. If the key exceeds the driver’s max key length it will be hashed.

        Return type:
        :   `string`

        This method is used by handler methods to check that keys are valid. It will throw
        an `InvalidArgumentException` for non-strings, invalid characters, and empty lengths.

        Example:

        ```
        <?php

        use CodeIgniter\Cache\Handlers\BaseHandler;

        $prefixedKey = BaseHandler::validateKey($key, $prefix);
        ```

## [Drivers](#id14)[](#drivers "Link to this heading")

### [APCu Caching](#id15)[](#apcu-caching "Link to this heading")

APCu is an in-memory key-value store for PHP.

To use it, you need the [APCu PHP extension](https://www.php.net/apcu).

### [File-based Caching](#id16)[](#file-based-caching "Link to this heading")

This requires a cache directory to be really writable by the application.

Use this with care, and make sure to benchmark your application, as a point can
come where disk I/O will negate positive gains by caching.

### [Memcached Caching](#id17)[](#memcached-caching "Link to this heading")

Memcached servers can be specified in the cache configuration file. Available options are:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Cache extends BaseConfig
{
    // ...

    public $memcached = [
        'host'   => '127.0.0.1',
        'port'   => 11211,
        'weight' => 1,
        'raw'    => false,
    ];

    // ...
}
```

For more information on Memcached, please see
<https://www.php.net/memcached>.

### [WinCache Caching](#id18)[](#wincache-caching "Link to this heading")

Under Windows, you can also utilize the WinCache driver.

For more information on WinCache, please see
<https://www.php.net/wincache>.

### [Redis Caching](#id19)[](#redis-caching "Link to this heading")

Redis is an in-memory key-value store which can operate in LRU cache mode.
To use it, you need [Redis server and phpredis PHP extension](https://github.com/phpredis/phpredis).

Config options to connect to redis server stored in the cache configuration file. Available options are:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Cache extends BaseConfig
{
    // ...

    public $redis = [
        'host'       => '127.0.0.1',
        'password'   => null,
        'port'       => 6379,
        'async'      => false, // specific to Predis and ignored by the native Redis extension
        'persistent' => false,
        'timeout'    => 0,
        'database'   => 0,
    ];

    // ...
}
```

For more information on Redis, please see
<https://redis.io>.

### [Predis Caching](#id20)[](#predis-caching "Link to this heading")

Predis is a flexible and feature-complete PHP client library for the Redis key-value store.
To use it, from the command line inside your project root:

```
composer require predis/predis
```

For more information on Redis, please see
<https://github.com/nrk/predis>.

### [Dummy Cache](#id21)[](#dummy-cache "Link to this heading")

This is a caching backend that will always ‘miss.’ It stores no data,
but lets you keep your caching code in place in environments that don’t
support your chosen cache.
