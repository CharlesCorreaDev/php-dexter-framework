# Joomla! CMS 2.5 API » \JCryptCipher

> **Fonte / Source:** https://api.joomla.org/cms-2.5/classes/JCryptCipher.html

---

# JCryptCipher

JCrypt cipher interface.

|  |  |
| --- | --- |
| package | Joomla.Platform |
| subpackage | Crypt |
| since | 12.1 |

## Methods

### decrypt

Method to decrypt a data string.

```
decrypt(string $data, \JCryptKey $key) : string
```

|  |  |
| --- | --- |
| since | 12.1 |

#### Arguments

$data
:   `string`The encrypted string to decrypt.

$key
:   `\JCryptKey`The key[/pair] object to use for decryption.

#### Response

`string`The decrypted data string.

### encrypt

Method to encrypt a data string.

```
encrypt(string $data, \JCryptKey $key) : string
```

|  |  |
| --- | --- |
| since | 12.1 |

#### Arguments

$data
:   `string`The data string to encrypt.

$key
:   `\JCryptKey`The key[/pair] object to use for encryption.

#### Response

`string`The encrypted data string.

### generateKey

Method to generate a new encryption key[/pair] object.

```
generateKey(array $options = array()) : \JCryptKey
```

|  |  |
| --- | --- |
| since | 12.1 |

#### Arguments

$options
:   `array`Key generation options.

#### Response

`\JCryptKey`
