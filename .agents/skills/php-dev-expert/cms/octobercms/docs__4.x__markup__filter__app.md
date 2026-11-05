# |app - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/filter/app.html

---

# |app

Twig Filter

The `|app` filter returns an address relative to the public path of the website. The result is an absolute URL, including the domain name and protocol, to the location specified in the filter parameter. The filter can be applied to any path.

```
<link rel="icon" href="___TWIG0___" />
```

If the website address is **[https://octobercms.com  (opens new window)](https://octobercms.com)** the above example would output the following:

```
<link rel="icon" href="https://octobercms.com/favicon.ico" />
```

It can also be used for static URLs:

```
<a href="___TWIG0___">
    About Us
</a>
```

The above would output:

```
<a href="https://octobercms.com/about-us">
    About us
</a>
```

> **Note**: The `|page` filter is recommended for linking to other pages.

← [{% if %}](docs__4.x__markup__tag__if.md)[|page](docs__4.x__markup__filter__page.md) →
