# Post Status – Documentation – WordPress.org

> **Fonte / Source:** https://wordpress.org/documentation/article/post-status/

---

# Post Status

## In this article

Table of Contents

- [Workflow](#workflow)
- [Default Statuses](#default-statuses)
  - [Publish](#publish)
  - [Future](#future)
  - [Draft](#draft)
  - [Pending](#pending)
  - [Private](#private)
  - [Trash](#trash)
  - [Auto-Draft](#auto-draft)
  - [Inherit](#inherit)
- [Custom Status](#custom-status)
- [Resources](#resources)
- [Related](#related)
- [Code Documentation](#code-documentation)

[Back to top](#wp--skip-link--target)

Posts in WordPress can have one of a number of statuses. The status of a given post determines how WordPress handles that post. For instance, public posts viewable by everyone are assigned the publish status, while drafts are assigned the draft status. The status is stored in the post\_status field in the wp\_posts table.

WordPress provides 8 built-in statuses you can use. WordPress 3.0 gave you the capability to add your own custom post status and to use it in different ways.

## [Workflow](#workflow)

WordPress provides built-in features that empower some users (based on their [Roles and Capabilities](https://wordpress.org/support/article/roles-and-capabilities/)) to review content submitted to the website before it is published. This is commonly called “workflow.” WordPress’s workflow features rely on the value of a post’s `post_status` field to know which step in the workflow process the post is currently held in.

Most users are already familiar with at least two workflow states:

- Posts that are published and visible to everyone (including users who are logged out) are given [the](https://wordpress.org/support/article/post-status/#publish) `publish` [status](https://wordpress.org/support/article/post-status/#publish).
- Drafts that are not yet published are assigned [the](https://wordpress.org/support/article/post-status/#draft) `draft` [status](https://wordpress.org/support/article/post-status/#draft).

Internally, WordPress sets the post status to `publish` when you click the “Publish” button, and WordPress sets the post status to `draft` when you click the “Save Draft” button. Similarly, if your website has users granted [the](https://wordpress.org/support/article/roles-and-capabilities/#edit_posts) `edit_posts` [capability](https://wordpress.org/support/article/roles-and-capabilities/#edit_posts) but not [the](https://wordpress.org/support/article/roles-and-capabilities/#publish_posts) `publish_posts` [capability](https://wordpress.org/support/article/roles-and-capabilities/#publish_posts), then when those users start writing a new post, WordPress will display a “Submit for Review” button instead of a “Publish” button. Likewise, WordPress then assigns the post that user created [the](https://wordpress.org/support/article/post-status/#pending) `pending` [status](https://wordpress.org/support/article/post-status/#pending) when they press that button.

The status of a post can also be set in the [Administration Screen](https://wordpress.org/support/article/administration-screens/) and [Add New Posts](https://wordpress.org/support/article/writing-posts/) Screen by any user with the capability needed to assign the post to the given status. Internally, all of these posts are stored in the same place (the [`wp_posts`](https://codex.wordpress.org/Database_Description#Table:_wp_posts) table), and are differentiated by a column called `post_status`.

## [Default Statuses](#default-statuses)

There are 8 major post statuses that WordPress uses by default.

### [Publish](#publish)

Viewable by everyone. (publish)

### [Future](#future)

Scheduled to be published in a future date. (future)

### [Draft](#draft)

Incomplete post viewable by anyone with proper [user role](https://wordpress.org/support/article/roles-and-capabilities/). (draft)

### [Pending](#pending)

Awaiting a user with the `publish_posts` capability (typically a user assigned [the](https://wordpress.org/support/article/roles-and-capabilities/#editor) `Editor` [role](https://wordpress.org/support/article/roles-and-capabilities/#editor)) to publish. (pending)

### [Private](#private)

Viewable only to WordPress users at Administrator level. (private)

### [Trash](#trash)

Posts in the Trash are assigned the `trash` status. (trash)

### [Auto-Draft](#auto-draft)

[Revisions](https://codex.wordpress.org/Revisions) that WordPress saves automatically while you are editing. (auto-draft)

### [Inherit](#inherit)

Used with a child post (such as [Attachments](https://codex.wordpress.org/Attachments) and [Revisions](https://codex.wordpress.org/Revisions)) to determine the actual status from the parent post. (inherit)

## [Custom Status](#custom-status)

**NOTICE:**
This function does NOT add the registered post status to the Administration Screen. This functionality is pending future development. Please refer to [Trac Ticket #12706](https://core.trac.wordpress.org/ticket/12706).
Consider the action hook [post\_submitbox\_misc\_actions](https://core.trac.wordpress.org/browser/tags/3.5.1/wp-admin/includes/meta-boxes.php#L183) for adding this parameter.

A Custom Status is a Post Status you define.

Adding a custom status to WordPress is done via the [register\_post\_status()](https://developer.wordpress.org/reference/functions/register_post_status) function. This function allows you to define the post status and how it operates within WordPress.

Here’s a basic example of adding a custom post status called “Unread”:

```
function custom_post_status(){
	register_post_status( 'unread', array(
		'label'                     => _x( 'Unread', 'post' ),
		'public'                    => true,
		'exclude_from_search'       => false,
		'show_in_admin_all_list'    => true,
		'show_in_admin_status_list' => true,
		'label_count'               => _n_noop( 'Unread (%s)', 'Unread (%s)' ),
	) );
}
add_action( 'init', 'custom_post_status' );
```

## [Resources](#resources)

- [WordPress Post Status Generator](http://generatewp.com/post-status/)

## [Related](#related)

- [Roles and Capabilities](https://wordpress.org/support/article/roles-and-capabilities/#editor)

## [Code Documentation](#code-documentation)

- Function:  [get\_post\_status()](https://developer.wordpress.org/reference/functions/get_post_status) – Retrieve the post status based on the Post ID.

## Was this article helpful? How could it be improved? [Cancel reply](article__post-status.md#respond)

[Log in to submit feedback](https://login.wordpress.org/?redirect_to=https%3A%2F%2Fwordpress.org%2Fdocumentation%2Farticle%2Fpost-status%2F&locale=en_US). If you need support with something that wasn't covered by this article, please post your question in the [support forums](https://wordpress.org/support/forums/).

First published

November 2, 2018

Last updated

January 13, 2023
