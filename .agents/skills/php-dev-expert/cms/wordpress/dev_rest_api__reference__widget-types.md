# Widget Types – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/widget-types/

---

# Widget Types

## In this article

Table of Contents

- [Schema](#schema)
- [Retrieve a Widget Type](#retrieve-a-widget-type)
  - [Definition & Example Request](#definition-example-request)
  - [Arguments](#arguments)
- [Retrieve a Widget Type](#retrieve-a-widget-type-2)
  - [Definition & Example Request](#definition-example-request-2)
  - [Arguments](#arguments-2)

Copy page
[View as Markdown](dev_rest_api__reference__widget-types.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a widget type record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `id` | Unique slug identifying the widget type. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `name` | Human-readable name identifying the widget type. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `description` | Description of the widget. JSON data type: string  Context: `view`, `edit`, `embed` |
| `is_multi` | Whether the widget supports multiple instances JSON data type: boolean  Read only  Context: `view`, `edit`, `embed` |
| `classname` | Class name JSON data type: string  Read only  Context: `embed`, `view`, `edit` |

## [Retrieve a Widget Type](#retrieve-a-widget-type)

### [Definition & Example Request](#definition-example-request)

`GET /wp/v2/widget-types`

Query this endpoint to retrieve a specific widget type record.

`$ curl https://example.com/wp-json/wp/v2/widget-types`

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Retrieve a Widget Type](#retrieve-a-widget-type-2)

### [Definition & Example Request](#definition-example-request-2)

`GET /wp/v2/widget-types/<id>`

Query this endpoint to retrieve a specific widget type record.

`$ curl https://example.com/wp-json/wp/v2/widget-types/<id>`

### [Arguments](#arguments-2)

|  |  |
| --- | --- |
| `id` | The widget type id. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

First published

April 26, 2023

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Widget Types](https://github.com/WP-API/docs/edit/master/reference/widget-types.md)

Changelog

[See list of changes: Widget Types](https://github.com/WP-API/docs/commits/master/reference/widget-types.md)

[Previous
Users
Previous: Users](dev_rest_api__reference__users.md)

[Next
Widgets
Next: Widgets](dev_rest_api__reference__widgets.md)
