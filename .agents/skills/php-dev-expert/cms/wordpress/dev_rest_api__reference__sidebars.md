# Sidebars – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/sidebars/

---

# Sidebars

## In this article

Table of Contents

- [Schema](#schema)
- [Retrieve a Sidebar](#retrieve-a-sidebar)
  - [Definition & Example Request](#definition-example-request)
  - [Arguments](#arguments)
- [Retrieve a Sidebar](#retrieve-a-sidebar-2)
  - [Definition & Example Request](#definition-example-request-2)
  - [Arguments](#arguments-2)
- [Update a Sidebar](#update-a-sidebar)
  - [Arguments](#arguments-3)
  - [Definition](#definition)
  - [Example Request](#example-request)

Copy page
[View as Markdown](dev_rest_api__reference__sidebars.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a sidebar record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `id` | ID of sidebar. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `name` | Unique name identifying the sidebar. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `description` | Description of sidebar. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `class` | Extra CSS class to assign to the sidebar in the Widgets interface. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `before_widget` | HTML content to prepend to each widget’s HTML output when assigned to this sidebar. Default is an opening list item element. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `after_widget` | HTML content to append to each widget’s HTML output when assigned to this sidebar. Default is a closing list item element. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `before_title` | HTML content to prepend to the sidebar title when displayed. Default is an opening h2 element. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `after_title` | HTML content to append to the sidebar title when displayed. Default is a closing h2 element. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `status` | Status of sidebar. JSON data type: string  Read only  Context: `embed`, `view`, `edit`  One of: `active`, `inactive` |
| `widgets` | Nested widgets. JSON data type: array  Context: `embed`, `view`, `edit` |

## [Retrieve a Sidebar](#retrieve-a-sidebar)

### [Definition & Example Request](#definition-example-request)

`GET /wp/v2/sidebars`

Query this endpoint to retrieve a specific sidebar record.

`$ curl https://example.com/wp-json/wp/v2/sidebars`

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Retrieve a Sidebar](#retrieve-a-sidebar-2)

### [Definition & Example Request](#definition-example-request-2)

`GET /wp/v2/sidebars/<id>`

Query this endpoint to retrieve a specific sidebar record.

`$ curl https://example.com/wp-json/wp/v2/sidebars/<id>`

### [Arguments](#arguments-2)

|  |  |
| --- | --- |
| `id` | The id of a registered sidebar |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Update a Sidebar](#update-a-sidebar)

### [Arguments](#arguments-3)

|  |  |
| --- | --- |
| `widgets` | Nested widgets. |

### [Definition](#definition)

`POST /wp/v2/sidebars/<id>`

### [Example Request](#example-request)

First published

April 26, 2023

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Sidebars](https://github.com/WP-API/docs/edit/master/reference/sidebars.md)

Changelog

[See list of changes: Sidebars](https://github.com/WP-API/docs/commits/master/reference/sidebars.md)

[Previous
Search Results
Previous: Search Results](dev_rest_api__reference__search-results.md)

[Next
Site Settings
Next: Site Settings](dev_rest_api__reference__settings.md)
