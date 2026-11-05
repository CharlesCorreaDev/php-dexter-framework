# Tags - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/blog/tags.html

---

# Tags

Add a tag cloud partial with post counts and create a tag filter page.

- [Creating the Tag Cloud Partial](docs__user-guide__blog__tags.md#creating-the-tag-cloud-partial)
- [How This Works](#how-this-works)
- [Including the Tag Cloud](docs__user-guide__blog__tags.md#including-the-tag-cloud)
- [Creating the Tag Filter Page](docs__user-guide__blog__tags.md#creating-the-tag-filter-page)
- [Try It Out](docs__user-guide__blog__tags.md#try-it-out)
- [Going Further](docs__user-guide__blog__tags.md#going-further)
- [Next Steps](docs__user-guide__blog__tags.md#next-steps)

[More...](#)

The category page filters posts using `whereRelation`. Tags will take a different approach. You will build a **tag cloud partial** that displays all tags with their post counts, then include it on multiple pages. This is a great way to learn how partials can contain their own components.

## [#](#creating-the-tag-cloud-partial) Creating the Tag Cloud Partial

Instead of adding the tag cloud markup directly to a page, you will create a reusable partial. This way, you can include it on the blog listing page, the category page, or anywhere else you want to show tags.

1. Navigate to **Editor → Partials** and click **+ Add**.
2. Set the **File Name** to `blog/tag-cloud`.
3. Click the **Components** panel and add:
   - **Collection**: set its **alias** to `tags` and its **handle** to `Blog\Tag`
4. In the markup editor, enter:

```
___TWIG0___

___TWIG1___
    <div class="mt-12 pt-8 border-t border-gray-200">
        <h2 class="text-lg font-semibold mb-4">
            Browse by Tag
        </h2>
        <div class="flex flex-wrap gap-2">
            ___TWIG2___
                <a href="___TWIG3___" class="inline-flex items-center gap-1.5 bg-gray-100 hover:bg-gray-200 text-gray-700 px-3 py-1.5 rounded-full text-sm">
                    ___TWIG4___
                    <span class="bg-gray-300 text-gray-600 text-xs font-medium px-1.5 py-0.5 rounded-full">
                        ___TWIG5___
                    </span>
                </a>
            ___TWIG6___
        </div>
    </div>
___TWIG7___
```

5. Click **Save**.

### [#](#how-this-works) How This Works

- **Partials can have components**: the Collection component attached to this partial loads tag data independently. Any page that includes this partial gets the tag cloud without needing to add the component itself.
- **`withCount('posts')`**: counts how many related posts each tag has. This uses the inverse relation you defined in the tag blueprint earlier.
- **`tag.posts_count`**: the count is available as an attribute named `{relation}_count`. Since the relation is called `posts`, the attribute is `posts_count`.
- **`.get()`**: returns all tags without pagination (tag lists are typically short).

The `withCount` method works because the tag blueprint defines an inverse `posts` field pointing back to `Blog\Post`. Without that inverse relation, Tailor wouldn't know how to count posts for each tag.

## [#](#including-the-tag-cloud) Including the Tag Cloud

Now add the tag cloud to your blog pages. Open the **blog listing page** (**Editor → Pages → Blog**) and add the following line at the bottom of the markup, after `{{ pager(posts) }}`:

```
___TWIG0___
```

Save the page. You can include the same partial on the **category page** too. Open **Editor → Pages → Blog Category** and add the same line at the bottom, after `{{ pager(posts) }}`:

```
___TWIG0___
```

The tag cloud now appears on both pages, and you only wrote the markup once.

## [#](#creating-the-tag-filter-page) Creating the Tag Filter Page

When a visitor clicks a tag, they need to see the matching posts. This works the same way as the category filter page.

1. Navigate to **Editor → Pages** and click **+ Add**.
2. Fill in the settings:
   - **Title**: `Blog Tag`
   - **URL**: `/blog/tag/:slug`
   - **File Name**: `blog-tag`
   - **Layout**: select `default`
3. Click the **Components** panel and add:
   - **Section**: set its **handle** to `Blog\Tag`
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

<h1 class="text-3xl font-bold mb-8">
    Posts tagged "___TWIG5___"
</h1>

___TWIG6___
    <article class="mb-8 pb-8 border-b border-gray-200">
        ___TWIG7___
            <a href="___TWIG8___">
                <img
                    src="___TWIG9___"
                    alt="___TWIG10___"
                    class="w-full rounded-lg mb-4"
                >
            </a>
        ___TWIG11___

        <h2 class="text-2xl font-semibold mb-2">
            <a href="___TWIG12___" class="hover:text-blue-600">
                ___TWIG13___
            </a>
        </h2>

        <div class="text-sm text-gray-500 mb-3">
            ___TWIG14___
        </div>

        ___TWIG15___
            <p class="text-gray-600">
                ___TWIG16___
            </p>
        ___TWIG17___
    </article>
___TWIG18___
    <p class="text-gray-500">
        No posts with this tag yet.
    </p>
___TWIG19___

___TWIG20___

___TWIG21___
```

5. Click **Save**.

## [#](#try-it-out) Try It Out

1. Preview your site and go to the blog listing page. Below the posts, you should see a "Browse by Tag" section with all your tags and their post counts.
2. Click on a tag to see the filtered posts.
3. Notice the tag cloud appears on the tag filter page too.
4. Navigate to a category page. The tag cloud is there as well.
5. Go to a blog post detail page and click a tag pill at the bottom. It takes you to the same filtered view.

## [#](#going-further) Going Further

Your blog is fully functional. Here are some ideas for extending it:

- **Category list partial**: apply the same pattern to create a reusable category list partial with `withCount`.
- **Search**: add a search page using the Collection component's `searchWhere` method to filter posts by title and content.
- **Authors**: create an Author blueprint with avatar, bio, and social links, then link it to posts with an `entries` field.

The [demo theme  (opens new window)](https://github.com/octobercms/october/tree/4.x/themes/demo) includes all of these features and more. It is a great reference for extending your blog.

## [#](#next-steps) Next Steps

Continue to [Comments](docs__user-guide__blog__comments.md) to let readers respond to your posts with moderated comments.

← [Categories](docs__user-guide__blog__categories.md)[Comments](docs__user-guide__blog__comments.md) →
