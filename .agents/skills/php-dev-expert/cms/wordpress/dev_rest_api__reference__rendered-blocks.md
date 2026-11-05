# Rendered Blocks – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/rendered-blocks/

---

# Rendered Blocks

## In this article

Table of Contents

- [Schema](#schema)
- [Create a Rendered Block](#create-a-rendered-block)
  - [Arguments](#arguments)
  - [Definition](#definition)

Copy page
[View as Markdown](dev_rest_api__reference__rendered-blocks.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a Rendered Block record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `rendered` | The rendered block. JSON data type: string  Context: `edit` |

## [Create a Rendered Block](#create-a-rendered-block)

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `name` | Unique registered name for the block. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `edit` |
| `attributes` | Attributes for the block. |
| `post_id` | ID of the post context. |

### [Definition](#definition)

`POST /wp/v2/block-renderer/<name>`

First published

July 21, 2019

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Rendered Blocks](https://github.com/WP-API/docs/edit/master/reference/rendered-blocks.md)

Changelog

[See list of changes: Rendered Blocks](https://github.com/WP-API/docs/commits/master/reference/rendered-blocks.md)

[Previous
Posts
Previous: Posts](dev_rest_api__reference__posts.md)

[Next
Search Results
Next: Search Results](dev_rest_api__reference__search-results.md)
