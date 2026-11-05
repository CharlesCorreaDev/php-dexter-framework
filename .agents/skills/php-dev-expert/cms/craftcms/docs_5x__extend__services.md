# Services | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/services

---

# Services

- ### On this Page

  - [Service Class](docs_5x__extend__services.md#service-class)
  - [Calling Service Methods](docs_5x__extend__services.md#calling-service-methods)
  - [Model Operation Methods](docs_5x__extend__services.md#model-operation-methods)

Services are [singleton  (opens new window)](https://en.wikipedia.org/wiki/Singleton_pattern) classes that get attached to your primary plugin class as [components  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-application-components).

They have two jobs:

- They contain most of your plugin’s business logic.
- They define your plugin’s API, which it (and other plugins) can access.

For example, Craft’s field management code is located in [craft\services\Fields  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-fields.html), which is available at `Craft::$app->getFields()`. It has a `getFieldByHandle()` method that returns a field model by its handle. If that’s something you want to do, you can call `Craft::$app->getFields()->getFieldByHandle('my-field-handle')`.

## [#](#service-class)Service Class

Create a service class using the [generator](docs_5x__extend__generator.md):

php craft make service  --plugin=my-plugin

Copy

If you would prefer to start from scratch, create a `services/` subdirectory within your plugin’s `src/` directory, and a file within it named the same as the class itself. If you want to name your service class `Foo` then name the file `Foo.php`.

Open the file in your text editor and use this template as its starting point:

```
<?php
namespace mynamespace\services;

use yii\base\Component;

class Foo extends Component
{
    // ...
}
```

Once the service class exists, you can register it as a component on your primary plugin or module class by calling [setComponents()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-di-servicelocator#setComponents()-detail) from its [init()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-baseobject#init()-detail) method:

```
public function init()
{
    parent::init();

    $this->setComponents([
        'foo' => \mynamespace\services\Foo::class,
    ]);

    // ...
}
```

Plugins also have a special [config()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-plugininterface.html#method-config) method you can use instead if you’d like to make your service extensible at the project level:

```
public static function config(): array
{
    return [
        'components' => [
            'foo' => ['class' => \mynamespace\services\Foo::class],
        ],
    ];
}
```

Any component registered via the `config()` method can be customized from the project’s `config/app.php`:

```
return [
    'components' => [
        'plugins' => [
            'pluginConfigs' => [
                'my-plugin' => [
                    'components' => [
                        'foo' => [
                            'myProperty' => 'bar',
                        ],
                    ],
                ],
            ],
        ],
    ],
];
```

## [#](#calling-service-methods)Calling Service Methods

You can access your service from anywhere in the codebase using `MyPlugin::getInstance()->serviceName`. So if your service name is `foo` and it has a method named `bar()`, you could call it like this:

```
MyPlugin::getInstance()->foo->bar()
```

If you need to call a service method directly from your primary plugin class, you can skip `MyPlugin::getInstance()` and use `$this` instead:

```
$this->foo->bar()
```

### [#](#component-getters)Component Getters

Components set via `setComponents()` are ultimately resolved via Yii’s [service locator  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-di-servicelocator#__get()-detail), which is why it’s possible to access them as “magic” properties.

This opaque access can break some IDE’s ability to infer the correct class, so it can be helpful to provide hints in your main plugin or module class:

- Use [phpDocumentor  (opens new window)](https://www.phpdoc.org/) tags to describe these virtual properties: `@property Foo $foo`;
- Add your own getter methods, with the correct return types;

Together, this might mean your class looks like this:

```
namespace mynamespace;

use craft\base\Plugin;
use mynamespace\services\Foo;

/**
 * My Plugin Class
 * 
 * @property Foo $foo
 */
class MyPlugin extends BasePlugin
{
    public function init()
    {
        // ...

        $this->setComponents([
            'foo' => Foo::class,
        ]);
    }

    public function getFoo(): Foo
    {
        return $this->get('foo');
    }
}
```

## [#](#model-operation-methods)Model Operation Methods

Many service methods perform some sort of operation for a given model, such as a CRUD operation.

There are two common types of model operation methods in Craft:

1. Methods that accept a *specific model class* (e.g. [craft\services\Categories::saveGroup()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-categories.html#method-savegroup), which saves a category group represented by the given [craft\models\CategoryGroup  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-categorygroup.html) model). We call these **class-oriented methods**.
2. Methods that accept any class so long as it implements an *interface* (e.g. [craft\services\Fields::deleteField()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-fields.html#method-deletefield), which deletes a field represented by the given model that implements [craft\base\FieldInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-fieldinterface.html), regardless of its actual class). We call these **interface-oriented methods**.

Both types of methods should follow the same general control flow, with one difference: interface-oriented methods should trigger callback methods on the model before and after the action is performed, giving the model a chance to run its own custom logic.

Here’s an example: [craft\services\Elements::saveElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-saveelement) will call `beforeSave()` and `afterSave()` methods on the element model before and after it saves a record of the element to the `elements` database table. Entry elements ([craft\elements\Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html)) use their `afterSave()` method as an opportunity to save a row in the entry-specific `entries` database table.

### [#](#class-oriented-methods)Class-Oriented Methods

Here’s a control flow diagram for class-oriented methods:

![An example flow for a saveRecipe() method.](/docs/assets/img/save-component--class.8fbf3043.png)

It’s only necessary to wrap the operation in a database transaction if the operation encompasses multiple database changes.

Here’s a complete code example of what that looks like:

```
public function saveRecipe(Recipe $recipe, $runValidation = true)
{
    $isNewRecipe = !$recipe->id;

    // Fire a 'beforeSaveRecipe' event
    $this->trigger(self::EVENT_BEFORE_SAVE_RECIPE, new RecipeEvent([
        'recipe' => $recipe,
        'isNew' => $isNewRecipe,
    ]));

    if ($runValidation && !$recipe->validate()) {
        \Craft::info('Recipe not saved due to validation error.', __METHOD__);
        return false;
    }

    // ... Save the recipe here ...

    // Fire an 'afterSaveRecipe' event
    $this->trigger(self::EVENT_AFTER_SAVE_RECIPE, new RecipeEvent([
        'recipe' => $recipe,
        'isNew' => $isNewRecipe,
    ]));

    return true;
}
```

### [#](#interface-oriented-methods)Interface-Oriented Methods

Here’s a control flow diagram for interface-oriented methods:

![An example flow for a saveIngredient() method.](/docs/assets/img/save-component--interface.48142640.png)

Here’s a complete code example of what that looks like:

```
public function saveIngredient(IngredientInterface $ingredient, $runValidation = true)
{
    /** @var Ingredient $ingredient */
    
    $isNewIngredient = !$ingredient->id;

    // Fire a 'beforeSaveIngredient' event
    $this->trigger(self::EVENT_BEFORE_SAVE_INGREDIENT, new IngredientEvent([
        'ingredient' => $ingredient,
        'isNew' => $isNewIngredient,
    ]));

    if (!$ingredient->beforeSave()) {
        return false;
    }

    if ($runValidation && !$ingredient->validate()) {
        \Craft::info('Ingredient not saved due to validation error.', __METHOD__);
        return false;
    }

    $transaction = \Craft::$app->getDb()->beginTransaction();
    try {
        // ... Save the ingredient here ...

        $ingredient->afterSave();

        $transaction->commit();
    } catch (\Exception $e) {
        $transaction->rollBack();
        throw $e;
    }

    // Fire an 'afterSaveIngredient' event
    $this->trigger(self::EVENT_AFTER_SAVE_INGREDIENT, new IngredientEvent([
        'ingredient' => $ingredient,
        'isNew' => $isNewIngredient,
    ]));

    return true;
}
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/services.md)
