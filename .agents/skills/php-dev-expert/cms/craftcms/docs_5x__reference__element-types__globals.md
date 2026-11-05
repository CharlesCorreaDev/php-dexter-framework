# Globals | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/element-types/globals

---

# Globals

- ### On this Page

  - [Global Sets in Templates](docs_5x__reference__element-types__globals.md#global-sets-in-templates)
  - [Global Sets with Multiple Sites](docs_5x__reference__element-types__globals.md#global-sets-with-multiple-sites)
  - [Querying Globals](docs_5x__reference__element-types__globals.md#querying-globals)

Globals store content that is available globally throughout your templates but is not tied to any one URL.

Craft organizes globals into global sets. Each global set has its own [field layout](docs_5x__system__fields.md#field-layouts) and can use any of the built-in or plugin-provided custom fields.

To create a global get, go to **Settings** → **Globals**.

If you have at least one Global Set, Craft will add a new “Globals” item to the main control panel navigation. Clicking this will take you to a page that lists all your global sets in a sidebar, as well as all of the fields associated with the selected global set in the main content area.

Unlike [entries](docs_5x__reference__element-types__entries.md#entries), global sets don’t have the Live Preview feature, since they aren’t associated with any one particular URL.

Migrating to Singles

With the release of Craft 4.4, we began consolidating features of [other element types](docs_5x__system__elements.md) into [entries](docs_5x__reference__element-types__entries.md).

As part of that process, we introduced a [console command](docs_5x__reference__cli.md#entrify-global-set) that can automate the conversion of global sets to entries:

```
php craft entrify/global-set myGlobalSetHandle
```

You will be given an opportunity to migrate the global set into a new or existing [single](docs_5x__reference__element-types__entries.md#singles). The **Title** field (and **Status** controls) for the single’s new entry type will be disabled, to maintain parity with the legacy globals interface.

Read more about this [transition  (opens new window)](https://craftcms.com/blog/entrification) on our blog.

## [#](#global-sets-in-templates)Global Sets in Templates

You can access your global sets from any template via their handles.

If you have a global set with the handle `companyInfo` and it has a field with the handle `yearEstablished`, you can access that field anywhere using this code:

```
{{ companyInfo.yearEstablished }}
```

For additional global set properties you can use besides your custom fields see [craft\elements\GlobalSet  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-globalset.html) for a full reference.

### [#](#manually-loading-global-sets)Manually Loading Global Sets

In some special situations, like within email templates, global sets won’t be available by default. Any global set may still be loaded manually. The above example could be loaded with `getSetByHandle()`:

TwigPHP

```
{% set companyInfo = craft.app.globals().getSetByHandle('companyInfo') %}
```

```
$companyInfo = \Craft::$app->getGlobals()->getSetByHandle('companyInfo');
```

More details are available in the [Globals service class documentation  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-globals.html).

## [#](#global-sets-with-multiple-sites)Global Sets with Multiple Sites

If you run multiple sites with Craft, global sets are available in all sites. However, you can set the values in those sets on a per site basis, even leaving some fields blank, if desired.

To do that, edit the global set’s fields, and make sure that their “Translation Method” settings are set to “Translate for each site”.

To toggle between sites while viewing global sets, use the dropdown menu at the top left of the global sets page in the control panel.

![Toggling between sites in Globals](/docs/assets/img/globals-multisite-nav.2aa2b5d4.png)

## [#](#querying-globals)Querying Globals

You can fetch global sets in your templates or PHP code using **global set queries**.

TwigPHP

```
{# Create a new global set query #}
{% set myGlobalSetQuery = craft.globalSets() %}
```

```
// Create a new global set query
$myGlobalSetQuery = \craft\elements\GlobalSet::find();
```

Once you’ve created a global set query, you can set [parameters](#parameters) on it to narrow down the results, and then [execute it](docs_5x__development__element-queries.md#executing-element-queries) by calling `.all()`. An array of [GlobalSet  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-globalset.html) objects will be returned.

[Introduction to Element Queries
→

Learn more about how element queries work.](docs_5x__development__element-queries.md)

### [#](#example)Example

We can load a global set from the primary site and display its content by doing the following:

1. Create a global set query with `craft.globalSets()`.
2. Set the [handle](#handle) and [siteId](#siteid) parameters on it.
3. Fetch the global set with `.one()`.
4. Output its content.

```
{# Create a global set query with the 'handle' and 'siteId' parameters #}
{% set myGlobalSetQuery = craft.globalSets()
  .handle('footerCopy')
  .siteId(1) %}

{# Fetch the global set #}
{% set globalSet = myGlobalSetQuery.one() %}

{# Display the content #}
<p>{{ globalSet.copyrightInfo }}</p>
```

All global sets are already available as global variables to Twig templates. So you only need to fetch them through `craft.globalSets()` if you need to access their content for a different site than the current site.

### [#](#parameters)Parameters

Global set queries support the following parameters:

| Param | Description |
| --- | --- |
| [andNotRelatedTo](#andnotrelatedto) | Narrows the query results to only global sets that are not related to certain other elements. |
| [andRelatedTo](#andrelatedto) | Narrows the query results to only global sets that are related to certain other elements. |
| [andWith](#andwith) | Causes the query to return matching global sets eager-loaded with related elements, in addition to the elements that were already specified by [with](#with). |
| [asArray](#asarray) | Causes the query to return matching global sets as arrays of data, rather than [GlobalSet  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-globalset.html) objects. |
| [cache](#cache) | Enables query cache for this Query. |
| [canonicalsOnly](#canonicalsonly) | Narrows the query results to only canonical elements, including elements that reference another canonical element via `canonicalId` so long as they aren’t a draft. |
| [clearCachedResult](#clearcachedresult) | Clears the [cached result  (opens new window)](docs_5x__development__element-queries.md#cache). |
| [collectIds](#collectids) | Executes the query and returns the IDs of the resulting elements as a collection. |
| [dateCreated](#datecreated) | Narrows the query results based on the global sets’ creation dates. |
| [dateUpdated](#dateupdated) | Narrows the query results based on the global sets’ last-updated dates. |
| [eagerly](#eagerly) | Causes the query to be used to eager-load results for the query’s source element and any other elements in its collection. |
| [fixedOrder](#fixedorder) | Causes the query results to be returned in the order specified by [id](#id). |
| [getFieldLayouts](#getfieldlayouts) | Returns the field layouts that could be associated with the resulting elements. |
| [handle](#handle) | Narrows the query results based on the global sets’ handles. |
| [id](#id) | Narrows the query results based on the global sets’ IDs. |
| [ignorePlaceholders](#ignoreplaceholders) | Causes the query to return matching global sets as they are stored in the database, ignoring matching placeholder elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement). |
| [inBulkOp](#inbulkop) | Narrows the query results to only global sets that were involved in a bulk element operation. |
| [inReverse](#inreverse) | Causes the query results to be returned in reverse order. |
| [language](#language) | Determines which site(s) the global sets should be queried in, based on their language. |
| [limit](#limit) | Determines the number of global sets that should be returned. |
| [notRelatedTo](#notrelatedto) | Narrows the query results to only global sets that are not related to certain other elements. |
| [offset](#offset) | Determines how many global sets should be skipped in the results. |
| [orderBy](#orderby) | Determines the order that the global sets should be returned in. (If empty, defaults to `sortOrder ASC`.) |
| [preferSites](#prefersites) | If [unique](#unique) is set, this determines which site should be selected when querying multi-site elements. |
| [prepForEagerLoading](#prepforeagerloading) | Prepares the query for lazy eager loading. |
| [prepareSubquery](#preparesubquery) | Prepares the element query and returns its subquery (which determines what elements will be returned). |
| [relatedTo](#relatedto) | Narrows the query results to only global sets that are related to certain other elements. |
| [render](#render) | Executes the query and renders the resulting elements using their partial templates. |
| [search](#search) | Narrows the query results to only global sets that match a search query. |
| [site](#site) | Determines which site(s) the global sets should be queried in. |
| [siteId](#siteid) | Determines which site(s) the global sets should be queried in, per the site’s ID. |
| [siteSettingsId](#sitesettingsid) | Narrows the query results based on the global sets’ IDs in the `elements_sites` table. |
| [trashed](#trashed) | Narrows the query results to only global sets that have been soft-deleted. |
| [uid](#uid) | Narrows the query results based on the global sets’ UIDs. |
| [unique](#unique) | Determines whether only elements with unique IDs should be returned by the query. |
| [wasCountEagerLoaded](#wascounteagerloaded) | Returns whether the query result count was already eager loaded by the query's source element. |
| [wasEagerLoaded](#waseagerloaded) | Returns whether the query results were already eager loaded by the query's source element. |
| [with](#with) | Causes the query to return matching global sets eager-loaded with related elements. |
| [withCustomFields](#withcustomfields) | Sets whether custom fields should be factored into the query. |
| [withProvisionalDrafts](#withprovisionaldrafts) | Causes the query to return provisional drafts for the matching elements, when they exist for the current user. |

#### [#](#andnotrelatedto)`andNotRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andnotrelatedto)

Narrows the query results to only global sets that are not related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all global sets that are related to myCategoryA and not myCategoryB #}
{% set globalSets = craft.globalSets()
  .relatedTo(myCategoryA)
  .andNotRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all global sets that are related to $myCategoryA and not $myCategoryB
$globalSets = \craft\elements\GlobalSet::find()
    ->relatedTo($myCategoryA)
    ->andNotRelatedTo($myCategoryB)
    ->all();
```

#### [#](#andrelatedto)`andRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andrelatedto)

Narrows the query results to only global sets that are related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all global sets that are related to myCategoryA and myCategoryB #}
{% set globalSets = craft.globalSets()
  .relatedTo(myCategoryA)
  .andRelatedTo(myCategoryB)
  .all() %}
```

```
// Fetch all global sets that are related to $myCategoryA and $myCategoryB
$globalSets = \craft\elements\GlobalSet::find()
    ->relatedTo($myCategoryA)
    ->andRelatedTo($myCategoryB)
    ->all();
```

#### [#](#andwith)`andWith`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-andwith)

Causes the query to return matching global sets eager-loaded with related elements, in addition to the elements that were already specified by [with](#with).

.

#### [#](#asarray)`asArray`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-asarray)

Causes the query to return matching global sets as arrays of data, rather than [GlobalSet  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-globalset.html) objects.

TwigPHP

```
{# Fetch global sets as arrays #}
{% set globalSets = craft.globalSets()
  .asArray()
  .all() %}
```

```
// Fetch global sets as arrays
$globalSets = \craft\elements\GlobalSet::find()
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

Narrows the query results based on the global sets’ creation dates.

Possible values include:

| Value | Fetches global sets… |
| --- | --- |
| `'>= 2018-04-01'` | that were created on or after 2018-04-01. |
| `'< 2018-05-01'` | that were created before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were created between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were created at midnight of the specified relative date. |

TwigPHP

```
{# Fetch global sets created last month #}
{% set start = date('first day of last month')|atom %}
{% set end = date('first day of this month')|atom %}

{% set globalSets = craft.globalSets()
  .dateCreated(['and', ">= #{start}", "< #{end}"])
  .all() %}
```

```
// Fetch global sets created last month
$start = (new \DateTime('first day of last month'))->format(\DateTime::ATOM);
$end = (new \DateTime('first day of this month'))->format(\DateTime::ATOM);

$globalSets = \craft\elements\GlobalSet::find()
    ->dateCreated(['and', ">= {$start}", "< {$end}"])
    ->all();
```

#### [#](#dateupdated)`dateUpdated`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-dateupdated)

Narrows the query results based on the global sets’ last-updated dates.

Possible values include:

| Value | Fetches global sets… |
| --- | --- |
| `'>= 2018-04-01'` | that were updated on or after 2018-04-01. |
| `'< 2018-05-01'` | that were updated before 2018-05-01. |
| `['and', '>= 2018-04-04', '< 2018-05-01']` | that were updated between 2018-04-01 and 2018-05-01. |
| `now`/`today`/`tomorrow`/`yesterday` | that were updated at midnight of the specified relative date. |

TwigPHP

```
{# Fetch global sets updated in the last week #}
{% set lastWeek = date('1 week ago')|atom %}

{% set globalSets = craft.globalSets()
  .dateUpdated(">= #{lastWeek}")
  .all() %}
```

```
// Fetch global sets updated in the last week
$lastWeek = (new \DateTime('1 week ago'))->format(\DateTime::ATOM);

$globalSets = \craft\elements\GlobalSet::find()
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
{# Fetch global sets in a specific order #}
{% set globalSets = craft.globalSets()
  .id([1, 2, 3, 4, 5])
  .fixedOrder()
  .all() %}
```

```
// Fetch global sets in a specific order
$globalSets = \craft\elements\GlobalSet::find()
    ->id([1, 2, 3, 4, 5])
    ->fixedOrder()
    ->all();
```

#### [#](#getfieldlayouts)`getFieldLayouts`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-getfieldlayouts)

Returns the field layouts that could be associated with the resulting elements.

#### [#](#handle)`handle`

Narrows the query results based on the global sets’ handles.

Possible values include:

| Value | Fetches global sets… |
| --- | --- |
| `'foo'` | with a handle of `foo`. |
| `'not foo'` | not with a handle of `foo`. |
| `['foo', 'bar']` | with a handle of `foo` or `bar`. |
| `['not', 'foo', 'bar']` | not with a handle of `foo` or `bar`. |

TwigPHP

```
{# Fetch the global set with a handle of 'foo' #}
{% set globalSet = craft.globalSets()
  .handle('foo')
  .one() %}
```

```
// Fetch the global set with a handle of 'foo'
$globalSet = \craft\elements\GlobalSet::find()
    ->handle('foo')
    ->one();
```

#### [#](#id)`id`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-id)

Narrows the query results based on the global sets’ IDs.

Possible values include:

| Value | Fetches global sets… |
| --- | --- |
| `1` | with an ID of 1. |
| `'not 1'` | not with an ID of 1. |
| `[1, 2]` | with an ID of 1 or 2. |
| `['not', 1, 2]` | not with an ID of 1 or 2. |

TwigPHP

```
{# Fetch the global set by its ID #}
{% set globalSet = craft.globalSets()
  .id(1)
  .one() %}
```

```
// Fetch the global set by its ID
$globalSet = \craft\elements\GlobalSet::find()
    ->id(1)
    ->one();
```

This can be combined with [fixedOrder](#fixedorder) if you want the results to be returned in a specific order.

#### [#](#ignoreplaceholders)`ignorePlaceholders`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-ignoreplaceholders)

Causes the query to return matching global sets as they are stored in the database, ignoring matching placeholder
elements that were set by [craft\services\Elements::setPlaceholderElement()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-elements.html#method-setplaceholderelement).

#### [#](#inbulkop)`inBulkOp`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inbulkop)

Narrows the query results to only global sets that were involved in a bulk element operation.

#### [#](#inreverse)`inReverse`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-inreverse)

Causes the query results to be returned in reverse order.

TwigPHP

```
{# Fetch global sets in reverse #}
{% set globalSets = craft.globalSets()
  .inReverse()
  .all() %}
```

```
// Fetch global sets in reverse
$globalSets = \craft\elements\GlobalSet::find()
    ->inReverse()
    ->all();
```

#### [#](#language)`language`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-language)

Determines which site(s) the global sets should be queried in, based on their language.

Possible values include:

| Value | Fetches global sets… |
| --- | --- |
| `'en'` | from sites with a language of `en`. |
| `['en-GB', 'en-US']` | from sites with a language of `en-GB` or `en-US`. |
| `['not', 'en-GB', 'en-US']` | not in sites with a language of `en-GB` or `en-US`. |

Elements that belong to multiple sites will be returned multiple times by default. If you
only want unique elements to be returned, use [unique](#unique) in conjunction with this.

TwigPHP

```
{# Fetch global sets from English sites #}
{% set globalSets = craft.globalSets()
  .language('en')
  .all() %}
```

```
// Fetch global sets from English sites
$globalSets = \craft\elements\GlobalSet::find()
    ->language('en')
    ->all();
```

#### [#](#limit)`limit`

[Defined by `yii\db\QueryTrait`](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#limit()-detail)

Determines the number of global sets that should be returned.

TwigPHP

```
{# Fetch up to 10 global sets  #}
{% set globalSets = craft.globalSets()
  .limit(10)
  .all() %}
```

```
// Fetch up to 10 global sets
$globalSets = \craft\elements\GlobalSet::find()
    ->limit(10)
    ->all();
```

#### [#](#notrelatedto)`notRelatedTo`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-notrelatedto)

Narrows the query results to only global sets that are not related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all global sets that are related to myEntry #}
{% set globalSets = craft.globalSets()
  .notRelatedTo(myEntry)
  .all() %}
```

```
// Fetch all global sets that are related to $myEntry
$globalSets = \craft\elements\GlobalSet::find()
    ->notRelatedTo($myEntry)
    ->all();
```

#### [#](#offset)`offset`

[Defined by `yii\db\QueryTrait`](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#offset()-detail)

Determines how many global sets should be skipped in the results.

TwigPHP

```
{# Fetch all global sets except for the first 3 #}
{% set globalSets = craft.globalSets()
  .offset(3)
  .all() %}
```

```
// Fetch all global sets except for the first 3
$globalSets = \craft\elements\GlobalSet::find()
    ->offset(3)
    ->all();
```

#### [#](#orderby)`orderBy`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-orderby)

Determines the order that the global sets should be returned in. (If empty, defaults to `sortOrder ASC`.)

TwigPHP

```
{# Fetch all global sets in order of date created #}
{% set globalSets = craft.globalSets()
  .orderBy('dateCreated ASC')
  .all() %}
```

```
// Fetch all global sets in order of date created
$globalSets = \craft\elements\GlobalSet::find()
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
{# Fetch unique global sets from Site A, or Site B if they don’t exist in Site A #}
{% set globalSets = craft.globalSets()
  .site('*')
  .unique()
  .preferSites(['a', 'b'])
  .all() %}
```

```
// Fetch unique global sets from Site A, or Site B if they don’t exist in Site A
$globalSets = \craft\elements\GlobalSet::find()
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

Narrows the query results to only global sets that are related to certain other elements.

See [Relations  (opens new window)](docs_5x__system__relations.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch all global sets that are related to myCategory #}
{% set globalSets = craft.globalSets()
  .relatedTo(myCategory)
  .all() %}
```

```
// Fetch all global sets that are related to $myCategory
$globalSets = \craft\elements\GlobalSet::find()
    ->relatedTo($myCategory)
    ->all();
```

#### [#](#render)`render`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-render)

Executes the query and renders the resulting elements using their partial templates.

If no partial template exists for an element, its string representation will be output instead.

#### [#](#search)`search`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-search)

Narrows the query results to only global sets that match a search query.

See [Searching  (opens new window)](docs_5x__system__searching.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Get the search query from the 'q' query string param #}
{% set searchQuery = craft.app.request.getQueryParam('q') %}

{# Fetch all global sets that match the search query #}
{% set globalSets = craft.globalSets()
  .search(searchQuery)
  .all() %}
```

```
// Get the search query from the 'q' query string param
$searchQuery = \Craft::$app->request->getQueryParam('q');

// Fetch all global sets that match the search query
$globalSets = \craft\elements\GlobalSet::find()
    ->search($searchQuery)
    ->all();
```

#### [#](#site)`site`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-site)

Determines which site(s) the global sets should be queried in.

The current site will be used by default.

Possible values include:

| Value | Fetches global sets… |
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
{# Fetch global sets from the Foo site #}
{% set globalSets = craft.globalSets()
  .site('foo')
  .all() %}
```

```
// Fetch global sets from the Foo site
$globalSets = \craft\elements\GlobalSet::find()
    ->site('foo')
    ->all();
```

#### [#](#siteid)`siteId`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-siteid)

Determines which site(s) the global sets should be queried in, per the site’s ID.

The current site will be used by default.

Possible values include:

| Value | Fetches global sets… |
| --- | --- |
| `1` | from the site with an ID of `1`. |
| `[1, 2]` | from a site with an ID of `1` or `2`. |
| `['not', 1, 2]` | not in a site with an ID of `1` or `2`. |
| `'*'` | from any site. |

TwigPHP

```
{# Fetch global sets from the site with an ID of 1 #}
{% set globalSets = craft.globalSets()
  .siteId(1)
  .all() %}
```

```
// Fetch global sets from the site with an ID of 1
$globalSets = \craft\elements\GlobalSet::find()
    ->siteId(1)
    ->all();
```

#### [#](#sitesettingsid)`siteSettingsId`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-sitesettingsid)

Narrows the query results based on the global sets’ IDs in the `elements_sites` table.

Possible values include:

| Value | Fetches global sets… |
| --- | --- |
| `1` | with an `elements_sites` ID of 1. |
| `'not 1'` | not with an `elements_sites` ID of 1. |
| `[1, 2]` | with an `elements_sites` ID of 1 or 2. |
| `['not', 1, 2]` | not with an `elements_sites` ID of 1 or 2. |

TwigPHP

```
{# Fetch the global set by its ID in the elements_sites table #}
{% set globalSet = craft.globalSets()
  .siteSettingsId(1)
  .one() %}
```

```
// Fetch the global set by its ID in the elements_sites table
$globalSet = \craft\elements\GlobalSet::find()
    ->siteSettingsId(1)
    ->one();
```

#### [#](#trashed)`trashed`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-trashed)

Narrows the query results to only global sets that have been soft-deleted.

TwigPHP

```
{# Fetch trashed global sets #}
{% set globalSets = craft.globalSets()
  .trashed()
  .all() %}
```

```
// Fetch trashed global sets
$globalSets = \craft\elements\GlobalSet::find()
    ->trashed()
    ->all();
```

#### [#](#uid)`uid`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-uid)

Narrows the query results based on the global sets’ UIDs.

TwigPHP

```
{# Fetch the global set by its UID #}
{% set globalSet = craft.globalSets()
  .uid('xxxxxxxx-xxxx-xxxx-xxxx-xxxxxxxxxxxx')
  .one() %}
```

```
// Fetch the global set by its UID
$globalSet = \craft\elements\GlobalSet::find()
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
{# Fetch unique global sets across all sites #}
{% set globalSets = craft.globalSets()
  .site('*')
  .unique()
  .all() %}
```

```
// Fetch unique global sets across all sites
$globalSets = \craft\elements\GlobalSet::find()
    ->site('*')
    ->unique()
    ->all();
```

#### [#](#wascounteagerloaded)`wasCountEagerLoaded`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-wascounteagerloaded)

Returns whether the query result count was already eager loaded by the query's source element.

#### [#](#waseagerloaded)`wasEagerLoaded`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-waseagerloaded)

Returns whether the query results were already eager loaded by the query's source element.

#### [#](#with)`with`

[Defined by `craft\elements\db\ElementQuery`](https://docs.craftcms.com/api/v5/craft-elements-db-elementquery.html#method-with)

Causes the query to return matching global sets eager-loaded with related elements.

See [Eager-Loading Elements  (opens new window)](docs_5x__development__eager-loading.md) for a full explanation of how to work with this parameter.

TwigPHP

```
{# Fetch global sets eager-loaded with the "Related" field’s relations #}
{% set globalSets = craft.globalSets()
  .with(['related'])
  .all() %}
```

```
// Fetch global sets eager-loaded with the "Related" field’s relations
$globalSets = \craft\elements\GlobalSet::find()
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
