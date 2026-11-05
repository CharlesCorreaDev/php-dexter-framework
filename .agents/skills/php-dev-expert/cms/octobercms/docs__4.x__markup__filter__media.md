# |media - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/filter/media.html

---

# |media

Twig Filter

- [PHP Interface](docs__4.x__markup__filter__media.md#php-interface)

The `|media` filter returns an address relative to the public path of the [media manager library](docs__4.x__cms__media__introduction.md). The result is a URL to the media file specified in the filter parameter.

```
<img src="___TWIG0___" />
```

If the media manager address is **[https://cdn.octobercms.com  (opens new window)](https://cdn.octobercms.com)** the above example would output the following:

```
<img src="https://cdn.octobercms.com/banner.jpg" />
```

## [#](#php-interface) PHP Interface

You may generate URLs in PHP using the `Media\Classes\MediaLibrary` class and `url` method.

```
\Media\Classes\MediaLibrary::url('relative/path/to/asset.jpg');
```

← [|theme](docs__4.x__markup__filter__theme.md)[|resize](docs__4.x__markup__filter__resize.md) →
