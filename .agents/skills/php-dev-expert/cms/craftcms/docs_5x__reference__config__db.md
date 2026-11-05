# Database Connection Settings | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/config/db

---

# Database Connection Settings

- ### On this Page

  - [attributes](docs_5x__reference__config__db.md#attributes)
  - [charset](docs_5x__reference__config__db.md#charset)
  - [collation](docs_5x__reference__config__db.md#collation)
  - [database](docs_5x__reference__config__db.md#database)
  - [driver](docs_5x__reference__config__db.md#driver)
  - [dsn](docs_5x__reference__config__db.md#dsn)
  - [password](docs_5x__reference__config__db.md#password)
  - [port](docs_5x__reference__config__db.md#port)
  - [schema](docs_5x__reference__config__db.md#schema)
  - [server](docs_5x__reference__config__db.md#server)
  - [setSchemaOnConnect](docs_5x__reference__config__db.md#setschemaonconnect)
  - [tablePrefix](docs_5x__reference__config__db.md#tableprefix)
  - [unixSocket](docs_5x__reference__config__db.md#unixsocket)
  - [url](docs_5x__reference__config__db.md#url)
  - [useUnbufferedConnections](docs_5x__reference__config__db.md#useunbufferedconnections)
  - [user](docs_5x__reference__config__db.md#user)

Craft can connect to MySQL and Postgres databases.

Database connection settings may be set from a `config/db.php` file, but because they’re often entirely environment-specific, Craft supports assigning [directly from environment variables](docs_5x__configure.md#environment-overrides). In [a new Craft 5 project  (opens new window)](https://github.com/craftcms/craft), your `.env` file will need to define these options:

```
# Required variables:
CRAFT_APP_ID=
CRAFT_ENVIRONMENT=dev
CRAFT_SECURITY_KEY=

# Database-specific variables:
CRAFT_DB_DRIVER=mysql
CRAFT_DB_SERVER=127.0.0.1
CRAFT_DB_PORT=3306
CRAFT_DB_DATABASE=
CRAFT_DB_USER=root
CRAFT_DB_PASSWORD=
CRAFT_DB_SCHEMA=public
CRAFT_DB_TABLE_PREFIX=
```

We recommend this approach because it:

1. Keeps sensitive information out of your project’s codebase (`.env` files should never be shared or committed to version control);
2. Makes collaborating with other developers easier, as each developer can define their own settings from scratch, without overwriting someone else’s settings.

Environment overrides are covered in greater detail on the [configuration overview page](docs_5x__configure.md#environment-overrides).

If you need to use your own environment variables in a config file (or connection details are provided via platform-specific keys), create `config/db.php` and return an explicit array of settings:

```
use craft\helpers\App;

return [
    'driver' => App::env('MY_DB_DRIVER'),
    'server' => App::env('MY_DB_SERVER'),
    'port' => App::env('MY_DB_PORT'),
    'database' => App::env('MY_DB_DATABASE'),
    'user' => App::env('MY_DB_USER'),
    'password' => App::env('MY_DB_PASSWORD'),
    'schema' => App::env('MY_DB_SCHEMA'),
    'tablePrefix' => App::env('MY_DB_TABLE_PREFIX'),
    'attributes' => [
        PDO::MYSQL_ATTR_SSL_CA => '/path/to/my.crt.pem'
        // ...
    ],
];
```

Finer-grain control of Craft’s database connection is possible by configuring the underlying [`db` application component](docs_5x__reference__config__app.md#database). This may be necessary if you have specific security requirements, or your app needs to connect to multiple databases.

Note that if you need to supply custom PDO attributes to your primary database connection, you should do so via the `attributes` key in your `config/db.php` file, not from `config/app.php` while overriding the `db` component.

## [#](#supported-settings)Supported Settings

### [#](#attributes)`attributes`

Allowed types
:   [array  (opens new window)](https://php.net/language.types.array)

Default value
:   `[]`

Defined by
:   [DbConfig::$attributes  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#property-attributes)

An array of key-value pairs of PDO attributes to pass into the PDO constructor.

For example, when using the [MySQL PDO driver  (opens new window)](https://php.net/manual/en/ref.pdo-mysql.php), if you wanted to enable a SSL database connection
(assuming [SSL is enabled in MySQL  (opens new window)](https://dev.mysql.com/doc/mysql-secure-deployment-guide/5.7/en/secure-deployment-secure-connections.html) and `'user'` can connect via SSL,
you’d set these:

```
->attributes([
    PDO::MYSQL_ATTR_SSL_KEY => '/path/to/my/client-key.pem',
    PDO::MYSQL_ATTR_SSL_CERT => '/path/to/my/client-cert.pem',
    PDO::MYSQL_ATTR_SSL_CA => '/path/to/my/ca-cert.pem',
])
```

### [#](#charset)`charset`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'utf8'`

Defined by
:   [DbConfig::$charset  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#property-charset)

The character set to use when creating tables.

You can change the character set and collation across all existing database tables using this terminal command:

```
php craft db/convert-charset
```

If you set this to something besides `utf8` or `utf8mb4` for MySQL, you **must** also set the [collation()  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#method-collation)
setting to a compatible collation name.

Static ConfigEnvironment Override

```
->charset('utf8mb3')
->collation('utf8mb3_general_ci')
```

```
CRAFT_DB_CHARSET=utf8mb3
CRAFT_DB_COLLATION=utf8mb3_general_ci
```

### [#](#collation)`collation`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [DbConfig::$collation  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#property-collation)

Since
:   3.6.4

The collation to use when creating tables. (MySQL only.)

If null, the following collation will be used by default:

- **MySQL 8.0+**: `utf8mb4_0900_ai_ci`
- **Older MySQL versions and MariaDB**: `utf8mb4_unicode_ci`

You can change the character set and collation across all existing database tables using this terminal command:

```
php craft db/convert-charset
```

Static ConfigEnvironment Override

```
->charset('utf8mb3')
->collation('utf8mb3_general_ci')
```

```
CRAFT_DB_CHARSET=utf8mb3
CRAFT_DB_COLLATION=utf8mb3_general_ci
```

### [#](#database)`database`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [DbConfig::$database  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#property-database)

The name of the database to select.

Static ConfigEnvironment Override

```
->database('mydatabase')
```

```
CRAFT_DB_DATABASE=mydatabase
```

### [#](#driver)`driver`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [DbConfig::$driver  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#property-driver)

The database driver to use. Either `mysql` for MySQL or `pgsql` for PostgreSQL.

Static ConfigEnvironment Override

```
->driver('mysql')
```

```
CRAFT_DB_DRIVER=mysql
```

### [#](#dsn)`dsn`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [DbConfig::$dsn  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#property-dsn)

The Data Source Name (“DSN”) that tells Craft how to connect to the database.

DSNs should begin with a driver prefix (`mysql:` or `pgsql:`), followed by driver-specific parameters.
For example, `mysql:host=127.0.0.1;port=3306;dbname=acme_corp`.

- MySQL parameters: [https://php.net/manual/en/ref.pdo-mysql.connection.php  (opens new window)](https://php.net/manual/en/ref.pdo-mysql.connection.php)
- PostgreSQL parameters: [https://php.net/manual/en/ref.pdo-pgsql.connection.php  (opens new window)](https://php.net/manual/en/ref.pdo-pgsql.connection.php)

Static ConfigEnvironment Override

```
->dsn('mysql:host=127.0.0.1;port=3306;dbname=acme_corp')
```

```
CRAFT_DB_DSN=mysql:host=127.0.0.1;port=3306;dbname=acme_corp
```

### [#](#password)`password`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `''`

Defined by
:   [DbConfig::$password  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#property-password)

The database password to connect with.

Static ConfigEnvironment Override

```
->password('super-secret')
```

```
CRAFT_DB_PASSWORD=super-secret
```

### [#](#port)`port`

Allowed types
:   [integer  (opens new window)](https://php.net/language.types.integer), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [DbConfig::$port  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#property-port)

The database server port. Defaults to 3306 for MySQL and 5432 for PostgreSQL.

Static ConfigEnvironment Override

```
->port(3306)
```

```
CRAFT_DB_PORT=3306
```

### [#](#schema)`schema`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `'public'`

Defined by
:   [DbConfig::$schema  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#property-schema)

The schema that Postgres is configured to use by default (PostgreSQL only).

To force Craft to use the specified schema regardless of PostgreSQL’s `search_path` setting, you must enable
the [setSchemaOnConnect()  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#method-setschemaonconnect) setting.

Static ConfigEnvironment Override

```
->schema('myschema,public')
```

```
CRAFT_DB_SCHEMA=myschema,public
```

### [#](#server)`server`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [DbConfig::$server  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#property-server)

The database server name or IP address. Usually `localhost` or `127.0.0.1`.

Static ConfigEnvironment Override

```
->server('localhost')
```

```
CRAFT_DB_SERVER=localhost
```

### [#](#setschemaonconnect)`setSchemaOnConnect`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [DbConfig::$setSchemaOnConnect  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#property-setschemaonconnect)

Since
:   3.7.27

Whether the [schema()  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#method-schema) should be explicitly used for database queries (PostgreSQL only).

This will cause an extra `SET search_path` SQL query to be executed per database connection. Ideally,
PostgreSQL’s `search_path` setting should be configured to prioritize the desired schema.

Static ConfigEnvironment Override

```
->setSchemaOnConnect(true)
```

```
CRAFT_DB_SET_SCHEMA_ON_CONNECT=true
```

### [#](#tableprefix)`tablePrefix`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [DbConfig::$tablePrefix  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#property-tableprefix)

If you’re sharing Craft installs in a single database (MySQL) or a single database and using a shared schema (PostgreSQL),
you can set a table prefix here to avoid per-install table naming conflicts. This can be no more than 5 characters, and must be all lowercase.

Static ConfigEnvironment Override

```
->tablePrefix('craft_')
```

```
CRAFT_DB_TABLE_PREFIX=craft_
```

### [#](#unixsocket)`unixSocket`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [DbConfig::$unixSocket  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#property-unixsocket)

MySQL only. If this is set, the CLI connection string (used for yiic) will connect to the Unix socket instead of
the server and port. If this is specified, then `server` and `port` settings are ignored.

Static ConfigEnvironment Override

```
->unixSocket('/Applications/MAMP/tmp/mysql/mysql.sock')
```

```
CRAFT_DB_UNIX_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock
```

### [#](#url)`url`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string), [null  (opens new window)](https://php.net/language.types.null)

Default value
:   `null`

Defined by
:   [DbConfig::$url  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#property-url)

The database connection URL, if one was provided by your hosting environment.

If this is set, the values for [driver()  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#method-driver), [user()  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#method-user), [database()  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#method-database), [server()  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#method-server), [port()  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#method-port), and [database()  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#method-database) will be extracted from it.

Static ConfigEnvironment Override

```
->url('jdbc:mysql://database.foo:3306/mydb')
```

```
CRAFT_DB_URL=jdbc:mysql://database.foo:3306/mydb
```

### [#](#useunbufferedconnections)`useUnbufferedConnections`

Allowed types
:   [boolean  (opens new window)](https://php.net/language.types.boolean)

Default value
:   `false`

Defined by
:   [DbConfig::$useUnbufferedConnections  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#property-useunbufferedconnections)

Since
:   3.7.0

Whether batched queries should be executed on a separate, unbuffered database connection.

This setting only applies to MySQL. It can be enabled when working with high volume content, to prevent
PHP from running out of memory when querying too much data at once. (See
[https://www.yiiframework.com/doc/guide/2.0/en/db-query-builder#batch-query-mysql  (opens new window)](https://www.yiiframework.com/doc/guide/2.0/en/db-query-builder#batch-query-mysql) for an explanation
of MySQL’s batch query limitations.)

For more on Craft batch queries, see [https://craftcms.com/knowledge-base/query-batching-batch-each  (opens new window)](https://craftcms.com/knowledge-base/query-batching-batch-each).

Static ConfigEnvironment Override

```
->useUnbufferedConnections(true)
```

```
CRAFT_DB_USE_UNBUFFERED_CONNECTIONS=true
```

### [#](#user)`user`

Allowed types
:   [string  (opens new window)](https://php.net/language.types.string)

Default value
:   `'root'`

Defined by
:   [DbConfig::$user  (opens new window)](https://docs.craftcms.com/api/v5/craft-config-dbconfig.html#property-user)

The database username to connect with.

Static ConfigEnvironment Override

```
->user('db')
```

```
CRAFT_DB_USER=db
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)

Parts of this page are generated or assembled by automations. While we greatly appreciate contributions to the documentation, [reporting automated content issues](https://github.com/craftcms/docs/issues/new/choose) will allow us to fix them at the source!
