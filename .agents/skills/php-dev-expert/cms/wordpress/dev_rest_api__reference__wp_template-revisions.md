# Template Revisions – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/wp_template-revisions/

---

# Template Revisions

## In this article

Table of Contents

- [Schema](#schema)
- [List Template Revisions](#list-template-revisions)
  - [Definition](#definition)
  - [Example Request](#example-request)
  - [Arguments](#arguments)
- [Retrieve a Template Revision](#retrieve-a-template-revision)
  - [Definition & Example Request](#definition-example-request)
  - [Arguments](#arguments-2)
- [Delete a Template Revision](#delete-a-template-revision)
  - [Arguments](#arguments-3)
  - [Definition](#definition-2)
  - [Example Request](#example-request-2)
- [Retrieve a Template Revision](#retrieve-a-template-revision-2)
  - [Definition & Example Request](#definition-example-request-2)
  - [Arguments](#arguments-4)
- [Create a Template Revision](#create-a-template-revision)
  - [Arguments](#arguments-5)
  - [Definition](#definition-3)
- [Retrieve a Template Revision](#retrieve-a-template-revision-3)
  - [Definition & Example Request](#definition-example-request-3)
  - [Arguments](#arguments-6)

Copy page
[View as Markdown](dev_rest_api__reference__wp_template-revisions.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a template revision record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `author` | The ID for the author of the revision. JSON data type: integer  Context: `view`, `edit`, `embed` |
| `date` | The date the revision was published, in the site’s timezone. JSON data type: string,  Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit`, `embed` |
| `date_gmt` | The date the revision was published, as GMT. JSON data type: string,  Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `guid` | GUID for the revision, as it exists in the database. JSON data type: string  Context: `view`, `edit` |
| `id` | Unique identifier for the revision. JSON data type: integer  Context: `view`, `edit`, `embed` |
| `modified` | The date the revision was last modified, in the site’s timezone. JSON data type: string,  Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `modified_gmt` | The date the revision was last modified, as GMT. JSON data type: string,  Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Context: `view`, `edit` |
| `parent` | The ID for the parent of the revision. JSON data type: integer  Context: `view`, `edit`, `embed` |
| `slug` | An alphanumeric identifier for the revision unique to its type. JSON data type: string  Context: `view`, `edit`, `embed` |
| `title` | Title of template. JSON data type: object or string  Context: `embed`, `view`, `edit` |
| `content` | Content of template. JSON data type: object or string  Context: `embed`, `view`, `edit` |

## [List Template Revisions](#list-template-revisions)

Query this endpoint to retrieve a collection of template revisions. The response you receive can be controlled and filtered using the URL query parameters below.

### [Definition](#definition)

`GET /wp/v2/templates/<parent>/revisions`

### [Example Request](#example-request)

`$ curl https://example.com/wp-json/wp/v2/templates/<parent>/revisions`

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `parent` | The ID for the parent of the revision. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |
| `page` | Current page of the collection. Default: `1` |
| `per_page` | Maximum number of items to be returned in result set. |
| `search` | Limit results to those matching a string. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending. Default: `desc`  One of: `asc`, `desc` |
| `orderby` | Sort collection by object attribute. Default: `date`  One of: `date`, `id`, `include`, `relevance`, `slug`, `include_slugs`, `title` |

## [Retrieve a Template Revision](#retrieve-a-template-revision)

### [Definition & Example Request](#definition-example-request)

`GET /wp/v2/templates/<parent>/revisions/<id>`

Query this endpoint to retrieve a specific template revision record.

`$ curl https://example.com/wp-json/wp/v2/templates/<parent>/revisions/<id>`

### [Arguments](#arguments-2)

|  |  |
| --- | --- |
| `parent` | The ID for the parent of the revision. |
| `id` | Unique identifier for the revision. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Delete a Template Revision](#delete-a-template-revision)

### [Arguments](#arguments-3)

|  |  |
| --- | --- |
| `parent` | The ID for the parent of the revision. |
| `id` | Unique identifier for the revision. |
| `force` | Required to be true, as revisions do not support trashing. |

### [Definition](#definition-2)

`DELETE /wp/v2/templates/<parent>/revisions/<id>`

### [Example Request](#example-request-2)

`$ curl -X DELETE https://example.com/wp-json/wp/v2/templates/<parent>/revisions/<id>`

## [Retrieve a Template Revision](#retrieve-a-template-revision-2)

### [Definition & Example Request](#definition-example-request-2)

`GET /wp/v2/templates/<id>/autosaves`

Query this endpoint to retrieve a specific template revision record.

`$ curl https://example.com/wp-json/wp/v2/templates/<id>/autosaves`

### [Arguments](#arguments-4)

|  |  |
| --- | --- |
| `parent` | The ID for the parent of the autosave. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Create a Template Revision](#create-a-template-revision)

### [Arguments](#arguments-5)

|  |  |
| --- | --- |
| `parent` | The ID for the parent of the autosave. |
| `slug` | Unique slug identifying the template. |
| `theme` | Theme identifier for the template. |
| `type` | Type of template. |
| `content` | Content of template. |
| `title` | Title of template. |
| `description` | Description of template. |
| `status` | Status of template.  One of: `publish`, `future`, `draft`, `pending`, `private` |
| `author` | The ID for the author of the template. |

### [Definition](#definition-3)

`POST /wp/v2/templates/<id>/autosaves`

## [Retrieve a Template Revision](#retrieve-a-template-revision-3)

### [Definition & Example Request](#definition-example-request-3)

`GET /wp/v2/templates/<parent>/autosaves/<id>`

Query this endpoint to retrieve a specific template revision record.

`$ curl https://example.com/wp-json/wp/v2/templates/<parent>/autosaves/<id>`

### [Arguments](#arguments-6)

|  |  |
| --- | --- |
| `parent` | The ID for the parent of the autosave. |
| `id` | The ID for the autosave. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

First published

April 26, 2023

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Template Revisions](https://github.com/WP-API/docs/edit/master/reference/wp_template-revisions.md)

Changelog

[See list of changes: Template Revisions](https://github.com/WP-API/docs/commits/master/reference/wp_template-revisions.md)

[Previous
Taxonomies
Previous: Taxonomies](dev_rest_api__reference__taxonomies.md)

[Next
Templates
Next: Templates](dev_rest_api__reference__wp_templates.md)
