# Template Roots | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/template-roots

---

# Template Roots

- ### On this Page

  - [Plugin Control Panel Templates](docs_5x__extend__template-roots.md#plugin-control-panel-templates)

Modules and plugins can register custom “template roots” for either control panel or front-end templates.

A template root is a directory that contains templates, which are accessible to other templates from a predefined template path prefix.

For example, you could create a plugin that provides common Twig utility macros, which could be accessible from `_utils/macros.twig`.

To do that, use the [EVENT\_REGISTER\_SITE\_TEMPLATE\_ROOTS  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html#event-register-site_template_roots) event:

```
use craft\events\RegisterTemplateRootsEvent;
use craft\web\View;
use yii\base\Event;

public function init()
{
    parent::init();

    Event::on(
        View::class,
        View::EVENT_REGISTER_SITE_TEMPLATE_ROOTS,
        function(RegisterTemplateRootsEvent $event) {
            $event->roots['_utils'] = __DIR__ . '/template-utils';
        }
    );
}
```

If you want to register new control panel template roots, use the [EVENT\_REGISTER\_CP\_TEMPLATE\_ROOTS  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html#event-register-cp_template_roots) event instead.

## [#](#plugin-control-panel-templates)Plugin Control Panel Templates

Plugins get a control panel template root added automatically, named after the plugin handle, which points to the `templates/` folder within the plugin’s base source folder.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/template-roots.md)
