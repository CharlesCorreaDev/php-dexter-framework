# Caching: Page Caching | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/caching-page

---

0

# Page Caching [¶](#page-caching)

Page caching refers to caching the content of a whole page on the server-side. Later when the same page
is requested again, its content will be served from the cache instead of regenerating it from scratch.

Page caching is supported by [yii\filters\PageCache](https://www.yiiframework.com/doc/api/22.0/yii-filters-pagecache), an [action filter](guide_22_0__structure-filters.md).
It can be used like the following in a controller class:

```
public function behaviors()
{
    return [
        [
            'class' => 'yii\filters\PageCache',
            'only' => ['index'],
            'duration' => 60,
            'variations' => [
                \Yii::$app->language,
            ],
            'dependency' => [
                'class' => 'yii\caching\DbDependency',
                'sql' => 'SELECT COUNT(*) FROM post',
            ],
        ],
    ];
}
```

The above code states that page caching should be used only for the `index` action. The page content should
be cached for at most 60 seconds and should be variated by the current application language
and the cached page should be invalidated if the total number of posts is changed.

As you can see, page caching is very similar to [fragment caching](guide_22_0__caching-fragment.md). They both support options such
as `duration`, `dependencies`, `variations`, and `enabled`. Their main difference is that page caching is
implemented as an [action filter](guide_22_0__structure-filters.md) while fragment caching a [widget](guide_22_0__structure-widgets.md).

You can use [fragment caching](guide_22_0__caching-fragment.md) as well as [dynamic content](guide_22_0__caching-fragment.md#dynamic-content)
together with page caching.

[Fragment Caching](guide_22_0__caching-fragment.md)

[Go to Top](#top)

[HTTP Caching](guide_22_0__caching-http.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/caching-page.md) !
