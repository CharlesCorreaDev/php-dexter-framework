# Autoloading Files — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/concepts/autoloader.html

---

# Autoloading Files[](#autoloading-files "Link to this heading")

Every application consists of a large number of classes in many different locations.
The framework provides classes for core functionality. Your application will have a
number of libraries, models, and other entities to make it work. You might have third-party
classes that your project is using. Keeping track of where every single file is, and
hard-coding that location into your files in a series of `requires()` is a massive
headache and very error-prone. That’s where autoloaders come in.

## [CodeIgniter4 Autoloader](#id2)[](#codeigniter4-autoloader "Link to this heading")

CodeIgniter provides a very flexible autoloader that can be used with very little configuration.
It can locate individual namespaced classes that adhere to
[PSR-4](https://www.php-fig.org/psr/psr-4/) autoloading directory structures.

The autoloader works great by itself, but can also work with other autoloaders, like
[Composer](https://getcomposer.org), or even your own custom autoloaders, if needed.
Because they’re all registered through
[spl\_autoload\_register](https://www.php.net/manual/en/function.spl-autoload-register.php),
they work in sequence and don’t get in each other’s way.

The autoloader is always active, being registered with `spl_autoload_register()` at the
beginning of the framework’s execution.

Important

You should always be careful about the case of filenames. Many
developers develop on case-insensitive file systems on Windows or macOS.
However, most server environments use case-sensitive file systems. If the
file name case is incorrect, the autoloader cannot find the file on the
server.

## [Configuration](#id3)[](#configuration "Link to this heading")

Initial configuration is done in **app/Config/Autoload.php**. This file contains two primary
arrays: one for the classmap, and one for PSR-4 compatible namespaces.

### [Namespaces](#id4)[](#namespaces "Link to this heading")

The recommended method for organizing your classes is to create one or more namespaces
for your application’s files.

The `$psr4` array in the configuration file allows you to map the namespace to the directory
those classes can be found in:

```
<?php

namespace Config;

use CodeIgniter\Config\AutoloadConfig;

class Autoload extends AutoloadConfig
{
    // ...
    public $psr4 = [
        APP_NAMESPACE => APPPATH,
    ];

    // ...
}
```

The key of each row is the namespace itself. This does not need a trailing back slash.
The value is the location to the directory the classes can be found in.

By default, the namespace `App` is located in the **app** directory, and the
namespace `Config` is located in the **app/Config** directory.

If you create class files in the locations and according to [PSR-4](https://www.php-fig.org/psr/psr-4/), the autoloader
will autoload them.

### [Confirming Namespaces](#id5)[](#confirming-namespaces "Link to this heading")

You can check the namespace configuration by `spark namespaces` command:

```
php spark namespaces
```

### [Application Namespace](#id6)[](#application-namespace "Link to this heading")

By default, the application directory is namespace to the `App` namespace. You must namespace the controllers,
libraries, or models in the application directory, and they will be found under the `App` namespace.

#### Config Namespace[](#config-namespace "Link to this heading")

Config files are namespaced in the `Config` namespace, not in `App\Config` as you might
expect. This allows the core system files to always be able to locate them, even when the application
namespace has changed.

Note

Since v4.5.3 appstarter, the `Config\\` namespace has been added to
**composer.json**’s `autoload.psr-4`.

#### Changing App Namespace[](#changing-app-namespace "Link to this heading")

You may change this namespace by editing the **app/Config/Constants.php** file and setting the
new namespace value under the `APP_NAMESPACE` setting:

```
defined('APP_NAMESPACE') || define('APP_NAMESPACE', 'App');
```

And if you use Composer autoloader, you also need to change the `App` namespace
in your **composer.json**, and run `composer dump-autoload`.

```
{
    ...
    "autoload": {
        "psr-4": {
            "App\\": "app/"    <-- Change
        },
        ...
    },
    ...
}
```

Note

Since v4.5.0 appstarter, the `App\\` namespace has been added to
**composer.json**’s `autoload.psr-4`. If your **composer.json** does not
have it, adding it may improve your app’s autoloading performance.

You will need to modify any existing files that are referencing the current namespace.

### [Classmap](#id7)[](#classmap "Link to this heading")

If you use third-party libraries that are not Composer packages and are not namespaced,
you can load those classes using the classmap:

```
<?php

namespace Config;

use CodeIgniter\Config\AutoloadConfig;

class Autoload extends AutoloadConfig
{
    // ...
    public $classmap = [
        'Markdown' => APPPATH . 'ThirdParty/markdown.php',
    ];

    // ...
}
```

The key of each row is the name of the class that you want to locate. The value is the path to locate it at.

## [Composer Support](#id8)[](#composer-support "Link to this heading")

Composer support is automatically initialized by default.

By default, it looks for Composer’s autoload file at
`ROOTPATH . 'vendor/autoload.php'`. If you need to change the location of that file for any reason, you can modify
the value defined in **app/Config/Constants.php**.

### [Priority of Autoloaders](#id9)[](#priority-of-autoloaders "Link to this heading")

If the same namespace is defined in both CodeIgniter and Composer, Composer’s
autoloader will be the first one to get a chance to locate the file.

Note

Prior to v4.5.0, if the same namespace was defined in both CodeIgniter and Composer, CodeIgniter’s autoloader was
the first one to get a chance to locate the file.

## [FileLocator Caching](#id10)[](#filelocator-caching "Link to this heading")

Added in version 4.5.0.

**FileLocator** is responsible for finding files or getting a classname from a file,
which cannot be achieved with PHP autoloading.

To improve its performance, FileLocator Caching has been implemented.

### [How It Works](#id11)[](#how-it-works "Link to this heading")

- Save the all found data by FileLocator into a cache file when destructing,
  if the cache data is updated.
- Restore cached data when instantiating if cached data is available.

The cached data are used permanently.

### [How to Delete Cached Data](#id12)[](#how-to-delete-cached-data "Link to this heading")

Once stored, the cached data never expire.

So if you add or remove files or change existing file paths, or namespaces, old
cached data will be returned and your app may not work properly.

In that case, you must manually delete the cache file. If you add a CodeIgniter
package via Composer, you also need to delete the cache file.

You can use the `spark cache:clear` command:

```
php spark cache:clear
```

Or simply delete the **writable/cache/FileLocatorCache** file.

Note

The `spark optimize` command clears the cache.

### [How to Enable FileLocator Caching](#id13)[](#how-to-enable-filelocator-caching "Link to this heading")

Set the following property to `true` in **app/Config/Optimize.php**:

```
public bool $locatorCacheEnabled = true;
```

Or you can enable it with the `spark optimize` command.

Note

This property cannot be overridden by
[environment variables](general__configuration.md#configuration-classes-and-environment-variables).

Warning

Do not use this option when running the app in the [Worker Mode](installation__worker_mode.md).
