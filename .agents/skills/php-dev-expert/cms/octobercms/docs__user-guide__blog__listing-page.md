# Listing Page - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/blog/listing-page.html

---

# Listing Page

Create a page that displays all your blog posts with pagination.

- [Adding a Blog Link](docs__user-guide__blog__listing-page.md#adding-a-blog-link)
- [Building the Listing Page](docs__user-guide__blog__listing-page.md#building-the-listing-page)
- [How This Works](#how-this-works)
- [Try It Out](docs__user-guide__blog__listing-page.md#try-it-out)
- [Next Steps](docs__user-guide__blog__listing-page.md#next-steps)

Now that your blog posts exist in the backend, you need a way to display them on your website. In this step, you will create a blog listing page that shows all published posts with pagination.

## [#](#adding-a-blog-link) Adding a Blog Link

First, add a link to the blog in your layout's navigation. Open **Editor → Layouts → default** and add a blog link alongside your existing navigation links:

```
<a href="___TWIG0___" class="text-gray-600 hover:text-gray-900">
    Blog
</a>
```

Save the layout. The link won't work yet, you'll create the blog page next.

## [#](#building-the-listing-page) Building the Listing Page

1. Navigate to **Editor → Pages** and click **+ Add**.
2. Fill in the settings:
   - **Title**: `Blog`
   - **URL**: `/blog`
   - **File Name**: `blog`
   - **Layout**: select `default`
3. Click the **Components** panel and add:
   - **Collection**: set its **handle** to `Blog\Post`
4. In the markup editor, enter:

```
___TWIG0___

<h1 class="text-3xl font-bold mb-8">
    Blog
</h1>

___TWIG1___
    <article class="mb-8 pb-8 border-b border-gray-200">
        ___TWIG2___
            <a href="___TWIG3___">
                <img
                    src="___TWIG4___"
                    alt="___TWIG5___"
                    class="w-full rounded-lg mb-4"
                >
            </a>
        ___TWIG6___

        <h2 class="text-2xl font-semibold mb-2">
            <a href="___TWIG7___" class="hover:text-blue-600">
                ___TWIG8___
            </a>
        </h2>

        <div class="text-sm text-gray-500 mb-3">
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

        ___TWIG17___
            <p class="text-gray-600">
                ___TWIG18___
            </p>
        ___TWIG19___
    </article>
___TWIG20___
    <p class="text-gray-500">
        No posts yet. Create some in the backend!
    </p>
___TWIG21___

___TWIG22___
```

5. Click **Save**.

Don't worry about the `blog-post` and `blog-category` links showing errors. Those pages don't exist yet. You will create them in the next steps.

### [#](#how-this-works) How This Works

- **`collection.paginate(6)`**: fetches posts, 6 per page. Because the blueprint is a `stream`, they are automatically sorted newest-first. No explicit sorting needed.
- **`post.published_at_date|date('F j, Y')`**: the stream's automatic published date field, formatted as "January 15, 2025".
- **`post.featured_image.thumb(800, 400, {mode: 'crop'})`**: generates a cropped thumbnail of the featured image at 800x400 pixels.
- **`'blog-post'|page({slug: post.slug})`**: generates the URL for the detail page using the post's slug.
- **`post.categories`**: accesses the categories relationship defined in the blueprint.
- **`{{ pager(posts) }}`**: renders pagination links (Previous, Next, page numbers).
- **`{% else %}`** on the for loop: displays a message when there are no posts.

## [#](#try-it-out) Try It Out

1. Preview your site and click the **Blog** link in the navigation.
2. You should see your sample posts displayed newest-first, with featured images, dates, excerpts, and category links.
3. If you have more than 6 posts, pagination links will appear at the bottom. Try creating a few more posts to see pagination in action.

## [#](#next-steps) Next Steps

Continue to [Detail Page](docs__user-guide__blog__detail-page.md) to create the individual blog post view.

For the full component reference, see [Collection Component](docs__4.x__cms__components__collection.md) in the developer documentation.

← [Blog Blueprint](docs__user-guide__blog__blog-blueprint.md)[Detail Page](docs__user-guide__blog__detail-page.md) →
