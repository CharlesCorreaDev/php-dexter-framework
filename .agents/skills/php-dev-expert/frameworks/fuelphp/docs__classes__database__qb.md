# Query Builder - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/database/qb.html

---

## Query Building

**Note:**
At the time of writing the query builder classes are reworked so they can handle multiple sql dialects.

The abstraction of writing SQL for database queries is done by the **Query Builder**. The query builder
consists a set of classes, each handling a specific part of the query building process.

Using the query builder is will go unnoticed most of the times as the [DB class](docs__classes__database__db.md) provides shortcuts for
creating new query builder objects. It's advised to use these methods to get the right query builder. this is common
practice and will keep your code readable.

Here are the classes that query builder consists of:

- [Query\_Builder](docs__classes__database__qb_builder.md) (abstract)
- [Query\_Builder\_Where](docs__classes__database__qb_where.md) (abstract)
- [Query\_Builder\_Select](docs__classes__database__qb_select.md)
- [Query\_Builder\_Insert](docs__classes__database__qb_insert.md)
- [Query\_Builder\_Update](docs__classes__database__qb_update.md)
- [Query\_Builder\_Delete](docs__classes__database__qb_delete.md)
- Query\_Builder\_Join
