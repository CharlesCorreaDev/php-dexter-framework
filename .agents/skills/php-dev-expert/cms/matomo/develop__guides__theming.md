# Themes: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/theming

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

#### Themes

- [Creating a new theme](#creating-a-new-theme)
- [Simple theming](#simple-theming)
  - [Colors and fonts](#colors-and-fonts "Colors and fonts")
  - [Icons override](#icons-override "Icons override")
  - [Logo and favicon](#logo-and-favicon "Logo and favicon")
- [Advanced theming](#advanced-theming)
  - [Adding styles](#adding-styles "Adding styles")
  - [Adding JavaScript files](#adding-javascript-files "Adding JavaScript files")
  - [Theming colors used in JavaScript & PHP](#theming-colors-used-in-javascript-php "Theming colors used in JavaScript &amp; PHP")
- [Twig, the template engine](#twig-the-template-engine)
- [Learn more](#learn-more)

# Writing a theme

**Themes** are special types of plugins that change the look and feel of Matomo's UI. They use CSS and LESS to override the default styles defined by other Matomo plugins.

This guide will explain how to create a new theme. This guide assumes that you:

- can code in HTML, PHP, CSS and JavaScript,
- and have a general understanding of extending Matomo (if not, read our [Getting Started](develop__guides__getting-started-part-1.md) guide).

## Creating a new theme

To create an empty theme, run the following command from Matomo's root directory:

```
./console generate:theme
```

After you enter the appropriate information, a theme will be created for you in the `plugins/` directory. Now you need to activate this theme by going to "Administration => Plugins => Manage Themes" and activate your created theme.

## Simple theming

### Colors and fonts

Colors used in CSS are simple to override because they are defined as variables. These variables are defined in PHP because we also need to apply them to emails, PDF reports, exported images, etc.

For example to change the background from white to black you can simply change the following variable in your `$YourPluginName.php` file.

```
public function configureThemeVariables(Plugin\ThemeStyles $vars)
{
    $vars->colorBackgroundBase = '#000';
}
```

To change the link color to red you override the link variable:

```
public function configureThemeVariables(Plugin\ThemeStyles $vars)
{
    $vars->colorLink = '#f00';
}
```

To change the font you override the font variable:

```
public function configureThemeVariables(Plugin\ThemeStyles $vars)
{
    $vars->fontFamilyBase = 'Verdana, sans-serif';
}
```

You get the point. The list of all variables that you can override is defined in the Morpheus plugin:

- [ThemeStyles](https://github.com/matomo-org/matomo/blob/6.x-dev/core/Plugin/ThemeStyles.php)

Although we do not recommend doing so, you can change the colors of a specific element directly, for example:

```
#login {
    background-color: red;
}
```

Please use this method only if needed. Element ids or classes might change in the future and break your theme.

### Icons override

Overriding icons is fairly easy: create a folder named `images` in your theme's directory and place an icon having the same file name as the icon you want to override.

For a complete list of icons you can override have a look at the [Morpheus theme](https://github.com/matomo-org/matomo/tree/6.x-dev/plugins/Morpheus/images). It is not yet possible to override icons used in reports such as browser or search engine icons, but if you have suggestions, you can [open an issue in the piwik-icon repository](https://github.com/matomo-org/matomo-icons).

### Logo and favicon

As Matomo users can upload their own logo and favicon using the admin interface a theme is not supposed to change any of those.

## Advanced theming

### Adding styles

Every theme has one main file that contains all of your theme's styling overrides. The location of this file is determined by the **stylesheet** property in your theme's `plugin.json` file. The property's value is a path relative to the plugin's root directory:

```
{
    "name": "MyTheme",
    "description": "A new theme.",
    "theme": true,
    "stylesheet": "stylesheets/theme.less"
}
```

Generated themes will already have a file configured, so you don't need to set this property. The file is called `theme.less` and is located in the `stylesheets/` directory of your theme.

You can put your entire theme into this one file if you want, but the result might not be easy to read and to maintain. Instead, you should group the styles based on the part of Matomo (formerly Piwik) they modify and place them in separate LESS files. You can then [`@import`](https://lesscss.org/features/#import-directives-feature) them in `theme.less`.

### Adding JavaScript files

Themes can also add new JavaScript files. These files can be used to style things that can't be styled through CSS or LESS.

To add JavaScript files, add them as an array to the **javascript** property in your theme's `plugin.json` file:

```
{
    "name": "MyTheme",
    "description": "A new theme.",
    "theme": true,
    "stylesheet": "stylesheets/theme.less",
    "javascript": ["javascripts/myJavaScriptFile.js", "javascripts/myOtherJavaScriptFile.js"]
}
```

### Theming colors used in JavaScript & PHP

Some colors are only used in JavaScript and in PHP. We've made it possible for those colors to be specified through CSS, but the process is a bit different from setting colors of normal HTML elements.

Each color used in JavaScript is given a name and grouped in a *color namespace*. You can set these colors like this:

```
.color-namespace-name[data-name=color-name] {
    color: red;
}
```

For example,

```
.bar-graph-colors[data-name=grid-background] {
    color: @background-color-base;
}

.bar-graph-colors[data-name=grid-border] {
    color: @basic-grid-border-color;
}
```

#### Named colors

Here is a list of all named colors in Matomo:

- *Namespace*: **sparkline-colors**: contains colors for sparkline images.

  - **backgroundColor**: The background color of sparkline images.
  - **lineColor**: The color of the line in the sparkline.
  - **minPointColor**: The color of the point that marks the minimum value observed in the data set.
  - **lastPointColor**: The color of the point that marks the last value of the data set.
  - **maxPointColor**: The color of the point that marks the maximum value observed in the data set.
- *Namespace*: **bar-graph-colors**: contains colors for bar graph [report visualizations](develop__guides__visualizing-report-data.md).

  - **grid-background**: The background color of the graph.
  - **series1**: The color of the bars representing the first series of data.
  - **series2**: The color of the bars representing the second series of data.
  - **series3**: The color of the bars representing the third series of data.
  - **series4**: The color of the bars representing the fourth series of data.
  - **series5**: The color of the bars representing the fifth series of data.
  - **series6**: The color of the bars representing the sixth series of data.
  - **series7**: The color of the bars representing the seventh series of data.
  - **series8**: The color of the bars representing the eighth series of data.
  - **series9**: The color of the bars representing the ninth series of data.
  - **series10**: The color of the bars representing the tenth series of data.
  - **ticks**: The color of x-axis gridlines and x-axis ticks.
  - **single-metric-label**: The color of the series name label if only **one** series is displayed. If you don't care about whether there's one series displayed or not, set this color to the one you used in **series1**.
- *Namespace*: **pie-graph-colors**: contains colors for pie graph [report visualizations](develop__guides__visualizing-report-data.md).

  - **grid-background**: The background color of the graph.
  - **series1**: The color of the pie graph segment representing the first value in the data displayed.
  - **series2**: The color of the pie graph segment representing the second value in the data displayed.
  - **series3**: The color of the pie graph segment representing the third value in the data displayed.
  - **series4**: The color of the pie graph segment representing the fourth value in the data displayed.
  - **series5**: The color of the pie graph segment representing the fifth value in the data displayed.
  - **series6**: The color of the pie graph segment representing the sixth value in the data displayed.
  - **series7**: The color of the pie graph segment representing the seventh value in the data displayed.
  - **series8**: The color of the pie graph segment representing the eighth value in the data displayed.
  - **series9**: The color of the pie graph segment representing the ninth value in the data displayed.
  - **series10**: The color of the pie graph segment representing the tenth value in the data displayed.
  - **single-metric-label**: The color of the series name label if only **one** series is displayed. If you don't care about whether there's one series displayed or not, set this color to the one you used in **series1**.
- *Namespace*: **evolution-graph-colors**: contains colors for evolution graph [report visualizations](develop__guides__visualizing-report-data.md) (the big line graphs that display data over time).

  - **grid-background**: The background color of the graph.
  - **series1**: The color of the line representing the first series of data displayed.
  - **series2**: The color of the line representing the second series of data displayed.
  - **series3**: The color of the line representing the third series of data displayed.
  - **series4**: The color of the line representing the fourth series of data displayed.
  - **series5**: The color of the line representing the fifth series of data displayed.
  - **series6**: The color of the line representing the sixth series of data displayed.
  - **series7**: The color of the line representing the seventh series of data displayed.
  - **series8**: The color of the line representing the eighth series of data displayed.
  - **series9**: The color of the line representing the ninth series of data displayed.
  - **series10**: The color of the line representing the tenth series of data displayed.
  - **ticks**: The color of x-axis gridlines and x-axis ticks.
  - **single-metric-label**: The color of the series name label if only **one** series is displayed. If you don't care about whether there's one series displayed or not, set this color to the one you used in **series1**.
- *Namespace*: **realtime-map**: contains colors for the [Realtime Visitors Map](https://matomo.org/docs/real-time-visitor-world-map/).

  - **white-bg**: The background color for the map when using the *light theme*.
  - **white-fill**: The country/region fill color for the map when using the *light theme*.
  - **black-bg**: The background color for the map when using the *dark theme*.
  - **black-fill**: The country/region fill color for the map when using the *dark theme*.
  - **visit-stroke**: The border color for each visit.
  - **website-referrer-color**: The fill color of a visit whose referrer was a website *(only used if the Referrer Type color mode is used)*.
  - **direct-referrer-color**: The fill color of a visit that has no referrer *(only used if the Referrer Type color mode is used)*.
  - **search-referrer-color**: The fill color of a visit whose referrer was a search engine *(only used if the Referrer Type color mode is used)*.
  - **live-widget-highlight**: The color to use when highlighting a visit in the live widget *(only used when embedding both the realtime map and the Live widget in the dashboard)*.
  - **live-widget-unhighlight**: The color to use when unhighlighting a visit in the live widget *(only used when embedding both the realtime map and the Live widget in the dashboard)*.
  - **symbol-animate-fill**: The starting fill color to use when animating the appearance of a new visit. The ending fill color is always the visit's normal color.
- *Namespace*: **visitor-map**: contains colors for the [Visitors Map](https://matomo.org/docs/visitors-map/).

  - **no-data-color**: The fill color for countries that have no visits.
  - **one-country-color**: The fill color for countries that have visits, if only one country received visits.
  - **color-range-start-choropleth**: The start of the color range used to color countries and regions based on the number of visits.
  - **color-range-end-choropleth**: The end of the color range used to color countries and regions based on the number of visits.
  - **color-range-start-normal**: The start of the color range used to color cities based on the number of visits.
  - **color-range-end-normal**: The end of the color range used to color cities based on the number of visits.
  - **country-highlight-color**: The fill color to use when a country is *highlighted* (a country is highlighted when the mouse enters it while the shift key is pressed).
  - **country-selected-color**: The fill color to use when a country is *selected* (ie, when a country is being used in a row evolution popup).
  - **unknown-region-fill-color**: The fill color to use for regions that have no visits (or 0 of whatever metric is displayed).
  - **unknown-region-stroke-color**: The stroke color to use for regions that have no visits (or 0 of whatever metric is displayed).
  - **region-stroke-color**: The stroke color for regions with visits.
  - **region-selected-color**: The fill color to use when a region is *selected* (ie, when a region is being used in a row evolution popup).
  - **region-highlight-color**: The fill color to use when a region is *highlighted* (a region is highlighted when the mouse enters it while the shift key is pressed). Only regions with visits can be highlighted.
  - **invisible-region-background**: The fill color to use for regions when displaying cities. This color should make the city data more visible.
  - **region-layer-stroke-color**: The stroke color of each region.
  - **city-label-color**: The color of city labels.
  - **city-stroke-color**: The stroke color to use for cities.
  - **city-highlight-stroke-color**: The stroke color to use when a city is *highlighted* (a city is highlighted when the mouse enters it).
  - **city-highlight-fill-color**: The fill color to use when a city is *highlighted* and the shift key is pressed (a city is highlighted when the mouse enters it).
  - **city-highlight-label-color**: The label color to use while the shift key is pressed for a city that is *highlighted*.
  - **city-label-fill-color**: The fill color for a city label.
  - **city-selected-color**: The fill color to use for a city when it is *selected* (ie, when a city is being used in a row evolution popup).
  - **city-selected-label-color**: The label color to use for a city when it is *selected* (ie, when a city is being used in a row evolution popup).
  - **special-metrics-color-scale-1**: The start of the color scale used to color countries and regions for *special metrics*. [[1]](#named-colors-footnote-1)
  - **special-metrics-color-scale-2**: The second color in the color scale used to color countries and regions for *special metrics*.
  - **special-metrics-color-scale-3**: The third color in the color scale used to color countries and regions for *special metrics*.
  - **special-metrics-color-scale-4**: The end of the color scale used to color countries and regions for *special metrics*.

[1] Metrics that use the *special metrics* color scale are the following: `avg_time_on_site`, `nb_actions_per_visit` and `bounce_rate`.

## Twig, the template engine

Matomo uses the [Twig templating engine](https://twig.symfony.com) to create HTML pages from PHP.

When creating a theme, you do not need to create or change any template as the recommended way is to only use Less (CSS) and JavaScript. However, in some rare cases where advanced customisation is necessary, you may need to customise Twig templates.

Please note that this is not recommended, so use at your own risk.

To override a twig templates from the default `Morpheus` theme, place a `.twig` template file with the same name in your `templates/` directory as follows:

```
plugins/[MyThemePlugin]/templates/dashboard.twig
```

To override twig templates used in a plugin, place a `.twig` template file with the same name in your plugin's `templates/` directory as follows:

```
plugins/[MyThemePlugin]/templates/plugins/[OverriddenPlugin]/[overriddenTemplate].twig
```

## Learn more

- To learn **more about creating new report visualizations** read our [Visualizing Report Data](develop__guides__visualizing-report-data.md) guide.
- To learn **more about writing JavaScript for Matomo plugins and themes** read our [Working with Matomo's UI](develop__guides__working-with-piwiks-ui.md) guide.
- To learn **more about UI components and styles** read our [Views](develop__guides__views.md) guide.
