# Query Builder - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/database/qb_builder.html

---

#### type()

The **type** method returns the type of query defined by the instance, as defined by the DB class
constants SELECT, INSERT, UPDATE or DELETE.

|  |  |
| --- | --- |
| Static | No |
| Parameters | None. |
| Returns | Integer. The type of query this object defines. |
| Example | ``` // check if this is a DELETE $query = \DB::query('DELETE * FROM table', \DB::DELETE); if ($query->type() == \DB::DELETE) { 	// do something } ``` |

If no type is given when constructing a query, or if the query is generated, this method will return `null`.
In that case, the type will be determined at execution time.
