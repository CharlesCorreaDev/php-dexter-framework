# Forms | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/development/forms

---

# Forms

- ### On this Page

  - [Making Requests](docs_5x__development__forms.md#making-requests)
  - [Responses](docs_5x__development__forms.md#responses)
  - [Custom Fields](docs_5x__development__forms.md#custom-fields)

If you’ve gotten familiar with Craft’s [control panel](docs_5x__system__control-panel.md), you might be wondering what kinds of things you can do from your site’s front-end. The answer is actually *quite a bit*!

Any time you want to get information from (or send information *to*) Craft, it’s part of the [request](#making-requests)-[response](#responses) lifecycle. This page covers the process of setting up HTML forms (and other types of requests like [Ajax](#ajax)!) to send and receive data in a way that Craft understands.

[Controller Actions Reference
→

See a list of controller actions you can interact with via forms.](docs_5x__reference__controller-actions.md)

## [#](#making-requests)Making Requests

Most of your interactions with Craft so far have likely been over HTTP. Let’s take a look at how Craft determines what to do when it receives a request.

### [#](#params)Params

This page will make frequent references to *query* and *body* params. These are named values sent with a request, either encoded after a `?` in the URL, or within the “body” of a request. Query params are used in [GET](#get) and [POST](#post) requests, but body params are only used in POST requests.

Craft uses a handful of params to properly route a request, but may expect others based on what it thinks the user is requesting. For example, most requests use an [action](#actions) param, but a [login request](docs_5x__reference__controller-actions.md#post-userslogin) also requires `loginName` and `password` params.

### [#](#actions)Actions

An “action request” is one that explicitly declares the [controller and action](docs_5x__reference__controller-actions.md) to use, via an `action` query or body param.

This `action` parameter is different from the `<form action="...">` attribute:

- The `action` *param* should be used within a URL query string (`?action=...`) for `GET` requests, or in the body of a `POST` request.
- The *form attribute* should only be used when you want to control where a user is sent in [failure scenarios](#failure). When an `action` param is *not* present in the request, you can use an “action path” like `action="/actions/users/login"`. This attribute has no effect if a redirect is issued in response to the request!

Craft also supports routing to specific actions using a path (beginning with the [actionTrigger](docs_5x__reference__config__general.md#actiontrigger) setting), or by creating an [rule in `routes.php`](docs_5x__system__routing.md#advanced-routing-with-url-rules).

### [#](#http-verbs)HTTP Verbs

Each action usually responds to one [HTTP method  (opens new window)](https://developer.mozilla.org/en-US/docs/Web/HTTP/Methods). Using an unsupported method will throw a [yii\web\BadRequestHttpException  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-web-badrequesthttpexception), and show your [error template](docs_5x__system__routing.md#error-templates) with a 400 `statusCode`—or send a JSON response with an `error` key.

#### [#](#post)`POST`

All `POST` requests are made through forms or [Ajax](#ajax), and require an `action` parameter and CSRF token.

```
{# Let your users request a password reset: #}
<form method="post">
  {{ csrfInput() }}
  {{ actionInput('users/send-password-reset-email') }}

  <label for="loginName">Username or email</label>
  {{ input('text', 'loginName', null, {
    id: 'loginName',
  }) }}

  <button>Reset Password</button>
</form>
```

Some `POST` requests will write [flashes](#flashes) into the session to communicate successes and failures.

Flashes are *not* set when using [Ajax](#ajax). Look for confirmation and errors in the response!

#### [#](#get)`GET`

`GET` requests are made by accessing an action URL by way of a regular anchor tag, a form submission, or Ajax. In the [examples](#available-actions) that follow, `GET` action requests are much less common than `POST`, as the bulk of read-only request routing is handled for you, out of the box.

Anchor/LinkFormAjax

```
{# Output a “log out” link: #}
<a href="{{ actionUrl('users/logout') }}">Log Out</a>

{# Craft actually provides a shortcut for this: #}
<a href="{{ logoutUrl }}">Log Out</a>
```

```
{# Pass any element to this (say, as a Twig partial) to get a control panel edit button: #}
<form>
  {{ actionInput('elements/redirect') }}
  {{ hiddenInput('elementId', object.id) }}

  <button>Edit</button>
</form>
```

```
// Get info about the current session (guests) and user (if logged in):
fetch('/actions/users/session-info', {
  headers: {
    'Accept': 'application/json',
  },
})
.then(response => response.json())
.then(result => console.log(result));
// -> { isGuest: true, timeout: 0, csrfTokenValue: '...' }
```

You may notice that the `actionUrl()` function generates URLs with `index.php` visible, despite your [omitScriptNameInUrls](docs_5x__reference__config__general.md#omitscriptnameinurls) setting. This is intended, as it guarantees compatibility with all environments, regardless of configuration.

If you need a cleaner URL, consider setting up a custom [route](docs_5x__system__routing.md#advanced-routing-with-url-rules).

### [#](#csrf)CSRF

Craft has built-in [Cross-Site Request Forgery  (opens new window)](https://owasp.org/www-community/attacks/csrf) mitigation, and therefore requires a valid session and token any time data is POSTed to a controller action.

For requests initiated by an HTML `<form>`, use the `csrfInput()` [Twig helper](#form-helpers):

```
<form method="post">
  {{ csrfInput() }}
  {{ actionInput('entries/save-entry') }}

  {# ... #}
</form>
```

The process is slightly more complicated for [Ajax](#ajax) requests, but can be abstracted in a manner appropriate for your project.

Any time a CSRF token is generated during a request, Craft sends no-cache headers to prevent tokens from leaking across sessions or becoming stale.  [5.3.0+](https://github.com/craftcms/cms/blob/5.3.0/CHANGELOG.md "We began sending automatic no-cache headers in Craft 5.3.0.")

Tokens can still be captured within [`{% cache %}` tags](docs_5x__development__tags.md#cache), so be mindful of context when rendering forms—or pass the [`async` option](docs_5x__reference__twig__functions.md#csrfinput) to `csrfInput()`!

### [#](#form-helpers)Form Helpers

Craft has a number of built-in Twig functions to make dealing with forms and input easier.

| Function | Notes |
| --- | --- |
| [actionInput()](docs_5x__reference__twig__functions.md#actioninput) | Generate a hidden HTML `<input>` element for controlling which action a `<form>` should route to. |
| [actionUrl()](docs_5x__reference__twig__functions.md#actionurl) | Generate an absolute URL to the specified action, with any extra params. GET only. |
| [csrfInput()](docs_5x__reference__twig__functions.md#csrfinput) | Generate a hidden HTML `<input>` required for CSRF protection. |
| [failMessageInput()](docs_5x__reference__twig__functions.md#failmessageinput) | Override error-condition flash messages. POST only, ignored for Ajax requests. |
| [hiddenInput()](docs_5x__reference__twig__functions.md#hiddeninput) | Lower-level helper for generating hidden HTML inputs. |
| [input()](docs_5x__reference__twig__functions.md#input) | Even finer-grained control over HTML `<input>` element creation. |
| [redirectInput()](docs_5x__reference__twig__functions.md#redirectinput) | Generates a hidden HTML `<input>` element to control redirection after successful requests. POST only, ignored for Ajax requests. |
| [successMessageInput()](docs_5x__reference__twig__functions.md#successmessageinput) | Override success-condition flash messages. POST only, ignored for Ajax requests. |

### [#](#ajax)Ajax

In order to respond appropriately, Craft requires that Ajax requests are identified as such. Some tools (like jQuery) need no configuration; others (like the native [`fetch()` API  (opens new window)](https://developer.mozilla.org/en-US/docs/Web/API/fetch)) will need to be configured explicitly:

| Header | Notes |
| --- | --- |
| `Accept` | Set to `application/json` to receive a JSON response (when available). |
| `X-Requested-With` | Set to `XMLHttpRequest` if your templates rely on `craft.app.request.isAjax`. |
| `X-CSRF-Token` | Send a valid CSRF token (for POST requests) if none is provided in the request body under the key determined by [csrfTokenName](docs_5x__reference__config__general.md#csrftokenname). |
| `Content-Type` | Set to `application/json` if the request’s body is a serialized [JSON payload](#sending-json) (as opposed to `FormData`). |
| `X-Craft-Site` | Set to a valid [site](docs_5x__system__sites.md) handle or ID to treat the request as though it were part of a specific site. |
| `X-Craft-Site-Token` | Set to a hashed site ID (*not* a handle) to force a request to use a particular site. This can also be supplied as a query or body parameter under a key determined by [siteToken](docs_5x__reference__config__general.md#sitetoken). |

A CSRF token is still required for Ajax requests using the `POST` method. You can ensure a session is started (for guests) by preflighting a request to the [`users/session-info` action](#get-userssession-info):

```
// Helper for fetching a CSRF token:
const getSessionInfo = function() {
  return fetch('/actions/users/session-info', {
    headers: {
      'Accept': 'application/json',
    },
  })
  .then(response => response.json());
};

// Session info is passed to the chained handler:
getSessionInfo()
  .then(session => {
    const params = new FormData();

    // Read the User’s ID from the session data (assuming they’re logged in):
    params.append('userId', session.id);
    params.append('fullName', 'Tony Tiger');

    return fetch('/actions/users/save-user', {
      method: 'POST',
      headers: {
        'Accept': 'application/json',
        'X-CSRF-Token': session.csrfTokenValue,
        'X-Requested-With': 'XMLHttpRequest',
      },
      body: params,
    })
    .then(response => response.json())
    .then(result => console.log(result));
  });
```

This example assumes you have no preexisting HTML from the server, as though it were part of a [headless](docs_5x__reference__config__general.md#headlessmode) application. If you are working on a hybrid front-end (and sprinkling interactivity into primarily server-rendered pages), you could eliminate the first request by stashing the user ID and CSRF token in the document’s `<head>` (or on another relevant element) and reading it with JavaScript:

```
<button
  id="update-name"
  data-user-id="{{ currentUser.id }}"
  data-csrf-token-value="{{ craft.app.request.getCsrfToken() }}"
  data-csrf-token-name="{{ craft.app.config.general.csrfTokenName }}">Edit Name</button>

<script>
  const $button = document.getElementById('update-name');

  $button.addEventListener('click', function(e) {
    const params = new FormData();

    params.append('userId', $button.dataset.userId);
    params.append($button.dataset.csrfTokenName, $button.dataset.csrfTokenValue);
    params.append('fullName', prompt('New name:'));

    fetch('/actions/users/save-user', {
      method: 'POST',
      headers: {
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
      },
      body: params,
    })
    .then(response => response.json())
    .then(result => console.log(result));
  });
</script>
```

Note that by generating and outputting a CSRF token into HTML, the page can no longer be safely cached.

When using the `fetch()` API, the body of a request can be set to a `FormData` object populated from an HTML form, as well:

```
<form method="post" id="user-profile">
  {{ csrfInput() }}
  {{ actionInput('users/save-user') }}

  <input type="text" name="fullName" value="{{ currentUser.fullName }}" required>

  <button>Save</button>
</form>

<script>
  const $form = document.getElementById('user-profile');

  $form.addEventListener('submit', function(event) {
    event.preventDefault();

    fetch('/actions/users/save-user', {
      method: 'POST',
      headers: {
        'Accept': 'application/json',
        'X-Requested-With': 'XMLHttpRequest',
      },
      body: new FormData($form),
    })
    .then(response => response.json())
    .then(result => console.log(result));
  })
</script>
```

[GraphQL](docs_5x__development__graphql.md) requests *do not* use CSRF, for queries or mutations.

#### [#](#cors)CORS

Requests sent from a domain other than the one Craft is running on (including different subdomains, unless you’ve set [defaultCookieDomain](docs_5x__reference__config__general.md#defaultcookiedomain)) may need to use the [`credentials`  (opens new window)](https://developer.mozilla.org/en-US/docs/Web/API/Fetch_API/Using_Fetch#including_credentials) request option, and configure appropriate `Access-Control-Allow-Credentials` and `Access-Control-Allow-Origin` [headers](docs_5x__reference__config__app.md#cors) in Craft.

#### [#](#sending-json)Sending JSON

If you prefer to work with a JSON payload for the body, you must include [the appropriate `Content-Type` header  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-web-request#parsers-detail). The equivalent `users/save-user` request would look like this:

```
// ...
const params = {
  userId: $button.dataset.userId,
  fullName: prompt('New name:'),
};

fetch('/actions/users/save-user', {
  method: 'POST',
  headers: {
    'Accept': 'application/json',
    'Content-Type': 'application/json',
    'X-CSRF-Token': $button.dataset.csrfTokenValue,
    'X-Requested-With': 'XMLHttpRequest',
  },
  body: JSON.stringify(params),
})
.then(response => response.json())
.then(result => console.log(result));
```

Files cannot be uploaded when using `Content-Type: application/json`.

When sending a JSON payload in the body of a request, you *must* use an action path (`/actions/users/save-user`, as in the example above), or provide the action in a query parameter (`/index.php?action=users/save-user`)—the action will *not* be properly picked up as a property of the decoded payload.

#### [#](#sites)Sites

In [headless](docs_5x__reference__config__general.md#headlessmode) mode, and when using [actions](#actions) or otherwise site-agnostic routes (i.e. configured via the [Element API  (opens new window)](https://plugins.craftcms.com/element-api) plugin), Craft uses the [primary site](docs_5x__system__sites.md#primary-site), by default. This means that element queries, static message translations, emails, and other language-dependent features may be handled in unexpected ways.

Send a valid site ID or handle under the `X-Craft-Site` header  [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "The X-Craft-Site header was first available in version 5.6.0 of Craft.") to tell Craft that it should handle the request in the context of a specific site:

```
// Assuming there is a matching Element API route configured...
fetch('/my/api/news/5361', {
  method: 'POST',
  headers: {
    'Accept': 'application/json',
    'Content-Type': 'application/json',
    'X-Requested-With': 'XMLHttpRequest',
    'X-Craft-Site': 'corporateFr',
  },
})
.then(response => response.json())
.then(result => console.log(result));
```

### [#](#models-and-validation)Models and Validation

Most of the data creation and manipulation actions we’ll cover revolve around [yii\base\Model  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-model)s. Craft uses models to store and validate all kinds of things—including every type of [element](docs_5x__system__elements.md) you’re already familiar with!

If you encounter [errors](#failure) when creating or saving something, it will usually be passed back to your template as a special variable like `entry` or `user`, and a [flash](#flashes) will be set. Every model has a `.getErrors()` method that returns a list of messages for any attribute (or custom field) that did not validate.

While abbreviated, this “user profile” form contains all the patterns required to display contextual validation errors:

account.twig\_layouts/default.twig

```
{% extends '_layouts/default' %}

{# Require an active user session: #}
{% requireLogin %}

{% block content %}
  {# Display the user’s saved name: #}
  <h1>Hello, {{ currentUser.fullName }}</h1>

  {# Normalize the `user` variable, so we can use it in the form regardless of whether or not it was rendered following a submission attempt: #}
  {% set user = user ?? currentUser %}

  <form method="post">
    {{ csrfInput() }}
    {{ actionInput('users/save-user') }}
    {{ hiddenInput('userId', user.id) }}

    <label for="fullName">Full Name</label>

    {{ input('text', 'fullName', user.fullName, {
      id: 'fullName',
      aria: {
        invalid: user.hasErrors('fullName'),
        errormessage: user.hasErrors('fullName') ? 'fullName-errors' : null,
      },
    }) }}

    {% if user.hasErrors('fullName') %}
      <ul id="fullName-errors">
        {% for error in user.getErrors('fullName') %}
          <li>{{ error }}</li>
        {% endfor %}
      </ul>
    {% endif %}

    {# ...other fields and attributes... #}

    <button>Save</button>
  </form>
{% endblock %}
```

```
<!DOCTYPE html>
<html lang="{{ currentSite.language }}">
  <head>
      <meta charset="UTF-8">
      <title>{{ siteName }}</title>
  </head>
  <body>
    {# Output flashes in a global space: #}
    {% set flashes = craft.app.session.getAllFlashes(true) %}

    {% if flashes | length %}
      {% for level, flash in flashes %}
        <p class="{{ level }}" role="alert">{{ flash }}</p>
      {% endfor %}
    {% endif %}

    {% block content null %}
  </body>
</html>
```

Note that we’re outputting errors from the `user` object (in `account.twig`) as well as any success or failure [flashes](#flashes) (in `_layouts/default.twig`).

The same principles apply to anything else you want to make editable in the front-end, so long as the user has the correct permissions. Take a look at the [public registration forms  (opens new window)](https://craftcms.com/knowledge-base/front-end-user-accounts) for some examples of validation on forms available to guests—and to learn about some nice abstractions that will help reduce repetition in your form markup!

#### [#](#flashes)Flashes

Flashes are temporary messages Craft stores in your session, typically under keys corresponding to their severity, like `notice` or `error`. You can output flashes in your templates:

```
{# Retrieve + clear all flashes: #}
{% set flashes = craft.app.session.getAllFlashes(true) %}

{% if flashes | length %}
  {% for level, flash in flashes %}
    {# Use the level (most often `notice` or `error`) to customize styles: #}
    <p class="{{ level }}">{{ flash }}</p>
  {% endfor %}
{% endif %}
```

Most endpoints support customizing success and fail flashes:

```
<form method="post">
  {{ csrfInput() }}
  {{ actionInput('entries/save-entry') }}
  {{ successMessageInput('Your feedback has been logged!') }}
  {{ failMessageInput('Something went wrong when submitting your message.') }}

  {# ... #}

  <textarea name="fields[reviewBody]"></textarea>

  <button>Send</button>
</form>
```

## [#](#responses)Responses

Action requests are largely consistent in their behavior—exceptions will be noted in each of the [available actions](docs_5x__reference__controller-actions.md#available-actions)’ **Response** sections.

Let’s look at some typical success and failure states and how they differ.

### [#](#success)Success

Successful responses are mostly handled via the [craft\web\Controller::asModelSuccess()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-asmodelsuccess) or [asSuccess()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-assuccess) methods.

#### [#](#after-a-get-request)After a GET Request

Craft’s response to a GET request varies based on whether it included an `Accept: application/json` header—and the substance of the response will differ greatly from action to action.

#### [#](#after-a-post-request)After a POST Request

Successful POST requests will often culminate in a [flash](#flashes) being set (under the `notice` key) and a 300-level redirection.

Some routes make this redirection configurable ([passwordSuccessPath](docs_5x__reference__config__general.md#passwordsuccesspath) or [activateAccountSuccessPath](docs_5x__reference__config__general.md#activateaccountsuccesspath), for instance)—but sending a hashed `redirect` param with your request will always take precedence.

The [`redirectInput()`](docs_5x__reference__twig__functions.md#redirectinput) function takes the guesswork out of rendering this input.

```
<form method="post">
  {{ csrfInput() }}
  {{ actionInput('users/send-password-reset-email') }}

  {# Redirect to a page with further instructions: #}
  {{ redirectInput('help/account-recovery') }}

  {# The above is equivalent to: #}
  <input
    type="hidden"
    name="redirect"
    value="{{ 'help/account-recovery' | hash }}">

  {{ input('email', 'loginName', null, {
    required: true,
  }) }}

  <button>Reset Password</button>
</form>
```

The `redirect` param accepts an [object template](docs_5x__system__object-templates.md), which is evaluated just before it’s issued, and can reference properties of the element or record you were working with:

```
<form method="post">
  {{ csrfInput() }}
  {{ actionInput('entries/save-entry') }}

  {# Redirect the user to the public page: #}
  {{ redirectInput('community-posts/{uid}') }}

  {# ...entry options... #}

  {{ input('text', 'title') }}

  <button>Post + View</button>
</form>
```

Inspecting the HTML output, you’ll see your template exactly as provided. Why wasn’t it rendered? The “template” will be securely submitted along with your POST request and be rendered *after* the entry is saved—that’s why we’re able to use properties (like `{uid}`, in the example) whose values aren’t yet known.

For JSON responses, redirection does’t make as much sense—so Craft will include the resolved `redirect` value for your client to navigate programmatically (say, via `window.location = resp.redirect`).

In addition to the `redirect` property, the response object will include a `message` key with the same text that would have been flashed (for a `text/html` response)—either a specific message from Craft, or one provided in the request via the [globally-supported `successMessage` param](docs_5x__reference__controller-actions.md#globally-supported-params). Additional action-specific properties are also returned at the top level of the response object.

### [#](#failure)Failure

Failed responses are mostly handled via the [craft\web\Controller::asModelFailure()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-asmodelfailure) or [asFailure()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-controller.html#method-asfailure) methods.

#### [#](#during-a-get-request)During a GET Request

A GET request will typically only fail if an exception is thrown in the process of generating a response. The criteria for that failure depends on the action, but can also be circumstantial—like a lost database connection.

If the request included an `Accept: application/json` header, Craft will send a `message` key in the JSON response, or a complete stack trace when [devMode](docs_5x__reference__config__general.md#devmode) is on. Otherwise, Craft displays a standard [error view](docs_5x__system__routing.md#error-templates).

#### [#](#during-a-post-request)During a POST Request

POST requests can fail for the same reasons a GET request might—but because they are often responsible for mutating data, you’ll also be contending with [validation](#models-and-validation) errors.

We’ll use the term “model” here for technical reasons—but [elements](docs_5x__system__elements.md) are models, too!

In all but rare, unrecoverable cases, Craft sets an `error` [flash](#flashes) describing the issue, and carries on serving the page at the original path (either the page the request came from, or whatever was in the originating `<form action="...">` attribute). By virtue of being part of the same request that populated and validated a model, Craft is able to pass it all the way through to the rendered template—making it possible to repopulate inputs and display errors, contextually. See a complete example of how to handle this in the [models and validation](#models-and-validation) section.

For requests that include an `Accept: application/json` header, Craft will instead build a JSON object with an `errors` key set to a list of the model’s errors (indexed by attribute or field), a `message` key, an array representation of the model, and a `modelName` key with the location of the model data in the payload. The exact message will be specific to the failure mode, and can be overridden using the [globally-supported `failMessage` param](docs_5x__reference__controller-actions.md#global-params).

```
{
  "errors": {
    "email": "...",
    /* ... */
  },
  "modelName": "user",
  "user": {
    "email": "@craftcms",
    /* ... */
  }
}
```

The value of `modelName` in a JSON response is the same as the variable name Craft uses for the model when rendering a template response. We’ll call this out in each action, below!

## [#](#custom-fields)Custom Fields

Actions that create or update elements (like [`entries/save-entry`](docs_5x__reference__controller-actions.md#post-entriessave-entry) and [`users/save-address`](#post-userssave-address)) support setting [custom field](docs_5x__system__fields.md) values. Only fields that are included in a request will be updated.

Fields should be submitted under a `fields` key, using their handle:

```
<form method="post">
  {{ csrfInput() }}
  {{ actionInput('entries/save-entry') }}

  {{ input('text', 'fields[myCustomFieldHandle]') }}

  <button>Save Entry</button>
</form>
```

In the event you need to re-key the custom field data in the request, you can send a `fieldsLocation` param:

```
<form method="post">
  {{ csrfInput() }}
  {{ actionInput('entries/save-entry') }}
  {{ hiddenInput('fieldsLocation', 'f')}}

  {# Don’t forget to update all your input names! #}
  {{ input('text', 'f[myCustomFieldHandle]') }}

  <button>Save Entry</button>
</form>
```

### [#](#field-data-types)Field + Data Types

Fields (and attributes) that use [scalar  (opens new window)](https://www.php.net/manual/en/function.is-scalar.php) values like numbers, text, or booleans will work as expected with a single input.

Other types may require multiple inputs or specific naming conventions.

#### [#](#date-time)Date + Time

Entries’ native `postDate` and `expiryDate` properties can be handled in the same way [date/time fields](docs_5x__reference__field-types__date-time.md#saving-date-fields) are; but instead of passing their values under a `fields` key, you’ll send them as top-level keys in a POST request:

UnifiedDiscrete Inputs

```
{{ input('datetime-local', 'postDate', entry.postDate|atom) }}
```

```
{{ input('date', 'postDate[date]', entry.postDate.format('Y-m-d')) }}
{{ input('time', 'postDate[time]', entry.postDate.format('G:i')) }}
```

Both of these options will POST valid data that Craft can reconstruct into a PHP DateTime object.

Some date properties (like `dateUpdated` and `dateCreated`) may be determined by Craft, and are not editable.

#### [#](#relations)Relations

Assets, categories, entries, and tags can be associated to a [relational](docs_5x__system__relations.md) field by passing an array of IDs. For more information and examples, see the relevant field type documentation:

- [Assets fields](docs_5x__reference__field-types__assets.md#saving-assets-fields)
- [Entries fields](docs_5x__reference__field-types__entries.md#saving-entries-fields)
- [Categories fields](docs_5x__reference__field-types__categories.md#saving-categories-fields)
- [Tags fields](docs_5x__reference__field-types__tags.md#saving-tags-fields)

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/development/forms.md)
