# Introduction - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/extend/settings/settings.html

---

# Introduction

- [Settings Page Registration](docs__4.x__extend__settings__settings.md#settings-page-registration)
- [Settings Properties](#settings-properties)
- [Linking to a Model Class](docs__4.x__extend__settings__settings.md#linking-to-a-model-class)
- [Linking to a Controller Class](docs__4.x__extend__settings__settings.md#linking-to-a-controller-class)
- [Settings Page Class Definition](#settings-page-class-definition)

There are two main ways that plugins can configure the system. It is a good idea to first decide which is the best option for your requirements.

- [file-based configuration](docs__4.x__extend__settings__file-settings.md) with no user-interface, stored in the file system.
- [model-based settings](docs__4.x__extend__settings__model-settings.md) with an optional user-interface, stored in the database.

Using model-based settings with backend pages provide a better user experience, but they carry more overhead for the initial development. File-based configuration is suitable for configuration that is rarely modified and has no interface, such as policy configuration.

## [#](#settings-page-registration) Settings Page Registration

When using model-based settings, you may optionally register them with the dedicated area for managing settings and configuration, accessed by clicking the **Settings** link in the main menu.

Settings pages must be registered by overriding the `registerSettings` method inside the [plugin registration file](docs__4.x__extend__extending.md). The method returns an array with a key for each settings item and the value configures the settings model or controller to appear in the settings area. The following is an example of registering a settings model.

```
public function registerSettings()
{
    return [
        'settings' => [
            'label' => 'User Settings',
            'description' => 'Manage user based settings.',
            'category' => 'CATEGORY_USERS',
            'icon' => 'icon-cog',
            'class' => \Acme\User\Models\UserSetting::class,
        ]
    ];
}
```

### [#](#settings-properties) Settings Properties

The following properties are available for each key when registering settings.

| Property | Description |
| --- | --- |
| **label** | specifies the menu label localization string key, required. |
| **category** | specifies a category label localization string key, for grouping settings pages together, required. |
| **keywords** | specifies keywords used for searching settings. |
| **order** | a numerical weight when determining the display order. |
| **icon** | an icon name from the [October CMS icon collection](docs__4.x__element__available-icons.md), optional. |
| **iconSvg** | an SVG icon to be used in place of the standard icon, the SVG icon should be a rectangle and can support colors, optional. |
| **url** | the backend URL the menu item should refer to, eg. `Backend::url('author/plugin/controller/action')`. |
| **class** | the model class the settings item should refer to, eg. `Acme\User\Models\UserSetting::class`. |
| **permissions** | an array of permissions the backend user must have in order to view the menu item (Note: direct access of URLs still requires separate permission checks), optional. |
| **context** | specifies the placement of the settings item, either `system` or `mysettings`. Default: `system`. |
| **size** | the settings form size when used with a `class` definition. Supported values: `tiny`, `small`, `medium`, `large`, `huge`, `giant`, `adaptive`. Default: `large`. |

For interoperability with other plugins, the following general constants are available for the `category` property.

- CATEGORY\_CMS
- CATEGORY\_MISC
- CATEGORY\_MAIL
- CATEGORY\_LOGS
- CATEGORY\_SHOP
- CATEGORY\_TEAM
- CATEGORY\_USERS
- CATEGORY\_SOCIAL
- CATEGORY\_SYSTEM
- CATEGORY\_EVENTS
- CATEGORY\_BACKEND
- CATEGORY\_CUSTOMERS
- CATEGORY\_MYSETTINGS
- CATEGORY\_NOTIFICATIONS
- CATEGORY\_GLOBALS
- CATEGORY\_COLLECTIONS

The optional `keywords` parameter is used by the settings search feature. If keywords are not provided, the search uses only the settings item label and description.

## [#](#linking-to-a-model-class) Linking to a Model Class

When linking to a model `class` specified in the settings properties, you do not need to build your own controller, and this is useful for the majority of cases. The following example creates a link to a settings model, described more in the [model settings article](docs__4.x__extend__settings__model-settings.md).

```
public function registerSettings()
{
    return [
        'settings' => [
            'label' => 'User Settings',
            'description' => 'Manage user based settings.',
            'category' => 'Users',
            'icon' => 'icon-cog',
            'class' => \Acme\User\Models\UserSetting::class,
            'order' => 500,
            'keywords' => 'security location',
            'permissions' => ['acme.users.access_settings']
        ]
    ];
}
```

A generic backend controller is used for the form, with basic features like saving and resetting the values to default. Active navigation is configured automatically. Permissions defined are also enforced by the controller.

## [#](#linking-to-a-controller-class) Linking to a Controller Class

When specifying a page `url` in the settings properties, you have the option to build your own controller and link it in the settings area. The next example shows how to create a link to a backend page.

```
public function registerSettings()
{
    return [
        'location' => [
            'label' => 'Locations',
            'description' => 'Manage available user countries and states.',
            'category' => 'Users',
            'icon' => 'icon-globe',
            'url' => Backend::url('acme/user/locations'),
            'order' => 500,
            'keywords' => 'geography place placement'
        ]
    ];
}
```

### [#](#settings-page-class-definition) Settings Page Class Definition

Settings page controllers can be any [backend controller](docs__4.x__extend__system__controllers.md), except to make things easier, you may extend the `Backend\Classes\SettingsController` base class. This class registers the setting navigation context in the controller automatically. All you need to do is provide the settings code in the `$settingsItemCode` property, used to determine the active menu item.

```
namespace Acme\Blog\Controllers;

class Posts extends \Backend\Classes\SettingsController
{
    public $settingsItemCode = 'location';

    public function index() {}
}
```

#### [#](#see-also) See Also

- [Backend Controllers](docs__4.x__extend__system__controllers.md)

← [Import Export Model](docs__4.x__extend__importexport__importexport-model.md)[File Settings](docs__4.x__extend__settings__file-settings.md) →
