# phpDocumentor » \Fuel\Core\Config_Db

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Config_Db.html

---

PublicProtectedPrivateInherited

- Methods
- [Sets up the file to be parsed and variables

  ```
  __construct()
  ```](#__construct "__construct :: Sets up the file to be parsed and variables")
- [Gets the default group name.

  ```
  group()
  ```](#group "group :: Gets the default group name.")
- [Loads the config file(s).

  ```
  load()
  ```](#load "load :: Loads the config file(s).")
- [Formats the output and saved it to disc.

  ```
  save()
  ```](#save "save :: Formats the output and saved it to disc.")
- » Protected
- [Parses a string using all of the previously set variables.

  ```
  parse_vars()
  ```](#parse_vars "parse_vars :: Parses a string using all of the previously set variables.")
- [Replaces FuelPHP's path constants to their string counterparts.

  ```
  prep_vars()
  ```](#prep_vars "prep_vars :: Replaces FuelPHP's path constants to their string counterparts.")
- Properties
- » Protected
- [$database

  ```
  $database
  ```](#%24database "$database :: ")
- [$ext

  ```
  $ext
  ```](#%24ext "$ext :: ")
- [$identifier

  ```
  $identifier
  ```](#%24identifier "$identifier :: ")
- [$table

  ```
  $table
  ```](#%24table "$table :: ")
- [$vars

  ```
  $vars
  ```](#%24vars "$vars :: ")

DB config data parser

### Methods

## Sets up the file to be parsed and variables

```
__construct(string $identifier, array $vars) 
```

### Parameters

#### $identifier

`string`

Config identifier name

#### $vars

`array`

Variables to parse in the data retrieved

## Gets the default group name.

```
group() : string
```

### Returns

`string`

## Loads the config file(s).

```
load(bool $overwrite, bool $cache) : array
```

### Parameters

#### $overwrite

`bool`

Whether to overwrite existing values

#### $cache

`bool`

This parameter will ignore in this implement.

### Exceptions

|  |  |
| --- | --- |
| `\Database_Exception` |  |

### Returns

`array`the config array

## Formats the output and saved it to disc.

```
save(\Fuel\Core\$contents $contents) : bool
```

### Parameters

#### $contents

`\Fuel\Core\$contents`

config array to save

### Returns

`bool`DB result

## Parses a string using all of the previously set variables.

```
parse_vars(string $string) : string
```

Allows you to
use something like %APPPATH% in non-PHP files.

### Parameters

#### $string

`string`

String to parse

### Returns

`string`

## Replaces FuelPHP's path constants to their string counterparts.

```
prep_vars(array $array) : array
```

### Parameters

#### $array

`array`

array to be prepped

### Returns

`array`prepped array

### Properties

## $database

```
$database 
```

## $ext

```
$ext 
```

## $identifier

```
$identifier 
```

## $table

```
$table 
```

## $vars

```
$vars 
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
