# Wp Site Health Tests – REST API Handbook | Developer.WordPress.org

> **Fonte / Source:** https://developer.wordpress.org/rest-api/reference/wp-site-health-tests/

---

# Wp Site Health Tests

## In this article

Table of Contents

- [Schema](#schema)
- [Retrieve a Wp Site Health Test](#retrieve-a-wp-site-health-test)
  - [Definition & Example Request](#definition-example-request)
- [Retrieve a Wp Site Health Test](#retrieve-a-wp-site-health-test-2)
  - [Definition & Example Request](#definition-example-request-2)
- [Retrieve a Wp Site Health Test](#retrieve-a-wp-site-health-test-3)
  - [Definition & Example Request](#definition-example-request-3)
- [Retrieve a Wp Site Health Test](#retrieve-a-wp-site-health-test-4)
  - [Definition & Example Request](#definition-example-request-4)
- [Retrieve a Wp Site Health Test](#retrieve-a-wp-site-health-test-5)
  - [Definition & Example Request](#definition-example-request-5)

Copy page
[View as Markdown](dev_rest_api__reference__wp-site-health-tests.md)

[Back to top](#wp--skip-link--target)

## [Schema](#schema)

The schema defines all the fields that exist within a wp site health test record. Any response from these endpoints can be expected to contain the fields below unless the `\_filter` query parameter is used or the schema field only appears in a specific context.

|  |  |
| --- | --- |
| `test` | The name of the test being run. JSON data type: string  Read only  Context: |
| `label` | A label describing the test. JSON data type: string  Read only  Context: |
| `status` | The status of the test. JSON data type: string  Read only  Context:  One of: `good`, `recommended`, `critical` |
| `badge` | The category this test is grouped in. JSON data type: object  Read only  Context: |
| `description` | A more descriptive explanation of what the test looks for, and why it is important for the user. JSON data type: string  Read only  Context: |
| `actions` | HTML containing an action to direct the user to where they can resolve the issue. JSON data type: string  Read only  Context: |

## [Retrieve a Wp Site Health Test](#retrieve-a-wp-site-health-test)

### [Definition & Example Request](#definition-example-request)

`GET /wp-site-health/v1/tests/background-updates`

Query this endpoint to retrieve a specific wp site health test record.

`$ curl https://example.com/wp-json/wp-site-health/v1/tests/background-updates`

There are no arguments for this endpoint.

## [Retrieve a Wp Site Health Test](#retrieve-a-wp-site-health-test-2)

### [Definition & Example Request](#definition-example-request-2)

`GET /wp-site-health/v1/tests/loopback-requests`

Query this endpoint to retrieve a specific wp site health test record.

`$ curl https://example.com/wp-json/wp-site-health/v1/tests/loopback-requests`

There are no arguments for this endpoint.

## [Retrieve a Wp Site Health Test](#retrieve-a-wp-site-health-test-3)

### [Definition & Example Request](#definition-example-request-3)

`GET /wp-site-health/v1/tests/https-status`

Query this endpoint to retrieve a specific wp site health test record.

`$ curl https://example.com/wp-json/wp-site-health/v1/tests/https-status`

There are no arguments for this endpoint.

## [Retrieve a Wp Site Health Test](#retrieve-a-wp-site-health-test-4)

### [Definition & Example Request](#definition-example-request-4)

`GET /wp-site-health/v1/tests/dotorg-communication`

Query this endpoint to retrieve a specific wp site health test record.

`$ curl https://example.com/wp-json/wp-site-health/v1/tests/dotorg-communication`

There are no arguments for this endpoint.

## [Retrieve a Wp Site Health Test](#retrieve-a-wp-site-health-test-5)

### [Definition & Example Request](#definition-example-request-5)

`GET /wp-site-health/v1/tests/authorization-header`

Query this endpoint to retrieve a specific wp site health test record.

`$ curl https://example.com/wp-json/wp-site-health/v1/tests/authorization-header`

There are no arguments for this endpoint.

First published

April 26, 2023

Last updated

October 14, 2026

Edit article

[Improve it on GitHub: Wp Site Health Tests](https://github.com/WP-API/docs/edit/master/reference/wp-site-health-tests.md)

Changelog

[See list of changes: Wp Site Health Tests](https://github.com/WP-API/docs/commits/master/reference/wp-site-health-tests.md)

[Previous
Widgets
Previous: Widgets](dev_rest_api__reference__widgets.md)

[Next
Requests
Next: Requests](dev_rest_api__requests.md)
