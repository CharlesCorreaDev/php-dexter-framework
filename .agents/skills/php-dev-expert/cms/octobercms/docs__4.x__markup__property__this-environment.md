# this.environment - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/property/this-environment.html

---

# this.environment

Twig Property

- [Example](docs__4.x__markup__property__this-environment.md#example)

You can access the current environment object via `this.environment` and it returns a string that references the [current environment configuration](docs__4.x__setup__configuration.md).

## [#](#example) Example

The following example will display a banner if the website is running in the test environment:

```
___TWIG0___

    <div class="banner">Test Environment</div>

___TWIG1___
```

← [this.controller](docs__4.x__markup__property__this-controller.md)[this.session](docs__4.x__markup__property__this-session.md) →
