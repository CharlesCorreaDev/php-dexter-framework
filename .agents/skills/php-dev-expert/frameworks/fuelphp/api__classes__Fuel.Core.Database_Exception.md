# phpDocumentor » \Fuel\Core\Database_Exception

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Database_Exception.html

---

PublicProtectedPrivateInherited

- Methods
- [Overload the constructor to allow an additional error code to be passed

  ```
  __construct()
  ```](#__construct "__construct :: Overload the constructor to allow an additional error code to be passed")
- [Return the original database error code if given

  ```
  getDbCode()
  ```](#getDbCode "getDbCode :: Return the original database error code if given")
- Properties
- » Protected
- [<p>The exception code Redefine the exception code property, as PDO uses alphanumeric codes</p>

  ```
  $code
  ```](#%24code "$code :: ")
- [<p>The original databaase error code We also store the original error code of the underlying driver</p>

  ```
  $dbcode
  ```](#%24dbcode "$dbcode :: ")

### Methods

## Overload the constructor to allow an additional error code to be passed

```
__construct($message, $code, $previous, $dbcode) 
```

### Parameters

#### $message

#### $code

#### $previous

#### $dbcode

## Return the original database error code if given

```
getDbCode() 
```

### Properties

## <p>The exception code Redefine the exception code property, as PDO uses alphanumeric codes</p>

```
$code : mixed
```

## <p>The original databaase error code We also store the original error code of the underlying driver</p>

```
$dbcode : mixed
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
