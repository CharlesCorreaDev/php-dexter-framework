# Session Config - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/session/config.html

---

## Session Class

The session class allows you to maintain state for your application in the stateless environment of the web.
It allows you to store variables on the server using a variety of storage solutions, and recall these variables on the next page request.

## Configuration

The session class is configured through the fuel/core/config/session.php configuration file. It is already populated with a default configuration. You can override this configuration by copying this config file to your application config directory, and modify that file as needed.

The following global configuration values can be defined:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| auto\_initialize | boolean | ``` true ``` | If true, the default driver defined in the configuration will be automatically loaded and initialized. Set it to false if you want to load a specific session configuration manually. |
| driver | string | ``` 'cookie' ``` | Name of the session driver to load. Currently, you can use 'cookie', 'db', 'memcached', 'redis' and 'file'. Other values will generate an error. Check the advanced section on how you can load a session driver manually, or how to use multiple drivers concurrently. |
| match\_ip | boolean | ``` false ``` | If true, the IP address stored in the session cookie will be compared with the client IP address as reported by the webserver. In case of a mismatch, the session is discarded. This function uses both the clients real IP address and the public IP address, so that users behind proxy servers can be uniquely identified (if the proxy reveils this information). |
| match\_ua | boolean | ``` true ``` | If true, the User Agent string stored in the session cookie will be compared with the User Agent string as reported by the webserver. In case of a mismatch, the session is discarded. |
| cookie\_domain | string | ``` '' ``` | The domain for which the session cookie is valid. If you leave it blank, it will default to the hostname as specified in the URL.  Make sure you follow the rules for cookie domain names, as defined in http://www.faqs.org/rfcs/rfc2109.html! |
| cookie\_path | string | ``` '/' ``` | If you want the cookie to be only valid for a certain path, enter the path here. You use this mainly if you have installed your application in a folder instead of in the webservers DOCROOT. |
| cookie\_http\_only | boolean | ``` false ``` | if true, allow only transmit of cookies over HTTP, disabling Javascript access. |
| expiration\_time | integer | ``` 7200 ``` | Number of seconds of idle time after which the session will expire. This value must be greater than zero. If an invalid value is defined, it will be set to 7200 seconds. |
| expire\_on\_close | boolean | ``` false ``` | When set to true, the session will expire when the browser (not the current window!) is closed. If set, it has precedence over the expiration\_time defined. |
| rotation\_time | mixed | ``` 300 ``` | To prevent session hijacking due to session fixation, Fuel automatically encrypts the session cookie data. It also changes the session IDs at the interval specified here. Automatic rotation can be disabled to settings this value to `false`. If not given, or an invalid value is defined, the rotation time defaults to 300 seconds. |
| flash\_id | string | ``` 'flash' ``` | Flash variables are identified in the session by the flash id and the session variable name. You can use this flash id as a session variable namespace, to avoid variable name collisions, or to make sure session variables from a module don't interfere with variables used in the application. |
| flash\_auto\_expire | boolean | ``` true ``` | Flash variables are intended to be used only once. If you set this parameter to true, flash variables will auto expire after the next page request, whether or not there are read back. If you set this to false, flash variables will remain stored in the session until you retrieve them. |
| post\_cookie\_name | string | ``` '' ``` | For situations where no cookies are sent to the server (for example, when you use Flash objects), you can use client side code to copy the contents of the session cookie into a variable that will be send to the server as part of a POST request. You can use this variable to define the name of the POST variable.  Note that this variable will only be checked when no session cookie can be found. |
| http\_header\_name | string | ``` 'Session-Id' ``` | For situations where no cookies are sent to the server, you can also use client side code to set a custom HTTP header to pass the session cookie to the server.  Note that this variable will only be checked when no session cookie can be found. |
| enable\_cookie | boolean | ``` true ``` | When set to false, no session cookie will be created and added to the response send back to the client. This means you have to use other means (GET, POST or HTTP-HEADER) to pass the session-id back from the client to the server on the next request. |
| native\_emulation | boolean | ``` false ``` | When set to true, the session class will add support for PHP native sessions through [emulation](#native_emulation). |
| cookie | array | ``` array( 	'cookie_name'    => 'fuelcid', 	'write_on_set'   => true  ) ``` | Specific configuration for cookie based sessions. |
| file | array | ``` array( 	'cookie_name'    => 'fuelfid', 	'path'           => '/tmp', 	'gc_probability' => 5  ) ``` | Specific configuration for file based sessions. |
| db | array | ``` array( 	'cookie_name'    => 'fueldid', 	'database'       => 'development', 	'table'          => 'sessions', 	'gc_probability' => 5  ) ``` | Specific configuration for database based sessions. |
| memcached | array | ``` array( 	'cookie_name'    => 'fuelmid', 	'servers'        => array( 'default' => 							array( 								'host' => '127.0.0.1', 								'port' => 11211, 								'weight' => 100 							) 						)  ) ``` | Specific configuration for memcached based sessions. |
| redis | array | ``` array( 	'cookie_name'    => 'fuelrid', 	'database'       => 'default'  ) ``` | Specific configuration for redis based sessions. |

For each of the session storage drivers, a separate configuration section exists.
This section contains the driver specific parameters, and you can use it to override
global parameters for that specific storage driver.

The Session class checks the following locations for a session id, in this order. It doesn't validate at this point, the
first value found is used, and if that turns out not to be valid, a new session is created:

- Posted data, it will check `Input::post` for the variable defined in "post\_cookie\_name".
- Cookies, it will check for a valid cookie with the name defined in "cookie\_name".
- Get data, it will check `Input::get` for the variable with the name defined in "cookie\_name".
- http headers, it will check for the header with the name defined in "http\_header\_name".

The session class configuration is independent from the cookie class configuration.
It is important that you configure the `cookie_domain` and `cookie_path` items
correctly. Notably, the domain 'localhost' is not accepted as valid by most modern browsers!

##### Cookie driver configuration

The cookie driver doesn't use any server based storage. Instead, all session variables will be stored in the cookie that is sent to the browser after each request. Use this only if you don't have to store much data, as the maximum payload size of a cookie is 4Kb, which you will reach quite quickly, due to the overhead of array serialization and encryption.

Specific driver configuration:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| cookie\_name | string | ``` 'fuelcid' ``` | Name of the cookie used to store the session. If not set, it defaults to 'fuelcid'. If you use multiple session drivers in your application, make sure the cookie name for each of the drivers is unique! |

##### File driver configuration

Specific driver configuration:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| cookie\_name | string | ``` 'fuelfid' ``` | Name of the cookie used to store the session. If not set, it defaults to 'fuelfid'. If you use multiple session drivers in your application, make sure the cookie name for each of the drivers is unique! |
| path | string | ``` '/tmp' ``` | Location on disk where the session data has to be stored. File based session data is not encrypted for performance reasons. Make sure you select a location that can not be read by other applications and/or users. Pay specific attention to this fact when you run your application on a shared host! |
| gc\_probability | integer | ``` 5 ``` | To keep the number of expired session files under control, regular garbage collection is performed. The gc\_probability is an integer between 0 and 100, indicating the chance that this process will start, where 0 = never, and 100 = always. The session driver executes this task as a shutdown event, to minimize the impact on the application. |

##### Database session configuration

Specific driver configuration:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| cookie\_name | string | ``` 'fueldid' ``` | Name of the cookie used to store the session. If not set, it defaults to 'fueldid'. If you use multiple session drivers in your application, make sure the cookie name for each of the drivers is unique! |
| database | string | ``` null ``` | Name of the database which is going to be used to store the session data. This is the name defined in the application database configuration file, app/config/db.php. If not defined, or set to null, the current active database will be selected. Note that if you use multiple databases, it is not wise to use null here, as your application flow determines what the active database is at any given time. Either use **Config::get('environment')** to use the configured current environment, or use a named database configuration. |
| table | string | ``` 'sessions' ``` | Name of the table that will be used to store the session data. You should make sure this table exists, and has these fields (MySQL syntax):     ``` CREATE TABLE IF NOT EXISTS `sessions` (   `session_id` varchar(40) NOT NULL,   `previous_id` varchar(40) NOT NULL,   `user_agent` text NOT NULL,   `ip_hash` char(32) NOT NULL DEFAULT '',   `created` int(10) unsigned NOT NULL DEFAULT '0',   `updated` int(10) unsigned NOT NULL DEFAULT '0',   `payload` longtext NOT NULL,   PRIMARY KEY (`session_id`),   UNIQUE KEY `PREVIOUS` (`previous_id`) ) ENGINE=INNODB DEFAULT CHARSET=utf8; ```    Note that the sessions table has a unique index on both the session\_id and the previous\_id columns. This is both to speed up the query (which is always by id), and to make sure no duplicate id's are inserted. |
| gc\_probability | integer | ``` 5 ``` | To keep the number of expired session files under control, regular garbage collection is performed. The gc\_probability is an integer between 0 and 100, indicating the chance that this process will start, where 0 = never, and 100 = always. The session driver executes this task as a shutdown event, to minimize the impact on the application. |

##### Memcached session configuration

Specific driver configuration:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| cookie\_name | string | ``` 'fuelmid' ``` | Name of the cookie used to store the session. If not set, it defaults to 'fuelmid'. If you use multiple session drivers in your application, make sure the cookie name for each of the drivers is unique! |
| servers | array | ``` array ( 	'default' => 		array( 			'host' => '127.0.0.1', 			'port' => 11211, 			'weight' => 100 		) ) ``` | Array containing a list of available memcached servers, as defined by <http://php.net/manual/en/memcached.addservers.php>. If you don't specify this parameter, it will default to a single memcached server, running on the local machine, and the listening to default port. |

##### Redis session configuration

Specific driver configuration:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| cookie\_name | string | ``` 'fuelrid' ``` | Name of the cookie used to store the session. If not set, it defaults to 'fuelrid'. If you use multiple session drivers in your application, make sure the cookie name for each of the drivers is unique! |
| database | string | ``` 'default' ``` | Name of the redis database which is going to be used to store the session data. This is the name defined in the redis section of the application database configuration file, app/config/db.php. If not defined or not found, the 'default' database configuration will be selected. |

### Using Oil to Create/Control Your Sessions Table

An oil task has been provided to allow you to create, remove and clear your sessions table using
the oil command line utility.

```
# display menu
$ php oil r session

# create the sessions table
$ php oil r session:create

# remove the sessions table
$ php oil r session:remove

# clear (truncate) the sessions table
$ php oil r session:clear
```

### PHP native session emulation

When activated via the configuration, the Session class will enable some basic emulation of PHP's native session mechanism that
can be accessed via the `$_SESSION` global variable. This only works on the default session instance, the one accessable via the
static interface.

When enabled, the Session class will setup a custom session handler, that will capture the calls to the PHP functions
`session_start()`, `session_close()` and `session_write_close()`. If will force a close at shutdown when an open native session
is detected.

- When `session_start()` is called, all session data stored in the Fuel session store you have configured will be copied into the `$_SESSION` array, so it can be accessed by non-Fuel code requiring sessions.
- When the session is closed, a diff is made and changes in $\_SESSION are copied back into the Fuel session store.

This mechanism means that if you have a session variable that is modified both inside- and outside Fuel, it is undetermined which of
the changes will be saved. This depends on the position of the last `session_close()` call in the code. If the session is
not closed, Fuel's shutdown event will close it, and it will overwrite any data set via standard Session calls!
