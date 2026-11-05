# Factories — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/concepts/factories.html

---

# Factories[](#factories "Link to this heading")

## [Introduction](#id2)[](#introduction "Link to this heading")

### [What are Factories?](#id3)[](#what-are-factories "Link to this heading")

Like [Services](concepts__services.md), **Factories** are an extension of autoloading that helps keep your code
concise yet optimal, without having to pass around object instances between classes.

Factories are similar to CodeIgniter 3’s `$this->load` in the following points:

- Load a class
- Share the loaded class instance

At its
simplest, Factories provide a common way to create a class instance and access it from
anywhere. This is a great way to reuse object states and reduce memory load from keeping
multiple instances loaded across your app.

Any class can be loaded by Factories, but the best examples are those classes that are used
to work on or transmit common data. The framework itself uses Factories internally, e.g., to
make sure the correct configuration is loaded when using the `Config` class.

### [Differences from Services](#id4)[](#differences-from-services "Link to this heading")

Factories require a concrete class name to instantiate and do not have code to create instances.

So, Factories are not good for creating a complex instance that needs many dependencies,
and you cannot change the class of the instance to be returned.

On the other hand, Services have code to create instances, so it can create a complex instance
that needs other services or class instances. When you get a service, Services require a service name,
not a class name, so the returned instance can be changed without changing the client code.

## [Loading Classes](#id5)[](#loading-classes "Link to this heading")

### [Loading a Class](#id6)[](#loading-a-class "Link to this heading")

Take a look at **Models** as an example. You can access the Factory specific to Models
by using the magic static method of the Factories class, `Factories::models()`.

The static method name is called *component*.

#### [Passing Classname without Namespace](#id7)[](#passing-classname-without-namespace "Link to this heading")

If you pass a classname without a namespace, Factories first searches in the
`App` namespace for the path corresponding to the magic static method name.
`Factories::models()` searches the **app/Models** directory.

##### Passing Short Classname[](#passing-short-classname "Link to this heading")

In the following code, if you have `App\Models\UserModel`, the instance will be returned:

```
<?php

use CodeIgniter\Config\Factories;

$users = Factories::models('UserModel');
```

If you don’t have `App\Models\UserModel`, it searches for `Models\UserModel` in all namespaces.

Next time you ask for the same class anywhere in your code, Factories will be sure
you get back the instance as before:

```
<?php

use CodeIgniter\Config\Factories;

class SomeOtherClass
{
    public function someFunction()
    {
        $users = Factories::models('UserModel');

        // ...
    }
}
```

##### Passing Short Classname with Sub-directories[](#passing-short-classname-with-sub-directories "Link to this heading")

If you want to load a class in sub directories, you use the `/` as a separator.
The following code loads **app/Libraries/Sub/SubLib.php** if it exists:

```
use CodeIgniter\Config\Factories;

$lib = Factories::libraries('Sub/SubLib');
```

#### [Passing Fully Qualified Classname](#id8)[](#passing-fully-qualified-classname "Link to this heading")

You could also request a fully qualified classname:

```
use CodeIgniter\Config\Factories;

$users = Factories::models('Blog\Models\UserModel');
// Or
$users = Factories::models(\Blog\Models\UserModel::class);
```

It returns the instance of `Blog\Models\UserModel` if it exists.

Note

Prior to v4.4.0, when you requested a fully qualified classname,
if you had only `Blog\Models\UserModel`, the instance would be returned.
But if you had both `App\Models\UserModel` and `Blog\Models\UserModel`,
the instance of `App\Models\UserModel` would be returned.

If you wanted to get `Blog\Models\UserModel`, you needed to disable the
option `preferApp`:

```
use CodeIgniter\Config\Factories;

$users = Factories::models('Blog\Models\UserModel', ['preferApp' => false]);
```

## [Convenience Functions](#id9)[](#convenience-functions "Link to this heading")

Two shortcut functions for Factories have been provided. These functions are always available.

### [config()](#id10)[](#config "Link to this heading")

