# Data Access: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/wordpress/data-access

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

#### Data Access

- [Direct data access without bootstrapping Matomo](#direct-data-access-without-bootstrapping-matomo)
- [Accessing data by bootstrapping Matomo](#accessing-data-by-bootstrapping-matomo)

# Matomo for WordPress - Data Access

Within your WordPress plugin, you can access any data that Matomo has stored. There are two ways to do this:

- Without bootstrapping Matomo
- With bootstrapping Matomo

When possible, it is recommended not bootstrapping Matomo for performance and stability reason. It possibly takes 50-250ms
to bootstrap Matomo depending on the server and it can slow down the WordPress experience. Matomo is very powerful and
therefore comes with a few dependencies. Not bootstrapping Matomo reduces the chances of WordPress breaking
because some other plugin requires a dependency we require as well.

Especially in the WordPress frontend we do not recommend bootstraping Matomo but instead query the database directly when possible.

## Direct data access without bootstrapping Matomo

You can fetch any data by fetching data directly from the WordPress database. This is not always recommended or practical but in
some cases this can be much faster and more reliable.

Example on how to fetch the list of configured goals:

```
$db_settings = new WpMatomo\Db\Settings();
$goal_table_name = $db_settings->prefix_table_name('goal');

global $wpdb;
$all_goals_configured_in_matomo = $wpdb->get_results('select * from ' . $goal_table_name);
```

[Learn more about Matomo database schema](develop__guides__database-schema.md)
[View a plugin example](https://github.com/matomo-org/matomo-wordpress-plugin-examples/tree/master/direct-data-access)

## Accessing data by bootstrapping Matomo

With just one method call you can bootstrap Matomo and afterwards access all it's
[HTTP API methods](develop__api-reference__reporting-api.md),
[PHP-APIs](develop__api-reference__classes.md) and
[Events](develop__api-reference__events.md).

Example on how to do an API call to request the list of goals and report data:

```
$site = new \WpMatomo\Site();
$idsite = $site->get_current_matomo_site_id();

if ($idsite) {
    \WpMatomo\Bootstrap::do_bootstrap();

    $all_goals_configured_in_matomo = \Piwik\API\Request::processRequest('Goals.getGoals', array(
        'idSite' => $idsite
    ));

    $country_report = \Piwik\API\Request::processRequest('UserCountry.getCountry', array(
        'idSite' => $idsite,
        'period' => 'day',
        'date' => 'today'
    ));
}
```

[View a plugin example](https://github.com/matomo-org/matomo-wordpress-plugin-examples/tree/master/bootstrap-matomo-data-access)

[Matomo Plugin](develop__guides__wordpress__matomo-plugin.md)
