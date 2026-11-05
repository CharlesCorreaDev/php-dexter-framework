# Cache Advanced - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/cache/advanced.html

---

## Cache Class

The cache class allows you to cache the result of a resource heavy operation.

### Advanced usage

Using cache as an object instance.

```
$options = array(...); //These are the same as in the cache config file.

$cache = Cache::forge('my_cache', $options)
```

Data can then be saved to the cache using the `set()` function.

```
$cache->set($myData, 604800);
```

This sets the data in one block and sets the expiration time to one week (604800 seconds). If the second parameter is set to null then the cache will never expire.

Data can be retrieved in the same way as when using `Cache` statically.
