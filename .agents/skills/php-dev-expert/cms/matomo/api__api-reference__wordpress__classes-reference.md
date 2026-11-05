# Classes: API Reference - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/api-reference/wordpress/classes-reference

---

#### [API Reference](api__api-reference.md)

- [Introduction](api__api-reference__api-reference-introduction.md)
- Tracking
  - [Tracking HTTP API](api__api-reference__tracking-api.md)
  - [JavaScript Tracking Client](api__api-reference__tracking-javascript.md)
  - [Java Tracker](api__api-reference__tracking-java.md)
  - [PHP Tracking Client](api__api-reference__PHP-Matomo-Tracker.md)
- Tag Manager
  - [Tag Manager JavaScript API](api__api-reference__tagmanager__javascript-api-reference.md)
- Reporting HTTP API
  - [Reporting API Reference](api__api-reference__reporting-api.md)
  - [Metadata](api__api-reference__reporting-api-metadata.md)
  - [Segmentation](api__api-reference__reporting-api-segmentation.md)
  - [Compatible apiModule and apiAction combinations](api__api-reference__reporting-api-apiModule_apiAction-combinations.md)
- PHP Plugins API
  - [Classes](api__api-reference__classes.md)
  - [Events](api__api-reference__events.md)
  - [Index](api__api-reference__index.md)
- WordPress
  - [Classes](api__api-reference__wordpress__classes-reference.md)
  - [Hooks](api__api-reference__wordpress__hooks-reference.md)
  - [REST API](api__api-reference__wordpress__restapi-reference.md)
- Database
  - [Database schema](api__guides__database-schema.md)

#### Classes

- [\WpMatomo\Bootstrap](#wpmatomobootstrap)
- [\WpMatomo\Site](#wpmatomosite)
- [\WpMatomo\User](#wpmatomouser)
- [\WpMatomo\Capabilities](#wpmatomocapabilities)
- [\WpMatomo\API](#wpmatomoapi)
- [\WpMatomo\Settings](#wpmatomosettings)
- [\WpMatomo\Admin\Menu](#wpmatomoadminmenu)
- [\WpMatomo\Db\Settings](#wpmatomodbsettings)
- [Need additional APIs?](#need-additional-apis)

# Matomo for WordPress - PHP Classes API

This is the API Reference for developers who want to enrich the [Matomo for WordPress plugin](api__guides__wordpress__getting-started.md).

- `matomo_add_plugin($matomo_plugin_directory_path, $wp_plugin_filename, $is_marketplace_plugin = false)` - Registers a Matomo plugin. Set `$is_marketplace_plugin` to `true` if you have a Matomo plugin that you are putting on the Matomo Marketplace.
- `matomo_has_tag_manager()` - Detects if the Tag Manager feature is enabled/available.

## `\WpMatomo\Bootstrap`

- `::doBootstrap()` - Lets you bootstrap Matomo application within WordPress. Once Matomo is bootstrapped, you can access all [Matomo PHP API's](api__api-reference__classes.md).

## `\WpMatomo\Site`

- `get_current_matomo_site_id()` - Retrieve the idSite for the currently viewed / active blog.

## `\WpMatomo\User`

- `get_current_matomo_user_login()` - Get the Matomo user login name of the currently logged in WP user. The user login is usually the same as in WordPress but may differ.

## `\WpMatomo\Capabilities`

- `const KEY_VIEW` - View permission in Matomo
- `const KEY_WRITE` - At least write permission in Matomo
- `const KEY_ADMIN` - At least admin permission in Matomo
- `const KEY_SUPERUSER` - Super user permission in Matomo

Example:

```
if (current_user_can(\WpMatomo\Capabilities::KEY_SUPERUSER)) {
    // user has super user permission
}
```

## `\WpMatomo\API`

- `register_route ( $api_module, $api_method )` - Makes the given Matomo API method available through the WordPress Rest API.

## `\WpMatomo\Settings`

- `is_network_enabled()` - Detect if MultiSite is enabled and Matomo is network enabled.
- `get_global_option()` - Get a global configuration option. If Matomo is network enabled, then these options are not stored per blog but on network level and the same option applies to all blogs.
- `get_option()` - Get a configuration option. These options are always stored per blog.
- `apply_changes( $settings )` - Update the given configuration options, eg `array('track_mode' => 'disabled')`.
- `apply_tracking_related_changes( $settings )` - Same as `apply_changes()` but regenerates the tracking code afterwards. Should be used if tracking related options are being changed.

## `\WpMatomo\Admin\Menu`

- `get_matomo_reporting_url( $category, $subcategory, $params = array() )` - Generate a URL to a specific report in the standalone Matomo reporting UI.
- `get_matomo_action_url( $module, $action, $params = array() )` - Generate a URL to a specific controller action in the standalone Matomo UI.

## `\WpMatomo\Db\Settings`

- `prefix_table_name( $table_name )` - Prefix a Matomo table name. Applies the WordPress and the Matomo table prefix. For example "site" might become "wp\_matomo\_site".

## Need additional APIs?

[Let us know by creating an issue on our issue tracker](https://github.com/matomo-org/wp-matomo/issues)
