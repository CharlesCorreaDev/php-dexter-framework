# Tags | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/element-types/tags

---

# Tags

- ### On this Page

  - [Tag Groups](docs_5x__reference__element-types__tags.md#tag-groups)
  - [Assigning Tags](docs_5x__reference__element-types__tags.md#assigning-tags)
  - [Querying Tags](docs_5x__reference__element-types__tags.md#querying-tags)

You can create folksonomies for your [entries](docs_5x__reference__element-types__entries.md), [users](docs_5x__reference__element-types__users.md), and [assets](docs_5x__reference__element-types__assets.md) using Tags. Tags are another type of [element](docs_5x__system__elements.md).

Migrating to Channels

With the release of Craft 4.4, we began consolidating features of [other element types](docs_5x__system__elements.md) into [entries](docs_5x__reference__element-types__entries.md).

A comparable [tags field](docs_5x__reference__field-types__tags.md) UI has not yet been introduced for entries. If you or your clients value this authoring experience, it is safe to continue using tags!

As part of that process, we introduced a [console command](docs_5x__reference__cli.md#entrify-categories) that can automate the conversion of tags to [channel sections](docs_5x__reference__element-types__entries.md#channels):

```
php craft entrify/tags myTagGroupHandle
```

Read more about this [transition  (opens new window)](https://craftcms.com/blog/entrification) on our blog.

## [#](#tag-groups)Tag Groups

Before you can create tags, you must create Tag Groups to contain them.

To create a new tag group, go to **Settings** → **Tags** and click **New Tag Group**.

Each tag group holds a unique set of tags, and lets you define a custom set of [fields](docs_5x__system__fields.md) that should be available to tags within the group. However, you don’t need to assign any fields to the Tag Group Field Layout in order to use the group.

There is no centralized editing view for tags (like there is for other element types), so fields you attach will only be editable via a [slideout](docs_5x__system__control-panel.md#slideouts), after a tag has been created and assigned to a tag field.

## [#](#assigning-tags)Assigning Tags

To assign tags to things (like Entries), you must create a [Tags field](docs_5x__reference__field-types__tags.md) and add it to a Field Layout.

Each Tags field is connected to a single tag group. Whatever you attach the field to (entries, assets, users, etc.) will be able to create new tags and create [relations](docs_5x__system__relations.md) to any of the tags within that group.

## [#](#querying-tags)Querying Tags

You can fetch tags in your templates or PHP code using a tag query.

TwigPHP

```
{# Create a new tag query #}
{% set myTagQuery = craft.tags() %}
```

```
// Create a new tag query
$myTagQuery = \craft\elements\Tag::find();
```

Once you’ve created a tag query, you can set [parameters](#parameters) on it to narrow down the results, and then [execute it](docs_5x__development__element-queries.md#executing-element-queries) by calling `.all()`. An array of [Tag  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-tag.html) objects will be returned.

See [Element Queries](docs_5x__development__element-queries.md) to learn about how element queries work.

### [#](#example)Example

We can display a list of the tags in a “Blog Tags” tag group by doing the following:

1. Create a tag query with `craft.tags()`.
2. Set the [group](#group) parameter on it.
3. Fetch the tags with `.all()`.
4. Loop through the tags using a [for  (opens new window)](https://twig.symfony.com/doc/3.x/tags/for.html) tag to create the list HTML.

```
{# Create a tag query with the 'group' parameter #}
{% set myTagQuery = craft.tags()
  .group('blogTags') %}

{# Fetch the tags #}
{% set tags = myTagQuery.all() %}

{# Display the tag list #}
<ul>
  {% for tag in tags %}
    <li><a href="{{ url('blog/tags/'~tag.id) }}">{{ tag.title }}</a></li>
  {% endfor %}
</ul>
```

### [#](#parameters)Parameters

Tag queries support the following parameters:

| Param | Description |
| --- | --- |
| [andNotRelatedTo](#andnotrelatedto) | Narrows the query results to only tags that are not related to certain other elements. |
| [andRelatedTo](#andrelatedto) | Narrows the query results to only tags that are related to certain other elements. |
| [andWith](#andwith) | Causes the query to return matching tags eager-loaded with related elements, in addition to the elements that were already specified by [with](#with). |
| [asArray](#asarray) | Causes the query to return matching tags as arrays of data, rather than [Tag  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-tag.html) objects. |
| [cache](#cache) | Enables query cache for this Query. |
| [canonicalsOnly](#canonicalsonly) | Narrows the query results to only canonical elements, including elements that reference another canonical element via `canonicalId` so long as they aren’t a draft. |
| [clearCachedResult](#clearcachedresult) | Clears the [cached result  (opens new window)](docs_5x__development__element-queries.md#cache). |
| [collectIds](#collectids) | Executes the query and returns the IDs of the resulting elements as a collection. |
| [dateCreated](#datecreated) | Narrows the query results based on the tags’ creation dates. |
| [dateUpdated](#dateupdated) | Narrows the query results based on the tags’ last-updated dates. |
| [eagerly](#eagerly) | Causes the query to be used to eager-load results for the query’s source element and any other elements in its collection. |
| [fixedOrder](#fixedorder) | Causes the query results to be returned in the order specified by [id](#id). |
| [getFieldLayouts](#getfieldlayouts) | Returns the field layouts that could be associated with the resulting elements. |
| [group](#group) | Narrows the query results based on the tag groups the tags belong to. |
| [groupId](#groupid) | Narrows the query results based on the tag groups the tags belong to, per the groups’ IDs. |
| [id](#id) | Narrows the query results based on the tags’ IDs. |
| [ignorePlaceholders](#ignoreplaceholders) | Causes the query to return matching tags as they are stored in the database, ignoring matching placeholder elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement). |
| [inBulkOp](#inbulkop) | Narrows the query results to only tags that were involved in a bulk element operation. |
| [inReverse](#inreverse) | Causes the query results to be returned in reverse order. |
| [language](#language) | Determines which site(s) the tags should be queried in, based on their language. |
| [limit](#limit) | Determines the number of tags that should be returned. |
| [notRelatedTo](#notrelatedto) | Narrows the query results to only tags that are not related to certain other elements. |
| [offset](#offset) | Determines how many tags should be skipped in the results. |
| [orderBy](#orderby) | Determines the order that the tags should be returned in. (If empty, defaults to `title ASC`.) |
| [preferSites](#prefersites) | If [unique](#unique) is set, this determines which site should be selected when querying multi-site elements. |
| [prepForEagerLoading](#prepforeagerloading) | Prepares the query for lazy eager loading. |
| [prepareSubquery](#preparesubquery) | Prepares the element query and returns its subquery (which determines what elements will be returned). |
| [relatedTo](#relatedto) | Narrows the query results to only tags that are related to certain other elements. |
| [render](#render) | Executes the query and renders the resulting elements using their partial templates. |
| [search](#search) | Narrows the query results to only tags that match a search query. |
| [site](#site) | Determines which site(s) the tags should be queried in. |
| [siteId](#siteid) | Determines which site(s) the tags should be queried in, per the site’s ID. |
| [siteSettingsId](#sitesettingsid) | Narrows the query results based on the tags’ IDs in the `elements_sites` table. |
| [title](#title) | Narrows the query results based on the tags’ titles. |
| [trashed](#trashed) | Narrows the query results to only tags that have been soft-deleted. |
| [uid](#uid) | Narrows the query results based on the tags’ UIDs. |
| [unique](#unique) | Determines whether only elements with unique IDs should be returned by the query. |
| [uri](#uri) | Narrows the query results based on the tags’ URIs. |
| [wasCountEagerLoaded](#wascounteagerloaded) | Returns whether the query result count was already eager loaded by the query's source element. |
| [wasEagerLoaded](#waseagerloaded) | Returns whether the query results were already eager loaded by the query's source element. |
| [with](#with) | Causes the query to return matching tags eager-loaded with related elements. |
| [withCustomFields](#withcustomfields) | Sets whether custom fields should be factored into the query. |
| [withProvisionalDrafts](#withprovisionaldrafts) | Causes the query to return provisional drafts for the matching elements, when they exist for the current user. |

#### [#](#andnotrelatedto)`andNotRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andnotrelatedto)

Narrows the query results to only tags that are not related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all tags that are related to myCategoryA and not myCategoryB #}
{% set tags = craft.tags()
  .relatedTo(myCategoryA)
  .andNotRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all tags that are related to $myCategoryA and not $myCategoryB
$tags = \craft\elements\Tag::find()
    ->relatedTo($myCategoryA)
    ->andNotRelatedTo($myCategoryB)
    ->all();
```

#### [#](#andrelatedto)`andRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andrelatedto)

Narrows the query results to only tags that are related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all tags that are related to myCategoryA and myCategoryB #}
{% set tags = craft.tags()
  .relatedTo(myCategoryA)
  .andRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all tags that are related to $myCategoryA and $myCategoryB
$tags = \craft\elements\Tag::find()
    ->relatedTo($myCategoryA)
    ->andRelatedTo($myCategoryB)
    ->all();
```

#### [#](#andwith)`andWith`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andwith)

Causes the query to return matching tags eager-loaded with related elements, in addition to the elements that were already specified by [with](#with).

.

#### [#](#asarray)`asArray`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-asarray)

Causes the query to return matching tags as arrays of data, rather than [Tag  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-tag.html) objects.

TwigPHP

```
{# Fetch tags as arrays #}
{% set tags = craft.tags()
  .asArray()
  .all() %}
```

```
// Fetch tags as arrays
$tags = \craft\elements\Tag::find()
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

Narrows the query results based on the tags’ creation dates.

Possible values include:

| Value | Fetches tags… |
| --- | --- |
| `'>= 2018-04-01'` | that were created on or after 2018-04-01. |
| `'< 2018-05-01'` | that were created before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were created between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were created at midnight of the specified relative date. |

TwigPHP

```
{# Fetch tags created last month #}
{% set start = date('first day of last month')|atom %}
{% set end = date('first day of this month')|atom %}

{% set tags = craft.tags()
  .dateCreated(['and', ">= #{start}", "< #{end}"])
  .all() %}
```

```
// Fetch tags created last month
$start = (new \DateTime('first day of last month'))->format(\DateTime::ATOM);
$end = (new \DateTime('first day of this month'))->format(\DateTime::ATOM);

$tags = \craft\elements\Tag::find()
    ->dateCreated(['and', ">= {$start}", "< {$end}"])
    ->all();
```

#### [#](#dateupdated)`dateUpdated`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-dateupdated)

Narrows the query results based on the tags’ last-updated dates.

Possible values include:

| Value | Fetches tags… |
| --- | --- |
| `'>= 2018-04-01'` | that were updated on or after 2018-04-01. |
| `'< 2018-05-01'` | that were updated before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were updated between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were updated at midnight of the specified relative date. |

TwigPHP

```
{# Fetch tags updated in the last week #}
{% set lastWeek = date('1 week ago')|atom %}

{% set tags = craft.tags()
  .dateUpdated(">= #{lastWeek}")
  .all() %}
```

```
// Fetch tags updated in the last week
$lastWeek = (new \DateTime('1 week ago'))->format(\DateTime::ATOM);

$tags = \craft\elements\Tag::find()
    ->dateUpdated(">= {$lastWeek}")
    ->all();
```

#### [#](#eagerly)`eagerly`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-eagerly)

Causes the query to be used to eager-load results for the query’s source element
and any other elements in its collection.

#### [#](#fixedorder)`fixedOrder`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-fixedorder)

Causes the query results to be returned in the order specified by [id](#id).

If no IDs were passed to [id](#id), setting this to `true` will result in an empty result set.

TwigPHP

```
{# Fetch tags in a specific order #}
{% set tags = craft.tags()
  .id([1, 2, 3, 4, 5])
  .fixedOrder()
  .all() %}
```

```
// Fetch tags in a specific order
$tags = \craft\elements\Tag::find()
    ->id([1, 2, 3, 4, 5])
    ->fixedOrder()
    ->all();
```

#### [#](#getfieldlayouts)`getFieldLayouts`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-getfieldlayouts)

Returns the field layouts that could be associated with the resulting elements.

#### [#](#group)`group`

Narrows the query results based on the tag groups the tags belong to.

Possible values include:

| Value | Fetches tags… |
| --- | --- |
| `'foo'` | in a group with a handle of `foo`. |
| `'not foo'` | not in a group with a handle of `foo`. |
| `['foo', 'bar']` | in a group with a handle of `foo` or `bar`. |
| `['not', 'foo', 'bar']` | not in a group with a handle of `foo` or `bar`. |
| a [TagGroup  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-taggroup.html) object | in a group represented by the object. |

TwigPHP

```
{# Fetch tags in the Foo group #}
{% set tags = craft.tags()
  .group('foo')
  .all() %}
```

```
// Fetch tags in the Foo group
$tags = \craft\elements\Tag::find()
    ->group('foo')
    ->all();
```

#### [#](#groupid)`groupId`

Narrows the query results based on the tag groups the tags belong to, per the groups’ IDs.

Possible values include:

| Value | Fetches tags… |
| --- | --- |
| `1` | in a group with an ID of 1. |
| `'not 1'` | not in a group with an ID of 1. |
| `[1, 2]` | in a group with an ID of 1 or 2. |
| `['not', 1, 2]` | not in a group with an ID of 1 or 2. |

TwigPHP

```
{# Fetch tags in the group with an ID of 1 #}
{% set tags = craft.tags()
  .groupId(1)
  .all() %}
```

```
// Fetch tags in the group with an ID of 1
$tags = \craft\elements\Tag::find()
    ->groupId(1)
    ->all();
```

#### [#](#id)`id`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-id)

Narrows the query results based on the tags’ IDs.

Possible values include:

| Value | Fetches tags… |
| --- | --- |
| `1` | with an ID of 1. |
| `'not 1'` | not with an ID of 1. |
| `[1, 2]` | with an ID of 1 or 2. |
| `['not', 1, 2]` | not with an ID of 1 or 2. |

TwigPHP

```
{# Fetch the tag by its ID #}
{% set tag = craft.tags()
  .id(1)
  .one() %}
```

```
// Fetch the tag by its ID
$tag = \craft\elements\Tag::find()
    ->id(1)
    ->one();
```

This can be combined with [fixedOrder](#fixedorder) if you want the results to be returned in a specific order.

#### [#](#ignoreplaceholders)`ignorePlaceholders`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-ignoreplaceholders)

Causes the query to return matching tags as they are stored in the database, ignoring matching placeholder
elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement).

#### [#](#inbulkop)`inBulkOp`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inbulkop)

Narrows the query results to only tags that were involved in a bulk element operation.

#### [#](#inreverse)`inReverse`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inreverse)

Causes the query results to be returned in reverse order.

TwigPHP

```
{# Fetch tags in reverse #}
{% set tags = craft.tags()
  .inReverse()
  .all() %}
```

```
// Fetch tags in reverse
$tags = \craft\elements\Tag::find()
    ->inReverse()
    ->all();
```

#### [#](#language)`language`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-language)

Determines which site(s) the tags should be queried in, based on their language.

Possible values include:

| Value | Fetches tags… |
| --- | --- |
| `'en'` | from sites with a language of `en`. |
| `['en-GB', 'en-US']` | from sites with a language of `en-GB` or `en-US`. |
| `['not', 'en-GB', 'en-US']` | not in sites with a language of `en-GB` or `en-US`. |

Elements that belong to multiple sites will be returned multiple times by default. If you
only want unique elements to be returned, use [unique](#unique) in conjunction with this.

TwigPHP

```
{# Fetch tags from English sites #}
{% set tags = craft.tags()
  .language('en')
  .all() %}
```

```
// Fetch tags from English sites
$tags = \craft\elements\Tag::find()
    ->language('en')
    ->all();
```

#### [#](#limit)`limit`

[Defined by `yii\db\QueryTrait`](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#limit()-detail)

Determines the number of tags that should be returned.

TwigPHP

```
{# Fetch up to 10 tags  #}
{% set tags = craft.tags()
  .limit(10)
  .all() %}
```

```
// Fetch up to 10 tags
$tags = \craft\elements\Tag::find()
    ->limit(10)
    ->all();
```

#### [#](#notrelatedto)`notRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-notrelatedto)

Narrows the query results to only tags that are not related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all tags that are related to myEntry #}
{% set tags = craft.tags()
  .notRelatedTo(myEntry)
  .all() %}
```

```
// Fetch all tags that are related to $myEntry
$tags = \craft\elements\Tag::find()
    ->notRelatedTo($myEntry)
    ->all();
```

#### [#](#offset)`offset`

[Defined by `yii\db\QueryTrait`](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#offset()-detail)

Determines how many tags should be skipped in the results.

TwigPHP

```
{# Fetch all tags except for the first 3 #}
{% set tags = craft.tags()
  .offset(3)
  .all() %}
```

```
// Fetch all tags except for the first 3
$tags = \craft\elements\Tag::find()
    ->offset(3)
    ->all();
```

#### [#](#orderby)`orderBy`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-orderby)

Determines the order that the tags should be returned in. (If empty, defaults to `title ASC`.)

TwigPHP

```
{# Fetch all tags in order of date created #}
{% set tags = craft.tags()
  .orderBy('dateCreated ASC')
  .all() %}
```

```
// Fetch all tags in order of date created
$tags = \craft\elements\Tag::find()
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
{# Fetch unique tags from Site A, or Site B if they don’t exist in Site A #}
{% set tags = craft.tags()
  .site('*')
  .unique()
  .preferSites(['a', 'b'])
  .all() %}
```

```
// Fetch unique tags from Site A, or Site B if they don’t exist in Site A
$tags = \craft\elements\Tag::find()
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

Narrows the query results to only tags that are related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all tags that are related to myCategory #}
{% set tags = craft.tags()
  .relatedTo(myCategory)
  .all() %}
```

```
// Fetch all tags that are related to $myCategory
$tags = \craft\elements\Tag::find()
    ->relatedTo($myCategory)
    ->all();
```

#### [#](#render)`render`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-render)

Executes the query and renders the resulting elements using their partial templates.

If no partial template exists for an element, its string representation will be output instead.

#### [#](#search)`search`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-search)

Narrows the query results to only tags that match a search query.

See [Searching  (opens new window)](docs_5x__system__searching.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Get the search query from the 'q' query string param #}
{% set searchQuery = craft.app.request.getQueryParam('q') %}

{# Fetch all tags that match the search query #}
{% set tags = craft.tags()
  .search(searchQuery)
  .all() %}
```

```
// Get the search query from the 'q' query string param
$searchQuery = \Craft::$app->request->getQueryParam('q');

// Fetch all tags that match the search query
$tags = \craft\elements\Tag::find()
    ->search($searchQuery)
    ->all();
```

#### [#](#site)`site`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-site)

Determines which site(s) the tags should be queried in.

The current site will be used by default.

Possible values include:

| Value | Fetches tags… |
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
{# Fetch tags from the Foo site #}
{% set tags = craft.tags()
  .site('foo')
  .all() %}
```

```
// Fetch tags from the Foo site
$tags = \craft\elements\Tag::find()
    ->site('foo')
    ->all();
```

#### [#](#siteid)`siteId`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-siteid)

Determines which site(s) the tags should be queried in, per the site’s ID.

The current site will be used by default.

Possible values include:

| Value | Fetches tags… |
| --- | --- |
| `1` | from the site with an ID of `1`. |
| `[1, 2]` | from a site with an ID of `1` or `2`. |
| `['not', 1, 2]` | not in a site with an ID of `1` or `2`. |
| `'*'` | from any site. |

TwigPHP

```
{# Fetch tags from the site with an ID of 1 #}
{% set tags = craft.tags()
  .siteId(1)
  .all() %}
```

```
// Fetch tags from the site with an ID of 1
$tags = \craft\elements\Tag::find()
    ->siteId(1)
    ->all();
```

#### [#](#sitesettingsid)`siteSettingsId`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-sitesettingsid)

Narrows the query results based on the tags’ IDs in the `elements_sites` table.

Possible values include:

| Value | Fetches tags… |
| --- | --- |
| `1` | with an `elements_sites` ID of 1. |
| `'not 1'` | not with an `elements_sites` ID of 1. |
| `[1, 2]` | with an `elements_sites` ID of 1 or 2. |
| `['not', 1, 2]` | not with an `elements_sites` ID of 1 or 2. |

TwigPHP

```
{# Fetch the tag by its ID in the elements_sites table #}
{% set tag = craft.tags()
  .siteSettingsId(1)
  .one() %}
```

```
// Fetch the tag by its ID in the elements_sites table
$tag = \craft\elements\Tag::find()
    ->siteSettingsId(1)
    ->one();
```

#### [#](#title)`title`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-title)

Narrows the query results based on the tags’ titles.

Possible values include:

| Value | Fetches tags… |
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
{# Fetch tags with a title that contains "Foo" #}
{% set tags = craft.tags()
  .title('*Foo*')
  .all() %}
```

```
// Fetch tags with a title that contains "Foo"
$tags = \craft\elements\Tag::find()
    ->title('*Foo*')
    ->all();
```

#### [#](#trashed)`trashed`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-trashed)

Narrows the query results to only tags that have been soft-deleted.

TwigPHP

```
{# Fetch trashed tags #}
{% set tags = craft.tags()
  .trashed()
  .all() %}
```

```
// Fetch trashed tags
$tags = \craft\elements\Tag::find()
    ->trashed()
    ->all();
```

#### [#](#uid)`uid`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-uid)

Narrows the query results based on the tags’ UIDs.

TwigPHP

```
{# Fetch the tag by its UID #}
{% set tag = craft.tags()
  .uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
  .one() %}
```

```
// Fetch the tag by its UID
$tag = \craft\elements\Tag::find()
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
{# Fetch unique tags across all sites #}
{% set tags = craft.tags()
  .site('*')
  .unique()
  .all() %}
```

```
// Fetch unique tags across all sites
$tags = \craft\elements\Tag::find()
    ->site('*')
    ->unique()
    ->all();
```

#### [#](#uri)`uri`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-uri)

Narrows the query results based on the tags’ URIs.

Possible values include:

| Value | Fetches tags… |
| --- | --- |
| `'foo'` | with a URI of `foo`. |
| `'foo*'` | with a URI that begins with `foo`. |
| `'*foo'` | with a URI that ends with `foo`. |
| `'*foo*'` | with a URI that contains `foo`. |
| `'not *foo*'` | with a URI that doesn’t contain `foo`. |
| `['*foo*', '*bar*']` | with a URI that contains `foo` or `bar`. |
| `['not', '*foo*', '*bar*']` | with a URI that doesn’t contain `foo` or `bar`. |

TwigPHP

```
{# Get the requested URI #}
{% set requestedUri = craft.app.request.getPathInfo() %}

{# Fetch the tag with that URI #}
{% set tag = craft.tags()
  .uri(requestedUri|literal)
  .one() %}
```

```
// Get the requested URI
$requestedUri = \Craft::$app->request->getPathInfo();

// Fetch the tag with that URI
$tag = \craft\elements\Tag::find()
    ->uri(\craft\helpers\Db::escapeParam($requestedUri))
    ->one();
```

#### [#](#wascounteagerloaded)`wasCountEagerLoaded`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-wascounteagerloaded)

Returns whether the query result count was already eager loaded by the query's source element.

#### [#](#waseagerloaded)`wasEagerLoaded`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-waseagerloaded)

Returns whether the query results were already eager loaded by the query's source element.

#### [#](#with)`with`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-with)

Causes the query to return matching tags eager-loaded with related elements.

See [Eager-Loading Elements  (opens new window)](docs_5x__development__eager-loading.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch tags eager-loaded with the "Related" field’s relations #}
{% set tags = craft.tags()
  .with(['related'])
  .all() %}
```

```
// Fetch tags eager-loaded with the "Related" field’s relations
$tags = \craft\elements\Tag::find()
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

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)

Parts of this page are generated or assembled by automations. While we greatly appreciate contributions to the documentation, [reporting automated content issues](https://github.com/craftcms/docs/issues/new/choose) will allow us to fix them at the source!
