# Retorna um array com nomes de métodos suportados nesta versão do Libevent

> **Fonte / Source:** https://www.php.net/manual/pt_BR/event.getsupportedmethods.php

---

# Event::getSupportedMethods

(PECL event >= 1.2.6-beta)

Event::getSupportedMethods — Retorna um array com nomes de métodos suportados nesta versão do Libevent

### Descrição

public
static
function **Event::getSupportedMethods**(): [array](language.types.array.md)

Retorna um array com os nomes dos métodos (backends) suportados nesta
versão do Libevent.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna um array.

### Veja também

- [EventConfig](class.eventconfig.md)

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
