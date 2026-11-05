# phpDocumentor » \Fuel\Core\Asset

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Asset.html

---

PublicProtectedPrivateInherited

- Methods
- [Static call forwarder

  ```
  __callStatic()
  ```](#__callStatic "__callStatic :: Static call forwarder")
- [This is called automatically by the Autoloader.

  ```
  _init()
  ```](#_init "_init :: This is called automatically by the Autoloader.")
- [Adds the given path to the front of the asset paths array.

  ```
  add_path()
  ```](#add_path "add_path :: Adds the given path to the front of the asset paths array.")
- [CSS

  ```
  css()
  ```](#css "css :: CSS")
- [Find File

  ```
  find_file()
  ```](#find_file "find_file :: Find File")
- [Gets a new instance of the Asset class.

  ```
  forge()
  ```](#forge "forge :: Gets a new instance of the Asset class.")
- [Get File

  ```
  get_file()
  ```](#get_file "get_file :: Get File")
- [Img

  ```
  img()
  ```](#img "img :: Img")
- [Return a specific instance, or the default instance (is created if necessary)

  ```
  instance()
  ```](#instance "instance :: Return a specific instance, or the default instance (is created if necessary)")
- [JS

  ```
  js()
  ```](#js "js :: JS")
- [Removes the given path from the asset paths array

  ```
  remove_path()
  ```](#remove_path "remove_path :: Removes the given path from the asset paths array")
- [Renders the given group.

  ```
  render()
  ```](#render "render :: Renders the given group.")
- Properties
- » Protected
- [default instance

  ```
  $_instance
  ```](#%24_instance "$_instance :: default instance")
- [All the Asset instances

  ```
  $_instances
  ```](#%24_instances "$_instances :: All the Asset instances")
- [Default configuration values

  ```
  $default_config
  ```](#%24default_config "$default_config :: Default configuration values")

The Asset class allows you to easily work with your apps assets.

It allows you to specify multiple paths to be searched for the
assets.

You can configure the paths by copying the core/config/asset.php
config file into your app/config folder and changing the settings.

|  |  |
| --- | --- |
| package | [Fuel](api__packages__Fuel.Core.md) |
| subpackage | Core |

### Methods

## Static call forwarder

```
__callStatic(string $method, array $args) : mixed
```

This can be used when new asset types have been dynamically added

### Parameters

#### $method

`string`

method name

#### $args

`array`

passed arguments

### Exceptions

|  |  |
| --- | --- |
| `\BadMethodCallException` |  |

### Returns

`mixed`

## This is called automatically by the Autoloader.

```
_init() : void
```

It loads in the config

## Adds the given path to the front of the asset paths array.

```
add_path(string $path, string $type) : void
```

It adds paths
in a way so that asset paths are used First in Last Out.

### Parameters

#### $path

`string`

the path to add

#### $type

`string`

optional path type (js, css or img)

## CSS

```
css(mixed $stylesheets, array $attr, string $group, bool $raw) : string
```

Either adds the stylesheet to the group, or returns the CSS tag.

### Parameters

#### $stylesheets

`mixed`

The file name, or an array files.

#### $attr

`array`

An array of extra attributes

#### $group

`string`

The asset group name

#### $raw

`bool`

whether to return the raw file or not when group is not set

### Returns

`string`

## Find File

```
find_file(string $file, string $type, string $folder) : mixed
```

Locates a file in all the asset paths.

|  |  |
| --- | --- |
| access | public |

### Parameters

#### $file

`string`

The filename to locate

#### $type

`string`

The type of asset file to search

#### $folder

`string`

The sub-folder to look in (optional)

### Returns

`mixed`Either the path to the file or false if not found

## Gets a new instance of the Asset class.

```
forge(string $name, array $config) : \Fuel\Core\Asset_Instance
```

### Parameters

#### $name

`string`

instance name

#### $config

`array`

default config overrides

### Returns

`\Fuel\Core\Asset_Instance`

## Get File

```
get_file(string $file, string $type, string $folder) : mixed
```

Locates a file in all the asset paths, and return it relative to the docroot

|  |  |
| --- | --- |
| access | public |

### Parameters

#### $file

`string`

The filename to locate

#### $type

`string`

The type of asset file

#### $folder

`string`

The sub-folder to look in (optional)

### Returns

`mixed`Either the path to the file or false if not found

## Img

```
img(mixed $images, array $attr, string $group) : string
```

Either adds the image to the group, or returns the image tag.

|  |  |
| --- | --- |
| access | public |

### Parameters

#### $images

`mixed`

The file name, or an array files.

#### $attr

`array`

An array of extra attributes

#### $group

`string`

The asset group name

### Returns

`string`

## Return a specific instance, or the default instance (is created if necessary)

```
instance(string $instance) : \Fuel\Core\Asset_Instance
```

### Parameters

#### $instance

`string`

instance name

### Returns

`\Fuel\Core\Asset_Instance`

## JS

```
js(mixed $scripts, array $attr, string $group, bool $raw) : string
```

Either adds the javascript to the group, or returns the script tag.

### Parameters

#### $scripts

`mixed`

The file name, or an array files.

#### $attr

`array`

An array of extra attributes

#### $group

`string`

The asset group name

#### $raw

`bool`

whether to return the raw file or not when group is not set

### Returns

`string`

## Removes the given path from the asset paths array

```
remove_path(string $path, $type) : void
```

### Parameters

#### $path

`string`

the path to remove

#### $type

## Renders the given group.

```
render(mixed $group, bool $raw) : string
```

Each tag will be separated by a line break.
You can optionally tell it to render the files raw. This means that
all CSS and JS files in the group will be read and the contents included
in the returning value.

### Parameters

#### $group

`mixed`

the group to render

#### $raw

`bool`

whether to return the raw file or not

### Returns

`string`the group's output

### Properties

## default instance

```
$_instance : array
```

## All the Asset instances

```
$_instances : array
```

## Default configuration values

```
$default_config : array
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
