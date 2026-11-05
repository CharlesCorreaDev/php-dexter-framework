# Tests | Craft CMS Documentation | 5.x

> **Fonte / Source:** https://craftcms.com/docs/5.x/reference/twig/tests

---

# Tests

- ### On this Page

  - [array](docs_5x__reference__twig__tests.md#array)
  - [boolean](docs_5x__reference__twig__tests.md#boolean)
  - [callable](docs_5x__reference__twig__tests.md#callable)
  - [countable](docs_5x__reference__twig__tests.md#countable)
  - [float](docs_5x__reference__twig__tests.md#float)
  - [instance of](docs_5x__reference__twig__tests.md#instance-of)
  - [integer](docs_5x__reference__twig__tests.md#integer)
  - [missing](docs_5x__reference__twig__tests.md#missing)
  - [numeric](docs_5x__reference__twig__tests.md#numeric)
  - [object](docs_5x__reference__twig__tests.md#object)
  - [resource](docs_5x__reference__twig__tests.md#resource)
  - [scalar](docs_5x__reference__twig__tests.md#scalar)
  - [string](docs_5x__reference__twig__tests.md#string)

The following [tests  (opens new window)](https://twig.symfony.com/doc/3.x/templates.html#test-operator) are available to Twig templates in Craft:

| Test | Description |
| --- | --- |
| [array](#array) | Whether a variable is an array. |
| [boolean](#boolean) | Whether a variable is a boolean value. |
| [callable](#callable) | Whether a variable is callable. |
| [constant  (opens new window)](https://twig.symfony.com/doc/3.x/tests/constant.html) | Whether a variable is the same as a PHP constant value. |
| [countable](#countable) | Whether a variable is a countable value. |
| [defined  (opens new window)](https://twig.symfony.com/doc/3.x/tests/defined.html) | Whether a variable is defined. |
| [divisible by  (opens new window)](https://twig.symfony.com/doc/3.x/tests/divisibleby.html) | Whether a number is divisible by another number. |
| [empty  (opens new window)](https://twig.symfony.com/doc/3.x/tests/empty.html) | Whether a variable is empty. |
| [even  (opens new window)](https://twig.symfony.com/doc/3.x/tests/even.html) | Whether a number is even. |
| [float](#float) | Whether a variable is a float value. |
| [instance of](#instance-of) | Whether an object is an instance of a namespace or parent class. |
| [integer](#integer) | Whether a variable is an integer value. |
| [iterable  (opens new window)](https://twig.symfony.com/doc/3.x/tests/iterable.html) | Whether a variable is an array or a traversable object. |
| [missing](#missing) | Whether an object is missing its expected class. |
| [null  (opens new window)](https://twig.symfony.com/doc/3.x/tests/null.html) | Whether a variable is `null`. |
| [numeric](#numeric) | Whether a variable is numeric. |
| [object](#object) | Whether a variable is an object. |
| [odd  (opens new window)](https://twig.symfony.com/doc/3.x/tests/odd.html) | Whether a number is odd. |
| [resource](#resource) | Whether a variable is a resource. |
| [same as  (opens new window)](https://twig.symfony.com/doc/3.x/tests/sameas.html) | Whether a variable is the same as another. |
| [scalar](#scalar) | Whether a variable is a scalar. |
| [string](#string) | Whether a variable is a string value. |

## [#](#array)`array`

Returns whether an object is an array via PHP’s [`is_array()`  (opens new window)](https://www.php.net/manual/en/function.is-array.php) method.

```
{{ ['oh', 'hello', 'there'] is array ? 'true' : 'false' }}
{# result: true #}

{{ 'oh hai' is array ? 'true' : 'false' }}
{# result: false #}
```

## [#](#boolean)`boolean`

Returns whether an object is a boolean via PHP’s [`is_bool()`  (opens new window)](https://www.php.net/manual/en/function.is-bool.php) method.

```
{% if myVar is boolean %}
  {{ myVar ? 'true' : 'false' }}
{% endif %}
```

## [#](#callable)`callable`

Returns whether an object is callable via PHP’s [`is_callable()`  (opens new window)](https://www.php.net/manual/en/function.is-callable.php) method.

```
{{ [entry, 'getStatus'] is callable ? 'true' : 'false' }}
{# result: true #}
```

## [#](#countable)`countable`

Returns whether an object is a countable value via PHP’s [`is_countable()`  (opens new window)](https://www.php.net/manual/en/function.is-countable.php) method.

`is_countable()` was added in PHP 7.3.0, so for versions less than 7.3 this returns `true` if the object [is an array](#array) or instance of [Countable  (opens new window)](https://www.php.net/manual/en/class.countable.php).

```
{{ craft.entries() is countable ? 'true' : 'false' }}
{# result: true #}

{{ ['apple', 'orange'] is countable ? 'true' : 'false' }}
{# result: true #}

{{ 'dracula' is countable ? 'true' : 'false' }}
{# result: false #}
```

## [#](#float)`float`

Returns whether an object is a float via PHP’s [`is_float()`  (opens new window)](https://www.php.net/manual/en/function.is-float.php) method.

```
{{ 10.5 is float ? 'true' : 'false' }}
{# result: true #}

{{ 9 is float ? 'true' : 'false' }}
{# result: false #}

{{ 'duck' is float ? 'true' : 'false' }}
{# result: false #}
```

## [#](#instance-of)`instance of`

Returns whether an object is an instance of another object or class.

```
{% if element is instance of('craft\\elements\\Entry') %}
  <h1>{{ entry.title }}</h1>
{% endif %}
```

## [#](#integer)`integer`

Returns whether an object is an integer via PHP’s [`is_int()`  (opens new window)](https://www.php.net/manual/en/function.is-int.php) method.

```
{{ 23 is integer ? 'true' : 'false' }}
{# result: true #}

{{ '23' is integer ? 'true' : 'false' }}
{# result: false #}
```

## [#](#missing)`missing`

Returns whether a given object is an instance of [craft\base\MissingComponentInterface  (opens new window)](https://docs.craftcms.com/api/v5/craft-base-missingcomponentinterface.html), an interface used to represent components whose types are missing.

```
{% if field is missing %}
  <p>😱</p>
{% endif %}
```

## [#](#numeric)`numeric`

Returns whether an object is numeric via PHP’s [`is_numeric()`  (opens new window)](https://www.php.net/manual/en/function.is-numeric.php) method.

```
{{ 23 is numeric ? 'true' : 'false' }}
{# result: true #}

{{ '23' is numeric ? 'true' : 'false' }}
{# result: true #}

{{ 'twenty-three' is numeric ? 'true' : 'false' }}
{# result: false #}
```

## [#](#object)`object`

Returns whether a given object satisfies PHP’s [`is_object()`  (opens new window)](https://www.php.net/manual/en/function.is-object.php) method.

```
{{ entry is object ? 'true' : 'false' }}
{# result: true #}

{{ entry.url is object ? 'true' : 'false' }}
{# result: false #}
```

## [#](#resource)`resource`

Returns whether an object is a resource via PHP’s [`is_resource()`  (opens new window)](https://www.php.net/manual/en/function.is-resource.php) method.

```
{{ asset.getStream() is resource ? 'true' : 'false' }}
{# result: true #}

{{ siteUrl is resource ? 'true' : 'false' }}
{# result: false #}
```

## [#](#scalar)`scalar`

Returns whether an object is a scalar via PHP’s [`is_scalar()`  (opens new window)](https://www.php.net/manual/en/function.is-scalar.php) method.

```
{{ 'hai' is scalar ? 'true' : 'false' }}
{# result: true #}

{{ 23 is scalar ? 'true' : 'false' }}
{# result: true #}

{{ [23, 'hai'] is scalar ? 'true' : 'false' }}
{# result: false #}
```

## [#](#string)`string`

Returns whether an object is a string via PHP’s [`is_string()`  (opens new window)](https://www.php.net/manual/en/function.is-string.php) method.

```
{{ '23' is string ? 'true' : 'false' }}
{# result: true #}

{{ 23 is string ? 'true' : 'false' }}
{# result: false #}
```

#### Was this page helpful?

- [craftcms.com](https://craftcms.com/)
- [Contact Us](https://craftcms.com/contact)
- [Edit this Page
    (opens new window)](https://github.com/craftcms/docs/edit/main/docs/5.x/reference/twig/tests.md)
