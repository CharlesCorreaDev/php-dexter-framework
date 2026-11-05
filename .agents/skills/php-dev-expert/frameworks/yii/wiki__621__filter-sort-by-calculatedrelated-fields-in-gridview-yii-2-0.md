# Filter & Sort by calculated/related fields in GridView Yii 2.0 | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/621/filter-sort-by-calculatedrelated-fields-in-gridview-yii-2-0

---

## [Filter & Sort by calculated/related fields in GridView Yii 2.0](wiki__621__filter-sort-by-calculatedrelated-fields-in-gridview-yii-2-0.md)

14    3

64

Viewed: 296 905 times

Version: 2.0

Category: [Tutorials](wiki__index.md)

- [calculated](wiki__index.md)
- [DataColumn](wiki__index.md)
- [faq](wiki__index.md)
- [filter](wiki__index.md)
- [grid](wiki__index.md)
- [gridview](wiki__index.md)
- [sort](wiki__index.md)
- [wiki](wiki__index.md)
- [yii2](wiki__index.md)

Written by: [![Kartik V](/user/avatar/79399?v=1) Kartik V](https://www.yiiframework.com/user/79399)

Updated by: [![softark](/user/avatar/13986?v=1) softark](https://www.yiiframework.com/user/13986)

Created: Feb 9, 2014

Updated: 7 years ago

1. [Example Structure](#example-structure)
2. [Prerequisites](#prerequisites)
3. [Gridview Scenarios](#gridview-scenarios)
4. [Scenario 1 Steps](#scenario-1-steps)
5. [Scenario 2 Steps](#scenario-2-steps)
6. [Scenario 3 Steps](#scenario-3-steps)

This wiki explains how to add calculated fields into your Yii Framework 2.0 gridview with filtering and sorting.

>Note: If you are looking at filtering and sorting by SUMMARY data from related tables, then refer [this wiki](http://www.yiiframework.com/wiki/679/filter-sort-by-summary-data-in-gridview-yii-2-0/).

#### Example Structure [¶](#example-structure)

Let's say you have the following tables:

**Countries**

```
CREATE TABLE `tbl_country` (
    `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'Unique country identifier',
    `country_name` VARCHAR(150) NOT NULL COMMENT 'Country name',
     PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Country master table';
```

**Persons**

```
CREATE TABLE `tbl_person` (
    `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT 'Unique person identifier',
    `first_name` VARCHAR(60) NOT NULL COMMENT 'First name',
    `last_name` VARCHAR(60) NOT NULL COMMENT 'Last name',
    `country_id` INT(11) COMMENT 'Residing Country',
    `parent_id` INT(11) COMMENT 'Parent person identifier',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Person master table';
```

**Foreign Key**

```
ALTER TABLE `tbl_person`
ADD CONSTRAINT `tbl_person_FK1` 
FOREIGN KEY (`country_id`) 
REFERENCES `tbl_country` (`id`) 
, ADD INDEX `tbl_person_FK1` (`country_id` ASC);
```

#### Prerequisites [¶](#prerequisites)

Generate your models and CRUD via Gii. You should now have the following model classes generated:

1. **Person**: The base model for \_tbl*person*
2. **PersonSearch**: The search and filtering model for *Person* within gridview.
3. **Country**: The base model for \_tbl*country*.
4. **CountrySearch**: The search and filtering model for *Country* within gridview.

#### Gridview Scenarios [¶](#gridview-scenarios)

Let's consider 2 scenarios you want to display in the GridView within the *index* view generated for *Person*.

##### Scenario 1: Calculated field from same table [¶](#scenario-1-calculated-field-from-same-table)

An example describing how to add a *fullName* column within the *Person* grid with sorting and filtering. The field *fullName* will be concatenation of \_first*name* and \_last*name* separated by space.

##### Scenario 2: Calculated field from related table [¶](#scenario-2-calculated-field-from-related-table)

An example describing how to add a *countryName* column within the Person grid with sorting and filtering. The field *countryName* will be generated based on \_country*id* using foreign key relation with the \_tbl*country*.

##### Scenario 3: Self Join to the same table [¶](#scenario-3-self-join-to-the-same-table)

An example describing how to add a *parentName* column within the *Person* grid with sorting and filtering. The field *parentName* will be the fullName based on self join of the \_parent*id* column with *id* in the \_tbl*person*.

#### Scenario 1 Steps [¶](#scenario-1-steps)

**STEP 1:** Add a getter function to your base *Person* model:

##### Setup base model [¶](#setup-base-model)

```
/* Getter for person full name */
public function getFullName() {
    return $this->first_name . ' ' . $this->last_name;
}

/* Your model attribute labels */
public function attributeLabels() {
    return [
        /* Your other attribute labels */
        'fullName' => Yii::t('app', 'Full Name')
    ];
}
```

**STEP 2:** Add an attribute *fullName* to your model *PersonSearch* and configure your rules.

##### Setup search model [¶](#setup-search-model)

```
/* your calculated attribute */
public $fullName;

/* setup rules */
public function rules() {
   return [
    /* your other rules */
    [['fullName'], 'safe']
   ];
}

/**
 * setup search function for filtering and sorting 
 * based on fullName field
 */
public function search($params) {
    $query = Person::find();
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
            'fullName' => [
                'asc' => ['first_name' => SORT_ASC, 'last_name' => SORT_ASC],
                'desc' => ['first_name' => SORT_DESC, 'last_name' => SORT_DESC],
                'label' => 'Full Name',
                'default' => SORT_ASC
            ],
            'country_id'
        ]
    ]);
    
    if (!($this->load($params) && $this->validate())) {
        return $dataProvider;
    }

    $this->addCondition($query, 'id');
    $this->addCondition($query, 'first_name', true);
    $this->addCondition($query, 'last_name', true);
    $this->addCondition($query, 'country_id');

    /* Setup your custom filtering criteria */
    
    // filter by person full name
    $query->andWhere('first_name LIKE "%' . $this->fullName . '%" ' .
        'OR last_name LIKE "%' . $this->fullName . '%"'
    );
    
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
        ['class' => 'yii\grid\ActionColumn'],
    ]
]);
```

Voila, your *fullName* column in the grid view should be available for sort and filtering.

#### Scenario 2 Steps [¶](#scenario-2-steps)

**STEP 1:** Ensure your *Person* model has a relation defined to the *Country* model. You can also implement a getter for CountryName.

##### Setup base model [¶](#setup-base-model)

```
/* ActiveRelation */
public function getCountry()
{
    return $this->hasOne(Country::className(), ['id' => 'country_id']);
}
    
/* Getter for country name */
public function getCountryName() {
    return $this->country->country_name;
}

/* Your model attribute labels */
public function attributeLabels() {
    return [
        /* Your other attribute labels */
        'fullName' => Yii::t('app', 'Full Name'),
        'countryName' => Yii::t('app', 'Country Name')
    ];
}
```

**STEP 2:** Add an attribute *countryName* to your model *PersonSearch* and configure your rules.

##### Setup search model [¶](#setup-search-model)

```
/* your calculated attribute */
public $countryName;

/* setup rules */
public function rules() {
   return [
    /* your other rules */
    [['countryName'], 'safe']
   ];
}

/**
 * setup search function for filtering and sorting 
 * based on `fullName` and `countryName` field
 */
public function search($params) {
    $query = Person::find();
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
            'fullName' => [
                'asc' => ['first_name' => SORT_ASC, 'last_name' => SORT_ASC],
                'desc' => ['first_name' => SORT_DESC, 'last_name' => SORT_DESC],
                'label' => 'Full Name',
                'default' => SORT_ASC
            ],
            'countryName' => [
                'asc' => ['tbl_country.country_name' => SORT_ASC],
                'desc' => ['tbl_country.country_name' => SORT_DESC],
                'label' => 'Country Name'
            ]
        ]
    ]);
    
    if (!($this->load($params) && $this->validate())) {
        /**
         * The following line will allow eager loading with country data 
         * to enable sorting by country on initial loading of the grid.
         */ 
        $query->joinWith(['country']);
        return $dataProvider;
    }

    $this->addCondition($query, 'id');
    $this->addCondition($query, 'first_name', true);
    $this->addCondition($query, 'last_name', true);
    $this->addCondition($query, 'country_id');

    /* Add your filtering criteria */
    
    // filter by person full name
    $query->andWhere('first_name LIKE "%' . $this->fullName . '%" ' .
        'OR last_name LIKE "%' . $this->fullName . '%"'
    );

    // filter by country name
    $query->joinWith(['country' => function ($q) {
        $q->where('tbl_country.country_name LIKE "%' . $this->countryName . '%"');
    }]);
    
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
        'countryName',
        ['class' => 'yii\grid\ActionColumn'],
    ]
]);
```

Voila, yes now, your *countryName* column as well in the grid view should be available for sort and filtering.

#### Scenario 3 Steps [¶](#scenario-3-steps)

**STEP 1:** Ensure your *Person* model has a self join relation defined to itself. You can also implement a getter for ParentName.

##### Setup base model [¶](#setup-base-model)

```
/* ActiveRelation */
public function getParent() {
    return $this->hasOne(self::classname(), 
           ['parent_id' => 'id'])->
           from(self::tableName() . ' AS parent');
}

/* Getter for person full name */
public function getFullName() {
    return $this->first_name . ' ' . $this->last_name;
}
   
/* Getter for parent name */
public function getParentName() {
    return $this->parent->fullName;
}

/* Your model attribute labels */
public function attributeLabels() {
    return [
        /* Your other attribute labels */
        'parentName' => Yii::t('app', 'Parent Name'),
        'fullName' => Yii::t('app', 'Full Name')
    ];
}
```

**STEP 2:** Add an attribute *parentName* to your model *PersonSearch* and configure your rules.

##### Setup search model attributes for search [¶](#setup-search-model-attributes-for-search)

```
/* your calculated attribute */
public $parentName;

/* setup rules */
public function rules() {
   return [
    /* your other rules */
    [['parentName'], 'safe']
   ];
}

/**
 * setup search function for filtering and sorting 
 * based on `parentName` field
 */
public function search($params) {
    $query = Person::find();
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
            'parentName' => [
                'asc' => [
                    'parent.first_name' => SORT_ASC, 
                    'parent.last_name' => SORT_ASC
                 ],
                'desc' => [
                     'parent.first_name' => SORT_DESC, 
                     'parent.last_name' => SORT_DESC
                 ],
                'label' => 'Parent Name',
                'default' => SORT_ASC
            ],
            'fullName' => [
                'asc' => ['first_name' => SORT_ASC, 'last_name' => SORT_ASC],
                'desc' => ['first_name' => SORT_DESC, 'last_name' => SORT_DESC],
                'label' => 'Full Name',
                'default' => SORT_ASC
            ],
            'country_id'
        ]
    ]);
    
    if (!($this->load($params) && $this->validate())) {
        /**
         * The following line will allow eager loading with parent data 
         * to enable sorting by parent on initial loading of the grid.
         */ 
        $query->joinWith(['parent']);
        return $dataProvider;
    }

    $this->addCondition($query, 'id');
    $this->addCondition($query, 'first_name', true);
    $this->addCondition($query, 'last_name', true);
    $this->addCondition($query, 'country_id');
    $this->addCondition($query, 'parent_id');

    /* Add your filtering criteria */

    // filter by parent name
    $query->joinWith(['parent' => function ($q) {
        $q->where('parent.first_name LIKE "%' . $this->parentName . '%" ' .
        'OR parent.last_name LIKE "%' . $this->parentName . '%"');
    }]);
    
    return $dataProvider;
}
```

**STEP 3:** Edit your *addCondition* function in the model *PersonSearch*

##### Setup search model condition [¶](#setup-search-model-condition)

```
protected function addCondition($query, $attribute, $partialMatch = false)
{
    if (($pos = strrpos($attribute, '.')) !== false) {
        $modelAttribute = substr($attribute, $pos + 1);
    } else {
        $modelAttribute = $attribute;
    }

    $value = $this->$modelAttribute;
    if (trim($value) === '') {
        return;
    }
    
    /* 
     * The following line is additionally added for right aliasing
     * of columns so filtering happen correctly in the self join
     */
    $attribute = "tbl_person.$attribute";

    if ($partialMatch) {
        $query->andWhere(['like', $attribute, $value]);
    } else {
        $query->andWhere([$attribute => $value]);
    }
}
```

**STEP 4:** Configure your gridview columns in your view *index* file

##### Setup view file [¶](#setup-view-file)

```
echo GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'id',
        'fullName',
        'parentName',
        ['class' => 'yii\grid\ActionColumn'],
    ]
]);
```

Voila, yes now, your *parentName* column as well in the grid view should be available for sort and filtering.
