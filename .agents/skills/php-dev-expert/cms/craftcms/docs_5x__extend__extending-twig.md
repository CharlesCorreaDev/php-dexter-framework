# Extending Twig | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/extending-twig

---

# Extending Twig

- ### On this Page

  - [Extend the Global craft Variable](docs_5x__extend__extending-twig.md#extend-the-global-craft-variable)
  - [Create a Twig Extension](docs_5x__extend__extending-twig.md#create-a-twig-extension)

Craft provides two ways for plugins to extend its Twig templating environment.

## [#](#extend-the-global-craft-variable)Extend the Global `craft` Variable

The [global `craft` template variable](docs_5x__reference__twig__global-variables.md#craft-2) is an instance of [craft\web\twig\variables\CraftVariable  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-twig-variables-craftvariable.html). Methods and properties of that class are available in Twig via dot notation—for example, when a template uses `craft.entries` (or `craft.entries()`), Twig calls [CraftVariable::entries()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-twig-variables-craftvariable.html#method-entries) behind the scenes.

That `CraftVariable` instance can be extended by plugins with [behaviors](docs_5x__extend__behaviors.md) and [services](docs_5x__extend__services.md). Choosing the right approach depends on what you’re trying to add to it.

- Use a **behavior** to add custom properties or methods directly onto the `craft` variable (e.g. `craft.foo()`).
- Use a **service** to add a sub-object to the `craft` variable, which can be accessed with a custom property name, called the service’s “ID”. (e.g. `craft.foo.*`).

You can attach your behavior or service to the `CraftVariable` instance by registering an [EVENT\_INIT  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-twig-variables-craftvariable.html#event-init) event handler from your plugin’s `init()` method:

```
use craft\web\twig\variables\CraftVariable;
use yii\base\Event;
use mynamespace\myplugin\behaviors\MyBehavior;
use mynamespace\myplugin\services\MyService;

public function init()
{
    parent::init();

    Event::on(
        CraftVariable::class,
        CraftVariable::EVENT_INIT,
        function(Event $e) {
            /** @var CraftVariable $variable */
            $variable = $e->sender;

            // Attach a behavior:
            $variable->attachBehaviors([
                MyBehavior::class,
            ]);

            // Attach a service:
            $variable->set('serviceId', MyService::class);
        }
    );
}
```

On their own, [behaviors](docs_5x__extend__behaviors.md#attachment) are typically attached in response to the dedicated `EVENT_DEFINE_BEHAVIORS` event.

## [#](#create-a-twig-extension)Create a Twig Extension

New features can be added to Twig by creating a [Twig extension  (opens new window)](https://twig.symfony.com/doc/3.x/advanced.html#creating-an-extension).

Extensions follow this signature:

```
namespace mynamespace\myplugin\twig;

use Craft;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;
use Twig\TwigTest;

class Extension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            // First argument is the filter name; second is a callable:
            new TwigFilter('total', 'array_sum'),
        ];
    }

    public function getFunctions(): array
    {
        return [
            // First argument is the function name; second is a callable:
            new TwigFunction('log', [Craft::class, 'info']),
        ];
    }

    public function getTests(): array
    {
        return [
            // First argument is the test name; second is a callable:
            new TwigTest('infinite', 'is_infinite'),
        ];
    }
}
```

Filters, functions, and tests are mostly equivalent in their capabilities, but as language constructs have specific uses in the template layer. Consider which makes the most sense for your users! It should be clear in a template what features come from which extensions—either from their naming or how they’re used.

You do not need to define methods that your extension has no use for—except when explicitly implementing the `GlobalsInterface` to inject global variables:

```
namespace mynamespace\myplugin\twig;

use Craft;
use Twig\Extension\AbstractExtension;
use Twig\Extension\GlobalsInterface;
use mynamespace\myplugin\MyPlugin;

class Extension extends AbstractExtension implements GlobalsInterface
{
    // ...

    public function getGlobals(): array
    {
        // Keys are variable names!
        return [
            'myPlugin' => MyPlugin::getInstance(),
        ];
    }
}
```

Here, we’ve set a variable (`myVariable`) to our plugin’s singleton instance. This means that any [services](docs_5x__extend__services.md) you’ve defined will be accessible in all Twig templates:

```
{{ myPlugin.myServiceName.myServiceMethod() }}
```

Avoid defining global variables that are ambiguous (like `plugin` or `elements`), apt to be frequently overwritten (like `entry` or `block`), or conflict with [built-in globals](docs_5x__reference__twig__global-variables.md).

### [#](#registering-the-extension)Registering the Extension

Register your Twig extension in your plugin or module’s `init()` method by calling [craft\web\View::registerTwigExtension()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html#method-registertwigextension):

```
public function init()
{
    parent::init();

    if (Craft::$app->getRequest()->getIsSiteRequest()) {
        // Instantiate + register the extension:
        $extension = new mynamespace\myplugin\twig\Extension();
        Craft::$app->getView()->registerTwigExtension($extension);
    }
}
```

The `getIsSiteRequest()` check is optional. If your extension provides features that will be useful in system emails (commonly triggered from the control panel), or will be used when rendering templates from console requests (less common, but still valid), you may want to register it in all contexts.

We’ve only covered the simplest means of extending the Twig environment—you can also provide custom *tags* or *operators*. Craft’s own [Twig extension  (opens new window)](https://github.com/craftcms/cms/tree/5.x/src/web/twig) is a great place to look for examples of advanced features.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/extending-twig.md)
