# phpDocumentor » \Fuel\Core\Config

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Config.html

---

PublicProtectedPrivateInherited

- Methods
- [Deletes a (dot notated) config item

  ```
  delete()
  ```](#delete "delete :: Deletes a (dot notated) config item")
- [Returns a (dot notated) config setting

  ```
  get()
  ```](#get "get :: Returns a (dot notated) config setting")
- [Loads a config file.

  ```
  load()
  ```](#load "load :: Loads a config file.")
- [Save a config array to disc.

  ```
  save()
  ```](#save "save :: Save a config array to disc.")
- [Sets a (dot notated) config item

  ```
  set()
  ```](#set "set :: Sets a (dot notated) config item")
- Properties
- [<p>the master config array</p>

  ```
  $items
  ```](#%24items "$items :: ")
- [<p>array of loaded files</p>

  ```
  $loaded_files
  ```](#%24loaded_files "$loaded_files :: ")
- » Protected
- [<p>the dot-notated item cache</p>

  ```
  $itemcache
  ```](#%24itemcache "$itemcache :: ")

### Methods

## Deletes a (dot notated) config item

```
delete(string $item) : array | bool
```

### Parameters

#### $item

`string`

a (dot notated) config key

### Returns

`array``bool`the \Arr::delete result, success boolean or array of success booleans

## Returns a (dot notated) config setting

```
get(string $item, mixed $default) : mixed
```

### Parameters

#### $item

`string`

name of the config item, can be dot notated

#### $default

`mixed`

the return value if the item isn't found

### Returns

`mixed`the config setting or default if not found

## Loads a config file.

```
load(mixed $file, mixed $group, bool $reload, bool $overwrite) : array
```

### Parameters

#### $file

`mixed`

string file | config array | Config\_Interface instance

#### $group

`mixed`

null for no group, true for group is filename, false for not storing in the master config

#### $reload

`bool`

true to force a reload even if the file is already loaded

#### $overwrite

`bool`

true for array\_merge, false for \Arr::merge

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` |  |

### Returns

`array`the (loaded) config array

## Save a config array to disc.

```
save(string $file, string | array $config) : bool
```

### Parameters

#### $file

`string`

desired file name

#### $config

`string``array`

master config array key or config array

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` |  |

### Returns

`bool`false when config is empty or invalid else \File::update result

## Sets a (dot notated) config item

```
set(string $item, mixed $value) 
```

### Parameters

#### $item

`string`

a (dot notated) config key

#### $value

`mixed`

the config value

### Properties

## <p>the master config array</p>

```
$items : array
```

## <p>array of loaded files</p>

```
$loaded_files : array
```

## <p>the dot-notated item cache</p>

```
$itemcache : array
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
