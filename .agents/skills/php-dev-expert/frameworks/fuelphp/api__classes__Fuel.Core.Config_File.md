# phpDocumentor » \Fuel\Core\Config_File

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Config_File.html

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
- [Must be implemented by child class.

  ```
  export_format()
  ```](#export_format "export_format :: Must be implemented by child class.")
- [Finds the given config files

  ```
  find_file()
  ```](#find_file "find_file :: Finds the given config files")
- [Must be implemented by child class.

  ```
  load_file()
  ```](#load_file "load_file :: Must be implemented by child class.")
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
- [$file

  ```
  $file
  ```](#%24file "$file :: ")
- [$vars

  ```
  $vars
  ```](#%24vars "$vars :: ")

A base Config File class for File based configs.

### Methods

## Sets up the file to be parsed and variables

```
__construct(string $file, array $vars) 
```

### Parameters

#### $file

`string`

Config file name

#### $vars

`array`

Variables to parse in the file

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

Whether to cache this path or not

### Returns

`array`the config array

## Formats the output and saved it to disc.

```
save(array $contents) : bool
```

### Parameters

#### $contents

`array`

config array to save

### Returns

`bool`\File::update result

## Must be implemented by child class.

```
export_format(array $contents) : string
```

Gets called when saving a config file.

### Parameters

#### $contents

`array`

config array to save

### Returns

`string`formatted output

## Finds the given config files

```
find_file(bool $cache) : array
```

### Parameters

#### $cache

`bool`

Whether to cache this path or not

### Exceptions

|  |  |
| --- | --- |
| `\ConfigException` |  |

### Returns

`array`

## Must be implemented by child class.

```
load_file(string $file) 
```

Gets called for each file to load.

### Parameters

#### $file

`string`

the path to the file

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

## $file

```
$file 
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
