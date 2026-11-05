# Cache Usage - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/cache/usage.html

---

#### set($identifier, $contents = null, $expiration = false, $dependencies = array())

Writes a cache.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$identifier` | *string* | Name of the cache | | `$contents` | *mixed* | Contents to be cached | | `$expiration` | *int* | Amount of seconds until the cache expires. null will make it never expire, false makes it use the default expiration set in config. | | `$dependencies` | *array* | Array of identifiers this cache depends on, this cache expires if one of those is newer or doesn't exist anymore. | |
| Returns | void |
| Example | ``` // Cache 'String to be cached' for 3 hours with identifier "test" Cache::set('test', 'String to be cached.', 3600 * 3);  // You can add a section or directory of the cache with dot-notation Cache::set('test.test', 'String to be cached.', 3600 * 3); ``` |
