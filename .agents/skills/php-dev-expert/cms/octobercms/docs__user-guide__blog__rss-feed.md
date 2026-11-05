# RSS Feed - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/blog/rss-feed.html

---

# RSS Feed

Add an RSS feed so readers can subscribe to your blog.

- [Creating the Feed Page](docs__user-guide__blog__rss-feed.md#creating-the-feed-page)
- [How This Works](#how-this-works)
- [Adding the Feed Link](docs__user-guide__blog__rss-feed.md#adding-the-feed-link)
- [Testing the Feed](docs__user-guide__blog__rss-feed.md#testing-the-feed)
- [Summary](docs__user-guide__blog__rss-feed.md#summary)
- [Where to Go From Here](#where-to-go-from-here)

[More...](#)

An RSS feed lets readers subscribe to your blog using feed readers like Feedly or Inoreader. In this final step, you will create an RSS feed page that outputs your latest posts in XML format.

## [#](#creating-the-feed-page) Creating the Feed Page

1. Navigate to **Editor → Pages** and click **+ Add**.
2. Fill in the settings:
   - **Title**: `Blog RSS Feed`
   - **URL**: `/blog/rss`
   - **File Name**: `blog-rss`
   - **Layout**: leave **empty** (no layout)
3. Click the **Components** panel and add:
   - **Collection**: set its **handle** to `Blog\Post`
4. Switch to the **code editor** view and add the following to the page's configuration section (the INI block at the top of the file):

```
[resources]
headers[Content-Type] = 'text/xml'
```

5. In the markup editor, enter:

```
<?xml version="1.0" encoding="utf-8"?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
    <channel>
        <title>My Blog</title>
        <link>___TWIG0___</link>
        <description>The latest posts from my blog.</description>
        <atom:link href="___TWIG1___" rel="self" type="application/rss+xml" />
        ___TWIG2___
        <item>
            <title>___TWIG3___</title>
            <link>___TWIG4___</link>
            <guid>___TWIG5___</guid>
            <pubDate>___TWIG6___</pubDate>
            <description>___TWIG7___</description>
        </item>
        ___TWIG8___
    </channel>
</rss>
```

6. Click **Save**.

### [#](#how-this-works) How This Works

- **No layout**: by leaving the layout empty, the page outputs only its own markup. No HTML wrapper, no `<head>` or `<body>` tags, just raw XML.
- **`headers[Content-Type] = 'text/xml'`**: tells the browser to treat the response as XML instead of HTML.
- **`post.published_at_date|date('r')`**: the `r` format outputs an RFC 2822 date string, which is the format RSS requires for `<pubDate>`.
- **`collection`** without `.paginate()`: iterates all posts without pagination. For a blog with many posts, you could limit the feed to the most recent entries with `collection.limit(20).get()`.

## [#](#adding-the-feed-link) Adding the Feed Link

To help browsers and feed readers auto-discover your RSS feed, add a link tag to your layout. Open **Editor → Layouts → default** and add the following inside the `<head>` tag:

```
<link rel="alternate" type="application/rss+xml" title="Blog RSS Feed" href="___TWIG0___">
```

Save the layout.

## [#](#testing-the-feed) Testing the Feed

1. Visit `/blog/rss` in your browser. You should see XML output with your blog posts listed as `<item>` elements.
2. Copy the full URL and paste it into a feed reader like [Feedly  (opens new window)](https://feedly.com) or [Inoreader  (opens new window)](https://www.inoreader.com) to verify it works.
3. You can also validate the feed structure at the [W3C Feed Validation Service  (opens new window)](https://validator.w3.org/feed/).

## [#](#summary) Summary

Congratulations! You have built a complete blog with October CMS. Here is what you created:

1. **Blueprints**: four content types defined in YAML: a Blog Post stream, a Category structure, a Tag entry, and a Comment submission. No PHP code, no database SQL.
2. **Listing Page**: a Collection component with pagination, displaying posts sorted newest-first.
3. **Detail Page**: a Section component that resolves posts by slug, with 404 handling for missing entries.
4. **Category and Tag Filtering**: `whereRelation` queries to filter posts, and a reusable tag cloud partial with post counts shared across pages.
5. **Comments**: a moderated comment form powered by a Submission component, with validation, spam protection, and an approval workflow.
6. **RSS Feed**: XML output with a custom Content-Type header for feed reader subscriptions.

Everything is managed through the backend, from creating posts and assigning categories to configuring the published date. The frontend is powered entirely by Twig templates and Tailwind CSS.

### [#](#where-to-go-from-here) Where to Go From Here

- Explore the [demo theme  (opens new window)](https://github.com/octobercms/october/tree/4.x/themes/demo) for a more complete blog with search, archives, authors, and more
- Read the [Tailor documentation](docs__4.x__cms__tailor__blueprints.md) for the full blueprint and content field reference
- Try the next tutorial in the User Guide to continue building your skills

← [Comments](docs__user-guide__blog__comments.md)
