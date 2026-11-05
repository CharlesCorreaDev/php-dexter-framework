# Crypt Configuration - Classes - FuelPHP Documentation

> **Fonte / Source:** https://www.fuelphp.com/docs/classes/crypt/config.html

---

## Crypt Class

The Crypt class allows encrypt or decrypt a string. The Crypt class is also used internally by for example the Fuel Sessions class.

Until version 1.8, Crypt used the encryption and hashing methods provided by the composer package PHPSecLib.
Currently, it uses Sodium, either internally in PHP 7.2+, using libsodium if available, or via software emulation through the sodium-compat composer package.
It's not dependent on external PHP modules being available, such as mcrypt.

Crypt encryption is backwards compatible. If you have data encrypted with PHPSeclib, it will detect this from the encrypted data, and decrypt using PHPSeclib using the old crypt keys.
When encrypting data, it will always use Sodium.

### Configuration

The Crypt class is configured through the **app/config/crypt.php** configuration file. It will be generated and populated with random values when you first use the Crypt class or if one of the required configuration values is missing.

Note that this will require write access to app/config/crypt.php! If this is not possible, Crypt terminates with an error, while displaying the contents that should be written to the config file. You need to copy and paste this into the file yourself before you can continue.

The following configuration settings can be defined:

| Param | Type | Default | Description |
| --- | --- | --- | --- |
| legacy.crypto\_key | string | n/a | **PHPSecLib**: Random string used as encryption key in the encryption routines. Make sure you set this to something unique and random! |
| legacy.crypto\_iv | string | n/a | **PHPSecLib**: Random string used as encryption initialisation vector in the encryption routines. Make sure you set this to something unique and random! |
| legacy.crypto\_hmac | string | n/a | **PHPSecLib**: Random string used in the Hash-based Message Authentication Code (HMAC) routines. Make sure you set this to something unique and random! |
| sodium.cipherkey | string | n/a | **Sodium**: Random hexadecimal value used in the Hash-based Message Authentication Code (HMAC) routines. Make sure you set this to something unique and random! |

If you want to assign the legacy keys manually, make sure they are base64\_encoded using the **`safe_b64encode()`** method from the Crypt class, and have a string length that is a multiple of 4!

If you want to assign the **cipherkey**, use **`sodium_bin2hex(random_bytes(SODIUM_CRYPTO_STREAM_KEYBYTES)))`** to create a sufficiently random key in the correct format!

If you have a crypt configuration file with legacy keys from a pre-1.8.1 version of the framework, it will automatically be converted to the new format, and a cipherkey is randomly generated, upon first use of the new Sodium powered Crypt class.
