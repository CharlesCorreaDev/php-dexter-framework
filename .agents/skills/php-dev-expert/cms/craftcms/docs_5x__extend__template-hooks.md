# Template Hooks | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/template-hooks

---

# Template Hooks

- ### On this Page

  - [Control Panel Template Hooks](docs_5x__extend__template-hooks.md#control-panel-template-hooks)

Craft templates can give modules and plugins an opportunity to hook into them using [hook tags](docs_5x__reference__twig__tags.md#hook).

```
{# Give plugins a chance to make changes here #}
{% hook 'my-custom-hook-name' %}
```

Plugins and modules can register methods to be called by template hooks using [craft\web\View::hook()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html#method-hook).

```
Craft::$app->getView()->hook('my-custom-hook-name', function(array &$context) {
    // Modify template *context*
    $context['foo'] = 'bar';

    // Return *output*
    return '<p>Hey!</p>';
});
```

The callback method will pass a `$context` argument, which represents the current template context (all of the currently defined template variables). Any changes to this array will result in changes to the template’s variables for any tags that follow the `{% hook %}` tag.

The method can optionally return a string, which will be output where the `{% hook %}` tag is in the template.

## [#](#control-panel-template-hooks)Control Panel Template Hooks

Your custom plugin or module can use existing template hooks to modify parts of the Craft control panel.

Pay close attention to what you intend to modify; some hooks are provided for modifying context while others make most sense for output.

| Hook | Description & Template |
| --- | --- |
| `cp.elements.element` | Base “element” template, used for rendering relational tiles. [\_elements/element.twig  (opens new window)](https://github.com/craftcms/cms/blob/5.x/src/templates/_elements/element.twig) |
| `cp.layouts.base` | Before `doctype` declaration in base template. [\_layouts/base.twig  (opens new window)](https://github.com/craftcms/cms/blob/5.x/src/templates/_layouts/base.twig) |
| `cp.globals.edit` | Before global set detail view’s template blocks. [globals/\_edit.twig  (opens new window)](https://github.com/craftcms/cms/blob/5.x/src/templates/globals/_edit.twig) |
| `cp.globals.edit.content` | After global set detail view’s main content. [globals/\_edit.twig  (opens new window)](https://github.com/craftcms/cms/blob/5.x/src/templates/globals/_edit.twig) |
| `cp.users.edit.prefs` | After fields in the user’s “Preferences” tab. [users/\_edit.twig  (opens new window)](https://github.com/craftcms/cms/blob/5.x/src/templates/users/_edit.twig) |

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/template-hooks.md)
