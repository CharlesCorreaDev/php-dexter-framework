# Novas Constantes Globais

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration85.constants.php

---

## Novas Constantes Globais

### Núcleo

- **`PHP_BUILD_DATE`**
- **`PHP_BUILD_PROVIDER`**

### cURL

- **`CURLINFO_USED_PROXY`**
- **`CURLINFO_HTTPAUTH_USED`**
- **`CURLINFO_PROXYAUTH_USED`**
- **`CURLINFO_CONN_ID`**
- **`CURLINFO_QUEUE_TIME_T`**
- **`CURLOPT_INFILESIZE_LARGE`**
- **`CURLFOLLOW_ALL`**
- **`CURLFOLLOW_OBEYCODE`**
- **`CURLFOLLOW_FIRSTONLY`**

### Filter

- **`FILTER_THROW_ON_FAILURE`**

### Intl

- **`DECIMAL_COMPACT_SHORT`**
- **`DECIMAL_COMPACT_LONG`**

### OpenSSL

- **`OPENSSL_PKCS1_PSS_PADDING`**
- **`PKCS7_NOSMIMECAP`**
- **`PKCS7_CRLFEOL`**
- **`PKCS7_NOCRL`**
- **`PKCS7_NO_DUAL_CONTENT`**

### POSIX

- **`POSIX_SC_OPEN_MAX`**

### Sockets

- **`IPPROTO_ICMP`**
- **`IPPROTO_ICMPV6`**
- **`TCP_FUNCTION_BLK`** (somente FreeBSD)
- **`TCP_FUNCTION_ALIAS`** (somente FreeBSD)
- **`TCP_REUSPORT_LB_NUMA`** (somente FreeBSD)
- **`TCP_REUSPORT_LB_NUMA_NODOM`** (somente FreeBSD)
- **`TCP_REUSPORT_LB_NUMA_CURDOM`** (somente FreeBSD)
- **`TCP_BBR_ALGORITHM`** (somente FreeBSD)
- **`AF_PACKET`** (somente Linux)
- **`IP_BINDANY`** (somente FreeBSD/NetBSD/OpenBSD)
- **`SO_BUSY_POLL`** (somente Linux)
- **`UDP_SEGMENT`** (somente Linux)
- **`SHUT_RD`**
- **`SHUT_WR`**
- **`SHUT_RDWR`**

### Tokenizer

- **`T_VOID_CAST`**
- **`T_PIPE`**

### Padrão

- **`IMAGETYPE_HEIF`**
- **`IMAGETYPE_SVG`**
  quando a libxml estiver carregada.

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
