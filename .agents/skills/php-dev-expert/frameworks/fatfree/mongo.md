# Mongo | Fat-Free Framework for PHP

> **Fonte / Source:** https://fatfreeframework.com/3.9/mongo

---

[edit](https://fatfreeframework.com/3.9/edit/mongo/main)

# Mongo

The Mongo class is a lightweight MongoDB wrapper. For full class details refer [class.mongodb.php @ php.net](http://php.net/manual/en/class.mongodb.php).

Namespace: `\DB`   
File location: `lib/db/mongo.php`

---

## Constructor

```
$db = new \DB\Mongo ( string $dsn, string $dbname [, array $options = NULL] );
```

`$dsn` defines a datasource name to the server.

`$dbname` defines the database name.

With the `$options` parameter, you can define an array of options for the connection. Currently available options can be found in the [PHP MongoClient Manual](http://www.php.net/manual/en/mongoclient.construct.php).

For example, to connect to a MongoDB database, the syntax looks like:

```
$db = new \DB\Mongo('mongodb://localhost:27017','testdb');
```

## Methods

### dsn

**Return data source name**

```
string dsn ( )
```

### uuid

**Returns unique connection UUID**

```
string uuid ( )
```

### log

**Return MongoDB profiler results**

```
string log ( )
```

### drop

**Intercept native call to re-enable profiler**

```
int drop()
```

This drops the database currently being used and re-enables its log profiler
