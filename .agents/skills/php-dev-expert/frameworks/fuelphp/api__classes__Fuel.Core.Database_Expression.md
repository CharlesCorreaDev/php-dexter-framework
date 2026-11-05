# phpDocumentor » \Fuel\Core\Database_Expression

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Database_Expression.html

---

PublicProtectedPrivateInherited

- Methods
- [Sets the expression string.

  ```
  __construct()
  ```](#__construct "__construct :: Sets the expression string.")
- [Return the value of the expression as a string.

  ```
  __toString()
  ```](#__toString "__toString :: Return the value of the expression as a string.")
- [Get the expression value as a string.

  ```
  value()
  ```](#value "value :: Get the expression value as a string.")
- Properties
- » Protected
- [$\_value

  ```
  $_value
  ```](#%24_value "$_value :: ")

### Methods

## Sets the expression string.

```
__construct(string $value) 
```

$expression = new Database\_Expression('COUNT(users.id)');

### Parameters

#### $value

`string`

expression string

## Return the value of the expression as a string.

```
__toString() : string
```

echo $expression;

|  |  |
| --- | --- |
| uses | \Fuel\Core\Database\_Expression::value |

### Returns

`string`

## Get the expression value as a string.

```
value() : string
```

$sql = $expression->value();

### Returns

`string`

### Properties

## $\_value

```
$_value 
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
