# Nav_Menu_Item Revisions – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/nav_menu_item-revisions/

---

# Nav\_Menu\_Item Revisions

## In this article

Table of Contents

- [Schema](#schema)
- [Retrieve a Nav\_Menu\_Item Revision](#retrieve-a-nav_menu_item-revision)
  - [Definition & Example Request](#definition-example-request)
  - [Arguments](#arguments)
- [Create a Nav\_Menu\_Item Revision](#create-a-nav_menu_item-revision)
  - [Arguments](#arguments-2)
  - [Definition](#definition)
- [Retrieve a Nav\_Menu\_Item Revision](#retrieve-a-nav_menu_item-revision-2)
  - [Definition & Example Request](#definition-example-request-2)
  - [Arguments](#arguments-3)

Copy page
[View as Markdown](dev_rest_api__reference__nav_menu_item-revisions.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a nav\_menu\_item revision record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

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
| `title` | The title for the object. JSON data type: string or object  Context: `view`, `edit`, `embed` |
| `preview_link` | Preview link for the post. JSON data type: string,  Format: uri  Read only  Context: `edit` |

## [Retrieve a Nav\_Menu\_Item Revision](#retrieve-a-nav_menu_item-revision)

### [Definition & Example Request](#definition-example-request)

`GET /wp/v2/menu-items/<id>/autosaves`

Query this endpoint to retrieve a specific nav\_menu\_item revision record.

`$ curl https://example.com/wp-json/wp/v2/menu-items/<id>/autosaves`

### [Arguments](#arguments)

|  |  |
| --- | --- |
| `parent` | The ID for the parent of the autosave. |
| `context` | Scope under which the request is made; determines fields present in response. Default: `view`  One of: `view`, `embed`, `edit` |

## [Create a Nav\_Menu\_Item Revision](#create-a-nav_menu_item-revision)

### [Arguments](#arguments-2)

|  |  |
| --- | --- |
| `parent` | The ID for the parent of the object. |
| `title` | The title for the object. |
| `type` | The family of objects originally represented, such as “post\_type” or “taxonomy”.  One of: `taxonomy`, `post_type`, `post_type_archive`, `custom` |
| `status` | A named status for the object.  One of: `publish`, `future`, `draft`, `pending`, `private` |
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

### [Definition](#definition)

`POST /wp/v2/menu-items/<id>/autosaves`

## [Retrieve a Nav\_Menu\_Item Revision](#retrieve-a-nav_menu_item-revision-2)

### [Definition & Example Request](#definition-example-request-2)

`GET /wp/v2/menu-items/<parent>/autosaves/<id>`

Query this endpoint to retrieve a specific nav\_menu\_item revision record.

`$ curl https://example.com/wp-json/wp/v2/menu-items/<parent>/autosaves/<id>`

### [Arguments](#arguments-3)

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

[Improve it on GitHub: Nav\_Menu\_Item Revisions](https://github.com/WP-API/docs/edit/master/reference/nav_menu_item-revisions.md)

Changelog

[See list of changes: Nav\_Menu\_Item Revisions](https://github.com/WP-API/docs/commits/master/reference/nav_menu_item-revisions.md)

[Previous
Nav\_Menus
Previous: Nav\_Menus](dev_rest_api__reference__nav_menus.md)

[Next
Nav\_Menu\_Items
Next: Nav\_Menu\_Items](dev_rest_api__reference__nav_menu_items.md)
