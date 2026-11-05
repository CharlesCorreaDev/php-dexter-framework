# Form Fields - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/element/form-fields.html

---

# Form Fields

Learn about the different form field types.

- [Available Fields](docs__4.x__element__form-fields.md#available-fields)
- [Field Properties](docs__4.x__element__form-fields.md#field-properties)
- [Tab Properties](#tab-properties)
- [Tooltip](#tooltip)
- [Custom Field Types](#custom-field-types)
- [Nested Field Selection](#nested-field-selection)
- [Field Facades](#field-facades)
- [Field Conditions](docs__4.x__element__form-fields.md#field-conditions)
- [Trigger Events](#trigger-events)
- [Input Preset Converter](#input-preset-converter)

[More...](#)

Form Fields, Form UI and Form Widgets are field definitions used by forms, such as a text input. These are commonly referred to by the following areas:

- [CMS Theme Settings](docs__4.x__cms__themes__settings.md)
- [Tailor Content Fields](docs__4.x__cms__tailor__content-fields.md)
- [Backend Form Controller](docs__4.x__extend__forms__form-controller.md)
- [Backend Relation Controller](docs__4.x__extend__forms__relation-controller.md)

All form fields are identified as their individual **type** property.

```
fields:
    myfield:
        type: textarea
        # ...
```

Form Fields contain generic and simple fields. Form UI is for user interface elements that can be included in forms to help with the layout design. Form Widgets will often introduce more complex functionality, it is common for plugins to provide their own custom form widgets. Tailor Fields are fields that are only available inside tailor blueprints.

## [#](#available-fields) Available Fields

The following form fields are available:

[Mixin](docs__4.x__element__content__field-mixin.md)[Entries](docs__4.x__element__content__field-entries.md)[Text](docs__4.x__element__form__field-text.md)[Number](docs__4.x__element__form__field-number.md)[Password](docs__4.x__element__form__field-password.md)[Email](docs__4.x__element__form__field-email.md)[Textarea](docs__4.x__element__form__field-textarea.md)[Dropdown](docs__4.x__element__form__field-dropdown.md)[Radio List](docs__4.x__element__form__field-radio.md)[Balloon Selector](docs__4.x__element__form__field-balloon.md)[Checkbox](docs__4.x__element__form__field-checkbox.md)[Checkbox List](docs__4.x__element__form__field-checkboxlist.md)[Switch](docs__4.x__element__form__field-switch.md)[Code Editor](docs__4.x__element__form__widget-codeeditor.md)[Color Picker](docs__4.x__element__form__widget-colorpicker.md)[Data Table](docs__4.x__element__form__widget-datatable.md)[Date Picker](docs__4.x__element__form__widget-datepicker.md)[File Upload](docs__4.x__element__form__widget-fileupload.md)[Markdown Editor](docs__4.x__element__form__widget-markdown.md)[Media Finder](docs__4.x__element__form__widget-mediafinder.md)[Nested Form](docs__4.x__element__form__widget-nestedform.md)[Record Finder](docs__4.x__element__form__widget-recordfinder.md)[Relation](docs__4.x__element__form__widget-relation.md)[Repeater](docs__4.x__element__form__widget-repeater.md)[Rich Editor](docs__4.x__element__form__widget-richeditor.md)[Page Finder](docs__4.x__element__form__widget-pagefinder.md)[Sensitive](docs__4.x__element__form__widget-sensitive.md)[Tag List](docs__4.x__element__form__widget-taglist.md)[Currency](docs__4.x__element__form__widget-currency.md)[Boxes](docs__4.x__element__form__widget-boxes.md)[Section](docs__4.x__element__form__ui-section.md)[Hint](docs__4.x__element__form__ui-hint.md)[Ruler](docs__4.x__element__form__ui-ruler.md)[Partial](docs__4.x__element__form__ui-partial.md)

## [#](#field-properties) Field Properties

For each field you can specify these common properties, where applicable.

| Property | Description |
| --- | --- |
| **label** | a name when displaying the form field to the user. |
| **type** | defines how this field should be rendered. Default: `text`. |
| **span** | aligns the form field to one side. Options: `auto`, `left`, `right`, `row`, `full`, `adaptive`. Default: `full`. |
| **spanClass** | used with the span `row` property to display the form as a Bootstrap grid, for example, `spanClass: col-4`. |
| **size** | specifies a field size for fields that use it, for example, the textarea field. Options: `tiny`, `small`, `large`, `huge`, `giant`. |
| **placeholder** | if the field supports a placeholder value. |
| **comment** | places a descriptive comment below the field. |
| **commentAbove** | places a comment above the field. |
| **commentHtml** | allow HTML markup inside the comment. Options: `true`, `false`. |
| **default** | specify the default value for the field. For `dropdown`, `checkboxlist`, `radio` and `balloon-selector` widgets, you may specify an option key here to have it selected by default. |
| **defaultFrom** | takes the default value from the value of another model attribute. |
| **tab** | assigns the field to a tab. |
| **cssClass** | assigns a CSS class to the field container. |
| **autoFocus** | flags the field to be focused when the form loads. Default: `false`. |
| **readOnly** | prevents the field from being modified. Options: `true`, `false`. |
| **disabled** | prevents the field from being modified and excludes it from the saved data. Options: `true`, `false`. |
| **hidden** | hides the field from the view and excludes it from the saved data. Options: `true`, `false`. |
| **stretch** | specifies if this field stretches to fit the parent height. |
| **context** | specifies what context should be used when displaying the field. Context can also be passed by using an `@` symbol in the field name, for example, `name@update`. |
| **dependsOn** | an array of other field names this field [depends on](docs__4.x__extend__forms__field-dependencies.md), when the other fields are modified, this field will update. |
| **changeHandler** | the name of an AJAX handler to call when the field value is changed, optional. |
| **trigger** | specify conditions for this field using trigger events. |
| **preset** | allows the field value to be initially set by the value of another field, converted using the input preset converter. |
| **required** | places a red asterisk next to the field label to indicate it is required. Be sure to use the [validation trait on the model](docs__4.x__extend__database__traits.md) as this is not enforced by the form controller. |
| **attributes** | specify custom HTML attributes to add to the form field element. |
| **containerAttributes** | specify custom HTML attributes to add to the form field container. |
| **order** | a numerical weight when determining the display order, default value increments at 100 points per field. |
| **permissions** | the [permissions](docs__4.x__extend__backend__permissions.md) that the current backend user must have in order for the field to be used. Supports either a string for a single permission or an array of permissions of which only one is needed to grant access. |
| **tooltip** | adds an icon with a tooltip next to the field label. See below for more detailed settings. |

### [#](#tab-properties) Tab Properties

An example of specifying field definitions in tabs.

```
tabs:
    fields:
        username:
            type: text
            label: Username
            tab: User

        groups:
            type: relation
            label: Groups
            tab: Groups
```

For each tab definition, namely `tabs` and `secondaryTabs`, you can specify these properties.

| Property | Description |
| --- | --- |
| **stretch** | specifies if this tab stretches to fit the parent height. |
| **defaultTab** | the default tab to assign fields to. Default: Misc. |
| **activeTab** | selected tab when the form first loads, name or index. Default: `1` |
| **icons** | assign icons to tabs using tab names as the key. |
| **lazy** | array of tabs to be loaded dynamically when clicked. Useful for tabs that contain large amounts of content. |
| **identifiers** | array of custom HTML identifiers for targeting the tab. Useful for showing and hiding tabs using JavaScript. |
| **linkable** | determines if the tabs can be linked using URL fragments. Default: `true` |
| **cssClass** | assigns a CSS class to the tab container. |
| **paneCssClass** | assigns a CSS class to an individual tab pane. Value is an array, key is tab index or label, value is the CSS class. It can also be specified as a string, in which case the value will be applied to all tabs. |

An example applying properties to tabs.

```
tabs:
    stretch: true
    defaultTab: User
    cssClass: text-blue

    lazy:
        - Groups

    paneCssClass:
        1: first-tab
        2: second-tab

    icons:
        User: icon-user
        Groups: icon-group

    identifiers:
        User: userTab

    fields:
        # [...]
```

### [#](#tooltip) Tooltip

The `tooltip` property enhances form fields by adding an informational icon next to the field label. Hovering over this icon displays a tooltip, offering additional context or details about the field. This feature aids in providing users with guidance or clarification for understanding field options.

```
status:
    label: Status
    type: dropdown
    tooltip: Select the current status of this item
```

In addition to providing a tooltip `title`, you can also specify the `icon` ([available icons](docs__4.x__element__available-icons.md)), the `placement` (`right`, `bottom`, `left`, default value is `top`), and enable HTML content with `isHtml`.

```
status:
    label: Status
    type: dropdown
    tooltip:
        title: "<b>Draft</b> = work in progress<br><b>Published</b> = visible to users"
        isHtml: true
        placement: bottom
        icon: icon-question-circle
```

### [#](#custom-field-types) Custom Field Types

There are various native field types that can be used for the **type** setting. It is also possible to render a field directly by specifying the PHP class name of a [form field widget](docs__4.x__extend__forms__form-widgets.md).

```
blog_content:
    type: Backend\FormWidgets\RichEditor
    size: huge
```

### [#](#nested-field-selection) Nested Field Selection

```
avatar[name]:
    label: Avatar
    comment: will be saved in the Avatar table
```

The above example would fetch and save the value in PHP equivalent of `$record->avatar->name` or `$record->avatar['name']` respectively.

### [#](#field-facades) Field Facades

Sometimes you may need to display a field while preventing it from being submitted. A field can be defined as a facade by adding an underscore (\_) before the name of the field. These fields are purged automatically and no longer saved to the model, such as with the following `_map` field.

```
address:
    label: Title
    type: text

_map:
    label: Point your address on the map
    type: mapviewer
```

## [#](#field-conditions) Field Conditions

Sometimes you may want to manipulate the value or appearance of a form field under certain conditions, for example, you may want to hide an input if a checkbox is ticked or preset the value of another field.

### [#](#trigger-events) Trigger Events

Trigger Events are defined with the `trigger` form field property and is a simple browser based solution that uses JavaScript. It allows you to change elements attributes such as visibility or value, based on another elements' state. Here is a sample definition:

```
is_delayed:
    label: Send later
    comment: Place a tick in this box if you want to send this message at a later time.
    type: checkbox

send_at:
    label: Send date
    type: datepicker
    cssClass: field-indent
    trigger:
        action: show
        field: is_delayed
        condition: checked
```

In the above example the `send_at` form field will only be shown if the `is_delayed` field is checked. In other words, the field will show (action) if the other form input (field) is checked (condition).

The `trigger` definition specifies these properties.

| Property | Description |
| --- | --- |
| **action** | defines the action applied to this field when the condition is met. Supported values: `show`, `hide`, `enable`, `disable`, `empty`, `fill[somevalue]`. |
| **field** | reference to the other field name that triggers the action. Example: `color` or `color[]`. |
| **condition** | determines the condition the specified field should satisfy for the condition to be considered `true`. Supported values: `checked`, `unchecked`, `value[somevalue]`. |

#### [#](#multiple-actions) Multiple Actions

You may combine multiple actions by separating them with a pipe `|` symbol. The following will both display and empty the input when the trigger condition is met.

```
trigger:
    action: show|empty
    condition: checked
    field: name
```

#### [#](#multiple-value-conditions) Multiple Value Conditions

When using the `value[]` condition, you may look for multiple values by passing extra values after the first one, which takes the format `value[][]`.

```
trigger:
    action: show
    condition: value[csv][csv_custom]
    field: file_format
```

#### [#](#wildcard-value-conditions) Wildcard Value Conditions

You may check the `value[]` condition matches multiple possible values using a wildcard character (`*`), for example, **foo\*** matches anything that starts with "foo", and **\*bar** matches anything that ends with "bar".

```
trigger:
    action: show
    condition: value[*.mp4]
    field: file_name
```

The `value[]` can be used to match an empty value.

```
trigger:
    action: show
    condition: value[]
    # ...
```

Likewise, the `value[*]` condition can be used to match any value.

```
trigger:
    action: show
    condition: value[*]
    # ...
```

#### [#](#multiple-field-values) Multiple Field Values

Some fields, such as [Checkbox List](docs__4.x__element__form__field-checkboxlist.md) and [Tag List](docs__4.x__element__form__widget-taglist.md), will store their values as an array. When referencing these fields, the field name should use an array suffix (`[]`) to look at all possible values. For example, if a `colors` field name supports multiple values, the field name `colors[]` should be used as a reference.

```
trigger:
    action: show
    condition: value[red][green]
    field: colors[]
```

#### [#](#referencing-parent-fields) Referencing Parent Fields

Normally the field name refers to a field in the same level form. For example, if this field is in a [repeater widget](docs__4.x__element__form__widget-repeater.md), only fields in that same repeater widget will be checked. However, if the field name is preceded by a caret symbol `^` like: `^parent_field`, it will refer to a repeater widget or form one level higher than the field itself.

In the example below, the `colors` field will be shown when the `type` field is set to **Complex**.

```
fields:
    type:
        label: Type
        type: dropdown
        options:
            1: Simple
            2: Complex

    content:
        label: Content
        type: nestedform
        form:
            fields:
                colors:
                    label: Colors
                    type: colorpicker
                    trigger:
                        action: show
                        field: ^type
                        condition: value[2]
```

Additionally, if more than one caret `^` is used, it will refer that many levels higher: `^^grand_parent_field`, `^^^grand_grand_parent_field`, etc.

### [#](#input-preset-converter) Input Preset Converter

The input preset converter is defined with the `preset` form field property and allows you to convert text entered into an element to a URL, slug or file name value in another input element.

In this example we will automatically fill out the `url` field value when a user enters text in the `title` field. If the text **Hello world** is typed in for the Title, the URL will follow suit with the converted value of **/hello-world**. This behavior will only occur when the destination field (`url`) is empty and untouched.

```
title:
    label: Title

url:
    label: URL
    preset:
        field: title
        type: url
```

Alternatively, the `preset` value can also be a string that refers to the **field** only, the `type` option will then default to **slug**.

```
slug:
    label: Slug
    preset: title
```

The following options are available for the `preset` option:

| Option | Description |
| --- | --- |
| **field** | defines the other field name to source the value from. |
| **type** | specifies the conversion type. See below for supported values. |
| **prefixInput** | optional, prefixes the converted value with the value found in the supplied input element using a CSS selector. |

Following are the supported types:

| Type | Description |
| --- | --- |
| **exact** | copies the exact value |
| **slug** | formats the copied value as a slug |
| **url** | same as slug but prefixed with a / |
| **camel** | formats the copied value with camelCase |
| **file** | formats the copied value as a file name with whitespace replaced with dashes |

[List Columns](docs__4.x__element__list-columns.md) →
