# Displaying Data: Theming | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/output-theming

---

0

# Theming [¶](#theming)

Theming is a way to replace a set of [views](guide_22_0__structure-views.md) with another without the need of touching
the original view rendering code. You can use theming to systematically change the look and feel of an application.

To use theming, you should configure the [theme](https://www.yiiframework.com/doc/api/22.0/yii-base-view#$theme-detail) property of the `view` application component.
The property configures a [yii\base\Theme](https://www.yiiframework.com/doc/api/22.0/yii-base-theme) object which governs how view files are being replaced. You should
mainly specify the following properties of [yii\base\Theme](https://www.yiiframework.com/doc/api/22.0/yii-base-theme):

- [yii\base\Theme::$basePath](https://www.yiiframework.com/doc/api/22.0/yii-base-theme#$basePath-detail): specifies the base directory that contains the themed resources (CSS, JS, images, etc.)
- [yii\base\Theme::$baseUrl](https://www.yiiframework.com/doc/api/22.0/yii-base-theme#$baseUrl-detail): specifies the base URL of the themed resources.
- [yii\base\Theme::$pathMap](https://www.yiiframework.com/doc/api/22.0/yii-base-theme#$pathMap-detail): specifies the replacement rules of view files. More details will be given in the following
  subsections.

For example, if you call `$this->render('about')` in `SiteController`, you will be rendering the view file
`@app/views/site/about.php`. However, if you enable theming in the following application configuration,
the view file `@app/themes/basic/site/about.php` will be rendered, instead.

```
return [
    'components' => [
        'view' => [
            'theme' => [
                'basePath' => '@app/themes/basic',
                'baseUrl' => '@web/themes/basic',
                'pathMap' => [
                    '@app/views' => '@app/themes/basic',
                ],
            ],
        ],
    ],
];
```

> **Info:** Path aliases are supported by themes. When doing view replacement, path aliases will be turned into
> the actual file paths or URLs.

You can access the [yii\base\Theme](https://www.yiiframework.com/doc/api/22.0/yii-base-theme) object through the [yii\base\View::$theme](https://www.yiiframework.com/doc/api/22.0/yii-base-view#$theme-detail) property. For example,
in a view file, you can write the following code because `$this` refers to the view object:

```
$theme = $this->theme;

// returns: $theme->baseUrl . '/img/logo.gif'
$url = $theme->getUrl('img/logo.gif');

// returns: $theme->basePath . '/img/logo.gif'
$file = $theme->getPath('img/logo.gif');
```

The [yii\base\Theme::$pathMap](https://www.yiiframework.com/doc/api/22.0/yii-base-theme#$pathMap-detail) property governs how view files should be replaced. It takes an array of
key-value pairs, where the keys are the original view paths to be replaced and the values are the corresponding
themed view paths. The replacement is based on partial match: if a view path starts with any key in
the [pathMap](https://www.yiiframework.com/doc/api/22.0/yii-base-theme#$pathMap-detail) array, that matching part will be replaced with the corresponding array value.
Using the above configuration example, because `@app/views/site/about.php` partially matches the key
`@app/views`, it will be replaced as `@app/themes/basic/site/about.php`.

## Theming Modules [¶](#theming-modules)

In order to theme modules, [yii\base\Theme::$pathMap](https://www.yiiframework.com/doc/api/22.0/yii-base-theme#$pathMap-detail) can be configured like the following:

```
'pathMap' => [
    '@app/views' => '@app/themes/basic',
    '@app/modules' => '@app/themes/basic/modules', // <-- !!!
],
```

It will allow you to theme `@app/modules/blog/views/comment/index.php` into `@app/themes/basic/modules/blog/views/comment/index.php`.

## Theming Widgets [¶](#theming-widgets)

In order to theme widgets, you can configure [yii\base\Theme::$pathMap](https://www.yiiframework.com/doc/api/22.0/yii-base-theme#$pathMap-detail) in the following way:

```
'pathMap' => [
    '@app/views' => '@app/themes/basic',
    '@app/widgets' => '@app/themes/basic/widgets', // <-- !!!
],
```

This will allow you to theme `@app/widgets/currency/views/index.php` into `@app/themes/basic/widgets/currency/views/index.php`.

## Theme Inheritance [¶](#theme-inheritance)

Sometimes you may want to define a basic theme which contains a basic look and feel of the application, and then
based on the current holiday, you may want to vary the look and feel slightly. You can achieve this goal using
theme inheritance which is done by mapping a single view path to multiple targets. For example,

```
'pathMap' => [
    '@app/views' => [
        '@app/themes/christmas',
        '@app/themes/basic',
    ],
]
```

In this case, the view `@app/views/site/index.php` would be themed as either `@app/themes/christmas/site/index.php`
or `@app/themes/basic/site/index.php`, depending on which themed file exists. If both themed files exist, the first
one will take precedence. In practice, you would keep most themed view files in `@app/themes/basic` and customize
some of them in `@app/themes/christmas`.

[Working with Client Scripts](guide_22_0__output-client-scripts.md)

[Go to Top](#top)

[Security: Security Overview](guide_22_0__security-overview.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/output-theming.md) !
