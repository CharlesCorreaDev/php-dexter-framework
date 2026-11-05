# Caching: Data Caching | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/caching-data

---

0

# Data Caching [¶](#data-caching)

Data caching is about storing some PHP variables in cache and retrieving it later from cache.
It is also the foundation for more advanced caching features, such as [query caching](#query-caching)
and [page caching](guide_22_0__caching-page.md).

The following code is a typical usage pattern of data caching, where `$cache` refers to
a [cache component](#cache-components):

```
// try retrieving $data from cache
$data = $cache->get($key);

if ($data === false) {
    // $data is not found in cache, calculate it from scratch
    $data = $this->calculateSomething();

    // store $data in cache so that it can be retrieved next time
    $cache->set($key, $data);
}

// $data is available here
```

Since version 2.0.11, [cache component](#cache-components) provides [getOrSet()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#getOrSet()-detail) method
that simplifies code for data getting, calculating and storing. The following code does exactly the same as the
previous example:

```
$data = $cache->getOrSet($key, function () {
    return $this->calculateSomething();
});
```

When cache has data associated with the `$key`, the cached value will be returned.
Otherwise, the passed anonymous function will be executed to calculate the value that will be cached and returned.

If the anonymous function requires some data from the outer scope, you can pass it with the `use` statement.
For example:

```
$user_id = 42;
$data = $cache->getOrSet($key, function () use ($user_id) {
    return $this->calculateSomething($user_id);
});
```

> **Note:** [getOrSet()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#getOrSet()-detail) method supports duration and dependencies as well.
> See [Cache Expiration](#cache-expiration) and [Cache Dependencies](#cache-dependencies) to know more.

## Cache Components [¶](#cache-components)

Data caching relies on the so-called *cache components* which represent various cache storage,
such as memory, files, databases.

Cache components are usually registered as [application components](guide_22_0__structure-application-components.md) so
that they can be globally configurable
and accessible. The following code shows how to configure the `cache` application component to use
[memcached](https://memcached.org/) with two cache servers:

```
'components' => [
    'cache' => [
        'class' => 'yii\caching\MemCache',
        'servers' => [
            [
                'host' => 'server1',
                'port' => 11211,
                'weight' => 100,
            ],
            [
                'host' => 'server2',
                'port' => 11211,
                'weight' => 50,
            ],
        ],
    ],
],
```

You can then access the above cache component using the expression `Yii::$app->cache`.

If no cache component is specified, then Yii will use [yii\caching\FileCache](https://www.yiiframework.com/doc/api/2.0/yii-caching-filecache) as default.

Because all cache components support the same set of APIs, you can swap the underlying cache component
with a different one by reconfiguring it in the application configuration without modifying the code that uses the cache.
For example, you can modify the above configuration to use yii\caching\ApcCache:

```
'components' => [
    'cache' => [
        'class' => 'yii\caching\ApcCache',
    ],
],
```

> **Tip:** You can register multiple cache application components. The component named `cache` is used
> by default by many cache-dependent classes (e.g. [yii\web\UrlManager](https://www.yiiframework.com/doc/api/22.0/yii-web-urlmanager)).

### Supported Cache Storage [¶](#supported-cache-storage)

Yii supports a wide range of cache storage. The following is a summary:

- yii\caching\ApcCache: uses PHP [APC](https://www.php.net/manual/en/book.apcu.php) extension. This option can be
  considered as the fastest one when dealing with cache for a centralized thick application (e.g. one
  server, no dedicated load balancers, etc.).
- [yii\caching\DbCache](https://www.yiiframework.com/doc/api/22.0/yii-caching-dbcache): uses a database table to store cached data. To use this cache, you must
  create a table as specified in [yii\caching\DbCache::$cacheTable](https://www.yiiframework.com/doc/api/22.0/yii-caching-dbcache#$cacheTable-detail).
- [yii\caching\ArrayCache](https://www.yiiframework.com/doc/api/22.0/yii-caching-arraycache): provides caching for the current request only by storing the values in an array.
  For enhanced performance of ArrayCache, you can disable serialization of the stored data by setting
  [yii\caching\ArrayCache::$serializer](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#$serializer-detail) to `false`.
- [yii\caching\DummyCache](https://www.yiiframework.com/doc/api/22.0/yii-caching-dummycache): serves as a cache placeholder which does no real caching.
  The purpose of this component is to simplify the code that needs to check the availability of cache.
  For example, during development or if the server doesn't have actual cache support, you may configure
  a cache component to use this cache. When an actual cache support is enabled, you can switch to use
  the corresponding cache component. In both cases, you may use the same code
  `Yii::$app->cache->get($key)` to attempt retrieving data from the cache without worrying that
  `Yii::$app->cache` might be `null`.
- [yii\caching\FileCache](https://www.yiiframework.com/doc/api/22.0/yii-caching-filecache): uses standard files to store cached data. This is particularly suitable
  to cache large chunk of data, such as page content.
- [yii\caching\MemCache](https://www.yiiframework.com/doc/api/22.0/yii-caching-memcache): uses PHP [memcache](https://www.php.net/manual/en/book.memcache.php)
  and [memcached](https://www.php.net/manual/en/book.memcached.php) extensions. This option can be considered as
  the fastest one when dealing with cache in a distributed applications (e.g. with several servers, load
  balancers, etc.)
- yii\redis\Cache: implements a cache component based on [Redis](https://redis.io/) key-value store
  (redis version 2.6.12 or higher is required).
- [yii\caching\WinCache](https://www.yiiframework.com/doc/api/22.0/yii-caching-wincache): uses PHP [WinCache](https://iis.net/downloads/microsoft/wincache-extension)
  ([see also](https://www.php.net/manual/en/book.wincache.php)) extension.

> **Tip:** You may use different cache storage in the same application. A common strategy is to use memory-based
> cache storage to store data that is small but constantly used (e.g. statistical data), and use file-based
> or database-based cache storage to store data that is big and less frequently used (e.g. page content).

## Cache APIs [¶](#cache-apis)

All cache components have the same base class [yii\caching\Cache](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache) and thus support the following APIs:

- [get()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#get()-detail): retrieves a data item from cache with a specified key. A `false`
  value will be returned if the data item is not found in the cache or is expired/invalidated.
- [set()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#set()-detail): stores a data item identified by a key in cache.
- [add()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#add()-detail): stores a data item identified by a key in cache if the key is not found in the cache.
- [getOrSet()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#getOrSet()-detail): retrieves a data item from cache with a specified key or executes passed
  callback, stores return of the callback in a cache by a key and returns that data.
- [multiGet()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#multiGet()-detail): retrieves multiple data items from cache with the specified keys.
- [multiSet()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#multiSet()-detail): stores multiple data items in cache. Each item is identified by a key.
- [multiAdd()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#multiAdd()-detail): stores multiple data items in cache. Each item is identified by a key.
  If a key already exists in the cache, the data item will be skipped.
- [exists()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#exists()-detail): returns a value indicating whether the specified key is found in the cache.
- [delete()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#delete()-detail): removes a data item identified by a key from the cache.
- [flush()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#flush()-detail): removes all data items from the cache.

> **Note:** Do not cache a `false` boolean value directly because the [get()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#get()-detail) method uses
> `false` return value to indicate the data item is not found in the cache. You may put `false` in an array and cache
> this array instead to avoid this problem.

Some cache storage, such as MemCache, APC, support retrieving multiple cached values in a batch mode,
which may reduce the overhead involved in retrieving cached data. The APIs [multiGet()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#multiGet()-detail)
and [multiAdd()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#multiAdd()-detail) are provided to exploit this feature. In case the underlying cache storage
does not support this feature, it will be simulated.

Because [yii\caching\Cache](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache) implements `ArrayAccess`, a cache component can be used like an array. The following
are some examples:

```
$cache['var1'] = $value1;  // equivalent to: $cache->set('var1', $value1);
$value2 = $cache['var2'];  // equivalent to: $value2 = $cache->get('var2');
```

### Cache Keys [¶](#cache-keys)

Each data item stored in cache is uniquely identified by a key. When you store a data item in cache,
you have to specify a key for it. Later when you retrieve the data item from cache, you should provide
the corresponding key.

You may use a string or an arbitrary value as a cache key. When a key is not a string, it will be automatically
serialized into a string.

A common strategy of defining a cache key is to include all determining factors in terms of an array.
For example, [yii\db\Schema](https://www.yiiframework.com/doc/api/22.0/yii-db-schema) uses the following key to cache schema information about a database table:

```
[
    __CLASS__,              // schema class name
    $this->db->dsn,         // DB connection data source name
    $this->db->username,    // DB connection login user
    $name,                  // table name
];
```

As you can see, the key includes all necessary information needed to uniquely specify a database table.

> **Note:** Values stored in cache via [multiSet()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#multiSet()-detail) or [multiAdd()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#multiAdd()-detail) can
> have only string or integer keys. If you need to set more complex key store the value separately via
> [set()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#set()-detail) or [add()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#add()-detail).

When the same cache storage is used by different applications, you should specify a unique cache key prefix
for each application to avoid conflicts of cache keys. This can be done by configuring the [yii\caching\Cache::$keyPrefix](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#$keyPrefix-detail)
property. For example, in the application configuration you can write the following code:

```
'components' => [
    'cache' => [
        'class' => 'yii\caching\ApcCache',
        'keyPrefix' => 'myapp',       // a unique cache key prefix
    ],
],
```

To ensure interoperability, only alphanumeric characters should be used.

### Cache Expiration [¶](#cache-expiration)

A data item stored in a cache will remain there forever unless it is removed because of some caching policy
enforcement (e.g. caching space is full and the oldest data are removed). To change this behavior, you can provide
an expiration parameter when calling [set()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#set()-detail) to store a data item. The parameter
indicates for how many seconds the data item can remain valid in the cache. When you call
[get()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#get()-detail) to retrieve the data item, if it has passed the expiration time, the method
will return `false`, indicating the data item is not found in the cache. For example,

```
// keep the data in cache for at most 45 seconds
$cache->set($key, $data, 45);

sleep(50);

$data = $cache->get($key);
if ($data === false) {
    // $data is expired or is not found in the cache
}
```

Since 2.0.11 you may set [defaultDuration](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#$defaultDuration-detail) value in your cache component configuration if you prefer a custom cache duration
over the default unlimited duration.
This will allow you not to pass custom `duration` parameter to [set()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#set()-detail) each time.

### Cache Dependencies [¶](#cache-dependencies)

Besides expiration setting, cached data item may also be invalidated by changes of the so-called *cache dependencies*.
For example, [yii\caching\FileDependency](https://www.yiiframework.com/doc/api/22.0/yii-caching-filedependency) represents the dependency of a file's modification time.
When this dependency changes, it means the corresponding file is modified. As a result, any outdated
file content found in the cache should be invalidated and the [get()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#get()-detail) call
should return `false`.

Cache dependencies are represented as objects of [yii\caching\Dependency](https://www.yiiframework.com/doc/api/22.0/yii-caching-dependency) descendant classes. When you call
[set()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#set()-detail) to store a data item in the cache, you can pass along an associated cache
dependency object. For example,

```
// Create a dependency on the modification time of file example.txt.
$dependency = new \yii\caching\FileDependency(['fileName' => 'example.txt']);

// The data will expire in 30 seconds.
// It may also be invalidated earlier if example.txt is modified.
$cache->set($key, $data, 30, $dependency);

// The cache will check if the data has expired.
// It will also check if the associated dependency was changed.
// It will return false if any of these conditions are met.
$data = $cache->get($key);
```

Below is a summary of the available cache dependencies:

- [yii\caching\ChainedDependency](https://www.yiiframework.com/doc/api/22.0/yii-caching-chaineddependency): the dependency is changed if any of the dependencies on the chain is changed.
- [yii\caching\DbDependency](https://www.yiiframework.com/doc/api/22.0/yii-caching-dbdependency): the dependency is changed if the query result of the specified SQL statement is changed.
- [yii\caching\ExpressionDependency](https://www.yiiframework.com/doc/api/22.0/yii-caching-expressiondependency): the dependency is changed if the result of the specified PHP expression is changed.
- [yii\caching\CallbackDependency](https://www.yiiframework.com/doc/api/22.0/yii-caching-callbackdependency): the dependency is changed if the result of the specified PHP callback is changed.
- [yii\caching\FileDependency](https://www.yiiframework.com/doc/api/22.0/yii-caching-filedependency): the dependency is changed if the file's last modification time is changed.
- [yii\caching\TagDependency](https://www.yiiframework.com/doc/api/22.0/yii-caching-tagdependency): associates a cached data item with one or multiple tags. You may invalidate
  the cached data items with the specified tag(s) by calling [yii\caching\TagDependency::invalidate()](https://www.yiiframework.com/doc/api/22.0/yii-caching-tagdependency#invalidate()-detail).

> **Note:** Avoid using [exists()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#exists()-detail) method along with dependencies. It does not check whether
> the dependency associated with the cached data, if there is any, has changed. So a call to
> [get()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#get()-detail) may return `false` while [exists()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#exists()-detail) returns `true`.

> **Warning:** Cached values are stored with PHP's native `serialize()` and read back with `unserialize()`, including any
> attached [yii\caching\Dependency](https://www.yiiframework.com/doc/api/22.0/yii-caching-dependency) object. Treat the cache backend as trusted storage: never let untrusted parties
> write to it, since deserializing crafted bytes can instantiate arbitrary objects. See
> [Avoiding unsafe deserialization](guide_22_0__security-best-practices.md#avoiding-unsafe-deserialization).

## Query Caching [¶](#query-caching)

Query caching is a special caching feature built on top of data caching. It is provided to cache the result
of database queries.

Query caching requires a [DB connection](https://www.yiiframework.com/doc/api/22.0/yii-db-connection) and a valid `cache` [application component](#cache-components).
The basic usage of query caching is as follows, assuming `$db` is a [yii\db\Connection](https://www.yiiframework.com/doc/api/22.0/yii-db-connection) instance:

```
$result = $db->cache(function ($db) {

    // the result of the SQL query will be served from the cache
    // if query caching is enabled and the query result is found in the cache
    return $db->createCommand('SELECT * FROM customer WHERE id=1')->queryOne();

});
```

Query caching can be used for [DAO](guide_22_0__db-dao.md) as well as [ActiveRecord](guide_22_0__db-active-record.md):

```
$result = Customer::getDb()->cache(function ($db) {
    return Customer::find()->where(['id' => 1])->one();
});
```

> **Info:** Some DBMS (e.g. [MySQL](https://dev.mysql.com/doc/refman/5.6/en/query-cache.html))
> also support query caching on the DB server-side. You may choose to use either query caching mechanism.
> The query caching described above has the advantage that you may specify flexible cache dependencies
> and are potentially more efficient.

Since 2.0.14 you can use the following shortcuts:

```
(new Query())->cache(7200)->all();
// and
User::find()->cache(7200)->all();
```

### Configurations [¶](#query-caching-configs)

Query caching has three global configurable options through [yii\db\Connection](https://www.yiiframework.com/doc/api/22.0/yii-db-connection):

- [enableQueryCache](https://www.yiiframework.com/doc/api/22.0/yii-db-connection#$enableQueryCache-detail): whether to turn on or off query caching.
  It defaults to `true`. Note that to effectively turn on query caching, you also need to have a valid
  cache, as specified by [queryCache](https://www.yiiframework.com/doc/api/22.0/yii-db-connection#$queryCache-detail).
- [queryCacheDuration](https://www.yiiframework.com/doc/api/22.0/yii-db-connection#$queryCacheDuration-detail): this represents the number of seconds
  that a query result can remain valid in the cache. You can use 0 to indicate a query result should
  remain in the cache forever. This property is the default value used when [yii\db\Connection::cache()](https://www.yiiframework.com/doc/api/22.0/yii-db-connection#cache()-detail)
  is called without specifying a duration.
- [queryCache](https://www.yiiframework.com/doc/api/22.0/yii-db-connection#$queryCache-detail): this represents the ID of the cache application component.
  It defaults to `'cache'`. Query caching is enabled only if there is a valid cache application component.

### Usages [¶](#query-caching-usages)

You can use [yii\db\Connection::cache()](https://www.yiiframework.com/doc/api/22.0/yii-db-connection#cache()-detail) if you have multiple SQL queries that need to take advantage of
query caching. The usage is as follows,

```
$duration = 60;     // cache query results for 60 seconds.
$dependency = ...;  // optional dependency

$result = $db->cache(function ($db) {

    // ... perform SQL queries here ...

    return $result;

}, $duration, $dependency);
```

Any SQL queries in the anonymous function will be cached for the specified duration with the specified dependency.
If the result of a query is found valid in the cache, the query will be skipped and the result will be served
from the cache instead. If you do not specify the `$duration` parameter, the value of
[queryCacheDuration](https://www.yiiframework.com/doc/api/22.0/yii-db-connection#$queryCacheDuration-detail) will be used instead.

Sometimes within `cache()`, you may want to disable query caching for some particular queries. You can use
[yii\db\Connection::noCache()](https://www.yiiframework.com/doc/api/22.0/yii-db-connection#noCache()-detail) in this case.

```
$result = $db->cache(function ($db) {

    // SQL queries that use query caching

    $db->noCache(function ($db) {

        // SQL queries that do not use query caching

    });

    // ...

    return $result;
});
```

If you just want to use query caching for a single query, you can call [yii\db\Command::cache()](https://www.yiiframework.com/doc/api/22.0/yii-db-command#cache()-detail) when building
the command. For example,

```
// use query caching and set query cache duration to be 60 seconds
$customer = $db->createCommand('SELECT * FROM customer WHERE id=1')->cache(60)->queryOne();
```

You can also use [yii\db\Command::noCache()](https://www.yiiframework.com/doc/api/22.0/yii-db-command#noCache()-detail) to disable query caching for a single command. For example,

```
$result = $db->cache(function ($db) {

    // SQL queries that use query caching

    // do not use query caching for this command
    $customer = $db->createCommand('SELECT * FROM customer WHERE id=1')->noCache()->queryOne();

    // ...

    return $result;
});
```

### Limitations [¶](#query-caching-limitations)

Query caching does not work with query results that contain resource handlers. For example,
when using the `BLOB` column type in some DBMS, the query result will return a resource
handler for the column data.

Some caching storage has size limitation. For example, memcache limits the maximum size
of each entry to be 1MB. Therefore, if the size of a query result exceeds this limit,
the caching will fail.

## Cache Flushing [¶](#cache-flushing)

When you need to invalidate all the stored cache data, you can call [yii\caching\Cache::flush()](https://www.yiiframework.com/doc/api/22.0/yii-caching-cache#flush()-detail).

You can flush the cache from the console by calling `yii cache/flush` as well.

- `yii cache`: lists the available caches in application
- `yii cache/flush cache1 cache2`: flushes the cache components `cache1`, `cache2` (you can pass multiple component
  names separated with space)
- `yii cache/flush-all`: flushes all cache components in the application
- `yii cache/flush-schema db`: clears DB schema cache for a given connection component

> **Info:** Console application uses a separate configuration file by default. Ensure, that you have the same caching
> components in your web and console application configs to reach the proper effect.

[Caching Overview](guide_22_0__caching-overview.md)

[Go to Top](#top)

[Fragment Caching](guide_22_0__caching-fragment.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/caching-data.md) !
