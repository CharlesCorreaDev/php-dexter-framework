# Search Results – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/search-results/

---

# Search Results

## In this article

Table of Contents

- [Schema](#schema)
- [List Search Results](#list-search-results)
  - [Definition](#definition)
  - [Example Request](#example-request)
  - [Arguments](#arguments)

Copy page
[View as Markdown](dev_rest_api__reference__search-results.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a search result record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `id` | Unique identifier for the object. JSON data type: integer or string  Read only  Context: `view`, `embed` |
| `title` | The title for the object. JSON data type: string  Read only  Context: `view`, `embed` |
| `url` | URL to the object. JSON data type: string,  Format: uri  Read only  Context: `view`, `embed` |
| `type` | Object type. JSON data type: string  Read only  Context: `view`, `embed`  One of: `post`, `term`, `post-format` |
| `subtype` | Object subtype. JSON data type: string  Read only  Context: `view`, `embed`  One of: `post`, `page`, `category`, `post_tag` |

## [List Search Results](#list-search-results)

Query this endpoint to retrieve a collection of search results. The response you receive can be controlled and filtered using the URL query parameters below.

### [Definition](#definition)

`GET /wp/v2/search`

### [Example Request](#example-request)

`$ curl https://example.com/wp-json/wp/v2/search`

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed` |
| `page` | Current page of the collection. Default: `1` |
| `per_page` | Maximum number of items to be returned in result set. Default: `10` |
| `search` | Limit results to those matching a string. |
| `type` | Limit results to items of an object type. Default: `post`  One of: `post`, `term`, `post-format` |
| `subtype` | Limit results to items of one or more object subtypes. Default: `any` |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |

First published

July 21, 2019

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Search Results](https://github.com/WP-API/docs/edit/master/reference/search-results.md)

Changelog

[See list of changes: Search Results](https://github.com/WP-API/docs/commits/master/reference/search-results.md)

[Previous
Rendered Blocks
Previous: Rendered Blocks](dev_rest_api__reference__rendered-blocks.md)

[Next
Sidebars
Next: Sidebars](dev_rest_api__reference__sidebars.md)
