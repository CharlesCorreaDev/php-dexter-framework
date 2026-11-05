# phpDocumentor » \Fuel\Core\Asset_Instance

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Asset_Instance.html

---

PublicProtectedPrivateInherited

- Methods
- [Provide backward compatibility for old type methods

  ```
  __call()
  ```](#__call "__call :: Provide backward compatibility for old type methods")
- [Parse the config and initialize the object instance

  ```
  __construct()
  ```](#__construct "__construct :: Parse the config and initialize the object instance")
- [Adds the given path to the front of the asset paths array.

  ```
  add_path()
  ```](#add_path "add_path :: Adds the given path to the front of the asset paths array.")
- [Adds a new asset type to the list so we can load files of this type

  ```
  add_type()
  ```](#add_type "add_type :: Adds a new asset type to the list so we can load files of this type")
- [Asset type store.

  ```
  assettype()
  ```](#assettype "assettype :: Asset type store.")
- [Find File

  ```
  find_file()
  ```](#find_file "find_file :: Find File")
- [Get File

  ```
  get_file()
  ```](#get_file "get_file :: Get File")
- [Removes the given path from the asset paths array

  ```
  remove_path()
  ```](#remove_path "remove_path :: Removes the given path from the asset paths array")
- [Renders the given group.

  ```
  render()
  ```](#render "render :: Renders the given group.")
- » Protected
- [Parse Assets

  ```
  _parse_assets()
  ```](#_parse_assets "_parse_assets :: Parse Assets")
- [Unify the path

  ```
  _unify_path()
  ```](#_unify_path "_unify_path :: Unify the path")
- [CSS tag renderer

  ```
  render_css()
  ```](#render_css "render_css :: CSS tag renderer")
- [IMG tag renderer

  ```
  render_img()
  ```](#render_img "render_img :: IMG tag renderer")
- [JS tag renderer

  ```
  render_js()
  ```](#render_js "render_js :: JS tag renderer")
- Properties
- » Protected
- [<p>whether to append the file mtime to the url</p>

  ```
  $_add_mtime
  ```](#%24_add_mtime "$_add_mtime :: ")
- [<p>if true, will always true to resolve assets. if false, it will only try to resolve if the asset url is relative.</p>

  ```
  $_always_resolve
  ```](#%24_always_resolve "$_always_resolve :: ")
- [<p>the asset paths to be searched</p>

  ```
  $_asset_paths
  ```](#%24_asset_paths "$_asset_paths :: ")
- [<p>the URL to be prepended to all assets</p>

  ```
  $_asset_url
  ```](#%24_asset_url "$_asset_url :: ")
- [<p>if true, directly renders the output of no group name is given</p>

  ```
  $_auto_render
  ```](#%24_auto_render "$_auto_render :: ")
- [<p>if true the 'not found' exception will not be thrown and the asset is ignored.</p>

  ```
  $_fail_silently
  ```](#%24_fail_silently "$_fail_silently :: ")
- [<p>holds the groups of assets</p>

  ```
  $_groups
  ```](#%24_groups "$_groups :: ")
- [<p>prefix for generated output to provide proper indentation</p>

  ```
  $_indent
  ```](#%24_indent "$_indent :: ")
- [<p>the sub-folders to be searched</p>

  ```
  $_path_folders
  ```](#%24_path_folders "$_path_folders :: ")
- [<p>custom type renderers</p>

  ```
  $_renderers
  ```](#%24_renderers "$_renderers :: ")

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

## Provide backward compatibility for old type methods

```
__call($method, $args) : mixed
```

### Parameters

#### $method

#### $args

### Exceptions

|  |  |
| --- | --- |
| `\BadMethodCallException` |  |

### Returns

`mixed`

## Parse the config and initialize the object instance

```
__construct(array $config) 
```

### Parameters

#### $config

`array`

## Adds the given path to the front of the asset paths array.

```
add_path(string $path, string $type) : object
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

### Returns

`object`current instance

## Adds a new asset type to the list so we can load files of this type

```
add_type(string $type, string $path, \Fuel\Core\Closure $renderer) : object
```

### Parameters

#### $type

`string`

new path type

#### $path

`string`

optional default path

#### $renderer

`\Fuel\Core\Closure`

function to custom render this type

### Returns

`object`current instance

## Asset type store.

```
assettype(string $type, mixed $files, array $attr, string $group, boolean $raw) : string | object
```

Either adds the asset to the group, or directly return the tag.

### Parameters

#### $type

`string`

The asset type

#### $files

`mixed`

The file name, or an array files.

#### $attr

`array`

An array of extra attributes

#### $group

`string`

The asset group name

#### $raw

`boolean`

whether to return the raw file or not when group is not set (optional)

### Returns

`string``object`Rendered asset or current instance when adding to group

## Find File

```
find_file(string $file, string $type, string $folder) : mixed
```

Locates a file in all the asset paths.

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

## Get File

```
get_file(string $file, string $type, string $folder) : mixed
```

Locates a file in all the asset paths, and return it relative to the docroot

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

## Removes the given path from the asset paths array

```
remove_path(string $path, string $type) : object
```

### Parameters

#### $path

`string`

the path to remove

#### $type

`string`

optional path type (js, css or img)

### Returns

`object`current instance

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

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` |  |

### Returns

`string`the group's output

## Parse Assets

```
_parse_assets(string $type, mixed $assets, array $attr, string $group, bool $raw) : string
```

Pareses the assets and adds them to the group

### Parameters

#### $type

`string`

The asset type

#### $assets

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

### Returns

`string`

## Unify the path

```
_unify_path(string $path, mixed $ds, boolean $trailing) : string
```

make sure the directory separator in the path is correct for the
platform used, is terminated with a directory separator, and all
relative path references are removed

### Parameters

#### $path

`string`

The path

#### $ds

`mixed`

Optional directory separator

#### $trailing

`boolean`

Optional whether to add trailing directory separator

### Returns

`string`

## CSS tag renderer

```
render_css($file, $attr, $inline) : string
```

### Parameters

#### $file

#### $attr

#### $inline

### Returns

`string`

## IMG tag renderer

```
render_img($file, $attr, $inline) : string
```

### Parameters

#### $file

#### $attr

#### $inline

### Returns

`string`

## JS tag renderer

```
render_js($file, $attr, $inline) : string
```

### Parameters

#### $file

#### $attr

#### $inline

### Returns

`string`

### Properties

## <p>whether to append the file mtime to the url</p>

```
$_add_mtime : bool
```

## <p>if true, will always true to resolve assets. if false, it will only try to resolve if the asset url is relative.</p>

```
$_always_resolve : bool
```

## <p>the asset paths to be searched</p>

```
$_asset_paths : array
```

## <p>the URL to be prepended to all assets</p>

```
$_asset_url : string
```

## <p>if true, directly renders the output of no group name is given</p>

```
$_auto_render : bool
```

## <p>if true the 'not found' exception will not be thrown and the asset is ignored.</p>

```
$_fail_silently : bool
```

## <p>holds the groups of assets</p>

```
$_groups : array
```

## <p>prefix for generated output to provide proper indentation</p>

```
$_indent : string
```

## <p>the sub-folders to be searched</p>

```
$_path_folders : array
```

## <p>custom type renderers</p>

```
$_renderers : array
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
