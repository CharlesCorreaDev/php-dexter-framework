# Plain Text Fields | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/field-types/plain-text

---

# Plain Text Fields

- ### On this Page

  - [Settings](docs_5x__reference__field-types__plain-text.md#settings)
  - [The Field](docs_5x__reference__field-types__plain-text.md#the-field)
  - [Development](docs_5x__reference__field-types__plain-text.md#development)

**Plain text** fields give you either a normal text `input` or a multi-line `textarea`, where plain text can be entered. How that text is used is entirely up to you!

## [#](#settings)Settings

Plain text fields have the following settings:

- **UI Mode** — How the field should be presented in the control panel. (Defaults to “Normal”, can be “Enlarged”.)
- **Placeholder Text** — The field’s placeholder text, to be displayed if the field has no value yet.
- **Field Limit** — The maximum number of characters or bytes the field is allowed to have. (Accepts a number and a unit, which defaults to “Characters” with another option for “Bytes”.)
- **Use a monospaced font** — Whether field input’s text will use a monospaced font.
- **Allow line breaks** — Whether to allow line breaks in this field.
  - **Initial Rows** — For multi-line inputs, choose how many lines of text fit in the field, initially. This setting does *not* affect how many lines of text can be stored.

## [#](#the-field)The Field

Plain text fields will either show a normal text `input` element or a multi-line `textarea`, depending on whether **Allow line breaks** was checked. To give editors more space, increase the number of **Initial Rows**.

## [#](#development)Development

Accessing a plain text field in your templates will return the value that was entered in the field. Suppose our field was named “Summary” and had a handle of `summary`:

```
{{ entry.summary }}
```

### [#](#testing-for-a-value)Testing for a Value

An empty text field is a “falsey” value, so you can use it in a conditional:

```
{% if entry.summary %}
  <h3>Summary</h3>
  <p>{{ entry.summary }}</p>
{% endif %}
```

Keep in mind that whitespace characters count the same as any other character—use the `trim` filter to remove spaces and newlines from the beginning and end:

```
{% if entry.summary|trim %}
  {# Ok, there really is content in here! #}
  <h3>Summary</h3>
  <p>{{ entry.summary }}</p>
{% endif %}
```

### [#](#processing-text)Processing Text

Craft’s [Twig environment](docs_5x__development__twig.md) has a ton of useful text processing features.

#### [#](#markdown)Markdown

Parse a field’s value as Markdown with the [`markdown` or `md` filter](docs_5x__reference__twig__filters.md#markdown-or-md):

```
{% if entry.summary %}
  <h3>Summary</h3>
  {{ entry.summary|md }}
{% endif %}
```

Note that we’re not manually wrapping the output in `<p></p>` tags! Markdown takes care of this for us, unless you pass the `inlineOnly` argument:

```
<h3>{{ entry.stylizedHeader|md(inlineOnly = true) }}</h3>
```

#### [#](#reference-tags)Reference Tags

To include dynamic information in a Plain Text field, you can copy [reference tags](docs_5x__system__reference-tags.md) from other elements, then use the `parseRefs` filter to render their values:

ValueTemplateOutput

```
I can’t live without {globalset:snippets:primaryProductName}!
```

```
{{ entry.testimonial|parseRefs }}
```

```
I can’t live without Butter™!
```

### [#](#querying)Querying

Plain text field values are stored as strings, and therefore support a variety of convenient query features via [craft\helpers\Db::parseParam()  (opens new window)](https://docs.craftcms.com/api/v5/craft-helpers-db.html#method-parseparam).

#### [#](#exact-matches)Exact Matches

Open-ended inputs aren’t ideal for storing enum-style data (leave that to a [dropdown field](docs_5x__reference__field-types__dropdown.md)), but you can still query based on the exact text content of a field:

```
{% set reds = craft.entries()
  .section('swatches')
  .colorGroupCode('RED')
  .all() %}
```

#### [#](#multiple-values)Multiple Values

Match against a list using comma-separated values or an array:

```
{# Separate values with commas... #}
{% set sunrisePalette = craft.entries()
  .section('swatches')
  .colorGroupCode('PINK, RED, YELLOW, ORANGE')
  .all() %}

{# ...or use an array: #}
{% set sunrisePalette = craft.entries()
  .section('swatches')
  .colorGroupCode(['PINK', 'RED', 'YELLOW', 'ORANGE'])
  .all() %}
```

These examples are ultimately assembled into a `NOT IN (...)` SQL clause.

#### [#](#negation)Negation

Exclude elements with a specific field value by preceding a value with `not`:

```
{% set notCool = craft.entries()
  .section('swatches')
  .colorGroupCode('not BLUE')
  .all() %}
```

Multiple values can be excluded by preceding each term in a comma-separated list by a `not` (`'not BLUE, not GREEN'`), or by using `not` as the first item in an array (`['not', 'BLUE', 'GREEN']`).

The grouping of terms is important when combining ranges and negation! `not RED, YELLOW` means “Swatches with a color other than `RED`, *or* swatches with a color of `YELLOW`.” On the other hand, `['not', 'RED', 'YELLOW']` means “Swatches with a color other than `RED` or `YELLOW`.” The former would exclude “red” swatches, but allow “yellow;” the latter would exclude both colors.

#### [#](#partial-matches)Partial Matches

You can query using partial matches by including an asterisk (`*`) at the beginning and/or end of a value:

```
{# All “pastel” families: #}
{% set pastels = craft.entries()
  .section('swatches')
  .colorGroupCode('PASTEL-*')
  .all() %}

{# All “glossy” group variations: #}
{% set glosses = craft.entries()
  .section('swatches')
  .colorGroupCode('*-GLOSS')
  .all() %}
```

Combined with the above, a param like `'not *-MATTE'` is also valid. Queries that use asterisks are generally compiled into `LIKE` statements compatible with the database driver.

#### [#](#empty-values)Empty Values

The special tokens `:empty:` and `:notempty:` can be used to find elements with a plain text field that is empty or populated, respectively. Both tokens are compiled into query conditions that compare against `null` *and* empty string (`''`) values.

#### [#](#literal-symbols)Literal Symbols

To use asterisks or commas in a query param, pass your value through the [`literal` Twig filter](docs_5x__reference__twig__filters.md#literal).

#### [#](#case-sensitivity)Case-Sensitivity

[Query values are case-sensitive](docs_5x__development__element-queries.md#case-sensitivity), by default. To make a query case-*insensitive*, use a hash with `value` and `caseInsensitive` keys:

```
{% set reds = craft.entries()
  .section('swatches')
  .colorGroupCode({
    value: 'red',
    caseInsensitive: true,
  })
  .all() %}
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/field-types/plain-text.md)
