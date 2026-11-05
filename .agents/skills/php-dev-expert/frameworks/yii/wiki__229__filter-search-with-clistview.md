# Filter / Search with CListView | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/229/filter-search-with-clistview

---

## [Filter / Search with CListView](wiki__229__filter-search-with-clistview.md)

22    0

26

Viewed: 60 500 times

Version: 1.1

Category: [How-tos](wiki__index.md)

- [CGridView](wiki__index.md)
- [CListView](wiki__index.md)
- [filter](wiki__index.md)
- [search](wiki__index.md)

Written by: [![JohnPollard](/image/user/default_user.svg) JohnPollard](https://www.yiiframework.com/user/18026)

Updated by: [![JohnPollard](/image/user/default_user.svg) JohnPollard](https://www.yiiframework.com/user/18026)

Created: Sep 1, 2011

Updated: 13 years ago

This is what I did. Its the EASIEST solution that I know of. I just reused the advanced search done in CGridView.

**In my controller file**

```
public function actionIndex()
{
    $model=new Blogs('search');
    $model->unsetAttributes();  // clear any default values
    if(isset($_GET['Blogs']))
        $model->attributes=$_GET['Blogs'];

    //send model object for search
    $this->render('index',array(
        'dataProvider'=>$model->search(),
        'model'=>$model)
    ); 
}
```

**In my view file** (namely my index file)

```
<?php
$this->breadcrumbs=array(
    'Blogs',
);

$this->menu=array(
    array('label'=>'Create Blogs', 'url'=>array('create')),
    array('label'=>'Search Blogs', 'url'=>array('admin')),
);
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});
$('.search-form form').submit(function(){
    $.fn.yiiListView.update('blogslistview', { 
        //this entire js section is taken from admin.php. w/only this line diff
        data: $(this).serialize()
    });
    return false;
});
");
?>

<h1>Blogs</h1>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php  $this->renderPartial('_search',array(
    'model'=>$model,
)); ?>
</div>

<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>$dataProvider,
    'itemView'=>'_view',
    'id'=>'blogslistview',       // must have id corresponding to js above
    'sortableAttributes'=>array(
        'id',
        'startdate',
        'enddate',
        'user_id',
    ),
)); 
?>
```
