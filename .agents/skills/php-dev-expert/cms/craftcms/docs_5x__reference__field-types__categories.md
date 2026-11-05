# Categories Fields | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/field-types/categories

---

# Categories Fields

- ### On this Page

  - [Settings](docs_5x__reference__field-types__categories.md#settings)
  - [The Field](docs_5x__reference__field-types__categories.md#the-field)
  - [Development](docs_5x__reference__field-types__categories.md#development)
  - [See Also](docs_5x__reference__field-types__categories.md#see-also)

Categories are being phased out in favor of [structure sections](docs_5x__reference__element-types__entries.md#structures). The corresponding [entries field](docs_5x__reference__field-types__entries.md) has a *maintain hierarchy* setting that mimics categories fields.

Read more about this [transition  (opens new window)](https://craftcms.com/blog/entrification) on our blog.

Categories fields allow you to relate [categories](docs_5x__reference__element-types__categories.md) to other elements. It is one of Craft’s [relational](docs_5x__system__relations.md) custom fields.

## [#](#settings)Settings

Categories fields have the following settings:

- **Source** — Which category group (or other category index [source](docs_5x__system__elements.md#sources)) the field should be able to relate categories from.
- **Maintain Hierarchy** — Should the selected categories’ order and hierarchy be preserved?

  When **enabled**, the following options become available:

  - **Branch Limit** — How many distinct “branches” of the category tree can be selected?

  When **disabled**, these options are available:

  - **Min Relations** — The minimum number of categories that must be selected when the field is marked as “required” in a field layout. (Default is no minimum.)
  - **Max Relations** — The maximum number of categories that can be selected. (Default is no maximum.)
  - **Default Category Placement** — Whether new selections are prepended or appended to the existing relations.
  - **View Mode** — How the related categories are displayed to authors (*List*, *Cards*, *Card grid*, or *Inline list* [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "The inline list and card grid view modes for relational fields was first available in version 5.9.0 of Craft.")).
- **“Add” Button Label** — The label that should be used on the field’s selection button.
- **Validate related categories** — Whether or not validation errors on the related categories will be bubbled up.

When a single source is selected, you can also configure these settings:

- **Show the search input** — Allow authors to quick-search (and create) categories, without opening an element selector modal.  [5.8.0+](https://github.com/craftcms/cms/blob/5.8.0/CHANGELOG.md "Quick-search support for relational fields was first available in version 5.8.0 of Craft.")

### [#](#advanced-settings)Advanced Settings

Additional settings are available under the **Advanced** toggle:

- **Allow self-relations** — If this field is added to a category group field layout, should the author be allowed to select the category they are editing as a relationship to itself?

### [#](#multi-site-settings)Multi-Site Settings

On multi-site installs, the following settings will also be available:

- **Translation Method** — How relationships are handled when [propagating changes to other sites](docs_5x__system__fields.md#translation-methods).
- **Relate categories from a specific site?** — Whether to only allow relations to categories from a specific site.

  - If *enabled*, a new setting will appear where you can choose which site.
  - If *disabled*, related categories will always be pulled from the current site.
- **Show the site menu** — Whether to display the site menu in category selection modals. (This setting is hidden when relations are locked to a single site.)

[Translation Methods
→

Learn about options for translating field values.](docs_5x__system__fields.md#translation-methods)

## [#](#the-field)The Field

Categories fields list all the currently-related categories with a button to select new ones.

Choosing **Add a category** will bring up a modal window where you can find and select additional categories. You can create new categories from this modal as well, by choosing **New category**.

When you select a nested category, all the ancestors leading up to that category will also automatically be related. Likewise, when you remove a category from within the main field input, any of its descendants will also be removed.

### [#](#inline-category-editing)Inline Category Editing

Double-click on a related category to edit it in a [slideout](docs_5x__system__control-panel.md#slideouts).

## [#](#development)Development

### [#](#querying-elements-with-categories-fields)Querying Elements with Categories Fields

When [querying for elements](docs_5x__development__element-queries.md) that may have a categories field, you can use values compatible with [relational query params](docs_5x__system__relations.md) to narrow the results:

| Value | Fetches elements… |
| --- | --- |
| `':empty:'` | that don’t have any related categories. |
| `':notempty:'` | that have at least one related category. |
| `100` | that are related to the category with an ID of 100. |
| `[100, 200]` | that are related to a category with an ID of 100 or 200. |
| `[':empty:', 100, 200]` | with no related categories, or are related to a category with an ID of 100 or 200. |
| `['and', 100, 200]` | that are related to the categories with IDs of 100 and 200. |
| one or more [Category  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-category.html) elements | that are related to the category/categories. |
| a [CategoryQuery  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-categoryquery.html) object | that are related to any of the resulting categories. |

In general, you won’t know a specific category’s ID up-front. Here’s how you might use a category field param to fetch entries belonging to a particular category, in a blog:

```
{% set posts = craft.entries()
  .section('posts')
  .myCategoriesField(category)
  .all() %}
```

This example assumes we’re loading entries from a [category’s template](docs_5x__reference__element-types__categories.md#routing-and-templates), where the `category` variable is automatically injected. This same approach would work if we were instead looking for related content, on an individual post page:

```
{# Fetch IDs of the current post’s categories: #}
{% set currentPostCategories = entry.myCategoriesField.ids() %}

{# Use them in a new entries query: #}
{% set relatedPosts = craft.entries()
  .section('posts')
  .myCategoriesField(currentPostCategories)
  .limit(5)
  .all() %}
```

This query will return entries related to *any* of the current post’s categories. Prepend `and` to the array to find entries that share *all* their categories with the current post:

```
['and', ...currentPostCategories]
```

All the examples so far are achievable using generic [relational query methods](docs_5x__system__relations.md#the-relatedto-parameter), but automatically ensure that relationships are defined in a specific field, and in a specific direction (as *targets*). An equivalent query using `.relatedTo()` might look something like this:

```
{% set currentPostCategories = entry.myCategoriesField.ids() %}

{% set relatedPosts = craft.entries()
  .section('posts')
  .relatedTo({
    field: 'myCategoriesField',
    targetElement: currentPostCategories,
  })
  .limit(5)
  .all() %}
```

The last example we’ll look at uses the [special `:empty:` token](docs_5x__system__relations.md#sources-and-targets) to find post entries with *no* categories related to the field:

```
{% set uncategorized = craft.entries()
  .section('posts')
  .myCategoriesField(':empty:')
  .all() %}
```

This query may still return entries related to categories via *other* fields! You can combine multiple category field params to better define “uncategorized:”

```
{% set uncategorized = craft.entries()
  .section('posts')
  .topics(':empty:')
  .productFamilies(':empty:')
  .all() %}

{# ...or... }

{% set uncategorized = craft.entries()
  .section('posts')
  .relatedTo({
    targetElement: ':empty:',
    field: ['topics', 'productFamilies'],
  })
  .all() %}
```

### [#](#working-with-categories-field-data)Working with Categories Field Data

If you have an element with a categories field in your template, you can access the related category elements using the field’s handle:

TwigPHP

```
{% set query = entry.myCategoriesField %}
```

```
$query = $entry->myCategoriesField;
```

That will give you a [category query](docs_5x__reference__element-types__categories.md#querying-categories), prepped to return all the related categories for the given field. You can use the results as a list…

TwigPHP

```
{% set relatedCategories = entry.myCategoriesField.all() %}
{% if relatedCategories|length %}
  <ul>
    {% for rel in relatedCategories %}
      <li><a href="{{ rel.url }}">{{ rel.title }}</a></li>
    {% endfor %}
  </ul>
{% endif %}
```

```
$relatedCategories = $entry->myCategoriesField->all();
if (count($relatedCategories)) {
    foreach ($relatedCategories as $rel) {
        // do something with $rel->url and $rel->title
    }
}
```

…or you can show them as a hierarchical list with the [nav](docs_5x__reference__twig__tags.md#nav) tag:

```
{% set relatedCategories = entry.myCategoriesField.all() %}
{% if relatedCategories|length %}
  <ul>
    {% nav rel in relatedCategories %}
      <li>
        <a href="{{ rel.url }}">{{ rel.title }}</a>
        {% ifchildren %}
          <ul>
            {% children %}
          </ul>
        {% endifchildren %}
      </li>
    {% endnav %}
  </ul>
{% endif %}
```

If you only want the first related category, call [one()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-one) instead and make sure it returned something:

TwigPHP

```
{% set rel = entry.myCategoriesField.one() %}
{% if rel %}
  <p><a href="{{ rel.url }}">{{ rel.title }}</a></p>
{% endif %}
```

```
$rel = $entry->myCategoriesField->one();
if ($rel) {
    // do something with $rel->url and $rel->title
}
```

If you need to check for related categories without fetching them, you can call [exists()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-exists):

TwigPHP

```
{% if entry.myCategoriesField.exists() %}
  <p>There are related categories!</p>
{% endif %}
```

```
if ($entry->myCategoriesField->exists()) {
    // do something with related categories
}
```

You can set [parameters](docs_5x__reference__element-types__categories.md#parameters) on the category query as well. For example, to only fetch the “leaves” (categories without any children), set the [leaves](docs_5x__reference__element-types__categories.md#leaves) param:

TwigPHP

```
{% set relatedCategories = entry.myCategoriesField
  .leaves()
  .all() %}
```

```
$relatedAssets = $entry->myCategoriesField
    ->leaves()
    ->all();
```

Each time you access a category field by its handle, Craft returns a new element query.

### [#](#saving-categories-fields)Saving Categories Fields

If you have an element form, such as an [entry form  (opens new window)](https://craftcms.com/knowledge-base/entry-form), that needs to contain a Categories field, you will need to submit your field value as a list of category IDs.

For example, you could create a list of checkboxes for each of the possible relations:

```
{# Include a hidden input first so Craft knows to update the existing value
   if no checkboxes are checked. #}
{{ hiddenInput('fields[myCategoriesField]', '') }}

{# Get all of the possible category options #}
{% set possibleCategories = craft.categories()
  .group('food')
  .all() %}

{# Get the currently related category IDs #}
{% set relatedCategoryIds = entry is defined
  ? entry.myCategoriesField.ids()
  : [] %}

<ul>
  {% nav possibleCategory in possibleCategories %}
    <li>
      <label>
        {{ input(
          'checkbox',
          'fields[myCategoriesField][]',
          possibleCategory.id,
          { checked: possibleCategory.id in relatedCategoryIds }
        ) }}
        {{ possibleCategory.title }}
      </label>
      {% ifchildren %}
        <ul>
          {% children %}
        </ul>
      {% endifchildren %}
    </li>
  {% endnav %}
</ul>
```

When the **Maintain Hierarchy** [setting](#settings) is *enabled*, Craft enforces an order for the selected categories and normalizes the selections to “fill in” gaps in the tree.

With the setting *disabled*, only the explicitly-selected categories will be related, in the order they appear in the request—most often, their order in the form’s HTML.

### [#](#graphql)GraphQL

Categories related via a categories field can be selected along with the source of the relationship:

```
query Posts {
  entries(section: "blog") {
    title
    url

    ... on post_Entry {
      topics {
        title
        url
      }
    }
  }
}
```

You can also use categories fields as query arguments, to narrow the results:

```
query TopicPosts {
  entries(
    section: "blog"
    topics: [1234, 5678]
  ) {
    title
    url
  }
}
```

Some relational queries may require that you translate category identifiers (like slugs or UUIDs) to IDs.

[Relational Fields in GraphQL
→

Get the most out of Craft’s relational fields via the GraphQL API.](docs_5x__development__graphql.md#relationships)

## [#](#see-also)See Also

- [Category Queries](docs_5x__reference__element-types__categories.md#querying-categories)
- [craft\elements\Category  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-category.html)
- [Relations](docs_5x__system__relations.md)

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/field-types/categories.md)
