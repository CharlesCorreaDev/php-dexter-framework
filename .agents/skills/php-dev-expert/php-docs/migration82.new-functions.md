# Novas Funções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration82.new-functions.php

---

## Novas Funções

### cURL

- [curl\_upkeep()](function.curl_upkeep.md)

### IMAP

- [imap\_is\_open()](function.imap-is-open.md) (desde o PHP 8.2.1)

### MySQLi

- [mysqli\_execute\_query()](mysqli.execute-query.md)

### ODBC

- [odbc\_connection\_string\_is\_quoted()](function.odbc-connection-string-is-quoted.md)
- [odbc\_connection\_string\_should\_quote()](function.odbc-connection-string-should-quote.md)
- [odbc\_connection\_string\_quote()](function.odbc-connection-string-quote.md)

### OpenSSL

- [openssl\_cipher\_key\_length()](function.openssl-cipher-key-length.md)

### Reflexão

- [ReflectionFunction::isAnonymous()](reflectionfunction.isanonymous.md)
- [ReflectionMethod::hasPrototype()](reflectionmethod.hasprototype.md)

### Sodium

#### XChaCha20

- [sodium\_crypto\_stream\_xchacha20\_xor\_ic()](function.sodium-crypto-stream-xchacha20-xor-ic.md)

### Padrão

- [memory\_reset\_peak\_usage()](function.memory-reset-peak-usage.md)
- [ini\_parse\_quantity()](function.ini-parse-quantity.md)

### XML

- [libxml\_get\_external\_entity\_loader()](function.libxml-get-external-entity-loader.md)

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
