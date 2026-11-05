# Object Templates | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/system/object-templates

---

# Object Templates

- ### On this Page

  - [Evaluation & Invalidation](docs_5x__system__object-templates.md#evaluation-invalidation)
  - [Objects & Variables](docs_5x__system__object-templates.md#objects-variables)
  - [Syntax](docs_5x__system__object-templates.md#syntax)
  - [Security](docs_5x__system__object-templates.md#security)

Craft uses single-line [Twig](docs_5x__development__twig.md) “templates” in a number of places throughout the control panel to generate values from data that is only known at runtime. These templates are most often stored in [Project Config](docs_5x__system__project-config.md), but the resulting values are typically part of a record stored in the database, or only used temporarily.

Some examples of object templates in use are:

- [Element](docs_5x__system__elements.md) title and slug formats;
- [Asset field](docs_5x__reference__field-types__assets.md) default upload paths;
- [Section](docs_5x__reference__element-types__entries.md#sections) and [category group](docs_5x__reference__element-types__categories.md#category-groups) URI formats;
- Values sent to controllers via a [`redirectInput()`](docs_5x__reference__twig__functions.md) function;
- The [`group()` filter](docs_5x__reference__twig__filters.md) in Twig;
- Console controllers that [re-save elements](docs_5x__reference__cli.md#resave);
- Translation keys for fields;
- Some condition rules stored in Project Config;

Object templates *are* Twig templates—but there are a few behavioral differences to be aware of!

Like system messages, object templates grant access to the full suite of Craft APIs (via `craft.app`), and are therefore considered a trusted template environment. See the [Security](#security) section below for details.

## [#](#evaluation-invalidation)Evaluation & Invalidation

Craft typically renders object templates in response to specific actions, like an element being saved. This is important for performance reasons, especially when building URIs: the system can’t generate thousands or millions of URIs on-the-fly for the purposes of matching against the current request! Instead, Craft evaluates a template and stores the resulting string, which can be scanned quickly by the database.

Consequently, it’s possible for those values to become stale. If the dynamic attributes in a URI template belong exclusively to the object it was rendered for, it should always be up-to-date—but if it includes attributes or variables from *other* sources (like the [environment](docs_5x__configure.md#env) or another element), Craft isn’t always able to invalidate those cached values. There are two features in place, though, to help avoid common problems with URIs:

- Whenever an entry in a [structure](docs_5x__reference__element-types__entries.md#structures) are saved, the slugs and URIs of its descendants are recursively re-rendered. This helps hierarchical URIs stay in sync with their parent element(s).
- If a component is updated via project config in a way that *could* change URIs of the elements it governs, Craft re-saves those elements. An example of this would be the URI format for a category group in a given site; only elements in sites that

Craft’s [`resave/*` commands](docs_5x__reference__cli.md#resave) can be run on an entire section, category group, or other slice of your elements to re-render their URIs, if you believe a change has caused them to become stale. You must run this command in each environment the change is made!

Most templates (like redirects after a form submission or default asset field upload paths) aren’t affected by this, because it’s always possible to efficiently resolve their values at runtime.

## [#](#objects-variables)Objects & Variables

Every object template is rendered in the context of a primary model. In the same way that an entry’s template (as determined by a [section](docs_5x__reference__element-types__entries.md#sections)’s settings) automatically receives an `entry` variable, object templates expose an `object` variable.

This agnostic variable name is important, because the context a template is rendered in may differ between uses! For example, [asset fields](docs_5x__reference__field-types__assets.md) allow you to customize where files are uploaded… but the path is evaluated using the element that field is attached to. A single field configured with the path `header-images/{slug}` might be attached to an entry, category, *and* tag, and would otherwise have an unpredictable variable naming convention.

In most cases, you don’t even need to include the primary object’s variable name in the template at all, thanks to the concise attribute access [syntax](#syntax)!

### [#](#other-features)Other Features

Because this is a fully-fledged Twig environment, you also get access to all the [global variables](docs_5x__reference__twig__global-variables.md) and Twig language features you’d expect:

```
Current Coupons (Last updated {{ now|date('Y-m-d') }})
Current Coupons (Last updated by {{ currentUser.username }})
```

Global variables must be referenced using the normal Twig output tags, not the [concise syntax](#syntax).

### [#](#stability)Stability

When writing an object template, consider the stability of the resulting value! If you use values that change (like `dateUpdated` or the global `now` variable), the resulting string may change every time you edit an element. Craft only routes to the latest revision of an element, so unstable URI templates will invalidate old URLs.

This is also important to keep in mind for

## [#](#syntax)Syntax

Regular [Twig templates](docs_5x__development__twig.md) evaluate content in pairs of output tags (`{{ ... }}`) and control blocks (`{% ... %}`). Object templates extend this syntax to make referencing attributes of the passed object more concise. For example, outputting an entry’s `slug` attribute would look like this in a normal Twig template:

```
{{ entry.slug }}
```

In an object template, you have the option of this compact syntax:

```
{slug}
```

Craft expands this to `{{ object.slug }}`. In the same way, an object template containing `{postDate.format('Y')}` is expanded to `{{ object.postDate.format('Y') }}`. If you prefer to use the full Twig syntax, each of the object’s attributes are unfolded into the template’s context, making any of these functionally equivalent:

- Compact notation: `{slug}`
- Normalized Twig syntax: `{{ object.slug }}`
- Attributes-as-variables: `{{ slug }}`

The attributes that are exposed in this way are dependent on the kind of object you’re working with. *Methods* of those objects are *not* expanded into the global space, so they must be referred to via `object`, using the compact syntax or dot notation.

Object templates are always limited to a single line. Their output is also generally expected to be a single line, and including line breaks may cause validation errors on any attributes that assume the output from a template is “clean.”

### [#](#conditional-logic)Conditional Logic

Conditions are slightly more complicated, and are often clearest when using complete Twig syntax:

```
{{ object.level == 1 ? 'topics' : object.parent.uri }}/{slug}
```

This template combines a normal Twig output statement with the compact syntax. Craft normalizes this before evaluation, so both statements will work!

### [#](#default-values)Default Values

This pattern above can be simplified using the special `getParentUri()` method (or `parentUri` getter):

```
{parentUri ?? 'topics'}/{slug}
```

The `??` or [null-coalescing  (opens new window)](https://twig.symfony.com/doc/3.x/templates.html#other-operators) operator is equivalent to the `|default` filter, in that it will swallow `null` values and errors, falling back to whatever the right-hand value is.

### [#](#whitespace)Whitespace

Be mindful of spaces between your Twig statements! These will be considered part of the resulting string. Spaces *inside* a Twig expression do *not* contribute to the resulting string.

## [#](#security)Security

Object templates are most useful when they incorporate user-provided content—take URIs for example:

```
blog/{postDate.format('Y')}/{slug}
```

We know that `postDate.format('Y')` will always produce a four-digit number like `2024`… but `slug` is an attribute of the entry element that can be controlled by user input! Fortunately, this is a pretty safe thing to do, because the slug is heavily validated by the time it’s used in the template. Let’s look at some examples of object templates that *aren’t* safe.

### [#](#attribute-access)Attribute Access

If you are accepting user-submitted content, **do not** construct an object template that would allow access to arbitrary attributes:

DangerousSafe

```
profiles/{{ object[slugSource] }}/{id}
```

```
profiles/{{ slugPrefixSource == 'accountType' ? memberType : 'member' }}/{id}
```

While the first template *feels* more dynamic and provides greater control, it would allow anyone updating the user to access other attributes (and potentially *methods*) by updating the record with a malicious value.

### [#](#nested-templates)Nested Templates

Take care when including other templates. Template paths should *always* come from a trusted source!

In the same spirit, you should never render *nested* object templates with the [`renderObjectTemplate()` Twig function](docs_5x__reference__twig__functions.md#renderobjecttemplate), especially when the input comes from an untrusted user.

### [#](#hashing)Hashing

When using the [`redirectInput()` function](docs_5x__reference__twig__functions.md#redirectinput), the provided object template will appear verbatim in the rendered HTML, but prepended with a secure hash. This mechanism allows you to lazily evaluate a template based on some input, without having the template itself be dictated by user input.

Do not incorporate user input into the string passed to `redirectInput()`! The object template should always come from a trusted source.

For example, this usage is easily attacked by someone sending a link one of your site’s users with a carefully-crafted query string:

```
{{ redirectInput(craft.app.request.getQueryParam('maliciousRedirect')) }}
```

The template would be evaluated after the user submits a form, and could contain arbitrary logic that exfiltrates system data.

You may use information about the request to switch behavior, though:

```
{{ redirectInput(currentUser.isInGroup('supporters') ? 'account/receipts' : 'tip/thanks') }}
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/system/object-templates.md)
