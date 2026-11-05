# Tags Fields | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/field-types/tags

---

# Tags Fields

- ### On this Page

  - [Settings](docs_5x__reference__field-types__tags.md#settings)
  - [The Field](docs_5x__reference__field-types__tags.md#the-field)
  - [Development](docs_5x__reference__field-types__tags.md#development)
  - [See Also](docs_5x__reference__field-types__tags.md#see-also)

Tags fields allow you relate [tags](docs_5x__reference__element-types__tags.md) to other elements. It is one of Craft’s [relational](docs_5x__system__relations.md) custom fields.

![Screenshot of the tags field interface in the Craft control panel](/docs/assets/img/fields-tags-ui.75445bfe.png)

## [#](#settings)Settings

my-craft-project.ddev.site/admin/settings/fields/new

![Tags field settings screen in the Craft control panel](/docs/assets/img/fields-tags-settings.2c5295bc.png)

Adding a new tags field via the control panel.

Tags fields have the following settings:

- **Source** — Which tag group the field should be able to relate tags from. Only one source is allowed, because Craft needs to know which group to create new tags in.
- **Default Tag Placement** — Whether new selections are prepended or appended to the existing relations.
- **“Add” Button Label** — The label that should be used on the field’s search input.
- **Validate related tags** — Whether or not validation errors on the related tags will be bubbled up.

### [#](#advanced-settings)Advanced Settings

Additional settings are available under the **Advanced** toggle:

- **Allow self-relations** — If this field is added to a tag group field layout, should the author be allowed to select the tag they are editing as a relationship to itself?

### [#](#multi-site-settings)Multi-Site Settings

On multi-site installs, the following settings will also be available:

- **Translation Method** — How relationships are handled when [propagating changes to other sites](docs_5x__system__fields.md#translation-methods).
- **Relate tags from a specific site?** — Whether to only allow relations to tags from a specific site.

  - If *enabled*, a new setting will appear where you can choose which site.
  - If *disabled*, related tags will always be pulled from the current site.
- **Show the site menu** — Whether to display the site menu in tag selection modals. (This setting is hidden when relations are locked to a single site.)

[Translation Methods
→

Learn about options for translating field values.](docs_5x__system__fields.md#translation-methods)

## [#](#the-field)The Field

Tags fields list all the currently-related tags with a text input to add new ones.

As you type into the text input, the Tags field will search through the existing tags that belong to the field’s tag group (per its Source setting), and suggest tags in a menu below the text input. If an exact match is not found, the first option in the menu will create a new tag named after the input value.

By default you won’t be able to create multiple tags that are too similar in name. You can change that behavior by enabling the [allowSimilarTags](docs_5x__reference__config__general.md#allowsimilartags) config setting.

### [#](#inline-tag-editing)Inline Tag Editing

When you double-click on a related tag, a [slideout](docs_5x__system__control-panel.md#slideouts) will appear where you can edit the tag’s title and any custom fields added to its group’s field layout.

## [#](#development)Development

### [#](#querying-elements-with-tags-fields)Querying Elements with Tags Fields

When [querying for elements](docs_5x__development__element-queries.md) that have a Tags field, you can filter the results based on the Tags field data using a query param named after your field’s handle.

Possible values include:

| Value | Fetches elements… |
| --- | --- |
| `':empty:'` | that don’t have any related tags. |
| `':notempty:'` | that have at least one related tag. |
| `100` | that are related to the tag with an ID of 100. |
| `[100, 200]` | that are related to a tag with an ID of 100 or 200. |
| `[':empty:', 100, 200]` | with no related tags, or related to a tag with an ID of 100 or 200. |
| `['and', 100, 200]` | that are related to the tags with IDs of 100 and 200. |
| an [Tag  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-tag.html) object | that are related to the tag. |
| an [TagQuery  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-tagquery.html) object | that are related to any of the resulting tags. |

TwigPHP

```
{# Fetch entries with a related tag #}
{% set entries = craft.entries()
  .myFieldHandle(':notempty:')
  .all() %}
```

```
// Fetch entries with a related tag
$entries = \craft\elements\Entry::find()
    ->myFieldHandle(':notempty:')
    ->all();
```

### [#](#working-with-tags-field-data)Working with Tags Field Data

If you have an element with a Tags field in your template, you can access its related tags using your Tags field’s handle:

TwigPHP

```
{% set query = entry.myFieldHandle %}
```

```
$query = $entry->myFieldHandle;
```

That will give you a [tag query](docs_5x__reference__element-types__tags.md#querying-tags), prepped to output all the related tags for the given field.

To loop through all the related tags, call [all()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-all) and then loop over the results:

TwigPHP

```
{% set relatedTags = entry.myFieldHandle.all() %}
{% if relatedTags|length %}
  <ul>
    {% for rel in relatedTags %}
      <li><a href="{{ url('tags/'~rel.slug) }}">{{ rel.title }}</a></li>
    {% endfor %}
  </ul>
{% endif %}
```

```
$relatedTags = $entry->myFieldHandle->all();
if (count($relatedTags)) {
    foreach ($relatedTags as $rel) {
        // \craft\helpers\UrlHelper::url('tags/' . $rel->slug)
        // $rel->title
    }
}
{% endif %}
```

If you only want the first related tag, call [one()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-one) and make sure it returned something:

TwigPHP

```
{% set rel = entry.myFieldHandle.one() %}
{% if rel %}
  <p><a href="{{ url('tags/'~rel.slug) }}">{{ rel.title }}</a></p>
{% endif %}
```

```
$rel = $entry->myFieldHandle->one();
if ($rel) {
    // \craft\helpers\UrlHelper::url('tags' . $rel->slug)
    // $rel->title
}
```

If you need to check for any related tags without fetching them, you can call [exists()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-exists):

TwigPHP

```
{% if entry.myFieldHandle.exists() %}
  <p>There are related tags!</p>
{% endif %}
```

```
if ($entry->myFieldHandle->exists()) {
    // There are related tags!
}
```

You can set [parameters](docs_5x__reference__element-types__tags.md#parameters) on the tag query as well.

TwigPHP

```
{% set relatedTags = entry.myFieldHandle
  .group('blogEntryTags')
  .all() %}
```

```
$relatedTags = $entry->myFieldHandle
    ->group('blogEntryTags')
    ->all();
```

In Craft 3, we recommended cloning these query objects using the [`clone` keyword  (opens new window)](https://www.php.net/manual/en/language.oop5.cloning.php) or [`clone()`](docs_5x__reference__twig__functions.md#clone) Twig function before applying params. **This is no longer required in Craft 4**, because a new copy of the query is returned each time you access the field property.

### [#](#saving-tags-fields)Saving Tags Fields

If you have an element form, such as an [entry form  (opens new window)](https://craftcms.com/knowledge-base/entry-form), that needs to contain a Tags field, you will need to submit your field value as a list of tag IDs, in the order you want them to be related.

For example, you could create a list of checkboxes for each of the possible relations:

```
{# Include a hidden input first so Craft knows to update the existing value
   if no checkboxes are checked. #}
{{ hiddenInput('fields[myFieldHandle]', '') }}

{# Get all of the possible tag options #}
{% set possibleTags = craft.entries()
  .group('blogEntryTags')
  .orderBy('title ASC')
  .all() %}

{# Get the currently related tag IDs #}
{% set relatedTagIds = entry is defined
  ? entry.myFieldHandle.ids()
  : [] %}

<ul>
  {% for possibleTag in possibleTags %}
    <li>
      <label>
        {{ input(
          'checkbox',
          'fields[myFieldHandle][]',
          possibleTag.id,
          { checked: possibleTag.id in relatedTagIds }
        ) }}
        {{ possibleTag.title }}
      </label>
    </li>
  {% endfor %}
</ul>
```

You could then make the checkbox list sortable, so users have control over the order of related tags.

## [#](#see-also)See Also

- [Tag Queries](docs_5x__reference__element-types__tags.md#querying-tags)
- [craft\elements\Tag  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-tag.html)
- [Relations](docs_5x__system__relations.md)

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/field-types/tags.md)
