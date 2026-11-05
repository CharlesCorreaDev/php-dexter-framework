# phpDocumentor » \Fuel\Core\Cache_Storage_Driver

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Cache_Storage_Driver.html

---

PublicProtectedPrivateInherited

- Methods
- [Allows for default getting and setting

  ```
  __call()
  ```](#__call "__call :: Allows for default getting and setting")
- [Default constructor, any extension should either load this first or act similar

  ```
  __construct()
  ```](#__construct "__construct :: Default constructor, any extension should either load this first or act similar")
- [Does get() & set() in one call that takes a callback and it's arguments to generate the contents

  ```
  call()
  ```](#call "call :: Does get() & set() in one call that takes a callback and it's arguments to generate the contents")
- [Should check all dependencies against the creation timestamp.

  ```
  check_dependencies()
  ```](#check_dependencies "check_dependencies :: Should check all dependencies against the creation timestamp.")
- [Should delete this cache instance, should also run reset() afterwards

  ```
  delete()
  ```](#delete "delete :: Should delete this cache instance, should also run reset() afterwards")
- [Flushes the whole cache for a specific storage type or just a part of it when $section is set
  (might not work with all storage drivers), defaults to the default storage type

  ```
  delete_all()
  ```](#delete_all "delete_all :: Flushes the whole cache for a specific storage type or just a part of it when $section is set
  (might not work with all storage drivers), defaults to the default storage type")
- [Front for reading the cache, ensures interchangeability of storage engines.

  ```
  get()
  ```](#get "get :: Front for reading the cache, ensures interchangeability of storage engines.")
- [Gets a specific content handler

  ```
  get_content_handler()
  ```](#get_content_handler "get_content_handler :: Gets a specific content handler")
- [Fetches contents

  ```
  get_contents()
  ```](#get_contents "get_contents :: Fetches contents")
- [Resets all properties except for the identifier, should be run by default when a delete() is triggered

  ```
  reset()
  ```](#reset "reset :: Resets all properties except for the identifier, should be run by default when a delete() is triggered")
- [Front for writing the cache, ensures interchangeability of storage engines.

  ```
  set()
  ```](#set "set :: Front for writing the cache, ensures interchangeability of storage engines.")
- [Set the contents with optional handler instead of the default

  ```
  set_contents()
  ```](#set_contents "set_contents :: Set the contents with optional handler instead of the default")
- [Converts the identifier to a string when necessary:
  A int is just converted to a string, all others are serialized and then md5'd

  ```
  stringify_identifier()
  ```](#stringify_identifier "stringify_identifier :: Converts the identifier to a string when necessary:
  A int is just converted to a string, all others are serialized and then md5'd")
- » Protected
- [Abstract method that should take care of the storage engine specific reading.

  ```
  _get()
  ```](#_get "_get :: Abstract method that should take care of the storage engine specific reading.")
- [Abstract method that should take care of the storage engine specific writing.

  ```
  _set()
  ```](#_set "_set :: Abstract method that should take care of the storage engine specific writing.")
- [Converts the cachable format to the original value

  ```
  handle_reading()
  ```](#handle_reading "handle_reading :: Converts the cachable format to the original value")
- [Converts the contents the cachable format

  ```
  handle_writing()
  ```](#handle_writing "handle_writing :: Converts the contents the cachable format")
- [Decides a content handler that makes it possible to write non-strings to a file

  ```
  set_content_handler()
  ```](#set_content_handler "set_content_handler :: Decides a content handler that makes it possible to write non-strings to a file")
- Properties
- » Protected
- [<p>defines which class properties are gettable with get\_... in the \_\_call() method</p>

  ```
  $_gettable
  ```](#%24_gettable "$_gettable :: ")
- [<p>defines which class properties are settable with set\_... in the \_\_call() method</p>

  ```
  $_settable
  ```](#%24_settable "$_settable :: ")
- [<p>name of the content handler driver</p>

  ```
  $content_handler
  ```](#%24content_handler "$content_handler :: ")
- [<p>the contents of this</p>

  ```
  $contents
  ```](#%24contents "$contents :: ")
- [<p>timestamp of creation of the cache</p>

  ```
  $created
  ```](#%24created "$created :: ")
- [<p>contains identifiers of other caches this one depends on</p>

  ```
  $dependencies
  ```](#%24dependencies "$dependencies :: ")
- [<p>loaded driver</p>

  ```
  $driver
  ```](#%24driver "$driver :: ")
- [<p>timestamp when this cache will expire</p>

  ```
  $expiration
  ```](#%24expiration "$expiration :: ")
- [<p>handles and formats the cache's contents</p>

  ```
  $handler_object
  ```](#%24handler_object "$handler_object :: ")
- [<p>the cache's name, either string or md5'd serialization of something else</p>

  ```
  $identifier
  ```](#%24identifier "$identifier :: ")

### Methods

## Allows for default getting and setting

```
__call($method, $args) : void | mixed
```

### Parameters

#### $method

string

#### $args

array

### Returns

`void``mixed`

## Default constructor, any extension should either load this first or act similar

```
__construct(string $identifier, array $config) 
```

### Parameters

#### $identifier

`string`

the identifier for this cache

#### $config

`array`

additional config values

## Does get() & set() in one call that takes a callback and it's arguments to generate the contents

```
call(string | array $callback, array $args, int | null $expiration, array $dependencies) : mixed
```

### Parameters

#### $callback

`string``array`

Valid PHP callback

#### $args

`array`

Arguments for the above function/method

#### $expiration

`int``null`

Cache expiration in seconds

#### $dependencies

`array`

Contains the identifiers of caches this one will depend on

### Returns

`mixed`

## Should check all dependencies against the creation timestamp.

```
check_dependencies(array $dependencies) : bool
```

This is static to make it possible in the future to check dependencies from other storages then the current one,
though I don't have a clue yet how to make that possible.

### Parameters

#### $dependencies

`array`

### Returns

`bool`either true or false on any failure

## Should delete this cache instance, should also run reset() afterwards

```
delete() 
```

## Flushes the whole cache for a specific storage type or just a part of it when $section is set (might not work with all storage drivers), defaults to the default storage type

```
delete_all($section) 
```

### Parameters

#### $section

string

## Front for reading the cache, ensures interchangeability of storage engines.

```
get(bool $use_expiration) : \Fuel\Core\Cache_Storage_Driver
```

Actual reading
is being done by the \_get() method which needs to be extended.

### Parameters

#### $use\_expiration

`bool`

### Exceptions

|  |  |
| --- | --- |
| `\CacheExpiredException` |  |
| `\CacheNotFoundException` |  |

### Returns

`\Fuel\Core\Cache_Storage_Driver`

## Gets a specific content handler

```
get_content_handler($handler) : \Fuel\Core\Cache_Handler_Driver
```

### Parameters

#### $handler

string

### Returns

`\Fuel\Core\Cache_Handler_Driver`

## Fetches contents

```
get_contents() : mixed
```

### Returns

`mixed`

## Resets all properties except for the identifier, should be run by default when a delete() is triggered

```
reset() 
```

## Front for writing the cache, ensures interchangeability of storage engines.

```
set(mixed $contents, bool $expiration, array $dependencies) 
```

Actual writing
is being done by the \_set() method which needs to be extended.

### Parameters

#### $contents

`mixed`

The content to be cached

#### $expiration

`bool`

The time in seconds until the cache will expire, =< 0 or null means no expiration

#### $dependencies

`array`

array of names on which this cache depends for

## Set the contents with optional handler instead of the default

```
set_contents($contents, $handler) : \Fuel\Core\Cache_Storage_Driver
```

### Parameters

#### $contents

mixed

#### $handler

string

### Returns

`\Fuel\Core\Cache_Storage_Driver`

## Converts the identifier to a string when necessary: A int is just converted to a string, all others are serialized and then md5'd

```
stringify_identifier(mixed $identifier) : string
```

### Parameters

#### $identifier

`mixed`

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` |  |

### Returns

`string`

## Abstract method that should take care of the storage engine specific reading.

```
_get() : bool
```

Needs to set the object properties:
- created
- expiration
- dependencies
- contents
- content\_handler

### Returns

`bool`success of the operation

## Abstract method that should take care of the storage engine specific writing.

```
_set() 
```

Needs to write the object properties:
- created
- expiration
- dependencies
- contents
- content\_handler

## Converts the cachable format to the original value

```
handle_reading($contents) : mixed
```

### Parameters

#### $contents

### Returns

`mixed`

## Converts the contents the cachable format

```
handle_writing($contents) : string
```

### Parameters

#### $contents

### Returns

`string`

## Decides a content handler that makes it possible to write non-strings to a file

```
set_content_handler($handler) : \Fuel\Core\Cache_Storage_Driver
```

### Parameters

#### $handler

string

### Returns

`\Fuel\Core\Cache_Storage_Driver`

### Properties

## <p>defines which class properties are gettable with get\_... in the \_\_call() method</p>

```
$_gettable : array
```

## <p>defines which class properties are settable with set\_... in the \_\_call() method</p>

```
$_settable : array
```

## <p>name of the content handler driver</p>

```
$content_handler : string
```

## <p>the contents of this</p>

```
$contents : mixed
```

## <p>timestamp of creation of the cache</p>

```
$created : int
```

## <p>contains identifiers of other caches this one depends on</p>

```
$dependencies : array
```

## <p>loaded driver</p>

```
$driver : string
```

## <p>timestamp when this cache will expire</p>

```
$expiration : int
```

## <p>handles and formats the cache's contents</p>

```
$handler_object : \Fuel\Core\Cache_Handler_Driver
```

## <p>the cache's name, either string or md5'd serialization of something else</p>

```
$identifier : string
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
