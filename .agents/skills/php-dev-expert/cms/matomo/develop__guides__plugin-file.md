# Plugin file: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/plugin-file

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

#### Plugin file

- [Plugin hooks](#plugin-hooks)

# Plugin file

Each plugin can have a special file named `$PluginName.php` where you need to replace `$PluginName` with the name of your plugin. For example, if the name of your plugin is `CustomAlerts`, then this file would be `plugins/CustomAlerts/CustomAlerts.php`. Any such plugin class needs to extend `Piwik\Plugin`.

```
namespace Piwik\Plugins\CustomAlerts;

class CustomAlerts extends \Piwik\Plugin
{
}
```

Such a file doesn't need to exist in a plugin but most plugins do have such a file because they are listening to [events](develop__guides__events.md).

## Plugin hooks

There are special methods that can be overwritten in each plugin class.

For detailed information about below hooks and all the available plugin methods have a look at the [Plugin API reference](develop__api-reference__Piwik__Plugin.md).

```
// Allows you to listen to Matomo events.
public function registerEvents(): array;

// Defines whether the whole plugin requires a working internet connection. If set to true, the plugin will be automatically unloaded if `enable_internet_features` is 0, even if the plugin is activated.
public function requiresInternetConnection(): bool;

// Override this method in your plugin class if you want your plugin to be loaded during tracking. If you define your own dimension or listen to a tracking event, your plugin will be detected as a tracker plugin automatically.
public function isTrackerPlugin(): bool;

// Executed when the plugin is being installed. Useful to create or update DB tables or to set configurations.
public function install();

// Executed every time the plugin is activated.
public function activate();

// Executed after a plugin is loaded and translations are registered. Useful for initialization code that uses translated strings.
public function postLoad();

// Executed every time the plugin is deactivated.
public function deactivate();

// Executed when the plugin is being uninstalled. Useful to undo everything that was done in the install hook like removing a DB table.
public function uninstall();
```

If your plugin needs to change the database schema then you might also find our [extending the database guide](develop__guides__extending-database.md) useful.
