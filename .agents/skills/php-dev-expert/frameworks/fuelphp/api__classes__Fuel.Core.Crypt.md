# phpDocumentor » \Fuel\Core\Crypt

> **Fonte / Source:** https://www.fuelphp.com/api/classes/Fuel.Core.Crypt.html

---

PublicProtectedPrivateInherited

- Methods
- [capture calls to normal methods

  ```
  __call()
  ```](#__call "__call :: capture calls to normal methods")
- [capture static calls to methods

  ```
  __callstatic()
  ```](#__callstatic "__callstatic :: capture static calls to methods")
- [Class constructor

  ```
  __construct()
  ```](#__construct "__construct :: Class constructor")
- [initialisation and auto configuration

  ```
  _init()
  ```](#_init "_init :: initialisation and auto configuration")
- [forge

  ```
  forge()
  ```](#forge "forge :: forge")
- [Return a specific named instance

  ```
  instance()
  ```](#instance "instance :: Return a specific named instance")
- » Protected
- [Calculate a MAC.

  ```
  calculate_mac()
  ```](#calculate_mac "calculate_mac :: Calculate a MAC.")
- [decrypt a string value, optionally with a custom key

  ```
  decode()
  ```](#decode "decode :: decrypt a string value, optionally with a custom key")
- [encrypt a string value, optionally with a custom key

  ```
  encode()
  ```](#encode "encode :: encrypt a string value, optionally with a custom key")
- [Use a derivative of HKDF to derive multiple keys from one.

  ```
  hkdfBlake2b()
  ```](#hkdfBlake2b "hkdfBlake2b :: Use a derivative of HKDF to derive multiple keys from one.")
- [decrypt a string value, optionally with a custom key

  ```
  legacy_decode()
  ```](#legacy_decode "legacy_decode :: decrypt a string value, optionally with a custom key")
- [Wrapper for sodium\_memzero, it's actually not possible to zero
  memory buffers in PHP.

  ```
  memzero()
  ```](#memzero "memzero :: Wrapper for sodium_memzero, it's actually not possible to zero
  memory buffers in PHP.")
- [Wrapper around SODIUM\_CRypto\_generichash()

  ```
  raw_keyed_hash()
  ```](#raw_keyed_hash "raw_keyed_hash :: Wrapper around SODIUM_CRypto_generichash()")
- [decode a URI safe base64 encoded string

  ```
  safe_b64decode()
  ```](#safe_b64decode "safe_b64decode :: decode a URI safe base64 encoded string")
- [generate a URI safe base64 encoded string

  ```
  safe_b64encode()
  ```](#safe_b64encode "safe_b64encode :: generate a URI safe base64 encoded string")
- [compare two strings in a timing-insensitive way to prevent time-based attacks

  ```
  secure_compare()
  ```](#secure_compare "secure_compare :: compare two strings in a timing-insensitive way to prevent time-based attacks")
- [Split a key (using HKDF-BLAKE2b instead of HKDF-HMAC-\*)

  ```
  split_keys()
  ```](#split_keys "split_keys :: Split a key (using HKDF-BLAKE2b instead of HKDF-HMAC-*)")
- [Split a message string into an array (assigned to variables via list()).

  ```
  split_message()
  ```](#split_message "split_message :: Split a message string into an array (assigned to variables via list()).")
- [validate\_hmac()

  ```
  validate_hmac()
  ```](#validate_hmac "validate_hmac :: ")
- [Verify a Message Authentication Code (MAC) of a message, with a shared
  key.

  ```
  verify_mac()
  ```](#verify_mac "verify_mac :: Verify a Message Authentication Code (MAC) of a message, with a shared
  key.")
- Properties
- » Protected
- [Defined Crypto instances

  ```
  $_instances
  ```](#%24_instances "$_instances :: Defined Crypto instances")
- [Crypto configuration

  ```
  $config
  ```](#%24config "$config :: Crypto configuration")
- [Crypto object used to encrypt/decrypt

  ```
  $crypter
  ```](#%24crypter "$crypter :: Crypto object used to encrypt/decrypt")
- [Crypto default configuration

  ```
  $defaults
  ```](#%24defaults "$defaults :: Crypto default configuration")
- [Hash object used to generate hashes

  ```
  $hasher
  ```](#%24hasher "$hasher :: Hash object used to generate hashes")

Sodium encryption/decryption code based on HaLite from ParagonIE

Copyright (c) 2016 - 2018 Paragon Initiative Enterprises.
Copyright (c) 2014 Steve "Sc00bz" Thomas (steve at tobtu dot com)

### Methods

## capture calls to normal methods

```
__call(mixed $method, array $args) : mixed
```

### Parameters

#### $method

`mixed`

#### $args

`array`

The arguments will passed to $method.

### Exceptions

|  |  |
| --- | --- |
| `\ErrorException` |  |

### Returns

`mixed`return value of $method.

## capture static calls to methods

```
__callstatic(mixed $method, array $args) : mixed
```

### Parameters

#### $method

`mixed`

#### $args

`array`

The arguments will passed to $method.

### Returns

`mixed`return value of $method.

## Class constructor

```
__construct(array $config) 
```

### Parameters

#### $config

`array`

## initialisation and auto configuration

```
_init() 
```

## forge

```
forge(string $name, array $config) : \Crypt
```

create a new named instance

### Parameters

#### $name

`string`

instance name

#### $config

`array`

optional runtime configuration

### Returns

`\Crypt`

## Return a specific named instance

```
instance(string $name) : mixed
```

### Parameters

#### $name

`string`

instance name

### Returns

`mixed`Crypt if the instance exists, false if not

## Calculate a MAC.

```
calculate_mac(string $message, $auth_key) : string
```

This is used internally.

### Parameters

#### $message

`string`

#### $auth\_key

### Returns

`string`

## decrypt a string value, optionally with a custom key

```
decode(string $value, string | bool $key, void $keylength) : string
```

|  |  |
| --- | --- |
| access | public |

### Parameters

#### $value

`string`

value to decrypt

#### $key

`string``bool`

optional custom key to be used for this encryption

#### $keylength

`void`

no longer used

### Returns

`string`encrypted value

## encrypt a string value, optionally with a custom key

```
encode(string $value, string | bool $key, void $keylength) : string
```

### Parameters

#### $value

`string`

value to encrypt

#### $key

`string``bool`

optional custom key to be used for this encryption

#### $keylength

`void`

no longer used

### Returns

`string`encrypted value

## Use a derivative of HKDF to derive multiple keys from one.

```
hkdfBlake2b(string $ikm, int $length, string $info, string $salt) : string
```

http://tools.ietf.org/html/rfc5869

This is a variant from hash\_hkdf() and instead uses BLAKE2b provided by
libsodium.

Important: instead of a true HKDF (from HMAC) construct, this uses the
crypto\_generichash() key parameter. This is *probably* okay.

### Parameters

#### $ikm

`string`

Initial Keying Material

#### $length

`int`

How many bytes?

#### $info

`string`

What sort of key are we deriving?

#### $salt

`string`

### Returns

`string`

## decrypt a string value, optionally with a custom key

```
legacy_decode(string $value, string | bool $key, int | bool $keylength) : string
```

|  |  |
| --- | --- |
| access | public |

### Parameters

#### $value

`string`

value to decrypt

#### $key

`string``bool`

optional custom key to be used for this encryption

#### $keylength

`int``bool`

optional key length

### Returns

`string`encrypted value

## Wrapper for sodium\_memzero, it's actually not possible to zero memory buffers in PHP.

```
memzero(string | null $var) : void
```

You need the native library for that.

### Parameters

#### $var

`string``null`

## Wrapper around SODIUM\_CRypto\_generichash()

```
raw_keyed_hash(string $input, string $key, int $length) : string
```

Expects a key (binary string).
Returns raw binary.

### Parameters

#### $input

`string`

#### $key

`string`

#### $length

`int`

### Returns

`string`

## decode a URI safe base64 encoded string

```
safe_b64decode(string $value) : string
```

### Parameters

#### $value

`string`

### Returns

`string`

## generate a URI safe base64 encoded string

```
safe_b64encode(string $value) : string
```

### Parameters

#### $value

`string`

### Returns

`string`

## compare two strings in a timing-insensitive way to prevent time-based attacks

```
secure_compare(string $a, string $b) : bool
```

### Parameters

#### $a

`string`

#### $b

`string`

### Returns

`bool`

## Split a key (using HKDF-BLAKE2b instead of HKDF-HMAC-\*)

```
split_keys(string $key, string $salt) : string[]
```

### Parameters

#### $key

`string`

#### $salt

`string`

### Returns

`string[]`

## Split a message string into an array (assigned to variables via list()).

```
split_message($message) : \Fuel\Core\array<int,
```

Should return exactly 6 elements.

### Parameters

#### $message

### Returns

`\Fuel\Core\array<int,`mixed>

## validate\_hmac()

```
validate_hmac($value) 
```

### Parameters

#### $value

## Verify a Message Authentication Code (MAC) of a message, with a shared key.

```
verify_mac(string $mac, string $message, $auth_key) : bool
```

### Parameters

#### $mac

`string`

Message Authentication Code

#### $message

`string`

The message to verify

#### $auth\_key

### Returns

`bool`

### Properties

## Defined Crypto instances

```
$_instances : array
```

## Crypto configuration

```
$config : array
```

## Crypto object used to encrypt/decrypt

```
$crypter : object
```

## Crypto default configuration

```
$defaults : array
```

## Hash object used to generate hashes

```
$hasher : object
```

[Hosting sponsored by Exite BV](http://exite.eu)

© Copyright 2010-2012 fuelphp.com

- [![](/addons/shared_addons/themes/fuel/img/socials/tw-icon.png)](http://twitter.com/fuelphp)
- [![](/addons/shared_addons/themes/fuel/img/socials/fb-icon.png)](http://www.facebook.com/pages/FuelPHP/120778634657454)
- [![](/addons/shared_addons/themes/fuel/img/socials/rss-icon.png)](https://www.fuelphp.com/blogs/rss)
