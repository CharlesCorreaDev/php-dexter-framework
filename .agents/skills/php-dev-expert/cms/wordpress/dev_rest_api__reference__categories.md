# Categories – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/categories/

---

# Categories

## In this article

Table of Contents

- [Schema](#schema)
- [List Categories](#list-categories)
  - [Definition](#definition)
  - [Example Request](#example-request)
  - [Arguments](#arguments)
- [Create a Category](#create-a-category)
  - [Arguments](#arguments-2)
  - [Definition](#definition-2)
- [Retrieve a Category](#retrieve-a-category)
  - [Definition & Example Request](#definition-example-request)
  - [Arguments](#arguments-3)
- [Update a Category](#update-a-category)
  - [Arguments](#arguments-4)
  - [Definition](#definition-3)
  - [Example Request](#example-request-2)
- [Delete a Category](#delete-a-category)
  - [Arguments](#arguments-5)
  - [Definition](#definition-4)
  - [Example Request](#example-request-3)

Copy page
[View as Markdown](dev_rest_api__reference__categories.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a category record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `id` | Unique identifier for the term. JSON data type: integer  Read only  Context: `view`, `embed`, `edit` |
| `count` | Number of published posts for the term. JSON data type: integer  Read only  Context: `view`, `edit` |
| `description` | HTML description of the term. JSON data type: string  Context: `view`, `edit` |
| `link` | URL of the term. JSON data type: string,  Format: uri  Read only  Context: `view`, `embed`, `edit` |
| `name` | HTML title for the term. JSON data type: string  Context: `view`, `embed`, `edit` |
| `slug` | An alphanumeric identifier for the term unique to its type. JSON data type: string  Context: `view`, `embed`, `edit` |
| `taxonomy` | Type attribution for the term. JSON data type: string  Read only  Context: `view`, `embed`, `edit`  One of: `category` |
| `parent` | The parent term ID. JSON data type: integer  Context: `view`, `edit` |
| `meta` | Meta fields. JSON data type: object  Context: `view`, `edit` |

## [List Categories](#list-categories)

Query this endpoint to retrieve a collection of categories. The response you receive can be controlled and filtered using the URL query parameters below.

### [Definition](#definition)

`GET /wp/v2/categories`

### [Example Request](#example-request)

`$ curl https://example.com/wp-json/wp/v2/categories`

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |
| `page` | Current page of the collection. Default: `1` |
| `per_page` | Maximum number of items to be returned in result set. Default: `10` |
| `search` | Limit results to those matching a string. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `order` | Order sort attribute ascending or descending. Default: `asc`  One of: `asc`, `desc` |
| `orderby` | Sort collection by term attribute. Default: `name`  One of: `id`, `include`, `name`, `slug`, `include_slugs`, `term_group`, `description`, `count` |
| `hide_empty` | Whether to hide terms not assigned to any posts. |
| `parent` | Limit result set to terms assigned to a specific parent. |
| `post` | Limit result set to terms assigned to a specific post. |
| `slug` | Limit result set to terms with one or more specific slugs. |

## [Create a Category](#create-a-category)

### [Arguments](#arguments-2)

|  |  |
| --- | --- |
| `description` | HTML description of the term. |
| `name` | HTML title for the term. Required: 1 |
| `slug` | An alphanumeric identifier for the term unique to its type. |
| `parent` | The parent term ID. |
| `meta` | Meta fields. |

### [Definition](#definition-2)

`POST /wp/v2/categories`

## [Retrieve a Category](#retrieve-a-category)

### [Definition & Example Request](#definition-example-request)

`GET /wp/v2/categories/<id>`

Query this endpoint to retrieve a specific category record.

`$ curl https://example.com/wp-json/wp/v2/categories/<id>`

### [Arguments](#arguments-3)

|  |  |
| --- | --- |
| `id` | Unique identifier for the term. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Update a Category](#update-a-category)

### [Arguments](#arguments-4)

|  |  |
| --- | --- |
| `id` | Unique identifier for the term. |
| `description` | HTML description of the term. |
| `name` | HTML title for the term. |
| `slug` | An alphanumeric identifier for the term unique to its type. |
| `parent` | The parent term ID. |
| `meta` | Meta fields. |

### [Definition](#definition-3)

`POST /wp/v2/categories/<id>`

### [Example Request](#example-request-2)

## [Delete a Category](#delete-a-category)

### [Arguments](#arguments-5)

|  |  |
| --- | --- |
| `id` | Unique identifier for the term. |
| `force` | Required to be true, as terms do not support trashing. |

### [Definition](#definition-4)

`DELETE /wp/v2/categories/<id>`

### [Example Request](#example-request-3)

`$ curl -X DELETE https://example.com/wp-json/wp/v2/categories/<id>`

First published

December 6, 2016

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Categories](https://github.com/WP-API/docs/edit/master/reference/categories.md)

Changelog

[See list of changes: Categories](https://github.com/WP-API/docs/commits/master/reference/categories.md)

[Previous
Block Types
Previous: Block Types](dev_rest_api__reference__block-types.md)

[Next
Comments
Next: Comments](dev_rest_api__reference__comments.md)
