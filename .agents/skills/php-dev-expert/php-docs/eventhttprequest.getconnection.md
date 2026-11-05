# Retorna objeto EventHttpConnection

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttprequest.getconnection.php

---

# EventHttpRequest::getConnection

(PECL event >= 1.8.0)

EventHttpRequest::getConnection — Retorna objeto EventHttpConnection

### Descrição

public
function [EventHttpRequest::closeConnection](eventhttprequest.closeconnection.md)(): [EventHttpConnection](class.eventhttpconnection.md)

Retorna um objeto
[EventHttpConnection](class.eventhttpconnection.md)
que representa a conexão HTTP associada à requisição.

**Aviso**

A API Libevent permite que objetos de requisição HTTP não sejam vinculados a nenhuma conexão HTTP.
Portanto, não se pode associar de forma inequívoca
[EventHttpRequest](class.eventhttprequest.md)
com
[EventHttpConnection](class.eventhttpconnection.md).
Assim, constrói-se o objeto
[EventHttpConnection](class.eventhttpconnection.md)
em tempo real. Não tendo informações sobre a base do evento, a base DNS
e a função de retorno de fechamento da conexão, esses campos são apenas deixados sem definição.

O método
**EventHttpRequest::getConnection()**
geralmente é útil quando precisamos configurar um retorno de chamada no fechamento da conexão.
Veja [EventHttpConnection::setCloseCallback()](eventhttpconnection.setclosecallback.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um
objeto
[EventHttpConnection](class.eventhttpconnection.md).

### Veja também

- [EventHttpConnection::setCloseCallback()](eventhttpconnection.setclosecallback.md) - Define função de retorno para o fechamento da conexão
- [EventHttpRequest::getBufferEvent()](eventhttprequest.getbufferevent.md) - Retorna o objeto EventBufferEvent

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
