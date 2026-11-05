# Plugin Settings: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/plugin-settings

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

#### Plugin Settings

- [Type of settings](#type-of-settings)
- [Adding settings](#adding-settings)
  - [Creating a Settings class](#creating-a-settings-class "Creating a Settings class")
  - [Adding one or more settings](#adding-one-or-more-settings "Adding one or more settings")
  - [Field configuration](#field-configuration "Field configuration")
  - [Configuring the value for a system setting in the config file](#configuring-the-value-for-a-system-setting-in-the-config-file "Configuring the value for a system setting in the config file")
  - [Limiting who can configure a setting in the UI](#limiting-who-can-configure-a-setting-in-the-ui "Limiting who can configure a setting in the UI")
  - [Removing a setting from the UI](#removing-a-setting-from-the-ui "Removing a setting from the UI")
  - [Showing or hiding a setting in the UI dynamically](#showing-or-hiding-a-setting-in-the-ui-dynamically "Showing or hiding a setting in the UI dynamically")
- [Reading settings values](#reading-settings-values)
  - [System settings](#system-settings "System settings")
  - [User settings](#user-settings "User settings")
  - [Measurable settings](#measurable-settings "Measurable settings")

# Plugin Settings

## Type of settings

The Matomo platform differentiates between "System Settings", "User Settings" and "Measurable Settings":

**User Settings** can be configured by any logged in user and each user can configure the setting independently.
The Matomo platform makes sure that settings are stored per user and that a user cannot see another user's configuration.
A user will be able to change the settings on the "Personal Settings" page.

**System Settings** applies to all of your users. It can be configured only by a user who has super user access.
System Settings will appear on the "General Settings" page.

**Measurable Settings** add new fields when creating or editing a website or another measurable such as a mobile app.
The values for these settings can be changed by any user having admin access for a specific website and the settings
are saved separately for each site. All fields shown in the websites manager are actually Measurable Settings and these
can be used to create whole new types such as "Mobile Apps", "Cars", "Embedded device", etc.

All these classes extend the [Settings](develop__api-reference__Piwik__Settings__Settings.md) class.

## Adding settings

### Creating a Settings class

Matomo can create the `Settings` class for you by using the [console](develop__guides__piwik-on-the-command-line.md):

```
$ ./console generate:settings
```

The command will ask you to enter the name of your plugin and for the type of settings you want to create.
Depending on the chosen type it will create a file named `UserSettings.php`, `SystemSettings.php` or
`MeasurableSettings.php`, for example `plugins/MyPlugin/SystemSettings.php`. This created file contains some examples to
get you started. The creation and definition of settings works the same across the different types.

To see the settings in action go to *Administration > General Settings* in your Matomo installation.

### Adding one or more settings

Settings are added in the `init()` method of the settings class. To do this, call the `makeSetting()` and pass in the
internal name of the setting, the default value, which PHP type the setting should return and a callback to configure
the UI representation of the form field.

For example:

```
class SystemSettings extends \Piwik\Settings\Plugin\SystemSettings
{
    /** @var Setting */
    public $autoRefresh;

    /** @var Setting */
    public $refreshInterval;

    protected function init()
    {
        $this->autoRefresh = $this->createAutoRefreshSetting();
        $this->refreshInterval = $this->createRefreshIntervalSetting();
    }

    private function createAutoRefreshSetting()
    {
        return $this->makeSetting('autoRefresh', $default = false, FieldConfig::TYPE_BOOL, function (FieldConfig $field) {
            $field->title = 'Auto refresh';
            $field->uiControl = FieldConfig::UI_CONTROL_CHECKBOX;
            $field->description = 'If enabled, the value will be automatically refreshed depending on the specified interval';
        });
    }

    private function createRefreshIntervalSetting()
    {
        return $this->makeSetting('refreshInterval', $default = '3', FieldConfig::TYPE_INT, function (FieldConfig $field) {
            $field->title = 'Refresh Interval';
            $field->uiControl = FieldConfig::UI_CONTROL_TEXT;
            $field->uiControlAttributes = array('size' => 3);
            $field->inlineHelp = 'Enter a number which is >= 15';
            $field->introduction = 'New group of settings';
            $field->description = 'Defines how often the value should be updated';
            $field->validate = function ($value, $setting) {
                if ($value < 15) {
                    throw new \Exception('Value is invalid');
                }
            };
        });
    }
}
```

For a list of possible properties for each setting have a look at the [Setting](develop__api-reference__Piwik__Settings__Setting.md)
and [FieldConfig](develop__api-reference__Piwik__Settings__FieldConfig.md) API reference. See also the
[ExampleSettingsPlugin](https://github.com/matomo-org/matomo/tree/6.x-dev/plugins/ExampleSettingsPlugin) to see what else is possible.

### Field configuration

You might be wondering why some properties are configured as parameters when making the setting and some properties in
the callback method. The reason for this is performance because we usually create all settings on each request.
Everything that is configured within the callback to configure the `FieldConfig $field` is only needed when the setting
is going to be displayed in the UI. All other times the field config is irrelevant, and we save time by not executing
these actions. Especially since some settings might perform API requests to get a list of available values etc. within
this callback.

### Configuring the value for a system setting in the config file

System settings cannot be only configured via the UI but also via the `config/config.ini.php` file. For example for
the plugin `MyPlugin` it is possible to configure the value for a setting `refreshInterval` like this:

```
[MyPlugin]
refreshInterval = 15
```

As soon as a value in the config file is configured, it won't be possible to change the value for that setting anymore
in the UI and the setting will not be even displayed.

### Limiting who can configure a setting in the UI

For example a system setting can be only configured by a user with super user access by default. However, you can
customize this behaviour by using the `setIsWritableByCurrentUser` method. For example, you can define to let only a user
named "MyRootUser" change the setting. All other users would not be able to see the value for that setting and neither
would they be able to change it.

```
$this->autoRefresh = $this->createAutoRefreshSetting();
$login = \Piwik\Piwik::getCurrentUserLogin();
$this->autoRefresh->setIsWritableByCurrentUser($login == 'MyRootUser');
```

### Removing a setting from the UI

Sometimes you might want to create a setting but not have it visible in the UI at all. This is for example useful if you
make the visibility of a setting dependent on another setting or you only want users to configure it via the
`config/config.ini.php`. To make sure a setting cannot be changed via the UI call `setIsWritableByCurrentUser(false)`.

```
$this->autoRefresh = $this->createAutoRefreshSetting();
$login = \Piwik\Piwik::getCurrentUserLogin();
$this->autoRefresh->setIsWritableByCurrentUser(false);
```

### Showing or hiding a setting in the UI dynamically

Sometimes you might have a bit more complicated form where a setting should be only visible when another setting
is configured in a certain way. Matomo can show or hide settings dynamically without reloading based on a certain
condition. Say we wanted to have the setting `refreshInterval` only visible if `autoRefresh` is enabled, then
we can do this as follows:

```
$this->makeSetting('refreshInterval', $default = '3', FieldConfig::TYPE_INT, function (FieldConfig $field) {
    $field->condition = 'autoRefresh';
    // instead it was also possible to write eg 'autoRefresh == 1' or 'autoRefresh == true'
    // multiple conditions can be combined such as 'autoRefresh == 1 && anotherSetting == "foobar"'
});
```

## Reading settings values

You can access the value of a setting in a widget, in a controller, in a report or anywhere you want. To access the value create an instance of your settings class and get the value like below.

### System settings

```
$settings = new \Piwik\Plugins\MyPlugin\SystemSettings();
$interval = $settings->refreshInterval->getValue()
```

### User settings

```
$settings = new \Piwik\Plugins\MyPlugin\UserSettings();
$interval = $settings->refreshInterval->getValue()
```

### Measurable settings

```
$settings = new \Piwik\Plugins\MyPlugin\MeasurableSettings($idSite);
$interval = $settings->refreshInterval->getValue()
```
