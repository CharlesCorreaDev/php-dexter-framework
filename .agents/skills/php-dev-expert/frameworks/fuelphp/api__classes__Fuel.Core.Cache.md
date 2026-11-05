# phpDocumentor » \Fuel\Core\Cache

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Cache.html

---

PublicProtectedPrivateInherited

- Methods
- [Loads any default caching settings when available

  ```
  _init()
  ```](#_init "_init :: Loads any default caching settings when available")
- [Does get() & set() in one call that takes a callback and it's arguments to generate the contents

  ```
  call()
  ```](#call "call :: Does get() & set() in one call that takes a callback and it's arguments to generate the contents")
- [Frontend for deleting item from the cache, interchangeable storage methods.

  ```
  delete()
  ```](#delete "delete :: Frontend for deleting item from the cache, interchangeable storage methods.")
- [Flushes the whole cache for a specific storage driver or just a part of it when $section is set
  (might not work with all storage drivers), defaults to the default storage driver

  ```
  delete_all()
  ```](#delete_all "delete_all :: Flushes the whole cache for a specific storage driver or just a part of it when $section is set
  (might not work with all storage drivers), defaults to the default storage driver")
- [Creates a new cache instance.

  ```
  forge()
  ```](#forge "forge :: Creates a new cache instance.")
- [Front for reading the cache, ensures interchangeability of storage drivers.

  ```
  get()
  ```](#get "get :: Front for reading the cache, ensures interchangeability of storage drivers.")
- [Front for writing the cache, ensures interchangeability of storage drivers.

  ```
  set()
  ```](#set "set :: Front for writing the cache, ensures interchangeability of storage drivers.")

### Methods

## Loads any default caching settings when available

```
_init() 
```

## Does get() & set() in one call that takes a callback and it's arguments to generate the contents

```
call(mixed $identifier, string | array $callback, array $args, int $expiration, array $dependencies) : mixed
```

### Parameters

#### $identifier

`mixed`

The identifier of the cache, can be anything but empty

#### $callback

`string``array`

Valid PHP callback

#### $args

`array`

Arguments for the above function/method

#### $expiration

`int`

Cache expiration in seconds

#### $dependencies

`array`

Contains the identifiers of caches this one will depend on (not supported by all drivers!)

### Returns

`mixed`

## Frontend for deleting item from the cache, interchangeable storage methods.

```
delete(mixed $identifier) 
```

Actual operation
handled by delete() call on storage driver class

### Parameters

#### $identifier

`mixed`

The identifier of the cache, can be anything but empty

## Flushes the whole cache for a specific storage driver or just a part of it when $section is set (might not work with all storage drivers), defaults to the default storage driver

```
delete_all($section, $driver) : bool
```

### Parameters

#### $section

null|string

#### $driver

null|string

### Returns

`bool`

## Creates a new cache instance.

```
forge(mixed $identifier, array $config) : \Fuel\Core\Cache_Storage_Driver
```

### Parameters

#### $identifier

`mixed`

The identifier of the cache, can be anything but empty

#### $config

`array`

Either an array of settings or the storage driver to be used

### Returns

`\Fuel\Core\Cache_Storage_Driver`The new cache object

## Front for reading the cache, ensures interchangeability of storage drivers.

```
get(mixed $identifier, bool $use_expiration) : mixed
```

Actual reading
is being done by the \_get() method which needs to be extended.

### Parameters

#### $identifier

`mixed`

The identifier of the cache, can be anything but empty

#### $use\_expiration

`bool`

### Returns

`mixed`

## Front for writing the cache, ensures interchangeability of storage drivers.

```
set(mixed $identifier, mixed $contents, bool $expiration, array $dependencies) : \Fuel\Core\Cache_Storage_Driver
```

Actual writing
is being done by the \_set() method which needs to be extended.

### Parameters

#### $identifier

`mixed`

The identifier of the cache, can be anything but empty

#### $contents

`mixed`

The content to be cached

#### $expiration

`bool`

The time in seconds until the cache will expire, =< 0 or null means no expiration

#### $dependencies

`array`

Contains the identifiers of caches this one will depend on (not supported by all drivers!)

### Returns

`\Fuel\Core\Cache_Storage_Driver`The new Cache object

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
