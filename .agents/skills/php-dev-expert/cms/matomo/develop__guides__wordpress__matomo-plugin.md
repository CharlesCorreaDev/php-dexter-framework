# Matomo Plugin: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/wordpress/matomo-plugin

---

#### [Develop](develop__develop.md)

- [Introduction](develop__guides__develop-introduction.md)
- Getting started
  - [Setting Up](develop__guides__getting-started-part-1.md)
  - [Distributing Your Plugin](develop__guides__distributing-your-plugin.md)
- Analytics
  - [Custom Report](develop__guides__custom-reports.md)
  - [Dimensions](develop__guides__dimensions.md)
  - [Widgets](develop__guides__widgets.md)
  - [Report visualizations](develop__guides__visualizing-report-data.md)
  - [Record Builder](develop__guides__writing-a-record-builder.md)
  - [JS Tracker](develop__guides__enrich-js-tracker.md)
- Tag Manager
  - [Setting Up](develop__guides__tagmanager__settingup.md)
  - [Tags](develop__guides__tagmanager__custom-tag.md)
  - [Triggers](develop__guides__tagmanager__custom-trigger.md)
  - [Variables](develop__guides__tagmanager__custom-variable.md)
  - [Parameters](develop__guides__tagmanager__parameters.md)
  - [Testing](develop__guides__tagmanager__testing.md)
  - [Developer FAQ](develop__guides__tagmanager__faq.md)
- WordPress
  - [Getting Started](develop__guides__wordpress__getting-started.md)
  - [Basics](develop__guides__wordpress__basics.md)
  - [Data Access](develop__guides__wordpress__data-access.md)
  - [Matomo Plugin](develop__guides__wordpress__matomo-plugin.md)
- Plugin Basics
  - [Themes](develop__guides__theming.md)
  - [Plugin file](develop__guides__plugin-file.md)
  - [Pages](develop__guides__pages.md)
  - [Menus](develop__guides__menus.md)
  - [Handling Request Parameters](develop__guides__request-parameters.md)
  - [API Methods](develop__guides__expose-api-methods.md)
  - [JavaScript and CSS](develop__guides__working-with-piwiks-ui.md)
  - [Plugin Settings](develop__guides__plugin-settings.md)
  - [Scheduled tasks](develop__guides__scheduled-tasks.md)
  - [Visitor log & profile](develop__guides__visitor-log-and-profile.md)
  - [Data Table](develop__guides__datatable.md)
  - [System check](develop__guides__system-check.md)
  - [Commands](develop__guides__piwik-on-the-command-line.md)
  - [Plugin Directory Structure](develop__guides__plugin-directory-structure.md)
  - [Dependency injection](develop__guides__dependency-injection.md)
  - [GDPR](develop__guides__gdpr.md)
- Security
  - [Security best practices](develop__guides__security-in-piwik.md)
  - [User permissions](develop__guides__permissions.md)
- Utils
  - [Events](develop__guides__events.md)
  - [Translations](develop__guides__translations.md)
  - [Notifications](develop__guides__notifications.md)
  - [Database](develop__guides__database.md)
  - [Extending the database](develop__guides__extending-database.md)
  - [Logging](develop__guides__logging.md)
  - [Sending Emails](develop__guides__sending-emails.md)
  - [Providing updates](develop__guides__providing-updates.md)
- [Tests](develop__guides__tests.md)
  - [PHP Tests](develop__guides__tests-php.md)
  - [UI Tests](develop__guides__tests-ui.md)
  - [JavaScript Tracker](develop__guides__tests-js-tracker.md)
  - [Running tests as GitHub Action](develop__guides__tests-github.md)
  - [Troubleshooting](develop__guides__tests-troubleshooting.md)
- Migrations
  - [Migrate Plugin from Matomo 5.X to Matomo 6](develop__guides__migrate-matomo-5-to-6.md)
  - [Migrate Plugin from Matomo 4.X to Matomo 5](develop__guides__migrate-matomo-4-to-5.md)
  - [Migrate Plugin from Matomo 3.X to Matomo 4](develop__guides__migrate-matomo-3-to-4.md)
  - [Migrate Plugin from Matomo 2.X to Matomo 3 (Matomo 3)](develop__guides__migrate-piwik-2-to-3.md)
- [Matomo In Depth](develop__piwik-in-depth.md)

#### Matomo Plugin

