# Building Twig Tags - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/extend/twig-tags.html

---

# Building Twig Tags

Extending Twig with custom filters and functions.

- [Registering a Filter](docs__4.x__extend__twig-tags.md#registering-a-filter)
- [Registering a Function](docs__4.x__extend__twig-tags.md#registering-a-function)
- [Escaped Output](docs__4.x__extend__twig-tags.md#escaped-output)
- [Advanced Options](docs__4.x__extend__twig-tags.md#advanced-options)

Custom Twig filters and functions can be registered in the CMS with the `registerMarkupTags` method of the [plugin registration class](docs__4.x__extend__extending.md). This article describes how to register your own Twig filters and functions that can be used in the CMS and mail templates.

```
public function registerMarkupTags()
{
    return [
        'filters' => [
            // ...Filters defined here
        ],
        'functions' => [
            // ...Functions defined here
        ]
    ];
}
```

## [#](#registering-a-filter) Registering a Filter

The `filters` key in the registration array may be used for Twig filters. For example, the `|plural` filter can be mapped to the global PHP function `str_plural()` with the following value.

```
'filters' => [
    'plural' => 'str_plural'
]
```

You may also pass a local method. For example, `|uppercase` can be mapped to the `$this->makeAllCaps()` method.

```
'filters' => [
    'uppercase' => [$this, 'makeTextAllCaps']
]
```

This becomes available in Twig as the following.

```
___TWIG0___
```

## [#](#registering-a-function) Registering a Function

Just like filters, the `functions` key can be used to create Twig function. For example, the function could map to a static method call of `Form::open()` instead.

```
'functions' => [
    'form_open' => [Form::class, 'open']
]
```

Static calls also support wildcard definitions. In this example, a function call of `url_foobar()` will translate to a method call of `Url::foobar` and so on.

```
'functions' => [
    'url_*' => [Url::class, '*'],
]
```

Passing a closure is also allowed for either definition.

```
'functions' => [
    'hello_world' => function() { return 'Hello World!'; }
]
```

This is now available in Twig as the following.

```
___TWIG0___
```

## [#](#escaped-output) Escaped Output

It is important to note that custom Twig filters and functions are escaped by default. To disable escaping by default pass the last array value as `false` in the definition.

```
public function registerMarkupTags()
{
    return [
        'functions' => [
            // Escaped Functions
            'input' => 'input',

            // Raw Functions
            'link_to' => ['link_to', false],

            // Escaped Classes
            'str_*' => [\Str::class, '*'],

            // Raw Classes
            'url_*' => [\Url::class, '*', false],
        ],
        'filters' => [
            // Escaped Filters
            'display_name' => [fn ($user) => $user->getDisplayName()],

            // Raw Filters
            'avatar_url' => [fn ($user) => $user->getAvatarUrl(), false],

            // Escaped Classes
            'str_*' => [\Str::class, '*'],

            // Raw Classes
            'url_*' => [\Url::class, '*', false],
        ]
    ];
}
```

## [#](#advanced-options) Advanced Options

In addition to passing the last array value as `false`, you may also pass it as an array to provide [custom options to the Twig extension  (opens new window)](https://twig.symfony.com/doc/3.x/advanced.html). This can include passing environment and context variables to the function.

```
public function registerMarkupTags()
{
    return [
        'filters' => [
            // Unescaped
            'rot13' => ['str_rot13', ['is_safe' => ['html']]],

            // Has Environment
            'env_filter' => [fn ($env, $string) => '...', ['needs_environment' => true]],

            // Has Context
            'context_filter' => [fn ($context, $string) => '...', ['needs_context' => true]],

            // Has Both
            'context_both' => [fn ($env, $context, $string) => '...', [
                'needs_environment' => true,
                'needs_context' => true
            ]],
        ]
    ];
}
```

#### [#](#see-also) See Also

- [Extending Twig  (opens new window)](https://twig.symfony.com/doc/3.x/advanced.html)

← [Extension Methodology](docs__4.x__extend__extending.md)[Building Tailor Fields](docs__4.x__extend__tailor-fields.md) →
