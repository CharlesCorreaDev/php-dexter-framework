# Retorna a base de eventos associada à conexão

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventhttpconnection.getbase.php

---

# EventHttpConnection::getBase

(PECL event >= 1.2.6-beta)

EventHttpConnection::getBase — Retorna a base de eventos associada à conexão

### Descrição

public
function **EventHttpConnection::getBase**(): [EventBase](class.eventbase.md)

Retorna a base de eventos associada à conexão.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Em caso de sucesso, retorna
[EventBase](class.eventbase.md)
objeto associado à conexão. Caso contrário, **`false`**.

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
