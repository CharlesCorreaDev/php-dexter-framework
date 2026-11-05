# Detail Page - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/blog/detail-page.html

---

# Detail Page

Display individual blog posts with their full content.

- [Creating the Detail Page](docs__user-guide__blog__detail-page.md#creating-the-detail-page)
- [How This Works](#how-this-works)
- [Try It Out](docs__user-guide__blog__detail-page.md#try-it-out)
- [Next Steps](docs__user-guide__blog__detail-page.md#next-steps)

When a visitor clicks on a blog post from the listing, they need to see the full post. In this step, you will create a detail page that displays a single blog post based on its URL slug.

## [#](#creating-the-detail-page) Creating the Detail Page

1. Navigate to **Editor → Pages** and click **+ Add**.
2. Fill in the settings:
   - **Title**: `Blog Post`
   - **URL**: `/blog/:slug`
   - **File Name**: `blog-post`
   - **Layout**: select `default`
3. Click the **Components** panel and add:
   - **Section**: set its **handle** to `Blog\Post`
4. In the markup editor, enter:

```
___TWIG0___
    ___TWIG1___
___TWIG2___

<article class="max-w-3xl">
    <a href="___TWIG3___" class="text-blue-600 hover:underline mb-6 inline-block">
        &larr; Back to blog
    </a>

    ___TWIG4___
        <img
            src="___TWIG5___"
            alt="___TWIG6___"
            class="w-full rounded-lg mb-6"
        >
    ___TWIG7___

    <h1 class="text-4xl font-bold mb-3">
        ___TWIG8___
    </h1>

    <div class="text-sm text-gray-500 mb-8">
        ___TWIG9___
        ___TWIG10___
            &middot;
            ___TWIG11___
                <a href="___TWIG12___" class="text-blue-600 hover:underline">
                    ___TWIG13___
                </a>___TWIG14___
            ___TWIG15___
        ___TWIG16___
    </div>

    <div class="prose max-w-none">
        ___TWIG17___
    </div>

    ___TWIG18___
        <div class="mt-8 pt-6 border-t border-gray-200">
            <span class="text-sm font-medium text-gray-500 mr-2">
                Tags:
            </span>
            ___TWIG19___
                <a href="___TWIG20___" class="inline-block bg-gray-100 text-gray-700 text-sm px-3 py-1 rounded-full mr-1 mb-1 hover:bg-gray-200">
                    ___TWIG21___
                </a>
            ___TWIG22___
        </div>
    ___TWIG23___
</article>
```

5. Click **Save**.

### [#](#how-this-works) How This Works

- **`{% if section is empty %} {% do abort(404) %} {% endif %}`**: if no post matches the slug in the URL, a 404 page is returned. You already learned this pattern in the Quick Start.
- **`section.content|content`**: the `|content` filter processes rich editor output, resolving any internal links and media paths. Always use `|content` when rendering richeditor fields.
- **`section.categories`** and **`section.tags`**: the entries relationships defined in the blueprint are accessible as collections you can loop through.
- **`prose max-w-none`**: Tailwind's typography class for nicely formatted article content. This styles headings, paragraphs, lists, and other HTML elements within the post body.

The `prose` class is included with the Tailwind CSS CDN. If your blog content looks unstyled, make sure you have the Tailwind CDN link in your layout's `<head>` tag.

## [#](#try-it-out) Try It Out

1. Preview your site and go to the blog listing page.
2. Click on any post title or featured image.
3. You should see the full post with its featured image, published date, content, categories, and tags.
4. Click the **Back to blog** link to return to the listing.
5. Try visiting a URL with a slug that doesn't exist, like `/blog/nonexistent`. You should see a 404 page.

## [#](#next-steps) Next Steps

Continue to [Categories](docs__user-guide__blog__categories.md) to add category filtering to your blog.

For the full component reference, see [Section Component](docs__4.x__cms__components__section.md) in the developer documentation.

← [Listing Page](docs__user-guide__blog__listing-page.md)[Categories](docs__user-guide__blog__categories.md) →
