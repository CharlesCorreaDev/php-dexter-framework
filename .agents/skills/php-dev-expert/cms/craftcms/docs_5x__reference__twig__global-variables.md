# Global Variables | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/twig/global-variables

---

# Global Variables

- ### On this Page

  - [Twig Defaults](docs_5x__reference__twig__global-variables.md#twig-defaults)
  - [Craft](docs_5x__reference__twig__global-variables.md#craft)
  - [PHP Constants + Equivalents](docs_5x__reference__twig__global-variables.md#php-constants-equivalents)
  - [Automatically Loaded Elements](docs_5x__reference__twig__global-variables.md#automatically-loaded-elements)

A number of [global variables  (opens new window)](https://twig.symfony.com/doc/3.x/templates.html#global-variables) are available to Twig templates. Some come from Twig itself, and some are Craft-specific.

Global variables are accessible in *every* Twig template, including [system messages](docs_5x__system__mail.md#system-messages) and [object templates](docs_5x__system__object-templates.md) used for element URIs.

This page is split into four sections:

1. [**Twig defaults**](#twig-defaults): Variables provided by Twig itself.
2. [**Craft**](#craft): Variables injected by Craft.
3. [**Constants**](#php-constants--equivalents): Equivalents of PHP constants.
4. [**Elements**](#automatically-loaded-elements): Auto-loaded elements.

These lists may be supplemented by plugins, so refer to their documentation to see what kind of functionality is exposed to your templates!

## [#](#twig-defaults)Twig Defaults

Global variables [provided directly by Twig  (opens new window)](https://twig.symfony.com/doc/3.x/templates.html#global-variables).

| Variable | Description |
| --- | --- |
| `_self` | The current template name. |
| `_context` | The currently-defined variables. |
| `_charset` | The current charset. |

## [#](#craft)Craft

Additional variables provided by Craft.

| Variable | Description |
| --- | --- |
| [\_globals](#globals) | Get and set values on a globally-available store. |
| [craft](#craft-2) | A [craft\web\twig\variables\CraftVariable  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-twig-variables-craftvariable.html) object. |
| [currentSite](#currentsite) | The requested site. |
| [currentUser](#currentuser) | The currently logged-in user. |
| [devMode](#devmode) | Whether Dev Mode is enabled. |
| [loginUrl](#loginurl) | The URL to the front-end Login page. |
| [logoutUrl](#logouturl) | The URL to the front-end Logout page. |
| [now](#now) | The current date/time. |
| [primarySite](#primarysite)  [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Global Twig variable for the primary site was first available in version 5.6.0 of Craft.") | In multi-site projects, the “primary” site. |
| [setPasswordUrl](#setpasswordurl) | The URL to the front-end [Reset Password  (opens new window)](https://craftcms.com/knowledge-base/front-end-user-accounts#reset-password-form) page. |
| [siteName](#sitename) | The name of the current site. |
| [siteUrl](#siteurl) | The base URL of the current site. |
| [systemName](#systemname) | The system name. |
| [today](#today) | Midnight of the current day. |
| [tomorrow](#tomorrow) | Midnight, tomorrow. |
| [view](#view) | The app’s `view` component. |
| [yesterday](#yesterday) | Midnight, yesterday. |
| [Global set variables](#global-set-variables) | Variables for each of the global sets. |
| [Single variables](#singles) | Variables for each [single section](docs_5x__reference__element-types__entries.md#singles) entry. |

### [#](#globals)`_globals`

An empty [Collection](docs_5x__development__collections.md) object. You may set and get values with the corresponding methods:

```
{% do _globals.set('theme', 'dark') %}
{% do _globals.set({
  red: '#F00',
  green: '#0F0',
  blue: '#00F',
}) %}

{{ _globals.get('theme') }}
{# -> 'dark' #}

{{ _globals.get('red') }}
{# -> '#F00' #}
```

The `_globals` variable has all the native [collection methods](docs_5x__development__collections.md#methods), as well as a few that Craft provides (via [macros  (opens new window)](https://laravel.com/docs/10.x/collections#method-macro))—including the `set()` method used in the example above, which adds support for setting multiple Collection keys at once.

Note that we’re using Twig’s `do` tag to *set* values. You can *get* values in any kind of Twig expression—like an output statement or a `set` tag.

If you need to set or manipulated *nested* values, consider creating a top-level Collection object:

```
{% do _globals.set('events', collect()) %}

{# ... #}

{% do _globals.get('events').push("show:element:#{entry.id}") %}
```

View the current contents of the `_globals` variable by passing it to the [`dump` tag](docs_5x__reference__twig__tags.md#dump):

```
{# .all() turns the Collection into a plain array: #}
{% dump _globals.all() %}
```

### [#](#craft-2)`craft`

A [craft\web\twig\variables\CraftVariable  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-twig-variables-craftvariable.html) object, which provides access points to various helper functions and objects for templates. Many plugins will attach functionality here.

#### [#](#craft-app)`craft.app`

A reference to the main [craft\web\Application  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-application.html) or [craft\console\Application  (opens new window)](https://docs.craftcms.com/api/v5/craft-console-application.html) instance (the same object you get when accessing `Craft::$app` in PHP) is also available to templates via `craft.app`.

Accessing things via `craft.app` is considered advanced. There are more security implications than other Twig-specific variables and functions, and your templates will be more susceptible to breaking changes between major Craft versions.

Some of the services commonly used in templates:

- `craft.app.request` – [Request  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-request.html) object with information about the current HTTP request
- `craft.app.session` – [Session  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-session.html) object useful for getting and setting [flash messages](docs_5x__development__forms.md#flashes)
- `craft.app.user` – [User  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-user.html) object for getting information about the client’s identity
- `craft.app.config.general` – [GeneralConfig  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-generalconfig.html) object of [General Config Settings](docs_5x__reference__config__general.md)
- `craft.app.fields` – [Fields  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-fields.html) service for accessing [custom field](docs_5x__system__fields.md) details
- `craft.app.sites` – [Sites  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-sites.html) service for getting [site](docs_5x__system__sites.md) details

Keep in mind that Twig templates can be rendered from web requests, the CLI, and within queue jobs—so there are situations in which certain features may no be available (like the “[current user](#currentuser),” or information about the request).

The specific services (or “components”) available via `craft.app` correspond to the keys defined in Craft’s [`app.php`  (opens new window)](https://github.com/craftcms/cms/blob/5.x/src/config/app.php), [`app.web.php`  (opens new window)](https://github.com/craftcms/cms/blob/5.x/src/config/app.web.php), and your project’s [equivalent config files](docs_5x__reference__config__app.md).

Here are some examples of these services being used in a template:

```
{# get the value of an `email` query parameter or post field #}
{% set address = craft.app.request.getParam('email') %}

{# get the value of the `notice` flash message #}
{% set message = craft.app.session.getFlash('notice') %}

{# get the current user’s email address #}
{% set email = craft.app.user.email %}

{# is `devMode` enabled? #}
{% set isDevMode = craft.app.config.general.devMode %}

{# get a custom field by its `body` handle #}
{% set field = craft.app.fields.getFieldByHandle('body') %}

{# get all the sections for the current site #}
{% set sections = craft.app.entries.getAllSections() %}

{# get all the sites for the current Craft installation #}
{% set sites = craft.app.sites.allSites() %}
```

### [#](#currentsite)`currentSite`

The requested site, represented by a [craft\models\Site  (opens new window)](https://docs.craftcms.com/api/v5/craft-models-site.html) object.

```
{{ currentSite.name }}
```

You can access all of the sites in the same group as the current site via `currentSite.group.sites`:

```
<nav>
  <ul>
    {% for site in currentSite.group.sites %}
      <li><a href="{{ alias(site.baseUrl) }}">{{ site.name }}</a></li>
    {% endfor %}
  </ul>
</nav>
```

### [#](#currentuser)`currentUser`

The currently-logged-in user, represented by a [craft\elements\User  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-user.html) object, or `null` if no one is logged in.

```
{% if currentUser %}
  Welcome, {{ currentUser.friendlyName }}!
{% endif %}
```

Some templates are rendered in contexts that don’t use sessions or have any concept of a “current user,” like the command line. [System messages](docs_5x__system__mail.md#system-messages) are also somewhat unintuitive in this regard, because the current user may not be the recipient!

### [#](#devmode)`devMode`

Whether the [devMode](docs_5x__reference__config__general.md#devmode) config setting is currently enabled.

```
{% if devMode %}
  Craft is running in dev mode.
{% endif %}
```

### [#](#loginurl)`loginUrl`

The URL to your site’s login page, based on the [loginPath](docs_5x__reference__config__general.md#loginpath) config setting.

```
{% if not currentUser %}
  <a href="{{ loginUrl }}">Login</a>
{% endif %}
```

### [#](#logouturl)`logoutUrl`

The URL Craft uses to log users out, based on the [logoutPath](docs_5x__reference__config__general.md#logoutpath) config setting. Note that Craft will automatically redirect users to your homepage after going here; there’s no such thing as a “logout *page*”.

```
{% if currentUser %}
  <a href="{{ logoutUrl }}">Logout</a>
{% endif %}
```

### [#](#now)`now`

A [DateTime  (opens new window)](http://php.net/manual/en/class.datetime.php) object set to the current date and time.

```
Today is {{ now|date('M j, Y') }}.
```

### [#](#primarysite)`primarySite` [5.6.0+](https://github.com/craftcms/cms/blob/5.6.0/CHANGELOG.md "Global Twig variable for the primary site was first available in version 5.6.0 of Craft.")

The *primary* site (as designated in

1. Settings→
2. Sites

), as an instance of [craft\models\Site  (opens new window)](https://docs.craftcms.com/api/v4/craft-models-site.html).

```
{# Output the primary site’s name: #}
We are a proud member of {{ primarySite.name }}

{# Link to a page on the primary site: #}
{{ tag('a', {
  href: siteUrl('about/governance', siteId = primarySite.id),
  text: 'Learn about our family of businesses',
}) }}
```

`primarySite` will be a reference to the same object as [`currentSite`](#currentsite), when `currentSite.primary` is `true`. You can also retrieve the primary site via `craft.app.sites.primarySite`.

### [#](#setpasswordurl)`setPasswordUrl`

The URL to [`setPasswordRequestPath`](docs_5x__reference__config__general.md#setpasswordrequestpath) if it’s set. (This wraps the path in [`siteUrl`](#siteurl).)

```
{% if setPasswordUrl %}
  <a href="{{ setPasswordUrl }}">Reset password</a>
{% endif %}
```

### [#](#sitename)`siteName`

The name of the current site, as defined in **Settings** → **Sites**.

```
<h1>{{ siteName }}</h1>
```

### [#](#siteurl)`siteUrl`

The base URL of the current site.

```
<link rel="home" href="{{ siteUrl }}">
```

To generate a URL relative to the current site, use the [`siteUrl()` function](docs_5x__reference__twig__functions.md#siteurl).

### [#](#systemname)`systemName`

The **System Name**, as defined in **Settings** → **General**.

### [#](#today)`today`

A [DateTime  (opens new window)](http://php.net/manual/en/class.datetime.php) object in the system’s timezone, set to midnight (00:00 in 24-hour time, or 12:00AM in 12-hour) of the *current* day.

### [#](#tomorrow)`tomorrow`

A [DateTime  (opens new window)](http://php.net/manual/en/class.datetime.php) object in the system’s timezone, set to midnight (00:00 in 24-hour time, or 12:00AM in 12-hour) of the *next* day.

### [#](#view)`view`

A reference to the [craft\web\View  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html) instance that is driving the template.

### [#](#yesterday)`yesterday`

A [DateTime  (opens new window)](http://php.net/manual/en/class.datetime.php) object in the system’s timezone, set to midnight (00:00 in 24-hour time, or 12:00AM in 12-hour) of the *previous* day.

## [#](#php-constants-equivalents)PHP Constants + Equivalents

Twig doesn’t distinguish between variables and constants, nor does it expose PHP’s global constants for use in templates (except via the `constant()` function, discussed below). However, Craft exposes a few that make it easier to work with built-in features.

| Variable | Description |
| --- | --- |
| [POS\_BEGIN](#pos-begin) | The [craft\web\View::POS\_BEGIN  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view#constants.html) constant. |
| [POS\_END](#pos-end) | The [craft\web\View::POS\_END  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view#constants.html) constant. |
| [POS\_HEAD](#pos-head) | The [craft\web\View::POS\_HEAD  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view#constants.html) constant. |
| [POS\_LOAD](#pos-load) | The [craft\web\View::POS\_LOAD  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view#constants.html) constant. |
| [POS\_READY](#pos-ready) | The [craft\web\View::POS\_READY  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view#constants.html) constant. |
| [SORT\_ASC](#sort-asc) | The `SORT_ASC` PHP constant. |
| [SORT\_DESC](#sort-desc) | The `SORT_DESC` PHP constant. |
| [SORT\_FLAG\_CASE](#sort-flag-case) | The `SORT_FLAG_CASE` PHP constant. |
| [SORT\_LOCALE\_STRING](#sort-locale-string) | The `SORT_LOCALE_STRING` PHP constant. |
| [SORT\_NATURAL](#sort-natural) | The `SORT_NATURAL` PHP constant. |
| [SORT\_NUMERIC](#sort-numeric) | The `SORT_NUMERIC` PHP constant. |
| [SORT\_REGULAR](#sort-regular) | The `SORT_REGULAR` PHP constant. |
| [SORT\_STRING](#sort-string) | The `SORT_STRING` PHP constant. |

Other constants are accessible with the [`constant()` function  (opens new window)](https://twig.symfony.com/doc/3.x/functions/constant.html). Pass a string representing the way you would access it in PHP, including (when applicable) the fully-qualified, properly-escaped class name:

```
{# You can fetch native PHP constants... #}
{{ constant('PHP_VERSION') }}

{# ...constants defined by Craft... #}
{{ constant('CRAFT_BASE_PATH') }}

{# ...and even class constants: #}
{{ constant('craft\\elements\\Entry::STATUS_LIVE') }}
```

### [#](#pos-begin)`POS_BEGIN`

Twig-facing copy of the [craft\web\View::POS\_BEGIN  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view#constants.html) constant. Used in conjunction with the registration of JS and HTML fragments to place them at the *beginning* of the `<body>` element in the rendered page:

```
{% set js %}
  console.log('Hello, Craft!');
{% endset %}

{% do view.registerJs(js, POS_BEGIN) %}
```

### [#](#pos-end)`POS_END`

Twig-facing copy of the [craft\web\View::POS\_END  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view#constants.html) constant. Used in conjunction with the registration of JS and HTML fragments to place them at the *end* of the `<body>` element in the rendered page:

```
{% set js %}
  console.log('Goodbye, Craft!');
{% endset %}

{% do view.registerJs(js, POS_END) %}
```

### [#](#pos-head)`POS_HEAD`

Twig-facing copy of the [craft\web\View::POS\_HEAD  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view#constants.html) constant. Used in conjunction with the registration of JS and HTML fragments to place them at the end of the `<head>` element in the rendered page:

```
{% set js %}
  console.log('Where am I?!');
{% endset %}

{% do view.registerJs(js, POS_HEAD) %}
```

### [#](#pos-load)`POS_LOAD`

Twig-facing copy of the [craft\web\View::POS\_LOAD  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view#constants.html) constant. Used only for registering JS fragments, wrapping the code in a jQuery “load” handler:

TemplateOutput

```
{% set js %}
  console.log('Page has finished loading.');
{% endset %}

{% do view.registerJs(js, POS_LOAD) %}
```

```
jQuery(window).on('load', function () {
  console.log('Page has finished loading.');
});
```

Using `POS_LOAD` with `view.registerJs()` causes Craft to include its own copy of jQuery in the page.

### [#](#pos-ready)`POS_READY`

Twig-facing copy of the [craft\web\View::POS\_READY  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view#constants.html) constant. Used in the same way as `POS_LOAD`, but passes the script body to jQuery’s [ready  (opens new window)](https://api.jquery.com/ready/) handler:

```
jQuery(function ($) {
  console.log('DOM is ready.');
});
```

### [#](#sort-asc)`SORT_ASC`

Twig-facing copy of the `SORT_ASC` PHP constant.

### [#](#sort-desc)`SORT_DESC`

Twig-facing copy of the `SORT_DESC` PHP constant.

### [#](#sort-flag-case)`SORT_FLAG_CASE`

Twig-facing copy of the `SORT_FLAG_CASE` PHP constant.

### [#](#sort-locale-string)`SORT_LOCALE_STRING`

Twig-facing copy of the `SORT_LOCALE_STRING` PHP constant.

### [#](#sort-natural)`SORT_NATURAL`

Twig-facing copy of the `SORT_NATURAL` PHP constant.

### [#](#sort-numeric)`SORT_NUMERIC`

Twig-facing copy of the `SORT_NUMERIC` PHP constant.

### [#](#sort-regular)`SORT_REGULAR`

Twig-facing copy of the `SORT_REGULAR` PHP constant.

### [#](#sort-string)`SORT_STRING`

Twig-facing copy of the `SORT_STRING` PHP constant.

## [#](#automatically-loaded-elements)Automatically Loaded Elements

Craft makes some elements available to all templates.

### [#](#global-sets)Global Sets

Each of your site’s [global sets](docs_5x__reference__element-types__globals.md) will be available to your templates as global variables, named the same as their handle.

They will be represented as [craft\elements\GlobalSet  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-globalset.html) objects.

```
<p>{{ companyInfo.companyName }} was established in {{ companyInfo.yearEstablished }}.</p>
```

### [#](#singles)Singles

Your [single section](docs_5x__reference__element-types__entries.md#singles) entries can also be loaded automatically by setting [preloadSingles](docs_5x__reference__config__general.md#preloadsingles) to `true`. This makes them available by handle in all Twig contexts, just as global sets are. For example, if you had an “About Us” single with the handle `about`, you could access content from that entry in your footer, without setting up a query:

```
<footer>
  &copy;{{ now|date('Y') }}
  {{ about.phoneNumber }}
</footer>

::: tip
When you convert a global set to a single using the [`entrify/global-set` command](../cli.md#entrify-global-set), template references should remain compatible, so long as <config5:preloadSingles> is enabled.
:::

### Other Elements

When an element’s URI is requested, Craft automatically loads that element into the Twig environment before rendering the template defined in the [element type](../../system/elements.md)’s settings.

For [entries](../element-types/entries.md), the variable is always named `entry`; for [categories](../element-types/categories.md), `category`. Element types provided by plugins may obey other conventions!
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/twig/global-variables.md)
