# Plugin Editions | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/plugin-editions

---

# Plugin Editions

- ### On this Page

  - [Define the Editions](docs_5x__extend__plugin-editions.md#define-the-editions)
  - [Add Feature Toggles](docs_5x__extend__plugin-editions.md#add-feature-toggles)
  - [Require a Craft Edition](docs_5x__extend__plugin-editions.md#require-a-craft-edition)
  - [Testing](docs_5x__extend__plugin-editions.md#testing)

The Plugin Store supports multi-edition plugins, which work similarly to [Craft’s editions](docs_5x__editions.md) (Solo, Team, and Pro).

- Plugins that support multiple editions are still comprised of a single Composer package.
- Plugins’ active edition is recorded in the [project config](docs_5x__project-config.md).
- Plugins can implement feature toggles by checking their active edition.
- Plugins may require a particular Craft edition.

Not every plugin can or should support editions. [Contact  (opens new window)](https://craftcms.com/contact) Pixel & Tonic before you begin adding edition support to make sure it will be allowed for your plugin.

## [#](#define-the-editions)Define the Editions

To add edition support to a plugin, begin by defining the available editions (in “ascending” order), by overriding [craft\base\Plugin::editions()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-plugin.html#method-editions).

```
class Plugin extends \craft\base\Plugin;
{
    // The order of your constants isn’t important...
    const EDITION_LITE = 'lite';
    const EDITION_PRO = 'pro';

    public static function editions(): array
    {
        return [
            // ...but the order you return them *is*!
            self::EDITION_LITE,
            self::EDITION_PRO,
        ];
    }

    // ...
}
```

## [#](#add-feature-toggles)Add Feature Toggles

Your feature toggles can call your plugin’s [is()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-plugin.html#method-is) method.

PHPTwig

```
if (Plugin::getInstance()->is(Plugin::EDITION_PRO) {
    // Pro edition-only code goes here...
}

if (Plugin::getInstance()->is(Plugin::EDITION_LITE, '>')) {
    // Advanced functionality goes here (`pro`, or any higher editions added later)
}
```

```
{% if plugin('plugin-handle').is('pro') %}
  {# Pro edition-only code goes here... #}
{% endif %}
```

`is()` accepts two arguments, `$edition` and `$operator`.

`$edition` is the name of the edition you’re concerned with.

`$operator` is how you wish to compare that edition with the installed edition. by default, the editions are compared for equality

The following operators are also supported:

| Operator | Tests if the active edition is \_\_\_\_ the given edition |
| --- | --- |
| `<` or `lt` | …less than… |
| `<=` or `le` | …less than or equal to… |
| `>` or `gt` | …greater than… |
| `>=` or `ge` | …greater than or equal to… |
| `==` or `eq` | …equal to… (same as default behavior) |
| `!=`, `<>`, or `ne` | …not equal to… |

The active edition is considered “greater than” another if it appears *later* in the declared [editions array](#define-the-editions), and “less than” another if it appears *earlier*.

Changing editions should *never* result in data or configuration loss.
Editions can change at any time, including due to accidents, like an incorrectly-merged project config change.

Edition comparisons can be performed once your plugin’s `init()` method is called.
Consider binding event listeners only when they are relevant to the installed edition.

Individual [controllers](docs_5x__extend__controllers.md) cannot be conditionally registered (without using distinct controller namespaces), but you *can* check for editions in each action, or a controller’s `beforeAction()` method:

```
public function beforeAction($action): bool
{
    // This controller is only accessible to Pro installations:
    if (Plugin::getInstance()->is(Plugin::EDITION_PRO, '<')) {
        return false;
    }

    return parent::beforeAction($action);
}
```

## [#](#require-a-craft-edition)Require a Craft Edition

The [`minCraftEdition`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-plugin.html#property-mincraftedition) property of your plugin class can be set to any of the [craft\enums\CmsEdition  (opens new window)](https://docs.craftcms.com/api/v5/craft-enums-cmsedition.html)

For example, a plugin that provides some additional functionality to [user groups](docs_5x__system__user-management.md#user-groups) (a feature only available in Pro) should have a `minCraftEdition` of `CmsEdition::Pro`.

## [#](#testing)Testing

You can toggle the active edition by changing the `plugins.<plugin-handle>.edition` property in `config/project/project.yaml`.

After changing the value to a valid edition handle (one returned by your plugin’s `editions()` method), Craft will prompt you to sync your project config YAML changes into the loaded project config. Once that’s done, your plugin’s active edition will be set to the new edition, and [feature toggles](#add-feature-toggles) should start behaving accordingly.

Project config can be updated and applied in one operation, via the command line:

```
php craft project-config/set plugins.plugin-handle.edition newEdition --update-timestamp
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/plugin-editions.md)
