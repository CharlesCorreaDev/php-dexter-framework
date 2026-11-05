# Widgets – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/widgets/

---

# Widgets

## In this article

Table of Contents

- [Schema](#schema)
- [Retrieve a Widget](#retrieve-a-widget)
  - [Definition & Example Request](#definition-example-request)
  - [Arguments](#arguments)
- [Create a Widget](#create-a-widget)
  - [Arguments](#arguments-2)
  - [Definition](#definition)
- [Retrieve a Widget](#retrieve-a-widget-2)
  - [Definition & Example Request](#definition-example-request-2)
  - [Arguments](#arguments-3)
- [Update a Widget](#update-a-widget)
  - [Arguments](#arguments-4)
  - [Definition](#definition-2)
  - [Example Request](#example-request)
- [Delete a Widget](#delete-a-widget)
  - [Arguments](#arguments-5)
  - [Definition](#definition-3)
  - [Example Request](#example-request-2)

Copy page
[View as Markdown](dev_rest_api__reference__widgets.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a widget record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `id` | Unique identifier for the widget. JSON data type: string  Context: `view`, `edit`, `embed` |
| `id_base` | The type of the widget. Corresponds to ID in widget-types endpoint. JSON data type: string  Context: `view`, `edit`, `embed` |
| `sidebar` | The sidebar the widget belongs to. JSON data type: string  Context: `view`, `edit`, `embed` |
| `rendered` | HTML representation of the widget. JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `rendered_form` | HTML representation of the widget admin form. JSON data type: string  Read only  Context: `edit` |
| `instance` | Instance settings of the widget, if supported. JSON data type: object  Context: `edit` |
| `form_data` | URL-encoded form data from the widget admin form. Used to update a widget that does not support instance. Write only. JSON data type: string  Context: |

## [Retrieve a Widget](#retrieve-a-widget)

### [Definition & Example Request](#definition-example-request)

`GET /wp/v2/widgets`

Query this endpoint to retrieve a specific widget record.

`$ curl https://example.com/wp-json/wp/v2/widgets`

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |
| `sidebar` | The sidebar to return widgets for. |

## [Create a Widget](#create-a-widget)

### [Arguments](#arguments-2)

|  |  |
| --- | --- |
| `id` | Unique identifier for the widget. |
| `id_base` | The type of the widget. Corresponds to ID in widget-types endpoint. |
| `sidebar` | The sidebar the widget belongs to. Required: 1  Default: `wp_inactive_widgets` |
| `instance` | Instance settings of the widget, if supported. |
| `form_data` | URL-encoded form data from the widget admin form. Used to update a widget that does not support instance. Write only. |

### [Definition](#definition)

`POST /wp/v2/widgets`

## [Retrieve a Widget](#retrieve-a-widget-2)

### [Definition & Example Request](#definition-example-request-2)

`GET /wp/v2/widgets/<id>`

Query this endpoint to retrieve a specific widget record.

`$ curl https://example.com/wp-json/wp/v2/widgets/<id>`

### [Arguments](#arguments-3)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Update a Widget](#update-a-widget)

### [Arguments](#arguments-4)

|  |  |
| --- | --- |
| `id` | Unique identifier for the widget. |
| `id_base` | The type of the widget. Corresponds to ID in widget-types endpoint. |
| `sidebar` | The sidebar the widget belongs to. |
| `instance` | Instance settings of the widget, if supported. |
| `form_data` | URL-encoded form data from the widget admin form. Used to update a widget that does not support instance. Write only. |

### [Definition](#definition-2)

`POST /wp/v2/widgets/<id>`

### [Example Request](#example-request)

## [Delete a Widget](#delete-a-widget)

### [Arguments](#arguments-5)

|  |  |
| --- | --- |
| `force` | Whether to force removal of the widget, or move it to the inactive sidebar. |

### [Definition](#definition-3)

`DELETE /wp/v2/widgets/<id>`

### [Example Request](#example-request-2)

`$ curl -X DELETE https://example.com/wp-json/wp/v2/widgets/<id>`

First published

April 26, 2023

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Widgets](https://github.com/WP-API/docs/edit/master/reference/widgets.md)

Changelog

[See list of changes: Widgets](https://github.com/WP-API/docs/commits/master/reference/widgets.md)

[Previous
Widget Types
Previous: Widget Types](dev_rest_api__reference__widget-types.md)

[Next
Wp Site Health Tests
Next: Wp Site Health Tests](dev_rest_api__reference__wp-site-health-tests.md)
