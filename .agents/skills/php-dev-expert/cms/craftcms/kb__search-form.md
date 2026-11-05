# Search Form | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/search-form

---

Search Knowledge Base

# Search Form

The same [search](https://craftcms.com/docs/5.x/system/searching.html) features that are available throughout the control panel can be made available to front-end users with a simple [HTML form](https://craftcms.com/docs/5.x/development/forms.html). This guide covers a basic entry search tool—but search works across all of Craft’s [element types](https://craftcms.com/docs/5.x/system/elements.html)!

## Search Results [#](#search-results "Direct link to Search Results")

We’ll start by creating a template to display results. This might sound backwards, but it’ll help inform how we build the form, afterwards!

Start by creating `templates/search.twig`, and add this basic entry query and loop:

```
{# Load entries from all sections (but skip nested entries): #}
{% set results = craft.entries()
  .section('*')
  .all() %}

{% if results is not empty %}
  <ul>
    {% for result in results %}
      <li>{{ result.getLink() }}</li>
    {% endfor %}
  </ul>
{% else %}
  <p>No results, sorry!</p>
{% endif %}
```

At this stage, the “results” don’t provide any value for the user. Let’s update the query so it reacts to a query string parameter.

```
{% set query = craft.app.request.getQueryParam('query') %}
{% set results = craft.entries()
  .section('*')
  .search(query)
  .all() %}

{# ... #}
```

Capturing the query parameter (`query`) allows us to pass it to the [`.search()`](https://craftcms.com/docs/5.x/development/element-queries.html#search) query method—and make the “no results” state more responsive:

```
<p>Sorry, we searched high and low for “{{ query }}” but couldn’t find anything!</p>
```

In your browser, visit `https://my-project.ddev.site/search?query={term}`, where `{term}` is a keyword you would expect to be indexed for entries in your project.

![](https://craftcms.com/dist/images/icon-tip.svg)

No results? Craft always indexes entry titles, but you may need to enable **Use this field’s values as search keywords** for a field or two before the index contains enough keywords for search to be useful! Be sure and [rebuild your search index](https://craftcms.com/docs/5.x/system/searching.html#rebuilding-your-search-indexes) after making these changes.

Let’s make one final adjustment to our query, to ensure the results are displayed by relevance (instead of post date):

```
{% set results = craft.entries()
  .section('*')
  .search(query)
  .orderBy('score')
  .all() %}
```

You can only order by `score` in combination with the `.search()` method. Craft doesn’t “rank” element query results under any other circumstances!

## Search Form [#](#search-form "Direct link to Search Form")

The search form is where queries begin, but it can be handy to colocate it with results so that users can tweak their query.

Begin by adding a form to the top of your search template—but after setting the `query` variable):

```
{% set query = craft.app.request.getQueryParam('query') %}

<form>
  <label for="search-input">Search terms</label>
  <input type="search" name="query" value="{{ query }}" id="search-input" placeholder="Search…">

  <button type="submit">Submit</button>
</form>

{# ... #}
```

The `input` element’s `name` attribute must correspond with the captured `query` parameter. Notice that we’re taking the current `query` and re-populating the input, so that the user can correct or amend their query.

Our entry query can remain exactly the same… but to prevent empty search queries from returning *every entry in the system*, we’ll put a safeguard in place:

```
{% set query = craft.app.request.getQueryParam('query') %}

<form>
  {# ... #}
</form>

{# Only when a query is provided do we actually perform the search and display results: #}
{% if query %}
  {% set results = craft.entries()
    .section('*')
    .search(query)
    .orderBy('score')
    .all() %}

  {# We still need to check if there were results, too: #}
  {% if results is not empty %}
    <ul>
      {# ... #}
    </ul>
  {% else %}
    <p>Sorry, we searched high and low for “{{ query }}” but couldn’t find anything!</p>
  {% endif %}
{% endif %}
```

### Counting Results [#](#counting-results "Direct link to Counting Results")

Before listing results, you can include a description of the results:

```
<p>Found {{ results|length }} result(s)!</p>
```

### Pagination [#](#pagination "Direct link to Pagination")

Search queries can be [paginated](https://craftcms.com/docs/5.x/development/element-queries.html#pagination), like any other element query.

```
{% paginate craft.entries()
  .section('*')
  .search(query)
  .orderBy('score')
  .limit(10) as resultsInfo, results %}

<p>Found {{ resultsInfo.total }} result(s)! You are viewing page {{ resultsInfo.currentPage }} of {{ resultsInfo.totalPages }}.</p>

{# ... #}

<nav>
  {% if resultsInfo.getPrevUrl() %}
    <a href="{{ resultsInfo.getPrevUrl() }}" rel="prev" title="View the previous page of results">Previous</a>
  {% endif %}
  {% if resultsInfo.getNextUrl() %}
    <a href="{{ resultsInfo.getNextUrl() }}" rel="prev" title="View the next page of results">Next</a>
  {% endif %}
</nav>
```

## Parameterization [#](#parameterization "Direct link to Parameterization")

Search can be combined with *parametric* filters. This example includes controls for which [sections](https://craftcms.com/docs/5.x/reference/element-types/entries.html#sections) may be returned by a query:

```
{% set searchSections = craft.app.request.getQueryParam('sections') %}
{% set sections = craft.app.entries.getAllSections() %}

{% set results = craft.entries()
  .section(searchSections)
  .search(query)
  .orderBy('score')
  .all() %}

<form>
  <label for="search-input">Search terms</label>
  <input type="search" name="query" value="{{ query }}" id="search-input" placeholder="Search…">

  {% for section in sections %}
    <label>
      {{ input('checkbox', 'sections[]', section.handle, {
        checked: searchSections == null or section.handle in searchSections,
      }) }}
      {{ section.name }}
    </label>
  {% endfor %}

  <button type="submit">Submit</button>
</form>
```

This example omits a few of the features we covered earlier (like pagination and protection from empty search queries), but remains compatible, if you wish to combine them.

Applies to
Craft CMS 5, Craft CMS 4, and Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
