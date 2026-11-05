# Retorna o erro OpenSSL mais recente relatado no evento de buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbufferevent.sslerror.php

---

# EventBufferEvent::sslError

(PECL event >= 1.2.6-beta)

EventBufferEvent::sslError — Retorna o erro OpenSSL mais recente relatado no evento de buffer

### Descrição

public
function **EventBufferEvent::sslError**(): [string](language.types.string.md)

Retorna o erro OpenSSL mais recente relatado no evento de buffer.

> **Nota**:
>
> Esta função está disponível somente se
> `Event`
> for compilado com suporte OpenSSL.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a string de erro OpenSSL relatada no evento de buffer, ou **`false`**, se
não houver mais erros para retornar.

### Examples

**Exemplo #1
Exemplo de **EventBufferEvent::sslError()****

```
<?php
// Esta função de retorno é chamada quando algum evento ocorre no observador de eventos,
// por exemplo, conexão fechada ou ocorreu um erro
function ssl_event_cb($bev, $events, $ctx) {
    if ($events & EventBufferEvent::ERROR) {
        // Busca erros da pilha de erros SSL
        while ($err = $bev->sslError()) {
            fprintf(STDERR, "Erro Bufferevent %s.\n", $err);
        }
    }

    if ($events & (EventBufferEvent::EOF | EventBufferEvent::ERROR)) {
        $bev->free();
    }
}
?>
```

### Veja também

- [EventBufferEvent::sslRenegotiate()](eventbufferevent.sslrenegotiate.md) - Solicita a um evento de buffer que inicie a renegociação SSL

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
