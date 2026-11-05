# Working with Databases: Active Record | The Definitive Guide to Yii 2.0 | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/doc/guide/22.0/en/db-active-record

---

0

# Active Record [¶](#active-record)

[Active Record](https://en.wikipedia.org/wiki/Active_record_pattern) provides an object-oriented interface
for accessing and manipulating data stored in databases. An Active Record class is associated with a database table,
an Active Record instance corresponds to a row of that table, and an *attribute* of an Active Record
instance represents the value of a particular column in that row. Instead of writing raw SQL statements,
you would access Active Record attributes and call Active Record methods to access and manipulate the data stored
in database tables.

For example, assume `Customer` is an Active Record class which is associated with the `customer` table
and `name` is a column of the `customer` table. You can write the following code to insert a new
row into the `customer` table:

```
$customer = new Customer();
$customer->name = 'Qiang';
$customer->save();
```

The above code is equivalent to using the following raw SQL statement for MySQL, which is less
intuitive, more error prone, and may even have compatibility problems if you are using a different kind of database:

```
$db->createCommand('INSERT INTO `customer` (`name`) VALUES (:name)', [
    ':name' => 'Qiang',
])->execute();
```

Yii provides the Active Record support for the following relational databases:

- MySQL 4.1 or later: via [yii\db\ActiveRecord](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord)
- PostgreSQL 7.3 or later: via [yii\db\ActiveRecord](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord)
- SQLite 2 and 3: via [yii\db\ActiveRecord](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord)
- Microsoft SQL Server 2008 or later: via [yii\db\ActiveRecord](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord)
- Oracle: via [yii\db\ActiveRecord](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord)
- Sphinx: via yii\sphinx\ActiveRecord, requires the `yii2-sphinx` extension
- ElasticSearch: via yii\elasticsearch\ActiveRecord, requires the `yii2-elasticsearch` extension

Additionally, Yii also supports using Active Record with the following NoSQL databases:

- Redis 2.6.12 or later: via yii\redis\ActiveRecord, requires the `yii2-redis` extension
- MongoDB 1.3.0 or later: via yii\mongodb\ActiveRecord, requires the `yii2-mongodb` extension

In this tutorial, we will mainly describe the usage of Active Record for relational databases.
However, most content described here are also applicable to Active Record for NoSQL databases.

## Declaring Active Record Classes [¶](#declaring-ar-classes)

To get started, declare an Active Record class by extending [yii\db\ActiveRecord](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord).

### Setting a table name [¶](#setting-a-table-name)

By default each Active Record class is associated with its database table.
The [tableName()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#tableName()-detail) method returns the table name by converting the class name via [yii\helpers\Inflector::camel2id()](https://www.yiiframework.com/doc/api/22.0/yii-helpers-baseinflector#camel2id()-detail).
You may override this method if the table is not named after this convention.

Also a default [tablePrefix](https://www.yiiframework.com/doc/api/22.0/yii-db-connection#$tablePrefix-detail) can be applied. For example if
[tablePrefix](https://www.yiiframework.com/doc/api/22.0/yii-db-connection#$tablePrefix-detail) is `tbl_`, `Customer` becomes `tbl_customer` and `OrderItem` becomes `tbl_order_item`.

If a table name is given as `{{%TableName}}`, then the percentage character `%` will be replaced with the table prefix.
For example, `{{%post}}` becomes `{{tbl_post}}`. The brackets around the table name are used for
[quoting in an SQL query](guide_22_0__db-dao.md#quoting-table-and-column-names).

In the following example, we declare an Active Record class named `Customer` for the `customer` database table.

```
namespace app\models;

use yii\db\ActiveRecord;

class Customer extends ActiveRecord
{
    const STATUS_INACTIVE = 0;
    const STATUS_ACTIVE = 1;
    
    /**
     * @return string the name of the table associated with this ActiveRecord class.
     */
    public static function tableName()
    {
        return '{{customer}}';
    }
}
```

### Active records are called "models" [¶](#active-records-are-called-models)

Active Record instances are considered as [models](guide_22_0__structure-models.md). For this reason, we usually put Active Record
classes under the `app\models` namespace (or other namespaces for keeping model classes).

Because [yii\db\ActiveRecord](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord) extends from [yii\base\Model](https://www.yiiframework.com/doc/api/22.0/yii-base-model), it inherits *all* [model](guide_22_0__structure-models.md) features,
such as attributes, validation rules, data serialization, etc.

## Connecting to Databases [¶](#db-connection)

By default, Active Record uses the `db` [application component](guide_22_0__structure-application-components.md)
as the [DB connection](https://www.yiiframework.com/doc/api/22.0/yii-db-connection) to access and manipulate the database data. As explained in
[Database Access Objects](guide_22_0__db-dao.md), you can configure the `db` component in the application configuration like shown
below,

```
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=testdb',
            'username' => 'demo',
            'password' => 'demo',
        ],
    ],
];
```

If you want to use a different database connection other than the `db` component, you should override
the [getDb()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#getDb()-detail) method:

```
class Customer extends ActiveRecord
{
    // ...

    public static function getDb()
    {
        // use the "db2" application component
        return \Yii::$app->db2;  
    }
}
```

## Querying Data [¶](#querying-data)

After declaring an Active Record class, you can use it to query data from the corresponding database table.
The process usually takes the following three steps:

1. Create a new query object by calling the [yii\db\ActiveRecord::find()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#find()-detail) method;
2. Build the query object by calling [query building methods](guide_22_0__db-query-builder.md#building-queries);
3. Call a [query method](guide_22_0__db-query-builder.md#query-methods) to retrieve data in terms of Active Record instances.

As you can see, this is very similar to the procedure with [query builder](guide_22_0__db-query-builder.md). The only difference
is that instead of using the `new` operator to create a query object, you call [yii\db\ActiveRecord::find()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#find()-detail)
to return a new query object which is of class [yii\db\ActiveQuery](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery).

Below are some examples showing how to use Active Query to query data:

```
// return a single customer whose ID is 123
// SELECT * FROM `customer` WHERE `id` = 123
$customer = Customer::find()
    ->where(['id' => 123])
    ->one();

// return all active customers and order them by their IDs
// SELECT * FROM `customer` WHERE `status` = 1 ORDER BY `id`
$customers = Customer::find()
    ->where(['status' => Customer::STATUS_ACTIVE])
    ->orderBy('id')
    ->all();

// return the number of active customers
// SELECT COUNT(*) FROM `customer` WHERE `status` = 1
$count = Customer::find()
    ->where(['status' => Customer::STATUS_ACTIVE])
    ->count();

// return all customers in an array indexed by customer IDs
// SELECT * FROM `customer`
$customers = Customer::find()
    ->indexBy('id')
    ->all();
```

In the above, `$customer` is a `Customer` object while `$customers` is an array of `Customer` objects. They are
all populated with the data retrieved from the `customer` table.

> **Info:** Because [yii\db\ActiveQuery](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery) extends from [yii\db\Query](https://www.yiiframework.com/doc/api/22.0/yii-db-query), you can use *all* query building methods and
> query methods as described in the Section [Query Builder](guide_22_0__db-query-builder.md).

Because it is a common task to query by primary key values or a set of column values, Yii provides two shortcut
methods for this purpose:

- [yii\db\ActiveRecord::findOne()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#findOne()-detail): returns a single Active Record instance populated with the first row of the query result.
- [yii\db\ActiveRecord::findAll()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#findAll()-detail): returns an array of Active Record instances populated with *all* query result.

Both methods can take one of the following parameter formats:

- a scalar value: the value is treated as the desired primary key value to be looked for. Yii will determine
  automatically which column is the primary key column by reading database schema information.
- an array of scalar values: the array is treated as the desired primary key values to be looked for.
- an associative array: the keys are column names and the values are the corresponding desired column values to
  be looked for. Please refer to [Hash Format](guide_22_0__db-query-builder.md#hash-format) for more details.

The following code shows how these methods can be used:

```
// returns a single customer whose ID is 123
// SELECT * FROM `customer` WHERE `id` = 123
$customer = Customer::findOne(123);

// returns customers whose ID is 100, 101, 123 or 124
// SELECT * FROM `customer` WHERE `id` IN (100, 101, 123, 124)
$customers = Customer::findAll([100, 101, 123, 124]);

// returns an active customer whose ID is 123
// SELECT * FROM `customer` WHERE `id` = 123 AND `status` = 1
$customer = Customer::findOne([
    'id' => 123,
    'status' => Customer::STATUS_ACTIVE,
]);

// returns all inactive customers
// SELECT * FROM `customer` WHERE `status` = 0
$customers = Customer::findAll([
    'status' => Customer::STATUS_INACTIVE,
]);
```

> **Warning:** If you need to pass user input to these methods, make sure the input value is scalar or in case of
> array condition, make sure the array structure can not be changed from the outside:
>
> ```
> // yii\web\Controller ensures that $id is scalar
> public function actionView($id)
> {
>     $model = Post::findOne($id);
>     // ...
> }
>
> // explicitly specifying the column to search, passing a scalar or array here will always result in finding a single record
> $model = Post::findOne(['id' => Yii::$app->request->get('id')]);
>
> // do NOT use the following code! it is possible to inject an array condition to filter by arbitrary column values!
> $model = Post::findOne(Yii::$app->request->get('id'));
> ```

> **Note:** Neither [yii\db\ActiveRecord::findOne()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#findOne()-detail) nor [yii\db\ActiveQuery::one()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#one()-detail) will add `LIMIT 1` to
> the generated SQL statement. If your query may return many rows of data, you should call `limit(1)` explicitly
> to improve the performance, e.g., `Customer::find()->limit(1)->one()`.

Besides using query building methods, you can also write raw SQLs to query data and populate the results into
Active Record objects. You can do so by calling the [yii\db\ActiveRecord::findBySql()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#findBySql()-detail) method:

```
// returns all inactive customers
$sql = 'SELECT * FROM customer WHERE status=:status';
$customers = Customer::findBySql($sql, [':status' => Customer::STATUS_INACTIVE])->all();
```

Do not call extra query building methods after calling [findBySql()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#findBySql()-detail) as they
will be ignored.

## Accessing Data [¶](#accessing-data)

As aforementioned, the data brought back from the database are populated into Active Record instances, and
each row of the query result corresponds to a single Active Record instance. You can access the column values
by accessing the attributes of the Active Record instances, for example,

```
// "id" and "email" are the names of columns in the "customer" table
$customer = Customer::findOne(123);
$id = $customer->id;
$email = $customer->email;
```

> **Note:** The Active Record attributes are named after the associated table columns in a case-sensitive manner.
> Yii automatically defines an attribute in Active Record for every column of the associated table.
> You should NOT redeclare any of the attributes.

Because Active Record attributes are named after table columns, you may find you are writing PHP code like
`$customer->first_name`, which uses underscores to separate words in attribute names if your table columns are
named in this way. If you are concerned about code style consistency, you should rename your table columns accordingly
(to use camelCase, for example).

### Data Transformation [¶](#data-transformation)

It often happens that the data being entered and/or displayed are in a format which is different from the one used in
storing the data in a database. For example, in the database you are storing customers' birthdays as UNIX timestamps
(which is not a good design, though), while in most cases you would like to manipulate birthdays as strings in
the format of `'YYYY/MM/DD'`. To achieve this goal, you can define *data transformation* methods in the `Customer`
Active Record class like the following:

```
class Customer extends ActiveRecord
{
    // ...

    public function getBirthdayText()
    {
        return date('Y/m/d', $this->birthday);
    }
    
    public function setBirthdayText($value)
    {
        $this->birthday = strtotime($value);
    }
}
```

Now in your PHP code, instead of accessing `$customer->birthday`, you would access `$customer->birthdayText`, which
will allow you to input and display customer birthdays in the format of `'YYYY/MM/DD'`.

> **Tip:** The above example shows a generic way of transforming data in different formats. If you are working with
> date values, you may use [DateValidator](guide_22_0__tutorial-core-validators.md#date) and yii\jui\DatePicker,
> which is easier to use and more powerful.

### Retrieving Data in Arrays [¶](#data-in-arrays)

While retrieving data in terms of Active Record objects is convenient and flexible, it is not always desirable
when you have to bring back a large amount of data due to the big memory footprint. In this case, you can retrieve
data using PHP arrays by calling [asArray()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#asArray()-detail) before executing a query method:

```
// return all customers
// each customer is returned as an associative array
$customers = Customer::find()
    ->asArray()
    ->all();
```

> **Note:** While this method saves memory and improves performance, it is closer to the lower DB abstraction layer
> and you will lose most of the Active Record features. A very important distinction lies in the data type of
> the column values. When you return data in Active Record instances, column values will be automatically typecast
> according to the actual column types; on the other hand when you return data in arrays, column values will be
> strings (since they are the result of PDO without any processing), regardless their actual column types.

### Retrieving Data in Batches [¶](#data-in-batches)

In [Query Builder](guide_22_0__db-query-builder.md), we have explained that you may use *batch query* to minimize your memory
usage when querying a large amount of data from the database. You may use the same technique in Active Record. For example,

```
// fetch 10 customers at a time
foreach (Customer::find()->batch(10) as $customers) {
    // $customers is an array of 10 or fewer Customer objects
}

// fetch 10 customers at a time and iterate them one by one
foreach (Customer::find()->each(10) as $customer) {
    // $customer is a Customer object
}

// batch query with eager loading
foreach (Customer::find()->with('orders')->each() as $customer) {
    // $customer is a Customer object with the 'orders' relation populated
}
```

## Saving Data [¶](#inserting-updating-data)

Using Active Record, you can easily save data to the database by taking the following steps:

1. Prepare an Active Record instance
2. Assign new values to Active Record attributes
3. Call [yii\db\ActiveRecord::save()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#save()-detail) to save the data into database.

For example,

```
// insert a new row of data
$customer = new Customer();
$customer->name = 'James';
$customer->email = 'james@example.com';
$customer->save();

// update an existing row of data
$customer = Customer::findOne(123);
$customer->email = 'james@newexample.com';
$customer->save();
```

The [save()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#save()-detail) method can either insert or update a row of data, depending on the state
of the Active Record instance. If the instance is newly created via the `new` operator, calling
[save()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#save()-detail) will cause insertion of a new row; If the instance is the result of a query method,
calling [save()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#save()-detail) will update the row associated with the instance.

You can differentiate the two states of an Active Record instance by checking its
[isNewRecord](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#$isNewRecord-detail) property value. This property is also used by
[save()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#save()-detail) internally as follows:

```
public function save($runValidation = true, $attributeNames = null)
{
    if ($this->getIsNewRecord()) {
        return $this->insert($runValidation, $attributeNames);
    } else {
        return $this->update($runValidation, $attributeNames) !== false;
    }
}
```

> **Tip:** You can call [insert()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#insert()-detail) or [update()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#update()-detail)
> directly to insert or update a row.

### Data Validation [¶](#data-validation)

Because [yii\db\ActiveRecord](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord) extends from [yii\base\Model](https://www.yiiframework.com/doc/api/22.0/yii-base-model), it shares the same [data validation](guide_22_0__input-validation.md) feature.
You can declare validation rules by overriding the [rules()](https://www.yiiframework.com/doc/api/22.0/yii-base-model#rules()-detail) method and perform
data validation by calling the [validate()](https://www.yiiframework.com/doc/api/22.0/yii-base-model#validate()-detail) method.

When you call [save()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#save()-detail), by default it will call [validate()](https://www.yiiframework.com/doc/api/22.0/yii-base-model#validate()-detail)
automatically. Only when the validation passes, will it actually save the data; otherwise it will simply return `false`,
and you can check the [errors](https://www.yiiframework.com/doc/api/22.0/yii-base-model#$errors-detail) property to retrieve the validation error messages.

> **Tip:** If you are certain that your data do not need validation (e.g., the data comes from trustable sources),
> you can call `save(false)` to skip the validation.

### Massive Assignment [¶](#massive-assignment)

Like normal [models](guide_22_0__structure-models.md), Active Record instances also enjoy the [massive assignment feature](guide_22_0__structure-models.md#massive-assignment).
Using this feature, you can assign values to multiple attributes of an Active Record instance in a single PHP statement,
like shown below. Do remember that only [safe attributes](guide_22_0__structure-models.md#safe-attributes) can be massively assigned, though.

```
$values = [
    'name' => 'James',
    'email' => 'james@example.com',
];

$customer = new Customer();

$customer->attributes = $values;
$customer->save();
```

### Updating Counters [¶](#updating-counters)

It is a common task to increment or decrement a column in a database table. We call these columns "counter columns".
You can use [updateCounters()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#updateCounters()-detail) to update one or multiple counter columns.
For example,

```
$post = Post::findOne(100);

// UPDATE `post` SET `view_count` = `view_count` + 1 WHERE `id` = 100
$post->updateCounters(['view_count' => 1]);
```

> **Note:** If you use [yii\db\ActiveRecord::save()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#save()-detail) to update a counter column, you may end up with inaccurate result,
> because it is likely the same counter is being saved by multiple requests which read and write the same counter value.

### Dirty Attributes [¶](#dirty-attributes)

When you call [save()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#save()-detail) to save an Active Record instance, only *dirty attributes*
are being saved. An attribute is considered *dirty* if its value has been modified since it was loaded from DB or
saved to DB most recently. Note that data validation will be performed regardless if the Active Record
instance has dirty attributes or not.

Active Record automatically maintains the list of dirty attributes. It does so by maintaining an older version of
the attribute values and comparing them with the latest one. You can call [yii\db\ActiveRecord::getDirtyAttributes()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#getDirtyAttributes()-detail)
to get the attributes that are currently dirty. You can also call [yii\db\ActiveRecord::markAttributeDirty()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#markAttributeDirty()-detail)
to explicitly mark an attribute as dirty.

If you are interested in the attribute values prior to their most recent modification, you may call
[getOldAttributes()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#getOldAttributes()-detail) or [getOldAttribute()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#getOldAttribute()-detail).

> **Note:** The comparison of old and new values will be done using the `===` operator so a value will be considered dirty
> even if it has the same value but a different type. This is often the case when the model receives user input from
> HTML forms where every value is represented as a string.
> To ensure the correct type for e.g. integer values you may apply a [validation filter](guide_22_0__input-validation.md#data-filtering):
> `['attributeName', 'filter', 'filter' => 'intval']`. This works with all the typecasting functions of PHP like
> [intval()](https://www.php.net/manual/en/function.intval.php), [floatval()](https://www.php.net/manual/en/function.floatval.php),
> [boolval](https://www.php.net/manual/en/function.boolval.php), etc...

### Default Attribute Values [¶](#default-attribute-values)

Some of your table columns may have default values defined in the database. Sometimes, you may want to pre-populate your
Web form for an Active Record instance with these default values. To avoid writing the same default values again,
you can call [loadDefaultValues()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#loadDefaultValues()-detail) to populate the DB-defined default values
into the corresponding Active Record attributes:

```
$customer = new Customer();
$customer->loadDefaultValues();
// $customer->xyz will be assigned the default value declared when defining the "xyz" column
```

### Attributes Typecasting [¶](#attributes-typecasting)

Being populated by query results, [yii\db\ActiveRecord](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord) performs automatic typecast for its attribute values, using
information from [database table schema](guide_22_0__db-dao.md#database-schema). This allows data retrieved from table column
declared as integer to be populated in ActiveRecord instance with PHP integer, boolean with boolean and so on.
However, typecasting mechanism has several limitations:

- Float values are not be converted and will be represented as strings, otherwise they may loose precision.
- Conversion of the integer values depends on the integer capacity of the operation system you use. In particular:
  values of column declared as 'unsigned integer' or 'big integer' will be converted to PHP integer only at 64-bit
  operation system, while on 32-bit ones - they will be represented as strings.

Note that attribute typecast is performed only during populating ActiveRecord instance from query result. There is no
automatic conversion for the values loaded from HTTP request or set directly via property access.
The table schema will also be used while preparing SQL statements for the ActiveRecord data saving, ensuring
values are bound to the query with correct type. However, ActiveRecord instance attribute values will not be
converted during saving process.

> **Tip:** you may use [yii\behaviors\AttributeTypecastBehavior](https://www.yiiframework.com/doc/api/22.0/yii-behaviors-attributetypecastbehavior) to facilitate attribute values typecasting
> on ActiveRecord validation or saving.

Since 2.0.14, Yii ActiveRecord supports complex data types, such as JSON or multidimensional arrays.

#### JSON in MySQL and PostgreSQL [¶](#json-in-mysql-and-postgresql)

After data population, the value from JSON column will be automatically decoded from JSON according to standard JSON
decoding rules.

To save attribute value to a JSON column, ActiveRecord will automatically create a [JsonExpression](https://www.yiiframework.com/doc/api/22.0/yii-db-jsonexpression) object
that will be encoded to a JSON string on [QueryBuilder](guide_22_0__db-query-builder.md) level.

#### Arrays in PostgreSQL [¶](#arrays-in-postgresql)

After data population, the value from Array column will be automatically decoded from PgSQL notation to an [ArrayExpression](https://www.yiiframework.com/doc/api/22.0/yii-db-arrayexpression)
object. It implements PHP `ArrayAccess` interface, so you can use it as an array, or call `->getValue()` to get the array itself.

To save attribute value to an array column, ActiveRecord will automatically create an [ArrayExpression](https://www.yiiframework.com/doc/api/22.0/yii-db-arrayexpression) object
that will be encoded by [QueryBuilder](guide_22_0__db-query-builder.md) to an PgSQL string representation of array.

You can also use conditions for JSON columns:

```
$query->andWhere(['=', 'json', new ArrayExpression(['foo' => 'bar'])])
```

To learn more about expressions building system read the [Query Builder – Adding custom Conditions and Expressions](guide_22_0__db-query-builder.md#adding-custom-conditions-and-expressions)
article.

### Updating Multiple Rows [¶](#updating-multiple-rows)

The methods described above all work on individual Active Record instances, causing inserting or updating of individual
table rows. To update multiple rows simultaneously, you should call [updateAll()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#updateAll()-detail), instead,
which is a static method.

```
// UPDATE `customer` SET `status` = 1 WHERE `email` LIKE `%@example.com%`
Customer::updateAll(['status' => Customer::STATUS_ACTIVE], ['like', 'email', '@example.com']);
```

Similarly, you can call [updateAllCounters()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#updateAllCounters()-detail) to update counter columns of
multiple rows at the same time.

```
// UPDATE `customer` SET `age` = `age` + 1
Customer::updateAllCounters(['age' => 1]);
```

## Deleting Data [¶](#deleting-data)

To delete a single row of data, first retrieve the Active Record instance corresponding to that row and then call
the [yii\db\ActiveRecord::delete()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#delete()-detail) method.

```
$customer = Customer::findOne(123);
$customer->delete();
```

You can call [yii\db\ActiveRecord::deleteAll()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#deleteAll()-detail) to delete multiple or all rows of data. For example,

```
Customer::deleteAll(['status' => Customer::STATUS_INACTIVE]);
```

> **Note:** Be very careful when calling [deleteAll()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#deleteAll()-detail) because it may totally
> erase all data from your table if you make a mistake in specifying the condition.

## Active Record Life Cycles [¶](#ar-life-cycles)

It is important to understand the life cycles of Active Record when it is used for different purposes.
During each life cycle, a certain sequence of methods will be invoked, and you can override these methods
to get a chance to customize the life cycle. You can also respond to certain Active Record events triggered
during a life cycle to inject your custom code. These events are especially useful when you are developing
Active Record [behaviors](guide_22_0__concept-behaviors.md) which need to customize Active Record life cycles.

In the following, we will summarize the various Active Record life cycles and the methods/events that are involved
in the life cycles.

### New Instance Life Cycle [¶](#new-instance-life-cycle)

When creating a new Active Record instance via the `new` operator, the following life cycle will happen:

1. Class constructor.
2. [init()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#init()-detail): triggers an [EVENT\_INIT](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#EVENT_INIT-detail) event.

### Querying Data Life Cycle [¶](#querying-data-life-cycle)

When querying data through one of the [querying methods](#querying-data), each newly populated Active Record will
undergo the following life cycle:

1. Class constructor.
2. [init()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#init()-detail): triggers an [EVENT\_INIT](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#EVENT_INIT-detail) event.
3. [afterFind()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#afterFind()-detail): triggers an [EVENT\_AFTER\_FIND](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#EVENT_AFTER_FIND-detail) event.

### Saving Data Life Cycle [¶](#saving-data-life-cycle)

When calling [save()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#save()-detail) to insert or update an Active Record instance, the following
life cycle will happen:

1. [beforeValidate()](https://www.yiiframework.com/doc/api/22.0/yii-base-model#beforeValidate()-detail): triggers
   an [EVENT\_BEFORE\_VALIDATE](https://www.yiiframework.com/doc/api/22.0/yii-base-model#EVENT_BEFORE_VALIDATE-detail) event. If the method returns `false`
   or [yii\base\ModelEvent::$isValid](https://www.yiiframework.com/doc/api/22.0/yii-base-modelevent#$isValid-detail) is `false`, the rest of the steps will be skipped.
2. Performs data validation. If data validation fails, the steps after Step 3 will be skipped.
3. [afterValidate()](https://www.yiiframework.com/doc/api/22.0/yii-base-model#afterValidate()-detail): triggers
   an [EVENT\_AFTER\_VALIDATE](https://www.yiiframework.com/doc/api/22.0/yii-base-model#EVENT_AFTER_VALIDATE-detail) event.
4. [beforeSave()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#beforeSave()-detail): triggers
   an [EVENT\_BEFORE\_INSERT](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#EVENT_BEFORE_INSERT-detail)
   or [EVENT\_BEFORE\_UPDATE](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#EVENT_BEFORE_UPDATE-detail) event. If the method returns `false`
   or [yii\base\ModelEvent::$isValid](https://www.yiiframework.com/doc/api/22.0/yii-base-modelevent#$isValid-detail) is `false`, the rest of the steps will be skipped.
5. Performs the actual data insertion or updating.
6. [afterSave()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#afterSave()-detail): triggers
   an [EVENT\_AFTER\_INSERT](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#EVENT_AFTER_INSERT-detail)
   or [EVENT\_AFTER\_UPDATE](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#EVENT_AFTER_UPDATE-detail) event.

### Deleting Data Life Cycle [¶](#deleting-data-life-cycle)

When calling [delete()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#delete()-detail) to delete an Active Record instance, the following
life cycle will happen:

1. [beforeDelete()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#beforeDelete()-detail): triggers
   an [EVENT\_BEFORE\_DELETE](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#EVENT_BEFORE_DELETE-detail) event. If the method returns `false`
   or [yii\base\ModelEvent::$isValid](https://www.yiiframework.com/doc/api/22.0/yii-base-modelevent#$isValid-detail) is `false`, the rest of the steps will be skipped.
2. Performs the actual data deletion.
3. [afterDelete()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#afterDelete()-detail): triggers
   an [EVENT\_AFTER\_DELETE](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#EVENT_AFTER_DELETE-detail) event.

> **Note:** Calling any of the following methods will NOT initiate any of the above life cycles because they work on the
> database directly and not on a record basis:
>
> - [yii\db\ActiveRecord::updateAll()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#updateAll()-detail)
> - [yii\db\ActiveRecord::deleteAll()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#deleteAll()-detail)
> - [yii\db\ActiveRecord::updateCounters()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#updateCounters()-detail)
> - [yii\db\ActiveRecord::updateAllCounters()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#updateAllCounters()-detail)

> **Note:** DI is not supported by default due to performance concerns. You can add support if needed by overriding
> the [instantiate()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#instantiate()-detail) method to instantiate the class via [Yii::createObject()](https://www.yiiframework.com/doc/api/22.0/yii-baseyii#createObject()-detail):
>
> ```
> public static function instantiate($row)
> {
>     return Yii::createObject(static::class);
> }
> ```

### Refreshing Data Life Cycle [¶](#refreshing-data-life-cycle)

When calling [refresh()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#refresh()-detail) to refresh an Active Record instance, the
[EVENT\_AFTER\_REFRESH](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#EVENT_AFTER_REFRESH-detail) event is triggered if refresh is successful and the method returns `true`.

## Working with Transactions [¶](#transactional-operations)

There are two ways of using [transactions](guide_22_0__db-dao.md#performing-transactions) while working with Active Record.

The first way is to explicitly enclose Active Record method calls in a transactional block, like shown below,

```
$customer = Customer::findOne(123);

Customer::getDb()->transaction(function($db) use ($customer) {
    $customer->id = 200;
    $customer->save();
    // ...other DB operations...
});

// or alternatively

$transaction = Customer::getDb()->beginTransaction();
try {
    $customer->id = 200;
    $customer->save();
    // ...other DB operations...
    $transaction->commit();
} catch(\Exception $e) {
    $transaction->rollBack();
    throw $e;
} catch(\Throwable $e) {
    $transaction->rollBack();
    throw $e;
}
```

> **Note:** in the above code we have two catch-blocks for compatibility
> with PHP 5.x and PHP 7.x. `\Exception` implements the [`\Throwable` interface](https://www.php.net/manual/en/class.throwable.php)
> since PHP 7.0, so you can skip the part with `\Exception` if your app uses only PHP 7.0 and higher.

The second way is to list the DB operations that require transactional support in the [yii\db\ActiveRecord::transactions()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#transactions()-detail)
method. For example,

```
class Customer extends ActiveRecord
{
    public function transactions()
    {
        return [
            'admin' => self::OP_INSERT,
            'api' => self::OP_INSERT | self::OP_UPDATE | self::OP_DELETE,
            // the above is equivalent to the following:
            // 'api' => self::OP_ALL,
        ];
    }
}
```

The [yii\db\ActiveRecord::transactions()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#transactions()-detail) method should return an array whose keys are [scenario](guide_22_0__structure-models.md#scenarios)
names and values are the corresponding operations that should be enclosed within transactions. You should use the following
constants to refer to different DB operations:

- [OP\_INSERT](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#OP_INSERT-detail): insertion operation performed by [insert()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#insert()-detail);
- [OP\_UPDATE](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#OP_UPDATE-detail): update operation performed by [update()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#update()-detail);
- [OP\_DELETE](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#OP_DELETE-detail): deletion operation performed by [delete()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#delete()-detail).

Use the `|` operators to concatenate the above constants to indicate multiple operations. You may also use the shortcut
constant [OP\_ALL](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#OP_ALL-detail) to refer to all three operations above.

Transactions that are created using this method will be started before calling [beforeSave()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#beforeSave()-detail)
and will be committed after [afterSave()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#afterSave()-detail) has run.

## Optimistic Locks [¶](#optimistic-locks)

Optimistic locking is a way to prevent conflicts that may occur when a single row of data is being
updated by multiple users. For example, both user A and user B are editing the same wiki article
at the same time. After user A saves his edits, user B clicks on the "Save" button in an attempt to
save his edits as well. Because user B was actually working on an outdated version of the article,
it would be desirable to have a way to prevent him from saving the article and show him some hint message.

Optimistic locking solves the above problem by using a column to record the version number of each row.
When a row is being saved with an outdated version number, a [yii\db\StaleObjectException](https://www.yiiframework.com/doc/api/22.0/yii-db-staleobjectexception) exception
will be thrown, which prevents the row from being saved. Optimistic locking is only supported when you
update or delete an existing row of data using [yii\db\ActiveRecord::update()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#update()-detail) or [yii\db\ActiveRecord::delete()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#delete()-detail),
respectively.

To use optimistic locking,

1. Create a column in the DB table associated with the Active Record class to store the version number of each row.
   The column should be of big integer type (in MySQL it would be `BIGINT DEFAULT 0`).
2. Override the [yii\db\ActiveRecord::optimisticLock()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#optimisticLock()-detail) method to return the name of this column.
3. Implement [OptimisticLockBehavior](https://www.yiiframework.com/doc/api/22.0/yii-behaviors-optimisticlockbehavior) inside your model class to automatically parse its value from received requests.
   Remove the version attribute from validation rules as [OptimisticLockBehavior](https://www.yiiframework.com/doc/api/22.0/yii-behaviors-optimisticlockbehavior) should handle it.
4. In the Web form that takes user inputs, add a hidden field to store the current version number of the row being updated.
5. In the controller action that updates the row using Active Record, try and catch the [yii\db\StaleObjectException](https://www.yiiframework.com/doc/api/22.0/yii-db-staleobjectexception)
   exception. Implement necessary business logic (e.g. merging the changes, prompting staled data) to resolve the conflict.

For example, assume the version column is named as `version`. You can implement optimistic locking with the code like
the following.

```
// ------ view code -------

use yii\helpers\Html;

// ...other input fields
echo Html::activeHiddenInput($model, 'version');

// ------ controller code -------

use yii\db\StaleObjectException;

public function actionUpdate($id)
{
    $model = $this->findModel($id);

    try {
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    } catch (StaleObjectException $e) {
        // logic to resolve the conflict
    }
}

// ------ model code -------

use yii\behaviors\OptimisticLockBehavior;

public function behaviors()
{
    return [
        OptimisticLockBehavior::class,
    ];
}

public function optimisticLock()
{
    return 'version';
}
```

> **Note:** Because [OptimisticLockBehavior](https://www.yiiframework.com/doc/api/22.0/yii-behaviors-optimisticlockbehavior) will ensure the record is only saved
> if user submits a valid version number by directly parsing [getBodyParam()](https://www.yiiframework.com/doc/api/22.0/yii-web-request#getBodyParam()-detail), it
> may be useful to extend your model class and do step 2 in parent model while attaching the behavior (step 3) to the child
> class so you can have an instance dedicated to internal use while tying the other to controllers responsible of receiving
> end user inputs. Alternatively, you can implement your own logic by configuring its [value](https://www.yiiframework.com/doc/api/22.0/yii-behaviors-optimisticlockbehavior#$value-detail) property.

## Working with Relational Data [¶](#relational-data)

Besides working with individual database tables, Active Record is also capable of bringing together related data,
making them readily accessible through the primary data. For example, the customer data is related with the order
data because one customer may have placed one or multiple orders. With appropriate declaration of this relation,
you'll be able to access a customer's order information using the expression `$customer->orders` which gives
back the customer's order information in terms of an array of `Order` Active Record instances.

### Declaring Relations [¶](#declaring-relations)

To work with relational data using Active Record, you first need to declare relations in Active Record classes.
The task is as simple as declaring a *relation method* for every interested relation, like the following,

```
class Customer extends ActiveRecord
{
    // ...

    public function getOrders()
    {
        return $this->hasMany(Order::class, ['customer_id' => 'id']);
    }
}

class Order extends ActiveRecord
{
    // ...

    public function getCustomer()
    {
        return $this->hasOne(Customer::class, ['id' => 'customer_id']);
    }
}
```

In the above code, we have declared an `orders` relation for the `Customer` class, and a `customer` relation
for the `Order` class.

Each relation method must be named as `getXyz`. We call `xyz` (the first letter is in lower case) the *relation name*.
Note that relation names are *case sensitive*.

While declaring a relation, you should specify the following information:

- the multiplicity of the relation: specified by calling either [hasMany()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#hasMany()-detail)
  or [hasOne()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#hasOne()-detail). In the above example you may easily read in the relation
  declarations that a customer has many orders while an order only has one customer.
- the name of the related Active Record class: specified as the first parameter to
  either [hasMany()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#hasMany()-detail) or [hasOne()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#hasOne()-detail).
  A recommended practice is to call `Xyz::class` to get the class name string so that you can receive
  IDE auto-completion support as well as error detection at compiling stage.
- the link between the two types of data: specifies the column(s) through which the two types of data are related.
  The array values are the columns of the primary data (represented by the Active Record class that you are declaring
  relations), while the array keys are the columns of the related data.

  An easy rule to remember this is, as you see in the example above, you write the column that belongs to the related
  Active Record directly next to it. You see there that `customer_id` is a property of `Order` and `id` is a property
  of `Customer`.

> **Warning:** Relation name `relation` is reserved. When used it will produce `ArgumentCountError`.

### Accessing Relational Data [¶](#accessing-relational-data)

After declaring relations, you can access relational data through relation names. This is just like accessing
an object [property](guide_22_0__concept-properties.md) defined by the relation method. For this reason, we call it *relation property*.
For example,

```
// SELECT * FROM `customer` WHERE `id` = 123
$customer = Customer::findOne(123);

// SELECT * FROM `order` WHERE `customer_id` = 123
// $orders is an array of Order objects
$orders = $customer->orders;
```

> **Info:** When you declare a relation named `xyz` via a getter method `getXyz()`, you will be able to access
> `xyz` like an [object property](guide_22_0__concept-properties.md). Note that the name is case sensitive.

If a relation is declared with [hasMany()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#hasMany()-detail), accessing this relation property
will return an array of the related Active Record instances; if a relation is declared with
[hasOne()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#hasOne()-detail), accessing the relation property will return the related
Active Record instance or `null` if no related data is found.

When you access a relation property for the first time, a SQL statement will be executed, like shown in the
above example. If the same property is accessed again, the previous result will be returned without re-executing
the SQL statement. To force re-executing the SQL statement, you should unset the relation property
first: `unset($customer->orders)`.

> **Note:** While this concept looks similar to the [object property](guide_22_0__concept-properties.md) feature, there is an
> important difference. For normal object properties the property value is of the same type as the defining getter method.
> A relation method however returns an [yii\db\ActiveQuery](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery) instance, while accessing a relation property will either
> return a [yii\db\ActiveRecord](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord) instance or an array of these.
>
> ```
> $customer->orders; // is an array of `Order` objects
> $customer->getOrders(); // returns an ActiveQuery instance
> ```
>
> This is useful for creating customized queries, which is described in the next section.

### Dynamic Relational Query [¶](#dynamic-relational-query)

Because a relation method returns an instance of [yii\db\ActiveQuery](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery), you can further build this query
using query building methods before performing DB query. For example,

```
$customer = Customer::findOne(123);

// SELECT * FROM `order` WHERE `customer_id` = 123 AND `subtotal` > 200 ORDER BY `id`
$orders = $customer->getOrders()
    ->where(['>', 'subtotal', 200])
    ->orderBy('id')
    ->all();
```

Unlike accessing a relation property, each time you perform a dynamic relational query via a relation method,
a SQL statement will be executed, even if the same dynamic relational query was performed before.

Sometimes you may even want to parametrize a relation declaration so that you can more easily perform
dynamic relational query. For example, you may declare a `bigOrders` relation as follows,

```
class Customer extends ActiveRecord
{
    public function getBigOrders($threshold = 100)
    {
        return $this->hasMany(Order::class, ['customer_id' => 'id'])
            ->where('subtotal > :threshold', [':threshold' => $threshold])
            ->orderBy('id');
    }
}
```

Then you will be able to perform the following relational queries:

```
// SELECT * FROM `order` WHERE `customer_id` = 123 AND `subtotal` > 200 ORDER BY `id`
$orders = $customer->getBigOrders(200)->all();

// SELECT * FROM `order` WHERE `customer_id` = 123 AND `subtotal` > 100 ORDER BY `id`
$orders = $customer->bigOrders;
```

### Relations via a Junction Table [¶](#junction-table)

In database modelling, when the multiplicity between two related tables is many-to-many,
a [junction table](https://en.wikipedia.org/wiki/Junction_table) is usually introduced. For example, the `order`
table and the `item` table may be related via a junction table named `order_item`. One order will then correspond
to multiple order items, while one product item will also correspond to multiple order items.

When declaring such relations, you would call either [via()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerelationtrait#via()-detail) or [viaTable()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#viaTable()-detail)
to specify the junction table. The difference between [via()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerelationtrait#via()-detail) and [viaTable()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#viaTable()-detail)
is that the former specifies the junction table in terms of an existing relation name while the latter directly uses
the junction table. For example,

```
class Order extends ActiveRecord
{
    public function getItems()
    {
        return $this->hasMany(Item::class, ['id' => 'item_id'])
            ->viaTable('order_item', ['order_id' => 'id']);
    }
}
```

or alternatively,

```
class Order extends ActiveRecord
{
    public function getOrderItems()
    {
        return $this->hasMany(OrderItem::class, ['order_id' => 'id']);
    }

    public function getItems()
    {
        return $this->hasMany(Item::class, ['id' => 'item_id'])
            ->via('orderItems');
    }
}
```

The usage of relations declared with a junction table is the same as that of normal relations. For example,

```
// SELECT * FROM `order` WHERE `id` = 100
$order = Order::findOne(100);

// SELECT * FROM `order_item` WHERE `order_id` = 100
// SELECT * FROM `item` WHERE `item_id` IN (...)
// returns an array of Item objects
$items = $order->items;
```

### Chaining relation definitions via multiple tables [¶](#multi-table-relations)

Its further possible to define relations via multiple tables by chaining relation definitions using [via()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerelationtrait#via()-detail).
Considering the examples above, we have classes `Customer`, `Order`, and `Item`.
We can add a relation to the `Customer` class that lists all items from all the orders they placed,
and name it `getPurchasedItems()`, the chaining of relations is show in the following code example:

```
class Customer extends ActiveRecord
{
    // ...

    public function getPurchasedItems()
    {
        // customer's items, matching 'id' column of `Item` to 'item_id' in OrderItem
        return $this->hasMany(Item::class, ['id' => 'item_id'])
                    ->via('orderItems');
    }

    public function getOrderItems()
    {
        // customer's order items, matching 'id' column of `Order` to 'order_id' in OrderItem
        return $this->hasMany(OrderItem::class, ['order_id' => 'id'])
                    ->via('orders');
    }

    public function getOrders()
    {
        // same as above
        return $this->hasMany(Order::class, ['customer_id' => 'id']);
    }
}
```

### Lazy Loading and Eager Loading [¶](#lazy-eager-loading)

In [Accessing Relational Data](#accessing-relational-data), we explained that you can access a relation property
of an Active Record instance like accessing a normal object property. A SQL statement will be executed only when
you access the relation property the first time. We call such relational data accessing method *lazy loading*.
For example,

```
// SELECT * FROM `customer` WHERE `id` = 123
$customer = Customer::findOne(123);

// SELECT * FROM `order` WHERE `customer_id` = 123
$orders = $customer->orders;

// no SQL executed
$orders2 = $customer->orders;
```

Lazy loading is very convenient to use. However, it may suffer from a performance issue when you need to access
the same relation property of multiple Active Record instances. Consider the following code example. How many
SQL statements will be executed?

```
// SELECT * FROM `customer` LIMIT 100
$customers = Customer::find()->limit(100)->all();

foreach ($customers as $customer) {
    // SELECT * FROM `order` WHERE `customer_id` = ...
    $orders = $customer->orders;
}
```

As you can see from the code comment above, there are 101 SQL statements being executed! This is because each
time you access the `orders` relation property of a different `Customer` object in the for-loop, a SQL statement
will be executed.

To solve this performance problem, you can use the so-called *eager loading* approach as shown below,

```
// SELECT * FROM `customer` LIMIT 100;
// SELECT * FROM `orders` WHERE `customer_id` IN (...)
$customers = Customer::find()
    ->with('orders')
    ->limit(100)
    ->all();

foreach ($customers as $customer) {
    // no SQL executed
    $orders = $customer->orders;
}
```

By calling [yii\db\ActiveQuery::with()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequerytrait#with()-detail), you instruct Active Record to bring back the orders for the first 100
customers in one single SQL statement. As a result, you reduce the number of the executed SQL statements from 101 to 2!

You can eagerly load one or multiple relations. You can even eagerly load *nested relations*. A nested relation is a relation
that is declared within a related Active Record class. For example, `Customer` is related with `Order` through the `orders`
relation, and `Order` is related with `Item` through the `items` relation. When querying for `Customer`, you can eagerly
load `items` using the nested relation notation `orders.items`.

The following code shows different usage of [with()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequerytrait#with()-detail). We assume the `Customer` class
has two relations `orders` and `country`, while the `Order` class has one relation `items`.

```
// eager loading both "orders" and "country"
$customers = Customer::find()->with('orders', 'country')->all();
// equivalent to the array syntax below
$customers = Customer::find()->with(['orders', 'country'])->all();
// no SQL executed 
$orders= $customers[0]->orders;
// no SQL executed 
$country = $customers[0]->country;

// eager loading "orders" and the nested relation "orders.items"
$customers = Customer::find()->with('orders.items')->all();
// access the items of the first order of the first customer
// no SQL executed
$items = $customers[0]->orders[0]->items;
```

You can eagerly load deeply nested relations, such as `a.b.c.d`. All parent relations will be eagerly loaded.
That is, when you call [with()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequerytrait#with()-detail) using `a.b.c.d`, you will eagerly load
`a`, `a.b`, `a.b.c` and `a.b.c.d`.

> **Info:** In general, when eagerly loading `N` relations among which `M` relations are defined with a
> [junction table](#junction-table), a total number of `N+M+1` SQL statements will be executed.
> Note that a nested relation `a.b.c.d` counts as 4 relations.

When eagerly loading a relation, you can customize the corresponding relational query using an anonymous function.
For example,

```
// find customers and bring back together their country and active orders
// SELECT * FROM `customer`
// SELECT * FROM `country` WHERE `id` IN (...)
// SELECT * FROM `order` WHERE `customer_id` IN (...) AND `status` = 1
$customers = Customer::find()->with([
    'country',
    'orders' => function ($query) {
        $query->andWhere(['status' => Order::STATUS_ACTIVE]);
    },
])->all();
```

When customizing the relational query for a relation, you should specify the relation name as an array key
and use an anonymous function as the corresponding array value. The anonymous function will receive a `$query` parameter
which represents the [yii\db\ActiveQuery](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery) object used to perform the relational query for the relation.
In the code example above, we are modifying the relational query by appending an additional condition about order status.

> **Note:** If you call [select()](https://www.yiiframework.com/doc/api/22.0/yii-db-query#select()-detail) while eagerly loading relations, you have to make sure
> the columns referenced in the relation declarations are being selected. Otherwise, the related models may not
> be loaded properly. For example,
>
> ```
> $orders = Order::find()->select(['id', 'amount'])->with('customer')->all();
> // $orders[0]->customer is always `null`. To fix the problem, you should do the following:
> $orders = Order::find()->select(['id', 'amount', 'customer_id'])->with('customer')->all();
> ```

### Joining with Relations [¶](#joining-with-relations)

> **Note:** The content described in this subsection is only applicable to relational databases, such as
> MySQL, PostgreSQL, etc.

The relational queries that we have described so far only reference the primary table columns when
querying for the primary data. In reality we often need to reference columns in the related tables. For example,
we may want to bring back the customers who have at least one active order. To solve this problem, we can
build a join query like the following:

```
// SELECT `customer`.* FROM `customer`
// LEFT JOIN `order` ON `order`.`customer_id` = `customer`.`id`
// WHERE `order`.`status` = 1
// 
// SELECT * FROM `order` WHERE `customer_id` IN (...)
$customers = Customer::find()
    ->select('customer.*')
    ->leftJoin('order', '`order`.`customer_id` = `customer`.`id`')
    ->where(['order.status' => Order::STATUS_ACTIVE])
    ->with('orders')
    ->all();
```

> **Note:** It is important to disambiguate column names when building relational queries involving JOIN SQL statements.
> A common practice is to prefix column names with their corresponding table names.

However, a better approach is to exploit the existing relation declarations by calling [yii\db\ActiveQuery::joinWith()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#joinWith()-detail):

```
$customers = Customer::find()
    ->joinWith('orders')
    ->where(['order.status' => Order::STATUS_ACTIVE])
    ->all();
```

Both approaches execute the same set of SQL statements. The latter approach is much cleaner and drier, though.

By default, [joinWith()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#joinWith()-detail) will use `LEFT JOIN` to join the primary table with the
related table. You can specify a different join type (e.g. `RIGHT JOIN`) via its third parameter `$joinType`. If
the join type you want is `INNER JOIN`, you can simply call [innerJoinWith()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#innerJoinWith()-detail), instead.

Calling [joinWith()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#joinWith()-detail) will [eagerly load](#lazy-eager-loading) the related data by default.
If you do not want to bring in the related data, you can specify its second parameter `$eagerLoading` as `false`.

> **Note:** Even when using [joinWith()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#joinWith()-detail) or [innerJoinWith()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#innerJoinWith()-detail)
> with eager loading enabled the related data will **not** be populated from the result of the `JOIN` query. So there's
> still an extra query for each joined relation as explained in the section on [eager loading](#lazy-eager-loading).

Like [with()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequerytrait#with()-detail), you can join with one or multiple relations; you may customize the relation
queries on-the-fly; you may join with nested relations; and you may mix the use of [with()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequerytrait#with()-detail)
and [joinWith()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#joinWith()-detail). For example,

```
$customers = Customer::find()->joinWith([
    'orders' => function ($query) {
        $query->andWhere(['>', 'subtotal', 100]);
    },
])->with('country')
    ->all();
```

Sometimes when joining two tables, you may need to specify some extra conditions in the `ON` part of the JOIN query.
This can be done by calling the [yii\db\ActiveQuery::onCondition()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#onCondition()-detail) method like the following:

```
// SELECT `customer`.* FROM `customer`
// LEFT JOIN `order` ON `order`.`customer_id` = `customer`.`id` AND `order`.`status` = 1 
// 
// SELECT * FROM `order` WHERE `customer_id` IN (...)
$customers = Customer::find()->joinWith([
    'orders' => function ($query) {
        $query->onCondition(['order.status' => Order::STATUS_ACTIVE]);
    },
])->all();
```

This above query brings back *all* customers, and for each customer it brings back all active orders.
Note that this differs from our earlier example which only brings back customers who have at least one active order.

> **Info:** When [yii\db\ActiveQuery](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery) is specified with a condition via [onCondition()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#onCondition()-detail),
> the condition will be put in the `ON` part if the query involves a JOIN query. If the query does not involve
> JOIN, the on-condition will be automatically appended to the `WHERE` part of the query.
> Thus it may only contain conditions including columns of the related table.

#### Relation table aliases [¶](#relation-table-aliases)

As noted before, when using JOIN in a query, we need to disambiguate column names. Therefore often an alias is
defined for a table. Setting an alias for the relational query would be possible by customizing the relation query in the following way:

```
$query->joinWith([
    'orders' => function ($q) {
        $q->from(['o' => Order::tableName()]);
    },
])
```

This however looks very complicated and involves either hardcoding the related objects table name or calling `Order::tableName()`.
Since version 2.0.7, Yii provides a shortcut for this. You may now define and use the alias for the relation table like the following:

```
// join the orders relation and sort the result by orders.id
$query->joinWith(['orders o'])->orderBy('o.id');
```

The above syntax works for simple relations. If you need an alias for an intermediate table when joining over
nested relations, e.g. `$query->joinWith(['orders.product'])`,
you need to nest the joinWith calls like in the following example:

```
$query->joinWith(['orders o' => function($q) {
        $q->joinWith('product p');
    }])
    ->where('o.amount > 100');
```

### Inverse Relations [¶](#inverse-relations)

Relation declarations are often reciprocal between two Active Record classes. For example, `Customer` is related
to `Order` via the `orders` relation, and `Order` is related back to `Customer` via the `customer` relation.

```
class Customer extends ActiveRecord
{
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['customer_id' => 'id']);
    }
}

class Order extends ActiveRecord
{
    public function getCustomer()
    {
        return $this->hasOne(Customer::class, ['id' => 'customer_id']);
    }
}
```

Now consider the following piece of code:

```
// SELECT * FROM `customer` WHERE `id` = 123
$customer = Customer::findOne(123);

// SELECT * FROM `order` WHERE `customer_id` = 123
$order = $customer->orders[0];

// SELECT * FROM `customer` WHERE `id` = 123
$customer2 = $order->customer;

// displays "not the same"
echo $customer2 === $customer ? 'same' : 'not the same';
```

We would think `$customer` and `$customer2` are the same, but they are not! Actually they do contain the same
customer data, but they are different objects. When accessing `$order->customer`, an extra SQL statement
is executed to populate a new object `$customer2`.

To avoid the redundant execution of the last SQL statement in the above example, we should tell Yii that
`customer` is an *inverse relation* of `orders` by calling the [inverseOf()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerelationtrait#inverseOf()-detail) method
like shown below:

```
class Customer extends ActiveRecord
{
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['customer_id' => 'id'])->inverseOf('customer');
    }
}
```

With this modified relation declaration, we will have:

```
// SELECT * FROM `customer` WHERE `id` = 123
$customer = Customer::findOne(123);

// SELECT * FROM `order` WHERE `customer_id` = 123
$order = $customer->orders[0];

// No SQL will be executed
$customer2 = $order->customer;

// displays "same"
echo $customer2 === $customer ? 'same' : 'not the same';
```

> **Note:** Inverse relations cannot be defined for relations involving a [junction table](#junction-table).
> That is, if a relation is defined with [via()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerelationtrait#via()-detail) or [viaTable()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#viaTable()-detail),
> you should not call [inverseOf()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerelationtrait#inverseOf()-detail) further.

## Saving Relations [¶](#saving-relations)

When working with relational data, you often need to establish relationships between different data or destroy
existing relationships. This requires setting proper values for the columns that define the relations. Using Active Record,
you may end up writing the code like the following:

```
$customer = Customer::findOne(123);
$order = new Order();
$order->subtotal = 100;
// ...

// setting the attribute that defines the "customer" relation in Order
$order->customer_id = $customer->id;
$order->save();
```

Active Record provides the [link()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#link()-detail) method that allows you to accomplish this task more nicely:

```
$customer = Customer::findOne(123);
$order = new Order();
$order->subtotal = 100;
// ...

$order->link('customer', $customer);
```

The [link()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#link()-detail) method requires you to specify the relation name and the target Active Record
instance that the relationship should be established with. The method will modify the values of the attributes that
link two Active Record instances and save them to the database. In the above example, it will set the `customer_id`
attribute of the `Order` instance to be the value of the `id` attribute of the `Customer` instance and then save it
to the database.

> **Note:** You cannot link two newly created Active Record instances.

The benefit of using [link()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#link()-detail) is even more obvious when a relation is defined via
a [junction table](#junction-table). For example, you may use the following code to link an `Order` instance
with an `Item` instance:

```
$order->link('items', $item);
```

The above code will automatically insert a row in the `order_item` junction table to relate the order with the item.

> **Info:** The [link()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#link()-detail) method will NOT perform any data validation while
> saving the affected Active Record instance. It is your responsibility to validate any input data before
> calling this method.

The opposite operation to [link()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#link()-detail) is [unlink()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#unlink()-detail)
which breaks an existing relationship between two Active Record instances. For example,

```
$customer = Customer::find()->with('orders')->where(['id' => 123])->one();
$customer->unlink('orders', $customer->orders[0]);
```

By default, the [unlink()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#unlink()-detail) method will set the foreign key value(s) that specify
the existing relationship to be `null`. You may, however, choose to delete the table row that contains the foreign key value
by passing the `$delete` parameter as `true` to the method.

When a junction table is involved in a relation, calling [unlink()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#unlink()-detail) will cause
the foreign keys in the junction table to be cleared, or the deletion of the corresponding row in the junction table
if `$delete` is `true`.

## Cross-Database Relations [¶](#cross-database-relations)

Active Record allows you to declare relations between Active Record classes that are powered by different databases.
The databases can be of different types (e.g. MySQL and PostgreSQL, or MS SQL and MongoDB), and they can run on
different servers. You can use the same syntax to perform relational queries. For example,

```
// Customer is associated with the "customer" table in a relational database (e.g. MySQL)
class Customer extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'customer';
    }

    public function getComments()
    {
        // a customer has many comments
        return $this->hasMany(Comment::class, ['customer_id' => 'id']);
    }
}

// Comment is associated with the "comment" collection in a MongoDB database
class Comment extends \yii\mongodb\ActiveRecord
{
    public static function collectionName()
    {
        return 'comment';
    }

    public function getCustomer()
    {
        // a comment has one customer
        return $this->hasOne(Customer::class, ['id' => 'customer_id']);
    }
}

$customers = Customer::find()->with('comments')->all();
```

You can use most of the relational query features that have been described in this section.

> **Note:** Usage of [joinWith()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#joinWith()-detail) is limited to databases that allow cross-database JOIN queries.
> For this reason, you cannot use this method in the above example because MongoDB does not support JOIN.

## Customizing Query Classes [¶](#customizing-query-classes)

By default, all Active Record queries are supported by [yii\db\ActiveQuery](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery). To use a customized query class
in an Active Record class, you should override the [yii\db\ActiveRecord::find()](https://www.yiiframework.com/doc/api/22.0/yii-db-activerecord#find()-detail) method and return an instance
of your customized query class. For example,

```
// file Comment.php
namespace app\models;

use yii\db\ActiveRecord;

class Comment extends ActiveRecord
{
    public static function find()
    {
        return new CommentQuery(get_called_class());
    }
}
```

Now whenever you are performing a query (e.g. `find()`, `findOne()`) or defining a relation (e.g. `hasOne()`)
with `Comment`, you will be calling an instance of `CommentQuery` instead of `ActiveQuery`.

You now have to define the `CommentQuery` class, which can be customized in many creative ways to improve your query building experience. For example,

```
// file CommentQuery.php
namespace app\models;

use yii\db\ActiveQuery;

class CommentQuery extends ActiveQuery
{
    // conditions appended by default (can be skipped)
    public function init()
    {
        $this->andOnCondition(['deleted' => false]);
        parent::init();
    }

    // ... add customized query methods here ...

    public function active($state = true)
    {
        return $this->andOnCondition(['active' => $state]);
    }
}
```

> **Note:** Instead of calling [onCondition()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#onCondition()-detail), you usually should call
> [andOnCondition()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#andOnCondition()-detail) or [orOnCondition()](https://www.yiiframework.com/doc/api/22.0/yii-db-activequery#orOnCondition()-detail)
> to append additional conditions when defining new query building methods so that any existing conditions are not overwritten.

This allows you to write query building code like the following:

```
$comments = Comment::find()->active()->all();
$inactiveComments = Comment::find()->active(false)->all();
```

> **Tip:** In big projects, it is recommended that you use customized query classes to hold most query-related code
> so that the Active Record classes can be kept clean.

You can also use the new query building methods when defining relations about `Comment` or performing relational query:

```
class Customer extends \yii\db\ActiveRecord
{
    public function getActiveComments()
    {
        return $this->hasMany(Comment::class, ['customer_id' => 'id'])->active();
    }
}

$customers = Customer::find()->joinWith('activeComments')->all();

// or alternatively
class Customer extends \yii\db\ActiveRecord
{
    public function getComments()
    {
        return $this->hasMany(Comment::class, ['customer_id' => 'id']);
    }
}

$customers = Customer::find()->joinWith([
    'comments' => function($q) {
        $q->active();
    }
])->all();
```

> **Info:** In Yii 1.1, there is a concept called *scope*. Scope is no longer directly supported in Yii 2.0,
> and you should use customized query classes and query methods to achieve the same goal.

## Selecting extra fields [¶](#selecting-extra-fields)

When Active Record instance is populated from query results, its attributes are filled up by corresponding column
values from received data set.

You are able to fetch additional columns or values from query and store it inside the Active Record.
For example, assume we have a table named `room`, which contains information about rooms available in the hotel.
Each room stores information about its geometrical size using fields `length`, `width`, `height`.
Imagine we need to retrieve list of all available rooms with their volume in descending order.
So you can not calculate volume using PHP, because we need to sort the records by its value, but you also want `volume`
to be displayed in the list.
To achieve the goal, you need to declare an extra field in your `Room` Active Record class, which will store `volume` value:

```
class Room extends \yii\db\ActiveRecord
{
    public $volume;

    // ...
}
```

Then you need to compose a query, which calculates volume of the room and performs the sort:

```
$rooms = Room::find()
    ->select([
        '{{room}}.*', // select all columns
        '([[length]] * [[width]] * [[height]]) AS volume', // calculate a volume
    ])
    ->orderBy('volume DESC') // apply sort
    ->all();

foreach ($rooms as $room) {
    echo $room->volume; // contains value calculated by SQL
}
```

Ability to select extra fields can be exceptionally useful for aggregation queries.
Assume you need to display a list of customers with the count of orders they have made.
First of all, you need to declare a `Customer` class with `orders` relation and extra field for count storage:

```
class Customer extends \yii\db\ActiveRecord
{
    public $ordersCount;

    // ...

    public function getOrders()
    {
        return $this->hasMany(Order::class, ['customer_id' => 'id']);
    }
}
```

Then you can compose a query, which joins the orders and calculates their count:

```
$customers = Customer::find()
    ->select([
        '{{customer}}.*', // select all customer fields
        'COUNT({{order}}.id) AS ordersCount' // calculate orders count
    ])
    ->joinWith('orders') // ensure table junction
    ->groupBy('{{customer}}.id') // group the result to ensure aggregation function works
    ->all();
```

A disadvantage of using this method would be that, if the information isn't loaded on the SQL query - it has to be calculated
separately. Thus, if you have found particular record via regular query without extra select statements, it
will be unable to return actual value for the extra field. Same will happen for the newly saved record.

```
$room = new Room();
$room->length = 100;
$room->width = 50;
$room->height = 2;

$room->volume; // this value will be `null`, since it was not declared yet
```

Using the [\_\_get()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#__get()-detail) and [\_\_set()](https://www.yiiframework.com/doc/api/22.0/yii-db-baseactiverecord#__set()-detail) magic methods
we can emulate the behavior of a property:

```
class Room extends \yii\db\ActiveRecord
{
    private $_volume;
    
    public function setVolume($volume)
    {
        $this->_volume = (float) $volume;
    }
    
    public function getVolume()
    {
        if (empty($this->length) || empty($this->width) || empty($this->height)) {
            return null;
        }
        
        if ($this->_volume === null) {
            $this->setVolume(
                $this->length * $this->width * $this->height
            );
        }
        
        return $this->_volume;
    }

    // ...
}
```

When the select query doesn't provide the volume, the model will be able to calculate it automatically using
the attributes of the model.

You can calculate the aggregation fields as well using defined relations:

```
class Customer extends \yii\db\ActiveRecord
{
    private $_ordersCount;

    public function setOrdersCount($count)
    {
        $this->_ordersCount = (int) $count;
    }

    public function getOrdersCount()
    {
        if ($this->isNewRecord) {
            return null; // this avoid calling a query searching for null primary keys
        }

        if ($this->_ordersCount === null) {
            $this->setOrdersCount($this->getOrders()->count()); // calculate aggregation on demand from relation
        }

        return $this->_ordersCount;
    }

    // ...

    public function getOrders()
    {
        return $this->hasMany(Order::class, ['customer_id' => 'id']);
    }
}
```

With this code, in case 'ordersCount' is present in 'select' statement - `Customer::ordersCount` will be populated
by query results, otherwise it will be calculated on demand using `Customer::orders` relation.

This approach can be as well used for creation of the shortcuts for some relational data, especially for the aggregation.
For example:

```
class Customer extends \yii\db\ActiveRecord
{
    /**
     * Defines read-only virtual property for aggregation data.
     */
    public function getOrdersCount()
    {
        if ($this->isNewRecord) {
            return null; // this avoid calling a query searching for null primary keys
        }
        
        return empty($this->ordersAggregation) ? 0 : $this->ordersAggregation[0]['counted'];
    }

    /**
     * Declares normal 'orders' relation.
     */
    public function getOrders()
    {
        return $this->hasMany(Order::class, ['customer_id' => 'id']);
    }

    /**
     * Declares new relation based on 'orders', which provides aggregation.
     */
    public function getOrdersAggregation()
    {
        return $this->getOrders()
            ->select(['customer_id', 'counted' => 'count(*)'])
            ->groupBy('customer_id')
            ->asArray(true);
    }

    // ...
}

foreach (Customer::find()->with('ordersAggregation')->all() as $customer) {
    echo $customer->ordersCount; // outputs aggregation data from relation without extra query due to eager loading
}

$customer = Customer::findOne($pk);
$customer->ordersCount; // output aggregation data from lazy loaded relation
```

[Query Builder](guide_22_0__db-query-builder.md)

[Go to Top](#top)

[Migrations](guide_22_0__db-migrations.md)

Found a typo, or you think this page needs improvement?  
[Edit it on GitHub](https://github.com/yiisoft/yii2/edit/master/docs/guide/db-active-record.md) !
