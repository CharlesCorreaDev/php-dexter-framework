# Menus: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/menus

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

#### Menus

- [Adding a menu item](#adding-a-menu-item)
  - [Top menu item](#top-menu-item "Top menu item")
  - [Admin menu item](#admin-menu-item "Admin menu item")
  - [Reporting menu item](#reporting-menu-item "Reporting menu item")

# Menus

Matomo contains 3 menus:

- the **top menu** (top-right of the page)

  ![](/img/6.x/menu-top.png)
- the **reporting menu** (which includes all the reports like "Actions" and "Visitors")

  ![](/img/6.x/menu-reporting.png)
- the **admin menu** (shown in the admin panel)

  ![](/img/6.x/menu-admin.png)

Plugins can add items to these menus by implementing a `Menu` class. To add new items to the reporting menu you need
to create a new [Widget](develop__guides__widgets.md).

## Adding a menu item

To add a menu class to your plugin, use the console:

```
$ ./console generate:menu
```

It will create a `plugins/MyPlugin/Menu.php` file:

```
class Menu extends \Piwik\Plugin\Menu
{
    public function configureTopMenu(MenuTop $menu)
    {
        // ...
    }

    public function configureAdminMenu(MenuAdmin $menu)
    {
        // ...
    }
}
```

Note: URLs can be built using the controller methods:

- `$this->urlForDefaultAction()` returns the default action (index) for the controller of this plugin
- `$this->urlForAction('foo')` returns the URL for the action `foo` for the controller of this plugin

### Top menu item

```
    public function configureTopMenu(MenuTop $menu)
    {
        $menu->addItem('My top item', null, $this->urlForDefaultAction());
    }
```

### Admin menu item

```
    public function configureAdminMenu(MenuAdmin $menu)
    {
        // add item to an existing category
        $menu->addSystemItem('My admin item', $this->urlForDefaultAction());
        $menu->addPlatformItem('My admin item', $this->urlForDefaultAction());

        // or create a custom category
        $menu->addItem('MyPlugin admin settings', 'My admin item', $this->urlForDefaultAction());
    }
```

### Reporting menu item

To add or change items in the reporting menu you need to create a new [Widget](develop__guides__widgets.md).
