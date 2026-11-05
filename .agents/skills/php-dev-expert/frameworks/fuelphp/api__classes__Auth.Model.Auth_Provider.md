# phpDocumentor » \Auth\Model\Auth_Provider

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Auth.Model.Auth_Provider.html

---

PublicProtectedPrivateInherited

- Methods
- [Allow for getter, setter and unset methods

  ```
  __call()
  ```](#__call "__call :: Allow for getter, setter and unset methods")
- [\_\_callStatic()

  ```
  __callStatic()
  ```](#__callStatic "__callStatic :: ")
- [Allow object cloning to new object

  ```
  __clone()
  ```](#__clone "__clone :: Allow object cloning to new object")
- [Constructor

  ```
  __construct()
  ```](#__construct "__construct :: Constructor")
- [Fetch a property or relation

  ```
  __get()
  ```](#__get "__get :: Fetch a property or relation")
- [Check whether a property exists, only return true for table columns, relations, eav and custom data

  ```
  __isset()
  ```](#__isset "__isset :: Check whether a property exists, only return true for table columns, relations, eav and custom data")
- [Set a property or relation

  ```
  __set()
  ```](#__set "__set :: Set a property or relation")
- [Empty a property, relation or custom data

  ```
  __unset()
  ```](#__unset "__unset :: Empty a property, relation or custom data")
- [init the class

  ```
  _init()
  ```](#_init "_init :: init the class")
- [Fetch or set relations on this object
  To be used only after having fetched them from the database!

  ```
  _relate()
  ```](#_relate "_relate :: Fetch or set relations on this object
  To be used only after having fetched them from the database!")
- [Update the original setting for this object

  ```
  _update_original()
  ```](#_update_original "_update_original :: Update the original setting for this object")
- [Update the original relations for this object

  ```
  _update_original_relations()
  ```](#_update_original_relations "_update_original_relations :: Update the original relations for this object")
- [Attempt to retrieve an earlier loaded object

  ```
  cached_object()
  ```](#cached_object "cached_object :: Attempt to retrieve an earlier loaded object")
- [Get a defined condition for this class

  ```
  condition()
  ```](#condition "condition :: Get a defined condition for this class")
- [Fetch the database connection name to use

  ```
  connection()
  ```](#connection "connection :: Fetch the database connection name to use")
- [Count entries, optionally only those matching the $options

  ```
  count()
  ```](#count "count :: Count entries, optionally only those matching the $options")
- [current()

  ```
  current()
  ```](#current "current :: ")
- [Delete current object

  ```
  delete()
  ```](#delete "delete :: Delete current object")
- [Disable an observer event

  ```
  disable_event()
  ```](#disable_event "disable_event :: Disable an observer event")
- [Enable a defined observer

  ```
  enable_event()
  ```](#enable_event "enable_event :: Enable a defined observer")
- [Find one or more entries

  ```
  find()
  ```](#find "find :: Find one or more entries")
- [Flush the object cache

  ```
  flush_cache()
  ```](#flush_cache "flush_cache :: Flush the object cache")
- [Create a new model instance

  ```
  forge()
  ```](#forge "forge :: Create a new model instance")
- [Freeze the object to disallow changing it or saving it

  ```
  freeze()
  ```](#freeze "freeze :: Freeze the object to disallow changing it or saving it")
- [Allow populating this object from an array, and any related objects

  ```
  from_array()
  ```](#from_array "from_array :: Allow populating this object from an array, and any related objects")
- [Check whether the object was frozen

  ```
  frozen()
  ```](#frozen "frozen :: Check whether the object was frozen")
- [Get

  ```
  get()
  ```](#get "get :: Get")
- [Generates an array with keys new & old that contain ONLY the values that differ between the original and
  the current unsaved model.

  ```
  get_diff()
  ```](#get_diff "get_diff :: Generates an array with keys new & old that contain ONLY the values that differ between the original and
  the current unsaved model.")
- [Returns a list of properties and their information with \_to\_array\_exclude
  properties removed.

  ```
  get_filtered_properties()
  ```](#get_filtered_properties "get_filtered_properties :: Returns a list of properties and their information with _to_array_exclude
  properties removed.")
- [Provide the identifying details in the form of an array

  ```
  get_pk_assoc()
  ```](#get_pk_assoc "get_pk_assoc :: Provide the identifying details in the form of an array")
- [Returns a list of properties that will be excluded when to\_array() is used.

  ```
  get_to_array_exclude()
  ```](#get_to_array_exclude "get_to_array_exclude :: Returns a list of properties that will be excluded when to_array() is used.")
- [Compare current state with the retrieved state

  ```
  is_changed()
  ```](#is_changed "is_changed :: Compare current state with the retrieved state")
- [is\_fetched()

  ```
  is_fetched()
  ```](#is_fetched "is_fetched :: ")
- [is\_new()

  ```
  is_new()
  ```](#is_new "is_new :: ")
- [key()

  ```
  key()
  ```](#key "key :: ")
- [Find the maximum

  ```
  max()
  ```](#max "max :: Find the maximum")
- [Find the minimum

  ```
  min()
  ```](#min "min :: Find the minimum")
- [next()

  ```
  next()
  ```](#next "next :: ")
- [Calls all observers for the current event

  ```
  observe()
  ```](#observe "observe :: Calls all observers for the current event")
- [Get the class's observers and what they observe

  ```
  observers()
  ```](#observers "observers :: Get the class's observers and what they observe")
- [offsetExists()

  ```
  offsetExists()
  ```](#offsetExists "offsetExists :: ")
- [offsetGet()

  ```
  offsetGet()
  ```](#offsetGet "offsetGet :: ")
- [offsetSet()

  ```
  offsetSet()
  ```](#offsetSet "offsetSet :: ")
- [offsetUnset()

  ```
  offsetUnset()
  ```](#offsetUnset "offsetUnset :: ")
- [Get the primary key(s) of this class

  ```
  primary_key()
  ```](#primary_key "primary_key :: Get the primary key(s) of this class")
- [Get the class's properties

  ```
  properties()
  ```](#properties "properties :: Get the class's properties")
- [Fetches a property description array, or specific data from it

  ```
  property()
  ```](#property "property :: Fetches a property description array, or specific data from it")
- [Creates a new query with optional settings up front

  ```
  query()
  ```](#query "query :: Creates a new query with optional settings up front")
- [Register an observer

  ```
  register_observer()
  ```](#register_observer "register_observer :: Register an observer")
- [Get the name of the class that defines a relation

  ```
  related_class()
  ```](#related_class "related_class :: Get the name of the class that defines a relation")
- [Get the class's relations

  ```
  relations()
  ```](#relations "relations :: Get the class's relations")
- [Reset values to those gotten from the database

  ```
  reset()
  ```](#reset "reset :: Reset values to those gotten from the database")
- [rewind()

  ```
  rewind()
  ```](#rewind "rewind :: ")
- [Enable sanitization mode in the object

  ```
  sanitize()
  ```](#sanitize "sanitize :: Enable sanitization mode in the object")
- [Returns the current sanitization state of the object

  ```
  sanitized()
  ```](#sanitized "sanitized :: Returns the current sanitization state of the object")
- [Save the object and it's relations, create when necessary

  ```
  save()
  ```](#save "save :: Save the object and it's relations, create when necessary")
- [Set

  ```
  set()
  ```](#set "set :: Set")
- [Sets the connection to use for this model.

  ```
  set_connection()
  ```](#set_connection "set_connection :: Sets the connection to use for this model.")
- [Method for use with Fieldset::add\_model()

  ```
  set_form_fields()
  ```](#set_form_fields "set_form_fields :: Method for use with Fieldset::add_model()")
- [Sets the write connection to use for this model.

  ```
  set_write_connection()
  ```](#set_write_connection "set_write_connection :: Sets the write connection to use for this model.")
- [Get the table name for this class

  ```
  table()
  ```](#table "table :: Get the table name for this class")
- [Allow converting this object to a real object

  ```
  to_object()
  ```](#to_object "to_object :: Allow converting this object to a real object")
- [Unfreeze the object to allow changing it or saving it again

  ```
  unfreeze()
  ```](#unfreeze "unfreeze :: Unfreeze the object to allow changing it or saving it again")
- [Unregister an observer

  ```
  unregister_observer()
  ```](#unregister_observer "unregister_observer :: Unregister an observer")
- [Disable sanitization mode in the object

  ```
  unsanitize()
  ```](#unsanitize "unsanitize :: Disable sanitization mode in the object")
- [valid()

  ```
  valid()
  ```](#valid "valid :: ")
- [Fetch the model's views

  ```
  views()
  ```](#views "views :: Fetch the model's views")
- » Protected
- [EAV attribute getter.

  ```
  _get_eav()
  ```](#_get_eav "_get_eav :: EAV attribute getter.")
- [Sanitizatize a data value

  ```
  _sanitize()
  ```](#_sanitize "_sanitize :: Sanitizatize a data value")
- [EAV attribute setter

  ```
  _set_eav()
  ```](#_set_eav "_set_eav :: EAV attribute setter")
- [Adds the primary keys in where clauses to the given query.

  ```
  add_primary_keys_to_where()
  ```](#add_primary_keys_to_where "add_primary_keys_to_where :: Adds the primary keys in where clauses to the given query.")
- [Save using INSERT

  ```
  create()
  ```](#create "create :: Save using INSERT")
- [Deletes this model instance from the database.

  ```
  delete_self()
  ```](#delete_self "delete_self :: Deletes this model instance from the database.")
- [Allows subclasses to more easily define if a relation can be cascade deleted or not.

  ```
  should_cascade_delete()
  ```](#should_cascade_delete "should_cascade_delete :: Allows subclasses to more easily define if a relation can be cascade deleted or not.")
- [Save using UPDATE

  ```
  update()
  ```](#update "update :: Save using UPDATE")
- Properties
- » Protected
- [<p>belongs\_to relationships</p>

  ```
  $_belongs_to
  ```](#%24_belongs_to "$_belongs_to :: ")
- [<p>array of fetched objects</p>

  ```
  $_cached_objects
  ```](#%24_cached_objects "$_cached_objects :: ")
- [<p>connection to use</p>

  ```
  $_connection
  ```](#%24_connection "$_connection :: ")
- [<p>storage for custom properties on this object</p>

  ```
  $_custom_data
  ```](#%24_custom_data "$_custom_data :: ")
- [<p>keeps the current state of the object</p>

  ```
  $_data
  ```](#%24_data "$_data :: ")
- [$\_data\_relations

  ```
  $_data_relations
  ```](#%24_data_relations "$_data_relations :: ")
- [<p>disabled observer events</p>

  ```
  $_disabled_events
  ```](#%24_disabled_events "$_disabled_events :: ")
- [<p>keeps to object frozen</p>

  ```
  $_frozen
  ```](#%24_frozen "$_frozen :: ")
- [<p>keeps track of whether it's a new object</p>

  ```
  $_is_new
  ```](#%24_is_new "$_is_new :: ")
- [$\_iterable

  ```
  $_iterable
  ```](#%24_iterable "$_iterable :: ")
- [<p>defined observers</p>

  ```
  $_observers
  ```](#%24_observers "$_observers :: ")
- [<p>cached observers</p>

  ```
  $_observers_cached
  ```](#%24_observers_cached "$_observers_cached :: ")
- [<p>keeps a copy of the object as it was retrieved from the database</p>

  ```
  $_original
  ```](#%24_original "$_original :: ")
- [<p>keeps a copy of the relation ids that were originally retrieved from the database</p>

  ```
  $_original_relations
  ```](#%24_original_relations "$_original_relations :: ")
- [<p>name or names of the primary keys</p>

  ```
  $_primary_key
  ```](#%24_primary_key "$_primary_key :: ")
- [<p>model properties</p>

  ```
  $_properties
  ```](#%24_properties "$_properties :: ")
- [<p>cached properties</p>

  ```
  $_properties_cached
  ```](#%24_properties_cached "$_properties_cached :: ")
- [<p>relationships</p>

  ```
  $_relations_cached
  ```](#%24_relations_cached "$_relations_cached :: ")
- [<p>keeps track of relations that need to be reset before saving the new ones</p>

  ```
  $_reset_relations
  ```](#%24_reset_relations "$_reset_relations :: ")
- [<p>If this is a records data will be sanitized on get</p>

  ```
  $_sanitization_enabled
  ```](#%24_sanitization_enabled "$_sanitization_enabled :: ")
- [<p>table name to overwrite assumption</p>

  ```
  $_table_name
  ```](#%24_table_name "$_table_name :: ")
- [<p>cached tables</p>

  ```
  $_table_names_cached
  ```](#%24_table_names_cached "$_table_names_cached :: ")
- [<p>name or columns that need to be excluded from any to\_array() result</p>

  ```
  $_to_array_exclude
  ```](#%24_to_array_exclude "$_to_array_exclude :: ")
- [<p>array of valid relation types</p>

  ```
  $_valid_relations
  ```](#%24_valid_relations "$_valid_relations :: ")
- [<p>view name when used</p>

  ```
  $_view
  ```](#%24_view "$_view :: ")
- [<p>cached properties</p>

  ```
  $_views_cached
  ```](#%24_views_cached "$_views_cached :: ")
- [<p>write connection to use</p>

  ```
  $_write_connection
  ```](#%24_write_connection "$_write_connection :: ")
- [<p>global array to track circular references in to\_array()</p>

  ```
  $to_array_references
  ```](#%24to_array_references "$to_array_references :: ")

### Methods

## Allow for getter, setter and unset methods

```
__call(string $method, array $args) : mixed
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::\_\_call() |

### Parameters

#### $method

`string`

#### $args

`array`

### Exceptions

|  |  |
| --- | --- |
| `\BadMethodCallException` |  |

### Returns

`mixed`

## \_\_callStatic()

```
__callStatic($method, $args) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::\_\_callStatic() |

### Parameters

#### $method

#### $args

## Allow object cloning to new object

```
__clone() 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::\_\_clone() |

## Constructor

```
__construct($data, $new, $view, $cache) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::\_\_construct() |

### Parameters

#### $data

array

#### $new

bool

#### $view

#### $cache

## Fetch a property or relation

```
__get($property) : mixed
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::\_\_get() |

### Parameters

#### $property

string

### Returns

`mixed`

## Check whether a property exists, only return true for table columns, relations, eav and custom data

```
__isset(string $property) : bool
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::\_\_isset() |

### Parameters

#### $property

`string`

### Returns

`bool`

## Set a property or relation

```
__set($property, $value) : \Orm\Model
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::\_\_set() |

### Parameters

#### $property

string

#### $value

mixed

### Returns

`\Orm\Model`

## Empty a property, relation or custom data

```
__unset(string $property) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::\_\_unset() |

### Parameters

#### $property

`string`

## init the class

```
_init() 
```

## Fetch or set relations on this object To be used only after having fetched them from the database!

```
_relate(array | bool | null $rels) : void | array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::\_relate() |

### Parameters

#### $rels

`array``bool``null`

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` | Invalid input for \_relate(), should be an array |
| `\Orm\FrozenObject` | No changes allowed |

### Returns

`void``array`

## Update the original setting for this object

```
_update_original(array | null $original) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::\_update\_original() |

### Parameters

#### $original

`array``null`

## Update the original relations for this object

```
_update_original_relations($relations) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::\_update\_original\_relations() |

### Parameters

#### $relations

## Attempt to retrieve an earlier loaded object

```
cached_object(array | \Orm\Model $obj, null | string $class) : \Orm\Model | false
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::cached\_object() |

### Parameters

#### $obj

`array``\Orm\Model`

#### $class

`null``string`

### Returns

`\Orm\Model``false`

## Get a defined condition for this class

```
condition(string $type) : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::condition() |

### Parameters

#### $type

`string`

type of condition to return

### Returns

`array`

## Fetch the database connection name to use

```
connection(bool $writeable) : null | string
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::connection() |

### Parameters

#### $writeable

`bool`

if true return the writeable connection (if set)

### Returns

`null``string`

## Count entries, optionally only those matching the $options

```
count(array $options) : int
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::count() |

### Parameters

#### $options

array

### Returns

`int`

## current()

```
current() 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::current() |

## Delete current object

```
delete(mixed $cascade, bool $use_transaction) : \Orm\Model
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::delete() |

### Parameters

#### $cascade

`mixed`

null = use default config, bool = force/prevent cascade, array cascades only the relations that are in the array

#### $use\_transaction

`bool`

### Exceptions

|  |  |
| --- | --- |
| `\Exception` |  |

### Returns

`\Orm\Model`this instance as a new object without primary key(s)

## Disable an observer event

```
disable_event(string $event) : void
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::disable\_event() |

### Parameters

#### $event

`string`

event to disable

## Enable a defined observer

```
enable_event(string $event) : void
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::enable\_event() |

### Parameters

#### $event

`string`

class name of the observer (including namespace)

## Find one or more entries

```
find(int | null $id, array $options) : \Orm\Model | \Orm\Model[]
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::find() |

### Parameters

#### $id

`int``null`

#### $options

`array`

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` |  |

### Returns

`\Orm\Model``\Orm\Model[]`

## Flush the object cache

```
flush_cache(null | string | object $class) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::flush\_cache() |

### Parameters

#### $class

`null``string``object`

## Create a new model instance

```
forge($data, $new, $view, $cache) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::forge() |

### Parameters

#### $data

#### $new

#### $view

#### $cache

## Freeze the object to disallow changing it or saving it

```
freeze() 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::freeze() |

## Allow populating this object from an array, and any related objects

```
from_array(array $values) : \Orm\Model
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::from\_array() |

### Parameters

#### $values

`array`

assoc array with named values to store in the object

### Returns

`\Orm\Model`this instance as a new object without primary key(s)

## Check whether the object was frozen

```
frozen() : boolean
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::frozen() |

### Returns

`boolean`

## Get

```
get(string $property, array $conditions) : mixed
```

Inherited

Gets a property or
relation from the
object

|  |  |
| --- | --- |
| access | public |
| inherited\_from | \Orm\Model::get() |

### Parameters

#### $property

`string`

#### $conditions

`array`

### Returns

`mixed`

## Generates an array with keys new & old that contain ONLY the values that differ between the original and the current unsaved model.

```
get_diff() : array
```

Inherited

Note: relations are given as single or array of imploded pks

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::get\_diff() |

### Returns

`array`

## Returns a list of properties and their information with \_to\_array\_exclude properties removed.

```
get_filtered_properties() : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::get\_filtered\_properties() |

### Returns

`array`

## Provide the identifying details in the form of an array

```
get_pk_assoc() : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::get\_pk\_assoc() |

### Returns

`array`

## Returns a list of properties that will be excluded when to\_array() is used.

```
get_to_array_exclude() : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::get\_to\_array\_exclude() |

### Returns

`array`

## Compare current state with the retrieved state

```
is_changed(string | array $property) : bool
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::is\_changed() |

### Parameters

#### $property

`string``array`

### Exceptions

|  |  |
| --- | --- |
| `\OutOfBoundsException` |  |

### Returns

`bool`

## is\_fetched()

```
is_fetched($relation) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::is\_fetched() |

### Parameters

#### $relation

## is\_new()

```
is_new() 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::is\_new() |

## key()

```
key() 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::key() |

## Find the maximum

```
max($key) : bool | int
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::max() |

### Parameters

#### $key

mixed

### Returns

`bool``int`Maximum value or false

## Find the minimum

```
min($key) : object | array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::min() |

### Parameters

#### $key

mixed

### Returns

`object``array`

## next()

```
next() 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::next() |

## Calls all observers for the current event

```
observe($event) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::observe() |

### Parameters

#### $event

string

## Get the class's observers and what they observe

```
observers(string $specific, mixed $default) : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::observers() |

### Parameters

#### $specific

`string`

specific observer to retrieve info of, allows direct param access by using dot notation

#### $default

`mixed`

default return value when specific key wasn't found

### Returns

`array`

## offsetExists()

```
offsetExists($offset) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::offsetExists() |

### Parameters

#### $offset

## offsetGet()

```
offsetGet($offset) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::offsetGet() |

### Parameters

#### $offset

## offsetSet()

```
offsetSet($offset, $value) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::offsetSet() |

### Parameters

#### $offset

#### $value

## offsetUnset()

```
offsetUnset($offset) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::offsetUnset() |

### Parameters

#### $offset

## Get the primary key(s) of this class

```
primary_key() : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::primary\_key() |

### Returns

`array`

## Get the class's properties

```
properties() : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::properties() |

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` | Listing columns failed |

### Returns

`array`

## Fetches a property description array, or specific data from it

```
property(string $key, mixed $default) : mixed
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::property() |

### Parameters

#### $key

`string`

property or property.key

#### $default

`mixed`

return value when key not present

### Returns

`mixed`

## Creates a new query with optional settings up front

```
query($options) : \Orm\Query
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::query() |

### Parameters

#### $options

array

### Returns

`\Orm\Query`

## Register an observer

```
register_observer(string $name, mixed $options) : void
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::register\_observer() |

### Parameters

#### $name

`string`

class name of the observer (including namespace)

#### $options

`mixed`

observer options

## Get the name of the class that defines a relation

```
related_class($relation) : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::related\_class() |

### Parameters

#### $relation

string

### Returns

`array`

## Get the class's relations

```
relations(bool $specific) : \Orm\HasOne | \Orm\HasMany | \Orm\ManyMany | \Orm\Belongsto | \Orm\HasOne[] | \Orm\HasMany[] | \Orm\ManyMany[] | \Orm\Belongsto[]
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::relations() |

### Parameters

#### $specific

`bool`

### Returns

`\Orm\HasOne``\Orm\HasMany``\Orm\ManyMany``\Orm\Belongsto``\Orm\HasOne[]``\Orm\HasMany[]``\Orm\ManyMany[]``\Orm\Belongsto[]`

## Reset values to those gotten from the database

```
reset() 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::reset() |

## rewind()

```
rewind() 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::rewind() |

## Enable sanitization mode in the object

```
sanitize() : \Auth\Model\Auth_Provider
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::sanitize() |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Auth\Model\Auth_Provider`

## Returns the current sanitization state of the object

```
sanitized() : bool
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::sanitized() |

### Returns

`bool`

## Save the object and it's relations, create when necessary

```
save(mixed $cascade, $use_transaction) : bool
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::save() |

### Parameters

#### $cascade

`mixed`

null = use default config, bool = force/prevent cascade, array cascades only the relations that are in the array

#### $use\_transaction

### Returns

`bool`

## Set

```
set(string | array $property, string $value) : \Orm\Model
```

Inherited

Sets a property or
relation of the
object

|  |  |
| --- | --- |
| access | public |
| inherited\_from | \Orm\Model::set() |

### Parameters

#### $property

`string``array`

#### $value

`string`

in case $property is a string

### Exceptions

|  |  |
| --- | --- |
| `\FuelException` | Primary key on model cannot be changed |
| `\InvalidArgumentException` | You need to pass both a property name and a value to set() |
| `\Orm\FrozenObject` | No changes allowed |

### Returns

`\Orm\Model`

## Sets the connection to use for this model.

```
set_connection(string $connection) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::set\_connection() |

### Parameters

#### $connection

`string`

## Method for use with Fieldset::add\_model()

```
set_form_fields(\Orm\Fieldset $form, array | \Orm\Model $instance) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::set\_form\_fields() |

### Parameters

#### $form

`\Orm\Fieldset`

Fieldset instance to add fields to

#### $instance

`array``\Orm\Model`

Model instance or array for use to repopulate

## Sets the write connection to use for this model.

```
set_write_connection(string $connection) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::set\_write\_connection() |

### Parameters

#### $connection

`string`

## Get the table name for this class

```
table() : string
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::table() |

### Returns

`string`

## Allow converting this object to a real object

```
to_object($custom, $recurse) : object
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::to\_object() |

### Parameters

#### $custom

#### $recurse

### Returns

`object`

## Unfreeze the object to allow changing it or saving it again

```
unfreeze() 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::unfreeze() |

## Unregister an observer

```
unregister_observer(string $name) : void
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::unregister\_observer() |

### Parameters

#### $name

`string`

class name of the observer (including namespace)

## Disable sanitization mode in the object

```
unsanitize() : \Auth\Model\Auth_Provider
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::unsanitize() |
| fluent | This method is part of a fluent interface and will return the same instance |

### Returns

`\Auth\Model\Auth_Provider`

## valid()

```
valid() 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::valid() |

## Fetch the model's views

```
views() : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::views() |

### Exceptions

|  |  |
| --- | --- |
| `\InvalidArgumentException` | Database view is defined without columns |

### Returns

`array`

## EAV attribute getter.

```
_get_eav($attribute, $isset, $unset) : mixed
```

Inherited

Also deals with isset() and unset()

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::\_get\_eav() |

### Parameters

#### $attribute

#### $isset

#### $unset

### Exceptions

|  |  |
| --- | --- |
| `\OutOfBoundsException` | if the defined EAV relation does not exist or of the wrong type |

### Returns

`mixed`

## Sanitizatize a data value

```
_sanitize(string $field, mixed $value) : mixed
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::\_sanitize() |

### Parameters

#### $field

`string`

Name of the property that is being sanitized

#### $value

`mixed`

Value to sanitize

### Returns

`mixed`

## EAV attribute setter

```
_set_eav(string $attribute, string $value) : mixed
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::\_set\_eav() |

### Parameters

#### $attribute

`string`

#### $value

`string`

### Exceptions

|  |  |
| --- | --- |
| `\OutOfBoundsException` |  |

### Returns

`mixed`

## Adds the primary keys in where clauses to the given query.

```
add_primary_keys_to_where(\Orm\Query $query) 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::add\_primary\_keys\_to\_where() |

### Parameters

#### $query

`\Orm\Query`

## Save using INSERT

```
create() 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::create() |

## Deletes this model instance from the database.

```
delete_self() : bool
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::delete\_self() |

### Returns

`bool`

## Allows subclasses to more easily define if a relation can be cascade deleted or not.

```
should_cascade_delete(array $rel) : bool
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::should\_cascade\_delete() |

### Parameters

#### $rel

`array`

### Returns

`bool`False to stop the relation from being deleted. Works the same as the cascade\_delete property

## Save using UPDATE

```
update() 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::update() |

### Properties

## <p>belongs\_to relationships</p>

```
$_belongs_to : array
```

## <p>array of fetched objects</p>

```
$_cached_objects : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_cached\_objects |

## <p>connection to use</p>

```
$_connection : string
```

## <p>storage for custom properties on this object</p>

```
$_custom_data : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_custom\_data |

## <p>keeps the current state of the object</p>

```
$_data : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_data |

## $\_data\_relations

```
$_data_relations : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_data\_relations |

## <p>disabled observer events</p>

```
$_disabled_events : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_disabled\_events |

## <p>keeps to object frozen</p>

```
$_frozen : bool
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_frozen |

## <p>keeps track of whether it's a new object</p>

```
$_is_new : bool
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_is\_new |

## $\_iterable

```
$_iterable 
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_iterable |

## <p>defined observers</p>

```
$_observers : array
```

## <p>cached observers</p>

```
$_observers_cached : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_observers\_cached |

## <p>keeps a copy of the object as it was retrieved from the database</p>

```
$_original : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_original |

## <p>keeps a copy of the relation ids that were originally retrieved from the database</p>

```
$_original_relations : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_original\_relations |

## <p>name or names of the primary keys</p>

```
$_primary_key : array
```

## <p>model properties</p>

```
$_properties : array
```

## <p>cached properties</p>

```
$_properties_cached : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_properties\_cached |

## <p>relationships</p>

```
$_relations_cached : string
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_relations\_cached |

## <p>keeps track of relations that need to be reset before saving the new ones</p>

```
$_reset_relations : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_reset\_relations |

## <p>If this is a records data will be sanitized on get</p>

```
$_sanitization_enabled : bool
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_sanitization\_enabled |

## <p>table name to overwrite assumption</p>

```
$_table_name : string
```

## <p>cached tables</p>

```
$_table_names_cached : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_table\_names\_cached |

## <p>name or columns that need to be excluded from any to\_array() result</p>

```
$_to_array_exclude : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_to\_array\_exclude |

## <p>array of valid relation types</p>

```
$_valid_relations : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_valid\_relations |

## <p>view name when used</p>

```
$_view : string
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_view |

## <p>cached properties</p>

```
$_views_cached : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$\_views\_cached |

## <p>write connection to use</p>

```
$_write_connection : string
```

## <p>global array to track circular references in to\_array()</p>

```
$to_array_references : array
```

Inherited

|  |  |
| --- | --- |
| inherited\_from | \Orm\Model::$$to\_array\_references |

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
