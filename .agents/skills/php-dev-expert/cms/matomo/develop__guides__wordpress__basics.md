# Basics: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/wordpress/basics

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

#### Basics

- [Checking if Matomo plugin is enabled](#checking-if-matomo-plugin-is-enabled)
- [Checking for permissions](#checking-for-permissions)
- [Generating links to Matomo app](#generating-links-to-matomo-app)
  - [Generating a link to a reporting page](#generating-a-link-to-a-reporting-page "Generating a link to a reporting page")
  - [Generating a link to other pages](#generating-a-link-to-other-pages "Generating a link to other pages")

# Matomo for WordPress - Basics

Looking for some plugin examples? [Check out our Matomo for WordPress examples repository.](https://github.com/matomo-org/matomo-wordpress-plugin-examples)

## Checking if Matomo plugin is enabled

It is recommended to check if Matomo for WordPress plugin is actually installed and activated before accessing any of our
WordPress PHP APIs to prevent fatal errors:

```
if ( is_plugin_active('matomo/matomo.php') ) {
    // access one of our APIs
}
```

## Checking for permissions

You can use WordPress capabilities to check if a user has a certain Matomo capability within WordPress:

```
if (current_user_can('superuser_matomo') {
    // user has super user permission
}
current_user_can('admin_matomo');
current_user_can('write_matomo');
current_user_can('view_matomo');
```

Capabilities are inherited. This means a super user automatically also has admin, write and view permission.

[Learn more about user permissions](develop__guides__permissions.md)

## Generating links to Matomo app

Sometimes you might want to show links that point to the Matomo standalone app within WordPress. For example,
you might want to show a link to view a heatmap for the currently viewed page. This way, a user will be only one click away to see
related information within Matomo.

### Generating a link to a reporting page

Example:

```
\WpMatomo\Admin\Menu::get_matomo_reporting_url( $category = 'General_Visitors', $subcategory = 'General_Overview', $additional_url_params = array() );
// This will generate a link like this:
// https://example.com/wp-content/plugins/matomo/app/index.php?module=CoreHome&action=index&idSite=1&period=day&date=yesterday#?idSite=1&period=day&date=yesterday&category=General_Visitors&subcategory=General_Overview
// You can add additional url parameters if needed, for example array('idGoal' => 1)
```

The above example would send a user right to the Visitors => Overview reporting page.

### Generating a link to other pages

Example:

```
\WpMatomo\Admin\Menu::get_matomo_action_url( $module = 'PrivacyManager', $action = 'privacySettings', $additional_url_params = array() );
// This will generate a link like this:
// https://example.com/wp-content/plugins/matomo/app/index.php?module=PrivacyManager&action=privacySettings&idSite=1&period=day&date=yesterday
// You can add additional url parameters if needed, for example array('idGoal' => 1)
```

This link will show a specific controller action that is defined in a Matomo plugin.

[Data Access](develop__guides__wordpress__data-access.md)
