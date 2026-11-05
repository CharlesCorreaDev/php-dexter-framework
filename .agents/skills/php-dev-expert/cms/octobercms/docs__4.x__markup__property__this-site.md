# this.site - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/property/this-site.html

---

# this.site

Twig Property

- [Retrieving Data From the Site](docs__4.x__markup__property__this-site.md#retrieving-data-from-the-site)
- [Checking the Active Site](docs__4.x__markup__property__this-site.md#checking-the-active-site)
- [Getting the Current Selected Locale](docs__4.x__markup__property__this-site.md#getting-the-current-selected-locale)

You can access the active site via `this.site` and it returns the object `System\Models\SiteDefinition` [current site definition](docs__4.x__cms__multisite__multisite.md).

## [#](#retrieving-data-from-the-site) Retrieving Data From the Site

```
___TWIG0___
___TWIG1___
___TWIG2___
___TWIG3___
___TWIG4___
___TWIG5___
```

## [#](#checking-the-active-site) Checking the Active Site

```
___TWIG0___
    <h1>Only display for English</h1>
___TWIG1___
```

## [#](#getting-the-current-selected-locale) Getting the Current Selected Locale

The `locale` attribute will return the current locale if it is specified, or return an empty value when none is specified.

```
<html lang="___TWIG0___">
```

Use the `hard_locale` attribute to always return a locale value, which uses the default locale when none is specified.

```
<html lang="___TWIG0___">
```

← [this.request](docs__4.x__markup__property__this-request.md)[{% page %}](docs__4.x__markup__tag__page.md) →
