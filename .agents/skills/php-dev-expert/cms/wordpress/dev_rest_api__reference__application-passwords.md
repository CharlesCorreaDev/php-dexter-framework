# Application Passwords – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/application-passwords/

---

# Application Passwords

## In this article

Table of Contents

- [Schema](#schema)
- [Retrieve a Application Password](#retrieve-a-application-password)
  - [Definition & Example Request](#definition-example-request)
  - [Arguments](#arguments)
- [Create a Application Password](#create-a-application-password)
  - [Arguments](#arguments-2)
  - [Definition](#definition)
- [Delete a Application Password](#delete-a-application-password)
  - [Definition](#definition-2)
  - [Example Request](#example-request)
- [Retrieve a Application Password](#retrieve-a-application-password-2)
  - [Definition & Example Request](#definition-example-request-2)
  - [Arguments](#arguments-3)
- [Retrieve a Application Password](#retrieve-a-application-password-3)
  - [Definition & Example Request](#definition-example-request-3)
  - [Arguments](#arguments-4)
- [Update a Application Password](#update-a-application-password)
  - [Arguments](#arguments-5)
  - [Definition](#definition-3)
  - [Example Request](#example-request-2)
- [Delete a Application Password](#delete-a-application-password-2)
  - [Definition](#definition-4)
  - [Example Request](#example-request-3)

Copy page
[View as Markdown](dev_rest_api__reference__application-passwords.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a application password record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `uuid` | The unique identifier for the application password. JSON data type: string,  Format: uuid  Read only  Context: `view`, `edit`, `embed` |
| `app_id` | A UUID provided by the application to uniquely identify it. It is recommended to use an UUID v5 with the URL or DNS namespace. JSON data type: string,  Format: uuid  Context: `view`, `edit`, `embed` |
| `name` | The name of the application password. JSON data type: string  Context: `view`, `edit`, `embed` |
| `password` | The generated password. Only available after adding an application. JSON data type: string  Read only  Context: `edit` |
| `created` | The GMT date the application password was created. JSON data type: string,  Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `view`, `edit` |
| `last_used` | The GMT date the application password was last used. JSON data type: string or null,  Format: datetime ([details](https://core.trac.wordpress.org/ticket/41032))  Read only  Context: `view`, `edit` |
| `last_ip` | The IP address the application password was last used by. JSON data type: string or null,  Format: ip  Read only  Context: `view`, `edit` |

## [Retrieve a Application Password](#retrieve-a-application-password)

### [Definition & Example Request](#definition-example-request)

`GET /wp/v2/users/<user_id>)/application-passwords`

Query this endpoint to retrieve a specific application password record.

`$ curl https://example.com/wp-json/wp/v2/users/<user_id>)/application-passwords`

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Create a Application Password](#create-a-application-password)

### [Arguments](#arguments-2)

|  |  |
| --- | --- |
| `app_id` | A UUID provided by the application to uniquely identify it. It is recommended to use an UUID v5 with the URL or DNS namespace. |
| `name` | The name of the application password. Required: 1 |

### [Definition](#definition)

`POST /wp/v2/users/<user_id>)/application-passwords`

## [Delete a Application Password](#delete-a-application-password)

There are no arguments for this endpoint.

### [Definition](#definition-2)

`DELETE /wp/v2/users/<user_id>)/application-passwords`

### [Example Request](#example-request)

`$ curl -X DELETE https://example.com/wp-json/wp/v2/users/<user_id>)/application-passwords`

## [Retrieve a Application Password](#retrieve-a-application-password-2)

### [Definition & Example Request](#definition-example-request-2)

`GET /wp/v2/users/<user_id>)/application-passwords/introspect`

Query this endpoint to retrieve a specific application password record.

`$ curl https://example.com/wp-json/wp/v2/users/<user_id>)/application-passwords/introspect`

### [Arguments](#arguments-3)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Retrieve a Application Password](#retrieve-a-application-password-3)

### [Definition & Example Request](#definition-example-request-3)

`GET /wp/v2/users/<user_id>)/application-passwords/<uuid>`

Query this endpoint to retrieve a specific application password record.

`$ curl https://example.com/wp-json/wp/v2/users/<user_id>)/application-passwords/<uuid>`

### [Arguments](#arguments-4)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Update a Application Password](#update-a-application-password)

### [Arguments](#arguments-5)

|  |  |
| --- | --- |
| `app_id` | A UUID provided by the application to uniquely identify it. It is recommended to use an UUID v5 with the URL or DNS namespace. |
| `name` | The name of the application password. |

### [Definition](#definition-3)

`POST /wp/v2/users/<user_id>)/application-passwords/<uuid>`

### [Example Request](#example-request-2)

## [Delete a Application Password](#delete-a-application-password-2)

There are no arguments for this endpoint.

### [Definition](#definition-4)

`DELETE /wp/v2/users/<user_id>)/application-passwords/<uuid>`

### [Example Request](#example-request-3)

`$ curl -X DELETE https://example.com/wp-json/wp/v2/users/<user_id>)/application-passwords/<uuid>`

First published

December 5, 2020

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Application Passwords](https://github.com/WP-API/docs/edit/master/reference/application-passwords.md)

Changelog

[See list of changes: Application Passwords](https://github.com/WP-API/docs/commits/master/reference/application-passwords.md)

[Previous
Reference
Previous: Reference](dev_rest_api__reference.md)

[Next
Block Directory Items
Next: Block Directory Items](dev_rest_api__reference__block-directory-items.md)
