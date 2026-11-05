# New Functions

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration86.new-functions.php

---

## New Functions

### Core

- [clamp()](function.clamp.md) returns the given value if in range, else
  returns the nearest bound.
- **stream\_last\_errors()**
- **stream\_clear\_errors()**
- **stream\_socket\_get\_crypto\_status()**

### GMP

- **gmp\_powm\_sec()**
- **gmp\_prevprime()**

### Intl

- **grapheme\_strrev()**
- **IntlDatePatternGenerator::getSkeleton()**
- **IntlDatePatternGenerator::getBaseSkeleton()**
- **Locale::getDisplayKeyword()**
- **locale\_get\_display\_keyword()**
- **Locale::getDisplayKeywordValue()**
- **locale\_get\_display\_keyword\_value()**
- **SpoofChecker::areBidiConfusable()**
- **SpoofChecker::getBidiSkeleton()**
- **SpoofChecker::getSkeleton()**

### MySQLi

- [mysqli::quote\_string()](mysqli.quote-string.md)
- [mysqli\_quote\_string()](mysqli.quote-string.md)

### Reflection

- **ReflectionAttribute::inNamespace()**
- **ReflectionAttribute::getNamespaceName()**
- **ReflectionAttribute::getShortName()**
- **ReflectionConstant::inNamespace()**
- **ReflectionParameter::getDocComment()**
- **ReflectionProperty::isReadable()**
- **ReflectionProperty::isWritable()**

### SNMP

- **snmp\_init\_mib()**
- **snmp\_set\_mib\_option()**
- **snmp\_set\_output\_option()**
- **snmp\_set\_string\_output\_format()**
- **SNMP::setOidOutputFormat()**
- **SNMP::setStringOutputFormat()**

### Sodium

- **sodium\_crypto\_ipcrypt\_keygen()**
- **sodium\_crypto\_ipcrypt\_encrypt()**
- **sodium\_crypto\_ipcrypt\_decrypt()**
- **sodium\_crypto\_ipcrypt\_nd\_keygen()**
- **sodium\_crypto\_ipcrypt\_nd\_encrypt()**
- **sodium\_crypto\_ipcrypt\_nd\_decrypt()**
- **sodium\_crypto\_ipcrypt\_ndx\_keygen()**
- **sodium\_crypto\_ipcrypt\_ndx\_encrypt()**
- **sodium\_crypto\_ipcrypt\_ndx\_decrypt()**
- **sodium\_crypto\_ipcrypt\_pfx\_keygen()**
- **sodium\_crypto\_ipcrypt\_pfx\_encrypt()**
- **sodium\_crypto\_ipcrypt\_pfx\_decrypt()**
- **sodium\_bin2ip()**
- **sodium\_ip2bin()**

The following functions expose the X-Wing KEM
(hybrid ML-KEM768+X25519, libsodium's recommended KEM).
They are available when PHP is built against libsodium 1.0.22 or later.

- **sodium\_crypto\_kem\_keypair()**
- **sodium\_crypto\_kem\_seed\_keypair()**
- **sodium\_crypto\_kem\_secretkey()**
- **sodium\_crypto\_kem\_publickey()**
- **sodium\_crypto\_kem\_enc()**
- **sodium\_crypto\_kem\_dec()**

The following functions expose the ML-KEM768 (FIPS 203)
KEM.
They are available when PHP is built against libsodium 1.0.22 or later.

- **sodium\_crypto\_kem\_mlkem768\_keypair()**
- **sodium\_crypto\_kem\_mlkem768\_seed\_keypair()**
- **sodium\_crypto\_kem\_mlkem768\_secretkey()**
- **sodium\_crypto\_kem\_mlkem768\_publickey()**
- **sodium\_crypto\_kem\_mlkem768\_enc()**
- **sodium\_crypto\_kem\_mlkem768\_dec()**

### URI

- **Uri\Rfc3986\Uri::getUriType()**
- **Uri\WhatWg\Url::isSpecialScheme()**
- **Uri\Rfc3986\Uri::getHostType()**
- **Uri\WhatWg\Url::getHostType()**
- **Uri\WhatWg\url\_percent\_encode()**

### Zip

- **ZipArchive::openString()**
- **ZipArchive::closeString()**

`↑` and `↓` to navigate •
`Enter` to select •
`Esc` to close • `/` to open

document.addEventListener("DOMContentLoaded", function() {
/\*{{{Search Modal\*/
const language = 'local';
initSearchModal();
initPHPSearch(language).then((searchCallback) => {
initSearchUI({language, searchCallback, limit: 30});
});
/\*}}}\*/
});
