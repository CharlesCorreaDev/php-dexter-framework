# Displaying Data: Sorting | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/output-sorting

---

0

# Sorting [¶](#sorting)

When displaying multiple rows of data, it is often needed that the data be sorted according to some columns
specified by end users. Yii uses a [yii\data\Sort](https://www.yiiframework.com/doc/api/22.0/yii-data-sort) object to represent the information about a sorting schema.
In particular,

- [attributes](https://www.yiiframework.com/doc/api/22.0/yii-data-sort#$attributes-detail) specifies the *attributes* by which the data can be sorted.
  An attribute can be as simple as a [model attribute](guide_22_0__structure-models.md#attributes). It can also be a composite
  one by combining multiple model attributes or DB columns. More details will be given in the following.
- [attributeOrders](https://www.yiiframework.com/doc/api/22.0/yii-data-sort#$attributeOrders-detail) gives the currently requested ordering directions for
  each attribute.
- [orders](https://www.yiiframework.com/doc/api/22.0/yii-data-sort#$orders-detail) gives the ordering directions in terms of the low-level columns.

To use [yii\data\Sort](https://www.yiiframework.com/doc/api/22.0/yii-data-sort), first declare which attributes can be sorted. Then retrieve the currently requested
ordering information from [attributeOrders](https://www.yiiframework.com/doc/api/22.0/yii-data-sort#$attributeOrders-detail) or [orders](https://www.yiiframework.com/doc/api/22.0/yii-data-sort#$orders-detail)
and use them to customize the data query. For example,

```
use yii\data\Sort;

$sort = new Sort([
    'attributes' => [
        'age',
        'name' => [
            'asc' => ['first_name' => SORT_ASC, 'last_name' => SORT_ASC],
            'desc' => ['first_name' => SORT_DESC, 'last_name' => SORT_DESC],
            'default' => SORT_DESC,
            'label' => 'Name',
        ],
    ],
]);

$articles = Article::find()
    ->where(['status' => 1])
    ->orderBy($sort->orders)
    ->all();
```

In the above example, two attributes are declared for the [Sort](https://www.yiiframework.com/doc/api/22.0/yii-data-sort) object: `age` and `name`.

The `age` attribute is a *simple* attribute corresponding to the `age` attribute of the `Article` Active Record class.
It is equivalent to the following declaration:

```
'age' => [
    'asc' => ['age' => SORT_ASC],
    'desc' => ['age' => SORT_DESC],
    'default' => SORT_ASC,
    'label' => Inflector::camel2words('age'),
]
```

The `name` attribute is a *composite* attribute defined by `first_name` and `last_name` of `Article`. It is declared
using the following array structure:

- The `asc` and `desc` elements specify how to sort by the attribute in ascending and descending directions, respectively.
  Their values represent the actual columns and the directions by which the data should be sorted by. You can specify
  one or multiple columns to indicate simple ordering or composite ordering.
- The `default` element specifies the direction by which the attribute should be sorted when initially requested.
  It defaults to ascending order, meaning if it is not sorted before and you request to sort by this attribute,
  the data will be sorted by this attribute in ascending order.
- The `label` element specifies what label should be used when calling [yii\data\Sort::link()](https://www.yiiframework.com/doc/api/22.0/yii-data-sort#link()-detail) to create a sort link.
  If not set, [yii\helpers\Inflector::camel2words()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-baseinflector#camel2words()-detail) will be called to generate a label from the attribute name.
  Note that it will not be HTML-encoded.

> **Info:** You can directly feed the value of [orders](https://www.yiiframework.com/doc/api/22.0/yii-data-sort#$orders-detail) to the database query to build
> its `ORDER BY` clause. Do not use [attributeOrders](https://www.yiiframework.com/doc/api/22.0/yii-data-sort#$attributeOrders-detail) because some
> attributes may be composite and cannot be recognized by the database query.

You can call [yii\data\Sort::link()](https://www.yiiframework.com/doc/api/22.0/yii-data-sort#link()-detail) to generate a hyperlink upon which end users can click to request sorting
the data by the specified attribute. You may also call [yii\data\Sort::createUrl()](https://www.yiiframework.com/doc/api/22.0/yii-data-sort#createUrl()-detail) to create a sortable URL.
For example,

```
// specifies the route that the URL to be created should use
// If you do not specify this, the currently requested route will be used
$sort->route = 'article/index';

// display links leading to sort by name and age, respectively
echo $sort->link('name') . ' | ' . $sort->link('age');

// displays: /index.php?r=article%2Findex&sort=age
echo $sort->createUrl('age');
```

[yii\data\Sort](https://www.yiiframework.com/doc/api/22.0/yii-data-sort) checks the `sort` query parameter to determine which attributes are being requested for sorting.
You may specify a default ordering via [yii\data\Sort::$defaultOrder](https://www.yiiframework.com/doc/api/22.0/yii-data-sort#$defaultOrder-detail) when the query parameter is not present.
You may also customize the name of the query parameter by configuring the [sortParam](https://www.yiiframework.com/doc/api/22.0/yii-data-sort#$sortParam-detail) property.

[Pagination](guide_22_0__output-pagination.md)

[Go to Top](#top)

[Data Providers](guide_22_0__output-data-providers.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/output-sorting.md) !
