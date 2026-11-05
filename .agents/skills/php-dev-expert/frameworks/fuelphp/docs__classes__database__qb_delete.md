# Query Builder Delete - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/database/qb_delete.html

---

#### table($table)

The **table** method sets/changes the table to delete from.

|  |  |
| --- | --- |
| Static | No |
| Parameters | | Param | Type | Default | Description | | --- | --- | --- | --- | | `$table` | *string* | *required* | the table name | |
| Returns | Returns the current instance. |
| Example | ``` // prepare a delete statement $query = DB::delete('users');  // Set the table to delete from $query->table('admins');  // DELETE `admins` ... ``` |
