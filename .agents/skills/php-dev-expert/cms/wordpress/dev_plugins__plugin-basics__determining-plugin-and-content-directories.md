# Determining Plugin and Content Directories – Plugin Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/plugins/plugin-basics/determining-plugin-and-content-directories/

---

# Determining Plugin and Content Directories

## In this article

Table of Contents

- [Common Usage](#common-usage)
- [Available Functions](#available-functions)
  - [Plugins](#plugins)
  - [Themes](#themes)
  - [Site Home](#site-home)
  - [WordPress](#wordpress)
  - [Multisite](#multisite)
- [Constants](#constants)
- [Related](#related)

Copy page
[View as Markdown](dev_plugins__plugin-basics__determining-plugin-and-content-directories.md)

[Back to top](#wp--skip-link--target)

When coding WordPress plugins you often need to reference various files and folders throughout the WordPress installation and within your plugin or theme.

WordPress provides several functions for easily determining where a given file or directory lives. Always use these functions in your plugins instead of hard-coding references to the wp-content directory or using the WordPress internal constants.

WordPress allows users to place their wp-content directory anywhere they want and rename it whatever they want. Never assume that plugins will be in wp-content/plugins, uploads will be in wp-content/uploads, or that themes will be in wp-content/themes.

PHP’s `__FILE__` magic-constant resolves symlinks automatically, so if the `wp-content` or `wp-content/plugins` or even the individual plugin directory is symlinked, hardcoded paths will not work correctly.

## [Common Usage](#common-usage)

If your plugin includes JavaScript files, CSS files or other external files, then it’s likely you’ll need the URL to these files so you can load them into the page. To do this you should use the [plugins\_url()](https://developer.wordpress.org/reference/functions/plugins_url/) function like so:

```
plugins_url( 'myscript.js', __FILE__ );
```

This will return the full URL to myscript.js, such as `example.com/wp-content/plugins/myplugin/myscript.js`.

To load your plugins’ JavaScript or CSS into the page you should use [`wp_enqueue_script()`](https://developer.wordpress.org/reference/functions/wp_enqueue_script/) or [`wp_enqueue_style()`](https://developer.wordpress.org/reference/functions/wp_enqueue_style/) respectively, passing the result of `plugins_url()` as the file URL.

## [Available Functions](#available-functions)

WordPress includes many other functions for determining paths and URLs to files or directories within plugins, themes, and WordPress itself. See the individual DevHub pages for each function for complete information on their use.

### [Plugins](#plugins)

```
plugins_url()
plugin_dir_url()
plugin_dir_path()
plugin_basename()
```

### [Themes](#themes)

```
get_template_directory_uri()
get_stylesheet_directory_uri()
get_stylesheet_uri()
get_theme_root_uri()
get_theme_root()
get_theme_roots()
get_stylesheet_directory()
get_template_directory()
```

### [Site Home](#site-home)

```
home_url()
get_home_path()
```

### [WordPress](#wordpress)

```
admin_url()
site_url()
content_url()
includes_url()
wp_upload_dir()
```

### [Multisite](#multisite)

```
get_admin_url()
get_home_url()
get_site_url()
network_admin_url()
network_site_url()
network_home_url()
```

## [Constants](#constants)

WordPress makes use of the following constants when determining the path to the content and plugin directories. These should not be used directly by plugins or themes, but are listed here for completeness.

```
WP_CONTENT_DIR  // no trailing slash, full paths only
WP_CONTENT_URL  // full url 
WP_PLUGIN_DIR  // full path, no trailing slash
WP_PLUGIN_URL  // full url, no trailing slash

// Available per default in MS, not set in single site install
// Can be used in single site installs (as usual: at your own risk)
UPLOADS // (If set, uploads folder, relative to ABSPATH) (for e.g.: /wp-content/uploads)
```

## [Related](#related)

****WordPress Directories****:

|  |  |  |
| --- | --- | --- |
| [home\_url()](https://developer.wordpress.org/reference/functions/home_url/) | Home URL | <http://www.example.com> |
| [site\_url()](https://developer.wordpress.org/reference/functions/site_url/) | Site directory URL | <http://www.example.com> or <http://www.example.com/wordpress> |
| [admin\_url()](https://developer.wordpress.org/reference/functions/admin_url/) | Admin directory URL | <http://www.example.com/wp-admin> |
| [includes\_url()](https://developer.wordpress.org/reference/functions/includes_url/) | Includes directory URL | <http://www.example.com/wp-includes> |
| [content\_url()](https://developer.wordpress.org/reference/functions/content_url/) | Content directory URL | <http://www.example.com/wp-content> |
| [plugins\_url()](https://developer.wordpress.org/reference/functions/plugins_url/) | Plugins directory URL | <http://www.example.com/wp-content/plugins> |
| [wp\_upload\_dir()](https://developer.wordpress.org/reference/functions/wp_upload_dir/) | Upload directory URL (returns an array) | <http://www.example.com/wp-content/uploads> |

First published

March 22, 2019

Last updated

February 20, 2024

[Previous
Best Practices
Previous: Best Practices](dev_plugins__plugin-basics__best-practices.md)

[Next
Including a Software License
Next: Including a Software License](dev_plugins__plugin-basics__including-a-software-license.md)
