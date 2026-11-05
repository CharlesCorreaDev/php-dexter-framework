# Assets | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/element-types/assets

---

# Assets

- ### On this Page

  - [Volumes](docs_5x__reference__element-types__assets.md#volumes)
  - [Filesystems](docs_5x__reference__element-types__assets.md#filesystems)
  - [Asset Custom Fields](docs_5x__reference__element-types__assets.md#asset-custom-fields)
  - [Assets Page](docs_5x__reference__element-types__assets.md#assets-page)
  - [Updating Asset Indexes](docs_5x__reference__element-types__assets.md#updating-asset-indexes)
  - [Image Transforms](docs_5x__reference__element-types__assets.md#image-transforms)
  - [Image Editor](docs_5x__reference__element-types__assets.md#image-editor)
  - [Querying Assets](docs_5x__reference__element-types__assets.md#querying-assets)

Craft lets you manage media and document files (“assets”) just like entries and other content types. Assets can live anywhere—a directory on the web server, or a remote storage service like Amazon S3.

Assets are one of Craft’s built-in [element types](docs_5x__system__elements.md), and are represented throughout the application as instances of [craft\elements\Asset  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-asset.html). You can attach them to other elements via the [assets field](docs_5x__reference__field-types__assets.md), and get their URLs, ready-made `<img>` tags, or `srcset`s in your templates.

## [#](#volumes)Volumes

Assets are organized into **volumes**, each of which sits on top of a [filesystem](#filesystems) and carries its own permissions and [content](#asset-custom-fields) options. Volumes are configured from

1. Settings→
2. Assets

.

When setting up a volume, you will be asked to choose or create its underlying **Filesystem**.

my-craft-project.ddev.site/admin/assets/volumes/new

![Screenshot of the volume settings screen in Craft with a slide-out for filesystem settings](/docs/assets/img/assets-new-volume-fs.fcea2672.png)

You can create a filesystem without leaving the volume screen.

Volumes can store their [transforms](#image-transforms) alongside the original images, or in a separate filesystem altogether. This is useful for private volumes or filesystems that still benefit from having previews available in the control panel.

## [#](#filesystems)Filesystems

Filesystems decouple the minutiae of storing and serving actual files from asset management (organization, permissions, and content).

All filesystems support the following options:

- **Files in this filesystem have public URLs**: Whether Craft should bother to generate URLs for the assets.
- **Base URL**: The public URL to files in this filesystem.

A filesystem’s **Base URL** can be set to an environment variable, or begin with an alias. [Read more](docs_5x__configure.md#control-panel-settings) about special configuration values.

In the screenshot above, we’re using a `@cdn` [alias](docs_5x__configure.md#aliases) so that the URL can be updated across multiple filesystems with a single change in our general config file—or even with an environment variable, if the alias gets *its* value from one!

We strongly discourage using the automatically-determined `@web` alias as a **Base URL** in [local](#local-filesystems) filesystems, as it can differ between sites.
Assets should generally have a single, stable URL.

Multiple volumes can share a single filesystem, so long as they each have a unique and non-overlapping **Base Path**. If another volume is already mounted at the top level of a filesystem, that filesystem won’t be available for selection.

### [#](#local-filesystems)Local Filesystems

Out of the box, the only type of filesystem Craft supports is a “Local” directory, which stores files on the same server that PHP is running. Local filesystems have one additional setting:

- **Base Path**: Set the filesystem’s root directory on the server. This must be within your web root for public URLs to work, and Craft/PHP must be able to write to it.

The **Base Path** can be set to an environment variable or begin with an alias, just like the **Base URL**.

### [#](#remote-filesystems)Remote Filesystems

If you would prefer to store your assets on a remote storage service like Amazon S3, you can install a plugin that provides the appropriate filesystem adapter.

- [Amazon S3  (opens new window)](https://plugins.craftcms.com/aws-s3) (first party)
- [Google Cloud Storage  (opens new window)](https://plugins.craftcms.com/google-cloud) (first party)
- [Microsoft Azure Blob Storage  (opens new window)](https://plugins.craftcms.com/azure-blob) (first party)
- [DigitalOcean Spaces  (opens new window)](https://plugins.craftcms.com/dospaces) (Værsågod)

The settings for each type of filesystem will differ based on the provider, and may involve secrets. We recommend using [special config values](docs_5x__configure.md#control-panel-settings) to store and use these, securely.

Discover more remote storage options in the [Assets category  (opens new window)](https://plugins.craftcms.com/categories/assets?craft5) of the Plugin Store!

## [#](#asset-custom-fields)Asset Custom Fields

Each volume has its own [field layout](docs_5x__system__fields.md#field-layouts), configured on its setting screen under the **Field Layout** tab.

### [#](#alt-text)`alt` Text

Asset field layouts can include the native **Alternative Text** 1 field layout element:

my-craft-project.ddev.site/admin/assets/volumes/1

![The field layout designer for an asset element. The content pane includes a Title field and an Alternative Text field.](/docs/assets/img/assets-field-layout.5a0f862d.png)

1

A native `alt` attribute is provided to standardize the inclusion of assistive text on `img` elements that Craft generates—especially in the control panel. Alt text is also added when outputting an image with `asset.getImg()` in Twig. You can always render `img` elements yourself, using any [custom field](docs_5x__system__fields.md) values, attributes, or combination thereof.

We strongly recommend adding the native attribute to your volumes’ field layouts; alt text is a critical interface for many users, and essential for anyone using assistive technology in the control panel. Well-considered image descriptions (and titles!) have the added benefit of making search and discovery of previously-uploaded images much easier. The WCAG [advises against  (opens new window)](https://www.w3.org/TR/2015/REC-ATAG20-20150924/Overview.html#gl_b23) automatically repairing alt text with “generic or irrelevant strings,” including the name of the file (which asset titles are generated from), so Craft omits the `alt` attribute when using `asset.getImg()` if no explicit text is available.

**Alternative Text** is also displayed as a “transcript” beneath video previews, in the control panel.

[Authoring alternative text
→

Learn more about setting up a smart alternative text authoring experience.](docs_5x__development__accessibility.md)

Do you have existing `alt` text stored in a different field? You can migrate it to the native attribute with the [`resave/assets` command](docs_5x__reference__cli.md#resave):

```
php craft resave/assets --set alt --to myAltTextField --if-empty
```

After running this command in your live environment, replace any usages in your templates, remove the field from your volumes’ field layouts, and deploy the changes.

### [#](#generated-fields)Generated Fields [5.8.0+](https://github.com/craftcms/cms/blob/5.8.0/CHANGELOG.md "Generated fields on asset volumes was first available in version 5.8.0 of Craft.")

Below the volume’s field layout designer, you can create any number of [generated fields](docs_5x__system__elements.md#generated-fields) to capture additional values via [object templates](docs_5x__system__object-templates.md).

## [#](#assets-page)Assets Page

After creating your first volume, an **Assets** item will be added to the main control panel navigation. Clicking on it will take you to the Assets page, which shows a list of all of your volumes in the left sidebar, and the selected volume’s files and subfolders in the main content area.

In addition to the normal actions available in [element indexes](docs_5x__system__elements.md#indexes), asset indexes support:

- Uploading new files using the **Upload files** toolbar button or by dragging files from your desktop;
- Creating and organizing [folders](#managing-subfolders) within a volume;
- Transferring a file from one volume to another by dragging-and-dropping it from the element index into a folder in the sources sidebar (or using the **Move…** element action);

Special [element actions](docs_5x__system__elements.md#actions) are also available for single assets:

- Rename an existing file;
- Replace a file with a new one;
- Open the [image editor](#image-editor) (images only);
- Preview a file;
- Copy a public URL to a file;
- Copy a reference tag to a file;
- Move the selected assets to a new volume and/or folder;

### [#](#managing-subfolders)Managing Subfolders

my-craft-project.ddev.site/admin/assets/uploads

![Asset element index showing subfolder creation and drag-and-drop interface for organizing files](/docs/assets/img/assets-index.c802dee4.png)

1

2

3

4

Volumes are initialized with only a root folder, indicated by a “home” icon in the breadcrumbs. Subfolders can be created by clicking the caret 1 next to the current folder.

The new subfolder will appear in-line 2 with the assets in the current folder. Assets and folders can be moved in a few different ways:

- Drag-and-drop 3 one or more assets onto a folder in the table or thumbnail view *or* onto a breadcrumb 1 segment;
- Select assets with the checkboxes in each row, choose **Move…** from the actions 4 menu, and pick a destination folder;
- An entire folder can also be moved using the caret next to its breadcrumb;

The first method is a great way to quickly move assets into a parent directory, or back to the volume’s root folder.

You can automatically organize assets when they are uploaded via an [assets field](docs_5x__reference__field-types__assets.md) with the **Restrict assets to a single location** setting.

## [#](#updating-asset-indexes)Updating Asset Indexes

If any files are ever added, modified, or deleted outside of Craft (such as over FTP), you’ll need to tell Craft to update its indexes for the volume. You can do that from

1. Utilities→
2. Asset Indexes

, or using the [`index-assets` console commands](docs_5x__reference__cli.md#index-assets):

```
# Re-index all volumes:
php craft index-assets/all

# Re-index a specific volume:
php craft index-assets/one myVolumeHandle

# See available options:
php craft index-assets/one --help
```

Both tools provide the option to **Cache Remote Images**. If you don’t have any [remote filesystems](#remote-filesystems) (or the volume doesn’t contain any transformable files) you can safely ignore it.

Enabling the setting will cause the indexing process to take longer to complete (and may consume a great deal of local disk space), but it can speed up subsequent [image transformations](docs_5x__development__image-transforms.md).

This option will have limited utility on ephemeral filesystems, as any downloaded images will be erased the next time it is restarted.

Indexing assets is also a quick way to import a preexisting directory of files with Craft: with a fresh [volume](#volumes), drop the files anywhere within its **Base Path**, then index it to create the corresponding asset elements.

## [#](#image-transforms)Image Transforms

To help serve optimized images, Craft supports predefined (or “named”) and ad-hoc [image transformations](docs_5x__development__image-transforms.md).

## [#](#image-editor)Image Editor

Craft provides a built-in image editor for making changes to your images. You can crop, straighten, rotate, and flip your images, as well as choose their [focal point](#focal-points).

To launch the image editor, double-click an image (either on the Assets page or from an [Assets field](docs_5x__reference__field-types__assets.md)) and press **Edit** in the top-right of the image preview area in the HUD. Alternatively, you can select an asset on the [Assets page](#assets-page) and choose **Edit image** from the task menu (

Gear icon

).

### [#](#focal-points)Focal Points

Set focal points on your images so Craft knows which part of the image to prioritize when determining how to crop your images for [image transforms](docs_5x__development__image-transforms.md). Focal points take precedence over the transform’s Crop Position setting.

To set a focal point, open the Image Editor and click on the Focal Point button. A circular icon will appear in the center of your image. Drag it to wherever you want the image’s focal point to be.

To remove the focal point, click on the Focal Point button again.

Like other changes in the Image Editor, focal points won’t take effect until you’ve saved the image.

## [#](#querying-assets)Querying Assets

You can fetch assets in your templates or PHP code using **asset queries**.

TwigPHP

```
{# Create a new asset query #}
{% set myAssetQuery = craft.assets() %}
```

```
// Create a new asset query
$myAssetQuery = \craft\elements\Asset::find();
```

Once you’ve created an asset query, you can set [parameters](#parameters) on it to narrow down the results, and then [execute it](docs_5x__development__element-queries.md#executing-element-queries) by calling `.all()`. An array of [Asset  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-asset.html) objects will be returned.

[Introduction to Element Queries
→

Learn more about how element queries work.](docs_5x__development__element-queries.md)

### [#](#example)Example

We can display a list of thumbnails for images in a “Photos” volume by doing the following:

1. Create an asset query with `craft.assets()`.
2. Set the [volume](#volume) and [kind](#kind) parameters on it.
3. Fetch the assets with `.all()`.
4. Loop through the assets using a [for  (opens new window)](https://twig.symfony.com/doc/3.x/tags/for.html) tag to create the thumbnail list HTML.

```
{# Create an asset query with the 'volume' and 'kind' parameters #}
{% set myAssetQuery = craft.assets()
  .volume('photos')
  .kind('image') %}

{# Fetch the assets #}
{% set images = myAssetQuery.all() %}

{# Display the thumbnail list #}
<ul>
  {% for image in images %}
    <li><img src="{{ image.getUrl('thumb') }}" alt="{{ image.alt }}"></li>
  {% endfor %}
</ul>
```

When using `asset.url` or `asset.getUrl()`, the asset’s source volume must have “Assets in this volume have public URLs” enabled and a “Base URL” setting. Otherwise, the result will always be empty.

You can cache-bust asset URLs automatically by enabling the [revAssetUrls](docs_5x__reference__config__general.md#revasseturls) config setting, or handle them individually by using Craft’s [`url()` function](docs_5x__reference__twig__functions.md#url) to append a query parameter with the last-modified timestamp:

```
<img src="{{ url(image.getUrl('thumb'), { v: image.dateModified.timestamp }) }}">
{# <img src="https://my-project.tld/images/_thumb/bar.jpg?v=1614374621"> #}
```

### [#](#parameters)Parameters

Asset queries support the following parameters:

| Param | Description |
| --- | --- |
| [andNotRelatedTo](#andnotrelatedto) | Narrows the query results to only assets that are not related to certain other elements. |
| [andRelatedTo](#andrelatedto) | Narrows the query results to only assets that are related to certain other elements. |
| [andWith](#andwith) | Causes the query to return matching assets eager-loaded with related elements, in addition to the elements that were already specified by [with](#with). |
| [asArray](#asarray) | Causes the query to return matching assets as arrays of data, rather than [Asset  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-asset.html) objects. |
| [cache](#cache) | Enables query cache for this Query. |
| [canonicalsOnly](#canonicalsonly) | Narrows the query results to only canonical elements, including elements that reference another canonical element via `canonicalId` so long as they aren’t a draft. |
| [clearCachedResult](#clearcachedresult) | Clears the [cached result  (opens new window)](docs_5x__development__element-queries.md#cache). |
| [collectIds](#collectids) | Executes the query and returns the IDs of the resulting elements as a collection. |
| [dateCreated](#datecreated) | Narrows the query results based on the assets’ creation dates. |
| [dateModified](#datemodified) | Narrows the query results based on the assets’ files’ last-modified dates. |
| [dateUpdated](#dateupdated) | Narrows the query results based on the assets’ last-updated dates. |
| [eagerly](#eagerly) | Causes the query to be used to eager-load results for the query’s source element and any other elements in its collection. |
| [filename](#filename) | Narrows the query results based on the assets’ filenames. |
| [fixedOrder](#fixedorder) | Causes the query results to be returned in the order specified by [id](#id). |
| [folderId](#folderid) | Narrows the query results based on the folders the assets belong to, per the folders’ IDs. |
| [folderPath](#folderpath) | Narrows the query results based on the folders the assets belong to, per the folders’ paths. |
| [getFieldLayouts](#getfieldlayouts) | Returns the field layouts that could be associated with the resulting elements. |
| [hasAlt](#hasalt) | Narrows the query results based on whether the assets have alternative text. |
| [height](#height) | Narrows the query results based on the assets’ image heights. |
| [id](#id) | Narrows the query results based on the assets’ IDs. |
| [ignorePlaceholders](#ignoreplaceholders) | Causes the query to return matching assets as they are stored in the database, ignoring matching placeholder elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement). |
| [inBulkOp](#inbulkop) | Narrows the query results to only assets that were involved in a bulk element operation. |
| [inReverse](#inreverse) | Causes the query results to be returned in reverse order. |
| [includeSubfolders](#includesubfolders) | Broadens the query results to include assets from any of the subfolders of the folder specified by [folderId](#folderid). |
| [kind](#kind) | Narrows the query results based on the assets’ file kinds. |
| [language](#language) | Determines which site(s) the assets should be queried in, based on their language. |
| [limit](#limit) | Determines the number of assets that should be returned. |
| [notRelatedTo](#notrelatedto) | Narrows the query results to only assets that are not related to certain other elements. |
| [offset](#offset) | Determines how many assets should be skipped in the results. |
| [orderBy](#orderby) | Determines the order that the assets should be returned in. (If empty, defaults to `dateCreated DESC, elements.id`.) |
| [preferSites](#prefersites) | If [unique](#unique) is set, this determines which site should be selected when querying multi-site elements. |
| [prepForEagerLoading](#prepforeagerloading) | Prepares the query for lazy eager loading. |
| [prepareSubquery](#preparesubquery) | Prepares the element query and returns its subquery (which determines what elements will be returned). |
| [relatedTo](#relatedto) | Narrows the query results to only assets that are related to certain other elements. |
| [render](#render) | Executes the query and renders the resulting elements using their partial templates. |
| [savable](#savable) | Sets the [savable  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-assetquery.html#property-savable) property. |
| [search](#search) | Narrows the query results to only assets that match a search query. |
| [site](#site) | Determines which site(s) the assets should be queried in. |
| [siteId](#siteid) | Determines which site(s) the assets should be queried in, per the site’s ID. |
| [siteSettingsId](#sitesettingsid) | Narrows the query results based on the assets’ IDs in the `elements_sites` table. |
| [size](#size) | Narrows the query results based on the assets’ file sizes (in bytes). |
| [title](#title) | Narrows the query results based on the assets’ titles. |
| [trashed](#trashed) | Narrows the query results to only assets that have been soft-deleted. |
| [uid](#uid) | Narrows the query results based on the assets’ UIDs. |
| [unique](#unique) | Determines whether only elements with unique IDs should be returned by the query. |
| [uploader](#uploader) | Narrows the query results based on the user the assets were uploaded by, per the user’s IDs. |
| [volume](#volume) | Narrows the query results based on the volume the assets belong to. |
| [volumeId](#volumeid) | Narrows the query results based on the volumes the assets belong to, per the volumes’ IDs. |
| [wasCountEagerLoaded](#wascounteagerloaded) | Returns whether the query result count was already eager loaded by the query's source element. |
| [wasEagerLoaded](#waseagerloaded) | Returns whether the query results were already eager loaded by the query's source element. |
| [width](#width) | Narrows the query results based on the assets’ image widths. |
| [with](#with) | Causes the query to return matching assets eager-loaded with related elements. |
| [withCustomFields](#withcustomfields) | Sets whether custom fields should be factored into the query. |
| [withProvisionalDrafts](#withprovisionaldrafts) | Causes the query to return provisional drafts for the matching elements, when they exist for the current user. |
| [withTransforms](#withtransforms) | Causes the query to return matching assets eager-loaded with image transform indexes. |

#### [#](#andnotrelatedto)`andNotRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andnotrelatedto)

Narrows the query results to only assets that are not related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all assets that are related to myCategoryA and not myCategoryB #}
{% set assets = craft.assets()
  .relatedTo(myCategoryA)
  .andNotRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all assets that are related to $myCategoryA and not $myCategoryB
$assets = \craft\elements\Asset::find()
    ->relatedTo($myCategoryA)
    ->andNotRelatedTo($myCategoryB)
    ->all();
```

#### [#](#andrelatedto)`andRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andrelatedto)

Narrows the query results to only assets that are related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all assets that are related to myCategoryA and myCategoryB #}
{% set assets = craft.assets()
  .relatedTo(myCategoryA)
  .andRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all assets that are related to $myCategoryA and $myCategoryB
$assets = \craft\elements\Asset::find()
    ->relatedTo($myCategoryA)
    ->andRelatedTo($myCategoryB)
    ->all();
```

#### [#](#andwith)`andWith`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andwith)

Causes the query to return matching assets eager-loaded with related elements, in addition to the elements that were already specified by [with](#with).

.

#### [#](#asarray)`asArray`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-asarray)

Causes the query to return matching assets as arrays of data, rather than [Asset  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-asset.html) objects.

TwigPHP

```
{# Fetch assets as arrays #}
{% set assets = craft.assets()
  .asArray()
  .all() %}
```

```
// Fetch assets as arrays
$assets = \craft\elements\Asset::find()
    ->asArray()
    ->all();
```

#### [#](#cache)`cache`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-cache)

Enables query cache for this Query.

#### [#](#canonicalsonly)`canonicalsOnly`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-canonicalsonly)

Narrows the query results to only canonical elements, including elements
that reference another canonical element via `canonicalId` so long as they
aren’t a draft.

Unpublished drafts can be included as well if `drafts(null)` and
`draftOf(false)` are also passed.

#### [#](#clearcachedresult)`clearCachedResult`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-clearcachedresult)

Clears the [cached result  (opens new window)](docs_5x__development__element-queries.md#cache).

#### [#](#collectids)`collectIds`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-collectids)

Executes the query and returns the IDs of the resulting elements as a collection.

#### [#](#datecreated)`dateCreated`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-datecreated)

Narrows the query results based on the assets’ creation dates.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `'>= 2018-04-01'` | that were created on or after 2018-04-01. |
| `'< 2018-05-01'` | that were created before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were created between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were created at midnight of the specified relative date. |

TwigPHP

```
{# Fetch assets created last month #}
{% set start = date('first day of last month')|atom %}
{% set end = date('first day of this month')|atom %}

{% set assets = craft.assets()
  .dateCreated(['and', ">= #{start}", "< #{end}"])
  .all() %}
```

```
// Fetch assets created last month
$start = (new \DateTime('first day of last month'))->format(\DateTime::ATOM);
$end = (new \DateTime('first day of this month'))->format(\DateTime::ATOM);

$assets = \craft\elements\Asset::find()
    ->dateCreated(['and', ">= {$start}", "< {$end}"])
    ->all();
```

#### [#](#datemodified)`dateModified`

Narrows the query results based on the assets’ files’ last-modified dates.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `'>= 2018-04-01'` | that were modified on or after 2018-04-01. |
| `'< 2018-05-01'` | that were modified before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were modified between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were modified at midnight of the specified relative date. |

TwigPHP

```
{# Fetch assets modified in the last month #}
{% set start = date('30 days ago')|atom %}

{% set assets = craft.assets()
  .dateModified(">= #{start}")
  .all() %}
```

```
// Fetch assets modified in the last month
$start = (new \DateTime('30 days ago'))->format(\DateTime::ATOM);

$assets = \craft\elements\Asset::find()
    ->dateModified(">= {$start}")
    ->all();
```

#### [#](#dateupdated)`dateUpdated`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-dateupdated)

Narrows the query results based on the assets’ last-updated dates.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `'>= 2018-04-01'` | that were updated on or after 2018-04-01. |
| `'< 2018-05-01'` | that were updated before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were updated between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were updated at midnight of the specified relative date. |

TwigPHP

```
{# Fetch assets updated in the last week #}
{% set lastWeek = date('1 week ago')|atom %}

{% set assets = craft.assets()
  .dateUpdated(">= #{lastWeek}")
  .all() %}
```

```
// Fetch assets updated in the last week
$lastWeek = (new \DateTime('1 week ago'))->format(\DateTime::ATOM);

$assets = \craft\elements\Asset::find()
    ->dateUpdated(">= {$lastWeek}")
    ->all();
```

#### [#](#eagerly)`eagerly`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-eagerly)

Causes the query to be used to eager-load results for the query’s source element
and any other elements in its collection.

#### [#](#filename)`filename`

Narrows the query results based on the assets’ filenames.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `'foo.jpg'` | with a filename of `foo.jpg`. |
| `'foo*'` | with a filename that begins with `foo`. |
| `'*.jpg'` | with a filename that ends with `.jpg`. |
| `'*foo*'` | with a filename that contains `foo`. |
| `'not *foo*'` | with a filename that doesn’t contain `foo`. |
| `['*foo*', '*bar*']` | with a filename that contains `foo` or `bar`. |
| `['not', '*foo*', '*bar*']` | with a filename that doesn’t contain `foo` or `bar`. |

TwigPHP

```
{# Fetch all the hi-res images #}
{% set assets = craft.assets()
  .filename('*@2x*')
  .all() %}
```

```
// Fetch all the hi-res images
$assets = \craft\elements\Asset::find()
    ->filename('*@2x*')
    ->all();
```

#### [#](#fixedorder)`fixedOrder`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-fixedorder)

Causes the query results to be returned in the order specified by [id](#id).

If no IDs were passed to [id](#id), setting this to `true` will result in an empty result set.

TwigPHP

```
{# Fetch assets in a specific order #}
{% set assets = craft.assets()
  .id([1, 2, 3, 4, 5])
  .fixedOrder()
  .all() %}
```

```
// Fetch assets in a specific order
$assets = \craft\elements\Asset::find()
    ->id([1, 2, 3, 4, 5])
    ->fixedOrder()
    ->all();
```

#### [#](#folderid)`folderId`

Narrows the query results based on the folders the assets belong to, per the folders’ IDs.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `1` | in a folder with an ID of 1. |
| `'not 1'` | not in a folder with an ID of 1. |
| `[1, 2]` | in a folder with an ID of 1 or 2. |
| `['not', 1, 2]` | not in a folder with an ID of 1 or 2. |

TwigPHP

```
{# Fetch assets in the folder with an ID of 1 #}
{% set assets = craft.assets()
  .folderId(1)
  .all() %}
```

```
// Fetch assets in the folder with an ID of 1
$assets = \craft\elements\Asset::find()
    ->folderId(1)
    ->all();
```

This can be combined with [includeSubfolders](#includesubfolders) if you want to include assets in all the subfolders of a certain folder.

#### [#](#folderpath)`folderPath`

Narrows the query results based on the folders the assets belong to, per the folders’ paths.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `foo/` | in a `foo/` folder (excluding nested folders). |
| `foo/*` | in a `foo/` folder (including nested folders). |
| `'not foo/*'` | not in a `foo/` folder (including nested folders). |
| `['foo/*', 'bar/*']` | in a `foo/` or `bar/` folder (including nested folders). |
| `['not', 'foo/*', 'bar/*']` | not in a `foo/` or `bar/` folder (including nested folders). |

TwigPHP

```
{# Fetch assets in the foo/ folder or its nested folders #}
{% set assets = craft.assets()
  .folderPath('foo/*')
  .all() %}
```

```
// Fetch assets in the foo/ folder or its nested folders
$assets = \craft\elements\Asset::find()
    ->folderPath('foo/*')
    ->all();
```

#### [#](#getfieldlayouts)`getFieldLayouts`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-getfieldlayouts)

Returns the field layouts that could be associated with the resulting elements.

#### [#](#hasalt)`hasAlt`

Narrows the query results based on whether the assets have alternative text.

#### [#](#height)`height`

Narrows the query results based on the assets’ image heights.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `100` | with a height of 100. |
| `'>= 100'` | with a height of at least 100. |
| `['>= 100', '<= 1000']` | with a height between 100 and 1,000. |

TwigPHP

```
{# Fetch XL images #}
{% set assets = craft.assets()
  .kind('image')
  .height('>= 1000')
  .all() %}
```

```
// Fetch XL images
$assets = \craft\elements\Asset::find()
    ->kind('image')
    ->height('>= 1000')
    ->all();
```

#### [#](#id)`id`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-id)

Narrows the query results based on the assets’ IDs.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `1` | with an ID of 1. |
| `'not 1'` | not with an ID of 1. |
| `[1, 2]` | with an ID of 1 or 2. |
| `['not', 1, 2]` | not with an ID of 1 or 2. |

TwigPHP

```
{# Fetch the asset by its ID #}
{% set asset = craft.assets()
  .id(1)
  .one() %}
```

```
// Fetch the asset by its ID
$asset = \craft\elements\Asset::find()
    ->id(1)
    ->one();
```

This can be combined with [fixedOrder](#fixedorder) if you want the results to be returned in a specific order.

#### [#](#ignoreplaceholders)`ignorePlaceholders`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-ignoreplaceholders)

Causes the query to return matching assets as they are stored in the database, ignoring matching placeholder
elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement).

#### [#](#inbulkop)`inBulkOp`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inbulkop)

Narrows the query results to only assets that were involved in a bulk element operation.

#### [#](#inreverse)`inReverse`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inreverse)

Causes the query results to be returned in reverse order.

TwigPHP

```
{# Fetch assets in reverse #}
{% set assets = craft.assets()
  .inReverse()
  .all() %}
```

```
// Fetch assets in reverse
$assets = \craft\elements\Asset::find()
    ->inReverse()
    ->all();
```

#### [#](#includesubfolders)`includeSubfolders`

Broadens the query results to include assets from any of the subfolders of the folder specified by [folderId](#folderid).

TwigPHP

```
{# Fetch assets in the folder with an ID of 1 (including its subfolders) #}
{% set assets = craft.assets()
  .folderId(1)
  .includeSubfolders()
  .all() %}
```

```
// Fetch assets in the folder with an ID of 1 (including its subfolders)
$assets = \craft\elements\Asset::find()
    ->folderId(1)
    ->includeSubfolders()
    ->all();
```

This will only work if [folderId](#folderid) was set to a single folder ID.

#### [#](#kind)`kind`

Narrows the query results based on the assets’ file kinds.

Supported file kinds:

- `access`
- `audio`
- `compressed`
- `excel`
- `flash`
- `html`
- `illustrator`
- `image`
- `javascript`
- `json`
- `pdf`
- `photoshop`
- `php`
- `powerpoint`
- `text`
- `video`
- `word`
- `xml`
- `unknown`

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `'image'` | with a file kind of `image`. |
| `'not image'` | not with a file kind of `image`.. |
| `['image', 'pdf']` | with a file kind of `image` or `pdf`. |
| `['not', 'image', 'pdf']` | not with a file kind of `image` or `pdf`. |

TwigPHP

```
{# Fetch all the images #}
{% set assets = craft.assets()
  .kind('image')
  .all() %}
```

```
// Fetch all the images
$assets = \craft\elements\Asset::find()
    ->kind('image')
    ->all();
```

#### [#](#language)`language`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-language)

Determines which site(s) the assets should be queried in, based on their language.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `'en'` | from sites with a language of `en`. |
| `['en-GB', 'en-US']` | from sites with a language of `en-GB` or `en-US`. |
| `['not', 'en-GB', 'en-US']` | not in sites with a language of `en-GB` or `en-US`. |

Elements that belong to multiple sites will be returned multiple times by default. If you
only want unique elements to be returned, use [unique](#unique) in conjunction with this.

TwigPHP

```
{# Fetch assets from English sites #}
{% set assets = craft.assets()
  .language('en')
  .all() %}
```

```
// Fetch assets from English sites
$assets = \craft\elements\Asset::find()
    ->language('en')
    ->all();
```

#### [#](#limit)`limit`

[Defined by `yii\db\QueryTrait`](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#limit()-detail)

Determines the number of assets that should be returned.

TwigPHP

```
{# Fetch up to 10 assets  #}
{% set assets = craft.assets()
  .limit(10)
  .all() %}
```

```
// Fetch up to 10 assets
$assets = \craft\elements\Asset::find()
    ->limit(10)
    ->all();
```

#### [#](#notrelatedto)`notRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-notrelatedto)

Narrows the query results to only assets that are not related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all assets that are related to myEntry #}
{% set assets = craft.assets()
  .notRelatedTo(myEntry)
  .all() %}
```

```
// Fetch all assets that are related to $myEntry
$assets = \craft\elements\Asset::find()
    ->notRelatedTo($myEntry)
    ->all();
```

#### [#](#offset)`offset`

[Defined by `yii\db\QueryTrait`](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#offset()-detail)

Determines how many assets should be skipped in the results.

TwigPHP

```
{# Fetch all assets except for the first 3 #}
{% set assets = craft.assets()
  .offset(3)
  .all() %}
```

```
// Fetch all assets except for the first 3
$assets = \craft\elements\Asset::find()
    ->offset(3)
    ->all();
```

#### [#](#orderby)`orderBy`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-orderby)

Determines the order that the assets should be returned in. (If empty, defaults to `dateCreated DESC, elements.id`.)

TwigPHP

```
{# Fetch all assets in order of date created #}
{% set assets = craft.assets()
  .orderBy('dateCreated ASC')
  .all() %}
```

```
// Fetch all assets in order of date created
$assets = \craft\elements\Asset::find()
    ->orderBy('dateCreated ASC')
    ->all();
```

#### [#](#prefersites)`preferSites`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-prefersites)

If [unique](#unique) is set, this determines which site should be selected when querying multi-site elements.

For example, if element “Foo” exists in Site A and Site B, and element “Bar” exists in Site B and Site C,
and this is set to `['c', 'b', 'a']`, then Foo will be returned for Site B, and Bar will be returned
for Site C.

If this isn’t set, then preference goes to the current site.

TwigPHP

```
{# Fetch unique assets from Site A, or Site B if they don’t exist in Site A #}
{% set assets = craft.assets()
  .site('*')
  .unique()
  .preferSites(['a', 'b'])
  .all() %}
```

```
// Fetch unique assets from Site A, or Site B if they don’t exist in Site A
$assets = \craft\elements\Asset::find()
    ->site('*')
    ->unique()
    ->preferSites(['a', 'b'])
    ->all();
```

#### [#](#prepforeagerloading)`prepForEagerLoading`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-prepforeagerloading)

Prepares the query for lazy eager loading.

#### [#](#preparesubquery)`prepareSubquery`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-preparesubquery)

Prepares the element query and returns its subquery (which determines what elements will be returned).

#### [#](#relatedto)`relatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-relatedto)

Narrows the query results to only assets that are related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all assets that are related to myCategory #}
{% set assets = craft.assets()
  .relatedTo(myCategory)
  .all() %}
```

```
// Fetch all assets that are related to $myCategory
$assets = \craft\elements\Asset::find()
    ->relatedTo($myCategory)
    ->all();
```

#### [#](#render)`render`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-render)

Executes the query and renders the resulting elements using their partial templates.

If no partial template exists for an element, its string representation will be output instead.

#### [#](#savable)`savable`

Sets the [savable  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-db-assetquery.html#property-savable) property.

#### [#](#search)`search`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-search)

Narrows the query results to only assets that match a search query.

See [Searching  (opens new window)](docs_5x__system__searching.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Get the search query from the 'q' query string param #}
{% set searchQuery = craft.app.request.getQueryParam('q') %}

{# Fetch all assets that match the search query #}
{% set assets = craft.assets()
  .search(searchQuery)
  .all() %}
```

```
// Get the search query from the 'q' query string param
$searchQuery = \Craft::$app->request->getQueryParam('q');

// Fetch all assets that match the search query
$assets = \craft\elements\Asset::find()
    ->search($searchQuery)
    ->all();
```

#### [#](#site)`site`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-site)

Determines which site(s) the assets should be queried in.

The current site will be used by default.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `'foo'` | from the site with a handle of `foo`. |
| `['foo', 'bar']` | from a site with a handle of `foo` or `bar`. |
| `['not', 'foo', 'bar']` | not in a site with a handle of `foo` or `bar`. |
| a [craft\models\Site  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-site.html) object | from the site represented by the object. |
| `'*'` | from any site. |

If multiple sites are specified, elements that belong to multiple sites will be returned multiple times. If you
only want unique elements to be returned, use [unique](#unique) in conjunction with this.

TwigPHP

```
{# Fetch assets from the Foo site #}
{% set assets = craft.assets()
  .site('foo')
  .all() %}
```

```
// Fetch assets from the Foo site
$assets = \craft\elements\Asset::find()
    ->site('foo')
    ->all();
```

#### [#](#siteid)`siteId`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-siteid)

Determines which site(s) the assets should be queried in, per the site’s ID.

The current site will be used by default.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `1` | from the site with an ID of `1`. |
| `[1, 2]` | from a site with an ID of `1` or `2`. |
| `['not', 1, 2]` | not in a site with an ID of `1` or `2`. |
| `'*'` | from any site. |

TwigPHP

```
{# Fetch assets from the site with an ID of 1 #}
{% set assets = craft.assets()
  .siteId(1)
  .all() %}
```

```
// Fetch assets from the site with an ID of 1
$assets = \craft\elements\Asset::find()
    ->siteId(1)
    ->all();
```

#### [#](#sitesettingsid)`siteSettingsId`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-sitesettingsid)

Narrows the query results based on the assets’ IDs in the `elements_sites` table.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `1` | with an `elements_sites` ID of 1. |
| `'not 1'` | not with an `elements_sites` ID of 1. |
| `[1, 2]` | with an `elements_sites` ID of 1 or 2. |
| `['not', 1, 2]` | not with an `elements_sites` ID of 1 or 2. |

TwigPHP

```
{# Fetch the asset by its ID in the elements_sites table #}
{% set asset = craft.assets()
  .siteSettingsId(1)
  .one() %}
```

```
// Fetch the asset by its ID in the elements_sites table
$asset = \craft\elements\Asset::find()
    ->siteSettingsId(1)
    ->one();
```

#### [#](#size)`size`

Narrows the query results based on the assets’ file sizes (in bytes).

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `1000` | with a size of 1,000 bytes (1KB). |
| `'< 1000000'` | with a size of less than 1,000,000 bytes (1MB). |
| `['>= 1000', '< 1000000']` | with a size between 1KB and 1MB. |

TwigPHP

```
{# Fetch assets that are smaller than 1KB #}
{% set assets = craft.assets()
  .size('< 1000')
  .all() %}
```

```
// Fetch assets that are smaller than 1KB
$assets = \craft\elements\Asset::find()
    ->size('< 1000')
    ->all();
```

#### [#](#title)`title`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-title)

Narrows the query results based on the assets’ titles.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `'Foo'` | with a title of `Foo`. |
| `'Foo*'` | with a title that begins with `Foo`. |
| `'*Foo'` | with a title that ends with `Foo`. |
| `'*Foo*'` | with a title that contains `Foo`. |
| `'not *Foo*'` | with a title that doesn’t contain `Foo`. |
| `['*Foo*', '*Bar*']` | with a title that contains `Foo` or `Bar`. |
| `['not', '*Foo*', '*Bar*']` | with a title that doesn’t contain `Foo` or `Bar`. |

TwigPHP

```
{# Fetch assets with a title that contains "Foo" #}
{% set assets = craft.assets()
  .title('*Foo*')
  .all() %}
```

```
// Fetch assets with a title that contains "Foo"
$assets = \craft\elements\Asset::find()
    ->title('*Foo*')
    ->all();
```

#### [#](#trashed)`trashed`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-trashed)

Narrows the query results to only assets that have been soft-deleted.

TwigPHP

```
{# Fetch trashed assets #}
{% set assets = craft.assets()
  .trashed()
  .all() %}
```

```
// Fetch trashed assets
$assets = \craft\elements\Asset::find()
    ->trashed()
    ->all();
```

#### [#](#uid)`uid`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-uid)

Narrows the query results based on the assets’ UIDs.

TwigPHP

```
{# Fetch the asset by its UID #}
{% set asset = craft.assets()
  .uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
  .one() %}
```

```
// Fetch the asset by its UID
$asset = \craft\elements\Asset::find()
    ->uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
    ->one();
```

#### [#](#unique)`unique`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-unique)

Determines whether only elements with unique IDs should be returned by the query.

This should be used when querying elements from multiple sites at the same time, if “duplicate” results is not
desired.

TwigPHP

```
{# Fetch unique assets across all sites #}
{% set assets = craft.assets()
  .site('*')
  .unique()
  .all() %}
```

```
// Fetch unique assets across all sites
$assets = \craft\elements\Asset::find()
    ->site('*')
    ->unique()
    ->all();
```

#### [#](#uploader)`uploader`

Narrows the query results based on the user the assets were uploaded by, per the user’s IDs.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `1` | uploaded by the user with an ID of 1. |
| a [craft\elements\User  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-user.html) object | uploaded by the user represented by the object. |

TwigPHP

```
{# Fetch assets uploaded by the user with an ID of 1 #}
{% set assets = craft.assets()
  .uploader(1)
  .all() %}
```

```
// Fetch assets uploaded by the user with an ID of 1
$assets = \craft\elements\Asset::find()
    ->uploader(1)
    ->all();
```

#### [#](#volume)`volume`

Narrows the query results based on the volume the assets belong to.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `'foo'` | in a volume with a handle of `foo`. |
| `'not foo'` | not in a volume with a handle of `foo`. |
| `['foo', 'bar']` | in a volume with a handle of `foo` or `bar`. |
| `['not', 'foo', 'bar']` | not in a volume with a handle of `foo` or `bar`. |
| a [craft\models\Volume  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-volume.html) object | in a volume represented by the object. |

TwigPHP

```
{# Fetch assets in the Foo volume #}
{% set assets = craft.assets()
  .volume('foo')
  .all() %}
```

```
// Fetch assets in the Foo group
$assets = \craft\elements\Asset::find()
    ->volume('foo')
    ->all();
```

#### [#](#volumeid)`volumeId`

Narrows the query results based on the volumes the assets belong to, per the volumes’ IDs.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `1` | in a volume with an ID of 1. |
| `'not 1'` | not in a volume with an ID of 1. |
| `[1, 2]` | in a volume with an ID of 1 or 2. |
| `['not', 1, 2]` | not in a volume with an ID of 1 or 2. |
| `':empty:'` | that haven’t been stored in a volume yet |

TwigPHP

```
{# Fetch assets in the volume with an ID of 1 #}
{% set assets = craft.assets()
  .volumeId(1)
  .all() %}
```

```
// Fetch assets in the volume with an ID of 1
$assets = \craft\elements\Asset::find()
    ->volumeId(1)
    ->all();
```

#### [#](#wascounteagerloaded)`wasCountEagerLoaded`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-wascounteagerloaded)

Returns whether the query result count was already eager loaded by the query's source element.

#### [#](#waseagerloaded)`wasEagerLoaded`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-waseagerloaded)

Returns whether the query results were already eager loaded by the query's source element.

#### [#](#width)`width`

Narrows the query results based on the assets’ image widths.

Possible values include:

| Value | Fetches assets… |
| --- | --- |
| `100` | with a width of 100. |
| `'>= 100'` | with a width of at least 100. |
| `['>= 100', '<= 1000']` | with a width between 100 and 1,000. |

TwigPHP

```
{# Fetch XL images #}
{% set assets = craft.assets()
  .kind('image')
  .width('>= 1000')
  .all() %}
```

```
// Fetch XL images
$assets = \craft\elements\Asset::find()
    ->kind('image')
    ->width('>= 1000')
    ->all();
```

#### [#](#with)`with`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-with)

Causes the query to return matching assets eager-loaded with related elements.

See [Eager-Loading Elements  (opens new window)](docs_5x__development__eager-loading.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch assets eager-loaded with the "Related" field’s relations #}
{% set assets = craft.assets()
  .with(['related'])
  .all() %}
```

```
// Fetch assets eager-loaded with the "Related" field’s relations
$assets = \craft\elements\Asset::find()
    ->with(['related'])
    ->all();
```

#### [#](#withcustomfields)`withCustomFields`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-withcustomfields)

Sets whether custom fields should be factored into the query.

#### [#](#withprovisionaldrafts)`withProvisionalDrafts`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-withprovisionaldrafts)

Causes the query to return provisional drafts for the matching elements,
when they exist for the current user.

#### [#](#withtransforms)`withTransforms`

Causes the query to return matching assets eager-loaded with image transform indexes.

This can improve performance when displaying several image transforms at once, if the transforms
have already been generated.

Transforms can be specified as their handle or an object that contains `width` and/or `height` properties.

You can include `srcset`-style sizes (e.g. `100w` or `2x`) following a normal transform definition, for example:

TwigPHP

```
[{width: 1000, height: 600}, '1.5x', '2x', '3x']
```

```
[['width' => 1000, 'height' => 600], '1.5x', '2x', '3x']
```

When a `srcset`-style size is encountered, the preceding normal transform definition will be used as a
reference when determining the resulting transform dimensions.

TwigPHP

```
{# Fetch assets with the 'thumbnail' and 'hiResThumbnail' transform data preloaded #}
{% set assets = craft.assets()
  .kind('image')
  .withTransforms(['thumbnail', 'hiResThumbnail'])
  .all() %}
```

```
// Fetch assets with the 'thumbnail' and 'hiResThumbnail' transform data preloaded
$assets = \craft\elements\Asset::find()
    ->kind('image')
    ->withTransforms(['thumbnail', 'hiResThumbnail'])
    ->all();
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)

Parts of this page are generated or assembled by automations. While we greatly appreciate contributions to the documentation, [reporting automated content issues](https://github.com/craftcms/docs/issues/new/choose) will allow us to fix them at the source!
