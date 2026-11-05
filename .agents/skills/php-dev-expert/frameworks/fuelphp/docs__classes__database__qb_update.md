# Query Builder Update - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/database/qb_update.html

---

#### table($table)

The **table** method sets/changes the table to update.

|  |  |
| --- | --- |
| Static | No |
| Parameters | | Param | Type | Default | Description | | --- | --- | --- | --- | | `$table` | *string* | *required* | the table name | |
| Returns | Returns the current instance. |
| Example | ``` // prepare an update statement $query = DB::update('users');  // Set the table to update $query->table('admins');  // UPDATE `admins` ... ``` |
