# Nav_Menu_Items – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/nav_menu_items/

---

# Nav\_Menu\_Items

## In this article

Table of Contents

- [Schema](#schema)
- [List Nav\_Menu\_Items](#list-nav_menu_items)
  - [Definition](#definition)
  - [Example Request](#example-request)
  - [Arguments](#arguments)
- [Create a Nav\_Menu\_Item](#create-a-nav_menu_item)
  - [Arguments](#arguments-2)
  - [Definition](#definition-2)
- [Retrieve a Nav\_Menu\_Item](#retrieve-a-nav_menu_item)
  - [Definition & Example Request](#definition-example-request)
  - [Arguments](#arguments-3)
- [Update a Nav\_Menu\_Item](#update-a-nav_menu_item)
  - [Arguments](#arguments-4)
  - [Definition](#definition-3)
  - [Example Request](#example-request-2)
- [Delete a Nav\_Menu\_Item](#delete-a-nav_menu_item)
  - [Arguments](#arguments-5)
  - [Definition](#definition-4)
  - [Example Request](#example-request-3)

Copy page
[View as Markdown](dev_rest_api__reference__nav_menu_items.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a nav\_menu\_item record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `title` | The title for the object. JSON data type: string or object  Context: `view`, `edit`, `embed` |
| `id` | Unique identifier for the object. JSON data type: integer  Read only  Context: `view`, `edit`, `embed` |
| `type_label` | The singular label used to describe this type of menu item. JSON data type: string  Read only  Context: `view`, `edit`, `embed` |
| `type` | The family of objects originally represented, such as “post\_type” or “taxonomy”. JSON data type: string  Context: `view`, `edit`, `embed`  One of: `taxonomy`, `post_type`, `post_type_archive`, `custom` |
| `status` | A named status for the object. JSON data type: string  Context: `view`, `edit`, `embed`  One of: `publish`, `future`, `draft`, `pending`, `private` |
| `parent` | The ID for the parent of the object. JSON data type: integer  Context: `view`, `edit`, `embed` |
| `attr_title` | Text for the title attribute of the link element for this menu item. JSON data type: string  Context: `view`, `edit`, `embed` |
| `classes` | Class names for the link element of this menu item. JSON data type: array  Context: `view`, `edit`, `embed` |
| `description` | The description of this menu item. JSON data type: string  Context: `view`, `edit`, `embed` |
| `menu_order` | The DB ID of the nav\_menu\_item that is this item’s menu parent, if any, otherwise 0. JSON data type: integer  Context: `view`, `edit`, `embed` |
| `object` | The type of object originally represented, such as “category”, “post”, or “attachment”. JSON data type: string  Context: `view`, `edit`, `embed` |
| `object_id` | The database ID of the original object this menu item represents, for example the ID for posts or the term\_id for categories. JSON data type: integer  Context: `view`, `edit`, `embed` |
| `target` | The target attribute of the link element for this menu item. JSON data type: string  Context: `view`, `edit`, `embed`  One of: `_blank`, |
| `url` | The URL to which this menu item points. JSON data type: string,  Format: uri  Context: `view`, `edit`, `embed` |
| `xfn` | The XFN relationship expressed in the link of this menu item. JSON data type: array  Context: `view`, `edit`, `embed` |
| `invalid` | Whether the menu item represents an object that no longer exists. JSON data type: boolean  Read only  Context: `view`, `edit`, `embed` |
| `menus` | The terms assigned to the object in the nav\_menu taxonomy. JSON data type: integer  Context: `view`, `edit` |
| `meta` | Meta fields. JSON data type: object  Context: `view`, `edit` |

## [List Nav\_Menu\_Items](#list-nav_menu_items)

Query this endpoint to retrieve a collection of nav\_menu\_items. The response you receive can be controlled and filtered using the URL query parameters below.

### [Definition](#definition)

`GET /wp/v2/menu-items`

### [Example Request](#example-request)

`$ curl https://example.com/wp-json/wp/v2/menu-items`

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |
| `page` | Current page of the collection. Default: `1` |
| `per_page` | Maximum number of items to be returned in result set. Default: `100` |
| `search` | Limit results to those matching a string. |
| `after` | Limit response to posts published after a given ISO8601 compliant date. |
| `modified_after` | Limit response to posts modified after a given ISO8601 compliant date. |
| `before` | Limit response to posts published before a given ISO8601 compliant date. |
| `modified_before` | Limit response to posts modified before a given ISO8601 compliant date. |
| `exclude` | Ensure result set excludes specific IDs. |
| `include` | Limit result set to specific IDs. |
| `offset` | Offset the result set by a specific number of items. |
| `order` | Order sort attribute ascending or descending. Default: `asc`  One of: `asc`, `desc` |
| `orderby` | Sort collection by object attribute. Default: `menu_order`  One of: `author`, `date`, `id`, `include`, `modified`, `parent`, `relevance`, `slug`, `include_slugs`, `title`, `menu_order` |
| `search_columns` | Array of column names to be searched. |
| `slug` | Limit result set to posts with one or more specific slugs. |
| `status` | Limit result set to posts assigned one or more statuses. Default: `publish` |
| `tax_relation` | Limit result set based on relationship between multiple taxonomies.  One of: `AND`, `OR` |
| `menus` | Limit result set to items with specific terms assigned in the menus taxonomy. |
| `menus_exclude` | Limit result set to items except those with specific terms assigned in the menus taxonomy. |
| `menu_order` | Limit result set to posts with a specific menu\_order value. |

## [Create a Nav\_Menu\_Item](#create-a-nav_menu_item)

### [Arguments](#arguments-2)

|  |  |
| --- | --- |
| `title` | The title for the object. |
| `type` | The family of objects originally represented, such as “post\_type” or “taxonomy”. Default: `custom`  One of: `taxonomy`, `post_type`, `post_type_archive`, `custom` |
| `status` | A named status for the object. Default: `publish`  One of: `publish`, `future`, `draft`, `pending`, `private` |
| `parent` | The ID for the parent of the object. |
| `attr_title` | Text for the title attribute of the link element for this menu item. |
| `classes` | Class names for the link element of this menu item. |
| `description` | The description of this menu item. |
| `menu_order` | The DB ID of the nav\_menu\_item that is this item’s menu parent, if any, otherwise 0. Default: `1` |
| `object` | The type of object originally represented, such as “category”, “post”, or “attachment”. |
| `object_id` | The database ID of the original object this menu item represents, for example the ID for posts or the term\_id for categories. |
| `target` | The target attribute of the link element for this menu item.  One of: `_blank`, |
| `url` | The URL to which this menu item points. |
| `xfn` | The XFN relationship expressed in the link of this menu item. |
| `menus` | The terms assigned to the object in the nav\_menu taxonomy. |
| `meta` | Meta fields. |

### [Definition](#definition-2)

`POST /wp/v2/menu-items`

## [Retrieve a Nav\_Menu\_Item](#retrieve-a-nav_menu_item)

### [Definition & Example Request](#definition-example-request)

`GET /wp/v2/menu-items/<id>`

Query this endpoint to retrieve a specific nav\_menu\_item record.

`$ curl https://example.com/wp-json/wp/v2/menu-items/<id>`

### [Arguments](#arguments-3)

|  |  |
| --- | --- |
| `id` | Unique identifier for the post. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Update a Nav\_Menu\_Item](#update-a-nav_menu_item)

### [Arguments](#arguments-4)

|  |  |
| --- | --- |
| `id` | Unique identifier for the post. |
| `title` | The title for the object. |
| `type` | The family of objects originally represented, such as “post\_type” or “taxonomy”.  One of: `taxonomy`, `post_type`, `post_type_archive`, `custom` |
| `status` | A named status for the object.  One of: `publish`, `future`, `draft`, `pending`, `private` |
| `parent` | The ID for the parent of the object. |
| `attr_title` | Text for the title attribute of the link element for this menu item. |
| `classes` | Class names for the link element of this menu item. |
| `description` | The description of this menu item. |
| `menu_order` | The DB ID of the nav\_menu\_item that is this item’s menu parent, if any, otherwise 0. |
| `object` | The type of object originally represented, such as “category”, “post”, or “attachment”. |
| `object_id` | The database ID of the original object this menu item represents, for example the ID for posts or the term\_id for categories. |
| `target` | The target attribute of the link element for this menu item.  One of: `_blank`, |
| `url` | The URL to which this menu item points. |
| `xfn` | The XFN relationship expressed in the link of this menu item. |
| `menus` | The terms assigned to the object in the nav\_menu taxonomy. |
| `meta` | Meta fields. |

### [Definition](#definition-3)

`POST /wp/v2/menu-items/<id>`

### [Example Request](#example-request-2)

## [Delete a Nav\_Menu\_Item](#delete-a-nav_menu_item)

### [Arguments](#arguments-5)

|  |  |
| --- | --- |
| `id` | Unique identifier for the post. |
| `force` | Whether to bypass Trash and force deletion. |

### [Definition](#definition-4)

`DELETE /wp/v2/menu-items/<id>`

### [Example Request](#example-request-3)

`$ curl -X DELETE https://example.com/wp-json/wp/v2/menu-items/<id>`

First published

April 26, 2023

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Nav\_Menu\_Items](https://github.com/WP-API/docs/edit/master/reference/nav_menu_items.md)

Changelog

[See list of changes: Nav\_Menu\_Items](https://github.com/WP-API/docs/commits/master/reference/nav_menu_items.md)

[Previous
Nav\_Menu\_Item Revisions
Previous: Nav\_Menu\_Item Revisions](dev_rest_api__reference__nav_menu_item-revisions.md)

[Next
Page Revisions
Next: Page Revisions](dev_rest_api__reference__page-revisions.md)
