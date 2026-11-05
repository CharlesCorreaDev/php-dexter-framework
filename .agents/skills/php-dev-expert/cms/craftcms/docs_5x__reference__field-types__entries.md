# Entries Fields | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/field-types/entries

---

# Entries Fields

- ### On this Page

  - [Settings](docs_5x__reference__field-types__entries.md#settings)
  - [The Field](docs_5x__reference__field-types__entries.md#the-field)
  - [Development](docs_5x__reference__field-types__entries.md#development)
  - [See Also](docs_5x__reference__field-types__entries.md#see-also)

Entries fields allow you to relate [entries](docs_5x__reference__element-types__entries.md) to other elements. It is one of Craft’s [relational](docs_5x__system__relations.md) custom fields.

![Screenshot of the entries field interface in the Craft control panel](/docs/assets/img/fields-entries-ui.5e42a5ae.png)

If you would like to manage a set of *nested* entries within another element (as opposed to selecting from an external set), consider using the [Matrix field](docs_5x__reference__field-types__matrix.md).

## [#](#settings)Settings

my-craft-project.ddev.site/admin/settings/fields/new

![Entries field settings screen in the Craft control panel](/docs/assets/img/fields-entries-settings.6738410c.png)

Adding a new entries field via the control panel.

Entries fields have the following settings:

- **Sources** — Which sections (or other entry index sources) the field should be able to relate entries from.
- **Selectable Entries Condition** — Rules that determine which entries should be available for selection.
- **Maintain Hierarchy** — When selecting from a [structure section](docs_5x__reference__element-types__entries.md#structures), should the entries’ order and hierarchy be preserved? (This option is available only when *all* the selected **Sources** are structures.)

  When **enabled**, the following options become available:

  - **Branch Limit** — How many distinct “branches” of a structure can be selected?

  When **disabled**, these options are available:

  - **Min Relations** — The minimum number of entries that must be selected when the field is marked as “required” in a field layout. (Default is no minimum.)
  - **Max Relations** — The maximum number of entries that can be selected. (Default is no maximum.)
  - **Default Entry Placement** — Whether new selections are prepended or appended to the existing relations.
  - **View Mode** — How the related entries are displayed to authors (*List*, *Cards*, *Card grid*, or *Inline list* [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "The inline list and card grid view modes for relational fields was first available in version 5.9.0 of Craft.")).
- **“Add” Button Label** — The label that should be used on the field’s selection button.

When a single source is selected, you can also configure these settings:

- **Show the search input** — Allow authors to quick-search (and create) entries, without opening an element selector modal.  [5.8.0+](https://github.com/craftcms/cms/blob/5.8.0/CHANGELOG.md "Quick-search support for relational fields was first available in version 5.8.0 of Craft.")

### [#](#advanced-settings)Advanced Settings

Additional settings are available under the **Advanced** toggle:

- **Allow self relations** — If this field is added to an entry type field layout, should the author be allowed to select the entry they are editing as a relationship to itself?

### [#](#multi-site-settings)Multi-Site Settings

On multi-site installs, additional advanced settings will be available:

- **Translation Method** — How relationships are handled when [propagating changes to other sites](docs_5x__system__fields.md#translation-methods).
- **Relate entries from a specific site?** — Whether to only allow relations to entries from a specific site.

  - If *enabled*, a new setting will appear where you can choose which site.
  - If *disabled*, related entries will always be pulled from the current site.
- **Show the site menu** — Whether to display the site menu in entry selection modals. (This setting is hidden when relations are locked to a single site.)

[Translation Methods
→

Learn about options for translating field values.](docs_5x__system__fields.md#translation-methods)

## [#](#the-field)The Field

Entries fields list all of the currently-related entries, with a button to select new ones.

Pressing **Add an entry** will open a modal window where you can find and select additional entries. (You also press **+ New entry** from this modal to create a new entry in a slideout panel.)

### [#](#inline-entry-editing)Inline Entry Editing

When you double-click a related entry, a slideout will appear where you can edit the entry’s title and custom fields.

## [#](#development)Development

### [#](#querying-elements-with-entries-fields)Querying Elements with Entries Fields

When [querying for elements](docs_5x__development__element-queries.md) that have an Entries field, you can filter the results based on the Entries field data using a query param named after your field’s handle.

Possible values include:

| Value | Fetches elements… |
| --- | --- |
| `':empty:'` | that don’t have any related entries. |
| `':notempty:'` | that have at least one related entry. |
| `100` | that are related to the entry with an ID of 100. |
| `[100, 200]` | that are related to an entry with an ID of 100 or 200. |
| `[':empty:', 100, 200]` | with no related entries, or related to an entry with an ID of 100 or 200. |
| `['and', 100, 200]` | that are related to the entries with IDs of 100 and 200. |
| an [Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html) object | that are related to the entry. |
| an [EntryQuery  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-entryquery.html) object | that are related to any of the resulting entries. |

TwigPHP

```
{# Fetch artwork entries that are related to `artist` #}
{% set works = craft.entries()
  .section('artwork')
  .myFieldHandle(artist)
  .all() %}
```

```
// Fetch artwork entries that are related to `$artist`
$works = \craft\elements\Entry::find()
    ->section('artwork')
    ->myFieldHandle($artist)
    ->all();
```

### [#](#working-with-entries-field-data)Working with Entries Field Data

If you have an element with an entries field in your template, you can access its related entries using your entries field’s handle:

TwigPHP

```
{% set query = entry.myFieldHandle %}
```

```
$query = $entry->myFieldHandle;
```

That will give you an [entry query](docs_5x__reference__element-types__entries.md#querying-entries), prepped to output all of the related entries for the given field.

To loop through all the related entries, call [all()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-all) and then loop over the results:

TwigPHP

```
{% set relatedEntries = entry.myFieldHandle.all() %}
{% if relatedEntries|length %}
  <ul>
    {% for rel in relatedEntries %}
      <li><a href="{{ rel.url }}">{{ rel.title }}</a></li>
    {% endfor %}
  </ul>
{% endif %}
```

```
$relatedEntries = $entry->myFieldHandle->all();
if (count($relatedEntries)) {
    foreach ($relatedEntries as $rel) {
        // $rel->url, $rel->title
    }
}
```

If you only want the first related entry, call [one()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-one) instead, and then make sure it returned something:

TwigPHP

```
{% set rel = entry.myFieldHandle.one() %}
{% if rel %}
  <p><a href="{{ rel.url }}">{{ rel.title }}</a></p>
{% endif %}
```

```
$rel = $entry->myFieldHandle->one();
if ($rel) {
    // $rel->url, $rel->title
}
```

If you’d like to check for related entries without fetching them, you can call [exists()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-exists):

TwigPHP

```
{% if entry.myFieldHandle.exists() %}
  <p>There are related entries!</p>
{% endif %}
```

```
if ($entry->myFieldHandle->exists()) {
    // There are related entries!
}
```

You can set [parameters](docs_5x__reference__element-types__entries.md#parameters) on the entry query as well. For example, to narrow the related entries to those in a `news` section, set the [section](docs_5x__reference__element-types__entries.md#section) param:

TwigPHP

```
{% set relatedEntries = entry.myFieldHandle
  .section('news')
  .all() %}
```

```
$relatedEntries = $entry->myFieldHandle
    ->section('news')
    ->all();
```

Each time you access an entries field from an element, a new copy of its value is returned.
This means that applying parameters *does not* influence the original query, and you can always get the authoritative set of related entries by calling `.all()`:

```
{# Get a list of just organization(s): #}
{% set orgsQuery = asset.documentSources
  .type('org')
  .all() %}

{# Get a list of only individual people: #}
{% set individualsQuery = asset.documentSources
  .type('individual')
  .all() %}

{# Get everything, regardless of the type: #}
{% set allSources = asset.documentSources.all() %}
```

Save the returned value to an intermediate variable if you need to refer to it again:

```
{% set sourceQuery = asset.documentSources %}
{% set sourceType = craft.app.request.getParam('sourceType') %}

{% if sourceType is not empty and sourceType in ['org', 'individual', 'anonymous'] %}
  {% do sourceQuery.type(sourceType) %}
{% endif %}

{% for source in sourceQuery.all() %}
  {# ... #}
{% endfor %}
```

### [#](#saving-entries-fields)Saving Entries Fields

If you have front-end form for saving an element, that needs to contain an entries field, you will need to submit your field value as a list of entry IDs, in the order you want them to be related.

For example, you could create a list of checkboxes for each of the possible relations:

```
{# Include a hidden input first so Craft knows to update the existing value
   if no checkboxes are checked. #}
{{ hiddenInput('fields[myFieldHandle]', '') }}

{# Get all of the possible entry options #}
{% set possibleEntries = craft.entries()
  .section('galleries')
  .orderBy('title ASC')
  .all() %}

{# Get the currently related entry IDs #}
{% set relatedEntryIds = entry is defined
  ? entry.myFieldHandle.ids()
  : [] %}

<ul>
  {% for possibleEntry in possibleEntries %}
    <li>
      <label>
        {{ input(
          'checkbox',
          'fields[myFieldHandle][]',
          possibleEntry.id,
          { checked: possibleEntry.id in relatedEntryIds }
        ) }}
        {{ possibleEntry.title }}
      </label>
    </li>
  {% endfor %}
</ul>
```

You could then make the checkbox list sortable, so users have control over the order of related entries.

## [#](#see-also)See Also

- [Entry Queries](docs_5x__reference__element-types__entries.md#querying-entries)
- [craft\elements\Entry  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-entry.html)
- [Relations](docs_5x__system__relations.md)

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/field-types/entries.md)
