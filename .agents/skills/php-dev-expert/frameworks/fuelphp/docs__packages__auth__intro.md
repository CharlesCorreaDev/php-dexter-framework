# Introduction - Auth Package - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/packages/auth/intro.html

---

## Auth package

The Auth package provides a standardized interface for authentication in Fuel. This allows our users to
write their own drivers and easily integrate a new driver to work with old code by keeping the basic methods
consistent.

## Introduction

Creating an Auth package that will suit everyone or every implementation is impossible. As a framework
we don't want to force how you do Auth, but we do want to facilitate you creating your own or using the
work of others. This is where the Auth package comes in.

The interface contains 3 types of drivers (which can be extended to more types): **login**,
**group** & **ACL**.
The login drivers handle a user login and can handle multiple login drivers at the same time. For example
one could make it possible for users to login through Twitter and their own native users at the same time
using 2 login drivers.

As a next step you could group those 2 types of logins using a group driver that doesn't care about the
type of login you're using. And last but not least you can use an Acl driver to give specific rights to
those groups.

The above is just an example of how you might use it, not how you *have* to use it. Read on in
the next section to understand which methods are part of the generic interface and which will be driver
specific: [Writing drivers](docs__packages__auth__drivers.md).

### Included drivers

The Auth packages comes with two sets of drivers which provide local access, using one or more database tables.

#### Simpleauth

As the same implies, this is a basic driver set. It uses a database table to store the user information, and
a configuration file to store information about groups, roles, and ACLs. It stores user metadata in a serialized
array in the user record. It doesn't have a lot of functionality, but for most applications it can do the job.
It is documented [here](docs__packages__auth__simpleauth__intro.md).

#### Ormauth

This driver set provides similar functionality as the Simpleauth drivers, but stores all information about
users, groups, roles and permissions in the database and uses ORM models to access this information. In addition to
this, it doesn't store user metadata in an array, but in a separate table, using ORM's EAV container feature to
access it. It's API is almost compatible with Simpleauth, the difference is that methods that return user, group or role
data now return ORM objects instead of arrays.
It is documented [here](docs__packages__auth__ormauth__intro.md)

The Auth package contains the required migration files to create the table structures needed for these
drivers. It uses the Auth configuration file to determine what to create, so you need to configure that first.

### Supporting classes

Besides full driver sets, the Auth package also contains supporting classes, classes that provide additional functionality
to one or all of the drivers.

#### Opauth

Opauth is a multi-provider authentication framework for PHP, and is installed as a composer package. It provides generic
authentication using the OAuth or OpenID protocols, and has a substantial list of ready-made strategies for authentication
against popular OAuth platforms like Facebook, Twitter, Github, etc.

The Opauth driver included in the Auth package will interface between Opauth and (currently) either Simpleauth or Ormauth,
so that you can link OAuth accounts to local accounts, use local ACL's for OAuth accounts, etc.
It is documented [here](docs__packages__auth__opauth__intro.md).

### Installation

The Auth package is included in the Fuel download. All you need to do is enable it in your config.

```
'always_load' => array(
	'packages' => array(
		'auth',
	),
),
```

### Configuration

Auth can be configured in a config/auth.php file and takes the following keys:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| driver | string|array | ``` array('Simpleauth') ``` | Login drivers to load, the first will also be the default returned by Auth::instance(). |
| verify\_multiple\_logins | bool | ``` false ``` | Whether checking for login continues after one driver has validated a login successfully, this makes it possible to login in multiple ways at the same time. |
| salt | string | ``` 'put_your_salt_here' ``` | The salt used for password hashing. |
| iterations | integer | ``` 10000 ``` | The number of iterations(number of "encryptions" made to the password) made in the password hashing process(Auth uses PBKDF2). More iterations means safer passwords but using more time. Too many iterations may crash your server! |

Note that 'verify\_multiple\_logins' is a driver level setting. It has no meaning for
login drivers, it does not mean "allow a user to be logged-in multiple times"!

Your auth config file should look like this:

```
<?php

return array(
	// The drivers
	'driver' => array('Simpleauth'),

	// Set to true to allow multiple logins
	'verify_multiple_logins' => true,

	// Use your own salt for security reasons
	'salt' => 'Th1s=mY0Wn_$@|+',
);
```
