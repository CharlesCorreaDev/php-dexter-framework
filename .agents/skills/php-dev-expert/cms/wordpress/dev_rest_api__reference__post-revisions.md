# Post Revisions – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/post-revisions/

---

# Post Revisions

## In this article

Table of Contents

- [Schema](#schema)
- [List Post Revisions](#list-post-revisions)
  - [Definition](#definition)
  - [Example Request](#example-request)
  - [Arguments](#arguments)
- [Retrieve a Post Revision](#retrieve-a-post-revision)
  - [Definition & Example Request](#definition-example-request)
  - [Arguments](#arguments-2)
- [Delete a Post Revision](#delete-a-post-revision)
  - [Arguments](#arguments-3)
  - [Definition](#definition-2)
  - [Example Request](#example-request-2)
- [Retrieve a Post Revision](#retrieve-a-post-revision-2)
  - [Definition & Example Request](#definition-example-request-2)
  - [Arguments](#arguments-4)
- [Create a Post Revision](#create-a-post-revision)
  - [Arguments](#arguments-5)
  - [Definition](#definition-3)
- [Retrieve a Post Revision](#retrieve-a-post-revision-3)
  - [Definition & Example Request](#definition-example-request-3)
  - [Arguments](#arguments-6)

Copy page
[View as Markdown](dev_rest_api__reference__post-revisions.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a post revision record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `author` | The ID for the author of the revision. JSON data type: integer  Context: `view`, `edit`, `embed` |
| `date` | The date the revision was published, in the site’s timezone. JSON data type: string,  Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit`, `embed` |
| `date_gmt` | The date the revision was published, as GMT. JSON data type: string,  Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `guid` | The globally unique identifier for the post. JSON data type: object  Read only  Context: `view`, `edit` |
| `id` | Unique identifier for the revision. JSON data type: integer  Context: `view`, `edit`, `embed` |
| `modified` | The date the revision was last modified, in the site’s timezone. JSON data type: string,  Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `modified_gmt` | The date the revision was last modified, as GMT. JSON data type: string,  Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `parent` | The ID for the parent of the revision. JSON data type: integer  Context: `view`, `edit`, `embed` |
| `slug` | An alphanumeric identifier for the revision unique to its type. JSON data type: string  Context: `view`, `edit`, `embed` |
| `title` | The title for the post. JSON data type: object  Context: `view`, `edit`, `embed` |
| `content` | The content for the post. JSON data type: object  Context: `view`, `edit` |
| `excerpt` | The excerpt for the post. JSON data type: object  Context: `view`, `edit`, `embed` |

## [List Post Revisions](#list-post-revisions)

Query this endpoint to retrieve a collection of post revisions. The response you receive can be controlled and filtered using the URL query parameters below.

### [Definition](#definition)

`GET /wp/v2/posts/<parent>/revisions`

### [Example Request](#example-request)

`$ curl https://example.com/wp-json/wp/v2/posts/<parent>/revisions`

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `parent` | The ID for the parent of the revision. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |
| `page` | Current page of the collection. Default: `1` |
| `per_page` | Maximum number of items to be returned in result set. |
| `search` | Limit results to those matching a string. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending. Default: `desc`  One of: `asc`, `desc` |
| `orderby` | Sort collection by object attribute. Default: `date`  One of: `date`, `id`, `include`, `relevance`, `slug`, `include_slugs`, `title` |

## [Retrieve a Post Revision](#retrieve-a-post-revision)

### [Definition & Example Request](#definition-example-request)

`GET /wp/v2/posts/<parent>/revisions/<id>`

Query this endpoint to retrieve a specific post revision record.

`$ curl https://example.com/wp-json/wp/v2/posts/<parent>/revisions/<id>`

### [Arguments](#arguments-2)

|  |  |
| --- | --- |
| `parent` | The ID for the parent of the revision. |
| `id` | Unique identifier for the revision. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Delete a Post Revision](#delete-a-post-revision)

### [Arguments](#arguments-3)

|  |  |
| --- | --- |
| `parent` | The ID for the parent of the revision. |
| `id` | Unique identifier for the revision. |
| `force` | Required to be true, as revisions do not support trashing. |

### [Definition](#definition-2)

`DELETE /wp/v2/posts/<parent>/revisions/<id>`

### [Example Request](#example-request-2)

`$ curl -X DELETE https://example.com/wp-json/wp/v2/posts/<parent>/revisions/<id>`

## [Retrieve a Post Revision](#retrieve-a-post-revision-2)

### [Definition & Example Request](#definition-example-request-2)

`GET /wp/v2/posts/<id>/autosaves`

Query this endpoint to retrieve a specific post revision record.

`$ curl https://example.com/wp-json/wp/v2/posts/<id>/autosaves`

### [Arguments](#arguments-4)

|  |  |
| --- | --- |
| `parent` | The ID for the parent of the autosave. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Create a Post Revision](#create-a-post-revision)

### [Arguments](#arguments-5)

|  |  |
| --- | --- |
| `parent` | The ID for the parent of the autosave. |
| `date` | The date the post was published, in the site’s timezone. |
| `date_gmt` | The date the post was published, as GMT. |
| `slug` | An alphanumeric identifier for the post unique to its type. |
| `status` | A named status for the post.  One of: `publish`, `future`, `draft`, `pending`, `private` |
| `password` | A password to protect access to the content and excerpt. |
| `title` | The title for the post. |
| `content` | The content for the post. |
| `author` | The ID for the author of the post. |
| `excerpt` | The excerpt for the post. |
| `featured_media` | The ID of the featured media for the post. |
| `comment_status` | Whether or not comments are open on the post.  One of: `open`, `closed` |
| `ping_status` | Whether or not the post can be pinged.  One of: `open`, `closed` |
| `format` | The format for the post.  One of: `standard`, `aside`, `chat`, `gallery`, `link`, `image`, `quote`, `status`, `video`, `audio` |
| `meta` | Meta fields. |
| `sticky` | Whether or not the post should be treated as sticky. |
| `template` | The theme file to use to display the post. |
| `categories` | The terms assigned to the post in the category taxonomy. |
| `tags` | The terms assigned to the post in the post\_tag taxonomy. |

### [Definition](#definition-3)

`POST /wp/v2/posts/<id>/autosaves`

## [Retrieve a Post Revision](#retrieve-a-post-revision-3)

### [Definition & Example Request](#definition-example-request-3)

`GET /wp/v2/posts/<parent>/autosaves/<id>`

Query this endpoint to retrieve a specific post revision record.

`$ curl https://example.com/wp-json/wp/v2/posts/<parent>/autosaves/<id>`

### [Arguments](#arguments-6)

|  |  |
| --- | --- |
| `parent` | The ID for the parent of the autosave. |
| `id` | The ID for the autosave. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

First published

December 6, 2016

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Post Revisions](https://github.com/WP-API/docs/edit/master/reference/post-revisions.md)

Changelog

[See list of changes: Post Revisions](https://github.com/WP-API/docs/commits/master/reference/post-revisions.md)

[Previous
Plugins
Previous: Plugins](dev_rest_api__reference__plugins.md)

[Next
Posts
Next: Posts](dev_rest_api__reference__posts.md)
