# Block Pattern Categories – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/block-pattern-categories/

---

# Block Pattern Categories

## In this article

Table of Contents

- [Schema](#schema)
- [Retrieve a Block Pattern Category](#retrieve-a-block-pattern-category)
  - [Definition & Example Request](#definition-example-request)

Copy page
[View as Markdown](dev_rest_api__reference__block-pattern-categories.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a block pattern category record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `name` | The category name. JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `label` | The category label, in human readable format. JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `description` | The category description, in human readable format. JSON data type: string  Read only  Context: `view`, `edit`, `embed` |

## [Retrieve a Block Pattern Category](#retrieve-a-block-pattern-category)

### [Definition & Example Request](#definition-example-request)

`GET /wp/v2/block-patterns/categories`

Query this endpoint to retrieve a specific block pattern category record.

`$ curl https://example.com/wp-json/wp/v2/block-patterns/categories`

There are no arguments for this endpoint.

First published

April 26, 2023

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Block Pattern Categories](https://github.com/WP-API/docs/edit/master/reference/block-pattern-categories.md)

Changelog

[See list of changes: Block Pattern Categories](https://github.com/WP-API/docs/commits/master/reference/block-pattern-categories.md)

[Previous
Block Directory Items
Previous: Block Directory Items](dev_rest_api__reference__block-directory-items.md)

[Next
Block Patterns
Next: Block Patterns](dev_rest_api__reference__block-patterns.md)
