# Query Builder Insert - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/database/qb_insert.html

---

#### table($table)

The **table** method sets/changes the table to insert into.

|  |  |
| --- | --- |
| Static | No |
| Parameters | | Param | Type | Default | Description | | --- | --- | --- | --- | | `$table` | *string* | *required* | the table name | |
| Returns | Returns the current instance. |
| Example | ``` // prepare an insert statement $query = DB::insert('users');  // Update the table to insert into $query->table('admins');  // INSERT INTO `admins` ... ``` |
