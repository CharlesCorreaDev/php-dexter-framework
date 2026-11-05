# Mongo_Db Methods - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/mongo/methods.html

---

#### instance($name = 'default')

The **instance** method returns a new Mongo\_Db instance. Use the $name parameter
to specify which configuration and database to use.

By default **$name** is *'default'* which requires you to have a default configuration in you
db.php config file. [Read more about Mongo\_Db configuration.](docs__classes__mongo__introduction.md#config)

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Type | Default | Description | | --- | --- | --- | --- | | `$collection` | *string* | ``` 'default' ``` | The name of the config group to use. | |
| Returns | A new Mongo\_Db instance |
| Throws | Mongo\_DbException, when no config if found for the given instance name. |
| Example | ``` // Get the default group $mongodb = \Mongo_Db::instance();  // Get a custom group $mongodb = \Mongo_Db::instance('my_group'); ``` |
