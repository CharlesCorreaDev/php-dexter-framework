# Asset Config - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/asset/config.html

---

## Asset Class

The asset class is a set of methods to help with the collection, grouping and displaying of assets (js, css, img, or custom defined types).

### Configuration

The asset class's defaults are configured through the fuel/core/config/asset.php configuration file. It
is already populated with a default configuration. You can override this configuration adding a config file
with the same name to your application config directory, and set the values you want to change there. These
will overwrite the core config but keep what you didn't overwrite.

The following global configuration values can be defined:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| paths | array | ``` array('assets/') ``` | The default asset root paths. Paths must include a trailing slash. |
| css\_dir | string | ``` 'css/' ``` | The default css sub-folder. It must include a trailing slash. |
| js\_dir | string | ``` 'js/' ``` | The default js sub-folder. It must include a trailing slash. |
| img\_dir | string | ``` 'img/' ``` | The default image sub-folder. It must include a trailing slash. |
| folders | array | ``` array( 	'css' => array(), 	'js'  => array(), 	'img' => array(), ), ``` | To specify one or more individual asset folders per asset type. |
| url | string | ``` \Config::get('base_url') ``` | URL to the root of your assets. When loading an asset, the asset path and the asset name will be appended to this URL. |
| add\_mtime | bool | ``` true ``` | Whether to append the assets last modified timestamp to the url. This will aid in asset caching, and is recommended. |
| indent\_level | integer | ``` 1 ``` | To keep the generated HTML tidy, the Asset class can indent tags. This sets the level of indentation. |
| indent\_with | string | ``` "\t" ``` | String to indent the generated HTML with. This defaults to a single tab. |
| auto\_render | bool | ``` true ``` | This controls whether to return the generated HTML when an asset method is called without a group name. If false, the asset will be added to the default group to be rendered later. |
| fail\_silently | bool | ``` false ``` | When set to true the exception will not be thrown when an asset file is not found. The asset will then be ignored. |
| always\_resolve | bool | ``` false ``` | When set to true the Asset class will always try to resolve assets locally. When set to false, it will only resolve it the asset URL is relative (i.e. pointing to the local host itself). This is useful if you have a copy of your assets on a separate asset server, or behind an asset cache like Varnish. |

### Asset paths

There are several ways to define asset paths. You can define global asset search paths, which define the 'root'
of your assets. The sub-folder defined for the loaded asset is appended to these paths when searching for an asset.
If you use multiple global search paths, they must all use the same sub-folder structure.

```
// assuming:
// - your URL is "http://example.org/"
// - your global search path is "assets/"
// - your img_dir is "img/"
// this would return <img src="http://example.org/assets/img/icons/myicon.png" />
echo Asset::img('icons/myicon.png');
```

If you don't want a standard sub-folder structure, or you have to work in an existing environment in which
the asset paths are already defined, the Asset class allows you to define the individual asset search folders
for each type of asset supported.

```
// if this is your config
// 'folders' => array(
//	'css' => array('assets/css'),
//	'js'  => array('assets/js', 'global/js/'),
//	'img' => array('assets/img/', 'assets/icons'),
// ),
// and your icons are in 'assets/icons',
// this would return <img src="http://example.org/assets/icons/myicon.png" />
echo Asset::img('myicon.png');
```

Both search paths and search folders can be defined at runtime using the [add\_path()](docs__classes__asset__usage.md#method_add_path) method.

### Static assets

If (some of your) your assets are not stored within the docroot of the application but are using a different host in the URL,
you use the following techniques to load an asset:

```
// individually, per asset
echo Asset::img('http://static.example.org/icons/myicon.png');

// for all sets, set your Asset URL to 'http://static.example.org/'
echo Asset::img('icons/myicon.png');
```

In this case search paths are ignored.
