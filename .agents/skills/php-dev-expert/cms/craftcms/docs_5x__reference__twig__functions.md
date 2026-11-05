# Functions | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/twig/functions

---

# Functions

- ### On this Page

  - [actionInput](docs_5x__reference__twig__functions.md#actioninput)
  - [actionUrl](docs_5x__reference__twig__functions.md#actionurl)
  - [alias](docs_5x__reference__twig__functions.md#alias)
  - [attr](docs_5x__reference__twig__functions.md#attr)
  - [beginBody](docs_5x__reference__twig__functions.md#beginbody)
  - [block](docs_5x__reference__twig__functions.md#block)
  - [canCreateDrafts](docs_5x__reference__twig__functions.md#cancreatedrafts)
  - [canDelete](docs_5x__reference__twig__functions.md#candelete)
  - [canDeleteForSite](docs_5x__reference__twig__functions.md#candeleteforsite)
  - [canDuplicate](docs_5x__reference__twig__functions.md#canduplicate)
  - [canSave](docs_5x__reference__twig__functions.md#cansave)
  - [canView](docs_5x__reference__twig__functions.md#canview)
  - [ceil](docs_5x__reference__twig__functions.md#ceil)
  - [className](docs_5x__reference__twig__functions.md#classname)
  - [clone](docs_5x__reference__twig__functions.md#clone)
  - [collect](docs_5x__reference__twig__functions.md#collect)
  - [combine](docs_5x__reference__twig__functions.md#combine)
  - [configure](docs_5x__reference__twig__functions.md#configure)
  - [constant](docs_5x__reference__twig__functions.md#constant)
  - [cpUrl](docs_5x__reference__twig__functions.md#cpurl)
  - [create](docs_5x__reference__twig__functions.md#create)
  - [csrfInput](docs_5x__reference__twig__functions.md#csrfinput)
  - [dataUrl](docs_5x__reference__twig__functions.md#dataurl)
  - [date](docs_5x__reference__twig__functions.md#date)
  - [dump](docs_5x__reference__twig__functions.md#dump)
  - [encodeUrl](docs_5x__reference__twig__functions.md#encodeurl)
  - [endBody](docs_5x__reference__twig__functions.md#endbody)
  - [entryType](docs_5x__reference__twig__functions.md#entrytype)
  - [expression](docs_5x__reference__twig__functions.md#expression)
  - [failMessageInput](docs_5x__reference__twig__functions.md#failmessageinput)
  - [fieldValueSql](docs_5x__reference__twig__functions.md#fieldvaluesql)
  - [floor](docs_5x__reference__twig__functions.md#floor)
  - [getenv](docs_5x__reference__twig__functions.md#getenv)
  - [gql](docs_5x__reference__twig__functions.md#gql)
  - [head](docs_5x__reference__twig__functions.md#head)
  - [heading or h](docs_5x__reference__twig__functions.md#heading-or-h)
  - [hiddenInput](docs_5x__reference__twig__functions.md#hiddeninput)
  - [include](docs_5x__reference__twig__functions.md#include)
  - [input](docs_5x__reference__twig__functions.md#input)
  - [max](docs_5x__reference__twig__functions.md#max)
  - [min](docs_5x__reference__twig__functions.md#min)
  - [ol](docs_5x__reference__twig__functions.md#ol)
  - [parseBooleanEnv](docs_5x__reference__twig__functions.md#parsebooleanenv)
  - [parseEnv](docs_5x__reference__twig__functions.md#parseenv)
  - [plugin](docs_5x__reference__twig__functions.md#plugin)
  - [randomString](docs_5x__reference__twig__functions.md#randomstring)
  - [raw](docs_5x__reference__twig__functions.md#raw)
  - [redirectInput](docs_5x__reference__twig__functions.md#redirectinput)
  - [renderObjectTemplate](docs_5x__reference__twig__functions.md#renderobjecttemplate)
  - [seq](docs_5x__reference__twig__functions.md#seq)
  - [shuffle](docs_5x__reference__twig__functions.md#shuffle)
  - [siteUrl](docs_5x__reference__twig__functions.md#siteurl)
  - [source](docs_5x__reference__twig__functions.md#source)
  - [successMessageInput](docs_5x__reference__twig__functions.md#successmessageinput)
  - [svg](docs_5x__reference__twig__functions.md#svg)
  - [tag](docs_5x__reference__twig__functions.md#tag)
  - [ul](docs_5x__reference__twig__functions.md#ul)
  - [url](docs_5x__reference__twig__functions.md#url)
  - [uuid](docs_5x__reference__twig__functions.md#uuid)

The following [functions  (opens new window)](https://twig.symfony.com/doc/3.x/templates.html#functions) are available to Twig templates in Craft:

| Function | Description |
| --- | --- |
| [actionInput](#actioninput) | Outputs a hidden `action` input. |
| [actionUrl](#actionurl) | Generates a controller action URL. |
| [alias](#alias) | Parses a string as an alias. |
| [attr](#attr) | Generates HTML attributes. |
| [attribute  (opens new window)](https://twig.symfony.com/doc/3.x/functions/attribute.html) | Accesses a dynamic attribute of a variable. |
| [beginBody](#beginbody) | Outputs scripts and styles that were registered for the “begin body” position. |
| [block  (opens new window)](https://twig.symfony.com/doc/3.x/functions/block.html) | Prints a block’s output. |
| [canCreateDrafts](#cancreatedrafts)  [canDelete](#candelete)  [canDeleteForSite](#candeleteforsite)  [canDuplicate](#canduplicate)  [canSave](#cansave)  [canView](#canview) | Check permissions for a given element. |
| [ceil](#ceil) | Rounds a number up. |
| [className](#classname) | Returns the fully qualified class name of a given object. |
| [clone](#clone) | Clones an object. |
| [collect](#collect) | Returns a new collection. |
| [combine](#combine) | Combines two arrays into one. |
| [configure](#configure) | Sets attributes on the passed object. |
| [constant  (opens new window)](https://twig.symfony.com/doc/3.x/functions/constant.html) | Returns the constant value for a given string. |
| [cpUrl](#cpurl) | Generates a control panel URL. |
| [create](#create) | Creates a new object. |
| [csrfInput](#csrfinput) | Returns a hidden CSRF token input. |
| [cycle  (opens new window)](https://twig.symfony.com/doc/3.x/functions/cycle.html) | Cycles on an array of values. |
| [dataUrl](#dataurl) | Outputs an asset or file as a base64-encoded data URL. |
| [date](#date) | Creates a date. |
| [dump](#dump) | Dumps information about a variable. |
| [encodeUrl](#encodeurl) | Encodes and unencoded components of a URL. |
| [endBody](#endbody) | Outputs scripts and styles that were registered for the “end body” position. |
| [entryType](#entrytype) | Gets an entry type definition by its handle. |
| [expression](#expression) | Creates a database expression object. |
| [failMessageInput](#failmessageinput) | Outputs a hidden `failMessage` input. |
| [fieldValueSql](#fieldvaluesql) | Generates an SQL expression for accessing specific fields in elements’ JSON content column. |
| [floor](#floor) | Rounds a number down. |
| [getenv](#getenv) | Returns the value of an environment variable. |
| [gql](#gql) | Executes a GraphQL query against the full schema. |
| [head](#head) | Outputs scripts and styles that were registered for the “head” position. |
| [heading](#heading) | Outputs an HTML heading tag. |
| [hiddenInput](#hiddeninput) | Outputs a hidden input. |
| [include  (opens new window)](https://twig.symfony.com/doc/3.x/functions/include.html) | Returns the rendered content of a template. |
| [input](#input) | Outputs an HTML input. |
| [max  (opens new window)](https://twig.symfony.com/doc/3.x/functions/max.html) | Returns the biggest value in an array. |
| [min  (opens new window)](https://twig.symfony.com/doc/3.x/functions/min.html) | Returns the lowest value in an array. |
| [ol](#ol) | Outputs an array of items as an ordered list. |
| [parent  (opens new window)](https://twig.symfony.com/doc/3.x/functions/parent.html) | Returns the parent block’s output. |
| [parseBooleanEnv](#parsebooleanenv) | Parses a string as an environment variable or alias having a boolean value. |
| [parseEnv](#parseenv) | Parses a string as an environment variable or alias. |
| [plugin](#plugin) | Returns a plugin instance by its handle. |
| [random  (opens new window)](https://twig.symfony.com/doc/3.x/functions/random.html) | Returns a random value. |
| [randomString](#randomstring) | Generates a string of random characters. |
| [range  (opens new window)](https://twig.symfony.com/doc/3.x/functions/range.html) | Returns a list containing an arithmetic progression of integers. |
| [raw](#raw) | Wraps the given string in a `Twig\Markup` object to prevent it from getting HTML-encoded when output. |
| [redirectInput](#redirectinput) | Outputs a hidden `redirect` input. |
| [renderObjectTemplate](#renderobjecttemplate) | Renders an [object template](docs_5x__system__object-templates.md). |
| [seq](#seq) | Outputs the next or current number in a sequence. |
| [shuffle](#shuffle) | Randomizes the order of the items in an array. |
| [siteUrl](#siteurl) | Generates a front-end URL. |
| [source](#source) | Returns the content of a template without rendering it. |
| [successMessageInput](#successmessageinput) | Outputs a hidden `successMessage` input. |
| [svg](#svg) | Outputs an SVG document. |
| [tag](#tag) | Outputs an HTML tag. |
| [template\_from\_string  (opens new window)](https://twig.symfony.com/doc/3.x/functions/template_from_string.html) | Loads a template from a string. |
| [ul](#ul) | Outputs an array of items as an unordered list. |
| [url](#url) | Generates a URL. |
| [uuid](#uuid) | Generates a UUID. |

## [#](#actioninput)`actionInput`

A shortcut for outputting a hidden input used to route a POST request to a particular controller action. This is effectively the same as writing `<input type="hidden" name="action" value="controller/action/route">` directly into a template.

```
{{ actionInput('users/save-user') }}
```

You can optionally set additional attributes on the tag by passing an `options` argument.

```
{{ actionInput('users/save-user', {
  id: 'action-input'
}) }}
```

## [#](#actionurl)`actionUrl`

Returns a controller action URL, automatically accounting for relative vs. absolute format and the active [actionTrigger](docs_5x__reference__config__general.md#actiontrigger) setting.

### [#](#arguments)Arguments

The `actionUrl()` function has the following arguments:

- **`path`** – The path that the resulting URL should point to on your site. It will be appended to your base site URL.
- **`params`** – Any query string parameters that should be appended to the URL. This can be either a string (e.g. `'foo=1&bar=2'`) or a [hash](docs_5x__development__twig.md#hashes) (e.g. `{ foo: '1', bar: '2' }`).
- **`scheme`** – Which scheme the URL should use (`'http'` or `'https'`). The default value depends on whether the current request is served over SSL or not. If not, then the scheme in your Site URL will be used; if so, then `https` will be used.

## [#](#alias)`alias`

Passes a string through [Craft::getAlias()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-baseyii#getAlias()-detail), which will check if the string begins with an [alias  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/concept-aliases). (See [Configuration](docs_5x__configure.md#aliases) for more info.)

```
<img src="{{ alias('@assetBaseUrl/images/logo.png') }}">
```

## [#](#attr)`attr`

Generates a list of HTML attributes based on the given [hash](docs_5x__development__twig.md#hashes), using [yii\helpers\BaseHtml::renderTagAttributes()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-helpers-basehtml#renderTagAttributes()-detail).

```
{% set myAttributes = {
  class: ['one', 'two'],
  disabled: true,
  readonly: false,
  data: {
    baz: 'Escape this "',
    qux: {
      some: ['data', '"quoted"']
    }
  },
  style: {
    'background-color': 'red',
    'font-size': '20px'
  },
} %}

<div {{ attr(myAttributes) }}></div>
```

Attribute values are HTML-encoded automatically:

```
<div {{ attr({ title: 'Greetings & Salutations' }) }}></div>
{# Output: <div title="Greetings &amp; Salutations"> #}
```

## [#](#beginbody)`beginBody`

Outputs any scripts and styles that were registered for the “begin body” position. It should be placed right after your `<body>` tag.

```
<body>
  {{ beginBody() }}

  <h1>{{ page.name }}</h1>
  {{ page.body }}
</body>
```

## [#](#block)`block`

Prints a block’s output.

This works identically to Twig’s core [`block`  (opens new window)](https://twig.symfony.com/doc/3.x/functions/block.html) function.

## [#](#cancreatedrafts)`canCreateDrafts`

Checks whether the current user (or a specific user, when provided) can create drafts from the passed element.

```
{% if canCreateDrafts(entry) %}
  <a href="{{ entry.getCpEditUrl() }}">Edit</a>
{% endif %}
```

## [#](#candelete)`canDelete`

Checks whether the current user (or a specific user, when provided) can delete the passed element.

```
{% if canDelete(entry) %}
  <a href="{{ entry.getCpEditUrl() }}">Edit</a>
{% endif %}
```

## [#](#candeleteforsite)`canDeleteForSite`

Checks whether the current user (or a specific user, when provided) can delete the passed element from the site it was loaded in.

```
{% if canDeleteForSite(entry) %}
  <a href="{{ entry.getCpEditUrl() }}">Edit</a>
{% endif %}
```

## [#](#canduplicate)`canDuplicate`

Checks whether the current user (or a specific user, when provided) can duplicate the passed element.

```
{% if canDuplicate(entry) %}
  <a href="{{ entry.getCpEditUrl() }}">Edit</a>
{% endif %}
```

## [#](#cansave)`canSave`

Checks whether the current user (or a specific user, when provided) can save the passed element.

```
{% if canSave(entry) %}
  <a href="{{ entry.getCpEditUrl() }}">Edit</a>
{% endif %}
```

## [#](#canview)`canView`

Checks whether the current user (or a specific user, when provided) can view the passed element within the control panel.

```
{% if canView(entry) %}
  <a href="{{ entry.getCpEditUrl() }}">Edit</a>
{% endif %}
```

## [#](#ceil)`ceil`

Rounds a number up.

```
{{ ceil(42.1) }}
{# Output: 43 #}
```

## [#](#classname)`className`

Returns the fully qualified class name of a given object.

```
{% set class = className(entry) %}
{# Result: 'craft\\elements\\Entry' #}
```

## [#](#clone)`clone`

Clones a given object.

```
{% set query = craft.entries().section('news') %}
{% set articles = clone(query).type('articles') %}
```

## [#](#collect)`collect`

Returns a new [collection](docs_5x__development__collections.md).

```
{% set collection = collect(['a', 'b', 'c']) %}
```

## [#](#combine)`combine`

Combines two arrays into one, using the first array to define the keys, and the second array to define the values.

```
{% set arr1 = ['a', 'b', 'c'] %}
{% set arr2 = ['foo', 'bar', 'baz'] %}
{% set arr3 = combine(arr1, arr2) %}
{# arr3 will now be `{a: 'foo', b: 'bar', c: 'baz'}` #}
```

## [#](#configure)`configure`

Passes through the behavior of the `Craft::configure()` method inherited from [`Yii::configure()`  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-baseyii#configure()-detail). It’s similar to [`create`](#create) in that it applies attributes to an object, but instead of creating new instances it accepts an existing object and modifies it.

```
{# Modify an `EntryQuery` object set up by a relational field: #}
{% set myRelatedEntries = configure(entry.myEntriesField, {
  section: 'blog'
}).all() %}
```

`configure()` *can* be used to set a model or element’s attributes—but we don’t generally recommend this, as templates are intended to present content rather than modify it:

```
{% do configure(entry, { title: 'New Title' }) %}
{% do craft.app.elements.saveElement(entry) %}
```

## [#](#constant)`constant`

Returns the constant value for a given string.

This works identically to Twig’s core [`constant`  (opens new window)](https://twig.symfony.com/doc/3.x/functions/constant.html) function.

## [#](#cpurl)`cpUrl`

Returns a control panel URL, automatically accounting for relative vs. absolute format and the active [cpTrigger](docs_5x__reference__config__general.md#cptrigger) setting.

```
<a href="{{ cpUrl('settings') }}">Visit control panel settings</a>
```

### [#](#arguments-2)Arguments

The `cpUrl()` function has the following arguments:

- **`path`** – The path that the resulting URL should point to on your site. It will be appended to your base site URL.
- **`params`** – Any query string parameters that should be appended to the URL. This can be either a string (e.g. `'foo=1&bar=2'`) or a [hash](docs_5x__development__twig.md#hashes) (e.g. `{foo:'1', bar:'2'}`).
- **`scheme`** – Which scheme the URL should use (`'http'` or `'https'`). The default value depends on whether the current request is served over SSL or not. If not, then the scheme in your Site URL will be used; if so, then `https` will be used.

## [#](#create)`create`

Creates a new object instance based on a given class name or object configuration. See [Yii::createObject()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii#createObject()-detail) for a full explanation of supported arguments.

```
{# Pass in a class name #}
{% set cookie = create('yii\\web\\Cookie') %}

{# Or a full object configuration hash #}
{% set cookie = create({
  class: 'yii\\web\\cookie',
  name: 'foo',
  value: 'bar'
}) %}
```

## [#](#csrfinput)`csrfInput`

Renders a CSRF token `input` element for use in an HTML form. All sites that have CSRF protection enabled must include this in each [form](docs_5x__development__forms.md) that makes a POST request.

UsageOutput

```
{{ csrfInput() }}
```

```
<input type="hidden" name="CRAFT_CSRF_TOKEN" value="MfVs9Nyp33VKpXH7S0eUZZxy74Dw25VUYHGti-(...)">
```

You can set additional attributes on the rendered tag by passing an `options` argument:

```
{{ csrfInput({
  id: 'my-csrf-input',
}) }}
```

The output of `csrfInput()` should not be cached—statically, or using [template caches](docs_5x__reference__twig__tags.md#cache).

Craft automatically sends [`no-cache` headers  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-response.html#method-setnocacheheaders) when generating or outputting a CSRF token.  [5.3.0+](https://github.com/craftcms/cms/blob/5.3.0/CHANGELOG.md "We began sending automatic no-cache headers in Craft 5.3.0.")

A special `async` key in the passed hash allows you to override the global [asyncCsrfInputs](docs_5x__reference__config__general.md#asynccsrfinputs) setting for a single input  [5.1.0+](https://github.com/craftcms/cms/blob/5.1.0/CHANGELOG.md "The asyncCsrfInputs setting was first available in version 5.1.0 of Craft."):

```
{{ csrfInput({
  async: true,
}) }}
```

Asynchronous CSRF inputs *are* cacheable, and therefore no headers are sent—but other features of the page (including other `csrfInput()` calls) can still cause no-cache headers to be sent.

Craft outputs a placeholder element, and registers a snippet of JavaScript that requests a token over Ajax, once the page has loaded in the client. Only one request is made, regardless of the number of inputs on the page.

## [#](#dataurl)`dataUrl`

Outputs an asset or file as a base64-encoded [data URL  (opens new window)](https://developer.mozilla.org/en-US/docs/Web/HTTP/Basics_of_HTTP/Data_URIs). You can pass it an [craft\elements\Asset  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-asset.html) object or a file path (optionally using an [alias](docs_5x__configure.md#aliases)).

```
{# Asset object `myLogoAsset` #}
<img src="{{ dataUrl(myLogoAsset) }}" />

{# File path, optionally using an alias #}
<img src="{{ dataUrl('@webroot/images/my-logo-asset.svg') }}" />

{# Output: <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjEwMCIgdmd(...)" /> #}
```

The `dataUrl()` function has the following arguments:

- **`file`** - The asset or path to a file to be encoded.
- **`mimeType`** - Optional MIME type. If omitted, the file’s MIME type will be determined automatically.

## [#](#date)`date`

Converts an argument to a date to allow comparison, like [Twig’s `date()` function  (opens new window)](https://twig.symfony.com/doc/3.x/functions/date.html).

The argument can be one of PHP’s supported [date and time formats  (opens new window)](https://www.php.net/manual/en/datetime.formats.php), or additionally a `date`/`time` array.

```
{% if date(asset.dateModified) < date('-2days') %}
  {# asset is not new #}
{% endif %}
```

A `null` or empty argument defaults to the current date:

```
{% if date() > date('2021/06/01') %}
  {# today is past June 1, 2021 #}
{% endif %}
```

Craft additionally supports passing a `date`/`time` array:

```
{% set myDate = {
  date: '2021-01-15',
  timezone: 'America/Los_Angeles',
  time: '10:57',
} %}

{% if now > date(myDate) %}
  {# today is past January 15, 2021 #}
{% endif %}
```

## [#](#dump)`dump`

Overrides Twig’s default [`dump()`  (opens new window)](https://twig.symfony.com/doc/3.x/functions/dump.html) function with one that is available in all contexts (not just when the Twig environment is in “debug” mode), and produces consistent output with the [`{% dd %}` tag](docs_5x__reference__twig__tags.md#dd).

```
{% set news = craft.entries()
  .section('news')
  .all() %}

{{ dump(news|column('title')) }}
```

## [#](#encodeurl)`encodeUrl`

Ensures a URL contains only ASCII characters. The underlying [craft\helpers\UrlHelper::encodeUrl()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-urlhelper.html#method-encodeurl) function is automatically called by Craft’s internal redirection logic. This is typically only required when using a URL in an HTTP header. Supposing we have a URL with accented characters like `https://my-project.ddev.site/pages/åbçdé`…

```
{# …unencoded output leads to garbled characters, and won’t resolve if requested: #}
{% header "X-See-Also: #{entry.url}" %}
{# -> https://my-project.ddev.site/Ã¥bÃ§dÃ©  #}

{# …but encoding the output preserves the original accented characters: #}
{% header "X-See-Also: #{encodeUrl(entry.url)}" %}
{# -> https://my-project.ddev.site/%C3%A5b%C3%A7d%C3%A9 #}
```

## [#](#endbody)`endBody`

Outputs any scripts and styles that were registered for the “end body” position. It should be placed right before your `</body>` tag.

```
<html>
  <head>
    {# ... #}
  </head>
  <body>
    <h1>{{ page.name }}</h1>
    {{ page.body }}

    {{ endBody() }}
  </body>
</html>
```

## [#](#entrytype)`entryType`

Get a reference to an entry type, by its handle:

```
{% set type = entryType('post') %}

{{ type.name }}
```

This is equivalent to using the entries service, directly:

```
{% set type = craft.app.entries.getEntryTypeByHandle('post') %}

{{ type.name }}
```

When creating entries in a [front-end form](docs_5x__development__forms.md), you can use the `entryType()` function to find the correct ID to submit (IDs can be unstable between environments, due to the way [project config](docs_5x__system__project-config.md#ids-uuids-and-handles) works):

```
<form method="post">
  {{ csrfInput() }}
  {{ actionInput('entries/save-entry') }}

  {{ hiddenInput('typeId', entryType('post').id) }}

  {# ... #}
</form>
```

## [#](#expression)`expression`

Creates and returns a new [yii\db\Expression  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-expression) object, for use in database queries.

```
{% set entries = craft.entries()
  .andWhere(expression('[[authorId]] = :authorId', {authorId: currentUser.id}))
  .all() %}
```

## [#](#failmessageinput)`failMessageInput`

Renders a hidden `input` element with a tamper-proof [failure](docs_5x__development__forms.md#failure) message.

```
<form method="post">
  {{ actionInput('users/save-user') }}
  {{ failMessageInput('Something went wrong when updating your profile.') }}

  {# ... #}
</form>
```

You can set additional attributes on the `input` tag by passing an `options` argument:

```
{{ failMessageInput('Something went wrong when updating your profile.', {
  id: 'failure-message-input'
}) }}
```

The output is equivalent to this Twig:

```
<input
  type="hidden"
  name="failMessage"
  value="{{ 'Something went wrong when updating your profile.'|hash }}">
```

Failure messages are stored in the session as [flashes](docs_5x__development__forms.md#flashes).

[Working with Forms
→

Exchange data with Craft over HTTP.](docs_5x__development__forms.md)

## [#](#fieldvaluesql)`fieldValueSql`

Generates a platform-specific SQL expression to extract a value from elements’ JSON content column.

```
{% set longestFilm = craft.entries()
  .section('films')
  .max(fieldValueSql(entryType('film'), 'runtimeMinutes')) %}
```

Craft automatically handles this for `orderBy()` and `select()` expressions, as well as when using field methods, directly:

```
{% set shortFilms = craft.entries()
  .section('films')
  .runtimeMinutes('<= 20')
  .orderBy('runtimeMinutes DESC')
  .all() %}
```

### [#](#arguments-3)Arguments

- `provider` — An object that implements `craft\base\FieldLayoutProviderInterface`, like an [entry type](docs_5x__reference__element-types__entries.md#entry-types) or [asset volume](docs_5x__reference__element-types__assets.md#volumes)—basically anything that defines a field layout.

  ```
  {# Load a field layout provider: #}
  {# set volume = craft.app.volumes.getVolumeByHandle('photos') %}
  {% set longExposures = craft.assets()
    .volume('photos')
    .andWhere('between', (fieldValueSql(volume, 'shutterSpeed')), 0.17, 1)
    .all() %}
  ```

  The provider can also be passed from an existing resource, like `entry.type`.
- `fieldHandle` — The field’s handle in the given field layout. This may be different than the field’s global definition—especially if the field is present [multiple times](docs_5x__system__fields.md#multi-instance-fields) in the layout.

## [#](#floor)`floor`

Rounds a number down.

```
{{ floor(42.9) }}
{# Output: 42 #}
```

## [#](#getenv)`getenv`

Returns the value of an environment variable, using [craft\helpers\App::env()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-app.html#method-env).

```
{{ getenv('MAPS_API_KEY') }}
```

Take care to not leak sensitive environment variables into your HTML!

## [#](#gql)`gql`

Executes a [GraphQL](docs_5x__development__graphql.md) query against the full schema.

While this can be useful for debugging GraphQL queries, most front-end templates should use [element queries](docs_5x__development__element-queries.md) to load data.
GraphQL returns plain arrays and scalar values (instead of element objects), which means you won’t have access to any methods and getters on the results—or their fields’ data.

```
{% set result = gql('{
  entries (section: "news", limit: 2, orderBy: "dateCreated DESC") {
    postDate @formatDateTime(format: "Y-m-d")
    title
    url
    typeHandle

    ... on article_Entry {
      shortDescription
      featuredImage {
        url @transform(width: 300)
        altText
      }
    }
  }
}') %}

{% for entry in result.data %}
  <h3><a href="{{ entry.url }}">{{ entry.title }}</a></h3>
  <p class="timestamp">{{ entry.postDate }}</p>

  {% set image = entry.featuredImage[0] ?? null %}
  {% if image %}
    <img class="thumb" src="{{ image.url }}" alt="{{ image.altText }}">
  {% endif %}

  {{ entry.shortDescription|markdown }}

  <p><a href="{{ entry.url }}">Continue reading…</a></p>
{% endfor %}
```

## [#](#head)`head`

Outputs any scripts and styles that were registered for the “head” position. It should be placed right before your `</head>` tag.

```
<head>
  <title>{{ siteName }}</title>
  {{ head() }}
</head>
```

## [#](#heading-or-h)`heading` or `h`

Outputs an HTML heading tag.

```
{{ heading(2', 'Hello) }}
{# Output: <h2>Hello</h2> #}
```

```
{{ h(2', 'Hello) }}
{# Output: <h2>Hello</h2> #}
```

Like [tag](#tag), you can set attributes on the tag, by replacing the second argument with a hash:

```
{{ h(2', {
  text: 'Hello',
  class: 'foo'
}) }}
{# Output: <h2 class="foo">Hello</h2> #}
```

### [#](#h1-h6)`h1`…`h6`

Additional functions are available for each specific heading level:

```
{{ h2('Hello) }}
{# Output: <h2>Hello</h2> #}
```

```
{{ h2({
  text: 'Hello',
  class: 'foo'
}) }}
{# Output: <h2 class="foo">Hello</h2> #}
```

## [#](#hiddeninput)`hiddenInput`

Generates an HTML input tag.

```
{{ hiddenInput('entryId', entry.id) }}
{# Output: <input type="hidden" name="entryId" value="100"> #}
```

You can optionally set additional attributes on the tag by passing an `options` argument.

```
{{ hiddenInput('entryId', entry.id, {
  id: 'entry-id-input'
}) }}
```

## [#](#include)`include`

Returns the rendered content of a template.

This works identically to Twig’s core [`include`  (opens new window)](https://twig.symfony.com/doc/3.x/functions/include.html) function.

## [#](#input)`input`

Generates an HTML input tag.

```
{{ input('email', 'email-input', '') }}
{# Output: <input type="email" name="email-input" value=""> #}
```

You can optionally set additional attributes on the tag by passing an `options` argument.

```
{{ input('email', 'email-input', '', {
  id: 'custom-input'
}) }}
{# Output: <input type="email" id="custom-input" name="email-input" value=""> #}
```

## [#](#max)`max`

Returns the biggest value in an array.

This works identically to Twig’s core [`max`  (opens new window)](https://twig.symfony.com/doc/3.x/functions/max.html) function.

## [#](#min)`min`

Returns the lowest value in an array.

This works identically to Twig’s core [`min`  (opens new window)](https://twig.symfony.com/doc/3.x/functions/min.html) function.

## [#](#ol)`ol`

Outputs an array of items as an ordered list.

```
{% set titles = craft.entries()
  .section('news')
  .select('title')
  .column() %}
{{ ol(titles) }}
{# Output:
<ol>
  <li>Shocking Foo</li>
  <li>You Won’t Believe This Bar</li>
  <li>Ten Baz You Can’t Live Without</li>
</ol>
#}
```

### [#](#arguments-4)Arguments

The `ol()` function has the following arguments:

- **`items`** – An array of items to be wrapped in `<li>`s. These will be HTML-encoded by default.
- **`params`** – An attributes argument where each key+value will be set as attributes on the `<ol>`, with the exception of two special options:
  - **`encode: false`** – Prevents the list items from being HTML-encoded.
  - **`itemOptions: {...}`** – Tag attributes to be applied to each of the `<li>`s.

## [#](#parsebooleanenv)`parseBooleanEnv`

Checks if a string references an environment variable (`$VARIABLE_NAME`) and returns the referenced boolean value, or `null` if a boolean value can’t be determined.

## [#](#parseenv)`parseEnv`

Checks if a string references an environment variable (`$VARIABLE_NAME`) and/or an alias (`@aliasName`), and returns the referenced value.

If the string references an environment variable with a value of `true` or `false`, a boolean value will be returned.

## [#](#plugin)`plugin`

Returns a plugin instance by its handle, or `null` if no plugin is installed and enabled with that handle.

```
{{ plugin('commerce').version }}
```

## [#](#randomstring)`randomString`

Returns a series of 36 random characters from `a` through `z`.
Pass a `length` to generate fewer or more characters.
This is a wrapper around [craft\helpers\StringHelper::randomString()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-stringhelper.html#method-randomstring), and in turn a feature of the [Stringy  (opens new window)](https://github.com/voku/Stringy) API.

```
{% set rid = "toggle-#{randomString(8)}" %}

{# -> "toggle-smqfsfgt" #}

<button aria-controls="{{ rid }}">Toggle</button>

<div id="{{ rid }}">
  {{ entry.details }}
</div>
```

The output of `randomString()` is **not** cryptographically secure, and does not guarantee uniqueness.
Use `craft.app.security.generateRandomString()` if you need a true random value.

While strings generated from the base character set (`a-z`) are generally safe to use as HTML `id`s, class names, and CSS identifiers; the extended character set includes symbols that should be [escaped](docs_5x__development__twig.md#manual-escaping) in most contexts.

### [#](#arguments-5)Arguments

The signature of `randomString()` is the same as its [helper function  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-stringhelper.html#method-randomstring) in PHP:

- **`length`** — An integer that determines the number of characters returned.
- **`extendedChars`** — Whether to allow additional special characters, including uppercase letters, numbers, punctuation, etc.

## [#](#raw)`raw`

Wraps the given string in a `Twig\Markup` object to prevent it from getting HTML-encoded when output.

```
{% set html = raw('<p>Don’t encode me.</p>') %}
{{ html }}
```

This works similarly to the [raw  (opens new window)](https://twig.symfony.com/doc/3.x/filters/raw.html) filter, except that Twig will remember not to escape the HTML even if the variable is passed to another template/macro, whereas `|raw` filters only have an effect if used directly in an output tag.

## [#](#redirectinput)`redirectInput`

Output an HTML input equivalent to `<input type="hidden" name="redirect" value="{{ url|hash }}">`, for use in [forms](docs_5x__development__forms.md) that POST data to Craft or a plugin.

```
{{ redirectInput(url) }}
```

The URL is typically parsed as an object template, meaning dynamic redirects are possible, based on the data being manipulated.

You can optionally set additional attributes on the resulting `input` tag by passing an `options` argument:

```
{{ redirectInput(url, {
  id: 'redirect-input'
}) }}
```

Don’t include user-provided data in redirection URLs, directly (via interpolation in a template) or indirectly (rendered in an object template).

## [#](#renderobjecttemplate)`renderObjectTemplate`

Evaluates a string as an [object template](docs_5x__system__object-templates.md), using the provided element, model, or hash.

```
{{ renderObjectTemplate('👋 Hi, {fullName}!', currentUser) }}
{# Output: 👋 Hi, Oli! #}

{{ renderObjectTemplate('✨ {foo}', { foo: "I’m a made-up hash!" }) }}
{# Output: ✨ I’m a made-up hash! #}
```

Do not pass user-supplied templates to the `renderObjectTemplate()` function!

## [#](#seq)`seq`

Outputs the next or current number in a sequence, defined by `name`:

```
<p>This entry has been read {{ seq('hits:' ~ entry.id) }} times.</p>
```

Each time the function is called, the given sequence will be automatically incremented.

You can optionally have the number be zero-padded to a certain length.

```
{{ now|date('Y') ~ '-' ~ seq('orderNumber:' ~ now|date('Y'), 5) }}
{# Output: 2018-00001 #}
```

To view the current number in the sequence without incrementing it, set the `next` argument to `false`.

```
<h5><a href="{{ entry.url }}">{{ entry.title }}</a></h5>
<p>{{ seq('hits:' ~ entry.id, next=false) }} views</p>
```

## [#](#shuffle)`shuffle`

Randomizes the order of the elements within an array.

```
{% set promos = craft.entries().section('promos').all() %}
{% set shuffledPromos = shuffle(promos) %}

{% for promo in shuffledPromos %}
  <div class="promo {{ promo.slug }}">
    <h3>{{ promo.title }}</h3>
    <p>{{ promo.description }}</p>
    <a class="cta" href="{{ promo.ctaUrl }}">{{ promo.ctaLabel }}</a>
  </div>
{% endfor %}
```

## [#](#siteurl)`siteUrl`

Similar to [url()](#url), except *only* for creating URLs to pages on your site.

```
<a href="{{ siteUrl('company/contact') }}">Contact Us</a>
```

### [#](#arguments-6)Arguments

The `siteUrl()` function has the following arguments:

- **`path`** – The path that the resulting URL should point to on your site. It will be appended to the current site’s **Base URL**.
- **`params`** – Any query string parameters that should be appended to the URL. This can be either a string (e.g. `'foo=1&bar=2'`) or a [hash](docs_5x__development__twig.md#hashes) (e.g. `{ foo: 1, bar: 2 }`).
- **`scheme`** – Which scheme the URL should use (`'http'` or `'https'`). The default value depends on whether the current request is served over SSL.
- **`siteId`** – The ID of the site that the URL should point to, if different from the current site.

## [#](#source)`source`

Returns the content of a template without rendering it.

This works identically to Twig’s core [`source`  (opens new window)](https://twig.symfony.com/doc/3.x/functions/source.html) function.

## [#](#successmessageinput)`successMessageInput`

Renders a hidden `input` element with a tamper-proof [success](docs_5x__development__forms.md#success) message.

```
<form method="post">
  {{ actionInput('users/save-user') }}
  {{ successMessageInput('Your profile has been updated!') }}

  {# ... #}
</form>
```

You can set additional attributes on the `input` tag by passing an `options` argument:

```
{{ successMessageInput('Your profile has been updated!', {
  id: 'success-message-input'
}) }}
```

The output is equivalent to this Twig:

```
<input
  type="hidden"
  name="successMessage"
  value="{{ 'Your profile has been updated!'|hash }}">
```

Success messages are stored in the session as [flashes](docs_5x__development__forms.md#flashes).

[Working with Forms
→

Exchange data with Craft over HTTP.](docs_5x__development__forms.md)

## [#](#svg)`svg`

Outputs an SVG document.

You can pass the following things into it:

- An SVG file path.

  ```
  {{ svg('@webroot/icons/lemon.svg') }}
  ```
- A [craft\elements\Asset  (opens new window)](https://docs.craftcms.com/api/v5/craft-elements-asset.html) object, such as one pulled in from an [Assets field](docs_5x__reference__field-types__assets.md).

  ```
  {% set image = entry.myAssetsField.one() %}
  {% if image and image.extension == 'svg' %}
    {{ svg(image) }}
  {% endif %}
  ```
- Raw SVG markup.

  ```
  {% set image = include('_includes/icons/lemon.svg') %}
  {{ svg(image) }}
  ```

By default, if you pass an asset or raw markup into the function, the SVG will be sanitized of potentially malicious scripts using [svg-sanitizer  (opens new window)](https://github.com/darylldoyle/svg-sanitizer), and any IDs or class names within the document will be namespaced so they don’t conflict with other IDs or class names in the DOM. You can disable those behaviors using the `sanitize` and `namespace` arguments:

```
{{ svg(image, sanitize=false, namespace=false) }}
```

Images passed via path/alias will *not* automatically be sanitized and namespaced.

You can also specify a custom class name that should be added to the root `<svg>` node using the [attr](docs_5x__reference__twig__filters.md#attr) filter:

```
{{ svg('@webroot/icons/lemon.svg')|attr({ class: 'lemon-icon' }) }}
```

Consider caching the output, especially if you’re loading SVG files from a remote volume, so Craft doesn’t download the file each time your template is rendered.

## [#](#tag)`tag`

Outputs an HTML tag.

```
{{ tag('div', 'Hello) }}
{# Output: <div>Hello</div> #}
```

To set attributes on the tag, replace the second argument with a hash:

```
{{ tag('div', {
  text: 'Hello',
  class: 'foo'
}) }}
{# Output: <div class="foo">Hello</div> #}
```

The tag contents will be automatically HTML-encoded. If that’s not desired, you can specify a `html` key instead.

Be sure you trust any input you provide via `html` since it could be an XSS (cross-site scripting) attack vector. It’s safer to use `text` wherever possible.

```
{{ tag('div', {
  html: 'Hello<br>world'
}) }}
{# Output: <div>Hello<br>world</div> #}
```

All other keys passed to the second argument will be set as attributes on the tag, using [yii\helpers\BaseHtml::renderTagAttributes()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-helpers-basehtml#renderTagAttributes()-detail).

If an attribute is set to `true`, it will be added without a value.

```
{{ tag('input', {
  id: 'foo',
  name: 'bar',
  required: true
}) }}
{# Output: <input id="foo" name="bar" required> #}
```

Any attribute set to `null` or `false` will be omitted.

Attribute values are HTML-encoded automatically:

```
{{ tag('input', {
  name: 'bar',
  value: 'Foobar & Baz',
}) }}
{# Output: <input name="bar" value="Foobar &amp; Baz"> #}
```

## [#](#ul)`ul`

Outputs an array of items as an unordered list.

```
{% set titles = craft.entries()
  .section('news')
  .select('title')
  .column() %}
{{ ul(titles) }}
{# Output:
<ul>
  <li>Shocking Foo</li>
  <li>You Won’t Believe This Bar</li>
  <li>Ten Baz You Can’t Live Without</li>
</ul>
#}
```

### [#](#arguments-7)Arguments

The `ul()` function has the following arguments:

- **`items`** – An array of items to be wrapped in `<li>`s. These will be HTML-encoded by default.
- **`params`** – An attributes argument where each key+value will be set as attributes on the `<ul>`, with the exception of two special options:
  - **`encode: false`** – Prevents the list items from being HTML-encoded.
  - **`itemOptions: {...}`** – Tag attributes to be applied to each of the `<li>`s.

## [#](#url)`url`

Builds or modifies a URL.

```
<a href="{{ url('company/contact') }}">Contact Us</a>
```

The [`siteUrl()`](#siteurl) may be a better choice when generating internal URLs—particularly if you expect a template to be rendered in the control panel or from the command line.

### [#](#arguments-8)Arguments

The `url()` function has the following arguments:

- **`path`** –A path or absolute URL. *Paths* are appended to the current site’s **Base URL**; *absolute URLs* are adjusted according to additional arguments.
- **`params`** – Any query string parameters that should be appended to the URL. This can be either a string (e.g. `'foo=1&bar=2'`) or a [hash](docs_5x__development__twig.md#hashes) (e.g. `{ foo: 1, bar: 2 }`).
- **`scheme`** – Which scheme the URL should use (`'http'` or `'https'`). The default value depends on whether the current request is served over SSL.
- **`mustShowScriptName`** – If this is set to `true`, then the URL returned will include `index.php`, disregarding the [omitScriptNameInUrls](docs_5x__reference__config__general.md#omitscriptnameinurls) config setting. (This can be useful if the URL will be used by POST requests over Ajax, where the URL will not be shown in the browser’s address bar, and you want to avoid a possible collision with your site’s `.htaccess` file redirect.)

Using the `url()` function has advantages over hard-coding URLs in your templates:

- Generated URLs will encourage consistency by respecting settings like [addTrailingSlashesToUrls](docs_5x__reference__config__general.md#addtrailingslashestourls).
- Your site will be more portable, making it easier to do something like move to a new domain or subdomain.
- If the page has a `token` URL parameter, that token will automatically get appended to generated URLs to maintain preview context navigating around the site.

You can use the `url()` function for appending query string parameters and/or enforcing a scheme on an absolute URL:

```
{{ url('http://my-project.tld', { foo: 1 }, 'https') }}
{# Output: "https://my-project.tld?foo=1" #}
```

## [#](#uuid)`uuid`

Generates a v4 UUID.

```
{{ uuid() }}
{# -> 77b2b7f2-9ff2-450c-a2e8-d772fc8cdddc #}
```

UUIDs are generally *not* safe for use as HTML `id`s or CSS identifiers.
If you need a character-only string (and the exact format isn’t important), consider using [`randomString()`](#randomstring).

The implementation of this function can be found in [craft\helpers\StringHelper::UUID()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-stringhelper.html#method-uuid).

Avoid [caching](docs_5x__reference__twig__tags.md#cache) the output of `uuid()` if its value is used for customization or analytics, as the same value may be sent to multiple clients.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/twig/functions.md)
