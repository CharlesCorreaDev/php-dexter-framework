# phpDocumentor » \Fuel\Core\Arr

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Arr.html

---

PublicProtectedPrivateInherited

- Methods
- [Converts a multi-dimensional associative array into an array of key => values with the provided field names

  ```
  assoc_to_keyval()
  ```](#assoc_to_keyval "assoc_to_keyval :: Converts a multi-dimensional associative array into an array of key => values with the provided field names")
- [Find the average of an array

  ```
  average()
  ```](#average "average :: Find the average of an array")
- [Unsets dot-notated key from an array

  ```
  delete()
  ```](#delete "delete :: Unsets dot-notated key from an array")
- [Filters an array by an array of keys

  ```
  filter_keys()
  ```](#filter_keys "filter_keys :: Filters an array by an array of keys")
- [Filters an array on prefixed associative keys.

  ```
  filter_prefixed()
  ```](#filter_prefixed "filter_prefixed :: Filters an array on prefixed associative keys.")
- [Recursive version of PHP's array\_filter()

  ```
  filter_recursive()
  ```](#filter_recursive "filter_recursive :: Recursive version of PHP's array_filter()")
- [Filters an array on suffixed associative keys.

  ```
  filter_suffixed()
  ```](#filter_suffixed "filter_suffixed :: Filters an array on suffixed associative keys.")
- [Flattens a multi-dimensional associative array down into a 1 dimensional
  associative array.

  ```
  flatten()
  ```](#flatten "flatten :: Flattens a multi-dimensional associative array down into a 1 dimensional
  associative array.")
- [Flattens a multi-dimensional associative array down into a 1 dimensional
  associative array.

  ```
  flatten_assoc()
  ```](#flatten_assoc "flatten_assoc :: Flattens a multi-dimensional associative array down into a 1 dimensional
  associative array.")
- [Gets a dot-notated key from an array, with a default value if it does
  not exist.

  ```
  get()
  ```](#get "get :: Gets a dot-notated key from an array, with a default value if it does
  not exist.")
- [Recursive in\_array

  ```
  in_array_recursive()
  ```](#in_array_recursive "in_array_recursive :: Recursive in_array")
- [Insert value(s) into an array, mostly an array\_splice alias
  WARNING: original array is edited by reference, only boolean success is returned

  ```
  insert()
  ```](#insert "insert :: Insert value(s) into an array, mostly an array_splice alias
  WARNING: original array is edited by reference, only boolean success is returned")
- [Insert value(s) into an array after a specific key
  WARNING: original array is edited by reference, only boolean success is returned

  ```
  insert_after_key()
  ```](#insert_after_key "insert_after_key :: Insert value(s) into an array after a specific key
  WARNING: original array is edited by reference, only boolean success is returned")
- [Insert value(s) into an array after a specific value (first found in array)

  ```
  insert_after_value()
  ```](#insert_after_value "insert_after_value :: Insert value(s) into an array after a specific value (first found in array)")
- [Insert value(s) into an array, mostly an array\_splice alias
  WARNING: original array is edited by reference, only boolean success is returned

  ```
  insert_assoc()
  ```](#insert_assoc "insert_assoc :: Insert value(s) into an array, mostly an array_splice alias
  WARNING: original array is edited by reference, only boolean success is returned")
- [Insert value(s) into an array before a specific key
  WARNING: original array is edited by reference, only boolean success is returned

  ```
  insert_before_key()
  ```](#insert_before_key "insert_before_key :: Insert value(s) into an array before a specific key
  WARNING: original array is edited by reference, only boolean success is returned")
- [Insert value(s) into an array before a specific value (first found in array)

  ```
  insert_before_value()
  ```](#insert_before_value "insert_before_value :: Insert value(s) into an array before a specific value (first found in array)")
- [Checks if the given array is an assoc array.

  ```
  is_assoc()
  ```](#is_assoc "is_assoc :: Checks if the given array is an assoc array.")
- [Checks if the given array is a multidimensional array.

  ```
  is_multi()
  ```](#is_multi "is_multi :: Checks if the given array is a multidimensional array.")
- [Array\_key\_exists with a dot-notated key from an array.

  ```
  key_exists()
  ```](#key_exists "key_exists :: Array_key_exists with a dot-notated key from an array.")
- [Converts an array of key => values into a multi-dimensional associative array with the provided field names

  ```
  keyval_to_assoc()
  ```](#keyval_to_assoc "keyval_to_assoc :: Converts an array of key => values into a multi-dimensional associative array with the provided field names")
- [Merge 2 arrays recursively, differs in 2 important ways from array\_merge\_recursive()
  - When there's 2 different values and not both arrays, the latter value overwrites the earlier
  instead of merging both into an array
  - Numeric keys that don't conflict aren't changed, only when a numeric key already exists is the
  value added using array\_push()

  ```
  merge()
  ```](#merge "merge :: Merge 2 arrays recursively, differs in 2 important ways from array_merge_recursive()
  - When there's 2 different values and not both arrays, the latter value overwrites the earlier
    instead of merging both into an array
  - Numeric keys that don't conflict aren't changed, only when a numeric key already exists is the
    value added using array_push()")
- [Merge 2 arrays recursively, differs in 2 important ways from array\_merge\_recursive()
  - When there's 2 different values and not both arrays, the latter value overwrites the earlier
  instead of merging both into an array
  - Numeric keys are never changed

  ```
  merge_assoc()
  ```](#merge_assoc "merge_assoc :: Merge 2 arrays recursively, differs in 2 important ways from array_merge_recursive()
  - When there's 2 different values and not both arrays, the latter value overwrites the earlier
    instead of merging both into an array
  - Numeric keys are never changed")
- [Sorts an array on multiple values, with deep sorting support.

  ```
  multisort()
  ```](#multisort "multisort :: Sorts an array on multiple values, with deep sorting support.")
- [Get the next value or key from an array using the current array key

  ```
  next_by_key()
  ```](#next_by_key "next_by_key :: Get the next value or key from an array using the current array key")
- [Get the next value or key from an array using the current array value

  ```
  next_by_value()
  ```](#next_by_value "next_by_value :: Get the next value or key from an array using the current array value")
- [Pluck an array of values from an array.

  ```
  pluck()
  ```](#pluck "pluck :: Pluck an array of values from an array.")
- [Prepends a value with an associative key to an array.

  ```
  prepend()
  ```](#prepend "prepend :: Prepends a value with an associative key to an array.")
- [Get the previous value or key from an array using the current array key

  ```
  previous_by_key()
  ```](#previous_by_key "previous_by_key :: Get the previous value or key from an array using the current array key")
- [Get the previous value or key from an array using the current array value

  ```
  previous_by_value()
  ```](#previous_by_value "previous_by_value :: Get the previous value or key from an array using the current array value")
- [Returns the array with all numeric keys re-indexed, and string keys untouched

  ```
  reindex()
  ```](#reindex "reindex :: Returns the array with all numeric keys re-indexed, and string keys untouched")
- [Removes items from an array that match a key prefix.

  ```
  remove_prefixed()
  ```](#remove_prefixed "remove_prefixed :: Removes items from an array that match a key prefix.")
- [Removes items from an array that match a key suffix.

  ```
  remove_suffixed()
  ```](#remove_suffixed "remove_suffixed :: Removes items from an array that match a key suffix.")
- [Replaces key names in an array by names in $replace

  ```
  replace_key()
  ```](#replace_key "replace_key :: Replaces key names in an array by names in $replace")
- [Reverse a flattened array in its original form.

  ```
  reverse_flatten()
  ```](#reverse_flatten "reverse_flatten :: Reverse a flattened array in its original form.")
- [Searches the array for a given value and returns the
  corresponding key or default value.

  ```
  search()
  ```](#search "search :: Searches the array for a given value and returns the
  corresponding key or default value.")
- [Set an array item (dot-notated) to the value.

  ```
  set()
  ```](#set "set :: Set an array item (dot-notated) to the value.")
- [Sorts a multi-dimensional array by it's values.

  ```
  sort()
  ```](#sort "sort :: Sorts a multi-dimensional array by it's values.")
- [Return the subset of the array defined by the supplied keys.

  ```
  subset()
  ```](#subset "subset :: Return the subset of the array defined by the supplied keys.")
- [Calculate the sum of an array

  ```
  sum()
  ```](#sum "sum :: Calculate the sum of an array")
- [Converts the given 1 dimensional non-associative array to an associative
  array.

  ```
  to_assoc()
  ```](#to_assoc "to_assoc :: Converts the given 1 dimensional non-associative array to an associative
  array.")
- [Returns only unique values in an array.

  ```
  unique()
  ```](#unique "unique :: Returns only unique values in an array.")

The Arr class provides a few nice functions for making
dealing with arrays easier

|  |  |
| --- | --- |
| package | [Fuel](api__packages__Fuel.Core.md) |
| subpackage | Core |

### Methods

## Converts a multi-dimensional associative array into an array of key => values with the provided field names

```
assoc_to_keyval(array $assoc, string $key_field, string $val_field) : array
```

### Parameters

#### $assoc

`array`

the array to convert

#### $key\_field

`string`

the field name of the key field

#### $val\_field

`string`

the field name of the value field

### Exceptions

|  |  |
| --- | --- |
| `\InvalidArgumentException` |  |

### Returns

`array`

## Find the average of an array

```
average(array $array) : \Fuel\Core\number
```

### Parameters

#### $array

`array`

the array containing the values

### Returns

`\Fuel\Core\number`the average value

## Unsets dot-notated key from an array

```
delete(array $array, mixed $key) : mixed
```

### Parameters

#### $array

`array`

The search array

#### $key

`mixed`

The dot-notated key or array of keys

### Returns

`mixed`

## Filters an array by an array of keys

```
filter_keys(array $array, array $keys, bool $remove) : array
```

### Parameters

#### $array

`array`

the array to filter.

#### $keys

`array`

the keys to filter

#### $remove

`bool`

if true, removes the matched elements.

### Returns

`array`

## Filters an array on prefixed associative keys.

```
filter_prefixed(array $array, string $prefix, bool $remove_prefix) : array
```

### Parameters

#### $array

`array`

the array to filter.

#### $prefix

`string`

prefix to filter on.

#### $remove\_prefix

`bool`

whether to remove the prefix.

### Returns

`array`

## Recursive version of PHP's array\_filter()

```
filter_recursive(array $array, callback $callback) : array
```

### Parameters

#### $array

`array`

the array to filter.

#### $callback

`callback`

the callback that determines whether or not a value is filtered

### Returns

`array`

## Filters an array on suffixed associative keys.

```
filter_suffixed(array $array, string $suffix, bool $remove_suffix) : array
```

### Parameters

#### $array

`array`

the array to filter.

#### $suffix

`string`

suffix to filter on.

#### $remove\_suffix

`bool`

whether to remove the suffix.

### Returns

`array`

## Flattens a multi-dimensional associative array down into a 1 dimensional associative array.

```
flatten(array $array, string $glue, bool $reset, bool $indexed) : array
```

### Parameters

#### $array

`array`

the array to flatten

#### $glue

`string`

what to glue the keys together with

#### $reset

`bool`

whether to reset and start over on a new array

#### $indexed

`bool`

whether to flatten only associative array's, or also indexed ones

### Returns

`array`

## Flattens a multi-dimensional associative array down into a 1 dimensional associative array.

```
flatten_assoc(array $array, string $glue, bool $reset) : array
```

### Parameters

#### $array

`array`

the array to flatten

#### $glue

`string`

what to glue the keys together with

#### $reset

`bool`

whether to reset and start over on a new array

### Returns

`array`

## Gets a dot-notated key from an array, with a default value if it does not exist.

```
get(array $array, mixed $key, string $default) : mixed
```

### Parameters

#### $array

`array`

The search array

#### $key

`mixed`

The dot-notated key or array of keys

#### $default

`string`

The default value

### Returns

`mixed`

## Recursive in\_array

```
in_array_recursive(mixed $needle, array $haystack, bool $strict) : bool
```

### Parameters

#### $needle

`mixed`

what to search for

#### $haystack

`array`

array to search in

#### $strict

`bool`

### Returns

`bool`whether the needle is found in the haystack.

## Insert value(s) into an array, mostly an array\_splice alias WARNING: original array is edited by reference, only boolean success is returned

```
insert(array $original, array | mixed $value, int $pos) : bool
```

### Parameters

#### $original

`array`

the original array (by reference)

#### $value

`array``mixed`

the value(s) to insert, if you want to insert an array it needs to be in an array itself

#### $pos

`int`

the numeric position at which to insert, negative to count from the end backwards

### Returns

`bool`false when array shorter then $pos, otherwise true

## Insert value(s) into an array after a specific key WARNING: original array is edited by reference, only boolean success is returned

```
insert_after_key(array $original, array | mixed $value, string | int $key, bool $is_assoc) : bool
```

### Parameters

#### $original

`array`

the original array (by reference)

#### $value

`array``mixed`

the value(s) to insert, if you want to insert an array it needs to be in an array itself

#### $key

`string``int`

the key after which to insert

#### $is\_assoc

`bool`

whether the input is an associative array

### Returns

`bool`false when key isn't found in the array, otherwise true

## Insert value(s) into an array after a specific value (first found in array)

```
insert_after_value(array $original, array | mixed $value, string | int $search, bool $is_assoc) : bool
```

### Parameters

#### $original

`array`

the original array (by reference)

#### $value

`array``mixed`

the value(s) to insert, if you want to insert an array it needs to be in an array itself

#### $search

`string``int`

the value after which to insert

#### $is\_assoc

`bool`

whether the input is an associative array

### Returns

`bool`false when value isn't found in the array, otherwise true

## Insert value(s) into an array, mostly an array\_splice alias WARNING: original array is edited by reference, only boolean success is returned

```
insert_assoc(array $original, array $values, int $pos) : bool
```

### Parameters

#### $original

`array`

the original array (by reference)

#### $values

`array``mixed`

the value(s) to insert, if you want to insert an array it needs to be in an array itself

#### $pos

`int`

the numeric position at which to insert, negative to count from the end backwards

### Returns

`bool`false when array shorter then $pos, otherwise true

## Insert value(s) into an array before a specific key WARNING: original array is edited by reference, only boolean success is returned

```
insert_before_key(array $original, array | mixed $value, string | int $key, bool $is_assoc) : bool
```

### Parameters

#### $original

`array`

the original array (by reference)

#### $value

`array``mixed`

the value(s) to insert, if you want to insert an array it needs to be in an array itself

#### $key

`string``int`

the key before which to insert

#### $is\_assoc

`bool`

whether the input is an associative array

### Returns

`bool`false when key isn't found in the array, otherwise true

## Insert value(s) into an array before a specific value (first found in array)

```
insert_before_value(array $original, array | mixed $value, string | int $search, bool $is_assoc) : bool
```

### Parameters

#### $original

`array`

the original array (by reference)

#### $value

`array``mixed`

the value(s) to insert, if you want to insert an array it needs to be in an array itself

#### $search

`string``int`

the value after which to insert

#### $is\_assoc

`bool`

whether the input is an associative array

### Returns

`bool`false when value isn't found in the array, otherwise true

## Checks if the given array is an assoc array.

```
is_assoc(array $arr) : bool
```

### Parameters

#### $arr

`array`

the array to check

### Returns

`bool`true if its an assoc array, false if not

## Checks if the given array is a multidimensional array.

```
is_multi(array $arr, bool $all_keys) : bool
```

### Parameters

#### $arr

`array`

the array to check

#### $all\_keys

`bool`

if true, check that all elements are arrays

### Returns

`bool`true if its a multidimensional array, false if not

## Array\_key\_exists with a dot-notated key from an array.

```
key_exists(array $array, mixed $key) : mixed
```

### Parameters

#### $array

`array`

The search array

#### $key

`mixed`

The dot-notated key or array of keys

### Returns

`mixed`

## Converts an array of key => values into a multi-dimensional associative array with the provided field names

```
keyval_to_assoc(array $array, string $key_field, string $val_field) : array
```

### Parameters

#### $array

`array`

the array to convert

#### $key\_field

`string`

the field name of the key field

#### $val\_field

`string`

the field name of the value field

### Exceptions

|  |  |
| --- | --- |
| `\InvalidArgumentException` |  |

### Returns

`array`

## Merge 2 arrays recursively, differs in 2 important ways from array\_merge\_recursive() - When there's 2 different values and not both arrays, the latter value overwrites the earlier instead of merging both into an array - Numeric keys that don't conflict aren't changed, only when a numeric key already exists is the value added using array\_push()

```
merge() : array
```

### Exceptions

|  |  |
| --- | --- |
| `\InvalidArgumentException` |  |

### Returns

`array`

## Merge 2 arrays recursively, differs in 2 important ways from array\_merge\_recursive() - When there's 2 different values and not both arrays, the latter value overwrites the earlier instead of merging both into an array - Numeric keys are never changed

```
merge_assoc() : array
```

### Exceptions

|  |  |
| --- | --- |
| `\InvalidArgumentException` |  |

### Returns

`array`

## Sorts an array on multiple values, with deep sorting support.

```
multisort(array $array, array $conditions, bool $ignore_case) : array
```

### Parameters

#### $array

`array`

collection of arrays/objects to sort

#### $conditions

`array`

sorting conditions

#### $ignore\_case

`bool`

whether to sort case insensitive

### Returns

`array`

## Get the next value or key from an array using the current array key

```
next_by_key(array $array, string $key, bool $get_value, bool $strict) : mixed
```

### Parameters

#### $array

`array`

the array containing the values

#### $key

`string`

key of the current entry to use as reference

#### $get\_value

`bool`

if true, return the next value instead of the next key

#### $strict

`bool`

if true, do a strict key comparison

### Returns

`mixed`the value in the array, null if there is no next value, or false if the key doesn't exist

## Get the next value or key from an array using the current array value

```
next_by_value(array $array, string $value, bool $get_value, bool $strict) : mixed
```

### Parameters

#### $array

`array`

the array containing the values

#### $value

`string`

value of the current entry to use as reference

#### $get\_value

`bool`

if true, return the next value instead of the next key

#### $strict

`bool`

if true, do a strict key comparison

### Returns

`mixed`the value in the array, null if there is no next value, or false if the key doesn't exist

## Pluck an array of values from an array.

```
pluck(array $array, string $key, string $index) : array
```

### Parameters

#### $array

`array`

collection of arrays to pluck from

#### $key

`string`

key of the value to pluck

#### $index

`string`

optional return array index key, true for original index

### Returns

`array`array of plucked values

## Prepends a value with an associative key to an array.

```
prepend(array $arr, string | array $key, mixed $value) 
```

Will overwrite if the value exists.

### Parameters

#### $arr

`array`

the array to prepend to

#### $key

`string``array`

the key or array of keys and values

#### $value

`mixed`

the value to prepend

## Get the previous value or key from an array using the current array key

```
previous_by_key(array $array, string $key, bool $get_value, bool $strict) : mixed
```

### Parameters

#### $array

`array`

the array containing the values

#### $key

`string`

key of the current entry to use as reference

#### $get\_value

`bool`

if true, return the previous value instead of the previous key

#### $strict

`bool`

if true, do a strict key comparison

### Returns

`mixed`the value in the array, null if there is no previous value, or false if the key doesn't exist

## Get the previous value or key from an array using the current array value

```
previous_by_value(array $array, string $value, bool $get_value, bool $strict) : mixed
```

### Parameters

#### $array

`array`

the array containing the values

#### $value

`string`

value of the current entry to use as reference

#### $get\_value

`bool`

if true, return the previous value instead of the previous key

#### $strict

`bool`

if true, do a strict key comparison

### Returns

`mixed`the value in the array, null if there is no previous value, or false if the key doesn't exist

## Returns the array with all numeric keys re-indexed, and string keys untouched

```
reindex(array $arr) : array
```

### Parameters

#### $arr

`array`

the array to reindex

### Returns

`array`re-indexed array

## Removes items from an array that match a key prefix.

```
remove_prefixed(array $array, string $prefix) : array
```

### Parameters

#### $array

`array`

the array to remove from

#### $prefix

`string`

prefix to filter on

### Returns

`array`

## Removes items from an array that match a key suffix.

```
remove_suffixed(array $array, string $suffix) : array
```

### Parameters

#### $array

`array`

the array to remove from

#### $suffix

`string`

suffix to filter on

### Returns

`array`

## Replaces key names in an array by names in $replace

```
replace_key(array $source, array | string $replace, string $new_key) : array
```

### Parameters

#### $source

`array`

the array containing the key/value combinations

#### $replace

`array``string`

key to replace or array containing the replacement keys

#### $new\_key

`string`

the replacement key

### Returns

`array`the array with the new keys

## Reverse a flattened array in its original form.

```
reverse_flatten(array $array, string $glue) : array
```

### Parameters

#### $array

`array`

flattened array

#### $glue

`string`

glue used in flattening

### Returns

`array`the unflattened array

## Searches the array for a given value and returns the corresponding key or default value.

```
search(array $array, mixed $value, string $default, bool $recursive, string $delimiter, bool $strict) : mixed
```

If $recursive is set to true, then the Arr::search()
function will return a delimiter-notated key using $delimiter.

### Parameters

#### $array

`array`

The search array

#### $value

`mixed`

The searched value

#### $default

`string`

The default value

#### $recursive

`bool`

Whether to get keys recursive

#### $delimiter

`string`

The delimiter, when $recursive is true

#### $strict

`bool`

If true, do a strict key comparison

### Returns

`mixed`

## Set an array item (dot-notated) to the value.

```
set(array $array, mixed $key, mixed $value) : void
```

### Parameters

#### $array

`array`

The array to insert it into

#### $key

`mixed`

The dot-notated key to set or array of keys

#### $value

`mixed`

The value

## Sorts a multi-dimensional array by it's values.

```
sort(array $array, string $key, string $order, int $sort_flags) : array
```

|  |  |
| --- | --- |
| access | public |

### Parameters

#### $array

`array`

The array to fetch from

#### $key

`string`

The key to sort by

#### $order

`string`

The order (asc or desc)

#### $sort\_flags

`int`

The php sort type flag

### Returns

`array`

## Return the subset of the array defined by the supplied keys.

```
subset(array $array, array $keys, mixed $default) : array
```

Returns $default for missing keys, as with Arr::get()

### Parameters

#### $array

`array`

the array containing the values

#### $keys

`array`

list of keys (or indices) to return

#### $default

`mixed`

value of missing keys; default null

### Returns

`array`An array containing the same set of keys provided.

## Calculate the sum of an array

```
sum(array $array, string $key) : \Fuel\Core\number
```

### Parameters

#### $array

`array`

the array containing the values

#### $key

`string`

key of the value to pluck

### Returns

`\Fuel\Core\number`the sum value

## Converts the given 1 dimensional non-associative array to an associative array.

```
to_assoc(string $arr) : array | null
```

The array given must have an even number of elements or null will be returned.

```
Arr::to_assoc(array('foo','bar'));
```

### Parameters

#### $arr

`string`

the array to change

### Exceptions

|  |  |
| --- | --- |
| `\BadMethodCallException` |  |

### Returns

`array``null`the new array or null

## Returns only unique values in an array.

```
unique(array $arr) : array
```

It does not sort. First value is used.

### Parameters

#### $arr

`array`

the array to dedup

### Returns

`array`array with only de-duped values

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
