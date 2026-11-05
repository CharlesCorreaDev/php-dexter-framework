# Nav_Menus – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/nav_menus/

---

# Nav\_Menus

## In this article

Table of Contents

- [Schema](#schema)
- [List Nav\_Menus](#list-nav_menus)
  - [Definition](#definition)
  - [Example Request](#example-request)
  - [Arguments](#arguments)
- [Create a Nav\_Menu](#create-a-nav_menu)
  - [Arguments](#arguments-2)
  - [Definition](#definition-2)
- [Retrieve a Nav\_Menu](#retrieve-a-nav_menu)
  - [Definition & Example Request](#definition-example-request)
  - [Arguments](#arguments-3)
- [Update a Nav\_Menu](#update-a-nav_menu)
  - [Arguments](#arguments-4)
  - [Definition](#definition-3)
  - [Example Request](#example-request-2)
- [Delete a Nav\_Menu](#delete-a-nav_menu)
  - [Arguments](#arguments-5)
  - [Definition](#definition-4)
  - [Example Request](#example-request-3)

Copy page
[View as Markdown](dev_rest_api__reference__nav_menus.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a nav\_menu record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `id` | Unique identifier for the term. JSON data type: integer  Read only  Context: `view`, `embed`, `edit` |
| `description` | HTML description of the term. JSON data type: string  Context: `view`, `edit` |
| `name` | HTML title for the term. JSON data type: string  Context: `view`, `embed`, `edit` |
| `slug` | An alphanumeric identifier for the term unique to its type. JSON data type: string  Context: `view`, `embed`, `edit` |
| `meta` | Meta fields. JSON data type: object  Context: `view`, `edit` |
| `locations` | The locations assigned to the menu. JSON data type: array  Context: `view`, `edit` |
| `auto_add` | Whether to automatically add top level pages to this menu. JSON data type: boolean  Context: `view`, `edit` |

## [List Nav\_Menus](#list-nav_menus)

Query this endpoint to retrieve a collection of nav\_menus. The response you receive can be controlled and filtered using the URL query parameters below.

### [Definition](#definition)

`GET /wp/v2/menus`

### [Example Request](#example-request)

`$ curl https://example.com/wp-json/wp/v2/menus`

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |
| `page` | Current page of the collection. Default: `1` |
| `per_page` | Maximum number of items to be returned in result set. Default: `10` |
| `search` | Limit results to those matching a string. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending. Default: `asc`  One of: `asc`, `desc` |
| `orderby` | Sort collection by term attribute. Default: `name`  One of: `id`, `include`, `name`, `slug`, `include_slugs`, `term_group`, `description`, `count` |
| `hide_empty` | Whether to hide terms not assigned to any posts. |
| `post` | Limit result set to terms assigned to a specific post. |
| `slug` | Limit result set to terms with one or more specific slugs. |

## [Create a Nav\_Menu](#create-a-nav_menu)

### [Arguments](#arguments-2)

|  |  |
| --- | --- |
| `description` | HTML description of the term. |
| `name` | HTML title for the term. Required: 1 |
| `slug` | An alphanumeric identifier for the term unique to its type. |
| `meta` | Meta fields. |
| `locations` | The locations assigned to the menu. |
| `auto_add` | Whether to automatically add top level pages to this menu. |

### [Definition](#definition-2)

`POST /wp/v2/menus`

## [Retrieve a Nav\_Menu](#retrieve-a-nav_menu)

### [Definition & Example Request](#definition-example-request)

`GET /wp/v2/menus/<id>`

Query this endpoint to retrieve a specific nav\_menu record.

`$ curl https://example.com/wp-json/wp/v2/menus/<id>`

### [Arguments](#arguments-3)

|  |  |
| --- | --- |
| `id` | Unique identifier for the term. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Update a Nav\_Menu](#update-a-nav_menu)

### [Arguments](#arguments-4)

|  |  |
| --- | --- |
| `id` | Unique identifier for the term. |
| `description` | HTML description of the term. |
| `name` | HTML title for the term. |
| `slug` | An alphanumeric identifier for the term unique to its type. |
| `meta` | Meta fields. |
| `locations` | The locations assigned to the menu. |
| `auto_add` | Whether to automatically add top level pages to this menu. |

### [Definition](#definition-3)

`POST /wp/v2/menus/<id>`

### [Example Request](#example-request-2)

## [Delete a Nav\_Menu](#delete-a-nav_menu)

### [Arguments](#arguments-5)

|  |  |
| --- | --- |
| `id` | Unique identifier for the term. |
| `force` | Required to be true, as terms do not support trashing. |

### [Definition](#definition-4)

`DELETE /wp/v2/menus/<id>`

### [Example Request](#example-request-3)

`$ curl -X DELETE https://example.com/wp-json/wp/v2/menus/<id>`

First published

April 26, 2023

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Nav\_Menus](https://github.com/WP-API/docs/edit/master/reference/nav_menus.md)

Changelog

[See list of changes: Nav\_Menus](https://github.com/WP-API/docs/commits/master/reference/nav_menus.md)

[Previous
Navigations
Previous: Navigations](dev_rest_api__reference__wp_navigations.md)

[Next
Nav\_Menu\_Item Revisions
Next: Nav\_Menu\_Item Revisions](dev_rest_api__reference__nav_menu_item-revisions.md)
