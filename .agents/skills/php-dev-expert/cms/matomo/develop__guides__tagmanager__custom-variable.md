# Variables: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/tagmanager/custom-variable

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

#### Variables

- [Adding a new variable](#adding-a-new-variable)
  - [Adding a pre-configured variable](#adding-a-pre-configured-variable "Adding a pre-configured variable")
  - [Defining the name, description, and help of your variable](#defining-the-name-description-and-help-of-your-variable "Defining the name, description, and help of your variable")
  - [Configuring the variable category](#configuring-the-variable-category "Configuring the variable category")
  - [Showing an icon for your variable](#showing-an-icon-for-your-variable "Showing an icon for your variable")
  - [Specifying parameters](#specifying-parameters "Specifying parameters")
  - [The JavaScript Part](#the-javascript-part "The JavaScript Part")

# Variables

A variable in the context of a tag manager is a snippet of code which lets you retrieve data to use it by tags and triggers.

Matomo lets you easily create a new variable. When you create a new variable, please consider contributing this new variable to the [official Tag Manager plugin](https://github.com/matomo-org/tag-manager) by creating a pull request.

Tags, triggers, and variables are all implemented in the same way except for a minor difference in the JavaScript part. Once you know how to develop a variable, you will also be able to develop a tag and a trigger.

## Adding a new variable

We're going to create a new variable that returns a value from the [localStorage](https://html.spec.whatwg.org/multipage/webstorage.html#dom-localstorage).

To create a new variable, you should use the CLI tool and execute the following command:

```
$ ./console generate:tagmanager-variable
```

This command will guide you through the creation of a variable and ask for several things such as the name of your plugin and the name of the variable you want to create. When it asks you for a variable name, enter "Local Storage". The command will create these files:

- `plugins/$yourplugin/Template/Variable/LocalStorageVariable.php` lets you define for example the category of the variable and define parameters.
- `plugins/$yourplugin/Template/Variable/LocalStorageVariable.web.js` lets you implement the JavaScript logic to return the value of the local storage.

### Adding a pre-configured variable

A pre-configured variable is a special kind of variable that requires no configuration and can be used by a user straight away. The creation of a pre-configured variable works the same way, except the initial command you need to execute is different:

```
$ ./console generate:tagmanager-preconfigured-variable
```

### Defining the name, description, and help of your variable

When you generate a variable, the generator will automatically create some [translation keys](develop__guides__translations.md) in your `plugins/$yourplugin/lang/en.json` file.
You may want to adjust the translations for the created keys:

```
"LocalStorageVariableName": "Local Storage",
"LocalStorageVariableDescription": "This is the description for Local Storage",
"LocalStorageVariableHelp": ""
```

Alternatively, you can also set the name, description, and the optional help text in your `LocalStorageVariable.php` but it is recommended to use translation keys so other developers can translate it into different languages.

The description should be ideally kept quite short. A help text is usually not needed for variables.

### Configuring the variable category

In the generated `LocalStorageVariable.php`, you will find a method named `getCategory()`. There you can define the category this variable fits in best. You can choose from a set of predefined categories such as "Page Variables", "Date", "Performance", "SEO", and "Device", or create your own category:

```
public function getCategory()
{
    return self::CATEGORY_PAGE_VARIABLES;
}
```

In this example, we are using a pre-defined category "Page Variables". To use a custom category, simply return the name of the category you want to choose:

```
public function getCategory()
{
    return 'My Category';
}
```

### Showing an icon for your variable

You may optionally show an icon for your variable. All you need to do is to return a path to the icon file in the method `getIcon()` like this:

```
public function getIcon()
{
    return 'plugins/TagManager/images/MyIcon.png';
}
```

We recommend you put the image in the `images` folder of your plugin. The file itself may be for example a `jpg`, `png`,
or `svg` file with a size of ideally 64x64 pixels.

### Specifying parameters

In our case we want to let the user configure the name of the item that should be returned by this variable. To do this, we can configure parameters. Parameters have the same API as [Plugin settings](develop__guides__plugin-settings.md).

Here is an example on how to define a parameter which you can later access in the JavaScript part using `parameters.get('itemName')`.

```
public function getParameters()
{
    return array(
        $this->makeSetting('itemName', 'This is the default value', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
            $field->title = 'Item name';
            $field->uiControl = FieldConfig::UI_CONTROL_TEXTAREA;
            $field->description = 'Please enter the name of the local storage item you want to access.';
            $field->validators[] = new CharacterLength($min = 1, $max = 300);
        }),
    );
}
```

Learn more about specifying parameters in our dedicated [Tag Manager - Parameters](develop__guides__tagmanager__parameters.md) guide.

### The JavaScript Part

Now we get to develop the JS part which will return the value from the local storage. This
is done in the file `LocalStorageVariable.web.js`. The basic structure looks like this:

```
(function () {
    return function (parameters, TagManager) {

        this.get = function () {
            // accessing a parameter
            var itemName = parameters.get('itemName');

            // return variable value
        };
    };
})();
```

The implemented variable example could look like this:

```
(function () {
    return function (parameters, TagManager) {

        this.get = function () {
            var itemName = parameters.get('itemName');
            if (itemName && localStorage) {
                return localStorage.getItem(itemName);
            }
        };
    };
})();
```

In the above example, we define an anonymous JavaScript class which implements the `get` method. This method is executed every time the value of the variable is requested. You can access any parameter you have defined using `parameters.get('$parameterName', optionalDefaultValueIfNoneConfigured)`.

You can also access some special variables like the `document` and `window` through the `parameters` object. For example
`parameters.document` or `parameters.window`. The access of `parameters.document` over `document` directly is recommended as it makes unit testing easier. You can find more information in the [TemplateParameters](develop__api-reference__tagmanager__javascript-api-reference.md) API reference.

You can also access the `TagManager` instance which provides a lot of helper utilities around the DOM, window, URLs, events, data layer, and much more. You can find more information about this in the [TagManager](develop__api-reference__tagmanager__javascript-api-reference.md#tagmanager) API reference.
