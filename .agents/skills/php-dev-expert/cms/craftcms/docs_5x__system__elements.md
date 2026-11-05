# Elements | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/system/elements

---

# Elements

- ### On this Page

  - [Element Types](docs_5x__system__elements.md#element-types)
  - [Common Features](docs_5x__system__elements.md#common-features)
  - [Fields and Content](docs_5x__system__elements.md#fields-and-content)
  - [Indexes](docs_5x__system__elements.md#indexes)
  - [Chips & Cards](docs_5x__system__elements.md#chips-cards)
  - [Copying Elements](docs_5x__system__elements.md#copying-elements)
  - [Statuses](docs_5x__system__elements.md#statuses)
  - [Nested Elements](docs_5x__system__elements.md#nested-elements)
  - [Element Partials](docs_5x__system__elements.md#element-partials)
  - [Properties and Methods](docs_5x__system__elements.md#properties-and-methods)

An *element* is the most basic unit of [content](#fields-and-content) in Craft. Elements provide smart management, routing, and querying interfaces for users and developers. Each [type](#element-types) of element has some unique capabilities, but they’re all built on top of a set of [common features](#common-features).

## [#](#element-types)Element Types

In the control panel, you’ll encounter the seven *element types* common to all Craft installations:

- [**Addresses**](docs_5x__reference__element-types__addresses.md) — Attach physical locations to other elements.
- [**Assets**](docs_5x__reference__element-types__assets.md) — Upload files and store rich metadata.
- [**Categories**](docs_5x__reference__element-types__categories.md) — Design hierarchical or ordered taxonomies.
- [**Entries**](docs_5x__reference__element-types__entries.md) — Model anything with flexible and nestable content containers.
- [**Global Sets**](docs_5x__reference__element-types__globals.md) — Manage universally-accessible data.
- [**Tags**](docs_5x__reference__element-types__tags.md) — Grow a *folksonomy* alongside your content.
- [**Users**](docs_5x__reference__element-types__users.md) — Represent people with powerful identity and access tools.

Choosing the appropriate element type for your content model is essential—but don’t be afraid to mix, match, and combine them. Plugins (and custom modules) can provide [custom element types](docs_5x__extend__element-types.md), giving developers and authors a consistent experience across all their content.

## [#](#common-features)Common Features

Some features are available to all (or most) element types:

- Control panel interfaces, including forms, [indexes](#indexes), [slide-outs](docs_5x__system__control-panel.md#slideouts), and [chips and cards](#chips-cards);
- [Custom fields](docs_5x__system__fields.md) and field layouts with advanced condition rules for storing [content](#fields-and-content);
- Slugs, URIs, URLs, and automatic [routing](docs_5x__system__routing.md);
- Localization via [sites](docs_5x__system__sites.md);
- [Drafts and revisions](docs_5x__system__drafts-revisions.md);
- Sophisticated [permissions](docs_5x__system__user-management.md#permissions);
- [Element queries](docs_5x__development__element-queries.md) with advanced sorting and filtering capabilities;
- Bi-directional [relationships](docs_5x__system__relations.md);
- Automatic indexing for [search](docs_5x__system__searching.md);
- Statuses for managing visibility of content;

Other features are specific to a type—like Assets’ tie to files, or Entries’ nesting capability.

## [#](#fields-and-content)Fields and Content

In a fresh installation, element types are distinguished only by a handful of native features. The identity and utility of an element is often defined by the [custom fields](docs_5x__system__fields.md) attached to it via a [field layout](docs_5x__system__fields.md#field-layouts): elements and their custom field values are collectively referred to as *content*.

Craft is adamantly agnostic about your content model, and comes with no predefined notion of what a “page” or “post” should be. Instead, it treats all your content as *data*, and provides the means to use it how you see fit—whether that’s as HTML accessible via public URLs, a private database, GraphQL for a decoupled or statically-generated front-end, or even a CSV to populate a printed document.

Content can be a great deal more than text, too! Craft has a number of built-in [field types](docs_5x__reference__field-types.md) that provide a highly-customizable authoring and developer experience.

[Custom Fields
→

Craft’s powerful content features are driven by custom fields.](docs_5x__system__fields.md)

### [#](#generated-fields)Generated Fields [5.8.0+](https://github.com/craftcms/cms/blob/5.8.0/CHANGELOG.md "Generated fields was first available in version 5.8.0 of Craft.")

[Field layout](docs_5x__system__fields.md#field-layouts) providers (the components that dictate what kind of content can be saved on an element, like [entry types](docs_5x__reference__element-types__entries.md#entry-types) or [asset volumes](docs_5x__reference__element-types__assets.md#volumes)) include a **Generated Fields** setting, allowing you to store additional computed values alongside native attributes and custom fields.

![Adding generated fields to an entry via an entry type.](/docs/assets/img/elements-generated-fields.d350db70.png)

Each field’s **Template** is evaluated as an [object template](docs_5x__system__object-templates.md) when the element is saved, and the resulting value is exposed via its **Handle**:

```
<article>
  <h2>{{ entry.title }}</h2>
  <address>{{ entry.byline }}</address>

  {# ... #}
</article>
```

Craft passes the resolved string value through [craft\helpers\App::normalizeValue()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-app.html#method-normalizevalue) before saving, so their types are predictable when used in the front-end.
Values are still [queried](#querying-generated-field-values) and ordered as strings, however.
When used in a condition builder, you will only be able to use string operands (like “starts with…” or “contains…”).

Generated fields are not automatically displayed in elements’ edit screens, but they can be added to [cards](#custom-card-attributes), output in a [template field layout element](docs_5x__system__fields.md#ui-elements), and added as columns [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "Displaying generated fields as element index tables columns was first available in version 5.9.0 of Craft.") to [element indexes](#indexes).

#### [#](#use-cases)Use Cases

Here are a few ideas for how to use generated fields:

Memoize Expensive Data
:   Run a complex query and “cache” the result in a succinct way.

    **Example:** Reverse-lookup of the number of entries in a category.

    ```
    {{ craft.entries().relatedTo({ targetElement: object, field: 'category' }).count() }}
    ```

Presentational Summaries
:   Truncate or clean up text for use on element cards.

    **Example:** Get the first text chunk from a CKEditor field, and strip the HTML.

    ```
    {{ object.body.firstWhere('type', 'markup')|strip_tags }}
    ```

Binary Criteria
:   State derived from nested or related records can be coalesced into a single value.

    **Example:** Tally up a customer’s lifetime order total and mark them as a “VIP” if it exceeds some amount. This template stores a `1` when it evaluates to `true`, and nothing for `false`.

    ```
    {{ craft.orders().customer(object).sum('totalPaid') > 1000 }}
    ```

Record-Keeping
:   Track data over some period of time.

    **Example:** Use the [`seq()` Twig function](docs_5x__reference__twig__functions.md#seq) to increment a counter. (Note that this will increment every time an element is auto-saved!)

    ```
    {{ seq("entry-save-count:#{canonicalId}") }}
    ```

Templates that reference nonexistent values are quietly ignored, but compilation errors (like missing Twig functions or filters) will produce an error.
Avoid using generated field references inside one another—within a single save, fields are evaluated in the order they were defined, and only have access to values from the previous save.

Field values are only refreshed when the element itself is saved, so references to *other* elements’ content in a template may become stale.

If you need to keep generated fields fresh, use one of the [`resave/*` commands](docs_5x__reference__cli.md#resave) to periodically re-render their values.
It may be more reliable and economical to continue rendering simple values in regular templates, rather than pre-generating them.
As an example, there won’t often be a benefit to storing a primary author’s registration date on an entry (`{author.dateCreated|date}`), when the dynamic value is already accessible via a single element query (`{{ entry.author.dateCreated|date }}`).

#### [#](#querying-generated-field-values)Querying Generated Field Values

Craft provides [element query](docs_5x__development__element-queries.md) methods for each of the generated fields available to the element type.
Entry queries, for example, combine generated fields from entry types’ field layouts.

Suppose we want to display a list of movie directors sorted by the total runtime of films they’ve made.
Our *Director* entries might have a generated field like *Total Runtime* (with a handle of `runtimeTotal`) containing this template:

```
{{ craft.entries().section('films').director(object).select('runtime').column()|reduce((sum, val) => sum + val, 0) }}
```

Directors can now use the generated field for sorting…

```
{% set directorsByRuntime = craft.entries()
  .section('directors')
  .orderBy('runtimeTotal DESC')
  .all() %}
```

…and filtering:

```
{% set multidayRuntime = craft.entries()
  .section('directors')
  .runtimeTotal("> #{60 * 24 * 2}")
  .all() %}
```

Note that we are assuming runtimes are stored in minutes.
Formatted time values are not as trivial to compare, sort, or sum!

## [#](#indexes)Indexes

You’ll access most elements via their element index. Indexes allow you to browse, sort, filter, and [search](docs_5x__system__searching.md) for elements in a paginated, table-like view.

[Matrix fields](docs_5x__reference__field-types__matrix.md) also have a compact element index **View Mode**.

### [#](#sources)Sources

Indexes are broken down into **sources**. Sources can be permanent fixtures of an element type (like the **Admin** source for [users](docs_5x__reference__element-types__users.md)), dynamically added based on configuration (like those for user groups), or defined by an admin using custom *condition rules*.

Each source also controls what columns are visible in the index, and its default sorting.

my-craft-project.ddev.site/categories/species

![Customizing element sources](/docs/assets/img/element-index-customize-sources.2ecd76e9.png)

Customizing element sources.

Custom sources are stored in [project config](docs_5x__system__project-config.md).
The interface for conditions that involve specific elements (like an author) may appear differently than the equivalent [filter](#filters-and-columns), because IDs are [not stable between environments](docs_5x__system__project-config.md#ids-uuids-and-handles).

As an example, element select inputs are replaced by [autosuggest inputs](docs_5x__system__project-config.md#secrets-and-the-environment), so that the rule’s value can still be dynamic, despite being stored statically.

Entries provide an additional level of source organization, called [pages](docs_5x__reference__element-types__entries.md#pages).  [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "Customizable entry source “pages” was first available in version 5.9.0 of Craft.")

### [#](#filters-and-columns)Filters and Columns

As a complement to [search](docs_5x__system__searching.md) and [custom sources](#sources), any user with access to an element index can temporarily filter results using the condition builder interface:

my-craft-project.ddev.site/categories/species

![Craft’s condition builder](/docs/assets/img/element-index-condition-builder.a64ab783.png)

Using the condition builder to narrow results.

Similarly, they can customize which columns appear in the table (and how the results are ordered) with the **View** menu:

my-craft-project.ddev.site/categories/species

![Customizing element index columns and sorting](/docs/assets/img/element-index-view-options.7cf42e06.png)

If every field layout that would be used by an element in a source defines the same label override for a field, that label will appear in the column’s header. When a consensus cannot be reached, the original field’s label is used. This most commonly applies when a source is limited to a single entry type, asset volume, category group, or other quality that also defines field layouts.

### [#](#structures)Structures

[Entries](docs_5x__reference__element-types__entries.md) in *Structure* sections and [Categories](docs_5x__reference__element-types__categories.md) support a hierarchical view mode on their indexes. Elements in structures track their relative position among siblings, and can be easily relocated by dragging-and-dropping

Drag-and-drop handle icon

their row in an [element index](#indexes). Reordering is still possible, even when the structure is limited to a single level.

Use the **View** controls to switch back into structure mode on an index if you had previously sorted it by another attribute.

### [#](#actions)Actions

Each element type supports its own set of *actions* that can be performed on one or more elements, from an index. These actions are either visible directly in the index toolbar (like *Status*), or collected under the

Gear icon

icon in the footer (like *Delete*). Actions may be hidden or disabled when they don’t apply to the selection or [source](#sources).

Additional actions may be available on an individual element’s edit screen, under the action

Ellipses

menu.

### [#](#in-line-editing)In-line Editing New!

Click **Edit** at the bottom of any element index to switch into an in-line editor. Click **Save** to update any rows that changed, or **Cancel** to return to the read-only mode.

Not all fields are editable in-line, and some may have simplified controls or interfaces. This is best used when the index’s default [columns](#filters-and-columns) include scalar values like text, numbers, and dates.

### [#](#exporters)Exporters

Craft can export sets of elements to CSV, JSON, XML, XLSX, or YAML [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "XLSX and YAML export formats was first available in version 5.9.0 of Craft."). The **Export…** button in the index footer displays all options, including any [custom exporters](docs_5x__extend__element-exporter-types.md) registered by modules and plugins.

### [#](#modals-contexts)Modals & Contexts

A streamlined version of indexes are used when adding elements to a [relational](docs_5x__system__relations.md) field via a modal. Depending on the field’s configuration, Craft may hide sources or actions, and disable [slideouts](docs_5x__system__control-panel.md#slideouts) (except to create a new element, in-context) and pagination (in favor of scrolling). Internally, Craft refers to these variations as “contexts,” which [plugins](docs_5x__extend__element-types.md#sources) have an opportunity to modify.

## [#](#chips-cards)Chips & Cards New!

![An element “chip” with a title, thumbnail, and label indicated it has been modified.](/docs/assets/img/element-chips.1860d6da.png)

Throughout the control panel, you’ll encounter references to elements in a number of different contexts, like element indexes, [Matrix](docs_5x__reference__field-types__matrix.md) fields, and other [relational](docs_5x__system__relations.md) fields. Element *cards* are a new way to display nested or related elements. They share the core features of element *chips* (like quick-actions and ordering controls), but provide an additional layer of customization via the element’s [field layout](docs_5x__system__fields.md#field-layouts).

Both chips and cards support thumbnails, but only cards allow additional custom field values to be bubbled up. The presence and order of those fields is dictated by a combination of the field layout and customizable [card attributes](#custom-card-attributes) [5.5.0+](https://github.com/craftcms/cms/blob/5.5.0/CHANGELOG.md "Customizable card attributes was first available in version 5.5.0 of Craft."); additional features like colorization and icons are supported by [entries](docs_5x__reference__element-types__entries.md).

![Two element “cards” in the Craft control panel, show thumbnails, titles, and statuses.](/docs/assets/img/element-cards.9d82c35f.png)

### [#](#custom-card-attributes)Custom Card Attributes [5.5.0+](https://github.com/craftcms/cms/blob/5.5.0/CHANGELOG.md "Customizable card attributes was first available in version 5.5.0 of Craft.")

The attributes and fields displayed on element cards is ultimately determined by the interface below each [field layout designer](docs_5x__system__fields.md#field-layouts):

![Element card attribute customization interface.](/docs/assets/img/element-card-attributes.7c30a496.png)

An element’s **Title** and **Status** are always visible, and the presence of a thumbnail is determined by the field layout itself (by selecting **Use for element thumbnails** in the field layout element’s

Ellipses

action menu). Additional attributes *not* present in the field layout can be enabled in the card customization interface; those that *are* part of the field layout will indicate when they are enabled with an “eye” icon.

A card’s thumbnail can come from any field that implements [craft\base\ThumbableFieldInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-thumbablefieldinterface.html) (like [assets](docs_5x__reference__field-types__assets.md) or [icon](docs_5x__reference__field-types__icon.md) fields), or be “inherited” from another element via a [relational field](docs_5x__system__relations.md).

In addition to fields and attributes, [generated fields](#generated-fields) can also be added to element cards.  [5.8.0+](https://github.com/craftcms/cms/blob/5.8.0/CHANGELOG.md "Generated fields was first available in version 5.8.0 of Craft.")

## [#](#copying-elements)Copying Elements [5.7.0+](https://github.com/craftcms/cms/blob/5.7.0/CHANGELOG.md "Copying elements was first available in version 5.7.0 of Craft.")

[Entries](docs_5x__reference__element-types__entries.md) and [addresses](docs_5x__reference__element-types__addresses.md) can by copied-and-pasted between sections and fields. Open the action menu

Ellipses

on any chip, card, or inline nested entry and select **Copy element type**:

![Screenshot](/docs/assets/img/entries-copy-action.50bc1579.png)

From an element index, you can copy multiple elements by selecting any number of rows, then pressing **Copy** from the element actions menu

Gear icon

in the bottom toolbar.

Only one group of elements can be copied at a time—copying another element or group of elements will replace whatever was previously copied. Craft will display a notification on every control panel screen, until you press **Cancel** (or paste it somewhere else).

![Screenshot](/docs/assets/img/entries-copy-notification.f04ac77a.png)

When pasting an element, you will see a notification confirming the element has been “duplicated” into the new context.

You can paste elements anywhere the special **Paste** button appears. The eligible targets are determined by the type of copied element—addresses are portable between user address books and custom fields; entries can only be pasted into fields and sections that support the copied element’s entry type.

![Screenshot](/docs/assets/img/entries-copy-target.6f171b30.png)

The **Paste** button is displayed in the same row as the **Add** button for nested element interfaces; on an element index, it is displayed in the bottom toolbar, where the element action

Gear icon

menu would be.

A copied [draft](docs_5x__system__drafts-revisions.md) (provisional or otherwise) is pasted as a *canonical* element, with the pending changes applied.

## [#](#statuses)Statuses

Most element types support *statuses*. An element’s status is most often a combination of its `enabled` and `enabledForSite` attributes (which Craft stores explicitly for all elements), and any number of other attributes determined by its [type](#element-types). Statuses are represented as strings, and can be accessed via `element.status` in a template, or fed into element query’s `.status()` param as a short-hand for the combination of specific properties they represent.

- **Draft** (`draft`) — The element has a `draftId`.
- **Archived** (`archived`) — The element’s `archived` property is `true`; currently only used by [user](docs_5x__reference__element-types__users.md) elements.
- **Disabled** (`disabled`) — One or both of the `enabled` and `enabledForSite` attributes are `false`.
- **Enabled** (`enabled`) — Both the `enabled` *and* `enabledForSite` attributes are `true`.

To query for elements without applying *any* status constraints (including the element type’s defaults), use `query.status(null)`.

An element’s status is reflected in element indexes, chips, and cards through color pips and labels.

![Sample element status badges](/docs/assets/img/elements-statuses.9b418bc3.png)

Provisional Drafts and Statuses

In the illustration above, **Edited** is technically a supplemental label applied to [provisional drafts](docs_5x__system__drafts-revisions.md#provisional-drafts), and is not a status on its own—but it is often applied in combination with other statuses. Elements with this label have been “substituted” for their canonical counterparts, meaning that provisional changes (like a new title) will appear with a **Live** status.

Conversely, disabling an element in a provisional draft may make it *appear* as **Disabled** throughout the control panel, despite its canonical element actually being **Live**. Despite this, sorting and filtering always operates on the canonical element; the derivative is substituted as the final step in the query.

### [#](#querying-by-status)Querying by Status

When querying for elements using the `.status()` param, you’ll need to refer to the list of global identifiers above, and to additional statuses provided by the specific element type:

```
{% set currentDeals = craft.entries()
  .section('deals')
  .status('live')
  .order('postDate DESC')
  .all() %}

{% set upcomingDeals = craft.entries()
  .section('deals')
  .status('pending')
  .order('postDate ASC')
  .all() %}

{% set pastDeals = craft.entries()
  .section('deals')
  .status('expired')
  .order('expiryDate DESC')
  .all() %}
```

Statuses can be logically combined in a single query, as well:

```
{# Two explicit statuses: #}
{% set bannedUsers = craft.users()
  .status([
    'suspended',
    'locked',
  ])
  .all() %}

{# One explicit status: #}
{% set inactiveUsers = craft.users()
  .status('inactive')
  .all() %}

{# Negated/inverted status: #}
{% set inactiveUsersAlt = craft.users()
  .status(['not', 'active'])
  .all() %}
```

## [#](#nested-elements)Nested Elements New!

Craft ships with two native *nested element* implementations, which provide unique authoring or administrative experiences:

- [**Entries**](docs_5x__reference__element-types__entries.md) and the [**Matrix field**](docs_5x__reference__field-types__matrix.md) — Create dynamic or repeatable content sections, or manage any kind of records that belong to a single owner.
- [**Addresses**](docs_5x__reference__element-types__addresses.md) and the [**Address fields**](docs_5x__reference__field-types__addresses.md) — Capture region-aware location information.

While [relationships](docs_5x__system__relations.md) are supported by every element type, only addresses and entries are eligible for nesting. Plugins may use the nested element interface to provide other functionality, like Commerce’s product and variant system.

## [#](#element-partials)Element Partials New!

Every element has a `render()` method, which you can call from a template to get an HTML representation of the object.

The [CKEditor plugin  (opens new window)](https://plugins.craftcms.com/ckeditor) uses the `.render()` method to [convert each nested entry  (opens new window)](https://github.com/craftcms/ckeditor#rendering-nested-entries-on-the-front-end) from a placeholder to a rich, personalized block—while remaining exactly where the author placed it in the editor.

This is not the *only* way to output your elements’ [content](#fields-and-content), though! Any time you have access to an element, you are free to use its attributes and field values, directly.

Without any configuration, this will typically be the element’s *title* (if the element type uses titles), or it’s element type and ID. This default behavior is handled by the element’s magic `__toString()` method, meaning `{{ element.render() }}` and `{{ element }}` are functionally equivalent.

However, the output of `element.render()` can be customized by placing a template in your [partialTemplatesPath](docs_5x__reference__config__general.md#partialtemplatespath) that follows a specific naming convention. The full path to each element’s partial template is comprised of:

- The element’s type or `refHandle`: Typically its lower-cased, singular name—`entry` or `address`, for instance. The `refHandle` is the same as is used for [reference tags](docs_5x__system__reference-tags.md), elsewhere in the system.
- The field layout provider’s handle: Differs based on the type of element and how its field layout is configured. For assets, it would be the volume’s handle; for entries, its entry type handle; for global sets, the set handle.

As an example, if you wanted to customize the output of an asset in a volume with the handle `images`, you would create a template with this path:

```
_partials/asset/images.twig
```

For element types without a *field layout provider* (like addresses and users)—or when a more specific template is not found—Craft falls back to just the `refHandle`. In the example above, if `_partials/assets/images.twig` doesn’t exist, `_partials/asset.twig` would also be checked.  [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Element partial template fallbacks for elements without field layout providers was first available in version 5.6.0 of Craft.")

If some property of the asset (like its extension, or the user group its uploader is in) should affect its template, you can put whatever logic you need into the template and render something different:

```
<figure>
  {{ asset.getImg() }}

  <figcaption>
    {{ asset.title }}

    {% if asset.uploader.can('accessCp') %}
      <a href="{{ asset.getCpEditUrl() }}">Edit</a>
    {% endif %}
  </figcaption>
</figure>
```

You can also render lists of elements by calling the `render()` method on an [element query](docs_5x__development__element-queries.md) or [element collection](docs_5x__development__collections.md#element-collections).

[Nested entries](docs_5x__reference__element-types__entries.md#nested-entries) (like those in [Matrix](docs_5x__reference__field-types__matrix.md) and [CKEditor  (opens new window)](https://plugins.craftcms.com/ckeditor) fields) include information about where they live in the system, via `owner` and `field` properties:

```
{# _partials/entry/ingredient.twig #}
{{ entry.title }}

{% if entry.field and entry.field.handle == 'nutritionHighlights' %}
  {{ entry.typicalCalories }}
{% endif %}
```

Because entries can be nested within fields on different element types (i.e. a CKEditor field on an entry or a Matrix field in a [global set](docs_5x__reference__element-types__globals.md)), it’s important that your template consider discrepancies between properties on the owner. For instance, an entry that owns another entry will have a `type` property; a category that owns an entry has a `group` property. If an entry type is used both in a section *and* as a nested entry, the `owner` and `field` properties will only be available in the latter context!

Users and addresses don’t have field layout providers, and therefore do not support element partials.

### [#](#parameters)Parameters

Each partial is passed its element under a variable that agrees with its `refHandle`—same as would be passed to a template, when Craft matches an [element’s route](docs_5x__system__routing.md).

When manually rendering an element partial (by calling `element.render()` or `.render()` on an [element collection](docs_5x__development__collections.md#element-collections)), you have an opportunity to make additional variables available to the template:

```
{{ recipe.ingredients.render({
  portionSize: currentUser.householdSize,
}) }}
```

Keep in mind that partials can be rendered from multiple contexts, not all of which will provide these extra variables. Guard against missing parameters with the `|default()` filter or null-coalesce operator (`??`):

```
{# _partials/entry/ingredient.twig #}
{% set portionSize = portionSize|default(1) %}

{{ entry.title }}: {{ entry.quantity * portionSize }} {{ entry.unit }}
```

### [#](#eager-loading)Eager-Loading

When accessing related or nested content within an element partial, use the `.eagerly()` method to [eager-load](docs_5x__development__eager-loading.md#lazy-eager-loading) elements for other partials that might be rendered in sequence.

```
{# _parials/entry/post.twig #}
{% set headerImage = entry.headerImage.eagerly().one() %}

{% if headerImage %}
  {{ headerImage.getImg() }}
{% endif %}

<h3>{{ entry.title }}</h3>

{# ... #}
```

## [#](#properties-and-methods)Properties and Methods

All elements share a few characteristics that make them familiar to work with in your [templates](docs_5x__development__templates.md). Each [element type](#element-types) will supplement these lists with their own properties and methods.

Additionally, [custom fields](docs_5x__system__fields.md) attached to an element are automatically made available as properties corresponding to their handles—so a field called “Post Summary” with a handle of `summary` would be accessed as `entry.summary` (if it were attached to an [entry type](docs_5x__reference__element-types__entries.md#entry-types)’s field layout, and its handle was not overridden).

This is not an exhaustive list! If you’re curious, consult the [craft\base\Element  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html) and [craft\base\ElementTrait  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-elementtrait.html) class reference for a complete picture of what data is available inside elements and how it can be used.

### [#](#properties)Properties

Properties give you access to values, and do not accept arguments.

| Property | Type | Notes |
| --- | --- | --- |
| `archived` | `bool|null` | Whether the element is soft-deleted, or “trashed.” |
| `dateCreated` | `DateTime` | Date the element was originally created. |
| `dateDeleted` | `DateTime|null` | Date the element was soft-deleted or `null` if not. |
| `dateUpdated` | `DateTime` | Date the element was last updated. |
| `enabled` | `bool` | Whether the element is enabled (globally). |
| `id` | `int` | ID of the element. |
| `level` | `int|null` | Depth of the element in a structure. *Structures only.* |
| `ownerId` | `int|null` | ID of the element that “owns” this element. *Nested elements only.* |
| `parentId` | `int|null` | ID of the parent element. *Structures only.* |
| `searchScore` | `int` | Score relative to other results when returned from an [element query](docs_5x__development__element-queries.md) using the [`search` param](docs_5x__system__searching.md), *and* `.orderBy('score')`. |
| `siteId` | `int` | ID of the [craft\models\Site  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-site.html) the element was loaded in. |
| `slug` | `string|null` | *Only for elements with slugs.* |
| `title` | `string|null` | *Only for elements with titles.* |
| `trashed` | `bool` | Whether or not the element has been soft-deleted. |
| `uid` | `string|null` | A UUIDv4 string that uniquely identifies this element. |
| `uri` | `string|null` | Rendered URI or path for the site the element was loaded in. *Only for elements with URLs.* |

### [#](#methods)Methods

Methods also return values, but may accept or require arguments.

Any method beginning with `get` (and that accepts no arguments) can be used like a [property](#properties) by removing the prefix and down-casing the first letter. For example, `{{ entry.getLink() }}` can also be used as `{{ entry.link }}` in a template. This is referred to as a “getter” or “magic getter,” and works in part due to the [design of Yii  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/concept-properties), Craft’s underlying PHP library.

| Method | Notes |
| --- | --- |
| `getAncestors(dist)` | Returns up to `dist` parents of the element, or all parents when omitted. *Structures only.* |
| `getChildren()` | Returns immediate children of the element. *Structures only.* |
| `getCpEditUrl()` | Gets a URL to the Craft control panel. |
| `getDescendants(dist)` | Returns descendants of the element, down to `dist` levels below this one, or all descendants, when omitted. *Structures only.* |
| `getEnabledForSite(siteId)` | Whether the element is enabled in the provided site, or the site it was loaded in if no ID is provided. |
| `getHasDescendants()` | Build an HTML anchor tag with its front-end URL and title. *Elements with URLs only.* |
| `getLink()` | Build an HTML anchor tag with its front-end URL and title. *Elements with URLs only.* |
| `getNext(criteria)` | Load the “next” element relative to this one, given a set of criteria. |
| `getNextSibling()` | Load the next sibling of this element, within a structure. *Structures only.* |
| `getOwner()` | Return the element that “owns” a [nested element](docs_5x__reference__element-types__entries.md#nested-entries). *Nested elements only.* |
| `getParent()` | Returns the element’s parent. *Structure elements only.* |
| `getPrev(criteria)` | Load the previous element relative to this one, given a set of criteria. |
| `getPrevSibling()` | Load the previous sibling of this element, within a structure. *Structures only.* |
| `getRef()` | Builds the part of a [reference tag](docs_5x__system__reference-tags.md) unique to the element. |
| `getSiblings()` | Load siblings within the element’s structure. *Structures only.* |
| `getSite()` | Returns the [craft\models\Site  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-site.html) the element was loaded for. |
| `getStatus()` | Returns a plain-text representation of the element’s status, which may be synthesized from a number of other attributes. |
| `getUrl()` | Builds a complete front-end URL based on the element’s URI. |

The full list of element properties and methods can be found in the [`craft\base\Element` class reference  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-element.html), or [individual element types](docs_5x__reference__element-types.md).

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/system/elements.md)
