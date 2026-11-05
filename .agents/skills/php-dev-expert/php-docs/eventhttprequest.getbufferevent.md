# Retorna o objeto EventBufferEvent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.getbufferevent.php

---

# EventHttpRequest::getBufferEvent

(PECL event >= 1.8.0)

EventHttpRequest::getBufferEvent — Retorna o objeto EventBufferEvent

### Descrição

public
function **EventHttpRequest::getBufferEvent**(): [EventBufferEvent](class.eventbufferevent.md)

Retorna o objeto
[EventBufferEvent](class.eventbufferevent.md)
que representa o evento de buffer que a conexão está usando.

**Aviso**

O contador de referência do objeto retornado será incrementado em um para
proteger estruturas internas contra destruição prematura quando o método
for chamado de uma função de retorno do usuário. Então o
objeto [EventBufferEvent](class.eventbufferevent.md) deve ser liberado explicitamente
com o método [EventBufferEvent::free()](eventbufferevent.free.md).
Caso contrário, a memória vazará.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um
objeto
[EventBufferEvent](class.eventbufferevent.md).

### Veja também

- [EventHttpRequest::getConnection()](eventhttprequest.getconnection.md) - Retorna objeto EventHttpConnection

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
