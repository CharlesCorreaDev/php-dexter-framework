# Displaying Data: Data Providers | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/output-data-providers

---

0

# Data Providers [¶](#data-providers)

In the [Pagination](guide_22_0__output-pagination.md) and [Sorting](guide_22_0__output-sorting.md) sections, we have described how to
allow end users to choose a particular page of data to display and sort them by some columns. Because the task
of paginating and sorting data is very common, Yii provides a set of *data provider* classes to encapsulate it.

A data provider is a class implementing [yii\data\DataProviderInterface](https://www.yiiframework.com/doc/api/22.0/yii-data-dataproviderinterface). It mainly supports retrieving paginated
and sorted data. It is usually used to work with [data widgets](guide_22_0__output-data-widgets.md) so that end users can
interactively paginate and sort data.

The following data provider classes are included in the Yii releases:

- [yii\data\ActiveDataProvider](https://www.yiiframework.com/doc/api/22.0/yii-data-activedataprovider): uses [yii\db\Query](https://www.yiiframework.com/doc/api/22.0/yii-db-query) or [yii\db\ActiveQuery](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery) to query data from databases
  and return them in terms of arrays or [Active Record](guide_22_0__db-active-record.md) instances.
- [yii\data\SqlDataProvider](https://www.yiiframework.com/doc/api/22.0/yii-data-sqldataprovider): executes a SQL statement and returns database data as arrays.
- [yii\data\ArrayDataProvider](https://www.yiiframework.com/doc/api/22.0/yii-data-arraydataprovider): takes a big array and returns a slice of it based on the paginating and sorting
  specifications.

The usage of all these data providers share the following common pattern:

```
// create the data provider by configuring its pagination and sort properties
$provider = new XyzDataProvider([
    'pagination' => [...],
    'sort' => [...],
]);

// retrieves paginated and sorted data
$models = $provider->getModels();

// get the number of data items in the current page
$count = $provider->getCount();

// get the total number of data items across all pages
$totalCount = $provider->getTotalCount();
```

You specify the pagination and sorting behaviors of a data provider by configuring its
[pagination](https://www.yiiframework.com/doc/api/22.0/yii-data-basedataprovider#$pagination-detail) and [sort](https://www.yiiframework.com/doc/api/22.0/yii-data-basedataprovider#$sort-detail) properties
which correspond to the configurations for [yii\data\Pagination](https://www.yiiframework.com/doc/api/22.0/yii-data-pagination) and [yii\data\Sort](https://www.yiiframework.com/doc/api/22.0/yii-data-sort), respectively.
You may also configure them to be `false` to disable pagination and/or sorting features.

[Data widgets](guide_22_0__output-data-widgets.md), such as [yii\grid\GridView](https://www.yiiframework.com/doc/api/22.0/yii-grid-gridview), have a property named `dataProvider` which
can take a data provider instance and display the data it provides. For example,

```
echo yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
]);
```

These data providers mainly vary in the way how the data source is specified. In the following subsections,
we will explain the detailed usage of each of these data providers.

## Active Data Provider [¶](#active-data-provider)

To use [yii\data\ActiveDataProvider](https://www.yiiframework.com/doc/api/22.0/yii-data-activedataprovider), you should configure its [query](https://www.yiiframework.com/doc/api/22.0/yii-data-activedataprovider#$query-detail) property.
It can take either a [yii\db\Query](https://www.yiiframework.com/doc/api/22.0/yii-db-query) or [yii\db\ActiveQuery](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery) object. If the former, the data returned will be arrays;
if the latter, the data returned can be either arrays or [Active Record](guide_22_0__db-active-record.md) instances.
For example,

```
use yii\data\ActiveDataProvider;

$query = Post::find()->where(['status' => 1]);

$provider = new ActiveDataProvider([
    'query' => $query,
    'pagination' => [
        'pageSize' => 10,
    ],
    'sort' => [
        'defaultOrder' => [
            'created_at' => SORT_DESC,
            'title' => SORT_ASC, 
        ]
    ],
]);

// returns an array of Post objects
$posts = $provider->getModels();
```

If `$query` in the above example is created using the following code, then the data provider will return raw arrays.

```
use yii\db\Query;

$query = (new Query())->from('post')->where(['status' => 1]);
```

> **Note:** If a query already specifies the `orderBy` clause, the new ordering instructions given by end users
> (through the `sort` configuration) will be appended to the existing `orderBy` clause. Any existing `limit`
> and `offset` clauses will be overwritten by the pagination request from end users (through the `pagination` configuration).

By default, [yii\data\ActiveDataProvider](https://www.yiiframework.com/doc/api/22.0/yii-data-activedataprovider) uses the `db` application component as the database connection. You may
use a different database connection by configuring the [yii\data\ActiveDataProvider::$db](https://www.yiiframework.com/doc/api/22.0/yii-data-activedataprovider#$db-detail) property.

## SQL Data Provider [¶](#sql-data-provider)

[yii\data\SqlDataProvider](https://www.yiiframework.com/doc/api/22.0/yii-data-sqldataprovider) works with a raw SQL statement which is used to fetch the needed
data. Based on the specifications of [sort](https://www.yiiframework.com/doc/api/22.0/yii-data-basedataprovider#$sort-detail) and
[pagination](https://www.yiiframework.com/doc/api/22.0/yii-data-basedataprovider#$pagination-detail), the provider will adjust the `ORDER BY` and `LIMIT`
clauses of the SQL statement accordingly to fetch only the requested page of data in the desired order.

To use [yii\data\SqlDataProvider](https://www.yiiframework.com/doc/api/22.0/yii-data-sqldataprovider), you should specify the [sql](https://www.yiiframework.com/doc/api/22.0/yii-data-sqldataprovider#$sql-detail) property as well
as the [totalCount](https://www.yiiframework.com/doc/api/22.0/yii-data-basedataprovider#$totalCount-detail) property. For example,

```
use yii\data\SqlDataProvider;

$count = Yii::$app->db->createCommand('
    SELECT COUNT(*) FROM post WHERE status=:status
', [':status' => 1])->queryScalar();

$provider = new SqlDataProvider([
    'sql' => 'SELECT * FROM post WHERE status=:status',
    'params' => [':status' => 1],
    'totalCount' => $count,
    'pagination' => [
        'pageSize' => 10,
    ],
    'sort' => [
        'attributes' => [
            'title',
            'view_count',
            'created_at',
        ],
    ],
]);

// returns an array of data rows
$models = $provider->getModels();
```

> **Info:** The [totalCount](https://www.yiiframework.com/doc/api/22.0/yii-data-basedataprovider#$totalCount-detail) property is required only if you need to
> paginate the data. This is because the SQL statement specified via [sql](https://www.yiiframework.com/doc/api/22.0/yii-data-sqldataprovider#$sql-detail)
> will be modified by the provider to return only the currently requested page of data. The provider still
> needs to know the total number of data items in order to correctly calculate the number of pages available.

## Array Data Provider [¶](#array-data-provider)

[yii\data\ArrayDataProvider](https://www.yiiframework.com/doc/api/22.0/yii-data-arraydataprovider) is best used when working with a big array. The provider allows you to return
a page of the array data sorted by one or multiple columns. To use [yii\data\ArrayDataProvider](https://www.yiiframework.com/doc/api/22.0/yii-data-arraydataprovider), you should
specify the [allModels](https://www.yiiframework.com/doc/api/22.0/yii-data-arraydataprovider#$allModels-detail) property as the big array.
Elements in the big array can be either associative arrays
(e.g. query results of [DAO](guide_22_0__db-dao.md)) or objects (e.g. [Active Record](guide_22_0__db-active-record.md) instances).
For example,

```
use yii\data\ArrayDataProvider;

$data = [
    ['id' => 1, 'name' => 'name 1', ...],
    ['id' => 2, 'name' => 'name 2', ...],
    ...
    ['id' => 100, 'name' => 'name 100', ...],
];

$provider = new ArrayDataProvider([
    'allModels' => $data,
    'pagination' => [
        'pageSize' => 10,
    ],
    'sort' => [
        'attributes' => ['id', 'name'],
    ],
]);

// get the rows in the currently requested page
$rows = $provider->getModels();
```

> **Note:** Compared to [Active Data Provider](#active-data-provider) and [SQL Data Provider](#sql-data-provider),
> array data provider is less efficient because it requires loading *all* data into the memory.

## Working with Data Keys [¶](#working-with-keys)

When using the data items returned by a data provider, you often need to identify each data item with a unique key.
For example, if the data items represent customer information, you may want to use the customer ID as the key
for each customer data. Data providers can return a list of such keys corresponding with the data items returned
by [yii\data\DataProviderInterface::getModels()](https://www.yiiframework.com/doc/api/22.0/yii-data-dataproviderinterface#getModels()-detail). For example,

```
use yii\data\ActiveDataProvider;

$query = Post::find()->where(['status' => 1]);

$provider = new ActiveDataProvider([
    'query' => $query,
]);

// returns an array of Post objects
$posts = $provider->getModels();

// returns the primary key values corresponding to $posts
$ids = $provider->getKeys();
```

In the above example, because you provide to [yii\data\ActiveDataProvider](https://www.yiiframework.com/doc/api/22.0/yii-data-activedataprovider) an [yii\db\ActiveQuery](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery) object,
it is intelligent enough to return primary key values as the keys. You may also explicitly specify how the key
values should be calculated by configuring [yii\data\ActiveDataProvider::$key](https://www.yiiframework.com/doc/api/22.0/yii-data-activedataprovider#$key-detail) with a column name or
a callable calculating key values. For example,

```
// use "slug" column as key values
$provider = new ActiveDataProvider([
    'query' => Post::find(),
    'key' => 'slug',
]);

// use the result of md5(id) as key values
$provider = new ActiveDataProvider([
    'query' => Post::find(),
    'key' => function ($model) {
        return md5($model->id);
    }
]);
```

## Creating Custom Data Provider [¶](#custom-data-provider)

To create your own custom data provider classes, you should implement [yii\data\DataProviderInterface](https://www.yiiframework.com/doc/api/22.0/yii-data-dataproviderinterface).
An easier way is to extend from [yii\data\BaseDataProvider](https://www.yiiframework.com/doc/api/22.0/yii-data-basedataprovider) which allows you to focus on the core data provider
logic. In particular, you mainly need to implement the following methods:

- [prepareModels()](https://www.yiiframework.com/doc/api/22.0/yii-data-basedataprovider#prepareModels()-detail): prepares the data models that will be made
  available in the current page and returns them as an array.
- [prepareKeys()](https://www.yiiframework.com/doc/api/22.0/yii-data-basedataprovider#prepareKeys()-detail): accepts an array of currently available data models
  and returns keys associated with them.
- [prepareTotalCount](https://www.yiiframework.com/doc/api/22.0/yii-data-basedataprovider#prepareTotalCount()-detail): returns a value indicating the total number
  of data models in the data provider.

Below is an example of a data provider that reads CSV data efficiently:

```
<?php
use yii\data\BaseDataProvider;

class CsvDataProvider extends BaseDataProvider
{
    /**
     * @var string name of the CSV file to read
     */
    public $filename;
    
    /**
     * @var string|callable name of the key column or a callable returning it
     */
    public $key;
    
    /**
     * @var SplFileObject
     */
    protected $fileObject; // SplFileObject is very convenient for seeking to particular line in a file
    
 
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();
        
        // open file
        $this->fileObject = new SplFileObject($this->filename);
    }
 
    /**
     * {@inheritdoc}
     */
    protected function prepareModels()
    {
        $models = [];
        $pagination = $this->getPagination();
 
        if ($pagination === false) {
            // in case there's no pagination, read all lines
            while (!$this->fileObject->eof()) {
                $models[] = $this->fileObject->fgetcsv();
                $this->fileObject->next();
            }
        } else {
            // in case there's pagination, read only a single page
            $pagination->totalCount = $this->getTotalCount();
            $this->fileObject->seek($pagination->getOffset());
            $limit = $pagination->getLimit();
 
            for ($count = 0; $count < $limit; ++$count) {
                $models[] = $this->fileObject->fgetcsv();
                $this->fileObject->next();
            }
        }
 
        return $models;
    }
 
    /**
     * {@inheritdoc}
     */
    protected function prepareKeys($models)
    {
        if ($this->key !== null) {
            $keys = [];
 
            foreach ($models as $model) {
                if (is_string($this->key)) {
                    $keys[] = $model[$this->key];
                } else {
                    $keys[] = call_user_func($this->key, $model);
                }
            }
 
            return $keys;
        }

        return array_keys($models);
    }
 
    /**
     * {@inheritdoc}
     */
    protected function prepareTotalCount()
    {
        $count = 0;
 
        while (!$this->fileObject->eof()) {
            $this->fileObject->next();
            ++$count;
        }
 
        return $count;
    }
}
```

## Filtering Data Providers using Data Filters [¶](#filtering-data-providers-using-data-filters)

While you can build conditions for active data provider manually as described in
[Filtering Data](guide_22_0__output-data-widgets.md#filtering-data) and [Separate Filter Form](guide_22_0__output-data-widgets.md#separate-filter-form)
sections of data widgets guide, Yii has data filters that are very useful if you need flexible filter conditions.
Data filters could be used as follows:

```
$filter = new ActiveDataFilter([
    'searchModel' => 'app\models\PostSearch'
]);

$filterCondition = null;

// You may load filters from any source. For example,
// if you prefer JSON in request body,
// use Yii::$app->request->getBodyParams() below:
if ($filter->load(\Yii::$app->request->get())) { 
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

Data filters are quite flexible. You may customize how conditions are built and which operators are allowed.
For details check API docs on [yii\data\DataFilter](https://www.yiiframework.com/doc/api/22.0/yii-data-datafilter).

[Sorting](guide_22_0__output-sorting.md)

[Go to Top](#top)

[Data Widgets](guide_22_0__output-data-widgets.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/output-data-providers.md) !
