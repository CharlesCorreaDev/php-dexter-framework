# Reativa chamadas que modificam um buffer de eventos

> **Fonte / Source:** https://www.php.net/manual/pt_BR/eventbuffer.unfreeze.php

---

# EventBuffer::unfreeze

(PECL event >= 1.2.6-beta)

EventBuffer::unfreeze — Reativa chamadas que modificam um buffer de eventos

### Descrição

public
function **EventBuffer::unfreeze**(
[bool](language.types.boolean.md) `$at_front`
): [bool](language.types.boolean.md)

Reativa chamadas que modificam um buffer de eventos.

### Parâmetros

`at_front`
:   Se deve habilitar eventos no início ou no final do buffer.

### Valor Retornado

Retorna **`true`** em caso de sucesso ou **`false`** em caso de falha.

### Veja também

- [EventBuffer::freeze()](eventbuffer.freeze.md) - Impede que chamadas que modificam um buffer de eventos sejam bem-sucedidas

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
