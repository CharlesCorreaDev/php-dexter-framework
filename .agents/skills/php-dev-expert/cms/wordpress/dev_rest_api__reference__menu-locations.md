# Menu Locations – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/menu-locations/

---

# Menu Locations

## In this article

Table of Contents

- [Schema](#schema)
- [Retrieve a Menu Location](#retrieve-a-menu-location)
  - [Definition & Example Request](#definition-example-request)
  - [Arguments](#arguments)
- [Retrieve a Menu Location](#retrieve-a-menu-location-2)
  - [Definition & Example Request](#definition-example-request-2)
  - [Arguments](#arguments-2)

Copy page
[View as Markdown](dev_rest_api__reference__menu-locations.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a menu location record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `name` | The name of the menu location. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `description` | The description of the menu location. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `menu` | The ID of the assigned menu. JSON data type: integer  Read only  Context: `embed`, `view`, `edit` |

## [Retrieve a Menu Location](#retrieve-a-menu-location)

### [Definition & Example Request](#definition-example-request)

`GET /wp/v2/menu-locations`

Query this endpoint to retrieve a specific menu location record.

`$ curl https://example.com/wp-json/wp/v2/menu-locations`

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Retrieve a Menu Location](#retrieve-a-menu-location-2)

### [Definition & Example Request](#definition-example-request-2)

`GET /wp/v2/menu-locations/<location>`

Query this endpoint to retrieve a specific menu location record.

`$ curl https://example.com/wp-json/wp/v2/menu-locations/<location>`

### [Arguments](#arguments-2)

|  |  |
| --- | --- |
| `location` | An alphanumeric identifier for the menu location. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

First published

April 26, 2023

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Menu Locations](https://github.com/WP-API/docs/edit/master/reference/menu-locations.md)

Changelog

[See list of changes: Menu Locations](https://github.com/WP-API/docs/commits/master/reference/menu-locations.md)

[Previous
Media
Previous: Media](dev_rest_api__reference__media.md)

[Next
Navigation Revisions
Next: Navigation Revisions](dev_rest_api__reference__wp_navigation-revisions.md)
