# Query Builder Select - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/database/qb_select.html

---

#### distinct($value = true)

The **distinct** method sets whether to select distinct values.

|  |  |
| --- | --- |
| Static | No |
| Parameters | | Param | Type | Default | Description | | --- | --- | --- | --- | | `$value` | *bool* | ``` true ``` | set to false if you don't want to select distinct values | |
| Returns | Returns the current instance. |
| Example | ``` // prepare a select statement $query = DB::select('name')->from('users');  // Set it to distinct $query->distinct();  // SELECT DISTINCT `name` FROM `users` ``` |
