# phpDocumentor » \Fuel\Core\Autoloader

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Autoloader.html

---

PublicProtectedPrivateInherited

- Methods
- [Reset the auto initialize state after an autoloader exception.

  ```
  _reset()
  ```](#_reset "_reset :: Reset the auto initialize state after an autoloader exception.")
- [Adds a classes load path.

  ```
  add_class()
  ```](#add_class "add_class :: Adds a classes load path.")
- [Adds multiple class paths to the load path.

  ```
  add_classes()
  ```](#add_classes "add_classes :: Adds multiple class paths to the load path.")
- [Add a namespace for which classes may be used without the namespace prefix and
  will be auto-aliased to the global namespace.

  ```
  add_core_namespace()
  ```](#add_core_namespace "add_core_namespace :: Add a namespace for which classes may be used without the namespace prefix and
  will be auto-aliased to the global namespace.")
- [Adds a namespace search path.

  ```
  add_namespace()
  ```](#add_namespace "add_namespace :: Adds a namespace search path.")
- [Adds an array of namespace paths.

  ```
  add_namespaces()
  ```](#add_namespaces "add_namespaces :: Adds an array of namespace paths.")
- [Aliases the given class into the given Namespace.

  ```
  alias_to_namespace()
  ```](#alias_to_namespace "alias_to_namespace :: Aliases the given class into the given Namespace.")
- [Loads a class.

  ```
  load()
  ```](#load "load :: Loads a class.")
- [Returns the namespace's path or false when it doesn't exist.

  ```
  namespace_path()
  ```](#namespace_path "namespace_path :: Returns the namespace's path or false when it doesn't exist.")
- [Register's the autoloader to the SPL autoload stack.

  ```
  register()
  ```](#register "register :: Register's the autoloader to the SPL autoload stack.")
- » Protected
- [Takes a class name and turns it into a path.

  ```
  class_to_path()
  ```](#class_to_path "class_to_path :: Takes a class name and turns it into a path.")
- [Returns the class with namespace prefix when available

  ```
  find_core_class()
  ```](#find_core_class "find_core_class :: Returns the class with namespace prefix when available")
- [Checks to see if the given class has a static \_init() method.

  ```
  init_class()
  ```](#init_class "init_class :: Checks to see if the given class has a static _init() method.")
- [deal with multibyte strings depending on the configuration
  (copy of Str::lower(), but external dependancies don't work in this class)

  ```
  lower()
  ```](#lower "lower :: deal with multibyte strings depending on the configuration
  (copy of Str::lower(), but external dependancies don't work in this class)")
- [Prepares a given path by making sure the directory separators are correct.

  ```
  prep_path()
  ```](#prep_path "prep_path :: Prepares a given path by making sure the directory separators are correct.")
- Properties
- » Protected
- [<p>whether to initialize a loaded class</p>

  ```
  $auto_initialize
  ```](#%24auto_initialize "$auto_initialize :: ")
- [<p>holds all the classes and paths</p>

  ```
  $classes
  ```](#%24classes "$classes :: ")
- [<p>list off namespaces of which classes will be aliased to global namespace</p>

  ```
  $core_namespaces
  ```](#%24core_namespaces "$core_namespaces :: ")
- [<p>the default path to look in if the class is not in a package</p>

  ```
  $default_path
  ```](#%24default_path "$default_path :: ")
- [<p>holds all the namespace paths</p>

  ```
  $namespaces
  ```](#%24namespaces "$namespaces :: ")
- [Holds all the PSR-0 compliant namespaces.

  ```
  $psr_namespaces
  ```](#%24psr_namespaces "$psr_namespaces :: Holds all the PSR-0 compliant namespaces.")

The Autoloader is responsible for all class loading.

It allows you to define
different load paths based on namespaces. It also lets you set explicit paths
for classes to be loaded from.

|  |  |
| --- | --- |
| package | [Fuel](api__packages__Fuel.Core.md) |
| subpackage | Core |

### Methods

## Reset the auto initialize state after an autoloader exception.

```
_reset() 
```

This method is called by the exception handler, and is considered an
internal method!

|  |  |
| --- | --- |
| access | protected |

## Adds a classes load path.

```
add_class(string $class, string $path) : void
```

Any class added here will not be searched for
but explicitly loaded from the path.

### Parameters

#### $class

`string`

the class name

#### $path

`string`

the path to the class file

## Adds multiple class paths to the load path.

```
add_classes(array $classes) : void
```

See {@see Autoloader::add\_class}.

### Parameters

#### $classes

`array`

the class names and paths

## Add a namespace for which classes may be used without the namespace prefix and will be auto-aliased to the global namespace.

```
add_core_namespace(string $namespace, bool $prefix) : void
```

Prefixing the classes will overwrite core classes and previously added namespaces.

### Parameters

#### $namespace

`string`

#### $prefix

`bool`

## Adds a namespace search path.

```
add_namespace(string $namespace, string $path, bool $psr) : void
```

Any class in the given namespace will be
looked for in the given path.

### Parameters

#### $namespace

`string`

the namespace

#### $path

`string`

the path

#### $psr

`bool`

whether this is a PSR-0 compliant class

## Adds an array of namespace paths.

```
add_namespaces(array $namespaces, bool $prepend) : void
```

See {add\_namespace}.

### Parameters

#### $namespaces

`array`

the namespaces

#### $prepend

`bool`

whether to prepend the namespace to the search path

## Aliases the given class into the given Namespace.

```
alias_to_namespace(string $class, string $namespace) 
```

By default it will
add it to the global namespace.

```
Autoloader::alias_to_namespace('Foo\\Bar');
Autoloader::alias_to_namespace('Foo\\Bar', '\\Baz');
```

### Parameters

#### $class

`string`

the class name

#### $namespace

`string`

the namespace to alias to

## Loads a class.

```
load(string $class) : bool
```

### Parameters

#### $class

`string`

Class to load

### Returns

`bool`If it loaded the class

## Returns the namespace's path or false when it doesn't exist.

```
namespace_path(string $namespace) : array | bool
```

### Parameters

#### $namespace

`string`

the namespace to get the path for

### Returns

`array``bool`the namespace path or false

## Register's the autoloader to the SPL autoload stack.

```
register() : void
```

## Takes a class name and turns it into a path.

```
class_to_path(string $class, bool $psr) : string
```

It follows the PSR-0
standard, except for makes the entire path lower case, unless you
tell it otherwise.

Note: This does not check if the file exists...just gets the path

### Parameters

#### $class

`string`

Class name

#### $psr

`bool`

Whether this is a PSR-0 compliant class

### Returns

`string`Path for the class

## Returns the class with namespace prefix when available

```
find_core_class(string $class) : bool | string
```

### Parameters

#### $class

`string`

### Returns

`bool``string`

## Checks to see if the given class has a static \_init() method.

```
init_class(string $class, string $file) 
```

If so then
it calls it.

### Parameters

#### $class

`string`

the class name

#### $file

`string`

the file containing the class to include

### Exceptions

|  |  |
| --- | --- |
| `\Exception` |  |
| `\FuelException` |  |

## deal with multibyte strings depending on the configuration (copy of Str::lower(), but external dependancies don't work in this class)

```
lower(string $str) : string
```

### Parameters

#### $str

`string`

string to convert to lowercase

### Returns

`string`converted string

## Prepares a given path by making sure the directory separators are correct.

```
prep_path(string $path) : string
```

### Parameters

#### $path

`string`

Path to prepare

### Returns

`string`Prepped path

### Properties

## <p>whether to initialize a loaded class</p>

```
$auto_initialize : bool
```

## <p>holds all the classes and paths</p>

```
$classes : array
```

## <p>list off namespaces of which classes will be aliased to global namespace</p>

```
$core_namespaces : array
```

## <p>the default path to look in if the class is not in a package</p>

```
$default_path : array
```

## <p>holds all the namespace paths</p>

```
$namespaces : array
```

## Holds all the PSR-0 compliant namespaces.

```
$psr_namespaces : array
```

These namespaces should
be loaded according to the PSR-0 standard.

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