- [When you already have a Matomo plugin](#when-you-already-have-a-matomo-plugin)
  - [Example 1](#example-1 "Example 1")
  - [Example 2](#example-2 "Example 2")
- [Adding one or multiple Matomo plugins to a WordPress plugin](#adding-one-or-multiple-matomo-plugins-to-a-wordpress-plugin)
- [Changing plugin behaviour for WordPress / On-Premise](#changing-plugin-behaviour-for-wordpress-on-premise)

# Matomo Plugin within WordPress

## When you already have a Matomo plugin

- If you have built a Matomo plugin, and it is available on our Matomo Marketplace, and you don't want to make any special adjustments for WordPress, then your plugin will be automatically compatible with WordPress and it will work on a regular Matomo On-Premise installation as well as on WordPress.
- If you have already built a Matomo plugin and you want to integrate your plugin better with WordPress,
- or when your WordPress' plugin sole purpose is to integrate Matomo, then you can define a Matomo plugin as below.

If you have not yet already built a Matomo plugin, [start creating a regular Matomo plugin](develop__guides__getting-started-part-1.md).

To hook into WordPress within your Matomo plugin, you need to add below code at the beginning of your plugin file. Say your Matomo plugin is named `ClassicCounter`, then you add this code to the beginning of `ClassicCounter.php`:

```
<?php
/**
 * Plugin Name: Classic Counter
 * Description: This plugin lets you do something
 * Author: My Name
 * Author URI: https://www.example.com
 * Version: 1.0.0
 */

if (defined( 'ABSPATH') && function_exists('add_action')) {
    $path = '/matomo/app/core/Plugin.php';
    if (defined('WP_PLUGIN_DIR') && WP_PLUGIN_DIR && file_exists(WP_PLUGIN_DIR . $path)) {
        require_once WP_PLUGIN_DIR . $path;
    } elseif (defined('WPMU_PLUGIN_DIR') && WPMU_PLUGIN_DIR && file_exists(WPMU_PLUGIN_DIR . $path)) {
        require_once WPMU_PLUGIN_DIR . $path;
    } else {
        return; // do nothing if Matomo for WordPress is not installed
    }
    add_action('plugins_loaded', function () {
        $is_matomo_activated = function_exists('matomo_add_plugin');
        if ($is_matomo_activated) {
            matomo_add_plugin(__DIR__, __FILE__);
        }
    });
}
```

You can now simply copy your Matomo plugin within the `wp-content/plugins` folder of your WordPress and use it.

[View a plugin Example](https://github.com/matomo-org/matomo-wordpress-plugin-examples/tree/master/MatomoPluginAddingWordpressSupport)

#### Avoiding duplicate work

Because you need to duplicate the description and version information that you have already provided in `plugin.json`
in the above comment, you can instead use variables which the Matomo Marketplace will automatically replace with your
current plugin description and plugin version. For example:

```
 * Description: WP_DESCRIPTION_REPLACE
 * Version: WP_VERSION_REPLACE
```

#### Requiring a specific WordPress version

You may require a specific PHP or WordPress version by adding a comment like this:

```
 * RequiresWP: 5.3.0
```

### Example 1

Now you can for example add below code to hook into WordPress and it will only be executed if the plugin runs within WordPress.

```
if (defined( 'ABSPATH') && function_exists('add_action')) {
    // the Matomo plugin is used within wordpress...
    add_filter('post_row_actions', function ($actions, $post) {
        $actions['link_to_my_plugin'] = '<a target="_blank" href="'.\WpMatomo\Admin\Menu::make_matomo_action_link('MyPlugin', 'index').'">View My Matomo Plugin</a>';
        return $actions;
    }, 10, 2);
}
```

### Example 2

Say you are creating a plugin which lets you embed an image to view the number of visitors on your page. Then you could for example offer WordPress users a shortcode to embed the visitor counter image easily into their website using a shortcode:

```
if (defined( 'ABSPATH') && function_exists('add_action')) {
    add_shortcode( 'matomo_visitor_counter_image', function () {
        return \WpMatomo\Admin\Menu::make_matomo_action_link('MyPlugin', 'index');
    } );
}
```

## Adding one or multiple Matomo plugins to a WordPress plugin

If you want to add, customise, or remove behaviour within Matomo, you may want to create a Matomo plugin within your WordPress plugin.

You can do this by editing your WordPress plugin file. If the name of your WordPress plugin is `matomo_custom_exclude_visits`,
then you need to add below code to the `matomo_custom_exclude_visits.php` file.

```
add_action('plugins_loaded', function () {
    $is_matomo_plugin_activated = function_exists('matomo_add_plugin');
    if ($is_matomo_plugin_activated) {
        // you can add one more multiple Matomo plugins here
        matomo_add_plugin( __DIR__ . '/plugins/MyCustomPlugin', __FILE__ );
    }
});
```

Next, you need to create a directory named `plugins` within your WordPress plugin. There you can now put one or multiple Matomo plugins.

[View a WordPress plugin example](https://github.com/matomo-org/matomo-wordpress-plugin-examples/tree/master/wordpress-plugin-adding-matomo-plugin)

## Changing plugin behaviour for WordPress / On-Premise

Within you Matomo plugin, you can use below code to check if the plugin is running within Matomo for WordPress or Matomo On-Premise and behave differently if needed. Because this method was only added in Matomo 3.13.1, we recommend checking if the method exists so your plugin stays compatible with older versions of Matomo:

```
$isOnPremise = !method_exists('\Piwik\SettingsServer', 'isMatomoForWordPress') || !\Piwik\SettingsServer::isMatomoForWordPress();
$isWordPress = method_exists('\Piwik\SettingsServer', 'isMatomoForWordPress') && \Piwik\SettingsServer::isMatomoForWordPress();
```
