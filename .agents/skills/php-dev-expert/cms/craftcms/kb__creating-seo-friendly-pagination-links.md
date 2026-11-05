# Creating SEO-Friendly Pagination Links | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/creating-seo-friendly-pagination-links

---

Search Knowledge Base

# Creating SEO-Friendly Pagination Links

Google [recommends](http://googlewebmastercentral.blogspot.com/2011/09/pagination-with-relnext-and-relprev.html) that paginated webpages should have `rel="next"` and `rel="prev"` links in the `<head>` section, to help search engines better understand the content.

The [`{% paginate %}`](https://craftcms.com/docs/3.x/dev/tags.html#paginate) tag makes this extremely easy to do.

Let’s say you have a base layout template with the following code:

```
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<head>
  {% block head %}
    <title>{% block title %}{{ siteName }}{% endblock %}</title>
  {% endblock %}
</head>
<body>
  {% block body %}
    <h1>{{ siteName }}</h1>
  {% endblock %}
</body>
</html>
```

Our goal is to add `rel="next"` and `rel="prev"` links within the `head` block, and your normal paginated content and user-facing navigation within the `body` block, from an extended template.

To do that, start by adding your `{% paginate %}` tag at the top of your extended template, outside any `{% block %}` tags:

```
{% extends "_layout" %}

{# Set the pagination variables #}
{% paginate craft.entries().section('news').limit(10) as pageInfo, pageEntries %}
```

Now you will be able to access those `pageInfo` and `pageEntries` variables anywhere within your template, including within your blocks. So let’s extend the `head` block to append our SEO-friendly pagination links to it:

```
{% block head %}
  {{ parent() }}

  {# SEO-friendly pagination links #}
  {% if pageInfo.prevUrl %}<link rel="prev" href="{{ pageInfo.prevUrl }}">{% endif %}
  {% if pageInfo.nextUrl %}<link rel="next" href="{{ pageInfo.nextUrl }}">{% endif %}
{% endblock %}
```

And then we can extend the `body` block and loop through `pageEntries` as usual:

```
{% block body %}
  {{ parent() }}

  {# Paginated entries #}
  {% for entry in pageEntries %}
    <article>
      <h1><a href="{{ entry.url }}">{{ entry.title }}</a></h1>
      {{ entry.excerpt }}
      <a href="{{ entry.url }}">Continue reading</a>
    </article>
  {% endfor %}

  {# Pagination nav #}
  <nav>
    {% if pageInfo.prevUrl %}<a href="{{ pageInfo.prevUrl }}">Previous Page</a>{% endif %}
    {% if pageInfo.nextUrl %}<a href="{{ pageInfo.nextUrl }}">Next Page</a>{% endif %}
  </nav>
{% endblock %}
```

Applies to
Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
