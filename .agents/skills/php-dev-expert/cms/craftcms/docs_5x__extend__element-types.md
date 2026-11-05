# Element Types | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/element-types

---

# Element Types

- ### On this Page

  - [Getting Started](docs_5x__extend__element-types.md#getting-started)
  - [Working with the Database](docs_5x__extend__element-types.md#working-with-the-database)
  - [Fields + Content](docs_5x__extend__element-types.md#fields-content)
  - [Element Index](docs_5x__extend__element-types.md#element-index)
  - [Statuses](docs_5x__extend__element-types.md#statuses)
  - [Searchable Attributes](docs_5x__extend__element-types.md#searchable-attributes)
  - [Element URLs](docs_5x__extend__element-types.md#element-urls)
  - [Editing Elements](docs_5x__extend__element-types.md#editing-elements)
  - [Permissions](docs_5x__extend__element-types.md#permissions)
  - [Relations](docs_5x__extend__element-types.md#relations)
  - [Eager-Loading](docs_5x__extend__element-types.md#eager-loading)
  - [Advanced Topics](docs_5x__extend__element-types.md#advanced-topics)

[Elements](docs_5x__system__elements.md) underpin Craft’s flexible and extensible content modeling features. You can supplement Craft’s seven [built-in element types](docs_5x__system__elements.md#element-types) with your own, from a plugin or module.

As you implement common element features like [titles](#titles), [sources](#sources), or [statuses](#statuses), the built-in element classes will be an invaluable resource—both as templates for basic functionality and evidence of the flexibility of elements.

If your plugin provides a new content-driven resource, it should be implemented as an element type!

## [#](#getting-started)Getting Started

### [#](#element-class)Element Class

Element types are defined by classes that implement [craft\base\ElementInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-elementinterface.html) and use [craft\base\ElementTrait  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-elementtrait.html). The class will serve both as a source of information about your element type (using static methods), and as a model that elements of its type will be instantiated with. As a convenience, you can extend [craft\base\Element  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html), which provides a bare-bones element type implementation.

Your element class should live in the `elements/` directory of your plugin’s source directory, and—per autoloading convention—be named the same as the file. Our examples will be based on a new “product” element, so the element class (`mynamespace\elements\Product`) will be defined in `src/elements/Product.php`.

Use the [generator](docs_5x__extend__generator.md) to scaffold an element type from the command line!

php craft make element-type  --plugin=my-plugin

Copy

To start, we’ll give the class a handful of public properties and define two static methods that help the control panel render labels.

```
<?php
namespace mynamespace\elements;

use craft\base\Element;

class Product extends Element
{
    public static function displayName(): string
    {
        return 'Product';
    }

    public static function pluralDisplayName(): string
    {
        return 'Products';
    }

    public int $price = 0;
    public ?string $currency = null;

    // ...
}
```

A `lowerDisplayName()` and `pluralLowerDisplayName()` can also be explicitly defined, if you find that Craft doesn’t get them quite right.

### [#](#registration)Registration

Register your element type using the [EVENT\_REGISTER\_ELEMENT\_TYPES  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#event-register-element_types) event from your plugin or module’s `init()` method:

```
use mynamespace\elements\Product;
use craft\events\RegisterComponentTypesEvent;
use craft\services\Elements;
use yii\base\Event;

Event::on(
    Elements::class,
    Elements::EVENT_REGISTER_ELEMENT_TYPES,
    function(RegisterComponentTypesEvent $event) {
        $event->types[] = Product::class;
    }
);
```

This is not a requirement for all element types, but provides automatic support for things like relational [condition rules](docs_5x__extend__conditions.md) and [reference tags](docs_5x__system__reference-tags.md).

## [#](#working-with-the-database)Working with the Database

Part of what gives custom elements their power is the ability to store additional attributes in a predictable way—without depending on custom fields. [Entries](docs_5x__reference__element-types__entries.md), for instance, have a post date (`postDate`), expiry date (`expiryDate`), and an author ID (`authorId`); [assets](docs_5x__reference__element-types__assets.md) track the underlying file’s extension and what volume and folder they belong to.

While elements automatically get support for storing relations, custom field data, titles, slugs and URIs, it’s your plugin’s responsibility to create and maintain an appropriate database schema for persisting its native attributes. For our product element type, we’ll need a new table with at least `price` and `currency` columns.

We’re going to set up the mechanisms of persistence now, and will cover [accepting data](#editing-elements) later.

### [#](#migrations)Migrations

Create a new [migration](docs_5x__extend__migrations.md), and add this to its `safeUp()` method:

```
// Create the Products table:
$this->createTable('{{%plugin_products}}', [
    'id' => $this->primaryKey(),
    'price' => $this->integer()->notNull(),
    'currency' => $this->char(3)->notNull(),
    'dateCreated' => $this->dateTime()->notNull(),
    'dateUpdated' => $this->dateTime()->notNull(),
    'uid' => $this->uid(),
]);

// Give it a foreign key to the elements table:
$this->addForeignKey(
    null,
    '{{%plugin_products}}',
    'id',
    '{{%elements}}',
    'id',
    'CASCADE',
    null
);
```

Note that we’ve also specified `id`, `dateCreated`, `dateUpdated`, and `uid` “audit” columns (used by Craft’s [`insert`  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-command.html#method-insert), [`upsert`  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-command.html#method-upsert), and [`update`  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-command.html#method-update) commands)—as well as a foreign key to tie our records back to the source `elements` table. A foreign key ensures records are not orphaned when the underlying element is [hard-deleted](docs_5x__extend__soft-deletes.md).

Plugins should always keep their [install migration](docs_5x__extend__migrations.md#plugin-install-migrations) up to date. If this is your plugin’s first migration, it can live solely in `Install.php`; otherwise, equivalent code will also need to be added via a regular migration.

Install your plugin (or run `php craft migrate/up --plugin=my-plugin`) to create the database table.

### [#](#save-hooks)Save Hooks

The presence of attributes alone doesn’t give Craft enough information to persist them, automatically. You will need to implement this logic in an `afterSave()` method on your element class, which is called as part of the standard element saving [control flow](docs_5x__extend__services.md#interface-oriented-methods).

```
use craft\helpers\Db;

// ...

public function afterSave(bool $isNew)
{
    if (!$this->propagating) {
        Db::upsert('{{%plugin_products}}', [
            'id' => $this->id,
        ], [
            'price' => $this->price,
            'currency' => $this->currency,
        ]);
    }

    parent::afterSave($isNew);
}
```

`afterSave()` gets called by [craft\services\Elements::saveElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-saveelement), after rows in the `elements`, `elements_sites`, and `content` tables have been saved, and the element has an `id` and `uid`. Craft encapsulates the entire element saving operation in a [transaction  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/db-dao#performing-transactions), so any modifications you make in `afterSave()` will automatically be rolled back in the event of a failure.

Every element save emits [`EVENT_BEFORE_SAVE_ELEMENT`  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#event-before-save_element) and [`EVENT_AFTER_SAVE_ELEMENT`  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#event-after-save_element) events, but you are free to create and emit your own (say, based on certain type of change like an increase or decrease in price) in the `afterSave()` method.

Keep in mind that a “save” can happen in a number of circumstances (like the creation of a draft or revision), and doesn’t always mean that changes are being applied to the canonical version of an element—or that it’s even part of a web request.

### [#](#element-query-class)Element Query Class

All element types need a corresponding [element query](docs_5x__development__element-queries.md) class. Element query classes are an extension of [query builders  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/db-query-builder), tuned for fetching elements. They have three responsibilities:

- Provide public properties and setter methods for capturing custom criteria parameters;
- Join in the custom element table and select the appropriate columns within it;
- Synthesize custom parameters into conditions on the query;

Refer to Craft’s own element query classes for examples, in `vendor/craftcms/cms/src/elements/db/`.

Extend [craft\elements\db\ElementQuery  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html) in a new `elements/db/ProductQuery.php` file:

```
<?php
namespace mynamespace\elements\db;

use craft\elements\db\ElementQuery;
use craft\helpers\Db;

class ProductQuery extends ElementQuery
{
    public $price;
    public $currency;

    public function price($value): self
    {
        $this->price = $value;

        return $this;
    }

    public function currency($value): self
    {
        $this->currency = $value;

        return $this;
    }

    protected function beforePrepare(): bool
    {
        // JOIN our `products` table:
        $this->joinElementTable('products');

        // SELECT the `price` and `currency` columns:
        $this->query->select([
            'products.price',
            'products.currency',
        ]);

        if ($this->price) {
            $this->subQuery->andWhere(Db::parseParam('products.price', $this->price));
        }

        if ($this->currency) {
            $this->subQuery->andWhere(Db::parseParam('products.currency', $this->currency));
        }

        return parent::beforePrepare();
    }
}
```

The lack of type declarations for the `price` and `currency` properties (or their corresponding setter method arguments) on the element query class is intentional: they should accept any values compatible with [Db::parseParam()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-db.html#method-parseparam). We’ll cover some more examples of [param normalization](#normalizing-query-params) in a moment.

Back in your element class, implement the `find()` method and return a new instance of your query class:

```
use craft\base\Element;
use mynamespace\elements\db\ProductQuery;

// ...

class Product extends Element
{
    public static function find(): ProductQuery
    {
        return new ProductQuery(static::class);
    }

    // ...
}
```

Now you’re ready to start querying for elements of your type:

```
Product::find()
    ->price(100)
    ->all();
```

#### [#](#this-query-vs-this-subquery)`$this->query` vs. `$this->subQuery`

Behind the scenes, [craft\elements\db\ElementQuery  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html) creates two [craft\db\Query  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html) instances: the main query (`$this->query`), and a subquery (`$this->subQuery`). Column selections should go in the main query, and conditions/joins should be applied to the subquery. The subquery will ultimately become the `FROM` clause of the main query.

The reason for this separation is performance. It allows MySQL/PostgreSQL to figure out exactly which element rows should be fetched before it has to worry about which columns to select, avoiding the need to run expensive condition operations on temporary tables.

#### [#](#normalizing-query-params)Normalizing Query Params

Your query class is responsible for synthesizing and normalizing its params in the `beforePrepare()` method and applying them as [craft\db\Query::where()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-where)-compatible conditions. Oftentimes, this is only a matter of processing params with the appropriate helper methods:

- [`Db::parseParam()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-db.html#method-parseparam): Type-agnostic.
- [`Db::parseDateParam()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-db.html#method-parsedateparam): Normalizes `DateTime` values.
- [`Db::parseBooleanParam()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-db.html#method-parsebooleanparam): Normalizes boolean values and provides a means for dealing with `null` values in the database.
- [`Db::parseNumericParam()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-db.html#method-parsenumericparam): Rejects non-numeric values.
- [`Db::parseMoneyParam()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-db.html#method-parsemoneyparam): Process conditions including currency-like values into storage-safe integers;

This may also mean reconciling conflicting params, or expanding short-hand params into real column-based conditions.

Query params don’t have to match column names, nor do all column names have to be represented as query params. For instance, if our element also tracked `stock`, and our table included a `stock` column, we *could* provide a query parameter of the same name—but we could also make it simpler for developers using our element type to query for “available” products, like this:

```
class ProductQuery extends ElementQuery
{
    public $stock;
    public bool $isAvailable;

    // ...

    public function isAvailable(null|bool $value): self
    {
        $this->isAvailable = $value;

        return $this;
    }

    public function beforePrepare(): bool
    {
        // ...

        if ($this->isAvailable !== null) {
            if ($this->isAvailable) {
                $this->subQuery->andWhere(Db::parseParam('products.stock', '>', 0));
            } else {
                $this->subQuery->andWhere(Db::parseParam('products.stock', '<=', 0));
            }
        }

        return parent::beforePrepare();
    }
}
```

Other criteria may contribute to the definition of “available,” or create situations where an impossible set of conditions are applied (like “available” products with a stock of less than 0). It’s up to you whether you allow contradictions, silently resolve them, or throw an exception.

When modifying your query, new params should be applied with `andWhere()` instead of `where()`, as the latter will clear *any* existing conditions, including those that Craft uses to handle soft-deleted and disabled elements.

### [#](#querying-for-elements-in-templates)Querying for Elements in Templates

If your element type is useful to developers in Twig, you’ll want to expose an element query factory function. For consistency, we’ll look at how to add a method like `craft.entries()` or `craft.categories()` to the global `craft` variable (an instance of [CraftVariable  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-twig-variables-craftvariable.html)) by attaching a [behavior](docs_5x__extend__behaviors.md) to it.

Your behavior class (in a new file at `variables/CraftVariableBehavior.php`) should look like this:

```
namespace mynamespace\variables;

use mynamespace\elements\Product;
use mynamespace\elements\db\ProductQuery;
use Craft;
use yii\base\Behavior;

/**
 * The class name isn't important, but we've used something that describes
 * how it is applied, rather than what it does.
 * 
 * You are only apt to need a single behavior, even if your plugin or module
 * provides multiple element types.
 */
class CraftVariableBehavior extends Behavior
{
    public function products(array $criteria = []): ProductQuery
    {
        // Create a query via your element type, and apply any passed criteria:
        return Craft::configure(Product::find(), $criteria);
    }
}
```

To attach the behavior, return to your main class’s `init()` method and listen for the `CraftVariable::EVENT_DEFINE_BEHAVIORS` event:

```
use yii\base\Event;
use craft\events\DefineBehaviorsEvent;
use craft\web\twig\variables\CraftVariable;
use mynamespace\variables\CraftVariableBehavior;

Event::on(
    CraftVariable::class,
    CraftVariable::EVENT_DEFINE_BEHAVIORS,
    function(DefineBehaviorsEvent $e) {
        $e->sender->attachBehaviors([
            CraftVariableBehavior::class,
        ]);
    }
);
```

## [#](#fields-content)Fields + Content

Every element comes with automatic support for custom fields and multi-site content.

### [#](#titles)Titles

If your elements need user-defined titles, add a static `hasTitles()` method to your element class:

```
public static function hasTitles(): bool
{
    return true;
}
```

### [#](#field-layouts)Field Layouts

Element types that support content need to define a field layout. Field layouts are stored in the database, but can be reflected in (and controlled by) [project config](docs_5x__extend__project-config.md), as well.

This process begins by providing administrators a place to manage the field layout—usually as part of your plugin’s [settings](docs_5x__extend__plugin-settings.md) screen. Craft provides a `fieldLayoutDesignerField` macro via `_includes/forms.twig`, which will output a field layout designer and register all the necessary scripts:

```
{% import '_includes/forms.twig' as forms %}

{{ forms.fieldLayoutDesignerField({
  fieldLayout: craft.app.fields.getLayoutByType(
    'mynamespace\\elements\\Product'
  ),
}) }}
```

Place that within a `<form>` that posts to one of your plugin’s [controllers](docs_5x__extend__controllers.md). Craft provides a convenience method for collecting field layout data from a POST request:

```
$fieldLayout = Craft::$app->getFields()->assembleLayoutFromPost();
$fieldLayout->type = Product::class;
```

The controller (or a [service](docs_5x__extend__services.md)) can save the field layout by passing it to [craft\services\Fields::saveLayout()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-fields.html#method-savelayout):

```
Craft::$app->getFields()->saveLayout($fieldLayout);
```

For element types that only require a single field layout, you can look them up with just the class name—its ID is irrelevant:

```
public function getFieldLayout()
{
    return \Craft::$app->getFields()->getLayoutByType(self::class);
}
```

Read about managing [multiple field layouts](#variations-multiple-field-layouts), or storing [field layouts in project config](#project-config).

#### [#](#native-layout-elements)Native Layout Elements

[Field Layout Elements
→

Create composable editing and UI components for field layouts.](docs_5x__extend__field-layout-element-types.md)

Native element properties (like our Product’s `price`) can be made editable via the [sidebar](#edit-screen), or as customizable [field layout elements](docs_5x__extend__field-layout-elements.md). Craft has some pre-packaged field layout elements (like [craft\fieldlayoutelements\TitleField  (opens new window)](https://docs.craftcms.com/api/v5/craft-fieldlayoutelements-titlefield.html)), but you are responsible for configuring others—either with the existing classes, or by implementing new layout elements:

```
use craft\models\FieldLayout;
use craft\events\DefineFieldLayoutFieldsEvent;
use craft\fieldlayoutelements\TextField;
use craft\fieldlayoutelements\TitleField;
use mynamespace\elements\Product;

Event::on(
    FieldLayout::class,
    FieldLayout::EVENT_DEFINE_NATIVE_FIELDS,
    function(DefineFieldLayoutFieldsEvent $event) {
        /** @var FieldLayout $fieldLayout */
        $fieldLayout = $event->sender;

        // We only want to provide these options to our product field layouts:
        if ($fieldLayout->type !== Product::class) {
            return;
        }

        // Add a title field:
        $event->fields[] = TitleField::class;

        // Add a customized "text" field for our `price` attribute:
        $event->fields[] = [
            'class' => TextField::class,
            'attribute' => 'price',
            'type' => 'number',
            'mandatory' => true,
            'min' => 0,
            // ...see the `TextField` definition for more options!
        ];
    }
);
```

`mandatory` here means that the layout element *must* be present in the field layout, not that a value is required. Even if a developer has not customized the field layout, Craft will ensure this layout element is added to the first tab. The `TitleField` layout element is mandatory by default, and assumes the title comes from a `title` attribute, so there’s nothing to customize!

Field layout elements that map to native attributes on your element should be [declared as “safe”  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-models#safe-attributes) so that they can be mass-assigned by the `elements/save` action. If you maintain your own controller, you will need to manually assign each attribute (i.e: `$element->price = Craft::$app->getRequest()->getRequiredBody('price'))`).

Take a look at the existing [field layout element types  (opens new window)](https://github.com/craftcms/cms/blob/5.x/src/fieldlayoutelements) to see which makes the most sense for your attribute. Field layout elements that exist only to provide feedback or information should extend [craft\fieldlayoutelements\BaseUiElement  (opens new window)](https://docs.craftcms.com/api/v5/craft-fieldlayoutelements-baseuielement.html).

Despite basing our `price` layout element on [craft\fieldlayoutelements\TextField  (opens new window)](https://docs.craftcms.com/api/v5/craft-fieldlayoutelements-textfield.html), the class supports a wide variety of customizations. Here, we’ve begun to transform it into a `number` input.

Custom fields are handled for you, automatically—they’ll appear just below your element type’s native field layout elements in the field layout designer sidebar.

### [#](#saving-custom-field-values)Saving Custom Field Values

When saving values to a custom field attached to your element, can use any combination of [`setFieldValue()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-elementinterface.html#method-setfieldvalue), [`setFieldValues()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-elementinterface.html#method-setfieldvalues), and direct assignment to a property corresponding to its instance handle.

Single ValueMultiple Values

```
// Direct assignment:
$product->myCustomField = 'foo';

// Via helper method:
$product->setFieldValue('myCustomField', 'foo');

\Craft::$app->getElements()->saveElement($product);
```

```
// Direct assignment:
$product->myCustomField = 'foo';
$product->myOtherCustomField = 'bar';

// Via bulk method:
$product->setFieldValues([
    'myCustomField' => 'foo',
    'myOtherCustomField' => 'bar',
]);

\Craft::$app->getElements()->saveElement($product);
```

When using Craft’s default `elements/save` controller action, field values are automatically assigned from POST data.

#### [#](#validating-required-custom-fields)Validating Required Custom Fields

Required custom fields are only enforced when the element is saved using the `live` [validation scenario  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-models#scenarios). Set the scenario before calling `saveElement()`:

```
$element->setScenario(\craft\base\Element::SCENARIO_LIVE);
```

### [#](#localization)Localization

If your elements’ title and custom field values should be stored on a per-site basis, add a static `isLocalized()` method:

```
public static function isLocalized(): bool
{
    return true;
}
```

By default, elements will be stored in all sites. If an element should only be stored for certain sites, add a `getSupportedSites()` method to it.

```
public function getSupportedSites(): array
{
    return [
        1,
        2,
        ['siteId' => 3, 'enabledByDefault' => false],
    ];
}
```

The values in the array returned by `getSupportedSites()` can either be integers (site IDs) or an array with a `siteId` key and optionally an `enabledbyDefault` key (boolean) indicating whether the element should be enabled by default for that site. The actual values here should be determined dynamically, or via configuration—not hard-coded.

Elements that support multiple sites will have their `afterSave()` method called multiple times, once for each site that the element supports. You can tell whether it’s being called for the originally-submitted site versus a propagated site by checking `$this->propagating`.

## [#](#element-index)Element Index

All that is required to support [element indexes](docs_5x__system__elements.md#indexes) is a route that points to a template containing this:

```
{# This template is provided by Craft: #}
{% extends '_layouts/elementindex.twig' %}

{# Set a page title: #}
{% set title = 'Products'|t('my-plugin') %}

{# Let Craft know what element type the index is for: #}
{% set elementType = 'mynamespace\\elements\\Product' %}
```

To let authors create new elements from this page, define an `actionButton` block:

```
{% block actionButton %}
    {{ tag('a', {
        class: 'btn submit add icon',
        href: actionUrl('elements/create', {
            elementType: elementType
        }),
        text: 'New product'|t('my-plugin'),
    }) }}
{% endblock %}
```

Some element types may require more information to properly initialize, or will enforce permissions based on initial configuration. Entries, for example, are always created in a particular *section*—and a user may not be [permitted](#permissions) to create them in every section they’re allowed to view or publish in. In these cases, you may need to define extra params in the action URL, or POST to your own controller.

Your index’s route should be registered via [`EVENT_REGISTER_CP_URL_RULES`  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-urlmanager.html#event-register-cp_url_rules):

```
use craft\events\RegisterUrlRulesEvent;
use craft\web\UrlManager;
use yii\base\Event;

Event::on(
    UrlManager::class,
    UrlManager::EVENT_REGISTER_CP_URL_RULES,
    function (RegisterUrlRulesEvent $event) {
        $event->rules['products'] = ['template' => 'my-plugin/products/_index.twig'];
    }
);
```

A controller is not necessary, here—the route maps directly to a template.

At this point, your element index will be empty. You can skip down to the [Editing Elements](#editing-elements) section to learn more about populating and persisting elements!

### [#](#sources)Sources

Element sources are sets of criteria that form the basis of how users interact with your index and [relation fields](#relation-field). Default sources can be defined by your element type by implementing the protected static [defineSources()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-definesources) method:

```
protected static function defineSources(string $context = null): array
{
    return [
        [
            'key' => '*',
            'label' => 'All Products',
            'criteria' => []
        ],
        [
            // Optional: Divide your source list into groups!
            'heading' => Craft::t('plugin-handle', 'Currencies'),
        ],
        [
            'key' => 'cad',
            'label' => 'CAD',
            'criteria' => [
                'currency' => 'cad',
            ]
        ],
        [
            'key' => 'usd',
            'label' => 'USD',
            'criteria' => [
                'currency' => 'usd',
            ],
            // Define a default sort attribute and direction:
            'defaultSort' => ['price', 'desc'],
        ],
    ];
}
```

When a source is selected, Craft will configure the element index’s query with the defined `criteria`. Each key in the `criteria` array must correspond to a public property on your [query class](#element-query-class).

Administrators are able to rearrange and customize columns of default sources, but cannot *remove* them entirely. [Conditions](docs_5x__extend__conditions.md) can only be applied to new, custom sources. *Any* user can temporarily create additive conditions via the search + filter bar on an element index.

The returned array can also be built dynamically. For example, [entries](docs_5x__reference__element-types__entries.md) define a source for each *section*, and [categories](docs_5x__reference__element-types__categories.md) define a source for each *category group*.

Consider hiding sources that the current user would not be able to access, based on their [permissions](#permissions).

Criteria vs. Conditions

You may combine the opaque `criteria` source option with the more transparent `defaultFilter`. Default filters are constructed as [conditions](docs_5x__extend__conditions.md), and allow users to tweak them after a source is loaded:

```
use craft\elements\Entry;
use craft\elements\conditions\DateUpdatedConditionRule;

// ...

$condition = Entry::createCondition();
$condition->setConditionRules([
    new DateUpdatedConditionRule([
        'attributes' => [
            // Keep in mind, these are just defaults!
            // Users will be able to update them via the filter/condition UI.
            'rangeType' => DateRange::TYPE_AFTER,
            'periodValue' => 7,
            'periodType' => DateRange::PERIOD_DAYS_AGO,
        ],
    ]),
]);

// ...

return [
    // ...
    [
        'key' => 'recent-edits',
        'label' => 'Recently Edited',
        'criteria' => [],
        'defaultFilter' => $condition,
        'defaultSort' => ['dateUpdated', 'desc'],
    ],
];
```

The applied conditions are *additive*, so:

- Condition rules that get [exclusive control  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-conditions-elementconditionruleinterface.html#method-getexclusivequeryparams) will not be available to users when already present in the source’s `criteria`;
- Users may not expand the visible results beyond what is defined in the source’s `criteria`;

Default filters can also be used when registering sources via [craft\base\Element::EVENT\_REGISTER\_SOURCES  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#event-register-sources).

### [#](#table-attributes)Table Attributes

You can customize which columns should be available to your element indexes’ Table views by adding a protected [defineTableAttributes()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-definetableattributes) method to your element class:

```
protected static function defineTableAttributes(): array
{
    return [
        'title' => \Craft::t('app', 'Title'),
        'price' => \Craft::t('plugin-handle', 'Price'),
        'currency' => \Craft::t('plugin-handle', 'Currency'),
    ];
}
```

Custom fields attached via a [field layout](#field-layouts) are always available for selection.

The first attribute you list here is a special case. It defines the header for the first column in the table view, which is the only one admins can’t remove. Its values will come from your elements’ [craft\base\ElementInterface::getUiLabel()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-elementinterface.html#method-getuilabel) method.

If it’s a big list, you can also limit which columns should be visible by default for new [sources](#sources) by adding a protected [defineDefaultTableAttributes()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-definedefaulttableattributes) method to your element class:

```
protected static function defineDefaultTableAttributes(string $source): array
{
    return ['title', 'price', 'currency'];
}
```

If a user has customized a source, the default attributes will no longer apply to that view. For your [default sources](#sources), consider tailoring the default columns by building the list of attributes dynamically.

Table attribute values default to the corresponding element attribute, cast as a string. Add a protected `tableAttributeHtml()` method on your element class to override the returned HTML:

```
protected function attributeHtml(string $attribute): string
{
    switch ($attribute) {
        case 'price':
            return \Craft::$app->formatter->asCurrency($this->price, $this->currency);

        case 'currency':
            return strtoupper($this->currency);
    }

    return parent::attributeHtml($attribute);
}
```

Craft can automatically handles a wide variety of data types—including arrays and relationships—by calling the parent implementation. You may not need to customize the output of every attribute! Custom fields that implement [craft\base\PreviewableFieldInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-previewablefieldinterface.html) are handled automatically.

### [#](#sort-options)Sort Options

In order for your element index to be sortable, you must implement the protected static [defineSortOptions()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-definesortoptions) method:

```
protected static function defineSortOptions(): array
{
    return [
        'title' => \Craft::t('app', 'Title'),
        'price' => \Craft::t('plugin-handle', 'Price'),
    ];
}
```

When a sort option is selected on an index, its key will be passed to the `$orderBy` property of your [element query](#element-query-class) class (e.g. `['price' => SORT_ASC]`). Should you need to customize the behavior of a sort attribute provide that attribute as an array:

```
[
    'label' => Craft::t('app', 'Date Updated'),
    'orderBy' => 'elements.dateUpdated',
    'attribute' => 'dateUpdated',
    'defaultDir' => 'desc',
],
```

### [#](#exporters)Exporters

Define which [exporter types](docs_5x__extend__element-exporter-types.md) your element type supports on its index page by adding a protected static [defineExporters()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-defineexporters) method on your element class:

```
protected static function defineExporters(string $source): array
{
    $exporters = parent::defineExporters($source);
    $exporters[] = MyExporter::class;
    return $exporters;
}
```

### [#](#actions)Actions

The [defineActions()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-defineactions) method determines which [actions](docs_5x__extend__element-actions.md) your element type supports on its index page:

```
protected static function defineActions(string $source = null): array
{
    return [
        FooAction::class,
        BarAction::class,
    ];
}
```

#### [#](#restore-action)Restore Action

All element types are [soft-deletable](docs_5x__extend__soft-deletes.md) out of the box, but it’s up to each element type to decide whether they can be restored.

To make an element restorable, add the [craft\elements\actions\Restore  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-actions-restore.html) action to the array returned by your [defineActions()](#actions) method. Craft will automatically hide it during normal index views, and show it when a user selects the “Trashed” status option.

### [#](#thumb-view)Thumb View

Thumbnail views can be be enabled for your element index page on a [source](#sources)-by-source basis.

To enable thumbnail view for a source, add a `hasThumbs` key to its definition:

```
protected static function defineSources(string $context = null): array
{
    return [
        [
            'key' => 'cad',
            'label' => 'CAD',
            'criteria' => [
                'currency' => 'cad',
            ],
            'hasThumbs' => true,
        ],
        // ...
    ];
}
```

Then, add a `getThumbUrl()` method to your element class, which returns the URL to the current element’s thumbnail:

```
use craft\helpers\UrlHelper;

// ...

public function getThumbUrl(int $size): ?string
{
    return UrlHelper::resourceUrl("product-images/{$this->id}/{$size}");
}
```

## [#](#statuses)Statuses

If your elements should have their own statuses, give your element class a static [craft\base\ElementInterface::hasStatuses()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-elementinterface.html#method-hasstatuses) method:

```
public static function hasStatuses(): bool
{
    return true;
}
```

### [#](#custom-statuses)Custom Statuses

An element’s status can be determined by a single property, or a combination of multiple properties. Similarly, *setting* an element’s status may mean multiple properties are being assigned.

By default, your elements will support two statuses: Enabled and Disabled. If you’d like to give your element type its own custom statuses, first define what they are by overriding its static [craft\base\ElementInterface::statuses()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-elementinterface.html#method-statuses) method:

```
public static function statuses(): array
{
    return [
        'foo' => ['label' => \Craft::t('plugin-handle', 'Foo'), 'color' => '27AE60'],
        'bar' => ['label' => \Craft::t('plugin-handle', 'Bar'), 'color' => 'F2842D'],
    ];
}
```

Next add a [craft\base\ElementInterface::getStatus()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-elementinterface.html#method-getstatus) method that returns the current status of an element:

```
public function getStatus(): ?string
{
    if ($this->fooIsTrue) {
        return 'foo';
    }

    return 'bar';
}
```

Finally, override the [craft\elements\db\ElementQuery::statusCondition()  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-statuscondition) method on your [element query class](#element-query-class):

```
protected function statusCondition(string $status): mixed
{
    switch ($status) {
        case 'foo':
            return ['foo' => true];
        case 'bar':
            return ['bar' => true];
        default:
            // Call the base method to handle `enabled` or `disabled`:
            return parent::statusCondition($status);
    }
}
```

Custom statuses are automatically added to the filter menu on your element index.

### [#](#status-action)Status Action

Craft adds the [craft\elements\actions\SetStatus  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-actions-setstatus.html) action to your [element index](#element-index) so users may enable and disable elements in bulk—but if you want your custom statuses to be selectable here, you will need to create a [craft\base\ElementAction  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-elementaction.html) subclass and return it from your element’s [defineActions()](#actions) method.

## [#](#searchable-attributes)Searchable Attributes

When an element is saved, Craft’s *search* service will index its “searchable attributes” as keywords on the element. By default, the list of searchable attributes will only include the element’s title and slug—plus any custom field values.

If your element type has additional attributes you want to make searchable, return them from a protected static [defineSearchableAttributes()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-definesearchableattributes) method:

```
protected static function defineSearchableAttributes(): array
{
    return [
        'price',
        'sku',
        'vendor',
    ];
}
```

### [#](#keywords)Keywords

Craft can handle a variety of data types when generating keywords, but for anything requiring customization, implement the `searchKeywords()` method:

```
protected function searchKeywords(string $attribute): string
{
    // Add the currency to search terms:
    if ($attribute === 'price') {
        return join(' ', [
            $this->$attribute,
            $this->currency,
        ]);
    }

    return parent::searchKeywords($attribute);
}
```

Keywords are normalized by the search service, but you are welcome to do any additional grooming to the data prior to returning it.

## [#](#element-urls)Element URLs

When an element is being saved, its `getUriFormat()` method will be called to find out whether the element should have its own URI in the system, and if so, what it should look like.

If your elements need their own URLs, you must implement this method and have it return a string that can be parsed with [craft\web\View::renderObjectTemplate()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html#method-renderobjecttemplate) (e.g. `products/{slug}`). Usually, this should be a user-defined string, rather than something hard-coded. Supposing our product element type made use of an intermediate *Type* that determines its URI format (as entries and sections do), the method might look like this:

```
public function getUriFormat(): ?string
{
    return $this->getType()->uriFormat;
}
```

URIs are rendered and stored on a per-site basis.
Whenever an element’s URL is requested, Craft will instantiate the element and call its `getRoute()` method.
Internally, [craft\base\Element::getRoute()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-getroute) will call a protected `route()` method, which is what you should implement in your element class:

```
protected function route(): array|string|null
{
    return [
        'templates/render', [
            // Again, assuming a `ProductType` model makes this configurable:
            'template' => $this->getType()->template,
            'variables' => [
                'product' => $this,
            ]
        ]
    ];
}
```

Your route can map to any [controller action](docs_5x__extend__controllers.md), including ones in your plugin’s namespace—handy when you want to organize additional view logic:

```
protected function route(): array|string|null
{
    return [
        // Route to `mynamespace\myplugin\controllers\StoreController::actionView()`:
        'plugin-handle/store/view',
        [
            'product' => $this,
        ],
    ];
}
```

The second item in the rule array is treated as [route params  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-controllers#action-parameters), and will be automatically mapped to arguments of the same name in your action:

```
public function actionView(Product $product): Response
{
    // Load a user-defined template for this product type:
    $type = $product->getType();
    $template = $type->templatePath;

    // Gather additional data for the template:
    $variables = [
        'product' => $product,
        // ...
    ];

    return $this->renderTemplate($template, $variables);
}
```

Using an action in this way does *not* change your elements’ URLs—we’re only switching the underlying action that builds a response.

## [#](#editing-elements)Editing Elements

Craft makes editing elements frictionless by providing turn-key edit screens as well as automatic support for [slideouts](#slideouts).

### [#](#edit-screen)Edit Screen

To give your elements dedicated edit pages, you must define a route that agrees with their `getCpEditUrl()` method. Collocate this rule with the one that defines your [index](#element-index):

```
// Index:
$event->rules['products'] = ['template' => 'my-plugin/products/_index.twig'];

// Edit:
$event->rules['products/<elementId:\d+>'] = 'elements/edit';
```

Craft takes care of assembling the actual edit template, through the unified [`elements/edit`  (opens new window)](https://docs.craftcms.com/api/v5/craft-controllers-elementscontroller.html#method-actionedit) controller action.

You can use your own controller to render element edit screens, but it becomes your responsibility to handle permissions, drafts, revisions, and auto-saving.

The areas of the element edit screen that require customization are typically handled by implementing additional methods on your element:

[`metadata()` (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-metadata)
:   Defines pairs of labels + data that are rendered in the element’s sidebar. Metadata is not intended to be editable. Values will be merged with the [defaults  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-getmetadata).

[`metaFieldsHtml()` (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-metafieldshtml)
:   Responsible for rendering the region of the sidebar intended for editable fields.

#### [#](#slideouts)Slideouts

Craft uses the same methods that build element edit screens to generate responses that target [slideouts](docs_5x__system__control-panel.md#slideouts).

Elements are given an opportunity to customize control panel screen responses via the `prepareEditScreen()` method:

```
public function prepareEditScreen(Response $response, string $containerId): void
{
    $response->crumbs([
        [
            'label' => Craft::t('my-plugin', 'Products'),
            'url' => UrlHelper::cpUrl('products'),
        ],
        [
            'label' => $this->getType()->name,
            'url' => UrlHelper::cpUrl("products/{$type->handle}"),
        ],
    ]);
}
```

If you are interested in rendering context-agnostic views for your element (or other features), take a look at the [control panel screens](docs_5x__extend__controllers.md#control-panel-screens) controller documentation.

### [#](#saving)Saving

Most element types can use the generic `elements/save` controller action to persist data. Craft will use the POST body to bulk-assign and typecast [safe attributes  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-models#safe-attributes) with [craft\base\Model::setAttributes()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-model.html#method-setattributes), populate custom fields with [craft\base\Element::setFieldValues()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-setfieldvalues), check permissions, validate, and eventually save the element.

Any time you *do* require some special handling (or need to do more sophisticated authorization than is encapsulated by the element’s [`canSave()`](#permissions) method), you should implement a custom [controller](docs_5x__extend__controllers.md) action. To programmatically save an element, you will need to do at least the following:

```
// Create a new product element (or look it up by ID):
$product = new Product();

// Set the main properties from POST data
$request = Craft::$app->getRequest();

$product->price = $request->getBodyParam('price');
$product->currency = $request->getBodyParam('currency');
$product->enabled = (bool)$request->getBodyParam('enabled');

// Set custom field values from POST data in a `fields` namespace
$product->setFieldValuesFromRequest('fields');

// Save the product
if (!Craft::$app->getElements()->saveElement($product)) {
    // Return errors, if necessary:
    return $this->asModelFailure(
        $product,
        Craft::t('my-plugin', 'Product could not be saved.'),
        'product',
    );
}

// Done! Return a success message and redirect:
return $this->asModelSuccess(
    $product,
    Craft::t('my-plugin', 'Product saved.'),
    'product',
    'products/{id}',
);
```

The elements service will in turn call your element’s [`beforeSave()` and `afterSave()` methods](#save-hooks), in which you must persist any native attributes.

This process is discussed in greater depth in the [controllers documentation](docs_5x__extend__controllers.md#model-lifecycle).

## [#](#permissions)Permissions

It is up to you to design a [permissions scheme](docs_5x__extend__user-permissions.md) that makes sense for your element type. A user’s ability to perform certain actions on an element (view, delete, duplicate, etc.) is ultimately determined by one the element’s `can*` methods, which must return a boolean.

| Action | Method |
| --- | --- |
| View | [`canView()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-canview) |
| Update | [`canSave()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-cansave) |
| Duplicate | [`canDuplicate()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-canduplicate) |
| Delete | [`canDelete()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-candelete) and [`canDeleteForSite()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-candeleteforsite) |
| Create Drafts | [`canCreateDraft()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html#method-cancreatedraft) |

The default implementation of these methods in [craft\base\Element  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html) is typically *restrictive*, meaning users will be *denied* access by default.

Your element should always call the parent method to ensure that [events](docs_5x__extend__events.md) are emitted when a permission check is taking place.

If your element would benefit from a user-manageable permissions structure, you must [register each relevant permission](docs_5x__extend__user-permissions.md) and check them in the corresponding methods—or as part of custom [controller actions](#saving).

## [#](#relations)Relations

### [#](#relation-field)Relation Field

You can give your element its own relation field by creating a new [field type](docs_5x__extend__field-types.md) that extends [craft\fields\BaseRelationField  (opens new window)](https://docs.craftcms.com/api/v5/craft-fields-baserelationfield.html).

That base class does most of the grunt work for you, so you can get your field up and running by implementing three methods:

```
<?php
namespace mynamespace\fields;

use craft\fields\BaseRelationField;
use mynamespace\elements\Product;

class Products extends BaseRelationField
{
    public static function displayName(): string
    {
        return \Craft::t('plugin-handle', 'Products');
    }

    public static function elementType(): string
    {
        return Product::class;
    }

    public static function defaultSelectionLabel(): string
    {
        return \Craft::t('plugin-handle', 'Add a product');
    }
}
```

Be sure and [register your field type](docs_5x__extend__field-types.md#registering-custom-field-types), so that developers can select it!

## [#](#eager-loading)Eager-Loading

If your element type has its own [relation field](#relation-field), it is already eager-loadable through that. Furthermore, if you have declared support for [content](#fields--content), any elements that are selected as relations via other relational fields will be eager-loadable from your element.

Eager-loading support is *not* provided automatically for “hard-coded” relations with other elements. For example, entries have authors (user elements), but those relationships are stored in a separate `entries_authors` table.

If your elements maintain this kind of relationship to other elements, make them eager-loadable by adding an `eagerLoadingMap()` method to your element class:

```
use craft\db\Query;
use craft\elements\User;
use craft\helpers\ArrayHelper;

// ...

public static function eagerLoadingMap(array $sourceElements, string $handle): array|null|false
{
    // Memoize the source element IDs:
    $sourceElementIds = ArrayHelper::getColumn($sourceElements, 'id');

    // The “handle” is the key that users will specify
    // when eager-loading this relationship:
    if ($handle === 'vendor') {
        // Do a fresh selection from the products table
        // to create a map of element IDs to vendor IDs,
        // excluding products with no vendor ID:
        $map = (new Query())
            ->select(['id as source', 'vendorId as target'])
            ->from(['{{%plugin_products}}'])
            ->where([
                'and',
                ['id' => $sourceElementIds],
                ['not', ['vendorId' => null]],
            ])
            ->all();

        return [
            'elementType' => User::class,
            'map' => $map,
        ];
    }

    return parent::eagerLoadingMap($sourceElements, $handle);
}
```

This function takes an array of already-queried elements (the “source” elements) and an eager-loading handle. It returns a map of which *source* element IDs should eager-load which *target* element IDs. The structure of that array should look something like this:

```
[
    'elementType' => User::class,
    'map' => [
        // Source: Product ID; Target: User ID
        ['source' => 8735, 'target' => 385],
        ['source' => 7319, 'target' => 1388],
        ['source' => 6684, 'target' => 139],
        ['source' => 6693, 'target' => 139],
        // ...
    ]
]
```

Note that user ID `139` appears twice, for product IDs `6684` and `6693`! That’s to be expected—Craft knows to only load that element *once*, but will make it available on both of those products.

You may be able to create the source-target map without another database query, if the target IDs have already been loaded along with the elements! In the example, if products are owned by a single vendor, the vendor ID could be stored an [selected](#element-query-class) such that the map can be assembled in memory:

```
$map = array_map(function($src) {
    return [
        'source' => $src->id,
        'target' => $src->vendorId,
    ];
}, $sourceElements);
```

To assign eager-loaded elements to a specific attribute (or process the value in some other way), add a `setEagerLoadedElements()` method to your element class:

```
public function setEagerLoadedElements(string $handle, array $elements, EagerLoadPlan $plan): void
{
    // The handle can be anything, so long as it matches what is used in `eagerLoadingMap()`:
    if ($handle === 'vendor') {
        $vendor = $elements[0] ?? null;
        $this->setVendor($vendor);
    } else {
        parent::setEagerLoadedElements($handle, $elements, $plan);
    }
}
```

Otherwise, Craft stashes the results in a generic `_eagerLoadedElements` array by handle, which you must retrieve later. Be sure and handle each eager-loadable native attribute in this method.

## [#](#advanced-topics)Advanced Topics

### [#](#reference-tags)Reference Tags

If you want your elements to support reference tags (e.g. `{product:100}`), add a static `refHandle()` method to your element class that returns a unique “handle” that should be used for its reference tags.

```
public static function refHandle(): ?string
{
    return 'product';
}
```

To make it easier for users to copy your elements’ reference tags, you may want to add a “Copy reference tag” [action](#actions) to your element’s index page.

```
use craft\elements\actions\CopyReferenceTag;

// ...

protected static function defineActions(string $source = null): array
{
    return [
        [
            'type' => CopyReferenceTag::class,
            'elementType' => static::class,
        ],
        // ...
    ];
}
```

### [#](#expiration)Expiration

In cases where your elements have a “lifespan,” its class should implement [craft\base\ExpirableElementInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-expirableelementinterface.html), and define a `getExpiryDate()` method. The returned date will be used to calculate the maximum allowable cache duration, when using template caches.

```
public function getExpiryDate(): ?DateTime
{
    return $this->getNextSaleEndDate();
}
```

### [#](#garbage-collection)Garbage Collection

Element types should opt into [garbage collection](docs_5x__system__gc.md) by hooking into the [Gc::EVENT\_RUN  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-gc.html#event-run) event and calling [Gc::deletePartialElements()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-gc.html#method-deletepartialelements):

```
use mynamespace\elements\Product;
use craft\db\Table;
use craft\services\Event;
use craft\services\Gc;
use yii\base\Event;

Event::on(
    Gc::class,
    Gc::EVENT_RUN,
    function(Event $event) {
        // Delete `elements` table rows without peers in our custom products table
        Craft::$app->getGc()->deletePartialElements(
            Product::class,
            'plugin_products',
            'id',
        );

        // Delete `elements` table rows without corresponding `content` table rows for the custom element
        Craft::$app->getGc()->deletePartialElements(
            Product::class,
            Table::CONTENT,
            'elementId',
        );
    }
);
```

This helps ensure that any elements missing data get deleted instead of lingering in the database.

If not every element is expected to have a row in your custom table (say, you are only creating the record when a certain flag is set by an administrator), garbage-collecting based on that relationship may delete legitimate element records!

### [#](#project-config)Project Config

One of the benefits of field layouts is that they can be tracked in [project config](docs_5x__extend__project-config.md). Instead of directly saving a field layout to the database from your controller, you can validate and write the layout into a known config key:

```
use Craft;
use craft\helpers\ArrayHelper;
use craft\helpers\StringHelper;
use craft\web\Controller;
use mynamespace\elements\Product;

$fieldLayout = Craft::$app->getFields()->assembleLayoutFromPost();
$fieldLayout->type = Product::class;

$key = 'myplugin.productFieldLayout';

Craft::$app->getProjectConfig()->set($key, $layout->getConfig());

return $this->asSuccess(Craft::t('plugin-handle', 'Field layout saved.'), $layout);
```

This approach requires that you listen for the resulting [project config events](docs_5x__extend__project-config.md#step-1-listen-for-config-changes) and make the equivalent changes in the database.

```
Craft::$app->getProjectConfig()
    ->onAdd('myplugin.productFieldLayout', [$this, 'handleChangedProductLayout'])
    ->onUpdate('myplugin.productFieldLayout', [$this, 'handleChangedProductLayout'])
    ->onRemove('myplugin.productFieldLayout', [$this, 'handleDeletedProductLayout']);
```

In this case, the callable is assumed to be a method on the main plugin or module class—but for more complex extensions, this kind of work is best delegated to a [service](docs_5x__extend__services.md). See [handling project config changes](docs_5x__extend__project-config.md#step-2-handle-config-changes) for more information on reacting to the emitted events.

Unlike the main project config example, this single-layout setup doesn’t need to worry about UIDs, because it will always be uniquely identifiable by its `type` column in the database, and its key in project config:

```
use craft\db\Query;
use craft\db\Table;
use craft\events\ConfigEvent;
use craft\models\FieldLayout;
use mynamespace\elements\Product;

public function handleChangedProductLayout(ConfigEvent $event)
{
    $layout = FieldLayout::createFromConfig($event->newValue);

    // The `type` is not stored in project config:
    $layout->type = Product::class;

    // Look up and assign the database ID, if it exists:
    $id = (new Query())
        ->select(['id'])
        ->from([Table::FIELDLAYOUTS])
        ->where(['type' => Product::class])
        ->scalar();

    // This might be null, but that's OK—just means it's new!
    $layout->id = $id;

    // Save without validating (validation happened before updating project config)
    Craft::$app->getFields()->saveLayout($layout, false);
}

public function handleDeletedProductLayout(ConfigEvent $event)
{
    // There's only one thing to do here—clear any layouts for the element type:
    Craft::$app->getFields()->deleteLayoutsByType(Product::class);
}
```

### [#](#variations-multiple-field-layouts)Variations + Multiple Field Layouts

In Craft, some element types maintain multiple field layouts: entry field layouts are defined for each entry type; asset field layouts are defined for each asset volume, etc. Custom element types can provide the same functionality—so long as they’re able to reliably match an element with a layout.

Looking at entries again: each entry keeps track of its *type*, which in turn designates a field layout. Entry types are a kind of model that represent configuration rather than data—and in doing so, support some methods that make them easier to serialize for storage in project config.

Let’s look at how we might implement a `ProductType` model that allows different products to have unique field layouts (or other configuration), a la Commerce. Most of the functionality we require will be provided by [craft\behaviors\FieldLayoutBehavior  (opens new window)](https://docs.craftcms.com/api/v5/craft-behaviors-fieldlayoutbehavior.html):

```
namespace myplugin\models;

use craft\base\Model;
use craft\behaviors\FieldLayoutBehavior;

use myplugin\elements\Product;

class ProductType extends Model
{
    public ?int $id = null;
    public ?string $name = null;
    public ?int $fieldLayoutId = null;

    protected function defineBehaviors(): array
    {
        return [
            'fieldLayout' => [
                'class' => FieldLayoutBehavior::class,
                'elementType' => Product::class,
            ],
        ];
    }

    public function getConfig(): array
    {
        // Define base component configuration:
        $config = [
            'name' => $this->name,
        ];

        // Add a field layout, if one is defined:
        $fieldLayout = $this->getFieldLayout();

        if ($fieldLayoutConfig = $fieldLayout->getConfig()) {
            // Store the field layout, keyed by its UID:
            $config['fieldLayout'] = [
                $fieldLayout->uid => $fieldLayoutConfig,
            ];
        }

        return $config;
    }
}
```

This is an incomplete implementation (it should—at a minimum—declare validation rules and set [reservedFieldHandles  (opens new window)](https://docs.craftcms.com/api/v5/craft-behaviors-fieldlayoutbehavior.html#constants) on the `FieldLayoutBehavior`), but the skeleton contains enough for us to build on.

Saving a product type looks similar to how we were handling a [single field layout](#single-field-layouts), but the project config keys are updated such that each product type is identified by a UID:

```
use Craft;
use craft\helpers\Db;
use craft\web\Controller;

use mynamespace\models\Product;
use mynamespace\models\ProductType;

class SettingsController extends Controller
{
    public function actionSaveProductType()
    {
        // Load or instantiate a `ProductType` model and apply incoming params...

        if ($isNew) {
            // Ensure we have a UID for use when updating project config:
            $productType->uid = StringHelper::UUID();
        }

        // Gather the incoming field layout:
        $fieldLayout = Craft::$app->getFields()->assembleLayoutFromPost();
        $fieldLayout->type = Product::class;

        $productType->setFieldLayout($fieldLayout);

        // (In the process of building the field layout, it gives itself a UID!)

        // From above, let the model generate its own config:
        $config = $productType->getConfig();

        Craft::$app->getProjectConfig()->set("myplugin.productTypes.{$productType->uid}", $config, "Updated “{$productType->name}” product type definition.");

        // Was this the first time we saved this model?
        if (!$productType->id) {
            $productType->id = Db::idByUid('{{%plugin_producttypes}}', $productType->uid);
        }
    }
}
```

#### [#](#associating-elements-to-their-field-layouts)Associating Elements to their Field Layouts

When an element supports content, its `getFieldLayout()` method determines what field layout is used. The base implementation looks it up based on the element’s `$fieldLayoutId` property, but you can use whatever criteria makes sense. Setting an ID as you save the element ensures Craft can load it again later:

```
// ...
$product->fieldLayoutId = $productType->fieldLayoutId;
Craft::$app->getElements()->saveElement($product);
```

If the `$fieldLayoutId` property is set, [craft\services\Elements::saveElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-saveelement) will store it in the `elements.fieldLayoutId` column in the database, and your elements will be re-populated with the appropriate custom field data when they are fetched, down the road.

See the [Edit Screen](#edit-screen) section to learn about creating an edit interface for your elements.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/element-types.md)
