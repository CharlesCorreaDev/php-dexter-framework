# Widget Types | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/widget-types

---

# Widget Types

- ### On this Page

  - [Widget Class](docs_5x__extend__widget-types.md#widget-class)
  - [Registering Custom Widget Types](docs_5x__extend__widget-types.md#registering-custom-widget-types)
  - [Content](docs_5x__extend__widget-types.md#content)
  - [Settings](docs_5x__extend__widget-types.md#settings)

Plugins can provide custom widget types for the [control panel dashboard](docs_5x__control-panel.md#dashboard) by creating a class that implements [craft\base\WidgetInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-widgetinterface.html) and [craft\base\WidgetTrait  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-widgettrait.html). The class will serve both as a way to communicate various things about your widget type (with static methods), and as a model that widgets of its type will be instantiated with.

Each user controls what widgets are on their dashboard, and may have multiple instances of a single widget type—meaning widget [settings](#settings) can give a single widget type a great deal of flexibility.

## [#](#widget-class)Widget Class

Scaffold a widget type with the [generator](docs_5x__extend__generator.md):

php craft make widget-type  --plugin=my-plugin

Copy

If you would prefer to write a widget class from scratch, it should extend [craft\base\Widget  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-widget.html). Refer to Craft’s own widget classes (located in `vendor/craftcms/cms/src/widgets/`, or the `craft\widgets` namespace) for examples.

## [#](#registering-custom-widget-types)Registering Custom Widget Types

Once you have created your widget class, you will need to register it with the Dashboard service, so Craft will know about it when populating the list of available widget types. Generator will add this code, for you.

```
<?php
namespace mynamespace;

use craft\events\RegisterComponentTypesEvent;
use craft\services\Dashboard;
use yii\base\Event;

class Plugin extends \craft\base\Plugin
{
    public function init()
    {
        Event::on(
            Dashboard::class,
            Dashboard::EVENT_REGISTER_WIDGET_TYPES,
            function(RegisterComponentTypesEvent $event) {
                $event->types[] = MyWidget::class;
            }
        );

        // ...
    }

    // ...
}
```

## [#](#content)Content

A widget’s content is determined by its `getBodyHtml()` method. This example renders a Twig template, but you can generate the HTML however you like:

```
public function getBodyHtml(): ?string
{
    return Craft::$app->getView()->renderTemplate('my-plugin/_widgets/my-widget', [
        'local' => 'Variables!',
    ]);
}
```

### [#](#javascript-css)JavaScript + CSS

If the widget depends on JavaScript or CSS, you must register the appropriate [asset bundles](docs_5x__extend__asset-bundles.md) from this method, as well.

Each widget is rendered inside a HTML element with an `id` attribute like `widget1`, `widget2`, `widget42`, and so on, where the number is the widget’s `id` in the database. To tie JavaScript logic to each instance of your widget, consider separating its implementation from initialization:

Asset BundleWidget Class

```
(function() {
    Craft.MyWidget = Garnish.Base.extend({
        $widget: null,
        init: function(id) {
            this.$widget = document.getElementById('widget' + id);

            // ...
        },
    });
})()
```

```
Craft::$app->getView()->registerAssetBundle(MyAsset::class);
Craft::$app->getView()->registerJs("new Craft.MyWidget({$this->id});");
```

Here, we’ve parameterized the `Craft.MyWidget` JavaScript object so it can be instantiated multiple times, each with a unique `id` argument. The `init()` function takes care of building the complete HTML ID, looking it up in the DOM, and storing it on that instance.

## [#](#settings)Settings

Your widget’s `getSettingsHtml()` method should return a snippet that includes input elements with `name` attributes matching its public properties. Whenever a user creates or updates a widget, Craft will assign those values, save the widget to the database, and re-render it.

If you elect to *not* implement `getSettingsHtml()`, your widget will display a photo of Brad Bell.

### [#](#validation)Validation

As with other [Model  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-model.html)s, widgets can declare [validation rules  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/tutorial-core-validators) by implementing a `defineRules()` method. Validation rules ensure your widget is always configured in a useful way.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/widget-types.md)
