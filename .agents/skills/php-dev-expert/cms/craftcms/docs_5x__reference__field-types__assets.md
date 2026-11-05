# Assets Fields | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/field-types/assets

---

# Assets Fields

- ### On this Page

  - [Settings](docs_5x__reference__field-types__assets.md#settings)
  - [The Field](docs_5x__reference__field-types__assets.md#the-field)
  - [Development](docs_5x__reference__field-types__assets.md#development)
  - [See Also](docs_5x__reference__field-types__assets.md#see-also)

Assets fields allow you to upload and relate [assets](docs_5x__reference__element-types__assets.md) to other elements. It is one of Craft’s [relational](docs_5x__system__relations.md) custom fields.

## [#](#settings)Settings

my-craft-project.ddev.site/admin/settings/fields/new

![Assets field settings screen in the Craft control panel](/docs/assets/img/fields-assets-settings.1f66c655.png)

Adding a new assets field via the control panel.

Assets fields have the following novel settings:

- **Restrict assets to a single location?** – Force files to be uploaded to (and selected from) a single folder.

  If *enabled*, the following setting will be visible:

  - **Asset Location** – A specific volume and folder from which assets can be selected (and into which assets uploaded directly to the field are saved). The path portion of this setting is evaluated as an [object template](docs_5x__system__object-templates.md).

  If *disabled*, the following settings will be visible:

  - **Sources** – Which asset volumes (or other asset index [sources](docs_5x__system__elements.md#sources)) the field should be able to relate assets from.
  - **Default Upload Location** – The default volume and path that files are stored in when uploaded directly to the field. This setting is evaluated as an [object template](docs_5x__system__object-templates.md).
- **Selectable Assets Condition** — Provide additional constraints on the assets that can be selected.
- **Show unpermitted volumes** — Allow authors to select assets from volumes they aren’t otherwise [allowed to view or modify](docs_5x__system__user-management.md#permissions).
- **Show unpermitted files** — Allow authors to select assets that otherwise would’t be viewable (per their **View files uploaded by other users** permission).
- **Restrict allowed file types?** — Whether the field should only be able to upload/relate files of a certain type(s).

  You can add novel file “types” with the [extraFileKinds](docs_5x__reference__config__general.md#extrafilekinds) setting.
  Craft always respects the [allowedFileExtensions](docs_5x__reference__config__general.md#allowedfileextensions) and [extraAllowedFileExtensions](docs_5x__reference__config__general.md#extraallowedfileextensions) setting for new uploads.

  If you want to require a single, specific extension (rather than a general “type”), add a **Filename** condition to the **Selectable Assets Condition**, and set it to **ends with** `.jpeg`.
- **Allow uploading directly to the field** — When enabled, authors can drag-and-drop files onto the field to upload and attach them in a single step. Review the **Default Upload Location** setting to make sure these assets are organized.

### [#](#base-relation-field-settings)Base Relation Field Settings

These settings are part of every relational field:

- **Min Relations** – The *minimum* number of assets that must be related to pass validation.
- **Max Relations** – The *maximum* number of assets that can be related to pass validation.
- **Default Asset Placement** — Choose whether newly-attached assets are *prepended* or *appended* to the existing selection.
- **View Mode** — How the related assets are displayed to authors (*List*, *Cards*, *Card grid*, or *Inline list* [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "The inline list and card grid view modes for relational fields was first available in version 5.9.0 of Craft.")).
- **“Add” Button Label** – The label that should be used on the field’s selection button.
- **Validate related assets** — Whether or not validation errors on the related assets will be bubbled up.
- **Preview Mode** — How this field’s values are displayed when included on element indexes.

Within the **Advanced** toggle, two additional options are available:

- **Allow self relations** — If this field is attached to an asset via a [volume field layout](docs_5x__reference__element-types__assets.md#volumes), should the author be allowed to create a circular reference?
- **Relate assets from a specific site?** — Lock relations to a single [site](#multi-site-settings).

#### [#](#multi-site-settings)Multi-Site Settings

On multi-site installs, the following setting will also be available:

- **Translation Method** — How relationships are handled when [propagating changes to other sites](docs_5x__system__fields.md#translation-methods).

[Translation Methods
→

Learn about options for translating field values.](docs_5x__system__fields.md#translation-methods)

### [#](#dynamic-subfolder-paths)Dynamic Subfolder Paths

Subfolder paths defined by the **Upload Location** and **Default Upload Location** settings are [object templates](docs_5x__system__object-templates.md). Any properties supported by the source element (the element that has the assets field) can be used here.

Be aware that *fields are reusable*, and can be added to [nested](#nested-elements) *and* non-nested elements’ field layouts—and on different element types! Constructing a subfolder template that works in all contexts (and is readable and reliable) can be challenging—consider maintaining separate fields to avoid this complexity.

#### [#](#ids-and-uids)IDs and UIDs

If you want to include an element’s ID or UID in a dynamic subfolder path, use `{canonicalId}` or `{canonicalUid}` rather than `{id}` or `{uid}`, so the source element’s ID or UID is used rather than the those of a draft or revision.

#### [#](#nested-elements)Nested Elements

If an Assets field is used by an [entry type](docs_5x__reference__element-types__entries.md#entry-types) within a [Matrix field](docs_5x__reference__field-types__matrix.md), the source element will be the nested entry, *not* the element that the entry belongs to. This means that assets attached to different nested entries may end up in different folders!

In these situations, you should use `owner.someElementProperty` instead of just `someElementProperty`; the previous example would become `owner.canonicalId` or `owner.canonicalUid`.

#### [#](#conditional-path-segments)Conditional Path Segments

If a rendered subfolder path ends up blank or contains a leading, trailing, or double forward slash (e.g. `/bar/baz`, `foo/`, or `foo//bar`), Craft considers it invalid. When you suspect a value it depends on may not be available, output `:ignore:`. Suppose you want to output the first selected category, or nothing (when one isn’t selected):

```
blog/{{ categoriesFieldHandle.one().slug ?? ':ignore:' }}/{canonicalId}
```

This is equivalent to conditionally outputting the slashes as part of a value:

```
blog/{{ categoriesFieldHandle.exists() ? "#{categoriesFieldHandle.one().slug}/" : null }}{canonicalId}
```

## [#](#the-field)The Field

Assets fields list all the currently-related assets, with a button to select new ones.

Choosing **Add an asset** will bring up a modal window where you can find and select additional assets, as well as upload new ones.

You can also upload assets by dragging files directly onto the assets field, or into the modal window.

### [#](#inline-asset-editing)Inline Asset Editing

Double-click on a related asset to edit it in a [slideout](docs_5x__system__control-panel.md#slideouts).

You can choose which custom fields should be available for assets in each volume from **Settings** → **Assets** → **[Volume Name]** → **Field Layout**.

## [#](#development)Development

Asset fields have similar features to other [relational fields](docs_5x__system__relations.md).

### [#](#querying-elements-with-assets-fields)Querying Elements with Assets Fields

When [querying for elements](docs_5x__development__element-queries.md) that may have an assets field, you can use values compatible with [relational query params](docs_5x__system__relations.md) to narrow the results:

| Value | Fetches elements… |
| --- | --- |
| `':empty:'` | that don’t have any related assets. |
| `':notempty:'` | that have at least one related asset. |
| `100` | that are related to the asset with an ID of 100. |
| `[100, 200]` | that are related to an asset with an ID of 100 *or* 200. |
| `[':empty:', 100, 200]` | with no related assets, or are related to an asset with an ID of 100 *or* 200. |
| `['and', 100, 200]` | that are related to the assets with IDs of 100 and 200. |
| one or more [Asset  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-asset.html) elements | that are related to the asset/assets. |
| an [AssetQuery  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-assetquery.html) object | that are related to any of the resulting assets. |

In this example, we’re querying for other “product” entries that reference the same document:

```
{% set document = entry.materialDisclosures.one() %}

{% set similarProducts = craft.entries()
  .section('products')
  .materialDisclosures(document)
  .all() %}
```

Exclude the current entry by setting `.id(['not', entry.id])` to the query!

You might also want to search for elements that have (or *don’t* have) assets attached to a specific field:

```
{# Products for which documentation of hazardous materials is provided: #}
{% set potentiallyDangerousProducts = craft.entries()
  .section('products')
  .materialDisclosures(':notempty:')
  .all() %}

{# Products that have no disclosures: #}
{% set probablySafeProducts = craft.entries()
  .section('products')
  .materialDisclosures(':empty:')
  .all() %}
```

### [#](#working-with-assets-field-data)Working with Assets Field Data

If you have an element with an Assets field in your template, you can access its related assets using your Assets field’s handle:

TwigPHP

```
{% set query = entry.myFieldHandle %}
```

```
$query = $entry->myFieldHandle;
```

That will give you an [asset query](docs_5x__reference__element-types__assets.md#querying-assets), prepped to output all the related assets for the given field.

To loop through all the related assets, call [all()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-all) and then loop over the results:

TwigPHP

```
{% set relatedAssets = entry.myFieldHandle.all() %}
{% if relatedAssets|length %}
  <ul>
    {% for rel in relatedAssets %}
      <li><a href="{{ rel.url }}">{{ rel.filename }}</a></li>
    {% endfor %}
  </ul>
{% endif %}
```

```
$relatedAssets = $entry->myFieldHandle->all();

if (count($relatedAssets)) {
    foreach ($relatedAssets as $rel) {
        // do something with $rel->url and $rel->filename
    }
}
```

When using `asset.url` or `asset.getUrl()`, the asset’s source volume must have **Assets in this volume have public URLs** enabled and a **Base URL** setting. Otherwise, the result will always be empty.

If you only want the first related asset, call [one()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-one) instead and make sure it returned something:

TwigPHP

```
{% set rel = entry.myFieldHandle.one() %}
{% if rel %}
  <p><a href="{{ rel.url }}">{{ rel.filename }}</a></p>
{% endif %}
```

```
$rel = $entry->myFieldHandle->one();
if ($rel) {
    // do something with $rel->url and $rel->filename
}
```

If you need to check for related assets without fetching them, you can call [exists()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-exists):

TwigPHP

```
{% if entry.myFieldHandle.exists() %}
  <p>There are related assets!</p>
{% endif %}
```

```
if ($entry->myFieldHandle->exists()) {
    // do something with related assets
}
```

You can set [parameters](docs_5x__reference__element-types__assets.md#parameters) on the asset query as well. For example, to ensure that only images are returned, you can set the [kind](docs_5x__reference__element-types__assets.md#kind) param:

TwigPHP

```
{% set relatedAssets = entry.myFieldHandle
  .kind('image')
  .all() %}
```

```
$relatedAssets = $entry->myFieldHandle
    ->kind('image')
    ->all();
```

### [#](#saving-assets-fields)Saving Assets Fields

If you have an element form, such as an [entry form  (opens new window)](https://craftcms.com/knowledge-base/entry-form), that needs to contain an Assets field, you will need to submit your field value as a list of asset IDs in the order you want them to be related.

For example, you could create a list of checkboxes for each of the possible relations:

```
{# Include a hidden input first so Craft knows to update the existing value
   if no checkboxes are checked. #}
{{ hiddenInput('fields[myFieldHandle]', '') }}

{# Get all of the possible asset options #}
{% set possibleAssets = craft.assets()
  .volume('siteAssets')
  .kind('image')
  .orderBy('filename ASC')
  .withTransforms([{ width: 100, height: 100 }])
  .all() %}

{# Get the currently related asset IDs #}
{% set relatedAssetIds = entry is defined
  ? entry.myFieldHandle.ids()
  : [] %}

<ul>
  {% for possibleAsset in possibleAssets %}
    <li>
      <label>
        {{ input(
          'checkbox',
          'fields[myFieldHandle][]',
          possibleAsset.id,
          { checked: possibleAsset.id in relatedAssetIds }
        ) }}
        {{ tag('img', { src: possibleAsset.url }) }}
        {{ possibleAsset.getImg({ width: 100, height: 100 }) }}
        {{ possibleAsset.filename }}
      </label>
    </li>
  {% endfor %}
</ul>
```

You could then make the checkbox list sortable, so users have control over the order of related assets.

#### [#](#creating-new-assets)Creating New Assets

Assets fields can handle new file uploads as well:

```
{{ input('file', 'fields[myFieldHandle][]', options={
  multiple: true,
}) }}
```

Don’t forget to set `enctype="multipart/form-data"` on your `<form>` tag so your browser knows to submit the form as a multipart request.

Alternatively, you can submit base64-encoded file data, which the Assets field will decode and treat as an uploaded file. To do that, you have to specify both the data and the filename like this:

```
{{ hiddenInput(
  'fields[myFieldHandle][data][]',
  'data:image/jpeg;base64,my-base64-data'
) }}
{{ hiddenInput('fields[myFieldHandle][filename][]', 'myFile.ext') }}
```

However you upload new assets, you may want to maintain any that already exist on the field and append new ones to the set instead of replacing it.

You can do this by passing each of the related asset IDs in the field data array, like we are here with hidden form inputs:

```
{# Provide each existing asset ID in the array of field data #}
{% for relatedAssetId in entry.myFieldHandle.ids() %}
  {{ input(
    'hidden',
    'fields[myFieldHandle][]',
    relatedAssetId
  ) }}
{% endfor %}

{{ input('file', 'fields[myFieldHandle][]', options={
  multiple: true,
}) }}
```

### [#](#graphql)GraphQL

[Custom Fields in GraphQL
→

Get familiar with using custom fields in GraphQL queries.](docs_5x__development__graphql.md#custom-fields)

Assets related via an assets field can be queried by via the field’s handle. You must make one or more sub-selections:

```
query News {
  entries(section: "blog") {
    ... on post_Entry {
      featureImage {
        id
        filename
        url
      }
    }
  }
}
```

The special [`@transform` directive](docs_5x__development__graphql.md#the-transform-directive) allows you to apply [image transforms](docs_5x__development__image-transforms.md#graphql) to assets, on-the-fly. The directive can be used on the entire asset field, or many subfields thereof:

```
query HomepageContent {
  hero: entries(section: "blog", limit: 1) {
    ... on post_Entry {
      featureImage@transform(handle: "hero") {
        url
        filename
        width
        height
      }
    }
  }

  feed: entries(section: "blog", offset: 1) {
    ... on post_Entry {
      featureImage {
        url@transform(handle: "thumbnail")
        filename
        width
        height
      }
    }
  }
}
```

## [#](#see-also)See Also

- [Asset Queries](docs_5x__reference__element-types__assets.md#querying-assets)
- [craft\elements\Asset  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-asset.html)
- [Relations](docs_5x__system__relations.md)

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/field-types/assets.md)
