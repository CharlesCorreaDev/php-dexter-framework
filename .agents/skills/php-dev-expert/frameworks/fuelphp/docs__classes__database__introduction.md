# Database Introduction - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/database/introduction.html

---

## Database Introduction

### Introduction

Fuel offers a driver based database abstraction layer. At the time of writing supported
drivers are MySQL, MySQLi and PDO. Aside from regular database interaction, fuel also
comes with a DBUtil class to perform database operations such as creating databases,
adding fields and much more.

Please note that not all features are supported by every driver.

### Configuration

In order to begin working with databases, you must change the database settings. The global
settings, that are valid for all your [environments](docs__general__environments.md),
are defined in *APPPATH/config/db.php*. You define environment specific database settings
in the *db.php* located in the appropriate environment configuration folder. The two will
be merged to form the complete database configuration.

Database configurations are formated like so:

```
// a MySQL driver configuration
'development' => array(
	'type'           => 'mysqli',
	'connection'     => array(
		'hostname'       => 'localhost',
		'port'           => '3306',
		'database'       => 'fuel_db',
		'username'       => 'your_username',
		'password'       => 'y0uR_p@ssW0rd',
		'persistent'     => false,
		'compress'       => false,
	),
	'identifier'     => '`',
	'table_prefix'   => '',
	'charset'        => 'utf8',
	'enable_cache'   => true,
	'profiling'      => false,
	'readonly'       => false,
),

// a PDO driver configuration, using PostgreSQL
'production' => array(
	'type'           => 'pdo',
	'connection'     => array(
		'dsn'            => 'pgsql:host=localhost;dbname=fuel_db',
		'username'       => 'your_username',
		'password'       => 'y0uR_p@ssW0rd',
		'persistent'     => false,
		'compress'       => false,
	),
	'identifier'     => '"',
	'table_prefix'   => '',
	'charset'        => 'utf8',
	'enable_cache'   => true,
	'profiling'      => false,
	'readonly'       => array('slave1', 'slave2', 'slave3'),
),

'slave1' => array(
	// configuration of the first production readonly slave db
),

'slave2' => array(
	// configuration of the second production readonly slave db
),

'slave3' => array(
	// configuration of the third production readonly slave db
),
```

Please note that type is required for all connections.

### All Config Settings

| Setting | Type | Description |
| --- | --- | --- |
| `type` | string | What type of connection to use. Can be mysql, mysqli or pdo. |
| `connection` | array | Connection settings array |
| `connection.dsn` | string | Connection DSN for PDO. |
| `connection.username` | string | Connection user. |
| `connection.password` | string | Connection password. |
| `connection.persistent` | boolean | Whether to initiate a persisten connection. |
| `connection.compress` | boolean | Whether to use client compression when using MySQL / MySQLi. |
| `identifier` | string | Delimiter used to quote identifiers. |
| `table_prefix` | string | Table prefix. |
| `charset` | string | Connection charset. |
| `enable_cache` | boolean | Whether to allow caching, will overwrite query cache settings on a connection basis. |
| `profiling` | boolean | Whether to add the connections queries to the profiler. |
| `readonly` | array|false | If you have a database in a master/slave setup, you can use this to define an array of slave connections, which will be used at random for read operations. |

Once you have your configuration in place, it's time to [use it](docs__classes__database__usage.md).
