# Redis_Db - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/redis.html

---

#### forge($name = 'default', $config = array())

Create a new named redis instance, optionally with a custom configuration

|  |  |
| --- | --- |
| Static | Yes |
| Parameters | | Param | Default | Description | | --- | --- | --- | | `$name` | *``` 'default' ```* | The name of the new redis instance, as defined the application config db.php file. | | `$config` | *``` array() ```* | custom configuration, which will override the values defined in the db.php file. | |
| Returns | Fuel\Core\Redis Object |
| Example | ``` // create the Redis 'mystore' instance $redis = Redis_Db::forge('mystore'); ``` |
