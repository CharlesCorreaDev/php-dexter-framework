# DBUtil - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/database/dbutil.html

---

#### set\_connection($connection)

The **set\_connection** method sets the default DBUtil connection for all methods.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$connection` | **required** | The database connection. | |
| Returns | Returns the number of affected rows. |
| Throws | \Database\_Exception on failure |
| Example | ``` // Set an alternative database connection for DBUtil DBUtil::set_connection('my_database_group');  // Do other DBUtil calls with that connection. ...  // And set it back to default. DBUtil::set_connection(null); ``` |
