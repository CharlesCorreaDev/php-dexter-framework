# Novas funções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration56.new-functions.php

---

## Novas funções

### [Data e Horário](book.datetime.md)

- [DateTimeImmutable::createFromMutable()](datetimeimmutable.createfrommutable.md)

### [GMP](book.gmp.md)

- [gmp\_root()](function.gmp-root.md)
- [gmp\_rootrem()](function.gmp-rootrem.md)

### [Hash](book.hash.md)

- [hash\_equals()](function.hash-equals.md)

### [LDAP](book.ldap.md)

- [ldap\_escape()](function.ldap-escape.md)
- [ldap\_modify\_batch()](function.ldap-modify-batch.md)

### [MySQLi](book.mysqli.md)

- [mysqli\_get\_links\_stats()](function.mysqli-get-links-stats.md)

### [OCI8](book.oci8.md)

- [oci\_get\_implicit\_resultset()](function.oci-get-implicit-resultset.md)

### [OpenSSL](book.openssl.md)

- [openssl\_get\_cert\_locations()](function.openssl-get-cert-locations.md)
- [openssl\_x509\_fingerprint()](function.openssl-x509-fingerprint.md)
- [openssl\_spki\_new()](function.openssl-spki-new.md)
- [openssl\_spki\_verify()](function.openssl-spki-verify.md)
- [openssl\_spki\_export\_challenge()](function.openssl-spki-export-challenge.md)
- [openssl\_spki\_export()](function.openssl-spki-export.md)

### [PostgreSQL](book.pgsql.md)

- [pg\_connect\_poll()](function.pg-connect-poll.md)
- [pg\_consume\_input()](function.pg-consume-input.md)
- [pg\_flush()](function.pg-flush.md)
- [pg\_socket()](function.pg-socket.md)

### [PDO\_PGSQL](ref.pdo-pgsql.md)

- [PDO::pgsqlGetNotify()](pdo.pgsqlgetnotify.md)
- [PDO::pgsqlGetPid()](pdo.pgsqlgetpid.md)

### [Session](book.session.md)

- [session\_abort()](function.session-abort.md)
- [session\_reset()](function.session-reset.md)

### [Zip](book.zip.md)

- [ZipArchive::setPassword()](ziparchive.setpassword.md)

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
