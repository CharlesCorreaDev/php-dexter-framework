# Desabilita um objeto ouvinte de conexão de evento

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventlistener.disable.php

---

# EventListener::disable

(PECL event >= 1.2.6-beta)

EventListener::disable — Desabilita um objeto ouvinte de conexão de evento

### Descrição

public
function **EventListener::disable**(): [bool](language.types.boolean.md)

Desabilita um objeto ouvinte de conexão de evento.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventListener::enable()](eventlistener.enable.md) - Habilita um objeto ouvinte de conexão de evento

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
