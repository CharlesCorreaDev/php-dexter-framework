# Joomla! CMS 2.5 API » \JAccessRule

> **Fonte / Source:** https://api.joomla.org/cms-2.5/classes/JAccessRule.html

---

# JAccessRule

JAccessRule class.

|  |  |
| --- | --- |
| package | Joomla.Platform |
| subpackage | Access |
| since | 11.4 |

## Methods

### \_\_construct

Constructor.

```
__construct(mixed $identities)
```

The input array must be in the form: array(-42 => true, 3 => true, 4 => false)
or an equivalent JSON encoded string.

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$identities
:   `mixed`A JSON format string (probably from the database) or a named array.

### \_\_toString

Convert this object into a JSON encoded string.

```
__toString() : string
```

|  |  |
| --- | --- |
| since | 11.1 |

#### Response

`string`JSON encoded string

### allow

Checks that this action can be performed by an identity.

```
allow(mixed $identities) : mixed
```

The identity is an integer where +ve represents a user group,
and -ve represents a user.

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$identities
:   `mixed`An integer or array of integers representing the identities to check.

#### Response

`mixed`True if allowed, false for an explicit deny, null for an implicit deny.

### getData

Get the data for the action.

```
getData() : array
```

|  |  |
| --- | --- |
| since | 11.1 |

#### Response

`array`A named array

### mergeIdentities

Merges the identities

```
mergeIdentities(mixed $identities) : void
```

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$identities
:   `mixed`An integer or array of integers representing the identities to check.

### mergeIdentity

Merges the values for an identity.

```
mergeIdentity(integer $identity, boolean $allow) : void
```

|  |  |
| --- | --- |
| since | 11.1 |

#### Arguments

$identity
:   `integer`The identity.

$allow
:   `boolean`The value for the identity (true == allow, false == deny).

## Properties

### data

A named array

|  |  |
| --- | --- |
| since | 11.1 |

#### Type(s)

`array`
