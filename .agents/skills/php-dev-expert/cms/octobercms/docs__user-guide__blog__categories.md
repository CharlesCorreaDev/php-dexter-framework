# Categories - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/blog/categories.html

---

# Categories

Let visitors browse blog posts by category.

- [Creating the Category Page](docs__user-guide__blog__categories.md#creating-the-category-page)
- [How This Works](#how-this-works)
- [Try It Out](docs__user-guide__blog__categories.md#try-it-out)
- [Next Steps](docs__user-guide__blog__categories.md#next-steps)

In the previous steps, you added category links to the listing and detail pages. Now let's create a dedicated page so visitors can browse all posts in a specific category.

## [#](#creating-the-category-page) Creating the Category Page

1. Navigate to **Editor → Pages** and click **+ Add**.
2. Fill in the settings:
   - **Title**: `Blog Category`
   - **URL**: `/blog/category/:slug`
   - **File Name**: `blog-category`
   - **Layout**: select `default`
3. Click the **Components** panel and add:
   - **Section**: set its **handle** to `Blog\Category`
   - **Collection**: set its **handle** to `Blog\Post`
4. In the markup editor, enter:

```
___TWIG0___
    ___TWIG1___
___TWIG2___

___TWIG3___

<a href="___TWIG4___" class="text-blue-600 hover:underline mb-6 inline-block">
    &larr; Back to blog
</a>

<h1 class="text-3xl font-bold mb-2">
    ___TWIG5___
</h1>

___TWIG6___
    <p class="text-gray-600 mb-8">
        ___TWIG7___
    </p>
___TWIG8___

___TWIG9___
    <article class="mb-8 pb-8 border-b border-gray-200">
        ___TWIG10___
            <a href="___TWIG11___">
                <img
                    src="___TWIG12___"
                    alt="___TWIG13___"
                    class="w-full rounded-lg mb-4"
                >
            </a>
        ___TWIG14___

        <h2 class="text-2xl font-semibold mb-2">
            <a href="___TWIG15___" class="hover:text-blue-600">
                ___TWIG16___
            </a>
        </h2>

        <div class="text-sm text-gray-500 mb-3">
            ___TWIG17___
        </div>

        ___TWIG18___
            <p class="text-gray-600">
                ___TWIG19___
            </p>
        ___TWIG20___
    </article>
___TWIG21___
    <p class="text-gray-500">
        No posts in this category yet.
    </p>
___TWIG22___

___TWIG23___
```

5. Click **Save**.

### [#](#how-this-works) How This Works

The key line is:

```
___TWIG0___
```

- **`section`**: loads the category record matching the `:slug` URL parameter, just like the post detail page loads a post.
- **`collection.whereRelation('categories', 'slug', section.slug)`**: filters the post collection to only include posts where the `categories` relationship contains a record matching the current category's slug. This is the technique for filtering entries by a related blueprint.
- **`.paginate(6)`**: paginates the filtered results.

Everything else follows the same patterns from the listing page.

## [#](#try-it-out) Try It Out

1. Preview your site and go to the blog listing page.
2. Click on a category link next to any post (e.g., "Technology").
3. You should see only the posts assigned to that category, with the category name and description at the top.
4. Click **Back to blog** to return to the full listing.

## [#](#next-steps) Next Steps

Continue to [Tags](docs__user-guide__blog__tags.md) to add tag filtering so visitors can browse posts by tag.

For the full component reference, see [Collection Component](docs__4.x__cms__components__collection.md) and [Entries Content Field](docs__4.x__cms__tailor__content-fields.md) in the developer documentation.

← [Detail Page](docs__user-guide__blog__detail-page.md)[Tags](docs__user-guide__blog__tags.md) →
