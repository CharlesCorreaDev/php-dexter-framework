# Block Types – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/block-types/

---

# Block Types

## In this article

Table of Contents

- [Schema](#schema)
- [Retrieve a Block Type](#retrieve-a-block-type)
  - [Definition & Example Request](#definition-example-request)
  - [Arguments](#arguments)
- [Retrieve a Block Type](#retrieve-a-block-type-2)
  - [Definition & Example Request](#definition-example-request-2)
  - [Arguments](#arguments-2)
- [Retrieve a Block Type](#retrieve-a-block-type-3)
  - [Definition & Example Request](#definition-example-request-3)
  - [Arguments](#arguments-3)

Copy page
[View as Markdown](dev_rest_api__reference__block-types.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a block type record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `api_version` | Version of block API. JSON data type: integer  Read only  Context: `embed`, `view`, `edit` |
| `title` | Title of block type. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `name` | Unique name identifying the block type. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `description` | Description of block type. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `icon` | Icon of block type. JSON data type: string or null  Read only  Context: `embed`, `view`, `edit` |
| `attributes` | Block attributes. JSON data type: object or null  Read only  Context: `embed`, `view`, `edit` |
| `provides_context` | Context provided by blocks of this type. JSON data type: object  Read only  Context: `embed`, `view`, `edit` |
| `uses_context` | Context values inherited by blocks of this type. JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `selectors` | Custom CSS selectors. JSON data type: object  Read only  Context: `embed`, `view`, `edit` |
| `supports` | Block supports. JSON data type: object  Read only  Context: `embed`, `view`, `edit` |
| `category` | Block category. JSON data type: string or null  Read only  Context: `embed`, `view`, `edit` |
| `is_dynamic` | Is the block dynamically rendered. JSON data type: boolean  Read only  Context: `embed`, `view`, `edit` |
| `editor_script_handles` | Editor script handles. JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `script_handles` | Public facing and editor script handles. JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `view_script_handles` | Public facing script handles. JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `editor_style_handles` | Editor style handles. JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `style_handles` | Public facing and editor style handles. JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `styles` | Block style variations. JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `variations` | Block variations. JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `textdomain` | Public text domain. JSON data type: string or null  Read only  Context: `embed`, `view`, `edit` |
| `parent` | Parent blocks. JSON data type: array or null  Read only  Context: `embed`, `view`, `edit` |
| `ancestor` | Ancestor blocks. JSON data type: array or null  Read only  Context: `embed`, `view`, `edit` |
| `keywords` | Block keywords. JSON data type: array  Read only  Context: `embed`, `view`, `edit` |
| `example` | Block example. JSON data type: object or null  Read only  Context: `embed`, `view`, `edit` |
| `editor_script` | Editor script handle. DEPRECATED: Use `editor\_script\_handles` instead. JSON data type: string or null  Read only  Context: `embed`, `view`, `edit` |
| `script` | Public facing and editor script handle. DEPRECATED: Use `script\_handles` instead. JSON data type: string or null  Read only  Context: `embed`, `view`, `edit` |
| `view_script` | Public facing script handle. DEPRECATED: Use `view\_script\_handles` instead. JSON data type: string or null  Read only  Context: `embed`, `view`, `edit` |
| `editor_style` | Editor style handle. DEPRECATED: Use `editor\_style\_handles` instead. JSON data type: string or null  Read only  Context: `embed`, `view`, `edit` |
| `style` | Public facing and editor style handle. DEPRECATED: Use `style\_handles` instead. JSON data type: string or null  Read only  Context: `embed`, `view`, `edit` |

## [Retrieve a Block Type](#retrieve-a-block-type)

### [Definition & Example Request](#definition-example-request)

`GET /wp/v2/block-types`

Query this endpoint to retrieve a specific block type record.

`$ curl https://example.com/wp-json/wp/v2/block-types`

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |
| `namespace` | Block namespace. |

## [Retrieve a Block Type](#retrieve-a-block-type-2)

### [Definition & Example Request](#definition-example-request-2)

`GET /wp/v2/block-types/<namespace>`

Query this endpoint to retrieve a specific block type record.

`$ curl https://example.com/wp-json/wp/v2/block-types/<namespace>`

### [Arguments](#arguments-2)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |
| `namespace` | Block namespace. |

## [Retrieve a Block Type](#retrieve-a-block-type-3)

### [Definition & Example Request](#definition-example-request-3)

`GET /wp/v2/block-types/<namespace>/<name>`

Query this endpoint to retrieve a specific block type record.

`$ curl https://example.com/wp-json/wp/v2/block-types/<namespace>/<name>`

### [Arguments](#arguments-3)

|  |  |
| --- | --- |
| `name` | Block name. |
| `namespace` | Block namespace. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

First published

August 9, 2020

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Block Types](https://github.com/WP-API/docs/edit/master/reference/block-types.md)

Changelog

[See list of changes: Block Types](https://github.com/WP-API/docs/commits/master/reference/block-types.md)

[Previous
Block Revisions
Previous: Block Revisions](dev_rest_api__reference__block-revisions.md)

[Next
Categories
Next: Categories](dev_rest_api__reference__categories.md)
