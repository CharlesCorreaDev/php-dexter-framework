# Novas Constantes Globais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration81.constants.php

---

## Novas Constantes Globais

### cURL

- **`CURLOPT_DOH_URL`**
- **`CURLOPT_ISSUERCERT_BLOB`**
- **`CURLOPT_PROXY_ISSUERCERT`**
- **`CURLOPT_PROXY_ISSUERCERT_BLOB`**
- **`CURLOPT_PROXY_SSLCERT_BLOB`**
- **`CURLOPT_PROXY_SSLKEY_BLOB`**
- **`CURLOPT_SSLCERT_BLOB`**
- **`CURLOPT_SSLKEY_BLOB`**

### GD

- **`IMG_AVIF`**
- **`IMG_WEBP_LOSSLESS`**

### MySQLi

- **`MYSQLI_REFRESH_REPLICA`**

  Esta constante foi adicionada como uma substituta para
  **`MYSQLI_REFRESH_SLAVE`**,
  de acordo com uma mudança vinda do MySQL.
  A constante antiga ainda está disponível por motivos de compatibilidade
  com versões anteriores, mas pode ser descontinuada/removida no futuro.

### PCNTL

- **`PRIO_DARWIN_BG`**
- **`PRIO_DARWIN_THREAD`**

### POSIX

- **`POSIX_RLIMIT_KQUEUES`**
- **`POSIX_RLIMIT_NPTS`**

### Sockets

As seguintes opções de socket agora são definidas se forem suportadas:

- **`SO_ACCEPTFILTER`**
- **`SO_DONTTRUNC`**
- **`SO_WANTMORE`**
- **`SO_MARK`**
- **`TCP_DEFER_ACCEPT`**

### Sodium

- **`SODIUM_CRYPTO_STREAM_XCHACHA20_NONCEBYTES`**
- **`SODIUM_CRYPTO_STREAM_XCHACHA20_KEYBYTES`**
- **`SODIUM_CRYPTO_SCALARMULT_RISTRETTO255_BYTES`**
- **`SODIUM_CRYPTO_SCALARMULT_RISTRETTO255_SCALARBYTES`**
- **`SODIUM_CRYPTO_CORE_RISTRETTO255_BYTES`**
- **`SODIUM_CRYPTO_CORE_RISTRETTO255_HASHBYTES`**
- **`SODIUM_CRYPTO_CORE_RISTRETTO255_SCALARBYTES`**
- **`SODIUM_CRYPTO_CORE_RISTRETTO255_NONREDUCEDSCALARBYTES`**

### Standard

- **`IMAGETYPE_AVIF`**

### Tokenizer

- **`T_READONLY`**

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
