# |resize - October CMS - 4.x

> **Fonte / Source:** https://docs.octobercms.com/4.x/markup/filter/resize.html

---

# |resize

Twig Filter

- [Available Options](docs__4.x__markup__filter__resize.md#available-options)
- [Custom Filenames](docs__4.x__markup__filter__resize.md#custom-filenames)
- [Custom Folder Names](docs__4.x__markup__filter__resize.md#custom-folder-names)
- [Forcing Immediate Resize](docs__4.x__markup__filter__resize.md#forcing-immediate-resize)
- [Available Sources](docs__4.x__markup__filter__resize.md#available-sources)
- [PHP Interface](docs__4.x__markup__filter__resize.md#php-interface)

[More...](#)

The `|resize` filter attempts to resize the provided image source using the provided resizing configuration and outputs a URL to the resized image.

```
___TWIG0___
```

The filter accepts three arguments: `|resize(width, height, options)`.

If the filter can resize the provided image, then a URL to the image resizer (eg: `/resize/filename.png`) is returned. For subsequent requests, a direct URL to the resized image is returned. If the filter is unable to process the provided image, then it will instead return the original URL unmodified.

This will resize a banner.jpg media image to 1920 x 1080 ratio.

```
<img src="___TWIG0___" />
```

You can also pass a third options argument. This example will crop the image instead.

```
<img src="___TWIG0___" />
```

## [#](#available-options) Available Options

The following options are supported in addition to the [standard resizer options](docs__4.x__extend__services__resizer.md):

| Option | Description | Default |
| --- | --- | --- |
| `extension` | Output file extension, or `auto` to use the source extension | `auto` |
| `filename` | Output filename: `true` for original name, or a custom string | `img` |
| `group` | Folder name to group resized images, removing the unique hash | `null` |
| `force` | Perform the resize immediately instead of deferring to a redirect | `false` |

## [#](#custom-filenames) Custom Filenames

The resizer will assign a random filename to resized images by default. You may use the original filename by passing the `true` to `filename` option to the resizer.

```
<img src="___TWIG0___" />
```

The `filename` option also supports a custom filename as a string. The filename should not contain an extension since the original one is used.

```
<img src="___TWIG0___" />
```

You may modify the extension with the `extension` option. This process will attempt to convert from one file type to another, for example, converting a JPG to a PNG file.

```
<img src="___TWIG0___" />
```

## [#](#custom-folder-names) Custom Folder Names

When using custom filenames, the filename will still contain a trailing hash to ensure uniqueness within the resizer resource directory. In most cases this is enough to satisfy basic SEO requirements. For example, the file will appear in the system like so.

- `.../800_600_0_0_auto/my-seo-friendly-name_001a14981ffe90700046616c5f415467.png`

A `group` can be specified as a folder name, this will place the image in a dedicated resource group.

```
<img src="___TWIG0___" />
```

For example, the above will place the file in the following directory:

- `.../800_600_0_0_auto/2024-banners/my-seo-friendly-name.png`

However, keep in mind, this approach can be prone to naming collisions. If a different file is resized using the same name and resize options, it will output the original file since there is no unique hash added to the path.

## [#](#forcing-immediate-resize) Forcing Immediate Resize

By default, the resizer uses a deferred approach where the first request returns a `/resize/...` URL that redirects to the final resized image when accessed. This is efficient for page rendering since the image processing happens on-demand.

However, this behavior can cause issues with meta tags (OpenGraph, Twitter Cards) where social media bots may cache the deferred URL before it's processed, resulting in broken images. The `force` option performs the resize immediately and returns the final URL directly.

```
<meta property="og:image" content="___TWIG0___">
```

Using `force: true` adds image processing time to the page render. Only use this option when necessary, such as for SEO meta tags.

## [#](#available-sources) Available Sources

You may reference images from multiple sources, including the following paths:

- `/app`
- `/plugins`
- `/themes`
- `/modules`
- `/storage/app/uploads`
- `/storage/app/media`

For example:

```
___TWIG0___
```

## [#](#php-interface) PHP Interface

You may resize images in PHP using the `System\Classes\ResizeImages` and `resize` method. The return value is a URL location to the resized image.

```
ResizeImages::resize('path/to/asset.jpg');
```

The method accepts a width (second argument), height (third argument) and [resizer options](docs__4.x__extend__services__resizer.md) (fourth argument).

```
ResizeImages::resize('path/to/asset.jpg', 800, 600, ['mode' => 'crop']);
```

#### [#](#see-also) See Also

- [Resizer Service](docs__4.x__extend__services__resizer.md)

← [|media](docs__4.x__markup__filter__media.md)[|default](docs__4.x__markup__filter__default.md) →
