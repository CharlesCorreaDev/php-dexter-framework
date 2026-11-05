# Field Types | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/field-types

---

# Field Types

- ### On this Page

  - [Field Class](docs_5x__extend__field-types.md#field-class)
  - [Registering Custom Field Types](docs_5x__extend__field-types.md#registering-custom-field-types)
  - [Settings](docs_5x__extend__field-types.md#settings)
  - [Inputs](docs_5x__extend__field-types.md#inputs)
  - [Validation](docs_5x__extend__field-types.md#validation)
  - [Previews](docs_5x__extend__field-types.md#previews)
  - [Supporting Delta Saves](docs_5x__extend__field-types.md#supporting-delta-saves)
  - [Storing Content](docs_5x__extend__field-types.md#storing-content)
  - [Query API](docs_5x__extend__field-types.md#query-api)

Plugins can provide custom [field types](docs_5x__system__fields.md) by creating a class that implements [craft\base\FieldInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-fieldinterface.html) and [craft\base\FieldTrait  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-fieldtrait.html). This class serves as both a way to communicate features and behaviors of the field type (like [how it stores data](#database-type) and [what kinds of values](#php-type) it exposes), and as a model that fields of its type will be instantiated with (when used in a field layout or loaded via the API).

Field types are primarily concerned with providing [novel authoring interfaces](#inputs), and storing data in a sensible way. Most fields *do not* control how that data is displayed in the front-end; instead, they yield a [minimally-normalized](#php-type) value to developers, who can then use it in any number of contexts.

## [#](#field-class)Field Class

Scaffold a field type with the [generator](docs_5x__extend__generator.md):

php craft make field-type  --plugin=my-plugin

Copy

If you would prefer to write a field class from scratch, it should extend [craft\base\Field  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-field.html). The base implementation provides some sane defaults, but lacks many specifics that differentiate your field.

Refer to Craft’s own field classes (located in `vendor/craftcms/cms/src/fields/`, or the `craft\fields` namespace) for examples. You may be able to start with a more specific base field type, if your field’s anticipated value type(s) are compatible.

## [#](#registering-custom-field-types)Registering Custom Field Types

Field classes must be registered with the `Fields` service so Craft knows about it when populating the list of available field types:

```
<?php
namespace mynamespace;

use craft\events\RegisterComponentTypesEvent;
use craft\services\Fields;
use yii\base\Event;
use mynamespace\fields\MyField;

class Plugin extends \craft\base\Plugin
{
    public function init()
    {
        Event::on(
            Fields::class,
            Fields::EVENT_REGISTER_FIELD_TYPES,
            function(RegisterComponentTypesEvent $event) {
                $event->types[] = MyField::class;
            }
        );

        // ...
    }

    // ...
}
```

If you used the generator to scaffold the field type, it ought to have inserted this, automatically. You may register as many field types as you wish, from one `EVENT_REGISTER_FIELD_TYPES` event handler.

### [#](#missing-fields)Missing Fields

If your field class ever goes missing (say, because a developer uninstalls your plugin or removes the package), Craft will use an instance of [craft\fields\MissingField  (opens new window)](https://docs.craftcms.com/api/v5/craft-fields-missingfield.html), and display a message in any field layouts it was present in. This ensures the control panel doesn’t become inoperable, but doesn’t prevent front-end templates from breaking.

## [#](#settings)Settings

Field types can offer any number of settings that determine how individual fields behave. [Plain text](docs_5x__reference__field-types__plain-text.md) fields ([craft\fields\PlainText  (opens new window)](https://docs.craftcms.com/api/v5/craft-fields-plaintext.html)), for instance, have **Placeholder Text** and **Field Limit** settings, whereas [country](docs_5x__reference__field-types__country.md) fields have no options.

Your field type’s settings should be represented as class properties, and `getSettingsHtml()` should return markup for corresponding form inputs:

```
public bool $useSecurities = false;

// ...

public function getSettingsHtml(): ?string
{
    return Craft::$app->getView()->renderTemplate('my-plugin/fields/currency/settings', [
        'field' => $this,
    ]);
}
```

The template might look something like this:

```
{# Import field helpers from Craft: #}
{% import "_includes/forms" as forms %}

{{ forms.lightswitchField({
    label: 'Use securities symbols?'|t('my-plugin'),
    instructions: 'Enable this to allow arbitrary ISIN (ISO6166) symbols.'|t('my-plugin'),
    id: 'currency-allow-securities',
    name: 'useSecurities',
    on: field.useSecurities,
}) }}
```

When an admin is creating or editing a field in the control panel, Craft displays this output below the **Field Type** dropdown menu. Its inputs are namespaced such that [craft\controllers\FieldsController::actionSaveField()  (opens new window)](https://docs.craftcms.com/api/v5/craft-controllers-fieldscontroller.html#method-actionsavefield) can assign the settings onto an instance of your field type.

Ultimately, your field type’s settings are serialized into [project config](docs_5x__extend__project-config.md). If your class has non-scalar public properties, or uses a getter/setter pattern around a private property, you may need to explicitly declare the attributes that should be considered “settings” (via `settingsAttributes()`) or return a custom array of settings (via `getSettings()`):

```
/**
 * Return a list of properties that include settings that should be preserved in project config:
 */
public function settingsAttributes(): array

    // Let Craft determine most, automatically:
    $names = parent::settingsAttributes();

    // Add an attribute...
    $names[] = 'someVirtualProperty';

    // ...or remove one:
    $names = ArrayHelper::withoutValue('someEphemeralProperty');

    return $names;
}

/**
 * Directly return the array that will be packed into project config:
 */
public function getSettings(): array
{
    $settings = parent::getSettings();

    // Sections should be stored as UUIDs, not models:
    $settings['restrictCurrenciesBySectionUsage'] = array_map(fn(Section $s) => $s->uid, $this->_sections);

    return $settings;
}
```

Craft automatically handles serialization of settings that resolve to `DateTime` objects or enums. Read more about handling these values (and taking advantage of environment variables and aliases) on the [project config](docs_5x__extend__project-config.md) page.

Even though the `Section` models in this example can *technically* be serialized and stored in their entirety, you are strongly encouraged to store only a stable identifier that can be dereferenced at runtime—typically its UUID.

## [#](#inputs)Inputs

A core part of a field’s identity is how authors populate it with data. You are responsible for returning the appropriate markup from an `inputHtml()` method:

```
use craft\helpers\Cp;

protected function inputHtml(mixed $value, ?ElementInterface $element, bool $inline): string
{
    $id = $this->getInputId();

    $components = [
        Cp::selectizeHtml([
            'id' => "$id-currency",
            'describedBy' => $this->describedBy,
            'name' => "$this->handle[currency]",
            'value' => $value->currency ?? null,
            'options' => $this->getCurrencyOptions(),
            'disabled' => $static,
        ]),
        Cp::textHtml([
            'id' => "$id-amount",
            'name' => "$this->handle[amount]",
            'value' => $value->amount ?? null,
            'type' => 'number',
            'size' => 10,
        ]),
    ];

    return join('', $components);
}
```

In many of Craft’s built-in field types, this method returns different markup depending on the field’s settings. Our currency field example might have two primary “branches,” depending on whether arbitrary security symbols are allowed:

```
use craft\base\ElementInterface;
use craft\helpers\Cp;

protected function inputHtml(mixed $value, ?ElementInterface $element, bool $inline): string
{
    $id = $this->getInputId();

    $components = [];

    if ($this->useSecurities) {
        $components[] = Cp::textHtml([
            'id' => "$id-security-symbol",
            'name' => "$this->handle[symbol]",
            'value' => $value->symbol ?? null,
            'type' => 'text',
            'class' => 'code',
            'size' => 14,
        ]);
    } else {
        $components[] = Cp::selectizeHtml([
            'id' => "$id-currency-symbol",
            'describedBy' => $this->describedBy,
            'name' => "$this->handle[symbol]",
            'value' => $value->symbol ?? null,
            'options' => $this->getCurrencyOptions(),
            'disabled' => $static,
        ]);
    }

    $components[] = Cp::textHtml([
        'id' => "$id-amount",
        'name' => "$this->handle[amount]",
        'value' => $value->amount ?? null,
        'type' => 'number',
        'size' => 10,
    ]);

    return join('', $components);
}
```

You can also render a template instead of generating HTML directly from PHP, like we did for the [settings](#settings) inputs.

### [#](#read-only-mode)Read-Only Mode

Craft will handle the static or read-only mode for most simple inputs by adding the appropriate HTML attributes, automatically. If you would prefer to control that output directly, define a `getStaticHtml()` method.

Read-only representations of fields are most commonly encountered when viewing element revisions, and are intended to resembles the regular input—in contrast to [previews](#previews) for indexes and element cards, which display a final, formatted value.

### [#](#inline-editing)Inline Editing

You also have an opportunity to provide a simplified or alternative input for the [inline editing](docs_5x__system__elements.md#in-line-editing) mode on element indexes. When a field implements [craft\base\InlineEditableFieldInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-inlineeditablefieldinterface.html), Craft will call its `inputHtml()` method with the `$inline` argument set to `true`:

```
use Craft;
use craft\helpers\Html;

// ...

public function inputHtml(mixed $value, ?ElementInterface $element, bool $inline): string
{
    if ($inline) {
        // Return a simplified UI element, or a static representation
    }

    // Return the normal UI
}
```

### [#](#fieldsets)Fieldsets

When your field appears in a field layout, it is wrapped in an instance of [craft\fieldlayoutelements\CustomField  (opens new window)](https://docs.craftcms.com/api/v5/craft-fieldlayoutelements-customfield.html). You can customize the structure and semantics of your field’s [input](#inputs)(s) by implementing the `useFieldset()` method on your field class:

```
public function useFieldset(): bool
{
    return true;
}
```

The field layout element calls this method as it renders the surrounding markup, including the field label, instructions, and errors. You may wish to base the return value on your field’s configuration—the [craft\fields\Date  (opens new window)](https://docs.craftcms.com/api/v5/craft-fields-date.html) field, for example, uses a fieldset only when its `showTime` setting is *enabled* and the user will be presented with two discrete HTML inputs.

## [#](#validation)Validation

Field types provide two sets of [validation rules  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-models#validation-rules).

### [#](#settings-rules)Settings Rules

Like other configurable models, your field type’s static `defineRules()` method should return an array of rules that govern its own [settings](#settings).

### [#](#value-rules)Value Rules

When a developer adds an instance of your field type to a field layout, you have an opportunity to contribute rules to the element’s validation, via [`getElementValidationRules()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-field.html#method-getelementvalidationrules):

```
public function getElementValidationRules(): array
{
    return [
        [
            'string',
            'length' => 3,
        ],
        [
            'in',
            'range' => $this->getSupportedCurrencySymbols(),
        ],
    ];
}
```

Rules defined in this way should *not* include the field or field instance handle—Craft normalizes the returned rules so that they apply to the current instance. You can, however, use the field’s configuration to conditionally apply some rules:

```
public function getElementValidationRules(): array
{
    // Set up some default rules that apply to all instances:
    $rules = [
        // ...
    ];

    // Fields that allow allows ISIN (ISO6166) codes for stocks and other securities require special validation:
    if ($this->useSecurities) {
        $rules[] = ['validateSymbol'];
    }

    // Otherwise, just make sure the provided value is among a known list of currencies:
    if (!$this->useSecurities) {
        $rules[] = [
            'in',
            'range' => $this->getSupportedCurrencySymbols(),
        ];
    }

    // Return the final list:
    return $rules;
}
```

In this example, `validateSymbol` is a method *on the field class itself*—not the element being validated. Craft normalizes this in such a way that the validation method will be correctly located and bound.

When the effective rules differ this greatly, however, it may be a sign that your field type should actually be *two* distinct types. Short of that, field settings can also influence the sort of [inputs](#inputs) you display to an author: for this “currency” field, the default appearance could be a dropdown menu with a fixed set of known options; then, in “securities” mode, it could switch to a plain-text input with a placeholder value that takes the shape of a typical ISIN.

### [#](#emptiness)Emptiness

Implement the `isValueEmpty()` to tell Craft what kinds of values you consider “empty.” Internally, we use this to determine whether an author explicitly selected a value (or if it’s a default or incidental) in the process of saving elements and propagating content between sites. The base method treats `null` and zero-length arrays (`[]`) and strings (`''`) as empty.

## [#](#previews)Previews

In order for your field type to be displayed on [element indexes](docs_5x__system__elements.md#indexes) or [cards](docs_5x__system__elements.md#chips-cards), it must implement [craft\base\PreviewableFieldInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-previewablefieldinterface.html). Some field types will work with no additional configuration, as the base [craft\base\Field\getPreviewHtml()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-field-getpreviewhtml().html) method handles a number of common value types including booleans, dates, and anything that can be cast to a string.

You can override this method to apply custom formatting, and take into consideration the field’s configuration:

```
public function getPreviewHtml(mixed $value, ElementInterface $element): string
{
    // Display securities amounts + symbols, verbatim:
    if ($this->useSecurities) {
        return $value->amount . ' ' . Html::tag('code', $value->symbol);
    }

    // Display a flag for the currency and a formatted value:
    return MyCurrencyHelper::currencyToFlagSvg($value->symbol) . MoneyHelper::toString($value->amount);
}
```

### [#](#placeholder)Placeholder

When a developer is configuring an element card via the field layout designer, it is helpful to show a representative “placeholder” value. Define a `previewPlaceholderHtml()` method, and return an HTML fragment with some [greeked  (opens new window)](https://en.wikipedia.org/wiki/Greeking) content:

```
public function previewPlaceholderHtml(mixed $value, ?ElementInterface $element): string
{
    return Html::tag('code', 'XX-123456789');
}
```

The `value` and `element` arguments are not currently used.

## [#](#supporting-delta-saves)Supporting Delta Saves

Craft does its best to reduce the amount of unnecessary content churn, and provide a record of what fields change in each draft and revision. The fields that are part of a “delta” save are in large part determined by client-side JavaScript in the control panel that observes `form` elements and only submits updated values. As long as you are using semantic HTML inputs, you don’t typically need to do anything to support delta saves.

However, if your field type needs to perform some post-processing in [afterElementSave()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-fieldinterface.html#method-afterelementsave) or [afterElementPropagate()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-fieldinterface.html#method-afterelementpropagate) (say, fetching data from a remote API), you can skip those tasks when the field’s value is unchanged by checking [isFieldDirty()  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-elementinterface.html#method-isfielddirty):

```
public function afterElementSave(ElementInterface $element, bool $isNew): void
{
    if ($element->isFieldDirty($this->handle)) {
        // logic for handling saved element
    }

    parent::afterElementSave($element, $isNew);
}
```

Craft considers a field “dirty” as soon as it’s been set, even if the new and old values are effectively the same.

## [#](#storing-content)Storing Content

Craft can take care of storing and retrieving content for your field type, so long as it declares valid [PHP](#php-type) and [database](#database-type) value types. In doing so, you also give Craft an idea about what default [element query capabilities](#query-api)) your field type will support.

### [#](#php-type)PHP Type

At runtime, Craft generates a special class (`CustomFieldBehavior`) that includes properties and type hints for each custom field. You are responsible for returning a valid PHP [type declaration  (opens new window)](https://www.php.net/manual/en/language.types.declarations.php):

```
public static function phpType(): string
{
    // The field’s value can be `null` or any class that implements a special `CurrencyInterface` interface:
    return sprintf('\\%s|null', CurrencyInterface::class);
}
```

This type declaration must describe the kinds of values your field type returns from its [`normalizeValue()`  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-field.html#method-normalizevalue) method:

```
public function normalizeValue(mixed $value, ?ElementInterface $element): mixed
{
    // Already normalized?
    if ($value instanceof BaseCurrency) {
        return $value;
    }

    // Not set?
    if ($value === null) {
        return null;
    }

    // Misconfigured in some other way?
    if (!is_array($value)) {
        return null;
    }

    return BaseCurrency::create($value);
}
```

Of course, this example hides some of the complexity behind the implementation of other classes—but let’s look at how returning a class affects the developer API:

```
{# Output a formatted amount in the selected currency: #}
{% set currency = entry.myCurrencyField %}
{{ curreny.amount | currency(currency.symbol) }}

{# Output just the currency: #}
{{ entry.myCurrencyField.symbol }}
```

### [#](#database-type)Database Type

Similarly, Craft needs to know the “shape” of values your field type stores, in the database. This can be a singular value type, an array of types representing nested keys, or `null` to signal that your plugin [manages its own content](#custom-tables):

Simple TypeComplex/Nested Types

```
use yii\db\Schema;

// ...

public static function dbType(): array|string|null
{
    return Schema::TYPE_INTEGER;
}
```

```
use yii\db\Schema;

// ...

public static function dbType(): array|string|null
{
    return [
        'amount' => Schema::TYPE_INTEGER,
        'symbol' => Schema::TYPE_STRING,
    ];
}
```

When returning an array, the order of values is significant! Unless otherwise specified in `queryCondition()`, Craft will use the first key and type when generating coalesce expressions for `WHERE` clauses and [ordering](#sortable-fields).

If your field needs to store a more deeply-nested data structure (or one of unknown structure), consider using `Schema::TYPE_JSON`.

### [#](#multi-instance-fields)Multi-Instance Fields

Craft treats any field that returns a non-`null` value from `dbType()` as implicitly supporting [multiple instances](docs_5x__system__fields.md#multi-instance-fields) per field layout, but you can explicitly opt in or out:

```
public static function isMultiInstance(): bool
{
    return true;
}
```

How Field Instances Work

The database’s `COALESCE()` function is used to discover values among field instance candidates. For example: an entry query may involve any field layout provided via an entry type. Those field layouts can contain field layout elements with overlapping handles—but they are each guaranteed a unique UUIDs under which their content is indexed in the element’s JSON blob.

In order to `SELECT` that data and build `WHERE` and `ORDER BY` expressions, Craft must look at each possible “location” for field data with that handle. This means that despite scanning multiple candidate keys in the JSON blob, only one will ever be contain a value for a given element! At the same time, however, it’s possible that a single handle is used by two otherwise unrelated fields or field types—in these cases, Craft uses the first instance’s handle to build a [query condition](#query-api).

### [#](#custom-tables)Custom Tables

If you’d rather have your field type store its content in a separate database table, you can return `null` from `dbType()`. You are then responsible for managing…

- …creation, duplication, retrieval, and deletion of field content in the database;
- …support for drafts, revisions, and [sites and localization](docs_5x__system__sites.md);
- …[multi-instance](#multi-instance-fields) support;
- …inclusion of content fields in element queries and GraphQL;
- …automatic de/serialization + normalization of values;

On the other hand, you get access to a variety of powerful database capabilities, like foreign key constraints, custom indexes, joins, selections, and so on.

### [#](#sortable-fields)Sortable Fields

Custom fields that use the native content storage system (not a [custom table](#custom-tables)) are automatically orderable via database queries:

```
{% set topAssets = craft.entries()
  .orderBy('myCurrencyField DESC')
  .limit(5)
  .all() %}
```

Craft determines how to sort the data using the `dbType()`’s first (or only) key and type. In [our example](#database-type), that would be either the single “simple” value, or the nested `amount` key.

Developers may specify a nested key using dot notation to override the default.  [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Ordering by nested field keys was first available in version 5.6.0 of Craft.")

```
{% set assetsBySymbol = craft.entries()
  .orderBy('myCurrencyField.symbol ASC')
  .all() %}
```

To be eligible for sortable columns within [element indexes](docs_5x__system__elements.md#indexes), field types must implement [craft\base\SortableFieldInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-sortablefieldinterface.html) and the `getSortOption()` method. The default implementation from [craft\base\Field  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-field.html) covers most use cases, again using the first `dbType()`. You can override this to gain more control over the handling—suppose the field’s values don’t naturally sort how users would expect, as is often the case with “statuses” or other strings whose order in a process don’t agree with their alphabetic order:

```
public function getSortOption(): array
{
    $col = $this->getValueSql();

    // Re-map statuses so they are "in order," semantically (not alphabetically):
    $orderBy = <<<SQL
CASE
    WHEN $col = "draft" THEN 0
    WHEN $col = "submitted" THEN 1
    WHEN $col = "approved" THEN 2
    WHEN $col = "published" THEN 3
    ELSE 4
END; 
SQL;

    // This is identical to the base implementation:
    return [
        'label' => Craft::t('site', $this->name),
        'orderBy' => $orderBy,
        'attribute' => isset($this->layoutElement->handle)
            ? "fieldInstance:{$this->layoutElement->uid}"
            : "field:$this->uid",
    ];
}
```

Notice that we’re using the [`site` translation category](docs_5x__system__sites.md#static-message-translations) for the sort option’s `label`! A field’s `name` is chosen by the developer as they build a site; this allows them to localize those names for control panel users.

## [#](#query-api)Query API

A key quality of your field type is its developer API and query capabilities. Each instance of your field type automatically gets a corresponding query method, which provides many of the basic features you would expect, like automatic `and` and `or` handling, inversion with `not`, `:empty:` and `:notempty:` tokens, operators, and so on.

For additional control over your field type’s query features, implement the static `queryCondition()` method:

```
public static function queryCondition(
    array $instances,
    mixed $value,
    array &$params,
): array|string|ExpressionInterface|false|null {
    if (is_array($value)) {
        $conditions = [];

        // Build COALESCE() “column” names to properly extract nested values from
        // all possible uses of a field across eligible field layouts:
        if (isset($value['type'])) {
            $valueSql = static::valueSql($instances, 'symbol');

            $conditions[] = match ($value['type']) {
                'currency' => new Expression("CHAR_LENGTH($valueSql) = 3"),
                'security' => new Expression("CHAR_LENGTH($valueSql) = 12"),
            };
        }

        if (isset($value['amount'])) {
            $valueSql = static::valueSql($instances, 'amount');
            $conditions[] = Db::parseNumericParam($valueSql, $value['amount']);
        }

        if (isset($value['symbol'])) {
            $valueSql = static::valueSql($instances, 'symbol');
            $conditions[] = Db::parseParam($valueSql, $value['symbol']);
        }

        // Did we come up with anything?
        if (!empty($conditions)) {
            return $conditions;
        }
    }

    // Everything else can be handled by the default behavior:
    return parent::queryCondition($instances, $value, $params);
}
```

Expressed in Twig (where a developer using your plugin is most apt to encounter these features), queries might look like this:

```
{# Find assets with a "zero" amount: #}
{% set zeroValueAssets = craft.entries().myCurrencyField(0).all() %}

{# Find USD assets: #}
{% set usdAssets = craft.entries()
    .myCurrencyField({
        symbol: 'USD',
    })
    .all() %}

{# Find US-based securities: #}
{% set domesticSecurities = craft.entries()
    .myCurrencyField({
        type: 'securities',
        symbol: 'US-*',
    })
    .all() %}
```

By intercepting and processing a couple of extra cases, we’re able to solve common problems for developers that would otherwise require advanced SQL knowledge.

Return `false` if the provided `$value` is invalid or unprocessable to skip applying conditions entirely.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/field-types.md)