The first is [`config()`](general__common_functions.md#config "config") which returns a new instance of a Config class. The only required parameter is the class name:

```
<?php

$appConfig = config('App');

// The code above is the same as the code below.
$appConfig = \CodeIgniter\Config\Factories::config('App');
```

### [model()](#id11)[](#model "Link to this heading")

The second function, [`model()`](general__common_functions.md#model "model") returns a new instance of a Model class. The only required parameter is the class name:

```
<?php

$user = model('UserModel');

// The code above is the same as the code below.
$user = \CodeIgniter\Config\Factories::models('UserModel');
```

## [Defining Classname to be Loaded](#id12)[](#defining-classname-to-be-loaded "Link to this heading")

Added in version 4.4.0.

You could define a classname to be loaded before loading the class with
the `Factories::define()` method:

```
use CodeIgniter\Config\Factories;

Factories::define('models', 'Myth\Auth\Models\UserModel', 'App\Models\UserModel');
```

The first parameter is a component. The second parameter is a class alias
(the first parameter to Factories magic static method), and the third parameter
is the true fully qualified classname to be loaded.

After that, if you load `Myth\Auth\Models\UserModel` with Factories, the
`App\Models\UserModel` instance will be returned:

```
$users = model('Myth\Auth\Models\UserModel');
```

## [Factory Parameters](#id13)[](#factory-parameters "Link to this heading")

`Factories` takes as a second parameter an array of option values (described below).
These directives will override the default options configured for each component.

Any more parameters passed at the same time will be forwarded on to the class
constructor, making it easy to configure your class instance on-the-fly. For example, say
your app uses a separate database for authentication and you want to be sure that any attempts
to access user records always go through that connection:

```
<?php

use CodeIgniter\Config\Factories;

$conn  = db_connect('auth');
$users = Factories::models('UserModel', [], $conn);
```

Now any time the `UserModel` is loaded from `Factories` it will in fact be returning a
class instance that uses the alternate database connection.

## [Factories Options](#id14)[](#factories-options "Link to this heading")

The default behavior might not work for every component. For example, say your component
name and its path do not align, or you need to limit instances to a certain type of class.
Each component takes a set of options to direct discovery and instantiation.

| Key | Type | Description | Default |
| --- | --- | --- | --- |
| component | string or null | The name of the component (if different than the static method). This can be used to alias one component to another. | `null` (defaults to the component name) |
| path | string or null | The relative path within the namespace/folder to look for classes. | `null` (defaults to the component name, but makes the first character uppercase) |
| instanceOf | string or null | A required class name to match on the returned instance. | `null` (no filtering) |
| getShared | boolean | Whether to return a shared instance of the class or load a fresh one. | `true` |
| preferApp | boolean | Whether a class with the same basename in the App namespace overrides other explicit class requests. | `true` |

Note

Since v4.4.0, `preferApp` works only when you request
[a classname without a namespace](#factories-passing-classname-without-namespace).

## [Factories Behavior](#id15)[](#factories-behavior "Link to this heading")

Options can be applied in one of three ways (listed in ascending priority):

- A configuration class `Config\Factory` with a property that matches the name of a component.
- The static method `Factories::setOptions()`.
- Passing options directly at call time with a parameter.

### [Configurations](#id16)[](#configurations "Link to this heading")

To set default component options, create a new Config files at **app/Config/Factory.php**
that supplies options as an array property that matches the name of the component.

#### [Example: Filters Factories](#id17)[](#example-filters-factories "Link to this heading")

For example, if you want to create **Filters** by Factories, the component name wll be `filters`.
And if you want to ensure that each filter is an instance of a class which implements CodeIgniter’s `FilterInterface`,
your **app/Config/Factory.php** file might look like this:

```
<?php

namespace Config;

use CodeIgniter\Config\Factory as BaseFactory;
use CodeIgniter\Filters\FilterInterface;

class Factory extends BaseFactory
{
    public $filters = [
        'instanceOf' => FilterInterface::class,
    ];
}
```

Now you can create a filter with code like `Factories::filters('SomeFilter')`,
and the returned instance will surely be a CodeIgniter’s filter.

This would prevent conflict of an third-party module which happened to have an
unrelated `Filters` path in its namespace.

#### [Example: Library Factories](#id18)[](#example-library-factories "Link to this heading")

If you want to load your library classes in the **app/Libraries** directory with
`Factories::library('SomeLib')`, the path Libraries is different from the
default path Library.

In this case, your **app/Config/Factory.php** file will look like this:

```
<?php

namespace Config;

use CodeIgniter\Config\Factory as BaseFactory;

class Factory extends BaseFactory
{
    public $library = [
        'path' => 'Libraries',
    ];
}
```

Now you can load your libraries with the `Factories::library()` method:

```
use CodeIgniter\Config\Factories;

$someLib = Factories::library('SomeLib');
```

### [setOptions Method](#id19)[](#setoptions-method "Link to this heading")

The `Factories` class has a static method to allow runtime option configuration: simply
supply the desired array of options using the `setOptions()` method and they will be
merged with the default values and stored for the next call:

```
<?php

use CodeIgniter\Config\Factories;
use CodeIgniter\Filters\FilterInterface;

Factories::setOptions('filters', [
    'instanceOf' => FilterInterface::class,
    'prefersApp' => false,
]);
```

### [Parameter Options](#id20)[](#parameter-options "Link to this heading")

`Factories`’s magic static call takes as a second parameter an array of option values.
These directives will override the stored options configured for each component and can be
used at call time to get exactly what you need. The input should be an array with option
names as keys to each overriding value.

For example, by default `Factories` assumes that you want to locate a shared instance of
a component. By adding a second parameter to the magic static call, you can control whether
that single call will return a new or shared instance:

```
use CodeIgniter\Config\Factories;

$users = Factories::models('UserModel', ['getShared' => true]);  // Default; will always be the same instance
$other = Factories::models('UserModel', ['getShared' => false]); // Will always create a new instance
```

## [Config Caching](#id21)[](#config-caching "Link to this heading")

Added in version 4.4.0.

Important

Do not use this feature unless you have carefully read this section
and understand how this feature works. Otherwise, your application will not
function properly.

To improve performance, Config Caching has been implemented.

### [Prerequisite](#id22)[](#prerequisite "Link to this heading")

Important

Using this feature when the prerequisites are not met will prevent
CodeIgniter from operating properly. Do not use this feature in such cases.

- To use this feature, the properties of all Config objects instantiated in
  Factories must not be modified after instantiation. Put another way, the Config
  classes must be an immutable or readonly classes.
- By default, every Config class that is cached must implement `__set_state()`
  method.

### [How It Works](#id23)[](#how-it-works "Link to this heading")

Important

Once cached, configuration values are never changed until the cache
is deleted, even if the configuration file or **.env** is changed.

- Save the all Config instances in Factories into a cache file before shutdown,
  if the state of the Config instances in Factories changes.
- Restore cached Config instances before CodeIgniter initialization if a cache
  is available.

Simply put, all Config instances held by Factories are cached immediately prior
to shutdown, and the cached instances are used permanently.

### [How to Update Config Values](#id24)[](#how-to-update-config-values "Link to this heading")

Once stored, the cached versions never expire. Changing a existing Config file
(or changing Environment Variables for it) will not update the cache nor the Config
values.

So if you want to update Config values, update Config files or Environment Variables
for them, and you must manually delete the cache file.

You can use the `spark cache:clear` command:

```
php spark cache:clear
```

Or simply delete the **writable/cache/FactoriesCache\_config** file.

Note

Since v4.5.0, the `spark optimize` command clears the cache.

### [How to Enable Config Caching](#id25)[](#how-to-enable-config-caching "Link to this heading")

Added in version 4.5.0.

Set the following property to `true` in **app/Config/Optimize.php**:

```
public bool $configCacheEnabled = true;
```

Or you can enable this with the `spark optimize` command.

Note

This property cannot be overridden by
[environment variables](general__configuration.md#configuration-classes-and-environment-variables).

Warning

Do not use this option when running the app in the [Worker Mode](installation__worker_mode.md).
