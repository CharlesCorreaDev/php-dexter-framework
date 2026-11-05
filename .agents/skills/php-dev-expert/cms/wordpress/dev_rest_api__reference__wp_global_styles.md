# Global_Styles – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/wp_global_styles/

---

# Global\_Styles

## In this article

Table of Contents

- [Schema](#schema)
- [Retrieve a Global\_Styles](#retrieve-a-global_styles)
  - [Definition & Example Request](#definition-example-request)
  - [Arguments](#arguments)
- [Update a Global\_Styles](#update-a-global_styles)
  - [Arguments](#arguments-2)
  - [Definition](#definition)
  - [Example Request](#example-request)

Copy page
[View as Markdown](dev_rest_api__reference__wp_global_styles.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a global\_styles record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `id` | ID of global styles config. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `styles` | Global styles. JSON data type: object  Context: `view`, `edit` |
| `settings` | Global settings. JSON data type: object  Context: `view`, `edit` |
| `title` | Title of the global styles variation. JSON data type: object or string  Context: `embed`, `view`, `edit` |

## [Retrieve a Global\_Styles](#retrieve-a-global_styles)

### [Definition & Example Request](#definition-example-request)

`GET /wp/v2/global-styles/<id>`

Query this endpoint to retrieve a specific global\_styles record.

`$ curl https://example.com/wp-json/wp/v2/global-styles/<id>`

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `id` | The id of a template |

## [Update a Global\_Styles](#update-a-global_styles)

### [Arguments](#arguments-2)

|  |  |
| --- | --- |
| `styles` | Global styles. |
| `settings` | Global settings. |
| `title` | Title of the global styles variation. |

### [Definition](#definition)

`POST /wp/v2/global-styles/<id>`

### [Example Request](#example-request)

First published

April 26, 2023

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Global\_Styles](https://github.com/WP-API/docs/edit/master/reference/wp_global_styles.md)

Changelog

[See list of changes: Global\_Styles](https://github.com/WP-API/docs/commits/master/reference/wp_global_styles.md)

[Previous
Editor Blocks
Previous: Editor Blocks](dev_rest_api__reference__blocks.md)

[Next
Media
Next: Media](dev_rest_api__reference__media.md)
