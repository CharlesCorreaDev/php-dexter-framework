# Joomla! CMS 2.5 API » \JAccessRules

> **Fonte / Source:** https://api.joomla.org/cms-2.5/classes/JAccessRules.html

---

# JAccessRules

JAccessRules class.

|  |  |
| --- | --- |
| package | Joomla.Platform |
| subpackage | Access |
| since | 11.4 |

## Methods

### \_\_construct

Constructor.

```
__construct(mixed $input = '')
```

The input array must be in the form: array('action' => array(-42 => true, 3 => true, 4 => false))
or an equivalent JSON encoded string, or an object where properties are arrays.

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$input
:   `mixed`A JSON format string (probably from the database) or a nested array.

### \_\_toString

Magic method to convert the object to JSON string representation.

```
__toString() : string
```

|  |  |
| --- | --- |
| since | 11.1 |

#### Response

`string`JSON representation of the actions array

### allow

Checks that an action can be performed by an identity.

```
allow(string $action, mixed $identity) : mixed
```

The identity is an integer where +ve represents a user group,
and -ve represents a user.

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$action
:   `string`The name of the action.

$identity
:   `mixed`An integer representing the identity, or an array of identities

#### Response

`mixed`Object or null if there is no information about the action.

### getAllowed

Get the allowed actions for an identity.

```
getAllowed(mixed $identity) : object
```

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$identity
:   `mixed`An integer representing the identity or an array of identities

#### Response

`object`Allowed actions for the identity or identities

### getData

Get the data for the action.

```
getData() : array
```

|  |  |
| --- | --- |
| since | 11.1 |

#### Response

`array`A named array of JAccessRule objects.

### merge

Method to merge actions with this object.

```
merge(mixed $actions) : void
```

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$actions
:   `mixed`JAccessRule object, an array of actions or a JSON string array of actions.

### mergeAction

Merges an array of identities for an action.

```
mergeAction(string $action, array $identities) : void
```

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$action
:   `string`The name of the action.

$identities
:   `array`An array of identities

### mergeCollection

Method to merge a collection of JAccessRules.

```
mergeCollection(mixed $input) : void
```

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$input
:   `mixed`JAccessRule or array of JAccessRules

## Properties

### data

A named array.

|  |  |
| --- | --- |
| since | 11.1 |

#### Type(s)

`array`
