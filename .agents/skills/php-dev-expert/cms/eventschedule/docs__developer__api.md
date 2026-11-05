# API Reference: Schedules, Events, Sales - Event Schedule

> **Fonte / Source:** https://eventschedule.com/docs/developer/api

---

Developer

# API Reference

A JSON REST API for your schedules, events, sales, refunds, appointments and fan content. API access is a Pro feature: on the hosted service the schedules you read and write have to be on a Pro or Enterprise plan, apart from the few endpoints listed under Authentication. A selfhosted install counts as Enterprise, so nothing here is held back by plan.

Feature overview: [API for AI agents](https://eventschedule.com/for-ai-agents)

[Pro
 - Requires the Pro plan](https://eventschedule.com/pricing "Requires the Pro plan")

Docs
/
API Reference

## Authentication

Every endpoint except [Register](#register) and [Login](#login) authenticates with an API key sent in the `X-API-Key` header. There are two ways to get one:

- Open **Settings** in the admin panel and choose the **Developers** tab. Under **API Settings**, switch on **Enable API Access** and press **Save**. The key is shown once, beside a copy button, so copy it before you leave the page. See [Account Settings](docs__account-settings.md#api).
- Call the [Register](#register) or [Login](#login) endpoints, which return a key in the response body (useful for AI agents and scripted setup).

A key belongs to a *user account*, not to one schedule. It can reach every schedule where you are the owner or an admin, and nothing else. Followers and viewers cannot be used to authorise API calls.

On the hosted service a team belongs to the Enterprise plan. The schedule's owner's key works on Pro or Enterprise, but a team admin's key reaches a schedule only while that schedule is on Enterprise. Below that, the lists leave the schedule and its events, sales and fan content out, and every call on it answers the admin `403 Unauthorized`.

### Plan requirement

On the hosted service, a schedule must be on a Pro or Enterprise plan for the API to see it. The schedule, event, sale and feedback lists leave out anything that belongs only to free schedules, and single-record reads and writes on a free schedule return `403 API usage is limited to Pro accounts`. A few endpoints carry no plan check at all: [Create Schedule](#create-schedule), so a new account can bootstrap; [Delete Schedule](#delete-schedule), so an owner can always retire one; [Create Sale](#create-sale), so a schedule can record a sale it took elsewhere; both [List Categories](#list-categories) routes; [List Fan Content](#list-fan-content); and the [Boosts](#boosts) endpoints, which answer only a boost partner's own key. A new schedule starts on the Free plan with no trial. Selfhosted installs resolve to Enterprise, so every endpoint is available there.

### Key lifetime and rotation

- A key expires one year after it is issued. After that every request returns `401 API key expired`. **API Settings** shows the expiry date under the key, and says so once the key has expired.
- Keys are stored hashed, so a lost key cannot be recovered. To rotate one, switch **Enable API Access** off and press **Save**, then switch it on and save again. The first save deletes the old key at once, after asking you to confirm, and the second issues a new one.
- Ten consecutive requests with the same invalid key block that key for 15 minutes with `423 API key temporarily blocked`.
- A request with no `X-API-Key` header returns `401 API key is required`, and an unknown key `401 Invalid API key`.
- A key whose account the operator has blocked returns `403 Account blocked` on every request, and Login gives such an account no key.

Keep the key server-side

An API key carries full owner and admin rights over your schedules, including sales data and buyer email addresses. Never ship it in client-side code, a mobile app bundle or a public repository.

cURL ExampleCopy

```
curl -X GET "https://eventschedule.com/api/schedules" \
         -H "X-API-Key: your_api_key_here" \
         -H "Accept: application/json"
```

## Rate Limits

Authenticated requests are counted per account, in separate read and write buckets. Each key has budgets of its own, so callers that share an address (a voice-agent platform, an office network) do not share them, and a request that fails authentication is not counted there:

| Operation Type | Limit | HTTP Methods |
| --- | --- | --- |
| Read operations | 300 requests/minute | GET |
| Write operations | 30 requests/minute | POST, PUT, DELETE |

Each bucket counts in a fixed one-minute window that opens with its first counted request. When that minute is up the count starts again from zero, so a client that makes no more than 300 reads and 30 writes in any one window is never refused, however long it runs.

Requests that prove no key, with no `X-API-Key` header or a wrong one, are counted per IP address instead (the visitor's own, not a proxy's): after 30 in a minute that address is answered `429` until the minute is up, except for a key it has already used successfully in the last day.

[Create Event](#create-event) carries a second throttle of 30 requests per minute on top of the write bucket. It is counted per account, across all your schedules, in a window of its own, so a bulk import should pace itself well below 30 creates a minute.

### Unauthenticated endpoints

The auth endpoints are limited separately, because they run before any key exists:

| Endpoint | Limit | Counted per |
| --- | --- | --- |
| `/api/register/send-code` | 5 codes per hour | Email address |
| `/api/register` | 3 registrations per hour | IP address |
| `/api/login` | 5 failed attempts per 15 minutes | IP address |

The read and write buckets and the three endpoints above all answer `429` with an `error` message when the limit is hit. A `429` from a read or write bucket also carries a `Retry-After` header with the number of seconds until that bucket's window resets. The three auth endpoints send no rate limit headers, so back off on the status code there.

The Create Event throttle answers differently, because it is the framework's own: its `429` carries `Retry-After`, `X-RateLimit-Limit` and `X-RateLimit-Remaining` headers, and its body holds a `message` in place of `error`. See [Response Format](#response-format) for why that request needs an `Accept` header.

Rate Limit Response (429)Copy

```
{
        "error": "Rate limit exceeded"
    }
```

## Response Format

Every endpoint answers in JSON. Successful responses wrap the result in a `data` property: an object for single-record endpoints, an array for list endpoints. List endpoints add a `meta` object with the pagination counters. Event and sale writes and Upload Flyer put a confirmation in `meta.message`, while the delete endpoints return theirs as `data.message`.

Failures return an `error` string. A validation failure adds an `errors` object keyed by field name, each holding an array of messages.

### Ask for JSON

Send `Accept: application/json` with every request. A failure raised outside an endpoint is rendered by the framework, which picks its format from that header. Without it, the [Create Event](#create-event) throttle, an unknown URL, an unknown `venue_id` and a server error come back as HTML pages, and the daily cap on new events comes back as a redirect. With it they are JSON, though the framework's own replies name the reason `message`, not `error`.

### Record IDs

Schedules, events, sub-schedules, tickets and sales are all identified by an opaque encoded string such as `"w4K8xU"`, never by the raw database number. Pass the same string back exactly as you received it. The examples on this page use readable stand-ins such as `"evt123"`. Category IDs are the one exception: they are plain integers.

### Dates and times

| Value | Format |
| --- | --- |
| An event's `starts_at`, sent or returned | UTC, `Y-m-d H:i:s`, with no offset suffix. The schedule's timezone only decides how that instant is shown on the guest page. |
| `starts_after`, `starts_before` | UTC calendar dates, `Y-m-d` |
| `event_date` on sales, feedback and fan content | `Y-m-d`, the date of the occurrence. For a sale it is the calendar date in the schedule's own timezone. |
| `created_at`, `updated_at`, `api_key_expires_at` and a returned ticket's `sales_start_at` and `sales_end_at` | ISO 8601 with an offset, such as `2026-07-11T09:12:00+00:00` |
| A ticket's `sales_start_at` and `sales_end_at`, when you send them | UTC, `Y-m-d H:i:s`. An offset in the value is not applied. |
| An agenda part's `start_time` and `end_time` | Plain text of up to 10 characters such as `"20:00"`, stored and returned as sent |
| Appointment slots and bookings, and every time on a boost or a boost statement | UTC with a `Z` suffix, such as `2026-10-20T18:30:00Z`. A slot is sent back exactly as it was read. |

Success ResponseCopy

```
{
        "data": [...],
        "meta": {
            "current_page": 1,
            "total": 50
        }
    }
```

Error ResponseCopy

```
{
        "error": "Validation failed",
        "errors": {
            "name": ["The name field is required."]
        }
    }
```

## Pagination

Every paginated list endpoint (schedules, events, sales, feedback, fan content and boosts) takes the same two query parameters. The other lists (sub-schedules, categories, appointment types, open times and boost statements) come back whole.

| Parameter | Default | Description |
| --- | --- | --- |
| `page` | 1 | Page number to retrieve |
| `per_page` | 100 | Items per page, maximum 500. Events, sales, feedback, fan content and boosts reject a larger value with a `422`; schedules clamp it to 500. |

### The meta object

Every paginated response returns the same seven counters. Keep requesting `page + 1` until it equals `last_page`.

| Field | Description |
| --- | --- |
| `current_page` | The page you just received |
| `last_page` | The final page number for this query |
| `per_page` | Page size actually applied |
| `total` | Total matching records across all pages |
| `from`, `to` | 1-based index of the first and last record on this page, or null when the page is empty |
| `path` | The request URL without its query string |

cURLCopy

```
curl -X GET "https://eventschedule.com/api/events?page=2&per_page=50" \
         -H "X-API-Key: your_api_key_here"
```

## Register

Registration takes two steps: send a verification code to the email address, then register with the code.

### Step 1: Send Verification Code

POST
`/api/register/send-code`

No authentication required. Takes a single `email` parameter and emails a 6-digit code that is valid for 10 minutes, answering `200` with a confirmation in `data.message`. Rate limited to 5 codes per email per hour. An address that already belongs to a full account is rejected with a `422`.

A new code replaces the one before it, and a code can be tried once: registering with a wrong `verification_code` uses it up, so request another.

### Step 2: Register

POST
`/api/register`

No authentication required. Rate limited to 3 registrations per IP per hour. On success it returns `201` with an API key that is valid for one year, and the account's email is treated as verified.

| Parameter | Required | Description |
| --- | --- | --- |
| `name` | Yes | Your display name (max 255 characters) |
| `email` | Yes | Email address (max 255 characters). Disposable-mail domains and `@example.com` addresses are refused, here and in Step 1. |
| `password` | Yes | Password (min 8 characters) |
| `verification_code` | Yes | 6-digit code from Step 1 |
| `timezone` | No | IANA timezone name (default: America/New\_York, which is also what an unrecognised name falls back to) |
| `language_code` | No | One of the supported interface languages (default: en) |

An address that already has a full account is refused with a `422`. An address that has an account waiting for its owner (an invited team member, or somebody who bought a ticket) is taken over by the registration, since the code proved you read that inbox.

Both steps watch a hidden `website` honeypot field. Leave it out entirely: sending any value in it returns `422 Invalid request`.

Step 1: Send CodeCopy

```
curl -X POST "https://eventschedule.com/api/register/send-code" \
         -H "Content-Type: application/json" \
         -d '{"email": "[email protected]"}'
```

Step 2: Register Copy

```
curl -X POST "https://eventschedule.com/api/register" \
         -H "Content-Type: application/json" \
         -H "Accept: application/json" \
         -d '{
             "name": "Your Name",
             "email": "[email protected]",
             "password": "a_long_password",
             "verification_code": "123456"
         }'
```

Response (201)Copy

```
{
        "data": {
            "api_key": "your_new_api_key",
            "api_key_expires_at": "2027-02-28T00:00:00+00:00",
            "user": {
                "id": "abc123",
                "name": "Your Name",
                "email": "[email protected]"
            }
        }
    }
```

## Login

POST
`/api/login`

No authentication required. Exchanges an email and password for an API key valid for one year.

Login issues a key only when you do not already have one

This is not a session endpoint and it will not hand you a fresh key on demand. If the account already has an unexpired key, login returns `409` and issues nothing, so store the key from the first call. To replace a key you have lost, rotate it under **Settings**, **Developers**, as described in [Authentication](#authentication). An expired key does not block login: the call issues a new one.

Other refusals to handle: an account the operator has blocked returns `403 Account blocked`, an account with two-factor authentication enabled returns `403` and must generate its key from **Settings** instead, and a wrong email or password returns `401` and counts toward the 5-per-15-minute limit. A successful login clears that count.

| Parameter | Required | Description |
| --- | --- | --- |
| `email` | Yes | Email address |
| `password` | Yes | Password |

cURLCopy

```
curl -X POST "https://eventschedule.com/api/login" \
         -H "Content-Type: application/json" \
         -d '{"email": "[email protected]", "password": "your_password"}'
```

Response (200)Copy

```
{
        "data": {
            "api_key": "your_new_api_key",
            "api_key_expires_at": "2027-02-28T00:00:00+00:00",
            "user": {
                "id": "abc123",
                "name": "Your Name",
                "email": "[email protected]"
            }
        }
    }
```

## List Schedules

GET
`/api/schedules`

Returns a paginated list of the schedules where you are the owner or an admin. Deleted schedules are excluded, and on the hosted service so are schedules that are not on a Pro or Enterprise plan. Each row carries the schedule's sub-schedules in a `groups` array.

| Parameter | Description |
| --- | --- |
| `subdomain` | Filter by exact subdomain |
| `name` | Filter by schedule name (partial match) |
| `type` | Filter by type: `venue`, `talent`, or `curator` |

cURLCopy

```
curl -X GET "https://eventschedule.com/api/schedules?type=venue" \
         -H "X-API-Key: your_api_key_here"
```

Response (200)Copy

```
{
        "data": [
            {
                "id": "abc123",
                "subdomain": "my-venue",
                "name": "My Venue",
                "type": "venue",
                "email": "[email protected]",
                "timezone": "America/New_York",
                ...
            }
        ],
        "meta": { "current_page": 1, "total": 5 }
    }
```

## Show Schedule

GET
`/api/schedules/{subdomain}`

Returns a single schedule by subdomain, including its sub-schedules in a `groups` array. You must be the owner or an admin of it, otherwise the response is `404`. A schedule that is not on a Pro or Enterprise plan returns `403`, and so does one you are a team admin of while it is not on Enterprise (hosted only, see [Authentication](#authentication)).

### The schedule object

List, Show, Create and Update Schedule return this shape. A field with nothing stored is `null`.

| Field | Description |
| --- | --- |
| `id` | Encoded schedule ID |
| `subdomain` | The name every `{subdomain}` path takes |
| `url` | Address of the schedule's public page. An empty string until the schedule is verified. |
| `type` | `venue`, `talent` or `curator` |
| `name`, `email`, `phone`, `website` | Name and contact details |
| `show_phone` | `1` when the phone number is shown on the public page, `0` when it is not. Read only, as is `phone`. |
| `description`, `short_description` | Markdown description and one-line summary |
| `timezone`, `language_code` | IANA timezone name and language code |
| `profile_image_url` | URL of the profile image, or `null`. Read only. |
| `address1`, `city`, `state`, `postal_code`, `country_code` | Address |
| `created_at`, `updated_at` | ISO 8601 timestamps |
| `groups` | The schedule's sub-schedules, each with `id`, `name`, `slug` and `color` |

cURLCopy

```
curl -X GET "https://eventschedule.com/api/schedules/my-venue" \
         -H "X-API-Key: your_api_key_here"
```

Response (200)Copy

```
{
        "data": {
            "id": "abc123",
            "subdomain": "my-venue",
            "name": "My Venue",
            "type": "venue",
            "email": "[email protected]",
            "timezone": "America/New_York",
            "created_at": "2026-03-01T12:00:00+00:00",
            "groups": [
                {
                    "id": "def456",
                    "name": "Main Stage",
                    "slug": "main-stage",
                    "color": "#FF5733"
                }
            ],
            ...
        }
    }
```

## Create Schedule

POST
`/api/schedules`

Create a new schedule. There is no plan gate here, so a new account can bootstrap itself, but the schedule starts on the Free plan with no trial and most other endpoints need it on Pro or Enterprise, so on the hosted service subscribe before you start pushing events. You are attached to the new schedule as its owner, and it becomes your default schedule if you had none.

| Parameter | Required | Description |
| --- | --- | --- |
| `name` | Yes | Schedule name (max 255 characters). The subdomain is generated from it and cannot be set through the API. |
| `type` | Yes | Schedule type: `venue`, `talent`, or `curator` |
| `email` | No | Contact email (max 255 characters). On the hosted service a schedule made without one takes your account's own address, which is what verifies it (see below). On a selfhosted install it stays empty. |
| `description` | No | Markdown description (max 10,000 characters) |
| `short_description` | No | One-line summary (max 200 characters) |
| `timezone` | No | IANA timezone name (defaults to your account timezone). A name that is not a timezone returns a `422`. |
| `language_code` | No | Supported language code such as en, es, fr (defaults to your account language) |
| `website` | No | Website URL (max 255 characters) |
| `address1`, `city`, `state`, `postal_code`, `country_code` | No | Address fields, used for venue schedules (max 255 characters each, 20 for `postal_code` and 10 for `country_code`). Send `country_code` as a two-letter ISO code. |

### What comes back

The reply is `201`, and `data` holds [the schedule object](#schedule-object), generated `subdomain` included. This is the one place the object is returned for a schedule on the Free plan, so you can read what you made. [Show Schedule](#show-schedule) answers `403` for it and [List Schedules](#list-schedules) leaves it out until it is on Pro or Enterprise.

### Hosted limits and verification

On the hosted service one account may own up to 50 schedules. Beyond that the endpoint returns a `422`.

On the hosted service a schedule is not public until its contact email or phone number is verified: until then its pages answer visitors with a 404, so search engines never see them. Leave `email` out, or send your account's own address, and the schedule shares your account's verification; any other address is sent a verification link. A selfhosted install treats every new schedule as verified.

cURLCopy

```
curl -X POST "https://eventschedule.com/api/schedules" \
         -H "X-API-Key: your_api_key_here" \
         -H "Content-Type: application/json" \
         -d '{
             "name": "My Venue",
             "type": "venue",
             "email": "[email protected]",
             "city": "New York"
         }'
```

## Update Schedule

PUT
`/api/schedules/{subdomain}`

Update a schedule. Include only the fields you want to change; anything you omit is left alone. Takes the same fields as [Create Schedule](#create-schedule) apart from `type`: neither the schedule type nor the subdomain can be changed through the API, and any other field in the request is ignored. Requires owner or admin access and a Pro or Enterprise plan. Returns [the schedule object](#schedule-object).

On the hosted service, changing `email` clears the schedule's email verification and sends a verification link to the new address. Unless its phone number is verified, the schedule's pages stop being public until that link is followed.

Branding, images, layout and integrations are not exposed here. Edit those in the admin panel, on the **Style**, **Page content**, **Settings** and **Integrations** tabs of the schedule form.

cURLCopy

```
curl -X PUT "https://eventschedule.com/api/schedules/my-venue" \
         -H "X-API-Key: your_api_key_here" \
         -H "Content-Type: application/json" \
         -d '{"name": "Updated Name", "description": "New description"}'
```

## Delete Schedule

DELETE
`/api/schedules/{subdomain}`

Retire a schedule. Requires owner access but no plan: an admin gets a `404`. There is no undo through the API.

The schedule is flagged as deleted and stops appearing anywhere, and the call also:

- Deletes its profile, header and background images from storage
- Deletes its analytics history (page views, referrers and appearances)
- Tears down its Google Calendar and Outlook sync subscriptions
- Cancels any running boost campaign and refunds it where money is owed
- Emails the schedule's members to tell them it was deleted
- Returns any newsletter waiting for its send time to a draft
- Frees its subdomain for anyone to register, keeping the old name on record so a platform admin can restore the schedule

Events are not swept up automatically. The exception is a talent schedule: an event whose only member was that schedule is deleted with it, so nothing is left orphaned.

A schedule with a paid plan has its subscription cancelled first, at once and not at the end of the billing period. If that cancellation fails the reply is `502` and nothing is deleted, so the call is safe to repeat.

cURLCopy

```
curl -X DELETE "https://eventschedule.com/api/schedules/my-venue" \
         -H "X-API-Key: your_api_key_here"
```

Response (200)Copy

```
{
        "data": {
            "message": "Schedule deleted successfully"
        }
    }
```

## List Sub-Schedules

GET
`/api/schedules/{subdomain}/groups`

List every sub-schedule on a schedule, returning `id`, `name`, `slug` and `color` for each. Requires owner or admin access and a Pro or Enterprise plan. The response is not paginated.

Sub-schedules group and colour-code events so visitors can filter your calendar. They do not control who can see an event: use the visibility flags on [Create Event](#create-event) for that.

cURLCopy

```
curl -X GET "https://eventschedule.com/api/schedules/my-venue/groups" \
         -H "X-API-Key: your_api_key_here"
```

Response (200)Copy

```
{
        "data": [
            {
                "id": "def456",
                "name": "Main Stage",
                "slug": "main-stage",
                "color": "#FF5733"
            }
        ]
    }
```

## Create Sub-Schedule

POST
`/api/schedules/{subdomain}/groups`

Create a sub-schedule on a schedule. Requires owner or admin access and a Pro or Enterprise plan. The slug is generated from the name and is what you pass as the `schedule` parameter when creating an event.

| Parameter | Required | Description |
| --- | --- | --- |
| `name` | Yes | Sub-schedule name (max 255 characters) |
| `color` | No | Display colour as a hex value, for example #FF5733 (max 50 characters) |

When the schedule's language is not its translation language (English unless changed), the name is machine-translated into the translation language and the slug is built from the translated name. So on any schedule not in English, read the slug back from the response rather than deriving it yourself.

cURLCopy

```
curl -X POST "https://eventschedule.com/api/schedules/my-venue/groups" \
         -H "X-API-Key: your_api_key_here" \
         -H "Content-Type: application/json" \
         -d '{"name": "Main Stage", "color": "#FF5733"}'
```

Response (201)Copy

```
{
        "data": {
            "id": "def456",
            "name": "Main Stage",
            "slug": "main-stage",
            "color": "#FF5733"
        }
    }
```

## Update Sub-Schedule

PUT
`/api/schedules/{subdomain}/groups/{group_id}`

Update a sub-schedule's name or colour; send only the one you want to change. Requires owner or admin access and a Pro or Enterprise plan. Changing the name regenerates the slug, which changes the value events must pass in `schedule`, so re-read it from the response.

cURLCopy

```
curl -X PUT "https://eventschedule.com/api/schedules/my-venue/groups/def456" \
         -H "X-API-Key: your_api_key_here" \
         -H "Content-Type: application/json" \
         -d '{"name": "VIP Stage", "color": "#3B82F6"}'
```

## Delete Sub-Schedule

DELETE
`/api/schedules/{subdomain}/groups/{group_id}`

Delete a sub-schedule. Events assigned to it are kept and simply lose the assignment. Requires owner or admin access and a Pro or Enterprise plan. Pass the encoded sub-schedule `id` from [List Sub-Schedules](#list-groups).

cURLCopy

```
curl -X DELETE "https://eventschedule.com/api/schedules/my-venue/groups/def456" \
         -H "X-API-Key: your_api_key_here"
```

Response (200)Copy

```
{
        "data": {
            "message": "Sub-schedule deleted successfully"
        }
    }
```

## List Events

GET
`/api/events`

Returns a paginated list of the events you may read with [Show Event](#show-event), newest start date first: those your schedules own, those on a venue or talent schedule of yours, and those you made on a schedule you still run. An event a curator schedule of yours only lists, or one a schedule of yours turned down, is left out. On the hosted service an event is only listed if at least one of its schedules is on a Pro or Enterprise plan. Appointment bookings are never returned here; they are not calendar events.

Drafts, internal, unlisted and cancelled events are all included, so check `is_draft`, `is_internal`, `is_private` and `is_cancelled` before republishing a row on a public site. Each row is [the event object](#event-object).

| Parameter | Description |
| --- | --- |
| `subdomain` | Filter events by schedule subdomain |
| `starts_after` | Events starting on or after this UTC date (Y-m-d) |
| `starts_before` | Events starting on or before this UTC date (Y-m-d) |
| `venue_id` | Filter by venue (encoded venue schedule ID) |
| `category_id` | Filter by category ID (integer, see [List Categories](#list-categories)) |
| `name` | Filter by event name (partial match) |
| `schedule_type` | Filter by type: `single` or `recurring` |
| `tickets_enabled` | Filter by whether tickets are enabled (boolean) |
| `rsvp_enabled` | Filter by whether RSVP/registration is enabled (boolean) |
| `group_id` | Filter by sub-schedule (encoded sub-schedule ID) |
| `is_cancelled` | `true` for cancelled events only, `false` to leave them out. Without it both are listed. |
| `external_id` | The event your own system knows by this id, matched exactly, among the events that schedule owns: an event it only lists, which another schedule owns, is never the answer. With `subdomain` it is one event or none. Without it, the events owned by schedules you are an owner or admin of. See [External ID](#event-external-id). |

All times are UTC

The API reads and writes `starts_at` in UTC, in `Y-m-d H:i:s` format with no offset suffix. The schedule's own timezone only controls how that instant is displayed on the guest page, so convert on your side before filtering or creating. [Dates and times](#dates-and-times) lists every format.

A recurring event is matched by its first date

`starts_after` and `starts_before` compare the stored `starts_at`, which for a series is its first date. A weekly series that began last year is not in `starts_after=` today. To find the series that are still running, list with `schedule_type=recurring` and no date filter, and read each one's `recurring_end_type` and `recurring_end_value`.

cURLCopy

```
curl -X GET "https://eventschedule.com/api/events?subdomain=my-venue&starts_after=2025-01-01" \
         -H "X-API-Key: your_api_key_here"
```

Response (200)Copy

```
{
        "data": [
            {
                "id": "evt123",
                "name": "Jazz Night",
                "starts_at": "2025-03-15 20:00:00",
                "duration": 3,
                "tickets_enabled": true,
                "rsvp_enabled": false,
                ...
            }
        ],
        "meta": { "current_page": 1, "total": 25 }
    }
```

## Show Event

GET
`/api/events/{id}`

Returns a single event by its encoded ID, including its ticket types, add-ons, members, agenda parts, venue, recurring configuration and visibility flags. Requires a Pro or Enterprise plan, and that you are an owner or admin of a schedule the event is on, or made it and still run the schedule that owns it. A curator schedule counts only for the events it owns: one that only lists somebody else's event gets `403`, and so does a schedule that turned the event down.

An appointment booking, which [List Events](#list-events) leaves out, can be read here by its event ID. [Book an Appointment](#create-appointment-booking) returns the booking's sale ID; [Show Sale](#show-sale) with that ID gives the `event_id`.

### The event object

List, Show, Create, Update, Cancel and Restore Event and Upload Flyer return this shape, and so do the `event.*` [webhooks](docs__developer__webhooks.md#payload). A field with nothing stored is `null`, except the few marked as present only in some cases.

| Field | Description |
| --- | --- |
| `id`, `url` | Encoded event ID and the address of the event's public page |
| `name`, `short_description`, `description` | Name, short summary and Markdown description |
| `starts_at`, `duration` | Start in UTC (`Y-m-d H:i:s`) and length in hours |
| `ends_at` | The end in UTC, in the same format: the start plus the length, to the minute. `null` for an event with no length. For a recurring event it is the end of the first date. See [End time](#event-end-time). |
| `category_id`, `category_name`, `category_color` | The category's integer ID, with its name and colour as the schedule has them |
| `is_draft`, `is_private`, `is_internal` | Visibility flags, see [Create Event](#create-event) |
| `external_id` | The id your own system gave the event, or `null`. See [External ID](#event-external-id). |
| `is_cancelled`, `cancelled_at` | Whether the event is cancelled, and when (ISO 8601, `null` otherwise). Read-only: change it with [Cancel Event](#cancel-event) and [Restore Event](#restore-event). Sending back the value you read is accepted on create and update; a different one is a `422`. |
| `is_password_protected` | Whether the event page asks for a password. The password itself is never returned. |
| `event_url`, `registration_url` | The online or external event link, and the external registration link |
| `venue_id`, `venue_name`, `venue_address1`, `venue_subdomain` | The event's venue schedule |
| `flyer_image_url` | Address of the flyer image in our storage, or `null`. See [Flyer from an address](#event-flyer-url) for what sending it does. |
| `schedule_type` | `single` or `recurring` |
| `recurring_frequency`, `recurring_interval`, `days_of_week`, `recurring_end_type`, `recurring_end_value` | Present only on a recurring event. `days_of_week` reads `"1111111"` for every frequency other than weekly and every\_n\_weeks. |
| `rsvp_enabled`, `rsvp_limit`, `tickets_enabled` | Registration and ticketing switches |
| `seating_plan_id` | Encoded ID of the event's seating plan, `null` on a general-admission event |
| `ticket_preset_id` | Encoded ID of the schedule's [ticket preset](docs__tickets.md#ticket-presets) the event's tickets came from, `null` when they were set up by hand |
| `tickets` | Present only while tickets are enabled. Each row has `id`, `type`, `price`, `quantity`, `description`, `sales_start_at`, `sales_end_at`, `volume_discount` and `is_pass`. `price` is a decimal string such as `"25.000"`, here and on add-ons. A ticket that sells a seating band adds `seating_band` and `is_allocated`, and a pass adds its `pass_*` settings. |
| `addons` | Present only while tickets are enabled. Each row has `id`, `type`, `price`, `quantity`, `description`, `image_url` and `url`. |
| `members` | The event's performers, as an object rather than an array: each key is a talent schedule's encoded ID and each value holds `name`, `email` and `youtube_url`. With no performers it reads `[]`. |
| `event_parts` | Agenda parts, each with `id`, `name`, `description`, `start_time` and `end_time` |
| `ticket_currency_code`, `payment_method`, `terms_url` | Currency, payment method and the event's own terms link for tickets. `terms_url` is read only. |
| `schedules` | Every schedule the event is on, each with `id`, `subdomain`, `name` and `type`, plus a `group` object (`id`, `name`, `slug`) where the event is filed under a sub-schedule there |
| `created_at`, `updated_at` | ISO 8601 timestamps |

cURLCopy

```
curl -X GET "https://eventschedule.com/api/events/evt123" \
         -H "X-API-Key: your_api_key_here"
```

Response (200)Copy

```
{
        "data": {
            "id": "evt123",
            "name": "Jazz Night",
            "starts_at": "2025-03-15 20:00:00",
            "duration": 3,
            "is_draft": false,
            "venue_id": "abc123",
            "schedule_type": "single",
            "tickets_enabled": true,
            "tickets": [
                {
                    "id": "tkt1",
                    "type": "General",
                    "price": "25.000",
                    "quantity": 100,
                    "description": null,
                    "sales_start_at": null,
                    "sales_end_at": null,
                    "volume_discount": null,
                    "is_pass": false
                }
            ],
            "members": {
                "tal789": {
                    "name": "The Quartet",
                    "email": "[email protected]",
                    "youtube_url": null
                }
            },
            "event_parts": [
                {
                    "id": "prt1",
                    "name": "Opening Act",
                    "description": null,
                    "start_time": "20:00",
                    "end_time": "20:45"
                }
            ],
            "ticket_currency_code": "USD",
            "schedules": [
                {
                    "id": "abc123",
                    "subdomain": "my-venue",
                    "name": "My Venue",
                    "type": "venue"
                }
            ],
            ...
        }
    }
```

## Create Event

POST
`/api/events/{subdomain}`

Create an event on the schedule identified by `{subdomain}`. Requires owner or admin access on that schedule and a Pro or Enterprise plan. This endpoint carries its own throttle of 30 requests per minute in addition to the write bucket. On success it returns `201` with [the event object](#event-object). The schedule you post to becomes the event's owner, the one that sells its tickets and sees its sales, and no later request can change that.

Only the parameters listed here are read. Anything else at the top level of the body is dropped before the event is saved, so settings the API has no field for (sponsors, the event's checkout questions, promo codes, the Checkout and Sales rules options, seating) are made in the admin panel.

### Core fields

| Parameter | Required | Description |
| --- | --- | --- |
| `name` | Yes | Event name (max 255 characters) |
| `starts_at` | Yes | Start date and time in **UTC**, formatted `Y-m-d H:i:s` |
| `duration` | No | Length in hours, 0 to 8760. Decimals are allowed, so 1.5 is 90 minutes. |
| `ends_at` | No | The end, in **UTC** and formatted like `starts_at`. Another way to give the length: send it instead of `duration`. See [End time](#event-end-time) below. |
| `description` | No | Full description, Markdown supported (max 10,000 characters) |
| `short_description` | No | Short description used in listings and previews (max 500 characters) |
| `event_url` | No | A single URL for an online event or an external event page (max 500 characters) |
| `registration_url` | No | External registration URL, used instead of on-platform tickets (max 2048 characters) |
| `category_id` | No | Category ID, which must be in this schedule's effective category list (see [List Categories](#list-categories)) |
| `category` | No | Category name, matched case- and punctuation-insensitively against the same list. Ignored when `category_id` is present; an unmatched name returns `422 Category not found`. |
| `schedule` | No | Sub-schedule slug to file the event under. An unknown slug returns `422 Sub-schedule not found`. |
| `flyer_image_url` | No | The address of a picture to use as the flyer (http or https, max 2048 characters). It is fetched and stored with the event. See [Flyer from an address](#event-flyer-url) below. |
| `external_id` | No | The id your own system knows this event by (text or a number, max 255 characters). See [External ID](#event-external-id) below. |
| `upsert` | No | `true` to update the event that already has this `external_id` instead of getting a `409` (boolean). See [Create or update in one call](#event-upsert) below. |

### Visibility

Send no visibility flag at all and the event inherits the schedule's default for new events. Unlisted and Internal need an Enterprise plan 

Enterprise
 - Requires the Enterprise plan
; on any lower plan they are stripped and the event is saved as a Draft so it never publishes by accident.

The draft default is applied even to a partial request that omits `is_draft`, so on a drafts-by-default schedule you must send `is_draft: false` to publish straight away.

| Parameter | Required | Description |
| --- | --- | --- |
| `is_draft` | No | Draft: visible to your team in the admin panel, hidden from the public page (boolean) |
| `is_private` | No | Unlisted: kept off the calendar but reachable by direct link (boolean). Enterprise only. |
| `is_internal` | No | Internal: never public, and mutually exclusive with Unlisted (boolean). Enterprise only. |
| `event_password` | No | Password prompt on the event page. Only applies to an Unlisted event, and is discarded otherwise. |

### Recurrence

The recurrence fields only take effect in a request that also carries `schedule_type: "recurring"`. Without it a new event is a single one, whatever else is sent.

| Parameter | Required | Description |
| --- | --- | --- |
| `schedule_type` | No | `single` (default) or `recurring` |
| `recurring_frequency` | With recurring | daily, weekly, every\_n\_weeks, monthly\_date, monthly\_weekday, or yearly |
| `days_of_week` | With weekly | Seven characters of `0` or `1`, Sunday to Saturday. `"0101010"` is Monday, Wednesday and Friday. Required for weekly and every\_n\_weeks. |
| `recurring_interval` | No | Week gap for every\_n\_weeks (integer, minimum 2) |
| `recurring_end_type` | No | never, on\_date, or after\_events |
| `recurring_end_value` | No | End date (Y-m-d) for on\_date, or the number of occurrences for after\_events |

### Tickets, RSVP and add-ons

| Parameter | Required | Description |
| --- | --- | --- |
| `rsvp_enabled` | No | Enable free registration, which collects a name and email without a payment step (boolean) |
| `rsvp_limit` | No | Cap on registrations per date (integer, minimum 1) |
| `tickets_enabled` | No | Enable ticketing (boolean) |
| `ticket_currency_code` | No | Three-letter ISO currency code, for example USD. Once the event has taken money, Update Event refuses to change it with a `422`, because past sales and any later refund are denominated in it. |
| `payment_method` | No | `cash`, `stripe`, `paypal`, `invoiceninja`, `payment_url`, `payfast` or `razorpay`, with `manual` accepted as an alias for `cash`. See [Payment method](#event-payment-method) below. |
| `payment_instructions` | No | Instructions shown for manual payment (max 5000 characters) |
| `ticket_preset_id` | No | Encoded ID of one of the schedule's [ticket presets](docs__tickets.md#ticket-presets). Its tickets, add-ons, promo codes, way of signing up, currency, payment and options replace what the request sends for them, and the fields of an external ticket link are emptied, as choosing it on the Tickets tab does. Refused with a `422` for another schedule's preset, on an event somebody holds a ticket or a reservation for or that has a seating plan, when the preset's payment method cannot be used by the account the event pays into, and for a preset that holds only passes. A caller who cannot change the event's tickets (an editor of another schedule the event is listed on) has the field ignored, as the rest of the ticket fields are. Where the schedule's owner has the team pick from presets, a team member's request takes its tickets from a preset whatever it sends: the one named, else the default on a new event, else the event's own. |
| `tickets` | No | Array of ticket types. Each takes `type` (required, max 255 characters), `quantity` (integer, 0 means unlimited), `price` (0 or more), `description` (max 1000 characters), `sales_start_at` and `sales_end_at` (UTC, `Y-m-d H:i:s`), `max_per_order` (integer, empty for no limit) and `volume_discount` (an object with `min_quantity` of 2 or more, `type` `percentage` or `fixed`, and `value`; `null` for none). See [Other ticket settings](#event-ticket-settings). |
| `addons` | No | Array of paid extras sold alongside a ticket, such as parking or merchandise. Each takes `type` (required, max 255 characters), `quantity`, `price`, `description` (max 1000 characters), `url` (max 2000 characters) and `max_per_order`. Only saved when `tickets_enabled` is true. |

Every row you send in `tickets`, `addons` or `event_parts` is a new row on a new event. An `id` copied from a read of another event is ignored. On [Update Event](#update-event-removes) the same `id` is what addresses an existing row.

### Other ticket settings

A ticket row also carries the settings the admin panel gives a ticket type: its own questions (`custom_fields`), a seating band (`seating_band`), and whether it is a pass (`is_pass` and the `pass_*` settings). These are not part of the documented API: set them in the admin panel. A row you send back with its `id` keeps them. A row that names one of them changes it, in the shape the admin panel stores, so leave them out of what you write unless you copied them from the event as stored.

### Payment method

The API stores any method from the list without checking that it is connected on the account or can settle the event's currency, so check both yourself: `payfast` only settles events priced in ZAR, `razorpay` only events priced in INR, and `paypal` only the currencies listed under [Connecting PayPal](docs__tickets.md#paypal), which is PayPal's own list minus the Hungarian forint, Japanese yen and New Taiwan dollar.

On create, omitting the field uses the installation's `DEFAULT_PAYMENT_METHOD` if one is set and is usable for the event's currency, falling back to `cash`; send `null` to mean cash explicitly. On update, omitting it leaves the stored value alone.

### Agenda, venue and performers

| Parameter | Required | Description |
| --- | --- | --- |
| `event_parts` | No | Agenda segments within the event. Each takes `name` (required, max 255 characters), `description` (max 1000 characters), `start_time` and `end_time` (plain text, up to 10 characters). |
| `venue_id` | No | Encoded ID of an existing venue schedule. An ID that matches no schedule returns a `404`. |
| `venue_name` | No | Venue name (max 255 characters). Send it together with `venue_address1`. |
| `venue_address1` | No | Venue street address (max 255 characters). The pair is looked up, as an exact match on both, against venue schedules you own or follow; no match returns `422 Venue not found` rather than creating one. |
| `members` | No | Performers, given as objects with `name` and/or `email`. Each is matched to an existing talent schedule you own or follow; no match returns `422 Talent member not found`. |

Send the venue name and address as a pair

The lookup only runs when both are present. With just one of them the request skips it and falls through to the event form's own rule, which attaches the best-matching venue anywhere on the install or creates a new, unclaimed venue schedule from what you sent.

### What the schedule's type decides

The schedule you post to is always on the event, in the place its type gives it:

- **Venue.** It is the event's venue. `venue_id` and the name and address pair are overridden.
- **Talent.** It is the event's one performer. `members` is overridden, so other performers cannot be added through a talent schedule.
- **Curator.** The event is listed on it, and takes its venue and performers from the request.

### End time

An event is stored as a start and a length. If your system keeps a start and an end, send `ends_at` and the length is worked out for you, from the two moments in UTC. An event that runs across a clock change is as long as the time that actually passes: 8pm to 8pm over the night the clocks go forward is 23 hours.

- `ends_at` has to be after the start and at most 8760 hours after it. On an update that does not send `starts_at` it is measured from the stored start.
- Send one of `ends_at` and `duration`. The event object carries both, so a client that reads an event and writes it back sends both, and that is accepted: the one that differs from the stored value is taken as the change. Change both to values that disagree and the reply is `422`.
- Move only `starts_at` and send the rest back as read, and the event moves whole: it keeps its length and ends later. That holds when the new start is past the old end too, as when an event is postponed by a day: an `ends_at` that comes back exactly as it was read says nothing.
- `"ends_at": null` changes nothing. To take the length off an event, send `duration` as `null` or `0`.

### Flyer from an address

Send `flyer_image_url` and the picture at that address becomes the event's flyer, in the same call. It is downloaded once and stored as a file of ours, so the event does not depend on the address afterwards, and the `flyer_image_url` you read back is our copy's address, not the one you sent. To send a file of your own instead, use [Upload Flyer](#upload-flyer).

- The address has to be public and answer within 10 seconds with a JPEG, PNG, GIF or WebP of at most 8 MB. What kind of picture it is, is read from the file itself, not from the address or the server's content type.
- The picture is fetched before anything is saved. If it cannot be had, the reply is `422` with the reason under `errors.flyer_image_url`, and the event is not created or changed.
- A picture wider or taller than 2,000 pixels is resized to fit. An animated GIF is stored as it is.
- On [Update Event](#update-event), a new address replaces the flyer and `null` removes it. The address the event already reports is no change, so an event that is read and written back keeps its flyer and nothing is downloaded. Nor is the address the flyer was last fetched from: a sync that sends its own picture address with every write downloads it once. To fetch that address again after the picture behind it changed, send `null` first, or use [Upload Flyer](#upload-flyer).

### External ID

`external_id` is the id your own system knows an event by: a post number, a row's key, a UUID. Send it when you create an event, and your next sync can find that event again instead of adding a second one. It is returned in [the event object](#event-object) and in every event webhook, and `GET /api/events?external_id=...` looks an event up by it.

- It is unique for the schedule that owns the event, so two schedules fed by two systems may both have an event numbered 1. An event that has none reads `null`.
- It is compared exactly: `aB3` and `Ab3` are two ids. A number is stored as its digits, and spaces around the value are dropped.
- Creating an event with an id the schedule already has an event for returns `409`, with that event's `id` under `data`, and nothing is created, unless the request asks to [update it instead](#event-upsert). Two requests that carry the same new id at the same moment end the same way: one creates the event, the other gets the `409`.
- [Update Event](#update-event) sets it on an event that has none, changes it, or clears it with `null`. An update that does not mention it leaves it alone. Only an owner or admin of the schedule that owns the event can change it, and an id another event of that schedule holds is refused with `422`.
- The admin panel neither shows nor changes it, and editing an event there keeps it.

### Create or update in one call

A sync usually does not know whether it has sent a record before. Send `"upsert": true` with an `external_id` and this endpoint decides: the first call creates the event and returns `201`, and every later call with the same id updates that event and returns `200`. `meta.created` says which happened.

- The update follows the rules of [Update Event](#update-event), not the rules above. Nothing is required, a field the request does not carry keeps its stored value, and none of a new event's defaults are applied again: an event you turned into a draft in the admin panel stays a draft when the source sends it again.
- That includes the lists. Send `tickets`, `addons` or `event_parts` only when you mean to change them, and send each existing row with its `id`: a row without one is a new row, and a stored row the list leaves out is retired, as [an update does](#update-event-removes).
- The update is not counted against the [daily cap](#event-daily-cap).
- `upsert` without an `external_id` is refused with `422`, because there is nothing to match on.
- The event is looked up among the events this schedule owns. An event another schedule owns is never matched, even when this schedule lists it.

Create or updateCopy

```
curl -X POST "https://eventschedule.com/api/events/your-schedule" \
         -H "X-API-Key: your_api_key" \
         -H "Content-Type: application/json" \
         -d '{"external_id": "post-4686933", "upsert": true, "name": "Spring concert", "starts_at": "2026-05-09 17:30:00"}'
```

### Daily cap

The hosted service caps how many events one schedule, and one account across its schedules, may create in a day, as an anti-abuse measure. The shipped defaults are 500 a day per schedule on Pro, 1,000 on Enterprise and 100 during a trial, and three times that per account. A bulk import that trips the cap gets a `422` whose body carries `"code": "event_create_limit"` beside `error`, so it can stop at the first refusal and resume the next day. Selfhosted installs have no cap.

cURLCopy

```
curl -X POST "https://eventschedule.com/api/events/my-venue" \
         -H "X-API-Key: your_api_key_here" \
         -H "Content-Type: application/json" \
         -H "Accept: application/json" \
         -d '{
             "name": "Jazz Night",
             "starts_at": "2026-11-04 20:00:00",
             "duration": 3,
             "description": "A wonderful evening of jazz music.",
             "tickets_enabled": true,
             "tickets": [
                 {"type": "General Admission", "price": 25, "quantity": 100},
                 {"type": "VIP", "price": 50, "quantity": 20}
             ],
             "event_parts": [
                 {"name": "Opening Act", "start_time": "20:00", "end_time": "20:45"},
                 {"name": "Main Performance", "start_time": "21:00", "end_time": "23:00"}
             ]
         }'
```

Response (201)Copy

```
{
        "data": {
            "id": "evt123",
            "name": "Jazz Night",
            ...
        },
        "meta": {
            "message": "Event created successfully"
        }
    }
```

## Update Event

PUT
`/api/events/{id}`

Update an event by its encoded ID. Takes the same parameters as [Create Event](#create-event), and supports partial updates: send only the fields you want to change. Requires a Pro or Enterprise plan. Returns `200` with [the event object](#event-object).

Who may update is who may read it with [Show Event](#show-event); anybody else gets `403`. The update runs through one of the event's schedules that you own or administer, which decides the timezone `starts_at` is read in and where a `schedule` slug is looked up.

### What an update leaves alone

A field the request does not carry keeps its stored value. That covers the start time, the visibility flags, the recurrence, the payment method, the lists of ticket types, add-ons and agenda parts, the venue, the performers and the other schedules the event is listed on. The schedule that owns the event never changes, and the event's [`external_id`](#event-external-id) stays unless the request names it.

What the request does not mention stays as the admin panel left it: promo codes, each ticket type's **Max Per Order**, volume discount, questions and pass settings, the dates added to or skipped from a series, sponsors and the event's checkout questions. An update that only renames an event changes its name.

A venue, performer or listing the request does not name also keeps its answer. One that had not yet accepted the event, or had turned it down, is still in that state afterwards: an update does not accept an event on a schedule's behalf. `venue_id`, `venue_name` and `venue_address1` sent as `null` name no venue, so the event stays where it is.

- To change the recurrence, send `schedule_type` with the full set of recurrence fields, since one left out goes back to its default. Without `schedule_type` the stored frequency, interval and end rule are kept and those fields in the request are ignored; only `days_of_week` is still applied. `schedule_type: "single"` turns a recurring event into a single one.
- `schedule` moves the event to another sub-schedule. There is no way to take an event out of a sub-schedule through the API.
- A visibility flag takes effect as on create: Unlisted and Internal need Enterprise, and `is_internal: true` also makes the event a Draft.

### What an update replaces or removes

| Request | What it does |
| --- | --- |
| Carries `tickets`, `addons` or `event_parts` | Replaces that list, row by row. A row with the `id` a read returned updates that row and keeps whatever the row does not send, so a ticket type keeps its ID and what was sold against it. A row without an `id` is added. A stored row the list leaves out is retired (a ticket type or an add-on) or deleted (an agenda part). A ticket type's `type` may be `null` here, which is what a read returns for an event with one unnamed ticket type. An `id` that is not one of this event's rows is refused with a `422` naming the row, and nothing is saved. |
| Carries `tickets_enabled: false` | Retires every ticket type and add-on on the event, without asking, even when people have bought them. Not for a team member the schedule's owner has pick from [ticket presets](docs__tickets.md#ticket-presets): their tickets change only by naming a preset. |
| Carries `ticket_preset_id` | Replaces the event's tickets, add-ons, promo codes, way of signing up, currency, payment and options with the preset's, and empties the external ticket link, when it is not the preset the event already has. The one it has, sent back as a read returned it, changes nothing; add `ticket_preset_apply: true` to take that preset's current prices after it changed. An empty value names nothing and leaves the event as it is. |
| Carries `schedule_type: "single"` | Turns a recurring event into a single one, and with that clears the dates added to and skipped from the series. Refused with a `422` while the event sells a pass counted per date (`per_occurrence`), which only a recurring event can have: give the pass another usage type first. |
| Carries `venue_id`, or `venue_name` with `venue_address1` | Moves the event to that venue, off the one it was at. There is no way to leave an event with no venue through the API. |
| Carries `members` | Replaces the performers. One you could pick in the event form (a schedule you own, administer or view, or follow while it accepts requests) and leave out of the list is taken off the event. When the update runs through a talent schedule the list is set aside, as on create, and the performers stay as they are. |

Some schedules always stay on the event: the one the update runs through, the one that created it, and any that sit outside your account. The schedules an event is listed on cannot be named in a request, so the API neither adds nor removes one.

cURLCopy

```
curl -X PUT "https://eventschedule.com/api/events/evt123" \
         -H "X-API-Key: your_api_key_here" \
         -H "Content-Type: application/json" \
         -d '{"name": "Updated Jazz Night", "duration": 4}'
```

## Delete Event

DELETE
`/api/events/{id}`

Permanently delete an event. Only the event's own people can: whoever made it, or an owner or admin of the schedule that owns it. A schedule that only lists the event answers `403`, and can take the event off its own list in the admin panel instead (the API has no call for that). Requires a Pro or Enterprise plan. There is no undo, so if you may want it back, hide the event with `is_draft` or [cancel it](#cancel-event) instead.

An event that has sales is not deleted. The reply is `422` and nothing changes, whether those sales are paid, refunded or cancelled, because the sale records would go with the event. A sale removed with [Delete Sale](#delete-sale) no longer counts. [Cancel it](#cancel-event) instead, which keeps the records and lets you tell the buyers.

Deleting also removes the synced copy from any connected Google Calendar, Outlook calendar and CalDAV calendar, cancels any running boost campaign, and deletes its gallery photos and sponsor logo files. An event a [feed](docs__managing-schedules.md#feeds) made is not made again by that feed. Unless the event was a draft, an `event.deleted` [webhook](docs__developer__webhooks.md) is sent with the event's final state.

An appointment booking is the exception. It is cancelled, not deleted: the slot is freed, the booking and its sale are kept, the guest of a booking that was still live is emailed, and no webhook is sent. That reply is a bare `{"message": "Appointment cancelled"}` with no `data` wrapper.

cURLCopy

```
curl -X DELETE "https://eventschedule.com/api/events/evt123" \
         -H "X-API-Key: your_api_key_here"
```

Response (200)Copy

```
{
        "data": {
            "message": "Event deleted successfully"
        }
    }
```

## Cancel Event

POST
`/api/events/{id}/cancel`

Call an event off without deleting it. The event keeps its page, which now says it is cancelled, and it keeps every sale and registration. It leaves the schedule's public calendar, stops selling, and is removed from any connected Google Calendar, Outlook calendar and CalDAV calendar. Any running boost campaign is stopped and refunded (one that runs in a boost partner's own ad account is stopped; it was never prepaid here), and installment plans stop charging. Requires a Pro or Enterprise plan, and to be the event's own: the user who created it, or an owner or admin of the schedule that owns it. A schedule that only lists the event answers `403`, and can take the event off its own list in the admin panel instead.

This is the way to stop an event that has sales, which [Delete Event](#delete-event) refuses. Sales are not refunded by this call: refund each one through [Update Sale](#update-sale) or in the admin panel.

Send `notify_attendees` as `true` to email the people who bought, registered or asked to be told, with an optional `message` of up to 280 characters under it. Buyers are emailed only when the schedule sends from its own address. Nobody is emailed about a draft, and nobody is emailed unless you ask.

Unless the event is a draft, an `event.cancelled` [webhook](docs__developer__webhooks.md) is sent. Cancelling an event that is already cancelled changes nothing and answers `200`. An appointment booking is cancelled through its sale, which frees the slot and emails the guest, and sends no webhook. The reply is the event object.

cURLCopy

```
curl -X POST "https://eventschedule.com/api/events/evt123/cancel" \
         -H "X-API-Key: your_api_key_here" \
         -H "Content-Type: application/json" \
         -d '{"notify_attendees": true, "message": "The hall is flooded."}'
```

Response (200)Copy

```
{
        "data": {
            "id": "evt123",
            "name": "Jazz Night",
            "is_cancelled": true,
            "cancelled_at": "2026-10-08T09:30:00+00:00"
        },
        "meta": {
            "message": "Event cancelled successfully"
        }
    }
```

## Restore Event

POST
`/api/events/{id}/restore`

Undo a cancellation. The event returns to the public calendar and to connected calendars, and sales reopen. Requires a Pro or Enterprise plan, and, as cancelling does, to be the event's creator or an owner or admin of the schedule that owns it.

Nobody is emailed. A boost campaign or an installment plan that the cancellation stopped stays stopped. Unless the event is a draft, an `event.updated` webhook is sent, with `is_cancelled` back to `false`.

Restoring an event that is not cancelled changes nothing and answers `200`. An appointment booking cannot be restored and answers `422`: its slot was freed when it was cancelled.

cURLCopy

```
curl -X POST "https://eventschedule.com/api/events/evt123/restore" \
         -H "X-API-Key: your_api_key_here"
```

Response (200)Copy

```
{
        "data": {
            "id": "evt123",
            "name": "Jazz Night",
            "is_cancelled": false,
            "cancelled_at": null
        },
        "meta": {
            "message": "Event restored successfully"
        }
    }
```

## Upload Flyer

POST
`/api/events/flyer/{event_id}`

Set the flyer image for an event. Send it as `multipart/form-data` in a `flyer_image` field, not as JSON. Requires the access [Show Event](#show-event) asks for and a Pro or Enterprise plan.

| Constraint | Value |
| --- | --- |
| Formats | jpg, jpeg, png, gif, webp |
| Maximum size | 10 MB |
| Larger than 2,000 pixels | Resized to fit. An animated GIF is stored as it is |
| Existing flyer | Replaced, and the old file is deleted from storage |

The response is the full event record, so you can read the new `flyer_image_url` straight back from `data`. To remove a flyer, send `"flyer_image_url": null` to [Update Event](#update-event). To set one from an address instead of a file, in the same call that creates the event, see [Flyer from an address](#event-flyer-url).

cURLCopy

```
curl -X POST "https://eventschedule.com/api/events/flyer/evt123" \
         -H "X-API-Key: your_api_key_here" \
         -F "flyer_image=@/path/to/flyer.jpg"
```

Response (200)Copy

```
{
        "data": { ... },
        "meta": {
            "message": "Flyer uploaded successfully"
        }
    }
```

## List Categories

GET
`/api/categories`

Returns the built-in event categories with their integer IDs and English names. Pass an `id` as `category_id` when creating or updating an event. The list is not paginated.

### Categories for one schedule

GET
`/api/categories/{subdomain}`

A schedule can rename, remove or add categories of its own, and `category_id` is validated against that effective list rather than the global one. Call this variant to get the exact set a given schedule will accept, and use it whenever the schedule has customised its categories. It returns the same `id` and `name` pairs, and `404` for a subdomain that does not exist.

cURLCopy

```
curl -X GET "https://eventschedule.com/api/categories" \
         -H "X-API-Key: your_api_key_here"
```

Response (200)Copy

```
{
        "data": [
            {"id": 1, "name": "Art & Culture"},
            {"id": 2, "name": "Business Networking"},
            {"id": 3, "name": "Community"},
            {"id": 4, "name": "Concerts"},
            ...
        ]
    }
```

## List Sales

GET
`/api/sales`

Returns a paginated list of sales, newest order first, each as [the sale object](#sale-object). Deleted sales are excluded, and on the hosted service so are sales on schedules that are not Pro or Enterprise. RSVP registrations appear here too, as zero-value paid sales.

The list covers events your account created, events one of your schedules created, and events another schedule created that your venue or talent schedule has accepted. A curator schedule that only lists somebody else's event does not open that event's sales, here or on the other sale endpoints.

| Parameter | Description |
| --- | --- |
| `event_id` | Filter by event (encoded event ID) |
| `subdomain` | Filter by schedule subdomain |
| `status` | Filter by status: unpaid, paid, cancelled, refunded, or expired. A sale held as `amount_mismatch` cannot be filtered for; it is listed without this filter. |
| `email` | Filter by buyer email (exact match) |
| `event_date` | Filter by event date (Y-m-d) |

cURLCopy

```
curl -X GET "https://eventschedule.com/api/sales?status=paid&subdomain=my-venue" \
         -H "X-API-Key: your_api_key_here"
```

Response (200)Copy

```
{
        "data": [
            {
                "id": "sale123",
                "event_name": "Jazz Night",
                "name": "John Doe",
                "email": "[email protected]",
                "status": "paid",
                "payment_amount": 50,
                "tickets": [
                    { "type": "General", "quantity": 2, "price": 25 }
                ],
                ...
            }
        ],
        "meta": { "current_page": 1, "total": 12 }
    }
```

## Show Sale

GET
`/api/sales/{id}`

Returns a single sale by its encoded ID. Requires owner or admin access on the event's schedule and a Pro or Enterprise plan. A sale that exists but is not yours to read returns `403`; a deleted or unknown one returns `404`.

### The sale object

Every sale endpoint except Delete Sale returns this shape, and so do the `sale.*` [webhooks](docs__developer__webhooks.md#payload). There is no currency field: read the event's `ticket_currency_code`.

| Field | Description |
| --- | --- |
| `id`, `event_id`, `event_name` | Encoded sale ID, and the event the sale is on |
| `subdomain` | The schedule the sale was made through |
| `name`, `email`, `phone` | The buyer, or the named guest on a guest's row |
| `event_date` | The date of the event the sale is for (`Y-m-d`) |
| `status` | `unpaid`, `paid`, `cancelled`, `refunded` or `expired`. A sale whose payment arrived for a different amount reads `amount_mismatch` while it is held for review. |
| `payment_method` | The event's payment method when the sale was made, `rsvp` for a free registration, or `import` for an imported attendee |
| `payment_amount` | What the buyer agreed to pay, as a number |
| `volume_discount_amount`, `discount_amount`, `gift_card_amount` | What a volume discount, a promo code and a gift card took off. `null` when there was none. |
| `transaction_reference` | The payment provider's reference, or the note recorded when the sale was marked paid by hand |
| `secret` | The token that opens the buyer's ticket page and QR code. Present only when the key belongs to the account that created the event or placed the sale. |
| `tickets` | A row per ticket type and add-on, each with `ticket_id`, `type`, `quantity`, `price`, `is_addon` and `is_pass`. `price` is the ticket type's price today, not what this buyer paid: after a price change the two differ, so count money from `payment_amount`. A pass adds `pass_usage_type`, `pass_visits_used`, `pass_max_uses` and `pass_expires_at`. On an event with allocated seating a row also carries `seats`, the labels of the seats it holds. |
| `total_quantity` | How many tickets this row holds |
| `group_id`, `is_primary` | Set on an order bought for several named guests, see below. An ordinary sale has `group_id: null` and `is_primary: false`. |
| `order_id`, `is_order_primary` | Set on a purchase that covered several events, see below |
| `created_at`, `updated_at` | ISO 8601 timestamps |

### Guests, orders and amounts

An order bought for several named guests is stored as one row per guest, all sharing a `group_id`. The row with `is_primary` set to true holds the totals for the whole order; the other rows report zero so you do not double-count when you add them up. Every row in a group belongs to the same event.

A purchase that covered several events shares an `order_id` instead, one row per event, with `is_order_primary` on the anchoring row. The two nest: a leg of an order can itself be split across named guests, so a row may carry both.

`payment_amount` is what the buyer agreed to pay, not what has been collected. The two differ for a sale bought on an [installment plan](docs__tickets.md#installments): the sale reads `paid` with the full total from the first payment onwards, because the ticket is issued then, while the rest arrives over the following months. Reconcile against Stripe rather than against this field if you are counting money in the bank.

cURLCopy

```
curl -X GET "https://eventschedule.com/api/sales/sale123" \
         -H "X-API-Key: your_api_key_here"
```

Response (200)Copy

```
{
        "data": {
            "id": "sale123",
            "event_id": "evt123",
            "event_name": "Jazz Night",
            "name": "John Doe",
            "email": "[email protected]",
            "event_date": "2025-03-15",
            "status": "paid",
            "payment_method": "stripe",
            "payment_amount": 50,
            "order_id": null,
            "is_order_primary": false,
            "tickets": [
                {
                    "ticket_id": "tkt1",
                    "quantity": 2,
                    "price": 25,
                    "type": "General",
                    "is_addon": false,
                    "is_pass": false
                }
            ],
            "total_quantity": 2,
            "group_id": null,
            "is_primary": false,
            ...
        }
    }
```

## Create Sale

POST
`/api/sales`

Record a sale against an event, for example when someone paid you at the door or through a channel Event Schedule does not handle. You must be an owner or admin of a schedule the event is on, or have made it and still run the schedule that owns it; a curator schedule that only lists somebody else's event gets `403`, because the sale settles into the event owner's account. The event must have ticketing enabled and still be selling, and each ticket is checked individually, exactly as guest checkout does: a priced row needs the schedule to be on Pro or Enterprise, while a zero-price row sells on any plan. Until the schedule is on a paid plan, though, the sale does not appear in [List Sales](#list-sales), and [Show Sale](#show-sale) and [Update Sale Status](#update-sale) return `403` for it, so mark it paid from the Sales page instead.

| Parameter | Required | Description |
| --- | --- | --- |
| `event_id` | Yes | Encoded event ID |
| `name` | Yes | Buyer name (max 255 characters) |
| `email` | Yes | Buyer email (max 255 characters) |
| `tickets` | Yes | Object mapping ticket identifiers to quantities, each 1 or more. A key may be an encoded ticket ID or a ticket type name. |
| `addons` | No | Object mapping encoded add-on IDs to quantities |
| `event_date` | No | Which date of the event the sale is for (Y-m-d). Defaults to the event's start date in the schedule's timezone, and is **required** for a recurring event. It has to be one of the event's own dates, in the schedule's timezone: any other date is refused with a `422`. |

### What happens on success

- The reply is `201` with [the sale object](#sale-object), `secret` included, since your key placed the sale.
- The sale is created as `unpaid`. You cannot set the status from the request; use [Update Sale Status](#update-sale) once you have the money.
- A sale whose total comes to zero is marked `paid` immediately.
- Any volume discount configured on the ticket type is applied to the total.
- On an event with [allocated seating](docs__allocated-seating.md), the best available seats are assigned, since this path has no seat picker.
- A `sale.created` [webhook](docs__developer__webhooks.md) fires, plus `sale.paid` for a zero-total sale.

Inventory is checked under a lock, so you cannot oversell through this endpoint. Common `422` replies are a past event or occurrence, an `event_date` that is not one of the event's dates, a ticket whose sales window has not opened or has closed, and a quantity larger than the remaining stock, which reports how many are left.

cURLCopy

```
curl -X POST "https://eventschedule.com/api/sales" \
         -H "X-API-Key: your_api_key_here" \
         -H "Content-Type: application/json" \
         -d '{
             "event_id": "evt123",
             "name": "John Doe",
             "email": "[email protected]",
             "tickets": {"General Admission": 2}
         }'
```

## Update Sale Status

PUT
`/api/sales/{id}`

Move a sale to a new status by sending an `action`. Requires owner or admin access on the event's schedule and a Pro or Enterprise plan. Which actions are available depends on where the sale is now; an action the current status does not allow returns a `422` naming both. `refund` asks one thing more, because the money leaves the event creator's account: the schedule you act through must have created the event or accepted its place on it, or the reply is `403`. A change that goes through returns `200` with [the sale object](#sale-object) in its new state.

| Parameter | Required | Description |
| --- | --- | --- |
| `action` | Yes | `mark_paid`, `refund` or `cancel` |
| `amount` | No | With `refund`: the part to send back, 0.01 or more. See [Refunds](#refunds). |
| `idempotency_key` | No | With `refund`: a key of your own that makes a retry safe |

| Action | From Status | To Status | Webhook |
| --- | --- | --- | --- |
| `mark_paid` | unpaid | paid | `sale.paid` |
| `refund` | paid | refunded | `sale.refunded` |
| `refund` with `amount` | paid | paid | none |
| `refund` | amount\_mismatch (Stripe, PayPal or Razorpay only) | refunded | `sale.refunded` |
| `cancel` | unpaid, paid | cancelled | `sale.cancelled` |

Cancelling or fully refunding releases the seats back into stock and notifies anyone on the waitlist for that date; a partial refund does neither. A named guest's row inside a `group_id` returns `403`: act on the group's primary row (`is_primary`), which carries the change to every guest. On a multi-event order the row with `is_order_primary` carries it to every leg, while acting on any other leg changes only that leg and its own guests.

### Refunds

For a Stripe, PayPal or Razorpay sale, `refund` sends the money back through the provider and then updates the status. Send an optional `amount` to return part of it; omit it and the whole remaining balance goes back. A partial refund leaves the sale `paid`, fires no webhook, and returns `200` with the message `Partial refund sent`.

Every other method - Invoice Ninja, Payfast, a payment link, cash, or a sale marked paid by hand - only records the refund and backs the amount out of your revenue figures, and it ignores `amount`: the whole sale is recorded as refunded. Issue the money in your payment provider, then call this to keep the two in step.

It does not work the other way round. A refund issued from the Stripe, PayPal or Razorpay dashboard is not reported back to Event Schedule, so the sale stays `paid` and its tickets keep scanning. Refund through this endpoint or the Sales page instead.

A refund the gateway refuses returns `422` and leaves the sale `paid`. A refund whose outcome could not be confirmed returns `409`: nothing is retried automatically, because retrying a refund that may already have gone through is how one refund becomes two. Check it against your provider before acting.

Send an `idempotency_key` of your own, up to 64 letters, digits, `_`, `.`, `:` or `-`, to make retrying safe. A repeat carrying the same key returns the first attempt's outcome instead of issuing a second refund, and a repeat sent while the first is still running returns `409`. Without a key, a retried request is a second refund.

A payment plan is refunded in full only: sending `amount` for one returns `422`. Each collected payment goes back separately, and an attempt that stops partway can be repeated to return the rest.

cURLCopy

```
curl -X PUT "https://eventschedule.com/api/sales/sale123" \
         -H "X-API-Key: your_api_key_here" \
         -H "Content-Type: application/json" \
         -d '{"action": "mark_paid"}'
```

Partial refundCopy

```
curl -X PUT "https://eventschedule.com/api/sales/sale123" \
         -H "X-API-Key: your_api_key_here" \
         -H "Content-Type: application/json" \
         -d '{"action": "refund", "amount": 10, "idempotency_key": "sale123-refund-1"}'
```

## Delete Sale

DELETE
`/api/sales/{id}`

Remove a sale from your records. It is cancelled first, so its seats return to stock, and then flagged as deleted: it stops appearing in [List Sales](#list-sales) and in the admin panel, and [Show Sale](#show-sale) returns `404` for it. Requires owner or admin access on the event's schedule and a Pro or Enterprise plan.

Deleting the row with `is_order_primary` deletes the whole multi-event order, and deleting a group's primary row deletes its guests with it. A named guest's row returns `403`.

Deleting moves no money and sends no webhook, not even `sale.cancelled`. To give a buyer their money back, [refund](#refunds) the sale first.

cURLCopy

```
curl -X DELETE "https://eventschedule.com/api/sales/sale123" \
         -H "X-API-Key: your_api_key_here"
```

Response (200)Copy

```
{
        "data": {
            "message": "Sale deleted successfully"
        }
    }
```

## List Feedback

GET
`/api/feedback`

Returns a paginated list of post-event feedback, meaning the star ratings and comments attendees leave after an event, for schedules you own or administer. Newest first. Read only: there is no endpoint for creating or deleting feedback.

Only feedback attached to a paid, undeleted sale is returned, which is the same rule the guest page applies, so a cancelled or refunded order's rating never shows up here. On the hosted service the schedule must be on a Pro or Enterprise plan, since collecting feedback is itself a Pro feature.

| Parameter | Description |
| --- | --- |
| `event_id` | Filter by event (encoded event ID) |
| `subdomain` | Filter by schedule subdomain |
| `event_date` | Filter by the date of the event attended (Y-m-d) |
| `min_rating` | Only return ratings of at least this value (1-5) |
| `from` | Only feedback submitted on or after this date (Y-m-d) |
| `to` | Only feedback submitted on or before this date (Y-m-d) |

Rows carry attendee contact details

Each record includes `attendee_name` and `attendee_email`. Strip both before you render feedback on a public page.

cURLCopy

```
curl -X GET "https://eventschedule.com/api/feedback?min_rating=4&subdomain=my-venue" \
         -H "X-API-Key: your_api_key_here"
```

Response (200)Copy

```
{
        "data": [
            {
                "id": "fb123",
                "event_id": "ev456",
                "event_name": "Jazz Night",
                "event_date": "2026-07-10",
                "rating": 5,
                "comment": "Best night out all year",
                "attendee_name": "Alex Attendee",
                "attendee_email": "[email protected]",
                "created_at": "2026-07-11T09:12:00+00:00"
            }
        ],
        "meta": { "current_page": 1, "total": 8 }
    }
```

## List Fan Content

GET
`/api/fan-content`

Returns fan comments, photos and videos submitted on events for schedules you own or administer, all three kinds merged into one feed, newest first. Approved items only by default, which is what you want when displaying them on an external site. Submitter email addresses are never included. Read only: approve and reject submissions in the admin panel.

Each kind of submission has its own `id` sequence, so an `id` is only unique within a `type`. Key on the two together when storing rows from this feed.

Every row carries the fields in the example. What follows them depends on the `type`: a comment has `comment`, a photo has `photo_url`, and a video has `youtube_url` and `embed_url`. `event_part_id` is the agenda part the submission was made on, or `null`.

| Parameter | Description |
| --- | --- |
| `type` | Limit to one kind: comment, photo, or video |
| `event_id` | Filter by event (encoded event ID) |
| `subdomain` | Filter by schedule subdomain |
| `event_date` | Filter by event date (Y-m-d) |
| `is_approved` | Defaults to true. Pass 0 to read the pending moderation queue instead |

cURLCopy

```
curl -X GET "https://eventschedule.com/api/fan-content?type=photo&subdomain=my-venue" \
         -H "X-API-Key: your_api_key_here"
```

Response (200)Copy

```
{
        "data": [
            {
                "id": "ph123",
                "type": "photo",
                "event_id": "ev456",
                "event_name": "Jazz Night",
                "event_part_id": null,
                "event_date": "2026-07-10",
                "submitted_by": "Dana Guest",
                "is_guest_submission": true,
                "is_approved": true,
                "photo_url": "https://.../crowd.jpg",
                "created_at": "2026-07-11T09:12:00+00:00"
            }
        ],
        "meta": { "current_page": 1, "total": 24 }
    }
```

## List Appointment Types

GET
`/api/schedules/{subdomain}/appointment-types`

The [appointment types](docs__appointments.md) a guest can book on this schedule right now, the same list its `/book` page shows. The three appointment endpoints are written for an agent that talks to the guest, such as a voice agent answering the phone: every time comes with a sentence it can read out. The key's account must be an owner or admin of the schedule, and the schedule must be on Pro or Enterprise.

On the hosted service a schedule needs its own email settings to send appointment mail, and a guest booked through the API is told about the booking, or sent a way to pay, only by email. Until those settings are in place, types with a price or an approval step are left out of this list, because the guest hears about payment, or the schedule's answer, only by email.

The list is not paginated. Its `meta` carries the schedule's `subdomain` as `schedule`, and its `timezone`.

### The appointment type object

| Field | Description |
| --- | --- |
| `id` | Encoded type ID, used by the slots and bookings endpoints |
| `name`, `description` | What the guest is booking |
| `duration_minutes` | Length of the appointment |
| `price`, `currency` | The price, and its currency (`null` when free) |
| `payment` | `free`, `cash` (paid at the appointment, so the booking confirms at once) or `online` (the guest is emailed a link to pay, and the time is held until then) |
| `location_type`, `location` | `in_person` with its address, `phone` with its number, or `online`. A meeting link is sent with the confirmation, not here. |
| `host_name` | The team member the appointment is with, or `null` (see [Hosts](docs__appointments.md#hosts)) |
| `timezone` | The schedule's timezone, which every `label` is written in |
| `requires_approval` | Whether the schedule confirms each booking by hand |
| `asks_phone`, `requires_phone` | Whether a phone number is asked for, and whether it is required |
| `questions` | The type's own questions: `key`, `label`, `type`, `required` and `options`. Answers are sent as `answers`, keyed by `key`. |
| `next_available` | The first open time, as a slot (`starts_at`, `date`, `label`), or `null` |
| `booking_url` | The type's public booking page |

cURLCopy

```
curl "https://eventschedule.com/api/schedules/sunset-clinic/appointment-types" \
         -H "X-API-Key: your_api_key_here"
```

ResponseCopy

```
{
        "data": [{
            "id": "dGhpcyBpcw",
            "name": "First consultation",
            "duration_minutes": 30,
            "price": 0,
            "currency": null,
            "payment": "free",
            "location_type": "in_person",
            "host_name": "Sam Jones",
            "timezone": "America/New_York",
            "requires_approval": false,
            "questions": [],
            "next_available": {
                "starts_at": "2026-10-20T18:30:00Z",
                "label": "Tuesday, October 20 at 2:30 PM EDT"
            }
        }]
    }
```

## List Open Times

GET
`/api/appointment-types/{id}/slots`

The times still open for a type, from the same rules the booking page uses: the weekly hours, date overrides, buffers, minimum notice, the booking window and what is already booked. Each slot carries its start as a UTC instant, to send back when booking, and a `label` in the schedule's timezone and language to read to the guest.

| Parameter | Required | Description |
| --- | --- | --- |
| `from` | No | First day to look at (Y-m-d, in the schedule's timezone). Defaults to today. |
| `days` | No | How many days to cover, 1 to 31. Defaults to 7. |

When the range has nothing open, `meta.next_available` is the first open time after it, so the agent can offer that rather than say there is nothing. `meta` also carries the type's `appointment_type_id`. A type that [List Appointment Types](#list-appointment-types) does not offer answers `422`.

ResponseCopy

```
{
        "data": [
            {
                "starts_at": "2026-10-20T18:30:00Z",
                "date": "2026-10-20",
                "label": "Tuesday, October 20 at 2:30 PM EDT"
            }
        ],
        "meta": {
            "timezone": "America/New_York",
            "from": "2026-10-20",
            "days": 7,
            "next_available": null
        }
    }
```

## Book an Appointment

POST
`/api/appointment-types/{id}/bookings`

Book a time for a guest. The booking is the guest's: your account does not become its buyer, and the owner's Bookings list and booking email say it was booked through the API, so a misheard name or address is checked.

| Parameter | Required | Description |
| --- | --- | --- |
| `slot` | Yes | A slot's `starts_at`, exactly as [List Open Times](#list-appointment-slots) gave it |
| `name` | Yes | The guest's name (max 255 characters) |
| `email` | Yes | The guest's email, where the confirmation or the payment link goes |
| `phone` | When the type requires it | The guest's phone number. Ignored when the type does not ask for one. |
| `notes` | No | A note for the schedule (max 5000 characters) |
| `guest_timezone` | No | The guest's timezone (IANA name), for their emails |
| `answers` | When a question is required | Object of answers to the type's `questions`, keyed by `key`. Each answer is text or a number, or a list of them, each up to 1000 characters. |

### What comes back

`201` with the booking. Its `status` is one of:

- `confirmed`: booked. The guest is emailed a confirmation with a calendar invite.
- `pending_approval`: the schedule confirms bookings by hand. The time is held, and the guest is emailed when it is confirmed or declined.
- `awaiting_payment`: the type is paid online. The guest is emailed a link at once, and the time is held until `pay_by`; unpaid by then, it is released.

The booking's `id` is its sale's ID: read the sale with [Show Sale](#show-sale), whose `event_id` is what [Cancel Event](#cancel-event) takes to cancel the booking. Beside the fields in the example the booking carries `appointment_type_id`, `appointment_type`, `ends_at`, `timezone`, the guest's `name`, `email` and `phone`, and `price` and `currency` (`null` when free). `pay_by` is `null` unless the time is held for a payment. A `sale.created` [webhook](docs__developer__webhooks.md) is sent.

`manage_url` is the guest's own page for the booking, absolute, where they pay, change the time or cancel. `emails_sent` says whether the guest was emailed, and `summary` is a sentence for the agent to read back, such as "I've emailed a payment link to j…@gmail.com; your time is held until Tuesday, October 20 at 3:30 PM EDT."

### A taken time

If the time went in the meantime the answer is `409` with `"error": "slot_taken"` and `alternatives`: the three open times nearest the one asked for, each a slot with its `label`. The same guest already holding that exact time is `409` with `"error": "already_booked"`, with that `booking`, so a retry whose first answer was lost can read it back. A `422` lists what is wrong per field, or says the type is not taking bookings, or that the schedule has reached its [daily cap](#event-daily-cap) on new events, which bookings count against.

### Retrying safely

Send an `Idempotency-Key` header (up to 64 letters, digits, dots, colons, dashes or underscores) and a repeat of the same request with the same key in the next 24 hours answers with the booking the first one made, marked `Idempotent-Replayed: true`, instead of booking the guest twice. The same key on a different request is a `422`. Only a booking is remembered, so a request that was refused can be retried with its key.

cURLCopy

```
curl -X POST "https://eventschedule.com/api/appointment-types/dGhpcyBpcw/bookings" \
         -H "X-API-Key: your_api_key_here" \
         -H "Idempotency-Key: call-8812-booking" \
         -H "Content-Type: application/json" \
         -d '{
             "slot": "2026-10-20T18:30:00Z",
             "name": "Jane Doe",
             "email": "[email protected]"
         }'
```

Response (201)Copy

```
{
        "data": {
            "id": "c2FsZTEy",
            "status": "confirmed",
            "starts_at": "2026-10-20T18:30:00Z",
            "label": "Tuesday, October 20 at 2:30 PM EDT",
            "host_name": "Sam Jones",
            "pay_by": null,
            "emails_sent": true,
            "manage_url": "https://eventschedule.com/appointment/view/...",
            "summary": "You're booked for First consultation with Sam Jones on Tuesday, October 20 at 2:30 PM EDT. A confirmation has been emailed to j…@example.com."
        }
    }
```

Response (409)Copy

```
{
        "error": "slot_taken",
        "alternatives": [
            { "starts_at": "2026-10-20T18:00:00Z", "label": "Tuesday, October 20 at 2:00 PM EDT" },
            { "starts_at": "2026-10-20T19:00:00Z", "label": "Tuesday, October 20 at 3:00 PM EDT" },
            { "starts_at": "2026-10-20T19:30:00Z", "label": "Tuesday, October 20 at 3:30 PM EDT" }
        ]
    }
```

## List Boosts

GET
`/api/boosts`

For a network that runs the boosts on its schedules under [its own Facebook Page and Meta ad account](docs__boost.md#partners). These endpoints answer only the key of the account that is the boost partner; any other key, a team member's included, gets `403`. A boost launches when its current version is approved and its current budget is paid, in either order. Repeating an approval, a decline, a payment confirmation or a stop answers the boost as it stands, so a retry after a timeout is safe; a different decision on a boost that has moved on answers `409`.

`updated_since` returns every boost changed at or after that time. Timestamps are whole seconds, so keep the last `updated_at` you saw and drop the duplicates.

### The boost object

| Field | Description |
| --- | --- |
| `id` | Encoded boost ID |
| `schedule` | The schedule's subdomain |
| `event` | id, name and url of the event |
| `status` | `pending_approval` `awaiting_payment` `ready` `in_review` `active` `completed` `declined` `rejected` `stopped`. `ready` is approved and paid, waiting only for your account to be confirmed. |
| `version` | Raised by every change to the headline, text, description, button, picture or link |
| `ad` | headline, text, description, call\_to\_action, image\_url, destination\_url |
| `audience.summary` | Who sees it, in words |
| `budget` | amount (a decimal string) and currency |
| `starts_at, ends_at` | ISO 8601, UTC |
| `approval` | approved\_version, decided\_at, note, and decline\_reason (`partner`, `ownership_changed` or `end_passed`) |
| `payment` | confirmed (only for the current budget), reference, amount, currency, confirmed\_at |
| `spend` | amount, currency, as\_of, and final (true once Meta's figures for an ended boost stop moving) |
| `meta_review` | Meta's reason when it refused the ad |
| `stopped_at, stop_reason` | When it stopped, and the note given, or its code when no note was written |
| `stop_code` | Who or what stopped it, whether or not a note was written: `partner`, `business`, `withdrawn` (taken back before launch), `access_withdrawn` or `event_removed` |
| `submitted_at, updated_at` | When the business sent the boost, and when anything on it last changed (ISO 8601, UTC) |

Filters: `status`, `schedule` (a subdomain), `updated_since`, and `page` / `per_page` (up to 500). Rows come oldest change first, by `updated_at`.

cURLCopy

```
curl "https://eventschedule.com/api/boosts?updated_since=2026-10-20T16:00:00Z" \
     -H "X-API-Key: your_api_key_here"
```

ResponseCopy

```
{
    "data": [{
        "id": "b8Kq2Zx",
        "schedule": "harbor-cafe",
        "status": "pending_approval",
        "version": 2,
        "budget": { "amount": "50.00", "currency": "USD" },
        "payment": { "confirmed": false }
    }],
    "meta": { "current_page": 1, "total": 1 }
}
```

## Get a Boost

GET
`/api/boosts/{id}`

One boost with its exact ad, its approval, its payment and its spend.

cURLCopy

```
curl "https://eventschedule.com/api/boosts/b8Kq2Zx" \
     -H "X-API-Key: your_api_key_here"
```

## Approve a Boost

POST
`/api/boosts/{id}/approve`

Approve the `version` you reviewed, with an optional `note`. A version that is not the current one answers `409` with the code `stale_version`, so an approval of earlier wording can never launch later wording.

cURLCopy

```
curl -X POST "https://eventschedule.com/api/boosts/b8Kq2Zx/approve" \
     -H "X-API-Key: your_api_key_here" \
     -H "Content-Type: application/json" \
     -d '{"version": 2, "note": "Approved by the desk"}'
```

## Decline a Boost

POST
`/api/boosts/{id}/decline`

Send it back with a `note` (required). The business sees the note and can edit and send it again.

cURLCopy

```
curl -X POST "https://eventschedule.com/api/boosts/b8Kq2Zx/decline" \
     -H "X-API-Key: your_api_key_here" \
     -H "Content-Type: application/json" \
     -d '{"note": "Please use a photo of the venue"}'
```

## Confirm a Payment

POST
`/api/boosts/{id}/confirm-payment`

Record that the business paid you for this budget: your own `reference` and `amount` (and optionally `currency`), returned on the boost and on the statement. The amount is not compared with the budget. Send the `budget.amount` you charged for as `budget`: if the business has changed the budget since, the confirmation is refused with a 409 (`stale_budget`) rather than launching the new budget on this payment. A changed budget clears the confirmation.

`DELETE /api/boosts/{id}/confirm-payment` withdraws the confirmation before the boost launches, for a refund or a dispute.

cURLCopy

```
curl -X POST "https://eventschedule.com/api/boosts/b8Kq2Zx/confirm-payment" \
     -H "X-API-Key: your_api_key_here" \
     -H "Content-Type: application/json" \
     -d '{"reference": "pi_3Qx", "amount": "60.00", "currency": "USD", "budget": "50.00"}'
```

## Stop a Boost

POST
`/api/boosts/{id}/stop`

Pause the campaign at Meta at once and end it, with an optional `reason`. A stopped boost does not restart.

cURLCopy

```
curl -X POST "https://eventschedule.com/api/boosts/b8Kq2Zx/stop" \
     -H "X-API-Key: your_api_key_here" \
     -H "Content-Type: application/json" \
     -d '{"reason": "Event cancelled"}'
```

## Boost Statements

GET
`/api/boost-statements/{period}`

`GET /api/boost-statements` lists the monthly statements, newest first. `GET /api/boost-statements/2026-11` answers one month: a line per campaign with its spend that month, the fee (your agreed rate of it, 20% unless agreed otherwise) and any adjustment for spend Meta corrected in an earlier month (that line's `month` names it), with the totals and the charge to your card (`pending`, `paid`, `failed`, `action_required` or `carried`, when the amount is too small to charge and moves to the next month). A month with spend in two currencies has a statement for each: add `?currency=EUR` to pick one.

cURLCopy

```
curl "https://eventschedule.com/api/boost-statements/2026-11" \
     -H "X-API-Key: your_api_key_here"
```

## Error Handling

The API uses standard HTTP status codes, and every endpoint returns the reason as a JSON `error` string. The few failures raised outside an endpoint carry `message` in its place, and need an `Accept` header to be JSON at all: see [Ask for JSON](#accept-header).

| Code | When you see it |
| --- | --- |
| 200 | Success |
| 201 | Created, returned by Register, Create Schedule, Create Sub-Schedule, Create Event, Create Sale and Book an Appointment |
| 400 | Verification codes requested on a selfhosted install, where they do not apply |
| 401 | API key missing, invalid, or past its one-year expiry. Also a wrong email or password on Login. |
| 403 | You are not an owner or admin of the record (or, on the hosted service, you are a team admin of a schedule that is not on Enterprise), the schedule is not on a Pro or Enterprise plan, only the event's own schedule may delete, cancel or restore it, the sale row is a named guest's rather than its group's primary, the boost endpoints were called with a key that is not the boost partner's, the account is blocked or uses two-factor authentication (Login), or selfhosted registration is closed |
| 404 | The record does not exist or has been deleted. A schedule your key cannot reach also answers `404`, where an event or a sale answers `403`. |
| 409 | Login when the account already has an unexpired API key; Create Event with an `external_id` the schedule already has (with that event's `id` under `data`), or while another request is writing the same `external_id`; a refund whose outcome could not be confirmed or is still in progress; an appointment time that was just taken (with `alternatives`) or that the same guest already holds; a booking still being made under the same `Idempotency-Key`; a boost decision on a version or budget that is no longer current, or in a state that does not allow it (with a `code`) |
| 422 | Validation error, with field-level detail in `errors`. Also business refusals such as an unmatched venue, a sold-out ticket, a past event, deleting an event that has sales, or the daily cap on new events. |
| 423 | The API key is blocked for 15 minutes after 10 consecutive failed attempts |
| 429 | Rate limit exceeded, see [Rate Limits](#rate-limits) |
| 500 | Server error. Retry with backoff; the failure is logged on our side. |
| 502 | [Delete Schedule](#delete-schedule) could not cancel the schedule's paid plan, so nothing was deleted |

A `422` covers two different things. A schema problem carries an `errors` object and is worth surfacing field by field; a business refusal carries only `error` and reads as a sentence. Check for `errors` before assuming its shape.

Validation Error (422)Copy

```
{
        "error": "Validation failed",
        "errors": {
            "name": ["The name field is required."],
            "starts_at": ["The starts at must match the format Y-m-d H:i:s."]
        }
    }
```

## See Also

- [OpenAPI Specification](https://eventschedule.com/api/openapi.json) - Machine-readable spec for AI agents and code generators
- [agents.json](https://eventschedule.com/.well-known/agents.json) - Named multi-step flows, such as register then create a schedule then add an event
- [Webhooks](docs__developer__webhooks.md) - Get pushed the sale and event changes instead of polling for them
- [Account Settings](docs__account-settings.md#api) - Turn on API access and manage your key
- [Creating Events](docs__creating-events.md) - What each event field means in the admin panel
- [Selling Tickets](docs__tickets.md) - Ticket types, sales and check-in

Last updated 23 October 2026
·
[Improve this page on GitHub](https://github.com/eventschedule/eventschedule/blob/main/resources/views/marketing/docs/developer/api.blade.php)
