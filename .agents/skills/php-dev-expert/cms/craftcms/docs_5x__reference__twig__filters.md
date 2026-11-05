# Filters | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/twig/filters

---

# Filters

- ### On this Page

  - [address](docs_5x__reference__twig__filters.md#address)
  - [append](docs_5x__reference__twig__filters.md#append)
  - [ascii](docs_5x__reference__twig__filters.md#ascii)
  - [atom](docs_5x__reference__twig__filters.md#atom)
  - [attr](docs_5x__reference__twig__filters.md#attr)
  - [base64\_decode](docs_5x__reference__twig__filters.md#base64-decode)
  - [base64\_encode](docs_5x__reference__twig__filters.md#base64-encode)
  - [boolean](docs_5x__reference__twig__filters.md#boolean)
  - [camel](docs_5x__reference__twig__filters.md#camel)
  - [column](docs_5x__reference__twig__filters.md#column)
  - [contains](docs_5x__reference__twig__filters.md#contains)
  - [currency](docs_5x__reference__twig__filters.md#currency)
  - [date](docs_5x__reference__twig__filters.md#date)
  - [datetime](docs_5x__reference__twig__filters.md#datetime)
  - [diff](docs_5x__reference__twig__filters.md#diff)
  - [duration](docs_5x__reference__twig__filters.md#duration)
  - [encenc](docs_5x__reference__twig__filters.md#encenc)
  - [explodeClass](docs_5x__reference__twig__filters.md#explodeclass)
  - [explodeStyle](docs_5x__reference__twig__filters.md#explodestyle)
  - [filesize](docs_5x__reference__twig__filters.md#filesize)
  - [filter](docs_5x__reference__twig__filters.md#filter)
  - [firstWhere](docs_5x__reference__twig__filters.md#firstwhere)
  - [flatten](docs_5x__reference__twig__filters.md#flatten)
  - [float](docs_5x__reference__twig__filters.md#float)
  - [group](docs_5x__reference__twig__filters.md#group)
  - [hash](docs_5x__reference__twig__filters.md#hash)
  - [httpdate](docs_5x__reference__twig__filters.md#httpdate)
  - [id](docs_5x__reference__twig__filters.md#id)
  - [index](docs_5x__reference__twig__filters.md#index)
  - [indexOf](docs_5x__reference__twig__filters.md#indexof)
  - [integer](docs_5x__reference__twig__filters.md#integer)
  - [intersect](docs_5x__reference__twig__filters.md#intersect)
  - [json\_encode](docs_5x__reference__twig__filters.md#json-encode)
  - [json\_decode](docs_5x__reference__twig__filters.md#json-decode)
  - [kebab](docs_5x__reference__twig__filters.md#kebab)
  - [lcfirst](docs_5x__reference__twig__filters.md#lcfirst)
  - [length](docs_5x__reference__twig__filters.md#length)
  - [literal](docs_5x__reference__twig__filters.md#literal)
  - [markdown or md](docs_5x__reference__twig__filters.md#markdown-or-md)
  - [merge](docs_5x__reference__twig__filters.md#merge)
  - [money](docs_5x__reference__twig__filters.md#money)
  - [multisort](docs_5x__reference__twig__filters.md#multisort)
  - [namespace or ns](docs_5x__reference__twig__filters.md#namespace-or-ns)
  - [namespaceAttributes](docs_5x__reference__twig__filters.md#namespaceattributes)
  - [namespaceInputId](docs_5x__reference__twig__filters.md#namespaceinputid)
  - [namespaceInputName](docs_5x__reference__twig__filters.md#namespaceinputname)
  - [number](docs_5x__reference__twig__filters.md#number)
  - [parseAttr](docs_5x__reference__twig__filters.md#parseattr)
  - [parseRefs](docs_5x__reference__twig__filters.md#parserefs)
  - [pascal](docs_5x__reference__twig__filters.md#pascal)
  - [percentage](docs_5x__reference__twig__filters.md#percentage)
  - [prepend](docs_5x__reference__twig__filters.md#prepend)
  - [purify](docs_5x__reference__twig__filters.md#purify)
  - [push](docs_5x__reference__twig__filters.md#push)
  - [removeClass](docs_5x__reference__twig__filters.md#removeclass)
  - [replace](docs_5x__reference__twig__filters.md#replace)
  - [rss](docs_5x__reference__twig__filters.md#rss)
  - [snake](docs_5x__reference__twig__filters.md#snake)
  - [string](docs_5x__reference__twig__filters.md#string)
  - [time](docs_5x__reference__twig__filters.md#time)
  - [timestamp](docs_5x__reference__twig__filters.md#timestamp)
  - [translate or t](docs_5x__reference__twig__filters.md#translate-or-t)
  - [truncate](docs_5x__reference__twig__filters.md#truncate)
  - [ucfirst](docs_5x__reference__twig__filters.md#ucfirst)
  - [ucwords](docs_5x__reference__twig__filters.md#ucwords)
  - [unique](docs_5x__reference__twig__filters.md#unique)
  - [unshift](docs_5x__reference__twig__filters.md#unshift)
  - [values](docs_5x__reference__twig__filters.md#values)
  - [where](docs_5x__reference__twig__filters.md#where)
  - [widont](docs_5x__reference__twig__filters.md#widont)
  - [without](docs_5x__reference__twig__filters.md#without)
  - [withoutKey](docs_5x__reference__twig__filters.md#withoutkey)

The following [filters  (opens new window)](https://twig.symfony.com/doc/3.x/templates.html#filters) are available to Twig templates in Craft.

[Templates
→](docs_5x__development__templates.md)

| Filter | Description |
| --- | --- |
| [abs  (opens new window)](https://twig.symfony.com/doc/3.x/filters/abs.html) | Returns the absolute value of a number. |
| [address](#address) | Formats an address. |
| [append](#append) | Appends HTML to the end of another element. |
| [ascii](#ascii) | Converts a string to ASCII characters. |
| [atom](#atom) | Converts a date to an ISO-8601 timestamp. |
| [attr](#attr) | Modifies an HTML tag’s attributes. |
| [base64\_decode](#base64-decode) | Decodes a base64 string. |
| [base64\_encode](#base64-encode) | Encodes a string as base64. |
| [batch  (opens new window)](https://twig.symfony.com/doc/3.x/filters/batch.html) | Batches items in an array. |
| [boolean](#boolean) | Coerces the passed value to a boolean. |
| [camel](#camel) | Formats a string into camelCase. |
| [capitalize  (opens new window)](https://twig.symfony.com/doc/3.x/filters/capitalize.html) | Capitalizes the first character of a string. |
| [column](#column) | Returns the values from a single property or key in an array. |
| [contains](#contains) | Returns whether an array contains a nested item with a given key-value pair. |
| [convert\_encoding  (opens new window)](https://twig.symfony.com/doc/3.x/filters/convert_encoding.html) | Converts a string from one encoding to another. |
| [currency](#currency) | Formats a number as currency. |
| [date\_modify  (opens new window)](https://twig.symfony.com/doc/3.x/filters/date_modify.html) | Modifies a date. |
| [date](#date) | Formats a date. |
| [datetime](#datetime) | Formats a date with its time. |
| [default  (opens new window)](https://twig.symfony.com/doc/3.x/filters/default.html) | Returns the value or a default value if empty. |
| [diff](#diff) | Returns the difference between arrays. |
| [duration](#duration) | Builds a human-readable duration expression. |
| [encenc](#encenc) | Encrypts and base64-encodes a string. |
| [escape  (opens new window)](https://twig.symfony.com/doc/3.x/filters/escape.html) | Escapes a string. |
| [explodeClass](#explodeclass) | Converts a `class` attribute value into an array of class names. |
| [explodeStyle](#explodestyle) | Converts a `style` attribute value into an array of property name/value pairs. |
| [filesize](#filesize) | Formats a number of bytes into something else. |
| [filter](#filter) | Filters the items in an array. |
| [first  (opens new window)](https://twig.symfony.com/doc/3.x/filters/first.html) | Returns the first character/item of a string/array. |
| [firstWhere](#firstwhere) | Get the first item in an array that matches the provided predicate. |
| [flatten](#flatten) | Recursively flatten a multi-dimensional array into a single level. |
| [float](#float) | Coerces the passed value to a float. |
| [format  (opens new window)](https://twig.symfony.com/doc/3.x/filters/format.html) | Formats a string by replacing placeholders. |
| [group](#group) | Groups items in an array. |
| [hash](#hash) | Prefixes a string with a keyed-hash message authentication code (HMAC). |
| [httpdate](#httpdate) | Converts a date to the HTTP format. |
| [id](#id) | Normalizes an element ID into only alphanumeric characters, underscores, and dashes. |
| [index](#index) | Indexes the items in an array. |
| [indexOf](#indexof) | Returns the index of a given value within an array, or the position of a passed-in string within another string. |
| [integer](#integer) | Coerces the passed value to an integer. |
| [intersect](#intersect) | Returns the intersecting items of two arrays. |
| [invoke  (opens new window)](https://twig.symfony.com/doc/3.x/filters/invoke.html) | Calls a function, passing through any arguments. |
| [join  (opens new window)](https://twig.symfony.com/doc/3.x/filters/join.html) | Concatenates multiple strings into one. |
| [json\_decode](#json_decode) | JSON-decodes a value. |
| [json\_encode](#json_encode) | JSON-encodes a value. |
| [kebab](#kebab) | Formats a string into “kebab-case”. |
| [keys  (opens new window)](https://twig.symfony.com/doc/3.x/filters/keys.html) | Returns the keys of an array. |
| [last  (opens new window)](https://twig.symfony.com/doc/3.x/filters/last.html) | Returns the last character/item of a string/array. |
| [lcfirst](#lcfirst) | Lowercases the first character of a string. |
| [length](#length) | Returns the length of a string or array, or the count of a query. |
| [literal](#literal) | Escapes an untrusted string for use with element query params. |
| [lower  (opens new window)](https://twig.symfony.com/doc/3.x/filters/lower.html) | Lowercases a string. |
| [map  (opens new window)](https://twig.symfony.com/doc/3.x/filters/map.html) | Applies an arrow function to the items in an array. |
| [markdown](#markdown-or-md) | Processes a string as Markdown. |
| [merge](#merge) | Merges an array with another one. |
| [money](#money) | Outputs a value from a Money object. |
| [multisort](#multisort) | Sorts an array by one or more keys within its sub-arrays. |
| [namespace](#namespace-or-ns) | Namespaces input names and other HTML attributes, as well as CSS selectors. |
| [namespaceAttributes](#namespaceattributes) | Namespaces `id` and other HTML attributes, as well as CSS selectors. |
| [namespaceInputId](#namespaceinputid) | Namespaces an element ID. |
| [namespaceInputName](#namespaceinputname) | Namespaces an input name. |
| [nl2br  (opens new window)](https://twig.symfony.com/doc/3.x/filters/nl2br.html) | Replaces newlines with `<br>` tags. |
| [number\_format  (opens new window)](https://twig.symfony.com/doc/3.x/filters/number_format.html) | Formats numbers. |
| [number](#number) | Formats a number. |
| [parseAttr](#parseAttr) | Parses an HTML tag to find its attributes. |
| [parseRefs](#parserefs) | Parses a string for reference tags. |
| [pascal](#pascal) | Formats a string into “PascalCase”. |
| [percentage](#percentage) | Formats a percentage. |
| [prepend](#prepend) | Prepends HTML to the beginning of another element. |
| [purify](#purify) | Runs HTML code through HTML Purifier. |
| [push](#push) | Appends one or more items onto the end of an array. |
| [raw  (opens new window)](https://twig.symfony.com/doc/3.x/filters/raw.html) | Marks as value as safe for the current escaping strategy. |
| [reduce  (opens new window)](https://twig.symfony.com/doc/3.x/filters/reduce.html) | Iteratively reduces a sequence or mapping to a single value. |
| [removeClass](#removeclass) | Removes a class (or classes) from the given HTML tag. |
| [replace](#replace) | Replaces parts of a string with other things. |
| [reverse  (opens new window)](https://twig.symfony.com/doc/3.x/filters/reverse.html) | Reverses a string or array. |
| [round  (opens new window)](https://twig.symfony.com/doc/3.x/filters/round.html) | Rounds a number. |
| [rss](#rss) | Converts a date to RSS date format. |
| [slice  (opens new window)](https://twig.symfony.com/doc/3.x/filters/slice.html) | Extracts a slice of a string or array. |
| [snake](#snake) | Formats a string into “snake\_case”. |
| [sort  (opens new window)](https://twig.symfony.com/doc/3.x/filters/sort.html) | Sorts an array. |
| [spaceless  (opens new window)](https://twig.symfony.com/doc/3.x/filters/spaceless.html) | Removes whitespace between HTML tags. |
| [split  (opens new window)](https://twig.symfony.com/doc/3.x/filters/split.html) | Splits a string by a delimiter. |
| [string](#string) | Coerces the passed value to a string. |
| [striptags  (opens new window)](https://twig.symfony.com/doc/3.x/filters/striptags.html) | Strips SGML/XML tags from a string. |
| [time](#time) | Formats a time. |
| [timestamp](#timestamp) | Formats a human-readable timestamp. |
| [title  (opens new window)](https://twig.symfony.com/doc/3.x/filters/title.html) | Formats a string into “Title Case”. |
| [translate](#translate-or-t) | Translates a message. |
| [trim  (opens new window)](https://twig.symfony.com/doc/3.x/filters/trim.html) | Strips whitespace from the beginning and end of a string. |
| [truncate](#truncate) | Truncates a string to a given length, while ensuring that it does not split words. |
| [unique](#unique) | Removes duplicate values from an array. |
| [unshift](#unshift) | Prepends one or more items to the beginning of an array. |
| [upper  (opens new window)](https://twig.symfony.com/doc/3.x/filters/upper.html) | Formats a string into “UPPER CASE”. |
| [url\_encode  (opens new window)](https://twig.symfony.com/doc/3.x/filters/url_encode.html) | Percent-encodes a string as a URL segment or an array as a query string. |
| [ucwords](#ucwords) | Uppercases the first character of each word in a string. |
| [values](#values) | Returns all the values in an array, resetting its keys. |
| [where](#where) | Filters an array by key-value pairs. |
| [widont](#widont) | Inserts a non-breaking space between the last two words of a string. |
| [without](#without) | Returns an array without the specified element(s). |
| [withoutKey](#withoutkey) | Returns an array without the specified key. |

## [#](#address)`address`

Applies formatting to an [Address](docs_5x__reference__element-types__addresses.md#address-formatter).

```
{% set myAddress = currentUser.getAddresses()|first %}
{{ myAddress|address }}
{# Output:
  <p translate="no">
  <span class="address-line1">1234 Balboa Towers Circle</span><br>
  <span class="locality">Los Angeles</span>, <span class="administrative-area">CA</span> <span class="postal-code">92662</span><br>
  <span class="country">United States</span>
  </p>
#}
```

This calls [Addresses::formatAddress()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-addresses.html#method-formataddress), so you can optionally provide an array of `options` and even your own [`formatter`  (opens new window)](https://github.com/commerceguys/addressing/blob/master/src/Formatter/FormatterInterface.php).

## [#](#append)`append`

Appends HTML to the end of another element.

```
{{ '<div><p>Lorem</p></div>'|append('<p>Ipsum</p>') }}
{# Output: <div><p>Lorem</p><p>Ipsum</p></div> #}
```

If you only want to append a new element if one of the same type doesn’t already exist, pass `'keep'` as a second argument.

```
{{ '<div><p>Lorem</p></div>'|append('<p>Ipsum</p>', 'keep') }}
{# Output: <div><p>Lorem</p></div> #}
```

If you want to replace an existing element of the same type, pass `'replace'` as a second argument.

```
{{ '<div><p>Lorem</p></div>'|append('<p>Ipsum</p>', 'replace') }}
{# Output: <div><p>Ipsum</p></div> #}
```

## [#](#ascii)`ascii`

Converts a string to ASCII characters.

```
{{ 'über'|ascii }}
{# Output: uber #}
```

By default, the current site’s language will be used when choosing ASCII character mappings. You can override that by passing in a different locale ID.

```
{{ 'über'|ascii('de') }}
{# Output: ueber #}
```

## [#](#atom)`atom`

Converts a date to an ISO-8601 timestamp (e.g. `2038-01-19T03:14:07+00:00`), which should be used for Atom feeds, among other things.

```
{{ entry.postDate|atom }}
```

Pass `false` to prevent the date from being converted to the system’s timezone:

```
{{ entry.customDateFieldWithTimezone|atom(false) }}
```

## [#](#attr)`attr`

Modifies an HTML tag’s attributes, using the same attribute definitions supported by using [yii\helpers\BaseHtml::renderTagAttributes()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-helpers-basehtml#renderTagAttributes()-detail).

```
{% set tag = '<div>' %}
{{ tag|attr({
  class: 'foo'
}) }}
{# Output: <div class="foo"> #}
```

Only the first tag will be modified, and any HTML comments or doctype declarations before it will be ignored.

```
{% set svg %}
  <?xml version="1.0" encoding="utf-8"?>
  <svg>...</svg>
{% endset %}
{{ svg|attr({
  class: 'icon'
}) }}
{# Output:
  <?xml version="1.0" encoding="utf-8"?>
  <svg class="icon">...</svg> #}
```

Attributes can be removed by setting them to `false`.

```
{% set tag = '<input type="text" disabled>' %}
{{ tag|attr({
    disabled: false
}) }}
{# Output: <input type="text"> #}
```

`class` and `style` attributes will be combined with the element’s existing attributes, if set.

```
{% set tag = '<div class="foo" style="color: black;">' %}
{{ tag|attr({
  class: 'bar',
  style: {background: 'red'}
}) }}
{# Output: <div class="foo bar" style="color: black; background: red;"> #}
```

All other attributes will replace the existing attribute values.

```
{% set tag = '<input type="text">' %}
{{ tag|attr({
  type: 'email'
}) }}
{# Output: <input type="email"> #}
```

If you want to completely replace a `class` or `style` attribute, remove it first, then set the new value:

```
{% set tag = '<div class="foo">' %}
{{ tag|attr({class: false})|attr({class: 'bar'}) }}
{# Output: <div class="bar"> #}
```

Attribute values are HTML-encoded automatically:

```
{% set tag = '<input type="text">' %}
{{ tag|attr({
  type: 'submit',
  value: 'Register & Subscribe →'
}) }}
{# Output: <input type="submit" value="Register &amp; Subscribe →"> #}
```

## [#](#base64-decode)`base64_decode`

Decodes a base64-encoded string. The encoded value can come from anywhere, as base64 is widely supported and its input and output is consistent across implementations.

```
{{ 'Q3JhZnQgQ01T' | base64_decode }}
{# -> Craft CMS #}
```

JavaScript uses the [`btoa()`  (opens new window)](https://developer.mozilla.org/en-US/docs/Web/API/btoa) function to encode values as base64, and [`atob()`  (opens new window)](https://developer.mozilla.org/en-US/docs/Web/API/atob) to decode them.

## [#](#base64-encode)`base64_encode`

Encodes a value as base64. Base64 can be useful for making unpredictable strings or data URL-safe.

```
{{ 'Craft CMS' | base64_encode }}
{# -> Q3JhZnQgQ01T #}
```

If you intend to use the value in a style sheet or URI, consider the [`dataUrl()` function](docs_5x__reference__twig__functions.md#dataurl), instead.

Encoding is *not* the same as encryption! The result may appear random, but is completely reversible. Read more about the principles and applications of [base64  (opens new window)](https://en.wikipedia.org/wiki/Base64) if you are unsure whether it is appropriate!

## [#](#boolean)`boolean`

Coerces the passed value to a boolean using PHP’s [`boolval()`  (opens new window)](https://www.php.net/manual/en/function.boolval.php) function. Useful when dealing with stronger typing in PHP 8 and Twig 3.x.

## [#](#camel)`camel`

Returns a string formatted in “camelCase”.

```
{{ 'foo bar'|camel }}
{# Output: fooBar #}
```

## [#](#column)`column`

Returns the values from a single property or key in the input array.

```
{% set entryIds = entries|column('id') %}
```

An arrow function can be passed instead, if the values that should be returned don’t exist as a property or key on the array elements.

```
{% set authorNames = entries|column(e => e.author.fullName) %}
```

This works similarly to Twig’s core [`column`  (opens new window)](https://twig.symfony.com/doc/3.x/filters/column.html) filter, except that [ArrayHelper::getColumn()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-helpers-basearrayhelper#getColumn()-detail) is used rather than PHP’s [array\_column()  (opens new window)](https://secure.php.net/array_column) function.

## [#](#contains)`contains`

Returns whether the passed-in array contains any nested arrays/objects with a particular key/attribute set to a given value.

```
{% set works = craft.entries()
  .section('artwork')
  .all() %}

{# See if any of the artwork has a mature rating #}
{% if works|contains('rating', 'm') %}
  <p class="mature">Some of this artwork is meant for mature viewers.</p>
{% endif %}
```

## [#](#currency)`currency`

Formats a number with a given currency according to the user’s preferred language.

```
{{ 1000000|currency('USD') }}
{# Output: $1,000,000.00 #}
```

You can pass `stripZeros=true` to remove any fraction digits if the value to be formatted has no minor value (e.g. cents):

```
{{ 1000000|currency('USD', stripZeros=true) }}
{# Output: $1,000,000 #}
```

If the passed-in value isn’t a valid number it will be returned verbatim:

```
{{ 'oh hai'|currency('USD') }}
{# Output: oh hai #}
```

[Money](docs_5x__reference__field-types__money.md) field values should be formatted with the [`money`](#money) filter.

## [#](#date)`date`

Formats a timestamp or [DateTime  (opens new window)](http://php.net/manual/en/class.datetime.php) object.

```
{{ entry.postDate|date }}
{# Output: Jan 19, 2038 #}
```

#### [#](#arguments)Arguments

`format`
:   You can customize how the date is presented by passing a [custom date format  (opens new window)](https://www.php.net/manual/en/datetime.format.php), just like Twig’s core [`date`  (opens new window)](https://twig.symfony.com/doc/3.x/filters/date.html) filter:

    ```
    {{ now|date('n/d/Y') }}
    {# Output: 1/19/2038 #}
    ```

    Craft also provides some special format keywords that will output locale-specific date formats:

    | Format | Example |
    | --- | --- |
    | `short` | 1/19/2038 |
    | `medium` *(default)* | Jan 19, 2038 |
    | `long` | January 19, 2038 |
    | `full` | Tuesday, January 19, 2038 |

    ```
    {{ entry.postDate|date('short') }}
    {# Output: 1/19/2038 #}
    ```

`locale`
:   The current application locale will be used by default. If you want to format the date for a different locale, use the `locale` argument:

    ```
    {{ entry.postDate|date('short', locale='en-GB') }}
    {# Output: 19/1/2038 #}
    ```

`timezone`
:   You can customize the timezone the time is output in, using the `timezone` param:

    ```
    {{ entry.postDate|date('Y-m-d H:i', timezone='UTC') }}
    {# Output: 2038-01-19 03:14 #}
    ```

    Pass `false` to prevent the date from being converted to the system’s timezone:

    ```
    {{ entry.customDateFieldWithTimezone|date('Y-m-d H:i', timezone=false) }}
    {# Output: 2038-01-18 19:14 #}
    ```

Applying the filter to a `null` value uses the current date. If this is the desired behavior, consider explicitly passing the [`now` variable](docs_5x__reference__twig__global-variables.md#now): `now|date`.

## [#](#datetime)`datetime`

Formats a timestamp or [DateTime  (opens new window)](http://php.net/manual/en/class.datetime.php) object, including the time of day.

```
{{ entry.postDate|datetime }}
{# Output: Jan 19, 2038, 5:00:00 PM #}
```

#### [#](#arguments-2)Arguments

`format`
:   Craft provides some special format keywords that will output locale-specific date and time formats:

    ```
    {{ entry.postDate|datetime('short') }}
    {# Output: 1/19/2038, 5:00 PM #}
    ```

    Possible `format` values (in addition to any valid [PHP date format  (opens new window)](https://www.php.net/manual/en/datetime.format.php)) are:

    | Format | Example |
    | --- | --- |
    | `short` | 1/19/2038, 3:14 AM |
    | `medium` *(default)* | Jan 19, 2038, 3:14:07 AM |
    | `long` | January 19, 2038 at 3:14:07 AM UTC |
    | `full` | Tuesday, January 19, 2038 at 3:14:07 AM UTC |

`locale`
:   The current application locale will be used by default. If you want to format the date and time for a different locale, use the `locale` argument:

    ```
    {{ entry.postDate|datetime('short', locale='en-GB') }}
    {# Output: 19/01/2038, 3:14 #}
    ```

`timezone`
:   You can customize the timezone the time is output in, using the `timezone` param:

    ```
    {{ entry.postDate|datetime('short', timezone='UTC') }}
    {# Output: 1/19/2038, 3:14 AM #}
    ```

    Pass `false` to prevent the date from being converted to the system’s timezone:

    ```
    {{ entry.customDateFieldWithTimezone|date('short', timezone=false) }}
    {# Output: 1/18/2038, 7:14 PM #}
    ```

`withTimeZone`
:   Include the time zone in the rendered date using the `withTimeZone` param:

    ```
    {{ entry.postDate|datetime('short', timezone='UTC', withTimeZone=true) }}
    {# Output: 1/19/2038, 3:14 AM UTC #}
    ```

Applying the filter to a `null` value uses the current date. If this is the desired behavior, consider explicitly passing the [`now` variable](docs_5x__reference__twig__global-variables.md#now): `now|date`.

## [#](#diff)`diff`

Returns the difference between arrays, using [array\_diff()  (opens new window)](https://www.php.net/manual/en/function.array-diff.php).

It will return a new array with any values that were in the initial array, which weren’t present in any of the
arrays passed into the filter.

```
{% set arr1 = ['foo', 'bar'] %}
{% set arr2 = ['bar', 'baz'] %}
{% set arr3 = arr1|diff(arr2) %}
{# Result: ['foo'] #}
```

## [#](#duration)`duration`

Runs a [DateInterval  (opens new window)](http://php.net/manual/en/class.dateinterval.php) object or integer (number of seconds) through [craft\helpers\DateTimeHelper::humanDuration()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-datetimehelper.html#method-humanduration) to output human-friendly duration text.

```
<p>Posted {{ entry.postDate.diff(now)|duration(false) }} ago.</p>
```

## [#](#encenc)`encenc`

Encrypts and base64-encodes a string.

```
{{ 'secure-string'|encenc }}
```

## [#](#explodeclass)`explodeClass`

Converts a `class` attribute value into an array of class names.

If an array is passed in, it will be returned as-is.

```
{% set classNames = 'foo bar baz'|explodeClass %}
{# Result: ['foo', 'bar', 'baz'] #}
```

## [#](#explodestyle)`explodeStyle`

Converts a `style` attribute value into an array of property name/value pairs.

If an array is passed in, it will be returned as-is.

```
{% set styles = 'font-weight: bold; color: red;'|explodeStyle %}
{# Result: {'font-weight': 'bold', 'color': 'red'} #}
```

## [#](#filesize)`filesize`

Formats a number of bytes into something nicer.

```
{{ asset.size }}
{# Output: 1944685 #}
{{ asset.size|filesize }}
{# Output: 1.945 MB #}
```

If the passed-in value isn’t a valid number it will be returned verbatim:

```
{{ 'oh hai'|filesize }}
{# Output: oh hai #}
```

## [#](#filter)`filter`

Filters elements of an array.

If nothing is passed to it, any “empty” elements will be removed.

```
{% set array = ['foo', '', 'bar', '', 'baz'] %}
{% set filteredArray = array|filter %}
{# Result: ['foo', 'bar', 'baz'] #}
```

When an arrow function is passed, this works identically to Twig’s core [`filter`  (opens new window)](https://twig.symfony.com/doc/3.x/filters/filter.html) filter.

```
{% set array = ['foo', 'bar', 'baz'] %}
{% set filteredArray = array|filter(v => v[0] == 'b') %}
{# Result: ['bar', 'baz'] #}
```

## [#](#firstwhere)`firstWhere`

Searches the incoming array for an element that matches the provided criteria.

```
{% set mountains = [
  { name: 'Mount Hood', height: 11250, range: 'Cascade' },
  { name: 'Mount Jefferson', height: 10495, range: 'Cascade' },
  { name: 'South Sister', height: 10358, range: 'Cascade' },
  { name: 'North Sister', height: 10085, range: 'Cascade' },
  { name: 'Middle Sister', height: 10052, range: 'Cascade' },
  { name: 'Sacajawea Peak', height: 9843, range: 'Wallowa' },
  { name: 'Steens Mountain', height: 9738, range: null },
  { name: 'Aneroid Mountain', height: 9707, range: 'Wallowa' },
] %}

{% set notInRange = mountains | firstWhere('range', null) %}
{% set tallestUnder10kft = mountains | firstWhere(m => m.height < 10000) %}
{% set tallestSister = mountains | firstWhere(m => m.name contains 'Sister') %}
```

When using a closure, complex comparisons are possible by returning a boolean, which is implicitly checked for “truthiness.” You can also compute a value in the closure for comparison against an explicitly-passed value.

#### [#](#arguments-3)Arguments

The signature of `firstWhere()` is the same as [craft\helpers\ArrayHelper::firstWhere()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-arrayhelper.html#method-firstwhere), but the first argument comes from the filter’s input.

`key`
:   A key used to resolve a value from each item in the array, or a closure that returns a value for comparison.

    When using a string, you can target a nested key within each item using “dot notation,” like `author.name`. See [craft\helpers\ArrayHelper::getValue()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-arrayhelper.html#method-getvalue) for details.

`value`
:   The fixed value to compare against. Defaults to `true`.

`strict`
:   Whether the comparison should be performed with strict typing. Defaults to `false`.

This filter is similar in functionality to the [collection](docs_5x__development__collections.md) method of the same name.

## [#](#flatten)`flatten`

Flattens an array into a single level, up to `depth` levels.

```
{% set songEmphasis = [
  ['A', 'B', 'C', 'D'],
  ['E', 'F', 'G'],
  ['H', 'I', 'J', 'K', ['L', 'M', 'N', 'O', 'P']],
  ['Q', 'R', 'S'],
  ['T', 'U', 'V'],
  [['W', 'X'], ['Y', 'Z']],
] %}

{% set alphabet = songEmphasis | flatten %}
{# ->  ['A', 'B', 'C', 'D', 'E', ...] #}
```

#### [#](#arguments-4)Arguments

: `depth`
How many levels to flatten. There is no limit, by default.

## [#](#float)`float`

Coerces the passed value to a float using PHP’s [`floatval()`  (opens new window)](https://www.php.net/manual/en/function.floatval.php) function. Useful when dealing with stronger typing in PHP 8 and Twig 3.x.

## [#](#group)`group`

Groups items in an array by the results of an arrow function.

```
{% set allEntries = craft.entries().section('blog').all() %}
{% set allEntriesByYear = allEntries|group(e => e.postDate|date('Y')) %}

{% for year, entriesInYear in allEntriesByYear %}
  <h2>{{ year }}</h2>

  <ul>
    {% for entry in entriesInYear %}
      <li><a href="{{ entry.url }}">{{ entry.title }}</a></li>
    {% endfor %}
  </ul>
{% endfor %}
```

## [#](#hash)`hash`

Generates a hash of the passed string.
The default behavior uses Craft’s built-in data hashing service, which prepends a [keyed-hash message authentication code  (opens new window)](https://en.wikipedia.org/wiki/HMAC) (HMAC) to the input.

This is primarily intended to pass data in plain view (i.e. via front-end forms) that must not be tampered with.

```
{{ hiddenInput('foo', '!!!qux'|hash) }}
{# -> <input type="hidden" name="foo" value="3c672d401a486334511baf27d9c717dad0f27d7bebc890895f3b15c4b3f6edd3!!!qux"> #}
```

**Do not hash sensitive data.** Hashed values are tamper-proof, but still expose the original value!
Hashes are **not** a suitable alternative to CSRF tokens or authentication.

In a plugin or module, you can validate the value via [Security::validateData()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-base-security#validateData()-detail):

```
$foo = Craft::$app->getRequest()->getBodyParam('foo');
$foo = Craft::$app->getSecurity()->validateData($foo);

if ($foo !== false) {
    // $foo was not tampered with!
}
```

[Request::getValidatedBodyParam()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-request.html#method-getvalidatedbodyparam) can be used in a [controller](docs_5x__extend__controllers.md) to automatically throw an exception on missing or invalid values:

```
public function actionSubmitData()
{
    $foo = Craft::$app->getRequest()->getValidatedBodyParam('foo');

    // $foo is present and valid!
}
```

Generating an HMAC uses your app’s [`securityKey` config setting](docs_5x__reference__config__general.md#securitykey), by default. If this setting changes between generating and validating a hash, it will fail!

Attempting to validate a hash from a non-default algorithm  [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "Non-HMAC data-hashing algorithms in Twig was first available in version 5.9.0 of Craft.") will always fail.
Hashes from other algorithms can be checked by re-computing the them from your trusted data:

```
{% if craft.app.request.getQueryParam('contentChecksum') != entry.myTextContentField|hash('md5') %}
  The content of this page has changed since the link was shared.
{% endif %}
```

#### [#](#arguments-5)Arguments

`algo` [5.9.0+](https://github.com/craftcms/cms/blob/5.9.0/CHANGELOG.md "Arbitrary data-hasing algorithms in Twig was first available in version 5.9.0 of Craft.")
:   The hashing algorithm to use.
    Check the output of the `hash_algos()` function on your system for a complete list of supported algorithms.

    ```
    {{ 'My string'|hash('sha256') }}
    {# -> 3f9a07d83c604dba400d13df4d34566b78338804f0b3181d4e02089fe4daa7b0 #}

    {{ 'My string'|hash('md5') }}
    {# -> a537d002d4b595d99b7a2a9db4dfa2ff #}
    ```

## [#](#httpdate)`httpdate`

Converts a date to the HTTP format, used by [RFC 7231  (opens new window)](https://tools.ietf.org/html/rfc7231#section-7.1.1.1)-compliant HTTP headers like `Expires`.

```
{% header "Expires: " ~ expiry|httpdate %}
{# Output: Expires: Thu, 08 Apr 2021 13:00:00 GMT #}
```

#### [#](#arguments-6)Arguments

`timezone`
:   You can use the `timezone` param to specify the date’s timezone for conversion to GMT:

    ```
    {% header 'Expires: ' ~ expiry|httpdate('CET') %}
    {# Result: Expires: Thu, 08 Apr 2021 21:00:00 GMT #}
    ```

    Pass `false` to use the date’s existing timezone as the basis (prior to conversion to GMT).

## [#](#id)`id`

Formats a string into something that will work well as an HTML input `id`, via [craft\web\View::formatInputId()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-view.html#method-formatinputid).

```
{% set name = 'input[name]' %}
<input type="text" name="{{ name }}" id="{{ name|id }}">
```

## [#](#index)`index`

Runs an array through [ArrayHelper::index()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-helpers-basearrayhelper#index()-detail).

```
{% set entries = entries|index('id') %}
```

## [#](#indexof)`indexOf`

Returns the index of a passed-in value within an array, or the position of a passed-in string within another string. (Note that the returned position is 0-indexed.) If no position can be found, `-1` is returned instead.

```
{% set colors = ['red', 'green', 'blue'] %}
<p>Green is located at position {{ colors|indexOf('green') + 1 }}.</p>

{% set position = 'team'|indexOf('i') %}
{% if position != -1 %}
  <p>There <em>is</em> an “i” in “team”! It’s at position {{ position + 1 }}.</p>
{% endif %}
```

## [#](#integer)`integer`

Coerces the passed value to a integer using PHP’s [`intval()`  (opens new window)](https://www.php.net/manual/en/function.intval.php) function. Useful when dealing with stronger typing in PHP 8 and Twig 3.x.

## [#](#intersect)`intersect`

Returns an array containing only the values that are also in a passed-in array.

```
{% set ownedIngredients = [
  'vodka',
  'gin',
  'triple sec',
  'tonic',
  'grapefruit juice'
] %}

{% set longIslandIcedTeaIngredients = [
  'vodka',
  'tequila',
  'rum',
  'gin',
  'triple sec',
  'sweet and sour mix',
  'Coke'
] %}

{% set ownedLongIslandIcedTeaIngredients =
  ownedIngredients|intersect(longIslandIcedTeaIngredients)
%}
```

## [#](#json-encode)`json_encode`

Returns the JSON representation of a value.

This works similarly to Twig’s core [`json_encode`  (opens new window)](https://twig.symfony.com/doc/3.x/filters/json_encode.html) filter, except that the `options` argument will default to `JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_QUOT` if the response content type is either `text/html` or `application/xhtml+xml`.

## [#](#json-decode)`json_decode`

JSON-decodes a string into an array by passing it through [yii\helpers\Json::decode()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-helpers-json#decode()-detail).

```
{% set arr = '[1, 2, 3]'|json_decode %}
```

## [#](#kebab)`kebab`

Returns a string formatted in “kebab-case”.

That’s a reference to [shish kebabs  (opens new window)](https://en.wikipedia.org/wiki/Kebab#Shish) for those of you that don’t get the analogy.

```
{{ 'foo bar?'|kebab }}
{# Output: foo-bar #}
```

## [#](#lcfirst)`lcfirst`

Lowercases the first character of a string.

```
{{ 'Foobar'|lcfirst }}
{# Output: foobar #}
```

## [#](#length)`length`

Returns the length of a string or array, or a query’s result [count](docs_5x__development__element-queries.md#count).

If used on anything besides a query, Twig’s built-in [length  (opens new window)](https://twig.symfony.com/doc/3.x/filters/length.html) filter logic will be used.

## [#](#literal)`literal`

Runs a string through [craft\helpers\Db::escapeParam()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-db.html#method-escapeparam) to escape commas and asterisks so they’re are not treated as special characters in query params.

```
{% set titleParam = craft.app.request.getQueryParam('title') %}
{% set entry = craft.entries()
  .title(titleParam|literal)
  .one() %}
```

## [#](#markdown-or-md)`markdown` or `md`

Processes a string with [Markdown  (opens new window)](https://daringfireball.net/projects/markdown/).

```
{% set content %}
# Everything You Need to Know About Computer Keyboards

The only *real* computer keyboard ever made was famously
the [Apple Extended Keyboard II] [1].

    [1]: https://www.flickr.com/photos/gruber/sets/72157604797968156/
{% endset %}

{{ content|markdown }}
```

This filter supports two arguments:

- `flavor` — Choose the “flavor” of Markdown the parser will use. Must be one of:
  - `'original'` (Default)
  - `'gfm'`([GitHub-Flavored Markdown  (opens new window)](https://docs.github.com/en/get-started/writing-on-github/getting-started-with-writing-and-formatting-on-github/basic-writing-and-formatting-syntax))
  - `'gfm-comment'` (GitHub-Flavored Markdown with newlines converted to `<br>`s)
  - `'extra'` ([Markdown Extra  (opens new window)](https://michelf.ca/projects/php-markdown/extra/))
  - `'pre-escape'` (Same as `'original'` but forces the `encode` argument to `true`)
- `inlineOnly` — Determines whether to only parse inline elements, omitting any `<p>` tags (defaults to `false`)
- `encode` — Equivalent to pre-processing the input string with Twig’s [`escape` or `e` filter  (opens new window)](https://twig.symfony.com/doc/3.x/filters/escape.html), i.e: `{{ content|e|md }}`. *Only the `original` and `pre-escape` flavors are allowed when encoding is enabled.*

**Do not output user-submitted content with this filter.** The resulting markup is “trusted” by the Twig environment (as though it were output with the `|raw` filter), and can result in [XSS vulnerabilities  (opens new window)](https://owasp.org/www-community/attacks/xss/).

To protect your site or app, first pass the text through the [`escape` or `e` filter  (opens new window)](https://twig.symfony.com/doc/3.x/filters/escape.html), or set the `escape` argument to `true`.

## [#](#merge)`merge`

Merges the passed array with another one.

This has the same behavior as [Twig’s merge filter  (opens new window)](https://twig.symfony.com/doc/3.x/filters/merge.html) which uses PHP’s [array\_merge()  (opens new window)](https://www.php.net/manual/en/function.array-merge.php) under the hood:

```
{% set values = [1, 2] %}
{% set values = values|merge(['Lucille', 'Buster']) %}
{# Result: [1, 2, 'Lucille', 'Buster'] #}
```

It also works on hashes, where merging occurs on the keys. A key that doesn’t already exist is added, and a key that does already exist only has its value overridden:

```
{% set items = { 'Buster': 'Bluth', 'Lindsay': 'Bluth' } %}
{% set items = items|merge({ 'Tobias': 'Fünke', 'Lindsay': 'Fünke' }) %}
{# Result: { 'Buster': 'Bluth', 'Tobias': 'Fünke', 'Lindsay': 'Fünke' } #}
```

If you want to make sure specific values are defined by default in an array, like `'Lindsay': 'Bluth'` below, reverse the elements in the call:

```
{% set items = { 'Buster': 'Bluth', 'Lindsay': 'Bluth' } %}
{% set items = { 'Tobias': 'Fünke', 'Lindsay': 'Fünke' }|merge(items) %}
{# Result: { 'Tobias': 'Fünke', 'Lindsay': 'Bluth', 'Buster': 'Bluth' } #}
```

You can also provide an optional `recursive` argument that will use [ArrayHelper::merge()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-arrayhelper.html#method-merge) to merge nested arrays or hashes.

Without `recursive`:

```
{% set items = {
  'rebellion': { 'Bespin': 'Calrissian', 'Hoth': 'Organa', 'Crait': 'Organa' },
  'empire': { 'Coruscant': 'Palpatine', 'Endor': 'Palpatine' }
} %}
{% set items = items|merge({
  'rebellion': { 'Endor': 'Solo/Organa' },
  'empire': { 'Bespin': 'Vader', 'Hoth': 'Veers' }
}) %}
{# Result: {
  'rebellion': { 'Endor': 'Solo/Organa' },
  'empire': { 'Bespin': 'Vader', 'Hoth': 'Veers' }
} #}
```

With `recursive`:

```
{% set items = {
  'rebellion': { 'Bespin': 'Calrissian', 'Hoth': 'Organa', 'Crait': 'Organa' },
  'empire': { 'Coruscant': 'Palpatine', 'Endor': 'Palpatine' }
} %}
{% set items = items|merge({
  'rebellion': { 'Endor': 'Solo/Organa' },
  'empire': { 'Bespin': 'Vader', 'Hoth': 'Veers' }
}, true) %}
{# Result: {
  'rebellion': {
    'Bespin': 'Calrissian',
    'Hoth': 'Organa',
    'Crait': 'Organa',
    'Endor': 'Solo/Organa'
  },
  'empire': {
    'Coruscant': 'Palpatine',
    'Endor': 'Palpatine',
    'Bespin': 'Vader',
    'Hoth': 'Veers'
  }
} #}
```

## [#](#money)`money`

Outputs a value from a Money object.

```
{{ myMoneyField|money }}
{# Output: $123.00 #}
```

An optional **formatLocale** argument can be provided if you don’t want to use the default formatter’s locale:

```
{{ myMoneyField|money('de') }}
{# Output: 123,00 $ #}
```

## [#](#multisort)`multisort`

Sorts an array by one or more properties or keys within an array’s values.

To sort by a single property or key, pass its name as a string:

```
{% set entries = entries|multisort('title') %}
```

To sort by multiple properties or keys, pass them in as an array. For example, this will sort entries by their post date first, and then by their title:

```
{% set entries = entries|multisort(['postDate', 'title']) %}
```

An arrow function can be passed instead, if the values that should be sorted by don’t exist as a property or key on the array elements.

```
{% set entries = entries|multisort(e => e.author.fullName) %}
```

The values will be sorted in ascending order by default. You can switch to descending order with the `direction` param:

```
{% set entries = entries|multisort('title', direction=SORT_DESC) %}
```

You can also customize which sorting behavior is used, with the `sortFlag` param. For example, to sort items numerically, use `SORT_NUMERIC`:

```
{% set entries = entries|multisort('id', sortFlag=SORT_NUMERIC) %}
```

See PHP’s [sort()  (opens new window)](https://www.php.net/manual/en/function.sort.php) documentation for the available sort flags.

When sorting by multiple properties or keys, you must set the `direction` and `sortFlag` params to arrays as well.

```
{% set entries = entries|multisort([
  'postDate',
  'title',
], sortFlag=[SORT_NATURAL, SORT_FLAG_CASE]) %}
```

## [#](#namespace-or-ns)`namespace` or `ns`

The `|namespace` filter can be used to namespace input names and other HTML attributes, as well as CSS selectors.

For example, this:

```
{% set html %}
<style>
  .text { font-size: larger; }
  #title { font-weight: bold; }
</style>
<input class="text" id="title" name="title" type="text">
{% endset %}
{{ html|namespace('foo') }}
```

would become this:

```
<style>
  .text { font-size: larger; }
  #foo-title { font-weight: bold; }
</style>
<input class="text" id="foo-title" name="foo[title]" type="text">
```

Notice how the `#title` CSS selector became `#foo-title`, the `id` attribute changed from `title` to `foo-title`, and the `name` attribute changed from `title` to `foo[title]`.

If you want class names to get namespaced as well, pass `withClasses=true`. That will affect both class CSS selectors and `class` attributes:

```
{{ html|namespace('foo', withClasses=true) }}
```

That would result in:

```
<style>
  .foo-text { font-size: larger; }
  #foo-title { font-weight: bold; }
</style>
<input class="foo-text" id="foo-title" name="foo[title]" type="text">
```

## [#](#namespaceattributes)`namespaceAttributes`

The `|namespaceAttributes` filter can be used to namespace `id` and other HTML attributes, as well as CSS selectors.

It’s identical to the [namespace](#namespace) filter, except that inputs’ `name` attributes won’t be modified.

For example, this:

```
{% set html %}
<style>
  .text { font-size: larger; }
  #title { font-weight: bold; }
</style>
<input class="text" id="title" name="title" type="text">
{% endset %}
{{ html|namespaceAttributes('foo') }}
```

would become this:

```
<style>
  .text { font-size: larger; }
  #foo-title { font-weight: bold; }
</style>
<input class="text" id="foo-title" name="title" type="text">
```

Notice how the `#title` CSS selector became `#foo-title`, the `id` attribute changed from `title` to `foo-title`, but the `name` attribute wasn’t changed.

If you want class names to get namespaced as well, pass `withClasses=true`. That will affect both class CSS selectors and `class` attributes:

```
{{ html|namespaceAttributes('foo', withClasses=true) }}
```

That would result in:

```
<style>
  .foo-text { font-size: larger; }
  #foo-title { font-weight: bold; }
</style>
<input class="foo-text" id="foo-title" name="title" type="text">
```

## [#](#namespaceinputid)`namespaceInputId`

Namepaces an element ID.

For example, this:

```
{{ 'bar'|namespaceInputId('foo') }}
```

would output:

```
foo-bar
```

If this is used within a [namespace](docs_5x__reference__twig__tags.md#namespace) tag, the namespace applied by the tag will be used by default.

## [#](#namespaceinputname)`namespaceInputName`

Namepaces an input name.

For example, this:

```
{{ 'bar'|namespaceInputName('foo') }}
```

would output:

```
foo[bar]
```

If this is used within a [namespace](docs_5x__reference__twig__tags.md#namespace) tag, the namespace applied by the tag will be used by default.

## [#](#number)`number`

Formats a number according to the user’s preferred language.

For example, comma group symbols are added by default in English:

```
{{ 1000000|number }}
{# Output: 1,000,000 #}
```

The value is passed to [`Craft::$app->getFormatter()->asDecimal()`  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-i18n-formatter#asDecimal()-detail) and may include three additional arguments:

- **decimals** – number of digits that should appear after the decimal point (defaults to `null`)
- **options** – key-value array of [number formatter options  (opens new window)](https://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants.unumberformatattribute) (ignored if PHP intl extension is not installed)
- **textOptions** – key-value array of [text formatting options  (opens new window)](https://www.php.net/manual/en/class.numberformatter.php#intl.numberformatter-constants.unumberformattextattribute) for the formatter
- **locale** – the locale the number should be formatted for (defaults to the current application locale)

```
{{ 1000000|number(2) }}
{# Output: 1,000,000.00 #}

{{ 1000000|number(null, { (constant('NumberFormatter::GROUPING_SIZE')): 4 }) }}
{# Output: 100,0000 #}

{{ (-5)|number(null, {}, { (constant('NumberFormatter::NEGATIVE_PREFIX')): '☹' }) }}
{# Output: ☹5 #}
```

If the passed-in value isn’t a valid number it will be returned verbatim:

```
{{ 'oh hai'|number }}
{# Output: oh hai #}
```

## [#](#parseattr)`parseAttr`

Parses an HTML tag to find its attributes.

```
{% set content %}
  <a class="text-xl pt-0" href="/foo.pdf" download>Save File</p>
{% endset %}

{{ content|parseAttr }}
{# Result: ["class" => ["text-xl", "pt-0"], "href" => "/foo.pdf", "download" => true] #}
```

## [#](#parserefs)`parseRefs`

Parses a string for [reference tags](docs_5x__system__reference-tags.md).

```
{% set content %}
  {entry:blog/hello-world:link} was my first blog post. Pretty geeky, huh?
{% endset %}

{{ content|parseRefs|raw }}
```

## [#](#pascal)`pascal`

Returns a string formatted in “PascalCase” (AKA “UpperCamelCase”).

```
{{ 'foo bar'|pascal }}
{# Output: FooBar #}
```

## [#](#percentage)`percentage`

Formats a percentage according to the user’s preferred language.

```
{{ 0.85|percentage }}
{# Output: 85% #}
```

If the passed-in value isn’t a valid number it will be returned verbatim:

```
{{ 'oh hai'|percentage }}
{# Output: oh hai #}
```

## [#](#prepend)`prepend`

Prepends HTML to the beginning of another element.

```
{{ '<div><p>Ipsum</p></div>'|prepend('<p>Lorem</p>') }}
{# Output: <div><p>Lorem</p><p>Ipsum</p></div> #}
```

If you only want to append a new element if one of the same type doesn’t already exist, pass `'keep'` as a second argument.

```
{{ '<div><p>Ipsum</p></div>'|prepend('<p>Lorem</p>', 'keep') }}
{# Output: <div><p>Ipsum</p></div> #}
```

If you want to replace an existing element of the same type, pass `'replace'` as a second argument.

```
{{ '<div><p>Ipsum</p></div>'|prepend('<p>Lorem</p>', 'replace') }}
{# Output: <div><p>Lorem</p></div> #}
```

## [#](#purify)`purify`

Runs the given text through [HTML Purifier  (opens new window)](http://htmlpurifier.org).

```
{{ user.bio|purify }}
```

To load predefined rules from a file in `config/htmlpurifier/`, pass its filename as an argument (without `.json`):

```
{{ user.bio|purify('user-profile') }}
```

Define config on-the-fly by passing an object:

```
{{ user.bio|purify({
  'HTML.AllowedElements': 'p, a',
  'HTML.Nofollow': true,
}) }}
```

See the [configuration docs](docs_5x__configure.md#html-purifier) for more information on using HTML Purifier.

## [#](#push)`push`

Appends one or more items onto the end of an array, and returns the new array.

```
{% set array1 = ['foo'] %}
{% set array2 = array1|push('bar', 'baz') %}
{# Result: ['foo', 'bar', 'baz'] #}
```

## [#](#removeclass)`removeClass`

Removes a class (or classes) from the given HTML tag.

```
{% set markup = '<p class="apple orange banana">A classy bit of text.</p>' %}
{{ markup|removeClass('orange') }}
{# Result: <p class="apple banana">A classy bit of text.</p> #}
```

```
{% set markup = '<p class="apple orange banana">A classy bit of text.</p>' %}
{{ markup|removeClass(['orange', 'banana']) }}
{# Result: <p class="apple">A classy bit of text.</p> #}
```

## [#](#replace)`replace`

Match and replace parts of a string.

When a mapping array is passed, this works identically to Twig’s core [`replace`  (opens new window)](https://twig.symfony.com/doc/3.x/filters/replace.html) filter:

```
{% set str = 'Hello, FIRST LAST' %}

{{ str|replace({
  FIRST: currentUser.firstName,
  LAST:  currentUser.lastName
}) }}
```

To replace one string at a time, pass the string you want to replace as the first argument, and the replacement as the second argument:

```
{% set str = 'Hello, NAME' %}

{{ str|replace('NAME', currentUser.name) }}
```

You can also use a regular expression to search for matches by starting and ending the replacement string’s value with forward slashes:

```
{{ tag.title|lower|replace('/[^\\w]+/', '-') }}
```

When passing an array, its keys can be regular expressions:

```
{{ tag.title|lower|replace({
  '/^the\\s/': '',
  '/[^\\w]+/': '-',
}) }}
```

To treat patterns as literal strings (when using positional arguments *or* a map), pass `false` to the `regex` argument:

```
{{ tag.title|lower|replace({
  '/you/i': 'y’all',
  '/-_-/': '(^_^)',
}, regex=false) }}
```

## [#](#rss)`rss`

Outputs a date in the format required for RSS feeds (`D, d M Y H:i:s O`).

```
{{ entry.postDate|rss }}
{# Expires: Wed, 31 May 2023 12:23:09 -0700 #}
```

#### [#](#arguments-7)Arguments

`timezone`
:   You can use the `timezone` param to specify the date’s timezone for conversion to GMT:

    ```
    {% header 'Expires: ' ~ expiry|httpdate('CET') %}
    {# Expires: Thu, 08 Apr 2021 21:00:00 +0000 #}
    ```

    Pass `false` to use the date’s existing timezone as the basis (prior to conversion to GMT).

## [#](#snake)`snake`

Returns a string formatted in “snake\_case”.

```
{{ 'foo bar'|snake }}
{# Output: foo_bar #}
```

## [#](#string)`string`

Coerces the passed value to a string using PHP’s [`strval()`  (opens new window)](https://www.php.net/manual/en/function.strval.php) function. Useful when dealing with stronger typing in PHP 8 and Twig 3.x.

## [#](#time)`time`

Outputs the time of day for a timestamp or [DateTime  (opens new window)](http://php.net/manual/en/class.datetime.php) object.

```
{{ entry.postDate|time }}
{# Output: 3:14:07 AM #}
```

Craft provides some special format keywords that will output locale-specific time formats:

```
{{ entry.postDate|time('short') }}
{# Output: 3:14 AM #}
```

Possible `format` values are:

| Format | Example |
| --- | --- |
| `short` | 3:14 AM |
| `medium` *(default)* | 3:14:07 AM |
| `long` | 3:14:07 AM UTC |

The current application locale will be used by default. If you want to format the date and time for a different locale, use the `locale` argument:

```
{{ entry.postDate|time('short', locale='en-GB') }}
{# Output: 17:00 #}
```

You can customize the timezone the time is output in, using the `timezone` param:

```
{{ entry.postDate|time('short', timezone='UTC') }}
{# Output: 12:00 AM #}
```

The timezone can be included in the rendered time by passing a `withTimeZone` param:

```
{{ entry.postDate|time('short', timezone='UTC', withTimeZone=true) }}
{# Output: 12:00 AM UTC #}
```

## [#](#timestamp)`timestamp`

Outputs a date with [craft\i18n\Formatter::asTimestamp()  (opens new window)](https://docs.craftcms.com/api/v5/craft-i18n-formatter.html#method-astimestamp), using plain-language relative terms when possible.
Dates with the same day return only the time, using the provided `format` (or `today` if the passed value only included date information); dates from the previous 24-hour window return `yesterday`; dates within the last week return the day’s name (like `Wednesday`).
Anything longer ago than that is handed off to [craft\i18n\Formatter::asDate()  (opens new window)](https://docs.craftcms.com/api/v5/craft-i18n-formatter.html#method-asdate) using the provided `format`.

```
{{ now|timestamp }}
{# Output: 16:25 #}

{{ now|date_modify('-1 day')|timestamp }}
{# Output: Yesterday #}

{{ now|date_modify('-4 days')|timestamp }}
{# Output: Friday #}

{{ now|date_modify('-2 months')|timestamp(withPreposition=true) }}
{# Output: 'on March 29, 2023' #}
```

#### [#](#arguments-8)Arguments

`format`
:   Any date formatting string, or a special value compatible with [craft\i18n\Formatter::asTimestamp()  (opens new window)](https://docs.craftcms.com/api/v5/craft-i18n-formatter.html#method-astimestamp).
    The default format depends on the current [system locale](docs_5x__system__sites.md#language).

`withPreposition`
:   Pass `true` to include `at` or `on` prepositions when outputting the timestamp (when appropriate). These values are localized based on the current site’s language. Defaults to `false`.

## [#](#translate-or-t)`translate` or `t`

Translates a message with [Craft::t()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-baseyii#t()-detail).

```
{{ 'Hello world'|t('myCategory') }}
```

If no category is specified, it will default to `site`.

```
{{ 'Hello world'|t }}
```

See [Static Message Translations](docs_5x__system__sites.md#static-message-translations) for a full explanation on how this works.

## [#](#truncate)`truncate`

Truncates a string to a given length, while ensuring that it does not split words.

```
{{ 'Hello world'|truncate(10) }}
{# Output: Hello… #}
```

An ellipsis (`…`) will be appended to the string if it needs to be truncated, by default. You can customize what gets appended by passing a second argument. (Note that a longer appended string could result in more of the original string getting truncated.)

```
{{ 'Hello world'|truncate(10, '...') }}
{# Output: Hello... #}

{{ 'Hello world'|truncate(10, '') }}
{# Output: Hello #}
```

If the truncated string cuts down to less than a single word, that first word will be split by default.

```
{{ 'Hello world'|truncate(2) }}
{# Output: H… #}
```

If you’d prefer to have the entire word removed, set the `splitSingleWord` argument to `false`.

```
{{ 'Hello world'|truncate(2, splitSingleWord=false) }}
{# Output: … #}
```

## [#](#ucfirst)`ucfirst`

The `ucfirst` filter is deprecated. Use Twig’s native [`capitalize`  (opens new window)](https://twig.symfony.com/doc/3.x/filters/capitalize.html) filter, instead.

Capitalizes the first character of a string.

```
{{ 'foobar'|ucfirst }}
{# Output: Foobar #}
```

## [#](#ucwords)`ucwords`

Uppercases the first character of each word in a string.

```
{{ 'foo bar baz hyphenated-pair'|ucwords }}
{# Output: Foo Bar Baz Hyphenated-Pair #}
```

## [#](#unique)`unique`

Runs an array through [array\_unique()  (opens new window)](http://php.net/manual/en/function.array-unique.php).

```
{% set array = ['Larry', 'Darryl', 'Darryl'] %}
{{ array|unique }}
{# Result: ['Larry', 'Darryl'] #}
```

## [#](#unshift)`unshift`

Prepends one or more items to the beginning of an array, and returns the new array.

```
{% set array1 = ['foo'] %}
{% set array2 = array1|unshift('bar', 'baz') %}
{# Result: ['bar', 'baz', 'foo'] #}
```

## [#](#values)`values`

Returns an array of all the values in a given array, but without any custom keys.

```
{% set arr1 = {foo: 'Foo', bar: 'Bar'} %}
{% set arr2 = arr1|values %}
{# arr2 = ['Foo', 'Bar'] #}
```

## [#](#where)`where`

Runs an array through [craft\helpers\ArrayHelper::where()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-arrayhelper.html#method-where).

```
{% set array = { 'foo': 'bar', 'bar': 'baz', 'bat': 'bar' } %}
{{ array|where(v => v == 'bar') }}
{# Result: { 'foo': 'bar', 'bat': 'bar' } #}
```

## [#](#widont)`widont`

Inserts a non-breaking space between the last two words of a string.

This can be useful to prevent typographic [widows and orphans  (opens new window)](https://en.wikipedia.org/wiki/Widows_and_orphans).

```
{% set content %}
  Don’t leave any word stranded on its own line.
{% endset %}

{{ content|widont }}
{# Output: Don’t leave any word stranded on its own&nbsp;line. #}
```

## [#](#without)`without`

Returns an array without the specified item(s).

```
{% set entries = craft.entries().section('articles').limit(3).all() %}
{% set firstEntry = entries|first %}
{% set remainingEntries = entries|without(firstEntry) %}
```

## [#](#withoutkey)`withoutKey`

Returns an array without one or more specified keys.

The key can be a single key as a string:

```
{% set array = {
  foo: 'foo',
  bar: 'bar',
  baz: 'baz'
} %}
{% set filtered = array|withoutKey('baz') %}
{# Result: { 'foo': 'foo', 'bar: 'bar' } #}
```

You can also pass multiple keys in an array:

```
{% set array = {
  foo: 'foo',
  bar: 'bar',
  baz: 'baz'
} %}
{% set filtered = array|withoutKey(['bar', 'baz']) %}
{# Result: { 'foo': 'foo' } #}
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/twig/filters.md)
