# Displaying A Category’s Related Entries | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/displaying-entries-related-to-a-category

---

Search Knowledge Base

# Displaying A Category’s Related Entries

You can fetch the entries related to a given category with a little help from the [`relatedTo`](https://docs.craftcms.com/v3/dev/element-queries/tag-queries.html#relatedto) param.

From your category group’s template, it’d look like this:

```
{# Fetch all entries related to this category #}
{% set entries = craft.entries()
  .relatedTo(category)
  .all() %}

{# Output them #}
{% for entry in entries %}
  <a href="{{ entry.url }}">{{ entry.title }}</a>
{% endfor %}
```

If you’re working outside your category template where the `category` variable isn’t automatically available, first you’ll need to [query your desired category](https://craftcms.com/docs/3.x/categories.html#querying-categories):

```
{# Query a single category with the slug 'my-category' #}
{% set category = craft.categories()
  .slug('my-category')
  .one() %}

{# ... Continue with previous example ... #}
```

The `relatedTo` param works the same with a [categories field](https://craftcms.com/docs/3.x/categories-fields.html#working-with-categories-field-data) you’ve added to a custom field layout: loop over the categories or pick the one you want, then use it like that first example. From the entry’s template, it might look like this, where `myCategoryFieldHandle` is the name of the field handle you chose for your custom field:

```
{# Get first related category from entry’s categories field #}
{% set category = entry.myCategoryFieldHandle.one() %}

{# ... Continue with first example ... #}
```

Applies to
Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
