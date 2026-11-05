# REST API · Open-Web-Analytics/Open-Web-Analytics Wiki · GitHub

> **Fonte / Source:** https://github.com/Open-Web-Analytics/Open-Web-Analytics/wiki/REST-API

---

OWA provides a REST API for various functions.

# Formulating a Request

## Endpoint

The OWA REST API endpoint is located at: `http://some.domain.com/path/to/owa/api/`

## Authentication

### Version 1.7.2 or earlier

REST API requests are authenticated using OWA login cookies or via the OWA user's API key. The cookies or API key must be included with each request. API key may be passed using either the `X-API-KEY` http header or as the `owa_apiKey` query string parameter.

### Version 1.7.3 or later

REST API requests are authenticated using OWA login cookies or via a properly signed API request.

#### Creating a Signed API request

The steps to create a properly signed API request are as follows:

1. Create a canonical request url.
2. Use the canonical request url and additional metadata to create a string for signing.
3. Use your secret OWA\_AUTH\_KEY (in your owa-config.php file) and the string from the previous step, to create a signature.
4. Add the resulting signature and your API key to the HTTP request as either http headers or as query string parameters.

The resulting signed API request URL would look as follows:

```
GET http://my.domain.com/api?
   &owa_version=v1
   &owa_module=base
   &owa_do=users
   &owa_apiKey=__YOUR_API_KEY__
   &owa_signature=__COMPUTED_STRING__
```

##### Step 1: Generate the canonical URL

The canonical request URL is the protocol + endpoint + URI + any query string required. For example:

`http://my.domain.com/api/base/v1/users`

or

`http://my.domain.com/api/?owa_module=base&owa_version=v1&owa_do=users`

**NOTES:** the canonical URL is the URL exactly as you will request it, without the signature. If you send your API key as the `owa_apiKey` query string parameter, it is part of that URL, so it is part of the canonical URL too, in the same position. If you send it in the `X-API-KEY` header instead, it is not. All query string values should be url encoded.

##### Step 2: Generate the signing string

Create a string that will be used to compute the signature. The string should be a concatenation of the following values in this exact order:

1. the text: OWASIGNATURE
2. your apiKey
3. the canonical request url
4. the date in "Ymd" format (e.g. 20210630). Must be UTC time.
5. your secret OWA\_AUTH\_KEY

Using PHP this would would be constructed as follows;

```
$signing_string = "OWASIGNATURE" . $apiKey . $requestUrl .  date( 'Ymd' ) . $owa_auth_key;
```

##### Step 3: Create the signature value

Hash the signing string with SHA-256, write the digest as lowercase hexadecimal, and base-64 encode that hexadecimal string. This is not an HMAC: the secret OWA\_AUTH\_KEY is part of the string being hashed.

```
$signature = base64_encode( hash( 'sha256', $signing_string ) );
```

##### Step 4

Add the signature and your API key to the request url by using either 1) the `owa_apiKey` and `owa_signature` query string parameters OR 2) the `X-API-KEY` and `X-SIGNATURE` HTTP headers of the request.

## Methods

Here are the REST API routes and their parameters:

### Sites

#### GET /api/base/v1/sites (/api/?module=base&version=v1&do=sites)

Returns the Observation Profiles the authenticated user is allowed to see —
every one for an administrator, and the assigned ones for other roles. Requires
the `view_site_list` capability.

Each entry carries the Profile's own columns — `site_id`, `name`, `domain`,
`description`, `site_family` and the rest — plus:

| Field | Description |
| --- | --- |
| `property_name` | The name of the Property this Profile observes. **Always present**, and empty rather than absent when the Profile has no Property, so a consumer can read it unconditionally. |

**This payload shape is stable and is treated as a contract.** It was changed
once, in 1.7.x, without a deprecation path, and that broke the WordPress plugin,
which reads this endpoint to populate its site list. It has since been restored
and is covered by tests. If you consume it, you can rely on the entries being
whole Profile rows rather than a reduced subset.

Note that "site" here means an **Observation Profile** — see
[Organizations, Properties and Profiles](Organizations-Properties-and-Profiles.md).
The endpoint keeps its original name for compatibility.

#### POST /api/base/v1/sites (/api/?module=base&version=v1&do=sites)

Adds a new Observation Profile.

##### Request Params

| Param | Description |
| --- | --- |
| `domain` | **Required.** The fully qualified domain name (including the protocol). e.g. `http://some.domain.com` |
| `name` | A label for the name of your website. |
| `description` | A brief description of the site useful for notes. |
| `site_family` | An arbitrary tag for grouping websites in the UI. |

### Notifications

Notifications are the messages shown in the admin UI. All three endpoints
require the `view_site_list` capability — which is what every signed-in role
carries — because a notification belongs to the person reading it.

#### GET /api/base/v1/notifications (/api/?module=base&version=v1&do=notifications)

Returns the current user's undismissed notifications.

The response is **not paged**, deliberately: the unread badge is the length of
this list, so a paged response would show a count of one page rather than a
count of notifications.

