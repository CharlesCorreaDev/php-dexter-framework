# DB - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/database/db.html

---

#### query($sql, $type = null)

The **query** method returns a new Database\_Query object. A Database\_Query object can be used to execute a SQL query, or to bind variables to the query.

The first parameter is a SQL string which can contain placeholders. See [Query binding](docs__classes__database__usage.md#binding).

The result of the execution depends on the second parameter. If no type was passed, Fuel tries to detect the type automatically. For example, Fuel chooses DB::SELECT if the SQL query begins with 'SELECT', and the result of the execution will be fetched rows. Same is true for the SQL query begins with 'INSERT', 'UPDATE' or 'DELETE'. In each case, the result will be the same as when the query was done by [Query Builder](docs__classes__database__qb.md). See [Inserting](docs__classes__database__usage.md#inserting), [Updating](docs__classes__database__usage.md#updating), and [Deleting](docs__classes__database__usage.md#deleting).

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$query` | *required* | SQL query | | `$type` | *null* | SQL query type. Possible types are: DB::SELECT, DB::INSERT, DB::UPDATE and DB::DELETE. | |
| Returns | Returns a Database\_Query object of the requested type. |
| Example | ``` // Will prepare: SELECT * FROM `users` $query = DB::query('SELECT * FROM `users`'); ``` |

Note that it is important to pass the correct type. The database driver
will treat them differently.
If you have a query that must return a resultset, but is not a SELECT, use
DB::SELECT to make sure the result is returned correctly.
