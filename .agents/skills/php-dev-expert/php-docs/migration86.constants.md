# New Global Constants

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration86.constants.php

---

## New Global Constants

### Core

- **`ARRAY_FILTER_USE_VALUE`**
- **`STREAM_CRYPTO_STATUS_NONE`**
- **`STREAM_CRYPTO_STATUS_WANT_READ`**
- **`STREAM_CRYPTO_STATUS_WANT_WRITE`**

### cURL

- **`CURLINFO_SIZE_DELIVERED`** (libcurl >= 8.20.0)
- **`CURLOPT_SEEKFUNCTION`**
- **`CURL_SEEKFUNC_OK`**
- **`CURL_SEEKFUNC_FAIL`**
- **`CURL_SEEKFUNC_CANTSEEK`**
- **`CURL_READFUNC_ABORT`**

### MySQLi

- **`MYSQLI_OPT_COMPRESS`**

### OpenSSL

- **`OPENSSL_RSA_PSS_SALTLEN_DIGEST`**
- **`OPENSSL_RSA_PSS_SALTLEN_AUTO`**
- **`OPENSSL_RSA_PSS_SALTLEN_MAX`**

### Sockets

- **`TCP_USER_TIMEOUT`** (Linux only)
- **`AF_UNSPEC`**
- **`EAI_BADFLAGS`**
- **`EAI_NONAME`**
- **`EAI_AGAIN`**
- **`EAI_FAIL`**
- **`EAI_NODATA`**
- **`EAI_FAMILY`**
- **`EAI_SOCKTYPE`**
- **`EAI_SERVICE`**
- **`EAI_ADDRFAMILY`**
- **`EAI_SYSTEM`**
- **`EAI_OVERFLOW`**
- **`EAI_INPROGRESS`**
- **`EAI_CANCELED`**
- **`EAI_NOTCANCELED`**
- **`EAI_ALLDONE`**
- **`EAI_INTR`**
- **`EAI_IDN_ENCODE`**
- **`SO_DETACH_REUSEPORT_BPF`** (Linux only)

### Sodium

- **`SODIUM_CRYPTO_IPCRYPT_BYTES`**
- **`SODIUM_CRYPTO_IPCRYPT_KEYBYTES`**
- **`SODIUM_CRYPTO_IPCRYPT_ND_KEYBYTES`**
- **`SODIUM_CRYPTO_IPCRYPT_ND_TWEAKBYTES`**
- **`SODIUM_CRYPTO_IPCRYPT_ND_INPUTBYTES`**
- **`SODIUM_CRYPTO_IPCRYPT_ND_OUTPUTBYTES`**
- **`SODIUM_CRYPTO_IPCRYPT_NDX_KEYBYTES`**
- **`SODIUM_CRYPTO_IPCRYPT_NDX_TWEAKBYTES`**
- **`SODIUM_CRYPTO_IPCRYPT_NDX_INPUTBYTES`**
- **`SODIUM_CRYPTO_IPCRYPT_NDX_OUTPUTBYTES`**
- **`SODIUM_CRYPTO_IPCRYPT_PFX_KEYBYTES`**
- **`SODIUM_CRYPTO_IPCRYPT_PFX_BYTES`**
- **`SODIUM_CRYPTO_KEM_PUBLICKEYBYTES`** (libsodium >= 1.0.22)
- **`SODIUM_CRYPTO_KEM_SECRETKEYBYTES`** (libsodium >= 1.0.22)
- **`SODIUM_CRYPTO_KEM_CIPHERTEXTBYTES`** (libsodium >= 1.0.22)
- **`SODIUM_CRYPTO_KEM_SHAREDSECRETBYTES`** (libsodium >= 1.0.22)
- **`SODIUM_CRYPTO_KEM_SEEDBYTES`** (libsodium >= 1.0.22)
- **`SODIUM_CRYPTO_KEM_KEYPAIRBYTES`** (libsodium >= 1.0.22)
- **`SODIUM_CRYPTO_KEM_MLKEM768_PUBLICKEYBYTES`** (libsodium >= 1.0.22)
- **`SODIUM_CRYPTO_KEM_MLKEM768_SECRETKEYBYTES`** (libsodium >= 1.0.22)
- **`SODIUM_CRYPTO_KEM_MLKEM768_CIPHERTEXTBYTES`** (libsodium >= 1.0.22)
- **`SODIUM_CRYPTO_KEM_MLKEM768_SHAREDSECRETBYTES`** (libsodium >= 1.0.22)
- **`SODIUM_CRYPTO_KEM_MLKEM768_SEEDBYTES`** (libsodium >= 1.0.22)
- **`SODIUM_CRYPTO_KEM_MLKEM768_KEYPAIRBYTES`** (libsodium >= 1.0.22)

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
