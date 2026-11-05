# Eager-Loading Elements | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/development/eager-loading

---

# Eager-Loading Elements

- ### On this Page

  - [Identifying Candidates](docs_5x__development__eager-loading.md#identifying-candidates)
  - [Lazy Eager-Loading](docs_5x__development__eager-loading.md#lazy-eager-loading)
  - [The .with() Query Param](docs_5x__development__eager-loading.md#the-with-query-param)
  - [Accessing Eager-Loaded Elements](docs_5x__development__eager-loading.md#accessing-eager-loaded-elements)
  - [Eager-Loading Multiple Sets of Elements](docs_5x__development__eager-loading.md#eager-loading-multiple-sets-of-elements)
  - [Eager-Loading Nested Sets of Elements](docs_5x__development__eager-loading.md#eager-loading-nested-sets-of-elements)
  - [Defining Custom Parameters on Eager-Loaded Elements](docs_5x__development__eager-loading.md#defining-custom-parameters-on-eager-loaded-elements)
  - [Eager-Loading Image Transforms](docs_5x__development__eager-loading.md#eager-loading-image-transforms)
  - [Eligible Fields and Attributes](docs_5x__development__eager-loading.md#eligible-fields-and-attributes)

When you are working with a list of elements and need to access their nested or related elements, *eager-loading* can help optimize your [element queries](docs_5x__development__element-queries.md).

Much of this is handled by Craft, automatically.
However, there are opportunities to tune certain queries with [lazy eager-loading](#lazy-eager-loading) and manual [eager-loading maps](#the-with-query-param).

The N+1 Problem

Let’s look at a [template](docs_5x__development__templates.md) that loops through a list of news posts (entries), and displays an image (asset) attached to each one.

```
{% set posts = craft.entries()
  .section('news')
  .all() %}

{% for post in posts %}
  <article>
    {% set image = post.featureImage.one() %}

    {% if image %}
      {{ image.getImg() }}
    {% endif %}

    {# ... #}
  </article>
{% endfor %}
```

In addition to the main query for the entry elements, an additional query is executed for *each* article to find the attached asset. The number of queries will be *N* (the number of entries) *+ 1* (the initial entries query). If there are 50 entries, this innocent-looking template will cost the page 51 queries!

If we were to then display the name of the user who uploaded each image (i.e. `image.uploader.fullName`) or a list of categories for each entry (i.e. `post.topics.all()`), we would introduce a *2N+1* or *3N+1* query, whereby each entry in the initial query would trigger *two* or *three* additional queries, for a minimum of 101. Supposing each query takes a couple of milliseconds, this can mean your site spends 250–750ms *just waiting for data*.

Eager-loading allows Craft to proactively load related or nested elements *in bulk*, while keeping track of where they all belong.

Not every relationship needs to be eager-loaded! We have a list of recommendations for how to identify [opportunities for optimization](#identifying-candidates).

## [#](#identifying-candidates)Identifying Candidates

Auditing your templates for performance problems solvable with eager-loading can be tricky, but you may be able to narrow down what you’re looking for with these common bottlenecks:

- [Nested](#eager-loading-nested-sets-of-elements) `{% for %}` loops;
- Accessing or outputting data from nested entries in a Matrix field;
- Getting information about an entry’s author, within a loop;
- Using multiple [asset transforms](#eager-loading-image-transforms);
- Using relational fields within a loop;

The exact patterns here may differ template-to-template, and don’t always involve an explicit call to a [query execution method](docs_5x__development__element-queries.md#query-execution) (like `.one()` in the example above)! Implicit queries may be masked by filters like `|first` or `|slice`, or when iterating over a relational field’s value in a `for` loop.

Not all of these situations will require (or benefit from) eager-loading—the goal is only to consider which of your projects’ features *may* be candidates.

## [#](#lazy-eager-loading)Lazy Eager-Loading New!

Element queries in Craft have an `.eagerly()` query method that simplifies eager-loading of relational fields.
Most projects can eschew custom eager-loading maps (using the [`.with()` method](#the-with-query-param)) in favor of calling `.eagerly()` on down-stream element queries:

Using .with()Using .eagerly()

```
{% set posts = craft.entries()
  .section('news')
  .with([
    ['featureImage', { withTransforms: ['large'] }],
    ['topics'],
  ])
  .all() %}

{% for post in posts %}
  {% set image = post.featureImage.one() %}

  <article>
    <h2>{{ post.title }}</h2>

    {% if image %}
      {{ image.getImg('large') }}
    {% endif %}

    {{ post.summary|md }}

    <ul>
      {% for topic in post.topics %}
        <li>{{ topic.getLink() }}</li>
      {% endfor %}
    </ul>
  </article>
{% endfor %}
```

```
{% set posts = craft.entries()
  .section('news')
  .all() %}

{% for post in posts %}
  {% set image = post.featureImage.eagerly().one() %}

  <article>
    <h2>{{ post.title }}</h2>

    {% if image %}
      {{ image.getImg('large') }}
    {% endif %}

    {{ post.summary|md }}

    <ul>
      {% for topic in post.topics.eagerly().all() %}
        <li>{{ topic.getLink() }}</li>
      {% endfor %}
    </ul>
  </article>
{% endfor %}
```

In this example, our primary query (for entries in the *News* section) no longer needs to be concerned about what nested or related queries *might* be used—instead, each query that stems from an entry returned by the primary query should use `.eagerly()` to let Craft know that there is an opportunity to fetch a set of elements *as though they had been eager-loaded*, up-front. The main difference between this strategy and `.with()` is that—as the name “lazy” suggests—nested and related elements aren’t loaded until Craft actually evaluates logic that needs them; templates (like [element partials](docs_5x__system__elements.md#rendering-elements)) can request additional relational data without impacting the upstream query, while avoiding optimistic-but-unnecessary up-front queries.

After calling `.eagerly()`, lazily eager-loaded relations are used just like normal relational field values. This means your templates can continue chaining `.one()` or `.all()`, use them like arrays in a loop, or pass them to filters like `|first`.

Some [native attributes](#eligible-fields-and-attributes) currently do not support lazy eager-loading due to the way many of their values are accessed, but they can be eager loaded using `.with()`.

## [#](#the-with-query-param)The `.with()` Query Param

The purpose of the `.with()` param is to tell Craft which related or nested elements you are apt to need, in advance. With that information, Craft is able to fetch them all up front, in as few queries as possible.

Here’s how to apply the `with` param to our example:

```
{% set entries = craft.entries()
  .section('news')
  .with(['assetsField'])
  .all() %}

{% for entry in entries %}
  {% set image = entry.assetsField.one() %}

  {# Make sure we actually have an asset element: #}
  {% if image %}
    <img src="{{ image.url }}" alt="{{ image.title }}">
  {% endif %}
{% endfor %}
```

This template code will only cost three queries (one to fetch the entries, one to determine which assets should be eager-loaded, and one to fetch the assets), and the number of queries will not grow proportional to the number of elements being displayed. The entries are then are automatically populated with their respective related asset(s).

### [#](#matrix-and-field-contexts)Matrix and Field Contexts

When building an eager-loading plan, you may prepend a valid field layout provider’s handle to a field to narrow its scope or avoid ambiguity.
For instance, a Matrix field with two media-driven entry types (*Two-Up* and *Gallery*) might both use an asset field with the handle `images`, but the design only uses information about the uploader to generate captions in the proposed full-screen gallery interface:

```
{% set sections = entry.myContentField
  .with([
    'gallery:images.uploader',
    'twoUp:images',
  ])
  .all() %}

{# ... #}
```

If we were to use a single `images.uploader` path, Craft would unnecessarily load user data for the *Two-Up* sections, as well.
This specific example is not apt to have a significant performance impact in most projects; however, similarly-structured queries returning hundreds or thousands of elements with many unique relations may benefit from reduced memory usage.

## [#](#accessing-eager-loaded-elements)Accessing Eager-Loaded Elements

Eager-loaded elements are returned as a [collection](docs_5x__development__collections.md)—or more specifically, an [craft\elements\ElementCollection  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-elementcollection.html).
This means that (in most cases) eager-loaded and non-eager-loaded elements can be treated in the same way at the template level, including as an iterable in `for` loops.

## [#](#eager-loading-multiple-sets-of-elements)Eager-Loading Multiple Sets of Elements

If you have multiple sets of elements you wish to eager-load via the primary query, add those field handles to your `.with()` parameter:

```
{% set posts = craft.entries
  .section('news')
  .with([
    'topics',
    'featureImage',
  ])
  .all() %}

{% for post in posts %}
  <article>
    {# Use the eager-loaded elements normally: #}
    {% for topic in post.topics %}
      {{ topic.getLink() }}
    {% endfor %}
  </article>
{% endfor %}
```

[Lazy eager-loading](#lazy-eager-loading) works the same for any number of eager-loaded fields. Each query that stems from an element in the primary query should use `.eagerly()` to signal that it will be used similarly in later iterations of a loop.

If you need to conditionally add eager-loading criteria, use the `.andWith()` method:

```
{% set postsQuery = craft.entries()
  .section('news')
  .with(['topics']) %}

{% if unfurlPosts %}
  {% do postsQuery.andWith(['featureImage']) %}
{% endif %}

{% set posts = postsQuery.all() %}

{# ... #}
```

Craft will merge your criteria into a single plan before executing the query.

## [#](#eager-loading-nested-sets-of-elements)Eager-Loading Nested Sets of Elements

It’s also possible to optimize loading of elements nested two or more levels deep, using a special syntax. Suppose the topics in our news feed from previous examples each had a thumbnail or icon:

```
{% set posts = craft.entries()
  .section('news')
  .with([
    'topics.thumbnail',
  ])
  .all() %}

{# Main loop: #}
{% for post in posts %}
  <article>
    <h2>{{ post.title }}</h2>

    {# ... #}

    {# Nested topics loop: #}
    <ul>
      {% for topic in post.topics %}
        {% set icon = topic.thumbnail.one() %}

        <li>
          <a href="{{ topic.url }}">
            {% if icon %}
              {{ icon.getImg() }}
            {% endif %}
            <span>{{ topic.title }}</span>
          </a>
        </li>
      {% endfor %}
    </ul>
  </article>
{% endfor %}
```

A dot (`.`) in the eager-loading map indicates that another set of elements on the eager-loaded results *also* needs to be loaded. Craft expands this notation into a multi-stage eager-loading “plan” and fetches each layer of elements in a batch. Each segment of an eager-loading path will be a field handle.

The same optimization is possible with [lazy eager-loading](#lazy-eager-loading)—the `.with()` param can be omitted from the main query, and `.eagerly()` can be added to all the nested queries:

```
{% set posts = craft.entries()
  .section('news')
  .all() %}

{% for post in posts %}
  <article>
    {# ... #}

    <ul>
      {% for topic in post.topics.eagerly().all() %}
        {% set icon = topic.thumbnail.eagerly().one() %}

        {# ... #}
      {% endfor %}
    </ul>
  </article>
```

Elements that are the target of multiple relations (as you might expect with a set of categories or tags) are only loaded once per batch. For example, if we were displaying a list of 100 news articles that were each assigned one of 10 categories, eager-loading the categories would never fetch more than 10 elements—Craft assigns the returned categories to *all* the articles they were related to.

## [#](#defining-custom-parameters-on-eager-loaded-elements)Defining Custom Parameters on Eager-Loaded Elements

You can define custom parameters that will get applied as elements are being eager-loaded, by replacing its handle with an array that has two values: the handle, and a [hash](docs_5x__development__twig.md#hashes) that defines the parameters that should be applied.

```
{% set entries = craft.entries()
  .section('news')
  .with([
    ['assetsField', { kind: 'image' }],
  ])
  .all() %}
```

When eager-loading nested sets of elements, you can apply parameters at any level of the eager-loading path.

```
{% set entries = craft.entries()
  .section('news')
  .with([
    ['featureImage', { dateUploaded: ">= #{now|date_modify('-1 month')}" }],
    ['authors', { group: 'staff' }],
    ['topic.thumbnail', { kind: 'image' }],
  ])
  .all() %}
```

The accepted parameters correspond to the kind of element that each relationship uses—this example uses the [asset query](docs_5x__reference__element-types__assets.md#querying-assets)’s `dateUploaded` and `kind` params, and the [user query](docs_5x__reference__element-types__users.md#querying-users)’s `group` param.

You can also provide nested `with` directives via these hashes. Here’s an example where we’re loading each topic’s `thumbnail` and `sectionEditor`, as well as all their `descendants` (presuming that our topic category group is a multi-level structure):

```
{% set entries = craft.entries()
  .section('news')
  .with([
    ['topic', {
      with: [
        ['thumbnail', { kind: image }],
        ['descendants'],
        ['sectionEditor'],
      ]
    }]
  ])
  .all() %}
```

The equivalent “flat” eager-loading map would look like this—note the repetition:

```
[
  ['topic.thumbnail', { kind: 'image' }],
  ['topic.descendants'],
  ['topic.sectionEditor'],
]
```

Ultimately, Craft normalizes both maps to something more like the first example, then loads each “layer” in sequence—the topics have to be loaded before anything attached to them!

## [#](#eager-loading-image-transforms)Eager-Loading Image Transforms

Another *N+1* problem occurs when looping through a set of assets, and applying image transforms to each of them. For each transform, Craft needs to execute a query to see if the transform already exists.

This problem can be solved with the `withTransforms` asset criteria parameter:

```
{% set assets = entry.assetsField
  .withTransforms([
    'heroImage',
    { width: 100, height: 100 }
  ])
  .all() %}
```

Note that each transform definition you want to eager-load can either be a string (the handle of a transform defined in Settings → Assets → Image Transforms) or a [hash](docs_5x__development__twig.md#hashes) that defines the transform properties.

Using the `withTransforms` param has no effect on how you’d access image transforms further down in the template.

Image transform indexes can be eager-loaded on assets that are also eager-loaded:

```
{% set entries = craft.entries()
  .with([
    ['assetsField', {
      withTransforms: ['heroImage']
    }]
  ])
  .all() %}
```

## [#](#eligible-fields-and-attributes)Eligible Fields and Attributes

[Relational fields](docs_5x__system__relations.md) are the most common candidate for eager-loading.
Fields are always eager-loaded using their handle.
In this example, `manufacturer` is an [entries field](docs_5x__reference__field-types__entries.md) attached to each “car” entry:

```
{% set carsWithManufacturers = craft.entries()
  .section('cars')
  .with([
    ['manufacturer'],
  ])
  .all() %}
```

Fields that manage nested elements (like [Matrix](docs_5x__reference__field-types__matrix.md) or [addresses](docs_5x__reference__field-types__addresses.md)) use the same syntax:

```
{% set carsWithSaleHistory = craft.entries()
  .section('cars')
  .with([
    ['saleHistory'],
  ])
  .all() %}
```

The handle you use for eager-loading respects any overrides set in the relevant field layouts.

Each [element type](docs_5x__system__elements.md) supports a variety of unique eager-loadable attributes, as well:

All Element Types
:   - Same element in other sites: `localized`
    - Drafts: `drafts`
    - Draft creators: `draftCreator`
    - Revisions: `revisions`
    - Revision creators: `revisionCreator`
    - Current revision: `currentRevision`

    (Not all element types actually make use of sites, drafts, and revisions.)

All [Nested Elements](docs_5x__system__elements.md#nested-elements)
:   - Owners: `owner`
    - Primary owners: `primaryOwner`

    Note that owners may not have a uniform element type.

Structure elements
:   Entries in structure sections, categories, and any other hierarchical elements support these:

    - Immediate children: `children`
    - All descendants: `descendants`
    - Immediate parent: `parent`
    - All ancestors: `ancestors`

Assets
:   - Uploader: `uploader`

Entries
:   - First selected author: `author`
    - All authors: `authors`

Users
:   - Addresses: `addresses`
    - Profile photo: `photo`

Like custom relational fields, some commonly-used attributes (like `authors` and `owner`) support automatic eager-loading.
If you are noticing sluggish queries, it never hurts to add an attribute to an eager-loading map.

### [#](#non-element-relationships)Non-Element Relationships

Fields and attributes that don’t use element queries (or don’t ultimately resolve to one or more elements) are generally not eager-loadable—and trying to eager-load them may result in an error. This includes scalar field values (like strings and numbers) as well as complex fields like [table](docs_5x__reference__field-types__table.md).

Some elements may also expose query methods that optimize the loading of associated *non-element* records (like [asset transforms](#eager-loading-image-transforms)), but their interfaces are not part of the core element-only eager-loading system, and may not support automatic or lazy eager-loading.

### [#](#reverse-relationships)Reverse Relationships

While related elements can be queried in either direction using [`sourceElement` and `targetElement` options](docs_5x__system__relations.md#sources-and-targets), it is only possible to declaratively eager-load elements that are the [target](docs_5x__system__relations.md#sources-and-targets) of a relationship. If you need to query for other elements that point *to* an element in the main query, the queries must be written separately:

```
{# We can’t load these poets *and* their poems in one query: #}
{% set poets = craft.users()
  .group('poets')
  .all() %}

{# This second query takes the list of poets and loads all their poems: #}
{% set poems = craft.entries()
  .section('poems')
  .authorId(poets|column('id'))
  .all() %}

{# Then, we can group those poems by their author’s ID: #}
{% set poemsByAuthorId = poems|group('authorId') %}

{% for poet in poets %}
  <article>
    <h2>Poems by: {{ poet.fullName }}</h2>
    <ul>
      {% for poem in poemsByAuthorId[poet.id] ?? [] %}
        <li>{{ poem.title }}</li>
      {% endfor %}
    </ul>
  </article>
{% endfor %}
```

Of course, if each *poet* user element had a custom field in which administrators selected “Featured Poems,” that *would* be eager-loadable:

```
{% set poets = craft.users()
  .group('poets')
  .with([
    ['featuredPoems'],
  ])
  .all() %}
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/development/eager-loading.md)
