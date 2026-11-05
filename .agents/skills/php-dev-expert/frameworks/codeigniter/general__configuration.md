# Configuration — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/general/configuration.html

---

# Configuration[](#configuration "Link to this heading")

Every framework uses configuration files to define numerous parameters and
initial settings. CodeIgniter configuration files define simple classes where
the required settings are public properties.

Unlike many other frameworks, CodeIgniter configurable items aren’t contained in
a single file. Instead, each class that needs configurable items will have a
configuration file with the same name as the class that uses it. You will find
the application configuration files in the **app/Config** folder.

## [What are Configuration Classes?](#id5)[](#what-are-configuration-classes "Link to this heading")

Configuration classes are utilized to define system default configuration values.
System configuration values are typically *static*. Configuration classes are
intended to retain the settings that configure how the application operates,
rather than responding to each user’s individual settings.

It is not recommended to alter values set during the instantiation of a
configuration class later during execution. In other words, it is recommended to
treat configuration classes as immutable or readonly classes. This is especially
important if you utilize [Config Caching](concepts__factories.md#factories-config-caching).

Configuration values can be hard-coded in the class files or obtained from
environment variables at instantiation.

## [Working with Configuration Files](#id6)[](#working-with-configuration-files "Link to this heading")

### [Getting a Config Object](#id7)[](#getting-a-config-object "Link to this heading")

You can access configuration files for your classes in several different ways.

#### new keyword[](#new-keyword "Link to this heading")

By using the `new` keyword to create an instance:

```
<?php

// Creating new configuration object by hand
$config = new \Config\Pager();
```

#### config()[](#config "Link to this heading")

By using the [`config()`](general__common_functions.md#config "config") function:

```
<?php

// Get shared instance with config function
$config = config('Pager');

// Access config class with namespace
$config = config('Config\\Pager');
$config = config(\Config\Pager::class);

// Creating a new object with config function
$config = config('Pager', false);
```

If no namespace is provided, it will look for the file in the **app/Config**
folder first, and if not found, look for in the **Config** folder in all defined
namespaces.

All of the configuration files that ship with CodeIgniter are namespaced with
`Config`. Using this namespace in your application will provide the best
performance since it knows exactly where to find the files.

Note

Prior to v4.4.0, `config()` finds the file in **app/Config/** when there
is a class with the same shortname,
even if you specify a fully qualified class name like `config(\Acme\Blog\Config\Blog::class)`.
This behavior has been fixed in v4.4.0, and returns the specified instance.

### [Getting a Config Property](#id8)[](#getting-a-config-property "Link to this heading")

All configuration object properties are public, so you access the settings like any other property:

```
<?php

$config = config('Pager');
// Access settings as object properties
$pageSize = $config->perPage;
```

## [Creating Configuration Files](#id9)[](#creating-configuration-files "Link to this heading")

When you need a new configuration, first you create a new file at your desired location.
The default file location (recommended for most cases) is **app/Config**.

You can put configuration files in any **Config** folder by using a different namespace.

The class should use the appropriate namespace, and it should extend
`CodeIgniter\Config\BaseConfig` to ensure that it can receive environment-specific settings.

Define the class and fill it with public properties that represent your settings:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class CustomClass extends BaseConfig
{
    public $siteName  = 'My Great Site';
    public $siteEmail = '[email protected]';
    // ...
}
```

## [Environment Variables](#id10)[](#environment-variables "Link to this heading")

One of today’s best practices for application setup is to use Environment Variables. One reason for this is that Environment Variables are easy to change between deploys without changing any code. Configuration can change a lot across deploys, but code does not. For instance, multiple environments, such as the developer’s local machine and the production server, usually need different configuration values for each particular setup.

Environment Variables should also be used for anything private such as passwords, API keys, or other sensitive data.

### [Dotenv File](#id11)[](#dotenv-file "Link to this heading")

CodeIgniter makes it simple and painless to set Environment Variables by using a “dotenv” file. The term comes from the file name, which starts with a dot before the text “env”.

#### Creating Dotenv File[](#creating-dotenv-file "Link to this heading")

CodeIgniter expects the **.env** file to be at the root of your project alongside the
**app** directories. There is a template file distributed with CodeIgniter that’s
located at the project root named **env** (Notice there’s no dot (`.`) at the start?).

It has a large collection of variables your project might use that have been assigned
empty, dummy, or default values. You can use this file as a starting place for your
application by either renaming the template to **.env**, or by making a copy of it named **.env**.

Warning

Make sure the **.env** file is NOT tracked by your version control system. For *git* that means adding it to **.gitignore**. Failure to do so could result in sensitive credentials being exposed to the public.

#### Setting Variables[](#setting-variables "Link to this heading")

Settings are stored in **.env** files as a simple a collection of name/value pairs separated by an equal sign.

```
S3_BUCKET = dotenv
SECRET_KEY = super_secret_key
CI_ENVIRONMENT = development
```

When your application runs, **.env** will be loaded automatically, and the variables put
into the environment. If a variable already exists in the environment, it will NOT be
overwritten.

#### Getting Variables[](#getting-variables "Link to this heading")

The loaded environment variables are accessed using any of the following:
`getenv()`, `$_SERVER`, or `$_ENV`.

```
<?php

$s3_bucket = getenv('S3_BUCKET');
$s3_bucket = $_ENV['S3_BUCKET'];
$s3_bucket = $_SERVER['S3_BUCKET'];
```

Warning

Note that your settings from the **.env** file are added to `$_SERVER` and `$_ENV`. As a side effect, this means that if your CodeIgniter application is (for example) generating a `var_dump($_ENV)` or `phpinfo()` (for debugging or other valid reasons), or a detailed error report in the `development` environment is shown, **your secure credentials are publicly exposed**.

#### Nesting Variables[](#nesting-variables "Link to this heading")

To save on typing, you can reuse variables that you’ve already specified in the file by wrapping the
variable name within `${...}`:

```
BASE_DIR = "/var/webroot/project-root"
CACHE_DIR = "${BASE_DIR}/cache"
TMP_DIR = "${BASE_DIR}/tmp"
```

#### Namespaced Variables[](#namespaced-variables "Link to this heading")

There will be times when you will have several variables with the same name.
The system needs a way of knowing what the correct setting should be.
This problem is solved by “*namespacing*” the variables.

Namespaced variables use a dot notation to qualify variable names so they will be unique
when incorporated into the environment. This is done by including a distinguishing
prefix followed by a dot (.), and then the variable name itself.

```
// not namespaced variables
name = "George"
db = my_db

// namespaced variables
address.city = "Berlin"
address.country = "Germany"
frontend.db = sales
backend.db = admin
BackEnd.db = admin
```

#### Namespace Separator[](#namespace-separator "Link to this heading")

Some environments, e.g., Docker, CloudFormation, do not permit variable name with dots (`.`). In such case, since v4.1.5, you could also use underscores (`_`) as a separator.

```
// namespaced variables with underscore
app_forceGlobalSecureRequests = true
app_CSPEnabled = true
```

## [Configuration Classes and Environment Variables](#id12)[](#configuration-classes-and-environment-variables "Link to this heading")

When you instantiate a configuration class, any *namespaced* environment variables
are considered for merging into the configuration object’s properties.

Important

You cannot add a new property by setting environment variables,
nor change a scalar value to an array. See [Environment Variables as Replacements for Data](#env-var-replacements-for-data).

Note

This feature is implemented in the `CodeIgniter\Config\BaseConfig`
class. So it will not work with a few files in the **app/Config** folder
that do not extends the class.

If the prefix of a namespaced variable exactly matches the namespace of the configuration
class, then the trailing part of the setting (after the dot) is treated as a configuration
property. If it matches an existing configuration property, the environment variable’s
value will replace the corresponding value from the configuration file. If there is no match,
the configuration class properties are left unchanged. In this usage, the prefix must be
the full (case-sensitive) namespace of the class.

```
Config\App.forceGlobalSecureRequests = true
Config\App.CSPEnabled = true
```

Note

Both the namespace prefix and the property name are case-sensitive. They must exactly match the full namespace and property names as defined in the configuration class file.

The same holds for a *short prefix*, which is a namespace using only the lowercase version of
the configuration class name. If the short prefix matches the class name,
the value from **.env** replaces the configuration file value.

```
app.forceGlobalSecureRequests = true
app.CSPEnabled = true
```

Since v4.1.5, you can also write with underscores:

```
app_forceGlobalSecureRequests = true
app_CSPEnabled = true
```

Note

When using the *short prefix* the property names must still exactly match the class defined name.

### [Environment Variables as Replacements for Data](#id13)[](#environment-variables-as-replacements-for-data "Link to this heading")

It is very important to always remember that environment variables contained in
your **.env** are **only replacements for existing scalar values**.

Simply put, you can change only the property’s scalar value that exists in the
Config class by setting it in your **.env**.

> 1. You cannot add a property that is not defined in the Config class.
> 2. You cannot change a scalar value in a property to an array.
> 3. You cannot add an element to an existing array.

For example, you cannot just put `app.myNewConfig = foo` in your **.env** and
expect your `Config\App` to magically have that property and value at run time.

When you have the property `$default = ['encrypt' => false]` in your
`Config\Database`, you cannot change the `encrypt` value to an array even if
you put `database.default.encrypt.ssl_verify = true` in your **.env**.
If you want to do like that, see
[Database Configuration](database__configuration.md#database-config-with-env-file).

### [Treating Environment Variables as Arrays](#id14)[](#treating-environment-variables-as-arrays "Link to this heading")

A namespaced environment variable can be further treated as an array.
If the prefix matches the configuration class, then the remainder of the
environment variable name is treated as an array reference if it also
contains a dot.

```
// regular namespaced variable
Config\SimpleConfig.name = George

// array namespaced variables
Config\SimpleConfig.address.city = "Berlin"
Config\SimpleConfig.address.country = "Germany"
```

If this was referring to a SimpleConfig configuration object, the above example would be treated as:

```
<?php

$address['city']    = 'Berlin';
$address['country'] = 'Germany';
```

Any other elements of the `$address` property would be unchanged.

You can also use the array property name as a prefix. If the environment file
held the following then the result would be the same as above.

```
// array namespaced variables
Config\SimpleConfig.address.city = "Berlin"
address.country = "Germany"
```

## [Handling Different Environments](#id15)[](#handling-different-environments "Link to this heading")

Configuring multiple environments is easily accomplished by using a separate **.env** file with values modified to meet that environment’s needs.

The file should not contain every possible setting for every configuration class used by the application. In truth, it should include only those items that are specific to the environment or are sensitive details like passwords and API keys and other information that should not be exposed. But anything that changes between deployments is fair-game.

In each environment, place the **.env** file in the project’s root folder. For most setups, this will be the same level as the `app` directories.

Do not track **.env** files with your version control system. If you do, and the repository is made public, you will have put sensitive information where everybody can find it.

## [Registrars](#id16)[](#registrars "Link to this heading")

“Registrars” are any other classes which might provide additional configuration properties.
Registrars provide a means of altering a configuration at runtime across namespaces and files.

Registrars work if [Auto-Discovery](general__modules.md#auto-discovery) is enabled in [Modules](general__modules.md).
It alters configuration properties when the Config object is instantiated.

Note

This feature is implemented in the `CodeIgniter\Config\BaseConfig`
class. So it will not work with a few files in the **app/Config** folder
that do not extends the class.

There are two ways to implement a Registrar: **implicit** and **explicit**.

Note

Values from **.env** always take priority over Registrars.

### [Implicit Registrars](#id17)[](#implicit-registrars "Link to this heading")

Implicit Registrars can change any Config class properties.

Any namespace may define implicit registrars by using the **Config/Registrar.php**
file. These files are classes whose methods are named for each configuration class
you wish to extend.

For example, a third-party module or Composer package might
wish to supply an additional template to `Config\Pager` without overwriting whatever a developer has
already configured. In **src/Config/Registrar.php** there would be a `Registrar` class with
the single `Pager()` method (note the case-sensitivity):

```
<?php

namespace CodeIgniter\Shield\Config;

class Registrar
{
    public static function Pager(): array
    {
        return [
            'templates' => [
                'module_pager' => 'MyModule\Views\Pager',
            ],
        ];
    }
}
```

Registrar methods must always return an array, with keys corresponding to the properties
of the target config file. Existing values are merged, and Registrar properties have
overwrite priority.

### [Explicit Registrars](#id18)[](#explicit-registrars "Link to this heading")

Explicit Registrars can only change the Config class properties in which they are
registered.

A configuration file can also specify any number of registrars explicitly.
This is done by adding a `$registrars` property to your configuration file,
holding an array of the names of candidate registrars:

```
<?php

namespace Config;

// ...

class MyConfig extends BaseConfig
{
    public static $registrars = [
        SupportingPackageRegistrar::class,
    ];

    // ...
}
```

In order to act as a “registrar” the classes so identified must have a
static function with the same name as the configuration class, and it should return an associative
array of property settings.

When your configuration object is instantiated, it will loop over the
designated classes in `$registrars`. For each of these classes it will invoke
the method named for the configuration class and incorporate any returned properties.

A sample configuration class setup for this:

```
<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class MySalesConfig extends BaseConfig
{
    public int $target        = 100;
    public string $campaign   = 'Winter Wonderland';
    public static $registrars = [
        '\App\Models\RegionalSales',
    ];
}
```

… and the associated regional sales model might look like:

```
<?php

namespace App\Models;

class RegionalSales
{
    public static function MySalesConfig(): array
    {
        return [
            'target' => 45,
        ];
    }
}
```

With the above example, when `MySalesConfig` is instantiated, it will end up with
the three properties declared, but the value of the `$target` property will be overridden
by treating `RegionalSales` as a “registrar”. The resulting configuration properties:

```
<?php

$target   = 45;
$campaign = 'Winter Wonderland';
```

## [Confirming Config Values](#id19)[](#confirming-config-values "Link to this heading")

The actual Config object property values are changed at runtime by the [Registrars](#registrars)
and [Environment Variables](#configuration-classes-and-environment-variables),
and [Config Caching](concepts__factories.md#factories-config-caching).

CodeIgniter has the following [command](cli__spark_commands.md) to check
the actual Config values.

### [config:check](#id20)[](#config-check "Link to this heading")

Added in version 4.5.0.

For example, if you want to check the `Config\App` instance:

```
php spark config:check App
```

The output is like the following:

```
Config\App#6 (12) (
    public 'baseURL' -> string (22) "http://localhost:8080/"
    public 'allowedHostnames' -> array (0) []
    public 'indexPage' -> string (9) "index.php"
    public 'uriProtocol' -> string (11) "REQUEST_URI"
    public 'defaultLocale' -> string (2) "en"
    public 'negotiateLocale' -> boolean false
    public 'supportedLocales' -> array (1) [
        0 => string (2) "en"
    ]
    public 'appTimezone' -> string (3) "UTC"
    public 'charset' -> string (5) "UTF-8"
    public 'forceGlobalSecureRequests' -> boolean false
    public 'proxyIPs' -> array (0) []
    public 'CSPEnabled' -> boolean false
)

Config Caching: Disabled
```

You can see if Config Caching is enabled or not.

Note

If Config Caching is enabled, the cached values are used permanently.
See [Config Caching](concepts__factories.md#factories-config-caching) for details.
