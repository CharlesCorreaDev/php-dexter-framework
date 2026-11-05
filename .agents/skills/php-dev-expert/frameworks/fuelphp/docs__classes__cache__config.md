# Cache Config - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/cache/config.html

---

## Cache Class

The cache class allows you to cache the result of a resource heavy operation.

### Configuration

The cache class's defaults are configured through the fuel/core/config/cache.php configuration file. It
is already populated with a default configuration. You can override this configuration adding a config file
with the same name to your application config directory, and set the values you want to change there. These
will overwrite the core config but keep what you didn't overwrite.

The following global configuration values can be defined:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| driver | string | ``` 'file' ``` | The default storage driver used for saving the caches. |
| expiration | int | ``` null ``` | The default number of seconds until expiration, used when no lifetime is given. When set to null it won't expire. |
| (type)\_handler | string | ``` serialize ``` | When caching strings nothing special happens unless when caching more complex things like objects, or even more primitive like doubles. For those cases there are "content handlers" included which can ensure you'll get your object back as the right kind of object. By default handlers are included for using PHP serialization and JSON encoding.  You can add your own or handle different kinds of objects/primitive types in different ways by adding handlers for each of them: 'int\_handler' => 'json', 'string\_handler' => 'string', 'Model\_Post' => 'serialize', etc... |

For each of the cache storage drivers, a separate configuration section exists. This section contains
the driver specific parameters.

##### File driver configuration

Saves the caches to the filesystem.

Specific driver configuration:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| path | string | ``` APPPATH.'cache/' ``` | Basepath for saving the caches. |

##### MemCached driver configuration

Specific driver configuration:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| cache\_id | string | ``` 'fuel' ``` | Unique id to distinguish fuel cache items from others stored on the same server(s). |
| servers | string | ``` array( 		array('host' => '127.0.0.1', 'port' => 11211, 'weight' => 100) 	) ``` | Array of servers and portnumbers that run the memcached service. |

##### Redis driver configuration

Specific driver configuration:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| database | string | ``` 'default' ``` | Name of the redis database to use (as configured in config/db.php) |
