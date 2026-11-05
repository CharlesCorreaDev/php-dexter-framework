# Novas Funções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration73.new-functions.php

---

## Novas Funções

### Núcleo do PHP

- [array\_key\_first()](function.array-key-first.md)
- [array\_key\_last()](function.array-key-last.md)
- [gc\_status()](function.gc-status.md)
- [hrtime()](function.hrtime.md)
- [is\_countable()](function.is-countable.md)
- [net\_get\_interfaces()](function.net-get-interfaces.md)

### FastCGI Process Manager

- [fpm\_get\_status()](function.fpm-get-status.md)

### Data e hora

- [DateTime::createFromImmutable()](datetime.createfromimmutable.md)

### GNU Multiple Precision

- [gmp\_binomial()](function.gmp-binomial.md)
- [gmp\_kronecker()](function.gmp-kronecker.md)
- [gmp\_lcm()](function.gmp-lcm.md)
- [gmp\_perfect\_power()](function.gmp-perfect-power.md)

### Funções de Internacionalização

- [Normalizer::getRawDecomposition()](normalizer.getrawdecomposition.md)
- [normalizer\_get\_raw\_decomposition()](normalizer.getrawdecomposition.md)
- [Spoofchecker::setRestrictionLevel()](spoofchecker.setrestrictionlevel.md)

### Lightweight Directory Access Protocol

- [ldap\_add\_ext()](function.ldap-add-ext.md)
- [ldap\_bind\_ext()](function.ldap-bind-ext.md)
- [ldap\_delete\_ext()](function.ldap-delete-ext.md)
- [ldap\_exop\_refresh()](function.ldap-exop-refresh.md)
- [ldap\_mod\_add\_ext()](function.ldap-mod_add-ext.md)
- [ldap\_mod\_replace\_ext()](function.ldap-mod_replace-ext.md)
- [ldap\_mod\_del\_ext()](function.ldap-mod_del-ext.md)
- [ldap\_rename\_ext()](function.ldap-rename-ext.md)

### OpenSSL

- [openssl\_pkey\_derive()](function.openssl-pkey-derive.md)

### Sockets

- [socket\_wsaprotocol\_info\_export()](function.socket-wsaprotocol-info-export.md)
- [socket\_wsaprotocol\_info\_import()](function.socket-wsaprotocol-info-import.md)
- [socket\_wsaprotocol\_info\_release()](function.socket-wsaprotocol-info-release.md)

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
