# Retorna a base de eventos associada ao ouvinte de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventlistener.getbase.php

---

# EventListener::getBase

(PECL event >= 1.2.6-beta)

EventListener::getBase — Retorna a base de eventos associada ao ouvinte de eventos

### Descrição

public
function **EventListener::getBase**(): [void](language.types.void.md)

Retorna a base de eventos associada ao ouvinte de eventos.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna a base de eventos associada ao ouvinte de eventos.

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
