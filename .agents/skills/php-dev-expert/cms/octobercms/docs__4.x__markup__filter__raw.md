# |raw - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/filter/raw.html

---

# |raw

Twig Filter

Output variables in October CMS are automatically escaped, the `|raw` filter marks the value as being "safe" and will not be escaped if `raw` is the last filter applied.

```
___TWIG0___
___TWIG1___
```

Be careful when using the `raw` filter inside expressions:

```
___TWIG0___
___TWIG1___

___TWIG2___

___TWIG3___
___TWIG4___

___TWIG5___
___TWIG6___
```

← [|default](docs__4.x__markup__filter__default.md)[|md](docs__4.x__markup__filter__md.md) →
