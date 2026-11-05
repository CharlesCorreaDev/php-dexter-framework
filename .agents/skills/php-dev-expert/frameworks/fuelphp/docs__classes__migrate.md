# Migrate - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/migrate.html

---

#### current($name = 'default', $type = 'app')

Migrates to the current schema set in the migration configuration file.

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$name` | ``` 'default' ``` | Name of the package or module. In case of app, 'default' is used. | | `$type` | ``` 'app' ``` | Type of migration. Valid values are 'app', 'module' and 'package'. | |
| Returns | array |
| Example | ``` // run the migrations of the application, up to the current schema. Migrate::current('default', 'app'); ``` |
