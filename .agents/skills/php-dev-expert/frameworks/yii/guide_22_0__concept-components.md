# Key Concepts: Components | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/concept-components

---

0

# Components [¶](#components)

Components are the main building blocks of Yii applications. Components are instances of [yii\base\Component](https://www.yiiframework.com/doc/api/22.0/yii-base-component),
or an extended class. The three main features that components provide to other classes are:

- [Properties](guide_22_0__concept-properties.md)
- [Events](guide_22_0__concept-events.md)
- [Behaviors](guide_22_0__concept-behaviors.md)

Separately and combined, these features make Yii classes much more customizable and easier to use. For example,
the included yii\jui\DatePicker, a user interface component, can be used in a [view](guide_22_0__structure-views.md)
to generate an interactive date picker:

```
use yii\jui\DatePicker;

echo DatePicker::widget([
    'language' => 'ru',
    'name'  => 'country',
    'clientOptions' => [
        'dateFormat' => 'yy-mm-dd',
    ],
]);
```

The widget's properties are easily writable because the class extends [yii\base\Component](https://www.yiiframework.com/doc/api/22.0/yii-base-component).

While components are very powerful, they are a bit heavier than normal objects, due to the fact that
it takes extra memory and CPU time to support [event](guide_22_0__concept-events.md) and [behavior](guide_22_0__concept-behaviors.md) functionality in particular.
If your components do not need these two features, you may consider extending your component class from
[yii\base\BaseObject](https://www.yiiframework.com/doc/api/22.0/yii-base-baseobject) instead of [yii\base\Component](https://www.yiiframework.com/doc/api/22.0/yii-base-component). Doing so will make your components as efficient as normal PHP objects,
but with added support for [properties](guide_22_0__concept-properties.md).

When extending your class from [yii\base\Component](https://www.yiiframework.com/doc/api/22.0/yii-base-component) or [yii\base\BaseObject](https://www.yiiframework.com/doc/api/22.0/yii-base-baseobject), it is recommended that you follow
these conventions:

- If you override the constructor, specify a `$config` parameter as the constructor's *last* parameter, and then pass this parameter
  to the parent constructor.
- Always call the parent constructor *at the end* of your overriding constructor.
- If you override the [yii\base\BaseObject::init()](https://www.yiiframework.com/doc/api/22.0/yii-base-baseobject#init()-detail) method, make sure you call the parent implementation of `init()` *at the beginning* of your `init()` method.

For example:

```
<?php

namespace yii\components\MyClass;

use yii\base\BaseObject;

class MyClass extends BaseObject
{
    public $prop1;
    public $prop2;

    public function __construct($param1, $param2, $config = [])
    {
        // ... initialization before configuration is applied

        parent::__construct($config);
    }

    public function init()
    {
        parent::init();

        // ... initialization after configuration is applied
    }
}
```

Following these guidelines will make your components [configurable](guide_22_0__concept-configurations.md) when they are created. For example:

```
$component = new MyClass(1, 2, ['prop1' => 3, 'prop2' => 4]);
// alternatively
$component = \Yii::createObject([
    'class' => MyClass::class,
    'prop1' => 3,
    'prop2' => 4,
], [1, 2]);
```

> **Info:** While the approach of calling [Yii::createObject()](https://www.yiiframework.com/doc/api/22.0/yii-baseyii#createObject()-detail) looks more complicated, it is more powerful because it is
> implemented on top of a [dependency injection container](guide_22_0__concept-di-container.md).

The [yii\base\BaseObject](https://www.yiiframework.com/doc/api/22.0/yii-base-baseobject) class enforces the following object lifecycle:

1. Pre-initialization within the constructor. You can set default property values here.
2. Object configuration via `$config`. The configuration may overwrite the default values set within the constructor.
3. Post-initialization within [init()](https://www.yiiframework.com/doc/api/22.0/yii-base-baseobject#init()-detail). You may override this method to perform sanity checks and normalization of the properties.
4. Object method calls.

The first three steps all happen within the object's constructor. This means that once you get a class instance (i.e., an object),
that object has already been initialized to a proper, reliable state.

[Handling Requests: Logging](guide_22_0__runtime-logging.md)

[Go to Top](#top)

[Properties](guide_22_0__concept-properties.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/concept-components.md) !
