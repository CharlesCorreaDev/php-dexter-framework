# Enabling Fuzzy Search | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/enabling-fuzzy-search

---

Search Knowledge Base

# Enabling Fuzzy Search

By default, search terms will match any keywords that *begin* with the search term. In other words, the search term is treated strictly on the left and fuzzy on the right.

For example, a search for “dog” would match “doggo”, but a search for “fish” would not match “catfish”.

You can change this default behavior using the [defaultSearchTermOptions](https://craftcms.com/docs/3.x/config/config-settings.html#defaultsearchtermoptions) config setting:

```
'defaultSearchTermOptions' => [
    'subLeft' => true,
],
```

The `subLeft` key determines whether the left end of search terms should be treated as fuzzy, and it’s `false` by default. Changing it to `true` causes the full search term to be treated as fuzzy.

Rather than changing the default search behavior, which will affect **all** search queries in Craft, you can enable it for an individual element query when you set the `search` param:

```
{% set results = craft.entries()
  .section('news')
  .search({
    query: craft.app.request.getQuery('q'),
    subLeft: true,
  })
  .all() %}
```

Applies to
Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
