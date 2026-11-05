# How to add Schema.org markup to Yii2 pages | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/2560/how-to-add-schema-org-markup-to-yii2-pages

---

## [How to add Schema.org markup to Yii2 pages](wiki__2560__how-to-add-schema-org-markup-to-yii2-pages.md)

3    0

3

Viewed: 105 021 times

Version: 2.0

Category: [How-tos](wiki__index.md)

- [API](wiki__index.md)
- [google](wiki__index.md)
- [How to](wiki__index.md)
- [JSON](wiki__index.md)
- [markup](wiki__index.md)
- [meta tags](wiki__index.md)
- [metadata](wiki__index.md)
- [microdata](wiki__index.md)
- [schema.org](wiki__index.md)
- [SEO](wiki__index.md)
- [SERP](wiki__index.md)
- [tutorial](wiki__index.md)
- [view](wiki__index.md)
- [yii2](wiki__index.md)

Written by: [![Gabriel A. López López](/user/avatar/310101?v=3) Gabriel A. López López](https://www.yiiframework.com/user/310101)

Updated by: [![Gabriel A. López López](/user/avatar/310101?v=3) Gabriel A. López López](https://www.yiiframework.com/user/310101)

Created: Sep 11, 2020

Updated: 6 years ago

[https://schema.org](wiki__2560__Schema.org.md) is a markup system that allows to embed structured data on their web pages for use by search engines and other applications. Let's see how to add Schema.org to our pages on Yii2 based websites using **JSON-LD**.

Basically what we need is to embed something like this in our pages:

```
<script type="application/ld+json">
{ 
  "@context": "http://schema.org/",
  "@type": "Movie",
  "name": "Avatar",
  "director": 
    { 
       "@type": "Person",
       "name": "James Cameron",
       "birthDate": "1954-08-16"
    },
  "genre": "Science fiction",
  "trailer": "../movies/avatar-theatrical-trailer.html" 
}
</script>
```

But we don't like to write scripts like this on Yii2, so let's try to do it in other, more PHP, way.

In the layout we can define some general markup for our website, so we add the following snippet at the beginning of the`@app/views/layouts/main.php` file:

```
<?= \yii\helpers\Html::script(isset($this->params['schema'])
    ? $this->params['schema']
    : \yii\helpers\Json::encode([
        '@context' => 'https://schema.org',
        '@type' => 'WebSite',
        'name' => Yii::$app->name,
        'image' => $this->image,
        'url' => Yi::$app->homeUrl,
        'descriptions' => $this->description,
        'author' => [
            '@type' => 'Organization',
            'name' => Yii::$app->name,
            'url' => 'https://www.hogarencuba.com',
            'telephone' => '+5352381595',
        ]
    ]), [
    'type' => 'application/ld+json',
]) ?>
```

Here we are using the [Html::script($content, $options)](https://www.yiiframework.com/doc/api/2.0/yii-helpers-basehtml#script()-detail) to include the script with the necessary `type` option, and [Json::encode($value, $options)](https://www.yiiframework.com/doc/api/2.0/yii-helpers-basejson#encode()-detail) to generate the JSON. Also we use a page parameter named `schema` to allow overrides on the markup from other pages. For example, in `@app/views/real-estate/view.php` we are using:

```
$this->params['schema'] = \yii\helpers\Json::encode([
    '@context' => 'https://schema.org',
    '@type' => 'Product',
    'name' => $model->title,
    'description' => $model->description,
    'image' => array_map(function ($item) {
        return $item->url;
    }, $model->images),
    'category' => $model->type->description_es,
    'productID' => $model->code,
    'identifier' => $model->code,
    'sku' => $model->code,
    'url' => \yii\helpers\Url::current(),
    'brand' => [
        '@type' => 'Organization',
        'name' => Yii::$app->name,
        'url' => 'https://www.hogarencuba.com',
        'telephone' => '+5352381595',
    ],
    'offers' => [
        '@type' => 'Offer',
        'availability' => 'InStock',
        'url' => \yii\helpers\Url::current(),
        'priceCurrency' => 'CUC',
        'price' => $model->price,
        'priceValidUntil' => date('Y-m-d', strtotime(date("Y-m-d", time()) . " + 365 day")),
        'itemCondition' => 'https://schema.org/UsedCondition',
        'sku' => $model->code,
        'identifier' => $model->code,
        'image' => $model->images[0],
        'category' => $model->type->description_es,
        'offeredBy' => [
            '@type' => 'Organization',
            'name' => Yii::$app->name,
            'url' => 'https://www.hogarencuba.com',
            'telephone' => '+5352381595',
        ]
    ]
]);
```

Here we redefine the schema for this page with more complex markup: a product with an offer.

This way all the pages on our website will have a schema.org markup defined: in the layout we have a default and in other pages we can redefine setting the value on `$this->params['schema']`.
