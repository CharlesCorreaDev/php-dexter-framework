# Reference – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/

---

# Reference

## In this article

Table of Contents

- [REST API Developer Endpoint Reference](#rest-api-developer-endpoint-reference)
- [A Distributed API](#a-distributed-api)

Copy page
[View as Markdown](dev_rest_api__reference.md)

[Back to top](#wp--skip-link--target)

The WordPress REST API is organized around [REST](http://en.wikipedia.org/wiki/Representational_state_transfer), and is designed to have predictable, resource-oriented URLs and to use HTTP response codes to indicate API errors. The API uses built-in HTTP features, like HTTP authentication and HTTP verbs, which can be understood by off-the-shelf HTTP clients, and supports cross-origin resource sharing to allow you to interact securely with the API from a client-side web application.

The REST API uses JSON exclusively as the request and response format, including error responses. While the REST API does not completely conform to the [HAL standard](http://stateless.co/hal_specification.html), it does implement HAL’s `._links` and `._embedded` properties for linking API resources, and is fully discoverable via hyperlinks in the responses.

The REST API provides public data accessible to any client anonymously, as well as private data only available after [authentication](dev_rest_api__authentication.md). Once authenticated the REST API supports most content management actions, allowing you to build alternative dashboards for a site, enhance your plugins with more responsive management tools, or build complex single-page applications.

This API reference provides information on the specific endpoints available through the API, their parameters, and their response data format.

## [REST API Developer Endpoint Reference](#rest-api-developer-endpoint-reference)

| Resource | Base Route |
| --- | --- |
| [Posts](dev_rest_api__reference__posts.md) | `/wp/v2/posts` |
| [Post Revisions](dev_rest_api__reference__post-revisions.md) | `/wp/v2/posts/<id>/revisions` |
| [Categories](dev_rest_api__reference__categories.md) | `/wp/v2/categories` |
| [Tags](dev_rest_api__reference__tags.md) | `/wp/v2/tags` |
| [Pages](dev_rest_api__reference__pages.md) | `/wp/v2/pages` |
| [Page Revisions](dev_rest_api__reference__page-revisions.md) | `/wp/v2/pages/<id>/revisions` |
| [Comments](dev_rest_api__reference__comments.md) | `/wp/v2/comments` |
| [Taxonomies](dev_rest_api__reference__taxonomies.md) | `/wp/v2/taxonomies` |
| [Media](dev_rest_api__reference__media.md) | `/wp/v2/media` |
| [Users](dev_rest_api__reference__users.md) | `/wp/v2/users` |
| [Post Types](dev_rest_api__reference__post-types.md) | `/wp/v2/types` |
| [Post Statuses](dev_rest_api__reference__post-statuses.md) | `/wp/v2/statuses` |
| [Settings](dev_rest_api__reference__settings.md) | `/wp/v2/settings` |
| [Themes](dev_rest_api__reference__themes.md) | `/wp/v2/themes` |
| [Search](dev_rest_api__reference__search-results.md) | `/wp/v2/search` |
| [Block Types](dev_rest_api__reference__block-types.md) | `/wp/v2/block-types` |
| [Blocks](dev_rest_api__reference__blocks.md) | `/wp/v2/blocks` |
| [Block Revisions](dev_rest_api__reference__block-revisions.md) | `/wp/v2/blocks/<id>/autosaves/` |
| [Block Renderer](dev_rest_api__reference__rendered-blocks.md) | `/wp/v2/block-renderer` |
| [Block Directory Items](dev_rest_api__reference__block-directory-items.md) | `/wp/v2/block-directory/search` |
| [Plugins](dev_rest_api__reference__plugins.md) | `/wp/v2/plugins` |

## [A Distributed API](#a-distributed-api)

Unlike many other REST APIs, the WordPress REST API is distributed and available individually on each site that supports it. This means there is no singular API root or base to contact; instead, we have [a discovery process](dev_rest_api__discovery.md) that allows interacting with sites without prior contact. The API also exposes self-documentation at the index endpoint, or via an `OPTIONS` request to any endpoint, allowing human- or machine-discovery of endpoint capabilities.

First published

December 6, 2016

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Reference](https://github.com/WP-API/docs/edit/master/reference.md)

Changelog

[See list of changes: Reference](https://github.com/WP-API/docs/commits/master/reference.md)

[Previous
Schema
Previous: Schema](dev_rest_api__extending-the-rest-api__schema.md)

[Next
Application Passwords
Next: Application Passwords](dev_rest_api__reference__application-passwords.md)
