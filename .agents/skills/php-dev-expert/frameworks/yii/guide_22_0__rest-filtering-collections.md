# RESTful Web Services: Filtering Collections | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/rest-filtering-collections

---

0

# Filtering Collections [¶](#filtering-collections)

Resource collection can be filtered using [yii\data\DataFilter](https://www.yiiframework.com/doc/api/22.0/yii-data-datafilter) component since 2.0.13. It allows validating and
building the filter conditions passed via request, and, with the help of its extended version [yii\data\ActiveDataFilter](https://www.yiiframework.com/doc/api/22.0/yii-data-activedatafilter),
using them in a format suitable for [yii\db\QueryInterface::where()](https://www.yiiframework.com/doc/api/22.0/yii-db-queryinterface#where()-detail).

## Configuring Data Provider For Filtering [¶](#configuring-data-provider-for-filtering)

As mentioned in the [Collections](guide_22_0__rest-resources.md#collections) section, we can use
[Data Provider](guide_22_0__output-data-providers.md#data-providers) to output sorted and paginated list of resources. We can also use
it to filter that list.

```
$filter = new ActiveDataFilter([
    'searchModel' => 'app\models\PostSearch',
]);

$filterCondition = null;
// You may load filters from any source. For example,
// if you prefer JSON in request body,
// use Yii::$app->request->getBodyParams() below:
if ($filter->load(Yii::$app->request->get())) { 
    $filterCondition = $filter->build();
    if ($filterCondition === false) {
        // Serializer would get errors out of it
        return $filter;
    }
}

$query = Post::find();
if ($filterCondition !== null) {
    $query->andWhere($filterCondition);
}

return new ActiveDataProvider([
    'query' => $query,
]);
```

`PostSearch` model serves the purpose of defining which properties and values are allowed for filtering:

```
use yii\base\Model;

class PostSearch extends Model 
{
    public $id;
    public $title;
    
    public function rules()
    {
        return [
            ['id', 'integer'],
            ['title', 'string', 'min' => 2, 'max' => 200],            
        ];
    }
}
```

Instead of preparing the standalone model for search rules you can use [yii\base\DynamicModel](https://www.yiiframework.com/doc/api/22.0/yii-base-dynamicmodel) if you don't need any
special business logic there.

```
$filter = new ActiveDataFilter([
    'searchModel' => (new DynamicModel(['id', 'title']))
        ->addRule(['id'], 'integer')
        ->addRule(['title'], 'string', ['min' => 2, 'max' => 200]),
]);
```

Defining `searchModel` is required in order to control the filter conditions allowed to the end user.

## Filtering Request [¶](#filtering-request)

End user is usually expected to provide optional filtering conditions in the request by one or more of the allowed
methods (which should be explicitly stated in the API documentation). For example, if filtering is handled via POST
method using JSON it can be something similar to:

```
{
    "filter": {
        "id": {"in": [2, 5, 9]},
        "title": {"like": "cheese"}
    }
}
```

The above conditions are:

- `id` must be either 2, 5, or 9 **AND**
- `title` must contain the word `cheese`.

The same conditions sent as a part of GET query are:

```
?filter[id][in][]=2&filter[id][in][]=5&filter[id][in][]=9&filter[title][like]=cheese
```

You can change the default `filter` key word by setting [yii\data\DataFilter::$filterAttributeName](https://www.yiiframework.com/doc/api/22.0/yii-data-datafilter#$filterAttributeName-detail).

## Filter Control Keywords [¶](#filter-control-keywords)

The default list of allowed filter control keywords is as the following:

| filter control | translates to |
| --- | --- |
| `and` | `AND` |
| `or` | `OR` |
| `not` | `NOT` |
| `lt` | `<` |
| `gt` | `>` |
| `lte` | `<=` |
| `gte` | `>=` |
| `eq` | `=` |
| `neq` | `!=` |
| `in` | `IN` |
| `nin` | `NOT IN` |
| `like` | `LIKE` |

You can expand that list by expanding option [yii\data\DataFilter::$filterControls](https://www.yiiframework.com/doc/api/22.0/yii-data-datafilter#$filterControls-detail), for example you could provide
several keywords for the same filter build key, creating multiple aliases like:

```
[
    'eq' => '=',
    '=' => '=',
    '==' => '=',
    '===' => '=',
    // ...
]
```

Keep in mind that any unspecified keyword will not be recognized as a filter control and will be treated as an attribute
name - you should avoid conflicts between control keywords and attribute names (for example: in case you have control
keyword `like` and an attribute named `like`, specifying condition for such attribute will be impossible).

> **Note:** while specifying filter controls take actual data exchange format, which your API uses, in mind.
> Make sure each specified control keyword is valid for the format. For example, in XML tag name can start
> only with a letter character, thus controls like `>`, `=`, or `$gt` will break the XML schema.

> **Note:** When adding new filter control word make sure to check whether you need also to update
> [yii\data\DataFilter::$conditionValidators](https://www.yiiframework.com/doc/api/22.0/yii-data-datafilter#$conditionValidators-detail) and/or [yii\data\DataFilter::$operatorTypes](https://www.yiiframework.com/doc/api/22.0/yii-data-datafilter#$operatorTypes-detail) in order to achieve
> expected query result based on the complication of the operator and the way it should work.

## Handling The Null Values [¶](#handling-the-null-values)

While it is easy to use `null` inside the JSON statement, it is not possible to send it using the GET query without
confusing the literal `null` with the string `"null"`. Since 2.0.40 you can use [yii\data\DataFilter::$nullValue](https://www.yiiframework.com/doc/api/22.0/yii-data-datafilter#$nullValue-detail)
option to configure the word that will be used as a replacement for literal `null` (by default it's `"NULL"`).

## Aliasing Attributes [¶](#aliasing-attributes)

Whether you want to alias the attribute with another name or to filter the joined DB table you can use
[yii\data\DataFilter::$attributeMap](https://www.yiiframework.com/doc/api/22.0/yii-data-datafilter#$attributeMap-detail) to set the map of aliases:

```
[
    'carPart' => 'car_part', // carPart will be used to filter car_part property
    'authorName' => '{{author}}.[[name]]', // authorName will be used to filter name property of joined author table
]
```

## Configuring Filters For `ActiveController` [¶](#configuring-filters-for-activecontroller)

[yii\rest\ActiveController](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller) comes with the handy set of common REST actions that you can easily configure to use
filters as well through [yii\rest\IndexAction::$dataFilter](https://www.yiiframework.com/doc/api/22.0/yii-rest-indexaction#$dataFilter-detail) property. One of the possible ways of doing so is to use
[yii\rest\ActiveController::actions()](https://www.yiiframework.com/doc/api/22.0/yii-rest-activecontroller#actions()-detail):

```
public function actions()
{
    $actions = parent::actions();
    
    $actions['index']['dataFilter'] = [
        'class' => \yii\data\ActiveDataFilter::class,
        'attributeMap' => [
            'clockIn' => 'clock_in',
        ],
        'searchModel' => (new DynamicModel(['id', 'clockIn']))->addRule(['id', 'clockIn'], 'integer', ['min' => 1]),
    ];
    
    return $actions;
}
```

Now your collection (accessed through `index` action) can be filtered by `id` and `clockIn` properties.

[Controllers](guide_22_0__rest-controllers.md)

[Go to Top](#top)

[Routing](guide_22_0__rest-routing.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/rest-filtering-collections.md) !
