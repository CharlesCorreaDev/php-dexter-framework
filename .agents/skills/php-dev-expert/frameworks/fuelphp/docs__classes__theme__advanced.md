# Theme Advanced - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/theme/advanced.html

---

## Theme Class

The Theme class provides theming to your application.

### Asset support

Every Theme class instance has its own instance of the Asset class, to make it easy to load assets from the theme.
The Asset instance is populated with the asset paths of both the active and the fallback theme, which will provide
the same fallback features for your assets as you have for other theme elements like templates and views.

Example:

```
// load an asset using the default theme instance
echo \Theme::instance()->asset->css('bootstrap.css');
```

### Advanced configuration

The methods [active()](docs__classes__theme__methods.md#method_active), [fallback()](docs__classes__theme__methods.md#method_fallback),
[get\_info()](docs__classes__theme__methods.md#method_get_info) and [load\_info()](docs__classes__theme__methods.md#method_load_info) by default allow you
to pass a string with the name of an installed theme.
These methods allow you to pass an theme definition array instead, which makes it possible to pass extra configuration information.

The following theme variables are defined:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| name | string | **required** | The name of the theme. This must match to a folder in the path specified. |
| path | string | **required** | The path of the theme. This must include the name of the theme, and end with a directory separator. |
| asset\_base | string | **optional** | The base path to the assets of this theme, relative to the application **DOCROOT**. If outside the **DOCROOT**, the path should be fully qualified. It should end with a directory separator. If not specified, it will be constructed from the given theme path, the configured assets\_folder, and the configured base\_url. |
| info | array | **optional** | The theme's information array. If not defined, it will be created from the information in the theme info file. |
| find\_file | boolean | **optional** | If set to **true**, the [Finder::search()](docs__classes__finder.md#method_search) method will be used to locate view files and theme info files. |

Example:

```
// standard usage: create an instance and set the active theme
$theme = \Theme::forge();
$theme->active('darkglow');

// advanced usage
\Config::load('theme', true, false, true);
$config = \Config::get('theme', false);

// override a config value
$config['info_file_name'] = 'setupinfo.yaml';

// create the theme instance
$theme = \Theme::forge($config);

// set the active theme
$theme->active(
	array(
		'name' => 'darkglow',
		'path' => APPPATH.'themes'.DS.'darkglow'.DS,
		'asset_base' => '/themes/darkglow/assets/',
		'find_file' => true,
	)
);
	
```
