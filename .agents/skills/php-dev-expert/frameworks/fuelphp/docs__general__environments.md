# Environments - General - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/general/environments.html

---

## Environments

The support of environments helps FuelPHP and your app to make decisions based on the environment setting.
FuelPHP itself uses the environment setting to load/overwrite additional config setting based on which
environment is currently active.

### Environments and Config

Based on the environment the app is set to, the Config class looks for environment-specific config files.
The config class looks for config files in the directory that matches the current environment. This can be helpful if you are working with multiple developers that each use their own database connection configurations. Another helpful use case is when you have a server for testing that should display all PHP errors and warnings and you have a production server that should not display any errors or warning but simply log them to be reviewed by a developer later.

Here is an example to illustrate this:

```
app/
  config/
    auth.php
    db.php
      development/
        db.php
      staging/
        email.php
      mike_dev/
        db.php
        email.php
      production/
        db.php
```

When your environment is set to `\Fuel::DEVELOPMENT`, the settings from *db.php* are merged with *development/db.php*.
The same goes for any other environment setting except `\Fuel::STAGING`, because there is no *staging/db.php*.
If the environment setting is set to `\Fuel::STAGING`, only *db.php* is loaded.

A real-life example for this is the database configuration. There are no default configuration settings (this is possibly very dangerous). There are only environment-specific config settings.

### Predefined Environments

FuelPHP has four predefined environments. You can also [create your own custom environment.](#create_env)

- **\Fuel::DEVELOPMENT**  
  The development environment.
- **\Fuel::TEST**  
  The test environment.
- **\Fuel::STAGING**  
  The staging environment.
- **\Fuel::PRODUCTION**  
  The production environment.

### Create Custom Environment

To create a custom environment, just use a custom string such as *mike\_dev* and create a matching folder in /fuel/app/config/.

For example:
If you have a developer named Mike, you can create a custom environment called *mike\_dev*.

1. Create a folder in /fuel/app/config/ called *mike\_dev*
2. Place any config files that pertain to Mike in the new config folder, for example, place db.php in /fuel/app/config/mike\_dev/ to a load custom database configuration when the *mike\_dev* environment is set.
3. Follow the instructions on [setting your environment](#setting_env) below. When setting the environment, instead of using a predefined FuelPHP Environment such as PRODUCTION, use the custom string *mike\_dev*

### Set Your Environment

There are three ways to set your environment. The first two allow you to set the environment that FuelPHP will use when loading web pages. The third option shows you how to set your environment when using FuelPHP's Oil. Oil does not use the environment you set in the first two options below, it has to be set separately, every time you use Oil.

- [Set Environment with server environment variables (Recommended)](#env_server)
- [Set Environment with */fuel/app/bootstrap.php*](#env_manual)
- [Set Environment when using Oil (Does not replace the above methods, this has its own separate use)](#env_oil)

#### Set Environment with server environment variables (Recommended)

You can use the server environment variable **SetEnv** to set the environment your application should run in. Every server has its own envrionment variables. Below includes instructions for known configurations. If your server is not included below, [read more about environment variables here](http://en.wikipedia.org/wiki/Environment_variable).

The variable name **FUEL\_ENV** should be specified in UPPERCASE, the environment name in lowercase.

##### Apache - Server Configuration

1. Make sure your apache server configuration loads the extension mod\_env
2. Edit the

   ```
   httpd.conf
   ```

   file (or if you include virtual host configurations the desired virtual host config file)
   and add the following code.

   ```
   // run this application in production mode
   SetEnv FUEL_ENV production
   ```

##### Apache - User Configuration

1. Make sure your apache server configuration loads the extension mod\_env
2. Create an

   ```
   .htaccess
   ```

   file in the

   ```
   /public
   ```

   directory of your application
3. Edit the

   ```
   .htaccess
   ```

   file and add the following code.

   ```
   // run this application in production mode
   SetEnv FUEL_ENV production
   ```

Note that enabling .htaccess will slow Apache down considerably. If possible, use a server configuration and disable the use of .htaccess!

##### Nginx

1. Edit the desired file in

   ```
   /etc/nginx/sites-available
   ```

   and add the following code.

   ```
   # run this application in production mode
     location ~ \.php$ {
       fastcgi_param FUEL_ENV production;
     }
   ```

##### IIS

Configuring an environment variable in IIS is significantly more complicated, you do have to know how to handle your mouse! ;-)
  
You can check out [this page](https://www.iis.net/configreference/system.webserver/fastcgi/application/environmentvariables/environmentvariable#003a) for a how-to.

#### Set Environment with /fuel/app/bootstrap.php

If you are unable to set the environment using [the FUEL\_ENV server variable](#env_server), you can manually change the setting in *fuel/app/bootstrap.php*.

```
// Inside fuel/app/bootstrap.php

/**
 * Your environment.  Can be set to any of the following:
 *
 * Fuel::DEVELOPMENT
 * Fuel::TEST
 * Fuel::STAGING
 * Fuel::PRODUCTION
 * Any string you want, for example, a developer name (mike_dev)
 *
 */
Fuel::$env = (isset($_SERVER['FUEL_ENV']) ? $_SERVER['FUEL_ENV'] : Fuel::PRODUCTION);
```

Note that when using this code, the environment variable has precedence when set!

### Set Environment when using Oil

FuelPHP's Oil does not use the same environment that is set for your application. The environment Oil runs in must be set separately, each time you run an Oil instance. The following instructions tell you how to do so. If you are looking to set the environment for your application, see [Set Environment with server environment variables (Recommended)](#env_server) or [Set Environment with */fuel/app/bootstrap.php*](#env_manual)

When using a \*unix operating system, you can use the `env` command to define the variable before starting oil.

```
$ env FUEL_ENV=production php oil -v
```

When using Windows, this has been reported to work:

```
C:\> set FUEL_ENV=production && php oil -v
```

### Get Your Current Environment

You can retrieve the current environment programmatically using **\Fuel::$env**

Do not use **$\_SERVER['FUEL\_ENV']**. It will not work if you do not set the environment. Using $\_SERVER is not reliable, because it might not be there, or it might be overridden in code (which makes it different from \Fuel::$env).

```
// comparing current appliation environment to a predefinded environment

if(\Fuel::$env == \Fuel::PRODUCTION)
{
	//do something
}

// comparing current appliation environment to a custom environment
if(\Fuel::$env == "mike_dev")
{
	//do something
}
```
