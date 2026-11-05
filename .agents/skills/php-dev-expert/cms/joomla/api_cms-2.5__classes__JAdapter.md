# Joomla! CMS 2.5 API » \JAdapter

> **Fonte / Source:** https://api.joomla.org/cms-2.5/classes/JAdapter.html

---

# JAdapter

Extends [\JObject](api_cms-2.5__classes__JObject.md)

Adapter Class
Retains common adapter pattern functions
Class harvested from joomla.installer.installer

This class allows for simple but smart objects with get and set methods
and an internal error handler.

|  |  |
| --- | --- |
| package | Joomla.Platform |
| subpackage | Base |
| since | 11.1 |

## Methods

### \_\_construct

Class constructor, overridden in descendant classes.

```
__construct(mixed $properties = null)
```

inherited

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$properties
:   `mixed`Either and associative array or another
    object to set the initial properties of the object.

### \_\_toString

Magic method to convert the object to a string gracefully.

```
__toString() : string
```

inherited deprecated

|  |  |
| --- | --- |
| since | 11.1 |
| deprecated | 12.3 Classes should provide their own \_\_toString() implementation. |

#### Response

`string`The classname.

### def

Sets a default value if not alreay assigned

```
def(string $property, mixed $default = null) : mixed
```

inherited

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$property
:   `string`The name of the property.

$default
:   `mixed`The default value.

#### Response

`mixed`

### get

Returns a property of the object or the default value if the property is not set.

```
get(string $property, mixed $default = null) : mixed
```

inherited

|  |  |
| --- | --- |
| since | 11.1 |
| see | [\JObject::getProperties()](api_cms-2.5__classes__JObject.md#method_getProperties) |

#### Arguments

$property
:   `string`The name of the property.

$default
:   `mixed`The default value.

#### Response

`mixed`The value of the property.

### getAdapter

Return an adapter.

```
getAdapter(string $name, array $options = array()) : object
```

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$name
:   `string`Name of adapter to return

$options
:   `array`Adapter options

#### Response

`object`Adapter of type 'name' or false

### getDBO

Get the database connector object

```
getDBO() : \JDatabase
```

|  |  |
| --- | --- |
| since | 11.1 |

#### Response

`\JDatabase`Database connector object

### getError

Get the most recent error message.

```
getError(integer $i = null, boolean $toString = true) : string
```

inherited deprecated

|  |  |
| --- | --- |
| since | 11.1 |
| see | [\JError](api_cms-2.5__classes__JError.md) |
| deprecated | 12.3 JError has been deprecated |

#### Arguments

$i
:   `integer`Option error index.

$toString
:   `boolean`Indicates if JError objects should return their error message.

#### Response

`string`Error message

### getErrors

Return all errors, if any.

```
getErrors() : array
```

inherited deprecated

|  |  |
| --- | --- |
| since | 11.1 |
| see | [\JError](api_cms-2.5__classes__JError.md) |
| deprecated | 12.3 JError has been deprecated |

#### Response

`array`Array of error messages or JErrors.

### getProperties

Returns an associative array of object properties.

```
getProperties(boolean $public = true) : array
```

inherited

|  |  |
| --- | --- |
| since | 11.1 |
| see | [\JObject::get()](api_cms-2.5__classes__JObject.md#method_get) |

#### Arguments

$public
:   `boolean`If true, returns only the public properties.

#### Response

`array`

### loadAllAdapters

Loads all adapters.

```
loadAllAdapters(array $options = array()) : void
```

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$options
:   `array`Adapter options

### set

Modifies a property of the object, creating it if it does not already exist.

```
set(string $property, mixed $value = null) : mixed
```

inherited

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$property
:   `string`The name of the property.

$value
:   `mixed`The value of the property to set.

#### Response

`mixed`Previous value of the property.

### setAdapter

Set an adapter by name

```
setAdapter(string $name,  &$adapter = null, array $options = array()) : boolean
```

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$name
:   `string`Adapter name

$adapter

$options
:   `array`Adapter options

#### Response

`boolean`True if successful

### setError

Add an error message.

```
setError(string $error) : void
```

inherited deprecated

|  |  |
| --- | --- |
| since | 11.1 |
| see | [\JError](api_cms-2.5__classes__JError.md) |
| deprecated | 12.3 JError has been deprecated |

#### Arguments

$error
:   `string`Error message.

### setProperties

Set the object properties based on a named array/hash.

```
setProperties(mixed $properties) : boolean
```

inherited

|  |  |
| --- | --- |
| since | 11.1 |
| see | [\JObject::set()](api_cms-2.5__classes__JObject.md#method_set) |

#### Arguments

$properties
:   `mixed`Either an associative array or another object.

#### Response

`boolean`

### toString

Converts the object to a string (the class name).

```
toString() : string
```

inherited deprecated

|  |  |
| --- | --- |
| since | 11.1 |
| deprecated | 12.1 Use magic method \_\_toString() |
| see | [\JObject::\_\_toString()](api_cms-2.5__classes__JObject.md#method___toString) |

#### Response

`string`

## Properties

### \_adapters

Associative array of adapters

|  |  |
| --- | --- |
| since | 11.1 |

#### Type(s)

`array`

### \_adapterfolder

Adapter Folder

|  |  |
| --- | --- |
| since | 11.1 |

#### Type(s)

`string`

### \_classprefix

Adapter Class Prefix

|  |  |
| --- | --- |
| since | 11.1 |

#### Type(s)

`string`

### \_basepath

Base Path for the adapter instance

|  |  |
| --- | --- |
| since | 11.1 |

#### Type(s)

`string`

### \_db

Database Connector Object

|  |  |
| --- | --- |
| since | 11.1 |

#### Type(s)

`\JDatabase`

### \_errors

An array of error messages or Exception objects.

inherited deprecated

|  |  |
| --- | --- |
| since | 11.1 |
| see | [\JError](api_cms-2.5__classes__JError.md) |
| deprecated | 12.3 JError has been deprecated |

#### Type(s)

`array`
