# Overcoming removal of client helpers (e.g. ajaxLink) and ClientScript in Yii 2.0 | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/665/overcoming-removal-of-client-helpers-e-g-ajaxlink-and-clientscript-in-yii-2-0

---

## [Overcoming removal of client helpers (e.g. ajaxLink) and ClientScript in Yii 2.0](wiki__665__overcoming-removal-of-client-helpers-e-g-ajaxlink-and-clientscript-in-yii-2-0.md)

1    2

41

Viewed: 49 916 times

Version: 2.0

Category: [FAQs](wiki__index.md)

- [AJAX](wiki__index.md)
- [ajaxlink](wiki__index.md)
- [assets](wiki__index.md)
- [CClientScript](wiki__index.md)
- [client](wiki__index.md)
- [clientscript](wiki__index.md)
- [Yii](wiki__index.md)
- [yii2](wiki__index.md)

Written by: [![Kartik V](/user/avatar/79399?v=1) Kartik V](https://www.yiiframework.com/user/79399)

Updated by: [![Kartik V](/user/avatar/79399?v=1) Kartik V](https://www.yiiframework.com/user/79399)

Created: May 6, 2014

Updated: 12 years ago

1. [Problem Statement](#problem-statement)
2. [Reasoning](#reasoning)
3. [Solution](#solution)

#### Problem Statement [¶](#problem-statement)

With Yii Framework 2.0, one of the many changes, that Yii 1.x developers will face is removal of all client helpers and revamp of the `CClientScript` functionality. For example no more **`CHtml::ajaxLink`** or **`Html::ajaxLink`**. How do you cater to such requirements in Yii 2.0?

#### Reasoning [¶](#reasoning)

One of the critical changes in Yii 2 framework design that you will notice versus Yii 1.x, is that Yii 2 focuses on moving the entire presentational layer to a new **`View`** object. With this change, the Yii 2 team has also eliminated most of the client related functionality embedded in PHP classes from the core framework. Thus it has made the code cleaner to use. Hence, helpers like **`ajaxLink`** are no more available. This helps you manage your client assets better, improves performance, and control them better.

#### Solution [¶](#solution)

You can easily create and combine all such client helpers for your need into separate JS files. Use the new [AssetBundle and AssetManager](http://www.yiiframework.com/doc-2.0/guide-assets.html) functionality with the View object in Yii2, to manage these assets and how they are loaded.

Alternatively, inline assets (JS/CSS) can be registered at runtime from within the **`View`**.
For example you can clearly simulate the ajaxLink feature using a inline javascript. Its however recommended if you can merge where possible, client code (JS/CSS) into separate JS/CSS files and loaded through the AssetBundle. Note there is no more need of a CClientScript anymore:

```
$script = <<< JS
$('#el').on('click', function(e) {
    $.ajax({
       url: '/path/to/action',
       data: {id: '<id>', 'other': '<other>'},
       success: function(data) {
           // process data
       }
    });
});
JS;
$this->registerJs($script, $position);
// where $position can be View::POS_READY (the default), 
// or View::POS_HEAD, View::POS_BEGIN, View::POS_END
```
