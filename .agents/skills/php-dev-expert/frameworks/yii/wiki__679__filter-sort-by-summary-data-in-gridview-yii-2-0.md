# Filter & Sort by Summary Data in GridView Yii 2.0 | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/679/filter-sort-by-summary-data-in-gridview-yii-2-0

---

## [Filter & Sort by Summary Data in GridView Yii 2.0](wiki__679__filter-sort-by-summary-data-in-gridview-yii-2-0.md)

5    2

48

Viewed: 79 216 times

Version: 2.0

Category: [Tutorials](wiki__index.md)

- [calculated](wiki__index.md)
- [count](wiki__index.md)
- [DataColumn](wiki__index.md)
- [faq](wiki__index.md)
- [filter](wiki__index.md)
- [grid](wiki__index.md)
- [gridview](wiki__index.md)
- [sort](wiki__index.md)
- [sum](wiki__index.md)
- [summary](wiki__index.md)
- [wiki](wiki__index.md)
- [yii2](wiki__index.md)

Written by: [![Kartik V](/user/avatar/79399?v=1) Kartik V](https://www.yiiframework.com/user/79399)

Updated by: [![Kartik V](/user/avatar/79399?v=1) Kartik V](https://www.yiiframework.com/user/79399)

Created: May 11, 2014

Updated: 12 years ago

1. [Example Structure](#example-structure)
2. [Prerequisites](#prerequisites)
3. [Gridview Scenarios](#gridview-scenarios)
4. [Scenario 1 Steps](#scenario-1-steps)
5. [Potential Improvements](#potential-improvements)

This wiki explains how to add summary data from related models into your Yii Framework 2.0 gridview with filtering and sorting by the summary columns.

>Note: This is a variation to [this wiki](http://www.yiiframework.com/wiki/621/filter-sort-by-calculated-related-fields-in-gridview-yii-2-0/) which filters and sorts by related fields. In this wiki, we will see specifically how to pull in SUMMARY data from related tables.

#### Example Structure [¶](#example-structure)

Let's say you have the following tables for `Customer` and `Order`. A customer can have multiple orders. Your objective is to display a gridview for the `Customer` with an `order amount` summary from Order table. You should be able to also sort and filter/search by order amount.

```
[sql]
/* Customers */
CREATE TABLE `tbl_customer` (
    `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'Unique customer identifier',
    `name` VARCHAR(150) NOT NULL COMMENT 'Customer name',
     PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Order master table';

/* Orders */
CREATE TABLE `tbl_order` (
    `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'Unique order identifier',
    `created_on` DATE NOT NULL COMMENT 'Order creation date',
    `details` VARCHAR(200) COMMENT 'Order Details',
    `amount` DECIMAL(5,2) NOT NULL COMMENT 'Order Amount',
    `customer_id` INT(11) COMMENT 'Related customer identifier',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Order transactions table';

/* Foreign Key */
ALTER TABLE `tbl_order`
ADD CONSTRAINT `tbl_order_FK1` 
FOREIGN KEY (`customer_id`) 
REFERENCES `tbl_customer` (`id`) 
, ADD INDEX `tbl_order_FK1` (`customer_id` ASC);
```

#### Prerequisites [¶](#prerequisites)

Generate your models and CRUD via Gii. You should now have the following model classes generated:

1. **Customer**: The base model for \_tbl*person*
2. **CustomerSearch**: The search and filtering model for *Customer* within gridview.
3. **Order**: The base model for \_tbl*order*.
4. **OrderSearch**: The search and filtering model for *Order* within gridview.

#### Gridview Scenarios [¶](#gridview-scenarios)

Let's consider the following scenarios, that you want to display in the GridView within the *index* view generated for *Customer*.

##### Scenario 1: Display Order Amount Summary for each customer (and allow filter and sort) [¶](#scenario-1-display-order-amount-summary-for-each-customer-and-allow-filter-and-sort)

An example describing how to add a *OrderAmount* column within the *Customer* grid with sorting and filtering. This will be a summary of `amount`
field from `tbl_order` for each `customer_id`.

#### Scenario 1 Steps [¶](#scenario-1-steps)

**STEP 1:** Implement a stat relation to get summary for OrderAmount.

##### Setup base model [¶](#setup-base-model)

```
/**
 * Order amount for customer 
 */
public function getOrderAmount()
{
    return $this->hasMany(Order::className(), ['customer_id' => 'id'])->sum('amount');
}

/* Your model attribute labels */
public function attributeLabels() {
    return [
        /* Your other attribute labels */
        'orderAmount' => Yii::t('app', 'Order Amount')
    ];
}
```

**STEP 2:** Add an attribute *orderAmount* to your model *CustomerSearch* and configure your rules.

##### Setup search model [¶](#setup-search-model)

```
/* your calculated attribute */
public $orderAmount;

/* setup rules */
public function rules() {
   return [
    /* your other rules */
    [['orderAmount'], 'safe']
   ];
}

/**
 * setup search function for filtering and sorting 
 * based on `orderAmount` field
 */
public function search($params) {
    $query = Customer::find();
    $subQuery = Order::find()
        ->select('customer_id, SUM(amount) as order_amount')
        ->groupBy('customer_id');
    $query->leftJoin(['orderSum' => $subQuery], 'orderSum.customer_id = id');

    $dataProvider = new ActiveDataProvider([
        'query' => $query,
    ]);
    
    /**
     * Setup your sorting attributes
     * Note: This is setup before the $this->load($params) 
     * statement below
     */
     $dataProvider->setSort([
        'attributes' => [
            'id',
            'name',
            'orderAmount' => [
                'asc' => ['orderSum.order_amount' => SORT_ASC],
                'desc' => ['orderSum.order_amount' => SORT_DESC],
                'label' => 'Order Name'
            ]
        ]
    ]);        

    if (!($this->load($params) && $this->validate())) {
        return $dataProvider;
    }

    $query->andFilterWhere([
        'id' => $this->id,
    ]);

    $query->andFilterWhere(['like', 'name', $this->name]);
    
    // filter by order amount
    $query->andWhere(['orderSum.order_amount' => $this->orderAmount]);

    return $dataProvider;
}
```

**STEP 3:** Configure your gridview columns in your view *index* file

##### Setup view file [¶](#setup-view-file)

```
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'id',
        'fullName',
        'orderAmount',
        ['class' => 'yii\grid\ActionColumn'],
    ]
]);
```

Voila, yes now, your *orderAmount* column as well in the grid view should be available for sort and filtering.

#### Potential Improvements [¶](#potential-improvements)

1. Even though I created a getter (stat relation), I think there is a scope to improve the `getOrderAmount` getter function in model by directly getting the sum amount.
2. There is a possibility probably to even avoid writing a `getOrderAmount` getter function in model and try to fetch the initial order amount summary based on the eager load with subquery.
3. Some amount of query optimization with the relational data is possible instead of a left join or when working with summary columns.