#### POST /api/base/v1/notifications (/api/?module=base&version=v1&do=notifications)

Marks one notification as read. It stays in the list; only its read state
changes.

##### Request Params

| Param | Description |
| --- | --- |
| `notificationId` | **Required.** The id of the notification to mark read. |

#### DELETE /api/base/v1/notifications (/api/?module=base&version=v1&do=notifications)

Dismisses one notification, removing it from the list.

##### Request Params

| Param | Description |
| --- | --- |
| `notificationId` | **Required.** The id of the notification to dismiss. |

### Users

#### GET /api/base/v1/users (/api/?module=base&version=v1&do=users)

Returns a list of OWA users and their roles.

#### POST /api/base/v1/users (/api/?module=base&version=v1&do=users)

##### Request Params

| Param | Description |
| --- | --- |
| `user_id` | **Required.** A unique user\_id string. |
| `email_address` | A properly formed email address. |
| `real_name` | The real name of the user |
| `role` | **Required.** The role of the user. Possible values include `admin |

#### DELETE /api/base/v1/users/<user\_id> (/api/?module=base&version=v1&do=users&user\_id=foo)

Deletes an OWA user.

| Param | Description |
| --- | --- |
| `user_id` | **Required.** A unique user\_id string. |

### Site Users

#### POST /api/base/v1/siteUsers (/api/?module=base&version=v1&do=siteUsers)

##### Request Params

| Param | Description |
| --- | --- |
| `user_id` | **Required.** The user\_id of an existing user. |
| `siteId` | **Required.** The siteId of an existing tracked website. |

### Reports

#### GET /api/base/v1/reports (/api/?module=base&version=v1&do=reports)

Retrieves a custom report.

##### Request Params

See [Data Access API](Data-Access-API.md) for details on the request params for this route.

#### GET /api/base/v1/reports/latest\_visits (/api/?module=base&version=v1&do=reports&report\_name=latest\_visits)

Returns a list of the latest visits.

##### Request Params

- `startDate` - a yyyymmdd data string (e.g. 20200415)
- `endDate` - a yyyymmdd data string (e.g. 20200415)
- `siteId` - a id of an existing tracked website

#### GET /api/base/v1/reports/visit/ (/api/?module=base&version=v1&do=reports&report\_name=visit&sessionId=foo)

Returns the detail of a single visit.

##### Request Params

| Param | Description |
| --- | --- |
| `sessionId` | the ID of an existing session. |

#### GET /api/base/v1/reports/latest\_actions (/api/?module=base&version=v1&do=reports&report\_name=latest\_actions)

Returns a list of the latest [Actions](Action-Tracking.md).

##### Request Params

| Param | Description |
| --- | --- |
| `startDate` | a yyyymmdd data string (e.g. 20200415). |
| `endDate` | a yyyymmdd data string (e.g. 20200415). |
| `siteId` | The id of an existing tracked website. |

#### GET /api/base/v1/reports/clickstream (/api/?module=base&version=v1&do=reports&report\_name=clickstream)

Returns the clickstream of a specific session. The clickstream is a time ordered list of the pages viewed within a given session.

##### Request Params

| Param | Description |
| --- | --- |
| `sessionId` | the ID of an existing session. |

#### GET /api/base/v1/reports/transactions (/api/?module=base&version=v1&do=reports&report\_name=transactions)

Returns e-commerce transactions for a site, most recent first.

##### Request Params

| Param | Description |
| --- | --- |
| `siteId` | Required. The id of an existing tracked website. |
| `period` / `startDate` / `endDate` | The time period to report on. |
| `sort` | `asc` or `desc`. Defaults to `desc`. |

#### GET /api/base/v1/reports/transaction (/api/?module=base&version=v1&do=reports&report\_name=transaction)

Returns a single transaction and its line items.

##### Request Params

| Param | Description |
| --- | --- |
| `transactionId` | Required. The order id of an existing transaction. |

#### GET /api/base/v1/reports/transaction\_items (/api/?module=base&version=v1&do=reports&report\_name=transaction\_items)

Returns a transaction's detail with its line items attached. Answers an empty
result if no transaction carries that order id.

##### Request Params

| Param | Description |
| --- | --- |
| `transactionId` | Required. The order id of an existing transaction. |

#### Click data (the `clicks` report was removed)

There is no `report_name=clicks` route. Click data is an ordinary dimensional
query through the [Data Access API](Data-Access-API.md), which groups identical coordinates
instead of returning one row per click:

```
owa_metrics=domClicks&owa_dimensions=clickX,clickY&owa_constraints=pagePath%3D%3D/some/page
```

The resolver joins clicks to documents on its own, because `pagePath` is
registered against the document.

# Working with the Response

The default format of any response is a JSON object that contains the following properties:

- `requestID` - a GUID for the request
- `error` - an array of any error or validation msgs
- `data` - the data payload. Will be empty on error
- `httpResponse` - info about the http request. currently just contains status\_code

When working with a response object it's always best to first check if there are any errors populated in the `error` property. If there are no errors, then you can trust the value of `data`.
