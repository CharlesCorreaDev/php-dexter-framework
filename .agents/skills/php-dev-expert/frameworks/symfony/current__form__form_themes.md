# Form Theming and Customization (Symfony Docs)

> **Fonte / Source:** https://symfony.com/doc/current/form/form_themes.html

---

# Form Theming and Customization

[Edit this page](https://github.com/symfony/symfony-docs/edit/8.1/form/form_themes.rst)

Symfony forms generate HTML using Twig templates called **form themes**. This
article explains how form rendering works, how to customize the appearance of
your forms, and how to create your own themes.

## [How Form Rendering Works](#how-form-rendering-works "Permalink to this headline")

Before diving into customization, it helps to understand how Symfony turns a
form object into HTML. This knowledge makes troubleshooting and advanced
customization much easier.

### [The Rendering Pipeline](#the-rendering-pipeline "Permalink to this headline")

When you call `{{ form(form) }}` in a Twig template, Symfony executes the
following steps for each field:

1. **Determine the block name**: Based on the field type and field id, Symfony
   calculates which Twig block to use (e.g., `text_widget`, `_user_email_row`).
2. **Search for the block**: Symfony looks for that block in the active form
   themes, starting with the most specific and falling back to parent types.
3. **Render the block**: The matching block is rendered with variables containing
   field data (value, errors, label, etc.).

For example, rendering a field of type `EmailType` named `contact` in a form
called `user` goes through this lookup chain:

```
1
2
3
```

```
_user_contact_widget  -->  not found? try parent
email_widget          -->  not found? try parent
text_widget           -->  found in form_div_layout.html.twig
```

This inheritance chain allows you to customize at any level of specificity.

### [Form Field Parts](#form-field-parts "Permalink to this headline")

Each form field is composed of several parts that can be rendered and customized
independently:

| Part | Description |
| --- | --- |
| `row` | The complete field: label + widget + help + errors |
| `label` | The `<label>` element |
| `widget` | The input element(s): `<input>`, `<select>`, `<textarea>` |
| `help` | The help text displayed below the field |
| `errors` | Validation error messages for this field |

Understanding these parts is essential for customization. When you want to change
how something renders, you need to identify which part to target.

## [Using Form Themes](#using-form-themes "Permalink to this headline")

A form theme is a Twig template containing blocks that define how form fields
are rendered. Symfony provides several built-in themes and you can create your own.

### [Built-In Form Themes](#built-in-form-themes "Permalink to this headline")

Symfony ships with the following built-in form themes:

No CSS framework
:   `form_div_layout.html.twig` (the **default theme** used by Symfony, wraps
    each field in a `<div>`) and `form_table_layout.html.twig` (renders the
    form as an HTML `<table>`).

[Bootstrap](https://getbootstrap.com)
:   `bootstrap_5_layout.html.twig` / `bootstrap_5_horizontal_layout.html.twig`
    for the most recent Bootstrap 5 version. Read more about
    [how to use the Bootstrap form theme](current__form__bootstrap5.md).

    There are also form themes for legacy Bootstrap versions: `bootstrap_4_layout.html.twig`
    / `bootstrap_4_horizontal_layout.html.twig` for [Bootstrap 4 integration](current__form__bootstrap4.md)
    and `bootstrap_3_layout.html.twig` / `bootstrap_3_horizontal_layout.html.twig`
    for Bootstrap 3.

[Foundation CSS framework](https://get.foundation/)
:   `foundation_5_layout.html.twig` and `foundation_6_layout.html.twig`
    (for versions 5 and 6 respectively).

[Tailwind CSS](https://tailwindcss.com/)
:   `tailwind_2_layout.html.twig` (minimal styles). Read more about
    [how to use the TailwindCSS form theme](current__form__tailwindcss.md).

    `daisyui_5_layout.html.twig` for [daisyUI](https://daisyui.com/) 5, a component library based
    on Tailwind CSS.

    8.1

    The daisyUI form theme was introduced in Symfony 8.1.

### [Applying Themes Globally](#applying-themes-globally "Permalink to this headline")

To use a theme for all forms in your application, configure it in
`twig.form_themes`:

YAML

PHP

```
1
2
3
```

```
# config/packages/twig.yaml
twig:
    form_themes: ['bootstrap_5_layout.html.twig']
```

```
1
2
3
4
5
6
7
8
```

```
// config/packages/twig.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'twig' => [
        'form_themes' => ['bootstrap_5_layout.html.twig'],
    ],
]);
```

**Using Multiple Themes**

You can specify multiple themes. Symfony searches them in **reverse order**
(last theme in the list is checked first), falling back through the list until
it finds a matching block:

YAML

PHP

```
1
2
3
4
5
6
```

```
# config/packages/twig.yaml
twig:
    form_themes:
        - 'form_div_layout.html.twig'        # last fallback
        - 'bootstrap_5_layout.html.twig'     # checked second
        - 'form/my_customizations.html.twig' # checked first
```

```
1
2
3
4
5
6
7
8
9
10
11
12
```

```
// config/packages/twig.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return App::config([
    'twig' => [
        'form_themes' => [
            'form_div_layout.html.twig',        // last fallback
            'bootstrap_5_layout.html.twig',     // checked second
            'form/my_customizations.html.twig', // checked first
        ],
    ],
]);
```

This layering approach lets you override only the specific blocks you need.
Your custom theme can define a single block, and Symfony handles the rest using
the other themes in the list.

### [Applying Themes to Single Forms](#applying-themes-to-single-forms "Permalink to this headline")

Use the `form_theme` Twig tag to apply a theme to a specific form:

```
1
2
3
4
5
```

```
{% form_theme form 'form/my_theme.html.twig' %}

{{ form_start(form) }}
    {# ... #}
{{ form_end(form) }}
```

Your theme only needs to define the blocks you want to customize. Symfony
combines your theme with the globally configured themes: it first looks for
blocks in your theme, then falls back to the global themes for anything not
defined. This means a theme with a single block is perfectly valid.

#### [Multiple themes for one form](#multiple-themes-for-one-form "Permalink to this headline")

When you need to combine several themes, use the `with` keyword and an array:

```
1
2
3
4
```

```
{% form_theme form with [
    'bootstrap_5_layout.html.twig',
    'form/my_customizations.html.twig'
] %}
```

Symfony searches these themes in **reverse order** (last to first). In this
example, it first looks in `my_customizations.html.twig`, then falls back to
`bootstrap_5_layout.html.twig`, and finally to any globally configured themes.
This allows you to layer customizations on top of a base theme.

#### [Themes for child forms](#themes-for-child-forms "Permalink to this headline")

You can apply different themes to embedded forms or collection entries. The
child theme only affects that specific part of the form:

```
1
2
```

```
{% form_theme form 'form/main_theme.html.twig' %}
{% form_theme form.address 'form/address_theme.html.twig' %}
```

In this example, the address sub-form uses `address_theme.html.twig` while
the rest of the form uses `main_theme.html.twig`.

#### [Disabling global themes](#disabling-global-themes "Permalink to this headline")

By default, the `form_theme` tag adds your theme on top of the globally
configured themes. Add the `only` keyword to use exclusively the specified
themes, ignoring all global configuration:

```
1
```

```
{% form_theme form with ['form/standalone_theme.html.twig'] only %}
```

This is useful when building reusable components (like admin bundles) that must
render consistently regardless of the application's global theme configuration.

Warning

When using `only`, your theme must define all necessary blocks. Either
provide a complete theme or extend a built-in one using Twig's `use` tag:

```
1
2
3
4
5
6
```

```
{# templates/form/standalone_theme.html.twig #}
{% use 'form_div_layout.html.twig' %}

{% block text_widget %}
    {# your customization #}
{% endblock %}
```

## [Block Naming Rules](#block-naming-rules "Permalink to this headline")

The key to form customization is understanding how Symfony names the Twig blocks
it looks for. There are two naming patterns depending on your goal.

### [Customizing by Field Type](#customizing-by-field-type "Permalink to this headline")

To customize **all fields of a specific type**, use the pattern:
`{type}_{part}`

| Block Name | Customizes |
| --- | --- |
| `text_widget` | The `<input>` for all text fields |
| `textarea_widget` | The `<textarea>` for all textarea fields |
| `choice_widget` | The `<select>` or radio/checkbox group |
| `date_row` | The complete row for all date fields |
| `form_label` | Labels for all field types |
| `form_errors` | Error display for all field types |

The `{type}` corresponds to the form type's block prefix. For built-in types,
this is typically the type name in snake\_case (`TextType` is `text`,
`DateTimeType` is `datetime`).

### [Customizing Individual Fields](#customizing-individual-fields "Permalink to this headline")

To customize **one specific field**, use the pattern: `_{form}_{field}_{part}`.
The block name starts with an underscore and includes the form name and field name:

| Block Name | Customizes |
| --- | --- |
| `_user_email_widget` | The email input in UserType |
| `_user_email_row` | The complete email row in UserType |
| `_product_price_label` | The price label in ProductType |
| `_registration_terms_errors` | Errors for terms checkbox in RegistrationType |

The form name comes from your form type class name in snake\_case (`UserType` is
`user`, `ProductRegistrationFormType` is `product_registration_form`).

Tip

Not sure what the block name should be? Check the Form panel in the
[Symfony profiler](current__profiler.md). It lists all block prefixes used during
block lookup for each field. Alternatively, inspect the rendered HTML: the field's
`id` attribute (e.g., `user_email`) gives you the form and field names.

**Overriding the field name in blocks:**

Use the `block_name` option to change the field name used in the block:

```
1
2
3
```

```
$builder->add('name', TextType::class, [
    'block_name' => 'custom_name',
]);
```

Now Symfony looks for `_product_custom_name_widget` instead of
`_product_name_widget`. This is useful when you have multiple fields that
should share the same custom rendering.

### [Customizing Specific Field Instances](#customizing-specific-field-instances "Permalink to this headline")

Sometimes you need different rendering for the same field type in different
contexts. Use the `block_prefix` option to add a custom prefix to the list
of block names that Symfony searches for when rendering the field:

```
1
2
3
```

```
$builder->add('biography', TextareaType::class, [
    'block_prefix' => 'book_author',
]);
```

Now you can define `book_author_widget`, `book_author_row`, etc.
This is useful when you can't or don't want to create a
[custom form type](current__form__create_custom_field_type.md).

### [Block Inheritance](#block-inheritance "Permalink to this headline")

Every form type [has a parent type](current__forms.md#form-type-hierarchy), and Symfony uses
this hierarchy when searching for blocks. For example, `EmailType` extends
`TextType`, which extends `FormType`:

```
1
2
3
```

```
email_widget  -->  not found
text_widget   -->  not found
form_widget   -->  found (renders <input type="text">)
```

This means customizing `text_widget` affects `EmailType`, `UrlType`,
`SearchType`, and other text-based types.

Tip

See the [Form Types Reference](current__reference__forms__types.md) for the parent
type of each built-in type.

### [Customizing Collections](#customizing-collections "Permalink to this headline")

[Collections](current__form__form_collections.md) have additional block name patterns
for the collection itself (`collection_*`) and its entries (`collection_entry_*`):

```
1
2
3
4
5
6
7
8
9
10
11
12
```

```
{% block collection_row %} ... {% endblock %}
{% block collection_label %} ... {% endblock %}
{% block collection_widget %} ... {% endblock %}
{% block collection_help %} ... {% endblock %}
{% block collection_errors %} ... {% endblock %}

{# the '_entry' suffix targets individual items within the collection #}
{% block collection_entry_row %} ... {% endblock %}
{% block collection_entry_label %} ... {% endblock %}
{% block collection_entry_widget %} ... {% endblock %}
{% block collection_entry_help %} ... {% endblock %}
{% block collection_entry_errors %} ... {% endblock %}
```

#### [Customizing a Specific Collection](#customizing-a-specific-collection "Permalink to this headline")

Consider an `ArticleType` form with a `tags` field that is a collection of
`TagType` forms (each `TagType` has a `name` field):

```
1
2
3
4
5
6
7
8
9
10
11
```

```
{% block _article_tags_row %}
    {# the entire tags collection (label, widget, help, errors) #}
{% endblock %}

{% block _article_tags_entry_row %}
    {# each individual TagType entry in the collection #}
{% endblock %}

{% block _article_tags_entry_name_widget %}
    {# the "name" field widget inside each TagType #}
{% endblock %}
```

You can chain it for nested collections (e.g., `_article_tags_entry_colors_entry_row`
for a collection inside each tag).

### [Quick Reference: What to Customize](#quick-reference-what-to-customize "Permalink to this headline")

Use this table to find the right block name for common customization tasks:

| I want to... | Block to override |
| --- | --- |
| Change how all text inputs render | `text_widget` |
| Add a wrapper around all fields | `form_row` |
| Customize all labels | `form_label` |
| Change error message display | `form_errors` |
| Customize all help text | `form_help` |
| Customize a specific field's input | `_{form}_{field}_widget` |
| Customize a specific field's entire row | `_{form}_{field}_row` |
| Customize all date fields | `date_widget`, `date_row` |
| Customize all checkbox fields | `checkbox_widget`, `checkbox_row` |
| Customize collection entries | `collection_entry_row`, `collection_entry_widget` |

## [Creating Custom Themes](#creating-custom-themes "Permalink to this headline")

You can create themes in two ways: in a separate template file (reusable across
your application) or in the same template as your form (for one-off customizations).

### [Creating a Theme in a Separate File](#creating-a-theme-in-a-separate-file "Permalink to this headline")

Create a Twig template with the blocks you want to customize:

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
```

```
{# templates/form/theme.html.twig #}
{% use 'form_div_layout.html.twig' %}

{% block form_row %}
    <div class="form-field">
        {{ form_label(form) }}
        {{ form_widget(form) }}
        {{ form_help(form) }}
        {{ form_errors(form) }}
    </div>
{% endblock %}

{% block text_widget %}
    <input type="text" {{ block('widget_attributes') }} class="input-text" value="{{ value }}">
{% endblock %}
```

The `{% use %}` tag imports all blocks from the parent theme, allowing you to
override only what you need. Using `parent()` inside a block calls the
original implementation:

```
1
2
3
4
5
6
7
8
9
10
```

```
{# templates/form/theme.html.twig #}
{% use 'form_div_layout.html.twig' %}

{# ... #}

{% block text_widget %}
    <div class="input-wrapper">
        {{ parent() }}
    </div>
{% endblock %}
```

### [Creating a Theme in the Same Template](#creating-a-theme-in-the-same-template "Permalink to this headline")

For customizations specific to one page, define blocks in the same template:

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
```

```
{# templates/user/registration.html.twig #}
{% extends 'base.html.twig' %}

{% form_theme form _self %}

{% block _registration_email_row %}
    <div class="email-field-custom">
        {{ form_label(form) }}
        {{ form_widget(form) }}
        <p class="hint">We'll never share your email.</p>
        {{ form_errors(form) }}
    </div>
{% endblock %}

{% block body %}
    <h1>Register</h1>
    {{ form(form) }}
{% endblock %}
```

Warning

This only works in templates that **extend another template**. If the template
is rendered on its own (for example, a reusable partial included with
`include()`), any theme blocks you define in it will be rendered as regular
output. This can lead to unexpected markup and errors due to missing variables.

#### [Reusing Built-In Blocks](#reusing-built-in-blocks "Permalink to this headline")

When you need to call the original block implementation in a same-template theme,
use `{% use %}` with `parent()`:

```
1
2
3
4
5
6
7
8
```

```
{% form_theme form _self %}
{% use 'form_div_layout.html.twig' %}

{% block text_widget %}
    <div class="custom-wrapper">
        {{ parent() }}
    </div>
{% endblock %}
```

If you have your own `text_widget` block that conflicts with the one you want
to import, use block renaming:

```
1
2
3
4
5
6
7
8
```

```
{% form_theme form _self %}
{% use 'form_div_layout.html.twig' with text_widget as base_text_widget %}

{% block text_widget %}
    <div class="custom-wrapper">
        {{ block('base_text_widget') }}
    </div>
{% endblock %}
```

#### [Reusing the Parent Form Type Rendering](#reusing-the-parent-form-type-rendering "Permalink to this headline")

When customizing form themes, you may want to reuse the rendering from the
parent type in the type hierarchy. For example, when customizing `email_widget`,
you might want to wrap the default `text_widget` rendering.

To do this, call the same `form_*()` function inside the block with the current
`form` variable. Symfony will automatically resolve to the next candidate in
the block prefix list (following the type hierarchy):

```
1
2
3
4
5
6
```

```
{% block email_widget %}
    <div class="email-wrapper">
        {# this will render using text_widget (the parent type) #}
        {{ form_widget(form) }}
    </div>
{% endblock %}
```

This approach is more maintainable than hardcoding the parent block name, as it
automatically adapts if the type hierarchy changes.

## [Practical Examples](#practical-examples "Permalink to this headline")

This section shows complete examples for common customization scenarios.

### [Adding a Wrapper to All Fields](#adding-a-wrapper-to-all-fields "Permalink to this headline")

Wrap every field in a custom container:

```
1
2
3
4
5
6
7
8
9
10
11
12
13
```

```
{# templates/form/theme.html.twig #}
{% use 'form_div_layout.html.twig' %}

{% block form_row %}
    <div class="field-container" data-field-name="{{ name }}">
        {{ form_label(form) }}
        <div class="field-input">
            {{ form_widget(form) }}
        </div>
        {{ form_help(form) }}
        {{ form_errors(form) }}
    </div>
{% endblock %}
```

### [Adding Icons to Input Fields](#adding-icons-to-input-fields "Permalink to this headline")

Add an icon before or after input widgets:

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
```

```
{# templates/form/theme.html.twig #}
{% use 'form_div_layout.html.twig' %}

{% block email_widget %}
    <div class="input-with-icon">
        <span class="icon">✉️</span>
        {{ parent() }}
    </div>
{% endblock %}

{% block search_widget %}
    <div class="input-with-icon">
        <span class="icon">🔍</span>
        {{ parent() }}
    </div>
{% endblock %}
```

### [Customizing Error Display](#customizing-error-display "Permalink to this headline")

Display errors as a styled alert box:

```
1
2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
```

```
{# templates/form/theme.html.twig #}
{% use 'form_div_layout.html.twig' %}

{% block form_errors %}
    {% if errors|length > 0 %}
        {% if form is rootform %}
            {# global form errors #}
            <div class="alert alert-danger" role="alert">
                <strong>Please fix the following errors:</strong>
                <ul>
                    {% for error in errors %}
                        <li>{{ error.message }}</li>
                    {% endfor %}
                </ul>
            </div>
        {% else %}
            {# field-level errors #}
            {% for error in errors %}
                <span class="field-error">{{ error.message }}</span>
            {% endfor %}
        {% endif %}
    {% endif %}
{% endblock %}
```

### [Adding Required Field Indicators](#adding-required-field-indicators "Permalink to this headline")

Display an asterisk next to required field labels:

```
1
2
3
4
5
6
7
8
9
10
11
```

```
{# templates/form/theme.html.twig #}
{% use 'form_div_layout.html.twig' %}

{% block form_label %}
    {% if label is not same as(false) %}
        <label{% with {attr: label_attr} %}{{ block('attributes') }}{% endwith %}>
            {{ label }}
            {% if required %}<span class="required-indicator">*</span>{% endif %}
        </label>
    {% endif %}
{% endblock %}
```

## [Learn More](#learn-more "Permalink to this headline")

- [Bootstrap 5 theme with switches, floating labels, input groups](current__form__bootstrap5.md)
- [Tailwind CSS theme customization](current__form__tailwindcss.md)
- [Creating reusable custom form types](current__form__create_custom_field_type.md)
- [Complete reference of all built-in form types](current__reference__forms__types.md)

This work, including the code samples, is licensed under a
[Creative Commons BY-SA 3.0](https://creativecommons.org/licenses/by-sa/3.0/) license.

Search

Version
