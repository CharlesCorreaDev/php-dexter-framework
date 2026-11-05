# Libera a trava adquirida por EventBuffer::lock

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.unlock.php

---

# EventBuffer::unlock

(PECL event >= 1.2.6-beta)

EventBuffer::unlock — Libera a trava adquirida por EventBuffer::lock

### Descrição

public
function **EventBuffer::unlock**(): [bool](language.types.boolean.md)

Libera a trava adquirida por
[EventBuffer::lock()](eventbuffer.lock.md).

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventBuffer::lock()](eventbuffer.lock.md) - Adquire uma trava no buffer

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
