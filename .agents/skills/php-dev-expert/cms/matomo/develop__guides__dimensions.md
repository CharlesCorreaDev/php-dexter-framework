# Dimensions: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/dimensions

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

#### Dimensions

- [Creating a new dimension](#creating-a-new-dimension)
- [Visit dimensions](#visit-dimensions)
- [Action dimensions](#action-dimensions)
- [Segmentation](#segmentation)
- [Learn more](#learn-more)

# Dimensions

Dimensions provide the possibility to extend the tracker to easily record any custom data. Before recording any custom data you have to decide what kind of dimension you need:

- A visit dimension lets you record any visitor related data. A typical dimension would be for example the name of the browser or the resolution of the device a visitor is using.
- An action dimension lets you track any action related data. For example a pageview, a download or an event.
- A conversion dimension lets you persist any additional information when a goal is converted.

## Creating a new dimension

To create a new dimension, use the console:

```
./console generate:dimension
```

The command will ask for your plugin name and what kind of dimension you'd like to create. You can choose between `visit`, `action` and `conversion`. Next it will ask you for the name of the dimension (eg 'Browsername'), for the MySQL database column name (eg `browser_name`) and column type (eg `VARCHAR(255) NOT NULL`).

Once all information is provided, a dimension class will be created in the `Columns` directory of your plugin containing an example on how to define which data should be tracked. The dimension will be automatically installed as soon as you open the Matomo UI.

## Visit dimensions

Let's assume you want to add a new tracking URL parameter `sport_activity_type` that lets you track the type of sport activity (eg running, cycling, ...). You can do this by implementing the method `onNewVisit`:

```
public function onNewVisit(Request $request, Visitor $visitor, $action)
{
    return Common::getRequestVar('sport_activity_type', $default = false, 'string', $request->getParams());
}
```

Whenever you send a `sport_activity_type` parameter with any tracking request and the tracker detected a new visitor, this information will be recorded in the database and can be used to create new reports or to extend existing reports and API methods. An example tracking URL could look like this `matomo.php?idsite=1&sport_activity_type=running`

Optionally, you can overwrite any initial value that was written when a new visit was detected by implementing the method `onExistingVisit`. You can use this for example for counters, to store the time of the last action etc:

```
public function onNewVisit(Request $request, Visitor $visitor, $action)
{
    return 1;
}

public function onExistingVisit(Request $request, Visitor $visitor, $action)
{
    return $visitor->getVisitorColumn($this->columnName) + 1;
}
```

When a new visitor is being tracked, the value `1` will be stored. On each further tracking request the value for this dimension will be increased.

## Action dimensions

Action dimensions work similarly, just the method name is different. Let's say you want to track the current speed of a runner by exposing a new URL parameter `speed`:

```
public function onNewAction(Request $request, Visitor $visitor, Action $action)
{
    $value = Common::getRequestVar('speed', false, 'string', $request->getParams());

    $isRunner = 'running' === $visitor->getVisitorColumn('sport_activity_type');

    if ($isRunner && is_numeric($value)) {
        // only store the value if it is a runner and if speed is numeric
        return $value;
    }

    return false; // do not store any value for this action
}
```

A tracking request could be done like this: `matomo.php?idsite=1&sport_activity_type=running&speed=50`.

Of course, you can add any custom behaviour like limiting the max speed etc.

## Segmentation

Since Matomo 3.2.0 a new segment is automatically created for a dimension when you define a `$segmentName` property. It is also recommended adjusting the description of the accepted values.

## Learn more

Dimensions are quite powerful. For example, you can change the behavior of an existing dimension by creating a dimension that has the same column name, you can store action related data efficiently by using a lookup table. Dimensions can also force the creation of a new visit in case an existing visitor was recognized. We recommend having a look at the documentation within a created dimension and at the API-Reference of the classes [VisitDimension](develop__api-reference__Piwik__Plugin__Dimension__VisitDimension.md), [ActionDimension](develop__api-reference__Piwik__Plugin__Dimension__ActionDimension.md) and [ConversionDimension](develop__api-reference__Piwik__Plugin__Dimension__ConversionDimension.md)
