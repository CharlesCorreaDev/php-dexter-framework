# Soft Delete Model - Orm Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/orm/model/soft.html

---

## Introduction

Soft deleting is essentially the ability to hide an entry in the database instead of removing every trace of the entry. This means that data can be retrieved for use at a later date. Another way to think of it is archiving the data.

For example you might have a system that records employee working hours. Every day an employee logs their time so reports can be generated to weed out lazy people. If a person gets fired you no longer want them to be able to access the system but it may still be useful to retain the data on hours worked.

If the employee is soft deleted then, as far as the system is concerned, the employee no longer exists. The soft delete model provides a way to query this archived data so reports can still be generated using this “deleted” data.

Some people advocate avoiding soft (or logical) deletes. This model does not force you to use soft delete but provides a way for a quick implementation in your project if you decide that soft delete is for you.

## Basic use

Using the soft delete model is as easy as extending `Orm\Model_Soft` instead of `Orm\Model`. This marks your model as being a soft delete model and changes the default behaviour of the `delete()` and `find()` methods.

```
class Model_Employee extends \Orm\Model_Soft
{
	...
}
```

The model is then set up like a normal [ORM model](docs__packages__orm__creating_models.md), including any relations or other properties that you wish to use.

## Settings

There are currently two extra settings that can be set for soft delete models.

`deleted_field` is the field that stores the timestamp. In the database this should be either a MySQL or unix timestamp and default to `NULL`. Any entries with a `NULL` timestamp are not deleted. The column name defaults to deleted\_at.

`mysql_timestamp` is if the timestamp generated should be a MySQL timestamp or a unix timestamp. This defaults to `false` (use a unix timestamp).

Example model with default settings:

```
class Model_Employee extends \Orm\Model_Soft
{
    protected static $_soft_delete = array(
        'deleted_field' => 'deleted',
        'mysql_timestamp' => false,
    );
}
```

## Deleting

To trigger the soft delete just call the normal `delete()` function on the object after selecting. This updates the database entry with the current timestamp and mark the entry as deleted. The entry will no longer show up in `find()` queries.

```
$employee = Model_Employee::find(1);
$employee->delete(); //The employee has now been soft deleted.
```

## Permanently Deleting

To delete a record permanently, call the `purge()` function on the object after selecting. This deletes the record permanently from the database.

```
$employee = Model_Employee::find(1);
$employee->purge(); //The employee has now been deleted.
```

## Find

Soft deleted entries are not listed with `find()` requests, they are excluded from the returned results because they have, as far as `Model_Soft` is concerned, been deleted. It is possible to query deleted entries by using `find_deleted()` or `deleted()`. These both work the same as `find()` and expect the same parameters.

## Restoring

Entries that have been soft deleted can be restored at a later date. Say that one of our employees returns, we can just restore the soft deleted entry and have everything working for her again without having to create a new employee.

This is done simply by calling `restore()` or `undelete()` on a deleted entry.

```
$employee = Model_Employee::find_deleted(1);
// OR
$employee = Model_Employee::deleted(1);

$employee->restore(); //The employee is no longer deleted.
$employee->undelete(); //Does the same as above.
```

## Relations

# Delete

The delete function will soft delete related models providing that `cascade_delete` is true. If the related model is not soft delete as well then a `RelationNotSoft` exception is thrown.

# Restore

The restore function will also restore related entries providing the `cascade_delete` is true for the relation.
