# Blog Blueprint - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/blog/blog-blueprint.html

---

# Blog Blueprint

Define the Tailor blueprint for your blog posts.

- [Creating the Post Blueprint](docs__user-guide__blog__blog-blueprint.md#creating-the-post-blueprint)
- [What This Does](#what-this-does)
- [Adding Navigation](docs__user-guide__blog__blog-blueprint.md#adding-navigation)
- [Running the Migration](docs__user-guide__blog__blog-blueprint.md#running-the-migration)
- [Creating a Category Blueprint](docs__user-guide__blog__blog-blueprint.md#creating-a-category-blueprint)
- [What This Does](#what-this-does-1)
- [Creating a Tag Blueprint](docs__user-guide__blog__blog-blueprint.md#creating-a-tag-blueprint)
- [Linking Categories and Tags to Posts](docs__user-guide__blog__blog-blueprint.md#linking-categories-and-tags-to-posts)
- [What This Does](#what-this-does-2)
- [Testing in the Backend](docs__user-guide__blog__blog-blueprint.md#testing-in-the-backend)
- [Next Steps](docs__user-guide__blog__blog-blueprint.md#next-steps)

[More...](#)

Before you can create blog posts, you need to define what a blog post looks like. In October CMS, this is done with a Tailor blueprint, a YAML file that describes the fields, behavior, and backend navigation for your content type.

## [#](#creating-the-post-blueprint) Creating the Post Blueprint

1. In your theme's directory, create a `blueprints` folder if it doesn't exist.
2. Create a new file at `themes/mytheme/blueprints/blog/post.yaml`.
3. Paste the following:

```
handle: Blog\Post
type: stream
name: Blog Post

customMessages:
    buttonCreate: New Post

fields:
    content:
        label: Content
        type: richeditor
        span: adaptive

    excerpt:
        label: Excerpt
        type: textarea
        size: small
        comment: A short summary shown on the listing page.

    featured_image:
        label: Featured Image
        type: fileupload
        mode: image
        maxFiles: 1

    is_featured:
        label: Featured Post
        type: switch
        comment: Feature this post at the top of the listing.
```

### [#](#what-this-does) What This Does

- **`type: stream`**: a stream is designed for time-stamped entries like blog posts. Unlike the `entry` type you used in the Quick Start, streams automatically sort by published date (newest first).
- **`richeditor`**: a visual editor for the post body.
- **`fileupload`** with `mode: image`: an image upload field limited to one file.
- **`customMessages`**: changes the "Create" button label in the backend to "New Post".
- Tailor automatically adds **title**, **slug**, and **published date** fields to every entry blueprint, so you don't need to define those yourself.

## [#](#adding-navigation) Adding Navigation

To make your blog posts accessible from the backend sidebar, add navigation blocks to the blueprint. Update `themes/mytheme/blueprints/blog/post.yaml` to include navigation above the fields:

```
handle: Blog\Post
type: stream
name: Blog Post

customMessages:
    buttonCreate: New Post

primaryNavigation:
    label: Blog
    icon: ph ph-pencil
    order: 200

navigation:
    label: Posts
    order: 100

fields:
    # ... (same fields as above)
```

The `primaryNavigation` creates a top-level **Blog** menu item. The `navigation` creates a **Posts** sub-item underneath it. Categories and tags will nest under this same menu later.

## [#](#running-the-migration) Running the Migration

After creating a blueprint, run the migration so Tailor can set up the database tables:

```
php artisan tailor:migrate
```

Or with DDEV:

```
ddev artisan tailor:migrate
```

Run this command every time you add or modify a blueprint.

You can also migrate blueprints from the Editor. When editing a blueprint file in the backend, click the **Save & Migrate** button to save and run the migration in one step.

## [#](#creating-a-category-blueprint) Creating a Category Blueprint

Categories let you organize posts by topic. Create a new file at `themes/mytheme/blueprints/blog/category.yaml`:

```
handle: Blog\Category
type: structure
name: Category

structure:
    maxDepth: 1

customMessages:
    buttonCreate: New Category

navigation:
    label: Categories
    parent: Blog\Post
    icon: ph ph-list-bullets
    order: 200

fields:
    description:
        label: Description
        type: textarea
        size: small
```

### [#](#what-this-does-1) What This Does

- **`type: structure`**: entries with ordering support. `maxDepth: 1` keeps categories flat (no sub-categories).
- **`parent: Blog\Post`**: nests the Categories navigation item under the Blog menu.
- Title and slug are added automatically, just like with posts.

## [#](#creating-a-tag-blueprint) Creating a Tag Blueprint

Tags provide a more flexible way to label posts. Create `themes/mytheme/blueprints/blog/tag.yaml`:

```
handle: Blog\Tag
type: entry
name: Tag

navigation:
    label: Tags
    parent: Blog\Post
    icon: ph ph-tag
    order: 300

fields:
    posts:
        type: entries
        source: Blog\Post
        inverse: tags
        hidden: true
```

Tags only need a title and slug, which Tailor adds automatically. The `posts` field is an **inverse relation** that tells Tailor tags are connected to posts through the `tags` field on the post blueprint. Setting `hidden: true` keeps it out of the backend form since you don't need to edit it directly. You will use this relationship later to count how many posts each tag has.

## [#](#linking-categories-and-tags-to-posts) Linking Categories and Tags to Posts

Now that the category and tag blueprints exist, update the post blueprint to reference them. Open `themes/mytheme/blueprints/blog/post.yaml` and add `categories` and `tags` fields at the bottom:

```
handle: Blog\Post
type: stream
name: Blog Post

customMessages:
    buttonCreate: New Post

primaryNavigation:
    label: Blog
    icon: ph ph-pencil
    order: 200

navigation:
    label: Posts
    order: 100

fields:
    content:
        label: Content
        type: richeditor
        span: adaptive

    excerpt:
        label: Excerpt
        type: textarea
        size: small
        comment: A short summary shown on the listing page.

    featured_image:
        label: Featured Image
        type: fileupload
        mode: image
        maxFiles: 1

    is_featured:
        label: Featured Post
        type: switch
        comment: Feature this post at the top of the listing.

    categories:
        label: Categories
        type: entries
        source: Blog\Category
        tab: Manage

    tags:
        label: Tags
        type: entries
        source: Blog\Tag
        displayMode: taglist
        tab: Manage
```

### [#](#what-this-does-2) What This Does

- **`type: entries`**: creates a relationship to another blueprint. Posts can now be linked to categories and tags.
- **`source: Blog\Category`**: tells the field which blueprint to pull records from.
- **`displayMode: taglist`**: renders tags as a type-and-select input instead of a relation list, making it fast to add tags while editing a post.
- **`tab: Manage`**: groups these fields on a separate tab to keep the editing form clean.

Run the migration again to apply the changes:

```
php artisan tailor:migrate
```

## [#](#testing-in-the-backend) Testing in the Backend

1. Refresh the backend. You should see **Blog** in the sidebar with **Posts**, **Categories**, and **Tags** sub-items.
2. Click **Categories** and create a few:

   - **Technology**
   - **Travel**
   - **Tutorials**
3. Click **Tags** and create a few:

   - **Getting Started**
   - **Tips**
   - **October CMS**
4. Click **Posts** and create some sample blog posts:

   - **Getting Started with October CMS**: assign to Technology and Getting Started. Add an excerpt like `A beginner's guide to building websites with October CMS.`
   - **Building Your First Theme**: assign to Tutorials and October CMS. Add an excerpt like `Learn how to create a theme from scratch with layouts, pages, and partials.`
   - **Weekend in the Mountains**: assign to Travel and Tips. Add an excerpt like `A photo journal from a weekend hiking trip in the mountains.`

When adding tags to a post, you can type a tag name directly into the tag list field. If the tag already exists, it will be suggested. If it doesn't, a new tag will be created for you.

Upload any images for the featured image field, or leave it blank for now. The frontend will handle missing images gracefully.

## [#](#next-steps) Next Steps

With your blueprints in place, continue to [Listing Page](docs__user-guide__blog__listing-page.md) to display your blog posts on the frontend.

For the complete blueprint reference, see [Blueprints](docs__4.x__cms__tailor__blueprints.md) and [Content Fields](docs__4.x__cms__tailor__content-fields.md) in the developer documentation.

← [Creating a Blog](docs__user-guide__blog__introduction.md)[Listing Page](docs__user-guide__blog__listing-page.md) →
