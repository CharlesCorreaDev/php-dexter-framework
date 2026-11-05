# Soft Deletes | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/extend/soft-deletes

---

# Soft Deletes

- ### On this Page

  - [Prepare the Database Table](docs_5x__extend__soft-deletes.md#prepare-the-database-table)
  - [Hard-Delete Rows When Their Time Is Up](docs_5x__extend__soft-deletes.md#hard-delete-rows-when-their-time-is-up)
  - [Update the Active Record Class](docs_5x__extend__soft-deletes.md#update-the-active-record-class)
  - [Update the Rest of Your Code](docs_5x__extend__soft-deletes.md#update-the-rest-of-your-code)
  - [Restoring Soft-Deleted Rows](docs_5x__extend__soft-deletes.md#restoring-soft-deleted-rows)

Modules and plugins can add soft delete support to their components by following this guide.

All element types support soft deletes out of the box. See [Element Types](docs_5x__extend__element-types.md#restore-action) for information on how to make them restorable.

## [#](#prepare-the-database-table)Prepare the Database Table

Components that are soft-deletable must have a `dateDeleted` column in their database table. Rows that have a `dateDeleted` value will be considered soft-deleted.

```
// New table migration
$this->createTable('{{%mytablename}}', [
    // other columns...
    'dateDeleted' => $this->dateTime()->null(),
]);

// Existing table migration
$this->addColumn(
    '{{%mytablename}}',
    'dateDeleted',
    $this->dateTime()->null()->after('dateUpdated')
);
```

Tables containing soft-deletable component data should not enforce any unique constraints (besides a primary key). If yours does, you’ll need to remove them.

```
use craft\helpers\MigrationHelper;

// Stop enforcing unique handles at the database level
MigrationHelper::dropIndexIfExists('{{%mytablename}}', ['handle'], true, $this);
$this->createIndex(null, '{{%mytablename}}', ['handle'], false);
```

## [#](#hard-delete-rows-when-their-time-is-up)Hard-Delete Rows When Their Time Is Up

Table rows that have been soft-deleted should only stick around as long as the [softDeleteDuration](docs_5x__reference__config__general.md#softdeleteduration) config setting wants them to, and then be hard-deleted.

Rather than check for stale rows on every request, we can make this a part of Craft’s [garbage collection](docs_5x__system__gc.md) routines.

[craft\services\Gc  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-gc.html) will fire a `run` event each time that it is running. You can tap into that from your module/plugin’s `init()` method.

```
use craft\services\Gc;
use yii\base\Event;

public function init()
{
    parent::init();

    Event::on(
        Gc::class,
        Gc::EVENT_RUN,
        function() {
            Craft::$app->gc->hardDelete('{{%mytablename}}');
        }
    );
}
```

[hardDelete()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-gc.html#method-harddelete) method will delete any rows with a `dateDeleted` value set to a timestamp that’s older than the [softDeleteDuration](docs_5x__reference__config__general.md#softdeleteduration) config setting.

If you need to check multiple tables for stale rows, you can pass an array of table names into [hardDelete()  (opens new window)](https://docs.craftcms.com/api/v5/craft-services-gc.html#method-harddelete) instead.

## [#](#update-the-active-record-class)Update the Active Record Class

If the component has a corresponding [Active Record  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/db-active-record) class, you can add soft delete support to it by importing [craft\db\SoftDeleteTrait  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-softdeletetrait.html):

```
use craft\db\ActiveRecord;
use craft\db\SoftDeleteTrait;

class MyRecord extends ActiveRecord
{
    use SoftDeleteTrait;

    // ...
}
```

That trait will give your class the following features:

- [find()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-softdeletetrait.html#method-find) will only return rows that haven’t been soft-deleted (where the `dateDeleted` column is still `null`).
- A [findWithTrashed()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-softdeletetrait.html#method-findwithtrashed) static method will be added for finding rows regardless of whether they’ve been soft-deleted.
- A [findTrashed()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-softdeletetrait.html#method-findtrashed) static method will be added for finding rows that have been soft-deleted (where the `dateDeleted` column is not `null`).
- A `softDelete()` method will be added that should be called instead of [delete()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-activerecord#delete()-detail), which will update the row’s `dateDeleted` column to a current timestamp, rather than deleting the row.
- A `restore()` method will be added for restoring a soft-deleted row by removing its `dateDeleted` value.

Internally, the trait uses the [ActiveRecord Soft Delete Extension  (opens new window)](https://github.com/yii2tech/ar-softdelete) for Yii 2, which is implemented as a [behavior  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/concept-behaviors).

If your class already defines its own behaviors, you will need to rename the trait’s [behaviors()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-softdeletetrait.html#method-behaviors) method on import, and manually call it from your `behaviors()` method:

```
use craft\db\ActiveRecord;
use craft\db\SoftDeleteTrait;

class MyRecord extends ActiveRecord
{
    use SoftDeleteTrait {
        behaviors as softDeleteBehaviors;
    }

    public function behaviors(): array
    {
        $behaviors = $this->softDeleteBehaviors();
        $behaviors['myBehavior'] = MyBehavior::class;
        return $behaviors;
    }

    // ...
}
```

If your class is overriding [yii\db\ActiveRecord::find()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-activerecord#find()-detail), you will need to add a `dateDeleted` condition to the resulting query yourself:

```
public static function find()
{
    // @var MyActiveQuery $query
    $query = Craft::createObject(MyActiveQuery::class, [static::class]);
    $query->where(['dateDeleted' => null]);
    return $query;
}
```

## [#](#update-the-rest-of-your-code)Update the Rest of Your Code

Check your code for any database queries that involve your component’s table. They will need to be updated as well.

- When selecting data from your table, make sure that you’re ignoring rows with a `dateDeleted` value.

  ```
  $results = (new \craft\db\Query())
      ->select(['...'])
      ->from(['{{%mytablename}}'])
      ->where(['dateDeleted' => null])
      ->all();
  ```
- When deleting rows from your table using your Active Record class, call its new `softDelete()` method rather than [delete()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-activerecord#delete()-detail).

  ```
  $record->softDelete();
  ```
- When deleting rows from your table using a query command, call [craft\db\Command::softDelete()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-command.html#method-softdelete) rather than [delete()  (opens new window)](https://www.yiiframework.com/doc/api/2.0/yii-db-command#delete()-detail).

  ```
  \Craft::$app->db->createCommand()
      ->softDelete('{{%mytablename}}', ['id' => $id])
      ->execute();
  ```

## [#](#restoring-soft-deleted-rows)Restoring Soft-Deleted Rows

There are two ways to restore soft-deleted rows not yet hard-deleted by garbage collection:

1. With your Active Record class, by calling its `restore()` method.

```
$record = MyRecord::findTrashed()
    ->where(['id' => $id])
    ->one();

$record->restore();
```

2. With a query command, by calling [craft\db\Command::restore()  (opens new window)](https://docs.craftcms.com/api/v5/craft-db-command.html#method-restore).

```
\Craft::$app->db->createCommand()
    ->restore('{{%mytablename}}', ['id' => $id])
    ->execute();
```

See [this Stack Exchange post  (opens new window)](https://craftcms.stackexchange.com/questions/38628/how-to-make-custom-element-types-restorable) for supporting custom element restores from the control panel.

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/extend/soft-deletes.md)
