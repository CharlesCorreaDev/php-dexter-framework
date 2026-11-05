# Element Actions | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/element-actions

---

# Element Actions

- ### On this Page

  - [Action Class](docs_5x__extend__element-actions.md#action-class)
  - [Registering Element Actions](docs_5x__extend__element-actions.md#registering-element-actions)
  - [Handling Actions](docs_5x__extend__element-actions.md#handling-actions)

Plugins can provide custom actions for element index pages by creating a class that implements [craft\base\ElementActionInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-elementactioninterface.html). Element actions can operate on single elements or multiple elements at the same time.

## [#](#action-class)Action Class

Use the [generator](docs_5x__extend__generator.md) to scaffold your action class:

php craft make element-action  --plugin=my-plugin

Copy

As a convenience, you can extend [craft\base\ElementAction  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-elementaction.html), which provides a base action type implementation. You can refer to Craft’s own element action classes (located in `vendor/craftcms/cms/src/elements/actions/`, or the `craft\elements\actions` namespace) for examples.

### [#](#parameterization)Parameterization

Craft’s built-in element actions prioritize reusability over specificity. Take [craft\elements\actions\Delete  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-actions-delete.html), for instance: it can be used with any element type, but entries and categories make use of its attributes to generate other actions like “Delete (with descendants)” (by setting the `withDescendants` attribute), or “Delete permanently” (with the `hard` attribute).

## [#](#registering-element-actions)Registering Element Actions

To show up on an element index page, actions must be registered with the element type.

If an action is only relevant to a custom [element type](docs_5x__extend__element-types.md) that is defined by the same plugin, return it from the element class’s [defineActions()](docs_5x__extend__element-types.md#actions) method:

```
protected static function defineActions(string $source): array
{
    return [
        MyAction::class,
    ];
}
```

If it should be available to an element type that is out of the plugin’s control, register it using the [craft\base\Element::EVENT\_REGISTER\_ACTIONS  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#event-register-actions) event:

```
<?php
namespace mynamespace;

use craft\base\Element;
use craft\elements\Entry;
use craft\events\RegisterElementActionsEvent;
use mynamespace\elements\actions\MyAction;
use yii\base\Event;

class Plugin extends \craft\base\Plugin
{
    public function init()
    {
        Event::on(
            Entry::class,
            Element::EVENT_REGISTER_ACTIONS,
            function(RegisterElementActionsEvent $event) {
                $event->actions[] = MyAction::class;
            }
        );

        // ...
    }

    // ...
}
```

Both options give you access to the [element source](docs_5x__extend__element-types.md#sources) being rendered, so that actions can be conditionally added—for `defineActions()`, it’s passed as an argument; when registering them via an event, the event object has a `source` attribute.

## [#](#handling-actions)Handling Actions

Craft runs all actions via [craft\controllers\ElementIndexesController::actionPerformAction()  (opens new window)](https://docs.craftcms.com/api/v5/craft-controllers-elementindexescontroller.html#method-actionperformaction). See the built-in actions for examples of how they handle interactions in the control panel, and for back-end implementations of `performAction()`.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/element-actions.md)
