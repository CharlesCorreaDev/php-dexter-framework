# Displaying a Navigation for a Structure Section | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/displaying-a-navigation-for-a-structure-section

---

Search Knowledge Base

# Displaying a Navigation for a Structure Section

Craft makes it easy to create navigations based on Structure sections. The way you’ll do it depends on whether you want the nav to be flat or multi-level.

## Top Level Only [#](#top-level-only "Direct link to Top Level Only")

If you only want to show entries in the top level of your section, use the `level` param to find just those top-level entries:

```
{% set pages = craft.entries().section('pages').level(1).all() %}
```

You can now loop through those entries using plain ol’ [for-loop](https://twig.symfony.com/doc/tags/for.html):

```
<nav>
  <ul>
    {% for page in pages %}
      <li>{{ page.getLink() }}</li>
    {% endfor %}
  </ul>
</nav>
```

## Multi-Level [#](#multi-level "Direct link to Multi-Level")

If you want to create a multi-level nav with nested `<ul>`s, first get the entries you want to show.

If you want all the section’s entries, do this:

```
{% set pages = craft.entries().section('pages').all() %}
```

You can also just fetch the entries up to a certain level using the `level` param:

```
{% set pages = craft.entries().section('pages').level('<= 2').all() %}
```

To output the entries as nested `<ul>`s, use the [`{% nav %}`](https://craftcms.com/docs/3.x/dev/tags.html#nav) tag:

```
<nav>
  <ul>
    {% nav page in pages %}
      <li>
        {{ page.getLink() }}
                
        {% ifchildren %}
          <ul>
            {% children %}
          </ul>
        {% endifchildren %}
      </li>
    {% endnav %}
  </ul>
</nav>
```

The `{% nav %}` tag’s syntax mimics the `{% for %}` tag, with the key addition of the `{% ifchildren %}`, `{% children %}`, and `{% endifchildren %}` sub-tags.

`{% children %}` is the only required sub-tag. It tells Craft where to insert any child entries. It will be replaced by the entire contents of your `{% nav %}`…`{% endnav %}` tag pair, and it works recursively; if you have three or more levels of entries to loop through, the second level’s `{% children %}` tag will get swapped out once more with the third level’s entries, and so on.

`{% ifchildren %}` and `{% endifchildren %}` are optional, and allow you to set some HTML that wraps the `{% children %}` tag, but only if there actually are children.

Applies to
Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
