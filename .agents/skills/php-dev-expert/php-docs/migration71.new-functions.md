# Novas funções

> **Fonte / Source:** https://www.php.net/manual/pt_BR/migration71.new-functions.php

---

## Novas funções

### Núcleo do PHP

- [sapi\_windows\_cp\_get()](function.sapi-windows-cp-get.md)
- [sapi\_windows\_cp\_set()](function.sapi-windows-cp-set.md)
- [sapi\_windows\_cp\_conv()](function.sapi-windows-cp-conv.md)
- [sapi\_windows\_cp\_is\_utf8()](function.sapi-windows-cp-is-utf8.md)

### [Funções Anônimas](class.closure.md)

- [Closure::fromCallable()](closure.fromcallable.md)

### [CURL](book.curl.md)

- [curl\_multi\_errno()](function.curl-multi-errno.md)
- [curl\_share\_errno()](function.curl-share-errno.md)
- [curl\_share\_strerror()](function.curl-share-strerror.md)

### [OpenSSL](book.openssl.md)

- [openssl\_get\_curve\_names()](function.openssl-get-curve-names.md)

### [Sessões](book.session.md)

- [session\_create\_id()](function.session-create-id.md)
- [session\_gc()](function.session-gc.md)

### [SPL](book.spl.md)

- [is\_iterable()](function.is-iterable.md)

### [PCNTL](book.pcntl.md)

- [pcntl\_async\_signals()](function.pcntl-async-signals.md)
- [pcntl\_signal\_get\_handler()](function.pcntl-signal-get-handler.md)

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
