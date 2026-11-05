# Report visualizations: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/visualizing-report-data

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

#### Report visualizations

- [Report visualizations](#report-visualizations)
  - [Using ViewDataTable](#using-viewdatatable "Using ViewDataTable")
  - [Configuring ViewDataTable](#configuring-viewdatatable "Configuring ViewDataTable")
  - [Displaying reports on a page](#displaying-reports-on-a-page "Displaying reports on a page")
  - [Displaying reports in the Dashboard](#displaying-reports-in-the-dashboard "Displaying reports in the Dashboard")
- [Core report visualizations](#core-report-visualizations)
- [Creating new visualizations](#creating-new-visualizations)
  - [Extending ViewDataTable](#extending-viewdatatable "Extending ViewDataTable")
  - [Extending ViewDataTable's JavaScript](#extending-viewdatatables-javascript "Extending ViewDataTable's JavaScript")
  - [Styling your visualization](#styling-your-visualization "Styling your visualization")
- [Learn more](#learn-more)

# Report visualizations

In Matomo (formerly Piwik), an **analytics report** is just a set of two-dimensional data, stored as [DataTable](develop__guides__datatable.md) objects and returned by API methods.

Controllers can display these reports using the [**ViewDataTable**](develop__api-reference__Piwik__Plugin__ViewDataTable.md) class: this is called a **report visualization**.

Report visualizations can be in any format. For example, the *sparkline* visualization outputs an image. However, most visualizations will output an HTML widget that allows users to switch between different visualizations.

## Report visualizations

A report visualization is a class extending [ViewDataTable](develop__api-reference__Piwik__Plugin__ViewDataTable.md).

Every visualization has a unique ID that is specified by a class constant named `ID`. They are referred to by this ID, not their class name, because they must be able to be specified in the `viewDataTable` query parameter. Using a fully qualified class name would be too verbose.

The `viewDataTable` query parameter is set by [ViewDataTable](develop__api-reference__Piwik__Plugin__ViewDataTable.md)'s associated JavaScript code. It represents the user's choice of view (made by clicking on a visualization's footer icon) and thus will override any visualization type specified in code.

Users can switch visualizations by clicking on one of the icons displayed below the visualization itself:

![](/img/6.x/report-visualizations.png)

These icons are called **footer icons**. Not all visualizations have to be available in this manner. For example, the [Visit Log](https://matomo.org/docs/real-time/) uses its own visualization, but since it can only use data from one report (`Live.getLastVisitsDetails`) it is not available in the footer of other reports.

To learn more about the controls that surround a visualization in most report displays, [read the user documentation for report visualizations](https://matomo.org/docs/matomo-tour/#a-look-at-a-piwik-report).

### Using ViewDataTable

There are two ways to output a visualization for a report in a controller.

The most succinct way is to call the [`Controller::renderReport()`](develop__api-reference__Piwik__Plugin__Controller.md#renderreport) method:

```
class Controller
{
    public function myReport()
    {
        return $this->renderReport(__FUNCTION__);
    }
}
```

This method will create a new `ViewDataTable` instance and render it. The report can be configured via the [`ViewDataTable.configure`](develop__api-reference__events.md#viewdatatableconfigure) event ([read more about Events](develop__guides__events.md)).

The other way is to manually create and configure a `ViewDataTable` instance:

```
class Controller
{
    public function myReport()
    {
        $view = \Piwik\ViewDataTable\Factory::build(
            $defaultType = 'table', // the visualization type
            $apiAction = 'MyPlugin.myReport',
            $controllerMethod = 'MyPlugin.myReport',
        );
        $view->config->show_limit_control = false;
        $view->config->show_search = false;
        $view->config->show_goals = true;

        // ... do some more configuration ...

        return $view->render();
    }
}
```

[`ViewDataTable::render()`](develop__api-reference__Piwik__Plugin__ViewDataTable.md#render) will retrieve the report by calling the reporting API and return HTML to be displayed.

*Note: The report visualization will refresh itself using AJAX, which means **there must be a controller method for each report** (as shown in the example above). You can use `ViewDataTable` outside of a controller method, but it must still reference a controller method.*

### Configuring ViewDataTable

`ViewDataTable` instances are configured by setting properties of:

- `$view->config` ([`Config`](develop__api-reference__Piwik__ViewDataTable__Config.md) object): how the report is displayed
- `$view->requestConfig` ([`RequestConfig`](develop__api-reference__Piwik__ViewDataTable__RequestConfig.md) object): how the data is obtained and, in part, what is displayed

### Displaying reports on a page

Once a controller method for a report exist, displaying it on a page is straightforward:

```
class Controller
{
    // Page
    public function index()
    {
        $view = new View("@MyPlugin/index.twig");
        // Generate the report visualization to use it in the view
        $view->myReport = $this->myReport();
        return $view->render();
    }

    // Report method
    public function myReport()
    {
        return $this->renderReport(__FUNCTION__);
    }
}
```

The `index.twig` template will look like this:

```
<h1>My Report</h1>

{{ myReport }}
```

### Displaying reports in the Dashboard

A report can be made available to the dashboard by defining a widget. The recommended approach is to configure widgets in your report's `configureWidgets()` method using `WidgetConfig` objects:

```
class GetMyReport extends \Piwik\Plugin\Report
{
    protected function configureWidgets(WidgetsList $widgetsList, ReportWidgetFactory $factory)
    {
        $widget = $factory->createWidget();
        $widgetsList->addWidgetConfig($widget);
    }
}
```

Alternatively, you can create a standalone widget class in your plugin's `Widgets/` directory.

Matomo users will then be able to see and select **myReport** in the widget selector.

*Note: Any controller method can be embedded in the dashboard, not just reports. So if you have a popup that you'd like to make available as a dashboard widget, you can create a widget class for it. This is exactly how we made the [Visitor Profile](https://matomo.org/docs/user-profile/) available in the dashboard.*

## Core report visualizations

The following is a list of visualizations, called **Core Visualizations**, that are available by default (listed by their *viewDataTable ID*):

- `table`: table of rows and columns (the main visualization used to view reports)
- `tableAllColumns`: same as `table` but includes a couple of extra processed metrics
- `tableGoals`: same as `table` but includes goal metrics and goals of the website
- `graphVerticalBar`: vertical bar graph (uses *jqPlot*)
- `graphPie`: pie graph (uses *jqPlot*)
- `graphEvolution`: line graph showing the evolution of a set of reports over time (metrics are displayed as different series)
- `cloud`: tag cloud of report labels. The font size of each label is proportional to a given metric.
- `sparkline`: line graph showing the evolution of one metric over time. Outputs an image as opposed to HTML.

You can use these visualizations when creating [ViewDataTable](develop__api-reference__Piwik__Plugin__ViewDataTable.md) instances without having to install third-party plugins.

## Creating new visualizations

Plugins can provide their own visualizations, either for use within the plugin or as a new visualization that can be applied to any report.

The [Treemap Visualization](https://plugins.matomo.org/TreemapVisualization) plugin is an example of a plugin providing a visualization that can be used for any report.

### Extending ViewDataTable

To create a visualization that will not output HTML, then extend directly from `ViewDataTable`.

To create an HTML visualization, extend from [`Visualization`](develop__api-reference__Piwik__Plugin__Visualization.md) instead. This base class provides common behavior you see in all core visualizations: show the footer icons, the limit selector, the report documentation, the search box...

#### ViewDataTable metadata

In your new class, the first thing you want to do is set the necessary visualization metadata using class constants:

- `ID` *(required)*: unique ID which will be set in the `viewDataTable` query parameter
- `TEMPLATE_FILE` *(required)*: reference to a Twig template file, e.g. `"@MyPlugin/_myDataTableViz.twig"`
- `FOOTER_ICON`: relative path to an icon to display in the footer of the visualization
- `FOOTER_ICON_TITLE`: tooltip to use when the user hovers over the footer icon (can be a [translation token](develop__guides__internationalization.md))

An example:

```
class MyVisualization extends Visualization
{
    const ID = 'myvisualization';
    const TEMPLATE_FILE = '@MyPlugin/_myVisualization.twig';
    const FOOTER_ICON = 'plugins/MyPlugin/images/myvisualization.png';
    const FOOTER_ICON_TITLE = 'My Visualization';
}
```

#### Adding new display properties

Visualizations can define their own display properties (in addition to what is available in [Config](develop__api-reference__Piwik__ViewDataTable__Config.md)) by creating their own `Config` class. This new class must derive from [Config](develop__api-reference__Piwik__ViewDataTable__Config.md) and the visualization must provide an override for the [`getDefaultConfig()`](develop__api-reference__Piwik__Plugin__ViewDataTable.md#getdefaultconfig) method that creates an instance of this new class. For example:

```
class MyVisualizationConfig extends Config
{
    public $showMagicWidget = true;
    public $showDisclaimer = false;
}

class MyVisualization extends Visualization
{
    // ...

    public static function getDefaultConfig()
    {
        return new MyVisualizationConfig();
    }
}

class Controller
{
    public function myReport($fetch = false)
    {
        $view = \Piwik\ViewDataTable\Factory::build(
            $defaultType = MyVisualization::ID,
            $apiAction = 'MyPlugin.myReport',
            $controllerMethod = 'MyPlugin.myReport',
        );

        $view->config->showMagicWidget = false;

        return $view->render();
    }
}
```

Visualizations can also create their own [RequestConfig](develop__api-reference__Piwik__ViewDataTable__RequestConfig.md) class for properties that affect the request. The process is the same as shown above.

#### Changing what data is loaded

If needed, custom visualizations can alter what data is loaded by the base `ViewDataTable` class.

The evolution graph visualization does this to get reports for the last N periods so it can display data over time. The [treemap visualization](https://plugins.matomo.org/TreemapVisualization) does this to get data for last period so the percent change of each row can be displayed.

To change what data is loaded, visualizations can alter the request using the [`$request_parameters_to_modify`](develop__api-reference__Piwik__ViewDataTable__RequestConfig.md#request_parameters_to_modify) property. This can be done in the [`Visualization::beforeLoadDataTable()`](develop__api-reference__Piwik__Plugin__Visualization.md#beforeloaddatatable) method. For example:

```
class MyVisualization extends Visualization
{
    // ...

    public function beforeLoadDataTable()
    {
        $date = Common::getRequestVar('date');
        $yesterday = Date::factory($date)->subDay(1)->toString();

        $this->requestConfig->request_parameters_to_modify['date'] = $yesterday;
    }
}
```

*Note: If you change what data is loaded, you may also need to override the [`Visualization::isThereDataToDisplay()`](develop__api-reference__Piwik__Plugin__Visualization.md#istheredatatodisplay) method. Otherwise, the 'no data' message may not appear even if there is no data for the report you are displaying.*

#### Manipulating report data before displaying

Visualizations can modify report data after it is loaded by overriding one of the following methods:

- [`beforeGenericFiltersAreAppliedToLoadedDataTable()`](develop__api-reference__Piwik__Plugin__Visualization.md#beforeGenericFiltersAreAppliedToLoadedDataTable): Called by `Visualization` after report data is loaded and after priority filters in the [`$filters`](develop__api-reference__Piwik__ViewDataTable__Config.md#%24filters) display property are executed. Called before [generic filters](develop__guides__piwiks-reporting-api.md#extra-report-processing) are executed.

  *Override this method if you need to use the report's full data (ie, before it has been limited/truncated/sorted/etc.).*
- [`afterGenericFiltersAreAppliedToLoadedDataTable()`](develop__api-reference__Piwik__Plugin__Visualization.md#afterGenericFiltersAreAppliedToLoadedDataTable): Called by `Visualization` after report data is loaded, after priority filters are executed and after [generic filters](develop__guides__piwiks-reporting-api.md#extra-report-processing) are executed.

  *Override this method if you need to use the report data after it has been sorted/filtered/limited/etc., but before presentation filters have been applied.*
- [`afterAllFiltersAreApplied()`](develop__api-reference__Piwik__Plugin__Visualization.md#afterAllFiltersAreApplied): Called by `Visualization` after all filters (priority, generic and queued) are executed.

  *Override this method if you need to use the report data after it is ready to be displayed.*

Report data can also be manipulated by setting the [`$filters`](develop__api-reference__Piwik__ViewDataTable__Config.md#%24filters) display property.

#### Making your visualization available everywhere

If you want to allow Matomo users to use your visualization on any report (by clicking the appropriate footer icon), place your visualization class in the `Visualizations/` directory of your plugin:

```
plugins/MyPlugin/Visualizations/MyVisualization.php
```

Visualizations in this directory are automatically discovered by Matomo and added to the global list of available visualizations. No event subscription is needed.

Visualizations that are exposed this way must have the `FOOTER_ICON` and `FOOTER_ICON_TITLE` [ViewDataTable metadata](#viewdatatable-metadata) set.

### Extending ViewDataTable's JavaScript

Unless your visualization is very simple or builds on another visualization (such as the "table" visualization) you will probably need to extend ViewDataTable's client-side logic.

All of `ViewDataTable` client side logic is encapsulated within the **`DataTable` JavaScript class** (located in the [dataTable.js](https://github.com/matomo-org/matomo/blob/6.x-dev/plugins/CoreHome/javascripts/dataTable.js) file). If you are extending `Visualization` directly, you should extend **DataTable** to add your own client-side logic. If you're extending another visualization, you will have to extend that visualization's JavaScript class. For example:

```
(function ($, require) {

    var exports = require('piwik/UI');

    /**
     * Class that handles UI behavior for the MyVisualization visualization.
     */
    exports.MyVisualization = function (element) {
        exports.DataTable.call(this, element);
    };

    $.extend(exports.MyVisualization.prototype, exports.DataTable.prototype, {
        // ...
    });

}(jQuery, require));
```

When extending `DataTable` the only method you are required to override is the `init()` method. Here, you should place your visualization's initialization code:

```
$.extend(exports.MyVisualization.prototype, exports.DataTable.prototype, {

    init: function () {
        exports.DataTable.prototype.init.call(this);

        this._bindEventCallbacks(this.$element);
        this._addSeriesPicker(this.$element);

        // ... etc. ...
    }
})
```

After extending the JavaScript class, you must set it in the [`$datatable_js_type`](develop__api-reference__Piwik__ViewDataTable__Config.md#datatable_js_type) property of your visualization:

```
class MyVisualization extends Visualization
{
    // ...

    public function beforeRender()
    {
        $this->config->datatable_js_type = 'MyVisualization';
    }
}
```

#### Adding new UI controls

Some visualizations may require custom UI controls. For example, the default *graph* visualizations add a widget called the **series picker** to the UI.

New controls can be added one of two ways:

- they can be added entirely through JavaScript (as is done with the *series picker*)

  To achieve this, create HTML elements dynamically within your visualization's JavaScript class' `init()` method. See [the series picker source code](https://github.com/matomo-org/matomo/blob/6.x-dev/plugins/CoreVisualizations/javascripts/seriesPicker.js) for an example.
- or the HTML for a control can be rendered with a visualization and the visualization's JavaScript class can attach some logic to the HTML

  To achieve this, add HTML to your visualization's twig template then bind logic to the HTML in your visualization's JavaScript. See [the treemap plugin](https://github.com/matomo-org/plugin-TreemapVisualization/blob/master/javascripts/treemapViz.js) for an example (the zoom-out button is an extra control).

### Styling your visualization

The root `<div>` of every report visualization will have the `dataTable` CSS class. They will also have a CSS class based on the visualization used. It will look like `dataTableViz*` where `*` is the unnamespaced class name of the visualization (for example `dataTableVizHtmlTable`).

You can select all report visualizations with the `.dataTable` CSS selector. You can select report visualizations of a specific type using the visualization specific CSS class, for example, `.dataTableVizHtmlTable` or `.dataTableVizHtmlTable > .dataTableWrapper`.

You can also use the [`$datatable_css_class`](develop__api-reference__Piwik__ViewDataTable__Config.md#datatable_css_class) property to add more CSS classes if you need to. This property can be useful if you need to customize a visualization's appearance, but only for specific reports.

## Learn more

- To learn **how reports are stored and created**, read our [Data Model](develop__guides__data-model.md) guide.
- To see a **full example of creating a new visualization**, see the source for the [Treemap Visualization](https://github.com/matomo-org/plugin-TreemapVisualization) plugin.
- To learn more about **Matomo Controllers and outputting HTML**, read about [Controllers in Matomo](develop__guides__controllers.md).
- To learn more about **interacting with Matomo's client side JavaScript**, read our [Working with Matomo's UI](develop__guides__working-with-piwiks-ui.md) guide.
