# JavaScript and CSS: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/working-with-piwiks-ui

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

#### JavaScript and CSS

- [JavaScript libraries](#javascript-libraries)
- [Loading JS and CSS files in the UI](#loading-js-and-css-files-in-the-ui)
  - [Asset merging and compiling](#asset-merging-and-compiling "Asset merging and compiling")
  - [TypeScript and Vue workflow](#typescript-and-vue-workflow "TypeScript and Vue workflow")
- [Special HTML Elements](#special-html-elements)
- [Global variables defined by Piwik](#global-variables-defined-by-piwik)
- [Coding conventions](#coding-conventions)
- [Important JavaScript classes](#important-javascript-classes)
  - [Broadcast](#broadcast "Broadcast")
  - [ajaxHelper (vanilla JavaScript)](#ajaxhelper-vanilla-javascript "ajaxHelper (vanilla JavaScript)")
- [Troubleshooting](#troubleshooting)
- [Learn more](#learn-more)

# JavaScript and CSS

Read this guide if you'd like to know

- **how to load JavaScript and CSS files in the Matomo (formerly Piwik) UI**
- **how plugins should create JavaScript files**
- **how to use TypeScript and Vue with Matomo**
- **how to work with Matomo Core's JavaScript code**

## JavaScript libraries

Matomo uses the following JavaScript libraries:

- [Vue.js 3](https://v3.vuejs.org/)
- [jQuery](https://jquery.com/) and [jQuery UI](https://jqueryui.com/) (deprecated, try to avoid using in new Vue code)
- [jqPlot](http://www.jqplot.com/)
- A couple of other libraries are used see our [npm dependencies](https://github.com/matomo-org/matomo/blob/6.x-dev/package.json)

**Include new JS libraries only if they are vital to your plugin, and be sure to use the TypeScript workflow so there won't be clashes if a different version of the same library is used in other plugins.** If many plugins decide to use a custom library, the UI will slow down.

## Loading JS and CSS files in the UI

Plugins can tell Matomo about to load JS and CSS asset files.

This is done through the [`AssetManager.getStylesheetFiles`](develop__api-reference__events.md#assetmanagergetstylesheetfiles) and [`AssetManager.getJavaScriptFiles`](develop__api-reference__events.md#assetmanagergetjavascriptfiles) events.
If you are new to events, check out our [events guide](develop__guides__events.md). These events are defined in your plugin file (if your plugin name was `YourPluginName` then they would be defined in `$matomoDir/plugins/YourPluginName/YourPluginName.php`).

To load a file in the UI simply append the paths that should be loaded to the given `$files` array:

```
// these methods need to be in your plugin php file
public function registerEvents()
{
    return array(
        'AssetManager.getStylesheetFiles' => 'getStylesheetFiles',
        'AssetManager.getJavaScriptFiles' => 'getJavaScriptFiles',
    );
}

public function getStylesheetFiles(&$files)
{
    $files[] = "plugins/MyPlugin/stylesheets/myStylesheet.less";
    $files[] = "plugins/MyPlugin/stylesheets/myCssStylesheet.css";
}

public function getJavaScriptFiles(&$files)
{
    $files[] = "plugins/MyPlugin/javascripts/myJavaScript.js";
}
```

### Asset merging and compiling

In production environments, Matomo will concatenate all JavaScript files into one and minify it. [LESS](https://lesscss.org/) files will be compiled into CSS and merged into one CSS file. Matomo does not merge and minify JavaScript and CSS files on every request as it takes a long time to do this. They are only merged on certain events, such as when enabling a new plugin.

To make sure your changes will be actually visible and executed you need to enable the development mode in case you have not done yet:

```
./console development:enable
```

This way JavaScript files won't be merged and you can debug the original JavaScript source code.

### TypeScript and Vue workflow

Since version 4.5.0 it is possible to create components for the UI using Vue and TypeScript (though note that you do not have to use both;
you can use Vue with ESnext (the most advanced version of EcmaScript) or just write plain TypeScript without using Vue).

Vue and TypeScript files are processed with Vite, which is configured globally in Matomo. To take advantage of
this, create `vue` and `vue/src` subfolders in your plugin. Then add your code (TypeScript, ES, Vue) to the `src` subfolder. Make sure to
add an `index.ts` or `index.js` file to the subfolder and export everything you'd like to be programmatically accessible in the browser
(for example, by other plugins).

*For an example of Vue code that works with Matomo, see the `ExampleVue` plugin source code.`*

Once you've written your code, it must be built into a UMD file. Run the `./console vue:build MyPlugin` command to build your
Vue/TypeScript code. The compiled UMD will be in the `vue/dist` folder, and should be distributed with the rest of your plugin
(since we do not expect all users to have access to node or the technical ability to compile our JavaScript manually).

**While developing, it is recommended to use the `--watch` option with `vue:build` so you don't have to constantly re-run the
command.**

Note: it is not necessary to add the resulting UMD file to the `'AssetManager.getJavaScriptFiles'` event. Matomo will
automatically detect if one is there and use it (if the plugin is activated).

**eslint**

ESLint is not run as part of `vue:build`. Run it separately with `npm run eslint`. If ESLint finds a style problem based
on one of the rules we configure, it will be printed out in the output. Sometimes the actual problem or way to fix it
is not clear from the error message.

The easiest thing to do in this situation is to search for the rule name in a search engine. Each rule has associated
documentation online that describes what the error means, why the rule exists and how to fix the error.

Eslint is automatically run when building Vue UMDs, but if you'd like to run it from the command line directly, run a command like:

```
$ npm run eslint -- --ext .js,.ts,.vue plugins/MyPlugin
```

## Special HTML Elements

The following is a list of special elements that you should be aware of as you develop your plugin or contribution:

- `#root`: The root element of everything that is displayed and visible to the user.
- `#content`: The root element that contains everything displayed under the main reporting menu and the row of 'selector' controls (ie, the period selector, the segment selector, etc.).
- `.top_controls`: The element that contains the 'selector' controls. Only one of these elements.
- `.widgetContent`: The root element of each widget. Events are posted to this specific element.

## Global variables defined by Matomo

Matomo defines several global variables (held in `window.piwik`) regarding the current request. Here is what they are and how you should use them:

- `piwik.token_auth`: The **token\_auth** of the current user. Should be used in AJAX requests, but should never appear in the URL.
- `piwik.piwik_url`: The URL to this Matomo instance.
- `piwik.userLogin`: The current user's login handle (if there is a current user).
- `piwik.idSite`: The ID of the currently selected website.
- `piwik.siteName`: The name of the currently selected website.
- `piwik.siteMainUrl`: The URL of the currently selected website.
- `piwik.language`: The currently selected language's code (for example, `en`).

## Coding conventions

When writing JavaScript for your contribution or plugin, you would ideally respect the following coding conventions.

## Important JavaScript classes

Matomo Core defines many classes that should be reused by new plugins and contributions. These classes can be used to, among other things, change the page the UI shows, load a popover and get themed color values from CSS.

### Broadcast

*This class is considered deprecated and only exists for historical reasons as some components are still using it. [Please use the `MatomoUrl` class instead.](develop__guides__vue-getting-started.md#accessing-and-changing-the-url).*

The `broadcast` object is stored directly in the `window` object and has methods to parse the current URL.

#### Parsing the URL

`broadcast` contains several methods for parsing the Matomo URL. Matomo's main UI stores secondary set of query parameters in a URL's hash value. This is the URL that is loaded below the menu. `broadcast`'s URL parsing functions will look for query parameter values in the hash as well as the main query string, so it is important to use them instead of directly accessing `window.location.href`.

`broadcast` provides the following functions:

- `isHashExists()`: Returns the hash of the URL if it exists, `false` if otherwise.
- `getHashFromUrl()`: Returns the hash of the URL. Can be an empty string.
- `getSearchFromUrl()`: Returns the query string.
- `extractKeyValuePairsFromQueryString()`: Converts a query string to an object mapping query parameter names with query parameter values.
- `getValuesFromUrl()`: Returns an object mapping query parameter names with query parameter values for the current URL.
- `getValueFromUrl()`: Returns one query parameter value for the current URL by name.
- `getValueFromHash()`: Returns one query parameter value in the hash of the current URL by name.
- `getHash()`: Returns the hash of the URL.

To learn more about an individual function, see the method documentation in the `plugins/CoreHome/javascripts/broadcast.js` file.

### ajaxHelper (vanilla JavaScript)

AJAX requests in non-Vue, Vanilla JavaScript should use the `ajaxHelper` global.

The `ajaxHelper` class should be used whenever you need to create an AJAX request. **Plugins should not use `$.ajax` directly.** `ajaxHelper` does some extra things that make it harder to write insecure code. It also keeps track of the current ongoing AJAX requests which is vital to the [UI tests](develop__guides__tests-ui.md).

To use the `ajaxHelper`, create an instance, configure it, and then call the `send()` method. To learn more, read the documentation in the source code (located in [`plugins/CoreHome/vue/src/AjaxHelper/AjaxHelper.ts`](https://github.com/matomo-org/matomo/blob/6.x-dev/plugins/CoreHome/vue/src/AjaxHelper/AjaxHelper.ts)).

For example:

```
(function ($) {

    var ajaxHelper = window.ajaxHelper;

    var ajax = new ajaxHelper();
    ajax.setUrl('index.php?module=Actions&action=getPageUrls&idSite=1&date=today&period=day');
    ajax.setCallback(function (response) {
        $('#myReportContainer').html(response);
    });
    ajax.setFormat('html'); // the expected response format
    ajax.setLoadingElement('#myReportContainerLoading');
    ajax.send();

})(jQuery);
```

## Troubleshooting

Below are some solutions to common problems that may occur during development:

- If working on Vue code and `vue:build --watch` is running but the JavaScript isn't being built properly, try restarting the command with the
  `--clear-cache` flag, which will clear Vite's cache in `node_modules/.vite` before watching again and can solve some problems.
- If working on frontend unit tests and you are seeing strange errors, the same Vite cache can be at fault. Remove
  `node_modules/.vite` and run the tests again.

## Learn more

- To learn **about creating new report visualizations** read our [Visualizing Report Data](develop__guides__visualizing-report-data.md) guide.
- To learn **more about the asset merging system** read this [blog post](https://matomo.org/blog/2010/07/making-piwik-ui-faster/) by the system's author.
- To learn **more about theming** read our [Theming](develop__guides__theming.md) guide.
- To learn **more about UI components and styles** read our [Views](develop__guides__views.md) guide.
