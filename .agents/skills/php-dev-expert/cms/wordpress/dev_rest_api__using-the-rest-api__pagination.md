# Pagination – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/using-the-rest-api/pagination/

---

# Pagination

## In this article

Table of Contents

- [Pagination Parameters](#pagination-parameters)
- [Ordering Results](#ordering-results)

Copy page
[View as Markdown](dev_rest_api__using-the-rest-api__pagination.md)

[Back to top](#wp--skip-link--target)

WordPress sites can have a lot of content—far more than you’d want to pull down in a single request. The API endpoints default to providing a limited number of items per request, the same way that a WordPress site will default to 10 posts per page in archive views.

## [Pagination Parameters](#pagination-parameters)

Any API response which contains multiple resources supports several common query parameters to handle paging through the response data:

- `?page=`: specify the page of results to return.
  - For example, `/wp/v2/posts?page=2` is the second page of posts results
  - By retrieving `/wp/v2/posts`, then `/wp/v2/posts?page=2`, and so on, you may access every available post through the API, one page at a time.
- `?per_page=`: specify the number of records to return in one request, specified as an integer from 1 to 100.
  - For example, `/wp/v2/posts?per_page=1` will return only the first post in the collection
- `?offset=`: specify an arbitrary offset at which to start retrieving posts
  - For example, `/wp/v2/posts?offset=6` will use the default number of posts per page, but start at the 6th post in the collection
  - `?per_page=5&page=4` is equivalent to `?per_page=5&offset=15`

Large queries can hurt site performance, so `per_page` is **capped at 100 records**. If you wish to retrieve more than 100 records, for example to build a client-side list of all available categories, you may make multiple API requests and combine the results within your application.

To determine how many pages of data are available, the API returns two header fields with every paginated response:

- `X-WP-Total`: the total number of records in the collection
- `X-WP-TotalPages`: the total number of pages encompassing all available records

By inspecting these header fields you can determine how much more data is available within the API.

## [Ordering Results](#ordering-results)

In addition to the pagination query parameters detailed above, several other parameters control the order of the returned results:

- `?order=`: control whether results are returned in ascending or descending order
  - Valid values are `?order=asc` (for ascending order) and `?order=desc` (for descending order).
  - All native collections are returned in descending order by default.
- `?orderby=`: control the field by which the collection is sorted
  - The valid values for `orderby` will vary depending on the queried resource; for the `/wp/v2/posts` collection, the valid values are “date,” “relevance,” “id,” “include,” “title,” and “slug”
  - See the [REST API reference](dev_rest_api__reference.md) for the values supported by other collections
  - All collections with dated resources default to `orderby=date`

First published

December 6, 2016

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Pagination](https://github.com/WP-API/docs/edit/master/using-the-rest-api/pagination.md)

Changelog

[See list of changes: Pagination](https://github.com/WP-API/docs/commits/master/using-the-rest-api/pagination.md)

[Previous
Linking and Embedding
Previous: Linking and Embedding](dev_rest_api__using-the-rest-api__linking-and-embedding.md)

[Next
Extending the REST API
Next: Extending the REST API](dev_rest_api__extending-the-rest-api.md)
