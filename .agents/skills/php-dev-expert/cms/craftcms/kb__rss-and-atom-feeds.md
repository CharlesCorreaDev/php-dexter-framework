# RSS and Atom Feeds | Craft CMS

> **Fonte / Source:** https://craftcms.com/knowledge-base/rss-and-atom-feeds

---

Search Knowledge Base

# RSS and Atom Feeds

You can add [RSS](https://validator.w3.org/feed/docs/rss2.html) and/or [Atom](https://validator.w3.org/feed/docs/atom.html) feeds to your site using Twig templates.

The following examples assume that:

- You have a global set with the handle `globals`, which has a Plain Text field a field with the handle `siteDescription`.
- You have a section with the handle `news`, which has a Redactor field with the handle `body`.

## RSS 2.0 Example [#](#rss-2-0-example "Direct link to RSS 2.0 Example")

![](https://craftcms.com/dist/images/icon-tip.svg)

If you save this in a template that ends with a `.rss.twig` file extension, Craft will even serve it with an `application/rss+xml` MIME type.

```
{% set entries = craft.entries()
  .section('news')
  .limit(10)
  .all() %}

<?xml version="1.0"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title>{{ siteName }}</title>
    <link>{{ siteUrl }}</link>
    <atom:link href="{{ url(craft.app.request.pathInfo) }}" rel="self" type="application/rss+xml" />
    <description>{{ globals.siteDescription }}</description>
    <language>{{ craft.app.language }}</language>
    <pubDate>{{ now|rss }}</pubDate>
    <lastBuildDate>{{ now|rss }}</lastBuildDate>

    {% for entry in entries %}
      <item>
        <title>{{ entry.title }}</title>
        <link>{{ entry.url }}</link>
        <pubDate>{{ entry.postDate|rss }}</pubDate>
        <author>{{ entry.author }}</author>
        <guid>{{ entry.url }}</guid>
        <description>
          <![CDATA[{{ entry.body }}]]>
        </description>
      </item>
    {% endfor %}
  </channel>
</rss>
```

## Atom 1.0 Example [#](#atom-1-0-example "Direct link to Atom 1.0 Example")

![](https://craftcms.com/dist/images/icon-tip.svg)

If you save this in a template that ends with a `.atom.twig` file extension, Craft will even serve it with an `application/atom+xml` MIME type.

```
{% set entries = craft.entries()
  .section('news')
  .limit(10)
  .all() %}

<?xml version="1.0"?>
<feed xmlns="http://www.w3.org/2005/Atom">
  <id>{{ url(craft.app.request.pathInfo) }}</id>
  <title>{{ siteName }}</title>
  <updated>{{ now|atom }}</updated>
  <link rel="self" type="application/atom+xml" href="{{ url(craft.app.request.pathInfo) }}" />
  <link rel="alternate" type="text/html" href="{{ siteUrl }}" />

  {% for entry in entries %}
    <entry>
      <id>{{ entry.url }}</id>
      <title>{{ entry.title }}</title>
      <published>{{ entry.postDate|atom }}</published>
      <updated>{{ entry.dateUpdated|atom }}</updated>
      <link rel="alternate" type="text/html" href="{{ entry.url }}" />
      <author>
        <name>{{ entry.author.fullName }}</name>
      </author>
      <content type="html">
        <![CDATA[{{ entry.body }}]]>
      </content>
    </entry>
  {% endfor %}
</feed>
```

## Linking to the Feeds [#](#linking-to-the-feeds "Direct link to Linking to the Feeds")

To make your feed(s) discoverable, add the following `<link>` tags to the `<head>` tag defined in your layout template:

```
<link rel="alternate" type="application/rss+xml" href="{{ url('feed.rss') }}">
<link rel="alternate" type="application/atom+xml" href="{{ url('feed.atom') }}">
```

Applies to
Craft CMS 3.

## New to Craft CMS?

Check out our [Getting Started Tutorial](https://craftcms.com/docs/getting-started-tutorial/).

## Community Resources

Our community is active and eager to help. Join us on [Discord](https://craftcms.com/discord) or [Stack Exchange](https://craftcms.stackexchange.com/).
