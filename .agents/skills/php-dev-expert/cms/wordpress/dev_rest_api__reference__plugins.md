# Plugins – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/plugins/

---

# Plugins

## In this article

Table of Contents

- [Schema](#schema)
- [Retrieve a Plugin](#retrieve-a-plugin)
  - [Definition & Example Request](#definition-example-request)
  - [Arguments](#arguments)
- [Create a Plugin](#create-a-plugin)
  - [Arguments](#arguments-2)
  - [Definition](#definition)
- [Retrieve a Plugin](#retrieve-a-plugin-2)
  - [Definition & Example Request](#definition-example-request-2)
  - [Arguments](#arguments-3)
- [Update a Plugin](#update-a-plugin)
  - [Arguments](#arguments-4)
  - [Definition](#definition-2)
  - [Example Request](#example-request)
- [Delete a Plugin](#delete-a-plugin)
  - [Arguments](#arguments-5)
  - [Definition](#definition-3)
  - [Example Request](#example-request-2)

Copy page
[View as Markdown](dev_rest_api__reference__plugins.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a plugin record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `plugin` | The plugin file. JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `status` | The plugin activation status. JSON data type: string  Context: `view`, `edit`, `embed`  One of: `inactive`, `active` |
| `name` | The plugin name. JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `plugin_uri` | The plugin’s website address. JSON data type: string,  Format: uri  Read only  Context: `view`, `edit` |
| `author` | The plugin author. JSON data type: object  Read only  Context: `view`, `edit` |
| `author_uri` | Plugin author’s website address. JSON data type: string,  Format: uri  Read only  Context: `view`, `edit` |
| `description` | The plugin description. JSON data type: object  Read only  Context: `view`, `edit` |
| `version` | The plugin version number. JSON data type: string  Read only  Context: `view`, `edit` |
| `network_only` | Whether the plugin can only be activated network-wide. JSON data type: boolean  Read only  Context: `view`, `edit`, `embed` |
| `requires_wp` | Minimum required version of WordPress. JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `requires_php` | Minimum required version of PHP. JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `textdomain` | The plugin’s text domain. JSON data type: string  Read only  Context: `view`, `edit` |

## [Retrieve a Plugin](#retrieve-a-plugin)

### [Definition & Example Request](#definition-example-request)

`GET /wp/v2/plugins`

Query this endpoint to retrieve a specific plugin record.

`$ curl https://example.com/wp-json/wp/v2/plugins`

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |
| `search` | Limit results to those matching a string. |
| `status` | Limits results to plugins with the given status. |

## [Create a Plugin](#create-a-plugin)

### [Arguments](#arguments-2)

|  |  |
| --- | --- |
| `slug` | WordPress.org plugin directory slug. Required: 1 |
| `status` | The plugin activation status. Default: `inactive`  One of: `inactive`, `active` |

### [Definition](#definition)

`POST /wp/v2/plugins`

## [Retrieve a Plugin](#retrieve-a-plugin-2)

### [Definition & Example Request](#definition-example-request-2)

`GET /wp/v2/plugins/<plugin>?)`

Query this endpoint to retrieve a specific plugin record.

`$ curl https://example.com/wp-json/wp/v2/plugins/<plugin>?)`

### [Arguments](#arguments-3)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |
| `plugin` |  |

## [Update a Plugin](#update-a-plugin)

### [Arguments](#arguments-4)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |
| `plugin` |  |
| `status` | The plugin activation status.  One of: `inactive`, `active` |

### [Definition](#definition-2)

`POST /wp/v2/plugins/<plugin>?)`

### [Example Request](#example-request)

## [Delete a Plugin](#delete-a-plugin)

### [Arguments](#arguments-5)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |
| `plugin` |  |

### [Definition](#definition-3)

`DELETE /wp/v2/plugins/<plugin>?)`

### [Example Request](#example-request-2)

`$ curl -X DELETE https://example.com/wp-json/wp/v2/plugins/<plugin>?)`

First published

August 9, 2020

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Plugins](https://github.com/WP-API/docs/edit/master/reference/plugins.md)

Changelog

[See list of changes: Plugins](https://github.com/WP-API/docs/commits/master/reference/plugins.md)

[Previous
Pattern Directory Items
Previous: Pattern Directory Items](dev_rest_api__reference__pattern-directory-items.md)

[Next
Post Revisions
Next: Post Revisions](dev_rest_api__reference__post-revisions.md)
