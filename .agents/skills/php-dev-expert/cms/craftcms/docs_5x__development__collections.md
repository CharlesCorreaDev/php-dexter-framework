# Collections | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/development/collections

---

# Collections

- ### On this Page

  - [Methods](docs_5x__development__collections.md#methods)
  - [Element Collections](docs_5x__development__collections.md#element-collections)

[Collections  (opens new window)](https://laravel.com/docs/10.x/collections) come from the [Laravel  (opens new window)](https://laravel.com/) ecosystem, and provide a fluid way of working with array-like data.

You can create a `Collection` anywhere:

TwigPHP

```
{% set list = collect(['Green', 'Teal', 'Blue']) %}
```

```
use Illuminate\Support\Collection;

$colors = Collection::make(['Green', 'Teal', 'Blue']);
```

Collections can be used in most situations that an array would be:

```
<ul>
  {% for color in colors %}
    {# `color` is one of our original three strings: #}
    <li>{{ color }}</li>
  {% endfor %}
</ul>
```

If a collection is created from an array that contains only [elements](docs_5x__system__elements.md), an [`ElementCollection`](#element-collections) is returned, instead.

## [#](#methods)Methods

[Dozens of convenience methods  (opens new window)](https://laravel.com/docs/10.x/collections#available-methods) are available on every collection to simplify cumbersome or error-prone operations.

These methods can be chained together to process data in an elegant way. Take this average review score logic:

```
{% set recentReviews = craft.entries()
  .section('reviews')
  .relatedTo({
    targetElement: product,
  })
  .postDate(">= #{now|date_modify('-1 month')}")
  .collect() %}

{{ recentReviews.pluck('rating').average() }}
```

Not all collection methods return another collection! In this example, [`.pluck()`  (opens new window)](https://laravel.com/docs/10.x/collections#method-pluck) *does* (containing just the `rating` field values), but [`.average()`  (opens new window)](https://laravel.com/docs/10.x/collections#method-average) *doesn’t* (instead returning a [float  (opens new window)](https://www.php.net/manual/en/language.types.float.php)). As Collections are intended for working with lists, methods that return scalar values can only be used at the “end” of a chain.

If at any point you need a plain array from a collection, call its `.all()` method.

Some common array-manipulation features are already implemented in Craft as Twig [filters](docs_5x__reference__twig__filters.md) or [functions](docs_5x__reference__twig__functions.md), but equivalent methods are usually available via Collections. Their supported arguments and signatures may differ slightly, so consult the documentation if you are combining or switching between features.

Until Craft [5.6.0](github:craftcms/cms/releases/5.6.0), Twig’s default configuration did not parse anonymous functions or “closures” in every expression context. The [`nystudio107/craft-closure` package  (opens new window)](https://github.com/nystudio107/craft-closure/) provides a shim to work around this limitation in earlier versions.

## [#](#element-collections)Element Collections

Use the [`.collect()` query execution method](docs_5x__development__element-queries.md#query-execution) (in place of `.all()`) to return elements as a special [craft\elements\ElementCollection  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-elementcollection.html). You can also wrap an existing list of elements with `collect()`, and Craft will automatically return an `ElementCollection`:

```
{# These produce the same results: #}
{% set posts = craft.entries().section('news').collect() %}
{% set posts = collect(craft.entries().section('news').all()) %}
```

[Eager-loaded elements](docs_5x__development__eager-loading.md) are also wrapped in an `ElementCollection` that allows them to behave a bit like an element query—you can safely call `.all()` on any relational field without worrying about whether it was eager-loaded or not—or use `.with()` to eager-load another set of nested elements!

Element collections have a few extra methods that make them more interoperable with element queries (like the `.ids()` and `.with()` methods), or behave more predictably when doing arithmetic (like `.merge()`, `.unique()`, or `.intersect()`):

`find(target, default)`
:   Reduce the collection to a single element by passing an element or one or more element IDs.

`with(eagerLoadingMap)`
:   [Eager-loads](docs_5x__development__eager-loading.md) one or more nested/related sets of elements using the provided map.

`contains(key, operator, value)`
:   Behaves identically to the native method, except when used with a single argument. If an element is passed, it is tested against the ID and site ID of each element in the collection; if an integer is passed, it is compared to the ID of each element in the collection.

`ids()`
:   Returns a new collection containing only the elements’ IDs. Equivalent to `.pluck('id')`.

`merge(items)`
:   Combines this set of elements with another one. Any elements in the current collection that share an ID *and* site ID with an incoming element are replaced. *Keys are not preserved.*

`fresh()`
:   Re-fetches all elements in the collection from the database. Elements that no longer exist in the database are dropped from list.

`diff(items)`
:   Returns elements that are present only in the current collection, as though the incoming elements are “subtracted” from it.

`intersect(items)`
:   Returns elements present in both the current *and* incoming lists.

`unique(key)`
:   Reduces the collection to elements with unique IDs, via `keyBy('id')`. For a list of elements with unique IDs *and* site IDs, use `unique('siteSettingsId')`.

`only(keys)`
:   Reduce the collection to elements with the provided ID(s).

`except(keys)`
:   Remove elements with the provided ID(s) from the collection.

`render()`
:   Render [element partials](docs_5x__system__elements.md#rendering-elements) for each element in the collection.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/development/collections.md)
