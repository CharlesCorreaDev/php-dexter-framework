# Novas Constantes Globais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration84.constants.php

---

## Novas Constantes Globais

### Núcleo do PHP

- **`PHP_OUTPUT_HANDLER_PROCESSED`**
- **`PHP_SBINDIR`**

### cURL

- **`CURL_HTTP_VERSION_3`**
- **`CURL_HTTP_VERSION_3ONLY`**
- **`CURLOPT_TCP_KEEPCNT`**
- **`CURLOPT_PREREQFUNCTION`**
- **`CURL_PREREQFUNC_OK`**
- **`CURL_PREREQFUNC_ABORT`**
- **`CURLOPT_SERVER_RESPONSE_TIMEOUT`**
- **`CURLOPT_DEBUGFUNCTION`**
- **`CURLINFO_TEXT`**
- **`CURLINFO_HEADER_IN`**
- **`CURLINFO_DATA_IN`**
- **`CURLINFO_DATA_OUT`**
- **`CURLINFO_SSL_DATA_OUT`**
- **`CURLINFO_SSL_DATA_IN`**
- **`CURLINFO_POSTTRANSFER_TIME_T`**

### Intl

- **`PATTERN`**
  ([IntlDateFormatter](class.intldateformatter.md))
- **`PROPERTY_IDS_UNARY_OPERATOR`**
  ([IntlChar](class.intlchar.md))
- **`PROPERTY_ID_COMPAT_MATH_START`**
- **`PROPERTY_ID_COMPAT_MATH_CONTINUE`**

### LDAP

- **`LDAP_OPT_X_TLS_PROTOCOL_MAX`**
- **`LDAP_OPT_X_TLS_PROTOCOL_TLS1_3`**

### libxml

- **`LIBXML_RECOVER`**
- **`LIBXML_NO_XXE`**.
  Usada junto com **`LIBXML_NOENT`**
  quando a substituição de entidade deve ser realizada,
  enquanto não permite o carregamento de entidade externa.
  Esta constante está disponível a partir da libxml2 2.13.

### MySQLi

- **`MYSQLI_TYPE_VECTOR`**

### OpenSSL

- **`X509_PURPOSE_OCSP_HELPER`**
- **`X509_PURPOSE_TIMESTAMP_SIGN`**

### PCNTL

- **`SIGCKPT`** (somente DragonFlyBSD)
- **`SIGCKPTEXIT`** (somente DragonFlyBSD)
- **`WEXITED`**
- **`WSTOPPED`**
- **`WNOWAIT`**
- **`P_ALL`**
- **`P_PID`**
- **`P_PGID`**
- **`P_PIDFD`** (somente Linux)
- **`P_UID`** (somente NetBSD/FreeBSD)
- **`P_GID`** (somente NetBSD/FreeBSD)
- **`P_SID`** (somente NetBSD/FreeBSD)
- **`P_JAILID`** (somente FreeBSD)

### PGSQL

- **`PGSQL_TUPLES_CHUNK`**

### POSIX

- **`POSIX_SC_CHILD_MAX`**
- **`POSIX_SC_CLK_TCK`**

### Sockets

As seguintes opções de soquete agora estão definidas se forem suportadas:

- **`SO_EXCLUSIVEADDRUSE`** (somente Windows)
- **`SOCK_CONN_DGRAM`** (somente NetBSD)
- **`SOCK_DCCP`** (somente NetBSD)
- **`TCP_SYNCNT`** (somente Linux)
- **`SO_EXCLBIND`** (somente Solaris/Illumos)
- **`SO_NOSIGPIPE`** (somente macOS e FreeBSD)
- **`SO_LINGER_SEC`** (somente macOS)
- **`IP_PORTRANGE`** (somente FreeBSD/NetBSD/OpenBSD)
- **`IP_PORTRANGE_DEFAULT`** (somente FreeBSD/NetBSD/OpenBSD)
- **`IP_PORTRANGE_HIGH`** (somente FreeBSD/NetBSD/OpenBSD)
- **`IP_PORTRANGE_LOW`** (somente FreeBSD/NetBSD/OpenBSD)
- **`SOCK_NONBLOCK`**
- **`SOCK_CLOEXEC`**
- **`SO_BINDTOIFINDEX`**

### Sodium

- **`SODIUM_CRYPTO_AEAD_AEGIS128L_KEYBYTES`**
- **`SODIUM_CRYPTO_AEAD_AEGIS128L_NSECBYTES`**
- **`SODIUM_CRYPTO_AEAD_AEGIS128L_NPUBBYTES`**
- **`SODIUM_CRYPTO_AEAD_AEGIS128L_ABYTES`**
- **`SODIUM_CRYPTO_AEAD_AEGIS256_KEYBYTES`**
- **`SODIUM_CRYPTO_AEAD_AEGIS256_NSECBYTES`**
- **`SODIUM_CRYPTO_AEAD_AEGIS256_NPUBBYTES`**
- **`SODIUM_CRYPTO_AEAD_AEGIS256_ABYTES`**

### Tokenizer

- **`T_PUBLIC_SET`**
- **`T_PROTECTED_SET`**
- **`T_PRIVATE_SET`**

### XML

- **`XML_OPTION_PARSE_HUGE`**
  que permite analisar entradas grandes com
  [xml\_parse()](function.xml-parse.md) e
  [xml\_parse\_into\_struct()](function.xml-parse-into-struct.md).

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
