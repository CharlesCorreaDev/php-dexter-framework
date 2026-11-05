# Defining Options - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/element/define-options.html

---

# Defining Options

Defining the options property used across many definitions.

- [Option Arrays](docs__4.x__element__define-options.md#option-arrays)
- [Option Presets](docs__4.x__element__define-options.md#option-presets)
- [Option Methods](docs__4.x__element__define-options.md#option-methods)
- [Detailed Option Definitions](#detailed-option-definitions)

Commonly, you may encounter the **options**, **optionsMethod** or **optionsPreset** property, this article describes in more detail how to configure options.

## [#](#option-arrays) Option Arrays

The `options` property should specify the options directly as part of the definition as a key-value pair, where the value and label are independently specified.

```
options:
    draft: Draft
    published: Published
    archived: Archived
```

The keys can be integers with their label.

```
options:
    1: Simple
    2: Complex
```

In addition to a simple arrays, some fields such as [radio lists](docs__4.x__element__form__field-radio.md) support specifying a description as part of their `options` values. This is where the value is defined as another array with the syntax `key: [label, description]`.

```
options:
    all: [All, Guests and customers will be able to access this page.]
    registered: [Registered only, Only logged in member will be able to access this page.]
    guests: [Guests only, Only guest users will be able to access this page.]
```

Other fields, such as [dropdown fields](docs__4.x__element__form__field-dropdown.md) support specifying an icon, image or color as part of their `options` values. If the second item in the array starts with a `#` then it is considered a color, and if the value contains a `.` then it is considered an image, otherwise it is considered an icon class.

```
options:
    red: [Color, '#ff0000']
    icon: [Icon, 'oc-icon-calendar']
    image: [Image, '/path/to/image.png']
```

## [#](#option-presets) Option Presets

The `optionsPreset` property specifies a preset code that can be used to request the available options.

```
optionsPreset: icons
```

The following presets are available:

| Preset | Description |
| --- | --- |
| **icons** | Lists available icon names (eg: `oc-icon-calendar`) |
| **icons@phosphor** | Lists available Phosphor icon names (eg: `ph ph-calendar`) |
| **locales** | Lists available locales (eg: `en-au`) |
| **flags** | Lists locales with their icons as flags (eg: `[en-au, flag-au]`) |
| **flags@short** | Lists locales with short codes and flag icons |
| **timezones** | Lists available timezones (eg: `Australia/Sydney`) |

## [#](#option-methods) Option Methods

The `optionsMethod` property specifies a callable PHP method that can be used to request the available options. Typically the method name will refer to a method local to the associated model.

```
optionsMethod: getMyOptionsFromModel
```

The method name can also be a static method on any object.

```
optionsMethod: MyAuthor\MyPlugin\Helpers\FormHelper::getMyStaticMethodOptions
```

### [#](#detailed-option-definitions) Detailed Option Definitions

Inside the method, an detailed definition can be used to specify more advanced options, such as setting individual attributes for each option. A detailed definition is identified by its associated array structure.

```
public function getDetailedFieldOptions()
{
    return [
        1 => [
            'label' => 'Option 1',
            'comment' => 'This is option one'
        ],
        2 => [
            'label' => 'Option 2',
            'comment' => 'This is option two',
            'disabled' => true
        ]
    ];
}
```

The following properties are supported where possible:

| Property | Description |
| --- | --- |
| **label** | a name when displaying the option to the user. |
| **comment** | places a descriptive comment below the option label. |
| **readOnly** | specifies if the option is read-only or not. |
| **disabled** | specifies if the option is disabled or not. |
| **hidden** | defines the option without ever displaying it. |
| **color** | defines a status indicator color for the option as a hex color (dropdown) |
| **icon** | specifies an icon name for this option (dropdown) |
| **image** | specifies an image URL for this option (dropdown) |
| **optgroup** | set to `true` if the children should belong to an option group structure, default: `false` (dropdown) |
| **children** | specifies child options as another array for a nested structure (checkbox list) |

Use the `children` property if the option definition supports nesting. Generally, this will display a structure for checkbox lists and implement an option group for dropdowns.

```
public function getDetailedFieldOptions()
{
    return [
        1 => [
            'label' => 'Option 1',
            'comment' => 'This is option one',
            'children' => [
                2 => [
                    'label' => 'Option 2',
                    'comment' => 'This is option two',
                ],
                // ...
            ]
        ],
    ];
}
```

#### [#](#see-also) See Also

- [Checkbox List Field](docs__4.x__element__form__field-checkboxlist.md)
- [Dropdown Field](docs__4.x__element__form__field-dropdown.md)
- [Radio Field](docs__4.x__element__form__field-radio.md)

← [Inspector Types](docs__4.x__element__inspector-types.md)[Available Icons](docs__4.x__element__available-icons.md) →
