# phpDocumentor » \Fuel\Core\Config_Php

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Config_Php.html

---

PublicProtectedPrivateInherited

- Methods
- [check the status of any opcache mechanism in use

  ```
  _init()
  ```](#_init "_init :: check the status of any opcache mechanism in use")
- [Formats the output and saved it to disk.

  ```
  save()
  ```](#save "save :: Formats the output and saved it to disk.")
- » Protected
- [Returns the formatted config file contents.

  ```
  export_format()
  ```](#export_format "export_format :: Returns the formatted config file contents.")
- [Loads in the given file and parses it.

  ```
  load_file()
  ```](#load_file "load_file :: Loads in the given file and parses it.")
- Properties
- » Protected
- [<p>the extension used by this config file parser</p>

  ```
  $ext
  ```](#%24ext "$ext :: ")
- [<p>whether or not we need to flush the opcode cache after a save</p>

  ```
  $flush_needed
  ```](#%24flush_needed "$flush_needed :: ")
- [<p>whether or not APC is in use</p>

  ```
  $uses_apc
  ```](#%24uses_apc "$uses_apc :: ")
- [<p>whether or not opcache is in use</p>

  ```
  $uses_opcache
  ```](#%24uses_opcache "$uses_opcache :: ")

PHP Config file parser

### Methods

## check the status of any opcache mechanism in use

```
_init() 
```

## Formats the output and saved it to disk.

```
save(\Fuel\Core\$contents $contents) : bool
```

### Parameters

#### $contents

`\Fuel\Core\$contents`

config array to save

### Returns

`bool`\File::update result

## Returns the formatted config file contents.

```
export_format(array $contents) : string
```

### Parameters

#### $contents

`array`

config array

### Returns

`string`formatted config file contents

## Loads in the given file and parses it.

```
load_file(string $file) : array
```

### Parameters

#### $file

`string`

File to load

### Returns

`array`

### Properties

## <p>the extension used by this config file parser</p>

```
$ext : string
```

## <p>whether or not we need to flush the opcode cache after a save</p>

```
$flush_needed : bool
```

## <p>whether or not APC is in use</p>

```
$uses_apc : bool
```

## <p>whether or not opcache is in use</p>

```
$uses_opcache : bool
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
