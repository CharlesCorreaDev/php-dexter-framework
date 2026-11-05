# Element Queries | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/development/element-queries

---

# Element Queries

- ### On this Page

  - [Types + Parameters](docs_5x__development__element-queries.md#types-parameters)
  - [Executing Element Queries](docs_5x__development__element-queries.md#executing-element-queries)
  - [Pagination](docs_5x__development__element-queries.md#pagination)
  - [Search](docs_5x__development__element-queries.md#search)
  - [Performance and Optimization](docs_5x__development__element-queries.md#performance-and-optimization)
  - [Advanced Element Queries](docs_5x__development__element-queries.md#advanced-element-queries)
  - [Headless Applications](docs_5x__development__element-queries.md#headless-applications)

You can fetch [elements](docs_5x__system__elements.md) (like entries, categories, assets, etc.) in your [templates](docs_5x__development__templates.md) or [extension](docs_5x__extend.md) using **element queries**.

Suppose you’ve already created a [section](docs_5x__reference__element-types__entries.md#sections) for news posts and configured a URL scheme. Craft automatically loads the corresponding entry element when its URL is requested, and exposes it to the template under an `entry` variable. This is convenient—but it’s rare that a page only refers to a *single* piece of content! What if we want to show a list of other recent posts, in a sidebar? Element queries are Craft’s way of loading elements anywhere you need them.

Element queries can be hyper-specific (like loading a single [global set](docs_5x__reference__element-types__globals.md) by its handle) or relaxed (like a list of recently-updated [entries](docs_5x__reference__element-types__entries.md)).

Working with element queries consists of three steps:

1. **Create the element query.** Calling the “factory function” corresponding to the [element type](#element-types) you want to fetch. For entries, this is `craft.entries()`; for categories, `craft.categories()`.
2. **Set some parameters.** By default, element queries will be configured to return *all* elements of a given type. You can narrow that down to just the elements you care about by setting [parameters](#types-parameters) on the query.
3. **Execute the query.** Use a [query execution method](#executing-element-queries) to run the query and return results.

[Relational fields](docs_5x__system__relations.md) also return element queries (except when [eager-loaded](docs_5x__development__eager-loading.md)), which you can treat the same as the result of step #1, above.

Here’s what this process looks like, in practice:

TwigPHP

```
{# Create an entry query and set some parameters on it #}
{% set postsQuery = craft.entries()
  .section('news')
  .orderBy('postDate DESC')
  .limit(10) %}

{# Execute the query and get the results #}
{% set posts = postsQuery.all() %}
```

```
use craft\elements\Entry;

// Create an entry query and set some parameters on it
$postsQuery = Entry::find()
    ->section('news')
    ->orderBy('postDate DESC')
    ->limit(10);

// Execute the query and get the results
$posts = $postsQuery->all();
```

You can eliminate the intermediate variable and flatten this into a single statement by chaining the [execution method](#executing-element-queries) on the end:

TwigPHP

```
{% set posts = craft.entries()
  .section('news')
  .orderBy('postDate DESC')
  .limit(10)
  .all() %}
```

```
use craft\elements\Entry;

$posts = Entry::find()
    ->section('news')
    ->orderBy('postDate DESC')
    ->limit(10)
    ->all();
```

## [#](#types-parameters)Types + Parameters

Each type of element has its own function for creating element queries, and they each have their own parameters you can set. All element types expose parameters for their [custom fields](#querying-with-custom-fields).

### [#](#element-types)Element Types

See the query reference section of each [element type](docs_5x__system__elements.md) for more details on working with them:

[Address Queries](docs_5x__reference__element-types__addresses.md#querying-addresses) →
:   ```
    {% set addressQuery = craft.addresses() %}
    ```

[Asset Queries](docs_5x__reference__element-types__assets.md#querying-assets) →
:   ```
    {% set assetQuery = craft.assets() %}
    ```

[Category Queries](docs_5x__reference__element-types__categories.md#querying-categories) →
:   ```
    {% set categoryQuery = craft.categories() %}
    ```

[Entry Queries](docs_5x__reference__element-types__entries.md#querying-entries) →
:   ```
    {% set entryQuery = craft.entries() %}
    ```

[Global Set Queries](docs_5x__reference__element-types__globals.md#querying-globals) →
:   ```
    {% set globalQuery = craft.globals() %}
    ```

[Tag Queries](docs_5x__reference__element-types__tags.md#querying-tags) →
:   ```
    {% set tagQuery = craft.tags() %}
    ```

[User Queries](docs_5x__reference__element-types__users.md#querying-users) →
:   ```
    {% set userQuery = craft.users() %}
    ```

### [#](#parameters)Parameters

Parameters are set using methods after creating an element query, or by passing in key-value pairs to the factory function:

```
{% set images = craft.assets()
  .kind('image')
  .all() %}

{# ...or... #}

{% set images = craft.assets({
    kind: 'image',
  })
  .all() %}

{# ...or if you’re fancy, set some parameters conditionally: #}

{% set assetsQuery = craft.assets() %}

{% if craft.app.request.getParam('onlyImages') %}
  {# Effectively the same as chaining query methods: #}
  {% do assetsQuery.kind('image') %}
{% endif %}

{% set images = assetsQuery.all() %}
```

Query methods (except for those that [execute](#executing-element-queries) a query) modify some internal properties and return the query itself, allowing you to chain methods together—just like Craft’s [fluent config](docs_5x__configure.md#style) syntax!

All element queries support a standard set of methods (like `.id()`, `.title()`, and [`.search()`](docs_5x__system__searching.md)). These are documented alongside the [element type-specific](#element-types) parameters (like `.kind()` in the example above).

Typically, parameters make a query more specific—but setting a single parameter more than once will replace the previous constraint. Similarly, setting a parameter to `null` can *broaden* a query by removing an existing constraint.

#### [#](#querying-with-custom-fields)Querying with Custom Fields

In addition to native query parameters, Craft automatically injects methods for each of your [custom fields](docs_5x__system__fields.md).

For example, if we wanted to find entries in a *Cars* section with a specific paint color stored in a [dropdown](docs_5x__reference__field-types__dropdown.md) field, we could perform this query:

```
{% set silverCars = craft.entries()
  .section('cars')
  .paintColor('silver')
  .all() %}
```

Custom field parameters can be combined for advanced filtering—in this example, we’re also applying a pair of constraints to a [date](docs_5x__reference__field-types__date-time.md) field:

```
{% set silverCars = craft.entries()
  .section('cars')
  .paintColor(['silver', 'gold'])
  .modelYear('>= 1990', '<= 2000')
  .all() %}
```

See each [field type](docs_5x__system__fields.md#field-types)’s documentation for what kinds of values you can use.

#### [#](#case-sensitivity)Case-Sensitivity

Queries against textual fields ([Color](docs_5x__reference__field-types__color.md), [Country](docs_5x__reference__field-types__country.md), [Email](docs_5x__reference__field-types__email.md), [Icon](docs_5x__reference__field-types__icon.md), [Link](docs_5x__reference__field-types__link.md), [Plain Text](docs_5x__reference__field-types__plain-text.md), and [Table](docs_5x__reference__field-types__table.md)) are case-sensitive, by default.

To make a query case-*insensitive*, pass an object with the special `caseInsensitive` key:

```
{% set cars = craft.entries()
  .section('cars')
  .brand({
    value: 'bmw',
    caseInsensitive: true,
  })
  .all() %}
```

[Dropdown](docs_5x__reference__field-types__dropdown.md), [Radio](docs_5x__reference__field-types__radio.md), [Checkboxes](docs_5x__reference__field-types__checkboxes.md), and other fields whose only allowable values are determined by the field’s configuration are *always* handled in a case-sensitive way.

Textual condition rules in [custom sources](docs_5x__development__system__elements.md#sources) and [field layouts](docs_5x__development__system__fields.md#conditions) are always handled case-insensitively.  [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "Condition rules were made case-insensitive in Craft 5.9.0")

### [#](#reusing-queries)Reusing Queries

Sometimes, you might want to run a number of similar queries. Take this case, where we want to show some information about upcoming events at a library:

```
{# Assuming we're on a page for a specific branch: #}
{% set upcomingEvents = craft.entries()
  .section('events')
  .dateStart(">= #{now|atom}")
  .branch(entry) %}

{% set weekEvents = clone(upcomingEvents)
  .dateEnd("< #{now|modify('+1 week')|atom}") %}
Events in the next week: {{ weekEvents.count() }}

{% set monthEvents = clone(upcomingEvents)
  .dateEnd("< #{now|modify('+1 month')|atom}") %}
Events in the next month: {{ monthEvents.count() }}
```

The [`clone()` function](docs_5x__reference__twig__functions.md#clone) is used to copy a base query, before setting additional parameters. Parameters set on the base query (like `dateStart()`, above) will affect all subsequent queries, unless explicitly unset.

Note that we are only executing the `weekEvents` and `monthEvents` queries! Cloning an executed query will just copy the results.

### [#](#relational-fields)Relational Fields

Any time you access a [relational field](docs_5x__system__relations.md#fields) (specifically, one that hasn’t been [eager-loaded](docs_5x__development__eager-loading.md)), Craft automatically clones it:

```
{% set relatedDocuments = entry.attachments.type('document').all() %}
{% set relatedArticles = entry.attachments.type('article').all() %}
{% set recentAttachments = entry.attachments
  .dateCreated(">= #{now|date_modify('-1 week')}")
  .orderBy('dateCreated DESC')
  .limit(5)
  .all() %}
```

In this example, each time `entry.attachments` is accessed, it returns a fresh element query prepared to fetch the explicitly related elements, in the order they were defined in the control panel. Calling `.type('...')` on the first two queries will *not* affect the third query. If instead you captured the query in an intermediate variable, each param would be applied in sequence on a single query:

```
{% set attachmentsQuery = entry.attachments %}
{% set relatedDocuments = attachmentsQuery.type('document').all() %}
{% set relatedArticles = attachmentsQuery.type('article').all() %}
{% set recentAttachments = attachmentsQuery
  .dateCreated(">= #{now|date_modify('-1 week')}")
  .orderBy('dateCreated DESC')
  .limit(5)
  .all() %}
```

The first two sets of results here will contain the expected elements—`relatedDocuments` modifies the base query, and then `relatedArticles` overwrites the `type` param—but the third will retain the last-set `type` value and apply additional `dateCreated` and `orderBy` params. Instead of containing the latest five attachments of any type, it will only include the latest five *articles*.

### [#](#ordering)Ordering

Each type of element query has a default sort order—[entries](docs_5x__reference__element-types__entries.md), for example, use the `postDate`; [tags](docs_5x__reference__element-types__tags.md) are sorted by `title`; and [users](docs_5x__reference__element-types__users.md) by `username`.

You can sort by most attributes or custom fields with the `.orderBy()` query method:

```
{% set latestTastes = craft.entries()
  .section('tasteTests')
  .orderBy('reviewDate DESC')
  .limit(5)
  .all() %}
```

If a field would produce the same value for many entries, multiple criteria can be combined:

```
{% set bigFlavors = craft.entries()
  .section('tasteTests')
  .orderBy('primaryFlavorGroup ASC, flavorIntensity DESC')
  .all() %}
```

Ascending (`ASC`) and descending (`DESC`) sorting depend on how the attribute’s data is stored.

| Value Type | Ascending | Descending |
| --- | --- | --- |
| String | Alphabetic | Reverse alphabetic |
| Number | Increasing | Decreasing |
| Date | Oldest first | Most recent first |

In the last example, if `primaryFlavorGroup` was a [dropdown](docs_5x__reference__field-types__dropdown.md) field, entries would be sorted by the “value” of the selected options not the “label,” which can sometimes be unpredictable: one might expect “Dark Chocolate” to follow “Clove,” when its value is actually `chocolateDark` (and would therefore come *before* `clove`, alphabetically).

Not *all* fields can be used for ordering a query. Relational fields, Matrix fields, and authors, for example, are all stored in external tables, and don’t have accessible or neatly comparable values to sort by.

#### [#](#nested-sorting)Nested Sorting [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Ordering by non-default nested field values was first available in version 5.6.0 of Craft.")

Some fields (like the built-in [link](docs_5x__reference__field-types__link.md) and [date](docs_5x__reference__field-types__date-time.md) fields) store multiple values. Craft allows you to sort on specific sub-keys—say, to gather similar types of contact info together:

```
{% set reps = craft.entries()
  .section('reps')
  .orderBy('primaryContact.type ASC, dateHired DESC')
  .all() %}
```

## [#](#executing-element-queries)Executing Element Queries

Once you’ve defined your parameters on the query, there are multiple functions available to [execute it](#query-execution), depending on what you need back.

Craft also makes it easy to display the results of an element query across multiple pages with [pagination](#pagination).

### [#](#all)`all()`

The most common way to fetch a list of results is with the `all()` method, which executes the query and returns an array of populated [element](docs_5x__system__elements.md) models. The resulting elements will *always* be of the type that the query started with—assets come back from asset queries, categories from category queries, and so on.

TwigPHP

```
{% set entries = craft.entries()
  .section('news')
  .limit(10)
  .all() %}
```

```
use craft\elements\Entry;

$entries = Entry::find()
    ->section('news')
    ->limit(10)
    ->all();
```

Declaring a `limit()` *and* executing a query with `all()` may seem like a contradiction, but this is a totally valid query! `all()` doesn’t override the `limit()`; rather, it returns *all* results that meet the current criteria—one of which just happens to be a cap on the number of allowed results. Regardless of the number of results, `.all()` always returns an array—even if it’s empty.

### [#](#collect)`collect()`

Calling `.collect()` to execute a query will perform the same database call as `.all()`, but the results are wrapped in a [Collection](docs_5x__development__collections.md).

Collections can simplify some common array manipulation and filtering tasks that are otherwise awkward in the template or query builder:

TwigPHP

```
{% set entries = craft.entries()
  .section('news')
  .with(['category'])
  .limit(10)
  .collect() %}

{% set categoriesDescription = entries
  .pluck('category')
  .collapse()
  .pluck('title')
  .join(', ', ' and ') %}
Posted in: {{ categoriesDescription }}
```

```
use craft\elements\Entry;

$entries = Entry::find()
    ->section('news')
    ->with(['category'])
    ->limit(10)
    ->collect();

$categoriesDescription = $entries
    // Collate all the attached categories:
    ->pluck('category')
    // Flatten those into a single array:
    ->collapse()
    // Grab just the titles:
    ->pluck('title')
    // Turn them into a comma-separated list:
    ->join(', ', ' and ');
```

You can also call `.all()` and wrap the results in a collection yourself, with the [`collect()` Twig function](docs_5x__reference__twig__functions.md#collect).

Review some of the [optimization tips](#performance-and-optimization) to see if built-in query methods can accomplish what you need.

For example, loading and populating hundreds of element models into a collection solely to calculate an average field value may not be necessary; the database is highly optimized for tasks like this!

### [#](#one)`one()`

If you only need a single element, call `one()` instead of [`all()`](#all). It will return either a populated element model or `null` if no matching element exists.

TwigPHP

```
{% set entry = craft.entries()
  .section('news')
  .slug('hello-world')
  .one() %}
```

```
use craft\elements\Entry;

$entry = Entry::find()
    ->section('news')
    ->slug('hello-world')
    ->one();
```

### [#](#exists)`exists()`

If you just need to check if any elements exist that match the element query, you can call `exists()`, which will return either `true` or `false`.

TwigPHP

```
{% set exists = craft.entries()
  .section('news')
  .slug('hello-world')
  .exists() %}
```

```
use craft\elements\Entry;

$exists = Entry::find()
    ->section('news')
    ->slug('hello-world')
    ->exists();
```

### [#](#count)`count()`

If you want to know how many elements match an element query, call `count()`.

TwigPHP

```
{% set count = craft.entries()
  .section('news')
  .count() %}
```

```
use craft\elements\Entry;

$count = Entry::find()
    ->section('news')
    ->count();
```

The `limit` and `offset` parameters will be ignored when you call `count()`.

### [#](#ids)`ids()`

If you just want a list of matching element IDs, you can call `ids()`. This returns an array of integers.

TwigPHP

```
{% set entryIds = craft.entries()
  .section('news')
  .ids() %}
```

```
use craft\elements\Entry;

$entryIds = Entry::find()
    ->section('news')
    ->ids();
```

### [#](#column)`column()`

Combined with a single-column [selection](#selections), the `column()` execution method will return a scalar value for each row instead of an object:

TwigPHP

```
{% set entries = craft.entries()
  .section('news')
  .select(['title'])
  .column() %}

{# -> ['Post A', 'Post B', 'Post C'] #}
```

```
use craft\elements\Entry;

$entries = Entry::find()
    ->section('news')
    ->select(['title'])
    ->column();

// -> ['Post A', 'Post B', 'Post C']
```

An array of scalar values is returned, the type of which depends on the column. Elements are *not* populated when using `column()`, so methods and properties you may be accustomed to using after other queries will not be available.

## [#](#pagination)Pagination

Craft provides the [`{% paginate %}` tag](docs_5x__reference__twig__tags.md#paginate) to simplify the process of splitting results into pages with a stable URL scheme based on the [pageTrigger](docs_5x__reference__config__general.md#pagetrigger) setting.

The `paginate` tag accepts an element query, sets its `offset` param based on the current page, and executes it. The number of results per page is determined by the query’s `limit` param, or defaults to 100.

```
{# Prepare your query, but don’t execute it: #}
{% set newsQuery = craft.entries()
  .section('news')
  .orderBy('postDate DESC') %}

{# Paginate the query into a `posts` variable: #}
{% paginate newsQuery as pageInfo, posts %}

{# Use the `posts` variable just like you would any other result set: #}
{% for post in posts %}
  <article>
    <h2>{{ post.title }}</h2>
    {# ... #}
  </article>
{% endfor %}
```

Paginating a query will only work if the results come back in a stable order and the page size is kept consistent. Using randomized values in query params or in an `orderBy` clause will be disorienting for users.

Results from a [search](#search) query are perfectly fine to paginate.

### [#](#navigating-pages)Navigating Pages

In our example, the `pageInfo` variable (a [Paginate  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-twig-variables-paginate.html) instance) has a number of properties and methods to help you work with paginated results. The variable can be named anything you like, so long as references to it are updated.

`first`
:   Number of the first element on the *current* page. For example, on the second page of 10 results, `first` would be `11`.

`last`
:   Number of the last element on the *current* page. For example, on the first page of 10 results, `last` would be `10`.

`total`
:   Total number of results, across all pages.

`currentPage`
:   The current page. Equivalent to `craft.app.request.getPageNum()`.

`totalPages`
:   The total number of pages the results are spread across. The last page of results may not be complete.

`getPageUrl(page)`
:   Builds a URL for the specified `page` of results.

`getFirstUrl()`
:   Builds a URL for the first page of results. Equivalent to `pageInfo.getPageUrl(1)`.

`getLastUrl()`
:   Builds a URL for the last page of results. Equivalent to `pageInfo.getPageUrl(pageInfo.totalPages)`.

`getNextUrl()`
:   Get a URL for the next page of results. Returns `null` on the last page of results.

`getPrevUrl()`
:   Get a URL for the previous page of results. Returns `null` on the first page of results.

`getNextUrls(num)`
:   Gets up to `num` next page URLs, indexed by their page numbers.

`getPrevUrls(num)`
:   Gets up to `num` previous page URLs, indexed by their page numbers.

`getRangeUrls(start, end)`
:   Returns a list of URLs indexed by their page number. The list will only include valid pages, ignoring out-of-range `start` and `end` values.

`getDynamicRangeUrls(max)`
:   Returns up to `max` page URLs around the current page, indexed by their page numbers.

The values above use a one-based index, so they are human-readable without any additional work.

#### [#](#examples)Examples

You can display a summary of the current page using `pageInfo.total`, `pageInfo.first`, and `pageInfo.last`:

```
Showing {{ pageInfo.first }}–{{ pageInfo.last }} of {{ pageInfo.total }} results.
```

Next and previous links are simple:

```
<nav role="navigation" aria-label="Search result pagination">
  {% if pageInfo.getPrevUrl() %}
    <a href="{{ pageInfo.getPrevUrl() }}">Previous Page</a>
  {% endif %}
  {% if pageInfo.getNextUrl() %}
    <a href="{{ pageInfo.getNextUrl() }}">Next Page</a>
  {% endif %}
</nav>
```

We could improve this for screen readers by including specific page numbers in the labels:

```
{% set prevLinkSummary = "#{pageInfo.currentPage - 1} of #{pageInfo.totalPages}" %}

{{ tag('a', {
  text: 'Previous Page',
  href: pageInfo.getPrevUrl(),
  aria: {
    label: "Previous page (#{prevLinkSummary})"
  }
}) }}
```

We’re using the [`tag()` Twig function](docs_5x__reference__twig__functions.md#tag) to make this a little more readable, but its output is equivalent to a normal anchor element.

More advanced pagination links are also possible with `getDynamicRangeUrls()`:

```
<nav role="navigation" aria-label="Search result pagination">
  <ul>
    {% for p, url in pageInfo.getDynamicRangeUrls(5) %}
      <li>
        {{ tag('a', {
          text: p,
          href: url,
          aria: {
            label: "Go to page #{p} of #{pageInfo.totalPages}",
          },
        }) }}
      </li>
    {% endfor %}
  </ul>
</nav>
```

Notice how our loop uses the keys (`p`) *and* values (`url`) from the returned array—Craft assigns each URL to a key matching its page number!

## [#](#search)Search

Craft gives you access to its [search](docs_5x__system__searching.md) index from any element query. Use the `search` param to narrow results by keywords:

TwigPHP

```
{% set q = craft.app.request.getQueryParam('search') %}

{% set results = craft.entries
  .section('news')
  .search(q)
  .all() %}
```

```
$q = Craft::$app->getRequest()->getQueryParam('search');

$results = Entry::find()
    ->section('news')
    ->search($q)
    ->all();
```

[→

Learn about the supported syntaxes for plain-text search.](docs_5x__development__element-queries.md)

The value passed to `.search()` can come from anywhere—user input via an HTML form (via `craft.app.request`), hard-coded terms, or from another field (like `entry.relatedSearchFilter`). While search is a great tool, it’s generally not appropriate for finding up elements with specific qualities—for example, you *can* search for JPEG assets by calling `.search('extension:jpg')`, but using the dedicated [`.extension('jpg')` query method](docs_5x__reference__element-types__assets.md#extension) will produce faster and more consistent results.

Be aware that exposing records to search *can* lead to [unintended disclosure or enumeration](docs_5x__system__searching.md#development) of content that is not otherwise visible. For example, a query like `craft.entries.section('locations').search(q)` (where `q` is a term provided by a user with some understanding of your content model) could attempt to figure out which stores are managed by people with the last name “Smith” by sending a query like `managedBy:*smith*`.

## [#](#performance-and-optimization)Performance and Optimization

When you start working with lots of data, it’s important to consider how queries affect your pages’ load time. While the [`{% cache %}` tag](docs_5x__reference__twig__tags.md#cache) can be used strategically to avoid major slowdowns, it’s only one of many tools at your disposal.

Turn on the **Debug Toolbar** in your user’s preferences to profile your memory usage and database query counts.

### [#](#eager-loading)Eager Loading

Displaying a list of elements and one or more elements related to each of them (say, blog posts and any tags or categories attached to them) can lead to an “N+1” problem, wherein each result from the main query triggers an additional query. Craft addresses this with [eager-loading](docs_5x__development__eager-loading.md).

[Eager-Loading Elements
→

Eager-loading is a means of fetching nested or related elements in bulk.](docs_5x__development__eager-loading.md)

### [#](#caching-element-queries)Caching Element Queries

Results can be cached with the `cache()` method:

TwigPHP

```
{% set entries = craft.entries()
  .section('news')
  .limit(10)
  .cache()
  .all() %}
```

```
use craft\elements\Entry;

$entries = Entry::find()
    ->section('news')
    ->limit(10)
    ->cache()
    ->all();
```

This cache is separate from fragments cached via [{% cache %} template tags](docs_5x__reference__twig__tags.md#cache), and will only match subsequent queries that have all the same parameters. Caching a query does not guarantee better [performance](#performance-and-optimization), but it can be used strategically—say, to memoize a scalar query result inside a loop (like the total number of entries in a list of categories).

The `cache()` method accepts a `duration` argument, and defaults to your [cacheDuration](docs_5x__reference__config__general.md#cacheduration).

Craft registers an [ElementQueryTagDependency  (opens new window)](https://docs.craftcms.com/api/v5/craft-cache-elementquerytagdependency.html) for you by default, so cache dependencies and invalidation are handled automatically.

### [#](#large-result-sets)Large Result Sets

Sometimes, a query will simply depend on a large number of elements (and [pagination](#pagination) is not possible), or it needs to use the most current data available (so [caching](#caching-element-queries) is off the table).

Populating element models can be resource-intensive, and loading many thousands of records can exhaust PHP’s memory limit. Let’s look at some common places where queries can be optimized to avoid this bottleneck.

#### [#](#counting)Counting

In this example, we just need the number of active users:

SlowOptimized

```
{# Loads and populates all users, then gets the length of the array: #}
{% set totalUsers = craft.users().status('active').all()|length %}
```

```
{# Uses the SQL COUNT(*) function and returns only an integer: #}
{% set totalUsers = craft.users().status('active').count() %}
```

In addition to the memory footprint of the optimized query being many orders of magnitude smaller, we’re also avoiding a huge amount of data transfer between the PHP process and database server!

Using the [`length`](docs_5x__reference__twig__filters.md#length) filter on a query (before it’s been run) will automatically call its [`count()`](#count) execution method to prevent inadvertent performance issues. Other situations in which queries are treated as arrays may not be optimized in the same way.

#### [#](#arithmetic-operations)Arithmetic Operations

Counting isn’t the only operation that the database can do for you! What if we wanted to find the minimum and maximum values for a given field?

SlowOptimized

```
{# Loads field data for every race, then throws out all but one property: #}
{% set races = craft.entries()
  .section('races')
  .all() %}
{% set fastestTime = min(races|column('winningTime')) %}
{% set slowestTime = max(races|column('winningTime')) %}
```

```
{# Set up a base query to select only the times: #}
{% set raceQuery = craft.entries()
  .section('races')
  .select('winningTime') %}

{# Execute it twice with different ordering criteria: #}
{% set fastestTime = clone(raceQuery)
  .orderBy('winningTime ASC')
  .scalar() %}
{% set slowestTime = clone(raceQuery)
  .orderBy('winningTime DESC')
  .scalar() %}
```

`scalar()` is just an [execution method](#executing-element-queries) that returns the first column from the first result—it will always produce a simple, “[scalar  (opens new window)](https://www.php.net/manual/en/function.is-scalar.php)” value.

While `select()` and `orderBy()` accept field handles and ambiguous columns, some SQL functions and expressions (like `MIN()` or `SUM()`) may not. In these cases, you will need to [build a valid expression](#content-and-custom-fields) for extracting the key(s) from the content JSON blob.

#### [#](#lean-selections)Lean Selections

Combining a narrower [selection](#selections) with an execution method that returns results as an array (or explicitly calling `toArray()` while preparing a query) can significantly reduce the amount of memory a query requires.

SlowOptimized

```
{# Load all donor entries with complete native + custom field data: #}
{% set donors = craft.entries()
  .section('donors')
  .all() %}

<ul>
  {% for donor in donors %}
    <li>{{ donor.title }} — {{ donor.lifetimeGiftAmount|money }}</li>
  {% endfor %}
</ul>
```

```
{# Load only donor names and gift amounts: #}
{% set donors = craft.entries()
  .section('donors')
  .select([
    'title',
    'lifetimeGiftAmount'
  ])
  .pairs() %}

<ul>
  {% for name, amount in donors %}
    <li>{{ name }} — {{ amount|money }}</li>
  {% endfor %}
</ul>
```

The `pairs()` [execution method](#executing-element-queries) is a shorthand for creating a key-value hash from the first two columns of each row. Collisions can occur, so it’s safest to use a column you know will be unique for your first selection!

Not all attributes can be fetched this way—element URLs, for instance, are built on-the-fly from their URIs and site’s base URL. Relational data may also be more difficult to work with, as it often has to be eager-loaded alongside fully-populated element models.

## [#](#advanced-element-queries)Advanced Element Queries

Element queries are specialized [query builders  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/db-query-builder) under the hood, so they support most of the same methods provided by [craft\db\Query  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html). The most common methods appear below—argument lists are non-exhaustive, and are only provided to differentiate them.

You may call [craft\db\Query::asArray()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-asarray) to skip populating element models with results and return matching rows’ data as an associative array. Altering [selections](#selections) in particular can make elements behave erratically, as they may be missing critical pieces of information.

### [#](#content-and-custom-fields)Content and Custom Fields

We typically recommend using the [methods corresponding to your fields’ global handles](#querying-with-custom-fields) to narrow element queries—but sometimes, criteria can only be expressed with direct use of ActiveRecord’s `where()` and `andWhere()`.

Most custom field values are stored in a single JSON column, keyed by their unique field instance UUID. Craft handles this automatically when using a field or field instance’s built-in query methods (i.e. `.myCustomDateField('<= 2025-11-05')`) by building the appropriate “JSON extraction” expression.

Craft also attempts to detect use of field instance handles in `.where()` and `.orderBy()`, and map them to the corresponding extraction expression.  [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Field instance handle mappings for query constraints and ordering was first available in version 5.6.0 of Craft.")

```
{% set safeStews = craft.entries()
  .section('dishes')
  .andWhere([
    ['>', 'scovilleRating', '1000'],
    ['<', 'scovilleRating', '9000'],
  ])
  .andWhere([
    'not',
    ['like', 'primaryProtein', '%shellfish%'],
    ['like', 'primaryProtein', '%shrimp%'],
    ['like', 'primaryProtein', '%scallop%'],
  ])
  .orderBy('scovilleRating')
  .all() %}
```

Note that our `scovilleRating` constraints (`'1000'` and `'9000'`) are passed as *strings*, not *integers*. This is necessary, as JSON values are not “cast” during comparison when using `where()`, directly.

Craft can’t *always* infer what should be a plain column name or a field or field instance handle, when working with advanced [condition](#conditions) and [execution](#query-execution) methods. This means you are responsible for building equivalent field value expressions. Typically, this involves a field instance handle and a *field layout provider* (like an entry type, asset volume, category group, or other component that manages a field layout):

TwigPHP

```
{% set valueSql = fieldValueSql(entryType('post'), 'sourceMedia') %}

{% set entriesFromPhysicalMedia = craft.entries()
  .section('news')
  .andWhere([
    'or like',
    valueSql,
    ['print', 'paper', 'press']
  ])
  .all() %}
```

```
$entryType = Craft::$app->getEntries()->getEntryTypeByHandle('post');
$fieldLayout = $entryType->getFieldLayout();
$fieldInstance = $fieldLayout->getFieldByHandle('sourceMedia');

$entriesFromPhysicalMedia = Entry::find()
    ->section('news')
    ->andWhere([
      'or like',
      $fieldInstance->getValueSql(),
      ['print', 'paper', 'press'],
    ])
    ->all();
```

Each element type has a unique means of accessing the relevant field layout provider:

Assets
:   Asset field layouts are provided by their volumes:

    ```
    {% set provider = craft.app
      .volumes
      .getVolumeByHandle('myAssetVolume') %}
    ```

Entries
:   You can get an entry type via the `entries` service…

    ```
    {% set provider = craft.app
      .entries
      .getEntryTypeByHandle('myEntryType') %}
    ```

    …or use the [Twig helper](docs_5x__reference__twig__functions.md#entrytype):

    ```
    {% set provider = entryType('myEntryType') %}
    ```

Categories
:   Categories’ field layouts are defined by their *group*:

    ```
    {% set provider = craft.app
      .categories
      .getGroupByHandle('myCategoryGroup') %}
    ```

Global Sets
:   Global sets are unique, in that they provide their own field layouts:

    ```
    {% set provider = craft.app
      .globals
      .getSetByHandle('myGlobalSet') %}
    ```

Tags
:   Like categories, tags’ field layouts come from their *group*:

    ```
    {% set provider = craft.app
      .tags
      .getTagGroupByHandle('myTagGroup') %}
    ```

Pass any of these `provider` variables to `fieldValueSql()` along with the desired field instance handle to build the required expression:

```
{% set valueSql = fieldValueSql(provider, 'sourceMedia') %}
```

Addresses and users do not have field layout providers. Instead, you can construct the correct expression via their field layouts, directly:

Address
:   Use the `addresses` service to load the single address field layout:

    ```
    {% set valueSql = craft.app
      .addresses
      .getFieldLayout()
      .getFieldByHandle('myFieldHandle')
      .getValueSql() %}
    ```

User
:   There is no analogous API for the user field layout, but you can get it directly by its class name—it is guaranteed to be unique:

    ```
    {% set valueSql = craft.app
      .fields
      .getLayoutByType('craft\\elements\\User')
      .getFieldByHandle('myFieldHandle')
      .getValueSql() %}
    ```

If you have an address or user element in a variable, you can always call `element.getFieldLayout()`, then get the field layout element and value SQL. This can produce unexpected results for element types that support more than one field layout.

### [#](#fixed-ordering)Fixed Ordering

When using `.id()` to query for elements with a specific set of IDs, you can call `.fixedOrder()` to retain their positions. This alleviates some problems when [limiting](#selections) or [paginating](#pagination) sets of results that are in a prescribed order.

```
{% set someExternalApiResult = ['SKU-C', 'SKU-R', 'SKU-A', 'SKU-F', 'SKU-T', '...'] %}

{# Pre-flight a query to get a SKU-to-ID map: #}
{% set internalIdMatches = craft.entries()
  .select(['id', 'sku'])
  .indexBy('sku')
  .asArray()
  .all() %}

{# Translate SKUs to internal IDs, and load the entries in that order: #}
{% set orderedMatches = craft.entries()
  .id(someExternalApiResult | map(sku => internalIdMatches[sku].id))
  .fixedOrder()
  .all() %}
```

### [#](#selections)Selections

Selections modify what columns and rows are returned.

[select() (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#select()-detail) and [addSelect() (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#addSelect()-detail)
:   Define a list of columns to `SELECT`, or add columns to an existing selection. Craft automatically resolves custom field handles based on the possible field layouts.  [5.5.0+](https://github.com/craftcms/cms/blob/5.5.0/CHANGELOG.md "Automatic resolution of custom field handles in query selections was first available in version 5.5.0 of Craft.")

[distinct() (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#distinct()-detail)
:   Return only rows that have a unique combination of values in the provided column(s).

[groupBy($columns) (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#groupBy()-detail)
:   Combine or flatten database rows based on the value of one or more columns. Often used in combination with aggregate selections or [execution methods](#query-execution) like `.sum(columnName)`. Note that this is *not* equivalent to or compatible with the [`group` Twig filter](docs_5x__reference__twig__filters.md#group) or the [collection](docs_5x__development__collections.md) method of the same name, which operate on arrays, in-memory.

[limit($n) (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#limit()-detail)
:   Set a maximum number of results that can be returned.

[offset($n) (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#offset()-detail)
:   Skip the specified number of matching rows.

### [#](#joins)Joins

In most cases, Craft automatically `JOIN`s the appropriate tables so that your elements are populated with the correct data. However, additional `JOIN`s can be useful in [plugin development](docs_5x__extend.md) or for doing deeper analysis of your content.

[innerJoin($table, $condition) (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#innerJoin()-detail)
:   Adds an `INNER JOIN` clause for the target table, using the provided condition.

[leftJoin($table, $condition) (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#leftJoin()-detail)
:   Adds a `LEFT JOIN` clause for the target table, using the provided condition.

[rightJoin($table, $condition) (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#rightJoin()-detail)
:   Adds a `RIGHT JOIN` clause for the target table, using the provided condition.

`JOIN` conditions are generally expected to be in this format:

```
$popularAuthors = craft\elements\Entry::find()
  ->select([
    'users.fullName as name',
    'COUNT(*) as postCount',
  ])
  ->groupBy('entries.authorId')
  ->leftJoin('{{%users}}', '[[entries.authorId]] = [[users.id]]')
  ->asArray()
  ->all();
```

Craft prepares two queries when fetching elements (a main query and a “subquery”) and applies `JOIN`s to both, so that you can use the tables for filtering *and* for selections. Read more about the architecture of element queries in the [extension documentation](docs_5x__extend__element-types.md#element-query-class).

Adding columns to your selection from other tables may cause errors when populating elements, as they will not have a corresponding class property. Call `asArray()` to return your results as a plain associative array, or consider [attaching a `Behavior`](docs_5x__extend__behaviors.md).

### [#](#conditions)Conditions

Exercise caution when using these methods directly—some will completely overwrite the existing query conditions and cause unpredictable results like allowing drafts, revisions, pending and disabled entries, or elements from other sites to leak into the result set.

Specific [element type queries](#element-types) and [custom field methods](#querying-with-custom-fields) often provide a more approachable and reliable API for working with the database, and will modify the query in non-destructive ways.

The following methods will work on any “real” database columns, but may require building an [appropriate expression for custom field values](#content-and-custom-fields).

[where() (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#where()-detail)
:   Directly set the query’s `WHERE` clause. See the warning, above.

[andWhere() (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#andWhere()-detail)
:   Add expressions to the `WHERE` clause. Useful if the provided [element type-specific query methods](#element-types) can’t achieve an advanced condition required by your site or application.

[orWhere() (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#orWhere()-detail)
:   Starts a new `WHERE` clause.

[filterWhere() (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#filterWhere()-detail)
:   Same as `where()`, but ignores `null` values in the passed conditions.

[andFilterWhere() (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#andFilterWhere()-detail)
:   Same as `andWhere()`, but ignores `null` values in the passed conditions.

[orFilterWhere() (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-querytrait#orFilterWhere()-detail)
:   Same as `orWhere()`, but ignores `null` values in the passed conditions.

### [#](#query-execution)Query Execution

Some of these methods are discussed in the [Executing Element Queries](#executing-element-queries) section.

[all() (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#all()-detail) — `craft\base\Element[]`
:   Array of populated element models.

[collect() (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-collect) — `Illuminate\Support\Collection`
:   Same as `all()`, but wrapped in a [Collection](docs_5x__development__collections.md).

[one() (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#one()-detail) — `craft\base\Element|null`
:   Element model or `null` if none match the criteria.

[nth($n) (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-nth) — `craft\base\Element|null`
:   Element model or `null` if one doesn’t exist at the specified offset.

[exists() (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#exists()-detail) — `boolean`
:   Whether or not there are matching results.

[count() (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#count()-detail) — `int`
:   The number of results that would be returned.

[column() (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#column()-detail) — `array`
:   Array of scalar values from the first selected column.

[scalar() (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#scalar()-detail) — `int|float|string|boolean`
:   A single, scalar value, from the first selected column of the matching row.

[sum($column) (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#sum()-detail) — `int|float`
:   Total of values in `$column` across all matching results

[average($column) (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#average()-detail) — `int|float`
:   Average of all `$column` values matching results

[min($column) (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#min()-detail) — `int|float`
:   Minimum value in `$column` among matching results

[max($column) (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-query#max()-detail) — `int|float`
:   Maximum value in `$column` among matching results

[pairs() (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-pairs) — `array`
:   The first selected column becomes the returned array’s keys, and the second, its values. Duplicate keys are overwritten, so the array may not have the same number of elements as matched the query.

When customizing an element query, you can call [getRawSql()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-query.html#method-getrawsql) to get the full SQL that is going to be executed by the query, so you have a better idea of what to modify.

```
{{ dump(query.getRawSql()) }}
```

## [#](#headless-applications)Headless Applications

Craft can act as a headless content back-end for your static or client-rendered website. There are two main ways of making content available to applications that exist outside Craft’s built-in Twig templating layer:

### [#](#element-api)Element API

The first-party [Element API  (opens new window)](https://plugins.craftcms.com/element-api) allows you to map *endpoints* to element queries with a combination of static and dynamic criteria and serve JSON-serialized results.

### [#](#graphql)GraphQL

Craft includes a [GraphQL API](docs_5x__development__graphql.md) with configurable schemas. Many of the same element query basics apply when accessing elements via GraphQL.

For security reasons, not all query builder features are available via GraphQL. Some advanced queries may need to be executed separately and combined by the client.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/development/element-queries.md)
