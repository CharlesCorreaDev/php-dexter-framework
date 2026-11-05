# Content Files - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/quickstart/editor/content-files.html

---

# Content Files

Create editable content blocks using Markdown

- [Create a Content Block](docs__user-guide__quickstart__editor__content-files.md#create-a-content-block)
- [Include the Content on a Page](docs__user-guide__quickstart__editor__content-files.md#include-the-content-on-a-page)
- [Next Steps](docs__user-guide__quickstart__editor__content-files.md#next-steps)

A **content file** holds static text or Markdown that can be edited in the backend without touching your page templates. Content files are great for text that changes often, such as an "about" blurb, a legal notice, or a welcome message. They are ideal for anything where you want to update the words without opening the page markup.

The key idea: your page template decides **where** content appears, and the content file provides **what** appears there.

## [#](#create-a-content-block) Create a Content Block

1. Navigate to **Editor** in the top menu, then click **Content** in the side panel.
2. Click the **+ Add** button.
3. A new file appears. Click the file name at the top and rename it to `my-content.md`. The `.md` extension tells October CMS to render this as Markdown.
4. In the editor, enter some Markdown content:

```
## About This Site

This website was built with **October CMS** during the Quick Start tutorial.
It uses a Tailwind CSS layout and demonstrates how pages, content blocks,
and the media manager work together.

Here are a few things we have covered so far:

- Creating a theme
- Building a layout with Tailwind CSS
- Adding pages with navigation links
- Using content blocks like this one
```

5. Click **Save**.

## [#](#include-the-content-on-a-page) Include the Content on a Page

1. Go to **Editor → Pages** and open **Home**.
2. Add the content block to the page markup by inserting this line where you want it to appear:

```
___TWIG0___
```

For example, your full markup might look like:

```
<h1 class="text-3xl font-bold mb-4">Welcome to My Website</h1>
<p class="text-lg text-gray-600 mb-6">
    This is your first page built with October CMS. The layout provides
    the header and footer, and this page just fills in the content.
</p>

<div class="prose mt-8">
    ___TWIG0___
</div>

<p class="mt-6">
    Check out the <a href="___TWIG1___" class="text-blue-600 underline">about page</a> too.
</p>
```

3. Click **Save** and preview the page.

You should see the Markdown content rendered as HTML on your page. The `prose` class from Tailwind gives it nice typography.

The real power of content blocks is that you (or a client) can edit the text in the backend without touching the page template. Change the Markdown in the content file, save it, and the page updates immediately.

For the full reference on content files, see [Content](docs__4.x__cms__themes__content.md) in the developer documentation.

## [#](#next-steps) Next Steps

Continue to [Including Partials](docs__user-guide__quickstart__editor__including-partials.md) to learn about reusable template fragments.

← [Your First Page](docs__user-guide__quickstart__editor__your-first-page.md)[Including Partials](docs__user-guide__quickstart__editor__including-partials.md) →
