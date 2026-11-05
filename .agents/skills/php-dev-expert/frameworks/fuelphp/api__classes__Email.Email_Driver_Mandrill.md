# phpDocumentor » \Email\Email_Driver_Mandrill

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Email.Email_Driver_Mandrill.html

---

PublicProtectedPrivateInherited

- Methods
- [{@inheritdoc}

  ```
  __construct()
  ```](#__construct "__construct :: {@inheritdoc}")
- [Add merge vars

  ```
  add_merge_vars()
  ```](#add_merge_vars "add_merge_vars :: Add merge vars")
- [Add metadata

  ```
  add_metadata()
  ```](#add_metadata "add_metadata :: Add metadata")
- [{@inheritdoc}

  ```
  attach()
  ```](#attach "attach :: {@inheritdoc}")
- [Get merge vars

  ```
  get_merge_vars()
  ```](#get_merge_vars "get_merge_vars :: Get merge vars")
- [Get metadata

  ```
  get_metadata()
  ```](#get_metadata "get_metadata :: Get metadata")
- [Set one or several merge vars

  ```
  set_merge_var()
  ```](#set_merge_var "set_merge_var :: Set one or several merge vars")
- [Set one or several metadata

  ```
  set_metadata()
  ```](#set_metadata "set_metadata :: Set one or several metadata")
- » Protected
- [{@inheritdoc}

  ```
  _send()
  ```](#_send "_send :: {@inheritdoc}")
- [Add type to recipient list

  ```
  build_rcpt()
  ```](#build_rcpt "build_rcpt :: Add type to recipient list")
- [{@inheritdoc}

  ```
  clear_list()
  ```](#clear_list "clear_list :: {@inheritdoc}")
- Properties
- » Protected
- [Global merge vars

  ```
  $merge_vars
  ```](#%24merge_vars "$merge_vars :: Global merge vars")
- [Global metadata

  ```
  $metadata
  ```](#%24metadata "$metadata :: Global metadata")
- [Recipient merge vars

  ```
  $rcpt_merge_vars
  ```](#%24rcpt_merge_vars "$rcpt_merge_vars :: Recipient merge vars")
- [Recipient metadata

  ```
  $rcpt_metadata
  ```](#%24rcpt_metadata "$rcpt_metadata :: Recipient metadata")

### Methods

## {@inheritdoc}

```
__construct(array $config) 
```

### Parameters

#### $config

## Add merge vars

```
add_merge_vars(array $merge_vars, mixed $rcpt) : array
```

### Parameters

#### $merge\_vars

`array`

Key-value pairs

#### $rcpt

`mixed`

Null for global, string for recipient

### Returns

`array`

## Add metadata

```
add_metadata(array $metadata, mixed $rcpt) : array
```

### Parameters

#### $metadata

`array`

Key-value pairs

#### $rcpt

`mixed`

Null for global, string for recipient

### Returns

`array`

## {@inheritdoc}

```
attach($file, $inline, $cid, $mime, $name) 
```

### Parameters

#### $file

#### $inline

#### $cid

#### $mime

#### $name

## Get merge vars

```
get_merge_vars(mixed $key, mixed $rcpt) : array
```

### Parameters

#### $key

`mixed`

Null for all, string for specific

#### $rcpt

`mixed`

Null for global, string for recipient

### Returns

`array`

## Get metadata

```
get_metadata(mixed $key, mixed $rcpt) : array
```

### Parameters

#### $key

`mixed`

Null for all, string for specific

#### $rcpt

`mixed`

Null for global, string for recipient

### Returns

`array`

## Set one or several merge vars

```
set_merge_var(mixed $key, mixed $value, mixed $rcpt) : object
```

### Parameters

#### $key

`mixed`

Array for many vars, string for one

#### $value

`mixed`

In case of many vars it is ommited

#### $rcpt

`mixed`

Null for global, string for recipient

### Returns

`object`$this

## Set one or several metadata

```
set_metadata(mixed $key, mixed $value, mixed $rcpt) : object
```

### Parameters

#### $key

`mixed`

Array for many, string for one

#### $value

`mixed`

In case of many it is ommited

#### $rcpt

`mixed`

Null for global, string for recipient

### Returns

`object`$this

## {@inheritdoc}

```
_send() 
```

## Add type to recipient list

```
build_rcpt(string $list) : array
```

### Parameters

#### $list

`string`

to, cc, bcc

### Returns

`array`

## {@inheritdoc}

```
clear_list($list) 
```

### Parameters

#### $list

### Properties

## Global merge vars

```
$merge_vars : array
```

## Global metadata

```
$metadata : array
```

## Recipient merge vars

```
$rcpt_merge_vars : array
```

## Recipient metadata

```
$rcpt_metadata : array
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
