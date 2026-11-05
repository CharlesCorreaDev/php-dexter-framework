# Mongo_Db Introduction - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/mongo/introduction.html

---

## Mongo\_Db class

### Introduction

The Mongo\_Db class provides methods to interact with
[Mongo databases](http://www.mongodb.org/).

Besides providing the normal insert, select, delete and update functionality it has some management
methods to help you with database utility operations.

### Configuration

For every Mongo database connection there must be a config in mongo array in *app/config/db.php*.
Configuration options and explanation are listed below. Every config requires to contain a hostname
and database name.

| Param | Type | Required | Description |
| --- | --- | --- | --- |
| hostname | string | yes | the TCP hostname, OR a UNIX socket filepath |
| database | string | yes | the database name |
| port | number | no | the port to use in the connection, OR *0* if the **hostname** is a UNIX socket |
| replicaset | string | no | the name of the replicaset to use for the connection |
| username | string | no | username used for authentication, ignored if no password has been set |
| password | string | no | password used for authentication, ignored if no password has been set |

Example config:

```
// Inside app/config/db.php

		'mongo' => array(
			// This group is used when no instance name has been provided.
			'default' => array(
				'hostname'   => 'localhost',
				'database'   => 'mongo_fuel',
			),

			// List your own groups below.
			'my_mongo_connection' => array(
				'hostname'   => 'localhost',
				'database'   => 'my_db',
				'replicaset' => 'replica',
				'username'   => 'user',
				'password'   => 'p@s$w0rD',
			),

			// An alternative group example using a UNIX socket connection, instead of the TCP localhost
			'my_mongo_sock' => array(
				'hostname'   => '/tmp/mongodb-27017.sock',
				'port'   => 0,
				'database'   => 'mongo_fuel',
			),

		),
	
```

Once you have your setting in place you can start using MongoDB.

In order to use MongoDB this must be available on your server. To see if you have mongo
support on you server, look for the Mongo section in your *phpinfo()* or ask you hosting company.
