# Statuses – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/post-statuses/

---

# Statuses

## In this article

Table of Contents

- [Schema](#schema)
- [Retrieve a Status](#retrieve-a-status)
  - [Definition & Example Request](#definition-example-request)
  - [Arguments](#arguments)
- [Retrieve a Status](#retrieve-a-status-2)
  - [Definition & Example Request](#definition-example-request-2)
  - [Arguments](#arguments-2)

Copy page
[View as Markdown](dev_rest_api__reference__post-statuses.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a status record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `name` | The title for the status. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `private` | Whether posts with this status should be private. JSON data type: boolean  Read only  Context: `edit` |
| `protected` | Whether posts with this status should be protected. JSON data type: boolean  Read only  Context: `edit` |
| `public` | Whether posts of this status should be shown in the front end of the site. JSON data type: boolean  Read only  Context: `view`, `edit` |
| `queryable` | Whether posts with this status should be publicly-queryable. JSON data type: boolean  Read only  Context: `view`, `edit` |
| `show_in_list` | Whether to include posts in the edit listing for their post type. JSON data type: boolean  Read only  Context: `edit` |
| `slug` | An alphanumeric identifier for the status. JSON data type: string  Read only  Context: `embed`, `view`, `edit` |
| `date_floating` | Whether posts of this status may have floating published dates. JSON data type: boolean  Read only  Context: `view`, `edit` |

## [Retrieve a Status](#retrieve-a-status)

### [Definition & Example Request](#definition-example-request)

`GET /wp/v2/statuses`

Query this endpoint to retrieve a specific status record.

`$ curl https://example.com/wp-json/wp/v2/statuses`

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Retrieve a Status](#retrieve-a-status-2)

### [Definition & Example Request](#definition-example-request-2)

`GET /wp/v2/statuses/<status>`

Query this endpoint to retrieve a specific status record.

`$ curl https://example.com/wp-json/wp/v2/statuses/<status>`

### [Arguments](#arguments-2)

|  |  |
| --- | --- |
| `status` | An alphanumeric identifier for the status. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

First published

December 6, 2016

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Statuses](https://github.com/WP-API/docs/edit/master/reference/post-statuses.md)

Changelog

[See list of changes: Statuses](https://github.com/WP-API/docs/commits/master/reference/post-statuses.md)

[Previous
Site Settings
Previous: Site Settings](dev_rest_api__reference__settings.md)

[Next
Tags
Next: Tags](dev_rest_api__reference__tags.md)
