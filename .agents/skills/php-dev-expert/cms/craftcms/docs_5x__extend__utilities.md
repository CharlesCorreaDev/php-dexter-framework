# Utilities | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/utilities

---

# Utilities

- ### On this Page

  - [Utility Class](docs_5x__extend__utilities.md#utility-class)
  - [Permissions](docs_5x__extend__utilities.md#permissions)
  - [Registering your Utility](docs_5x__extend__utilities.md#registering-your-utility)

Plugins can provide new utilities for the [control panel](docs_5x__system__control-panel.md)’s **Utilities** section by creating a class that implements [craft\base\UtilityInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-utilityinterface.html) or extends [craft\base\Utility  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-utility.html). A utility is typically used to surface information and controls for administrative features that aren’t tied to specific [elements](docs_5x__system__elements.md). Each registered utility gets its own [permissions](#permissions).

## [#](#utility-class)Utility Class

Scaffold a utility with the [generator](docs_5x__extend__generator.md):

php craft make utility  --plugin=my-plugin

Copy

Answer the prompts, and generator will create the required class and register it via the appropriate [events](docs_5x__extend__events.md).

Alternatively, extending [craft\base\Utility  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-utility.html) will provide all the non-essential methods—but you must still define those that identify your utility:

```
namespace mynamespace;

use Craft;
use craft\base\Utility;

class MyUtility extends Utility
{
    public static function displayName(): string
    {
        return Craft::t('my-plugin', 'My Utility');
    }

    public static function id(): string
    {
        return 'my-utility';
    }

    public static function icon(): ?string
    {
        return Craft::getAlias('@my-plugin/icon.svg');
    }

    public static function contentHtml(): string
    {
        $view = Craft::$app->getView();

        // Gather data to pass to the template...
        $params = [
            'myOptions' => [
                // ...
            ],
        ];

        return $view->renderTemplate('_my-plugin/utilities/my-utility.twig', $params);
    }
}
```

This utility would be accessible to any user with the correct [permission](#permissions) at `/admin/utilities/my-utility` (or whatever the site’s [cpTrigger](docs_5x__reference__config__general.md#cptrigger) is).

Refer to Craft’s own utility classes (located in `vendor/craftcms/cms/src/utilities/`, or the `craft\utilities` namespace) for more complete examples.

### [#](#html)HTML

If your utility relies on any JavaScript or CSS, be sure and register the relevant [asset bundles](docs_5x__extend__asset-bundles.md) in `contentHtml()`.

You may also implement static `toolbarHtml()` and `footerHtml()` methods to inject actions and metadata.

### [#](#badges)Badges

The static [`badgeCount()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-utilityinterface.html#method-badgecount) method can be used to surface an integer in its **Utilities** screen navigation item. Craft displays the total badge counts of all registered utilities (accessible to the current user) in the main control panel menu. See the [Updates  (opens new window)](https://docs.craftcms.com/api/v5/craft-utilities-updates.html), [Migrations  (opens new window)](https://docs.craftcms.com/api/v5/craft-utilities-migrations.html), and [Deprecation Warnings  (opens new window)](https://docs.craftcms.com/api/v5/craft-utilities-deprecationerrors.html) classes for some examples of how badges are used.

Badge counts are calculated on every control panel request. Be mindful of your users’ experience, and cache any expensive arithmetic or database queries!

It’s also important to display a number that reflects items that are actionable for the current user. Suppose you wanted to list “stale” entries (things that hadn’t been edited in the last month)—showing a user a count across all sections (even if they didn’t have the correct [permissions](#permissions)) might continue to display a badge, even when their backlog was cleared!

```
public static function badgeCount(): int
{
    $user = Craft::$app->getUser()->getIdentity();

    // Check the cache before querying, or set the cache for the default `cacheDuration`:
    return Craft::$app->getCache()->getOrSet("my-plugin:utility-badge-count:{$user->uid}", function() {
        return Entry::find()
            ->dateUpdated("<= {$now->modify('-1 month')->format(DateTime::ATOM)}")
            ->savable()
            ->count();
    });
}
```

Utilities are always rendered in the context of control panel user session.

## [#](#permissions)Permissions

Each utility automatically gets its own [permission](docs_5x__extend__user-permissions.md). Craft checks these permissions before displaying a utility in the sidebar, and when the utility’s URL is requested.

However, those permissions do *not* have any bearing on what functionality might be accessible to a user via other means. For example, if your utility displayed a form to authorized users and allowed them to download a specialized report of some kind, the [controller](docs_5x__extend__controllers.md) or action that ultimately generates the report must also check the appropriate permissions. In general, those permissions should be discrete: an administrator would grant users access to the utility *and* a *Modify Widgets* permission that your plugin explicitly defines (and checks in the appropriate controller action).

## [#](#registering-your-utility)Registering your Utility

Once you have created your utility class, you will need to register it with the [Utilities  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-utilities.html) service, so Craft will know about it when populating the list of available utility types:

```
<?php
namespace mynamespace\myplugin;

use craft\base\Plugin as BasePlugin;
use craft\events\RegisterComponentTypesEvent;
use craft\services\Utilities;
use yii\base\Event;

class Plugin extends BasePlugin
{
    public function init()
    {
        Event::on(
            Utilities::class,
            Utilities::EVENT_REGISTER_UTILITIES,
            function(RegisterComponentTypesEvent $event) {
                $event->types[] = MyUtility::class;
            }
        );

        // ...
    }

    // ...
}
```

Registering your utility doesn’t mean it will automatically appear for users! You must also grant the appropriate [permissions](#permissions).

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/utilities.md)
