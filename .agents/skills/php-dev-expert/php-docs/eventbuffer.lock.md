# Adquire uma trava no buffer

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.lock.php

---

# EventBuffer::lock

(PECL event >= 1.2.6-beta)

EventBuffer::lock — Adquire uma trava no buffer

### Descrição

public
function **EventBuffer::lock**(): [void](language.types.void.md)

Adquire uma trava no buffer. Pode ser usado em par com
[EventBuffer::unlock()](eventbuffer.unlock.md)
para tornar um conjunto de operações atômico, ou seja, seguro para threads. Observe que não é
necessário bloquear buffers para operações
*individuais*.
Quando o bloqueio está habilitado (consulte
[EventBuffer::enableLocking()](eventbuffer.enablelocking.md)
), operações individuais em buffers de eventos já são atômicas.

### Parâmetros

Esta função não possui parâmetros.

### Valor Retornado

Nenhum valor é retornado.

### Veja também

- [EventBuffer::unlock()](eventbuffer.unlock.md) - Libera a trava adquirida por EventBuffer::lock

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
