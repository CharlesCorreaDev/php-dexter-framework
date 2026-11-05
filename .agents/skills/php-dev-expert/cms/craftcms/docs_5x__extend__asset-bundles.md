# Asset Bundles | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/asset-bundles

---

# Asset Bundles

Plugins, like Craft, are supposed to be installed above the web root, which ensures that their files can’t be accessed directly via HTTP requests. Generally that’s a Very Good Thing, because it protects Craft sites from a whole host of security vulnerabilities.

There’s one case where it would be nice if HTTP requests *could* access Craft/plugin files directly though: front-end resources, such as images, CSS, and JavaScript files. Thankfully, Yii has a concept called [Asset Bundles  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/structure-assets) to help with this.

Asset Bundles do two things:

- They publish an inaccessible directory into a directory below the web root, making it available for front-end pages to consume via HTTP requests.
- They can register specific CSS and JS files within the directory as `<link>` and `<script>` tags in the currently-rendered page.

### [#](#setting-it-up)Setting it Up

First establish where you want your web-publishable files to live within your plugin. Give them a directory that’s just for them. This will be the asset bundle’s **source directory**. For this example, we’ll go with `resources/`.

Then, create a file that will hold your asset bundle class. This can be located and named whatever you want. We’ll go with `FooBundle` here.

Here’s what your plugin’s structure should look like:

```
base_dir
└── src
    ├── FooBundle.php
    └── resources
        ├── script.js
        ├── styles.css
        └── ...
```

Use this template as a starting point for your asset bundle class:

```
<?php
namespace mynamespace;

use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

class FooBundle extends AssetBundle
{
    public function init()
    {
        // define the path that your publishable resources live
        $this->sourcePath = '@mynamespace/resources';

        // define the dependencies
        $this->depends = [
            CpAsset::class,
        ];

        // define the relative path to CSS/JS files that should be registered with the page
        // when this asset bundle is registered
        $this->js = [
            'script.js',
        ];

        $this->css = [
            'styles.css',
        ];

        parent::init();
    }
}
```

`@mynamespace` is a placeholder for your plugin’s auto-generated [Yii alias  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/concept-aliases), which will be based on your plugin’s root namespace. It represents the path to your plugin’s `src/` directory.

Asset bundles can share a `sourcePath`. If you anticipate registering many bundles, it may be worthwhile to put them in an `assetbundles/` subdirectory within your plugin’s `src/` folder—just don’t forget to update your namespaces!

### [#](#registering-the-asset-bundle)Registering the Asset Bundle

With that in place, all that is left is to register the asset bundle wherever its JS/CSS files are needed.

You can register it from a template using this code:

```
{% do view.registerAssetBundle("mynamespace\\FooBundle") %}
```

Or if the request is getting routed to a custom controller action, you could register it from there, before your template gets rendered:

```
use mynamespace\FooBundle;

public function actionFoo()
{
    $this->view->registerAssetBundle(FooBundle::class);

    return $this->renderTemplate('plugin-handle/foo');
}
```

### [#](#getting-published-file-urls)Getting Published File URLs

If you have a one-off file that you need to get the published URL for, but it doesn’t need to be registered as a CSS or JS file on the current page, you can use [craft\web\AssetManager::getPublishedUrl()  (opens new window)](https://docs.craftcms.com/api/v5/craft-web-assetmanager.html#method-getpublishedurl):

```
$url = \Craft::$app->assetManager->getPublishedUrl(
    '@mynamespace/path/to/file.svg',
    true
);
```

Craft will automatically publish the file for you (if it’s not published already), and return its URL.

If you want the file to be published alongside other files in the same directory, but you only want a single file’s URL, then split its path into two parts: 1) the path to the parent directory that contains all the files you want to publish; and 2) the path to the individual file you want the URL for, relative to that parent directory.

For example, if you had a bunch of icon SVG files in an `icons/` folder within your plugin, and you wanted to publish the `icons/` folder as a whole, but only needed the URL to `shaker.svg`, you would do this:

```
$url = \Craft::$app->assetManager->getPublishedUrl(
    '@mynamespace/icons',
    true,
    'shaker.svg'
);
```

`@mynamespace` is a placeholder for your plugin’s auto-generated [Yii alias  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/concept-aliases), which will be based on your plugin’s root namespace. It represents the path to your plugin’s `src/` directory.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/asset-bundles.md)
