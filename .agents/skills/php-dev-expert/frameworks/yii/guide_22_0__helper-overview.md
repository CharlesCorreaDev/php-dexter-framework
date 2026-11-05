# Helpers: Helpers Overview | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/helper-overview

---

0

# Helpers [¶](#helpers)

> **Note:** This section is under development.

Yii provides many classes that help simplify common coding tasks, such as string or array manipulations,
HTML code generation, and so on. These helper classes are organized under the `yii\helpers` namespace and
are all static classes (meaning they contain only static properties and methods and should not be instantiated).

You use a helper class by directly calling one of its static methods, like the following:

```
use yii\helpers\Html;

echo Html::encode('Test > test');
```

> **Note:** To support [customizing helper classes](#customizing-helper-classes), Yii breaks each core helper class
> into two classes: a base class (e.g. `BaseArrayHelper`) and a concrete class (e.g. `ArrayHelper`).
> When you use a helper, you should only use the concrete version and never use the base class.

## Core Helper Classes [¶](#core-helper-classes)

The following core helper classes are provided in the Yii releases:

- [ArrayHelper](guide_22_0__helper-array.md)
- Console
- FileHelper
- FormatConverter
- [Html](guide_22_0__helper-html.md)
- HtmlPurifier
- Imagine (provided by yii2-imagine extension)
- Inflector
- [Json](guide_22_0__helper-json.md)
- Markdown
- StringHelper
- [Url](guide_22_0__helper-url.md)
- VarDumper

## Customizing Helper Classes [¶](#customizing-helper-classes)

To customize a core helper class (e.g. [yii\helpers\ArrayHelper](https://www.yiiframework.com/doc/api/22.0/yii-helpers-arrayhelper)), you should create a new class extending
from the helpers corresponding base class (e.g. [yii\helpers\BaseArrayHelper](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basearrayhelper)) and name your class the same
as the corresponding concrete class (e.g. [yii\helpers\ArrayHelper](https://www.yiiframework.com/doc/api/22.0/yii-helpers-arrayhelper)), including its namespace. This class
will then be set up to replace the original implementation of the framework.

The following example shows how to customize the [merge()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-basearrayhelper#merge()-detail) method of the
[yii\helpers\ArrayHelper](https://www.yiiframework.com/doc/api/22.0/yii-helpers-arrayhelper) class:

```
<?php

namespace yii\helpers;

class ArrayHelper extends BaseArrayHelper
{
    public static function merge($a, $b)
    {
        // your custom implementation
    }
}
```

Save your class in a file named `ArrayHelper.php`, for example under `src/components/ArrayHelper.php`.

Next, configure Composer's autoloader in your application's `composer.json` so that your custom class replaces
the framework one. Add a `classmap` entry pointing at your override and an `exclude-from-classmap` entry that
hides the original framework file:

```
{
    "autoload": {
        "classmap": [
            "src/components/ArrayHelper.php"
        ],
        "exclude-from-classmap": [
            "vendor/yiisoft/yii2/helpers/ArrayHelper.php"
        ]
    }
}
```

Then run `composer dump-autoload` (use `-o` in production). Composer will load your override from
`src/components/ArrayHelper.php` and skip the vendor file. See the [class autoloading guide](guide_22_0__concept-autoloading.md)
for more details.

Note that customizing of helper classes is only useful if you want to change the behavior of an existing function
of the helpers. If you want to add additional functions to use in your application, you may be better off creating a
separate helper for that.

[Special Topics: Using Yii as a micro framework](guide_22_0__tutorial-yii-as-micro-framework.md)

[Go to Top](#top)

[ArrayHelper](guide_22_0__helper-array.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/helper-overview.md) !
