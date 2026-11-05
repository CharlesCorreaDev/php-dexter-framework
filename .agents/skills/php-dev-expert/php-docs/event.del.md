# Torna o evento não pendente

> **Fonte / Source:** https://www.php.net/manual/pt_BR/event.del.php

---

# Event::del

(PECL event >= 1.2.6-beta)

Event::del — Torna o evento não pendente

### Descrição

public
function **Event::del**(): [bool](language.types.boolean.md)

Remove um evento do conjunto de eventos monitorados, ou seja,
torna-o não pendente.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [Event::add()](event.add.md) - Torna o evento pendente

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
