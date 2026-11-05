# {% component %} - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/tag/component.html

---

# {% component %}

Twig Tag

- [Variables](docs__4.x__markup__tag__component.md#variables)
- [AJAX Updates](docs__4.x__markup__tag__component.md#ajax-updates)
- [Customizing Components](docs__4.x__markup__tag__component.md#customizing-components)

The `{% component %}` tag will parse the default markup content for a [CMS component](docs__4.x__cms__themes__components.md) and display it on the page. Not all components provide default markup, the documentation for the plugin will guide in the correct usage.

```
___TWIG0___
```

This will render the component partial with a fixed name of **default.htm** and is essentially an alias for the following:

```
___TWIG0___
```

## [#](#variables) Variables

Some components support passing variables to them at render time.

```
___TWIG0___
```

## [#](#ajax-updates) AJAX Updates

To update the component markup with an [AJAX request](docs__4.x__cms__ajax__introduction.md), the output can be wrapped in an [AJAX partial](docs__4.x__markup__tag__ajax-partial.md) so it can be targeted by the `_self` update, including [from within the component itself](docs__4.x__cms__ajax__update-partials.md). Enable this by setting `ajaxPartial` to `true` in the [component class definition](docs__4.x__extend__cms-components.md).

```
public function componentDetails()
{
    return [
        // ...
        'ajaxPartial' => true
    ];
}
```

With this enabled, the `{% component %}` tag wraps its output so that AJAX handlers can update the component in place.

```
___TWIG0___
```

For example, the component markup below submits to its own handler and updates itself with the result.

```
<form
    data-request="contactForm::onSave"
    data-request-update="{ _self: true }">
    <!-- ... -->
</form>
```

## [#](#customizing-components) Customizing Components

In most cases the `{% component %}` tag is not needed and the markup is provided as a usage example for the component API. Components are intended to be customized, this can be done in two ways:

1. Moving the default markup to a partial
2. Overriding component partials using the theme

The [CMS Components article](docs__4.x__cms__themes__components.md) outlines the process of customizing default markup.

#### [#](#see-also) See Also

- [CMS Components](docs__4.x__cms__themes__components.md)

← [{% content %}](docs__4.x__markup__tag__content.md)[{% placeholder %}](docs__4.x__markup__tag__placeholder.md) →
