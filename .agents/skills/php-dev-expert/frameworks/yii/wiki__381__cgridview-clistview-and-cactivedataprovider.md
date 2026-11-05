# CGridView, CListView and CActiveDataProvider | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/381/cgridview-clistview-and-cactivedataprovider

---

## [CGridView, CListView and CActiveDataProvider](wiki__381__cgridview-clistview-and-cactivedataprovider.md)

26    0

33

Viewed: 152 609 times

Version: 1.1

Category: [Tutorials](wiki__index.md)

- [AJAX](wiki__index.md)
- [CActiveDataProvider](wiki__index.md)
- [CGridView](wiki__index.md)
- [CListView](wiki__index.md)
- [filter](wiki__index.md)
- [Pagination](wiki__index.md)
- [search](wiki__index.md)
- [sort](wiki__index.md)

Written by: [![softark](/user/avatar/13986?v=1) softark](https://www.yiiframework.com/user/13986)

Updated by: [![softark](/user/avatar/13986?v=1) softark](https://www.yiiframework.com/user/13986)

Created: Sep 1, 2012

Updated: 13 years ago

1. [Introduction](#introduction)
2. [CActiveDataProvider](#cactivedataprovider)
3. ["admin" page line by line](#admin-page-line-by-line)
4. [Advanced Topics](#advanced-topics)
5. [More to Read](#more-to-read)

CGridView (or CListView) together with CActiveDataProvider is a very powerful combination of the built-in tools of Yii. But how do they work together to accomplish their fantastic functions? And what are you expected to do to use them and to customize their behaviors? This article explains the very basics of them.

#### Introduction [¶](#introduction)

Using CGridView (or CListView) with CActiveDataProvider, you can very easily implement a complex page that can show a number of items with the abilities of:

- filtering (searching)
- sorting
- and paginating

It would be a great loss of your time if you would try to go without these wonderful tools.

You can see the working examples of them in gii-generated CRUD pages.

- "index" page uses CListView with CActiveDataProvider.
- "admin" page uses CGridView with CActiveDataProvider.
- "admin" page uses the `search` method of the model to get the CActiveDataProvider.

This article tries to explain how they work together to achieve their functions like filtering, sorting and paginating, and what you are expected to do to customize their behaviors.

I assume that the reader is relatively new to Yii. But the more advanced readers may find this article interesting.

#### CActiveDataProvider [¶](#cactivedataprovider)

CActiveDataProvider is a kind of query executor that CGridView or CListView uses to get a list of items.
It returns an array of AR objects retrieved from the database according to the specified criteria.

Creating CActiveDataProvider is like using CActiveRecord::findAll() in many ways, because in both of them you will usually use CDbCriteria to specify the conditions.
But there are some important differences between them.

- CActiveRecord::findAll()
  - It is **you (the programmer)** that executes the query by calling this method.
  - You may specify `order` of the criteria directly.
  - You may specify `offset` and `limit` of the criteria directly.
- CActiveDataProvider
  - It is **CGridView or CListView** that executes the query.
    - Usually when you use it for a CGridView or a CListView, you are not supposed to call `CActiveDataProvider::getData()` method directly to get the result.
  - You are not allowed to specify `order` in the criteria directly.
    - `order` should be set by CGridView or CListView using the `sort` property of the CActiveDataProvider.
    - You can optionally customize the `sort` property.
  - You are not allowed to specify `offset` and `limit` in the criteria directly.
    - `offset` and `limit` should be set by CGridView or CListView using the `pagination` property of the CActiveDataProvider.
    - You can optionally customize the `pagination` property.

##### The "search" method in the model [¶](#the-search-method-in-the-model)

Gii should have created a method called `search` in your model code.
It is a vital part of the code that you need when you want to use CGridView or CListView in your application.
It returns an instance of CActiveDataProvider which is to be used by CGridView or CListView.

There are two common misunderstanding regarding this method:

- It returns an instance of CActiveDataProvider.
  - It doesn't return such an array of AR objects as Model::findAll() does.
- `$this` refers to a model instance that holds the search parameters.
  - It is not a model instance that has been retrieved from the database.

```
public function search()
{
	$criteria=new CDbCriteria;
	...
	$criteria->compare('name', $this->name, true);
	$criteria->compare('address', $this->address, true);
	...
	return new CActiveDataProvider(get_class($this), array(
		'criteria' => $criteria,
	));
}
```

In the above, if `$this->name` is not empty, then a corresponding `LIKE` condition will be added to the `WHERE` clause. If it is empty, then no condition will be added. It is also the same with `$this->address`. And multiple conditions are merged using `AND` by default.

For example, when you call `search` with a model with all attributes set to empty, then it will return the data provider that searches for all the model instances without any conditions. And if you call it with a model whose `name` attribute set to 'John', then it will return the data provider that searches for all the model instances that has a name like 'John'.
(See [CDbCriteria::compare()] for details.)

You may note that you can take this method as a skeleton or a template.
You can freely customize it to satisfy your needs. Or you can also write the customized versions of it if you want.

#### "admin" page line by line [¶](#admin-page-line-by-line)

In order to understand how an instance of CActiveDataProvider is created and how it is used with CGridView, let's examine the gii-generated code of "admin" page line by line.

##### actionAdmin controller method [¶](#actionadmin-controller-method)

```
public function actionAdmin()
{
	$model = new MyModel('search');
	$model->unsetAttributes();  // clear any default values
	if (isset($_GET['MyModel'])) {
		$model->attributes = $_GET['MyModel'];
	}
	$this->render('admin', array(
		'model' => $model,
	));
}
```

The code of `actionAdmin` is simple and straightforward.

In the first 2 lines, we are creating a model instance of 'MyModel' as a container of search parameters.
We call `unsetAttributes` to ensure the initial search parameters are all empty.

And then we are checking the user input of `$_GET['MyModel']`.
If the action has been called with `$_GET['MyModel']`, then we will do the massive assignment of the attributes from the user input.
But when the page has been loaded for the first time, we will skip it because `$_GET['MyModel']` should not be set yet.

And at last we will render the "admin" view passing `$model` to the view script.
Remember that `$model` is a container of the search parameters.

##### admin.php view scripts [¶](#adminphp-view-scripts)

```
...
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model' => $model,
)); ?>
</div><!-- search-form -->
...
<?php
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'my-model-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'columns' => array(
		'name',
		'address',
		...
	),
));
?>
```

##### \_search.php partial view script [¶](#searchphp-partial-view-script)

```
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	'method' => 'get',
)); ?>
<div class="row">
<?php echo $form->label($model, 'name'); ?>
<?php echo $form->textField($model, 'name'); ?>
</div>
<div class="row">
<?php echo $form->label($model, 'address'); ?>
<?php echo $form->textField($model, 'address'); ?>
</div>
...
<div class="row buttons">
<?php echo CHtml::submitButton('Search'); ?>
</div>
<?php $this->endWidget(); ?>
</div><!-- form -->
```

The view scripts may be much longer, but I simplified them by showing only the relevant parts.

##### $model in the view scripts [¶](#model-in-the-view-scripts)

In those view scripts, we use `$model` in 3 places.

1. As the "advanced" search form, we create a CActiveForm using `$model`.
   - The search form is implemented using `_search` partial view.
   - The form will be submitted using `get` method.
   - It is initially hidden from the end user.
2. We provide the grid with an instance of CActiveDataProvider by calling `$model->search()`.
   - The data provider will tell the grid the total count of items when the grid will display the summary text.
   - Also the data provider will provide the grid with an array of AR objects when the grid will show the items one by one.
   - The content of the grid should vary according to the criteria of the data provider that we have made in the `search` method.
   - Initially the grid should display the items without any filterring, because `$model` should have the attributes all set to empty.
3. We also set the `filter` property of the grid to `$model`.
   - This is for the inline search filter that is located between the header and the body of the grid table by default.
   - The inline filter will work almost the same as the "advanced" search form.

Now the rendering has been completed and the page will be sent to the user's browser.

##### Searching by the user [¶](#searching-by-the-user)

When the user has input some word and hit the return key, either in the "advanced" search form or in the inline filter, the page will sumbit the search parameters using `get` method.

Then, in the next cycle of the HTTP request, the `actionAdmin` controller method will get those search parameters in `$_GET['MyModel']`, and construct a CActiveDataProvider instance with the specified parameters to refresh the grid.

#### Advanced Topics [¶](#advanced-topics)

So far, it's the very basics of CGridView and CActiveDataProvider.

Although the "index" page and CListView have not been discussed, you may easily understand how to use CListView, because both CGridView and CListView have been extended from the same base class of CBaseListView and behave almost the same in many ways.

Now, let's see some advanced topics.

##### Disabling Ajax Updating [¶](#disabling-ajax-updating)

Before we are going any further, we would like to temporarily disable the ajax updating of the CGridView which is enabled by default.
You can do it by setting the `ajaxUpdate` property to `false` like the following.

```
<?php
$this->widget('zii.widgets.grid.CGridView', array(
	'id' => 'my-model-grid',
	'dataProvider' => $model->search(),
	'filter' => $model,
	'ajaxUpdate' => false,  // This is it.
	'columns' => array(
		'name',
		'address',
		...
	),
));
?>
```

By this configuration, CGridView will begin to do all the jobs of refreshing its content in non-ajax mode.
You will be able to see the parameters clearly in the query string part of the url that the grid calls for updating itself.
This will greatly help you understand how the searching, sorting and paginating are performed using `$_GET` parameters.
In other words, you will see the naked CGridView.

And disabling the ajax updating is also a very useful trick when you want to debug a page with a CGridView.

##### Sorting [¶](#sorting)

Usually the sorting of CGridView and CListView is requested with a query string like `MyModel_sort=attributeName` or `MyModel_sort=attributeName.desc`.

We have no code at all to handle this request either in our controller or in our model. We don't check `$_GET['MyModel_sort']` and we don't change the criteria of CActiveDataProvider to accomplish the sorting.

In fact, the checking and the handling of the sorting is done inside the CGridView or CListView code, using the `sort` property (an instance of CSort) of the CActiveDataProvider.

It's important that we can not (and should not) include `order` property in our criteria. It's reserved for the CSort of the CActiveDataProvider.

Instead, we can specify some properties of CSort to configure its bahaviors.

```
public function search()
{
	$criteria=new CDbCriteria;
	...
	$criteria->compare('name', $this->name, true);
	$criteria->compare('address', $this->address, true);
	...
	return new CActiveDataProvider(get_class($this), array(
		'criteria' => $criteria,
		'sort' => array(
			'defaultOrder' => 'name, address',
			'attributes' => array(
				'name' => array(
					'asc' => 'name address',
					'desc' => 'name desc, address',
				),
				'address' => array(
					'asc' => 'address, name',
					'desc' => 'address desc, name',
				),
				'*',
			),
		),
	));
}
```

In the above, we specify `defaultOrder` and `attributes` properties of `sort` when we instantiate the CActiveDataProvider.

Look up the reference for details: [CSort]

##### Pagination [¶](#pagination)

Usually the pagination of CGridView and CListView is requested with a query string like `MyModel_page=N` where `N` refers to the page number.

Just like the sorting mentioned above, we don't have much to do with it. We should let CGridView or CListView handle this request using the `pagination` property (an instance of CPagination) of the CActiveDataProvider. We can not (and should not) set `offset` and `limit` properties in our criteria. They are reserved for the CPagination of the CActiveDataProvider.

Instead, we can specify some properties of CPagination to configure its bahaviors.

```
public function search()
{
	$criteria=new CDbCriteria;
	...
	$criteria->compare('name', $this->name, true);
	$criteria->compare('address', $this->address, true);
	...
	return new CActiveDataProvider(get_class($this), array(
		'criteria' => $criteria,
		'pagination' => array(
			'pageSize' => 25,
		),
	));
}
```

In the above, we specify `pageSize` property of `pagination` when we instantiate the CActiveDataProvider.

Look up the reference for details: [CPagination]

##### Ajax Updating [¶](#ajax-updating)

By default, CGridView and CListView are ajax-enabled. Let's go back to the default by removing the setting of `ajaxUpdate` (or you may set it to `null`, because `null` is the default value).

The refreshing of the page caused by filtering (searching), sorting or paginating is done via an ajax call so that the end user will enjoy a smooth browsing through the listed items.

But we don't have any dedicated code either in our controller or in our model to handle this ajax request. How is it possible, then?

The answer is in the CGridView's built-in javascript 'jquery.yiigridview.js' which has a function called '$.fn.yiiGridView.update'.
(For CListView, they are 'jquery.listview.js' and '$.fn.yiiListView.update' respectively.)
It does all the tricks.

I can not explain it in details here, but the normal workflow of ajax call would be something like the following:

1. The javascript catches the events that will trigger the refreshing of the page.
   - The submission of the search form.
   - The clicks on the pager buttons.
   - The clicks on the sorters (e.g. sortable header cells).
   - The changes in the inline filters.
2. The javascript fires an ajax request.
   - Usually the current URL is used for ajax request.
   - All the necessary parameters are passed to the server using `get` method.
   - It will wait for a response in `html` format.
3. The controller responds to the ajax request and acts in the same way as the normal request.
   - It renders the whole html of the page as usual.
   - (Actually, the controller doesn't have to render the whole page for the ajax request. You can optimize the controller code if you are performance conscious. See [Comment #9696](#c9696).)
4. The javascript receives the response and updates only the widget.
   - It receives all the html code that the controller has created, but it will use only the part that renders the widget (grid or list). The rest of the html code is ignored.
   - It uses the `id` of the widget to distinguish the relevant part.

Usually you don't have to mind the details of ajax updating of CGridView and CListView. It will work like a charm without your interventions.

But baring in mind the basic workflow of the ajax updating, you will be able to cope with the possible problems when things get more complicated.

#### More to Read [¶](#more-to-read)

CGridView, CListView and CActiveDataProvider have far much more to be discussed.

In fact, in order to use CGridView or CListView effectively, you will need a very wide range of knowledge because they have many relevant classes to cooperate.

But never be afraid. We have the **Class Reference** and it's an excellent resource to be referred to. The following is a list of links to the pages in the reference which we should read for the relevant topics regarding CGridView, CListView and CActiveDataProvider.

- [IDataProvider]
  - [CDataProvider]
    - [CActiveDataProvider]
    - [CSqlDataProvider] : An alternative data provider you can use for CGridView and CListView.
    - [CArrayDataProvider] : An alternative data provider you can use for CGridView and CListView.
- [CDbCriteria]
- [CSort]
- [CPagination]
- [CWidget]
  - [CBaseListView]
    - [CGridView]
    - [CListView]
  - [CBasePager]
    - [CLinkPager] : A pager widget, usually used.
    - [CListPager] : An alternative pager widget.
- [CGridColumn]
  - [CDataColumn] : A generic column, most widely used.
  - [CButtonColumn] : A button column.
  - [CCheckBoxColumn] : A checkbox column.
  - [CLinkColumn] : A link column.

**Tip: Look up the reference, before you google around in vain.**
