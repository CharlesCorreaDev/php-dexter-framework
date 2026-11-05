# Constrói um contexto OpenSSL para uso com classes Event

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventsslcontext.construct.php

---

# EventSslContext::\_\_construct

(PECL event >= 1.2.6-beta)

EventSslContext::\_\_construct — Constrói um contexto OpenSSL para uso com classes Event

### Descrição

public
function **EventSslContext::\_\_construct**(
[string](language.types.string.md) `$method`
, 
[string](language.types.string.md) `$options`
)

Cria contexto SSL que contém um ponteiro para
`SSL_CTX`
(consulte o manual do sistema).

### Parâmetros

`method`
:   Uma das
    [constantes `EventSslContext::*_METHOD`](class.eventsslcontext.md#eventsslcontext.constants).

`options`
:   Array associativo de opções de contexto SSL, uma das
    [constantes `EventSslContext::OPT_*`](class.eventsslcontext.md#eventsslcontext.constants).

### Examples

**Exemplo #1
Exemplo de **EventSslContext::\_\_construct()****

```
<?php
$ctx = new EventSslContext(EventSslContext::SSLv3_SERVER_METHOD, array(
    EventSslContext::OPT_LOCAL_CERT        => $local_cert,
    EventSslContext::OPT_LOCAL_PK          => $local_pk,
    EventSslContext::OPT_PASSPHRASE        => "echo server",
    EventSslContext::OPT_VERIFY_PEER       => true,
    EventSslContext::OPT_ALLOW_SELF_SIGNED => false,
));
?>
```

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
