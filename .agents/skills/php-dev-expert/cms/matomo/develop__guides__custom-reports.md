# Custom Report: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/custom-reports

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

#### Custom Report

- [Adding a new report](#adding-a-new-report)
  - [Adding a menu item](#adding-a-menu-item "Adding a menu item")
  - [Making it a widget](#making-it-a-widget "Making it a widget")
- [Adding an API method](#adding-an-api-method)

# Custom Report

In our [Setting up](develop__guides__getting-started-part-1.md) guide you set up your development environment and created a new plugin. In this guide, we'll make that plugin show a custom report.

**Did you know?** You can create new custom reports in only seconds without any developer knowledge with the [Custom Reports premium feature](https://plugins.matomo.org/CustomReports).

## Adding a new report

We're going to create a new report that shows the browsers used for the most recent visits. We'll be using data returned by the [Live!](https://matomo.org/docs/real-time/#the-real-time-live-widget) plugin so we won't have to do much processing ourselves.

**On reports and metrics**

Reports and metrics are the two types of analytics data Matomo calculates and stores:

- *metrics* are just single values, like **visits**
- *reports* are two-dimensional arrays of values, usually metric values, and are stored using the [DataTable](develop__api-reference__Piwik__DataTable.md) class.

Additionally, each row of a report can link to another DataTable. These linked DataTables are called **subtables**.

To add a new report you should use the CLI tool and execute the following command:

```
$ ./console generate:report
```

This command will guide you through the creation of a report and ask for several things such as the name of your plugin and the name of the report you want to create. When it asks you for a report name, enter "Last Visits By Browser", choose the category "Visitors" by moving the arrow keys up or down and leave the dimension empty.

### Adding a menu item

The CLI tool has created a new file `Reports/GetLastVisitsByBrowser.php` within your plugin folder. We recommend taking the time to have a look at all the methods and comments to get an idea how a report is defined.

Links to Matomo's reporting pages are displayed on the main page under the logo:

![](/img/6.x/reporting_menu.png)

Making your report visible in the menu is as easy as opening the report class and defining a menu title in the `init()` method:

```
$this->subcategoryId = 'Real-time Reports';
```

Sometimes the title of the menu item is the same as the report name. In this case you can simplify the menu title definition as follows:

```
$this->subcategoryId = $this->name;
```

![](/img/6.x/myplugin_visitors_menu_item.png)

If you click on it, the page will be loaded below the period selector:

![](/img/6.x/myplugin_index_embed.png)

### Making it a widget

A widget allows users to add your report to the dashboard. It also lets them embed the report on other websites, for example using an iframe.

Making a widget is quite easy. Only define this `configureWidgets` method in the report class and you are done.

```
public function configureWidgets(WidgetsList $widgetsList, ReportWidgetFactory $factory)
{
    // we have to do it manually since it's only done automatically if a subcategoryId is specified,
    // we do not set a subcategoryId since this report is not supposed to be shown in the UI
    $widgetsList->addWidgetConfig($factory->createWidget());
}
```

#### Changing the widget name

By default the widget name will be the same as the report name. If you want to have a different widget name you can define
a name as follows:

```
public function configureWidgets(WidgetsList $widgetsList, ReportWidgetFactory $factory)
{
    $widget = $factory->createWidget()->setName('Live_RealTimeVisitorCount');
    $widgetsList->addWidgetConfig($widget);
}
```

#### Creating multiple widgets from one report

You can create as many widgets from one report as you want. In Matomo there are several reports that actually create 3 or
even more widgets out of one report. For example one widget with a default visualization that lets the user change the
visualization, one widget with an "Evolution" visualization and one widget with a set of "Sparklines" visualization.

```
public function configureWidgets(WidgetsList $widgetsList, ReportWidgetFactory $factory)
{
    // in this case it will render the configured default visualization
    $widgetsList->addWidgetConfig($factory->createWidget());

    $widgetsList->addWidgetConfig(
        $factory->createWidget()
            ->setName('Simple tag cloud')
            ->setSubcategoryId('Tag clouds')
            ->forceViewDataTable(Cloud::ID)
            ->setOrder(5)
    );
}
```

## Adding an API method

Reports and metrics are served by API class methods.

The report generator automatically creates this method for you so you just have to fill it. In your plugin's API class (stored in `API.php`), look for the following method:

```
public function getLastVisitsByBrowser($idSite, $period, $date, $segment = false)
{
    ...
}
```

**API parameters**

Every API method that serves a report or a metric will have the parameters listed above. This is because all analytics data describes log data that is tracked for a certain website and during a certain period. A [segment](https://matomo.org/docs/segmentation/) can be provided to further reduce the data that is analyzed, but it's optional (which is why the parameter defaults to `false`).

The website is determined by the `$idSite` parameter and the period by both the `$period` and `$date` parameters. The segment is determined by the value in the `$segment` parameter.

You can see the output of this method if you visit this URL: <http://localhost/index.php?module=API&method=MyPlugin.getLastVisitsByBrowser&idSite=1&date=today&period=week>.

Well, our simple custom report is almost done, now it is time to develop the API method that returns the report data! Learn about [building an API method](develop__guides__expose-api-methods.md) in the next guide, or read our [extended custom reports](develop__guides__custom-reports-extended.md) guide.
