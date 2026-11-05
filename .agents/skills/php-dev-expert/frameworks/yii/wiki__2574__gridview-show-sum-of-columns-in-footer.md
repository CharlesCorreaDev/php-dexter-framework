# GridView show sum of columns in footer. | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/2574/gridview-show-sum-of-columns-in-footer

---

## [GridView show sum of columns in footer.](wiki__2574__gridview-show-sum-of-columns-in-footer.md)

2    0

1

Viewed: 137 441 times

Version: 2.0

Category: [Tips](wiki__index.md)

- [DataColumn](wiki__index.md)
- [gridview](wiki__index.md)
- [sum](wiki__index.md)

Written by: [![shiv](/user/avatar/49611?v=3) shiv](https://www.yiiframework.com/user/49611)

Created: Sep 28, 2022

GridView show sum of columns in footer
`` ` ``PHP
use yii\grid\DataColumn;

/\*\*

- Sum of all the values in the column
- @author shiv
  /
  class TSumColumn extends DataColumn {
  public function getDataCellValue($model, $key, $index)
  {

  ```
   $value = parent::getDataCellValue($model, $key, $index);
   if ( is_numeric($value))
   {
       $this->footer += $value;
   }
      
   return $value;
  ```

  }
  }
  `` ` ``

Now you have to enable footer in GridView

```
echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'showFooter' => true,
```

Also change the coulmn class

```
            [
                'class' => TSumColumn::class,
                'attribute' => 'amount'
            ],
```

You would see the total in footer of the grid. you can apply this to multiple columns if need
