# API Methods: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/expose-api-methods

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

#### API Methods

- [Adding a new API module](#adding-a-new-api-module)
  - [Passing parameters to your method](#passing-parameters-to-your-method "Passing parameters to your method")
  - [Returning a value](#returning-a-value "Returning a value")
- [Best practices](#best-practices)
  - [Check user permissions](#check-user-permissions "Check user permissions")
  - [Keep API methods small](#keep-api-methods-small "Keep API methods small")
  - [Calling other plugins' APIs](#calling-other-plugins-apis "Calling other plugins' APIs")

# Exposing API Methods

This guide explains how to expose new API methods in the [HTTP Reporting API](develop__api-reference__reporting-api.md) by creating an API module. The Reporting API allows third party applications to access analytics data and manipulate miscellaneous data (such as users or websites) through HTTP requests.

### What is it good for?

The Reporting API is used by the Matomo UI to render reports, to manage users, and more. If you want to add a feature to the Matomo UI, you might have to expose a method in the API to access this data. As the API is called via HTTP it allows you to fetch or manipulate any Matomo related data from anywhere. In these exposed API methods you can do basically anything you want, for example:

- Enhance existing reports with additional data
- Filter existing reports based on custom rules
- Access the database and generate custom reports
- Persist and read any data
- Request server information

## Adding a new API module

To create a new API, use the [Matomo Console](develop__guides__piwik-on-the-command-line.md):

```
./console generate:api
```

The command will ask you to enter the name of the plugin the created API should belong to. There should now be a file `plugins/MyPlugin/API.php` with simple examples to get you started:

```
class API extends \Piwik\Plugin\API
{
    public function getAnswerToLife(bool $truth = true): int
    {
        if ($truth) {
            return 42;
        }

        return 24;
    }

    public function getExampleReport(string $idSite, string $period, string $date, ?string $segment = null): DataTable
    {
        $table = DataTable::makeFromSimpleArray(array(
            array('label' => 'My Label 1', 'nb_visits' => '1'),
            array('label' => 'My Label 2', 'nb_visits' => '5'),
        ));

        return $table;
    }
}
```

Any public method in that file will be available via the Reporting API. For example the method `getAnswerToLife` can be called via this URL: `index.php?module=API&method=MyApiPlugin.getAnswerToLife`. The URL parameter `method` is a combination of your plugin name and the method name within this class.

### Passing parameters to your method

Both example methods define some parameters. To pass any value to a parameter of your method simply specify them by name in the URL. For example `...&method=MyApiPlugin.getExampleReport&idSite=1&period=week&date=today&segment=pageUrl%3D%40example` to pass values to the parameters of the method `getExampleReport`.

#### Type handling / Type hinting

It is possible to define type hints for parameters of API methods. If a parameter has a type hint our API request processor will automatically check if the provided value is compatible with expected type. If the type does not match, the API will return an according error message.

As parameters for API parameters are usually provided as URL or request parameters only the following type hints are supported: `string`, `int`, `float`, `bool`, `array`.
Boolish parameters will automatically be converted by matching against `0`, `'0'`, `'false'` and `1`, `'1'`, `'true'`

If your API method is able to handle multiple types for one parameter, you may define no type hint. The parameter will then either be passed as string or an array of strings (depending on the request parameter). It's required to validate and check the parameters value manually then.

#### Parameter sanitizing

Since the early days Matomo automatically sanitizes all parameters that are passed to an API method using [`Common::sanitizeInputValues`](develop__api-reference__Piwik__Common.md#sanitizeinputvalues). That way all input parameters could be used without thinking much about security, as risky content is automatically escaped.
With Matomo 5 we started to deprecate this automatic sanitizing. It is still applied by default in Matomo 6, but there are possibilities to disable this behaviour for certain API classes and even single API methods.

To disable the automatic sanitizing for a whole API class, you simply need to set the API class' property `$autoSanitizeInputParams`:

```
class API extends \Piwik\Plugin\API
{
    protected $autoSanitizeInputParams = false;
```

To disable it for a single API method only, you need to add `@unsanitized` to the methods doc block:

```
/**
 * API method description
 * @param int $idSite
 * @unsanitized
 */
public function getSomething(int $idSite) {
```

Attention: When using unsanitized parameters of type `string` or `array`, please ensure that the values are used with care. As they might contain content, that can break HTML or SQL syntax, please ensure to escape the values correctly, when they are used.

### Returning a value

In an API method you can return any boolean, number, string or array value. A resource or an object cannot be returned unless it implements the DataTableInterface such as [DataTable](develop__api-reference__Piwik__DataTable.md) (the primary data structure used to store analytics data in Matomo), [DataTable\Map](develop__api-reference__Piwik__DataTable__Map.md) (stores a set of DataTables) and [DataTable\Simple](develop__api-reference__Piwik__DataTable__Simple.md) (a DataTable where every row has two columns: label and value).

Did you know? You can choose the response format of your API request by appending a parameter `&format=JSON|XML|CSV|...` to the URL. Check out the [Reporting API Reference](develop__api-reference__reporting-api.md) for more information.

**DataTable vs Array**

You might be wondering why not simply returning the array directly in the `getExampleReport` example? By wrapping it with a DataTable you will be able to use many features like `filter_offset`, `filter_limit`, `filter_sort_column`, `showColumns` and many more.

## Best practices

### Check user permissions

Do not forget to check whether a user actually has permissions to access data or to perform an action. If you're not familiar with Matomo's permissions and how to check them read our [User Permissions](develop__guides__permissions.md) guide.

### Keep API methods small

At Matomo we aim to write clean code. Therefore, we recommend to keep API methods small (separation of concerns). An API basically acts like a Controller:

```
public function createLdapUser(int $idSite, string $login, string $password)
{
    Piwik::checkUserHasAdminAccess($idSite);
    $this->checkLogin($login);
    $this->checkPassword($password);

    $myModel = new LdapModel();
    $success = $myModel->createUser($idSite, $login, $password);

    return $success;
}
```

This is not only easy to read, it will also allow you to create simple tests for `LdapModel` (without having to bootstrap the whole Matomo layer) and you will be able to reuse it in other places if needed.

### Calling other plugins' APIs

For example you want to fetch an existing report from another plugin - say a list of all Page URLs, do not request this report by calling that method directly: `\Piwik\Plugins\Actions\API::getInstance()->getPageUrls($idSite, $period, $date);`. Instead, issue a new API request:

```
$report = \Piwik\API\Request::processRequest('Actions.getPageUrls', array(
    'idSite' => $idSite,
    'period' => $period,
    'date'   => $date,
));
```

This has several advantages:

- It avoids a fatal error if the requested plugin is not available on a Matomo installation
- Other plugins can extend the called API method via [events](develop__guides__events.md) (adding additional report data to a report, doing additional permission checks) but those events will be only triggered when requesting the report as suggested
- If the method signature changes, your request will most likely still work
