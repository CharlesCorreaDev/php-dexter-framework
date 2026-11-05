# Parameters: Develop - Matomo Analytics (formerly Piwik Analytics) - Developer Docs - v6

> **Fonte / Source:** https://developer.matomo.org/guides/tagmanager/parameters

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

#### Parameters

- [Specifying parameters](#specifying-parameters)
  - [UI controls](#ui-controls "UI controls")
  - [Selecting variables](#selecting-variables "Selecting variables")
  - [Showing only specific parameters](#showing-only-specific-parameters "Showing only specific parameters")
  - [Validating a value](#validating-a-value "Validating a value")
  - [Transforming a value](#transforming-a-value "Transforming a value")
  - [Migrating tags to include new parameters](#migrating-tags-to-include-new-parameters "Migrating tags to include new parameters")
  - [More information](#more-information "More information")

# Parameters

Each tag, trigger, and variable can optionally define one or multiple parameters. These parameters have the same API as [Plugin settings](develop__guides__plugin-settings.md).

## Specifying parameters

Here is an example on how to define a parameter which you can later access in the JavaScript part of a tag, trigger, or variable.

```
public function getParameters()
{
    return array(
        $this->makeSetting($name = 'popupText', $default = 'This is the default value', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
            $field->title = 'Popup Text';
            $field->uiControl = FieldConfig::UI_CONTROL_TEXTAREA;
            $field->description = 'Please Enter the text ';
            $field->validators[] = new NotEmpty();
        })
    );
}
```

You may notice a couple of things such as the parameter name `popupText` under which the parameter will be
later available in Javascript using `parameters.get('popupText')`, the default value, the title that will be shown in the UI to the user, which UI control should be used, and more.

### UI controls

You can choose between a selection of different UI controls, for example a checkbox or a select field. Check out the [FieldConfig API](develop__api-reference__Piwik__Settings__FieldConfig.md) for more information on the available
control types.

### Selecting variables

In the Tag Manager you may optionally allow a user to choose a variable instead of writing only a hard coded value. To do this,
simply set the template file to one of these values:

```
// a text field that allows the user to choose a variable
$field->uiControl = FieldConfig::UI_CONTROL_TEXT;
$field->customFieldComponent = self::FIELD_VARIABLE_COMPONENT;

// a textarea that allows the user to choose a variable
$field->uiControl = FieldConfig::UI_CONTROL_TEXTAREA;
$field->customFieldComponent = self::FIELD_TEXTAREA_VARIABLE_COMPONENT;

// requires the user to select a "MatomoConfigurationVariable"
$field->customFieldComponent = self::FIELD_VARIABLE_TYPE_COMPONENT;
$field->uiControlAttributes = array('variableType' => 'MatomoConfiguration');
```

### Showing only specific parameters

In your template, you may want to show certain parameters only when a different parameter has a specific value. In the below example the user can select a "tracking type". When the selected type is "Goal", we want to show another field which lets the
user enter a "Goal ID". To achieve this, you can specify a `condition` property. In the below example this is `trackingType == "goal"`. It means the parameter will be only shown when the user has selected the tracking type `goal`.

```
public function getParameters()
{
    $trackingType = $this->makeSetting('trackingType', 'pageview', FieldConfig::TYPE_STRING, function (FieldConfig $field) {
        $field->title = 'Tracking Type';
        $field->uiControl = FieldConfig::UI_CONTROL_SINGLE_SELECT;
        $field->availableValues = array(
            'pageview' => 'Pageview',
            'goal' => 'Goal',
        );
    });

    return array(
        $trackingType,
        $this->makeSetting('idGoal', '', FieldConfig::TYPE_INT, function (FieldConfig $field) use ($trackingType) {
            $field->title = 'Goal ID';
            $field->condition = 'trackingType == "goal"';
            if ($trackingType->getValue() === 'goal') {
                $field->validators[] = new NotEmpty();
                $field->validators[] = new CharacterLength(1, 500);
            }
        }),
    );
}
```

### Validating a value

You have two ways to validate a value:

- Use one of many predefined validators such as `NotEmpty`, `CharacterLength`, `Email`, `NumberRange`:

```
$field->validators[] = new Piwik\Validators\NotEmpty();
$field->validators[] = new Piwik\Validators\Email();
$field->validators[] = new Piwik\Validators\UrlLike();
$field->validators[] = new Piwik\Validators\CharacterLength($min = 1, $max = 500);
$field->validators[] = new Piwik\Validators\NumberRange($min = 1, $max = 500);
```

- Define a custom `validate` callable like this:

```
$field->validate = function ($value, Setting $setting) {
    if ($value > 60) {
        throw new \Exception('The time limit is not allowed to be greater than 60 minutes.');
    }
}
```

You may also use both ways within one field. Any `validator` will be executed before the custom `validate` method.

### Transforming a value

Before a value is saved, you may want to transform a value to ensure the value has the expected format. For example, you may want to ensure a URL always has a protocol set like this:

```
$field->transform = function ($value, Setting $setting) {
    if (strpos($value, 'http') === false) {
        $value = 'https://' . $value;
    }

    return $value;
}
```

### Migrating tags to include new parameters

When you add a new parameter to a tag template, all the existing tags referencing this template will be shown as changed after the next version is published. They will continue to do so until each one is manually updated in some way and another version is published. To avoid this, there is a helper class that can be used in the migration script (Available Matomo version 4.12 and above).

- First, you need to create a migration script following the process outlined in the [Extending the database](develop__guides__extending-database.md) page.
- Then, in the doUpdate method, you can use the new migration helper class to update all of the tags that need to be updated.

```
public function doUpdate(Updater $updater)
{
    // This executes any migrations defined the normal way.
    $updater->executeMigrations(__FILE__, $this->getMigrations($updater));

    // Migrate the Matomo type tags to all include the newly configured field.
    $migrator = new NewTagParameterMigrator(MatomoTag::ID, 'someNewParameterName');
    $migrator->addField('anotherNewParameterName'); // This is optional and only needed if you added more than one parameter.
    $migrator->migrate(); // This kicks off the processing of the tag migration.
}
```

- If you're updating a different template class than `MatomoTag`, simply substitute the correct class, which should have the `ID` constant.
- **Note:** There's an `addField` method that can be called as many times as necessary if you added more than one new parameter. If you only added one, there's no need to use the `addField` method.
- There is an optional third argument on the constructor and second argument on the `addField` method that allows you to specify what value to give the new parameter instead of leaving it empty.

### More information

To get more information, check out the [FieldConfig API](develop__api-reference__Piwik__Settings__FieldConfig.md).
