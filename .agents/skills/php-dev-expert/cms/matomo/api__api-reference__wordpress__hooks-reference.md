# Hooks: API Reference - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/api-reference/wordpress/hooks-reference

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

#### Hooks

- [Filters](#filters)
- [Actions](#actions)
- [Need additional hooks?](#need-additional-hooks)

# Matomo for WordPress - Hooks

## Filters

- `matomo_tracking_code_script ($script, $idsite)`

  Plugins can modify the JavaScript tracking code which is embedded into the website to track visitors.
- `matomo_tracking_code_noscript ($noscript, $idsite)`

  Plugins can modify the `noscript` tracking code which is used when JavaScript is not enabled.
- `matomo_tracking_user_id ($user_id_to_track)`

  Plugins can customise which [User ID](https://matomo.org/docs/user-id/) is tracked if the User ID feature is enabled in tracking settings. For example you can anonymise the userId, or you can choose to only track specific users, etc.
- `matomo_report_summary_filter_limit ($limit)`

  Plugins can customise the default limit of how many rows are shown for each report within the Matomo Summary page.
- `matomo_report_summary_report_ids ($reports_to_show)`

  Defines which reports are shown on the Matomo Summary page. Plugins can remove or add additional reports by modifying `$reports_to_show`. For example `$reports_to_show[] = 'UserCountry_getRegion';`
- `matomo_setting_tabs ( $setting_tabs, \WpMatomo\Settings $settings )`

  Lets you remove or add a new tab to the Matomo Settings page. A tab needs to implement the `WpMatomo\Admin\AdminSettingsInterface` and add the tab like this: `$settings_tabs[] = new MyTab();`.
- `matomo_install_tables ( $table_names )`

  This may be needed if your WordPress plugin implements a Matomo plugin which creates a database table and you have automated PHPUnit tests. Say your plugin tracks custom data into a `log_weather` table. Then you would add `$table_names[] = 'log_weather'`. This will make sure to uninstall the table `wp_matomo_log_weather` table when the Matomo plugin is being uninstalled.
- `matomo_systemreport_tables ( $tables )`

  Lets plugin enrich or filter the Matomo system report. Each table is an array containing keys like `title` and `rows`. Each row contains array keys like `name`, `value`, `comment`, `is_warning`, and `is_error`.

## Actions

- `matomo_tracking_settings_changed ( \WpMatomo\Settings $settings )`

This action is triggered whenever Matomo settings have changed. You can use it to overwrite settings, get notified on setting changes, and more.

- `matomo_uninstall ( $should_remove_all_data )`

This action is executed after Matomo was uninstalled. The parameter `$should_remove_all_data` defines whether Matomo was supposed to delete all data.

- `matomo_uninstall_blog ( $should_remove_all_data )`

If WP MultiSites is used, this action is executed after a particular blog was uninstalled.

- `matomo_site_synced( int $idsite, int $blog_id )`

This action is executed each time a specific site in Matomo was synced / updated.

- `matomo_ecommerce_init ( \MatomoTracker $tracker )`

This action can be used to register support for additional ecommerce stores. The hook is triggered on plugin load if the user has ecommerce and tracking enabled. An instance of the [Matomo Tracker](https://github.com/matomo-org/matomo-php-tracker) is passed and can be used to track purchases etc server side if needed (eg during an ajax request).

## Need additional hooks?

[Let us know by creating an issue on our issue tracker](https://github.com/matomo-org/wp-matomo/issues)
