# Comments - October CMS User Guide

> **Fonte / Source:** https://docs.octobercms.com/user-guide/blog/comments.html

---

# Comments

Let readers join the conversation with moderated blog comments.

- [Creating the Comment Blueprint](docs__user-guide__blog__comments.md#creating-the-comment-blueprint)
- [What This Does](#what-this-does)
- [Adding the Components](docs__user-guide__blog__comments.md#adding-the-components)
- [Displaying Comments](docs__user-guide__blog__comments.md#displaying-comments)
- [How This Works](#how-this-works)
- [Creating the Comment Form](docs__user-guide__blog__comments.md#creating-the-comment-form)
- [How This Works](#how-this-works-1)
- [Moderating Comments](docs__user-guide__blog__comments.md#moderating-comments)
- [Try It Out](docs__user-guide__blog__comments.md#try-it-out)
- [Next Steps](docs__user-guide__blog__comments.md#next-steps)

[More...](#)

A blog feels alive when readers can respond to your posts. In this step, you will add a comment form to the detail page using a submission blueprint, a special Tailor blueprint type designed for accepting user generated content. Comments arrive with a pending status and only appear on the site after you approve them in the backend.

## [#](#creating-the-comment-blueprint) Creating the Comment Blueprint

Create a new file at `themes/mytheme/blueprints/blog/comment.yaml`:

```
handle: Blog\Comment
type: submission
name: Comment

submission:
    titleTemplate: '{{ str_limit(content, 60) }}'

navigation:
    label: Comments
    parent: Blog\Post
    icon: ph ph-chat-circle
    order: 400

fields:
    author_name:
        label: Name
        type: text
        validation: required|min:2|max:100

    author_email:
        label: Email Address
        type: email
        validation: required|email

    content:
        label: Comment
        type: textarea
        validation: required|min:5|max:2000

    post:
        label: Post
        type: entries
        source: Blog\Post
        maxItems: 1
```

### [#](#what-this-does) What This Does

- **`type: submission`**: a blueprint type made for user generated content. Records are created from the frontend, arrive as **Pending**, and stay hidden from visitors until approved.
- **`validation`**: standard validation rules applied when the form is submitted. Invalid input is rejected with an error message against the field.
- **`titleTemplate`**: builds the record title shown in the backend list from the first 60 characters of the comment.
- **`post`**: an entries field that links each comment to the post it was written on, just like the categories and tags fields on the post blueprint.

Every field defined on a submission blueprint accepts input from the frontend. Only define fields that visitors are allowed to populate, and keep internal fields like moderator notes out of the blueprint.

Run the migration to create the table:

```
php artisan tailor:migrate
```

## [#](#adding-the-components) Adding the Components

The detail page needs two components: a **Collection** to read the approved comments and a **Submission** to handle the form.

1. Navigate to **Editor → Pages** and open the **Blog Post** page.
2. Switch to the **code editor** view and add the following to the page's configuration section (the INI block at the top of the file):

```
[collection comments]
handle = "Blog\Comment"

[submission commentForm]
handle = "Blog\Comment"
```

Both components use the same `Blog\Comment` handle but do different jobs. The names `comments` and `commentForm` are component aliases, which let you refer to each one separately in the markup.

## [#](#displaying-comments) Displaying Comments

Still on the **Blog Post** page, add the comment list to the markup, just before the closing `</article>` tag:

```
    <div class="mt-8 pt-6 border-t border-gray-200">
        ___TWIG0___

        <h2 class="text-2xl font-semibold mb-6">
            ___TWIG1___ ___TWIG2___
        </h2>

        ___TWIG3___
            <div class="mb-6 ___TWIG4___">
                <div class="text-sm mb-2">
                    <span class="font-medium">
                        ___TWIG5___
                    </span>
                    <span class="text-gray-500 ml-2">
                        ___TWIG6___
                    </span>
                </div>
                <p class="text-gray-700">
                    ___TWIG7___
                </p>
            </div>
        ___TWIG8___
            <p class="text-gray-500">
                Be the first to share your thoughts on this post.
            </p>
        ___TWIG9___

        <div class="mt-8">
            <h3 class="text-xl font-semibold mb-4">
                Leave a Comment
            </h3>
            ___TWIG10___
        </div>
    </div>
```

Click **Save**. The page will show an error until the partial exists, so create that next.

### [#](#how-this-works) How This Works

- **`comments.where('post_id', section.id)`**: the Collection component returns a query you can refine. This filters comments to the current post using the relation column created by the `post` field, ordered oldest first like a conversation.
- **`comment.content|nl2br`**: escapes the comment text and converts line breaks to `<br>` tags, so multi-paragraph comments display correctly and any HTML a visitor types is rendered harmless.
- **`{% ajaxPartial %}`**: like `{% partial %}`, but the partial can refresh itself after an AJAX request. The comment form uses this to swap itself for a thank you message.

## [#](#creating-the-comment-form) Creating the Comment Form

1. Navigate to **Editor → Partials** and click **+ Add**.
2. Set the **File Name** to `comment-form`.
3. Enter the following markup:

```
___TWIG0___
    <div class="p-4 bg-green-50 text-green-700 rounded-md">
        Thank you for your comment! It will appear here once it has been approved.
    </div>
___TWIG1___
    <form
        data-request="commentForm::onFormSubmit"
        data-request-update="{ _self: true }"
        data-request-flash
    >
        <input type="hidden" name="post" value="___TWIG2___">

        <div class="grid md:grid-cols-2 gap-4 mb-4">
            <div>
                <label for="commentName" class="block text-sm font-medium mb-1">
                    Name
                </label>
                <input
                    type="text"
                    name="author_name"
                    id="commentName"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm"
                    required
                >
            </div>
            <div>
                <label for="commentEmail" class="block text-sm font-medium mb-1">
                    Email address
                </label>
                <input
                    type="email"
                    name="author_email"
                    id="commentEmail"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm"
                    required
                >
            </div>
        </div>
        <div class="mb-4">
            <label for="commentContent" class="block text-sm font-medium mb-1">
                Comment
            </label>
            <textarea
                name="content"
                id="commentContent"
                rows="4"
                class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm"
                required
            ></textarea>
        </div>
        <div style="display:none">
            <input type="text" name="_oc_hp" value="" autocomplete="off" tabindex="-1">
        </div>
        <button
            type="submit"
            data-attach-loading
            class="px-4 py-2 bg-blue-600 text-white text-sm rounded-md hover:bg-blue-700"
        >
            Post Comment
        </button>
    </form>
___TWIG3___
```

4. Click **Save**.

### [#](#how-this-works-1) How This Works

- **`commentForm::onFormSubmit`**: calls the `onFormSubmit` handler on the Submission component, using the `commentForm::` alias prefix you defined in the INI section. The handler validates the input against the blueprint rules and saves a pending comment.
- **`data-request-update="{ _self: true }"`**: after a successful submission, the framework re-renders this partial. The `formSubmitted` variable is now `true`, so the visitor sees the thank you message instead of the form.
- **`name="post"`** hidden field: fills the `post` field on the blueprint, linking the comment to the post being viewed.
- **`_oc_hp`** hidden field: a honeypot for spam protection. Humans never see it, but bots fill in every field, and any submission with a value here is blocked. The component also rate limits submissions to 6 per minute for each IP address.
- **`data-request-flash`**: shows validation errors as flash messages, using the setup from the Quick Start.

## [#](#moderating-comments) Moderating Comments

New comments do not appear on the site until you approve them.

1. Preview your site, open a blog post, and submit a test comment. The thank you message appears, but the comment is not listed yet.
2. In the backend, navigate to **Blog → Comments**. Your comment is listed with a **Pending** status.
3. Tick the checkbox next to the comment. **Approve**, **Reject**, and **Spam** buttons appear above the list.
4. Click **Approve**, then refresh the blog post on the frontend. The comment is now visible.

The three actions cover the moderation workflow:

- **Approve**: makes the comment visible on the frontend.
- **Reject**: hides the comment. Rejected comments are kept for 30 days and then deleted forever.
- **Spam**: rejects the comment and also rejects any other pending submissions from the same IP address, cleaning up bot floods in one click.

Use the status filter above the list to switch between **Pending**, **Approved**, and **Rejected** comments, so a busy comments section stays manageable.

## [#](#try-it-out) Try It Out

1. Submit a comment with a one-character name. The form shows a validation error, enforced by the `min:2` rule on the blueprint.
2. Submit a valid comment and approve it in the backend. It appears on the post, oldest first.
3. Submit a comment on a different post and confirm it only appears on that post after approval.
4. Try rejecting a comment and watch it disappear from the pending list into the **Rejected** filter.

## [#](#next-steps) Next Steps

Continue to [RSS Feed](docs__user-guide__blog__rss-feed.md) to add an RSS feed so readers can subscribe to your blog.

For the full reference, see [Submission Component](docs__4.x__cms__components__submission.md) and [Submission Blueprint](docs__4.x__cms__tailor__blueprints.md#submission) in the developer documentation.

← [Tags](docs__user-guide__blog__tags.md)[RSS Feed](docs__user-guide__blog__rss-feed.md) →
