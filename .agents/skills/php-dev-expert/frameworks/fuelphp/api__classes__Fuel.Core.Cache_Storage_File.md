# phpDocumentor » \Fuel\Core\Cache_Storage_File

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Cache_Storage_File.html

---

PublicProtectedPrivateInherited

- Methods
- [\_\_construct()

  ```
  __construct()
  ```](#__construct "__construct :: ")
- [\_init()

  ```
  _init()
  ```](#_init "_init :: ")
- [Check if other caches or files have been changed since cache creation

  ```
  check_dependencies()
  ```](#check_dependencies "check_dependencies :: Check if other caches or files have been changed since cache creation")
- [Delete Cache

  ```
  delete()
  ```](#delete "delete :: Delete Cache")
- [Purge all caches

  ```
  delete_all()
  ```](#delete_all "delete_all :: Purge all caches")
- » Protected
- [Load a cache, this does the generic post-processing

  ```
  _get()
  ```](#_get "_get :: Load a cache, this does the generic post-processing")
- [Save a cache, this does the generic pre-processing

  ```
  _set()
  ```](#_set "_set :: Save a cache, this does the generic pre-processing")
- [validate a driver config value

  ```
  _validate_config()
  ```](#_validate_config "_validate_config :: validate a driver config value")
- [Translates a given identifier to a valid path

  ```
  identifier_to_path()
  ```](#identifier_to_path "identifier_to_path :: Translates a given identifier to a valid path")
- [Prepend the cache properties

  ```
  prep_contents()
  ```](#prep_contents "prep_contents :: Prepend the cache properties")
- [Remove the prepended cache properties and save them in class properties

  ```
  unprep_contents()
  ```](#unprep_contents "unprep_contents :: Remove the prepended cache properties and save them in class properties")
- Properties
- » Protected
- [<p>driver specific configuration</p>

  ```
  $config
  ```](#%24config "$config :: ")
- [<p>File caching basepath</p>

  ```
  $path
  ```](#%24path "$path :: ")
- Constants
- [PROPS\_TAG

  ```
  PROPS_TAG
  ```](#PROPS_TAG "PROPS_TAG :: ")

### Methods

## \_\_construct()

```
__construct($identifier, $config) 
```

### Parameters

#### $identifier

#### $config

## \_init()

```
_init() 
```

## Check if other caches or files have been changed since cache creation

```
check_dependencies(array $dependencies) : bool
```

### Parameters

#### $dependencies

array

### Returns

`bool`

## Delete Cache

```
delete() 
```

## Purge all caches

```
delete_all(string $section) : bool
```

### Parameters

#### $section

`string`

limit purge to subsection

### Returns

`bool`

## Load a cache, this does the generic post-processing

```
_get() : bool
```

### Returns

`bool`success

## Save a cache, this does the generic pre-processing

```
_set() : bool
```

### Returns

`bool`success

## validate a driver config value

```
_validate_config(string $name, mixed $value) : mixed
```

### Parameters

#### $name

`string`

name of the config variable to validate

#### $value

`mixed`

### Returns

`mixed`

## Translates a given identifier to a valid path

```
identifier_to_path($identifier) : string
```

### Parameters

#### $identifier

string

### Returns

`string`

## Prepend the cache properties

```
prep_contents() : string
```

### Returns

`string`

## Remove the prepended cache properties and save them in class properties

```
unprep_contents($payload) 
```

### Parameters

#### $payload

string

### Exceptions

|  |  |
| --- | --- |
| `\UnexpectedValueException` |  |

### Properties

## <p>driver specific configuration</p>

```
$config : array
```

## <p>File caching basepath</p>

```
$path : string
```

### Constants

## PROPS\_TAG

```
PROPS_TAG 
```

|  |  |
| --- | --- |
| const | string Tag used for opening & closing cache properties |

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
