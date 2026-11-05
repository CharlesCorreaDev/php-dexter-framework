# Displaying Data: Data Widgets | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/output-data-widgets

---

0

# Data widgets [¶](#data-widgets)

Yii provides a set of [widgets](guide_22_0__structure-widgets.md) that can be used to display data.
While the [DetailView](#detail-view) widget can be used to display data for a single record,
[ListView](#list-view) and [GridView](#grid-view) can be used to display a list or table of data records
providing features like pagination, sorting and filtering.

## DetailView [¶](#detail-view)

The [DetailView](https://www.yiiframework.com/doc/api/22.0/yii-widgets-detailview) widget displays the details of a single data [model](https://www.yiiframework.com/doc/api/22.0/yii-widgets-detailview#$model-detail).

It is best used for displaying a model in a regular format (e.g. each model attribute is displayed as a row in a table).
The model can be either an instance or subclass of [yii\base\Model](https://www.yiiframework.com/doc/api/22.0/yii-base-model) such as an [active record](guide_22_0__db-active-record.md) or an associative array.

DetailView uses the [$attributes](https://www.yiiframework.com/doc/api/22.0/yii-widgets-detailview#$attributes-detail) property to determine which model attributes should be displayed and how they
should be formatted. See the [formatter section](guide_22_0__output-formatting.md) for available formatting options.

A typical usage of DetailView is as follows:

```
echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        'title',                                           // title attribute (in plain text)
        'description:html',                                // description attribute formatted as HTML
        [                                                  // the owner name of the model
            'label' => 'Owner',
            'value' => $model->owner->name,            
            'contentOptions' => ['class' => 'bg-red'],     // HTML attributes to customize value tag
            'captionOptions' => ['tooltip' => 'Tooltip'],  // HTML attributes to customize label tag
        ],
        'created_at:datetime',                             // creation date formatted as datetime
    ],
]);
```

Remember that unlike yii\widgets\GridView which processes a set of models,
[DetailView](https://www.yiiframework.com/doc/api/22.0/yii-widgets-detailview) processes just one. So most of the time there is no need for using closure since
`$model` is the only one model for display and available in view as a variable.

However some cases can make using of closure useful. For example when `visible` is specified and you want to prevent
`value` calculations in case it evaluates to `false`:

```
echo DetailView::widget([
    'model' => $model,
    'attributes' => [
        [
            'attribute' => 'owner',
            'value' => function ($model) {
                return $model->owner->name;
            },
            'visible' => \Yii::$app->user->can('posts.owner.view'),
        ],
    ],
]);
```

## ListView [¶](#list-view)

The [ListView](https://www.yiiframework.com/doc/api/22.0/yii-widgets-listview) widget is used to display data from a [data provider](guide_22_0__output-data-providers.md).
Each data model is rendered using the specified [view file](https://www.yiiframework.com/doc/api/22.0/yii-widgets-listview#$itemView-detail).
Since it provides features such as pagination, sorting and filtering out of the box, it is handy both to display
information to end user and to create data managing UI.

A typical usage is as follows:

```
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

$dataProvider = new ActiveDataProvider([
    'query' => Post::find(),
    'pagination' => [
        'pageSize' => 20,
    ],
]);
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_post',
]);
```

The `_post` view file could contain the following:

```
<?php
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<div class="post">
    <h2><?= Html::encode($model->title) ?></h2>

    <?= HtmlPurifier::process($model->text) ?>    
</div>
```

In the view file above, the current data model is available as `$model`. Additionally the following variables are available:

- `$key`: mixed, the key value associated with the data item.
- `$index`: integer, the zero-based index of the data item in the items array returned by the data provider.
- `$widget`: ListView, this widget instance.

If you need to pass additional data to each view, you can use the [$viewParams](https://www.yiiframework.com/doc/api/22.0/yii-widgets-listview#$viewParams-detail) property
to pass key value pairs like the following:

```
echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_post',
    'viewParams' => [
        'fullView' => true,
        'context' => 'main-page',
        // ...
    ],
]);
```

These are then also available as variables in the view.

## GridView [¶](#grid-view)

Data grid or [GridView](https://www.yiiframework.com/doc/api/22.0/yii-grid-gridview) is one of the most powerful Yii widgets. It is extremely useful if you need to quickly build the admin
section of the system. It takes data from a [data provider](guide_22_0__output-data-providers.md) and renders each row using a set of [columns](https://www.yiiframework.com/doc/api/22.0/yii-grid-gridview#$columns-detail)
presenting data in the form of a table.

Each row of the table represents the data of a single data item, and a column usually represents an attribute of
the item (some columns may correspond to complex expressions of attributes or static text).

The minimal code needed to use GridView is as follows:

```
use yii\grid\GridView;
use yii\data\ActiveDataProvider;

$dataProvider = new ActiveDataProvider([
    'query' => Post::find(),
    'pagination' => [
        'pageSize' => 20,
    ],
]);
echo GridView::widget([
    'dataProvider' => $dataProvider,
]);
```

The above code first creates a data provider and then uses GridView to display every attribute in every row taken from
the data provider. The displayed table is equipped with sorting and pagination functionality out of the box.

### Grid columns [¶](#grid-columns)

The columns of the grid table are configured in terms of [yii\grid\Column](https://www.yiiframework.com/doc/api/22.0/yii-grid-column) classes, which are
configured in the [columns](https://www.yiiframework.com/doc/api/22.0/yii-grid-gridview#$columns-detail) property of GridView configuration.
Depending on column type and settings these are able to present data differently.
The default class is [yii\grid\DataColumn](https://www.yiiframework.com/doc/api/22.0/yii-grid-datacolumn), which represents a model attribute and can be sorted and filtered by.

```
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        // Simple columns defined by the data contained in $dataProvider.
        // Data from the model's column will be used.
        'id',
        'username',
        // More complex one.
        [
            'class' => 'yii\grid\DataColumn', // can be omitted, as it is the default
            'value' => function ($data) {
                return $data->name; // $data['name'] for array data, e.g. using SqlDataProvider.
            },
        ],
    ],
]);
```

Note that if the [columns](https://www.yiiframework.com/doc/api/22.0/yii-grid-gridview#$columns-detail) part of the configuration isn't specified,
Yii tries to show all possible columns of the data provider's model.

### Column classes [¶](#column-classes)

Grid columns could be customized by using different column classes:

```
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'class' => 'yii\grid\SerialColumn', // <-- here
            // you may configure additional properties here
        ],
```

In addition to column classes provided by Yii that we'll review below, you can create your own column classes.

Each column class extends from [yii\grid\Column](https://www.yiiframework.com/doc/api/22.0/yii-grid-column) so that there are some common options you can set while configuring
grid columns.

- [header](https://www.yiiframework.com/doc/api/22.0/yii-grid-column#$header-detail) allows to set content for header row.
- [footer](https://www.yiiframework.com/doc/api/22.0/yii-grid-column#$footer-detail) allows to set content for footer row.
- [visible](https://www.yiiframework.com/doc/api/22.0/yii-grid-column#$visible-detail) defines if the column should be visible.
- [content](https://www.yiiframework.com/doc/api/22.0/yii-grid-column#$content-detail) allows you to pass a valid PHP callback that will return data for a row. The format is the following:

  ```
  function ($model, $key, $index, $column) {
      return 'a string';
  }
  ```

You may specify various container HTML options by passing arrays to:

- [headerOptions](https://www.yiiframework.com/doc/api/22.0/yii-grid-column#$headerOptions-detail)
- [footerOptions](https://www.yiiframework.com/doc/api/22.0/yii-grid-column#$footerOptions-detail)
- [filterOptions](https://www.yiiframework.com/doc/api/22.0/yii-grid-column#$filterOptions-detail)
- [contentOptions](https://www.yiiframework.com/doc/api/22.0/yii-grid-column#$contentOptions-detail)

#### Data column [¶](#data-column)

[Data column](https://www.yiiframework.com/doc/api/22.0/yii-grid-datacolumn) is used for displaying and sorting data. It is the default column type so the specifying class could be omitted when
using it.

The main setting of the data column is its [format](https://www.yiiframework.com/doc/api/22.0/yii-grid-datacolumn#$format-detail) property. Its values
correspond to methods in the `formatter` [application component](guide_22_0__structure-application-components.md) that is [Formatter](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter) by default:

```
echo GridView::widget([
    'columns' => [
        [
            'attribute' => 'name',
            'format' => 'text'
        ],
        [
            'attribute' => 'birthday',
            'format' => ['date', 'php:Y-m-d']
        ],
        'created_at:datetime', // shortcut format
        [
            'label' => 'Education',
            'attribute' => 'education',
            'filter' => ['0' => 'Elementary', '1' => 'Secondary', '2' => 'Higher'],
            'filterInputOptions' => ['prompt' => 'All educations', 'class' => 'form-control', 'id' => null]
        ],
    ],
]);
```

In the above, `text` corresponds to [yii\i18n\Formatter::asText()](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asText()-detail). The value of the column is passed as the first
argument. In the second column definition, `date` corresponds to [yii\i18n\Formatter::asDate()](https://www.yiiframework.com/doc/api/22.0/yii-i18n-formatter#asDate()-detail). The value of the
column is, again, passed as the first argument while 'php:Y-m-d' is used as the second argument value.

For a list of available formatters see the [section about Data Formatting](guide_22_0__output-formatting.md).

For configuring data columns there is also a shortcut format which is described in the
API documentation for [columns](https://www.yiiframework.com/doc/api/22.0/yii-grid-gridview#$columns-detail).

Use [filter](https://www.yiiframework.com/doc/api/22.0/yii-grid-datacolumn#$filter-detail) and [filterInputOptions](https://www.yiiframework.com/doc/api/22.0/yii-grid-datacolumn#$filterInputOptions-detail) to
control HTML for the filter input.

By default, column headers are rendered by [yii\data\Sort::link()](https://www.yiiframework.com/doc/api/22.0/yii-data-sort#link()-detail). It could be adjusted using [yii\grid\Column::$header](https://www.yiiframework.com/doc/api/22.0/yii-grid-column#$header-detail).
To change header text you should set [yii\grid\DataColumn::$label](https://www.yiiframework.com/doc/api/22.0/yii-grid-datacolumn#$label-detail) like in the example above.
By default the label will be populated from data model. For more details see [yii\grid\DataColumn::getHeaderCellLabel()](https://www.yiiframework.com/doc/api/22.0/yii-grid-datacolumn#getHeaderCellLabel()-detail).

#### Action column [¶](#action-column)

[Action column](https://www.yiiframework.com/doc/api/22.0/yii-grid-actioncolumn) displays action buttons such as update or delete for each row.

```
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'class' => 'yii\grid\ActionColumn',
            // you may configure additional properties here
        ],
```

Available properties you can configure are:

- [controller](https://www.yiiframework.com/doc/api/22.0/yii-grid-actioncolumn#$controller-detail) is the ID of the controller that should handle the actions. If not set, it will use the currently active
  controller.
- [template](https://www.yiiframework.com/doc/api/22.0/yii-grid-actioncolumn#$template-detail) defines the template used for composing each cell in the action column. Tokens enclosed within curly brackets are
  treated as controller action IDs (also called *button names* in the context of action column). They will be replaced
  by the corresponding button rendering callbacks specified in [buttons](https://www.yiiframework.com/doc/api/22.0/yii-grid-actioncolumn#$buttons-detail). For example, the token `{view}` will be
  replaced by the result of the callback `buttons['view']`. If a callback cannot be found, the token will be replaced
  with an empty string. The default tokens are `{view} {update} {delete}`.
- [buttons](https://www.yiiframework.com/doc/api/22.0/yii-grid-actioncolumn#$buttons-detail) is an array of button rendering callbacks. The array keys are the button names (without curly brackets),
  and the values are the corresponding button rendering callbacks. The callbacks should use the following signature:

  ```
  function ($url, $model, $key) {
      // return the button HTML code
  }
  ```

  In the code above, `$url` is the URL that the column creates for the button, `$model` is the model object being
  rendered for the current row, and `$key` is the key of the model in the data provider array.
- [urlCreator](https://www.yiiframework.com/doc/api/22.0/yii-grid-actioncolumn#$urlCreator-detail) is a callback that creates a button URL using the specified model information. The signature of
  the callback should be the same as that of [yii\grid\ActionColumn::createUrl()](https://www.yiiframework.com/doc/api/22.0/yii-grid-actioncolumn#createUrl()-detail). If this property is not set,
  button URLs will be created using [yii\grid\ActionColumn::createUrl()](https://www.yiiframework.com/doc/api/22.0/yii-grid-actioncolumn#createUrl()-detail).
- [visibleButtons](https://www.yiiframework.com/doc/api/22.0/yii-grid-actioncolumn#$visibleButtons-detail) is an array of visibility conditions for each button.
  The array keys are the button names (without curly brackets), and the values are the boolean `true`/`false` or the
  anonymous function. When the button name is not specified in this array it will be shown by default.
  The callbacks must use the following signature:

  ```
  function ($model, $key, $index) {
      return $model->status === 'editable';
  }
  ```

  Or you can pass a boolean value:

  ```
  [
      'update' => \Yii::$app->user->can('update')
  ]
  ```

#### Checkbox column [¶](#checkbox-column)

[Checkbox column](https://www.yiiframework.com/doc/api/22.0/yii-grid-checkboxcolumn) displays a column of checkboxes.

To add a CheckboxColumn to the GridView, add it to the [columns](https://www.yiiframework.com/doc/api/22.0/yii-grid-gridview#$columns-detail) configuration as follows:

```
echo GridView::widget([
    'id' => 'grid',
    'dataProvider' => $dataProvider,
    'columns' => [
        // ...
        [
            'class' => 'yii\grid\CheckboxColumn',
            // you may configure additional properties here
        ],
    ],
```

Users may click on the checkboxes to select rows of the grid. The selected rows may be obtained by calling the following
JavaScript code:

```
var keys = $('#grid').yiiGridView('getSelectedRows');
// keys is an array consisting of the keys associated with the selected rows
```

#### Serial column [¶](#serial-column)

[Serial column](https://www.yiiframework.com/doc/api/22.0/yii-grid-serialcolumn) renders row numbers starting with `1` and going forward.

Usage is as simple as the following:

```
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'], // <-- here
        // ...
```

### Sorting data [¶](#sorting-data)

> **Note:** This section is under development.
>
> - <https://github.com/yiisoft/yii2/issues/1576>

### Filtering data [¶](#filtering-data)

For filtering data, the GridView needs a [model](guide_22_0__structure-models.md) that represents the search criteria which is
usually taken from the filter fields in the GridView table.
A common practice when using [active records](guide_22_0__db-active-record.md) is to create a search Model class
that provides needed functionality (it can be generated for you by [Gii](guide_22_0__start-gii.md)). This class defines the validation
rules to show filter controls on the GridView table and to provide a `search()` method that will return the data
provider with an adjusted query that processes the search criteria.

To add the search capability for the `Post` model, we can create a `PostSearch` model like the following example:

```
<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;

class PostSearch extends Post
{
    public function rules()
    { 
        // only fields in rules() are searchable
        return [
            [['id'], 'integer'],
            [['title', 'creation_date'], 'safe'],
        ];
    }

    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Post::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        // load the search form data and validate
        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        // adjust the query by adding the filters
        $query->andFilterWhere(['id' => $this->id]);
        $query->andFilterWhere(['like', 'title', $this->title])
              ->andFilterWhere(['like', 'creation_date', $this->creation_date]);

        return $dataProvider;
    }
}
```

> **Tip:** See [Query Builder](guide_22_0__db-query-builder.md) and especially [Filter Conditions](guide_22_0__db-query-builder.md#filter-conditions)
> to learn how to build filtering query.

You can use this function in the controller to get the dataProvider for the GridView:

```
$searchModel = new PostSearch();
$dataProvider = $searchModel->search(Yii::$app->request->get());

return $this->render('myview', [
    'dataProvider' => $dataProvider,
    'searchModel' => $searchModel,
]);
```

And in the view you then assign the `$dataProvider` and `$searchModel` to the GridView:

```
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        // ...
    ],
]);
```

### Separate filter form [¶](#separate-filter-form)

Most of the time using GridView header filters is enough, but in case you need a separate filter form,
you can easily add it as well. You can create partial view `_search.php` with the following contents:

```
<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var \yii\web\View $this
 * @var \app\models\PostSearch $model
 * @var \yii\widgets\ActiveForm $form
 */
?>

<div class="post-search">
    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'creation_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::submitButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
```

and include it in `index.php` view like so:

```
<?= $this->render('_search', ['model' => $searchModel]) ?>
```

> **Note:** if you use Gii to generate CRUD code, the separate filter form (`_search.php`) is generated by default,
> but is commented in `index.php` view. Uncomment it and it's ready to use!

Separate filter form is useful when you need to filter by fields, that are not displayed in GridView
or for special filtering conditions, like date range. For filtering by date range we can add non DB attributes
`createdFrom` and `createdTo` to the search model:

```
class PostSearch extends Post
{
    /**
     * @var string
     */
    public $createdFrom;

    /**
     * @var string
     */
    public $createdTo;
}
```

Extend query conditions in the `search()` method like so:

```
$query->andFilterWhere(['>=', 'creation_date', $this->createdFrom])
      ->andFilterWhere(['<=', 'creation_date', $this->createdTo]);
```

And add the representative fields to the filter form:

```
<?= $form->field($model, 'creationFrom') ?>

<?= $form->field($model, 'creationTo') ?>
```

### Working with model relations [¶](#working-with-model-relations)

When displaying active records in a GridView you might encounter the case where you display values of related
columns such as the post author's name instead of just his `id`.
You do this by defining the attribute name in [yii\grid\GridView::$columns](https://www.yiiframework.com/doc/api/22.0/yii-grid-gridview#$columns-detail) as `author.name` when the `Post` model
has a relation named `author` and the author model has an attribute `name`.
The GridView will then display the name of the author but sorting and filtering are not enabled by default.
You have to adjust the `PostSearch` model that has been introduced in the last section to add this functionality.

To enable sorting on a related column you have to join the related table and add the sorting rule
to the Sort component of the data provider:

```
$query = Post::find();
$dataProvider = new ActiveDataProvider([
    'query' => $query,
]);

// join with relation `author` that is a relation to the table `users`
// and set the table alias to be `author`
$query->joinWith(['author' => function($query) { $query->from(['author' => 'users']); }]);
// since version 2.0.7, the above line can be simplified to $query->joinWith('author AS author');
// enable sorting for the related column
$dataProvider->sort->attributes['author.name'] = [
    'asc' => ['author.name' => SORT_ASC],
    'desc' => ['author.name' => SORT_DESC],
];

// ...
```

Filtering also needs the joinWith call as above. You also need to define the searchable column in attributes and rules like this:

```
public function attributes()
{
    // add related fields to searchable attributes
    return array_merge(parent::attributes(), ['author.name']);
}

public function rules()
{
    return [
        [['id'], 'integer'],
        [['title', 'creation_date', 'author.name'], 'safe'],
    ];
}
```

In `search()` you then just add another filter condition with:

```
$query->andFilterWhere(['LIKE', 'author.name', $this->getAttribute('author.name')]);
```

> **Info:** In the above we use the same string for the relation name and the table alias; however, when your alias and relation name
> differ, you have to pay attention to where you use the alias and where you use the relation name.
> A simple rule for this is to use the alias in every place that is used to build the database query and the
> relation name in all other definitions such as `attributes()` and `rules()` etc.
>
> For example, if you use the alias `au` for the author relation table, the joinWith statement looks like the following:
>
> ```
> $query->joinWith(['author au']);
> ```
>
> It is also possible to just call `$query->joinWith(['author']);` when the alias is defined in the relation definition.
>
> The alias has to be used in the filter condition but the attribute name stays the same:
>
> ```
> $query->andFilterWhere(['LIKE', 'au.name', $this->getAttribute('author.name')]);
> ```
>
> The same is true for the sorting definition:
>
> ```
> $dataProvider->sort->attributes['author.name'] = [
>      'asc' => ['au.name' => SORT_ASC],
>      'desc' => ['au.name' => SORT_DESC],
> ];
> ```
>
> Also, when specifying the [defaultOrder](https://www.yiiframework.com/doc/api/22.0/yii-data-sort#$defaultOrder-detail) for sorting, you need to use the relation name
> instead of the alias:
>
> ```
> $dataProvider->sort->defaultOrder = ['author.name' => SORT_ASC];
> ```

> **Info:** For more information on `joinWith` and the queries performed in the background, check the
> [active record docs on joining with relations](guide_22_0__db-active-record.md#joining-with-relations).

#### Using SQL views for filtering, sorting and displaying data [¶](#using-sql-views)

There is also another approach that can be faster and more useful - SQL views. For example, if we need to show the gridview
with users and their profiles, we can do so in this way:

```
CREATE OR REPLACE VIEW vw_user_info AS
    SELECT user.*, user_profile.lastname, user_profile.firstname
    FROM user, user_profile
    WHERE user.id = user_profile.user_id
```

Then you need to create the ActiveRecord that will be representing this view:

```
namespace app\models\views\grid;

use yii\db\ActiveRecord;

class UserView extends ActiveRecord
{

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'vw_user_info';
    }

    public static function primaryKey()
    {
        return ['id'];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            // define here your rules
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            // define here your attribute labels
        ];
    }

}
```

After that you can use this UserView active record with search models, without additional specification of sorting and filtering attributes.
All attributes will be working out of the box. Note that this approach has several pros and cons:

- you don't need to specify different sorting and filtering conditions. Everything works out of the box;
- it can be much faster because of the data size, count of sql queries performed (for each relation you will not need any additional query);
- since this is just a simple mapping UI on the sql view it lacks some domain logic that is in your entities, so if you have some methods like `isActive`,
  `isDeleted` or others that will influence the UI, you will need to duplicate them in this class too.

### Multiple GridViews on one page [¶](#multiple-gridviews)

You can use more than one GridView on a single page but some additional configuration is needed so that
they do not interfere with each other.
When using multiple instances of GridView you have to configure different parameter names for
the generated sort and pagination links so that each GridView has its own individual sorting and pagination.
You do so by setting the [sortParam](https://www.yiiframework.com/doc/api/22.0/yii-data-sort#$sortParam-detail) and [pageParam](https://www.yiiframework.com/doc/api/22.0/yii-data-pagination#$pageParam-detail)
of the dataProvider's [sort](https://www.yiiframework.com/doc/api/22.0/yii-data-basedataprovider#$sort-detail) and [pagination](https://www.yiiframework.com/doc/api/22.0/yii-data-basedataprovider#$pagination-detail)
instances.

Assume we want to list the `Post` and `User` models for which we have already prepared two data providers
in `$userProvider` and `$postProvider`:

```
use yii\grid\GridView;

$userProvider->pagination->pageParam = 'user-page';
$userProvider->sort->sortParam = 'user-sort';

$postProvider->pagination->pageParam = 'post-page';
$postProvider->sort->sortParam = 'post-sort';

echo '<h1>Users</h1>';
echo GridView::widget([
    'dataProvider' => $userProvider,
]);

echo '<h1>Posts</h1>';
echo GridView::widget([
    'dataProvider' => $postProvider,
]);
```

### Using GridView with Pjax [¶](#using-gridview-with-pjax)

The [Pjax](https://www.yiiframework.com/doc/api/22.0/yii-widgets-pjax) widget allows you to update a certain section of a
page instead of reloading the entire page. You can use it to update only the
[GridView](https://www.yiiframework.com/doc/api/22.0/yii-grid-gridview) content when using filters.

```
use yii\widgets\Pjax;
use yii\grid\GridView;

Pjax::begin([
    // PJax options
]);
    Gridview::widget([
        // GridView options
    ]);
Pjax::end();
```

Pjax also works for the links inside the [Pjax](https://www.yiiframework.com/doc/api/22.0/yii-widgets-pjax) widget and
for the links specified by [Pjax::$linkSelector](https://www.yiiframework.com/doc/api/22.0/yii-widgets-pjax#$linkSelector-detail).
But this might be a problem for the links of an [ActionColumn](https://www.yiiframework.com/doc/api/22.0/yii-grid-actioncolumn).
To prevent this, add the HTML attribute `data-pjax="0"` to the links when you edit
the [ActionColumn::$buttons](https://www.yiiframework.com/doc/api/22.0/yii-grid-actioncolumn#$buttons-detail) property.

#### GridView/ListView with Pjax in Gii [¶](#gridviewlistview-with-pjax-in-gii)

Since 2.0.5, the CRUD generator of [Gii](guide_22_0__start-gii.md) has an option called
`$enablePjax` that can be used via either web interface or command line.

```
yii gii/crud --controllerClass="backend\\controllers\PostController" \
  --modelClass="common\\models\\Post" \
  --enablePjax=1
```

Which generates a [Pjax](https://www.yiiframework.com/doc/api/22.0/yii-widgets-pjax) widget wrapping the
[GridView](https://www.yiiframework.com/doc/api/22.0/yii-grid-gridview) or [ListView](https://www.yiiframework.com/doc/api/22.0/yii-widgets-listview) widgets.

## Further reading [¶](#further-reading)

- [Rendering Data in Yii 2 with GridView and ListView](https://www.sitepoint.com/rendering-data-in-yii-2-with-gridview-and-listview/) by Arno Slatius.

[Data Providers](guide_22_0__output-data-providers.md)

[Go to Top](#top)

[Working with Client Scripts](guide_22_0__output-client-scripts.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/output-data-widgets.md) !
