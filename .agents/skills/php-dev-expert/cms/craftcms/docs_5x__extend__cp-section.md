# Control Panel Sections | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/cp-section

---

# Control Panel Sections

- ### On this Page

  - [Subnavs](docs_5x__extend__cp-section.md#subnavs)
  - [Badges](docs_5x__extend__cp-section.md#badges)
  - [Plugin Sections](docs_5x__extend__cp-section.md#plugin-sections)

Modules and plugins can add new sections to the control panel using the [EVENT\_REGISTER\_CP\_NAV\_ITEMS  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-twig-variables-cp.html#event-register-cp_nav_items) event.
Plugins also have a special [`getCpNavItem()` method](#control-panel-sections).

```
use craft\events\RegisterCpNavItemsEvent;
use craft\web\twig\variables\Cp;
use yii\base\Event;

public function init()
{
    parent::init();

    Event::on(
        Cp::class,
        Cp::EVENT_REGISTER_CP_NAV_ITEMS,
        function(RegisterCpNavItemsEvent $event) {
            $event->navItems[] = [
                'label' => 'Plugin Zone',
                'url' => 'myplugin-zone',
                'icon' => '@mynamespace/path/to/icon.svg',
            ];
        }
    );

    // ...
}
```

Each item within the [navItems  (opens new window)](https://docs.craftcms.com/api/v5/craft-events-registercpnavitemsevent.html#property-navitems) array can have the following keys:

- `url` – The URL that the nav item should link to. (It will be run through [craft\helpers\UrlHelper::cpUrl()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-urlhelper.html#method-cpurl).)
- `label` – The user-facing nav item label.
- `icon` *(optional)* – The path to the icon SVG that should be used. (It can begin with an alias.)
- `fontIcon` *(optional)* – A character/ligature from Craft’s font icon set.
- `badgeCount` *(optional)* – The [badge count](#badges) that should be displayed in the nav item.
- `subnav` *(optional)* – An array of additional, nested items that should be visible when your section is accessed, or when a user expands the primary item. (See [Subnavs](#subnavs), below.)

For Craft to properly designate an item as “active,” its `url` must be registered with a *path* to the plugin or module’s control panel section.
This holds true for `subnav` URLs, as well—their `url` must begin with the parent item’s `url` to appear selected.

## [#](#subnavs)Subnavs

If your section has a sub-navigation, each subnav item within your `subnav` array should be represented by a sub-array with mandatory `url` and `label` keys, and optional `badgeCount`, `icon`, and `fontIcon` [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "Icons for nested navigation items in the control panel was first available in version 5.9.0 of Craft.") keys:

```
$event->navItems[] = [
    // ...

    'subnav' => [
        'attractions' => [
            'label' => 'Attractions',
            'url' => 'plugin-zone/attractions',
            'icon' => 'pegasus',
        ],
        'reservations' => [
            'label' => 'Reservations',
            'url' => 'plugin-zone/reservations',
            'icon' => 'calendar-star',
        ],
        // Display a subnav badge count by adding the optional `badgeCount` key:
        'policies' => [
            'label' => 'Policies',
            'url' => 'plugin-zone/policies'
            'badgeCount' => 3,
        ],
    ],
];
```

Your templates can specify which subnav item should be selected by setting `selectedSubnavItem` to the key of a nav item:

```
{% set selectedSubnavItem = 'bar' %}
```

## [#](#badges)Badges

Navigation items’ `badgeCount`s are intended to be calculated dynamically.
If this involves costly queries or other blocking operations (like a request to a remote API), consider caching the value.
More guidance on how to use badges can be found in the [Utilities](docs_5x__extend__utilities.md) section.

## [#](#plugin-sections)Plugin Sections

Plugins that only need to add one section can set the `$hasCpSection` property on their primary plugin class, rather than using the [EVENT\_REGISTER\_CP\_NAV\_ITEMS  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-twig-variables-cp.html#event-register-cp_nav_items) event:

```
<?php

namespace mynamespace;

class Plugin extends \craft\base\Plugin
{
    public bool $hasCpSection = true;

    // ...
}
```

You can alternatively set a `hasCpSection` value in `composer.json` as noted in the [plugin guide](docs_5x__extend__plugin-guide.md#composer-json). We don’t recommend setting it in both places, however, since the value set in `composer.json` will override your public class property’s value and likely create confusion.

Craft automatically adds a new [user permission](docs_5x__extend__user-permissions.md) for your plugin, and only shows a nav item to users who can access it.

Modify aspects of your plugin’s control panel nav item by overriding its [getCpNavItem()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-plugininterface.html#method-getcpnavitem) method:

```
public function getCpNavItem(): ?array
{
    // Get the base definition (including `label`, `url`, and `icon`)...
    $item = parent::getCpNavItem();

    // ...customize...
    $item['badgeCount'] = 5;
    $item['subnav'] = [
        // ...
    ];

    // ...and return:
    return $item;
}
```

Clicking on a plugin’s nav item will take the user to `/{cpTrigger}/plugin-handle`, which will attempt to load an `index.html` or `index.twig` template within the plugin’s [template root](docs_5x__extend__template-roots.md) (its `templates/` folder within its base source folder).

See [Control Panel Templates](docs_5x__extend__cp-templates.md) for more information about developing control panel templates.

Alternatively, you can route those requests to a controller action (or a different template) by registering a control panel route from your plugin’s `init()` method:

```
use craft\events\RegisterUrlRulesEvent;
use craft\web\UrlManager;
use yii\base\Event;

public function init()
{
    Event::on(
        UrlManager::class,
        UrlManager::EVENT_REGISTER_CP_URL_RULES,
        function(RegisterUrlRulesEvent $event) {
            $event->rules['plugin-handle'] = 'plugin-handle/foo/bar';
        }
    );
}
```

These rules use the same format as those [defined in `routes.php`](docs_5x__system__routing.md#advanced-routing-with-url-rules). Find additional examples of control panel and site routes in the routing section of the [controllers](docs_5x__extend__controllers.md#routing) documentation.

Craft automatically prepends your pattern with the [cpTrigger](docs_5x__reference__config__general.md#cptrigger).
Including it (or hard-coding it to the default `admin`) may make your routes unreachable.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/cp-section.md)
