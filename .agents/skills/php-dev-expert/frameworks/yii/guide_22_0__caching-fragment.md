# Caching: Fragment Caching | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/caching-fragment

---

0

# Fragment Caching [¶](#fragment-caching)

Fragment caching refers to caching a fragment of a Web page. For example, if a page displays a summary of
yearly sale in a table, you can store this table in cache to eliminate the time needed to generate this table
for each request. Fragment caching is built on top of [data caching](guide_22_0__caching-data.md).

To use fragment caching, use the following construct in a [view](guide_22_0__structure-views.md):

```
if ($this->beginCache($id)) {

    // ... generate content here ...

    $this->endCache();
}
```

That is, enclose content generation logic in a pair of [beginCache()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#beginCache()-detail) and
[endCache()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#endCache()-detail) calls. If the content is found in the cache, [beginCache()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#beginCache()-detail)
will render the cached content and return `false`, thus skip the content generation logic.
Otherwise, your content generation logic will be called, and when [endCache()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#endCache()-detail)
is called, the generated content will be captured and stored in the cache.

Like [data caching](guide_22_0__caching-data.md), a unique `$id` is needed to identify a content cache.

To delete fragment caching you can use
`` ` ``php
Yii::$app->cache->delete(['yii\widgets\FragmentCache', $id]);
`` ` ``

## Caching Options [¶](#caching-options)

You may specify additional options about fragment caching by passing the option array as the second
parameter to the [beginCache()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#beginCache()-detail) method. Behind the scene, this option array
will be used to configure a [yii\widgets\FragmentCache](https://www.yiiframework.com/doc/api/22.0/yii-widgets-fragmentcache) widget which implements the actual fragment caching
functionality.

### Duration [¶](#duration)

Perhaps the most commonly used option of fragment caching is [duration](https://www.yiiframework.com/doc/api/22.0/yii-widgets-fragmentcache#$duration-detail).
It specifies for how many seconds the content can remain valid in a cache. The following code
caches the content fragment for at most one hour:

```
if ($this->beginCache($id, ['duration' => 3600])) {

    // ... generate content here ...

    $this->endCache();
}
```

If the option is not set, it will take the default value 60, which means the cached content will expire in 60 seconds.

### Dependencies [¶](#dependencies)

Like [data caching](guide_22_0__caching-data.md#cache-dependencies), content fragment being cached can also have dependencies.
For example, the content of a post being displayed depends on whether or not the post is modified.

To specify a dependency, set the [dependency](https://www.yiiframework.com/doc/api/22.0/yii-widgets-fragmentcache#$dependency-detail) option, which can be
either an [yii\caching\Dependency](https://www.yiiframework.com/doc/api/22.0/yii-caching-dependency) object or a configuration array for creating a dependency object. The
following code specifies that the fragment content depends on the change of the `updated_at` column value:

```
$dependency = [
    'class' => 'yii\caching\DbDependency',
    'sql' => 'SELECT MAX(updated_at) FROM post',
];

if ($this->beginCache($id, ['dependency' => $dependency])) {

    // ... generate content here ...

    $this->endCache();
}
```

### Variations [¶](#variations)

Content being cached may be variated according to some parameters. For example, for a Web application
supporting multiple languages, the same piece of view code may generate the content in different languages.
Therefore, you may want to make the cached content variated according to the current application language.

To specify cache variations, set the [variations](https://www.yiiframework.com/doc/api/22.0/yii-widgets-fragmentcache#$variations-detail) option, which
should be an array of scalar values, each representing a particular variation factor. For example,
to make the cached content variated by the language, you may use the following code:

```
if ($this->beginCache($id, ['variations' => [Yii::$app->language]])) {

    // ... generate content here ...

    $this->endCache();
}
```

### Toggling Caching [¶](#toggling-caching)

Sometimes you may want to enable fragment caching only when certain conditions are met. For example, for a page
displaying a form, you only want to cache the form when it is initially requested (via GET request). Any
subsequent display (via POST request) of the form should not be cached because the form may contain user input.
To do so, you may set the [enabled](https://www.yiiframework.com/doc/api/22.0/yii-widgets-fragmentcache#$enabled-detail) option, like the following:

```
if ($this->beginCache($id, ['enabled' => Yii::$app->request->isGet])) {

    // ... generate content here ...

    $this->endCache();
}
```

## Nested Caching [¶](#nested-caching)

Fragment caching can be nested. That is, a cached fragment can be enclosed within another fragment which is also cached.
For example, the comments are cached in an inner fragment cache, and they are cached together with the
post content in an outer fragment cache. The following code shows how two fragment caches can be nested:

```
if ($this->beginCache($id1)) {

    // ...content generation logic...

    if ($this->beginCache($id2, $options2)) {

        // ...content generation logic...

        $this->endCache();
    }

    // ...content generation logic...

    $this->endCache();
}
```

Different caching options can be set for the nested caches. For example, the inner caches and the outer caches
can use different cache duration values. Even when the data cached in the outer cache is invalidated, the inner
cache may still provide the valid inner fragment. However, it is not true vice versa. If the outer cache is
evaluated to be valid, it will continue to provide the same cached copy even after the content in the
inner cache has been invalidated. Therefore, you must be careful in setting the durations or the dependencies
of the nested caches, otherwise the outdated inner fragments may be kept in the outer fragment.

## Dynamic Content [¶](#dynamic-content)

When using fragment caching, you may encounter the situation where a large fragment of content is relatively
static except at one or a few places. For example, a page header may display the main menu bar together with
the name of the current user. Another problem is that the content being cached may contain PHP code that
must be executed for every request (e.g. the code for registering an asset bundle). Both problems can be solved
by the so-called *dynamic content* feature.

A dynamic content means a fragment of output that should not be cached even if it is enclosed within
a fragment cache. To make the content dynamic all the time, it has to be generated by executing some PHP code
for every request, even if the enclosing content is being served from cache.

You may call [yii\base\View::renderDynamic()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#renderDynamic()-detail) within a cached fragment to insert dynamic content
at the desired place, like the following,

```
if ($this->beginCache($id1)) {

    // ...content generation logic...

    echo $this->renderDynamic('return Yii::$app->user->identity->name;');

    // ...content generation logic...

    $this->endCache();
}
```

The [renderDynamic()](https://www.yiiframework.com/doc/api/22.0/yii-base-view#renderDynamic()-detail) method takes a piece of PHP code as its parameter.
The return value of the PHP code is treated as the dynamic content. The same PHP code will be executed
for every request, no matter the enclosing fragment is being served from cached or not.

> **Note:** since version 2.0.14 a dynamic content API is exposed via the [yii\base\DynamicContentAwareInterface](https://www.yiiframework.com/doc/api/22.0/yii-base-dynamiccontentawareinterface) interface and its [yii\base\DynamicContentAwareTrait](https://www.yiiframework.com/doc/api/22.0/yii-base-dynamiccontentawaretrait) trait.
> As an example, you may refer to the [yii\widgets\FragmentCache](https://www.yiiframework.com/doc/api/22.0/yii-widgets-fragmentcache) class.

[Data Caching](guide_22_0__caching-data.md)

[Go to Top](#top)

[Page Caching](guide_22_0__caching-page.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/caching-fragment.md) !
